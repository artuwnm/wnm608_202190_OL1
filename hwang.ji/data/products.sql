-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 07, 2021 at 02:57 AM
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
-- Database: `jh0515_wnm608`
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

INSERT INTO `products` (`id`, `name`, `price`, `category` ,`date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'Raspberry Chocolate', 4.00, 'ring', '2021-11-07 02:37:45', '2021-11-07 02:37:45', 'A puffy fresh cake donut ring topped with milk chocolate frosting and refreshing dried raspberry crumbs.', 'img/product_1.png', 'img/product_1.png'),
(2, 'Banana Chocolate', 4.00, 'ring', '2021-11-07 02:40:16', '2021-11-07 02:40:16', 'A thick layer of creamy banana chocolate and dark chocolate is drizzled over a fresh mocha cake ring.', 'img/product_2.png', 'img/product_2.png'),
(3, 'Nuts Chocolate', 4.00, 'ring', '2021-11-07 02:41:14', '2021-11-07 02:41:14', 'A thick layer of rich, delectable dark chocolate is drizzled covered over a fresh cake ring.', 'img/product_3.png', 'img/product_3.png'),
(4, 'Puffy Vinilla', 4.50, 'filled', '2021-11-07 02:41:50', '2021-11-07 02:41:50', 'A puffy, freshly baked donut dusted with sugar and filled with Bavarian cream.', 'img/product_4.png', 'img/product_4.png'),
(5, 'Strawberry Frosted', 4.50, 'ring', '2021-11-07 02:42:38', '2021-11-07 02:42:38', 'A puffy fresh donut ring topped with strawberry frosting and colorful sprinkles.', 'img/product_5.png', 'img/product_5.png'),
(6, 'Chocolate Cake', 4.00, 'ring', '2021-11-07 02:43:12', '2021-11-07 02:43:12', 'Chocolate cake donut baked from scratch with 100 percent natural cocoa powder coated with a glossy sugar.', 'img/product_6.png', 'img/product_6.png'),
(7, 'Plain Glazed ', 3.00, 'ring', '2021-11-07 02:44:09', '2021-11-07 02:44:09', 'The donut ring is fluffy and airy, with a glossy sugar coating that has a rich flavor.', 'img/product_7.png', 'img/product_7.png'),
(8, 'Caramel Drizzled', 3.50, 'ring', '2021-11-07 02:47:09', '2021-11-07 02:47:09', 'A puffy fresh donut ring topped with white chocolate frosting and caramel drizzled.', 'img/product_8.png', 'img/product_8.png'),
(9, 'New York Cheese cake', 4.50, 'filled', '2021-11-07 02:47:47', '2021-11-07 02:47:47', 'Topped with chocolate frosting & New York cheese cake crumbs and filled with Bavarian cream.', 'img/product_9.png', 'img/product_9.png'),
(10, 'Peanut butter Jelly', 4.50, 'filled', '2021-11-07 02:49:01', '2021-11-07 02:49:01', 'A puffy fresh donut topped with peanut butter frosting & crushed peanuts and filled with strawberry jam.', 'img/product_10.png', 'img/product_10.png'),
(11, 'Salted Caramel', 4.00, 'ring', '2021-11-07 02:49:48', '2021-11-07 02:49:48', 'A ring of fluffy fresh donuts topped with caramel icing, dark chocolate drizzle, and salt.', 'img/product_11.png', 'img/product_11.png'),
(12, 'Lemon Buttermilk ', 4.50, 'ring', '2021-11-07 02:50:35', '2021-11-07 02:50:35', 'Creamy buttermilk donut is lightly glazed with this bright, tartly sweet topping, made with fresh lemon juice.', 'img/product_12.png', 'img/product_12.png');

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
