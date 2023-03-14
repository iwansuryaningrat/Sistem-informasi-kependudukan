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
    protected $allowedFields    = ['galeri_id', 'nama_foto', 'foto_path', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Get Foto data join with galeri
    public function getFoto($foto_id = null)
    {
        if ($foto_id == null) {
            return $this->select('foto.*, galeri.nama_galeri')
                ->join('galeri', 'galeri.galeri_id = foto.galeri_id')
                ->findAll();
        }

        return $this->select('foto.*, galeri.nama_galeri')
            ->join('galeri', 'galeri.galeri_id = foto.galeri_id')
            ->where(['foto_id' => $foto_id])
            ->first();
    }

    // Get Foto data by galeri_id
    public function getFotoByGaleriId($galeri_id)
    {
        return $this->select('foto.*, galeri.nama_galeri')
            ->join('galeri', 'galeri.galeri_id = foto.galeri_id')
            ->where(['galeri_id' => $galeri_id])
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
}
