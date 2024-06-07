<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRequestLearningPathsTable extends Migration
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
            'admin_id'       => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'status'       => [
                'type'       => 'ENUM',
                'constraint' => ['pending', 'approved', 'rejected'],
                'default' => 'pending',
            ],
            'message' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'responded_at' => [
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
        $this->forge->addForeignKey('admin_id', 'tb_users', 'id', 'RESTRICT', 'CASCADE');
        $this->forge->addForeignKey('learning_path_id', 'tb_learning_paths', 'id', 'RESTRICT', 'CASCADE');
        $this->forge->createTable('tb_request_learning_paths');
    }

    public function down()
    {
        $this->forge->dropTable('tb_request_learning_paths');
    }
}
