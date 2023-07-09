-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jul 2023 pada 05.01
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `administrasi`
--

CREATE TABLE `administrasi` (
  `administrasi_id` int(11) NOT NULL,
  `pemohon` bigint(17) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `keperluan` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `administrasi_status` varchar(50) NOT NULL DEFAULT 'Menunggu Konfirmasi',
  `berkas` varchar(255) NOT NULL,
  `tgl_penerimaan` date NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `administrasi`
--

INSERT INTO `administrasi` (`administrasi_id`, `pemohon`, `kategori`, `keperluan`, `deskripsi`, `no_surat`, `administrasi_status`, `berkas`, `tgl_penerimaan`, `catatan`, `created_at`, `updated_at`) VALUES
(1, 3315121412000003, 'skdasdnmsd', 'asdasds', 'asdasdsd', 'asdsdasd', 'Menunggu Konfirmasi', '', '2023-06-25', '', '2023-06-24 21:07:10', '2023-06-24 21:07:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto`
--

CREATE TABLE `foto` (
  `foto_id` int(11) NOT NULL,
  `galeri_id` int(11) NOT NULL,
  `nama_foto` varchar(255) NOT NULL,
  `foto_path` varchar(255) NOT NULL,
  `isThumbnail` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `galeri_id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `uploaded_by` bigint(17) NOT NULL,
  `kategori` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_galeri`
--

CREATE TABLE `kategori_galeri` (
  `kategori_galeri_id` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluarga`
--

CREATE TABLE `keluarga` (
  `no_kk` bigint(17) NOT NULL,
  `nama_kepala_keluarga` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `alamat_asal` varchar(255) NOT NULL,
  `foto_rumah` varchar(255) NOT NULL,
  `tgl_pindah` date DEFAULT NULL,
  `status` varchar(15) NOT NULL,
  `isExist` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `keluarga`
--

INSERT INTO `keluarga` (`no_kk`, `nama_kepala_keluarga`, `alamat`, `alamat_asal`, `foto_rumah`, `tgl_pindah`, `status`, `isExist`, `created_at`, `updated_at`, `deleted_at`) VALUES
(934772923723623, 'Keluarga Cemara 2', 'Alamat 2', 'Gak tau', '', '2023-01-30', 'Aktif', 1, '2023-06-04 17:13:58', '2023-06-04 17:13:58', NULL),
(3315121412000002, 'Keluarga Cemara', 'Jl. in aja dulu', 'Jl. Panjang', '', '2023-03-01', 'Aktif', 1, '2023-03-14 16:31:18', '2023-03-14 16:31:18', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelaporan`
--

CREATE TABLE `pelaporan` (
  `pelaporan_id` int(11) NOT NULL,
  `nik_pelapor` bigint(17) NOT NULL,
  `nama_terlapor` varchar(50) NOT NULL,
  `nik_terlapor` bigint(17) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `laporan` varchar(255) NOT NULL,
  `deskripsi_pelaporan` varchar(255) NOT NULL,
  `status_pelaporan` varchar(20) NOT NULL DEFAULT 'Menunggu Konfirmasi',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelaporan`
--

INSERT INTO `pelaporan` (`pelaporan_id`, `nik_pelapor`, `nama_terlapor`, `nik_terlapor`, `kategori`, `laporan`, `deskripsi_pelaporan`, `status_pelaporan`, `created_at`, `updated_at`) VALUES
(1, 3315121412050003, '2e2e2e', 3315121412000003, '2e2e2e', '2e2e', '2rrfw43r', 'Menunggu Konfirmasi', '2023-06-24 21:08:51', '2023-06-24 21:08:51'),
(2, 3315121412000003, 'ererer', 3315121412000003, 'erer', 'ererer', 'ererer', 'Menunggu Konfirmasi', '2023-06-24 21:10:02', '2023-06-24 21:10:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `pengumuman_id` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `judul_pengumuman` varchar(30) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_by` bigint(17) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kateogri` varchar(50) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `status` varchar(15) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `nik` bigint(17) NOT NULL,
  `no_kk` bigint(17) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL COMMENT '[Kepala Keluarga, Istri, Anak]',
  `jenis_kelamin` varchar(20) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `usia` int(11) NOT NULL,
  `status_perkawinan` varchar(20) NOT NULL COMMENT '[Kawin, Belum Kawin, Duda/Janda]',
  `pendidikan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL COMMENT '[user, ketua rt, admin, superadmin]',
  `foto` varchar(255) NOT NULL,
  `status_akun` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`nik`, `no_kk`, `nama`, `status`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `usia`, `status_perkawinan`, `pendidikan`, `email`, `password`, `role`, `foto`, `status_akun`, `created_at`, `updated_at`) VALUES
(3315121412000003, 3315121412000002, 'Iwan Suryaningrat', 'anak', 'laki-laki', 'Grobogan', '2000-12-14', 0, 'Belum kawin', 'S1', 'iwan.suryaningrat28@gmail.com', '$2y$10$M/k9i0ysRAMr/FeEgfjurebLMx0TzrpjvS9E/QimAr/p/ijOqkPJW', 'admin', '', '', '2023-03-14 16:32:35', '2023-03-14 16:32:35'),
(3315121412000006, 934772923723623, 'edASR erere', 'Anak', 'Laki-laki', 'Grobogan', '2023-03-14', 0, 'Belum kawin', 'Belum Sekolah', '', 'password', 'user', '', '', '2023-06-04 17:16:13', '2023-06-04 17:16:13'),
(3315121412050003, 934772923723623, 'adasdsad dsds', 'Kepala Keluarga', 'Laki-laki', 'Grobogan', '2013-06-06', 10, 'Kawin', 'S1', 'iwan.suryaningrat28@gmail.com', 'pdkkdkpsjrnro', 'user', '', '', '2023-06-24 19:57:06', '2023-06-24 19:57:06');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `administrasi`
--
ALTER TABLE `administrasi`
  ADD PRIMARY KEY (`administrasi_id`),
  ADD KEY `users_fk` (`pemohon`);

--
-- Indeks untuk tabel `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`foto_id`),
  ADD KEY `galeri` (`galeri_id`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`galeri_id`),
  ADD KEY `uploader` (`uploaded_by`),
  ADD KEY `kategori_galeri` (`kategori`);

--
-- Indeks untuk tabel `kategori_galeri`
--
ALTER TABLE `kategori_galeri`
  ADD PRIMARY KEY (`kategori_galeri_id`);

--
-- Indeks untuk tabel `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`no_kk`);

--
-- Indeks untuk tabel `pelaporan`
--
ALTER TABLE `pelaporan`
  ADD PRIMARY KEY (`pelaporan_id`),
  ADD KEY `nik_fk` (`nik_pelapor`),
  ADD KEY `terlapor_fk` (`nik_terlapor`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`pengumuman_id`),
  ADD KEY `creator` (`created_by`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `updater` (`updated_by`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `kk` (`no_kk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `administrasi`
--
ALTER TABLE `administrasi`
  MODIFY `administrasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `foto`
--
ALTER TABLE `foto`
  MODIFY `foto_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `galeri_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori_galeri`
--
ALTER TABLE `kategori_galeri`
  MODIFY `kategori_galeri_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pelaporan`
--
ALTER TABLE `pelaporan`
  MODIFY `pelaporan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `pengumuman_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `administrasi`
--
ALTER TABLE `administrasi`
  ADD CONSTRAINT `users_fk` FOREIGN KEY (`pemohon`) REFERENCES `users` (`nik`);

--
-- Ketidakleluasaan untuk tabel `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `galeri` FOREIGN KEY (`galeri_id`) REFERENCES `galeri` (`galeri_id`);

--
-- Ketidakleluasaan untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD CONSTRAINT `kategori_galeri` FOREIGN KEY (`kategori`) REFERENCES `kategori_galeri` (`kategori_galeri_id`),
  ADD CONSTRAINT `uploader` FOREIGN KEY (`uploaded_by`) REFERENCES `users` (`nik`);

--
-- Ketidakleluasaan untuk tabel `pelaporan`
--
ALTER TABLE `pelaporan`
  ADD CONSTRAINT `nik_fk` FOREIGN KEY (`nik_pelapor`) REFERENCES `users` (`nik`),
  ADD CONSTRAINT `terlapor_fk` FOREIGN KEY (`nik_terlapor`) REFERENCES `users` (`nik`);

--
-- Ketidakleluasaan untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD CONSTRAINT `creator` FOREIGN KEY (`created_by`) REFERENCES `users` (`nik`);

--
-- Ketidakleluasaan untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `updater` FOREIGN KEY (`updated_by`) REFERENCES `users` (`nik`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `kk` FOREIGN KEY (`no_kk`) REFERENCES `keluarga` (`no_kk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
