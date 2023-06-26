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
    protected $allowedFields    = ['pemohon', 'kategori', 'keperluan', 'deskripsi', 'no_surat', 'administrasi_status', 'berkas', 'tgl_penerimaan', 'catatan', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Get Administrasi data join with user and sort by created_at desc and administrasi_status 'Dalam Proses' first
    public function getAdministrasi($administrasi_id = null)
    {
        if ($administrasi_id == null) {
            return $this->select('administrasi.*, users.nama')
                ->join('users', 'users.user_id = administrasi.pemohon')
                ->orderBy('administrasi.created_at', 'DESC')
                ->orderBy('administrasi.administrasi_status', 'ASC')
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
            ->orderBy('administrasi.created_at', 'DESC')
            ->findAll();
    }

    // Get Administrasi data by administrasi_status
    public function getAdministrasiByStatus($administrasi_status)
    {
        return $this->select('administrasi.*, users.nama')
            ->join('users', 'users.user_id = administrasi.pemohon')
            ->where(['administrasi_status' => $administrasi_status])
            ->orderBy('administrasi.created_at', 'DESC')
            ->findAll();
    }

    // Count Administrasi data by administrasi_status
    public function countAdministrasiByStatus($administrasi_status)
    {
        return $this->select('administrasi.*, users.nama')
            ->join('users', 'users.user_id = administrasi.pemohon')
            ->where(['administrasi_status' => $administrasi_status])
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

    // Get Administrasi count while administrasi_status 'Menunggu Konfirmasi'
    public function getAdministrasiCount()
    {
        return $this->select('*')
            ->where(['administrasi_status' => 'Menunggu Konfirmasi'])
            ->countAllResults();
    }

    // Update Administrasi status
    public function updateAdministrasiStatus($administrasi_id, $administrasi_status)
    {
        return $this->db->table($this->table)->update(['administrasi_status' => $administrasi_status], ['administrasi_id' => $administrasi_id]);
    }
}
