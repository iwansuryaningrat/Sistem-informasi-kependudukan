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
    protected $allowedFields    = ['no_kk', 'nama_kepala_keluarga', 'alamat', 'alamat_asal', 'foto_rumah', 'tgl_pindah', 'status', 'isExist', 'created_at', 'updated_at', 'deleted_at'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Get Keluarga data join with penduduk and sort by created_at desc
    public function getKeluarga($noKk = null)
    {
        if ($noKk == null) {
            return $this->select('keluarga.*, users.nik as nik_kepala_keluarga')
                ->join('users', 'users.nama = keluarga.nama_kepala_keluarga')
                ->where(['keluarga.deleted_at' => null, 'users.deleted_at' => null])
                ->orderBy('keluarga.status', 'DESC')
                ->orderBy('keluarga.created_at', 'DESC')
                ->findAll();
        }

        return $this->select('keluarga.*, users.nik as nik_kepala_keluarga')
            ->join('users', 'users.nama = keluarga.nama_kepala_keluarga')
            ->where(['keluarga.no_kk' => $noKk])
            ->first();
    }

    // Edit Keluarga data
    public function editKeluarga($data, $noKk)
    {
        return $this->db->table($this->table)->update($data, ['no_kk' => $noKk]);
    }

    // Delete Keluarga data
    public function deleteKeluarga($noKk)
    {
        return $this->db->table($this->table)->update(['deleted_at' => date('Y-m-d H:i:s')], ['no_kk' => $noKk]);
    }

    // Save Keluarga data
    public function saveKeluarga($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    // Count Keluarga data
    public function countKeluarga()
    {
        return $this->countAll();
    }
}
