<?php

namespace App\Models;

use CodeIgniter\Model;

class RequestLearningPathModel extends Model
{
    protected $table            = 'tb_request_learning_paths';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['user_id', 'learning_path_id', 'admin_id', 'status', 'message', 'responded_at'];

    // Dates
    protected $useTimestamps = true;

    public function getRequestLearningPaths()
    {
        return $this->select('tb_request_learning_paths.*, tb_users.fullname as user_fullname, tb_learning_paths.name as learning_path_name')
                    ->join('tb_users', 'tb_users.id = tb_request_learning_paths.user_id')
                    ->join('tb_learning_paths', 'tb_learning_paths.id = tb_request_learning_paths.learning_path_id')
                    ->findAll();
    }
}