<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table            = 'tb_users';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['email', 'password', 'role_id', 'fullname'];

    // Dates
    protected $useTimestamps = true;

    public function getUsers()
    {
        $builder = $this->db->table($this->table);
        $builder->select('tb_users.*');
        $builder->where('tb_users.role_id', 3);
        return $builder->get()->getResult();
    }
}
