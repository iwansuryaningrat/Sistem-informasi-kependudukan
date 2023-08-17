<?php

namespace App\Controllers;

use App\Models\AdministrasiModel;
use App\Models\FotoModel;
use App\Models\GaleriModel;
use App\Models\KategoriGaleriModel;
use App\Models\KeluargaModel;
use App\Models\PelaporanModel;
use App\Models\PengumumanModel;
use App\Models\PesanModel;
use App\Models\UsersModel;

class PengumumanController extends BaseController
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
    protected $filePaths = 'upload/photos/pengumuman/';

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

    public function allAnnouncements()
    {
        $data = [
            'title' => 'Pengumuman',
            'announcements' => $this->pengumumanModel->findAll()
        ];

        return view('pengumuman/index', $data);
    }

    public function detailAnnouncement($id)
    {
        $data = [
            'title' => 'Detail Pengumuman',
            'announcement' => $this->pengumumanModel->getAnnouncement($id)
        ];

        if (empty($data['announcement'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Pengumuman tidak ditemukan');
        }

        return view('pengumuman/detail', $data);
    }

    public function createAnnouncement()
    {
    }

    public function saveAnnouncement()
    {
        $this->pengumumanModel->save([
            'judul' => $this->request->getVar('judul'),
            'isi' => $this->request->getVar('isi'),
            'tanggal' => $this->request->getVar('tanggal'),
            'gambar' => $this->request->getVar('gambar'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/pengumuman');
    }

    public function editAnnouncement($id)
    {
        $data = [
            'title' => 'Edit Pengumuman',
            'announcement' => $this->pengumumanModel->getAnnouncement($id)
        ];

        return view('pengumuman/edit', $data);
    }

    public function updateAnnouncement($id)
    {
    }

    public function deleteAnnouncement($id)

    {
        $this->pengumumanModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');

        return redirect()->to('/pengumuman');
    }
}
