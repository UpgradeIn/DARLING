<?php

namespace App\Models;

use CodeIgniter\Model;

class AssignLearningPathModel extends Model
{
    protected $table            = 'tb_assign_learning_paths';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['user_id', 'learning_path_id', 'admin_id', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = true;
}