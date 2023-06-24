<?php

namespace App\Models;

use CodeIgniter\Model;

class PengumumanModel extends Model
{
    protected $table            = 'pengumuman';
    protected $primaryKey       = 'pengumuman_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = ['kategori', 'judul_pengumuman', 'deskripsi', 'tanggal', 'jam', 'tempat', 'status', 'created_by', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Get Pengumuman data join with user and sort by created_at desc
    public function getPengumuman($pengumuman_id = null)
    {
        if ($pengumuman_id == null) {
            return $this->select('pengumuman.*, users.*')
                ->join('users', 'users.user_id = pengumuman.created_by')
                ->orderBy('pengumuman.created_at', 'DESC')
                ->findAll();
        }

        return $this->select('pengumuman.*, users.*')
            ->join('users', 'users.user_id = pengumuman.created_by')
            ->where(['pengumuman_id' => $pengumuman_id])
            ->first();
    }

    // Get Pengumuman data join with user by kategori
    public function getPengumumanByKategori($kategori)
    {
        return $this->select('pengumuman.*, users.*')
            ->join('users', 'users.user_id = pengumuman.created_by')
            ->where(['kategori' => $kategori])
            ->orderBy('pengumuman.created_at', 'DESC')
            ->findAll();
    }

    // Edit Pengumuman data
    public function editPengumuman($data, $pengumuman_id)
    {
        return $this->db->table($this->table)->update($data, ['pengumuman_id' => $pengumuman_id]);
    }

    // Delete Pengumuman data
    public function deletePengumuman($pengumuman_id)
    {
        return $this->db->table($this->table)->delete(['pengumuman_id' => $pengumuman_id]);
    }

    // Save Pengumuman data
    public function savePengumuman($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
}
