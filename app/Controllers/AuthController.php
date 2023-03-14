<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    public function index()
    {
        //
    }

    public function login()
    {
        $data = [
            'title' => 'Login'
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
}
