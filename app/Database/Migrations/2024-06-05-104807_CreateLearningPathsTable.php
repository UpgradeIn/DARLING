<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLearningPathTable extends Migration
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
            'thumbnail'  => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'name'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'slug'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'description' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'period'       => [
                'type'       => 'INT',
                'constraint' => 3,
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
        $this->forge->createTable('tb_learning_paths');
    }

    public function down()
    {
        //
        $this->forge->dropTable('tb_learning_paths');
    }
}
