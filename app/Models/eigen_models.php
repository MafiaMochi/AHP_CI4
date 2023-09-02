<?php

namespace App\Models;

use CodeIgniter\Model;

class eigen_models extends Model
{
    protected $table = "eigen";
    protected $primaryKey = "id_nilai_eigen";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_kriteria1', 'id_kriteria2', 'nilai_eigen'];


    public function masuk($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    //fungsi penjumlahan total eigen
    public function jumlahEigen()
    {
        $query = $this->select('id_kriteria1, SUM(nilai_eigen) as total_eigen')->groupBy('id_kriteria1')->get();

        return $query->getResult();
    }

    public function jmlrata()
    {
        $query = $this->select('id_kriteria1, AVG(nilai_eigen) as rata_eigen')->groupBy('id_kriteria1')->get();
        return $query->getResult();
    }
}
