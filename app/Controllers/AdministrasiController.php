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

class AdministrasiController extends BaseController
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

    public function index()
    {
        //
        $no_surat = $this->generateNoSurat();
        dd($no_surat);
    }

    private function generateNoSurat()
    {
        // get month in romawi format
        $month = date('m');
        $romawi = $this->getRomawi($month);

        // get year
        $year = date('Y');

        // get total administrasi in this month
        $total = $this->administrasiModel->countAdministrasiThisMonth();

        // generate no surat
        $no_surat = 'B/' . $total + 1 . '/ADM/' . $romawi . '/' . $year;

        return $no_surat;
    }

    private function getRomawi($month)
    {
        switch ($month) {
            case '01':
                return 'I';
                break;
            case '02':
                return 'II';
                break;
            case '03':
                return 'III';
                break;
            case '04':
                return 'IV';
                break;
            case '05':
                return 'V';
                break;
            case '06':
                return 'VI';
                break;
            case '07':
                return 'VII';
                break;
            case '08':
                return 'VIII';
                break;
            case '09':
                return 'IX';
                break;
            case '10':
                return 'X';
                break;
            case '11':
                return 'XI';
                break;
            case '12':
                return 'XII';
                break;
            default:
                return 'XIII';
                break;
        }
    }
}
