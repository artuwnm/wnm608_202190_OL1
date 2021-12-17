-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 07, 2021 at 10:45 PM
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
-- Database: `xiaoyuma_WNM608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `url` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `email`, `url`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `image`) VALUES
(1, 'duck', '', 'http://code.xiaoyu-ma.com/wnm608/ma.xiaoyu/index.php', 52.00, 'vintage', '2021-11-07 17:12:03', '2021-11-07 17:12:03', 'toy from japan ', 'duck_vintage_thumb.jpg', 'duck_vintage_1.jpg,duck_vintage_2.jpg,duck_vintage_3.jpg'),
(2, 'girl', '', 'http://code.xiaoyu-ma.com/wnm608/ma.xiaoyu/index.php', 32.00, 'souvenir', '2021-11-07 21:09:54', '2021-11-07 21:09:54', 'souvenir toy from the sky tree tower', 'girl_souvenir_thumb.jpg', 'girl_souvenir_1.jpg,girl_souvenir_2.jpg'),
(3, 'bear', '', 'http://code.xiaoyu-ma.com/wnm608/ma.xiaoyu/index.php', 52.00, 'vintage', '2021-11-07 21:36:12', '2021-11-07 21:36:12', 'bear from a tv show', 'bear_soft_thumb.jpg', 'bear_vintage_1.jpg,bear_vintage_2.jpg, bear_vintage_3.jpg'),
(4, 'penguin', '', 'http://code.xiaoyu-ma.com/wnm608/ma.xiaoyu/index.php', 32.00, 'souvenir', '2021-11-07 21:38:36', '2021-11-07 21:38:36', 'penguin from sky tree tower', 'penguin_souvenir_thumb.jpg', 'penguin_souvenir_1.jpg, penguin_souvenir_2.jpg, penguin_souvenir_3.jpg'),
(5, 'shibainu', '', 'http://code.xiaoyu-ma.com/wnm608/ma.xiaoyu/index.php', 19.00, 'souvenir', '2021-11-07 21:41:37', '2021-11-07 21:41:37', 'a long shiba inu from a street from kyoto', 'shibainu_souvenir_thumb.jpg', 'shibainu_souvenir_1.jpg, shibainu_souvenir_2.jpg, \r\nshibainu_souvenir_3.jpg'),
(6, 'dog', '', 'http://code.xiaoyu-ma.com/wnm608/ma.xiaoyu/index.php', 32.00, 'souvenir', '2021-11-07 22:25:09', '2021-11-07 22:25:09', 'souvenir from sky tree tower', 'dog_siuvenir_thumb.jpg', 'dog_siuvenir_1.jpg, dog_siuvenir_2.jpg'),
(7, 'egg_big', '', 'http://code.xiaoyu-ma.com/wnm608/ma.xiaoyu/index.php', 12.00, 'soft', '2021-11-07 22:28:30', '2021-11-07 22:28:30', 'egg gudetama from japan', 'egg_soft_thumb.jpg', 'egg_soft_1.jpg, egg_soft_2.jpg'),
(8, 'egg_small', '', 'http://code.xiaoyu-ma.com/wnm608/ma.xiaoyu/index.php', 9.00, 'soft', '2021-11-07 22:30:35', '2021-11-07 22:30:35', 'egg gudetama from japan', 'eggsmall_soft_thumb.jpg', 'eggsmall_soft_1.jpg, eggsmall_soft_2.jpg'),
(9, 'pillow', '', 'http://code.xiaoyu-ma.com/wnm608/ma.xiaoyu/index.php', 52.00, 'souvenir', '2021-11-07 22:32:52', '2021-11-07 22:32:52', 'girl pillow from sky tree tower', 'pillow_souvenir_thumb.jpg', 'pillow_souvenir_1.jpg, pillow_soft_2.jpg, pillow_souvenir_3.jpg'),
(10, 'shiba_red', '', 'http://code.xiaoyu-ma.com/wnm608/ma.xiaoyu/index.php', 19.00, 'hard', '2021-11-07 22:35:12', '2021-11-07 22:35:12', 'a set of red color shiba inu toy for display', 'shibared_hard_thumb.jpg', 'shibared_hard_1.jpg, shibared_hard_2.jpg, shibared_hard_3.jpg'),
(11, 'shiba_black', '', 'http://code.xiaoyu-ma.com/wnm608/ma.xiaoyu/index.php', 19.00, 'hard', '2021-11-07 22:37:38', '2021-11-07 22:37:38', 'a set of black shiba inu toy for display', 'shibablack_hard_thumb.jpg', 'shibablack_hard_1.jpg, shibablack_hard_2.jpg, shibablack_hard_3.jpg'),
(12, 'seasonal_book', '', 'http://code.xiaoyu-ma.com/wnm608/ma.xiaoyu/index.php', 32.00, 'book', '2021-11-07 22:44:26', '2021-11-07 22:44:26', 'seasonal art book from japan', 'seasonalbook_book_thumb.jpg', 'seasonalbook_book_1.jpg, seasonbook_book_2.jpg, seasonalbook_book_3.jpg');

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
