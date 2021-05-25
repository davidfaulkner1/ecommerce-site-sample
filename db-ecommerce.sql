-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2021 at 08:56 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `g00299507`
--

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `model` varchar(25) NOT NULL,
  `brand` varchar(25) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `model`, `brand`, `price`, `image`) VALUES
(1, 'F-34 II Koa', 'Lowden', '2200', 'f34_II_koa.png'),
(2, '35 IR/SRW', 'Lowden', '1950', '35_IR_SRW.jpg'),
(3, '50 IR/SS', 'Lowden', '2350', '50_IR_SS.jpg'),
(4, 'P7D Pro Series 7', 'Takamine', '1875', 'p7d_pro_s7.png'),
(5, 'P5DC-WB Pro Series 5', 'Takamine', '1775', 'P5DC-WB_pro_s5.png'),
(6, 'P5NC Pro Series 5', 'Takamine', '1925', 'p5nc_pro_s5.png'),
(7, 'P3NC Pro Series 3', 'Takamine', '1500', 'p3nc_pro_s3.png'),
(8, 'OM', 'McNally', '3650', 'OM-mc.jpg'),
(9, 'G130', 'Lichty', '6050', 'lichty_G130.jpg'),
(10, 'G123', 'Lichty', '8350', 'lichty_G123.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
