-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2025 at 12:08 PM
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
-- Database: `webdailyotomotif`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `isi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal` datetime NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(1, 'Lamborghini Gallardo', 'Lamborghini Gallardo adalah salah satu model mobil sport ikonik yang diproduksi oleh produsen mobil Italia, Lamborghini, dari tahun 2003 hingga 2013. Gallardo adalah model terlaris Lamborghini hingga saat itu, dengan lebih dari 14.000 unit terjual selama masa produksinya.', 'Gallardo.jpg', '2024-12-29 20:20:27', 'admin'),
(2, 'Lamborghini Aventador', 'Lamborghini Aventador adalah salah satu supercar ikonik yang diproduksi oleh produsen mobil mewah asal Italia, Lamborghini. Mobil ini pertama kali diperkenalkan pada tahun 2011 sebagai penerus Lamborghini Murciélago, dan telah menjadi simbol performa tinggi, desain futuristik, serta teknologi mutakhir.', 'Aventador.jpg', '2024-12-29 20:22:07', 'admin'),
(3, 'Lamborghini Huracan', 'Lamborghini Huracán adalah salah satu model supercar yang diproduksi oleh Lamborghini, sebuah produsen mobil mewah asal Italia. Diluncurkan pada tahun 2014 sebagai penerus Lamborghini Gallardo, Huracán menjadi simbol kecepatan, desain futuristik, dan teknologi canggih.', 'Huracan.jpg', '2024-12-29 14:48:11', 'admin'),
(4, 'Toyota Supra MK-4', 'Toyota Supra MK-4, juga dikenal sebagai Toyota Supra A80, adalah salah satu mobil sport paling ikonik yang diproduksi oleh Toyota. Diproduksi antara tahun 1993 hingga 2002, mobil ini terkenal karena desainnya yang futuristik, performa mesin yang luar biasa, dan popularitasnya di dunia balap serta modifikasi.', 'Mk4.jpg', '2024-12-29 14:42:49', 'admin'),
(5, 'Nissan GT-R R35', 'Nissan GT-R R35, sering disebut sebagai \"Godzilla\" dalam dunia otomotif, adalah salah satu mobil sport paling ikonik yang diproduksi oleh Nissan. Diluncurkan pertama kali pada tahun 2007, R35 adalah generasi keenam dari lini GT-R dan terkenal karena performanya yang luar biasa, teknologi canggih, dan desain yang futuristik.', 'R35.jpg', '2024-12-29 14:42:49', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `tanggal`, `gambar`, `username`) VALUES
(1, '2025-01-07 10:13:49', 'Aventador.jpg', 'admin'),
(2, '2025-01-07 10:13:49', 'Gallardo.jpg', 'admin'),
(3, '2025-01-07 10:16:26', 'Huracan.jpg', 'admin'),
(4, '2025-01-07 10:16:26', 'Mk4.jpg', 'admin'),
(5, '2025-01-07 10:17:36', 'R35.jpg', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `foto`) VALUES
(0, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
