<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table            = 'tb_users';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['email', 'password', 'role_id'];

    // Dates
    protected $useTimestamps = true;
}
