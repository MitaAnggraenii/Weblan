<?php

namespace App\Controllers;
use App\Models\Pasien_model;

class Pasien extends BaseController
{
    public function index()
    {

        $model = new Pasien_model();
        $data['pasien'] = $model->getPasien()->getResultArray();

        echo view('pasien/view_pasien', $data);
    }

	public function save()
	{
		$model = new Pasien_model();
		$data = array(
			'kode_pasien' => $this->request->getPost('kode_pasien'),
			'nama_pasien' => $this->request->getPost('nama_pasien'),
            'alamat_pasien' => $this->request->getPost('alamat_pasien'),
			'no_rm_pasien' => $this->request->getPost('no_rm_pasien'),
			'nohp_pasien' => $this->request->getPost('nohp_pasien'),
		);
		$model->savePasien($data);
		return redirect()->to('/pasien');
	}

	



    

}
