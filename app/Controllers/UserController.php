<?php

namespace App\Controllers;

use App\Models\UsersModel;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    protected $userModel;
    protected $user_data;

    public function __construct()
    {
        $this->userModel = new UsersModel();

        $this->user_data = [
            'nik' => session()->get('nik'),
            'no_kk' => session()->get('no_kk'),
            'nama' => session()->get('nama'),
            'status' => session()->get('status'),
            'jenis_kelamin' => session()->get('jenis_kelamin'),
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
            'isLoggedIn' => session()->get('isLoggedIn'),
        ];
    }

    public function allUsers()
    {
        $data = [
            'title' => 'User',
            'users' => $this->userModel->findAll()
        ];

        return view('user/index', $data);
    }

    public function detailUser($id)
    {
        $data = [
            'title' => 'Detail User',
            'user' => $this->userModel->getUser($id)
        ];

        if (empty($data['user'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('User tidak ditemukan');
        }

        return view('user/detail', $data);
    }

    public function createUser()
    {
        $data = [
            'title' => 'Tambah User',
            'validation' => \Config\Services::validation()
        ];

        return view('user/create', $data);
    }

    public function saveUser()
    {
    }

    public function editUser($nik)
    {
        $data = [
            'title' => 'Edit User',
            'validation' => \Config\Services::validation(),
            'user' => $this->userModel->getUser($nik)
        ];

        return view('user/edit', $data);
    }

    public function updateUser()
    {
    }

    public function deleteUser($id)
    {
    }

    public function saveDetailProfile()
    {
        $nik = $this->user_data['nik'];
        $foto = $this->request->getFile('foto_profil');
        $nama = $this->request->getVar('nama');
        $email = $this->request->getVar('email');
        $no_hp = $this->request->getVar('no_hp');

        // Check if foto is uploaded
        if ($foto->getError() == 4) {
            $namaFoto = $this->user_data['foto'];
        } else {
            // Generate random name
            $namaFoto = $foto->getRandomName();

            // Move foto to img folder
            $foto->move('upload/photos/', $namaFoto);

            // Delete old foto
            if ($this->user_data['foto'] != 'default.png') {
                unlink('upload/photos/' . $this->user_data['foto']);
            }
        }

        // Update user data
        $this->userModel->editUsers([
            'nama' => $nama,
            'email' => $email,
            'no_hp' => $no_hp,
            'foto' => $namaFoto
        ], $nik);

        // Update session
        session()->set([
            'nama' => $nama,
            'email' => $email,
            'no_hp' => $no_hp,
            'foto' => $namaFoto
        ]);

        session()->setFlashdata('message', 'Profil berhasil diperbarui');
        return redirect()->to('/users/profile');
    }
}
