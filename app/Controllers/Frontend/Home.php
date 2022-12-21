<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Wismangan | Indonesia Traditional Cuisine',
            'navbar_active' => 'Home'
        ];
        return view('frontend/home/index', $data);
    }
}
