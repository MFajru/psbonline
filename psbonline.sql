-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2021 at 06:16 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psbonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaransiswa`
--

CREATE TABLE `pendaftaransiswa` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(256) NOT NULL,
  `email` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(128) NOT NULL,
  `nisn` varchar(128) NOT NULL,
  `nik` varchar(128) NOT NULL,
  `tempat_lahir` varchar(256) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `reg_akta_lahir` varchar(128) NOT NULL,
  `agama` varchar(128) NOT NULL,
  `warga_negara` varchar(128) NOT NULL,
  `alamat_jalan` varchar(256) NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `dusun` varchar(128) NOT NULL,
  `kelurahan` varchar(128) NOT NULL,
  `kecamatan` varchar(128) NOT NULL,
  `kota` varchar(128) NOT NULL,
  `provinsi` varchar(128) NOT NULL,
  `kode_pos` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `nilai_matematika` int(3) NOT NULL,
  `nilai_binggris` int(3) NOT NULL,
  `gambar` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaransiswa`
--

INSERT INTO `pendaftaransiswa` (`id`, `nama_lengkap`, `email`, `jenis_kelamin`, `nisn`, `nik`, `tempat_lahir`, `tanggal_lahir`, `reg_akta_lahir`, `agama`, `warga_negara`, `alamat_jalan`, `rt`, `rw`, `dusun`, `kelurahan`, `kecamatan`, `kota`, `provinsi`, `kode_pos`, `status`, `nilai_matematika`, `nilai_binggris`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Fajru', 'fajru234@gmail.com', 'Laki-laki', '123456789', '8918301329147', 'Bandar Lampung', '2000-11-27', 'jaksidw-23218-asdjw-22', 'Islam', 'WNI', 'Jalan Oke', '002', '001', '-', 'Segala Mider', 'Tanjung Karang Barat', 'Bandar Lampung', 'Lampung', '35152', 'Tidak Diterima', 0, 0, '', '2021-06-26 00:00:00', '2021-06-27 10:41:11'),
(2, 'Pokemon', 'pokemon@pokemon.com', 'Perempuan', '1389138', '91801830198', 'Belanda', '1999-02-08', 'kkkk-889-iiwq-4567', 'Protestan', 'WNA', 'Jalan Purnawirawan', '002', '005', 'Sukadena', 'Margadadi', 'Kulo Asem', 'Rorongan', 'Jawa Timur', '77778', 'Cadangan', 0, 0, '', '2021-06-27 05:02:27', '2021-06-27 05:03:19'),
(3, 'test', 'test@test.com', 'Laki-laki', '21313132', '13123132', 'Bandar Lampung', '1999-08-27', 'uwqiwu23939', 'Islam', 'WNI', 'jalan test', '01', '002', '-', 'oke', 'oke', 'oke', 'oke', '36666', 'Diterima', 0, 0, '', '2021-06-27 10:40:15', '2021-06-27 10:41:15'),
(4, 'oke', 'oke@oke.com', 'Laki-laki', '12313', '3213', 'Bandar Lampung', '2118-02-22', 'ahjsuw-293-saj-213', 'Hindu', 'WNI', 'jalan oke', '8', '9', 'aaaa', 'bbbb', 'cccc', 'ddd', 'eee', '33333', 'Belum Diperiksa', 30, 30, '', '2021-06-27 10:50:55', '2021-06-27 10:50:55'),
(5, 'a', 'a@a.com', 'Laki-laki', '22', '22', 'Bandar Lampung', '2112-02-22', '2131jj', 'Islam', 'WNI', 'aaa', '82', '88', 'bbbbb', 'jjj', 'jjjj', 'kkk', 'kkk', '2222', 'Belum Diperiksa', 90, 0, 'lamp.png', '2021-06-27 11:04:43', '2021-06-27 11:04:43'),
(9, 'c', 'c@c.com', 'Laki-laki', '321', '321', 'adas', '0022-02-22', '223', 'Katolik', 'WNI', 'adas', '22', '22', 'ada', 'ada', 'adads', 'ada', 'ada', '22', 'Belum Diperiksa', 22, 22, 'pixar lamp_1.jpg', '2021-06-27 13:29:07', '2021-06-27 13:29:07'),
(10, 'd', 'd@d.com', 'Laki-laki', '231', '213', 'ad', '0002-02-22', 'ad', 'Protestan', 'WNI', 'adas', '2', '2', 'das', 'ada', 'asda', 'dda', 'dad', '22', 'Belum Diperiksa', 22, 22, 'lamp.png', '2021-06-28 00:50:57', '2021-06-28 00:50:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role` varchar(128) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', 'admin', 'admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Muhammad Fajru', 'fajru234@gmail.com', 'aju', 'pendaftar', '2021-06-26 00:00:00', '2021-06-26 00:00:00'),
(7, 'Pokemon', 'pokemon@pokemon.com', 'pokemon', 'pendaftar', '2021-06-26 10:18:16', '2021-06-26 10:18:16'),
(8, 'test', 'test@test.com', 'test', 'pendaftar', '2021-06-27 10:38:32', '2021-06-27 10:38:32'),
(9, 'oke', 'oke@oke.com', 'oke', 'pendaftar', '2021-06-27 10:42:38', '2021-06-27 10:42:38'),
(10, 'a', 'a@a.com', 'a', 'pendaftar', '2021-06-27 10:53:13', '2021-06-27 10:53:13'),
(11, 'c', 'c@c.com', 'c', 'pendaftar', '2021-06-27 11:08:56', '2021-06-27 11:08:56'),
(12, 'd', 'd@d.com', 'd', 'pendaftar', '2021-06-28 00:50:05', '2021-06-28 00:50:05'),
(13, 'Muhammad Rama', '91mfajru@gmail.com', 'aju', 'pendaftar', '2021-06-28 04:37:16', '2021-06-28 04:37:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftaransiswa`
--
ALTER TABLE `pendaftaransiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftaransiswa`
--
ALTER TABLE `pendaftaransiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
