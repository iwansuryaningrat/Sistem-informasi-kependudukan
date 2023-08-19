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

class UserController extends BaseController
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
    protected $filePaths = 'upload/photos/profile/';

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

    public function saveUser()
    {
        $no_kk = $this->user_data['no_kk'];

        // handle image
        $foto = $this->request->getFile('foto');

        // Check if foto is uploaded
        if ($foto == null || $foto->getError() == 4) {
            $namaFoto = 'default.png';
        } else {
            // Generate random name
            $namaFoto = $foto->getRandomName();

            // Move foto to img folder
            $foto->move($this->filePaths, $namaFoto);
        }

        // calculate age
        $tgl_lahir = $this->request->getVar('tgl_lahir');

        $tgl_lahir = explode('-', $tgl_lahir);
        $tgl_lahir = $tgl_lahir[0];
        $usia = date('Y') - $tgl_lahir;

        // Insert user data
        $this->usersModel->save([
            'nik' => $this->request->getVar('nik'),
            'no_kk' => $no_kk,
            'nama' => $this->request->getVar('nama'),
            'status' => $this->request->getVar('status'),
            'jenis_kelamin' => ($this->request->getVar('jenis_kelamin') == 'Laki-laki') ? 'Laki-laki' : 'Perempuan',
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'usia' => $usia,
            'status_perkawinan' => $this->request->getVar('status_perkawinan'),
            'pendidikan' => $this->request->getVar('pendidikan'),
            'agama' => $this->request->getVar('agama'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
            'email' => $this->request->getVar('email'),
            'no_hp' => $this->request->getVar('no_hp'),
            'password' => password_hash('12345678', PASSWORD_DEFAULT),
            'role' => 'User',
            'foto' => $namaFoto,
            'status_kependudukan' => $this->request->getVar('status_kependudukan'),
        ]);

        // Set flashdata
        session()->setFlashdata('success', 'Anggota keluarga berhasil ditambahkan');
        return redirect()->to('/users/keluarga');
    }

    public function saveDetailProfile()
    {
        $nik = $this->user_data['nik'];
        $foto = $this->request->getFile('foto_profil');
        $nama = $this->request->getVar('nama');
        $email = $this->request->getVar('email');
        $no_hp = $this->request->getVar('no_hp');

        // Check if foto is uploaded
        if ($foto == null || $foto->getError() == 4) {
            $namaFoto = $this->user_data['foto'];
        } else {
            // Generate random name
            $namaFoto = $foto->getRandomName();

            // Move foto to img folder
            $foto->move($this->filePaths, $namaFoto);

            // Delete old foto
            if ($this->user_data['foto'] != 'default.png') {
                unlink($this->filePaths . $this->user_data['foto']);
            }
        }

        // Update user data
        $this->usersModel->editUsers([
            'nama' => $nama,
            'email' => $email,
            'no_hp' => $no_hp,
            'foto' => $namaFoto
        ], $nik);

        // Update session
        session()->set([
            'nama' => $nama,
            'email' => $email,
            'no_hp' => $no_hp,
            'foto' => $namaFoto
        ]);

        session()->setFlashdata('success', 'Profil berhasil diperbarui');
        return redirect()->to('/users/profile');
    }

    public function editdatapribadi()
    {
        $nik = $this->user_data['nik'];
        $no_kk = $this->user_data['no_kk'];
        $alamat = $this->request->getVar('alamat') . ',' . $this->request->getVar('kota_kabupaten') . ' ' . $this->request->getVar('kodepos') . ',' . $this->request->getVar('provinsi');
        $jenis_kelamin = ($this->request->getVar('jenis_kelamin') == 'Laki-laki') ? 'Laki-laki' : 'Perempuan';

        // calculate age
        $tgl_lahir = $this->request->getVar('tanggal_lahir');
        $tgl_lahir = explode('-', $tgl_lahir);
        $tgl_lahir = $tgl_lahir[0];
        $usia = date('Y') - $tgl_lahir;

        // Update user data
        $this->usersModel->editUsers([
            'status' => $this->request->getVar('status'),
            'status_perkawinan' => $this->request->getVar('status_perkawinan'),
            'agama' => $this->request->getVar('agama'),
            'jenis_kelamin' => $jenis_kelamin,
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tgl_lahir' => $this->request->getVar('tanggal_lahir'),
            'usia' => $usia,
            'pendidikan' => $this->request->getVar('pendidikan'),
            'status_kependudukan' => $this->request->getVar('status_kependudukan'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
        ], $nik);

        // Update keluarga data
        $this->keluargaModel->editKeluarga([
            'alamat' => $alamat
        ], $no_kk);

        // Update session
        session()->set([
            'status' => $this->request->getVar('status'),
            'status_perkawinan' => $this->request->getVar('status_perkawinan'),
            'agama' => $this->request->getVar('agama'),
            'jenis_kelamin' => $jenis_kelamin,
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tgl_lahir' => $this->request->getVar('tanggal_lahir'),
            'usia' => $usia,
            'alamat' => $alamat,
            'pendidikan' => $this->request->getVar('pendidikan'),
            'status_kependudukan' => $this->request->getVar('status_kependudukan'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
        ]);

        session()->setFlashdata('success', 'Data pribadi berhasil diperbarui');
        return redirect()->to('/users/profile');
    }

    public function editdatakeluarga($nik)
    {
        $no_kk = $this->user_data['no_kk'];
        $alamat = $this->request->getVar('alamat');
        $jenis_kelamin = ($this->request->getVar('pria') == 'on') ? 'Laki-laki' : 'Perempuan';

        // calculate age
        $tgl_lahir = $this->request->getVar('tanggal_lahir');
        $tgl_lahir = explode('-', $tgl_lahir);
        $tgl_lahir = $tgl_lahir[0];
        $usia = date('Y') - $tgl_lahir;

        // handle image
        $foto = $this->request->getFile('foto');

        // Check if foto is uploaded
        if ($foto == null || $foto->getError() == 4) {
            $namaFoto = $this->user_data['foto'];
        } else {
            // Generate random name
            $namaFoto = $foto->getRandomName();

            // Move foto to img folder
            $foto->move($this->filePaths, $namaFoto);

            // Delete old foto
            if ($this->user_data['foto'] != 'default.png') {
                unlink($this->filePaths . $this->user_data['foto']);
            }
        }

        $data = [
            'nama' => $this->request->getVar('nama'),
            'jenis_kelamin' => $jenis_kelamin,
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tgl_lahir' => $this->request->getVar('tanggal_lahir'),
            'agama' => $this->request->getVar('agama'),
            'status_perkawinan' => $this->request->getVar('status_perkawinan'),
            'pendidikan' => $this->request->getVar('pendidikan'),
            'status' => $this->request->getVar('status'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
            'usia' => $usia,
            'status_kependudukan' => $this->request->getVar('status_kependudukan'),
            'no_hp' => $this->request->getVar('no_hp'),
            'email' => $this->request->getVar('email'),
            'foto' => $namaFoto
        ];

        // Update user data
        $this->usersModel->editUsers($data, $nik);

        // Update keluarga data
        $this->keluargaModel->editKeluarga([
            'alamat' => $alamat
        ], $no_kk);

        if ($nik == $this->user_data['nik']) {
            // Update session
            session()->set($data);

            session()->setFlashdata('success', 'Data pribadi berhasil diperbarui');
            return redirect()->to('/users/profile');
        } else {
            session()->setFlashdata('success', 'Data keluarga berhasil diperbarui');
            return redirect()->to('/users/keluarga');
        }
    }

    public function updateFotoProfile($nik)
    {
        $foto = $this->request->getFile('foto_profil');

        // Check if foto is uploaded
        if ($foto == null || $foto->getError() == 4) {
            $namaFoto = $this->user_data['foto'];
        } else {
            // Generate random name
            $namaFoto = $foto->getRandomName();

            // Move foto to img folder
            $foto->move($this->filePaths, $namaFoto);

            // Delete old foto
            if ($this->user_data['foto'] != 'default.png') {
                unlink($this->filePaths . $this->user_data['foto']);
            }
        }

        // Update user data
        $this->usersModel->editUsers([
            'foto' => $namaFoto
        ], $nik);

        // Update session
        session()->set([
            'foto' => $namaFoto
        ]);

        session()->setFlashdata('success', 'Foto profil berhasil diperbarui');
        return redirect()->to('/users/profile');
    }
}
