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
    protected $useSoftDeletes   = true;
    protected $allowedFields    = ['kategori', 'judul_pengumuman', 'deskripsi', 'tanggal', 'jam', 'tempat', 'thumbnail', 'status', 'created_by', 'created_at', 'updated_at', 'deleted_at'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Get Pengumuman data join with user and sort by created_at desc
    public function getPengumuman($pengumuman_id = null)
    {
        if ($pengumuman_id == null) {
            return $this->select('pengumuman.*, users.nama')
                ->join('users', 'users.nik = pengumuman.created_by')
                ->orderBy('pengumuman.created_at', 'DESC')
                ->findAll();
        }

        return $this->select('pengumuman.*, users.nama')
            ->join('users', 'users.nik = pengumuman.created_by')
            ->where(['pengumuman_id' => $pengumuman_id])
            ->first();
    }

    // Get Pengumuman terbaru
    public function getPengumumanTerbaru($limit = 3)
    {
        return $this->select('pengumuman.*, users.nama')
            ->join('users', 'users.nik = pengumuman.created_by')
            ->orderBy('pengumuman.created_at', 'DESC')
            ->limit($limit)
            ->find();
    }

    // Get Pengumuman data join with user by kategori
    public function getPengumumanByKategori($kategori)
    {
        return $this->select('pengumuman.*, users.nama')
            ->join('users', 'users.nik = pengumuman.created_by')
            ->where(['kategori' => $kategori])
            ->orderBy('pengumuman.created_at', 'DESC')
            ->findAll();
    }

    // Edit Pengumuman data
    public function editPengumuman($data, $pengumuman_id)
    {
        return $this->db->table($this->table)->update($data, ['pengumuman_id' => $pengumuman_id]);
    }

    // Save Pengumuman data
    public function savePengumuman($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    // Get Pengumuman Kategori
    public function getPengumumanKategori()
    {
        return ['Kesehatan', 'Pendidikan', 'Sosial', 'Ekonomi', 'Lingkungan', 'Lainnya'];
    }

    public function getStatus()
    {
        return ['Akan Berlangsung', 'Sedang Berlangsung', 'Selesai'];
    }

    // delete pengumuman by pengumuman_id
    public function deletePengumumanByPengumumanId($pengumuman_id)
    {
        return $this->db->table($this->table)->update(['deleted_at' => date('Y-m-d H:i:s')], ['pengumuman_id' => $pengumuman_id]);
    }
}
