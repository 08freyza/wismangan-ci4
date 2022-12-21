<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function login()
    {
        $data = [
            'title' => 'Login',
            'navbar_active' => 'Login'
        ];
        return view('frontend/auth/login', $data);
    }

    public function registration()
    {
        $data = [
            'title' => 'Registration',
            'navbar_active' => 'Registration'
        ];
        return view('frontend/auth/registration', $data);
    }
}
