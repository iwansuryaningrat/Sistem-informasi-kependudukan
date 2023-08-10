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

class KeluargaController extends BaseController
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

    public function allFamilies()
    {
        return $this->keluargaModel->findAll();
    }

    public function detailFamily($id)
    {
        $data = [
            'title' => 'Detail Keluarga',
            'family' => $this->keluargaModel->getFamily($id)
        ];

        if (empty($data['family'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Keluarga tidak ditemukan');
        }

        return view('keluarga/detail', $data);
    }

    public function save()
    {
        $foto = $this->request->getFile('foto_rumah');

        if ($foto->getError() == 4) {
            $namaFoto = 'default.png';
        } else {
            $namaFoto = $foto->getRandomName();
            $foto->move('upload/photos', $namaFoto);
        }

        $result = $this->keluargaModel->save([
            'no_kk' => $this->request->getVar('no_kk'),
            'nama_kepala_keluarga' => $this->request->getVar('name'),
            'alamat' => $this->request->getVar('alamat'),
            'alamat_asal' => $this->request->getVar('alamat_asal'),
            'tgl_pindah' => $this->request->getVar('tgl_pindah'),
            'status' => $this->request->getVar('status'),
            'foto_rumah' => $namaFoto,
        ]);

        if ($result) $result = $this->usersModel->save([
            'no_kk' => $this->request->getVar('no_kk'),
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('name'),
            'status' => 'Kepala Keluarga',
        ]);

        if ($result) {
            session()->setFlashdata('success', 'Berhasil menambahkan keluarga');
            return redirect()->to('/admin/families');
        } else {
            session()->setFlashdata('error', 'Gagal menambahkan keluarga');
            return redirect()->to('/admin/addfamily');
        }
    }

    public function update($id)
    {
        $keluarga = $this->keluargaModel->getKeluarga($id);

        if (!$keluarga) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Keluarga tidak ditemukan');
        }

        $foto = $this->request->getFile('foto_rumah');

        if ($foto && $foto->getError() == 4) {
            $namaFoto = $keluarga['foto_rumah'];
        } else {
            $namaFoto = $foto->getRandomName();
            $foto->move('upload/photos', $namaFoto);
            if ($keluarga['foto_rumah'] != 'default.png') unlink('upload/photos/' . $keluarga['foto_rumah']);
        }

        $result = $this->keluargaModel->update(["no_kk" => $id], [
            'nama_kepala_keluarga' => $this->request->getVar('nama_kepala_keluarga'),
            'alamat' => $this->request->getVar('alamat'),
            'alamat_asal' => $this->request->getVar('alamat_asal'),
            'tgl_pindah' => $this->request->getVar('tgl_pindah'),
            'status' => $this->request->getVar('status'),
            'foto_rumah' => $namaFoto,
        ]);

        if ($result) $result = $this->usersModel->update([
            "no_kk" => $id,
            'nama' => $this->request->getVar('nama_kepala_keluarga'),
        ], [
            'status' => 'Kepala Keluarga',
        ]);

        if ($result) {
            session()->setFlashdata('success', 'Data berhasil diubah.');
            return redirect()->to('/users/keluarga');
        } else {
            session()->setFlashdata('error', 'Data gagal diubah.');
            return redirect()->to('/users/editKeluarga/' . $id);
        }
    }

    public function delete($id)
    {
        $this->keluargaModel->deleteKeluarga($id);

        session()->setFlashdata('success', 'Data berhasil dihapus.');

        if (session()->get('role') == 'Admin') {
            return redirect()->to('/admin/families');
        } else {
            return redirect()->to('/users/keluarga');
        }
    }
}
