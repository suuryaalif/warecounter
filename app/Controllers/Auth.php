<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TokenModel;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function loginPage()
    {
        $data = [
            'title' => 'loginPage'
        ];
        return view('Auth/v_login', $data);
    }

    public function loginSubmit()
    {
        $users = new UserModel();
        $tokenSession =
            rand(1, 9999);
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
            'email' => $email
        ])->first();

        if ($dataUser) {
            //jika user ada
            if (password_verify($password, $dataUser['password'])) {
                //jika password benar
                if ($dataUser['activate'] == 2) {
                    // jika user aktif
                    if ($dataUser['role'] == 'admin') {
                        //jika user admin
                        session()->setFlashdata('success', 'your login now');
                        session()->set([
                            'username' => $dataUser['username'],
                            'full_name' => $dataUser['full_name'],
                            'role' => $dataUser['role'],
                            'is_active' => $dataUser['activate'],
                            'token' => $tokenSession,
                            'is_login' => true
                        ]);
                        return redirect()->to('admin/dashboard');
                    } else {
                        session()->setFlashdata('success', 'your login now');
                        session()->set([
                            'username' => $dataUser['username'],
                            'full_name' => $dataUser['full_name'],
                            'role' => $dataUser['role'],
                            'is_active' => $dataUser['activate'],
                            'token' => $tokenSession,
                            'is_login' => true
                        ]);
                        return redirect()->to('user/dashboard');
                    }
                } else {
                    session()->setFlashdata('Caution', 'your account has not been activate, please contact the administrator or check your email for activation');
                    return redirect()->back();
                }
            } else {
                session()->setFlashdata('error', 'your password denied');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'your email address was not registered');
            return redirect()->back();
        }
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
        $users = new UserModel();
        $tokens = new TokenModel();
        $tokenActivation = rand(1, 999999);
        $username = $this->request->getVar('username');

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
        $users->insert([
            'username' => $this->request->getVar('username'),
            'role' => 'user',
            'activate' => 1,
            'email' => $this->request->getVar('email'),
            'full_name' => $this->request->getVar('full_name'),
            'company_name' => $this->request->getVar('company_name'),
            'phone_no' => $this->request->getVar('phone_no'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
        ]);

        $tokens->insert([
            'username' => $this->request->getVar('username'),
            'counter' => $tokenActivation
        ]);

        session()->setFlashdata('success', 'Member Create Success, now check your email first', 'and login now');

        $url_activation = "http://localhost:8080/activatedaccount/" . $username . "/" . $tokenActivation;
        $full_name = $this->request->getVar('full_name');

        $emailTo = $this->request->getVar('email');
        $title = 'Welcome Member';
        $message = "<h1>Member Registration</h1>
        <br/>
        Dear " . $full_name . " <h4><i>Congratulation</i></h4>
        you have been registered to Warecounter Website Application, just one step to use your account please click below link to activation,
        " . $url_activation . "<br>if you have any trouble to login please contact our customer service number or reply this email.
        <br>
        Thank you<br><br><br>
        regards<br>
        warecounter admin<br><br>
        please visit us on www.warecounter.com or call our customer support +3939923993
        ";

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

    public function activateAccount($username, $tokenActivation)
    {
        $users = new UserModel();
        $token = new TokenModel();
        $dataToken = $token->where([
            'username' => $username
        ])->first();
        $dataUsers = $users->where([
            'username' => $username
        ])->first();

        if ($dataToken) {
            if ($dataToken['counter'] == $tokenActivation) {
                $users->update($dataUsers['id_user'], [
                    'activate' => 2
                ]);
                $data['title'] = 'activated';
                $token->delete($dataToken['id']);
                return view('Auth/v_activated', $data);
            }
            return redirect()->to('/');
        }
        return redirect()->to('/');
    }
}
