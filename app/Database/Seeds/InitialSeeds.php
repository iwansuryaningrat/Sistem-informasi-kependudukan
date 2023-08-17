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
            [
                'no_kk' => 1111111111111111,
                'nama_kepala_keluarga'    => "Admin",
                'alamat' => null,
                'alamat_asal' => null,
                'foto_rumah' => 'default.png',
                'tgl_pindah' => null,
                'status' => 'Tetap',
                'isExist' => true,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'no_kk' => 2222222222222222,
                'nama_kepala_keluarga'    => "User",
                'alamat' => null,
                'alamat_asal' => null,
                'foto_rumah' => 'default.png',
                'tgl_pindah' => null,
                'status' => 'Tetap',
                'isExist' => true,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ];

        foreach ($dataKeluarga as $keluarga) {
            $this->db->table('keluarga')->insert($keluarga);
        }

        $dataUser = [
            [
                'nik' => 1111111111111111,
                'no_kk' => 1111111111111111,
                'nama' => "Admin",
                'status' => 'Kepala Keluarga',
                'jenis_kelamin' => 'Laki-laki',
                'tempat_lahir' => 'Semarang',
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
            ],
            [
                'nik' => 2222222222222222,
                'no_kk' => 2222222222222222,
                'nama' => "User",
                'status' => 'Kepala Keluarga',
                'jenis_kelamin' => 'Laki-laki',
                'tempat_lahir' => 'Semarang',
                'tgl_lahir' => date('Y-m-d H:i:s'),
                'usia' => 0,
                'status_perkawinan' => 'Kawin',
                'pendidikan' => 'S3',
                'email' => 'user@gmail.com',
                'password' => password_hash('user1234', PASSWORD_DEFAULT),
                'role' => 'User',
                'foto' => 'default.png',
                'status_kependudukan' => 'Tetap',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ];

        foreach ($dataUser as $user) {
            $this->db->table('users')->insert($user);
        }

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
