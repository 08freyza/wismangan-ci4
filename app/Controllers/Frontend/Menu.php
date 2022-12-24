<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;

class Menu extends BaseController
{
    public function index()
    {
        helper(['login_check_helper']);

        $data = [
            'title' => 'Menu',
            'navbar_active' => 'Menu',
            'login_check' => loginCheck()
        ];

        return view('frontend/menu', $data);
    }
}
