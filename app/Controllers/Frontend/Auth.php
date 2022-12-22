<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use App\Models\CustomerModel;

class Auth extends BaseController
{
    public function __construct()
    {
        $this->CustomerModel = new CustomerModel();
        $this->validation = \Config\Services::validation();
    }

    public function registration()
    {
        $data = [
            'title' => 'Registration',
            'navbar_active' => 'Registration',
            'script' => "<script src='" . base_url('frontend/assets/js/registrationMessage.js') . "'></script>",
            'validation' => $this->validation
        ];
        return view('frontend/auth/registration', $data);
    }

    public function registrationProcess()
    {
        // Rules
        $rules = [
            'username' => [
                'rules' => 'required|is_unique[customer.username]',
                'errors' => [
                    'required' => 'Username harus diisi',
                    'is_unique' => 'Username sudah terdaftar'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[customer.email]',
                'errors' => [
                    'valid_email' => 'Email tidak valid',
                    'is_unique' => 'Email sudah terdaftar'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => 'Password harus diisi',
                    'min_length' => 'Password minimal 5 karakter'
                ]
            ],
            'confirmpassword' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Konfirmasi password harus diisi',
                    'matches' => 'Konfirmasi password harus sama dengan Password'
                ]
            ],
        ];

        if (!$this->validate($rules)) {
            // return redirect()->back()->with('validation', $this->validation);
            return redirect()->to('/registration')->withInput()->with('validation', $this->validation);
        } else {
            // Get data
            $firstName = $this->request->getVar('firstname');
            $lastName = $this->request->getVar('lastname');
            $email = $this->request->getVar('email');
            $username = $this->request->getVar('username');
            $address = $this->request->getVar('address');
            $city = $this->request->getVar('city');
            $province = $this->request->getVar('province');
            $state = $this->request->getVar('state');
            $zip = $this->request->getVar('zip');
            $phone = $this->request->getVar('phone');
            $password = $this->request->getVar('password');
            $confirmPassword = $this->request->getVar('confirmpassword');

            // Concate string
            $fullAddress = ucwords($address) . ', ' . ucwords($city) . ', ' . ucwords($province) . ', ' . $state . ' ' . $zip;

            // Insert data
            $a = $this->CustomerModel->save([
                'first_name' => ucwords($firstName),
                'last_name' => ucwords($lastName),
                'address' => $fullAddress,
                'email' => $email,
                'phone' => $phone,
                'username' => $username,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'active' => 'Y'
            ]);
            // Back to login page
            return redirect()->to('login');

            // Message
            session()->setFlashdata('customerRegistration', 'successRegistration');
        }
    }

    public function login()
    {
        $data = [
            'title' => 'Login',
            'navbar_active' => 'Login',
            'script' => "<script src='" . base_url('frontend/assets/js/loginMessage.js') . "'></script>",
            'validation' => $this->validation
        ];
        return view('frontend/auth/login', $data);
    }

    public function loginProcess()
    {
        // Get data from form
        $emailOrUsername = $this->request->getVar('emailorusername');
        $password = $this->request->getVar('password');

        // Check whether the input is email or username
        if (strpos($emailOrUsername, "@") !== false) {
            $data = $this->CustomerModel->where('email', $emailOrUsername)->first();
        } else {
            $data = $this->CustomerModel->where('username', $emailOrUsername)->first();
        }

        if ($data) {
            if (password_verify($password, $data['password'])) {
                // Make session
                $dataSession = [
                    'username' => $data['username'],
                    'key' => password_hash($data['customer_id'], PASSWORD_DEFAULT),
                    'login_status' => true
                ];
                session()->set($dataSession);

                // Message
                session()->setFlashdata('customerLogStatus', 'successLogin');

                // Back to home page
                return redirect()->to('');
            } else {
                // Message
                session()->setFlashdata('customerLogin', 'wrongPassword');

                // Back to login page
                return redirect()->to('login');
            }
        } else {
            // Message
            session()->setFlashdata('customerLogin', 'wrongEmailUsername');

            // Back to login page
            return redirect()->to('login');
        }
    }

    public function logout()
    {
        session()->remove(['username', 'key']);
        session()->destroy();

        // Message
        session()->setFlashdata('customerLogStatus', 'successLogout');

        // Back to home page
        return redirect()->to('');
    }
}
