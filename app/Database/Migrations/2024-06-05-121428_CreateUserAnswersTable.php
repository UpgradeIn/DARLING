<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserAnswersTable extends Migration
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
            'test_material_id'       => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'option_test_id'       => [
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
        $this->forge->addForeignKey('test_material_id', 'tb_test_materials', 'id', 'RESTRICT', 'CASCADE');
        $this->forge->addForeignKey('option_test_id', 'tb_option_tests', 'id', 'RESTRICT', 'CASCADE');
        $this->forge->createTable('tb_user_answers');
    }

    public function down()
    {
        $this->forge->dropTable('tb_user_answers');
    }
}
