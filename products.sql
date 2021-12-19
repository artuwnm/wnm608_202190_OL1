-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 08, 2021 at 12:28 AM
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
-- Database: `yoomi_wnm608`
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
  `date_motify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `date_create`, `date_motify`, `description`, `thumbnail`, `images`) VALUES
(1, 'Balance Candle', 65.00, 'candle', '2021-11-07 23:03:26', '0000-00-00 00:00:00', 'This candle is designed to create a state of balance in one\'s life. From work to love to all other arenas in life, finding balance and maintaining priorities is key. ', 'img/balance.jpg', 'balance.jpg, balance_2.jpg'),
(2, 'Align Candle', 65.00, 'candle', '2021-11-07 23:05:21', '0000-00-00 00:00:00', 'The oils of camphor disperse and create a higher way of aligning and setting a tone to clear out what is not working. ', 'img/align.jpg', 'align_1.jpg'),
(3, 'Activate Candle', 65.00, 'candle', '2021-11-07 23:06:52', '0000-00-00 00:00:00', 'This candle is meant to help activate and energize the body for inner spiritual growth and awakening, representing the Pyramid geometry. ', 'img/activate.jpg', 'activate_1'),
(4, 'Chees Napkin', 48.00, 'kitchen', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Say cheese please…this vintage French fromages illustration is screen on a se of four white washed linen napkins using ecologically sound, water-based, non-toxic inks and pure linen.', 'img/cheese.jpg', 'cheese_1'),
(5, 'Fish Napkin', 64.00, 'kitchen', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Made in Paris with natural and durable materials of water-based, non-toxic inks and pure linen the fish bottle illustration on washed linen is a nostalgia inducing, conversation starter.', 'img/fish.jpg', 'fish_1.jpg'),
(6, 'Lobster Napkin', 64.00, 'kitchen', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'This pure stone washed linen napkin is printed in Paris from a vintage illustration using natural and durable materials of water-based, non-toxic inks.', 'img/lobster.jpg', 'lobster_1.jpg'),
(7, 'Wine Napkin', 64.00, 'kitchen', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Louise, the clever designer behind these tea towels, uses vintage French postcards as inspiration for her white and flax pure linen kitchen towels.', 'img/wine.jpg', 'wine_1.jpg'),
(8, 'Afternoon Tea Set', 80.00, 'tea', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'No. 12, Le Hammeau, 43g • A beautiful organic herbal blend evocative of summer thrills, this tisane is the epitome of refreshing. With light-hearted notes of lemongrass, verbena, lavender, mint, and rose, this blend is perfect at any time of the day. ', 'img/afternoon.jpg', 'afternoon_1.jpg'),
(9, 'Winter Collection', 65.00, 'tea', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'No. 01, Bellocq Breakfast, 86g • A toasty, full-bodied blend of organic Indian, Chinese, and Ceylon black teas, our take on this classic blend brews smooth with a rich, wildflower honey finish. Delicious with or without milk and that teaspoon of sugar. ', 'img/winter.jpg', 'winter_1.png'),
(10, 'Atelier Candles in Brass\r\n', 86.00, 'candle', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Inspired by our fragrant, signature tea blends, we are delighted to share our collection of hand-poured, scented candles. These radiant beauties are created from a unique blend of soy wax, the finest fragrances, essential oils and a wick of woven (lead-free) cotton.  The vessels are heavy gauge solid brass with a solid brass lid, expertly crafted by our metal-smiths and will acquire a delicate patina over time.  ', 'img/atelier.jpg', 'atelier_1.jpeg'),
(11, 'Bellocq Brass Tea Strainers', 18.00, 'tea', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Bellocq metal artisans, for the more intimate brew, have designed this versatile, hand-crafted brass tea strainer, an in-house favorite. Simple and elegant, this strainer will quickly become your best friend. Available in two sizes, the Petite Basket Brass Strainer is built to perch on the edge of your mug and designed to strain leaves from a larger pot into your cup. The Deep Basket Brass Strainer fits perfectly into a teapot or large cup to either brew or strain loose leaf tea. ', 'img/strainer.jpg', 'strainer_1.jpg'),
(12, 'Hasami Porcelain Tea Service', 250.00, 'tea', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Why not share your finest tea with your finest friends? Shinamoto\'s beautiful pieces are crafted to fit together, stacked, towering, and paired with tea and a warm meal. Our own atelier is full of Hasami porcelain, oft-used and always loved. ', 'img/tea_serve.jpg', 'tea_serve_1.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
