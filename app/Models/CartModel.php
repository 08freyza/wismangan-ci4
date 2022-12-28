<?php

namespace App\Models;

use CodeIgniter\Model;

class CartModel extends Model
{
    protected $table = 'cart';
    // protected $useTimestamps = true;
    protected $allowedFields = ['customer_id', 'product_id', 'quantity', 'last_update', 'status_cart'];
}
