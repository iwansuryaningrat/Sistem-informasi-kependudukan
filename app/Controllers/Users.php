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

    public function pelaporan()
    {
        $data = [
            'title' => 'Menu Pelaporan | Warga Site',
            'navbar' => 'pelaporan',
            'isLoggedin' => false,
        ];

        return view('/users/report/report', $data);
    }

    public function galeri()
    {
        $data = [
            'title' => 'Galeri | Warga Site',
            'navbar' => 'galeri',
            'isLoggedin' => false,
        ];

        return view('/users/gallery/gallery', $data);
    }

    public function pengumuman()
    {
        $data = [
            'title' => 'Portal Pengumuman | Warga Site',
            'navbar' => 'pengumuman',
            'isLoggedin' => false,
        ];

        return view('/users/news/announcement', $data);
    }

    public function profile()
    {
        $data = [
            'title' => 'Profile | Warga Site',
            'navbar' => 'profile',
            'isLoggedin' => false,
        ];

        return view('/users/dashboard/profile', $data);
    }

    // Keluarga Method
    public function keluarga()
    {
        $data = [
            'title' => 'Menu Keluarga | Warga Site',
            'navbar' => 'keluarga',
            'isLoggedin' => false,
        ];

        return view('/users/family/family', $data);
    }

    public function detailkeluarga()
    {
        $data = [
            'title' => 'Detail Keluarga | Warga Site',
            'navbar' => 'keluarga',
            'isLoggedin' => false,
        ];

        return view('/users/family/family-detail', $data);
    }

    public function formTambahKeluarga()
    {
        $data = [
            'title' => 'Form Tambah Keluarga | Warga Site',
            'navbar' => 'keluarga',
            'isLoggedin' => false,
        ];

        return view('/users/family/family-form-add', $data);
    }

    public function formEditKeluarga()
    {
        $data = [
            'title' => 'Form Edit Keluarga | Warga Site',
            'navbar' => 'keluarga',
            'isLoggedin' => false,
        ];

        return view('/users/family/family-form-edit', $data);
    }
    // End of Keluarga Method

    // Administrasi Method
    public function administrasi()
    {
        $data = [
            'title' => 'Menu Administrasi | Warga Site',
            'navbar' => 'administrasi',
            'isLoggedin' => false,
        ];

        return view('/users/administration/administration', $data);
    }

    public function detailadministrasi()
    {
        $data = [
            'title' => 'Detail Pengajuan Administrasi | Warga Site',
            'navbar' => 'administrasi',
            'isLoggedin' => false,
        ];

        return view('/users/administration/administration-detail', $data);
    }

    public function formTambahAdministrasi()
    {
        $data = [
            'title' => 'Form Pengajuan Administrasi | Warga Site',
            'navbar' => 'administrasi',
            'isLoggedin' => false,
        ];

        return view('/users/administration/administration-form-add', $data);
    }

    public function formEditAdministrasi()
    {
        $data = [
            'title' => 'Form Edit Pengajuan Administrasi | Warga Site',
            'navbar' => 'administrasi',
            'isLoggedin' => false,
        ];

        return view('/users/administration/administration-form-edit', $data);
    }
    // End of Administrasi Method

    // Contact Method
    public function contact()
    {
        $data = [
            'title' => 'Kontak Kami | Warga Site',
            'navbar' => 'contact',
            'isLoggedin' => false,
        ];

        return view('/users/contact/contact', $data);
    }
    // End of Contact Method

    // Profile Method
    public function profileEdit()
    {
        $data = [
            'title' => 'Edit Profile | Warga Site',
            'navbar' => 'profile',
            'isLoggedin' => false,
        ];

        return view('/users/dashboard/profile', $data);
    }
    // End of Profile Method
}
