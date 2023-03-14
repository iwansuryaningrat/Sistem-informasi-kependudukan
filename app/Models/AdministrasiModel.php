<?php

namespace App\Models;

use CodeIgniter\Model;

class AdministrasiModel extends Model
{
    protected $table            = 'administrasi';
    protected $primaryKey       = 'administrasi_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = ['pemohon', 'kategori', 'keperluan', 'deskripsi', 'no_surat', 'status', 'berkas', 'tgl_penerimaan', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Get Administrasi data join with user
    public function getAdministrasi($administrasi_id = null)
    {
        if ($administrasi_id == null) {
            return $this->select('administrasi.*, users.nama')
                ->join('users', 'users.user_id = administrasi.pemohon')
                ->findAll();
        }

        return $this->select('administrasi.*, users.nama')
            ->join('users', 'users.user_id = administrasi.pemohon')
            ->where(['administrasi_id' => $administrasi_id])
            ->first();
    }

    // Get Administrasi data by nik pemohon
    public function getAdministrasiByNik($nik)
    {
        return $this->select('administrasi.*, users.nama')
            ->join('users', 'users.user_id = administrasi.pemohon')
            ->where(['nik' => $nik])
            ->findAll();
    }

    // Get Administrasi data by status
    public function getAdministrasiByStatus($status)
    {
        return $this->select('administrasi.*, users.nama')
            ->join('users', 'users.user_id = administrasi.pemohon')
            ->where(['status' => $status])
            ->findAll();
    }

    // Count Administrasi data by status
    public function countAdministrasiByStatus($status)
    {
        return $this->select('administrasi.*, users.nama')
            ->join('users', 'users.user_id = administrasi.pemohon')
            ->where(['status' => $status])
            ->countAllResults();
    }

    // Edit Administrasi data
    public function editAdministrasi($data, $administrasi_id)
    {
        return $this->db->table($this->table)->update($data, ['administrasi_id' => $administrasi_id]);
    }

    // Delete Administrasi data
    public function deleteAdministrasi($administrasi_id)
    {
        return $this->db->table($this->table)->delete(['administrasi_id' => $administrasi_id]);
    }

    // Save Administrasi data
    public function saveAdministrasi($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
}
