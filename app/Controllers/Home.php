<?php

namespace App\Controllers;

use App\Controllers\AdministrasiController;
use App\Controllers\AuthController;
use App\Controllers\FotoController;
use App\Controllers\GaleriController;
use App\Controllers\KeluargaController;
use App\Controllers\PelaporanController;
use App\Controllers\PengumumanController;

class Home extends BaseController
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
        return view('welcome_message');
    }
}
