-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2024 at 05:17 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warehouse_msib_cgs`
--

-- --------------------------------------------------------

--
-- Table structure for table `gudang`
--

CREATE TABLE `gudang` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `capacity` int(11) NOT NULL,
  `status` enum('Aktif','Tidak Aktif') DEFAULT 'Aktif',
  `opening_hour` time DEFAULT NULL,
  `closing_hour` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gudang`
--

INSERT INTO `gudang` (`id`, `name`, `location`, `capacity`, `status`, `opening_hour`, `closing_hour`) VALUES
(1, 'Gudang Garam', 'Cirebon', 12000, 'Aktif', '08:30:00', '21:10:00'),
(2, 'Gudang Batik', 'Indramayu', 30000, 'Tidak Aktif', '07:00:00', '18:30:00'),
(3, 'Gudang Bulog', 'Tegal', 17000, 'Aktif', '09:00:00', '22:30:00'),
(4, 'Gudang Baru', 'Bentul', 35000, 'Tidak Aktif', '07:30:00', '21:00:00'),
(5, 'Gudang Elektronik', 'Jakarta', 45000, 'Aktif', '08:00:00', '19:30:00'),
(6, 'Gudang Jarum', 'Kediri', 12000, 'Tidak Aktif', '09:10:00', '23:00:00'),
(7, 'Gudang Konveksi', 'Bandung', 30000, 'Aktif', '07:30:00', '18:30:00'),
(8, 'Gudang Kopi Toraja', 'Toraja', 32000, 'Tidak Aktif', '08:12:00', '10:20:00'),
(9, 'Gudang Semen', 'Padang', 150000, 'Aktif', '08:30:00', '22:00:00'),
(10, 'Gudang Sepatu', 'Bandung', 25000, 'Aktif', '08:00:00', '21:30:00'),
(12, 'Gudang Buah ', 'Malang', 15000, 'Aktif', '08:20:00', '10:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gudang`
--
ALTER TABLE `gudang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
