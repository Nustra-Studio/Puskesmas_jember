<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pasien extends Migration
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
            'id_rekammedis' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'tanggal_daftar' => [
                'type' => 'DATE', // Changed to DATE type
                'null' => true, // Allow NULL values
            ],
            'ktp' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'bpjs' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'lahir' => [
                'type' => 'DATE', // Assuming birth date
                'null' => true,
            ],
            'usia' => [
                'type' => 'INT', // Changed to INT type
                'constraint' => 3, // Maximum 3 digits
            ],
            'gender' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'category' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'payment' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'alamat' => [
                'type' => 'TEXT',
            ],
            'no_hp' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => true,
            ],
            'agama' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'gol_darah' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => true,
            ],
            'pekerjaan' => [ // Changed to 'pekerjaan' from 'perkerjaan'
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'pendidikan' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'ayah' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'ibu' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'hubungi' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => true,
            ],
            'poli' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
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
        $this->forge->createTable('Pasien');
    }

    public function down()
    {
        $this->forge->dropTable('Pasien');
    }
}
