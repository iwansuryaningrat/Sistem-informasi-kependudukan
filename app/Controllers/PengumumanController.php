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

    public function deleteAnnouncement($id)
    {
        $pengumuman = $this->pengumumanModel->getPengumuman($id);
        if (!$pengumuman) {
            session()->setFlashdata('error', 'Data Pengumuman tidak ditemukan.');
            return redirect()->to('/admin/pengumuman');
        }

        if ($pengumuman['thumbnail'] != 'default.png') {
            unlink($this->filePaths . $pengumuman['thumbnail']);
        }

        $this->pengumumanModel->deletePengumumanByPengumumanId($id);
        session()->setFlashdata('success', 'Data Pengumuman berhasil dihapus.');

        return redirect()->to('/admin/pengumuman');
    }

    public function create()
    {
        // Check if foto is uploaded
        $foto = $this->request->getFile('thumbnail');
        if ($foto == null || $foto->getError() == 4) {
            $namaFoto = $this->user_data['foto'];
        } else {
            // Generate random name
            $namaFoto = $foto->getRandomName();

            // Move foto to img folder
            $foto->move($this->filePaths, $namaFoto);
        }

        $deskripsi = $this->request->getVar('deskripsi_int');

        $date = $this->request->getVar('tanggal');
        $tanggal = date("Y-m-d", strtotime($date));
        $jam = $this->request->getVar('jam');

        $data = [
            'kategori' => $this->request->getVar('kategori'),
            'judul_pengumuman' => $this->request->getVar('judul'),
            'tempat' => $this->request->getVar('tempat'),
            'jam' => $jam,
            'tanggal' => $tanggal,
            'deskripsi' => $deskripsi,
            'status' => 'Akan Berlangsung',
            'created_by' => $this->user_data['nik'],
            'thumbnail' => $namaFoto
        ];

        $result = $this->pengumumanModel->save($data);

        if ($result) {
            session()->setFlashdata('success', 'Pengumuman Berhasil dibuat.');
            return redirect()->to('/admin/pengumuman');
        } else {
            session()->setFlashdata('error', 'Data Pengumuman gagal ditambahkan.');
            return redirect()->to('/admin/addpengumuman');
        }
    }

    public function editAdmin($id)
    {
        $pengumuman = $this->pengumumanModel->find($id);

        if (!$pengumuman) {
            session()->setFlashdata('error', 'Pengumuman not found.');
            return redirect()->to('/admin/pengumuman');
        }

        $pengumumanData = [
            'kategori' => $this->request->getVar('kategori'),
            'judul_pengumuman' => $this->request->getVar('judul'),
            'tempat' => $this->request->getVar('tempat'),
            'jam' => $this->request->getVar('jam'),
            'tanggal' => date("Y-m-d", strtotime($this->request->getVar('tanggal'))),
            'deskripsi' => $this->request->getVar('deskripsi_int'),
        ];

        $newThumbnail = $this->request->getFile('thumbnail');
        if ($newThumbnail && $newThumbnail->getError() == 4) {
            $pengumumanData['thumbnail'] = $pengumuman['thumbnail'];
        } else {
            $newThumbnailName = $newThumbnail->getRandomName();
            $newThumbnail->move($this->filePaths, $newThumbnailName);
            if ($pengumuman['thumbnail'] != 'default.png') {
                unlink($this->filePaths . $pengumuman['thumbnail']);
            }
            $pengumumanData['thumbnail'] = $newThumbnailName;
        }
        $result = $this->pengumumanModel->update($id, $pengumumanData);

        if ($result) {
            session()->setFlashdata('success', 'Pengumuman berhasil diubah.');
            return redirect()->to('/admin/pengumuman');
        } else {
            session()->setFlashdata('error', 'Gagal mengupdate pengumuman.');
            return redirect()->to('/admin/editpengumuman/' . $id);
        }
    }
}
