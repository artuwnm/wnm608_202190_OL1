-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 11, 2021 at 07:15 PM
-- Server version: 5.7.35-cll-lve
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
-- Database: `jiangyilong_wnm608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'aj1atmosphere', 185.00, 'shoes', '2021-12-11 19:10:02', '2021-12-11 19:10:02', 'Good shoes!', 'aj1atmosphere.jpg', 'aj1atmosphere.jpg'),
(2, 'aj1awok', 170.00, 'shoes', '2021-12-11 19:10:28', '2021-12-11 19:10:28', 'Good shoes!', 'aj1awok.jpg', 'aj1awok.jpg'),
(3, 'aj1blacksail', 100.00, 'shoes', '2021-12-11 19:10:52', '2021-12-11 19:10:52', 'Good shoes!', 'aj1blacksail.jpg', 'aj1blacksail.jpg'),
(4, 'aj1Bone', 200.00, 'shoes', '2021-12-11 19:11:24', '2021-12-11 19:11:24', 'Good shoes!', 'aj1Bone.jpg', 'aj1Bone.jpg'),
(5, 'aj1Bordeaux', 300.00, 'shoes', '2021-12-11 19:11:52', '2021-12-11 19:11:52', 'Good shoes!', 'aj1Bordeaux.jpg', 'aj1Bordeaux.jpg'),
(6, 'aj1Couture', 500.00, 'shoes', '2021-12-11 19:12:23', '2021-12-11 19:12:23', 'Good shoes!', 'aj1Couture.jpg', 'aj1Couture.jpg'),
(7, 'aj1diptoe', 260.00, 'shoes', '2021-12-11 19:12:47', '2021-12-11 19:12:47', 'Good shoes!', 'aj1diptoe.jpg', 'aj1diptoe.jpg'),
(8, 'aj1greyonyx', 185.00, 'shoes', '2021-12-11 19:13:13', '2021-12-11 19:13:13', 'Good shoes!', 'aj1greyonyx.jpg', 'aj1greyonyx.jpg'),
(9, 'aj1letma', 400.00, 'shoes', '2021-12-11 19:13:41', '2021-12-11 19:13:41', 'Good shoes!', 'aj1letma.jpg', 'aj1letma.jpg'),
(10, 'aj1light', 430.00, 'shoes', '2021-12-11 19:14:09', '2021-12-11 19:14:09', 'Good shoes!', 'aj1light.jpg', 'aj1light.jpg'),
(11, 'aj1mid', 600.00, 'shoes', '2021-12-11 19:14:39', '2021-12-11 19:14:39', 'Good shoes!', 'aj1mid.jpg', 'aj1mid.jpg'),
(12, 'aj1Pollen', 170.00, 'shoes', '2021-12-11 19:15:05', '2021-12-11 19:15:05', 'Good shoes!', 'aj1Pollen.jpg', 'aj1Pollen.jpg');

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
