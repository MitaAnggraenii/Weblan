<?php

namespace App\Controllers;
use App\Models\Rawatinap_model;

class Rawatinap extends BaseController
{
        public function index()
        {
            helper(['form', 'url']);

            $model = new Rawatinap_model();
            $data['dokter'] = $model->getDokter()->getResultArray();
            $data['pasien'] = $model->getPasien()->getResultArray();
            $data['ruangan'] = $model->getRuangan()->getResultArray();
            $data['rawatinap'] = $model->getRawatInap()->getResultArray();
            return view('transaksi/data_rawatinap', $data);
        }

        public function view()
        {
            helper(['form', 'url']);

            $model = new Rawatinap_model();
            $data['dokter'] = $model->getDokter()->getResultArray();
            $data['pasien'] = $model->getPasien()->getResultArray();
            $data['ruangan'] = $model->getRuangan()->getResultArray();
            $data['rawatinap'] = $model->getRawatInap()->getResultArray();
            return view('transaksi/view_rawatinap', $data);
        }
    
        public function simpan()
        {
            $model = new Rawatinap_model();
            $data= array(
                'id_rawatinap'=> $this->request->getPost('idrawat'),
                'id_dokter'=> $this->request->getPost('id_dokter'),
                'id_pasien'=> $this->request->getPost('id_pasien'),
                'id_ruangan'=> $this->request->getPost('id_ruangan'),
                'tglmasuk'=> $this->request->getPost('tglmasuk'),
                'catatanmedis'=> $this->request->getPost('catatanmedis'),
            );
            $model->saveRawatinap($data);
            return redirect()->to('/rawatinap');
        }


}