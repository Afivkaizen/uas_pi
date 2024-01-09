-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2024 at 01:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mb`
--

-- --------------------------------------------------------

--
-- Table structure for table `manajemen_buku`
--

CREATE TABLE `manajemen_buku` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `published_year` varchar(50) NOT NULL,
  `isbn` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manajemen_buku`
--

INSERT INTO `manajemen_buku` (`id`, `title`, `author`, `published_year`, `isbn`) VALUES
(4, 'Islam', 'Ustad', '900', '123456789'),
(5, 'Pulang-Pergi', 'Tere Liye', '2021', '123123'),
(6, 'Bumi', 'Tere Liye', '2021', '123123'),
(7, 'Kristen', 'Jesus', '1999', '987654321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manajemen_buku`
--
ALTER TABLE `manajemen_buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manajemen_buku`
--
ALTER TABLE `manajemen_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
