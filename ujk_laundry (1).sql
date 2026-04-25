-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2026 at 05:41 AM
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
-- Database: `ujk_laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori_laundry`
--

CREATE TABLE `kategori_laundry` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori_laundry`
--

INSERT INTO `kategori_laundry` (`id`, `nama_kategori`, `deskripsi`) VALUES
(2, 'Cuci Kering', 'Layanan mencuci dan mengeringkan pakaian tanpa setrika'),
(3, 'Cuci Setrika', 'Layanan mencuci, mengeringkan, dan menyetrika pakaian'),
(4, 'Setrika Saja', 'Layanan khusus menyetrika pakaian tanpa proses pencucian'),
(5, 'Express', 'Layanan cepat dengan waktu pengerjaan lebih singkat dari normal');

-- --------------------------------------------------------

--
-- Table structure for table `laundry`
--

CREATE TABLE `laundry` (
  `id` int(11) NOT NULL,
  `nama_pelanggan` varchar(30) DEFAULT NULL,
  `jenis_laundry` varchar(30) DEFAULT NULL,
  `berat` int(11) DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `kategori_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laundry`
--

INSERT INTO `laundry` (`id`, `nama_pelanggan`, `jenis_laundry`, `berat`, `total_harga`, `created_at`, `kategori_id`) VALUES
(18, 'Queensha', NULL, 8, 54000, '2026-04-25 02:55:57', 4),
(19, 'Akmal', NULL, 9, 34000, '2026-04-25 02:57:55', 2),
(20, 'Arsya', NULL, 9, 68000, '2026-04-25 03:16:03', 5),
(21, 'Alma', NULL, 10, 45000, '2026-04-25 03:16:23', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`) VALUES
(1, 'Admin', 'adminlaundry@gmail.com', '$2y$10$dkEeLNKsSKHLKUHEI3E4W..bLUs6Hij6CAbuEoA4iILnfG5bkm0Xy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_laundry`
--
ALTER TABLE `kategori_laundry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laundry`
--
ALTER TABLE `laundry`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_laundry`
--
ALTER TABLE `kategori_laundry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `laundry`
--
ALTER TABLE `laundry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `laundry`
--
ALTER TABLE `laundry`
  ADD CONSTRAINT `laundry_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori_laundry` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
