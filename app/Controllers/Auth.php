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

    /**
     * This function is used to display the login page for the admin
     */
    public function adminLogin()
    {
        $data = [
            'title' => 'Login Admin'
        ];

        return view('auth/login', $data);
    }

    /**
     * It returns the view of the login page.
     * 
     * @return The view is being returned.
     */
    public function usersLogin()
    {
        $data = [
            'title' => 'Login Users'
        ];

        return view('users/login', $data);
    }

    /**
     * The above function is used to log in the admin or ketua RT.
     */
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
            session()->setFlashdata('message', 'Password yang Anda masukkan salah');
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

        if ($user['role'] == 'admin' || $user['role'] == 'ketua_rt') {
            return redirect()->to('/admin');
        } elseif ($user['role'] == 'user') {
            return redirect()->to('/users');
        }
    }

    /**
     * It destroys the session and redirects to the login page.
     * 
     * @return The logout function is returning the redirect to the login page.
     */
    public function logout()
    {
        $data = session()->get();
        session()->destroy();

        if ($data['role'] == 'admin') {
            return redirect()->to('/auth/adminlogin');
        } elseif ($data['role'] == 'users') {
            return redirect()->to('/auth/userslogin');
        }
    }
}
