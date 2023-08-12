<?php

namespace App\Controllers;

use App\Models\FotoModel;
use App\Models\GaleriModel;
use App\Models\PengumumanModel;

class Home extends BaseController
{
    protected $fotoModel;
    protected $galeriModel;
    protected $pengumumanModel;

    public function __construct()
    {
        $this->fotoModel = new FotoModel();
        $this->galeriModel = new GaleriModel();
        $this->pengumumanModel = new PengumumanModel();
    }

    public function index()
    {
        $getNewestPengumuman = $this->pengumumanModel->getPengumumanTerbaru();
        $getNewestGaleri = $this->galeriModel->getGaleriTerbaru();
        $data = [
            'title' => 'Warga Site | Home',
            'navbar' => 'home',
            'isLoggedin' => false,
            'newestPengumuman' => $getNewestPengumuman,
            'newestGaleri' => $getNewestGaleri
        ];

        return view('/users/index', $data);
    }

    public function galeri()
    {
        $data = [
            'title' => 'Galeri | Warga Site',
            'navbar' => 'galeri',
            'dataGaleri' => $this->galeriModel->getGaleri(),
            'isLoggedin' => false,
        ];

        return view('/users/gallery/gallery', $data);
    }

    public function detailGaleri($id)
    {
        $dataGaleri = $this->galeriModel->getGaleri($id);
        $dataFoto = $this->fotoModel->getFotoByGaleriId($id);

        $data = [
            'title' => 'Detail Galeri | Warga Site',
            'navbar' => 'galeri',
            'dataGaleri' => $dataGaleri,
            'dataFoto' => $dataFoto,
            'isLoggedin' => false
        ];

        return view('/users/gallery/gallery-detail', $data);
    }

    public function pengumuman()
    {
        $pengumuman = $this->pengumumanModel->getPengumuman();
        $data = [
            'title' => 'Portal Pengumuman | Warga Site',
            'navbar' => 'pengumuman',
            'isLoggedin' => false,
            'pengumuman' => $pengumuman,
        ];

        return view('/users/news/announcement', $data);
    }

    public function detailpengumuman($id)
    {
        $pengumuman = $this->pengumumanModel->getPengumuman($id);
        $pengumumanTerbaru = $this->pengumumanModel->getPengumumanTerbaru();

        $data = [
            'title' => 'Portal Pengumuman | Warga Site',
            'navbar' => 'pengumuman',
            'isLoggedin' => false,
            'pengumuman' => $pengumuman,
            'pengumumanTerbaru' => $pengumumanTerbaru,
        ];

        return view('/users/news/read-announcement', $data);
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
