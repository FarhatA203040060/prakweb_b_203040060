-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2022 at 09:44 AM
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
-- Database: `prakweb_2022_b_203040060`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul_buku` varchar(30) NOT NULL,
  `pengarang_buku` varchar(30) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `gambar` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul_buku`, `pengarang_buku`, `tahun_terbit`, `gambar`) VALUES
(1, '11:11', 'Fiersa Besari', 2018, '11.jpg'),
(2, 'Danur', 'Risa Saraswati', 2011, 'danur.jpg'),
(3, 'Dilan 1990', 'Pidi Baiq', 2014, 'dilan.jpg'),
(4, 'Milea', 'Pidi Baiq', 2016, 'milea.jpg'),
(5, 'Hujan', 'Tere Liye', 2016, 'hujan.jpg'),
(6, 'Marmut Merah Jambu', 'Raditya Dika', 2010, 'jambu.jpg'),
(7, 'Koala Kumal', 'Raditya Dika', 2015, 'koala.jpg'),
(8, 'Laskar Pelangi', 'Andrea Hirata', 2005, 'laskar.jpg'),
(9, 'Dilan 1991', 'Pidi Baiq`', 2015, 'dilan2.jpg'),
(10, 'Rindu', 'Tere Liye', 2014, 'rindu.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
