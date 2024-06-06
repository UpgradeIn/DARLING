<?php
namespace App\Models;

use CodeIgniter\Model;

class OptionTestModel extends Model
{
    protected $table            = 'tb_option_tests';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['test_material_id', 'answer', 'correct', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = true;
}