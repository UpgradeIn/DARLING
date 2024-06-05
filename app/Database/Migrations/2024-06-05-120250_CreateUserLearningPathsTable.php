<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserLearningPathsTable extends Migration
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
            'learning_path_id'       => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'start_date' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'end_date' => [
                'type' => 'DATETIME',
                'null' => true,
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
        $this->forge->addForeignKey('learning_path_id', 'tb_learning_paths', 'id', 'RESTRICT', 'CASCADE');
        $this->forge->createTable('tb_user_learning_paths');

        $this->db->query("ALTER TABLE tb_user_learning_paths ADD status ENUM('not-started','on-progress','completed') AFTER learning_path_id");
    }

    public function down()
    {
        $this->forge->dropTable('tb_user_learning_paths');
    }
}
