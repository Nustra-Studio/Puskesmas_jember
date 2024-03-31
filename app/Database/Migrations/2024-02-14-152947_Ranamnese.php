<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ranamnese extends Migration
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
            'tinggi' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'berat' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'gizi' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'sistole' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'diastole' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'denyut_nadi' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'respirate_rate' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'ket' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'thx' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'abd' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'ext' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'he' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'obat' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'alergi' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'anamnese' => [
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
        $this->forge->createTable('Ranamnese');
    }

    public function down()
    {
        $this->forge->dropTable('Ranamnese');
    }
}
