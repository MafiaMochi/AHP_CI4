<?php

namespace App\Models;

use CodeIgniter\Model;

class dataguru_models extends Model
{
    protected $table = "data_guru";
    protected $primaryKey = "id_guru";
    protected $useAutoIncrement = false;
    protected $allowedFields = ['id_guru', 'nama_gr', 'jabatan_gr', 'tugas_gr'];

    public function deleteItem($id_guru)
    {
        return $this->where('id_guru', $id_guru)->delete();
    }
}
