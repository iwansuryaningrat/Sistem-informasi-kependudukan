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

class FotoController extends BaseController
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

    public function upload($galeri_id)
    {
        if ($files = $this->request->getFiles()) {
            foreach ($files['foto'] as $file) {
                $name = $file->getRandomName();
                $file->move($this->filePaths, $name);

                $data = [
                    'galeri_id' => $galeri_id,
                    'foto' => $name,
                    'caption' => $this->request->getVar('caption'),
                    'uploaded_by' => $this->user_data['nik'],
                    'isThumbnail' => false,
                ];
                $this->fotoModel->save($data);
            }
        } else {
            session()->setFlashdata('error', 'Foto gagal ditambahkan.');
            return redirect()->to('/users/detailGaleri/' . $galeri_id);
        }

        session()->setFlashdata('success', 'Foto berhasil ditambahkan.');
        return redirect()->to('/users/detailGaleri/' . $galeri_id);
    }

    public function hapus($id)
    {
        $foto = $this->fotoModel->getFoto($id);

        if ($foto['uploaded_by'] != $this->user_data['nik']) {
            session()->setFlashdata('error', 'Anda tidak memiliki akses untuk menghapus foto ini.');
            return redirect()->to('/users/detailGaleri/' . $foto['galeri_id']);
        }

        $galeri_id = $foto['galeri_id'];
        $this->fotoModel->deleteFotoByFotoId($id);

        session()->setFlashdata('success', 'Foto berhasil dihapus.');
        return redirect()->to('/users/detailGaleri/' . $galeri_id);
    }

    public function hapusSemua($galeri_id)
    {
        $this->fotoModel->deleteFotoByGaleriId($galeri_id);

        session()->setFlashdata('success', 'Foto berhasil dihapus.');
        return redirect()->to('/users/detailGaleri/' . $galeri_id);
    }

    public function hapusFromAdmin($id)
    {
        $foto = $this->fotoModel->getFoto($id);

        $galeri_id = $foto['galeri_id'];
        $this->fotoModel->deleteFotoByFotoId($id);

        session()->setFlashdata('success', 'Foto berhasil dihapus.');
        return redirect()->to('/admin/listFotoGaleri/' . $galeri_id);
    }

    public function uploadAdmin($galeri_id)
    {
        $foto = $this->request->getFile('foto');

        if (!$foto->isValid()) {
            session()->setFlashdata('error', 'Foto gagal ditambahkan.');
            return redirect()->to('/admin/listFotoGaleri/' . $galeri_id);
        }

        $name = $foto->getRandomName();
        $foto->move($this->filePaths, $name);

        $data = [
            'galeri_id' => $galeri_id,
            'foto' => $name,
            'caption' => $this->request->getVar('caption'),
            'uploaded_by' => $this->user_data['nik'],
            'isThumbnail' => false,
        ];
        $this->fotoModel->save($data);

        session()->setFlashdata('success', 'Foto berhasil ditambahkan.');
        return redirect()->to('/admin/listFotoGaleri/' . $galeri_id);
    }
}
