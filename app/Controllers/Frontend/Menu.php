<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use App\Models\MenuModel;

class Menu extends BaseController
{
    protected $MenuModel;
    protected $validation;
    protected $helpers;

    public function __construct()
    {
        $this->MenuModel = new MenuModel();
        $this->validation = \Config\Services::validation();
        $this->helpers = helper(['login_check_helper', 'product_type_helper']);
    }

    public function index()
    {
        $this->helpers;

        // Get All data
        $selectAllData = $this->MenuModel->findAll();

        $data = [
            'title' => 'Menu',
            'navbar_active' => 'Menu',
            'login_check' => loginCheck(),
            'data' => $selectAllData,
            'product_type_text' => productType(),
        ];

        return view('frontend/menu/menu', $data);
    }

    public function detail($name)
    {
        $this->helpers;

        // Get proper name
        $properName = ucwords(str_replace('-', ' ', $name));

        // Get All data
        $selectData = $this->MenuModel->where('name', $properName)->first();

        $data = [
            'title' => $selectData['name'],
            'navbar_active' => 'Menu',
            'login_check' => loginCheck(),
            'data' => $selectData,
            'product_type_text' => productType(),
        ];

        return view('frontend/menu/detailMenu', $data);
    }
}
