<?php

namespace App\Models;

use CodeIgniter\Model;

class AssignLearningPathModel extends Model
{
    protected $table            = 'tb_assign_learning_paths';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['user_id', 'learning_path_id', 'admin_id', 'message_assignment'];

    // Dates
    protected $useTimestamps = true;

    public function getAssignLearningPaths()
    {
        return $this->select('tb_assign_learning_paths.*, tb_users.fullname as user_fullname, tb_learning_paths.name as learning_path_name')
                    ->join('tb_users', 'tb_users.id = tb_assign_learning_paths.user_id')
                    ->join('tb_learning_paths', 'tb_learning_paths.id = tb_assign_learning_paths.learning_path_id')
                    ->findAll();
    }

    public function getDetailAssignLearningPath($id)
    {
        return $this->select('tb_assign_learning_paths.*, tb_users.*, tb_learning_paths.*, tb_assign_learning_paths.id as id')
                    ->join('tb_users', 'tb_users.id = tb_assign_learning_paths.user_id')
                    ->join('tb_learning_paths', 'tb_learning_paths.id = tb_assign_learning_paths.learning_path_id')
                    ->where('tb_assign_learning_paths.id', $id)
                    ->first();
    }
}