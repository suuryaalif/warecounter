<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard|Page'
        ];
        return view('User/v_dashboard', $data);
    }

    public function logout()
    {
        session()->destroy();
        session()->setFlashdata('success', 'your logout now');
        return redirect()->to('authpage/login');
    }
}
