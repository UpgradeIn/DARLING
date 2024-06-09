<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table            = 'tb_categories';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['name', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = true;
}