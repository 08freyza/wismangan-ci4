<?php

namespace App\Models;

use CodeIgniter\Model;

class WorkerModel extends Model
{
    protected $primaryKey = 'worker_id';
    protected $table = 'user';
    protected $allowedFields = ['first_name', 'last_name', 'address', 'email', 'phone', 'password', 'username', 'worker_type_id', 'active'];
}
