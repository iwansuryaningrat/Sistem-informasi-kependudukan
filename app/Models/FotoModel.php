<?php

namespace App\Models;

use CodeIgniter\Model;

class FotoModel extends Model
{
    protected $table            = 'foto';
    protected $primaryKey       = 'foto_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $useSoftDeletes   = true;
    protected $allowedFields    = ['galeri_id', 'foto', 'uploaded_by', 'isThumbnail', 'caption', 'created_at', 'updated_at', 'deleted_at'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Get Foto data join with galeri and sort by created_at desc
    public function getFoto($foto_id = null)
    {
        if ($foto_id == null) {
            return $this->select('foto.*, galeri.judul, galeri.created_by, users.nama')
                ->join('galeri', 'galeri.galeri_id = foto.galeri_id')
                ->join('users', 'users.nik = galeri.created_by')
                ->orderBy('foto.created_at', 'DESC')
                ->findAll();
        }

        return $this->select('foto.*, galeri.judul, galeri.created_by, users.nama')
            ->join('galeri', 'galeri.galeri_id = foto.galeri_id')
            ->join('users', 'users.nik = galeri.created_by')
            ->where(['foto_id' => $foto_id])
            ->first();
    }

    // Get Foto data by galeri_id
    public function getFotoByGaleriId($galeri_id)
    {
        return $this->select('foto.*, galeri.judul, users.nama, users.foto as foto_profil')
            ->join('galeri', 'galeri.galeri_id = foto.galeri_id')
            ->join('users', 'users.nik = foto.uploaded_by')
            ->where(['galeri.galeri_id' => $galeri_id])
            ->orderBy('foto.created_at', 'DESC')
            ->findAll();
    }

    // Edit Foto data
    public function editFoto($data, $foto_id)
    {
        return $this->db->table($this->table)->update($data, ['foto_id' => $foto_id]);
    }

    // Delete Foto data
    public function deleteFoto($foto_id)
    {
        return $this->db->table($this->table)->delete(['foto_id' => $foto_id]);
    }

    // Save Foto data
    public function saveFoto($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    // delete foto by galeri_id
    public function deleteFotoByGaleriId($galeri_id)
    {
        return $this->db->table($this->table)->update(['deleted_at' => date('Y-m-d H:i:s'), 'isThumbnail' => false], ['galeri_id' => $galeri_id]);
    }

    // delete foto by foto_id
    public function deleteFotoByFotoId($foto_id)
    {
        return $this->db->table($this->table)->update(['deleted_at' => date('Y-m-d H:i:s')], ['foto_id' => $foto_id]);
    }
}
