<?php

namespace App\Models;

use CodeIgniter\Model;

class PesanModel extends Model
{
    protected $table            = 'pesan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_pengirim', 'email', 'kategori', 'pesan', 'status', 'updated_by', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Count Pesan while status = 'Belum Dibaca'
    public function countPesan()
    {
        return $this->where(['status' => 'Belum Dibaca'])->countAllResults();
    }

    // Get Pesan
    public function getPesan($id = null)
    {
        if ($id == null) {
            // Find all and order by created_at DESC
            return $this->orderBy('status', 'ASC')->findAll();
        } else {
            return $this->select('pesan.*, users.nama')
            ->join('users', 'users.nik = pesan.updated_by')
            ->where(['pesan.id' => $id])
            ->first();
        }
    }

    // Read Pesan
    public function readPesan($id, $nikAdmin)
    {
        $data = [
            'status' => 'Sudah Dibaca',
            'updated_by' => $nikAdmin,
        ];

        $this->where(['id' => $id])->set($data)->update();
    }
}
