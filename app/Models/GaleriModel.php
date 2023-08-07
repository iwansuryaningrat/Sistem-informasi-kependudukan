<?php

namespace App\Models;

use CodeIgniter\Model;

class GaleriModel extends Model
{
    protected $table            = 'galeri';
    protected $primaryKey       = 'galeri_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $useSoftDeletes   = true;
    protected $allowedFields    = ['judul', 'deskripsi', 'uploaded_by', 'thumbnail', 'kategori', 'created_at', 'updated_at', 'deleted_at'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Get Galeri data join with user and sort by created_at desc
    public function getGaleri($galeri_id = null)
    {
        if ($galeri_id == null) {
            return $this->select('galeri.*, users.nama')
                ->join('users', 'users.nik = galeri.uploaded_by')
                ->orderBy('galeri.created_at', 'DESC')
                ->findAll();
        }

        return $this->select('galeri.*, users.nama')
            ->join('users', 'users.nik = galeri.uploaded_by')
            ->where(['galeri_id' => $galeri_id])
            ->first();
    }

    // Edit Galeri data
    public function editGaleri($data, $galeri_id)
    {
        return $this->db->table($this->table)->update($data, ['galeri_id' => $galeri_id]);
    }

    // Delete Galeri data
    public function deleteGaleri($galeri_id)
    {
        return $this->db->table($this->table)->delete(['galeri_id' => $galeri_id]);
    }

    // Save Galeri data
    public function saveGaleri($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
}
