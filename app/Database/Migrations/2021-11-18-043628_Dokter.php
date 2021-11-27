<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Dokter extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_dokter'             => [
                'type'              => 'INT',
                'constraint'        => 11,
                'auto_increment'    => true,
            ],
            'kode_dokter'           => [
                'type'              => 'VARCHAR',
                'constraint'        => 50,
            ],
            'nama_dokter'           => [
                'type'              => 'VARCHAR',
                'constraint'        => 50,
            ],
            'spesialis'             => [
                'type'              => 'VARCHAR',
                'constraint'        => 225,
            ],
            'nohp_dokter'           => [
                'type'              => 'VARCHAR',
                'constraint'        => 20,
            ],
            'alamat_dokter'         => [
                'type'              => 'VARCHAR',
                'constraint'        => 30,
            ],    
            'jadwal_praktek'        => [  
                'type'              =>'VARCHAR',
                'constraint'        => 225,
            ],            
        ]);
        $this->forge->addKey('id_dokter', true) ;
        $this->forge->createTable('dokter') ;
    }

    public function down()
    {
        $this->forge->dropTable('dokter') ;
    }
}
