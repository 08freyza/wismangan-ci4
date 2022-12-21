<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;

class Contact extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Hubungi Kami',
            'navbar_active' => 'Hubungi Kami'
        ];

        return view('frontend/contact/index', $data);
    }
}
