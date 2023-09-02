<?php

namespace App\Controllers;

use App\Models\dataguru_models;
use Config\App;

class GuruController extends BaseController
{
    protected $guruModel;
    public function __construct()
    {
        $this->guruModel = new \App\Models\dataguru_models();
    }

    public function pegawai()
    {
        $guru = $this->guruModel->findAll();
        $data = [
            'title' => 'daftar guru',
            'guru' => $guru
        ];


        return view('input/DataGuruPage', $data);
    }

    public function saveguru()
    {
        if (!$this->validate([
            'id_guru' => 'required|is_unique[data_guru.id_guru]'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/alternatifcontroller/alternatif')->withInput()->with('validation', $validation);
        }

        $this->guruModel->save([
            'id_guru' => $this->request->getVar('id_guru'),
            'nama_gr' => $this->request->getVar('nama_gr'),
            'jabatan_gr' => $this->request->getVar('jabatan_gr'),
            'tugas_gr' => $this->request->getVar('tugas_gr')
        ]);
        return redirect()->to('/gurucontroller/alternatif')->with('sukses', 'data berhasil disimpan');
    }

    public function alternatif()
    {
        $guru = $this->guruModel->paginate(5);
        $pagergr = $this->guruModel->pager;
        $data = [
            'title' => 'daftar guru',
            'guru' => $guru,
            'pagegr' => $pagergr,
            'validation' => \Config\Services::validation()
        ];


        return view('pages/AlternatifPage', $data);
    }

    public function hapus($id)
    {
        $decodedId = urldecode($id);

        $dataGuru = new dataguru_models();
        $dataGuru->deleteItem($decodedId);

        return redirect()->to('/gurucontroller/alternatif')->with('sukses', 'data berhasil dihapus');
    }
}
