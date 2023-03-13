<?php

namespace App\Controllers;

use App\Models\UsersModel;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UsersModel();
    }

    public function index()
    {
        //
    }

    /**
     * The above function is used to display all the data in the user table.
     */
    public function allUsers()
    {
        $data = [
            'title' => 'User',
            'users' => $this->userModel->findAll()
        ];

        return view('user/index', $data);
    }

    /**
     * The above function is used to display the detail of a user.
     * 
     * @param id The name of the parameter to be used in the URL.
     */
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

    /**
     * The above function is used to create a new user data.
     */
    public function createUser()
    {
        $data = [
            'title' => 'Tambah User',
            'validation' => \Config\Services::validation()
        ];

        return view('user/create', $data);
    }

    /**
     * The above function is used to save the data that has been created.
     */
    public function saveUser()
    {
    }

    /**
     * The above function is used to display the edit form of a user.
     * 
     * @param id The name of the parameter to be used in the URL.
     */
    public function editUser($id)
    {
        $data = [
            'title' => 'Edit User',
            'validation' => \Config\Services::validation(),
            'user' => $this->userModel->getUser($id)
        ];

        return view('user/edit', $data);
    }

    /**
     * The above function is used to save the data that has been edited.
     */
    public function updateUser()
    {
    }

    /**
     * The above function is used to delete a user data.
     * 
     * @param id The name of the parameter to be used in the URL.
     */
    public function deleteUser($id)
    {
    }
}
