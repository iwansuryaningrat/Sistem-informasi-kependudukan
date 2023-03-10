<?php

namespace App\Models;

use CodeIgniter\Model;

class PelaporanModel extends Model
{
    protected $table            = 'pelaporan';
    protected $primaryKey       = 'pelaporan_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = ['nik_pelapor', 'nama_terlapor', 'nik_terlapor', 'kategori', 'laporan', 'deskripsi_pelaporan', 'status_pelaporan', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Get Pelaporan data join with user and sort by created_at desc and status 'Dalam Proses' first
    public function getPelaporan($pelaporan_id = null)
    {
        if ($pelaporan_id == null) {
            return $this->select('pelaporan.*, users.nama')
                ->join('users', 'users.user_id = pelaporan.nik_pelapor')
                ->join('users', "users.user_id = pelaporan.nik_terlapor")
                ->orderBy('pelaporan.created_at', 'DESC')
                ->orderBy('pelaporan.status_pelaporan', 'ASC')
                ->findAll();
        }

        return $this->select('pelaporan.*, users.nama')
            ->join('users', 'users.user_id = pelaporan.nik_pelapor')
            ->join('users', "users.user_id = pelaporan.nik_terlapor")
            ->where(['pelaporan_id' => $pelaporan_id])
            ->first();
    }

    // Get Pelaporan data join with user by nik
    public function getPelaporanByNik($nik)
    {
        return $this->select('pelaporan.*, users.nama')
            ->join('users', 'users.user_id = pelaporan.nik_pelapor')
            ->join('users', "users.user_id = pelaporan.nik_terlapor")
            ->where(['nik_pelapor' => $nik])
            ->orderBy('pelaporan.created_at', 'DESC')
            ->findAll();
    }

    // Get Pelaporan data join with user by status
    public function getPelaporanByStatus($status)
    {
        return $this->select('pelaporan.*, users.nama')
            ->join('users', 'users.user_id = pelaporan.nik_pelapor')
            ->join('users', "users.user_id = pelaporan.nik_terlapor")
            ->where(['status_pelaporan' => $status])
            ->orderBy('pelaporan.created_at', 'DESC')
            ->findAll();
    }

    // Count Pelaporan data by status
    public function countPelaporanByStatus($status)
    {
        return $this->select('pelaporan.*, users.nama')
            ->join('users', 'users.user_id = pelaporan.nik_pelapor')
            ->join('users', "users.user_id = pelaporan.nik_terlapor")
            ->where(['status_pelaporan' => $status])
            ->countAllResults();
    }

    // Get Pelaporan data join with user by kategori
    public function getPelaporanByKategori($kategori)
    {
        return $this->select('pelaporan.*, users.nama')
            ->join('users', 'users.user_id = pelaporan.nik_pelapor')
            ->join('users', "users.user_id = pelaporan.nik_terlapor")
            ->where(['kategori' => $kategori])
            ->orderBy('pelaporan.created_at', 'DESC')
            ->findAll();
    }

    // Edit Pelaporan data
    public function editPelaporan($data, $pelaporan_id)
    {
        return $this->db->table($this->table)->update($data, ['pelaporan_id' => $pelaporan_id]);
    }

    // Delete Pelaporan data
    public function deletePelaporan($pelaporan_id)
    {
        return $this->db->table($this->table)->delete(['pelaporan_id' => $pelaporan_id]);
    }

    // Save Pelaporan data
    public function savePelaporan($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
}
