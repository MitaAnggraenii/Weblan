<?php

namespace App\Controllers;
use App\Models\Dokter_model;

class Dokter extends BaseController
{

	public function __construct() {
        
        $this->dokter = new Dokter_model();
    
    }
	
    public function index()
    {

        $model = new Dokter_model();
        $data['dokter'] = $model->getDokter()->getResultArray();

        echo view('dokter/view_dokter', $data);
    }

	public function save()
	{
		$model = new Dokter_model();
		$data = array(
			'kode_dokter' => $this->request->getPost('kode_dokter'),
			'nama_dokter' => $this->request->getPost('nama_dokter'),
			'spesialis' => $this->request->getPost('spesialis'),
			'nohp_dokter' => $this->request->getPost('nohp_dokter'),
			'alamat_dokter' => $this->request->getPost('alamat_dokter'),
			'jadwal_praktek' => $this->request->getPost('jadwal_praktek'),
		);
		$model->saveDokter($data);
		return redirect()->to('/dokter');
	}

	public function delete($id_dokter) {
		$this->dokter->delete($id_dokter);
		session()->setFlashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Data berhasil dihapus!</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	</div>');
		return redirect()->to(base_url('/dokter'));
	}

}
