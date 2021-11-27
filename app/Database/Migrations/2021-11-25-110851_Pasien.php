<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pasien extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pasien'             => [
                'type'              => 'INT',
                'constraint'        => 11,
                'auto_increment'    => true,
            ],
            'kode_pasien'           => [
                'type'              => 'VARCHAR',
                'constraint'        => 50,
            ],
            'nama_pasien'           => [
                'type'              => 'VARCHAR',
                'constraint'        => 50,
            ],
            'alamat_pasien'         => [
                'type'              => 'VARCHAR',
                'constraint'        => 30,
            ],  
            'no_rm_pasien'             => [
                'type'              => 'VARCHAR',
                'constraint'        => 20,
            ],
            'nohp_pasien'           => [
                'type'              => 'VARCHAR',
                'constraint'        => 20,
            ],           
        ]);
        $this->forge->addKey('id_pasien', true) ;
        $this->forge->createTable('pasien') ;
    }

    public function down()
    {
        $this->forge->dropTable('pasien') ;
    }
}
