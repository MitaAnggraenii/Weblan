<?php

namespace App\Models;
Use CodeIgniter\Model;

class Dokter_model extends Model
{
    protected $table                = 'dokter';
	protected $primaryKey           = 'id_dokter';
	protected $allowedFields        = ['kode_dokter', 'nama_dokter', 'spesialis', 'nohp_dokter', 'alamat_dokter', 'jadwal_praktek'];
	protected $useTimestamps        = true;

    public function getDokter()
    {
        $bulder = $this->db->table('dokter');
        return $bulder->get();
    }
    public function saveDokter($data)
    {
        $query = $this->db->table('dokter')->insert($data) ;
        return $query;
    }
}
