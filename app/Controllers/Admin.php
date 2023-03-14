<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Controllers\AdministrasiController;
use App\Controllers\AuthController;
use App\Controllers\FotoController;
use App\Controllers\GaleriController;
use App\Controllers\KeluargaController;
use App\Controllers\PelaporanController;
use App\Controllers\PengumumanController;

class Admin extends BaseController
{
    protected $administrasiController;
    protected $authController;
    protected $fotoController;
    protected $galeriController;
    protected $keluargaController;
    protected $pelaporanController;
    protected $pengumumanController;

    public function __construct()
    {
        $this->administrasiController = new AdministrasiController();
        $this->authController = new AuthController();
        $this->fotoController = new FotoController();
        $this->galeriController = new GaleriController();
        $this->keluargaController = new KeluargaController();
        $this->pelaporanController = new PelaporanController();
        $this->pengumumanController = new PengumumanController();
    }

    public function index()
    {
        $data = [
            'title' => 'Admin Dashboard',
            'active' => 'dashboard'
        ];
        return view('admin/index', $data);
    }

    public function families()
    {
        $data = [
            'title' => 'Data Keluarga',
            'active' => 'families'
        ];
        return view('admin/families', $data);
    }
}
