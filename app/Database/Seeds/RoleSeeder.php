<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'           => 'officials',
                'description'    => 'pejabat',
                'created_at'     => Time::now(),
                'updated_at'     => Time::now()
            ],
            [
                'name'           => 'operator',
                'description'    => 'admin',
                'created_at'     => Time::now(),
                'updated_at'     => Time::now()
            ],
            [
                'name'           => 'user',
                'description'    => 'pegawai',
                'created_at'     => Time::now(),
                'updated_at'     => Time::now()
            ],
        ];

        $this->db->table('tb_roles')->insertBatch($data);
    }
}