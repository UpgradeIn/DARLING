<?php
namespace App\Models;

use CodeIgniter\Model;

class WrittenMaterialModel extends Model
{
    protected $table            = 'tb_written_materials';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['subcourse_id', 'content', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = true;
}