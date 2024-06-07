<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCoursesTable extends Migration
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
            'module'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'published_at' => [
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
        $this->forge->createTable('tb_courses');

        // Adding ENUM field manually
        $this->db->query("ALTER TABLE tb_courses ADD COLUMN status ENUM('publish', 'draft') AFTER module");
    }

    public function down()
    {
        //
        $this->forge->dropTable('tb_courses');
    }
}
