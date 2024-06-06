<?php
namespace App\Models;

use CodeIgniter\Model;

class CourseModel extends Model
{
    protected $table            = 'tb_courses';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['thumbnail', 'name', 'description', 'module', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = true;
}