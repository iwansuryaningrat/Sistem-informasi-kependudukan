-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2023 at 08:19 PM
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
  `pemohon` bigint(17) NOT NULL,
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

--
-- Dumping data for table `administrasi`
--

INSERT INTO `administrasi` (`administrasi_id`, `pemohon`, `kategori`, `keperluan`, `deskripsi`, `no_surat`, `administrasi_status`, `berkas`, `tgl_penerimaan`, `catatan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(82, 5406052909061905, 'Surat Pindah', 'Ut maiores rem id.', 'Dolorem.', '0000/0000/0000/0000', 'Ditolak', 'default.png', '1976-02-11 00:00:00', 'Officiis aperiam ut.', '2023-07-13 03:39:51', '2023-07-13 03:39:51', NULL),
(83, 4716454593739, 'Surat Kematian', 'Quis consequatur.', 'Minus tempore.', '0000/0000/0000/0000', 'Ditolak', 'default.png', '1995-01-19 00:00:00', 'Numquam quis.', '2023-07-13 03:39:51', '2023-07-13 03:39:51', NULL),
(84, 370865048194441, 'KK', 'Eligendi neque.', 'Sit eum sapiente.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '1977-01-04 00:00:00', 'Voluptas modi ut.', '2023-07-13 03:39:51', '2023-07-13 03:39:51', NULL),
(85, 348657749568547, 'Surat Kelahiran', 'Ut est.', 'Quibusdam magni aut.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '1977-10-05 00:00:00', 'Nulla et quidem.', '2023-07-13 03:39:51', '2023-07-13 03:39:51', NULL),
(86, 343475351188255, 'Surat Kematian', 'Est cumque facilis.', 'Dicta quos deleniti.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '2017-03-22 00:00:00', 'Molestiae ut nam.', '2023-07-13 03:39:51', '2023-07-13 03:39:51', NULL),
(87, 4024007168228, 'Surat Keterangan', 'Dolorem veritatis.', 'Et et ipsa error.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '1983-02-20 00:00:00', 'Quae praesentium.', '2023-07-13 03:39:51', '2023-08-09 21:31:29', '2023-08-09 21:31:29'),
(88, 5301037777747541, 'KTP', 'Atque neque enim.', 'Dolor culpa iusto.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '1980-05-09 00:00:00', 'Fugiat nisi nostrum.', '2023-07-13 03:39:51', '2023-07-13 03:39:51', NULL),
(89, 5232738574820498, 'Surat Kelahiran', 'Eaque sequi.', 'Illum ut quae.', '0000/0000/0000/0000', 'Dalam Proses', 'default.png', '2009-03-06 00:00:00', 'Voluptatem.', '2023-07-13 03:39:51', '2023-07-13 03:39:51', NULL),
(90, 4556371261014, 'Surat Keterangan', 'Aut pariatur.', 'Quo explicabo.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '1990-12-09 00:00:00', 'Aut deserunt minima.', '2023-07-13 03:39:51', '2023-07-13 03:39:51', NULL),
(91, 6011931144354909, 'Surat Pindah', 'Minus quisquam id.', 'Excepturi.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '2023-06-14 00:00:00', 'Qui magnam ex ut.', '2023-07-13 03:39:51', '2023-07-13 03:39:51', NULL),
(92, 5333757021114170, 'Surat Kematian', 'Optio minima magnam.', 'Et sit occaecati.', '0000/0000/0000/0000', 'Ditolak', 'default.png', '2012-10-05 00:00:00', 'Illo accusantium.', '2023-07-13 03:39:51', '2023-07-13 03:39:51', NULL),
(93, 4763636283797, 'Surat Keterangan', 'Aut sed qui.', 'Nesciunt laborum.', '0000/0000/0000/0000', 'Ditolak', 'default.png', '2018-02-09 00:00:00', 'Aut quia non.', '2023-07-13 03:39:52', '2023-07-13 03:39:52', NULL),
(94, 5117574838856170, 'Surat Keterangan', 'In molestiae vel.', 'Autem cupiditate.', '0000/0000/0000/0000', 'Dalam Proses', 'default.png', '1998-01-16 00:00:00', 'Omnis est assumenda.', '2023-07-13 03:39:52', '2023-07-13 03:39:52', NULL),
(95, 4485369111653429, 'Surat Keterangan', 'Esse aperiam et.', 'Delectus occaecati.', '0000/0000/0000/0000', 'Dalam Proses', 'default.png', '1986-10-05 00:00:00', 'Eligendi repellat a.', '2023-07-13 03:39:52', '2023-07-13 03:39:52', NULL),
(96, 5399809122101654, 'Surat Kelahiran', 'Aut esse cum saepe.', 'Nesciunt reiciendis.', '0000/0000/0000/0000', 'Ditolak', 'default.png', '1981-02-16 00:00:00', 'Consequatur eveniet.', '2023-07-13 03:39:52', '2023-07-13 03:39:52', NULL),
(97, 4716165457094751, 'KK', 'Tenetur optio quam.', 'Repellendus.', '0000/0000/0000/0000', 'Dalam Proses', 'default.png', '1973-01-09 00:00:00', 'Sit velit atque.', '2023-07-13 03:39:52', '2023-07-13 03:39:52', NULL),
(98, 4929028086482, 'Surat Kematian', 'Ex voluptatem est.', 'Accusamus.', '0000/0000/0000/0000', 'Dalam Proses', 'default.png', '1975-01-18 00:00:00', 'Qui id quos esse.', '2023-07-13 03:39:52', '2023-07-13 03:39:52', NULL),
(99, 5307909511625684, 'Surat Kematian', 'Sequi aliquam.', 'Sint exercitationem.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '1981-11-12 00:00:00', 'At nobis ea nihil.', '2023-07-13 03:39:52', '2023-07-13 03:39:52', NULL),
(100, 5282976529788142, 'Surat Keterangan', 'Eligendi rerum eos.', 'Totam et debitis.', '0000/0000/0000/0000', 'Ditolak', 'default.png', '2007-06-23 00:00:00', 'Illo at tempore ex.', '2023-07-13 03:39:52', '2023-07-13 03:39:52', NULL),
(101, 372316786874214, 'Surat Pindah', 'Delectus et quaerat.', 'Aut fugiat ex.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '2010-10-21 00:00:00', 'Libero quaerat.', '2023-07-13 03:39:52', '2023-07-13 03:39:52', NULL),
(102, 5404020245429872, 'Surat Kelahiran', 'Aliquid autem.', 'Provident nobis sit.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '1972-05-12 00:00:00', 'Recusandae vero.', '2023-07-19 21:00:17', '2023-07-19 21:00:17', NULL),
(103, 4716584060670569, 'KK', 'In ea pariatur.', 'Possimus tenetur.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '2013-07-31 00:00:00', 'Architecto harum.', '2023-07-19 21:00:17', '2023-07-19 21:00:17', NULL),
(104, 4024007168228, 'Surat Keterangan', 'Sed sit eveniet a.', 'Doloribus modi.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '1994-12-17 00:00:00', 'Dolor a dolor.', '2023-07-19 21:00:17', '2023-07-19 21:00:17', NULL),
(105, 4916917114418, 'KTP', 'Aut et eum dolorem.', 'Totam odio expedita.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '2012-08-01 00:00:00', 'Excepturi ipsa.', '2023-07-19 21:00:17', '2023-07-19 21:00:17', NULL),
(106, 5419079758561912, 'Surat Kelahiran', 'Non et sit.', 'Et eius dolorem.', '0000/0000/0000/0000', 'Ditolak', 'default.png', '2019-11-15 00:00:00', 'Impedit delectus.', '2023-07-19 21:00:17', '2023-07-19 21:00:17', NULL),
(107, 5244129854302314, 'Surat Kematian', 'Quia quae natus.', 'Aperiam temporibus.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '2002-03-11 00:00:00', 'Fugit voluptas.', '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(108, 6011945130164650, 'KK', 'Dolor enim.', 'Sapiente veniam.', '0000/0000/0000/0000', 'Dalam Proses', 'default.png', '2009-03-01 00:00:00', 'Et voluptas totam.', '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(109, 4532493442956, 'Surat Kematian', 'Dolor occaecati.', 'Est culpa libero id.', '0000/0000/0000/0000', 'Dalam Proses', 'default.png', '1980-05-18 00:00:00', 'Molestias fugiat.', '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(110, 5415028268597936, 'Surat Kelahiran', 'Ratione.', 'Sint ut a corporis.', '0000/0000/0000/0000', 'Ditolak', 'default.png', '1976-01-06 00:00:00', 'Consequatur veniam.', '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(111, 5276638314180780, 'Surat Pindah', 'Tempora quasi magni.', 'Nobis et voluptas.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '2002-12-14 00:00:00', 'Quis illo cumque.', '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(112, 4716226036973665, 'KK', 'Voluptatibus rem.', 'Non illum illum.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '2018-06-05 00:00:00', 'Voluptatem at.', '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(113, 377255077060528, 'Surat Keterangan', 'Omnis autem eveniet.', 'Consectetur iste in.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '1980-08-06 00:00:00', 'Modi a cum quis.', '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(114, 371632313695315, 'KTP', 'Ad fugiat molestiae.', 'Aut voluptatum.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '1982-03-01 00:00:00', 'Quos ut voluptas.', '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(115, 5392055901930973, 'KK', 'Libero dolor enim.', 'Aut quia explicabo.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '2004-09-30 00:00:00', 'Sed quisquam beatae.', '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(116, 6011888609033651, 'Surat Kematian', 'Earum velit illo.', 'Eveniet quis ullam.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '1988-03-24 00:00:00', 'Mollitia quis.', '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(117, 5428348628803559, 'Surat Kematian', 'Laboriosam expedita.', 'Nesciunt vel rerum.', '0000/0000/0000/0000', 'Dalam Proses', 'default.png', '1995-03-23 00:00:00', 'Soluta velit qui.', '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(118, 6011570871614646, 'Surat Kelahiran', 'Ut provident minima.', 'Numquam voluptas.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '1988-01-18 00:00:00', 'Quas quasi quisquam.', '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(119, 4556541197364782, 'KTP', 'Nisi voluptas.', 'Voluptate quam iste.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '1981-10-19 00:00:00', 'Ad quae et.', '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(120, 5163291082861771, 'Surat Keterangan', 'Accusantium officia.', 'Corporis suscipit.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '2019-06-16 00:00:00', 'Cum asperiores et.', '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(121, 5239349562977002, 'Surat Keterangan', 'Inventore magni.', 'Sapiente temporibus.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '2015-06-15 00:00:00', 'Qui consequatur.', '2023-07-19 21:00:19', '2023-07-19 21:00:19', NULL),
(122, 4024007177104, 'Surat Kelahiran', 'Et dolore omnis et.', 'Et quam et rem id.', '0000/0000/0000/0000', 'Ditolak', 'default.png', '1978-06-30 00:00:00', 'Eius minima quis.', '2023-07-19 21:00:50', '2023-07-19 21:00:50', NULL),
(123, 5228858183584073, 'KTP', 'Voluptatem.', 'Doloribus.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '2018-11-23 00:00:00', 'Ut eum corporis.', '2023-07-19 21:00:50', '2023-07-19 21:00:50', NULL),
(124, 370934251958189, 'Surat Kelahiran', 'Corporis.', 'Fugit omnis error.', '0000/0000/0000/0000', 'Dalam Proses', 'default.png', '2000-02-18 00:00:00', 'Ut error labore.', '2023-07-19 21:00:50', '2023-07-19 21:00:50', NULL),
(125, 5488933597626029, 'KTP', 'Quo natus.', 'Quod voluptatibus.', '0000/0000/0000/0000', 'Ditolak', 'default.png', '2004-07-15 00:00:00', 'Sunt qui.', '2023-07-19 21:00:50', '2023-07-19 21:00:50', NULL),
(126, 5149790131606797, 'KTP', 'Dolorum amet.', 'Ut quo rerum aut.', '0000/0000/0000/0000', 'Ditolak', 'default.png', '1977-08-29 00:00:00', 'Dolores minus quas.', '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(127, 4532953845398014, 'KK', 'Adipisci et.', 'Et cum corrupti eos.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '2007-11-10 00:00:00', 'Magni rerum.', '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(128, 4532776938601295, 'Surat Keterangan', 'Facere consequatur.', 'Ipsa hic excepturi.', '0000/0000/0000/0000', 'Dalam Proses', 'default.png', '2009-03-25 00:00:00', 'Tempore nihil.', '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(129, 4716198647344695, 'Surat Keterangan', 'Inventore quod illo.', 'Deleniti sint ab.', '0000/0000/0000/0000', 'Ditolak', 'default.png', '1982-04-01 00:00:00', 'Quo accusamus aut.', '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(130, 4539281000331916, 'Surat Kelahiran', 'Qui ad id error.', 'Sint dolore commodi.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '2013-05-11 00:00:00', 'Dolorem labore.', '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(131, 4532628626098427, 'Surat Kelahiran', 'Alias molestiae.', 'Minus qui.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '2002-11-09 00:00:00', 'Et commodi ut.', '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(132, 5274546049146160, 'Surat Keterangan', 'Hic suscipit.', 'Dicta dolor nihil.', '0000/0000/0000/0000', 'Ditolak', 'default.png', '2001-07-01 00:00:00', 'Dolorem ea sed.', '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(133, 5296896167411530, 'Surat Keterangan', 'Cumque dolorem.', 'Deleniti.', '0000/0000/0000/0000', 'Ditolak', 'default.png', '2023-05-29 00:00:00', 'In odio dolores.', '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(134, 5385294576988011, 'Surat Kelahiran', 'Ea id voluptatibus.', 'Ipsam voluptatem ut.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '1976-06-19 00:00:00', 'Qui sit ea quia.', '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(135, 4539358002702532, 'Surat Kelahiran', 'Consequatur nobis.', 'Facilis voluptatem.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '2019-04-12 00:00:00', 'Beatae tenetur qui.', '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(136, 6011534609274990, 'Surat Pindah', 'Velit accusamus.', 'Quaerat consequatur.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '2018-11-14 00:00:00', 'Doloremque at ut.', '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(137, 5419959722521557, 'KTP', 'Rerum enim sed quo.', 'Dolores odio.', '0000/0000/0000/0000', 'Ditolak', 'default.png', '1986-09-03 00:00:00', 'Accusamus quod aut.', '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(138, 6011178002339529, 'Surat Kematian', 'Sit sit quis veniam.', 'Beatae non quisquam.', '0000/0000/0000/0000', 'Dalam Proses', 'default.png', '1987-11-30 00:00:00', 'Sunt doloremque.', '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(139, 370865048194441, 'Surat Pindah', 'Non sit autem quia.', 'Ea sapiente fugit.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '1994-06-30 00:00:00', 'Modi voluptatum.', '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(140, 5494274883024005, 'Surat Keterangan', 'Ex illo laudantium.', 'Molestias accusamus.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '2008-06-21 00:00:00', 'Consequatur.', '2023-07-19 21:00:52', '2023-07-19 21:00:52', NULL),
(141, 5281226408281202, 'Surat Keterangan', 'Magnam quaerat.', 'Consectetur quis.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '2009-05-30 00:00:00', 'Pariatur provident.', '2023-07-19 21:00:52', '2023-07-19 21:00:52', NULL),
(142, 4539773460395068, 'KK', 'Praesentium ut.', 'Sit officiis ab.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '2008-08-27 00:00:00', 'Officiis sequi.', '2023-07-19 21:00:53', '2023-07-19 21:00:53', NULL),
(143, 5539141455796574, 'KK', 'Ea voluptas.', 'Esse temporibus.', '0000/0000/0000/0000', 'Dalam Proses', 'default.png', '1983-12-23 00:00:00', 'Consequatur libero.', '2023-07-19 21:00:53', '2023-07-19 21:00:53', NULL),
(144, 4532617648913689, 'Surat Kematian', 'Similique aperiam.', 'Accusamus ullam.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '2001-09-28 00:00:00', 'Cum velit ea omnis.', '2023-07-19 21:00:53', '2023-07-19 21:00:53', NULL),
(145, 6011109492140614, 'Surat Kematian', 'Corrupti.', 'Velit amet.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '2000-11-06 00:00:00', 'Odit maiores.', '2023-07-19 21:00:53', '2023-07-19 21:00:53', NULL),
(146, 5371214204422924, 'Surat Pindah', 'Unde officia a.', 'Impedit ipsum quae.', '0000/0000/0000/0000', 'Ditolak', 'default.png', '1997-10-29 00:00:00', 'Quo aut mollitia.', '2023-07-19 21:00:53', '2023-07-19 21:00:53', NULL),
(147, 4302450574955, 'Surat Pindah', 'Velit sint sunt.', 'Est nihil et sint.', '0000/0000/0000/0000', 'Ditolak', 'default.png', '2018-08-24 00:00:00', 'Neque expedita nam.', '2023-07-19 21:00:53', '2023-07-19 21:00:53', NULL),
(148, 5398259118614396, 'KTP', 'Beatae doloremque.', 'Dolor error atque.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '1972-06-11 00:00:00', 'Quibusdam pariatur.', '2023-07-19 21:00:53', '2023-07-19 21:00:53', NULL),
(149, 4485425690195891, 'KK', 'Non enim quos.', 'Blanditiis incidunt.', '0000/0000/0000/0000', 'Ditolak', 'default.png', '1992-08-06 00:00:00', 'Pariatur aliquam id.', '2023-07-19 21:00:53', '2023-07-19 21:00:53', NULL),
(150, 4532216326304, 'Surat Kelahiran', 'Maiores minima ut.', 'Ut quia ipsum quasi.', '0000/0000/0000/0000', 'Ditolak', 'default.png', '2003-06-05 00:00:00', 'Reiciendis.', '2023-07-19 21:00:53', '2023-07-19 21:00:53', NULL),
(151, 5140434750655335, 'Surat Kelahiran', 'Ut dolorem fuga qui.', 'Corporis voluptate.', '0000/0000/0000/0000', 'Dalam Proses', 'default.png', '2018-09-30 00:00:00', 'Quis beatae dolore.', '2023-07-19 21:00:54', '2023-07-19 21:00:54', NULL),
(152, 4485809172694, 'Surat Kematian', 'test', 'Nesciunt asperiores.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', '1691567325_2a41651c37c6d271dd9a.pdf', '1988-03-10 00:00:00', 'Quod quo blanditiis.', '2023-07-19 21:00:54', '2023-08-09 21:35:57', '2023-08-09 21:35:57'),
(153, 5402289136546340, 'Surat Keterangan', 'Voluptas omnis est.', 'Et iste ex omnis.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '1996-10-30 00:00:00', 'Asperiores mollitia.', '2023-07-19 21:00:54', '2023-07-19 21:00:54', NULL),
(154, 4485756027046005, 'KTP', 'Impedit voluptatum.', 'Quas deleniti ut.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '1976-12-22 00:00:00', 'Odit ullam eum.', '2023-07-19 21:00:54', '2023-07-19 21:00:54', NULL),
(155, 4929422918934, 'Surat Kematian', 'Vel quidem aut.', 'Exercitationem sit.', '0000/0000/0000/0000', 'Ditolak', 'default.png', '1985-02-01 00:00:00', 'Et fuga fugiat.', '2023-07-19 21:00:54', '2023-07-19 21:00:54', NULL),
(156, 5298073299076502, 'Surat Kematian', 'Voluptas ratione.', 'Ut sit ut velit.', '0000/0000/0000/0000', 'Ditolak', 'default.png', '1989-06-19 00:00:00', 'Officia molestias.', '2023-07-19 21:00:54', '2023-07-19 21:00:54', NULL),
(157, 5309088045370147, 'Surat Pindah', 'Exercitationem.', 'Quisquam soluta est.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '1980-09-20 00:00:00', 'Quos magnam aliquam.', '2023-07-19 21:00:54', '2023-07-19 21:00:54', NULL),
(158, 5395470562733938, 'Surat Kematian', 'Nobis et quo quae.', 'Ratione excepturi.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '2003-02-21 00:00:00', 'Quo quia suscipit.', '2023-07-19 21:00:54', '2023-07-19 21:00:54', NULL),
(159, 6011602995386924, 'Surat Kematian', 'Voluptas est.', 'Animi.', '0000/0000/0000/0000', 'Ditolak', 'default.png', '1997-12-19 00:00:00', 'Quidem nisi dolorem.', '2023-07-19 21:00:54', '2023-07-19 21:00:54', NULL),
(160, 349887613753664, 'Surat Kematian', 'Corporis nesciunt.', 'Expedita ut beatae.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '1998-02-24 00:00:00', 'Aliquam temporibus.', '2023-07-19 21:00:54', '2023-07-19 21:00:54', NULL),
(161, 4485439309609, 'Surat Kelahiran', 'Nesciunt autem.', 'Ullam quasi sed.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '2015-12-01 00:00:00', 'Sed omnis ipsum.', '2023-07-19 21:00:54', '2023-07-19 21:00:54', NULL),
(162, 5479238552421999, 'Surat Keterangan', 'Veniam consectetur.', 'Quia eos quibusdam.', '0000/0000/0000/0000', 'Dalam Proses', 'default.png', '2023-04-07 00:00:00', 'Consequuntur.', '2023-07-19 21:00:55', '2023-07-19 21:00:55', NULL),
(163, 5188556655492746, 'Surat Kematian', 'Repudiandae et.', 'Aperiam consequatur.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '2002-01-14 00:00:00', 'Tempora est.', '2023-07-19 21:00:55', '2023-07-19 21:00:55', NULL),
(164, 347538557310829, 'Surat Pindah', 'Sint tempora id.', 'A voluptas officiis.', '0000/0000/0000/0000', 'Ditolak', 'default.png', '2009-08-02 00:00:00', 'Numquam ut veniam.', '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(165, 348764598251512, 'KK', 'Dolores debitis.', 'Iure voluptates.', '0000/0000/0000/0000', 'Ditolak', 'default.png', '1997-09-23 00:00:00', 'Totam commodi.', '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(166, 5560098321531845, 'KK', 'Libero corporis.', 'Modi laudantium.', '0000/0000/0000/0000', 'Dalam Proses', 'default.png', '2020-01-14 00:00:00', 'Ut similique.', '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(167, 5336414080031351, 'Surat Kelahiran', 'Labore temporibus.', 'Ipsum ducimus.', '0000/0000/0000/0000', 'Ditolak', 'default.png', '1972-04-16 00:00:00', 'Culpa dolore.', '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(168, 345614270604616, 'Surat Kelahiran', 'Deleniti natus.', 'Nobis deserunt.', '0000/0000/0000/0000', 'Ditolak', 'default.png', '2009-07-27 00:00:00', 'Eligendi magni.', '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(169, 5119358280258889, 'Surat Pindah', 'In eaque impedit.', 'Iusto ducimus et.', '0000/0000/0000/0000', 'Dalam Proses', 'default.png', '2010-04-23 00:00:00', 'Officiis eligendi.', '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(170, 4929780230464726, 'Surat Kelahiran', 'Ut vitae.', 'Pariatur quam sunt.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '2007-08-06 00:00:00', 'Et eos voluptatum.', '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(171, 4556706561887813, 'Surat Kematian', 'Consectetur totam.', 'Odio velit nostrum.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '2022-09-14 00:00:00', 'Sed ab similique.', '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(172, 344212209136981, 'Surat Kelahiran', 'Voluptas.', 'Qui rem perferendis.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '1974-10-15 00:00:00', 'Provident eveniet.', '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(173, 4907790984217, 'KTP', 'Fugit dolor nulla.', 'Voluptatem.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '1985-07-07 00:00:00', 'Aperiam nihil.', '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(174, 5490177444467528, 'Surat Kematian', 'Adipisci in at.', 'Et voluptatem.', '0000/0000/0000/0000', 'Dalam Proses', 'default.png', '2000-01-03 00:00:00', 'Consequuntur.', '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(175, 5259374304298421, 'Surat Kematian', 'Eum asperiores quis.', 'Et repellat.', '0000/0000/0000/0000', 'Ditolak', 'default.png', '1976-08-19 00:00:00', 'Ullam inventore quo.', '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(176, 5122367213686244, 'Surat Kematian', 'Ut in quia.', 'Aut voluptates iste.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '1983-05-16 00:00:00', 'Sit dolore et et.', '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(177, 4989054276464, 'Surat Kelahiran', 'Voluptates fugit.', 'Ut ipsum aperiam.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '1982-01-03 00:00:00', 'Fugit ut sequi non.', '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(178, 349970664270232, 'Surat Keterangan', 'Et totam sed sint.', 'Deleniti nihil.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '1995-10-04 00:00:00', 'Dolores et et aut.', '2023-07-19 21:00:57', '2023-07-19 21:00:57', NULL),
(179, 374935801440319, 'Surat Keterangan', 'In ea quaerat.', 'Quo laboriosam.', '0000/0000/0000/0000', 'Dalam Proses', 'default.png', '1971-01-25 00:00:00', 'Nulla fugiat.', '2023-07-19 21:00:57', '2023-07-19 21:00:57', NULL),
(180, 4024007109297, 'Surat Pindah', 'Culpa officiis.', 'Sed repellendus.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', '1691567050_451386e677b97a8fc766.pdf', '1999-06-11 00:00:00', 'Eum earum dolor.', '2023-07-19 21:00:57', '2023-08-09 21:32:22', '2023-08-09 21:32:22'),
(181, 5561386423195448, 'Surat Pindah', 'Omnis atque.', 'Ipsa consequatur.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '2008-01-17 00:00:00', 'Ut tempora eos.', '2023-07-19 21:00:57', '2023-07-19 21:00:57', NULL),
(182, 5289900585965991, 'Surat Kematian', 'Quis nostrum vitae.', 'Debitis eos tempora.', '0000/0000/0000/0000', 'Ditolak', 'default.png', '1999-08-31 00:00:00', 'Odio voluptatem.', '2023-07-19 21:00:58', '2023-07-19 21:00:58', NULL),
(183, 4539021447050, 'KK', 'Alias quos qui.', 'Vel dolorem natus.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '2011-05-01 00:00:00', 'Dolores recusandae.', '2023-07-19 21:00:58', '2023-07-19 21:00:58', NULL),
(184, 5319695330298458, 'KTP', 'Aut quis qui fuga.', 'Aut rerum quia nisi.', '0000/0000/0000/0000', 'Dalam Proses', 'default.png', '1977-07-19 00:00:00', 'Consequatur rem.', '2023-07-19 21:00:58', '2023-07-19 21:00:58', NULL),
(185, 5263795061282865, 'Surat Keterangan', 'Omnis est repellat.', 'Libero inventore.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '1987-02-10 00:00:00', 'Et a assumenda.', '2023-07-19 21:00:58', '2023-07-19 21:00:58', NULL),
(186, 5563599415602761, 'KK', 'Veniam aliquid.', 'Sed corrupti.', '0000/0000/0000/0000', 'Ditolak', 'default.png', '1986-11-06 00:00:00', 'Fugit voluptatibus.', '2023-07-19 21:00:58', '2023-07-19 21:00:58', NULL),
(187, 4556941832450, 'Surat Keterangan', 'Architecto est.', 'Autem explicabo aut.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '1981-08-13 00:00:00', 'At qui et deleniti.', '2023-07-19 21:00:58', '2023-07-19 21:00:58', NULL),
(188, 4716266233870, 'Surat Keterangan', 'Eligendi enim.', 'Porro nesciunt amet.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '1999-05-06 00:00:00', 'Nemo enim illo.', '2023-07-19 21:00:58', '2023-07-19 21:00:58', NULL),
(189, 4539470567237174, 'Surat Keterangan', 'A fugiat vero quia.', 'Quo aspernatur aut.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '1980-05-02 00:00:00', 'Sed modi.', '2023-07-19 21:00:58', '2023-07-19 21:00:58', NULL),
(190, 4539123274329, 'Surat Keterangan', 'Laboriosam.', 'Sit voluptatem quos.', '0000/0000/0000/0000', 'Dalam Proses', 'default.png', '2018-04-06 00:00:00', 'Ut quis dolorem.', '2023-07-19 21:00:59', '2023-07-19 21:00:59', NULL),
(191, 5166431996824203, 'KK', 'Assumenda tenetur.', 'Sed repudiandae in.', '0000/0000/0000/0000', 'Ditolak', 'default.png', '2015-04-25 00:00:00', 'Et quibusdam.', '2023-07-19 21:00:59', '2023-07-19 21:00:59', NULL),
(192, 5344483478148531, 'Surat Kelahiran', 'Ipsa numquam libero.', 'Tempore hic.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '1978-06-02 00:00:00', 'Nemo voluptatem.', '2023-07-19 21:00:59', '2023-07-19 21:00:59', NULL),
(193, 5440570372343250, 'Surat Keterangan', 'Cum tempore est.', 'Aliquid esse aut.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '1986-03-07 00:00:00', 'Maiores rerum.', '2023-07-19 21:00:59', '2023-07-19 21:00:59', NULL),
(194, 5198629439424612, 'KTP', 'Aut ut voluptatem.', 'Ipsam nesciunt.', '0000/0000/0000/0000', 'Ditolak', 'default.png', '1992-05-08 00:00:00', 'Doloremque impedit.', '2023-07-19 21:00:59', '2023-07-19 21:00:59', NULL),
(195, 5167693966639171, 'Surat Pindah', 'Culpa dolorem quia.', 'Dicta recusandae.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '2015-04-17 00:00:00', 'Neque consequatur.', '2023-07-19 21:00:59', '2023-07-19 21:00:59', NULL),
(196, 5498966344632310, 'KTP', 'Atque velit quis at.', 'Cum rerum.', '0000/0000/0000/0000', 'Dalam Proses', 'default.png', '1978-05-01 00:00:00', 'Ut exercitationem.', '2023-07-19 21:00:59', '2023-07-19 21:00:59', NULL),
(197, 4929393893175256, 'Surat Kematian', 'Dolores occaecati.', 'Consequatur.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '1989-07-16 00:00:00', 'Minus fuga numquam.', '2023-07-19 21:00:59', '2023-07-19 21:00:59', NULL),
(198, 4716811988996184, 'KK', 'Rem ex similique.', 'Possimus aliquid.', '0000/0000/0000/0000', 'Menunggu Konfirmasi', 'default.png', '2012-11-06 00:00:00', 'Aperiam possimus.', '2023-07-19 21:00:59', '2023-07-19 21:00:59', NULL),
(199, 347058185440633, 'Surat Kematian', 'Animi ut vero velit.', 'Voluptatum iure qui.', '0000/0000/0000/0000', 'Dalam Proses', 'default.png', '1998-03-29 00:00:00', 'Non facilis ab sit.', '2023-07-19 21:00:59', '2023-07-19 21:00:59', NULL),
(200, 5459254538411982, 'Surat Kelahiran', 'Id harum soluta est.', 'Rerum dolor dolorem.', '0000/0000/0000/0000', 'Ditolak', 'default.png', '1973-07-27 00:00:00', 'Facere et sit.', '2023-07-19 21:00:59', '2023-07-19 21:00:59', NULL),
(201, 5183277333653998, 'KK', 'Similique cumque.', 'Perferendis vero.', '0000/0000/0000/0000', 'Dalam Proses', 'default.png', '1978-09-13 00:00:00', 'Nesciunt mollitia.', '2023-07-19 21:00:59', '2023-07-19 21:00:59', NULL),
(202, 4485809172694, 'Lainnya', 'test', 'test', NULL, 'Menunggu Konfirmasi', '1691579019_4e024477487d14cd28fe.pdf', NULL, NULL, '2023-08-09 18:03:39', '2023-08-09 21:31:21', '2023-08-09 21:31:21');

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
  `uploaded_by` bigint(17) NOT NULL,
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
  `created_by` bigint(17) NOT NULL,
  `kategori` int(11) DEFAULT NULL,
  `total_foto` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`galeri_id`, `judul`, `deskripsi`, `thumbnail`, `created_by`, `kategori`, `total_foto`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Test', 'test', '1691435504_61b04f5535f48c7adea9.png', 343475351188255, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(2, 'Test', 'test', '1691435533_b942a10441f15ec306a8.png', 343475351188255, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(3, 'Test2', 'ffefef', '1691437804_7cb25618720bdc100cc4.png', 343475351188255, 1, 0, '2023-08-08 02:50:04', '2023-08-08 02:50:04', NULL),
(4, 'Test2', 'ererer', '1691522500_25d2feeff96f864ba612.png', 4485809172694, 1, 0, '2023-08-09 02:21:40', '2023-08-09 02:21:40', NULL),
(5, 'ertert', 'erter', '1691604111_76e29fdd0c78d24bdc69.png', 4716455593739233, 2, 0, '2023-08-10 01:01:51', '2023-08-10 01:01:51', NULL),
(6, 'ertert', 'erter', '1691604228_5984393e9903c2688d67.png', 4716455593739233, 2, 0, '2023-08-10 01:03:48', '2023-08-10 01:03:48', NULL),
(7, 'ertert', 'erter', '1691604239_3b62a2d29b5a5a0bb70e.png', 4716455593739233, 2, 0, '2023-08-10 01:03:59', '2023-08-10 01:03:59', NULL);

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

--
-- Dumping data for table `kategori_galeri`
--

INSERT INTO `kategori_galeri` (`kategori_galeri_id`, `nama_kategori`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Rekreasi', '2023-08-07 20:54:05', '2023-08-07 20:54:05', NULL),
(2, 'Dokumentasi', '2023-08-07 20:54:05', '2023-08-07 20:54:05', NULL),
(3, 'Acara', '2023-08-07 20:54:35', '2023-08-07 20:54:35', NULL),
(4, 'Kerja Bakti', '2023-08-07 20:54:35', '2023-08-07 20:54:35', NULL);

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
(4024007170141, 'Queen Wijayanti', 'Dk. Basudewo No. 359, Padang 84835, SumBar', 'Ki. Suprapto No. 968, Blitar 80582, SulSel', 'default.png', '2011-05-03', 'Pindah', 1, '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(4105210352756, 'Ismail Balamantri Wahyudin S.H.', 'Psr. Labu No. 981, Salatiga 66872, Maluku', 'Dk. K.H. Maskur No. 745, Bekasi 43278, SulUt', 'default.png', '1996-04-25', 'Pindah', 0, '2023-07-19 21:00:59', '2023-07-19 21:00:59', NULL),
(4409566400643, 'Hasan Adriansyah', 'Ki. Basoka No. 18, Pekanbaru 80651, NTB', 'Ds. Bak Air No. 787, Ambon 84360, SumBar', 'default.png', '2014-01-30', 'Tetap', 0, '2023-07-19 21:00:53', '2023-07-19 21:00:53', NULL),
(4485045663944, 'Nasim Adriansyah', 'Kpg. Sugiyopranoto No. 184, Banjar 45545, NTB', 'Jln. Daan No. 936, Semarang 75551, Bali', 'default.png', '1987-08-14', 'Pindah', 1, '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(4485400026802, 'Opan Hidayanto', 'Ds. Kartini No. 288, Kediri 99356, SulUt', 'Dk. Adisumarmo No. 79, Makassar 71792, MalUt', 'default.png', '2000-07-09', 'Tetap', 1, '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(4485688677995, 'Betania Mandasari', 'Kpg. Bak Air No. 983, Balikpapan 64528, KalBar', 'Ds. Antapani Lama No. 398, Banjarmasin 87496, MalUt', 'default.png', '2015-04-04', 'Pindah', 0, '2023-07-19 21:00:17', '2023-07-19 21:00:17', NULL),
(4485922867436, 'Bakiono Januar', 'Kpg. Cikutra Barat No. 894, Surabaya 66723, DKI', 'Gg. Laswi No. 602, Padangsidempuan 80870, SulTeng', 'default.png', '1980-04-04', 'Tetap', 0, '2023-07-13 03:39:51', '2023-07-13 03:39:51', NULL),
(4532028874095, 'Aswani Permadi', 'Psr. Orang No. 776, Kotamobagu 21767, DKI', 'Gg. Sutarjo No. 866, Cilegon 45719, SumBar', 'default.png', '2014-07-28', 'Tetap', 1, '2023-07-19 21:00:59', '2023-07-19 21:00:59', NULL),
(4532043292588, 'Wage Adriansyah S.I.Kom', 'Jln. Wahidin Sudirohusodo No. 322, Bengkulu 12660, Lampung', 'Kpg. Bakin No. 254, Manado 98041, Jambi', 'default.png', '1995-05-31', 'Tetap', 1, '2023-07-13 03:39:51', '2023-07-13 03:39:51', NULL),
(4532453265330, 'Melinda Mutia Purnawati', 'Gg. Gardujati No. 508, Mataram 24882, NTT', 'Jr. Hasanuddin No. 536, Tangerang Selatan 78070, SulUt', 'default.png', '2003-10-23', 'Pindah', 1, '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(4532564599718, 'Unjani Safitri', 'Ds. Acordion No. 406, Jambi 29585, Lampung', 'Ds. Surapati No. 964, Sorong 94623, KalBar', 'default.png', '1989-03-06', 'Tetap', 1, '2023-07-19 21:00:55', '2023-07-19 21:00:55', NULL),
(4539020686492, 'Ayu Purnawati', 'Jr. Juanda No. 514, Bandung 77708, NTB', 'Gg. Wahidin No. 890, Padangpanjang 64225, Papua', 'default.png', '1975-06-23', 'Tetap', 0, '2023-07-13 03:39:52', '2023-07-13 03:39:52', NULL),
(4539109673866, 'Gamblang Vino Sitompul', 'Ki. Pelajar Pejuang 45 No. 531,Papua 58153, Papua', 'Ki. Cikutra Timur No. 180, Medan 84046, KalTeng', 'default.png', '2023-04-24', 'Pindah', 1, '2023-07-19 21:00:17', '2023-07-19 21:00:17', NULL),
(4539493123361, 'Capa Waskita', 'Gg. HOS. Cjokroaminoto (Pasirkaliki) No. 304, Jayapura 30928, Jambi', 'Dk. Ir. H. Juanda No. 674, Tegal 48573, Gorontalo', 'default.png', '2003-06-21', 'Pindah', 1, '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(4539519871894, 'Gabriella Yulia Nuraini S.H.', 'Kpg. Sampangan No. 142, Administrasi Jakarta Timur 16743, DIY', 'Ki. Veteran No. 855, Banda Aceh 35389, SumBar', 'default.png', '1971-08-15', 'Pindah', 0, '2023-07-19 21:00:53', '2023-07-19 21:00:53', NULL),
(4556063256942, 'Zaenab Riyanti S.IP', 'Ds. Yap Tjwan Bing No. 773, Gunungsitoli 94540, MalUt', 'Ki. Jakarta No. 519, Tidore Kepulauan 16818, Banten', 'default.png', '1994-04-21', 'Pindah', 1, '2023-07-19 21:00:50', '2023-07-19 21:00:50', NULL),
(4556643413500, 'Talia Indah Puspasari S.Pd', 'Ds. Bappenas No. 814, Bitung 88408, SulBar', 'Dk. B.Agam Dlm No. 637, Banda Aceh 88732, NTT', 'default.png', '2004-08-08', 'Tetap', 0, '2023-07-13 03:39:52', '2023-07-13 03:39:52', NULL),
(4716445255141, 'Emin Nashiruddin S.T.', 'Dk. Bambon No. 247, Makassar 98188, KalUt', 'Dk. Ki Hajar Dewantara No. 203, Tangerang Selatan 67966, NTT', 'default.png', '1996-04-24', 'Pindah', 0, '2023-07-19 21:00:58', '2023-07-19 21:00:58', NULL),
(4716591121725, 'Rini Widiastuti', 'Ki. Gardujati No. 28, Payakumbuh 83821, SulTra', 'Ki. Laksamana No. 895, Surakarta 41705, KalTim', 'default.png', '2002-10-22', 'Tetap', 1, '2023-07-19 21:00:59', '2023-07-19 21:00:59', NULL),
(4716610528181, 'Warsa Tomi Natsir', 'Ds. Dr. Junjunan No. 753, Sawahlunto 35740, Maluku', 'Kpg. Cemara No. 359, Bogor 58853, PapBar', 'default.png', '1993-05-27', 'Pindah', 1, '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(4716679133899, 'Kayla Hassanah', 'Kpg. Fajar No. 710, Administrasi Jakarta Selatan 46866, Papua', 'Kpg. Raden Saleh No. 32, Kediri 46314, KepR', 'default.png', '2017-09-10', 'Tetap', 0, '2023-07-19 21:00:54', '2023-07-19 21:00:54', NULL),
(4716882159822, 'Mahdi Gada Waluyo S.Ked', 'Dk. Aceh No. 15, Palangka Raya 73172, Riau', 'Jln. Monginsidi No. 709, Lubuklinggau 25178, SulTra', 'default.png', '1988-04-19', 'Pindah', 1, '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(4916074670608, 'Lasmanto Saefullah', 'Dk. Kebangkitan Nasional No. 224, Pasuruan 75335, JaBar', 'Gg. Sadang Serang No. 550, Sibolga 74841, NTT', 'default.png', '1986-11-01', 'Tetap', 0, '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(4916289250931, 'Chelsea Utami S.Farm', 'Ki. Otista No. 355, Tebing Tinggi 11233, SulBar', 'Kpg. Umalas No. 233, Pematangsiantar 15507, KalUt', 'default.png', '1972-03-09', 'Pindah', 0, '2023-07-19 21:00:54', '2023-07-19 21:00:54', NULL),
(4916532433821, 'Kiandra Nuraini', 'Psr. Basuki No. 245, Sawahlunto 82962, NTT', 'Ds. Moch. Yamin No. 874, Surabaya 48861, SulTeng', 'default.png', '1975-05-14', 'Pindah', 1, '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(4929011067424, 'Mila Violet Padmasari S.Ked', 'Jln. Kalimalang No. 610, Langsa 63027, Gorontalo', 'Dk. Kali No. 516, Pagar Alam 22886, JaTeng', 'default.png', '1994-08-15', 'Tetap', 1, '2023-07-19 21:00:58', '2023-07-19 21:00:58', NULL),
(4929585323120, 'Candra Adriansyah M.Kom.', 'Ds. Flora No. 240, Pontianak 94050, KalTeng', 'Kpg. Abang No. 519, Metro 38656, JaTim', 'default.png', '1993-10-21', 'Pindah', 0, '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(341874321581023, 'Prakosa Waskita M.M.', 'Jr. R.M. Said No. 737, Padangsidempuan 40895, Banten', 'Ki. Laswi No. 52, Lubuklinggau 70215, KepR', 'default.png', '2008-01-14', 'Tetap', 1, '2023-07-13 03:39:51', '2023-07-13 03:39:51', NULL),
(343237716884964, 'Opung Asmuni Rajasa M.Kom.', 'Jln. Moch. Ramdan No. 13, Lubuklinggau 39985, SumUt', 'Dk. Banal No. 557, Administrasi Jakarta Barat 55728, Lampung', 'default.png', '1983-03-23', 'Pindah', 0, '2023-07-19 21:00:59', '2023-07-19 21:00:59', NULL),
(344917642407464, 'Gina Yessi Yolanda', 'Ki. Ters. Buah Batu No. 972, Dumai 34503, NTB', 'Dk. Gading No. 782, Jambi 49330, SulUt', 'default.png', '2020-03-28', 'Pindah', 1, '2023-07-19 21:00:54', '2023-07-19 21:00:54', NULL),
(345228053000478, 'Cornelia Najwa Utami', 'Kpg. Bah Jaya No. 654, Sibolga 35339, KepR', 'Kpg. Rajawali Timur No. 705, Sungai Penuh 94778, KalBar', 'default.png', '1984-04-15', 'Tetap', 0, '2023-07-19 21:00:52', '2023-07-19 21:00:52', NULL),
(346212495141057, 'Zulfa Rahmawati', 'Ds. Ujung No. 308, Samarinda 23378, Banten', 'Kpg. Baik No. 122, Semarang 33378, SulSel', 'default.png', '2009-08-04', 'Tetap', 0, '2023-07-19 21:00:53', '2023-07-19 21:00:53', NULL),
(371449088798749, 'Wirda Handayani', 'Ki. Dahlia No. 572, Bau-Bau 39485, Banten', 'Psr. Wahidin Sudirohusodo No. 246, Cimahi 93813, DKI', 'default.png', '1998-12-13', 'Pindah', 0, '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(373953222492240, 'Jail Zulkarnain', 'Ds. Ir. H. Juanda No. 206, Lhokseumawe 38922, KalUt', 'Gg. Suniaraja No. 656, Pangkal Pinang 35009, SumBar', 'default.png', '2002-08-16', 'Tetap', 0, '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(374396648396638, 'Kania Jelita Suartini', 'Jr. Raya Ujungberung No. 817, Padang 48372, Riau', 'Ds. Asia Afrika No. 205, Administrasi Jakarta Pusat 59516, Bali', 'default.png', '1977-10-19', 'Tetap', 1, '2023-07-19 21:00:59', '2023-07-19 21:00:59', NULL),
(378630503260877, 'Digdaya Bancar Putra S.E.', 'Ds. Abdul Muis No. 964, Administrasi Jakarta Timur 45602, Banten', 'Psr. Reksoninten No. 551, Sungai Penuh 69757, KalUt', 'default.png', '2004-08-13', 'Pindah', 0, '2023-07-19 21:00:58', '2023-07-19 21:00:58', NULL),
(379035151679296, 'Zulaikha Putri Laksita', 'Jln. Ir. H. Juanda No. 895, Bima 64378, SulSel', 'Dk. Pelajar Pejuang 45 No. 289, Singkawang 81354, SulSel', 'default.png', '1988-07-22', 'Tetap', 0, '2023-07-19 21:00:57', '2023-07-19 21:00:57', NULL),
(1212121212121212, 'Admin', '-', '-', 'default.png', NULL, 'Tetap', 1, '2023-08-07 21:09:20', '2023-08-07 21:09:20', NULL),
(1234567890987654, 'Admin', '-', NULL, '-', NULL, 'Tetap', 1, '2023-08-07 15:52:43', '2023-08-07 15:52:43', NULL),
(4084766711975935, 'Hasna Yulianti', 'Jln. Bagas Pati No. 465, Kotamobagu 49442, KalBar', 'Jr. Abdullah No. 336, Cilegon 90568, Bali', 'default.png', '2022-06-25', 'Tetap', 1, '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(4485169946270070, 'Puti Nurdiyanti', 'Kpg. Rajawali Barat No. 935, Tidore Kepulauan 51083, KalSel', 'Dk. Suharso No. 567, Pekalongan 92322, Bengkulu', 'default.png', '1987-09-04', 'Tetap', 0, '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(4485670841667112, 'Jarwa Hutagalung', 'Ds. Bakti No. 302, Tomohon 51768, DIY', 'Psr. Katamso No. 470, Binjai 76134, NTT', 'default.png', '2006-06-29', 'Pindah', 0, '2023-07-19 21:00:53', '2023-07-19 21:00:53', NULL),
(4485841887956160, 'Sakura Siska Hassanah', 'Jln. Abdul Rahmat No. 289, Pontianak 53649, PapBar', 'Dk. Bak Mandi No. 340, Administrasi Jakarta Utara 24234, SumBar', 'default.png', '1981-02-08', 'Tetap', 0, '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(4485896894345716, 'Belinda Anastasia Wahyuni', 'Jr. Sugiono No. 520, Subulussalam 46584, Maluku', 'Jln. Rajawali Barat No. 189, Sungai Penuh 16867, SumUt', 'default.png', '1978-05-07', 'Pindah', 0, '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(4532959287203315, 'Nadine Cindy Usada', 'Ki. Jend. A. Yani No. 378, Surabaya 50791, KalBar', 'Ki. Supomo No. 529, Cilegon 32680, KalSel', 'default.png', '1972-08-27', 'Tetap', 0, '2023-07-13 03:39:52', '2023-07-13 03:39:52', NULL),
(4539188534290361, 'Laras Padmasari', 'Jr. Kalimantan No. 799, Malang 30720, SulUt', 'Jln. Orang No. 557, Bukittinggi 29521, NTT', 'default.png', '1974-03-31', 'Tetap', 1, '2023-07-19 21:00:53', '2023-07-19 21:00:53', NULL),
(4539806637400427, 'Kartika Tina Mayasari S.Gz', 'Jr. Nanas No. 416, Parepare 41257, BaBel', 'Jln. Siliwangi No. 243, Surakarta 75227, KepR', 'default.png', '1986-09-22', 'Pindah', 1, '2023-07-19 21:00:59', '2023-07-19 21:00:59', NULL),
(4539908019454350, 'Najwa Sari Widiastuti', 'Jr. Badak No. 725, Tangerang 56608, DIY', 'Ds. Yosodipuro No. 169, Administrasi Jakarta Timur 96605, Maluku', 'default.png', '1970-02-13', 'Pindah', 1, '2023-07-19 21:00:58', '2023-07-19 21:00:58', NULL),
(4556201638303275, 'Gatra Nababan', 'Gg. Baung No. 894, Bekasi 59719, JaTeng', 'Ki. Rumah Sakit No. 828, Pekanbaru 58843, Gorontalo', 'default.png', '1989-01-12', 'Tetap', 1, '2023-07-19 21:00:53', '2023-07-19 21:00:53', NULL),
(4556455636401222, 'Puti Kuswandari', 'Jr. Panjaitan No. 969, Bengkulu 95956, KalTim', 'Ki. Surapati No. 690, Pasuruan 27596, SulUt', 'default.png', '2007-03-16', 'Pindah', 0, '2023-07-13 03:39:51', '2023-07-13 03:39:51', NULL),
(4556721302180360, 'Oskar Oskar Saragih', 'Ds. Arifin No. 166, Makassar 11970, DIY', 'Gg. Wahid Hasyim No. 39, Padangpanjang 58326, KalTeng', 'default.png', '1971-01-24', 'Pindah', 1, '2023-07-19 21:00:17', '2023-07-19 21:00:17', NULL),
(4716280266615751, 'Malika Suryatmi', 'Dk. Supomo No. 531, Prabumulih 51775, PapBar', 'Gg. Lumban Tobing No. 849, Administrasi Jakarta Utara 87853, SulTeng', 'default.png', '2022-05-19', 'Tetap', 0, '2023-07-19 21:00:50', '2023-07-19 21:00:50', NULL),
(4716454593723433, 'Iwan Suryaningrat', NULL, NULL, 'default.png', NULL, NULL, 1, '2023-08-09 23:31:52', '2023-08-09 23:31:52', NULL),
(4716455663739233, 'iwan', 'Jl. Ki. Ronggowarsito No. 4160,Papua 58153,Jawa Barat', NULL, 'default.png', NULL, NULL, 1, '2023-08-09 23:45:52', '2023-08-09 23:45:52', NULL),
(4778023352204667, 'Qori Gasti Mardhiyah', 'Ds. Pacuan Kuda No. 856, Mojokerto 99031, PapBar', 'Kpg. Sukajadi No. 31, Tarakan 85995, Maluku', 'default.png', '2003-12-26', 'Tetap', 0, '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(4916456916349425, 'Malika Nurul Yolanda', 'Gg. Padang No. 358, Kupang 26482, NTB', 'Dk. Perintis Kemerdekaan No. 981, Bitung 67278, KalTim', 'default.png', '2017-11-27', 'Pindah', 1, '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(4916994347219577, 'Eka Wahyuni', 'Ki. Yosodipuro No. 827, Binjai 48076, Lampung', 'Psr. Baja Raya No. 811, Blitar 32092, BaBel', 'default.png', '1990-01-07', 'Pindah', 1, '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(4929799592823832, 'Genta Wijayanti S.Ked', 'Gg. Rajawali Timur No. 171, Palangka Raya 23743, KalBar', 'Jln. R.M. Said No. 590, Surabaya 71060, MalUt', 'default.png', '2006-06-10', 'Pindah', 1, '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(5105703371759970, 'Yani Kezia Safitri', 'Jr. Cihampelas No. 836, Bengkulu 86889, KalSel', 'Jln. Sukabumi No. 833, Padangsidempuan 10649, Aceh', 'default.png', '2017-09-10', 'Tetap', 1, '2023-07-19 21:00:55', '2023-07-19 21:00:55', NULL),
(5111856290372952, 'Zahra Nadia Mayasari', 'Gg. Sukajadi No. 73, Manado 46892, SulTeng', 'Psr. Sampangan No. 562, Tebing Tinggi 58751, SulUt', 'default.png', '1980-07-31', 'Tetap', 0, '2023-07-13 03:39:51', '2023-07-13 03:39:51', NULL),
(5136806933285260, 'Ilyas Saputra', 'Dk. Soekarno Hatta No. 106, Manado 66867, SulTra', 'Ki. Reksoninten No. 871, Payakumbuh 61915, DKI', 'default.png', '1997-09-23', 'Pindah', 0, '2023-07-19 21:00:54', '2023-07-19 21:00:54', NULL),
(5143303810938196, 'Okta Radika Hidayat S.Pt', 'Kpg. Gajah Mada No. 721, Madiun 59903, Maluku', 'Jln. Bata Putih No. 792, Cimahi 71960, JaBar', 'default.png', '2000-06-02', 'Tetap', 0, '2023-07-19 21:00:59', '2023-07-19 21:00:59', NULL),
(5152545553366278, 'Jelita Novi Safitri S.Kom', 'Gg. Warga No. 66, Batam 35124, SumBar', 'Kpg. Karel S. Tubun No. 806, Administrasi Jakarta Selatan 42214, PapBar', 'default.png', '1986-01-18', 'Tetap', 0, '2023-07-13 03:39:52', '2023-07-13 03:39:52', NULL),
(5155656632719143, 'Nilam Wastuti', 'Ki. Cokroaminoto No. 775, Banjarbaru 96349, JaBar', 'Dk. Supomo No. 795, Denpasar 87173, KalUt', 'default.png', '1994-04-10', 'Tetap', 1, '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(5156298770812965, 'Najib Nyoman Haryanto', 'Ds. Baja No. 504, Probolinggo 16641, BaBel', 'Ds. Surapati No. 583, Bengkulu 99772, Aceh', 'default.png', '2017-09-10', 'Tetap', 1, '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(5174457077436955, 'Betania Puspasari', 'Jln. Nangka No. 479, Batu 12232, SumSel', 'Jr. BKR No. 939, Tanjung Pinang 79073, Aceh', 'default.png', '1988-05-03', 'Pindah', 1, '2023-07-19 21:00:50', '2023-07-19 21:00:50', NULL),
(5175409053823093, 'Vanesa Laksmiwati', 'Jr. Basuki No. 928, Palangka Raya 73406, SulBar', 'Gg. Taman No. 396, Sukabumi 95938, SulUt', 'default.png', '1990-09-18', 'Pindah', 1, '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(5176887078515084, 'Tira Yolanda S.Kom', 'Dk. Bak Air No. 480, Yogyakarta 68642, KalUt', 'Gg. Asia Afrika No. 2, Pagar Alam 12611, JaTeng', 'default.png', '1971-09-25', 'Tetap', 0, '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(5179383230095782, 'Yessi Suryatmi S.E.I', 'Jr. Labu No. 650, Samarinda 40451, Lampung', 'Jln. Yogyakarta No. 899, Samarinda 84357, NTB', 'default.png', '2005-06-30', 'Pindah', 0, '2023-07-19 21:00:58', '2023-07-19 21:00:58', NULL),
(5180833369684399, 'Yulia Aryani', 'Dk. Ir. H. Juanda No. 723, Tebing Tinggi 57262, BaBel', 'Psr. Sutarjo No. 15, Manado 74997, JaBar', 'default.png', '2015-03-12', 'Tetap', 0, '2023-07-19 21:00:59', '2023-07-19 21:00:59', NULL),
(5183460709493856, 'Tina Halimah', 'Jln. Sugiono No. 995, Malang 44085, DKI', 'Jln. Halim No. 151, Denpasar 84172, KalSel', 'default.png', '2002-08-06', 'Pindah', 0, '2023-07-13 03:39:51', '2023-07-13 03:39:51', NULL),
(5185448129424096, 'Ana Sabrina Utami', 'Dk. Gajah No. 262, Lhokseumawe 35997, Riau', 'Ds. Astana Anyar No. 775, Pangkal Pinang 10817, SulTra', 'default.png', '1995-08-08', 'Pindah', 1, '2023-07-13 03:39:52', '2023-07-13 03:39:52', NULL),
(5198736187114053, 'Harimurti Lukita Hidayat M.Kom.', 'Ds. Flores No. 994, Denpasar 88206, Gorontalo', 'Dk. Thamrin No. 504, Cilegon 34158, Maluku', 'default.png', '2014-08-24', 'Tetap', 0, '2023-07-13 03:39:51', '2023-07-13 03:39:51', NULL),
(5201913757893631, 'Ani Wahyuni', ', ,', 'Kpg. Villa No. 408, Pangkal Pinang 24859, DIY', 'default.png', '1996-10-20', 'Pindah', 0, '2023-07-19 21:00:53', '2023-07-19 21:00:53', NULL),
(5209383263047084, 'Tantri Rahmawati', 'Gg. Otto No. 588, Bukittinggi 71508, Maluku', 'Psr. Babah No. 5, Bogor 15790, JaBar', 'default.png', '1992-06-26', 'Tetap', 0, '2023-07-13 03:39:51', '2023-07-13 03:39:51', NULL),
(5222788680717239, 'Widya Pia Wulandari M.Ak', 'Kpg. Bagonwoto  No. 432, Palangka Raya 21476, Jambi', 'Gg. Muwardi No. 646, Bukittinggi 31657, Lampung', 'default.png', '1978-06-02', 'Pindah', 1, '2023-07-19 21:00:17', '2023-07-19 21:00:17', NULL),
(5233227255122035, 'Irnanto Budiyanto', 'Psr. Laksamana No. 457, Metro 44676, BaBel', 'Ds. Raden Saleh No. 166, Tangerang Selatan 33360, BaBel', 'default.png', '2007-08-29', 'Pindah', 1, '2023-07-19 21:00:50', '2023-07-19 21:00:50', NULL),
(5246780257746925, 'Silvia Faizah Maryati M.Pd', 'Psr. Bhayangkara No. 954, Sorong 90041, KalTim', 'Ki. Supono No. 443, Tidore Kepulauan 45921, Jambi', 'default.png', '2000-02-08', 'Pindah', 0, '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(5256897753012367, 'Farhunnisa Calista Halimah', 'Gg. Hang No. 423, Pagar Alam 80040, SulTeng', 'Kpg. Baranangsiang No. 565, Gorontalo 57534, KepR', 'default.png', '1996-07-14', 'Pindah', 1, '2023-07-13 03:39:52', '2023-07-13 03:39:52', NULL),
(5261712617668168, 'Eka Haryanti', 'Kpg. Jakarta No. 489, Pagar Alam 98755, Bali', 'Psr. Pahlawan No. 605, Bau-Bau 94355, Aceh', 'default.png', '2004-06-04', 'Pindah', 1, '2023-07-19 21:00:58', '2023-07-19 21:00:58', NULL),
(5262966137502385, 'Ina Pratiwi', 'Ki. Krakatau No. 989, Tomohon 56528, Aceh', 'Psr. Hasanuddin No. 202, Yogyakarta 53824, SulSel', 'default.png', '2012-12-13', 'Tetap', 0, '2023-07-13 03:39:52', '2023-07-13 03:39:52', NULL),
(5276167316304677, 'Danu Firgantoro', 'Kpg. Sam Ratulangi No. 48, Banjarmasin 93978, DKI', 'Ki. Bacang No. 829, Sabang 37399, SulSel', 'default.png', '1997-08-21', 'Pindah', 1, '2023-07-19 21:00:58', '2023-07-19 21:00:58', NULL),
(5276328025343501, 'Digdaya Banara Hidayanto S.T.', 'Jr. Nanas No. 806, Tegal 59621, Lampung', 'Ds. Baha No. 502, Cirebon 68029, SumUt', 'default.png', '2010-01-02', 'Pindah', 0, '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(5292681563877128, 'Respati Habibi', 'Dk. Haji No. 894, Madiun 10984, DKI', 'Dk. Basuki Rahmat  No. 667, Administrasi Jakarta Timur 36777, Papua', 'default.png', '1996-12-24', 'Pindah', 0, '2023-07-19 21:00:58', '2023-07-19 21:00:58', NULL),
(5300077074743471, 'Capa Caraka Kuswoyo', 'Jln. Moch. Toha No. 395, Malang 54988, KepR', 'Ki. Barasak No. 732, Pontianak 83723, Gorontalo', 'default.png', '2009-01-15', 'Tetap', 1, '2023-07-19 21:00:59', '2023-07-19 21:00:59', NULL),
(5323106849709153, 'Maimunah Handayani S.I.Kom', 'Psr. Abdul No. 274, Probolinggo 90974, MalUt', 'Jln. BKR No. 107, Ambon 49807, KalTeng', 'default.png', '1999-08-22', 'Tetap', 0, '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(5329755779516691, 'Sadina Shania Mayasari M.TI.', 'Ki. Laksamana No. 155, Pagar Alam 84951, SulSel', 'Kpg. Industri No. 129, Sukabumi 47120, DKI', 'default.png', '2004-11-23', 'Tetap', 1, '2023-07-13 03:39:52', '2023-07-13 03:39:52', NULL),
(5352394835500364, 'Panji Zulkarnain', 'Ki. Ters. Kiaracondong No. 951, Palu 78286, MalUt', 'Ds. Wora Wari No. 824, Sabang 49399, SulUt', 'default.png', '2015-08-05', 'Pindah', 0, '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(5382807232765847, 'Lega Kemba Maryadi S.Psi', 'Kpg. Cihampelas No. 162, Kendari 88819, MalUt', 'Dk. Kiaracondong No. 973, Banjarbaru 93916, SulSel', 'default.png', '1975-11-26', 'Tetap', 0, '2023-07-19 21:00:53', '2023-07-19 21:00:53', NULL),
(5394358651956976, 'Dinda Wahyuni S.E.', 'Ki. Salam No. 748, Medan 30548, KalSel', 'Ds. Bayan No. 681, Bitung 77572, SumSel', 'default.png', '1987-05-01', 'Pindah', 0, '2023-07-19 21:00:53', '2023-07-19 21:00:53', NULL),
(5403448905640358, 'Shakila Rahayu S.Kom', 'Ki. Kiaracondong No. 8, Yogyakarta 98254, BaBel', 'Jln. Kyai Mojo No. 874, Madiun 20651, JaTim', 'default.png', '2013-05-29', 'Tetap', 1, '2023-07-13 03:39:51', '2023-07-13 03:39:51', NULL),
(5405797177197879, 'Vanesa Wijayanti', 'Dk. Bakau No. 840, Palu 54629, BaBel', 'Ki. Mulyadi No. 415, Gorontalo 18874, SumUt', 'default.png', '2020-01-18', 'Tetap', 1, '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(5406976581877958, 'Pia Novi Utami S.Psi', 'Ds. Pelajar Pejuang 45 No. 574, Blitar 94015, SulTra', 'Gg. Gading No. 6, Medan 61741, KalBar', 'default.png', '1989-01-25', 'Tetap', 1, '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(5412275983958470, 'Maria Nasyidah', 'Ds. Urip Sumoharjo No. 863, Kotamobagu 73727, SumSel', 'Jln. Lumban Tobing No. 208, Sukabumi 32541, KalTeng', 'default.png', '1999-08-26', 'Pindah', 1, '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(5421638786953452, 'Bagiya Jamil Setiawan', 'Jln. Yohanes No. 607, Samarinda 91330, Bengkulu', 'Jln. Sumpah Pemuda No. 356, Singkawang 89161, KalUt', 'default.png', '1978-08-05', 'Tetap', 1, '2023-07-19 21:00:54', '2023-07-19 21:00:54', NULL),
(5447589971940517, 'Empluk Pranowo', 'Jln. Baha No. 845, Pontianak 23651, SulBar', 'Kpg. Tambun No. 435, Cilegon 44959, Bengkulu', 'default.png', '1993-12-03', 'Tetap', 1, '2023-07-19 21:00:54', '2023-07-19 21:00:54', NULL),
(5459673046986625, 'Kartika Vanesa Prastuti S.IP', 'Ds. Yohanes No. 519, Makassar 20919, Lampung', 'Gg. Moch. Ramdan No. 626, Metro 49099, SumUt', 'default.png', '2000-06-03', 'Pindah', 0, '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(5471778177600988, 'Gasti Farida', 'Jr. Raden Saleh No. 274, Tangerang Selatan 32648, SulTra', 'Kpg. Baladewa No. 701, Cilegon 45049, SulUt', 'default.png', '1989-06-03', 'Tetap', 0, '2023-07-19 21:00:17', '2023-07-19 21:00:17', NULL),
(5480002714880394, 'Yuni Susanti S.Pd', 'Jln. Baja No. 193, Kotamobagu 85826, SumUt', 'Dk. Aceh No. 687, Tegal 87377, KalSel', 'default.png', '1975-03-06', 'Pindah', 0, '2023-07-19 21:00:50', '2023-07-19 21:00:50', NULL),
(5482946562429969, 'Garda Najmudin S.T.', 'Jr. Madiun No. 690, Bima 22973, NTB', 'Jln. Imam No. 524, Tegal 23391, Bali', 'default.png', '1999-08-07', 'Tetap', 0, '2023-07-19 21:00:54', '2023-07-19 21:00:54', NULL),
(5488462780082063, 'Alambana Januar S.Pt', 'Kpg. Suharso No. 59, Tidore Kepulauan 69543, KepR', 'Ds. Wora Wari No. 962, Cimahi 22862, Maluku', 'default.png', '1982-08-21', 'Pindah', 1, '2023-07-13 03:39:51', '2023-07-13 03:39:51', NULL),
(5489558019884408, 'Rahmi Amalia Winarsih', 'Jln. Babah No. 71, Bandung 66355, KalTeng', 'Ki. Suryo Pranoto No. 999, Jambi 46967, JaBar', 'default.png', '2000-12-11', 'Tetap', 0, '2023-07-19 21:00:54', '2023-07-19 21:00:54', NULL),
(5518264477344515, 'Jane Palastri', 'Kpg. Gajah No. 736, Batam 66503, Gorontalo', 'Jr. Honggowongso No. 850, Prabumulih 58127, SumBar', 'default.png', '2001-10-11', 'Tetap', 0, '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(5519721443488949, 'Ika Pudjiastuti', 'Jr. Ters. Buah Batu No. 346, Salatiga 73736, SulSel', 'Dk. Yosodipuro No. 631, Ambon 21821, Banten', 'default.png', '2004-11-22', 'Tetap', 1, '2023-07-19 21:00:54', '2023-07-19 21:00:54', NULL),
(5528651211914702, 'Genta Puspita', 'Dk. Qrisdoren No. 526, Bekasi 45430, KalBar', 'Kpg. Ujung No. 6, Sukabumi 50881, SumBar', 'default.png', '2007-06-04', 'Tetap', 0, '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(5529607779838435, 'Eli Nadine Pudjiastuti M.Farm', 'Dk. Untung Suropati No. 620, Administrasi Jakarta Timur 90545, Papua', 'Ki. Badak No. 835, Palangka Raya 30021, Bali', 'default.png', '2019-10-22', 'Pindah', 1, '2023-07-19 21:00:17', '2023-07-19 21:00:17', NULL),
(5534307609218378, 'Ibrani Jaga Mustofa', 'Psr. Rajawali Timur No. 727, Depok 54687, Bengkulu', 'Ki. Jagakarsa No. 435, Payakumbuh 24264, SumBar', 'default.png', '2011-06-22', 'Tetap', 0, '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(5566468947251405, 'Daruna Sinaga', ', ,', 'Ds. Abdul Rahmat No. 729, Tangerang 63597, NTT', 'default.png', '2022-12-14', 'Pindah', 1, '2023-07-13 03:39:51', '2023-07-13 03:39:51', NULL),
(5582980544309907, 'Kairav Sihombing', 'Jln. Agus Salim No. 893, Pontianak 45276, NTT', 'Psr. Wahidin No. 697, Yogyakarta 93422, Riau', 'default.png', '2021-07-09', 'Tetap', 1, '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(5591132301778531, 'Hamima Wastuti M.TI.', 'Ki. Basket No. 593, Tomohon 93318, KalUt', 'Jln. Bayan No. 147, Tangerang Selatan 45090, JaTeng', 'default.png', '1971-06-29', 'Pindah', 1, '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(6011059763493954, 'Indra Saiful Tarihoran', 'Dk. Sutoyo No. 806, Tidore Kepulauan 78332, SulTeng', 'Jln. Qrisdoren No. 321, Blitar 13548, NTB', 'default.png', '2022-10-10', 'Tetap', 0, '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(6011063545589022, 'Mustofa Banawa Wijaya S.Psi', 'Ds. Jayawijaya No. 807, Tual 16482, Papua', 'Dk. Padma No. 547, Pematangsiantar 25481, SulUt', 'default.png', '2018-12-01', 'Tetap', 0, '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(6011103555551452, 'Bagas Galur Gunawan M.Kom.', 'Jln. Tubagus Ismail No. 371, Pematangsiantar 28394, KalTim', 'Dk. Dago No. 209, Sawahlunto 21372, Riau', 'default.png', '1993-05-29', 'Tetap', 1, '2023-07-19 21:00:59', '2023-07-19 21:00:59', NULL),
(6011119544430962, 'Cindy Vanesa Palastri', 'Ds. Banda No. 574, Lhokseumawe 95036, SumSel', 'Dk. Bakaru No. 342, Payakumbuh 35551, SumBar', 'default.png', '2011-09-02', 'Tetap', 1, '2023-07-19 21:00:55', '2023-07-19 21:00:55', NULL),
(6011450842270499, 'Raden Hidayanto', 'Jr. Ki Hajar Dewantara No. 961, Magelang 88305, KalSel', 'Ki. Achmad No. 343, Pekalongan 80824, KalUt', 'default.png', '1993-09-19', 'Pindah', 1, '2023-07-19 21:00:58', '2023-07-19 21:00:58', NULL),
(6011531734428483, 'Ratih Nasyiah S.E.I', 'Kpg. Kyai Mojo No. 246, Langsa 56890, MalUt', 'Kpg. Lada No. 805, Administrasi Jakarta Utara 27886, KalUt', 'default.png', '1983-01-13', 'Pindah', 0, '2023-07-19 21:00:53', '2023-07-19 21:00:53', NULL),
(6011534334599398, 'Gaiman Bajragin Haryanto', 'Psr. Asia Afrika No. 690, Palu 39744, KalSel', 'Ds. Raden Saleh No. 595, Gorontalo 22709, SulUt', 'default.png', '1981-02-03', 'Tetap', 0, '2023-07-13 03:39:51', '2023-07-13 03:39:51', NULL),
(6011551604100004, 'Maida Novitasari M.TI.', 'Psr. Basudewo No. 377, Lhokseumawe 27543, Bali', 'Dk. Rajawali No. 59, Lhokseumawe 79739, Bengkulu', 'default.png', '2021-02-27', 'Tetap', 0, '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(6011585140756325, 'Damar Cengkir Ardianto', 'Jr. Tentara Pelajar No. 315, Pematangsiantar 53561, Aceh', 'Gg. Laksamana No. 512, Tanjungbalai 95983, JaTim', 'default.png', '1999-11-10', 'Pindah', 0, '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(6011603519412592, 'Restu Qori Agustina', 'Kpg. Supomo No. 880, Kediri 52285, JaBar', 'Kpg. Sunaryo No. 407, Parepare 83404, KalTim', 'default.png', '1984-10-31', 'Pindah', 0, '2023-07-19 21:00:57', '2023-07-19 21:00:57', NULL),
(6011619156208978, 'Hamima Kusmawati', 'Jl. Ki. Ronggowarsito No. 4160, Tembalang, Semarang', 'Ki. Pattimura No. 970, Bukittinggi 93680, DIY', 'default.png', '1977-01-11', 'Pindah', 1, '2023-07-19 21:00:57', '2023-07-19 21:00:57', NULL),
(6011672862016987, 'Wirda Pertiwi', 'Psr. Baung No. 914, Bukittinggi 39122, SulBar', 'Ds. Veteran No. 662, Serang 20519, MalUt', 'default.png', '1979-08-15', 'Tetap', 1, '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(6011742897660735, 'Dalima Purwanti', 'Kpg. Tambak No. 785, Ambon 33520, DIY', 'Ds. Ters. Pasir Koja No. 578, Kendari 93683, SumSel', 'default.png', '2015-04-14', 'Tetap', 1, '2023-07-19 21:00:54', '2023-07-19 21:00:54', NULL),
(6011785081052946, 'Gasti Rahayu M.Pd', 'Gg. Banceng Pondok No. 249, Pontianak 44979, NTT', 'Ki. Kalimalang No. 960, Pariaman 53366, MalUt', 'default.png', '1996-01-02', 'Tetap', 0, '2023-07-19 21:00:59', '2023-07-19 21:00:59', NULL),
(11111111111111111, 'Admin', '-', NULL, 'default.png', NULL, 'Tetap', 1, '2023-08-07 21:05:58', '2023-08-07 21:05:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pelaporan`
--

CREATE TABLE `pelaporan` (
  `pelaporan_id` int(11) NOT NULL,
  `nik_pelapor` bigint(17) NOT NULL,
  `nik_terlapor` bigint(17) NOT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `laporan` varchar(255) NOT NULL,
  `deskripsi_pelaporan` varchar(255) DEFAULT NULL,
  `status_pelaporan` varchar(20) NOT NULL DEFAULT 'Menunggu Konfirmasi',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelaporan`
--

INSERT INTO `pelaporan` (`pelaporan_id`, `nik_pelapor`, `nik_terlapor`, `kategori`, `laporan`, `deskripsi_pelaporan`, `status_pelaporan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 4485809172694, 4539123274329, 'Lingkungan', 'Test Lagi', 'TESTTTTT', 'Menunggu Konfirmasi', '2023-08-09 20:46:13', '2023-08-09 20:46:13', NULL),
(7, 4485809172694, 5459254538411982, 'Lainnya', 'Test Lagi', 'fjkghdjfhgdfjkhgj', 'Menunggu Konfirmasi', '2023-08-09 21:14:07', '2023-08-09 21:14:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
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
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`pengumuman_id`, `kategori`, `judul_pengumuman`, `deskripsi`, `tanggal`, `jam`, `tempat`, `status`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Kesehatan', 'Ayok Ngumpul', 'ngumpul heyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy', '2023-08-23', '08:12:16', 'Balai Desa', 'Akan Berlangsung', 22222222222222222, '2023-08-09 17:12:16', '2023-08-09 17:12:16', NULL);

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

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `nama_pengirim`, `email`, `kategori`, `pesan`, `status`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'Iwan Suryaningrat', 'iwansuryaningrat@gmail.com', 'Pertanyaan', 'Test', 'Sudah Dibaca', 22222222222222222, '2023-08-02 21:42:25', '2023-08-09 00:48:40', '2023-08-09 00:48:40'),
(8, 'Iwan Suryaningrat', 'iwansuryaningrat@gmail.com', 'Saran', 'testes', 'Sudah Dibaca', 4716454593739, '2023-08-02 23:45:58', '2023-08-02 23:48:34', NULL),
(9, 'Raina Ilsa Laksmiwati M.Ak', 'zalindra.laksita@firgantoro.co.id', 'Pertanyaan', 'mau tanya gan', 'Belum Dibaca', NULL, '2023-08-08 01:50:19', '2023-08-08 01:50:19', NULL),
(10, 'Pia Agnes Wastuti', 'gsaefullah@yahoo.co.id', 'Saran', 'Test', 'Belum Dibaca', NULL, '2023-08-09 00:55:25', '2023-08-09 00:55:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `nik` bigint(17) NOT NULL,
  `no_kk` bigint(17) NOT NULL,
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
(4024007109297, 6011619156208978, 'Emin Prasetya', 'Anak', 'Laki-laki', 'Islam', 'Bau-Bau', '2000-12-14', 23, 'Kawin', 'S1', 'Wiraswasta', 'emin@gmail.com', '088765432190', '$2y$10$uVROR7WKHlhjc/0UZQotsezLq.DE.HT4AJPZwshPZ4snkNzIir8M.', 'User', '1691521439_7d19d8f3730629a4c920.png', 'Tetap', '2023-07-19 21:00:57', '2023-07-19 21:00:57', NULL),
(4024007168228, 6011619156208978, 'Virman Wibisono', 'Anak', 'Laki-laki', 'Islam', 'Yogyakarta', '2003-06-08', 20, 'Kawin', 'SMP', 'Wiraswasta', 'virman@gmail.com', '088888888888', '$2y$10$hLKct2C/NRJ4C1BI7XgdfejGndG2se7boFzPKOSlUvLK8iaCYb4Je', 'User', '1691521439_7d19d8f3730629a4c920.png', 'Pendatang', '2023-07-19 21:00:17', '2023-07-19 21:00:17', NULL),
(4024007177104, 5233227255122035, 'Ellis Widya Usamah', 'Anak', 'Perempuan', 'Islam', 'Tarakan', '2007-06-13', 35, 'Cerai Mati', 'SMA', 'Wiraswasta', 'mitra77@yulianti.ac.id', NULL, '$2y$10$J.XF8o2h51sJfExBoDPFI.j7CPZOJ3Ug/gTxflimP/6vhLjDKSRRe', 'User', 'default.png', 'Pendatang', '2023-07-19 21:00:50', '2023-07-19 21:00:50', NULL),
(4302450574955, 5201913757893631, 'Agus', 'Kepala Keluarga', 'Laki-laki', 'Islam', 'Malang', '1986-06-14', 37, 'Kawin', 'D3', 'Wiraswasta', 'surya@gmail.com', '082345678912', '$2y$10$RoZgDflAr5S5Ta9mZ31A/ujncy/Or.xYD0YML/oeOpcnA7qokQBYm', 'User', 'default.png', 'Tetap', '2023-07-19 21:00:53', '2023-07-19 21:00:53', NULL),
(4485439309609, 5489558019884408, 'Ida Yuliarti', 'Istri', 'Laki-laki', 'Islam', 'Malang', '2011-06-25', 11, 'Cerai Hidup', 'D3', 'Wiraswasta', 'xanana.oktaviani@puspasari.net', NULL, '$2y$10$a/YrX9ZicEThFkOPBP1BQ.hekOzPDUg0Vv8UXsinrHzmDveSzdt.O', 'User', 'default.png', 'Pindahan', '2023-07-19 21:00:54', '2023-07-19 21:00:54', NULL),
(4485809172694, 6011619156208978, 'Bambang Nyoman Zulkarnain M.Farm', 'Kepala Keluarga', 'Laki-laki', 'Islam', 'Manado', '1985-07-11', 38, 'Cerai Hidup', 'S2', 'Wiraswasta', 'surya@gmail.com', '08888888883', '$2y$10$HAfYa89XM/a7La6ARVnJ3e2dB7X41wymQLyNb4JLN58/sif3VEyJ2', 'User', '1691586899_3d2eeabfa84c26f044cc.png', 'Tetap', '2023-07-19 21:00:54', '2023-07-19 21:00:54', NULL),
(4532216326304, 5394358651956976, 'Tri Kayun Pradipta S.IP', 'Kepala Keluarga', 'Laki-laki', 'Islam', 'Palangka Raya', '1973-09-28', 30, 'Belum Kawin', 'S1', 'Wiraswasta', 'yuniar.kenzie@gmail.com', NULL, '$2y$10$Z5h7rX9AzuC8HxDFqqovOO5GbBIjfPSJ39SpZVmKTieOlh/rNCnqS', 'User', 'default.png', 'Sementara', '2023-07-19 21:00:53', '2023-07-19 21:00:53', NULL),
(4532493442956, 5412275983958470, 'Farhunnisa Ida Nasyidah S.Ked', 'Anak', 'Laki-laki', 'Islam', 'Sorong', '2010-11-08', 83, 'Cerai Hidup', 'D3', 'Wiraswasta', 'nasyiah.vivi@gmail.co.id', NULL, '$2y$10$C5rbbivDkRhdzg7i2f6Z6OWTlHqIcfu8AX5ufSB7PHQ5iZ0eQubZm', 'User', 'default.png', 'Sementara', '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(4539021447050, 5261712617668168, 'Eman Sitorus S.Gz', 'Kepala Keluarga', 'Perempuan', 'Islam', 'Semarang', '1990-08-22', 15, 'Belum Kawin', 'SMA', 'Wiraswasta', 'ganda.wulandari@gmail.com', NULL, '$2y$10$.Ya67LZxAVuXNjNUJ5Vl5.kmVkSxz0m.6zBXJ5U5yH/xSuEXNw/gq', 'User', 'default.png', 'Tetap', '2023-07-19 21:00:58', '2023-07-19 21:00:58', NULL),
(4539123274329, 378630503260877, 'Zalindra Winarsih M.TI.', 'Anak', 'Perempuan', 'Islam', 'Tegal', '2015-01-17', 58, 'Kawin', 'Tidak Sekolah', 'Wiraswasta', 'rirawan@latupono.co.id', NULL, '$2y$10$jEKMb0rg8CujKXZPI0ghqelkk0InaUpblHkmmOtyzUy93.8lM/fxu', 'User', 'default.png', 'Tetap', '2023-07-19 21:00:59', '2023-07-19 21:00:59', NULL),
(4556371261014, 5198736187114053, 'Maya Zelaya Prastuti', 'Istri', 'Perempuan', 'Islam', 'Payakumbuh', '1976-07-22', 78, 'Cerai Hidup', 'S1', 'Wiraswasta', 'queen.gunarto@yahoo.com', NULL, '$2y$10$zKGBlFTX7s1IWFOKsgfA6u6qngtowE4/3g2eoSEgKsolpb6EvkH1m', 'User', 'default.png', 'Tetap', '2023-07-13 03:39:51', '2023-07-13 03:39:51', NULL),
(4556941832450, 4929011067424, 'Intan Latika Agustina', 'Istri', 'Perempuan', 'Islam', 'Tarakan', '1982-11-06', 53, 'Cerai Mati', 'S1', 'Wiraswasta', 'padriansyah@wulandari.info', NULL, '$2y$10$p74uYhXONpVAucBmO9M4p.oPKqixau1PhWpwCpqRBkr.Z42C5W2/.', 'User', 'default.png', 'Sementara', '2023-07-19 21:00:58', '2023-07-19 21:00:58', NULL),
(4716266233870, 6011450842270499, 'Putri Nuraini', 'Kepala Keluarga', 'Perempuan', 'Islam', 'Mojokerto', '2001-04-13', 34, 'Belum Kawin', 'Tidak Sekolah', 'Wiraswasta', 'zhasanah@gmail.co.id', NULL, '$2y$10$iNxd0UT/rEPT5fw/NHqoCeaedHYU0Wb4KSbMy7K7.bmJNw3miQu7.', 'User', 'default.png', 'Sementara', '2023-07-19 21:00:58', '2023-07-19 21:00:58', NULL),
(4716454593739, 5209383263047084, 'Iwan Suryaningrat', 'Istri', 'Laki-laki', 'Islam', 'Payakumbuh', '2022-03-23', 39, 'Cerai Hidup', 'S3', 'Wiraswasta', 'iwansuryaningrat@gmail.com', '088802851811', '$2y$10$NW8BrfMbKMs.E1lvZ.sGo.ZBAwmnXicln/cmfiEZtkvxJZRUlBpJ.', 'Admin', '1689702863_f62ede84e70cad5bc0cb.jpg', 'Tetap', '2023-07-13 03:39:51', '2023-07-13 03:39:51', NULL),
(4763636283797, 5488462780082063, 'Hilda Wijayanti S.H.', 'Istri', 'Laki-laki', 'Islam', 'Pontianak', '2000-02-17', 98, 'Cerai Mati', 'Tidak Sekolah', 'Wiraswasta', 'simanjuntak.ulva@suryono.desa.id', NULL, '$2y$10$yJB6.iD8Uv1K7VKv9T.hZ.Pe.LeV6x3naeVBkpNfEWB3bIong7oyS', 'User', 'default.png', 'Tetap', '2023-07-13 03:39:52', '2023-07-13 03:39:52', NULL),
(4907790984217, 4716882159822, 'Ani Uyainah S.H.', 'Kepala Keluarga', 'Laki-laki', 'Islam', 'Pasuruan', '2017-06-28', 20, 'Belum Kawin', 'Tidak Sekolah', 'Wiraswasta', 'rsusanti@hutapea.biz.id', NULL, '$2y$10$5whGyET2fhtVyhXY4z5aY.HvkypEsdfYYRxKuBRe8XzUKyTpbIyCy', 'User', 'default.png', 'Sementara', '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(4916917114418, 4556721302180360, 'Gamblang Widodo', 'Kepala Keluarga', 'Laki-laki', 'Islam', 'Tebing Tinggi', '1992-03-21', 11, 'Cerai Hidup', 'S1', 'Wiraswasta', 'kani93@yahoo.co.id', NULL, '$2y$10$9TYwMg1IFQu6OpZSz7eAne53sU9zwx/BC6FHV75rPmca853CYgO8m', 'User', 'default.png', 'Tetap', '2023-07-19 21:00:17', '2023-07-19 21:00:17', NULL),
(4929028086482, 5185448129424096, 'Dimas Hardiansyah', 'Anak', 'Perempuan', 'Islam', 'Sukabumi', '2017-09-12', 5, 'Cerai Hidup', 'S3', 'Wiraswasta', 'yessi44@yahoo.com', NULL, '$2y$10$vsjjeZwSIOFxWP2Fpipgee95XhFp6ReYOqLsWBZYsCZvrD/6eGEI.', 'User', 'default.png', 'Tetap', '2023-07-13 03:39:52', '2023-07-13 03:39:52', NULL),
(4929422918934, 5421638786953452, 'Rahmi Usada', 'Istri', 'Perempuan', 'Islam', 'Pematangsiantar', '1995-06-12', 39, 'Cerai Mati', 'D4', 'Wiraswasta', 'prayoga.darman@gmail.co.id', NULL, '$2y$10$LJxUhNJX.CrygAR.i3ccleSn5znr0WEyZRENIdouaL1p/GCB8foEe', 'User', 'default.png', 'Tetap', '2023-07-19 21:00:54', '2023-07-19 21:00:54', NULL),
(4989054276464, 4539493123361, 'Putri Gilda Yuniar', 'Anak', 'Perempuan', 'Islam', 'Mojokerto', '2021-05-14', 94, 'Cerai Mati', 'SD', 'Wiraswasta', 'saptono.oman@gmail.com', NULL, '$2y$10$Ur7UCXwRnT0uhc0IuQ8QX.zmTbBB2OiZ9gBxVcSN7u95fT/agu3Ra', 'User', 'default.png', 'Pindahan', '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(343475351188255, 5566468947251405, 'Raina Ilsa Laksmiwati M.Ak', '', 'Perempuan', 'Islam', 'Kediri', '1973-03-25', 50, 'cerai_mati', 'S1', 'Wiraswasta', 'zalindra.laksita@firgantoro.co.id', NULL, '$2y$10$SSIAcb6DrVddiqAqE4ZJ8OqBM5RPoQKzeGnvBwyOekOC6IRqYx.0O', 'User', 'default.png', 'Tetap', '2023-07-13 03:39:51', '2023-07-13 03:39:51', NULL),
(344212209136981, 4916074670608, 'Putri Novi Suartini', 'Istri', 'Perempuan', 'Islam', 'Administrasi Jakarta Pusat', '2021-02-23', 82, 'Cerai Hidup', 'D4', 'Wiraswasta', 'wahyudin.karen@waluyo.info', NULL, '$2y$10$lu76W6Ddumtw2nXzr0T.LeSGjJR5yaY3Af2lRJ9WqiwXabSrqS4TW', 'User', 'default.png', 'Sementara', '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(345614270604616, 371449088798749, 'Viman Wardaya Najmudin S.T.', 'Istri', 'Laki-laki', 'Islam', 'Pangkal Pinang', '2010-02-01', 33, 'Belum Kawin', 'S2', 'Wiraswasta', 'tirtayasa68@oktaviani.mil.id', NULL, '$2y$10$A8BxmTYBfzfpSg3Ty/zxh.B8CPhbZ93llUlNQW9hjjTkdknl0exqq', 'User', 'default.png', 'Pindahan', '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(347058185440633, 4532028874095, 'Siti Hariyah', 'Kepala Keluarga', 'Perempuan', 'Islam', 'Pontianak', '1991-10-19', 68, 'Belum Kawin', 'S1', 'Wiraswasta', 'mulyani.kajen@yahoo.co.id', NULL, '$2y$10$FauCIaogMPGcvuYKAhur5.hYTwt2CAl5HTupupxULlmC.DBu5F1A6', 'User', 'default.png', 'Tetap', '2023-07-19 21:00:59', '2023-07-19 21:00:59', NULL),
(347538557310829, 4532564599718, 'Edi Suwarno', 'Istri', 'Perempuan', 'Islam', 'Padang', '2007-11-08', 83, 'Cerai Hidup', 'S3', 'Wiraswasta', 'novitasari.vicky@gmail.co.id', NULL, '$2y$10$UtfAcbsJZTVvd1l80.Kn8uziyGc6OyjVINfxtxx2n2nrwY0AAigpe', 'User', 'default.png', 'Pendatang', '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(348657749568547, 4532043292588, 'Zaenab Nuraini', 'Istri', 'Laki-laki', 'Islam', 'Sawahlunto', '1981-01-27', 19, 'Kawin', 'S3', 'Wiraswasta', 'argono.prastuti@gmail.com', NULL, '$2y$10$mhOKD0JzrRuUcK3hO3aBh.V8..bBK6W8wb/TREzLcljqoUtXoM4RK', 'User', 'default.png', 'Tetap', '2023-07-13 03:39:51', '2023-07-13 03:39:51', NULL),
(348764598251512, 5323106849709153, 'Artawan Maulana', 'Anak', 'Perempuan', 'Islam', 'Batu', '2003-10-17', 17, 'Kawin', 'S1', 'Wiraswasta', 'isaragih@gmail.com', NULL, '$2y$10$B1KUhG/WOrRcPDP9zn4Xm.fIdv2gb7yzJhk5ZHmGOOKuhslWWwRmi', 'User', 'default.png', 'Pindahan', '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(349887613753664, 5136806933285260, 'Yunita Ella Mardhiyah S.T.', 'Anak', 'Laki-laki', 'Islam', 'Administrasi Jakarta Timur', '1996-01-07', 80, 'Cerai Mati', 'SD', 'Wiraswasta', 'tsimbolon@gmail.com', NULL, '$2y$10$3NXiBRtLh5IKzyJaPPn24es5YA4pKHdvCtu8dpcjlRA8OPSkt.9nC', 'User', 'default.png', 'Tetap', '2023-07-19 21:00:54', '2023-07-19 21:00:54', NULL),
(349970664270232, 4716610528181, 'Eka Yuliarti S.Kom', 'Istri', 'Perempuan', 'Islam', 'Jambi', '1972-08-22', 82, 'Belum Kawin', 'D2', 'Wiraswasta', 'putu38@budiman.org', NULL, '$2y$10$2LOiCoStzOOuHhOudKE/.O1r6BcG.GIlD2GAeW7QzwVEUvVa1KWBm', 'User', 'default.png', 'Pindahan', '2023-07-19 21:00:57', '2023-07-19 21:00:57', NULL),
(370865048194441, 4084766711975935, 'Virman Najib Tarihoran', 'Istri', 'Laki-laki', 'Islam', 'Bandung', '1988-08-24', 21, 'Kawin', 'D2', 'Wiraswasta', 'hasta.laksita@simanjuntak.or.id', NULL, '$2y$10$PcxvGERr4fNdCCBDtcqnH.hlE5qPlrxw1qnL8TvtJsYMnIUK4oWCC', 'User', 'default.png', 'Sementara', '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(370934251958189, 4716280266615751, 'Paris Mala Nasyiah', 'Anak', 'Perempuan', 'Islam', 'Pekanbaru', '2002-06-11', 78, 'Kawin', 'S1', 'Wiraswasta', 'winarno.ella@gmail.com', NULL, '$2y$10$BtHDnsrEzTUNIqTf3qemauWB1Kn9MiBhoSaZb.guFY1UrS73Nhbua', 'User', 'default.png', 'Pendatang', '2023-07-19 21:00:50', '2023-07-19 21:00:50', NULL),
(371632313695315, 5582980544309907, 'Jais Sinaga', 'Anak', 'Laki-laki', 'Islam', 'Ternate', '1975-09-27', 72, 'Cerai Mati', 'S2', 'Wiraswasta', 'putri48@yahoo.com', NULL, '$2y$10$1iOL.N1X8bAEKM2/hswzu.4gzlThxEdLNV7zroKaCueHYE6vpP/uq', 'User', 'default.png', 'Sementara', '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(372316786874214, 4556643413500, 'Lala Ella Rahimah S.Sos', 'Istri', 'Laki-laki', 'Islam', 'Bandar Lampung', '1972-11-10', 7, 'Cerai Hidup', 'Tidak Sekolah', 'Wiraswasta', 'ismail18@suryatmi.net', NULL, '$2y$10$qyrPiXJrpICcjq7V7A1eQuoc1hqL3H59T2rD4iZSMdjoEOAlo6oDq', 'User', 'default.png', 'Tetap', '2023-07-13 03:39:52', '2023-07-13 03:39:52', NULL),
(374935801440319, 379035151679296, 'Bagya Pangeran Hutasoit', 'Istri', 'Laki-laki', 'Islam', 'Ambon', '1994-11-03', 54, 'Belum Kawin', 'Tidak Sekolah', 'Wiraswasta', 'lutfan07@gmail.com', NULL, '$2y$10$5MRHw8bZ2BHmVgOUEyzUBOEQ6Vhy05k.dieS4nTGPuWPaOv08y8oK', 'User', 'default.png', 'Tetap', '2023-07-19 21:00:57', '2023-07-19 21:00:57', NULL),
(377255077060528, 5591132301778531, 'Tina Zulaika', 'Kepala Keluarga', 'Laki-laki', 'Islam', 'Sorong', '1976-07-02', 44, 'Cerai Mati', 'D4', 'Wiraswasta', 'uli33@purwanti.mil.id', NULL, '$2y$10$YQIAEFNSK.x5vVSfDxAitO/42XYGv4RucmCxZ0CJddXPrWSSdaV3a', 'User', 'default.png', 'Pindahan', '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(1426323985473439, 5566468947251405, 'Surya', '', 'Laki-laki', 'Islam', 'Grobogan', '2000-12-14', 23, 'Belum Kawin', 'S1', 'Programmer', 'surya@gmail.com', '082345678912', '$2y$10$LbgljVG6itOPn51HbZPNKubYxrWW7wPks92bfiy5eJQpoo5UizeQm', 'User', 'default.png', 'Tetap', '2023-08-08 01:31:37', '2023-08-08 01:31:37', NULL),
(1426323985999439, 5566468947251405, 'Surya', '', 'Laki-laki', 'Islam', 'Grobogan', '2002-02-02', 21, 'Kawin', 'S1', 'Programmer', 'surya@gmail.com', '082345678912', '$2y$10$KVMX0A/lPxmRwSg0dLGuFeWJ/1JBBkjUk2AFaiZZew6DBN9IL1bKa', 'User', 'default.png', 'Tetap', '2023-08-08 01:35:41', '2023-08-08 01:35:41', NULL),
(1426823985119439, 5566468947251405, 'Surya', 'Anak', 'Laki-laki', 'Islam', 'Grobogan', '2003-03-03', 20, 'Belum Kawin', 'S1', 'Programmer', 'surya@gmail.com', '08888888883', '$2y$10$8BESta6Sg1ookxTtTyptxux7Yz9i34NkW3E7e7ZJcHIrhtjtQXO42', 'User', '1691433600_a422be60d646dd706406.jpg', 'Tetap', '2023-08-08 01:40:00', '2023-08-08 01:40:00', NULL),
(2222222222222226, 5566468947251405, 'Surya', '', 'Laki-laki', 'Islam', 'Grobogan', '2012-12-12', 11, 'Belum Kawin', 'SMP', 'Programmer', 'virman@gmail.com', '088888888888', '$2y$10$FuHM8/CS/gNgI7M.1TUcLeE5dlTi/KAkwbjRrK93oBis3vsnaYtM.', 'User', 'default.png', 'Tetap', '2023-08-08 01:33:25', '2023-08-08 01:33:25', NULL),
(3483948274937252, 5201913757893631, 'Agus Junior', 'Anak', 'Laki-laki', 'Kristen', 'Grobogan', '2023-08-02', 0, 'Belum Kawin', 'Tidak Sekolah', 'Belum Bekerja', 'emin@gmail.com', '088765432190', '$2y$10$Fq.ELaf4lKIveqPH3g1l2ek0guJeqkntFtzuBnn8VqEO6UAMCilwC', 'User', 'default.png', 'Tetap', '2023-08-09 00:29:30', '2023-08-09 00:29:30', NULL),
(4485369111653429, 5329755779516691, 'Banawa Marbun', 'Kepala Keluarga', 'Laki-laki', 'Islam', 'Gunungsitoli', '1979-11-08', 81, 'Kawin', 'S1', 'Wiraswasta', 'laksita.warsita@hutagalung.info', NULL, '$2y$10$xBCSkdV796/vXekXORae.e8WvRhaulZwQsWGjVeqoHcj3h4LGCWr6', 'User', 'default.png', 'Tetap', '2023-07-13 03:39:52', '2023-07-13 03:39:52', NULL),
(4485425690195891, 346212495141057, 'Maman Megantara', 'Anak', 'Perempuan', 'Islam', 'Semarang', '2001-07-05', 46, 'Kawin', 'SD', 'Wiraswasta', 'wibisono.ophelia@yahoo.com', NULL, '$2y$10$TMlkf/rR2HmLGiDly4V/yOyipYDsYDvyBAbCQ/8qJK6iw6nUMDOhC', 'User', 'default.png', 'Sementara', '2023-07-19 21:00:53', '2023-07-19 21:00:53', NULL),
(4485756027046005, 344917642407464, 'Dina Pertiwi S.Farm', 'Anak', 'Perempuan', 'Islam', 'Administrasi Jakarta Barat', '2018-12-03', 35, 'Belum Kawin', 'S2', 'Wiraswasta', 'yono.hidayat@yahoo.co.id', NULL, '$2y$10$vmovF.c23jzKz6F3f3CdfOb/dTl3upFwi1rk/TgkP2ZHViQO9e9q.', 'User', 'default.png', 'Pendatang', '2023-07-19 21:00:54', '2023-07-19 21:00:54', NULL),
(4532617648913689, 4539519871894, 'Luwar Maryadi', 'Istri', 'Perempuan', 'Islam', 'Palu', '1980-09-09', 65, 'Belum Kawin', 'S3', 'Wiraswasta', 'pia.megantara@gmail.com', NULL, '$2y$10$4YfP7b5KtPj1WiqHRqhvcezm89x2lpdCvP.jyGdP8L9mM6ZJOLCqS', 'User', 'default.png', 'Sementara', '2023-07-19 21:00:53', '2023-07-19 21:00:53', NULL),
(4532628626098427, 5156298770812965, 'Adikara Jayeng Januar', 'Kepala Keluarga', 'Perempuan', 'Islam', 'Padang', '1987-08-24', 94, 'Belum Kawin', 'S1', 'Wiraswasta', 'sarah61@gmail.com', NULL, '$2y$10$6J5HKBq1v7nN3LRV1/XyPOPrIMunvytw8/rAohRFskfAEzz59KAwe', 'User', 'default.png', 'Tetap', '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(4532776938601295, 4485169946270070, 'Zulfa Hastuti', 'Kepala Keluarga', 'Laki-laki', 'Islam', 'Makassar', '1981-06-07', 9, 'Cerai Mati', 'D2', 'Wiraswasta', 'irwan23@gmail.com', NULL, '$2y$10$/YyWSo334KgP31QtlkVPc.qOum9wmrNYhXODmCIEJnK6bQah/mEoC', 'User', 'default.png', 'Tetap', '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(4532953845398014, 4916994347219577, 'Gilda Gawati Mandasari', 'Istri', 'Laki-laki', 'Islam', 'Bandar Lampung', '1990-05-20', 32, 'Kawin', 'D4', 'Wiraswasta', 'fsitompul@haryanti.sch.id', NULL, '$2y$10$9qHgpqYfBTLsLk533bRIIe3KlZXEfCFTFTDaywfi5W8GUXpbLIA6y', 'User', 'default.png', 'Pindahan', '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(4539281000331916, 4485896894345716, 'Gabriella Ella Zulaika S.Farm', 'Kepala Keluarga', 'Laki-laki', 'Islam', 'Banda Aceh', '2014-07-06', 70, 'Kawin', 'D4', 'Wiraswasta', 'jhakim@gmail.co.id', NULL, '$2y$10$rfFWby/ekA3sHt1m67nZwuyeqvCG4SQN3B0oxAIqp53v.cJKC2GZa', 'User', 'default.png', 'Sementara', '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(4539358002702532, 5534307609218378, 'Ida Winda Mardhiyah', 'Istri', 'Perempuan', 'Islam', 'Yogyakarta', '2019-06-08', 84, 'Belum Kawin', 'SMA', 'Wiraswasta', 'agustina.jaka@gmail.com', NULL, '$2y$10$GF6etG.VNSHQ6YGEwecKcexryINua9t3WUx5seMfwbXCIwHv7CYAi', 'User', 'default.png', 'Pendatang', '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(4539470567237174, 5276167316304677, 'Shania Palastri', 'Anak', 'Laki-laki', 'Islam', 'Bengkulu', '1973-02-08', 82, 'Kawin', 'D4', 'Wiraswasta', 'pnugroho@yahoo.com', NULL, '$2y$10$TFkehuIjCN0VcutZR.NYY.0mOwnvKvq.0TXbQW5SPpcgaE0mvjPrK', 'User', 'default.png', 'Sementara', '2023-07-19 21:00:58', '2023-07-19 21:00:58', NULL),
(4539773460395068, 4485670841667112, 'Septi Fujiati', 'Anak', 'Perempuan', 'Islam', 'Palembang', '1979-09-22', 76, 'Cerai Mati', 'D1', 'Wiraswasta', 'rfujiati@gmail.com', NULL, '$2y$10$lHtuijRWetmpb/6Uf116n.1r5gCTr0Y/0xygFJ6AflrlsYZ/JA9ri', 'User', 'default.png', 'Tetap', '2023-07-19 21:00:53', '2023-07-19 21:00:53', NULL),
(4556541197364782, 6011672862016987, 'Warsa Putra', 'Kepala Keluarga', 'Laki-laki', 'Islam', 'Ambon', '1992-06-18', 46, 'Belum Kawin', 'SMA', 'Wiraswasta', 'nardi.mustofa@latupono.co.id', NULL, '$2y$10$DvJynVf5gFY47YJKlj/n2uYnbcVDv58P2G8iIoURow8guYYhPDd0W', 'User', 'default.png', 'Tetap', '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(4556706561887813, 5459673046986625, 'Dimaz Cengkir Pratama S.IP', 'Anak', 'Perempuan', 'Islam', 'Palangka Raya', '1986-09-30', 22, 'Cerai Mati', 'SD', 'Wiraswasta', 'uwais.aisyah@yahoo.co.id', NULL, '$2y$10$leWq2r9TsPQGjIGmKrSaFeOLrywnKcIwVhEv5X4IDeuMEDSyUdQiu', 'User', 'default.png', 'Pindahan', '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(4716165457094751, 5152545553366278, 'Maimunah Palastri', 'Kepala Keluarga', 'Perempuan', 'Islam', 'Surabaya', '2020-09-13', 23, 'Cerai Hidup', 'D1', 'Wiraswasta', 'luwar43@yahoo.com', NULL, '$2y$10$a1/JyOc7Ba74K1/46eVHMei3lLMQh9MBab4/Uun18CTjs8OP4kkdW', 'User', 'default.png', 'Tetap', '2023-07-13 03:39:52', '2023-07-13 03:39:52', NULL),
(4716198647344695, 5352394835500364, 'Danang Widodo S.H.', 'Anak', 'Perempuan', 'Islam', 'Administrasi Jakarta Selatan', '1982-02-08', 58, 'Belum Kawin', 'D3', 'Wiraswasta', 'laila45@nashiruddin.co', NULL, '$2y$10$3cJmBlb6W6M.VlYi2OIfdutVxXpMWUh2FJWa50eXSrzWDHTTP4LdW', 'User', 'default.png', 'Sementara', '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(4716226036973665, 4532453265330, 'Vivi Diah Pudjiastuti', 'Anak', 'Perempuan', 'Islam', 'Dumai', '1992-08-20', 45, 'Belum Kawin', 'D1', 'Wiraswasta', 'rosman.yolanda@haryanti.tv', NULL, '$2y$10$bAXKrvzoJQrk7h6/lgrRbO1fe./jaazGJgrw2iq3jWG9tRHBvrB/W', 'User', 'default.png', 'Tetap', '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(4716454593729233, 4716454593723433, 'Iwan Suryaningrat', 'Kepala Keluarga', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'virman@gmail.com', '088888888888', '$2y$10$Aa/biOZQQ2E8cwFRYKqC0.d0.3BMtsFNnZFRjlugFI5KWiQJ3dBqa', 'User', 'default.png', 'Tetap', '2023-08-09 23:31:53', '2023-08-09 23:31:53', NULL),
(4716454599739233, 5566468947251405, 'Surya', '', 'Laki-laki', 'Islam', 'Grobogan', '2010-10-10', 13, 'Belum Kawin', 'SD', 'Programmer', 'emin@gmail.com', '088765432190', '$2y$10$a92u0Ri296ZevoLCNqe9XOuXSFxBaOy2HRMU7WktPoAJNY7sRBp7m', 'User', 'default.png', 'Tetap', '2023-08-08 01:34:28', '2023-08-08 01:34:28', NULL),
(4716455593739233, 4716455663739233, 'iwan', 'Kepala Keluarga', 'Perempuan', 'Islam', 'Grobogan', '2023-08-09', 0, 'Belum Kawin', 'S1', 'Programmer', 'iwansuryaningrat@gmail.com', '088802851811', '$2y$10$/YKiumn64wBapc4Qj0LIZ.CfzPXWzHOXv36jq1GfG1sUh4SVpr2LG', 'User', 'default.png', 'Tetap', '2023-08-09 23:45:52', '2023-08-09 23:45:52', NULL),
(4716584060670569, 5529607779838435, 'Jaka Galiono Widodo S.Ked', 'Anak', 'Perempuan', 'Islam', 'Mataram', '1971-11-15', 26, 'Cerai Mati', 'SMA', 'Wiraswasta', 'palastri.marsudi@permadi.name', NULL, '$2y$10$8PNAZ62Xae7Llt6bgUC0MOYIqvuBKA1neOSOHLtj8mOBWEpVZFXku', 'User', 'default.png', 'Sementara', '2023-07-19 21:00:17', '2023-07-19 21:00:17', NULL),
(4716811988996184, 5143303810938196, 'Eva Cornelia Purwanti S.Ked', 'Anak', 'Laki-laki', 'Islam', 'Sibolga', '2010-08-21', 99, 'Cerai Hidup', 'D3', 'Wiraswasta', 'safina32@pranowo.ac.id', NULL, '$2y$10$uKOrQgLxALLNcFseafvEteIhr3Nh.2hsMZ.jFVs/6oLu4mCqGnt8u', 'User', 'default.png', 'Pendatang', '2023-07-19 21:00:59', '2023-07-19 21:00:59', NULL),
(4929393893175256, 343237716884964, 'Lalita Susanti S.IP', 'Anak', 'Laki-laki', 'Islam', 'Jayapura', '2020-11-14', 43, 'Cerai Hidup', 'SMA', 'Wiraswasta', 'xfirmansyah@yahoo.co.id', NULL, '$2y$10$f0GZbD.T448fpiC3xsfm0ebKZ90aw2SF81dEDzd8EIhcbpy.wxrbK', 'User', 'default.png', 'Pindahan', '2023-07-19 21:00:59', '2023-07-19 21:00:59', NULL),
(4929780230464726, 4485400026802, 'Karya Simanjuntak', 'Anak', 'Perempuan', 'Islam', 'Gunungsitoli', '1991-07-02', 22, 'Belum Kawin', 'D2', 'Wiraswasta', 'salimah.wulandari@yahoo.co.id', NULL, '$2y$10$hIGG1.POVV2M0vaXchkiyOcpHwkRTXHvLITtbE.ea5FHwOD1mTkOq', 'User', 'default.png', 'Pindahan', '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(5106977671461169, 5183460709493856, 'Zamira Nasyidah', 'Anak', 'Laki-laki', 'Islam', 'Batam', '1979-02-15', 21, 'Cerai Hidup', 'D2', 'Wiraswasta', 'pangestu.uda@dabukke.desa.id', NULL, '$2y$10$osuuoIV4x/DlUnGlnoHik.7x9hzP2pjl4d.Lw1JqQmBbWwy9Hbj.u', 'User', 'default.png', 'Tetap', '2023-07-13 03:39:51', '2023-07-13 03:39:51', NULL),
(5117574838856170, 5256897753012367, 'Maya Puspasari', 'Anak', 'Laki-laki', 'Islam', 'Pasuruan', '2001-03-20', 34, 'Kawin', 'D4', 'Wiraswasta', 'cemani01@napitupulu.or.id', NULL, '$2y$10$lfkMMDZKAd/0.xxwupPVJuwhIeBMyVR1LY78Bhrv2ipbubnvrWiaK', 'User', 'default.png', 'Tetap', '2023-07-13 03:39:52', '2023-07-13 03:39:52', NULL),
(5119358280258889, 5276328025343501, 'Tami Purwanti', 'Anak', 'Laki-laki', 'Islam', 'Banjar', '1998-10-31', 93, 'Cerai Mati', 'D3', 'Wiraswasta', 'fhariyah@permata.mil.id', NULL, '$2y$10$JK3OjXwBhHWIuwLIDq25QOft4.NJAi2M06oNxpA5xDoh6BxPetzOK', 'User', 'default.png', 'Tetap', '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(5122367213686244, 4916456916349425, 'Kayla Ina Palastri M.Ak', 'Anak', 'Laki-laki', 'Islam', 'Sibolga', '2001-09-02', 72, 'Cerai Hidup', 'D2', 'Wiraswasta', 'nadine.jailani@gmail.com', NULL, '$2y$10$LGs4kaScmx1DgRQMWJcrd.cQOeDfnoiF7AB2KfGfRYVmND5LslWsu', 'User', 'default.png', 'Sementara', '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(5140434750655335, 6011531734428483, 'Gangsar Najmudin', 'Istri', 'Perempuan', 'Islam', 'Palembang', '2020-08-26', 23, 'Cerai Mati', 'SMP', 'Wiraswasta', 'elma.latupono@gmail.com', NULL, '$2y$10$cn3I/qXDS/e.oX6hf5Hf5uSvzr3okaIJhzLmJQnv01NTfydLLCE9K', 'User', 'default.png', 'Tetap', '2023-07-19 21:00:54', '2023-07-19 21:00:54', NULL),
(5149790131606797, 5174457077436955, 'Ghani Suwarno', 'Istri', 'Laki-laki', 'Islam', 'Kendari', '1999-12-19', 94, 'Kawin', 'S3', 'Wiraswasta', 'febi.firmansyah@gmail.com', NULL, '$2y$10$SSPq0qrAiBKrMN5okC2LzO8Com1Nry9UfAkvsDSKolfMFCc5cFIT6', 'User', 'default.png', 'Pindahan', '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(5163291082861771, 4778023352204667, 'Lukman Najmudin S.Farm', 'Anak', 'Laki-laki', 'Islam', 'Lhokseumawe', '1972-01-07', 73, 'Cerai Mati', 'D2', 'Wiraswasta', 'ibrahim.lailasari@farida.go.id', NULL, '$2y$10$GXZXdLUQl3e888kgPWm3OuDEXlSFrQiH7F1KprlDeOMlXvNjrN/LO', 'User', 'default.png', 'Pendatang', '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(5166431996824203, 374396648396638, 'Hafshah Nasyidah S.IP', 'Kepala Keluarga', 'Laki-laki', 'Islam', 'Sibolga', '1976-08-28', 28, 'Belum Kawin', 'SMA', 'Wiraswasta', 'karen86@prabowo.co', NULL, '$2y$10$2Q2iC3yLIgqO9dBbmpv65ukH6eA2Ad1qlD47qnaQCnETqYbPB3TnW', 'User', 'default.png', 'Pendatang', '2023-07-19 21:00:59', '2023-07-19 21:00:59', NULL),
(5167693966639171, 5300077074743471, 'Maida Mandasari', 'Istri', 'Laki-laki', 'Islam', 'Tasikmalaya', '1996-08-19', 89, 'Kawin', 'D4', 'Wiraswasta', 'byulianti@gmail.com', NULL, '$2y$10$gLhEwfkA0Pw59kn.a7MFneyCS9967dRJAzVuBhsXrUzkqZt.bRSiy', 'User', 'default.png', 'Pendatang', '2023-07-19 21:00:59', '2023-07-19 21:00:59', NULL),
(5183277333653998, 4539806637400427, 'Keisha Paramita Hassanah', 'Istri', 'Laki-laki', 'Islam', 'Lhokseumawe', '1999-03-19', 35, 'Cerai Mati', 'D3', 'Wiraswasta', 'rini29@gmail.co.id', NULL, '$2y$10$EX6E5hp7gpH6J2LySBeo6OP3ySihMeF4ArZr1UuuyaiIhmXA9Nmbu', 'User', 'default.png', 'Pindahan', '2023-07-19 21:00:59', '2023-07-19 21:00:59', NULL),
(5188556655492746, 5105703371759970, 'Kambali Galak Utama', 'Anak', 'Perempuan', 'Islam', 'Madiun', '2021-07-30', 50, 'Belum Kawin', 'SMA', 'Wiraswasta', 'hsalahudin@uyainah.name', NULL, '$2y$10$2617CtalEky9GRsI7Da40.uaMJghmhpaACsE3vice8dLODVESNbgm', 'User', 'default.png', 'Sementara', '2023-07-19 21:00:55', '2023-07-19 21:00:55', NULL),
(5198629439424612, 6011785081052946, 'Budi Gangsar Nainggolan S.E.', 'Kepala Keluarga', 'Laki-laki', 'Islam', 'Palembang', '1987-08-14', 64, 'Cerai Hidup', 'SMP', 'Wiraswasta', 'najmudin.jati@wasita.biz.id', NULL, '$2y$10$n/NtVO5VHVucMnq8pd5XleX0URbbw4Foobp3z1orBoFs7Qef/3UJW', 'User', 'default.png', 'Pindahan', '2023-07-19 21:00:59', '2023-07-19 21:00:59', NULL),
(5228858183584073, 4556063256942, 'Rini Safitri S.I.Kom', 'Istri', 'Laki-laki', 'Islam', 'Administrasi Jakarta Utara', '2013-01-02', 85, 'Cerai Mati', 'D1', 'Wiraswasta', 'wani62@gmail.co.id', NULL, '$2y$10$ZRq.1aaGLn5deDrjndQvpeOsjRscY8MhRGrK8uPrw1oeCi622b/.u', 'User', 'default.png', 'Tetap', '2023-07-19 21:00:50', '2023-07-19 21:00:50', NULL),
(5232738574820498, 4485922867436, 'Mursita Budiyanto', 'Anak', 'Perempuan', 'Islam', 'Tebing Tinggi', '1978-07-02', 50, 'Cerai Mati', 'SD', 'Wiraswasta', 'fwacana@yahoo.co.id', NULL, '$2y$10$bTF84m1iq7uUiz5M7ToLteh4.zO4BSaVZe86HLFavrWR2g/R5yfSi', 'User', 'default.png', 'Tetap', '2023-07-13 03:39:51', '2023-07-13 03:39:51', NULL),
(5239349562977002, 4485045663944, 'Tantri Agustina M.Ak', 'Istri', 'Laki-laki', 'Islam', 'Administrasi Jakarta Timur', '1997-03-23', 44, 'Kawin', 'D1', 'Wiraswasta', 'indah53@zulaika.biz.id', NULL, '$2y$10$ME6b79/ik8oAxy3PGFua/eNRToT/NxTQHm/YtlMuJ9CrDtHm1Z8IO', 'User', 'default.png', 'Pindahan', '2023-07-19 21:00:19', '2023-07-19 21:00:19', NULL),
(5244129854302314, 5222788680717239, 'Agnes Nuraini', 'Kepala Keluarga', 'Perempuan', 'Islam', 'Bandar Lampung', '1993-11-19', 66, 'Belum Kawin', 'SD', 'Wiraswasta', 'jatmiko.sudiati@astuti.name', NULL, '$2y$10$ycsw6SkX47ZTIi6KKU8xf.8HtCNpsf40Lb6g0S5IAK6M6Vq5wsoDm', 'User', 'default.png', 'Sementara', '2023-07-19 21:00:17', '2023-07-19 21:00:17', NULL),
(5259374304298421, 4929799592823832, 'Pia Palastri', 'Istri', 'Perempuan', 'Islam', 'Lhokseumawe', '1970-05-14', 22, 'Cerai Hidup', 'S3', 'Wiraswasta', 'vhalimah@yulianti.tv', NULL, '$2y$10$ZxzdQ4tvTTOrNQukwkpSSOYRz74IDCEw2u8R3emjH8FIHVqZYSj/a', 'User', 'default.png', 'Pendatang', '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(5263795061282865, 5292681563877128, 'Ayu Wulan Fujiati', 'Kepala Keluarga', 'Laki-laki', 'Islam', 'Administrasi Jakarta Pusat', '2004-06-22', 17, 'Kawin', 'S2', 'Wiraswasta', 'jsirait@novitasari.my.id', NULL, '$2y$10$eDDTmo78VTXrqLWy/Tans.fIR8Nu6be/uj/7ZhmcVUNw8FSX0TLdm', 'User', 'default.png', 'Tetap', '2023-07-19 21:00:58', '2023-07-19 21:00:58', NULL),
(5274546049146160, 5405797177197879, 'Novi Aryani', 'Kepala Keluarga', 'Perempuan', 'Islam', 'Tegal', '2016-05-07', 42, 'Belum Kawin', 'Tidak Sekolah', 'Wiraswasta', 'zizi62@gmail.co.id', NULL, '$2y$10$61x1vYz6iZ/91dCQryvCEeIA8I7DWgnU2AK83EXo2xrW8VzO9bxNS', 'User', 'default.png', 'Pindahan', '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(5276638314180780, 4485841887956160, 'Jamil Pratama S.I.Kom', 'Istri', 'Laki-laki', 'Islam', 'Bau-Bau', '2011-12-08', 29, 'Cerai Hidup', 'S3', 'Wiraswasta', 'yuliana60@yahoo.com', NULL, '$2y$10$de9O6ix8mVUwOtxKvJv.4ekNToAEBdDr.rZgueNtjYD/Cpk/v3voq', 'User', 'default.png', 'Pendatang', '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(5281226408281202, 345228053000478, 'Usyi Zulaika', 'Istri', 'Laki-laki', 'Islam', 'Kediri', '2014-06-23', 92, 'Belum Kawin', 'S2', 'Wiraswasta', 'pangestu.paris@yahoo.co.id', NULL, '$2y$10$L5FXbfrZAdZ3fvoWdtd/YeJPl0YWfJ6UQEjYNKYjM/BdZZ3Gna/iu', 'User', 'default.png', 'Pindahan', '2023-07-19 21:00:52', '2023-07-19 21:00:52', NULL),
(5282976529788142, 5262966137502385, 'Artawan Maryadi S.Kom', 'Istri', 'Laki-laki', 'Islam', 'Bengkulu', '2008-04-08', 85, 'Belum Kawin', 'D4', 'Wiraswasta', 'wijaya.reza@haryanto.web.id', NULL, '$2y$10$gJZCntO4OXc4AXfwWc8waey/Cq84/PXBywUXtGCwR4hRVXIrwmIIm', 'User', 'default.png', 'Tetap', '2023-07-13 03:39:52', '2023-07-13 03:39:52', NULL),
(5289900585965991, 5179383230095782, 'Karen Hariyah S.Sos', 'Istri', 'Perempuan', 'Islam', 'Batam', '1970-05-12', 56, 'Cerai Hidup', 'D4', 'Wiraswasta', 'bwastuti@yahoo.co.id', NULL, '$2y$10$WNaRCSwwbMH3iXOvU2li5Ok4bKCU0XOn0FFitK98TFUZtdmGOqsCe', 'User', 'default.png', 'Sementara', '2023-07-19 21:00:58', '2023-07-19 21:00:58', NULL),
(5296896167411530, 4916532433821, 'Bakti Najmudin M.Kom.', 'Kepala Keluarga', 'Laki-laki', 'Islam', 'Cimahi', '2003-08-15', 7, 'Kawin', 'SMP', 'Wiraswasta', 'ramadan.wulan@manullang.my.id', NULL, '$2y$10$LR1wkPj/UXI6JwTE2SCkRus/6rhFSIoUgPaD53TBBPFU7GbHPgbam', 'User', 'default.png', 'Sementara', '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(5298073299076502, 5519721443488949, 'Leo Wasita', 'Anak', 'Laki-laki', 'Islam', 'Tebing Tinggi', '2016-03-04', 64, 'Kawin', 'S1', 'Wiraswasta', 'wsihotang@salahudin.name', NULL, '$2y$10$YMN6XiWDVGM6ztrhbjsYSOgarWHW4QjbbluPzuLaQqWAj6/7/JJF.', 'User', 'default.png', 'Sementara', '2023-07-19 21:00:54', '2023-07-19 21:00:54', NULL),
(5301037777747541, 5111856290372952, 'Titi Farida S.IP', 'Kepala Keluarga', 'Laki-laki', 'Islam', 'Madiun', '2022-09-30', 99, 'Cerai Mati', 'Tidak Sekolah', 'Wiraswasta', 'emaulana@yahoo.com', NULL, '$2y$10$3x2fm/miwkpkyh9Jt4X76ufiRy6Lxp1MjPgESXq8ZeU0HrEzh3zR6', 'User', 'default.png', 'Tetap', '2023-07-13 03:39:51', '2023-07-13 03:39:51', NULL),
(5307909511625684, 4539020686492, 'Silvia Suartini', 'Anak', 'Perempuan', 'Islam', 'Semarang', '1986-04-16', 81, 'Cerai Hidup', 'S1', 'Wiraswasta', 'wsinaga@utami.ac.id', NULL, '$2y$10$h4yqh35ygBkQ7UjTg7qGaemu.iN6K4IDts925nseYBBrMy5Z8T6sy', 'User', 'default.png', 'Tetap', '2023-07-13 03:39:52', '2023-07-13 03:39:52', NULL),
(5309088045370147, 6011742897660735, 'Ratih Mulyani', 'Istri', 'Perempuan', 'Islam', 'Bau-Bau', '2020-08-28', 56, 'Belum Kawin', 'D2', 'Wiraswasta', 'teguh17@gmail.co.id', NULL, '$2y$10$/KVZ.3T5LcUrSsnQfucKJ.6SndBPGWLlRNJEmzOjmNmzjdOfKc2tW', 'User', 'default.png', 'Sementara', '2023-07-19 21:00:54', '2023-07-19 21:00:54', NULL),
(5319695330298458, 4539908019454350, 'Galang Wacana S.IP', 'Kepala Keluarga', 'Laki-laki', 'Islam', 'Sungai Penuh', '2008-10-10', 54, 'Kawin', 'D3', 'Wiraswasta', 'maheswara.titi@anggriawan.or.id', NULL, '$2y$10$mxfuhwEAIA1xxzj0UWIwR.8x/debwW7pyVgqwS5xJCuH3buvfEEdS', 'User', 'default.png', 'Tetap', '2023-07-19 21:00:58', '2023-07-19 21:00:58', NULL),
(5333757021114170, 5403448905640358, 'Muhammad Prabowo', 'Kepala Keluarga', 'Laki-laki', 'Islam', 'Pematangsiantar', '1978-12-18', 33, 'Kawin', 'D1', 'Wiraswasta', 'jagapati.nainggolan@gmail.co.id', NULL, '$2y$10$WUzwPPC0euWWtsBKtF824O5rv3uKOu8ejM2THFdScXNpSokeNUhzq', 'User', 'default.png', 'Tetap', '2023-07-13 03:39:51', '2023-07-13 03:39:51', NULL),
(5336414080031351, 6011551604100004, 'Jagapati Kurniawan S.I.Kom', 'Anak', 'Perempuan', 'Islam', 'Tebing Tinggi', '1971-03-16', 100, 'Cerai Hidup', 'SMA', 'Wiraswasta', 'waluyo35@yahoo.co.id', NULL, '$2y$10$0hjGRBnt5GP6A15a58eXLue71IQuJuS6gCDXUZK3OT8/AaHT0SMgm', 'User', 'default.png', 'Tetap', '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(5344483478148531, 5180833369684399, 'Kacung Radit Kusumo', 'Anak', 'Perempuan', 'Islam', 'Solok', '2015-01-01', 20, 'Cerai Mati', 'D2', 'Wiraswasta', 'hrahimah@susanti.asia', NULL, '$2y$10$.hY4XKIOPbnPzCm/dgnKJuWljGRAOXAcFKUs3O3eVp4O1DMBdWzXS', 'User', 'default.png', 'Pendatang', '2023-07-19 21:00:59', '2023-07-19 21:00:59', NULL),
(5371214204422924, 4539188534290361, 'Tira Hariyah', 'Anak', 'Perempuan', 'Islam', 'Depok', '1974-06-28', 93, 'Cerai Hidup', 'D2', 'Wiraswasta', 'nuraini.ganjaran@gmail.com', NULL, '$2y$10$Nhnmda3qTKAb95CibE9nZOeRIIya.5.WbdeiL0QKZI6D7jvQJBTSK', 'User', 'default.png', 'Sementara', '2023-07-19 21:00:53', '2023-07-19 21:00:53', NULL),
(5385294576988011, 5155656632719143, 'Ira Haryanti', 'Istri', 'Perempuan', 'Islam', 'Depok', '1988-04-23', 57, 'Cerai Hidup', 'Tidak Sekolah', 'Wiraswasta', 'cengkal39@namaga.asia', NULL, '$2y$10$NcvxnVTHvrVT/EM/oGbT5eQ.9dDbuHkJUA0HDMS4zupho1Z1qDkRC', 'User', 'default.png', 'Pindahan', '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(5392055901930973, 6011585140756325, 'Patricia Cici Astuti M.Farm', 'Istri', 'Laki-laki', 'Islam', 'Pontianak', '1997-12-26', 47, 'Belum Kawin', 'S1', 'Wiraswasta', 'unugroho@gmail.com', NULL, '$2y$10$zcQP/fdrlGVRisFxNaysQ.XJ1I6xTEiVsi.sSPcB5ejWQFWfnNYMm', 'User', 'default.png', 'Tetap', '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(5395470562733938, 5447589971940517, 'Karsana Mandala', 'Anak', 'Laki-laki', 'Islam', 'Pekanbaru', '1989-07-17', 13, 'Kawin', 'D4', 'Wiraswasta', 'hartati.dalima@sihombing.my.id', NULL, '$2y$10$R.YQ.l9wO1nr8n9Z4FGPFOX7TtEIQ2LxGh8s9L5Kh7MUwZsOmZQ8S', 'User', 'default.png', 'Pindahan', '2023-07-19 21:00:54', '2023-07-19 21:00:54', NULL),
(5398259118614396, 4409566400643, 'Fathonah Suartini', 'Istri', 'Perempuan', 'Islam', 'Administrasi Jakarta Selatan', '1999-05-28', 10, 'Kawin', 'S2', 'Wiraswasta', 'oputra@gmail.com', NULL, '$2y$10$Vk253/QWGEFlA4raCIB5xO1k/KDEh9fNlhbMzpwpFJ/do4kNgDKyq', 'User', 'default.png', 'Sementara', '2023-07-19 21:00:53', '2023-07-19 21:00:53', NULL),
(5399809122101654, 4532959287203315, 'Agnes Salimah Riyanti M.Kom.', 'Kepala Keluarga', 'Laki-laki', 'Islam', 'Kotamobagu', '1996-03-14', 51, 'Cerai Mati', 'D3', 'Wiraswasta', 'yani.sihombing@yahoo.co.id', NULL, '$2y$10$T8ii5d1t5IOqS42smTmuy.iH7eAUmDKE2WZKl/OZf56WYb.otEabW', 'User', 'default.png', 'Tetap', '2023-07-13 03:39:52', '2023-07-13 03:39:52', NULL),
(5402289136546340, 4716679133899, 'Asmianto Jabal Sihombing S.Ked', 'Kepala Keluarga', 'Perempuan', 'Islam', 'Yogyakarta', '2020-10-20', 57, 'Belum Kawin', 'D3', 'Wiraswasta', 'indah64@gmail.co.id', NULL, '$2y$10$AZoUWUW8cj6UIct05Oan/evTtcGLPpoUqsqDSA.AMNDuiFKs58s5S', 'User', 'default.png', 'Tetap', '2023-07-19 21:00:54', '2023-07-19 21:00:54', NULL),
(5404020245429872, 5471778177600988, 'Ayu Lestari', 'Kepala Keluarga', 'Perempuan', 'Islam', 'Sibolga', '1998-11-29', 83, 'Cerai Hidup', 'SMA', 'Wiraswasta', 'kawaya81@kuswoyo.ac.id', NULL, '$2y$10$8S2B29txk66q5mtF79aLE.8HzV3JHsblGUD8qHO5mAy.GvUgAV2HC', 'User', 'default.png', 'Pendatang', '2023-07-19 21:00:17', '2023-07-19 21:00:17', NULL),
(5406052909061905, 6011534334599398, 'Dalima Puspa Puspita', 'Istri', 'Perempuan', 'Islam', 'Tasikmalaya', '2015-08-31', 74, 'Belum Kawin', 'SMP', 'Wiraswasta', 'rajasa.shania@puspasari.ac.id', NULL, '$2y$10$yyTvsuwVeSyiaADD9GgjtueoEVNDuJFI2whDuCGriXbdCLnn71Wwa', 'User', 'default.png', 'Tetap', '2023-07-13 03:39:51', '2023-07-13 03:39:51', NULL),
(5415028268597936, 6011059763493954, 'Latif Mursita Utama', 'Anak', 'Perempuan', 'Islam', 'Cimahi', '2010-11-14', 66, 'Kawin', 'Tidak Sekolah', 'Wiraswasta', 'dinda17@usamah.biz', NULL, '$2y$10$Kfz0G.hfXKEzNxrOXD1HduXRHUCOEOwKxUMSyI1kfuLpTbt.sN7xO', 'User', 'default.png', 'Sementara', '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(5419079758561912, 4485688677995, 'Ira Kuswandari M.Ak', 'Istri', 'Perempuan', 'Islam', 'Pangkal Pinang', '1992-06-11', 39, 'Cerai Hidup', 'S2', 'Wiraswasta', 'kemba75@santoso.sch.id', NULL, '$2y$10$zzrjc0DlZi0CHb85x/1Q4O1YAXCvv9uspdfcbeHM3XUbKBjuJL7rK', 'User', 'default.png', 'Sementara', '2023-07-19 21:00:17', '2023-07-19 21:00:17', NULL),
(5419959722521557, 5528651211914702, 'Salman Pradipta', 'Istri', 'Laki-laki', 'Islam', 'Singkawang', '2006-04-27', 51, 'Cerai Hidup', 'SMA', 'Wiraswasta', 'elma.sihombing@yahoo.com', NULL, '$2y$10$84tLHqBCpoZI.MrIMaHc4.FQNOoTrjFa1Zw6PdosFAZRgLmDW2Q2.', 'User', 'default.png', 'Pindahan', '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(5428348628803559, 6011063545589022, 'Radit Anggriawan', 'Istri', 'Perempuan', 'Islam', 'Sukabumi', '1977-11-22', 80, 'Cerai Hidup', 'Tidak Sekolah', 'Wiraswasta', 'malika.puspita@rajasa.ac.id', NULL, '$2y$10$nLGeOHjMzhvC4RbVF7drcOzxb5jZ15JBP6YwwNYSJ29Onp7mv19ke', 'User', 'default.png', 'Tetap', '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(5440570372343250, 6011103555551452, 'Hesti Paulin Nasyiah', 'Kepala Keluarga', 'Perempuan', 'Islam', 'Administrasi Jakarta Selatan', '1990-08-11', 66, 'Kawin', 'D1', 'Wiraswasta', 'diah.prayoga@setiawan.co', NULL, '$2y$10$4.sJLOGKqPJTTf4f9JJmLO0dXJ.9T7FFNGgytqpenFmpk1HuznR6G', 'User', 'default.png', 'Tetap', '2023-07-19 21:00:59', '2023-07-19 21:00:59', NULL),
(5459254538411982, 4105210352756, 'Restu Nasyidah S.I.Kom', 'Anak', 'Perempuan', 'Islam', 'Lhokseumawe', '2010-10-24', 1, 'Belum Kawin', 'D2', 'Wiraswasta', 'yuniar.gasti@gmail.com', NULL, '$2y$10$CqXfJ0DceoN0IVo.SgjbJeLMtCuC1Qu1OAg/o04akM8G5XxG4XIGS', 'User', 'default.png', 'Pindahan', '2023-07-19 21:00:59', '2023-07-19 21:00:59', NULL),
(5479238552421999, 6011119544430962, 'Laila Pratiwi', 'Anak', 'Laki-laki', 'Islam', 'Sawahlunto', '2020-12-30', 97, 'Kawin', 'D2', 'Wiraswasta', 'wirda80@gmail.com', NULL, '$2y$10$nHLNFh/opQ9NWqysPVrV8ebkfkO516eZVxt62X1oRA9E0tFy0nCRu', 'User', 'default.png', 'Pindahan', '2023-07-19 21:00:55', '2023-07-19 21:00:55', NULL),
(5488933597626029, 5480002714880394, 'Kiandra Cornelia Usada', 'Istri', 'Perempuan', 'Islam', 'Bogor', '1982-08-01', 68, 'Cerai Hidup', 'D4', 'Wiraswasta', 'mandasari.dewi@yahoo.co.id', NULL, '$2y$10$f7tmjhVErQ7rEaJFjRsJSOUx0BgunQMarcVfQM2tih2z.TNbnLFfW', 'User', 'default.png', 'Tetap', '2023-07-19 21:00:50', '2023-07-19 21:00:50', NULL),
(5490177444467528, 5176887078515084, 'Dodo Hidayanto', 'Istri', 'Perempuan', 'Islam', 'Pasuruan', '1989-04-18', 56, 'Belum Kawin', 'SMP', 'Wiraswasta', 'budi.purwanti@gmail.com', NULL, '$2y$10$sdpMMttgKcsEeU1hJofQQOd/FsBQ3n32J.zSzOrqnSiK3Uklvlm/m', 'User', 'default.png', 'Pindahan', '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(5494274883024005, 4929585323120, 'Danuja Marbun', 'Istri', 'Perempuan', 'Islam', 'Probolinggo', '2001-11-02', 42, 'Cerai Mati', 'S3', 'Wiraswasta', 'cnashiruddin@gmail.com', NULL, '$2y$10$cxW0RSXSEgPMarXbkxWvAuCWCJR/wyRr0GmMoyFypzw4L/cDB3w/6', 'User', 'default.png', 'Tetap', '2023-07-19 21:00:52', '2023-07-19 21:00:52', NULL),
(5498966344632310, 4716591121725, 'Ajiman Iswahyudi', 'Istri', 'Laki-laki', 'Islam', 'Pekalongan', '1974-05-07', 65, 'Cerai Hidup', 'D1', 'Wiraswasta', 'pertiwi.ismail@yahoo.co.id', NULL, '$2y$10$JK6jZrxGzRZSiAaVYp2TlO9AupJYz.9u5W2VSi46FE4UXmiWZo84m', 'User', 'default.png', 'Pindahan', '2023-07-19 21:00:59', '2023-07-19 21:00:59', NULL),
(5539141455796574, 5382807232765847, 'Tomi Najmudin M.M.', 'Anak', 'Perempuan', 'Islam', 'Palangka Raya', '1994-11-13', 27, 'Cerai Hidup', 'SD', 'Wiraswasta', 'okta.uyainah@wahyudin.desa.id', NULL, '$2y$10$DhQXfCQ6ii8jLw1DzOSrX.XDjKr3vNZAnzmwLm3ywBADpjHTmQyUu', 'User', 'default.png', 'Sementara', '2023-07-19 21:00:53', '2023-07-19 21:00:53', NULL),
(5560098321531845, 5175409053823093, 'Banara Latupono', 'Istri', 'Laki-laki', 'Islam', 'Magelang', '2005-01-05', 100, 'Cerai Mati', 'D4', 'Wiraswasta', 'carla.prakasa@haryanti.in', NULL, '$2y$10$nJIFFoQBZRruI27y6Anbi.yZLzn5z1bn72zkE2Osb31fMy7JkqsWa', 'User', 'default.png', 'Tetap', '2023-07-19 21:00:56', '2023-07-19 21:00:56', NULL),
(5561386423195448, 6011603519412592, 'Lanjar Permadi', 'Anak', 'Perempuan', 'Islam', 'Sukabumi', '2005-02-25', 38, 'Kawin', 'S1', 'Wiraswasta', 'nasim94@agustina.web.id', NULL, '$2y$10$jiNBgN/hlLhQjHmGl5p5ceRUwijRGTCld.NslQtC2Hs2bfAVv1aKK', 'User', 'default.png', 'Pindahan', '2023-07-19 21:00:57', '2023-07-19 21:00:57', NULL),
(5563599415602761, 4716445255141, 'Harsana Januar M.TI.', 'Anak', 'Laki-laki', 'Islam', 'Sungai Penuh', '1970-05-14', 20, 'Kawin', 'SMP', 'Wiraswasta', 'mustofa68@yahoo.com', NULL, '$2y$10$LYelNQDqfCVP/hDqN6RxJuXzDAso0Z5K6r975NXFyNKiJI1Ma0Dmq', 'User', 'default.png', 'Pendatang', '2023-07-19 21:00:58', '2023-07-19 21:00:58', NULL),
(6011109492140614, 4556201638303275, 'Kiandra Kiandra Sudiati S.T.', 'Kepala Keluarga', 'Laki-laki', 'Islam', 'Tangerang Selatan', '2018-07-04', 42, 'Kawin', 'S2', 'Wiraswasta', 'latupono.cici@gmail.co.id', NULL, '$2y$10$QlAPzdcbjAlaN64vY8Sl8Oik86hDLGsZtRaelBIGaAls/CmEmRO3K', 'User', 'default.png', 'Pendatang', '2023-07-19 21:00:53', '2023-07-19 21:00:53', NULL),
(6011178002339529, 5246780257746925, 'Rachel Prastuti', 'Istri', 'Perempuan', 'Islam', 'Tanjung Pinang', '1999-06-08', 31, 'Cerai Mati', 'D2', 'Wiraswasta', 'cinthia98@agustina.asia', NULL, '$2y$10$OKkYJxCxP3uwMPw/fOrj.Oi2fs/43IVceB1Sg8k2Bx2PC1vfZMC.O', 'User', 'default.png', 'Pendatang', '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(6011534609274990, 4024007170141, 'Yuliana Susanti', 'Kepala Keluarga', 'Perempuan', 'Islam', 'Serang', '2008-03-03', 14, 'Belum Kawin', 'SMA', 'Wiraswasta', 'gwidodo@yahoo.co.id', NULL, '$2y$10$gJqjRMQdyDwU0qtzzQn7JecQR4XQZ9gGYQGJ3BB16nx/w9Ng4BiGu', 'User', 'default.png', 'Pendatang', '2023-07-19 21:00:51', '2023-07-19 21:00:51', NULL),
(6011570871614646, 373953222492240, 'Setya Hutagalung', 'Istri', 'Laki-laki', 'Islam', 'Lubuklinggau', '2005-12-05', 91, 'Cerai Hidup', 'S1', 'Wiraswasta', 'zulfa64@yahoo.co.id', NULL, '$2y$10$70jnnt0yxGb2hYvTn/qKbOrurxuCzmJ63UFcFzMrLsmR8wj5mri0G', 'User', 'default.png', 'Tetap', '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(6011602995386924, 5482946562429969, 'Gandi Ardianto', 'Istri', 'Perempuan', 'Islam', 'Tidore Kepulauan', '2023-06-05', 72, 'Cerai Mati', 'S3', 'Wiraswasta', 'emin21@gmail.com', NULL, '$2y$10$iBUo9eTFZb4Rfw0DfDc0J.MKITo3S8PBNtImyxXUAHaWfBLh4PNVm', 'User', 'default.png', 'Pendatang', '2023-07-19 21:00:54', '2023-07-19 21:00:54', NULL),
(6011710378839466, 4556455636401222, 'Dinda Wulan Pertiwi', 'Anak', 'Perempuan', 'Islam', 'Parepare', '2020-06-12', 93, 'Kawin', 'SMA', 'Wiraswasta', 'fujiati.sabrina@pertiwi.biz.id', NULL, '$2y$10$2hfW/sTobfDvNlvRJgMPBO6aWt5EXqNNBsH3HpyAVkCePIe1yoYGO', 'User', 'default.png', 'Tetap', '2023-07-13 03:39:51', '2023-07-13 03:39:51', NULL),
(6011888609033651, 5406976581877958, 'Jaga Halim', 'Anak', 'Perempuan', 'Islam', 'Surakarta', '2010-07-01', 80, 'Kawin', 'Tidak Sekolah', 'Wiraswasta', 'nasrullah.widodo@yahoo.com', NULL, '$2y$10$JGJzX.0VpKIXD4ubxRmSMe6e0HnxUze50SlQRrTYpitfqBAswCFr2', 'User', 'default.png', 'Pendatang', '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(6011931144354909, 341874321581023, 'Rafid Nardi Thamrin M.Pd', 'Istri', 'Laki-laki', 'Islam', 'Balikpapan', '1970-04-03', 79, 'Belum Kawin', 'SD', 'Wiraswasta', 'titin71@gmail.com', NULL, '$2y$10$qp6rw2N3xOnYCET3feNhZOB5OiBeNRzDLTJnk9h9EIJNOQ/d/HTBG', 'User', 'default.png', 'Tetap', '2023-07-13 03:39:51', '2023-07-13 03:39:51', NULL),
(6011945130164650, 5518264477344515, 'Tina Halimah', 'Kepala Keluarga', 'Perempuan', 'Islam', 'Administrasi Jakarta Selatan', '1982-10-09', 50, 'Cerai Mati', 'D1', 'Wiraswasta', 'hafshah.widodo@pertiwi.info', NULL, '$2y$10$zTu3RKMi9FWBde8eRoOt8OFKBLUty0blJsPEH9kkdoTYZ.XsR614m', 'User', 'default.png', 'Sementara', '2023-07-19 21:00:18', '2023-07-19 21:00:18', NULL),
(8764783762849373, 5201913757893631, 'Susi', 'Istri', 'Laki-laki', 'Islam', 'Grobogan', '1997-07-09', 26, 'Kawin', 'S1', 'Ibu Rumah Tangga', 'emin@gmail.com', '088765432190', '$2y$10$R6qTlX33/HG2aaPoOs.Zt.5DFhBu6jb9FyQg/DIhslXCQOE6DC0fW', 'User', '1691516090_1975c740ec9353b40015.png', 'Tetap', '2023-08-09 00:34:50', '2023-08-09 00:34:50', NULL),
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
  ADD KEY `galeri` (`galeri_id`),
  ADD KEY `uploader` (`uploaded_by`);

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
  MODIFY `administrasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `foto_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `galeri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `pengumuman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  ADD CONSTRAINT `galeri` FOREIGN KEY (`galeri_id`) REFERENCES `galeri` (`galeri_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `uploader` FOREIGN KEY (`uploaded_by`) REFERENCES `users` (`nik`);

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
