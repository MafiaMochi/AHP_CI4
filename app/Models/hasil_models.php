<?php

namespace App\Models;

use CodeIgniter\Model;

class hasil_models extends Model
{
    protected $table = "nilai_perbk";
    protected $primaryKey = "id_nilai_kriteria";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_kriteria1', 'id_kriteria2', 'nilai_perb'];


    public function jumlahKolom()
    {
        // $query = $this->selectSum('nilai_perb')->groupBy('id_kriteria1')->get();
        $query = $this->select('id_kriteria2, SUM(nilai_perb) as total_nilai_perb')->groupBy('id_kriteria2')->get();

        return $query->getResult();
    }

    public function masuk($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
}
