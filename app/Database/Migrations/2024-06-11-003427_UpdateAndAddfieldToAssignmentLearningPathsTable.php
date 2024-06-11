<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UpdateAndAddfieldToAssignmentLearningPathsTable extends Migration
{
    public function up()
    {
        ## Rename column name from emp_name to fullname 
    //     $alterfields = [
    //         'emp_name' => [
    //               'name' => 'fullname',
    //               'type' => 'VARCHAR',
    //               'constraint' => '100',
    //         ],
    //    ];
    //    $this->forge->modifyColumn('tb_assign_learning_paths', $alterfields);

       ## Add age column
       $addfields = [
            'message_assignment' => [
                'type'           => 'TEXT',
                'null'           => true,
            ],
       ];
       $this->forge->addColumn('tb_assign_learning_paths', $addfields);
    }

    public function down()
    {
        ## Delete 'age' column
        $this->forge->dropColumn('tb_assign_learning_paths', ['message_assignment']);

        // ## Rename column name from fullname to emp_name
        // $fields = [
        //      'fullname' => [
        //            'name' => 'emp_name',
        //            'type' => 'VARCHAR',
        //            'constraint' => '100',
        //      ],
        // ];
        // $this->forge->modifyColumn('tb_assign_learning_paths', $fields);
    }
}
