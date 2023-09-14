<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\GaleriModel;
use App\Models\KeluargaModel;
use App\Models\PengumumanModel;
use App\Models\UsersModel;

class Auth extends BaseController
{
    protected $galeriModel;
    protected $keluargaModel;
    protected $pengumumanModel;
    protected $usersModel;
    protected $validation;
    protected $session;
    protected $userData;

    public function __construct()
    {
        $this->galeriModel = new GaleriModel();
        $this->keluargaModel = new KeluargaModel();
        $this->pengumumanModel = new PengumumanModel();
        $this->usersModel = new UsersModel();

        $this->validation = \Config\Services::validation();
        $this->session = \Config\Services::session();
    }

    public function login()
    {
        $galeries = $this->galeriModel->getGaleriTerbaru();
        $dataPengumuman = $this->pengumumanModel->getPengumumanTerbaru();
        $data = [
            'title' => 'Masuk | Warga Site',
            'galeries' => $galeries,
            'dataPengumuman' => $dataPengumuman,
        ];

        return view('auth/login', $data);
    }

    public function loginProcess()
    {
        $nik = $this->request->getVar('nik');
        $password = $this->request->getVar('password');
        $rememberme = $this->request->getVar('rememberme');

        $user = $this->usersModel->getUsers($nik);

        // Check if user exists
        if (!$user) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'NIK tidak terdaftar'
            ]);
        }

        // Check if password is correct
        if (!password_verify($password, $user['password'])) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Password yang Anda masukkan salah'
            ]);
        }

        // Set session
        $data = [
            'nik' => $user['nik'],
            'no_kk' => $user['no_kk'],
            'nama' => $user['nama'],
            'status' => $user['status'],
            'jenis_kelamin' => $user['jenis_kelamin'],
            'agama' => $user['agama'],
            'tempat_lahir' => $user['tempat_lahir'],
            'tgl_lahir' => $user['tgl_lahir'],
            'usia' => $user['usia'],
            'status_perkawinan' => $user['status_perkawinan'],
            'pendidikan' => $user['pendidikan'],
            'pekerjaan' => $user['pekerjaan'],
            'email' => $user['email'],
            'no_hp' => $user['no_hp'],
            'role' => $user['role'],
            'foto' => $user['foto'],
            'status_kependudukan' => $user['status_kependudukan'],
            'alamat' => $user['alamat'],
            'isLoggedIn' => true
        ];

        // if $rememberme is checked then set session to 1 day, else set to 1 hour
        if ($rememberme) {
            $this->session->set($data, 86400);
        } else {
            $this->session->set($data, 3600);
        }

        if ($user['role'] == 'Admin' || $user['role'] == 'Ketua_rt') {
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Anda berhasil login',
                'role' => $user['role'],
                'redirect' => '/admin'
            ]);
        } elseif ($user['role'] == 'User') {
            if ($user['status'] == null || $user['jenis_kelamin'] == null || $user['agama'] == null || $user['tempat_lahir'] == null || $user['tgl_lahir'] == null || $user['status_perkawinan'] == null || $user['pendidikan'] == null || $user['pekerjaan'] == null) {
                session()->setFlashdata('warning', 'Silahkan lengkapi data diri Anda terlebih dahulu');

                return $this->response->setJSON([
                    'status' => 'success',
                    'message' => 'Anda berhasil login',
                    'role' => $user['role'],
                    'redirect' => '/users/profile'
                ]);
            } else {
                return $this->response->setJSON([
                    'status' => 'success',
                    'message' => 'Anda berhasil login',
                    'role' => $user['role'],
                    'redirect' => '/users'
                ]);
            }
        }
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/auth/login');
    }

    public function register()
    {
        $galeries = $this->galeriModel->getGaleriTerbaru();
        $dataPengumuman = $this->pengumumanModel->getPengumumanTerbaru();
        $data = [
            'title' => 'Daftar | Warga Site',
            'galeries' => $galeries,
            'dataPengumuman' => $dataPengumuman,
        ];

        return view('auth/register', $data);
    }

    public function regist()
    {
        $nik = $this->request->getVar('nik');
        $noKk = $this->request->getVar('no_kk');
        $nama = $this->request->getVar('nama');
        $noHp = $this->request->getVar('no_hp');
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $keluarga = $this->keluargaModel->getKeluarga($noKk);
        if (!$keluarga) {
            $this->keluargaModel->save([
                'no_kk' => $noKk,
                'nama_kepala_keluarga' => $nama,
            ]);
        }

        $result = $this->usersModel->save([
            'nik' => $nik,
            'no_kk' => $noKk,
            'nama' => $nama,
            'no_hp' => $noHp,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'role' => 'User',
            'status_kependudukan' => 'Tetap',
            'status' => 'Kepala Keluarga',
            'foto' => 'default.png'
        ]);

        if ($result) {
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Akun berhasil dibuat, silahkan login.',
                'redirect' => '/auth/login'
            ]);
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Akun gagal dibuat, silahkan coba lagi.',
                'errors' => $this->validation->getErrors()
            ]);
        }
    }
    public function ubahSandi()
    {
        $nik = session()->get('nik');

        $userData = $this->usersModel->getUsers($nik);

        if (!$userData) {
            session()->setFlashdata('error', 'NIK tidak terdaftar');
            $this->logout();
        }

        $passwordLama = $this->request->getVar('password_lama');
        $passwordBaru = $this->request->getVar('password_baru');

        if (!password_verify($passwordLama, $userData['password'])) {
            session()->setFlashdata('error', 'Password yang Anda masukkan salah');
            return redirect()->to('/users/profile');
        }

        $this->usersModel->editUsers(['password' => password_hash($passwordBaru, PASSWORD_DEFAULT)], $nik);

        session()->setFlashdata('success', 'Password berhasil diubah');
        return redirect()->to('/users/profile');
    }
}
