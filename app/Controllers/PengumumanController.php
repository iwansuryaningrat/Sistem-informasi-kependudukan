<?php

namespace App\Controllers;

use App\Models\PengumumanModel;

use App\Controllers\BaseController;

class PengumumanController extends BaseController
{

    /* A variable that is used to store the object of the PengumumanModel class. */
    protected $pengumumanModel;

    public function __construct()
    {
        $this->pengumumanModel = new PengumumanModel();
    }

    public function index()
    {
        //
    }

    /**
     * The above function is used to display all the data in the announcement table.
     */
    public function allAnnouncements()
    {
        $data = [
            'title' => 'Pengumuman',
            'announcements' => $this->pengumumanModel->findAll()
        ];

        return view('pengumuman/index', $data);
    }

    /**
     * The above function is used to display the detail of an announcement.
     * 
     * @param id The name of the parameter to be used in the URL.
     */
    public function detailAnnouncement($id)
    {
        $data = [
            'title' => 'Detail Pengumuman',
            'announcement' => $this->pengumumanModel->getAnnouncement($id)
        ];

        if (empty($data['announcement'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Pengumuman tidak ditemukan');
        }

        return view('pengumuman/detail', $data);
    }

    /**
     * The above function is used to create a new announcement data.
     */
    public function createAnnouncement()
    {
    }

    /**
     * The above function is used to save the new announcement data.
     */
    public function saveAnnouncement()
    {
        $this->pengumumanModel->save([
            'judul' => $this->request->getVar('judul'),
            'isi' => $this->request->getVar('isi'),
            'tanggal' => $this->request->getVar('tanggal'),
            'gambar' => $this->request->getVar('gambar'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/pengumuman');
    }

    /**
     * The above function is used to display the edit form of an announcement.
     * 
     * @param id The name of the parameter to be used in the URL.
     */
    public function editAnnouncement($id)
    {
        $data = [
            'title' => 'Edit Pengumuman',
            'announcement' => $this->pengumumanModel->getAnnouncement($id)
        ];

        return view('pengumuman/edit', $data);
    }

    /**
     * The above function is used to update the announcement data.
     */
    public function updateAnnouncement($id)
    {
    }

    /**
     * The above function is used to delete the announcement data.
     * 
     * @param id The name of the parameter to be used in the URL.
     */
    public function deleteAnnouncement($id)

    {
        $this->pengumumanModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');

        return redirect()->to('/pengumuman');
    }
}
