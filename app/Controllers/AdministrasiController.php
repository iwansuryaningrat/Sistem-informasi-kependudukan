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

class AdministrasiController extends BaseController
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

    protected $userData;
    protected $filePaths = 'upload/files/';
    protected $adminPage = '/admin/administrasi';
    protected $userPage = '/users/administrasi';

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

        $this->userData = [
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

    public function download($id)
    {
        $data = $this->administrasiModel->getAdministrasi($id);
        $file = $data['berkas'];

        if ($file == 'default.pdf' || $file == 'default.png') {
            session()->setFlashdata('error', 'File tidak ditemukan');
            if ($this->userData['role'] == 'Admin') {
                return redirect()->to($this->adminPage);
            } else {
                return redirect()->to($this->userPage);
            }
        }

        // get file extension
        $fileExtension = explode('.', $file);
        $fileExtension = end($fileExtension);

        return $this->response
            ->download($this->filePaths . $file, null)
            ->setFileName($data['nama'] . '_' . $data['no_surat'] . '.' . $fileExtension);
    }

    public function edit($id)
    {
        $dataAdministrasi = $this->administrasiModel->getAdministrasi($id);

        $file = $this->request->getFile('berkas');
        if (!$file->getError() == 4) {
            // generate new file name
            $newFileName = $file->getRandomName();

            // move file to folder
            $file->move($this->filePaths, $newFileName);

            // delete old file
            if ($dataAdministrasi['berkas'] != 'default.pdf' || $dataAdministrasi['berkas'] != 'default.png') {
                unlink($this->filePaths . $dataAdministrasi['berkas']);
            }
        } else {
            $newFileName = $dataAdministrasi['berkas'];
        }

        $kategori = $this->request->getVar('kategori');
        $keperluan = $this->request->getVar('keperluan');
        $deskripsi = $this->request->getVar('deskripsi');

        $data = [
            'kategori' => $kategori,
            'keperluan' => $keperluan,
            'deskripsi' => $deskripsi,
            'berkas' => $newFileName,
            'administrasi_status' => 'Menunggu Konfirmasi',
        ];

        $result = $this->administrasiModel->update($id, $data);

        if ($result) {
            session()->setFlashdata('success', 'Berhasil mengubah data administrasi');
            return redirect()->to($this->userPage);
        } else {
            session()->setFlashdata('error', 'Gagal mengubah data administrasi');
            return redirect()->to('/users/formEditAdministrasi/' . $id);
        }
    }

    public function ajukan()
    {
        $pemohon = $this->userData['nik'];

        $file = $this->request->getFile('berkas');
        if (!$file->getError() == 4) {
            // generate new file name
            $newFileName = $file->getRandomName();

            // move file to folder
            $file->move($this->filePaths, $newFileName);
        } else {
            session()->setFlashdata('error', 'Gagal mengajukan permohonan administrasi');
            return redirect()->to('/users/formTambahAdministrasi');
        }

        $kategori = $this->request->getVar('kategori');
        $keperluan = $this->request->getVar('keperluan');
        $deskripsi = $this->request->getVar('deskripsi');

        $data = [
            'pemohon' => $pemohon,
            'kategori' => $kategori,
            'keperluan' => $keperluan,
            'deskripsi' => $deskripsi,
            'berkas' => $newFileName,
            'administrasi_status' => 'Menunggu Konfirmasi',
        ];

        $result = $this->administrasiModel->insert($data);

        if ($result) {
            session()->setFlashdata('success', 'Berhasil mengajukan permohonan administrasi');
            return redirect()->to($this->userPage);
        } else {
            session()->setFlashdata('error', 'Gagal mengajukan permohonan administrasi');
            return redirect()->to('/users/formTambahAdministrasi');
        }
    }

    // Hapus administrasi
    public function hapus($id)
    {
        $dataAdministrasi = $this->administrasiModel->getAdministrasi($id);

        if ($dataAdministrasi['no_kk'] != $this->userData['no_kk']) {
            session()->setFlashdata('error', 'Anda tidak dapat menghapus data administrasi ini');
            return redirect()->to($this->userPage);
        }

        // delete file
        if ($dataAdministrasi['berkas'] != 'default.pdf' && $dataAdministrasi['berkas'] != 'default.png') {
            unlink($this->filePaths . $dataAdministrasi['berkas']);
        }

        $result = $this->administrasiModel->delete($id);

        if ($result) {
            session()->setFlashdata('success', 'Berhasil menghapus data administrasi');
            return redirect()->to($this->userPage);
        } else {
            session()->setFlashdata('error', 'Gagal menghapus data administrasi');
            return redirect()->to($this->userPage);
        }
    }

    // Hapus administrasi dari admin
    public function hapusAdmin($id)
    {
        $dataAdministrasi = $this->administrasiModel->getAdministrasi($id);

        // delete file
        if ($dataAdministrasi['berkas'] != 'default.pdf' && $dataAdministrasi['berkas'] != 'default.png') {
            unlink($this->filePaths . $dataAdministrasi['berkas']);
        }

        $result = $this->administrasiModel->delete($id);

        if ($result) {
            session()->setFlashdata('success', 'Berhasil menghapus data administrasi');
            return redirect()->to($this->adminPage);
        } else {
            session()->setFlashdata('error', 'Gagal menghapus data administrasi');
            return redirect()->to($this->adminPage);
        }
    }
}
