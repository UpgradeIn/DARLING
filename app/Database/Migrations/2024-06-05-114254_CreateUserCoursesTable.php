<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserCoursesTable extends Migration
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
            'course_id'       => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'grade_pre_test' => [
                'type'           => 'INT',
                'constraint'     => 3,
                'unsigned'       => true,
            ],
            'grade_post_test' => [
                'type'           => 'INT',
                'constraint'     => 3,
                'unsigned'       => true,
            ],
            'completed_at' => [
                'type' => 'DATETIME',
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
        $this->forge->addForeignKey('user_id', 'tb_users', 'id', 'RESTRICT', 'CASCADE');
        $this->forge->addForeignKey('course_id', 'tb_courses', 'id', 'RESTRICT', 'CASCADE');
        $this->forge->createTable('tb_user_courses');

        $this->db->query("ALTER TABLE tb_user_courses ADD status ENUM('not-started','on-progress','completed') AFTER grade_post_test");
    }

    public function down()
    {
        $this->forge->dropTable('tb_user_courses');
    }
}
