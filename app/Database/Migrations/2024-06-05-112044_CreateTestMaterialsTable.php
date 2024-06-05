<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TestMaterialsTable extends Migration
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
            'subcourse_id'       => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'sequence'      => [
                'type'           => 'INT',
                'constraint'     => 2,
                'unsigned'       => true,
            ],
            'content'       => [
                'type'       => 'TEXT',
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
        $this->forge->addForeignKey('subcourse_id', 'tb_subcourses', 'id', 'RESTRICT', 'CASCADE');
        $this->forge->createTable('tb_test_materials');

        $this->db->query("ALTER TABLE tb_test_materials ADD COLUMN type_test ENUM('pre_test', 'post_test') AFTER content");
    }

    public function down()
    {
        $this->forge->dropTable('tb_test_materials');
    }
}
