<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RawatInap extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_rawatinap'          => [
                'type'              => 'INT',
                'constraint'        => 11,
                'auto_increment'    => true,
            ],
            'id_dokter'              => [
                'type'              => 'INT',
                'constraint'        => 11,
            ],
            'id_pasien'              => [
                'type'              => 'INT',
                'constraint'        => 11,
            ],
            'id_ruangan'             => [
                'type'              => 'INT',
                'constraint'        => 11,
            ],
            'tglmasuk'              => [
                'type'              => 'DATE',
            ],
            'catatanmedis'          => [  
                'type'              =>'VARCHAR',
                'constraint'        => 225,
            ],            
        ]);
        $this->forge->addKey('id_rawatinap', true) ;
        $this->forge->createTable('rawatinap') ;
    }

    public function down()
    {
        $this->forge->dropTable('rawatinap') ;
    }
}