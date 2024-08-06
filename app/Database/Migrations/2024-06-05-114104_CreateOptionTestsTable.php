<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOptionTestTable extends Migration
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
            'test_material_id'       => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'answer'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'correct'       => [
                'type'           => 'TINYINT',
                'constraint'     => 1,
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
        $this->forge->addForeignKey('test_material_id', 'tb_test_materials', 'id', 'RESTRICT', 'CASCADE');
        $this->forge->createTable('tb_option_tests');
    }

    public function down()
    {
        $this->forge->dropTable('tb_option_tests');
    }
}
