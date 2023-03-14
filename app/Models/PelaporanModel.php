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

    // Get Pelaporan data join with user
    public function getPelaporan($pelaporan_id = null)
    {
        if ($pelaporan_id == null) {
            return $this->select('pelaporan.*, users.nama')
                ->join('users', 'users.user_id = pelaporan.nik_pelapor')
                ->join('users', "users.user_id = pelaporan.nik_terlapor")
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
