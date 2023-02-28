<?php

namespace App\Controllers;

use App\Models\CounterModel;
use Codeigniter\Exceptions\PageNotFoundException;

class Home extends BaseController
{
    protected $counterModel;

    public function __construct()
    {
        $this->counterModel = new CounterModel();
    }
    public function index()
    {
        $allStatus = $this->counterModel->getAll();
        $processStatus = $this->counterModel->nowCounter();
        $nextCount = $this->counterModel->nextCounter();
        $nowCode = $processStatus['counter_code'];
        $nowTime = $processStatus['updated_at'];
        $nextCode = $nextCount['counter_code'];
        $nextTime = $nextCount['updated_at'];
        $data = [
            'title' => 'Warecounter|Web',
            'counterlist' => $allStatus,
            'nextCode' => $nextCode,
            'nextTime' => $nextTime,
            'nowCode' => $nowCode,
            'nowTime' => $nowTime
        ];

        // dd($data);
        return view('/Home/main-page.php', $data);
    }
}
