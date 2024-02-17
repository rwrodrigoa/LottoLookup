<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DrawResultsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'draw_type' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'draw_number' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true
            ],
            'draw_date' => [
                'type' => 'DATE'
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('draw_results');
    }

    public function down()
    {
        $this->forge->dropTable('draw_results');
    }
}
