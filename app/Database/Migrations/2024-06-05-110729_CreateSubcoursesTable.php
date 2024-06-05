<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSubCoursesTable extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'course_id'       => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'sequence'      => [
                'type'           => 'INT',
                'constraint'     => 2,
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
        $this->forge->addForeignKey('course_id', 'tb_courses', 'id', 'RESTRICT', 'CASCADE');
        $this->forge->createTable('tb_subcourses');

        $this->db->query("ALTER TABLE tb_subcourses ADD COLUMN type ENUM('video', 'test', 'written') AFTER sequence");
    }

    public function down()
    {
        $this->forge->dropTable('tb_subcourses');
    }
}
