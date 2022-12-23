<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use App\Models\CustomerModel;
// use Faker\Extension\Helper;

class Home extends BaseController
{
    protected $CustomerModel;
    // protected $loginCheckHelper;
    protected $validation;

    public function __construct()
    {
        $this->CustomerModel = new CustomerModel();
        // $this->loginCheckHelper = loginCheck();
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        $data = [
            'title' => 'Wismangan | Indonesia Traditional Cuisine',
            'navbar_active' => 'Home',
            'script' => "<script src='" . base_url('frontend/assets/js/mainMessage.js') . "'></script>",
            'validation' => $this->validation,
        ];
        return view('frontend/home/index', $data);
    }
}
