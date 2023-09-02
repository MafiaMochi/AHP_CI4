<?php

namespace App\Models;

use CodeIgniter\Model;

class kriteria_models extends Model
{
    protected $table = "kriteria";
    protected $primaryKey = "id_krit";
    protected $useAutoIncrement = false;
    protected $allowedFields = ['id_krit', 'nama'];

    public function getById($id_krit)
    {
        return $this->where('id_krit', $id_krit)->first();
    }
}
