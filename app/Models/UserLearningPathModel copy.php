<?php

namespace App\Models;

use CodeIgniter\Model;

class UserLearningPathModel extends Model
{
    protected $table            = 'tb_user_learning_paths';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['user_id', 'learning_path_id', 'start_date', 'end_date', 'completed_at', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = true;
}
