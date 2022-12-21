<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;

class Promo extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Promo',
            'navbar_active' => 'Promo'
        ];

        return view('frontend/promo/index', $data);
    }
}
