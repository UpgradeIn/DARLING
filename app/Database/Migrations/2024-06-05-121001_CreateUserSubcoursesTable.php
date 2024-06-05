<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserSubcoursesTable extends Migration
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
            'user_id'       => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'subcourse_id'       => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
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
        $this->forge->addForeignKey('user_id', 'tb_users', 'id', 'RESTRICT', 'CASCADE');
        $this->forge->addForeignKey('subcourse_id', 'tb_subcourses', 'id', 'RESTRICT', 'CASCADE');
        $this->forge->createTable('tb_user_subcourses');

        $this->db->query("ALTER TABLE tb_user_subcourses ADD status ENUM('not-started','on-progress','completed') AFTER subcourse_id");
    }

    public function down()
    {
        $this->forge->dropTable('tb_user_subcourses');
    }
}
