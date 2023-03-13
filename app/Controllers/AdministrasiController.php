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
    }
}
