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

class Users extends BaseController
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
        $this->fotoController = new FotoController();
        $this->galeriController = new GaleriController();
        $this->keluargaController = new KeluargaController();
        $this->pelaporanController = new PelaporanController();
        $this->pengumumanController = new PengumumanController();
    }

    public function administrasi()
    {
        $data = [
            'title' => 'Menu Administrasi | Warga Site',
            'navbar' => 'administrasi',
        ];

        return view('/users/administration', $data);
    }

    public function pelaporan()
    {
        $data = [
            'title' => 'Menu Pelaporan | Warga Site',
            'navbar' => 'pelaporan',
        ];

        return view('/users/report', $data);
    }

    public function galeri()
    {
        $data = [
            'title' => 'Galeri | Warga Site',
            'navbar' => 'galeri',
        ];

        return view('/users/gallery', $data);
    }

    public function pengumuman()
    {
        $data = [
            'title' => 'Portal Pengumuman | Warga Site',
            'navbar' => 'pengumuman',
        ];

        return view('/users/announcement', $data);
    }

    public function profile()
    {
        $data = [
            'title' => 'Profile | Warga Site',
            'navbar' => 'profile',
        ];

        return view('/users/profile', $data);
    }

    // Keluarga Method
    public function keluarga()
    {
        $data = [
            'title' => 'Menu Keluarga | Warga Site',
            'navbar' => 'keluarga',
        ];

        return view('/users/family', $data);
    }

    public function detailkeluarga()
    {
        $data = [
            'title' => 'Detail Keluarga | Warga Site',
            'navbar' => 'keluarga',
        ];

        return view('/users/family-detail', $data);
    }

    public function formTambahKeluarga()
    {
        $data = [
            'title' => 'Form Tambah Keluarga | Warga Site',
            'navbar' => 'keluarga',
        ];

        return view('/users/family-form-add', $data);
    }

    public function formEditKeluarga()
    {
        $data = [
            'title' => 'Form Edit Keluarga | Warga Site',
            'navbar' => 'keluarga',
        ];

        return view('/users/family-form-edit', $data);
    }
    // End of Keluarga Method
}
