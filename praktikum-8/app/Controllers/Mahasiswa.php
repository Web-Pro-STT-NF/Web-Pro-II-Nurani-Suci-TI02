<?php

namespace App\Controllers;

class Mahasiswa extends BaseController
{
    public function index()
    {
        return view('form_mahasiswa');
    }

    public function save()
    {
        $data['nim'] = $this->request->getVar('nim');
        $data['nama'] = $this->request->getVar('nama');
        $data['jenis_kelamin'] = $this->request->getVar('jenis_kelamin');
        $data['tgl_lahir'] = $this->request->getVar('tgl_lahir');
        $data['tmp_lahir'] = $this->request->getVar('tmp_lahir');
        $data['program_studi'] = $this->request->getVar('program_studi');
        $data['ipk'] = $this->request->getVar('ipk');
        return view('data_mahasiswa', $data);
    }
}
