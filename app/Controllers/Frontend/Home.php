<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use App\Models\CustomerModel;
use App\Models\MenuModel;

class Home extends BaseController
{
    protected $CustomerModel;
    protected $validation;

    public function __construct()
    {
        $this->CustomerModel = new CustomerModel();
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        helper(['login_check_helper']);

        $data = [
            'title' => 'Wismangan | Indonesia Traditional Cuisine',
            'navbar_active' => 'Home',
            'validation' => $this->validation,
            'login_check' => loginCheck(),
        ];

        return view('frontend/home', $data);
    }
}
