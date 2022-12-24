<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;

class Promo extends BaseController
{
    public function index()
    {
        helper(['login_check_helper']);

        $data = [
            'title' => 'Promo',
            'navbar_active' => 'Promo',
            'login_check' => loginCheck()
        ];

        return view('frontend/promo', $data);
    }
}
