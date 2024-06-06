<?php
namespace App\Models;

use CodeIgniter\Model;

class TestMaterialModel extends Model
{
    protected $table            = 'tb_test_materials';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['subcourse_id', 'sequence', 'content', 'type_test', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = true;
}