<?php

namespace App\Controllers;

use App\Controllers\FotoController;
use App\Controllers\GaleriController;
use App\Controllers\PengumumanController;

class Home extends BaseController
{
    protected $fotoController;
    protected $galeriController;
    protected $pelaporanController;
    protected $pengumumanController;

    public function __construct()
    {
        $this->fotoController = new FotoController();
        $this->galeriController = new GaleriController();
        $this->pengumumanController = new PengumumanController();
    }

    public function index()
    {
        return view('welcome_message');
    }
}
