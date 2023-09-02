<?php

namespace App\Models;

use CodeIgniter\Model;

class rata_models extends Model
{
    protected $table = "ratakriteria";
    protected $primaryKey = "id_ratakriteria";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_kriteria', 'nilai_rata'];

    public function masuk($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
}
