<?php

namespace App\Models;

use CodeIgniter\Model;

class KeluargaModel extends Model
{
    protected $table            = 'keluarga';
    protected $primaryKey       = 'no_kk';
    protected $useAutoIncrement = false;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $useSoftDeletes   = true;
    protected $allowedFields    = ['no_kk', 'nama_kepala_keluarga', 'alamat', 'alamat_asal', 'foto_rumah', 'tgl_pindah', 'status', 'created_at', 'updated_at', 'deleted_at'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Get Keluarga data join with penduduk and sort by created_at desc
    public function getKeluarga($no_kk = null)
    {
        if ($no_kk == null) {
            return $this->select('*')
                ->orderBy('created_at', 'DESC')
                ->findAll();
        }

        return $this->where(['no_kk' => $no_kk])->first();
    }

    // Edit Keluarga data
    public function editKeluarga($data, $no_kk)
    {
        return $this->db->table($this->table)->update($data, ['no_kk' => $no_kk]);
    }

    // Delete Keluarga data
    public function deleteKeluarga($no_kk)
    {
        return $this->db->table($this->table)->delete(['no_kk' => $no_kk]);
    }

    // Save Keluarga data
    public function saveKeluarga($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
}
