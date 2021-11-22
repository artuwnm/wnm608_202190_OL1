-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 10, 2021 at 10:56 PM
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
-- Database: `euniceso_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `author` varchar(64) NOT NULL,
  `illustrator` varchar(64) NOT NULL,
  `category` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `publisher` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `author`, `illustrator`, `category`, `description`, `price`, `thumbnail`, `images`, `date_create`, `date_modify`, `publisher`) VALUES
(1, 'The Little Mermaid', 'Hans Christian Andersen', 'Charles Santore', 'Children\'s Classics', 'The beloved tale of The Little Mermaid is faithfully reproduced in this new edition of Hans Christian Anderson’s classic. Original art by critically acclaimed New York Times bestselling illustrator Charles Santore is masterfully reproduced using the most advanced technology to bring these breathtaking illustrations to life like never before. The vivid colors and captivating spreads make this beautiful story one to be treasured in every home.', 18.99, 'the_little_mermaid_thumb.png', 'the_little_mermaid_01,the_little_mermaid_02,the_little_mermaid_03', '2021-11-10 21:41:17', '2021-11-10 21:41:17', 'Applesauce Press'),
(3, 'Animal Farm', 'George Orwell', '', 'Fiction', 'George Orwell\'s timeless and timely allegorical novel—a scathing satire on a downtrodden society’s blind march towards totalitarianism.', 7.89, 'animal_farm_thumb.png', 'animal_farm_01.png,animal_farm_02.png', '2021-11-10 21:56:19', '2021-11-10 21:56:19', 'Signet'),
(4, 'Kay Nielsen. East of the Sun and West of the Moon', 'Noel Daniel', 'Kay Nielsen', 'Children\'s Classics', 'Step into a world of star-crossed lovers, magical winds, mischievous giants, and trolls, through some of the most exquisite illustrations in publishing history. In this gorgeous reprint, TASCHEN revives the most ambitious publication project of beloved Danish artist Kay Nielsen, one of the most famous children’s book illustrators of all time.\r\n\r\nFirst published in 1914, East of the Sun and West of the Moon is a celebrated collection of fifteen fairy tales, gathered by legendary Norwegian folklorists Peter Christen Asbjørnsen and Jørgen Engebretsen Moe on their journeys across Norway in the mid-nineteenth century. Nielsen’s illustration edition of Asbjørnsen and Moe’s tales is considered a jewel of early 20th-century children\'s literature, highly sought-after by art and book collectors worldwide. An original signed copy of the book sold at auction in 2008 commanded the highest price ever paid for an illustrated children’s book.', 30.99, 'east_of_the_sun_thumb.png', 'east_of_the_sun_01.png,east_of_the_sun_02.png,east_of_the_sun_03.png', '2021-11-10 21:56:19', '2021-11-10 21:56:19', 'TASCHEN'),
(5, 'Design Systems', 'Alla Kholmatova', '', 'Design', 'As the web continues to become more complex, designing static pages has become untenable, so that many of us have started to approach design in a more systematic way. In this book, Alla Kholmatova sets out to identify what makes an effective design system that can empower teams to create great digital products.', 20.00, 'design_systems_thumb.png', 'design_systems_01.png,design_systems_02.png', '2021-11-10 22:02:44', '2021-11-10 22:02:44', 'Smashing Magazine'),
(6, 'Dregs', 'Jorn Lier Horst', '', 'Scandinavian Noir', 'A severed left foot in a training shoe washes up on the shore in Stavern. Then another, and yet another: four left feet in a single week. Neither police Inspector William Wisting nor his journalist daughter, Line, have ever seen anything like this.', 12.99, 'dregs_thumb.png', 'dregs_01.png,dregs_02.png', '2021-11-10 22:07:23', '2021-11-10 22:07:23', 'Sandstone Press'),
(7, 'Failed It!', 'Erik Kessels', '', 'Design', 'A fun and fabulous take on the art of making mistakes. Erik Kessels celebrates imperfection and failure and shows why they are an essential part of the creative process.', 12.99, 'failed_it_thumb.png', 'failed_it_01.png,failed_it_02.png', '2021-11-10 22:10:03', '2021-11-10 22:10:03', 'Phaidon Press'),
(8, 'Andersen\'s Fairy Tales', 'Hans Christian Andersen, Anthea Bell', 'Lisbeth Zwerger', 'Children\'s Classics', 'This handsome and easy-to-read mini edition features eight tales from beloved storyteller Hans Christian Andersen and pairs old favorites, including \"Thumbelina\" and \"The Emperor\'s New Clothes,\" with lesser-known tales, such as \"The Sandman\" and \"The Jumper.\" Acclaimed children\'s book illustrator Lisbeth Zwerger\'s evocative illustrations perfectly capture the mood of these enduring tales.', 10.89, 'hans_andersen_thumb.png', 'hans_andersen_01.png,hans_andersen_02.png,hans_andersen_03.png', '2021-11-10 22:15:19', '2021-11-10 22:15:19', 'mineditionUS'),
(9, 'Just My Type: A Book About Fonts', 'Simon Garfield', '', 'Design', 'A delightfully inquisitive tour that explores the rich history and the subtle powers of fonts.\r\nFonts surround us every day, on street signs and buildings, on movie posters and books, and on just about every product that we buy. But where do fonts come from and why do we need so many? Who is behind the businesslike subtlety of Times New Roman, the cool detachment of Arial, or the maddening lightness of Comic Sans (and the movement to ban it)? Simon Garfield embarks on a mission to answer these questions and more, and reveal what may be the very best and worst fonts in the world.', 13.99, 'just_the_type_thumb.png', 'just_the_type_01.png,just_the_type_02.png', '2021-11-10 22:18:22', '2021-11-10 22:18:22', 'Avery'),
(10, 'Norwegian Wood', 'Haruki Murakami', '', 'Fiction', 'Stunning and elegiac, Norwegian Wood first propelled Haruki Murakami into the forefront of the literary scene.\r\n\r\nToru, a serious young college student in Tokyo, is devoted to Naoko, a beautiful and introspective young woman, but their mutual passion is marked by the tragic death of their best friend years before. As Naoko retreats further into her own world, Toru finds himself drawn to a fiercely independent and sexually liberated young woman.', 12.99, 'norwegian_wood_thumb.png', 'norwegian_wood_01.png,norwegian_wood_02.png', '2021-11-10 22:23:54', '2021-11-10 22:23:54', 'Vintage'),
(11, 'Phantom', 'Jo Nesbo', '', 'Scandinavian Noir', 'Inspector Harry Hole attempts to exonerate his would-be son Oleg in this installment of Jo Nesbø’s New York Times bestselling series.\r\n\r\nWhen Harry Hole moved to Hong Kong, he thought he was escaping the traumas of his life in Oslo and his career as a detective for good. But now, the unthinkable has happened—Oleg, the boy he helped raise, has been arrested for killing a man. Harry can\'t believe that Oleg is a murderer, so he returns to hunt down the real killer.', 14.99, 'phantom_thumb.png', 'phantom_01.png,phantom_02.png', '2021-11-10 22:27:28', '2021-11-10 22:27:28', 'Vintage Crime/Black Lizard'),
(12, 'Silk', 'Alessandro Baricco', '', 'Fiction', 'In the 1860s, when Japan is still closed to foreigners, a young French merchant called Herve Joncour makes a series of clandestine journeys across Siberia to Japan, at first to purchase silkworm eggs, and later to pursue an affair with a Japanese nobleman\'s concubine', 10.99, 'silk_thumb.png', 'silk_01.png,silk_02.png', '2021-11-10 22:30:46', '2021-11-10 22:30:46', 'Vintage International'),
(13, 'The Catcher in the Rye', 'J. D. Salinger', '', 'Fiction', 'Anyone who has read J.D. Salinger\'s New Yorker stories--particularly A Perfect Day for Bananafish, Uncle Wiggily in Connecticut, The Laughing Man, and For Esme With Love and Squalor--will not be surprised by the fact that his first novel is full of children. The hero-narrator of The Catcher in the Rye is an ancient child of sixteen, a native New Yorker named Holden Caulfield.\r\n\r\nThrough circumstances that tend to preclude adult, secondhand description, he leaves his prep school in Pennsylvania and goes underground in New York City for three days. The boy himself is at once too simple and too complex for us to make any final comment about him or his story. Perhaps the safest thing we can say about Holden is that he was born in the world not just strongly attracted to beauty but, almost, hopelessly impaled on it.', 12.99, 'the_catcher_in_the_rye_thumb.png', 'the_catcher_in_the_rye_01.png,the_catcher_in_the_rye_02.png', '2021-11-10 22:34:34', '2021-11-10 22:34:34', 'Bay Back Books'),
(14, 'The Caveman', 'Jorn Lier Horst', '', 'Scandinavian Noir', 'Only three houses away from the policeman\'s home, a man has been sitting dead in front of his television set for four months. There are no indications that anything criminal has taken place. Viggo Hansen was a man nobody ever noticed, even though he lived in the midst of a close-knit community. His death doesn\'t hit the headlines, but there is something about the case that catches the attention of William Wisting\'s journalist daughter, Line, and she decides to write a newspaper article with a different twist for the festive season: the portrait of a completely anonymous and obscure person whose death goes unremarked and unmourned.', 12.99, 'the_caveman_thumb.png', 'the_caveman_01.png,the_caveman_02.png', '2021-11-10 22:38:21', '2021-11-10 22:38:21', 'B00RKPCFKQ'),
(15, 'The New Typography', 'Jan Tschichold', '', 'Design', 'Since its initial publication in Berlin in 1928, Jan Tschichold\'s The New Typography has been recognized as the definitive treatise on book and graphic design in the machine age. First published in English in 1995, with an excellent introduction by Robin Kinross, this new edition includes a foreword by Rich Hendel, who considers current thinking about Tschichold\'s life and work.', 32.99, 'the_new_typography_thumb.png', 'the_new_typography_01.png,the_new_typography_02.png', '2021-11-10 22:42:02', '2021-11-10 22:42:02', 'University of California Press'),
(16, 'The Whisperer', 'Karin Fossum', '', 'Scandinavian Noir', 'This psychologically acute thriller from the queen of Norwegian crime fiction asks: How does a lonely, quiet woman come to brutally kill a man?\r\n\r\nRagna Riegel is a woman of routines. She sits in the same seat on the bus every day on her way to her predictable job at a supermarket. On her way back to the house she has always lived in, she visits the same local shop. She feels safe, until one day she receives a letter with a threatening message scrawled in capital letters. Ragna’s carefully constructed life beings to unravel into a nightmare. Isolated and threatened by an unknown enemy, she must use all her means to defend herself. When the worst happens, Inspector Konrad Sejer is called in to interrogate Ragna. Is this unassuming woman out of her depth, or is she hiding a dark secret?\r\n', 9.99, 'the_whisperer_thumb.png', 'the_whisperer_01.png,the_whisperer_02.png', '2021-11-10 22:48:22', '2021-11-10 22:48:22', 'Harvill Secker'),
(17, 'Where the Wild Things Are', 'Maurice Sendak', 'Maurice Sendak', 'Children\'s Classics', 'Maurice Sendak\'s Caldecott Medal-winning picture book has become one of the most highly acclaimed and best-loved children\'s books of all time. A must for every child\'s bookshelf.\r\n\r\nThis iconic story has inspired a movie, an opera, and the imagination of generations. When Max dresses in his wolf suit and causes havoc in the house, his mother sends him to bed. From there, Max sets sail to an island inhabited by the Wild Things, who name him king and share a wild rumpus with him. But then from far away across the world, Max smells good things to eat...', 23.99, 'where_the_wild_things_are_thumb.png', 'where_the_wild_things_are_01.png,where_the_wild_things_are_02.png,where_the_wild_things_are_03.png', '2021-11-10 22:52:10', '2021-11-10 22:52:10', 'HarperCollins');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
