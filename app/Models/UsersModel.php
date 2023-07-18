<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'nik';
    protected $useAutoIncrement = false;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = ['nik', 'no_kk', 'nama', 'status', 'jenis_kelamin', 'tempat_lahir', 'tgl_lahir', 'usia', 'status_perkawinan', 'pendidikan', 'email', 'password', 'role', 'foto', 'status_kependudukan',  'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Get Users join with Keluarga data and sort by created_at desc and status 'Kepala Keluarga' first
    public function getUsers($nik = null)
    {
        if ($nik == null) {
            return $this->select('users.*, keluarga.nama_kepala_keluarga')
                ->join('keluarga', 'keluarga.no_kk = users.no_kk')
                ->orderBy('users.created_at', 'DESC')
                ->orderBy('users.status', 'DESC')
                ->findAll();
        }

        return $this->select('users.*, keluarga.nama_kepala_keluarga')
            ->join('keluarga', 'keluarga.no_kk = users.no_kk')
            ->where(['nik' => $nik])
            ->first();
    }

    // Get Use by email
    public function getUsersByEmail($email)
    {
        return $this->select('users.*, keluarga.nama_kepala_keluarga')
            ->join('keluarga', 'keluarga.no_kk = users.no_kk')
            ->where(['email' => $email])
            ->first();
    }

    // Edit Users data
    public function editUsers($data, $nik)
    {
        return $this->db->table($this->table)->update($data, ['nik' => $nik]);
    }

    // Delete Users data
    public function deleteUsers($nik)
    {
        return $this->db->table($this->table)->delete(['nik' => $nik]);
    }

    // Get Users by no_kk
    public function getUsersByKK($no_kk)
    {
        return $this->select('users.*, keluarga.nama_kepala_keluarga')
            ->join('keluarga', 'keluarga.no_kk = users.no_kk')
            ->where(['users.no_kk' => $no_kk])
            ->findAll();
    }

    // Save Users data
    public function saveUsers($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    // Delete users by no_kk
    public function deleteUsersByKK($no_kk)
    {
        return $this->db->table($this->table)->delete(['no_kk' => $no_kk]);
    }
}
