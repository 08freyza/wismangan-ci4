<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use App\Models\CustomerModel;

class Auth extends BaseController
{
    public function __construct()
    {
        $this->CustomerModel = new CustomerModel();
    }

    public function login()
    {
        $data = [
            'title' => 'Login',
            'navbar_active' => 'Login',
            'script' => "<script src='" . base_url('frontend/assets/js/userMessage.js') . "'></script>",
            'validation' => \Config\Services::validation()
        ];
        return view('frontend/auth/login', $data);
    }

    public function login_process()
    {
        // Get data from form
        $emailOrUsername = $this->request->getVar('emailorusername');
        $password = $this->request->getVar('password');

        // Check username or email & password encrypted in the database
        // $encrypt_password = sha1($password);
        if (strpos($emailOrUsername, "@") !== false) {
            $data = $this->CustomerModel->where('email', $emailOrUsername)->first();
        } else {
            $data = $this->CustomerModel->where('username', $emailOrUsername)->first();
        }

        if ($data) {
            // Make session
            $dataSession = [
                'username' => $data['username'],
                'login_status' => TRUE
            ];
            session()->set($dataSession);

            return redirect()->to('/');
        } else {
            session()->setFlashdata('customer', 'wrongEmail');
            // Back to login page
            return redirect()->to('login');
        }
    }

    public function registration()
    {
        $data = [
            'title' => 'Registration',
            'navbar_active' => 'Registration'
        ];
        return view('frontend/auth/registration', $data);
    }


    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('login');
    }
}
