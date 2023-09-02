<?php

namespace App\Controllers;

use App\Models\alternatif_models;
use App\Models\eigen_models;
use App\Models\hasil_models;
use Config\App;

class alternatifController extends BaseController
{
    protected $kriteriaModel;
    protected $hasilModel;
    protected $rataModel;
    protected $alternatifModel;
    protected $perbalternatifModel;
    protected $rankingModel;
    public function __construct()
    {
        $this->kriteriaModel = new \App\Models\kriteria_models();
        $this->hasilModel = new \App\Models\hasil_models();
        $this->alternatifModel = new \App\Models\dataguru_models();
        $this->perbalternatifModel = new \App\Models\alternatif_models();
        $this->rataModel = new \App\Models\rata_models();
        $this->rankingModel = new \App\Models\ranking_models();
    }

    public function alternatif()
    {
        $guru = $this->alternatifModel->paginate(5);
        $pagergr = $this->alternatifModel->pager;
        $data = [
            'title' => 'daftar guru',
            'guru' => $guru,
            'pagegr' => $pagergr,
            'validation' => \Config\Services::validation()
        ];


        return view('pages/AlternatifPage', $data);
    }

    public function saveguru()
    {
        if (!$this->validate([
            'id_guru' => 'required|is_unique[data_guru.id_guru]'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/alternatifcontroller/alternatif')->withInput()->with('validation', $validation);
        }

        $this->alternatifModel->save([
            'id_guru' => $this->request->getVar('id_guru'),
            'nama_gr' => $this->request->getVar('nama_gr'),
            'jabatan_gr' => $this->request->getVar('jabatan_gr'),
            'tugas_gr' => $this->request->getVar('tugas_gr')
        ]);
        return redirect()->to('/alternatifcontroller/alternatif')->with('sukses', 'data berhasil disimpan');
    }

    public function perbandinganalternatif()
    {
        $countkrit = $this->kriteriaModel->countAll();
        $countalt = $this->alternatifModel->countAll();
        $kriteria = $this->kriteriaModel->findAll();
        $rata = $this->rataModel->findAll();
        $alternatif = $this->alternatifModel->findAll();
        $rataalt = $this->perbalternatifModel->jmlrata();


        $averages = $this->perbalternatifModel->getAverages();

        $groupedAverages = [];
        foreach ($averages as $average) {
            $groupedAverages[$average->id_alt2][] = $average;
        }

        // $sumOfAverages = $this->perbalternatifModel->getSumOfAverages();
        $data = [
            'title' => 'Kriteria',
            'count' => $countkrit,
            'countalt' => $countalt,
            'kriteria' => $kriteria,
            'perbalt' => $rataalt,
            'ratakrit' => $rata,
            'sum' => $groupedAverages,
            'alternatif' => $alternatif
        ];

        return view('pages/perbandinganaltpage', $data);
    }
    public function rank()
    {
        $rank = $this->rankingModel->findAll();

        $db = \Config\Database::connect();
        $builder = $db->table('rata_rengking');
        $builder->select('rata_rengking.id_alt, data_guru.id_guru,data_guru.nama_gr,
        data_guru.jabatan_gr, data_guru.tugas_gr, rata_rengking.id_kriteria, sum(rata_rengking.nilai_rengking) /3 as total_nilai_rank');
        $builder->join('data_guru', 'data_guru.id_guru = rata_rengking.id_alt');
        $builder->groupBy('rata_rengking.id_alt');
        $builder->orderBy('total_nilai_rank', 'DESC');
        $data_guru = $builder->get()->getResultArray();

        $data = [
            'title' => 'Rank',
            'rank' => $rank,
            'data_guru' => $data_guru
        ];
        return view('pages/RankingPages', $data);
    }
    public function saveAlt()
    {
        // Ambil nilai dari form
        $id_krit = $this->request->getPost('id_krit');
        $id_alt1 = $this->request->getPost('id_alt1');
        $id_alt2 = $this->request->getPost('id_alt2');
        $nilai_perb_alt = $this->request->getPost('nilai_perb_alt');


        // Looping untuk memasukkan data ke dalam database
        for ($i = 0; $i < count($id_alt1); $i++) {
            $data = [
                'id_kriteria' => $id_krit,
                'id_alt1' => $id_alt1[$i],
                'id_alt2' => $id_alt2[$i],
                'nilai_perb_alt' => $nilai_perb_alt[$i]
            ];
            $this->perbalternatifModel->masuk($data); // Ganti Model_Name dengan nama model Anda
        }
        return redirect()->to('/alternatifcontroller/perbandinganalternatif')->with('sukses', 'data berhasil disimpan');
    }

    public function saveRata()
    {
        $id_kriteria = $this->request->getPost('id_kriteria');
        $id_alt = $this->request->getPost('id_alt');
        $rata_alt = $this->request->getPost('rata_alt');

        for ($i = 0; $i < count($id_kriteria); $i++) {
            $data = [
                'id_kriteria' => $id_kriteria[$i],
                'id_alt' => $id_alt[$i],
                'nilai_rengking' => $rata_alt[$i]
            ];
            $this->rankingModel->masuk($data);
        }
        return redirect()->to('/alternatifcontroller/perbandinganalternatif')->with('sukses', 'data berhasil disimpan');
    }

    public function deleteAll()
    {


        $itemModel = new alternatif_models();
        $itemModel->deleteAllItems();

        return redirect()->to('/alternatifcontroller/perbandinganalternatif')->with('sukses', 'data berhasil disimpan');
    }
}
