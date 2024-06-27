<?php
namespace App\Models;

use CodeIgniter\Model;

class RoleModel extends Model
{
    protected $table            = 'tb_role_tests';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['name', 'description' ,'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = true;
}