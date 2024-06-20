<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table            = 'tb_users';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['email', 'password', 'role_id', 'fullname'];

    // Dates
    protected $useTimestamps = true;

    public function getUsersInUserRole()
    {
        // Fetch all columns in the table
        $fields = $this->db->getFieldNames($this->table);

        // Remove the password column from the list of columns
        $columns = array_diff($fields, ['password', 'created_at', 'updated_at']);

        // Convert the array to a comma-separated string
        $selectColumns = implode(', ', $columns);
        $builder = $this->db->table($this->table);
        $builder->select($selectColumns);
        $builder->where('tb_users.role_id', 3);
        return $builder->get()->getResult();
    }
}
