-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2023 at 07:32 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrasi`
--

CREATE TABLE `administrasi` (
  `administrasi_id` int(11) NOT NULL,
  `pemohon` bigint(20) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `keperluan` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `no_surat` varchar(50) DEFAULT NULL,
  `administrasi_status` varchar(50) NOT NULL DEFAULT 'Menunggu Konfirmasi',
  `berkas` varchar(255) NOT NULL,
  `tgl_penerimaan` datetime DEFAULT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `foto_id` int(11) NOT NULL,
  `galeri_id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `isThumbnail` tinyint(1) NOT NULL DEFAULT 0,
  `caption` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `galeri_id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `kategori` int(11) DEFAULT NULL,
  `total_foto` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_galeri`
--

CREATE TABLE `kategori_galeri` (
  `kategori_galeri_id` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE `keluarga` (
  `no_kk` bigint(17) NOT NULL,
  `nama_kepala_keluarga` varchar(50) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `alamat_asal` varchar(255) DEFAULT NULL,
  `foto_rumah` varchar(255) NOT NULL DEFAULT 'default.png',
  `tgl_pindah` date DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `isExist` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keluarga`
--

INSERT INTO `keluarga` (`no_kk`, `nama_kepala_keluarga`, `alamat`, `alamat_asal`, `foto_rumah`, `tgl_pindah`, `status`, `isExist`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1212121212121212, 'Admin', NULL, NULL, 'default.png', NULL, 'Tetap', 1, '2023-08-07 21:09:20', '2023-08-07 21:09:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pelaporan`
--

CREATE TABLE `pelaporan` (
  `pelaporan_id` int(11) NOT NULL,
  `nik_pelapor` bigint(20) NOT NULL,
  `nik_terlapor` bigint(20) NOT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `laporan` varchar(255) NOT NULL,
  `deskripsi_pelaporan` varchar(255) DEFAULT NULL,
  `status_pelaporan` varchar(20) NOT NULL DEFAULT 'Menunggu Konfirmasi',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `pengumuman_id` int(11) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `judul_pengumuman` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL DEFAULT 'default.png',
  `status` varchar(20) NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama_pengirim` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `pesan` varchar(255) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Belum Dibaca',
  `updated_by` bigint(20) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `nik` bigint(17) NOT NULL,
  `no_kk` bigint(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` varchar(15) DEFAULT NULL COMMENT '[Kepala Keluarga, Istri, Anak]',
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `agama` varchar(25) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `usia` int(11) DEFAULT NULL,
  `status_perkawinan` varchar(20) DEFAULT NULL COMMENT '[Kawin, Belum Kawin, Duda/Janda]',
  `pendidikan` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'User' COMMENT '[user, ketua rt, admin, superadmin]',
  `foto` varchar(255) NOT NULL DEFAULT 'default.png',
  `status_kependudukan` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`nik`, `no_kk`, `nama`, `status`, `jenis_kelamin`, `agama`, `tempat_lahir`, `tgl_lahir`, `usia`, `status_perkawinan`, `pendidikan`, `pekerjaan`, `email`, `no_hp`, `password`, `role`, `foto`, `status_kependudukan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(22222222222222222, 1212121212121212, 'Admin', 'Kepala Keluarga', 'Laki-laki', '', '-', '2023-08-07', 0, 'Kawin', 'S3', NULL, 'admin@gmail.com', NULL, '$2y$10$E0KoAXJwg5ksyzopq7H0xue8ZY6a0JQLSX48X610xdV6vfxu4Bn/m', 'Admin', 'default.png', 'Tetap', '2023-08-07 21:09:20', '2023-08-07 21:09:20', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrasi`
--
ALTER TABLE `administrasi`
  ADD PRIMARY KEY (`administrasi_id`),
  ADD KEY `users_fk` (`pemohon`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`foto_id`),
  ADD KEY `galeri` (`galeri_id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`galeri_id`),
  ADD KEY `uploader` (`created_by`),
  ADD KEY `kategori_galeri` (`kategori`);

--
-- Indexes for table `kategori_galeri`
--
ALTER TABLE `kategori_galeri`
  ADD PRIMARY KEY (`kategori_galeri_id`);

--
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`no_kk`);

--
-- Indexes for table `pelaporan`
--
ALTER TABLE `pelaporan`
  ADD PRIMARY KEY (`pelaporan_id`),
  ADD KEY `nik_fk` (`nik_pelapor`),
  ADD KEY `terlapor_fk` (`nik_terlapor`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`pengumuman_id`),
  ADD KEY `creator` (`created_by`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `updater` (`updated_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `kk` (`no_kk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrasi`
--
ALTER TABLE `administrasi`
  MODIFY `administrasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `foto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `galeri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kategori_galeri`
--
ALTER TABLE `kategori_galeri`
  MODIFY `kategori_galeri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelaporan`
--
ALTER TABLE `pelaporan`
  MODIFY `pelaporan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `pengumuman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `administrasi`
--
ALTER TABLE `administrasi`
  ADD CONSTRAINT `users_fk` FOREIGN KEY (`pemohon`) REFERENCES `users` (`nik`);

--
-- Constraints for table `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `galeri` FOREIGN KEY (`galeri_id`) REFERENCES `galeri` (`galeri_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `galeri`
--
ALTER TABLE `galeri`
  ADD CONSTRAINT `kategori` FOREIGN KEY (`kategori`) REFERENCES `kategori_galeri` (`kategori_galeri_id`),
  ADD CONSTRAINT `uploader` FOREIGN KEY (`created_by`) REFERENCES `users` (`nik`);

--
-- Constraints for table `pelaporan`
--
ALTER TABLE `pelaporan`
  ADD CONSTRAINT `pelapor` FOREIGN KEY (`nik_pelapor`) REFERENCES `users` (`nik`),
  ADD CONSTRAINT `terlapor` FOREIGN KEY (`nik_terlapor`) REFERENCES `users` (`nik`);

--
-- Constraints for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD CONSTRAINT `creator` FOREIGN KEY (`created_by`) REFERENCES `users` (`nik`);

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `updater` FOREIGN KEY (`updated_by`) REFERENCES `users` (`nik`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `kk` FOREIGN KEY (`no_kk`) REFERENCES `keluarga` (`no_kk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
