<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use App\Models\CustomerModel;

class User extends BaseController
{
    protected $CustomerModel;
    protected $validation;
    protected $helpers;

    public function __construct() {
        $this->CustomerModel = new CustomerModel();
        $this->validation = \Config\Services::validation();
        $this->helpers = helper(['login_check_helper']);
    }

    public function index()
    {
        $this->helpers;

        if(loginCheck()['login_status'] === false) {
            return redirect()->to('login');
        } else {
            // Get data
            $selectData = $this->CustomerModel->where('username', loginCheck()['user']['username'])->first();

            $data = [
                'title' => 'My Profile',
                'navbar_active' => 'My Profile',
                'login_check' => loginCheck(),
                'data' => $selectData,
            ];
    
            return view('frontend/user/profile', $data);
        }
    }

    public function edit()
    {
        $this->helper;

        $data = [
            'title' => 'My Profile',
            'navbar_active' => 'My Profile',
            'login_check' => loginCheck()
        ];

        return view('frontend/user/profile', $data);
    }
}
