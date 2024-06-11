<?php

namespace App\Models;

use CodeIgniter\Model;

class UserLearningPathModel extends Model
{
    protected $table            = 'tb_user_learning_paths';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['user_id', 'learning_path_id', 'status', 'start_date', 'end_date', 'completed_at'];

    // Dates
    protected $useTimestamps = true;
}
