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
    protected $user_data;

    public function __construct()
    {
        $this->administrasiController = new AdministrasiController();
        $this->fotoController = new FotoController();
        $this->galeriController = new GaleriController();
        $this->keluargaController = new KeluargaController();
        $this->pelaporanController = new PelaporanController();
        $this->pengumumanController = new PengumumanController();

        $this->user_data = [
            'nik' => session()->get('nik'),
            'no_kk' => session()->get('no_kk'),
            'nama' => session()->get('nama'),
            'status' => session()->get('status'),
            'jenis_kelamin' => session()->get('jenis_kelamin'),
            'tempat_lahir' => session()->get('tempat_lahir'),
            'tgl_lahir' => session()->get('tgl_lahir'),
            'usia' => session()->get('usia'),
            'status_perkawinan' => session()->get('status_perkawinan'),
            'pendidikan' => session()->get('pendidikan'),
            'email' => session()->get('email'),
            'no_hp' => session()->get('no_hp'),
            'role' => session()->get('role'),
            'foto' => session()->get('foto'),
            'status_kependudukan' => session()->get('status_kependudukan'),
            'alamat' => session()->get('alamat'),
            'isLoggedIn' => session()->get('isLoggedIn'),
        ];
    }

    public function index()
    {
        $data = [
            'title' => 'Warga Site | Home',
            'navbar' => 'home',
            'isLoggedin' => $this->user_data['isLoggedIn'],
        ];

        return view('/users/index', $data);
    }

    public function pelaporan()
    {
        $data = [
            'title' => 'Menu Pelaporan | Warga Site',
            'navbar' => 'pelaporan',
            'isLoggedin' => $this->user_data['isLoggedIn'],
        ];

        return view('/users/report/report', $data);
    }

    public function galeri()
    {
        $data = [
            'title' => 'Galeri | Warga Site',
            'navbar' => 'galeri',
            'isLoggedin' => $this->user_data['isLoggedIn'],
        ];

        return view('/users/gallery/gallery', $data);
    }

    public function pengumuman()
    {
        $data = [
            'title' => 'Portal Pengumuman | Warga Site',
            'navbar' => 'pengumuman',
            'isLoggedin' => $this->user_data['isLoggedIn'],
        ];

        return view('/users/news/announcement', $data);
    }

    // Keluarga Method
    public function keluarga()
    {
        $data = [
            'title' => 'Menu Keluarga | Warga Site',
            'navbar' => 'keluarga',
            'isLoggedin' => $this->user_data['isLoggedIn'],
        ];

        return view('/users/family/family', $data);
    }

    public function detailkeluarga()
    {
        $data = [
            'title' => 'Detail Keluarga | Warga Site',
            'navbar' => 'keluarga',
            'isLoggedin' => $this->user_data['isLoggedIn'],
        ];

        return view('/users/family/family-detail', $data);
    }

    public function formTambahKeluarga()
    {
        $data = [
            'title' => 'Form Tambah Keluarga | Warga Site',
            'navbar' => 'keluarga',
            'isLoggedin' => $this->user_data['isLoggedIn'],
        ];

        return view('/users/family/family-form-add', $data);
    }

    public function formEditKeluarga()
    {
        $data = [
            'title' => 'Form Edit Keluarga | Warga Site',
            'navbar' => 'keluarga',
            'isLoggedin' => $this->user_data['isLoggedIn'],
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
            'isLoggedin' => $this->user_data['isLoggedIn'],
        ];

        return view('/users/administration/administration', $data);
    }

    public function detailadministrasi()
    {
        $data = [
            'title' => 'Detail Pengajuan Administrasi | Warga Site',
            'navbar' => 'administrasi',
            'isLoggedin' => $this->user_data['isLoggedIn'],
        ];

        return view('/users/administration/administration-detail', $data);
    }

    public function formTambahAdministrasi()
    {
        $data = [
            'title' => 'Form Pengajuan Administrasi | Warga Site',
            'navbar' => 'administrasi',
            'isLoggedin' => $this->user_data['isLoggedIn'],
        ];

        return view('/users/administration/administration-form-add', $data);
    }

    public function formEditAdministrasi()
    {
        $data = [
            'title' => 'Form Edit Pengajuan Administrasi | Warga Site',
            'navbar' => 'administrasi',
            'isLoggedin' => $this->user_data['isLoggedIn'],
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
            'isLoggedin' => $this->user_data['isLoggedIn'],
        ];

        return view('/users/contact/contact', $data);
    }
    // End of Contact Method

    // Profile Method
    public function profile()
    {
        $data = [
            'title' => 'Profile | Warga Site',
            'navbar' => 'profile',
            'isLoggedin' => $this->user_data['isLoggedIn'],
            'user' => $this->user_data,
        ];
        dd($data);

        return view('/users/dashboard/profile', $data);
    }
    // End of Profile Method
}
