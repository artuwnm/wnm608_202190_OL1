-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 08, 2021 at 12:06 AM
-- Server version: 5.6.51-cll-lve
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wdsungwnm608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `brand` varchar(64) NOT NULL,
  `model` varchar(128) NOT NULL,
  `color` varchar(64) NOT NULL,
  `m/w` varchar(3) NOT NULL,
  `size` decimal(10,2) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand`, `model`, `color`, `m/w`, `size`, `date_create`, `date_modify`, `thumbnail`, `images`, `price`) VALUES
(1, 'Nike', 'Vapor Max', 'Grey/Orange', 'M', 10.50, '2021-11-07 23:51:04', '2021-11-07 23:51:04', 'vapormax_thumb.jpg', 'vapormax_1.jpg', 199.99),
(2, 'Nike', 'Air Max 97', 'Black', 'M', 10.50, '2021-11-07 23:53:30', '2021-11-07 23:53:30', 'airmax97_humb.jpg', 'airmax97_1.jpg', 199.99),
(3, 'Converse', 'ConverseXCDG', 'White/Red', 'M', 11.00, '2021-11-07 23:54:20', '2021-11-07 23:54:20', 'cdg_thumb.jpg', 'cdg_1.jpg', 150.99),
(4, 'Adidas', 'Yeezy 350 V2', 'Beige', 'M', 11.00, '2021-11-07 23:55:35', '2021-11-07 23:55:35', 'yeezy350_thumb.jpg', 'yeezy350_1.jpg', 270.00),
(5, 'Nike', 'Pegasus Trail 3 Gore-Tex', 'Black/White/Red', 'M', 10.00, '2021-11-07 23:56:51', '2021-11-07 23:56:51', 'pegasus_thumb.jpg', 'pegasus_1.jpg', 160.00),
(6, 'Nike', 'Air Presto', 'White/Red', 'M', 10.50, '2021-11-07 23:57:29', '2021-11-07 23:57:29', 'presto_thumb.jpg', 'presto_1.jpg', 130.00),
(7, 'Nike', 'SuperRep Go 2', 'White/Orange', 'M', 10.50, '2021-11-07 23:58:27', '2021-11-07 23:58:27', 'superrep_thumb.jpg', 'superrep_1.jpg', 100.00),
(8, 'Nike', 'Air Max 270', 'Black', 'W', 6.50, '2021-11-07 23:59:38', '2021-11-07 23:59:38', 'am270_thumb.jpg', 'am270_1.jpg', 150.00),
(9, 'Converse', 'Chuck 70', 'Black', 'M', 11.00, '2021-11-08 00:01:29', '2021-11-08 00:01:29', 'chuck70_thumb.jpg', 'chuck70_1.jpg', 85.00),
(10, 'Converse', 'Crafted Boot Chuck 70', 'Brown', 'M', 11.00, '2021-11-08 00:02:59', '2021-11-08 00:02:59', 'chuck70boots_thumb.jpg', 'chuck70boots_1.jpg', 120.00),
(11, 'Adidas', 'Daily 3.0', 'Grey/Black', 'M', 10.00, '2021-11-08 00:04:55', '2021-11-08 00:04:55', 'daily3_thumb.jpg', 'daily3_1.jpg', 60.00),
(12, 'Adidas', 'Super Star', 'White', 'M', 11.00, '2021-11-08 00:05:52', '2021-11-08 00:05:52', 'superstar_thumb.jpg', 'superstar_1.jpg', 85.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
