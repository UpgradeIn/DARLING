<?php

namespace App\Models;

use CodeIgniter\Model;

class UserCourseModel extends Model
{
    protected $table            = 'tb_courses';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['user_id', 'course_id', 'grade_pre_test', 'grade_post_test', 'status', 'completed_at', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = true;
}
