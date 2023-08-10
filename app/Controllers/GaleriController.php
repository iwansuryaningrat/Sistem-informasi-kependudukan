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

class GaleriController extends BaseController
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

    // Save Galeri data
    public function save()
    {
        // handle thumbnail upload
        $fileThumbnail = $this->request->getFile('thumbnail');
        $fileName = $fileThumbnail->getRandomName();
        $fileThumbnail->move('upload/photos/galeri/', $fileName);

        $data = [
            'judul' => $this->request->getVar('judul'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'created_by' => $this->user_data['nik'],
            'thumbnail' => $fileName,
            'kategori' => $this->request->getVar('kategori'),
        ];

        $result = $this->galeriModel->save($data);

        if (!$result) {
            session()->setFlashdata('error', 'Galeri gagal ditambahkan');
            return redirect()->to('/users/galeri');
        }

        $foto = [
            'galeri_id' => $this->galeriModel->getInsertID(),
            'foto' => $fileName,
            'isThumbnail' => true,
        ];

        $result = $this->fotoModel->save($foto);

        if (!$result) {
            session()->setFlashdata('error', 'Galeri gagal ditambahkan');
            return redirect()->to('/users/galeri');
        } else {
            session()->setFlashdata('success', 'Galeri berhasil ditambahkan');
            return redirect()->to('/users/galeri');
        }
    }
}
