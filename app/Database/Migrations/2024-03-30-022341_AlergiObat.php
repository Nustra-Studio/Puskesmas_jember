<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlergiObat extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'kode' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'id_rm' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'id_history' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'option' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'more' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
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
        $this->forge->createTable('AlergiObat');
    }

    public function down()
    {
        $this->forge->dropTable('AlergiObat');
    }
}
