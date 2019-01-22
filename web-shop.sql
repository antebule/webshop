-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2019 at 04:16 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `uredaji`
--

CREATE TABLE `uredaji` (
  `uredaj_id` int(20) NOT NULL,
  `uredaj_ime` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `uredaj_brend` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `uredaj_cijena` decimal(8,2) NOT NULL,
  `uredaj_ram` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `uredaj_kapacitet` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `uredaj_kamera` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `uredaj_slika` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `uredaj_status` enum('0','1') COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `uredaji`
--

INSERT INTO `uredaji` (`uredaj_id`, `uredaj_ime`, `uredaj_brend`, `uredaj_cijena`, `uredaj_ram`, `uredaj_kapacitet`, `uredaj_kamera`, `uredaj_slika`, `uredaj_status`) VALUES
(1, 'Samsung s9', 'samsung', '1000.00', '8GB', '128GB', '16mpx', 'samsung-s9.png', '0'),
(2, 'honor 10', 'honor', '599.00', '8GB', '64GB', '16mpx', 'honor.png', '1'),
(3, 'Iphone 6', 'apple', '499.99', '4GB', '32GB', '16mpx', 'iphone6.png', '1'),
(4, 'iphone7', 'apple', '890.50', '8GB', '32GB', '16mpx', 'iphone7.png', '1'),
(5, 'iphone x', 'apple', '1299.99', '16GB', '128GB', '16MP', 'iphonex.png', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uredaji`
--
ALTER TABLE `uredaji`
  ADD PRIMARY KEY (`uredaj_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uredaji`
--
ALTER TABLE `uredaji`
  MODIFY `uredaj_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
