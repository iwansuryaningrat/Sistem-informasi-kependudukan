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
        $dataStatusKependudukan = [
            "pendudukTetap" => $this->usersModel->countUsersByStatusKependudukan('Tetap')['total'] ? $this->usersModel->countUsersByStatusKependudukan('Tetap')['total'] : 0,
            "pendudukSementara" => $this->usersModel->countUsersByStatusKependudukan('Sementara')['total'] ? $this->usersModel->countUsersByStatusKependudukan('Sementara')['total'] : 0,
            "pendudukPendatang" => $this->usersModel->countUsersByStatusKependudukan('Pendatang')['total'] ? $this->usersModel->countUsersByStatusKependudukan('Pendatang')['total'] : 0,
            "pendudukPindahan" => $this->usersModel->countUsersByStatusKependudukan('Pindahan')['total'] ? $this->usersModel->countUsersByStatusKependudukan('Pindahan')['total'] : 0,
        ];

        $dataStatusPerkawinan = [
            'belumKawin' => $this->usersModel->countUsersByStatusPerkawinan('Belum Kawin')['total'] ? $this->usersModel->countUsersByStatusPerkawinan('Belum Kawin')['total'] : 0,
            'kawin' => $this->usersModel->countUsersByStatusPerkawinan('Kawin')['total'] ? $this->usersModel->countUsersByStatusPerkawinan('Kawin')['total'] : 0,
            'ceraiHidup' => $this->usersModel->countUsersByStatusPerkawinan('Cerai Hidup')['total'] ? $this->usersModel->countUsersByStatusPerkawinan('Cerai Hidup')['total'] : 0,
            'ceraiMati' => $this->usersModel->countUsersByStatusPerkawinan('Cerai Mati')['total'] ? $this->usersModel->countUsersByStatusPerkawinan('Cerai Mati')['total'] : 0,
        ];

        $dataStatusPendidikan = [
            'tidakSekolah' => $this->usersModel->countUsersByPendidikan('Tidak Sekolah')['total'] ? $this->usersModel->countUsersByPendidikan('Tidak Sekolah')['total'] : 0,
            'sd' => $this->usersModel->countUsersByPendidikan('SD')['total'] ? $this->usersModel->countUsersByPendidikan('SD')['total'] : 0,
            'smp' => $this->usersModel->countUsersByPendidikan('SMP')['total'] ? $this->usersModel->countUsersByPendidikan('SMP')['total'] : 0,
            'sma' => $this->usersModel->countUsersByPendidikan('SMA')['total'] ? $this->usersModel->countUsersByPendidikan('SMA')['total'] : 0,
            'd1' => $this->usersModel->countUsersByPendidikan('D1')['total'] ? $this->usersModel->countUsersByPendidikan('D1')['total'] : 0,
            'd2' => $this->usersModel->countUsersByPendidikan('D2')['total'] ? $this->usersModel->countUsersByPendidikan('D2')['total'] : 0,
            'd3' => $this->usersModel->countUsersByPendidikan('D3')['total'] ? $this->usersModel->countUsersByPendidikan('D3')['total'] : 0,
            'd4' => $this->usersModel->countUsersByPendidikan('D4')['total'] ? $this->usersModel->countUsersByPendidikan('D4')['total'] : 0,
            's1' => $this->usersModel->countUsersByPendidikan('S1')['total'] ? $this->usersModel->countUsersByPendidikan('S1')['total'] : 0,
            's2' => $this->usersModel->countUsersByPendidikan('S2')['total'] ? $this->usersModel->countUsersByPendidikan('S2')['total'] : 0,
            's3' => $this->usersModel->countUsersByPendidikan('S3')['total'] ? $this->usersModel->countUsersByPendidikan('S3')['total'] : 0,
        ];

        $dataUsia = [
            'anak' => $this->usersModel->countUsersByAge(0, 16)['total'] ? $this->usersModel->countUsersByAge(0, 16)['total'] : 0,
            'remaja' => $this->usersModel->countUsersByAge(17, 25)['total'] ? $this->usersModel->countUsersByAge(17, 25)['total'] : 0,
            'dewasa' => $this->usersModel->countUsersByAge(26, 35)['total'] ? $this->usersModel->countUsersByAge(26, 35)['total'] : 0,
            'ortu' => $this->usersModel->countUsersByAge(36, 50)['total'] ? $this->usersModel->countUsersByAge(36, 50)['total'] : 0,
            'lansia' => $this->usersModel->countUsersByAge(51, 100)['total'] ? $this->usersModel->countUsersByAge(51, 100)['total'] : 0,
        ];

        $dataAgama = [
            'islam' => $this->usersModel->countUsersByAgama('Islam')['total'] ? $this->usersModel->countUsersByAgama('Islam')['total'] : 0,
            'kristen' => $this->usersModel->countUsersByAgama('Kristen')['total'] ? $this->usersModel->countUsersByAgama('Kristen')['total'] : 0,
            'katholik' => $this->usersModel->countUsersByAgama('Katholik')['total'] ? $this->usersModel->countUsersByAgama('Katholik')['total'] : 0,
            'hindu' => $this->usersModel->countUsersByAgama('Hindu')['total'] ? $this->usersModel->countUsersByAgama('Hindu')['total'] : 0,
            'budha' => $this->usersModel->countUsersByAgama('Budha')['total'] ? $this->usersModel->countUsersByAgama('Budha')['total'] : 0,
            'konghucu' => $this->usersModel->countUsersByAgama('Konghucu')['total'] ? $this->usersModel->countUsersByAgama('Konghucu')['total'] : 0,
        ];

        $data = [
            'title' => 'Admin Dashboard',
            'active' => 'dashboard',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
            'totalPenduduk' => $this->usersModel->countUsers(),
            'totalKeluarga' => $this->keluargaModel->countKeluarga(),
            'totalAdministrasi' => $this->administrasiModel->countAdministrasi(),
            'totalLakilaki' => $this->usersModel->countUsersByGender('Laki-laki')['total'],
            'totalPerempuan' => $this->usersModel->countUsersByGender('Perempuan')['total'],
            'dataStatusKependudukan' => $dataStatusKependudukan,
            'dataStatusPerkawinan' => $dataStatusPerkawinan,
            'dataStatusPendidikan' => $dataStatusPendidikan,
            'dataUsia' => $dataUsia,
            'dataAgama' => $dataAgama,
            'session' => $this->session->get(),
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
            'dataKeluarga' => $dataKeluarga,
            'session' => $this->session->get(),
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
            'dataPenduduk' => $dataPenduduk,
            'session' => $this->session->get(),
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
            'session' => $this->session->get(),
        ];
        session()->setFlashdata('success', 'Data pribadi berhasil diperbarui');
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
            'dataAdministrasi' => $dataAdministrasi,
            'session' => $this->session->get(),
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
            'session' => $this->session->get(),
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
            'session' => $this->session->get(),
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
            'session' => $this->session->get(),
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
            'session' => $this->session->get(),
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
            'session' => $this->session->get(),
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
            'session' => $this->session->get(),
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
            'session' => $this->session->get(),
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
            'session' => $this->session->get(),
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
            'session' => $this->session->get(),
            'dataPesan' => $this->pesanModel->getPesan(),
        ];
        dd($data);

        return view('admin/pesan', $data);
    }
}
