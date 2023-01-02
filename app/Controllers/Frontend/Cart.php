<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use App\Models\CartModel;

class Cart extends BaseController
{
    protected $MenuModel;
    protected $validation;
    protected $helpers;

    public function __construct()
    {
        $this->CartModel = new CartModel();
        $this->validation = \Config\Services::validation();
        $this->helpers = helper(['login_check_helper']);
    }

    public function index()
    {
        $this->helpers;

        // Get All data
        $selectAllData = $this->CartModel->findAll();

        $data = [
            'title' => 'Keranjang',
            'navbar_active' => 'Keranjang',
            'login_check' => loginCheck(),
            'data' => $selectAllData,
        ];

        return view('frontend/order/cart', $data);
    }
}
