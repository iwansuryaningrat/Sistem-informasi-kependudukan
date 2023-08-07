<?php

namespace App\Controllers;

use App\Models\KeluargaModel;


use App\Controllers\BaseController;

class KeluargaController extends BaseController
{

    protected $keluargaModel;

    public function __construct()
    {
        $this->keluargaModel = new KeluargaModel();
    }

    public function allFamilies()
    {
        return $this->keluargaModel->findAll();
    }

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

    public function update($id)
    {
    }

    public function delete($id)
    {
        $this->keluargaModel->deleteKeluarga($id);

        session()->setFlashdata('success', 'Data berhasil dihapus.');

        if (session()->get('role') == 'Admin') {
            return redirect()->to('/admin/families');
        } else {
            return redirect()->to('/users/keluarga');
        }
    }
}
