<?php

namespace App\Controllers;

class PagesManager extends BaseController
{
    protected $user;
    protected $models;
    protected $rankingmodel;

    public function __construct()
    {
        $this->user = new \App\Models\login_models();
        $this->models = new \App\Models\dataguru_models();
        $this->rankingmodel = new \App\Models\ranking_models();
    }

    public function index()
    {
        echo view('input/registerpage');
    }

    /* public function cek_login()
    {
        if ($this->validate([
            'name_user' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} username masih kosong'
                ]
            ],
            'password_user' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} password masih kosong'
                ]
            ],
            'type_user' => [
                'rules' => 'required',
            ],
        ])) {
            //jika valid

            $username = $this->request->getPost('name_user');
            $password = $this->request->getPost('password_user');
            $type = $this->request->getPost('type_user');
            $cek = $this->user->register($username, $password, $type);
            if ($cek) {
                # jika data cocok
                session()->set('log', true);
                session()->set('username', $cek['nama_user']);
                session()->set('password', $cek['password_user']);
                session()->set('type', $cek['type_user']);
                return redirect()->to('/pagesmanager/dashboars');
            } else {
                # jika data tidak cocok
                session()->setFlashdata('pesan', 'Username atau password salah!!');
                return redirect()->to('/pagesmanager/indeks');
            }
        } else {
            session()->setFlashdata('errors', \config\);
                return redirect()->to('/pagesmanager/indeks');
        }
    }
 */

    public function login()
    {
        $username = $this->request->getPost('name_user');
        $password = $this->request->getPost('password_user');
        $userType = $this->request->getPost('type_user');

        // Cek kecocokan data pengguna
        $pengguna = $this->user->where('nama_user', $username)
            ->where('password_user', $password)
            ->where('tipe_user', $userType)
            ->first();

        if ($pengguna) {
            // Login berhasil
            // Lakukan sesuatu, seperti menyimpan data pengguna ke session
            return redirect()->to('/pagesmanager/dashboard');
        } else {
            // Login gagal
            // Redirect ke halaman login dengan pesan error
            return redirect()->to('/pagesmanager/login')->with('error', 'Username, password, atau tipe pengguna salah.');
        }
    }

    public function dashboard()
    {
        $count = $this->models->countAll();
        $rank = $this->rankingmodel->findAll();

        $db = \Config\Database::connect();
        $builder = $db->table('rata_rengking');
        $builder->select('rata_rengking.id_alt, data_guru.id_guru,data_guru.nama_gr,
        data_guru.jabatan_gr, data_guru.tugas_gr, rata_rengking.id_kriteria, sum(rata_rengking.nilai_rengking) as total_nilai_rank');
        $builder->join('data_guru', 'data_guru.id_guru = rata_rengking.id_alt');
        $builder->groupBy('rata_rengking.id_alt');
        $builder->orderBy('total_nilai_rank', 'DESC');
        $data_guru = $builder->get()->getResultArray();

        $data = [
            'title' => 'Rank',
            'count' => $count,
            'rank' => $rank,
            'data_guru' => $data_guru
        ];
        return view('pages/dashboard', $data);
    }

    public function pegawai()
    {
        echo view('pages/PegawaiPage');
    }
    public function alternatif()
    {
        echo view('pages/alternatifpage');
    }
    public function preferensi()
    {
        echo view('pages/preferensipage');
    }
}
