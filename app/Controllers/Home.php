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

    public function galeri()
    {
        $data = [
            'title' => 'Galeri | Warga Site',
            'navbar' => 'galeri',
            'isLoggedin' => false,
        ];

        return view('/users/gallery/gallery', $data);
    }

    public function pengumuman()
    {
        $data = [
            'title' => 'Portal Pengumuman | Warga Site',
            'navbar' => 'pengumuman',
            'isLoggedin' => false,
        ];

        return view('/users/news/announcement', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Kontak Kami | Warga Site',
            'navbar' => 'contact',
            'isLoggedin' => false,
        ];

        return view('/users/contact/contact', $data);
    }
}
