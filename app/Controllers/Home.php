<?php

namespace App\Controllers;


use App\Models\CounterModel;
use App\Libraries\Pdfgenerator;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Writer\ValidationException;

class Home extends BaseController
{

    protected $counterModel;

    public function __construct()
    {
        $this->counterModel = new CounterModel();
        helper('text');
        $session = session();
    }
    public function index()
    {
        session()->destroy();
        $allStatus = $this->counterModel->getAll($counterCode = null);
        $processStatus = $this->counterModel->nowCounter();
        $nextCount = $this->counterModel->nextCounter();
        if ($processStatus != null) {
            $nowCode = $processStatus['counter_code'];
            $nowTime = $processStatus['updated_at'];
        } else {
            $nowCode = 0;
            $nowTime = 0;
        }

        if ($nextCount != null) {
            $nextCode = $nextCount['counter_code'];
            $nextTime = $nextCount['updated_at'];
        } else {
            $nextCode = 0;
            $nextTime = 0;
        }

        $data = [
            'title' => 'dashboard',
            'counterlist' => $allStatus,
            'nextCode' => $nextCode,
            'nextTime' => $nextTime,
            'nowCode' => $nowCode,
            'nowTime' => $nowTime
        ];
        return view('Home/main-page', $data);
    }

    public function registCount_Page()
    {

        session()->destroy();
        $counterAutocode = $this->counterModel->generateCode();
        $forCounter = $counterAutocode['inputCountercode'];
        $forRecord = $counterAutocode['inputRecordcode'];
        $data = [
            'title' => 'counter|warecounter',
            'counter' => $forCounter,
            'record' => $forRecord
        ];

        return view('Home/regist-counter', $data);
    }

    public function saveCounter()
    {
        // need counter/string to validation
        $tokenCounter = rand(1, 9999);
        // validation form register counter form
        if (!$this->validate([
            //rule validation
            'shipper' => [
                'rules' => ['min_length[3]'],
                'errors' => [
                    'min_length' => 'shipper name too short'
                ]
            ],
            'driver_name' => [
                'rules' => ['alpha_space', 'min_length[3]'],
                'errors' => [
                    'alpha_space' => 'driver name may only contain alphabetical characters and spaces',
                    'min_length' => 'driver name too short'
                ]
            ],
            'driver_phone' => [
                'rules' => ['numeric', 'min_length[8]', 'max_length[15]'],
                'errors' => [
                    'numeric' => 'Phone number should be input by number',
                    'min_length' => 'Phone number too short',
                    'max_length' => 'Phone number too long'
                ]
            ],
            'pol_no' => [
                'rules' => ['max_length[10]', 'min_length[4]', 'alpha_numeric'],
                'errors' => [
                    'alpha_numeric' => 'police number only for alphabet & numeric',
                    'max_length' => 'police number too long, not as regulated',
                    'min_length' => 'police number too short, not as regulated'
                ]
            ]
        ])) {
            //throwback if isn"t valid
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        //if true!
        $counterCode = $this->request->getVar('counter_code');

        // qrcode
        $writer = new PngWriter();
        // Qr Key
        $qrkey = random_string('md5');
        // Create QR code
        $qrCode = QrCode::create($qrkey)
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->setSize(300)
            ->setMargin(10)
            ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->setForegroundColor(new Color(0, 0, 0))
            ->setBackgroundColor(new Color(255, 255, 255));

        // Create generic logo
        $logo = Logo::create('./assets/img/logo.png')
            ->setResizeToWidth(50);

        // Create generic label
        $label = Label::create('Counter QR')
            ->setTextColor(new Color(255, 0, 0));
        // Save it to a file
        $result = $writer->write($qrCode, $logo, $label);
        $qrfilename = 'qr' . $qrkey . '.png';
        $result->saveToFile('./assets/img/qr/' . $qrfilename);

        //inserting data
        $this->counterModel->insert([
            'counter_code' => $this->request->getVar('counter_code'),
            'record_code' => $this->request->getVar('record_code'),
            'do_no' => $this->request->getVar('do_no'),
            'shipper' => $this->request->getVar('shipper'),
            'driver_name' => $this->request->getVar('driver_name'),
            'driver_phone' => $this->request->getVar('driver_phone'),
            'pol_no' => $this->request->getVar('pol_no'),
            'status' => 'menunggu',
            'qrcode' => $qrkey,
            'qrfiles' => $qrfilename
        ]);

        //setting session token for validation page
        session()->set([
            'token' => $tokenCounter
        ]);
        //notification success with flash data
        session()->setFlashdata('success', 'Booking Success');
        session()->setFlashdata('caution', 'please screenshoot/take screen capture for this page to proof of booking or you can downloaded this with pdf formated just click pdf button');
        return redirect()->to('booking-result/' . $counterCode);
    }

    public function  bookingResult($counterCode)
    {
        //booking result for user screenshoot or download by pdf
        $tokens = session()->get('token');
        if ($tokens != null) {
            $data_counter = $this->counterModel->getAll($counterCode);
            $data = [
                'title' => 'booked',
                'bookingCounter' => $data_counter
            ];
            return view('Home/booked-view', $data);
        } else {
            session()->setFlashdata('warning', 'youre not registered/has registered');
            return redirect()->to('/');
        }
    }

    public function view_pdf($counterCode)
    {
        $dataBooking = $this->counterModel->getAll($counterCode);
        $Pdfgenerator = new Pdfgenerator();
        // title dari pdf
        $data = [
            'title_pdf' => 'TicketCounter|' . $counterCode,
            'dataBooking' => $dataBooking
        ];

        $html = view('home/pdfview-count', $data);
        // filename dari pdf ketika didownload
        $file_pdf = "ticketcount/" . $counterCode;
        // setting paper
        $paper = 'A5';
        //orientasi paper potrait / landscape
        $orientation = "portrait";
        $html = view('home/pdfview-count', $data);
        // run dompdf
        $Pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    }
}
