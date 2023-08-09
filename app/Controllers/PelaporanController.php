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

class PelaporanController extends BaseController
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

    public function lapor()
    {
        $nik = $this->user_data['nik'];
        $nik_terlapor = $this->request->getVar('nik_terlapor');
        $kategori = $this->request->getVar('kategori');
        $laporan = $this->request->getVar('laporan');
        $deskripsi_laporan = $this->request->getVar('deskripsi_laporan');

        $result = $this->pelaporanModel->save([
            'nik_pelapor' => $nik,
            'nik_terlapor' => $nik_terlapor,
            'kategori' => $kategori,
            'laporan' => $laporan,
            'deskripsi_pelaporan' => $deskripsi_laporan,
            'status_pelaporan' => 'Menunggu Konfirmasi',
        ]);

        if ($result) {
            session()->setFlashdata('success', 'Laporan berhasil dikirim');
            return redirect()->to('/users/pelaporan');
        } else {
            session()->setFlashdata('error', 'Laporan gagal dikirim');
            return redirect()->to('/users/formTambahPelaporan');
        }
    }

    public function editLaporan($id)
    {
        $kategori = $this->request->getVar('kategori');
        $laporan = $this->request->getVar('laporan');
        $deskripsi_laporan = $this->request->getVar('deskripsi_laporan');

        $result = $this->pelaporanModel->editPelaporan([
            'kategori' => $kategori,
            'laporan' => $laporan,
            'deskripsi_pelaporan' => $deskripsi_laporan,
            'status_pelaporan' => 'Menunggu Konfirmasi',
        ], $id);

        if ($result) {
            session()->setFlashdata('success', 'Laporan berhasil diubah');
            return redirect()->to('/users/pelaporan');
        } else {
            session()->setFlashdata('error', 'Laporan gagal diubah');
            return redirect()->to('/users/formEditPelaporan' . $id);
        }
    }
}
