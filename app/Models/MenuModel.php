<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'product_id';
    protected $allowedFields = ['name', 'product_type', 'price', 'image', 'status', 'updated_time'];
}
