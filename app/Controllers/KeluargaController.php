<?php

namespace App\Controllers;

use App\Models\KeluargaModel;


use App\Controllers\BaseController;

class KeluargaController extends BaseController
{

    /* A variable that is used to store the object of the KeluargaModel class. */
    protected $keluargaModel;

    public function __construct()
    {
        $this->keluargaModel = new KeluargaModel();
    }

    public function index()
    {
        //
    }

    /**
     * The above function is a function that is used to display all the data in the family table.
     */
    public function allFamilies()
    {
        $data = [
            'title' => 'Keluarga',
            'families' => $this->keluargaModel->findAll()
        ];

        return view('keluarga/index', $data);
    }

    /**
     * The above function is used to display the detail of a family.
     * 
     * @param id The name of the parameter to be used in the URL.
     */
    public function detailFamily($id)
    {
        $data = [
            'title' => 'Detail Keluarga',
            'family' => $this->keluargaModel->getFamily($id)
        ];

        if (empty($data['family'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Keluarga tidak ditemukan');
        }

        return view('keluarga/detail', $data);
    }

    /**
     * The above function is used to create a new family data.
     */
    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Keluarga',
            'validation' => \Config\Services::validation()
        ];

        return view('keluarga/create', $data);
    }

    /**
     * It saves a new family member to the database
     */
    public function save()
    {
        // validasi input
        if (!$this->validate([
            'nama' => [
                'rules' => 'required|is_unique[keluarga.nama]',
                'errors' => [
                    'required' => '{field} keluarga harus diisi.',
                    'is_unique' => '{field} keluarga sudah terdaftar.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/keluarga/create')->withInput()->with('validation', $validation);
        }

        $this->keluargaModel->save([
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'no_telp' => $this->request->getVar('no_telp'),
            'email' => $this->request->getVar('email'),
            'created_at' => date('Y-m-d H:i:s')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/keluarga');
    }

    /**
     * The above function is used to edit the data of the family.
     * 
     * @param id The id of the family to edit
     */
    public function edit($id)
    {
        $data = [
            'title' => 'Form Ubah Data Keluarga',
            'validation' => \Config\Services::validation(),
            'family' => $this->keluargaModel->getFamily($id)
        ];

        return view('keluarga/edit', $data);
    }

    /**
     * The above function is used to update the data of the family.
     */
    public function update($id)
    {
    }

    /**
     * The above function is used to delete data from the database.
     */
    public function delete()
    {
        $id = $this->request->getVar('id');

        $this->keluargaModel->delete($id);

        session()->setFlashdata('pesan', 'Data berhasil dihapus.');

        return redirect()->to('/keluarga');
    }
}
