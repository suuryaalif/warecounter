<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function dashboard()
    {
        return view('admin/view_dashboard');
    }

    public function logout()
    {
        session()->destroy();
        session()->setFlashdata('success', 'your logout now');
        return redirect()->to('authpage/login');
    }
}
