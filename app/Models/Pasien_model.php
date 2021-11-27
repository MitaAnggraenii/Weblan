<?php

namespace App\Models;
Use CodeIgniter\Model;

class Pasien_model extends Model
{

    public function getPasien()
    {
        $bulder = $this->db->table('pasien');
        return $bulder->get();
    }
    public function savePasien($data)
    {
        $query = $this->db->table('pasien')->insert($data) ;
        return $query;
    }
}
