<?php

namespace App\Models;

use CodeIgniter\Model;

class alternatif_models extends Model
{
    protected $table = "perbandingan_alt";
    protected $primaryKey = "id_perbandingan_alt";
    protected $useAutoIncrement = false;
    protected $allowedFields = ['id_kriteria', 'id_alt1', 'id_alt2', 'nilai_perb_alt'];

    public function masuk($data)
    {
        return $this->db->table($this->table)->insert($data);
    }


    public function jmlrata()
    {
        $query = $this->db->table($this->table)
            ->select('id_kriteria,id_alt1,id_alt2,SUM(nilai_perb_alt) as total, AVG(nilai_perb_alt) as rata_alt')
            ->groupBy('id_kriteria,id_alt2')
            ->get();
        return $query->getResult();
    }

    public function rank()
    {
        $query = $this->db->table($this->table)
            ->select('id_kriteria,id_alt1,id_alt2, SUM(nilai_perb_alt) as total, COUNT(nilai_perb_alt) as count')
            ->groupBy('id_kriteria, id_alt2')
            ->get();
        return $query->getResult();
    }

    public function getColumnOneValues()
    {
        return $this->distinct()->select('id_kriteria')->findAll();
    }

    public function getColumnThreeValues()
    {
        return $this->distinct()->select('id_alt2')->findAll();
    }

    public function getAverages()
    {
        $query = $this->select('id_kriteria, id_alt2, AVG(nilai_perb_alt) as average')
            ->groupBy(['id_kriteria', 'id_alt2'])
            ->orderBy('id_alt2')
            ->get();
        return $query->getResult();
    }

    public function deleteAllItems()
    {
        return $this->emptyTable();
    }
}
