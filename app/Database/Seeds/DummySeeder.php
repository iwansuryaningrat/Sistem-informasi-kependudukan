<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class DummySeeder extends Seeder
{
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            $faker = \Faker\Factory::create('id_ID');

            $dataKeluarga = [
                'no_kk' => $faker->creditCardNumber,
                'nama_kepala_keluarga'    => $faker->name,
                'alamat' => $faker->address,
                'alamat_asal' => $faker->address,
                'foto_rumah' => 'default.png',
                'tgl_pindah' => $faker->date('Y-m-d'),
                'status' => $faker->randomElement(['Pindah', 'Tetap']),
                'isExist' => $faker->randomElement([false, true]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
            $this->db->table('keluarga')->insert($dataKeluarga);

            $dataUser = [
                'nik' => $faker->creditCardNumber,
                'no_kk' => $dataKeluarga['no_kk'],
                'nama' => $faker->name,
                'status' => $faker->randomElement(['Kepala Keluarga', 'Istri', 'Anak']),
                'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'tempat_lahir' => $faker->city,
                'tgl_lahir' => $faker->date('Y-m-d'),
                'usia' => $faker->numberBetween(1, 100),
                'status_perkawinan' => $faker->randomElement(['Belum Kawin', 'Kawin', 'Cerai Hidup', 'Cerai Mati']),
                'pendidikan' => $faker->randomElement(['Tidak Sekolah', 'SD', 'SMP', 'SMA', 'D1', 'D2', 'D3', 'D4', 'S1', 'S2', 'S3']),
                'email' => $faker->email,
                'password' => password_hash('12345678', PASSWORD_DEFAULT),
                'role' => 'User',
                'foto' => 'default.png',
                'status_kependudukan' => $faker->randomElement(['Tetap', 'Sementara', 'Pendatang', 'Pindahan']),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
            $this->db->table('users')->insert($dataUser);

            $dataAdministrasi = [
                'pemohon' => $dataUser['nik'],
                'kategori' => $faker->randomElement(['KTP', 'KK', 'Surat Pindah', 'Surat Kematian', 'Surat Kelahiran', 'Surat Keterangan', 'Surat Pengantar']),
                'keperluan' => $faker->text($maxNbChars = 20),
                'deskripsi' => $faker->text($maxNbChars = 20),
                'no_surat' => '0000/0000/0000/0000',
                'administrasi_status' => $faker->randomElement(['Dalam Proses', 'Menunggu Konfirmasi', "Ditolak", "Selesai"]),
                'berkas' => 'default.png',
                'tgl_penerimaan' => $faker->date('Y-m-d'),
                'catatan' => $faker->text($maxNbChars = 20),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
            $this->db->table('administrasi')->insert($dataAdministrasi);
        }
    }
}
