<?php

namespace App\Controllers;
use App\Models\Ruangan_model;

class Ruangan extends BaseController
{
    public function index()
    {

        $model = new Ruangan_model();
        $data['ruangan'] = $model->getRuangan()->getResultArray();

        echo view('ruangan/view_ruangan', $data);
    }

	public function save()
	{
		$model = new Ruangan_model();
		$data = array(
			'kode_ruangan' => $this->request->getPost('kode_ruangan'),
			'nama_ruangan' => $this->request->getPost('nama_ruangan'),
            'harga' => $this->request->getPost('harga'),
			'status' => $this->request->getPost('status'),
		);
		$model->saveRuangan($data);
		return redirect()->to('/ruangan');
	}	
}