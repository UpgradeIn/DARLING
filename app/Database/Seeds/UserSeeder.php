<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'email'          => 'officials@gmail.com',
                'password'       => password_hash('fghjkliow', PASSWORD_DEFAULT),
                'role_id'        => 1, // officials
                'fullname'       => 'aku pejabat',
                'created_at'     => Time::now(),
                'updated_at'     => Time::now()
            ],
            [
                'email'          => 'operator@gmail.com',
                'password'       => password_hash('fghjkliow', PASSWORD_DEFAULT),
                'role_id'        => 2, // operator
                'fullname'       => 'aku admin',
                'created_at'     => Time::now(),
                'updated_at'     => Time::now()
            ],
            [
                'email'          => 'fatwa@gmail.com',
                'password'       => password_hash('fghjkliow', PASSWORD_DEFAULT),
                'role_id'        => 3, // user
                'fullname'       => 'Fatwa Fatahillah Fatah',
                'created_at'     => Time::now(),
                'updated_at'     => Time::now()
            ],
        ];

        $this->db->table('tb_users')->insertBatch($data);
    }
}