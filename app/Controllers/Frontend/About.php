<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;

class About extends BaseController
{
    public function index()
    {
        helper(['login_check_helper']);

        $data = [
            'title' => 'Tentang Kami',
            'navbar_active' => 'Tentang Kami',
            'login_check' => loginCheck(),
        ];

        return view('frontend/about', $data);
    }
}
