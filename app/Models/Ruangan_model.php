<?php

namespace App\Models;

use CodeIgniter\Model;

class Ruangan_model extends Model
{
    public function getRuangan()
    {
        $bulder = $this->db->table('ruangan');
        return $bulder->get();
    }
    public function saveRuangan($data)
    {
        $query = $this->db->table('ruangan')->insert($data) ;
        return $query;
    }
}
