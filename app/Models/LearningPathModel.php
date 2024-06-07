<?php

namespace App\Models;

use CodeIgniter\Model;

class LearningPathModel extends Model
{
    protected $table            = 'tb_learning_paths';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['thumbnail','name', 'slug', 'description', 'period', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = true;
}