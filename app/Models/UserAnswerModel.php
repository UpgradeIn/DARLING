<?php

namespace App\Models;

use CodeIgniter\Model;

class UserAnswerModel extends Model
{
    protected $table = 'tb_user_answers';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'test_material_id', 'option_test_id', 'created_at', 'updated_at'];

    protected $useTimestamps = true;
}
