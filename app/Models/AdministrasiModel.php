<?php

namespace App\Models;

use CodeIgniter\Model;

class AdministrasiModel extends Model
{
    protected $table            = 'administrasi';
    protected $primaryKey       = 'administrasi_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = ['pemohon', 'kategori', 'keperluan', 'deskripsi', 'no_surat', 'status', 'berkas', 'tgl_penerimaan', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
