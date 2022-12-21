<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;

class Menu extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Menu',
            'navbar_active' => 'Menu'
        ];

        return view('frontend/menu/index', $data);
    }
}
