<?php
namespace App\Models;

use CodeIgniter\Model;

class SubcourseModel extends Model
{
    protected $table            = 'tb_subcourses';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['course_id', 'title', 'sequence', 'type'];

    // Dates
    protected $useTimestamps = true;
}