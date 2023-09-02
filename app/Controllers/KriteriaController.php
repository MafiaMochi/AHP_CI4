<?php

namespace App\Controllers;

use App\Models\eigen_models;
use App\Models\hasil_models;
use Config\App;

class KriteriaController extends BaseController
{
    protected $kriteriaModel;
    protected $hasilModel;
    protected $irkModel;
    protected $jmlkrtModel;
    protected $eigenModel;
    protected $rataModel;
    public function __construct()
    {
        $this->kriteriaModel = new \App\Models\kriteria_models();
        $this->hasilModel = new \App\Models\hasil_models();
        $this->irkModel = new \App\Models\irk_models();
        $this->jmlkrtModel = new \App\Models\jmlkrt_models();
        $this->eigenModel = new \App\Models\eigen_models();
        $this->rataModel = new \App\Models\rata_models();
    }

    public function kriteria()
    {
        $kriteria = $this->kriteriaModel->findAll();
        $data = [
            'title' => 'Kriteria',
            'kriteria' => $kriteria,
            /* 'validation' => \Config\Services::validation() */
        ];


        return view('input/kriteriaPage', $data);
    }

    public function nilaiPerb()
    {
        $countkrit = $this->kriteriaModel->countAll();
        $kriteria = $this->kriteriaModel->findAll();
        $hasilpreb = $this->hasilModel->paginate($countkrit);
        $pagehasil = $this->hasilModel->pager;
        $data = [
            'title' => 'Kriteria',
            'kriteria' => $kriteria,
            'count' => $countkrit,
            'pager' => $pagehasil,
            'hasil' => $hasilpreb
        ];
        return view('pages/nilaikriteriapage', $data);
    }

    public function hasilMatriks()
    {
        $model = new hasil_models();
        $data_C1 = $model->jumlahKolom();
        $hasilpreb = $this->hasilModel->paginate(3);
        $page = $this->hasilModel->pager;
        $countkrit = $this->kriteriaModel->countAll();
        $kriteria = $this->kriteriaModel->findAll();
        $totaleigen = $this->eigenModel->jumlahEigen();
        $ratakriteria = $this->eigenModel->jmlrata();

        //eigen
        // Mengambil data dari tabel "hasil_perbandingan"
        $builder = $this->hasilModel->builder();
        $builder->whereIn('id_kriteria2', ['C1', 'C2', 'C3']);
        $query = $builder->get();
        $jmlhPreb = $query->getResult();

        // Mengambil data dari tabel "jmlkrtrmodel"
        $builder = $this->jmlkrtModel->builder();
        $query = $builder->get();
        $data9 = $query->getResult();
        foreach ($jmlhPreb as $item) {
            // Mengambil data yang memiliki ID yang sama
            $filteredhasilModel = array_filter($data9, function ($data9Item) use ($item) {
                return $data9Item->id_kriteria == $item->id_kriteria2;
            });

            // Melakukan pembagian untuk data yang memiliki ID yang sama
            foreach ($filteredhasilModel as $datahasilitem) {
                $item->nilai_perb /= $datahasilitem->total_nilai_perb;
            }
        }
        //toal nilai rata-rata
        $rata = $this->eigenModel->select('id_kriteria1, AVG(nilai_eigen) as rata_eigen')
            ->groupBy('id_kriteria1')->get();
        $results = $rata->getResult();

        $total_rata_eigen = 0;
        foreach ($results as $row) {
            $total_rata_eigen += $row->rata_eigen;
        }

        $data = [
            'title' => 'Kriteria',
            'hasil' => $hasilpreb,
            'count' => $countkrit,
            'kriteria' => $kriteria,
            'jumlah' => $data_C1,
            'jumlaheigen' => $totaleigen,
            'totalrata' => $total_rata_eigen,
            'rata' => $ratakriteria,
            'eigen' => $jmlhPreb,
            'pager' => $page
        ];
        return view('pages/HasilPerbandinganPage', $data);
    }

    public function irk()
    {
        $irk = $this->irkModel->paginate(5);
        $page = $this->irkModel->pager;
        $data = [
            'title' => 'irk',
            'indeks' => $irk,
            'pager' => $page
        ];
        return view('pages/indeksrandomkonsistenpage', $data);
    }
    public function save()
    {
        // Ambil nilai dari form
        $id_kriteria1 = $this->request->getPost('id_kriteria1');
        $id_kriteria2 = $this->request->getPost('id_kriteria2');
        $nilai_perb = $this->request->getPost('nilai_perb');

        // Looping untuk memasukkan data ke dalam database
        for ($i = 0; $i < count($id_kriteria1); $i++) {
            $data = [
                'id_kriteria1' => $id_kriteria1[$i],
                'id_kriteria2' => $id_kriteria2[$i],
                'nilai_perb' => $nilai_perb[$i]
            ];
            $this->hasilModel->masuk($data); // Ganti Model_Name dengan nama model Anda
        }
        return redirect()->route('perbandingan')->with('sukses', 'data berhasil disimpan');
    }
    public function savejml()
    {
        // Ambil nilai dari form
        $id_kriteria = $this->request->getPost('id_kriteria');
        $jml = $this->request->getPost('jml');


        for ($i = 0; $i < count($id_kriteria); $i++) {
            $data = [
                'id_kriteria' => $id_kriteria[$i],
                'total_nilai_perb' => $jml[$i]
            ];
            $this->jmlkrtModel->masuk($data); // Ganti Model_Name dengan nama model Anda
        } // Ganti Model_Name dengan nama model Anda
        return redirect()->route('jmlh')->with('sukses', 'data berhasil disimpan');
    }

    public function saveKrit()
    {

        $this->kriteriaModel->save([
            'id_krit' => $this->request->getVar('id_kriteria'),
            'nama' => $this->request->getVar('nama_kriteria')
        ]);
        return redirect()->route('krit')->with('sukses', 'data berhasil disimpan');
    }

    public function saveeigen()
    {
        // Ambil nilai dari form
        $id_kriteria1 = $this->request->getPost('id_kriteria1');
        $id_kriteria2 = $this->request->getPost('id_kriteria2');
        $jmleigen = $this->request->getPost('jmleigen');


        for ($i = 0; $i < count($id_kriteria1); $i++) {
            $data = [
                'id_kriteria1' => $id_kriteria1[$i],
                'id_kriteria2' => $id_kriteria2[$i],
                'nilai_eigen' => $jmleigen[$i]
            ];
            $this->eigenModel->masuk($data); // Ganti Model_Name dengan nama model Anda
        } // Ganti Model_Name dengan nama model Anda
        return redirect()->to('/kriteriacontroller/hasilmatriks')->with('sukses', 'data berhasil disimpan');
    }

    public function saverata()
    {
        // Ambil nilai dari form
        $id_kriteria = $this->request->getPost('id_kriteria');
        $rata = $this->request->getPost('jml');


        for ($i = 0; $i < count($id_kriteria); $i++) {
            $data = [
                'id_kriteria' => $id_kriteria[$i],
                'nilai_rata' => $rata[$i]
            ];
            $this->rataModel->masuk($data); // Ganti Model_Name dengan nama model Anda
        } // Ganti Model_Name dengan nama model Anda
        return redirect()->to('/kriteriacontroller/hasilmatriks')->with('sukses', 'data berhasil disimpan');
    }
}
