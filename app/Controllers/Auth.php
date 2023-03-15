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

    public function register()
    {
        $data = [
            'title' => 'Register'
        ];

        return view('auth/register', $data);
    }

    public function forgotPassword()
    {
        $data = [
            'title' => 'Forgot Password'
        ];

        return view('auth/forgot-password', $data);
    }

    public function resetPassword()
    {
        $data = [
            'title' => 'Reset Password'
        ];

        return view('auth/reset-password', $data);
    }

    public function logingin()
    {
    }

    public function registering()
    {
    }

    public function logout()
    {
    }
}
