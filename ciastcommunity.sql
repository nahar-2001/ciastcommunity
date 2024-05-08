-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 07:38 PM
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
(5, 'ketua warden', '$2y$10$knBPk207eTyOd6P/vH47XuluLEbxSy5m5dK.p7pX5zcu1fJ5AgH8W'),
(7, 'unit kemudahan', '$2y$10$wqOkz.cA.KRevmB/rMIM..aVnZynJ1NVb1nwGrg/chxtxbWH47T6y');

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
(1, 'Sarapan', '1) Nasi Goreng Cina2) Telur Mata3) Kopi O'),
(2, 'Sarapan', '1) Mee Goreng Mamak2) Telur Hancur3) Teh O'),
(3, 'Sarapan', '1) Roti Canai + Kuah Dhal\r\n2) Horlick Susu'),
(4, 'Sarapan', '1) Bihun Goreng\r\n2) Telur Mata\r\n3) Kopi O'),
(5, 'Sarapan', '1) Roti + Mentega + Kaya\r\n2) Telur Separuh Masak\r\n3) Milo Susu'),
(6, 'Sarapan', '1) Kuehteow Goreng\r\n2)Telur Hancur\r\n3) Kopi O'),
(7, 'Tengahhari', '1) Nasi Putih\r\n2) Ayam Kurma\r\n3) Sayur Campur\r\n4) Tembikai\r\n5) Air Jagung'),
(8, 'Tengahhari', '1) Nasi Putih\r\n2) Ayam Goreng Rempah\r\n3) Tomyam \r\n4) Aiskrim\r\n5) Air Oren'),
(9, 'Tengahhari', '1) Nasi Putih\r\n2) Ikan Kembong Goreng Berlada\r\n3) Sup Sayur\r\n4) Tembikai\r\n5) Air Sirap'),
(10, 'Tengahhari', '1) Nasi Putih\r\n2) Ayam Rendang\r\n3) Sayur Lemak\r\n4) Epal\r\n5) Air Laici'),
(11, 'Tengahhari', '1) Nasi Arab\r\n2) Daging Masak Hitam\r\n3) Dalca\r\n4) Acar Timun\r\n5) Tembikai\r\n6) Air Sirap'),
(12, 'Tengahhari', '1) Nasi Putih\r\n2) Ayam Kari\r\n3) Kobis Goreng\r\n4) Betik \r\n5) Air Oren'),
(13, 'Tengahhari', '1) Nasi Putih \r\n2) Ayam Masak Lemak Cili Api\r\n3) Pecal\r\n4) Tembikai Susu\r\n5) Air Barli'),
(14, 'Petang', '1) Ketayap\r\n2) Teh O'),
(15, 'Petang', '1) Nona Manis\r\n2) Milo'),
(16, 'Petang', '1) Apam Beras\r\n2) Nescafe 0'),
(17, 'Petang', '1) Donat\r\n2) Teh Susu'),
(18, 'Petang', '1) Lepat Pisang\r\n2) Nescafe O'),
(19, 'Petang', '1) Seri Muka\r\n2) Milo'),
(20, 'Malam', '1) Nasi Putih\r\n2) Ayam Rendang \r\n3) Sayur Campur\r\n4) Tembikai\r\n5) Air Oren'),
(21, 'Malam', '1) Nasi Putih\r\n2) Daging Masak Merah\r\n3) Kangkung Goreng\r\n4) Epal\r\n5) Air Barli'),
(22, 'Malam', '1) Nasi Putih\r\n2) Ayam Goreng\r\n3) Taugeh Tumis\r\n4) Oren\r\n5) Air Sirap'),
(23, 'Malam', '1) Nasi Putih\r\n2) Ayam Masak Asam Pedas\r\n3) Sayur Campur\r\n4) Tembikai\r\n5) Air Laici'),
(24, 'Malam', '1) Nasi Putih\r\n2) Sup Ayam\r\n3) Kailan Goreng\r\n4) Epal \r\n5) Air Oren'),
(25, 'Malam', '1) Nasi Putih\r\n2) Ayam Kari\r\n3) Kangkung Goreng\r\n4) Tembikai\r\n5) Air Sirap'),
(26, 'Sarapan', '1) Nasi Lemak \r\n2) Telur Mata\r\n3) Kopi O'),
(27, 'Sarapan', '1) Nasi Goreng Kampung\r\n2) Telur Mata \r\n3) Teh O'),
(28, 'Tengahhari', '1) Nasi Putih\r\n2) Daging Masak Kicap\r\n3) Tembikai Susu\r\n4) Air Oren'),
(29, 'Tengahhari', '1) Nasi Tomato \r\n2) Ayam Masak Merah\r\n3) Acar Timun \r\n4) Dalca\r\n5) Tembikai Susu\r\n6) Air Laici'),
(30, 'Tengahhari', '1) Nasi Putih\r\n2) Ikan Kembong Goreng\r\n3) Sayur Masak Lemak\r\n4) Betik\r\n5) Air Barli'),
(31, 'Petang', '1) Karipap\r\n2) Teh O\r\n'),
(32, 'Petang', '1) Donut \r\n2) Kopi Susu'),
(33, 'Petang', '1) Seri Ayu\r\n2) Milo'),
(34, 'Petang', '1) Pau\r\n2) Teh O'),
(35, 'Petang', '1) Popia Goreng\r\n2) Horlick Susu'),
(36, 'Malam', '1) Nasi Putih\r\n2) Daging Masak Kurma\r\n3) Sayur Campur\r\n4) Tembikai \r\n5) Air Oren'),
(37, 'Malam', '1) Nasi putih\r\n2) Ayam Masak Kicap\r\n3) Limau\r\n4) Air jagung'),
(38, 'Malam', '1) Nasi putih\r\n2) Ayam goreng rempah\r\n3) Sup sayur\r\n4) Limau\r\n5) Air jagung'),
(39, 'Malam', '1) Nasi putih\r\n2) Ikan kembong goreng\r\n3) Sayur masak lemak\r\n4) Limau\r\n5) Air Barli'),
(40, 'Malam', '1) Nasi Putih\r\n2) Ayam masak kurma\r\n3) Kangkung goreng\r\n4) Betik\r\n5) Air Oren'),
(41, 'Malam', '1) Nasi putih\r\n2) Ayam masak merah\r\n3) Sawi goreng\r\n4) Epal \r\n5) Air Anggur'),
(42, 'Petang', '1) Kuih Koci\r\n2) Teh Susu'),
(43, 'Petang', '1) Pau goreng\r\n2) Teh susu'),
(44, 'Sarapan', '1) Nasi lemak\r\n2) Sambal sotong\r\n3) Telur rebus\r\n4) Teh O'),
(45, 'Tengahhari', '1) Nasi Tomato\r\n2) Ayam masak merah\r\n3) Dalca \r\n4) Papadom\r\n5) Tembikai susu\r\n6) Air jagung'),
(46, 'Petang', '1) Bingka \r\n2) Kopi susu'),
(48, 'Malam', '1) Nasi Putih\r\n2) Kari Ikan Selar\r\n3) Sawi Goreng\r\n4) Betik\r\n5) Air Anggur'),
(49, 'Tengahhari', '1) Nasi Putih\r\n2) Ayam Goreng\r\n3) Dalca \r\n4) Betik\r\n5) Air Laici'),
(50, 'Tengahhari', '1) nasi putih\r\n2) Daging masak merah \r\n3) Kailan goreng ikan masin\r\n4) aiskrim\r\n5) air oren \r\n\r\n'),
(51, 'Tengahhari', '1) Nasi putih \r\n2) Ayam masak kicap\r\n3) Sayur lemak lodeh \r\n4) Limau \r\n5)Air sirap'),
(52, 'Malam', '1) Nasi putih \r\n2) Ayam masak lemak cili api \r\n3) Kerabu taugeh + Udang\r\n4) Tembikai \r\n5) Air sirap'),
(53, 'Malam', '1) Nasi putih\r\n2) Daging goreng kicap\r\n3) Labu masak lemak\r\n4) Limau\r\n5) Air anggur\r\n'),
(54, 'Tengahhari', '1) Nasi minyak \r\n2) Ayam beriani \r\n3) Dalca\r\n4) Acar rampai \r\n5) Limau\r\n6) Air laici\r\n'),
(55, 'malam', '1) Nasi putih\r\n2) Daging masak lemak cili api\r\n3) Kangkung goreng belacan \r\n4) Betik\r\n5) Air anggur');

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
(1, 'Isnin', 'Sarapan', '3'),
(2, 'Isnin', 'Tengahhari', '49'),
(3, 'Isnin', 'Petang', '31'),
(4, 'Isnin', 'Malam', '23'),
(5, 'Selasa', 'Sarapan', '1'),
(6, 'Selasa', 'Tengahhari', '28'),
(7, 'Selasa', 'Petang', '17'),
(8, 'Selasa', 'Malam', '41'),
(9, 'Rabu', 'Sarapan', '6'),
(10, 'Rabu', 'Tengahhari', '10'),
(11, 'Rabu', 'Petang', '33'),
(12, 'Rabu', 'Malam', '40'),
(13, 'Khamis', 'Sarapan', '44'),
(14, 'Khamis', 'Tengahhari', '13'),
(15, 'Khamis', 'Petang', '16'),
(16, 'Khamis', 'Malam', '39'),
(17, 'Jumaat', 'Sarapan', '27'),
(18, 'Jumaat', 'Tengahhari', '45'),
(19, 'Jumaat', 'Petang', '19'),
(20, 'Jumaat', 'Malam', '38'),
(21, 'Sabtu', 'Sarapan', '5'),
(22, 'Sabtu', 'Tengahhari', '12'),
(23, 'Sabtu', 'Petang', '43'),
(24, 'Sabtu', 'Malam', '37'),
(25, 'Ahad', 'Sarapan', '4'),
(26, 'Ahad', 'Tengahhari', '30'),
(27, 'Ahad', 'Petang', '35'),
(28, 'Ahad', 'Malam', '36');

-- --------------------------------------------------------

--
-- Table structure for table `m2`
--

CREATE TABLE `m2` (
  `idminggu2` int(11) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `idmenu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m2`
--

INSERT INTO `m2` (`idminggu2`, `hari`, `category`, `idmenu`) VALUES
(1, 'Isnin', 'Sarapan', '1'),
(2, 'Isnin', 'Tengahhari', '7'),
(3, 'Isnin', 'Petang', '14'),
(4, 'Isnin', 'Malam', '20'),
(5, 'Selasa', 'Sarapan', '2'),
(6, 'Selasa', 'Tengahhari', '8'),
(7, 'Selasa', 'Petang', '15'),
(8, 'Selasa', 'Malam', '21'),
(9, 'Rabu', 'Sarapan', '3'),
(10, 'Rabu', 'Tengahhari', '9'),
(11, 'Rabu', 'Petang', '16'),
(12, 'Rabu', 'Malam', '38'),
(13, 'Khamis', 'Sarapan', '4'),
(14, 'Khamis', 'Tengahhari', '10'),
(15, 'Khamis', 'Petang', '17'),
(16, 'Khamis', 'Malam', '48'),
(17, 'Jumaat', 'Sarapan', '5'),
(18, 'Jumaat', 'Tengahhari', '11'),
(19, 'Jumaat', 'Petang', '18'),
(20, 'Jumaat', 'Malam', '23'),
(21, 'Sabtu', 'Sarapan', '6'),
(22, 'Sabtu', 'Tengahhari', '12'),
(23, 'Sabtu', 'Petang', '42'),
(24, 'Sabtu', 'Malam', '24'),
(25, 'Ahad', 'Sarapan', '2'),
(26, 'Ahad', 'Tengahhari', '13'),
(27, 'Ahad', 'Petang', '33'),
(28, 'Ahad', 'Malam', '25');

-- --------------------------------------------------------

--
-- Table structure for table `m3`
--

CREATE TABLE `m3` (
  `idminggu3` int(11) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `idmenu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m3`
--

INSERT INTO `m3` (`idminggu3`, `hari`, `category`, `idmenu`) VALUES
(1, 'Isnin', 'Sarapan', '27'),
(2, 'Isnin', 'Tengahhari', '12'),
(3, 'Isnin', 'Petang', '31'),
(4, 'Isnin', 'Malam', '41'),
(5, 'Selasa', 'Sarapan', '4'),
(6, 'Selasa', 'Tengahhari', '50'),
(7, 'Selasa', 'Petang', '33'),
(8, 'Selasa', 'Malam', '52'),
(9, 'Rabu', 'Sarapan', '3'),
(10, 'Rabu', 'Tengahhari', '49'),
(11, 'Rabu', 'Petang', '42'),
(12, 'Rabu', 'Malam', '53'),
(13, 'Khamis', 'Sarapan', '2'),
(14, 'Khamis', 'Tengahhari', '51'),
(15, 'Khamis', 'Petang', '14'),
(16, 'Khamis', 'Malam', '48'),
(17, 'Jumaat', 'Sarapan', '5'),
(18, 'Jumaat', 'Tengahhari', '45'),
(19, 'Jumaat', 'Petang', '35'),
(20, 'Jumaat', 'Malam', '24'),
(21, 'Sabtu', 'Sarapan', '44'),
(22, 'Sabtu', 'Tengahhari', '30'),
(23, 'Sabtu', 'Petang', '16'),
(24, 'Sabtu', 'Malam', '37'),
(25, 'Ahad', 'Sarapan', '6'),
(26, 'Ahad', 'Tengahhari', '10'),
(27, 'Ahad', 'Petang', '43'),
(28, 'Ahad', 'Malam', '38');

-- --------------------------------------------------------

--
-- Table structure for table `m4`
--

CREATE TABLE `m4` (
  `idminggu4` int(11) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `idmenu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m4`
--

INSERT INTO `m4` (`idminggu4`, `hari`, `category`, `idmenu`) VALUES
(1, 'Isnin', 'Sarapan', '2'),
(2, 'Isnin', 'Tengahhari', '8'),
(3, 'Isnin', 'Petang', '15'),
(4, 'Isnin', 'Malam', '25'),
(5, 'Selasa', 'Sarapan', '44'),
(6, 'Selasa', 'Tengahhari', '28'),
(7, 'Selasa', 'Petang', '46'),
(8, 'Selasa', 'Malam', '22'),
(9, 'Rabu', 'Sarapan', '1'),
(10, 'Rabu', 'Tengahhari', '12'),
(11, 'Rabu', 'Petang', '32'),
(12, 'Rabu', 'Malam', '37'),
(13, 'Khamis', 'Sarapan', '3'),
(14, 'Khamis', 'Tengahhari', '13'),
(15, 'Khamis', 'Petang', '43'),
(16, 'Khamis', 'Malam', '39'),
(17, 'Jumaat', 'Sarapan', '27'),
(18, 'Jumaat', 'Tengahhari', '54'),
(19, 'Jumaat', 'Petang', '18'),
(20, 'Jumaat', 'Malam', '55'),
(21, 'Sabtu', 'Sarapan', '4'),
(22, 'Sabtu', 'Tengahhari', '49'),
(23, 'Sabtu', 'Petang', '16'),
(24, 'Sabtu', 'Malam', '41'),
(25, 'Ahad', 'Sarapan', '5'),
(26, 'Ahad', 'Tengahhari', '51'),
(27, 'Ahad', 'Petang', '14'),
(28, 'Ahad', 'Malam', '40');

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
(8, '662f188929eb7.jpg', 'DM ditutup pada 6/4/2024 sehingga 14/4/2024 sempena menyambut Hari Raya AidilFitri.');

-- --------------------------------------------------------

--
-- Table structure for table `pelajar`
--

CREATE TABLE `pelajar` (
  `id` int(11) NOT NULL,
  `fname` char(100) NOT NULL,
  `lname` char(100) NOT NULL,
  `ndp` char(255) NOT NULL,
  `nokp` char(12) NOT NULL,
  `phone` char(255) NOT NULL,
  `email` char(50) NOT NULL,
  `kursus` char(50) NOT NULL,
  `gambar` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelajar`
--

INSERT INTO `pelajar` (`id`, `fname`, `lname`, `ndp`, `nokp`, `phone`, `email`, `kursus`, `gambar`) VALUES
(16, 'MUHAMMAD NAHAR', 'MOHD KHAIDZIR', 'DK11223001', '010309011373', '0179546958', 'nahazette@gmail.com', 'DPV Sistem Komputer', '010309011373.jpg'),
(18, 'SAFAINI ARISSA', 'MOHD FAIROL ASWAD', 'DK11223011', '041022140874', '0149300874', 'safainiarissa@gmail.com', 'DPV Sistem Komputer', '041022140874.jpeg'),
(19, 'MOHAMMAD AZRI', 'KAMARUDIN', 'DK11223006', '010713010719', '0199738283', 'azri@gmail.com', 'DPV Sistem Komputer', '010713010719.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `ptitle` char(50) NOT NULL,
  `pdetails` char(255) NOT NULL,
  `gambar` char(25) NOT NULL,
  `gambar2` char(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `ptitle`, `pdetails`, `gambar`, `gambar2`) VALUES
(12, 'Kursus Pengurusan Jenazah 2024', '7 Feb 2024', '662a956ba6689.jpg', '662a956ba6810.jpeg'),
(13, 'Program Hiking Bukit Gasing Dan Bukit Kerinchi', 'Program ini adalah kerjasama antara MPP dan Puspanita CIAST', '662a961427a51.jpg', '662a961427bc2.jpg'),
(15, 'Hari Sukan CIAST', 'Majlis Perwakilan Pelajar CIAST (MPP) telah melaksanakan Program Hari Sukan yang berlangsung pada 8 Mac 2024', '662ff2668dcf0.jpg', '662ff2668de75.jpg'),
(16, 'Pendaftaran Pelajar Baru Sesi 1/2024', '', '663b7c1146d71.jpg', '663b7c1146f60.jpg'),
(17, 'Latihan Dalam Kumpulan Pelajar Baru Sesi 1/2024', '', '663b7c4c055e5.jpg', '663b7c4c0579e.jpg'),
(18, 'Majlis Khatam Al-Quran', '', '663b9bad366db.jpg', '663b9bad36897.jpg'),
(19, 'Majlis Iftar Perdana', '', '663b9c85cddbd.jpg', '663b9c85ce145.jpg');

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
(2, '663ba3fd1c32f.jpeg', 'Amalkan gaya hidup yang sihat, ayuh kita bersukan');

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
-- Indexes for table `m1`
--
ALTER TABLE `m1`
  ADD PRIMARY KEY (`idminggu1`);

--
-- Indexes for table `m2`
--
ALTER TABLE `m2`
  ADD PRIMARY KEY (`idminggu2`);

--
-- Indexes for table `m3`
--
ALTER TABLE `m3`
  ADD PRIMARY KEY (`idminggu3`);

--
-- Indexes for table `m4`
--
ALTER TABLE `m4`
  ADD PRIMARY KEY (`idminggu4`);

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
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lmenu`
--
ALTER TABLE `lmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `m1`
--
ALTER TABLE `m1`
  MODIFY `idminggu1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `m2`
--
ALTER TABLE `m2`
  MODIFY `idminggu2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `m3`
--
ALTER TABLE `m3`
  MODIFY `idminggu3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `m4`
--
ALTER TABLE `m4`
  MODIFY `idminggu4` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pelajar`
--
ALTER TABLE `pelajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
