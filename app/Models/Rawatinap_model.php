<?php

namespace App\Models;

use CodeIgniter\Model;

class Rawatinap_model extends Model
{
    public function getRawatInap()
    {
        $bulder= $this->db->table('rawatinap');
        return $bulder->get();
    }
    public function getDokter()
    {
        $bulder= $this->db->table('dokter');
        return $bulder->get();
    }
    public function getPasien()
    {
        $bulder= $this->db->table('pasien');
        return $bulder->get();
    }
    public function getRuangan()
    {
        $bulder= $this->db->table('ruangan');
        return $bulder->get();
    }
    
    public function saveRawatinap($data)
    {
        $query= $this->db->table('rawatinap')->insert($data);
        return $query;
    }
}