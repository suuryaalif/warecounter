<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CounterModel;

class Admin extends BaseController
{
    protected $counterModel;
    public function __construct()
    {
        $this->counterModel = new CounterModel();
        helper('text');
        $session = session();
    }

    public function dashboard()
    {
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

        return view('admin/v_dashboard', $data);
    }

    public function qrproc()
    {
        $qrcode = $this->request->getVar('barcode');
        $match = $this->counterModel->where(['qrcode' => $qrcode])->first();
        $id = $match['id_counter'];
        if ($match) {
            if ($match['status'] == 'menunggu') {
                $this->counterModel->procNext($id);
                session()->setFlashdata('success', 'barcode confirmed and proceed');
                return redirect()->back();
            } else {
                session()->setFlashdata('error', 'your code already used');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'your code not exist');
            return redirect()->back();
        }
    }



    public function logout()
    {
        session()->destroy();
        session()->setFlashdata('success', 'your logout now');
        return redirect()->to('authpage/login');
    }
}
