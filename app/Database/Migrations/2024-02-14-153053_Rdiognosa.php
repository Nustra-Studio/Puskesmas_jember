<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Rdiognosa extends Migration
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
            'id_rm' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'id_history' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'diagnosa' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'kode_icd' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'jenis_kasus' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'jenis_diagnosa' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'option' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'more' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
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
        $this->forge->createTable('Rdiognosa');
    }

    public function down()
    {
        $this->forge->dropTable('Rdiognosa');
    }
}
