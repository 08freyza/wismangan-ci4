<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;

class Contact extends BaseController
{
    public function index()
    {
        helper(['login_check_helper']);

        $data = [
            'title' => 'Hubungi Kami',
            'navbar_active' => 'Hubungi Kami',
            'login_check' => loginCheck(),
        ];

        return view('frontend/contact', $data);
    }
}
