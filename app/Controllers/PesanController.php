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

class PesanController extends BaseController
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
    }

    public function savePesan()
    {
        $data = [
            'nama_pengirim' => $this->request->getVar('namaLengkap'),
            'email' => $this->request->getVar('email'),
            'kategori' => $this->request->getVar('subjek'),
            'pesan' => $this->request->getVar('pesan'),
            'status' => 'Belum Dibaca',
        ];

        $this->pesanModel->save($data);

        session()->setFlashdata('success', 'Pesan berhasil dikirimkan!');

        if (session()->get('isLoggedIn'))
            return redirect()->to('/users/contact');
        else
            return redirect()->to('/home/contact');
    }

    public function deletePesan($id)
    {
        $this->pesanModel->delete($id);

        session()->setFlashdata('success', 'Pesan berhasil dihapus!');

        return redirect()->to('/admin/pesan');
    }
}
