<?php

namespace App\Models;

use CodeIgniter\Model;

class UserSubCourseModel extends Model{
    protected $table = 'tb_user_subcourses';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'subcourse_id', 'status', 'created_at', 'updated_at'];

    protected $useTimestamps = true;
}