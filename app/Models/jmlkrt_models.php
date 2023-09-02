<?php

namespace App\Models;

use CodeIgniter\Model;

class jmlkrt_models extends Model
{
    protected $table = "jml_nilai_perb";
    protected $primaryKey = "id_jml_nilai_perb";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_kriteria', 'total_nilai_perb'];


    public function masuk($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
}
