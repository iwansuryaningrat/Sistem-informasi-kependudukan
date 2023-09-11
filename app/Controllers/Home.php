<?php

namespace App\Controllers;

use App\Models\FotoModel;
use App\Models\GaleriModel;
use App\Models\PengumumanModel;
use ZipArchive;

class Home extends BaseController
{
    protected $fotoModel;
    protected $galeriModel;
    protected $pengumumanModel;

    // Paths
    protected $photoPath = '/upload/photos/galeri/';
    protected $pengumumanPath = '/upload/photos/pengumuman/';
    protected $profilePhotoPath = '/upload/photos/profile/';
    protected $zipFilePath = '/upload/zip/';

    public function __construct()
    {
        $this->fotoModel = new FotoModel();
        $this->galeriModel = new GaleriModel();
        $this->pengumumanModel = new PengumumanModel();
    }

    public function index()
    {
        $getNewestPengumuman = $this->pengumumanModel->getPengumumanTerbaru();
        $getNewestGaleri = $this->galeriModel->getGaleriTerbaru();
        $data = [
            'title' => 'Warga Site | Home',
            'navbar' => 'home',
            'isLoggedin' => false,
            'newestPengumuman' => $getNewestPengumuman,
            'newestGaleri' => $getNewestGaleri,
            'photoPath' => $this->photoPath,
            'pengumumanPath' => $this->pengumumanPath,
            'profilePhotoPath' => $this->profilePhotoPath,
        ];

        return view('/users/index', $data);
    }

    public function galeri()
    {
        $data = [
            'title' => 'Galeri | Warga Site',
            'navbar' => 'galeri',
            'dataGaleri' => $this->galeriModel->getGaleri(),
            'isLoggedin' => false,
            'path' => $this->photoPath,
            'profilePhotoPath' => $this->profilePhotoPath,
        ];

        return view('/users/gallery/gallery', $data);
    }

    public function detailGaleri($id)
    {
        $dataGaleri = $this->galeriModel->getGaleri($id);
        $dataFoto = $this->fotoModel->getFotoByGaleriId($id);

        $data = [
            'title' => 'Detail Galeri | Warga Site',
            'navbar' => 'galeri',
            'dataGaleri' => $dataGaleri,
            'dataFoto' => $dataFoto,
            'isLoggedin' => false,
            'path' => $this->photoPath,
            'profilePhotoPath' => $this->profilePhotoPath,
        ];

        return view('/users/gallery/gallery-detail', $data);
    }

    public function downloadGalleryPhotos($id)
    {
        $dataFoto = $this->fotoModel->getFotoByGaleriId($id);

        $zipFileName = 'foto_galeri_' . $id . '.zip';
        $zipFilePath = FCPATH . $this->zipFilePath . $zipFileName; // Update with the appropriate path

        $zip = new ZipArchive();
        if ($zip->open($zipFilePath, ZipArchive::CREATE | ZipArchive::OVERWRITE) === true) {
            foreach ($dataFoto as $foto) {
                $photoPath = FCPATH . $this->photoPath . $foto['foto'];
                if (file_exists($photoPath)) {
                    $zip->addFile($photoPath, $foto['foto']);
                }
            }
            $zip->close();

            // Set appropriate headers for download
            header('Content-Type: application/zip');
            header('Content-Disposition: attachment; filename="' . $zipFileName . '"');
            header('Content-Length: ' . filesize($zipFilePath));
            header('Pragma: no-cache');

            // Read and output the zip file
            readfile($zipFilePath);

            // Delete the zip file after sending
            unlink($zipFilePath);

            exit; // Stop further execution
        } else {
            // Handle zip creation error
            return 'Error creating zip file';
        }
    }

    public function pengumuman()
    {
        $pengumuman = $this->pengumumanModel->getPengumuman();
        $data = [
            'title' => 'Portal Pengumuman | Warga Site',
            'navbar' => 'pengumuman',
            'isLoggedin' => false,
            'pengumuman' => $pengumuman,
            'path' => $this->pengumumanPath,
            'profilePhotoPath' => $this->profilePhotoPath,
        ];

        return view('/users/news/announcement', $data);
    }

    public function detailpengumuman($id)
    {
        $pengumuman = $this->pengumumanModel->getPengumuman($id);
        $pengumumanTerbaru = $this->pengumumanModel->getPengumumanTerbaru();

        $data = [
            'title' => 'Portal Pengumuman | Warga Site',
            'navbar' => 'pengumuman',
            'isLoggedin' => false,
            'pengumuman' => $pengumuman,
            'pengumumanTerbaru' => $pengumumanTerbaru,
            'path' => $this->pengumumanPath,
            'profilePhotoPath' => $this->profilePhotoPath,
        ];

        return view('/users/news/read-announcement', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Kontak Kami | Warga Site',
            'navbar' => 'contact',
            'isLoggedin' => false,
            'profilePhotoPath' => $this->profilePhotoPath,
        ];

        return view('/users/contact/contact', $data);
    }
}
