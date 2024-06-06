<?php
namespace App\Models;

use CodeIgniter\Model;

class VideoMaterialModel extends Model
{
    protected $table            = 'tb_video_materials';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['subcourse_id', 'video_url', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = true;
}