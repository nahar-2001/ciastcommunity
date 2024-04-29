-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2024 at 06:48 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ciastcommunity`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `username` char(50) NOT NULL,
  `password` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(3, 'mpp', '$2y$10$PvGNh5BfPoi/bG.Jfy0GcOetwPLStGwLSRl4PnkJM0QnqU/XwX1Tm'),
(5, 'ketua warden', '$2y$10$knBPk207eTyOd6P/vH47XuluLEbxSy5m5dK.p7pX5zcu1fJ5AgH8W');

-- --------------------------------------------------------

--
-- Table structure for table `lmenu`
--

CREATE TABLE `lmenu` (
  `id` int(11) NOT NULL,
  `category` char(50) NOT NULL,
  `menu` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lmenu`
--

INSERT INTO `lmenu` (`id`, `category`, `menu`) VALUES
(1, 'sarapan', '1) Nasi Goreng Cina2) Telur Mata3) Kopi O'),
(2, 'sarapan', '1) Mee Goreng Mamak2) Telur Hancur3) Teh O'),
(3, 'sarapan', '1) Roti Canai + Kuah Dhal\r\n2) Horlick Susu'),
(4, 'sarapan', '1) Bihun Goreng\r\n2) Telur Mata\r\n3) Kopi O'),
(5, 'sarapan', '1) Roti + Mentega + Kaya\r\n2) Telur Separuh Masak\r\n3) Milo Susu'),
(6, 'sarapan', '1) Kuehteow Goreng\r\n2)Telur Hancur\r\n3) Kopi O'),
(7, 'tengahhari', '1) Nasi Putih\r\n2) Ayam Kurma\r\n3) Sayur Campur\r\n4) Tembikai\r\n5) Air Jagung'),
(8, 'tengahhari', '1) Nasi Putih\r\n2) Ayam Goreng Rempah\r\n3) Tomyam \r\n4) Aiskrim\r\n5) Air Oren'),
(9, 'tengahhari', '1) Nasi Putih\r\n2) Ikan Kembong Goreng Berlada\r\n3) Sup Sayur\r\n4) Tembikai\r\n5) Air Sirap'),
(10, 'tengahhari', '1) Nasi Putih\r\n2) Ayam Rendang\r\n3) Sayur Lemak\r\n4) Epal\r\n5) Air Laici'),
(11, 'tengahhari', '1) Nasi Arab\r\n2) Daging Masak Hitam\r\n3) Dalca\r\n4) Acar Timun\r\n5) Tembikai\r\n6) Air Sirap'),
(12, 'tengahhari', '1) Nasi Putih\r\n2) Ayam Kari\r\n3) Kobis Goreng\r\n4) Betik \r\n5) Air Oren'),
(13, 'tengahhari', '1) Nasi Putih \r\n2) Ayam Masak Lemak Cili Api\r\n3) Pecal\r\n4) Tembikai Susu\r\n5) Air Barli'),
(14, 'petang', '1) Ketayap\r\n2) Teh O'),
(15, 'petang', '1) Nona Manis\r\n2) Milo'),
(16, 'petang', '1) Apam Beras\r\n2) Nescafe 0'),
(17, 'petang', '1) Donat\r\n2) Teh Susu'),
(18, 'petang', '1) Lepat Pisang\r\n2) Nescafe O'),
(19, 'petang', '1) Seri Muka\r\n2) Milo'),
(20, 'malam', '1) Nasi Putih\r\n2) Ayam Rendang \r\n3) Sayur Campur\r\n4) Tembikai\r\n5) Air Oren'),
(21, 'malam', '1) Nasi Putih\r\n2) Daging Masak Merah\r\n3) Kangkung Goreng\r\n4) Epal\r\n5) Air Barli'),
(22, 'malam', '1) Nasi Putih\r\n2) Ayam Goreng\r\n3) Taugeh Tumis\r\n4) Oren\r\n5) Air Sirap'),
(23, 'malam', '1) Nasi Putih\r\n2) Ayam Masak Asam Pedas\r\n3) Sayur Campur\r\n4) Tembikai\r\n5) Air Laici'),
(24, 'malam', '1) Nasi Putih\r\n2) Sup Ayam\r\n3) Kailan Goreng\r\n4) Epal \r\n5) Air Oren'),
(25, 'malam', '1) Nasi Putih\r\n2) Ayam Kari\r\n3) Kangkung Goreng\r\n4) Tembikai\r\n5) Air Sirap'),
(26, 'sarapan', '1) Nasi Lemak \r\n2) Telur Mata\r\n3) Kopi O'),
(27, 'sarapan', '1) Nasi Goreng Kampung\r\n2) Telur Mata \r\n3) Teh O'),
(28, 'tengahhari', '1) Nasi Putih\r\n2) Daging Masak Kicap\r\n3) Tembikai Susu\r\n4) Air Oren'),
(29, 'tengahhari', '1) Nasi Tomato \r\n2) Ayam Masak Merah\r\n3) Acar Timun \r\n4) Dalca\r\n5) Tembikai Susu\r\n6) Air Laici'),
(30, 'tengahhari', '1) Nasi Putih\r\n2) Ikan Kembong Goreng\r\n3) Sayur Masak Lemak\r\n4) Betik\r\n5) Air Barli'),
(31, 'petang', '1) Karipap\r\n2) Teh O\r\n'),
(32, 'petang', '1) Donut \r\n2) Kopi Susu'),
(33, 'petang', '1) Seri Ayu\r\n2) Milo'),
(34, 'petang', '1) Pau\r\n2) Teh O'),
(35, 'petang', '1) Popia Goreng\r\n2) Horlick Susu'),
(36, 'malam', '1) Nasi Putih\r\n2) Daging Masak Kurma\r\n3) Sayur Campur\r\n4) Tembikai \r\n5) Air Oren'),
(37, 'malam', '1) Nasi putih\r\n2) Ayam Masak Kicap\r\n3) Limau\r\n4) Air jagung'),
(38, 'malam', '1) Nasi putih\r\n2) Ayam goreng rempah\r\n3) Sup sayur\r\n4) Limau\r\n5) Air jagung'),
(39, 'malam', '1) Nasi putih\r\n2) Ikan kembong goreng\r\n3) Sayur masak lemak\r\n4) Limau\r\n5) Air Barli'),
(40, 'malam', '1) Nasi Putih\r\n2) Ayam masak kurma\r\n3) Kangkung goreng\r\n4) Betik\r\n5) Air Oren'),
(41, 'malam', '1) Nasi putih\r\n2) Ayam masak merah\r\n3) Sawi goreng\r\n4) Epal \r\n5) Air Anggur'),
(42, 'petang', '1) Kuih Koci\r\n2) Teh Susu'),
(43, 'Select The Menu', '1) Pau goreng\r\n2) Teh susu'),
(44, 'sarapan', '1) Nasi lemak\r\n2) Sambal sotong\r\n3) Telur rebus\r\n4) Teh O'),
(45, 'tengahhari', '1) Nasi Tomato\r\n2) Ayam masak merah\r\n3) Dalca \r\n4) Papadom\r\n5) Tembikai susu\r\n6) Air jagung'),
(46, 'petang', '1) Bingka \r\n2) Kopi susu');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` char(50) NOT NULL,
  `email` char(50) NOT NULL,
  `password` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `email`, `password`) VALUES
(2, 'nahar', 'nahazette@gmail.com', '$2y$10$7y8.FNoMJnOi.d6m/n.8/..hBIHidDJpbKBh5J26qfIQnmlnjt7nW'),
(3, 'aziz', 'aziz@gmail.com', '$2y$10$aifUp1qCtMzPaw1qlU7wRu8nZ.dl00ztOwsdkzLIdCXumD4bY6zde'),
(7, 'alif', 'alif@gmail.com', '$2y$10$LT0c672/F3HZNPuePbgxFu5Oa0Zb7QIuyparh4N/iloBfgL6OxZvy'),
(8, 'black', 'black@gmail.com', '$2y$10$YRhgvJbPTMTf//FaHl2OSOC/UXhc7nKb.HdKH.7VKCyFiiEboY.m2'),
(9, 'eqma', 'eqma@gmil.com', '$2y$10$BDwvilhfmrtCsxT2H/VRkO3JqxIcn7viBaGgAjVvMSHGc09s0hs.2'),
(10, 'wan', 'wan@gmail.com', '$2y$10$fIouOziRz2rG6i4Mw6RYrOVrjlq2KGnjOqCtcz4x/jKGh5.wyIX7a'),
(11, 'jihiru', 'mat@cool.com', '$2y$10$1rOmVFgG4Iz6OHr7tqAgWu.pWpgFs.WcP8i.esQae9zUMCJy6qBzS'),
(12, 'azri', 'azri@gmail.com', '$2y$10$fPTgc5Lt/KmBqaKaMI8ugePeuMs7CnMYXZztGNfWe9rpsEOjvZCYW');

-- --------------------------------------------------------

--
-- Table structure for table `lsports`
--

CREATE TABLE `lsports` (
  `id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `sports` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `m1`
--

CREATE TABLE `m1` (
  `idminggu1` int(11) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `idmenu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m1`
--

INSERT INTO `m1` (`idminggu1`, `hari`, `category`, `idmenu`) VALUES
(1, 'Isnin', 'Sarapan', '1'),
(2, 'Isnin', 'Tengahari', '7'),
(3, 'Isnin', 'Petang', '14'),
(4, 'Isnin', 'Malam', '20'),
(5, 'selasa', 'sarapan', '2'),
(6, 'selasa', 'tengahari', '8'),
(7, 'selasa', 'petang', '15'),
(8, 'selasa', 'malam', '21'),
(9, 'rabu', 'sarapan', '3'),
(10, 'rabu', 'tengahari', '9'),
(11, 'rabu', 'petang', '16'),
(12, 'rabu', 'malam', '22'),
(13, 'khamis', 'sarapan', '4'),
(14, 'khamis', 'tengahari', '10'),
(15, 'khamis', 'petang', '17'),
(16, 'khamis', 'malam', '23'),
(17, 'jumaat', 'sarapan', '5'),
(18, 'jumaat', 'tengahari', '11'),
(19, 'jumaat', 'petang', '18'),
(20, 'jumaat', 'malam', '24'),
(21, 'sabtu', 'sarapan', '6'),
(22, 'sabtu', 'tengahari', '12'),
(23, 'sabtu', 'petang', '19'),
(24, 'sabtu', 'malam', '25'),
(25, 'ahad', 'sarapan', '1'),
(26, 'ahad', 'tengahari', '7'),
(27, 'ahad', 'petang', '7'),
(28, 'ahad', 'malam', '7');

-- --------------------------------------------------------

--
-- Table structure for table `malam`
--

CREATE TABLE `malam` (
  `idm` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `menu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `malam`
--

INSERT INTO `malam` (`idm`, `category`, `menu`) VALUES
(1, 'malam', '1) Nasi Putih\r\n2) Ayam Rendang \r\n3) Sayur Campur\r\n4) Tembikai\r\n5) Air Oren'),
(2, 'malam', '1) Nasi Putih\r\n2) Daging Masak Merah\r\n3) Kangkung Goreng\r\n4) Epal\r\n5) Air Barli'),
(3, 'malam', '1) Nasi Putih\r\n2) Ayam Goreng\r\n3) Taugeh Tumis\r\n4) Oren\r\n5) Air Sirap'),
(4, 'malam', '1) Nasi Putih\r\n2) Ayam Masak Asam Pedas\r\n3) Sayur Campur\r\n4) Tembikai\r\n5) Air Laici'),
(5, 'malam', '1) Nasi Putih\r\n2) Sup Ayam\r\n3) Kailan Goreng\r\n4) Epal \r\n5) Air Oren'),
(6, 'malam', '1) Nasi Putih\r\n2) Ayam Kari\r\n3) Kangkung Goreng\r\n4) Tembikai\r\n5) Air Sirap');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `gambar` char(18) NOT NULL,
  `comments` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `gambar`, `comments`) VALUES
(8, '662f188929eb7.jpg', 'DM ditutup pada 30/6/2024');

-- --------------------------------------------------------

--
-- Table structure for table `pelajar`
--

CREATE TABLE `pelajar` (
  `id` int(11) NOT NULL,
  `fname` char(100) NOT NULL,
  `lname` char(100) NOT NULL,
  `ndp` char(10) NOT NULL,
  `nokp` char(12) NOT NULL,
  `email` char(50) NOT NULL,
  `kursus` char(50) NOT NULL,
  `gambar` char(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelajar`
--

INSERT INTO `pelajar` (`id`, `fname`, `lname`, `ndp`, `nokp`, `email`, `kursus`, `gambar`) VALUES
(10, 'MUHAMMAD NAHAR', 'MOHD KHAIDZIR', '0103090113', 'DK11223001', 'nahazette@gmail.com', 'SISTEM KOMPUTER', '010309011373.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `petang`
--

CREATE TABLE `petang` (
  `idp` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `menu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petang`
--

INSERT INTO `petang` (`idp`, `category`, `menu`) VALUES
(14, 'petang', '1) Ketayap\r\n2) Teh O'),
(15, 'petang', '1) Nona Manis\r\n2) Milo'),
(16, 'petang', '1) Apam Beras\r\n2) Nescafe 0'),
(17, 'petang', '1) Donat\r\n2) Teh Susu'),
(18, 'petang', '1) Lepat Pisang\r\n2) Nescafe O'),
(19, 'petang', '1) Seri Muka\r\n2) Milo');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `ptitle` char(50) NOT NULL,
  `pdetails` char(100) NOT NULL,
  `gambar` char(25) NOT NULL,
  `gambar2` char(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `ptitle`, `pdetails`, `gambar`, `gambar2`) VALUES
(12, 'Kursus Pengurusan Jenazah 2024', '7 Feb 2024', '662a956ba6689.jpg', '662a956ba6810.jpeg'),
(13, 'Program Hiking Bukit Gasing Dan Bukit Kerinchi', '', '662a961427a51.jpg', '662a961427bc2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sarapan`
--

CREATE TABLE `sarapan` (
  `ids` int(11) NOT NULL,
  `category` varchar(25) NOT NULL,
  `menu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sarapan`
--

INSERT INTO `sarapan` (`ids`, `category`, `menu`) VALUES
(1, 'sarapan', '1) Nasi Goreng Cina\r\n2) Telur Mata\r\n3) Kopi O'),
(2, 'sarapan', '1) Mee Goreng Mamak\r\n2) Telur Hancur\r\n3) Teh O'),
(3, 'sarapan', '1) Roti Canai + Kuah Dhal\r\n2) Horlick Susu'),
(4, 'sarapan', '1) Bihun Goreng\r\n2) Telur Mata\r\n3) Kopi O'),
(5, 'sarapan', '1) Roti + Mentega + Kaya\r\n2) Telur Separuh Masak\r\n3) Milo Susu'),
(6, 'sarapan', '1) Kuehteow Goreng\r\n2)Telur Hancur\r\n3) Kopi O');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `id` int(11) NOT NULL,
  `gambar` char(18) NOT NULL,
  `comments` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `gambar`, `comments`) VALUES
(2, '662a742d67c3e.jpg', 'ayuh bersukan');

-- --------------------------------------------------------

--
-- Table structure for table `tengahari`
--

CREATE TABLE `tengahari` (
  `idt` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `menu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tengahari`
--

INSERT INTO `tengahari` (`idt`, `category`, `menu`) VALUES
(1, 'tengahhari', '1) Nasi Putih\r\n2) Ayam Kurma\r\n3) Sayur Campur\r\n4) Tembikai\r\n5) Air Jagung'),
(2, 'tengahhari', '1) Nasi Putih\r\n2) Ayam Goreng Rempah\r\n3) Tomyam \r\n4) Aiskrim\r\n5) Air Oren'),
(3, 'tengahhari', '1) Nasi Putih\r\n2) Ikan Kembong Goreng Berlada\r\n3) Sup Sayur\r\n4) Tembikai\r\n5) Air Sirap'),
(4, 'tengahhari', '1) Nasi Putih\r\n2) Ayam Rendang\r\n3) Sayur Lemak\r\n4) Epal\r\n5) Air Laici'),
(5, 'tengahhari', '1) Nasi Arab\r\n2) Daging Masak Hitam\r\n3) Dalca\r\n4) Acar Timun\r\n5) Tembikai\r\n6) Air Sirap'),
(6, 'tengahhari', '1) Nasi Putih\r\n2) Ayam Kari\r\n3) Kobis Goreng\r\n4) Betik \r\n5) Air Oren'),
(7, 'tengahhari', '1) Nasi Putih \r\n2) Ayam Masak Lemak\r\n3) Pecal\r\n4) Tembikai Susu\r\n5) Air Barli');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lmenu`
--
ALTER TABLE `lmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lsports`
--
ALTER TABLE `lsports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m1`
--
ALTER TABLE `m1`
  ADD PRIMARY KEY (`idminggu1`);

--
-- Indexes for table `malam`
--
ALTER TABLE `malam`
  ADD PRIMARY KEY (`idm`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelajar`
--
ALTER TABLE `pelajar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petang`
--
ALTER TABLE `petang`
  ADD PRIMARY KEY (`idp`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sarapan`
--
ALTER TABLE `sarapan`
  ADD PRIMARY KEY (`ids`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tengahari`
--
ALTER TABLE `tengahari`
  ADD PRIMARY KEY (`idt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lmenu`
--
ALTER TABLE `lmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `lsports`
--
ALTER TABLE `lsports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m1`
--
ALTER TABLE `m1`
  MODIFY `idminggu1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `malam`
--
ALTER TABLE `malam`
  MODIFY `idm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pelajar`
--
ALTER TABLE `pelajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `petang`
--
ALTER TABLE `petang`
  MODIFY `idp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sarapan`
--
ALTER TABLE `sarapan`
  MODIFY `ids` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
