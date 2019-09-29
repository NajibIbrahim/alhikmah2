-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2019 at 08:48 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pondok`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(5) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `id_label` int(4) NOT NULL DEFAULT '0',
  `judul` varchar(100) NOT NULL,
  `isi` varchar(4000) NOT NULL,
  `gambar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `tanggal`, `id_label`, `judul`, `isi`, `gambar`) VALUES
(116, '2019-04-23', 2, 'Judul Kedua', 'ebfs', 'news2.jpg'),
(117, '2019-04-23', 1, 'Ketiga', 'fvsdax', 'news3.jpg'),
(120, '14-09-2019', 1, 'Judul', ' hjnm', 'haflah2.jpg'),
(123, '14-09-2019', 3, 'Judul Baru Ya', 'cfvgbhnj vd s ', 'masjid2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `no` int(5) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `judul` varchar(40) NOT NULL,
  `tag` varchar(30) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `label`
--

CREATE TABLE `label` (
  `id_label` int(11) NOT NULL,
  `ket` varchar(30) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `label`
--

INSERT INTO `label` (`id_label`, `ket`) VALUES
(1, 'Kegiatan Internal'),
(2, 'Kegiatan Eksternal'),
(3, 'Ilmu Agama');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(5) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
(2, 'Aku', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'User'),
(8, 'Achmad Najib Ibrahim', '130001', 'c17c0258253573f1bb1ff72942290595', 'User'),
(9, 'erna', 'erna', '950a4152c2b4aa3ad78bdd6b366cc179', 'User'),
(11, 'Bondan', '160001', 'd038525aa657fd736c8fabfa99610c2c', 'User'),
(12, 'aku ini', '111', '698d51a19d8a121ce581499d7b701668', 'User'),
(13, 'hiya', '11', 'e2c50ded5d3990bdabeb4b44c4411f18', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `no` int(4) NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `notelp` int(20) NOT NULL,
  `pesan` varchar(300) NOT NULL,
  `tanggal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`no`, `nama`, `email`, `notelp`, `pesan`, `tanggal`) VALUES
(12, 'Hanif', 'hanif@gmail.com', 98837362, 'Pesan apa ya enaknya', '2019-09-14 04:01:05'),
(15, 'hanif jdk', 'hanif@gmail.com', 5678, 'cdfvgbhnjm', '14-09-2019 04:25:39'),
(19, 'ggg', 'jdk@gmail.com', 66, 'hgjkl', '14-09-2019 | 17:57:18'),
(20, 'aa', 'jdk@gmail.com', 11, 'aaa', '14-09-2019  |  17:58:35');

-- --------------------------------------------------------

--
-- Table structure for table `santri`
--

CREATE TABLE `santri` (
  `id_no` int(5) NOT NULL,
  `nama_san` varchar(50) NOT NULL,
  `id_san` int(10) NOT NULL,
  `tempat_san` text NOT NULL,
  `tanggal_san` varchar(30) NOT NULL,
  `jkel_san` varchar(11) NOT NULL,
  `tahun_san` int(4) NOT NULL,
  `alamat_san` varchar(250) NOT NULL,
  `status_san` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `santri`
--

INSERT INTO `santri` (`id_no`, `nama_san`, `id_san`, `tempat_san`, `tanggal_san`, `jkel_san`, `tahun_san`, `alamat_san`, `status_san`) VALUES
(15, 'Najib Ibra', 1234, 'Semarang', '2004-01-01', 'Laki-laki', 2013, 'hhhhh', 'Aktif'),
(16, 'Ibrahimovic', 321, 'Grobogan', '2009-03-02', 'Laki-laki', 2011, 'evs vevreve', 'Aktif'),
(17, 'nama', 0, 'tempat', 'tanggal', 'jkel', 0, 'status', 'alamat'),
(18, 'Ahmad Faruq Maulana', 130002, 'Semarang', '03 Juni 1999', 'Laki-Laki', 2015, 'Boyong', 'Pengkol RT 2/VII, Ro'),
(19, 'Ahmad Nur Said', 130003, 'Demak', '04 Juni 1996', 'Laki-Laki', 2019, 'Boyong', 'Temuroso RT 4/VI, Gu'),
(20, 'nama', 0, 'tempat', 'tanggal', 'jkel', 0, 'alamat', 'status'),
(21, 'Aku', 130002, 'Semarang', '03 Juni 1999', 'Laki-Laki', 2015, 'Pengkol RT 2/VII, Rowosari, Tembalang, Semarang', 'Boyong'),
(22, 'Kamu', 130003, 'Demak', '04 Juni 1996', 'Laki-Laki', 2019, 'Temuroso RT 4/VI, Guntur, Demak', 'Boyong'),
(23, 'Aku', 130002, 'Semarang', '03 Juni 1999', 'Laki-Laki', 2015, 'Pengkol RT 2/VII, Rowosari, Tembalang, Semarang', 'Boyong'),
(24, 'Kamu', 130003, 'Demak', '04 Juni 1996', 'Laki-Laki', 2019, 'Temuroso RT 4/VI, Guntur, Demak', 'Boyong');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `no` int(5) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `gambar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`no`, `tanggal`, `judul`, `gambar`) VALUES
(56, '2019-04-08', 'tr', 'bg4.jpg'),
(59, '2019-04-11', 'l', 'bg5.jpg'),
(61, '14-09-2019', 'baru', 'sl3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `label`
--
ALTER TABLE `label`
  ADD PRIMARY KEY (`id_label`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `label`
--
ALTER TABLE `label`
  MODIFY `id_label` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `no` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `santri`
--
ALTER TABLE `santri`
  MODIFY `id_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
