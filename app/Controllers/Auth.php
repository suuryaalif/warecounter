<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Auth extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function loginPage()
    {
        $data = [
            'title' => 'loginPage'
        ];
        return view('Auth/v_login', $data);
    }
    public function registerPage()
    {
        $data = [
            'title' => 'registerPage'
        ];
        return view('Auth/v_register', $data);
    }

    public function saveRegister()
    {
        if (!$this->validate([
            //rule validation
            'username' => [
                'rules' => ['min_length[3]', 'is_unique[users.username]'],
                'errors' => [
                    'min_length' => 'username too short',
                    'is_unique' => 'sorry, username has been registered'
                ]
            ],
            'email' => [
                'rules' => ['valid_email', 'is_unique[users.email]'],
                'errors' => [
                    'valid_email' => 'sorry, your email unvalid',
                    'is_unique' => 'sorry, email has been registered'
                ]
            ],
            'company_name' => [
                'rules' => ['min_length[3]'],
                'errors' => [
                    'min_length' => 'your company name is real? try again cause too short'
                ]
            ],
            'full_name' => [
                'rules' => ['min_length[3]', 'alpha_space'],
                'errors' => [
                    'min_length' => 'its too short name',
                    'alpha_space' => 'unvalid format name, please try again'
                ]
            ],
            'phone_no' => [
                'rules' => ['min_length[3]', 'max_length[18]', 'numeric'],
                'errors' => [
                    'min_length' => 'unvalid number length',
                    'max_length' => 'unvalid number length',
                    'numeric' => 'sorry, just input numeric format'
                ]
            ],
            'password' => [
                'rules' => ['min_length[6]'],
                'errors' => [
                    'min_length' => 'password too short'
                ]
            ],
            'password2' => [
                'rules' => ['matches[password]'],
                'errors' => [
                    'matches' => 'repeat password didnt match'
                ]
            ]

        ])) {
            //throwback if isn"t valid
            session()->setFlashdata('Caution', 'Your Member Registration Failed, please check your fill');
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        //if true!
        //inserting data
        $this->userModel->insert([
            'username' => $this->request->getVar('username'),
            'role' => 'user',
            'activate' => 1,
            'email' => $this->request->getVar('email'),
            'full_name' => $this->request->getVar('full_name'),
            'company_name' => $this->request->getVar('company_name'),
            'phone_no' => $this->request->getVar('phone_no'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
        ]);

        session()->setFlashdata('success', 'Member Create Success, now check your email first', 'and login now');

        $username = $this->request->getVar('username');
        $emailTo = $this->request->getVar('email');
        $title = 'Welcome Member';
        $message = "<h1>Member Registration</h1>Dear " . $username . "please wait for activation from administration, we will let you now id admin has activate your account";

        $this->sendEmail($emailTo, $title, $message);

        return redirect()->back();
    }

    private function sendEmail($to, $title, $message)
    {
        $email = \Config\Services::email();

        $email->setFrom('warecs603@gmail.com', 'warecs603@gmail.com');
        $email->setTo($to);

        $email->setSubject($title);
        $email->setMessage($message);

        if (!$email->send()) {
            return false;
        } else {
            return true;
        }
    }
}
