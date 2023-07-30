<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\AdministrasiModel;

use App\Controllers\BaseController;

class AdministrasiController extends BaseController
{

    /* A variable that is used to store the object of the AdministrasiModel class. */
    protected $administrasiModel;
    protected $userModel;

    public function __construct()
    {
        $this->administrasiModel = new AdministrasiModel();
        $this->userModel = new UsersModel();
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
