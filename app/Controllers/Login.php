<?php

namespace App\Controllers;
use App\Models\Pasien_model;

class Pasien extends BaseController
{
    public function index()
    {

        $modelp = new Pasien_model();
        $datap['pasien'] = $modelp->getPasien()->getResultArray();

        echo view('pasien/view_pasien', $datap);
    }

	public function save()
	{
		$model = new Pasien_model();
		$datap = array(
			'kode_pasien' => $this->request->getPost('kode_pasien'),
			'nama_pasien' => $this->request->getPost('nama_pasien'),
            'alamat_pasien' => $this->request->getPost('alamat_pasien'),
			'no_rm_pasien' => $this->request->getPost('no_rm_pasien'),
			'nohp_pasien' => $this->request->getPost('nohp_pasien'),
		);
		$model->savePasien($datap);
		return redirect()->to('/pasien');
	}

	



    

}
