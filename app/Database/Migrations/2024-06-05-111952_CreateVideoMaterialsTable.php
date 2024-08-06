<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class VideoMaterialsTable extends Migration
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
            'video_url'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
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
        $this->forge->createTable('tb_video_materials');
    }

    public function down()
    {
        $this->forge->dropTable('tb_video_materials');
    }
}
