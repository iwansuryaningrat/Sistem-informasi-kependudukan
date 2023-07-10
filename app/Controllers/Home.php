<?php

namespace App\Controllers;

use App\Controllers\FotoController;
use App\Controllers\GaleriController;
use App\Controllers\PengumumanController;

class Home extends BaseController
{
    protected $fotoController;
    protected $galeriController;
    protected $pelaporanController;
    protected $pengumumanController;

    public function __construct()
    {
        $this->fotoController = new FotoController();
        $this->galeriController = new GaleriController();
        $this->pengumumanController = new PengumumanController();
    }

    public function index()
    {
        $data = [
            'title' => 'Warga Site | Home',
            'navbar' => 'home',
            'isLoggedin' => false,
        ];

        return view('/users/index', $data);
    }

    public function signin()
    {
        $data = [
            'title' => 'Warga Site | Login',
            'navbar' => 'login',
            'isLoggedin' => false,
        ];

        return view('/auth/signin', $data);
    }

    public function signup()
    {
        $data = [
            'title' => 'Warga Site | Register',
            'navbar' => 'register',
            'isLoggedin' => false,
        ];

        return view('/auth/signup', $data);
    }

    public function forgotPasswordForm()
    {
        $data = [
            'title' => 'Warga Site | Forgot Password',
            'navbar' => 'forgot-password',
            'isLoggedin' => false,
        ];

        return view('/auth/forgot-password', $data);
    }
}
