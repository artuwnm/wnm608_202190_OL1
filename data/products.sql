-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 19, 2021 at 12:47 PM
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
(1, 'Rose', 15.00, 'soap', '2021-11-19 11:19:11', '2021-11-19 11:19:11', '- Hand crafted soap in Province\r\n- Ingredients are sustainably sourced and not tested on animals\r\n- Packing is recycled and print free\r\n- Pure vegetable forumla \r\n- Ecological Shea Butter base\r\n- Perfume notes from Grasse\r\n- Top Notes - Rose\r\n- Middle notes - Rose Patal\r\n- Bottom notes - Brown sugar', '', 'rose.png'),
(2, 'Pivoine', 15.00, 'soap', '2021-11-19 11:22:37', '2021-11-19 11:22:37', '- Hand crafted soap in Province\r\n-Ingredients are sustainably sourced and not tested on animals\r\n- Packing is recycled and print free\r\n- Pure vegetable forumla \r\n- Ecological Shea Butter base\r\n- Perfume notes from Grasse\r\n- Top Notes - Peach, Grapefruit, Mandarin\r\n- Middle notes - Cedrat, Cylamen, Seaspray\r\n- Bottom notes - Musk, Violet', '', 'pivoine.png'),
(3, 'Vanille', 15.00, 'soap', '2021-11-19 11:26:01', '2021-11-19 11:26:01', '- Hand crafted soap in Province\r\n- Ingredients are sustainably sourced and not tested on animals\r\n- Packing is recycled and print free\r\n- Pure vegetable forumla \r\n- Ecological Shea Butter base\r\n- Perfume notes from Grasse\r\n- Top Notes - Lemon, Passionfruit\r\n- Middle notes - Floral, Violet, Jasmine, Red Berries\r\n- Bottom notes - Gourmand', '', 'vanille.png'),
(4, 'Neroli', 15.00, 'soap', '2021-11-19 11:27:35', '2021-11-19 11:27:35', '- Hand crafted soap in Province\r\n- Ingredients are sustainably sourced and not tested on animals\r\n- Packing is recycled and print free\r\n- Pure vegetable forumla \r\n- Ecological Shea Butter base\r\n- Perfume notes from Grasse\r\n- Top Notes - Petitgrain, Orange, Basil, Galbanum\r\n- Middle notes - Jasmine, Lily of the Valley, Smooth\r\n- Bottom notes - Heliotrope', '', 'neroli.png'),
(5, 'Santal', 15.00, 'soap', '2021-11-19 11:28:39', '2021-11-19 11:28:39', '- Hand crafted soap in Province\r\n- Ingredients are sustainably sourced and not tested on animals\r\n- Packing is recycled and print free\r\n- Pure vegetable forumla \r\n- Ecological Shea Butter base\r\n- Perfume notes from Grasse\r\n- Top Notes - Red Fruits\r\n- Middle notes - Strawberry\r\n- Bottom notes - Brown sugar', '', 'santal.png'),
(6, 'Maquis', 15.00, 'soap', '2021-11-19 11:29:45', '2021-11-19 11:29:45', '- Hand crafted soap in Province\r\n- Ingredients are sustainably sourced and not tested on animals\r\n- Packing is recycled and print free\r\n- Pure vegetable forumla \r\n- Ecological Shea Butter base\r\n- Perfume notes from Grasse\r\n- Top Notes - Fresh Note, Bergamot\r\n- Middle notes - Cedarwood, Patchouli, Galbanum\r\n- Bottom notes - Musk, Sandalwood, Labdanum', '', 'maquis.png'),
(7, 'Olive', 15.00, 'soap', '2021-11-19 11:30:41', '2021-11-19 11:30:41', '- Hand crafted soap in Province\r\n- Ingredients are sustainably sourced and not tested on animals\r\n- Packing is recycled and print free\r\n- Pure vegetable forumla \r\n- Ecological Shea Butter base\r\n- Perfume notes from Grasse\r\n- Top Notes - Litsea, Petitgrain\r\n- Middle notes - Clove, Patchouli,Lavandin, Olive Leaves\r\n- Bottom notes - Pine, Musk, Precious Wood', '', 'olive.png'),
(8, 'La mer', 15.00, 'soap', '2021-11-19 11:31:40', '2021-11-19 11:31:40', '- Hand crafted soap in Province\r\n- Ingredients are sustainably sourced and not tested on animals\r\n- Packing is recycled and print free\r\n- Pure vegetable forumla \r\n- Ecological Shea Butter base\r\n- Perfume notes from Grasse\r\n- Top Notes - Fresh Note, Bergamot\r\n-Middle notes - Cedarwood, Patchouli, Galbanum\r\n- Bottom notes - Musk, Sandalwood, Labdanum', '', 'lamer.png'),
(9, 'Mistral', 15.00, 'soap', '2021-11-19 11:32:43', '2021-11-19 11:32:43', '- Hand crafted soap in Province\r\n- Ingredients are sustainably sourced and not tested on animals\r\n- Packing is recycled and print free\r\n- Pure vegetable forumla \r\n- Ecological Shea Butter base\r\n- Perfume notes from Grasse\r\n- Top Notes - Citrus, Lemon, Passionfruit\r\n- Middle notes - Floral, Violet, Jasmine, Red Berries\r\n- Bottom notes - Gourmand', '', 'mistral.png'),
(10, 'Coco', 15.00, 'soap', '2021-11-19 11:33:44', '2021-11-19 11:33:44', '- Hand crafted soap in Province\r\n- Ingredients are sustainably sourced and not tested on animals\r\n- Packing is recycled and print free\r\n-Pure vegetable forumla \r\n-Ecological Shea Butter base\r\n- Perfume notes from Grasse\r\n- Top Notes - Green notes, Bergamot,  Grapefruit, Blackcurrant buds\r\n- Middle notes - Rose, Violet, Lily of the Valley, Blackcurrant Syrup\r\n- Bottom notes - Sandalwood, Musk', '', 'coco.png'),
(11, 'Lavender', 15.00, 'soap', '2021-11-19 11:35:14', '2021-11-19 11:35:14', '- Hand crafted soap in Province\r\n- Ingredients are sustainably sourced and not tested on animals\r\n- Packing is recycled and print free\r\n- Pure vegetable forumla \r\n- Ecological Shea Butter base\r\n- Perfume notes from Grasse\r\n- Top Notes - Citrus, Lemon, Passionfruit\r\n- Middle notes - Floral, Violet, Jasmine, Red Berries\r\n- Bottom notes - Gourmand', '', 'lavender.png'),
(12, 'Musk', 15.00, 'soap', '2021-11-19 11:36:06', '2021-11-19 11:36:06', '- Hand crafted soap in Province\r\n- Ingredients are sustainably sourced and not tested on animals\r\n- Packing is recycled and print free\r\n- Pure vegetable forumla \r\n- Ecological Shea Butter base\r\n- Perfume notes from Grasse\r\n- Top Notes - Green notes, Bergamot, Grapefruit, Blackcurrant buds\r\n- Middle notes - Musk\r\n- Bottom notes - Sandalwood, Musk', '', 'musk.png');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
