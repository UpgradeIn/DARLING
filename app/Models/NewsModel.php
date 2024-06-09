<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table            = 'tb_news';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['thumbnail', 'title','slug', 'content','categort_id', 'admin_id', 'published_at', 'status', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = true;
}