<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateNewsTable extends Migration
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
            'thumbnail'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'title'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'slug'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'content'       => [
                'type'       => 'TEXT',
            ],
            'category_id'       => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'admin_id'       => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
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
        $this->forge->addForeignKey('category_id', 'tb_categories', 'id', 'RESTRICT', 'CASCADE');
        $this->forge->addForeignKey('admin_id', 'tb_users', 'id', 'RESTRICT', 'CASCADE');
        $this->forge->createTable('tb_news');
    }

    public function down()
    {
        $this->forge->dropTable('tb_news');
    }
}
