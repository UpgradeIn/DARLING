<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLearningPathCoursesTable extends Migration
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
            'learning_path_id'       => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
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
        $this->forge->addForeignKey('learning_path_id', 'tb_learning_paths', 'id', 'RESTRICT', 'CASCADE');
        $this->forge->addForeignKey('course_id', 'tb_courses', 'id', 'RESTRICT', 'CASCADE');
        $this->forge->createTable('tb_learning_path_courses');
    }

    public function down()
    {
        //
    }
}
