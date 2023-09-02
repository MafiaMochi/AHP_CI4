<?php

namespace App\Models;

use CodeIgniter\Model;

class ranking_models extends Model
{
    protected $table = "rata_rengking";
    protected $primaryKey = "id_rata_rengking";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_alt', 'id_kriteria', 'nama_alt', 'nilai_rengking'];



    public function masuk($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
}
