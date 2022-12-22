<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Wismangan | Indonesia Traditional Cuisine',
            'navbar_active' => 'Home',
            'script' => "<script src='" . base_url('frontend/assets/js/homeMessage.js') . "'></script>",
            'validation' => \Config\Services::validation()
        ];
        return view('frontend/home/index', $data);
    }
}
