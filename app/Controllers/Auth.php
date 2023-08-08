<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\KeluargaModel;
use App\Models\UsersModel;

class Auth extends BaseController
{
    protected $keluargaModel;
    protected $usersModel;
    protected $validation;
    protected $session;
    protected $user_data;

    public function __construct()
    {
        $this->keluargaModel = new KeluargaModel();
        $this->usersModel = new UsersModel();

        $this->validation = \Config\Services::validation();
        $this->session = \Config\Services::session();
    }

    public function login()
    {
        $data = [
            'title' => 'Masuk | Warga Site'
        ];

        return view('auth/login', $data);
    }

    public function loginprocess()
    {
        $nik = $this->request->getVar('nik');
        $password = $this->request->getVar('password');
        $rememberme = $this->request->getVar('rememberme');

        $user = $this->usersModel->getUsers($nik);

        // Check if user exists
        if (!$user) {
            session()->setFlashdata('error', 'NIK tidak terdaftar');
            return redirect()->to('/auth/login');
        }

        // Check if password is correct
        if (!password_verify($password, $user['password'])) {
            session()->setFlashdata('error', 'Password yang Anda masukkan salah');
            return redirect()->to('/auth/login');
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

        session()->set($data);

        // Check if user want to remember me
        if ($rememberme == 'on') {
            // set Session expiry for 1 day
            $expired = 60 * 60 * 24;
            $this->session->sess_expiration = $expired;
        }

        if ($user['role'] == 'Admin' || $user['role'] == 'Ketua_rt') {
            return redirect()->to('/admin');
        } elseif ($user['role'] == 'User') {
            return redirect()->to('/users');
        }
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/auth/login');
    }

    public function register()
    {
        // Check Login status
        if (session()->get('isLoggedIn')) {
            if (session()->get('role') == 'admin') {
                return redirect()->to('/admin');
            } elseif (session()->get('role') == 'users') {
                return redirect()->to('/users');
            }
        }

        $data = [
            'title' => 'Daftar | Warga Site'
        ];

        return view('auth/register', $data);
    }

    public function ubahSandi()
    {
        $nik = session()->get('nik');

        $userData = $this->usersModel->getUsers($nik);

        if (!$userData) {
            session()->setFlashdata('message', 'NIK tidak terdaftar');
            $this->logout();
        }

        $passwordLama = $this->request->getVar('password_lama');
        $passwordBaru = $this->request->getVar('password_baru');

        if (!password_verify($passwordLama, $userData['password'])) {
            session()->setFlashdata('message', 'Password yang Anda masukkan salah');
            return redirect()->to('/users/profile');
        }

        $this->usersModel->editUsers(['password' => password_hash($passwordBaru, PASSWORD_DEFAULT)], $nik);

        session()->setFlashdata('message', 'Password berhasil diubah');
        return redirect()->to('/users/profile');
    }
}
