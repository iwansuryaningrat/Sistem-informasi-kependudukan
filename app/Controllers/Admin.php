<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin/index');
    }

    public function login()
    {
        return view('admin/login');
    }
}
