-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2024 at 07:17 PM
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
(2, 'admin', '$2y$10$XDlgwkq27YYe3/vl4gWutOqAZ/yR2GwZsBYyWmhHHuwgL4tFjig0y'),
(3, 'mpp', '$2y$10$PvGNh5BfPoi/bG.Jfy0GcOetwPLStGwLSRl4PnkJM0QnqU/XwX1Tm'),
(4, 'ketua warden', '$2y$10$EY6BScu6XaBWwKsS23d0WuG4SmEn7a9.n/RWyd7WlLUub1dhTWSum');

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
(1, 'sarapan', '1) Nasi Goreng Cina\r\n2) Telur Mata\r\n3) Kopi O'),
(2, 'sarapan', '1) Mee Goreng Mamak\r\n2) Telur Hancur\r\n3) Teh O'),
(3, 'sarapan', '1) Roti Canai + Kuah Dhal\r\n2) Horlick Susu');

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
(7, '662a7ee197f0b.jpg', 'https://www.youtube.com/watch?v=cen0rBKLuYE');

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
(1, 'Muhammad', 'Nahar', 'DK11223001', '010309011373', 'nahazette@gmail.com', 'Sistem Komputer', '010309011373.jpg'),
(9, 'eqma', 'roslan', '000000', 'dk14', 'eqma@gmail.com', 'masakan', '000000.png');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lmenu`
--
ALTER TABLE `lmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pelajar`
--
ALTER TABLE `pelajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
