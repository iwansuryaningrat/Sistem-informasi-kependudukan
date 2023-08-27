<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriGaleriModel extends Model
{
    protected $table            = 'kategori_galeri';
    protected $primaryKey       = 'kategori_galeri_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $useSoftDeletes   = true;
    protected $allowedFields    = ['nama_kategori', 'created_at', 'updated_at', 'deleted_at'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function getKategoriGaleri($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['kategori_galeri_id' => $id])->first();
    }
}
