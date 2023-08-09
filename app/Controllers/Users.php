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

class Users extends BaseController
{
    protected $administrasiModel;
    protected $fotoModel;
    protected $galeriModel;
    protected $kategoriGaleriModel;
    protected $keluargaModel;
    protected $pelaporanModel;
    protected $pengumumanModel;
    protected $pesanModel;
    protected $usersModel;

    protected $user_data;

    public function __construct()
    {
        $this->administrasiModel = new AdministrasiModel();
        $this->fotoModel = new FotoModel();
        $this->galeriModel = new GaleriModel();
        $this->kategoriGaleriModel = new KategoriGaleriModel();
        $this->keluargaModel = new KeluargaModel();
        $this->pelaporanModel = new PelaporanModel();
        $this->pengumumanModel = new PengumumanModel();
        $this->pesanModel = new PesanModel();
        $this->usersModel = new UsersModel();

        $this->user_data = [
            'nik' => session()->get('nik'),
            'no_kk' => session()->get('no_kk'),
            'nama' => session()->get('nama'),
            'status' => session()->get('status'),
            'jenis_kelamin' => session()->get('jenis_kelamin'),
            'agama' => session()->get('agama'),
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
            'pekerjaan' => session()->get('pekerjaan'),
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

    // Pelaporan Method 
    public function pelaporan()
    {
        $dataLaporan = $this->pelaporanModel->getPelaporanByPelapor($this->user_data['no_kk']);

        $data = [
            'title' => 'Menu Pelaporan | Warga Site',
            'navbar' => 'pelaporan',
            'dataLaporan' => $dataLaporan,
            'isLoggedin' => $this->user_data['isLoggedIn'],
        ];

        return view('/users/report/report', $data);
    }

    public function editPelaporan($id)
    {
        $users = $this->usersModel->getUsers();
        $pelaporanKategori = $this->pelaporanModel->getPelaporanKategori();
        $dataLaporan = $this->pelaporanModel->getPelaporan($id);

        $data = [
            'title' => 'Menu Pelaporan | Warga Site',
            'navbar' => 'pelaporan',
            'dataLaporan' => $dataLaporan,
            'users' => $users,
            'pelaporanKategori' => $pelaporanKategori,
            'isLoggedin' => $this->user_data['isLoggedIn'],
        ];

        return view('/users/report/report-form-edit', $data);
    }

    public function detailPelaporan($id)
    {
        $dataLaporan = $this->pelaporanModel->getPelaporan($id);

        $data = [
            'title' => 'Detail Pelaporan | Warga Site',
            'navbar' => 'pelaporan',
            'dataLaporan' => $dataLaporan,
            'isLoggedin' => $this->user_data['isLoggedIn'],
        ];

        return view('/users/report/report-detail', $data);
    }

    public function formTambahPelaporan()
    {
        $users = $this->usersModel->getUsers();
        $pelaporanKategori = $this->pelaporanModel->getPelaporanKategori();

        $data = [
            'title' => 'Form Tambah Pelaporan | Warga Site',
            'navbar' => 'pelaporan',
            'users' => $users,
            'pelaporanKategori' => $pelaporanKategori,
            'isLoggedin' => $this->user_data['isLoggedIn'],
        ];

        return view('/users/report/report-form-add', $data);
    }
    // End of Pelaporan Method

    // Galeri Method 
    public function galeri()
    {
        $data = [
            'title' => 'Galeri | Warga Site',
            'navbar' => 'galeri',
            'kategoriGaleri' => $this->kategoriGaleriModel->findAll(),
            'dataGaleri' => $this->galeriModel->getGaleri(),
            'isLoggedin' => $this->user_data['isLoggedIn'],
        ];

        return view('/users/gallery/gallery', $data);
    }

    public function detailGaleri($id)
    {
        $dataGaleri = $this->galeriModel->getGaleri($id);
        $dataFoto = $this->fotoModel->getFotoByGaleriId($id);

        $data = [
            'title' => 'Detail Galeri | Warga Site',
            'navbar' => 'galeri',
            'dataGaleri' => $dataGaleri,
            'dataFoto' => $dataFoto,
            'isLoggedin' => $this->user_data['isLoggedIn'],
        ];

        return view('/users/gallery/gallery-detail', $data);
    }
    // End of Galeri Method

    // Pengumuman Method 
    public function pengumuman()
    {
        $data = [
            'title' => 'Portal Pengumuman | Warga Site',
            'navbar' => 'pengumuman',
            'isLoggedin' => $this->user_data['isLoggedIn'],
        ];

        return view('/users/news/announcement', $data);
    }

    public function detailpengumuman()
    {
        $data = [
            'title' => 'Portal Pengumuman | Warga Site',
            'navbar' => 'pengumuman',
            'isLoggedin' => $this->user_data['isLoggedIn'],
        ];

        return view('/users/news/read-announcement', $data);
    }
    // End of Pengumuman Method

    // Keluarga Method (Done)
    public function keluarga()
    {
        $anggotaKeluarga = $this->usersModel->getUsersByKK($this->user_data['no_kk']);

        $data = [
            'title' => 'Menu Keluarga | Warga Site',
            'navbar' => 'keluarga',
            'anggotaKeluarga' => $anggotaKeluarga,
            'isLoggedin' => $this->user_data['isLoggedIn'],
        ];

        return view('/users/family/family', $data);
    }

    public function detailkeluarga($nik)
    {
        $dataKeluarga = $this->usersModel->getUsers($nik);

        $data = [
            'title' => 'Detail Keluarga | Warga Site',
            'navbar' => 'keluarga',
            'dataKeluarga' => $dataKeluarga,
            'isLoggedin' => $this->user_data['isLoggedIn'],
        ];

        return view('/users/family/family-detail', $data);
    }

    public function formTambahKeluarga()
    {
        $statusKeluarga = $this->usersModel->getStatusUsers();
        $listAgama = $this->usersModel->getAgamaUsers();
        $statusKependudukan = $this->usersModel->getStatusKependudukanUsers();
        $statusPerkawinan = $this->usersModel->getStatusPerkawinanUsers();
        $pendidikan = $this->usersModel->getPendidikanUsers();

        $data = [
            'title' => 'Form Tambah Keluarga | Warga Site',
            'navbar' => 'keluarga',
            'statusKeluarga' => $statusKeluarga,
            'listAgama' => $listAgama,
            'statusKependudukan' => $statusKependudukan,
            'statusPerkawinan' => $statusPerkawinan,
            'pendidikan' => $pendidikan,
            'isLoggedin' => $this->user_data['isLoggedIn'],
        ];

        return view('/users/family/family-form-add', $data);
    }

    public function formEditKeluarga($nik)
    {
        $statusKeluarga = $this->usersModel->getStatusUsers();
        $listAgama = $this->usersModel->getAgamaUsers();
        $statusKependudukan = $this->usersModel->getStatusKependudukanUsers();
        $statusPerkawinan = $this->usersModel->getStatusPerkawinanUsers();
        $pendidikan = $this->usersModel->getPendidikanUsers();

        $dataKeluarga = $this->usersModel->getUsers($nik);

        $data = [
            'title' => 'Form Edit Keluarga | Warga Site',
            'navbar' => 'keluarga',
            'dataKeluarga' => $dataKeluarga,
            'statusKeluarga' => $statusKeluarga,
            'listAgama' => $listAgama,
            'statusKependudukan' => $statusKependudukan,
            'statusPerkawinan' => $statusPerkawinan,
            'pendidikan' => $pendidikan,
            'isLoggedin' => $this->user_data['isLoggedIn'],
        ];

        return view('/users/family/family-form-edit', $data);
    }
    // End of Keluarga Method

    // Administrasi Method (Done)
    public function administrasi()
    {
        $administrasiData = $this->administrasiModel->getAdministrasiByPemohon($this->user_data['no_kk']);

        $data = [
            'title' => 'Menu Administrasi | Warga Site',
            'navbar' => 'administrasi',
            'isLoggedin' => $this->user_data['isLoggedIn'],
            'administrasiData' => $administrasiData,
        ];

        return view('/users/administration/administration', $data);
    }

    public function detailadministrasi($id)
    {
        $dataAdministrasi = $this->administrasiModel->getAdministrasi($id);

        $data = [
            'title' => 'Detail Pengajuan Administrasi | Warga Site',
            'navbar' => 'administrasi',
            'dataAdministrasi' => $dataAdministrasi,
            'isLoggedin' => $this->user_data['isLoggedIn'],
        ];
        // dd($dataAdministrasi);

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

    public function formEditAdministrasi($id)
    {
        $dataAdministrasi = $this->administrasiModel->getAdministrasi($id);
        $data = [
            'title' => 'Form Edit Pengajuan Administrasi | Warga Site',
            'navbar' => 'administrasi',
            'isLoggedin' => $this->user_data['isLoggedIn'],
            'dataAdministrasi' => $dataAdministrasi,
        ];

        return view('/users/administration/administration-form-edit', $data);
    }
    // End of Administrasi Method

    // Contact Method (Done)
    public function contact()
    {
        $data = [
            'title' => 'Kontak Kami | Warga Site',
            'navbar' => 'contact',
            'isLoggedin' => $this->user_data['isLoggedIn'],
            'user' => $this->user_data,
        ];

        return view('/users/contact/contact', $data);
    }
    // End of Contact Method

    // Profile Method (Done)
    public function profile()
    {
        $statusKeluarga = $this->usersModel->getStatusUsers();
        $listAgama = $this->usersModel->getAgamaUsers();
        $statusKependudukan = $this->usersModel->getStatusKependudukanUsers();
        $statusPerkawinan = $this->usersModel->getStatusPerkawinanUsers();
        $pendidikan = $this->usersModel->getPendidikanUsers();

        $data = [
            'title' => 'Profile | Warga Site',
            'navbar' => 'profile',
            'isLoggedin' => $this->user_data['isLoggedIn'],
            'user' => $this->user_data,
            'statusKeluarga' => $statusKeluarga,
            'listAgama' => $listAgama,
            'statusKependudukan' => $statusKependudukan,
            'statusPerkawinan' => $statusPerkawinan,
            'pendidikan' => $pendidikan,
        ];

        return view('/users/dashboard/profile', $data);
    }
    // End of Profile Method
}
