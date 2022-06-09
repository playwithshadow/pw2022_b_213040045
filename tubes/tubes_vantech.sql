-- phpMyAdmin SQL Dump
-- version 5.2.1-dev+20220604.be7357420b
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 12:19 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_vantech`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(255) NOT NULL,
  `body_buku` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`id_buku`, `nama_buku`, `body_buku`, `gambar`, `id_kategori`) VALUES
(7, 'web ui design patterns', 'buku ini membahas secara lengkap beberapa aplikasi web yang terkenal serta website seperti amazon dan airbnb, menganalisa tampilan website mereka untuk melihat bagaimana dan mengapa mereka bisa bekerja dengan sukses.', '62a039947c7fe.png', 1),
(8, 'html uncover', 'buku html uncover berisi pembahasan tentang html mulai dari dasar hingga fitur terbaru dari html5. buku ini cocok untuk rekan-rekan yang baru pertama kali bersentuhan dengan html hingga yang sudah cukup paham tentang html tapi ingin mendalami html5.', '62a039bd69de3.jpg', 3),
(9, 'bootstrap 5 uncover', 'buku bootstrap 5 uncover ini kita akan membahas cara penggunaan bootstrap 5, mulai dari grid system yang menjadi fondasi paling penting, utility class, puluhan komponen bootstrap seperti navbar, list group, button, form, card, hingga carousel slider.', '62a039f412c98.jpg', 2),
(10, 'css uncover', 'buku css uncover ditujukan bagi rekan-rekan yang ingin mempelajari css mulai dari dasar hingga perkembangan terbaru css3.', '62a03a09d3dbd.jpg', 4),
(11, 'html desain build a website', 'banyak buku yang mengajarkan html menyerupai manual yang membosankan. untuk memudahkan anda untuk belajar, kami membuang yang tradisional template yang digunakan oleh penerbit dan didesain ulang buku ini dari awal.', '62a18011c94e8.jpg', 3),
(12, 'css note for professional', 'buku catatan css untuk profesional ini dikompilasi dari stack overflow dokumentasi, kontennya ditulis oleh orang-orang cantik di stack overflow. konten teks dirilis di bawah creative commons by-sa, lihat kredit di akhir dari buku ini yang berkontribusi pa', '62a180703b87b.png', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'webdesign'),
(2, 'bootstrap'),
(3, 'html'),
(4, 'css');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_level`
--

CREATE TABLE `tbl_level` (
  `id_level` int(11) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_level`
--

INSERT INTO `tbl_level` (`id_level`, `level`) VALUES
(1, 'admin'),
(2, 'anggota');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `nama`, `username`, `password`, `email`, `gambar`, `id_level`) VALUES
(7, 'anggota', 'anggota', '$2y$10$KWHXkcL91kom05oWJ6C99Of5z8rnmF6UTngSiGEvD56yYN65DuODS', 'anggota@gmail.com', '62a19ef938bc6.jpg', 2),
(27, 'admin', 'admin', '$2y$10$yJqaY6laiJgRG.UaMD0zoOQ6UbcleKjgNtm9fQWdubVvdUow7bZVy', 'admin@gmail.com', '62a1a596abd8c.jpg', 1),
(34, 'kevin', 'kevin', '$2y$10$txAPKryPzyF8Lxb3qaRExeo38U4muhfUPEiqBrl6lopIRB2soum3O', 'kevin.213040088@mail.unpas.ac.id', '629c9a5800295.jpg', 2),
(35, 'ammar', 'ammar', '$2y$10$tVVgOsEeV1RLB0OsUrcPqelcU6xlXZId78bLbVl.Hu5O0s/lBbeS2', 'ammar@gmail.com', '629c9a7062a82.jpg', 2),
(36, 'ardhi', 'ardhi', '$2y$10$bCGPMWkiIna9lH9r1a4yreyPBFko5o6c66xcVHr2WnXbSLxtdWG0m', 'ardhi.213040060@mail.unpas.ac.id', '629c9a8a5d535.jpg', 2),
(37, 'nanang', 'nanang', '$2y$10$cHH7C2OvUKRGNrue4MRx5OmBOnbPRinDYs9usLtcVM.ukqU8qbvgG', 'nanang@gmail.com', '629c9a9f9e1dd.jpg', 2),
(38, 'lala', 'lala', '$2y$10$02j3NiwqHKSe4fGJjl3NWexwljgZc.z7yR3DzlOhKkPDbn/PeEy4q', 'lala@gmail.com', '629c9aaed8673.png', 2),
(39, 'kipli', 'kipli', '$2y$10$rQ4zYx4cgXq3msFdW8sNR.gR.5FP5jr6cV.qUoc5ZTwip2WpWCH6u', 'kipli@gmail.com', 'nophoto.jpg', 2),
(40, 'tarjo', 'tarjo', '$2y$10$hzsdUl/rCypBIEDEY.Qkn.JphBjd/9uFBWawqR29ycAImukS4PAUq', 'tarjo@gmail.com', '62a1ad07f41d7.jpg', 1),
(41, 'pp', 'pp', '$2y$10$REAxAW1QWreiL/KUUoTeU.q21XQPwyMeYrTU3lrlJEvdvP5.0uvJm', 'p@sad', '62a1ad2f56a95.jpg', 2),
(42, 'nana', 'nana', '$2y$10$XafAa/O8fWmkM8VaKqdxleeXr01eo.14JViI6m5QGFHYLWviUM6G2', 'nana@gmail.com', '62a1ad25c0f01.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tbl_level`
--
ALTER TABLE `tbl_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_level` (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_level`
--
ALTER TABLE `tbl_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD CONSTRAINT `tbl_buku_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori` (`id_kategori`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD CONSTRAINT `tbl_login_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `tbl_level` (`id_level`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
