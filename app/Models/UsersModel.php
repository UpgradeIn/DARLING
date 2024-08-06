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

    public function getColumnExcept($array)
    {
        // Fetch all columns in the table
        $fields = $this->db->getFieldNames($this->table);

        // Remove the password column from the list of columns
        $columns = array_diff($fields, $array);

        // Convert the array to a comma-separated string
        $selectColumns = implode(", $this->table.", $columns);

        return "$this->table." . $selectColumns;
    }

    public function getUsersInUserRole($id)
    {
        $builder = $this->db->table($this->table);
        $selectColumns = $this->getColumnExcept(['password', 'created_at', 'updated_at']);
        $builder->select($selectColumns);
        $builder->where('tb_users.role_id', $id);
        return $builder->get()->getResult();
    }

    public function getUserById($id)
    {
        $builder = $this->db->table($this->table);
        $selectColumns = $this->getColumnExcept(['password', 'created_at', 'updated_at']);
        $builder->select($selectColumns);
        $builder->where('id', $id);
        return $builder->get()->getRow();
    }

    public function getUserByEmail($email)
    {
        $builder = $this->db->table($this->table);
        $selectColumns = $this->getColumnExcept(['created_at', 'updated_at']);
        $selectColumns = "$selectColumns, tb_roles.id as role_id, tb_roles.name as role_name";
        $builder->select($selectColumns);
        $builder->where('email', $email);
        $builder->join('tb_roles', 'tb_roles.id = tb_users.role_id');
        return $builder->get()->getRow();
    }
}
