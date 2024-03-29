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
    protected $allowedFields    = ['judul', 'deskripsi', 'created_by', 'thumbnail', 'kategori', 'total_foto', 'created_at', 'updated_at', 'deleted_at'];

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
            return $this->select('galeri.*, users.nama, kategori_galeri.nama_kategori')
                ->join('users', 'users.nik = galeri.created_by')
                ->join('kategori_galeri', 'kategori_galeri.kategori_galeri_id = galeri.kategori')
                ->orderBy('galeri.created_at', 'DESC')
                ->findAll();
        }

        return $this->select('galeri.*, users.nama, kategori_galeri.nama_kategori')
            ->join('users', 'users.nik = galeri.created_by')
            ->join('kategori_galeri', 'kategori_galeri.kategori_galeri_id = galeri.kategori')
            ->where(['galeri_id' => $galeri_id])
            ->first();
    }

    public function getGaleriTerbaru($limit = 6)
    {
        return $this->select('galeri.*, users.nama, kategori_galeri.nama_kategori')
            ->join('users', 'users.nik = galeri.created_by')
            ->join('kategori_galeri', 'kategori_galeri.kategori_galeri_id = galeri.kategori')
            ->orderBy('galeri.created_at', 'DESC')
            ->limit($limit)
            ->find();
    }

    // Edit Galeri data
    public function editGaleri($data, $galeri_id)
    {
        return $this->db->table($this->table)->update($data, ['galeri_id' => $galeri_id]);
    }

    // Save Galeri data
    public function saveGaleri($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    // get galeri by created_by
    public function getGaleriByCreatedBy($created_by)
    {
        return $this->select('galeri.*, users.nama, kategori_galeri.nama_kategori')
            ->join('users', 'users.nik = galeri.created_by')
            ->join('kategori_galeri', 'kategori_galeri.kategori_galeri_id = galeri.kategori')
            ->where(['galeri.created_by' => $created_by])
            ->orderBy('galeri.created_at', 'DESC')
            ->findAll();
    }

    // delete galeri by created_by
    public function deleteGaleriByCreatedBy($created_by)
    {
        return $this->db->table($this->table)->update(['deleted_at' => date('Y-m-d H:i:s')], ['created_by' => $created_by]);
    }

    // delete galeri by galeri_id
    public function deleteGaleriByGaleriId($galeri_id)
    {
        return $this->db->table($this->table)->update(['deleted_at' => date('Y-m-d H:i:s')], ['galeri_id' => $galeri_id]);
    }
}
