<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\AdministrasiModel;
use App\Models\FotoModel;
use App\Models\GaleriModel;
use App\Models\KategoriGaleriModel;
use App\Models\KeluargaModel;
use App\Models\PelaporanModel;
use App\Models\PengumumanModel;
use App\Models\PesanModel;
use App\Models\UsersModel;

class Admin extends BaseController
{
    // Models
    protected $administrasiModel;
    protected $fotoModel;
    protected $galeriModel;
    protected $kategoriGaleriModel;
    protected $keluargaModel;
    protected $pelaporanModel;
    protected $pengumumanModel;
    protected $pesanModel;
    protected $usersModel;

    protected $session;

    // Paths
    protected $zipFilePath = '/upload/zip/';
    protected $photoPath = '/upload/photos/galeri/';
    protected $fotoRumahPath = '/upload/photos/foto_rumah/';
    protected $pengumumanPath = '/upload/photos/pengumuman/';
    protected $profilePhotoPath = '/upload/photos/profile/';
    protected $filePaths = '/upload/files/';

    public function __construct()
    {
        // Models
        $this->administrasiModel = new AdministrasiModel();
        $this->fotoModel = new FotoModel();
        $this->galeriModel = new GaleriModel();
        $this->kategoriGaleriModel = new KategoriGaleriModel();
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
        return $this->administrasiModel->getAdministrasiCount() ?? 0;
    }

    private function getReqLaporan()
    {
        return $this->pelaporanModel->getPelaporanCount() ?? 0;
    }

    private function getReqPesan()
    {
        return $this->pesanModel->countPesan() ?? 0;
    }

    // Dashboard (Done)
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
            'profilePhotoPath' => $this->profilePhotoPath,
        ];

        return view('admin/index', $data);
    }

    // Keluarga (Done)
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
            'profilePhotoPath' => $this->profilePhotoPath,
        ];

        return view('admin/daftarkeluarga', $data);
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
            'profilePhotoPath' => $this->profilePhotoPath,
        ];

        return view('admin/add/addkeluarga', $data);
    }

    public function editKeluarga($id)
    {
        $keluarga = $this->keluargaModel->getKeluarga($id);
        $anggotaKeluarga = $this->usersModel->getUsersByKK($id);

        $data = [
            'title' => 'Edit Keluarga',
            'active' => 'penduduk',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
            'session' => $this->session->get(),
            'keluarga' => $keluarga,
            'anggotaKeluarga' => $anggotaKeluarga,
            'profilePhotoPath' => $this->profilePhotoPath,
            'path' => $this->fotoRumahPath,
        ];

        return view('admin/edit/editkeluarga', $data);
    }

    public function detailKeluarga($id)
    {
        $keluarga = $this->keluargaModel->getKeluarga($id);
        $anggotaKeluarga = $this->usersModel->getUsersByKK($id);

        $data = [
            'title' => 'Detail Keluarga',
            'active' => 'penduduk',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
            'session' => $this->session->get(),
            'keluarga' => $keluarga,
            'anggotaKeluarga' => $anggotaKeluarga,
            'profilePhotoPath' => $this->profilePhotoPath,
            'path' => $this->fotoRumahPath,
        ];

        return view('admin/detail/detailkeluarga', $data);
    }

    // Penduduk (Done)
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
            'profilePhotoPath' => $this->profilePhotoPath,
        ];

        return view('admin/daftarpenduduk', $data);
    }

    public function addPeople()
    {
        $dataKeluarga = $this->keluargaModel->getKeluarga();
        $data = [
            'title' => 'Tambah Penduduk',
            'active' => 'penduduk',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
            'session' => $this->session->get(),
            'dataKeluarga' => $dataKeluarga,
            'profilePhotoPath' => $this->profilePhotoPath,
        ];

        return view('admin/add/addpenduduk', $data);
    }

    public function editPenduduk($id)
    {
        $dataKeluarga = $this->keluargaModel->getKeluarga();
        $dataPenduduk = $this->usersModel->getUsers($id);
        $data = [
            'title' => 'Edit Penduduk',
            'active' => 'penduduk',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
            'session' => $this->session->get(),
            'dataKeluarga' => $dataKeluarga,
            'dataPenduduk' => $dataPenduduk,
            'profilePhotoPath' => $this->profilePhotoPath,
        ];

        return view('admin/edit/editpenduduk', $data);
    }

    public function detailPenduduk($id)
    {
        $dataPenduduk = $this->usersModel->getUsers($id);
        $data = [
            'title' => 'Edit Penduduk',
            'active' => 'penduduk',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
            'session' => $this->session->get(),
            'dataPenduduk' => $dataPenduduk,
            'profilePhotoPath' => $this->profilePhotoPath,
        ];

        return view('admin/detail/detailpenduduk', $data);
    }

    // Administrasi (Done)
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
            'profilePhotoPath' => $this->profilePhotoPath,
        ];

        return view('admin/daftaradministrasi', $data);
    }

    public function editAdministrasi($id)
    {
        $dataAdministrasi = $this->administrasiModel->getAdministrasi($id);

        if ($dataAdministrasi['administrasi_status'] == 'Menunggu Konfirmasi') {
            $this->administrasiModel->update($id, [
                'administrasi_status' => 'Dalam Proses',
            ]);
        }

        $dataAdministrasi = $this->administrasiModel->getAdministrasi($id);
        $status = $this->administrasiModel->getStatus();

        $data = [
            'title' => 'Edit Administrasi',
            'active' => 'administrasi',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
            'dataAdministrasi' => $dataAdministrasi,
            'status' => $status,
            'session' => $this->session->get(),
            'profilePhotoPath' => $this->profilePhotoPath,
        ];

        return view('admin/edit/editadministrasi', $data);
    }

    public function detailAdministrasi($id)
    {
        $dataAdministrasi = $this->administrasiModel->getAdministrasi($id);

        $data = [
            'title' => 'Detail Administrasi',
            'active' => 'administrasi',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
            'dataAdministrasi' => $dataAdministrasi,
            'session' => $this->session->get(),
            'profilePhotoPath' => $this->profilePhotoPath,
        ];

        return view('admin/detail/detailadministrasi', $data);
    }

    // Laporan (Done)
    public function pelaporan()
    {
        $laporan = $this->pelaporanModel->getPelaporan();

        $data = [
            'title' => 'Pelaporan',
            'active' => 'pelaporan',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
            'session' => $this->session->get(),
            'laporan' => $laporan,
            'profilePhotoPath' => $this->profilePhotoPath,
        ];

        return view('admin/daftarlaporan', $data);
    }

    public function editPelaporan($id)
    {
        $laporan = $this->pelaporanModel->getPelaporan($id);
        $status = $this->pelaporanModel->getStatus();

        if ($laporan['status_pelaporan'] == 'Menunggu Konfirmasi') {
            $this->pelaporanModel->update($id, [
                'status_pelaporan' => 'Dalam Proses',
            ]);
            $laporan['status_pelaporan'] = 'Dalam Proses';
        }

        $data = [
            'title' => 'Edit Pelaporan',
            'active' => 'pelaporan',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
            'session' => $this->session->get(),
            'laporan' => $laporan,
            'profilePhotoPath' => $this->profilePhotoPath,
            'status' => $status,
        ];

        return view('admin/edit/editlaporan', $data);
    }

    public function detailPelaporan($id)
    {
        $laporan = $this->pelaporanModel->getPelaporan($id);

        $data = [
            'title' => 'Detail Pelaporan',
            'active' => 'pelaporan',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
            'session' => $this->session->get(),
            'laporan' => $laporan,
            'profilePhotoPath' => $this->profilePhotoPath,
        ];

        return view('admin/detail/detaillaporan', $data);
    }

    // Galeri
    public function galeri()
    {
        $dataGaleri = $this->galeriModel->getGaleri();
        $result = [];
        foreach ($dataGaleri as $galeri) {
            $foto = $this->fotoModel->getFotoByGaleriId($galeri['galeri_id']);

            $userInfo = [];
            foreach ($foto as $f) {
                $userInfo[] = [
                    'nama' => $f['nama'],
                    'foto_profil' => $f['foto_profil'],
                    'nik' => $f['uploaded_by']
                ];
            }

            $uniqueUserInfo = array_unique($userInfo, SORT_REGULAR);

            $galeri['foto'] = $foto;
            $galeri['userInfo'] = $uniqueUserInfo;
            $result[] = $galeri;
        }

        $data = [
            'title' => 'Galeri',
            'active' => 'galeri',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
            'session' => $this->session->get(),
            'profilePhotoPath' => $this->profilePhotoPath,
            'dataGaleri' => $result,
        ];

        return view('admin/daftargaleri', $data);
    }

    public function addGaleri()
    {
        $kategoriGaleri = $this->kategoriGaleriModel->getKategoriGaleri();
        // dd($kategoriGaleri);
        $data = [
            'title' => 'Tambah Galeri',
            'active' => 'galeri',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
            'session' => $this->session->get(),
            'kategoriGaleri' => $kategoriGaleri,
            'profilePhotoPath' => $this->profilePhotoPath,
        ];

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
            'session' => $this->session->get(),
            'profilePhotoPath' => $this->profilePhotoPath,
        ];

        return view('admin/edit/editgaleri', $data);
    }

    public function listFotoGaleri($id)
    {
        $foto = $this->fotoModel->getFotoByGaleriId($id);
        $galeri = $this->galeriModel->getGaleri($id);

        $data = [
            'title' => 'List Foto Galeri',
            'active' => 'galeri',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
            'session' => $this->session->get(),
            'profilePhotoPath' => $this->profilePhotoPath,
            'dataFoto' => $foto,
            'galeri' => $galeri,
            'path' => $this->photoPath,
        ];

        return view('admin/daftarfoto', $data);
    }

    // Foto
    public function foto()
    {
        $data = [
            'title' => 'Foto',
            'active' => 'galeri',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
            'session' => $this->session->get(),
            'profilePhotoPath' => $this->profilePhotoPath,
        ];

        return view('admin/daftarfoto', $data);
    }

    public function addFoto($galeri_id)
    {
        $galeri = $this->galeriModel->getGaleri($galeri_id);
        $data = [
            'title' => 'Tambah Foto',
            'active' => 'galeri',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
            'session' => $this->session->get(),
            'profilePhotoPath' => $this->profilePhotoPath,
            'galeri' => $galeri,
        ];

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
            'profilePhotoPath' => $this->profilePhotoPath,
        ];

        return view('admin/edit/editfoto', $data);
    }

    // Pengumuman
    public function pengumuman()
    {
        $pengumuman = $this->pengumumanModel->getPengumuman();

        $data = [
            'title' => 'Pengumuman',
            'active' => 'pengumuman',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
            'session' => $this->session->get(),
            'profilePhotoPath' => $this->profilePhotoPath,
            'dataPengumuman' => $pengumuman,
        ];

        return view('admin/daftarpengumuman', $data);
    }

    public function addPengumuman()
    {
        $kategori = $this->pengumumanModel->getPengumumanKategori();
        $status = $this->pengumumanModel->getStatus();
        $data = [
            'title' => 'Buat Pengumuman',
            'active' => 'pengumuman',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
            'session' => $this->session->get(),
            'profilePhotoPath' => $this->profilePhotoPath,
            'kategori' => $kategori,
            'status' => $status,
        ];

        return view('admin/add/addpengumuman', $data);
    }

    public function detailPengumuman($id)
    {
        $kategori = $this->pengumumanModel->getPengumumanKategori();
        $status = $this->pengumumanModel->getStatus();
        $data = [
            'title' => 'Detail Pengumuman',
            'active' => 'pengumuman',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
            'session' => $this->session->get(),
            'profilePhotoPath' => $this->profilePhotoPath,
            'kategori' => $kategori,
            'status' => $status,
        ];

        return view('admin/edit/editpengumuman', $data);
    }

    public function editPengumuman($id)
    {
        $kategori = $this->pengumumanModel->getPengumumanKategori();
        $status = $this->pengumumanModel->getStatus();
        $data = [
            'title' => 'Edit Pengumuman',
            'active' => 'pengumuman',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
            'session' => $this->session->get(),
            'profilePhotoPath' => $this->profilePhotoPath,
            'kategori' => $kategori,
            'status' => $status,
        ];

        return view('admin/edit/editpengumuman', $data);
    }

    // Contact (Done)
    public function pesan()
    {
        $this->pesanModel->set('status', 'Sudah Dibaca');
        $data = [
            'title' => 'Pesan',
            'active' => 'pesan',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'session' => $this->session->get(),
            'reqPesan' => $this->getReqPesan(),
            'session' => $this->session->get(),
            'dataPesan' => $this->pesanModel->getPesan(),
            'profilePhotoPath' => $this->profilePhotoPath,
        ];

        return view('admin/pesan', $data);
    }

    public function detailpesan($id)
    {
        $adminNIk = $this->session->get('nik');
        $this->pesanModel->readPesan($id, $adminNIk);

        $data = [
            'title' => 'Detail Pesan',
            'active' => 'pesan',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'session' => $this->session->get(),
            'reqPesan' => $this->getReqPesan(),
            'session' => $this->session->get(),
            'dataPesan' => $this->pesanModel->getPesan($id),
            'profilePhotoPath' => $this->profilePhotoPath,
        ];

        return view('admin/detail/detailpesan', $data);
    }

    // profile (done)
    public function profile()
    {
        $profile = $this->usersModel->getUsers($this->session->get('nik'));
        $statusUsers = $this->usersModel->getStatusUsers();
        $statusPerkawinan = $this->usersModel->getStatusPerkawinanUsers();
        $listAgama = $this->usersModel->getAgamaUsers();
        $listPendidikan = $this->usersModel->getPendidikanUsers();
        $data = [
            'title' => 'Profile',
            'active' => 'profile',
            'reqAdministrasi' => $this->getReqAdministrasi(),
            'reqLaporan' => $this->getReqLaporan(),
            'reqPesan' => $this->getReqPesan(),
            'session' => $this->session->get(),
            'profilePhotoPath' => $this->profilePhotoPath,
            'profile' => $profile,
            'listPendidikan' => $listPendidikan,
            'listAgama' => $listAgama,
            'statusUsers' => $statusUsers,
            'statusPerkawinan' => $statusPerkawinan
        ];

        return view('admin/profile', $data);
    }
}
