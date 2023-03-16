<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Controllers\AdministrasiController;
use App\Controllers\Auth;
use App\Controllers\FotoController;
use App\Controllers\GaleriController;
use App\Controllers\KeluargaController;
use App\Controllers\PelaporanController;
use App\Controllers\PengumumanController;

class Admin extends BaseController
{
    protected $administrasiController;
    protected $auth;
    protected $fotoController;
    protected $galeriController;
    protected $keluargaController;
    protected $pelaporanController;
    protected $pengumumanController;

    protected $session;

    public function __construct()
    {
        $this->administrasiController = new AdministrasiController();
        $this->auth = new Auth();
        $this->fotoController = new FotoController();
        $this->galeriController = new GaleriController();
        $this->keluargaController = new KeluargaController();
        $this->pelaporanController = new PelaporanController();
        $this->pengumumanController = new PengumumanController();

        // Get Session Data
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        //  get session data
        $sessionData = $this->session->get();
        dd($sessionData);
        $data = [
            'title' => 'Admin Dashboard',
            'active' => 'dashboard',
            'reqAdministrasi' => 0,
            'reqLaporan' => 0,
        ];

        return view('admin/index', $data);
    }

    public function families()
    {
        $data = [
            'title' => 'Data Keluarga',
            'active' => 'penduduk',
            'reqAdministrasi' => 0,
            'reqLaporan' => 0,
        ];

        return view('admin/daftarkeluarga', $data);
    }

    public function people()
    {
        $data = [
            'title' => 'Data Penduduk',
            'active' => 'penduduk',
            'reqAdministrasi' => 0,
            'reqLaporan' => 0,
        ];

        return view('admin/daftarpenduduk', $data);
    }

    public function addFamily()
    {
        $data = [
            'title' => 'Tambah Keluarga',
            'active' => 'penduduk',
            'reqAdministrasi' => 0,
            'reqLaporan' => 0,
        ];

        return view('admin/add/addkeluarga', $data);
    }

    public function addPeople()
    {
        $data = [
            'title' => 'Tambah Penduduk',
            'active' => 'penduduk',
            'reqAdministrasi' => 0,
            'reqLaporan' => 0,
        ];

        return view('admin/add/addpenduduk', $data);
    }

    public function editKeluarga($id)
    {
        $data = [
            'title' => 'Edit Keluarga',
            'active' => 'penduduk',
            // 'keluarga' => $this->keluargaController->detailFamily($id),
            'reqAdministrasi' => 0,
            'reqLaporan' => 0,
        ];

        return view('admin/edit/editkeluarga', $data);
    }

    public function editPenduduk($id)
    {
        $data = [
            'title' => 'Edit Penduduk',
            'active' => 'penduduk',
            // 'penduduk' => $this->administrasiController->detailPenduduk($id),
            'reqAdministrasi' => 0,
            'reqLaporan' => 0,
        ];

        return view('admin/edit/editpenduduk', $data);
    }

    public function administrasi()
    {
        $data = [
            'title' => 'Administrasi',
            'active' => 'administrasi',
            'reqAdministrasi' => 0,
            'reqLaporan' => 0,
        ];

        return view('admin/daftaradministrasi', $data);
    }

    public function addAdministrasi()
    {
        $data = [
            'title' => 'Tambah Administrasi',
            'active' => 'administrasi',
            'reqAdministrasi' => 0,
            'reqLaporan' => 0,
        ];

        return view('admin/add/addadministrasi', $data);
    }

    public function editAdministrasi($id)
    {
        $data = [
            'title' => 'Edit Administrasi',
            'active' => 'administrasi',
            // 'administrasi' => $this->administrasiController->detailAdministrasi($id),
            'reqAdministrasi' => 0,
            'reqLaporan' => 0,
        ];

        return view('admin/edit/editadministrasi', $data);
    }

    public function pelaporan()
    {
        $data = [
            'title' => 'Pelaporan',
            'active' => 'pelaporan',
            'reqAdministrasi' => 0,
            'reqLaporan' => 0,
        ];

        return view('admin/daftarlaporan', $data);
    }

    public function editPelaporan($id)
    {
        $data = [
            'title' => 'Edit Pelaporan',
            'active' => 'pelaporan',
            // 'pelaporan' => $this->pelaporanController->detailPelaporan($id),
            'reqAdministrasi' => 0,
            'reqLaporan' => 0,
        ];

        return view('admin/edit/editlaporan', $data);
    }

    public function galeri()
    {
        $data = [
            'title' => 'Galeri',
            'active' => 'galeri',
            'reqAdministrasi' => 0,
            'reqLaporan' => 0,
        ];

        return view('admin/daftargaleri', $data);
    }

    public function addGaleri()
    {
        $data = [
            'title' => 'Tambah Galeri',
            'active' => 'galeri',
            'reqAdministrasi' => 0,
            'reqLaporan' => 0,
        ];

        return view('admin/add/addgaleri', $data);
    }

    public function editGaleri($id)
    {
        $data = [
            'title' => 'Edit Galeri',
            'active' => 'galeri',
            // 'galeri' => $this->galeriController->detailGaleri($id),
            'reqAdministrasi' => 0,
            'reqLaporan' => 0,
        ];

        return view('admin/edit/editgaleri', $data);
    }

    public function foto()
    {
        $data = [
            'title' => 'Foto',
            'active' => 'galeri',
            'reqAdministrasi' => 0,
            'reqLaporan' => 0,
        ];

        return view('admin/daftarfoto', $data);
    }

    public function addFoto()
    {
        $data = [
            'title' => 'Tambah Foto',
            'active' => 'galeri',
            'reqAdministrasi' => 0,
            'reqLaporan' => 0,
        ];

        return view('admin/add/addfoto', $data);
    }

    public function editFoto($id)
    {
        $data = [
            'title' => 'Edit Foto',
            'active' => 'galeri',
            // 'foto' => $this->fotoController->detailFoto($id),
            'reqAdministrasi' => 0,
            'reqLaporan' => 0,
        ];

        return view('admin/edit/editfoto', $data);
    }

    public function pengumuman()
    {
        $data = [
            'title' => 'Pengumuman',
            'active' => 'pengumuman',
            'reqAdministrasi' => 0,
            'reqLaporan' => 0,
        ];

        return view('admin/daftarpengumuman', $data);
    }

    public function addPengumuman()
    {
        $data = [
            'title' => 'Buat Pengumuman',
            'active' => 'pengumuman',
            'reqAdministrasi' => 0,
            'reqLaporan' => 0,
        ];

        return view('admin/add/addpengumuman', $data);
    }

    public function editPengumuman($id)
    {
        $data = [
            'title' => 'Buat Pengumuman',
            'active' => 'pengumuman',
            // 'pengumuman' => $this->pengumumanController->detailPengumuman($id),
            'reqAdministrasi' => 0,
            'reqLaporan' => 0,
        ];

        return view('admin/edit/editpengumuman', $data);
    }
}
