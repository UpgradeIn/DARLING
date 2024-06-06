<?php
namespace App\Models;

use CodeIgniter\Model;

class LearningPathCoursesModel extends Model
{
    protected $table            = 'tb_learning_path_courses';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['learning_path_id', 'course_id', 'sequence', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = true;
}