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

    public function getUsersNotInLearningPath()
    {
        $builder = $this->db->table($this->table);
        $builder->select('tb_users.*');
        $builder->where('tb_users.role_id', 3);
        $builder->whereNotIn('tb_users.id', function($builder) {
            return $builder->select('tb_user_learning_paths.user_id')->from('tb_user_learning_paths');
        });
        return $builder->get()->getResult();
    }
}
