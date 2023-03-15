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

    public function __construct()
    {
        $this->keluargaModel = new KeluargaModel();
        $this->usersModel = new UsersModel();


        $this->validation = \Config\Services::validation();
        $this->session = \Config\Services::session();
    }

    public function loginSession()
    {
        // Check Login status
        if (session()->get('isLoggedIn')) {
            if (session()->get('role') == 'admin') {
                return redirect()->to('/admin');
            } elseif (session()->get('role') == 'users') {
                return redirect()->to('/users');
            } else {
                return false;
            }
        }
    }

    public function adminLogin()
    {
        $data = [
            'title' => 'Login Admin'
        ];

        return view('auth/login', $data);
    }

    public function usersLogin()
    {
        $data = [
            'title' => 'Login Users'
        ];

        return view('auth/login', $data);
    }

    public function logingin()
    {
        $nik = $this->request->getVar('nik');
        $password = $this->request->getVar('password');
        $rememberme = $this->request->getVar('rememberme');

        $user = $this->usersModel->getUsers($nik);

        // Check if user exists
        if (!$user) {
            session()->setFlashdata('message', 'NIK tidak terdaftar');
            return redirect()->to('/auth/adminlogin');
        }

        // Check if password is correct
        if (!password_verify($password, $user['password'])) {
            session()->setFlashdata('message', 'Password salah');
            return redirect()->to('/auth/adminlogin');
        }

        // Check if user role is admin or ketua RT
        if ($user['role'] != 'admin' && $user['role'] != 'ketua_rt') {
            session()->setFlashdata('message', 'Anda tidak memiliki akses');
            return redirect()->to('/auth/adminlogin');
        }

        // Set session
        $data = [
            'nik' => $user['nik'],
            'no_kk' => $user['no_kk'],
            'nama' => $user['nama'],
            'status' => $user['status'],
            'jenis_kelamin' => $user['jenis_kelamin'],
            'tempat_lahir' => $user['tempat_lahir'],
            'tgl_lahir' => $user['tgl_lahir'],
            'usia' => $user['usia'],
            'status_perkawinan' => $user['status_perkawinan'],
            'pendidikan' => $user['pendidikan'],
            'email' => $user['email'],
            'role' => $user['role'],
            'foto' => $user['foto'],
            'isLoggedIn' => true
        ];

        session()->set($data);

        // Check if user want to remember me
        if ($rememberme == 'on') {
            // set Session expiry for 1 day
            $this->session->sess_expiration = 86400;
        }

        return redirect()->to('/admin');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/auth/adminlogin');
    }
}
