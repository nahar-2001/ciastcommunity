-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2024 at 02:28 AM
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
(7, 'alif', 'alif@gmail.com', '$2y$10$LT0c672/F3HZNPuePbgxFu5Oa0Zb7QIuyparh4N/iloBfgL6OxZvy');

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
  `gambar` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelajar`
--

INSERT INTO `pelajar` (`id`, `fname`, `lname`, `ndp`, `nokp`, `email`, `kursus`, `gambar`) VALUES
(1, 'Muhammad', 'Nahar', '11223001', '010309011373', 'nahazette@gmail.com', 'Sistem Komputer', 'boy.png'),
(2, 'Wan', 'Abdul Aziz', '11223002', '020306031633', 'aziz@gmail.com', 'IT', 'boy.png'),
(3, 'Iko', 'Uwais', '11223003', '18469345968', 'uwais@yohoo.com', 'Silat', 'man.png'),
(6, 'Alex', 'Thorfin', '1122333', '2223333', 'thorfin@yahoo.com', 'viking', 'man.png'),
(8, 'Gojo', 'Satoru', '16865256', '789654', 'gojo@yahoo.com', 'sorcerer', 'man.png');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `ptitle` char(50) NOT NULL,
  `pdetails` char(100) NOT NULL,
  `gambar` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pelajar`
--
ALTER TABLE `pelajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
