<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'customer_id';
    protected $allowedFields = ['first_name', 'last_name', 'email', 'phone', 'password', 'username', 'worker_type_id', 'active'];
}
