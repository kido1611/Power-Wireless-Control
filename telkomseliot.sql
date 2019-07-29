-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 29, 2019 at 05:55 PM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telkomseliot`
--

-- --------------------------------------------------------

--
-- Table structure for table `mesin`
--

CREATE TABLE `mesin` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` varchar(100) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `telemetri`
--

CREATE TABLE `telemetri` (
  `id` int(10) UNSIGNED NOT NULL,
  `idMesin` int(11) NOT NULL,
  `idProduk` varchar(100) NOT NULL,
  `suhu` int(11) NOT NULL,
  `arus` double NOT NULL,
  `kelembapan` int(11) NOT NULL,
  `rpm` int(11) NOT NULL,
  `gas` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `count1` int(11) NOT NULL,
  `count2` int(11) NOT NULL,
  `count3` int(11) NOT NULL,
  `count4` int(11) NOT NULL,
  `count5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `telemetri`
--

INSERT INTO `telemetri` (`id`, `idMesin`, `idProduk`, `suhu`, `arus`, `kelembapan`, `rpm`, `gas`, `tanggal`, `count1`, `count2`, `count3`, `count4`, `count5`) VALUES
(1, 1, 'kmzwa8awaa', 28, 1.57, 20, 200, 10, '2019-07-19 20:48:42', 10, 10, 10, 10, 10),
(2, 0, 'kmzwa8awaa', 30, 1, 20, 10, 10, '2019-07-20 04:56:28', 10, 10, 10, 10, 8),
(3, 0, 'kmzwa8awaa', 30, 1, 20, 10, 10, '2019-07-20 04:57:05', 10, 10, 10, 10, 8),
(4, 0, 'kmzwa8awaa', 30, 1, 20, 10, 10, '2019-07-20 04:57:06', 10, 10, 10, 10, 8),
(5, 0, 'kmzwa8awaa', 30, 1, 20, 10, 10, '2019-07-20 04:57:18', 10, 10, 10, 10, 8),
(6, 0, 'kmzwa8awaa', 30, 1, 20, 10, 10, '2019-07-20 05:15:34', 10, 10, 10, 10, 8),
(7, 0, 'kmzwa8awaa', 18, 1, 20, 10, 10, '2019-07-20 05:15:35', 10, 10, 10, 10, 8),
(8, 22, 'kmzwa8awaa', 18, 1, 20, 10, 10, '2019-07-20 06:42:08', 10, 10, 10, 10, 8),
(9, 22, 'kmzwa8awaa', 30, 1, 20, 10, 10, '2019-07-20 06:42:31', 10, 10, 10, 10, 8),
(10, 22, 'kmzwa8awaa', 30, 1, 20, 10, 10, '2019-07-20 06:42:41', 10, 10, 10, 10, 8),
(11, 22, 'kmzwa8awaa', 30, 1, 20, 10, 10, '2019-07-20 07:47:12', 10, 10, 10, 10, 8),
(12, 22, 'kmzwa8awaa', 30, 1, 67, 10, 10, '2019-07-20 07:47:14', 10, 5, 10, 6, 8),
(13, 30, 'kmzwa8awaa', 31, 0.78, 20, 10, 30, '2019-07-20 08:05:24', 10, 10, 10, 8, 6),
(14, 30, 'kmzwa8awaa', 31, 0.65, 20, 10, 70, '2019-07-20 08:05:29', 10, 10, 10, 8, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mesin`
--
ALTER TABLE `mesin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telemetri`
--
ALTER TABLE `telemetri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mesin`
--
ALTER TABLE `mesin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `telemetri`
--
ALTER TABLE `telemetri`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
