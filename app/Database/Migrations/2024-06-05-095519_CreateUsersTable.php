<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'email'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'unique' => true,
            ],
            'password'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'role_id'       => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'fullname'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'birthday'       => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'photo_url'   => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'divisi'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'position'   => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('role_id', 'tb_roles', 'id', 'RESTRICT', 'CASCADE');
        $this->forge->createTable('tb_users');

        // Adding ENUM field manually
        $this->db->query("ALTER TABLE tb_users ADD COLUMN gender ENUM('Laki-laki', 'Perempuan') AFTER birthday");
    }

    public function down()
    {
        $this->forge->dropTable('tb_users');
    }
}
