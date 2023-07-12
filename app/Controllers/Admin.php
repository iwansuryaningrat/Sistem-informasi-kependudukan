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
use App\Controllers\PesanController;
use App\Controllers\UserController;

use App\Models\AdministrasiModel;
use App\Models\FotoModel;
use App\Models\GaleriModel;
use App\Models\KeluargaModel;
use App\Models\PelaporanModel;
use App\Models\PengumumanModel;
use App\Models\PesanModel;
use App\Models\UsersModel;

class Admin extends BaseController
{
    // Controllers
    protected $administrasiController;
    protected $auth;
    protected $fotoController;
    protected $galeriController;
    protected $keluargaController;
    protected $pelaporanController;
    protected $pengumumanController;
    protected $pesanController;
    protected $userController;

    // Models
    protected $administrasiModel;
    protected $fotoModel;
    protected $galeriModel;
    protected $keluargaModel;
    protected $pelaporanModel;
    protected $pengumumanModel;
    protected $pesanModel;
    protected $usersModel;

    protected $session;

    public function __construct()
    {
        // Controllers
        $this->administrasiController = new AdministrasiController();
        $this->auth = new Auth();
        $this->fotoController = new FotoController();
        $this->galeriController = new GaleriController();
        $this->keluargaController = new KeluargaController();
        $this->pelaporanController = new PelaporanController();
        $this->pengumumanController = new PengumumanController();
        $this->pesanController = new PesanController();
        $this->userController = new UserController();

        // Models
        $this->administrasiModel = new AdministrasiModel();
        $this->fotoModel = new FotoModel();
        $this->galeriModel = new GaleriModel();
        $this->keluargaModel = new KeluargaModel();
        $this->pelaporanModel = new PelaporanModel();
        $this->pengumumanModel = new PengumumanModel();
        $this->pesanModel = new PesanModel();
        $this->usersModel = new UsersModel();

        // Get Session Data
        $this->session = \Config\Services::session();
    }

    private function getReqAdministrasi()
    {
        $reqAdministrasi = $this->administrasiModel->getAdministrasiCount() ?? 0;
        return $reqAdministrasi;
    }

    private function getReqLaporan()
    {
        $reqLaporan = $this->pelaporanModel->getPelaporanCount() ?? 0;
        return $reqLaporan;
    }

    private function getReqPesan()
    {
        $reqPesan = $this->pesanModel->countPesan() ?? 0;
        return $reqPesan;
    }

    public function index()
    {
        //  get session data
        $sessionData = $this->session->get();
        // dd($sessionData);
        $data = [
            'title' => 'Admin Dashboard',
            'active' => 'dashboard',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
        ];

        return view('admin/index', $data);
    }

    public function families()
    {
        $dataKeluarga = $this->keluargaModel->getKeluarga();

        $data = [
            'title' => 'Data Keluarga',
            'active' => 'penduduk',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
            'dataKeluarga' => $dataKeluarga
        ];

        return view('admin/daftarkeluarga', $data);
    }

    public function people()
    {
        $dataPenduduk = $this->usersModel->getUsers();

        $data = [
            'title' => 'Data Penduduk',
            'active' => 'penduduk',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
            'dataPenduduk' => $dataPenduduk
        ];

        return view('admin/daftarpenduduk', $data);
    }

    public function addFamily()
    {
        $data = [
            'title' => 'Tambah Keluarga',
            'active' => 'penduduk',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
        ];
        dd($data);

        return view('admin/add/addkeluarga', $data);
    }

    public function addPeople()
    {
        $data = [
            'title' => 'Tambah Penduduk',
            'active' => 'penduduk',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
        ];
        dd($data);

        return view('admin/add/addpenduduk', $data);
    }

    public function editKeluarga($id)
    {
        $data = [
            'title' => 'Edit Keluarga',
            'active' => 'penduduk',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
        ];
        dd($data);

        return view('admin/edit/editkeluarga', $data);
    }

    public function editPenduduk($id)
    {
        $data = [
            'title' => 'Edit Penduduk',
            'active' => 'penduduk',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
        ];
        dd($data);

        return view('admin/edit/editpenduduk', $data);
    }

    public function administrasi()
    {
        $dataAdministrasi = $this->administrasiModel->getAdministrasi();

        $data = [
            'title' => 'Administrasi',
            'active' => 'administrasi',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
            'dataAdministrasi' => $dataAdministrasi
        ];

        return view('admin/daftaradministrasi', $data);
    }

    public function addAdministrasi()
    {
        $data = [
            'title' => 'Tambah Administrasi',
            'active' => 'administrasi',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
        ];
        dd($data);

        return view('admin/add/addadministrasi', $data);
    }

    public function editAdministrasi($id)
    {
        $data = [
            'title' => 'Edit Administrasi',
            'active' => 'administrasi',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
        ];
        dd($data);

        return view('admin/edit/editadministrasi', $data);
    }

    public function pelaporan()
    {
        $data = [
            'title' => 'Pelaporan',
            'active' => 'pelaporan',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
        ];
        dd($data);

        return view('admin/daftarlaporan', $data);
    }

    public function editPelaporan($id)
    {
        $data = [
            'title' => 'Edit Pelaporan',
            'active' => 'pelaporan',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
        ];
        dd($data);

        return view('admin/edit/editlaporan', $data);
    }

    public function galeri()
    {
        $data = [
            'title' => 'Galeri',
            'active' => 'galeri',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
        ];
        dd($data);

        return view('admin/daftargaleri', $data);
    }

    public function addGaleri()
    {
        $data = [
            'title' => 'Tambah Galeri',
            'active' => 'galeri',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
        ];
        dd($data);

        return view('admin/add/addgaleri', $data);
    }

    public function editGaleri($id)
    {
        $data = [
            'title' => 'Edit Galeri',
            'active' => 'galeri',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
        ];
        dd($data);

        return view('admin/edit/editgaleri', $data);
    }

    public function foto()
    {
        $data = [
            'title' => 'Foto',
            'active' => 'galeri',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
        ];
        dd($data);

        return view('admin/daftarfoto', $data);
    }

    public function addFoto()
    {
        $data = [
            'title' => 'Tambah Foto',
            'active' => 'galeri',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
        ];
        dd($data);

        return view('admin/add/addfoto', $data);
    }

    public function editFoto($id)
    {
        $data = [
            'title' => 'Edit Foto',
            'active' => 'galeri',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
        ];
        dd($data);

        return view('admin/edit/editfoto', $data);
    }

    public function pengumuman()
    {
        $data = [
            'title' => 'Pengumuman',
            'active' => 'pengumuman',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
        ];
        dd($data);

        return view('admin/daftarpengumuman', $data);
    }

    public function addPengumuman()
    {
        $data = [
            'title' => 'Buat Pengumuman',
            'active' => 'pengumuman',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
        ];
        dd($data);

        return view('admin/add/addpengumuman', $data);
    }

    public function editPengumuman($id)
    {
        $data = [
            'title' => 'Buat Pengumuman',
            'active' => 'pengumuman',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
        ];
        dd($data);

        return view('admin/edit/editpengumuman', $data);
    }

    // Contact
    public function pesan()
    {
        $data = [
            'title' => 'Pesan',
            'active' => 'pesan',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'session' => $this->session->get(),
            'reqPesan' => $this->getReqPesan(),
        ];
        dd($data);

        return view('admin/pesan', $data);
    }
}
