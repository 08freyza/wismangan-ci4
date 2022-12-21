<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;

class About extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Tentang Kami',
            'navbar_active' => 'Tentang Kami'
        ];

        return view('frontend/about/index', $data);
    }
}
