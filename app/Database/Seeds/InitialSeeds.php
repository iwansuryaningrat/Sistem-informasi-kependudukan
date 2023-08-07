<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InitialSeeds extends Seeder
{
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function run()
    {
        $dataKeluarga = [
            'no_kk' => 1212121212121212,
            'nama_kepala_keluarga'    => "Admin",
            'alamat' => '-',
            'alamat_asal' => '-',
            'foto_rumah' => 'default.png',
            'tgl_pindah' => null,
            'status' => 'Tetap',
            'isExist' => true,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        $this->db->table('keluarga')->insert($dataKeluarga);

        $dataUser = [
            'nik' => 22222222222222222,
            'no_kk' => $dataKeluarga['no_kk'],
            'nama' => "Admin",
            'status' => 'Kepala Keluarga',
            'jenis_kelamin' => 'Laki-laki',
            'tempat_lahir' => '-',
            'tgl_lahir' => date('Y-m-d H:i:s'),
            'usia' => 0,
            'status_perkawinan' => 'Kawin',
            'pendidikan' => 'S3',
            'email' => 'admin@gmail.com',
            'password' => password_hash('admin1234', PASSWORD_DEFAULT),
            'role' => 'Admin',
            'foto' => 'default.png',
            'status_kependudukan' => 'Tetap',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        $this->db->table('users')->insert($dataUser);

        $dataKategoriGaleri = [
            [
                'nama_kategori' => 'Kegiatan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_kategori' => 'Lomba',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_kategori' => 'Acara',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_kategori' => 'Dokumentasi',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_kategori' => 'Lainnya',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ];
        $this->db->table('kategori_galeri')->insertBatch($dataKategoriGaleri);
    }
}
