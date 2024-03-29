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
    protected $filePaths = 'upload/photos/galeri/';

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
        $fileThumbnail->move($this->filePaths, $fileName);

        $data = [
            'judul' => $this->request->getVar('judul'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'created_by' => $this->user_data['nik'],
            'thumbnail' => $fileName,
            'kategori' => $this->request->getVar('kategori'),
            'total_foto' => 1,
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
            'uploaded_by' => $this->user_data['nik'],
        ];

        $result = $this->fotoModel->save($foto);

        if (!$result) {
            session()->setFlashdata('error', 'Galeri gagal ditambahkan');
            if ($this->user_data['role'] == 'Admin') {
                return redirect()->to('/admin/galeri');
            } else {
                return redirect()->to('/users/galeri');
            }
        } else {
            session()->setFlashdata('success', 'Galeri berhasil ditambahkan');
            if ($this->user_data['role'] == 'Admin') {
                return redirect()->to('/admin/galeri');
            } else {
                return redirect()->to('/users/galeri');
            }
        }
    }

    // Delete galeri and all of its photos
    public function delete($id)
    {
        $galeri = $this->galeriModel->find($id);

        if (!$galeri) {
            session()->setFlashdata('error', 'Galeri tidak ditemukan');
            return redirect()->to('/users/galeri');
        }

        if ($galeri['created_by'] != $this->user_data['nik']) {
            session()->setFlashdata('error', 'Anda tidak memiliki akses untuk menghapus galeri ini');
            return redirect()->to('/users/galeri');
        }

        $result = $this->galeriModel->deleteGaleriByGaleriId($id);

        if (!$result) {
            session()->setFlashdata('error', 'Galeri gagal dihapus');
            return redirect()->to('/users/galeri');
        }

        $result = $this->fotoModel->deleteFotoByGaleriId($id);

        if (!$result) {
            session()->setFlashdata('error', 'Galeri gagal dihapus');
            return redirect()->to('/users/galeri');
        } else {
            session()->setFlashdata('success', 'Galeri berhasil dihapus');
            return redirect()->to('/users/galeri');
        }
    }

    // Delete Galeri and All of its photos from admin
    public function deleteFromAdmin($id)
    {
        $galeri = $this->galeriModel->find($id);

        if (!$galeri) {
            session()->setFlashdata('error', 'Galeri tidak ditemukan');
            return redirect()->to('/admin/galeri');
        }

        $result = $this->galeriModel->deleteGaleriByGaleriId($id);

        if (!$result) {
            session()->setFlashdata('error', 'Galeri gagal dihapus');
            return redirect()->to('/admin/galeri');
        }

        $result = $this->fotoModel->deleteFotoByGaleriId($id);

        if (!$result) {
            session()->setFlashdata('error', 'Galeri gagal dihapus');
            return redirect()->to('/admin/galeri');
        } else {
            session()->setFlashdata('success', 'Galeri berhasil dihapus');
            return redirect()->to('/admin/galeri');
        }
    }
}
