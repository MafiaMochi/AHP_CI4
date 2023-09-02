<?php

namespace App\Models;

use CodeIgniter\Model;

class login_models extends Model
{
    protected $table = "user";
    protected $primaryKey = "id_user";
    protected $useAutoIncrement = false;
    protected $allowedFields = ['id_user', 'nama_user', 'sekolah_user', 'tipe_user'];

    public function register($username, $password)
    {
        return $this->db->table('user')->where([
            'nama_user' => $username,
            'password_user' => $password,
        ])->get()->getRowArray();
    }
}
