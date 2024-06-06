<?php
namespace App\Models;

use CodeIgniter\Model;

class SubcourseModel extends Model
{
    protected $table            = 'tb_subcourses';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['course_id', 'title', 'sequence', 'type', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = true;
}