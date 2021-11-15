-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 14, 2021 at 01:41 PM
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
-- Database: `gyyashley_wnm608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `catgory` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `catgory`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'Zebra Rope Squeaky Toy', 4.49, 'toys', '2021-11-08 00:36:38', '2021-11-08 00:36:38', 'Send your pup on a safari of fun! This zebra rope toy is made for everyday, interactive play—from fetch to catch and all other kinds of interactive games. With a knotted ball in the middle, four rope legs sticking out of the ball and a squeaky zebra head on top, this toy is made to keep your pup engaged in playtime and up for all the exercise they need.', 'img/toy1', 'img/toy1_1,img/toy1_2'),
(2, 'Cozie Moose Plush Toy', 11.49, 'toys', '2021-11-08 00:42:05', '2021-11-08 00:42:05', 'The KONG Cozies are cute, soft and cuddly plush toys made with an extra layer of material, so they’re extra tough. Cozies are perfect for a game of fetch or as a comfort toy for your furry friend. Grab one of the 10 amazingly cute Cozie characters for your dog and we know your dog will love you for it.', 'img/toy2', 'img/toy2_1,img/toy2_2'),
(3, 'Squeezz Ball Toy', 4.49, 'toys', '2021-11-08 00:45:02', '2021-11-08 00:45:02', 'The KONG Squeezz Ball has a recessed squeaker that gives the safest and funnest squeak of any toy out there. Great for games of fetch, the erratic bounce and squeak guarantee tons of fun for you and your dog.', 'img/toy3', 'img/toy3_1,img/toy3_2'),
(4, 'Bacon Flavor Chew Toy', 10.99, 'treats', '2021-11-08 00:53:41', '2021-11-08 00:53:41', 'Benebone\'s Wishbone Chew isn\'t your dog\'s average chew toy. Made in the USA from durable nylon and real USA-sourced bacon throughout, the ergonomic wishbone will keep your dog chewing with delight! Each prong has deep flavor grooves to keep him interested and the unique, paw-friendly shape makes gripping extra easy. As if that wasn\'t enough, with your purchase you\'ll also be supporting animal welfare nationwide as a portion of all Benebone sales are donated to animal support organizations!', 'img/treat1', 'img/treat1_1,img/treat1_2'),
(5, 'Frolic Squeaky Latex Toy', 3.86, 'toys', '2021-11-07 23:04:03', '2021-11-07 23:04:03', 'Hartz Frisky Frolic Latex Squeakable Dog Toy brings chewing, chasing and fetching fun to your pup. These charming characters are full of color and attitude, taking cool to a whole new level. Made from rugged latex material, these toys are made to last. Their textured surface provides a fun and stimulating chew experience. Great for hours of indoor or outdoor play.', 'img/toy4', 'img/toy4_1,img/toy4_2'),
(6, 'Classic Flyer Dog Toy', 10.99, 'toys', '2021-11-07 23:04:03', '2021-11-07 23:04:03', 'The KONG Flyer is the best soft rubber disc on the market. Made with durable KONG Classic rubber, the Flyer won’t hurt a dog\'s teeth during fun games of fetch and catch.', 'img/toy5', 'img/toy5_1,img/toy5_2'),
(7, 'Donutz Squeaky Plush Toy', 3.79, 'toys', '2021-11-07 23:04:03', '2021-11-07 23:04:03', 'Description\r\nZippyPaws Donutz Squeaky Plush No Stuffing Dog Toy features a fun, cute donut design. Each donut is filled with two propriety crescent-shaped squeakers. These fun toys are designed for small- and medium-sized dogs who love to squeak, with no stuffing to ensure they last longer with less mess.', 'img/toy6', 'img/toy6_1,img/toy6_2'),
(8, 'Squeezz Crackle Bone', 5.59, 'treats', '2021-11-07 23:04:03', '2021-11-07 23:04:03', 'KONG Crackle is a new twist on a fun and favorite line—KONG Squeezz! This toy features a unique and enticing crackle sound, which is paw-fect for quiet play. Squeezz Crackle is brightly colored and boasts an eye-catching sparkle. The flexible material is great for both indoor and outdoor play. To really whip your pup into shape, give this toy a toss and watch it land with an erratic bounce for a fun game of fetch. KONG’s Squeezz Crackle Bone just might be your dog’s new favorite toy!', 'img/treat2', 'img/treat2_1'),
(9, 'CuteSeas Octopus Dog Toy', 6.47, 'toys', '2021-11-07 23:04:03', '2021-11-07 23:04:03', 'Cuddling with sea creatures has never been this cute. KONG CuteSeas are made of soft corduroy for snuggling. They also contain a squeaker and make a crinkle sound during playtime.\r\n\r\n', 'img/toy7', 'img/toy7_1,img/toy7_2'),
(10, 'SmartSticks Peanut Butter Treats', 7.02, 'treats', '2021-11-07 23:04:03', '2021-11-07 23:04:03', 'Many veterinarians are concerned with the potential health risks associated with dogs consuming rawhide. Rawhide-free SmartSticks chews made with real chicken, vegetables and other healthy ingredients dogs love provide your canine companion with needed chewing exercise and great taste. These chew treats are the healthier alternative to regular rawhide treats which may cause intestinal blockages. SmartBones are 99.2% digestible, which is higher than the digestibility of premium dog foods (85% digestibility). Smart chews for smart dogs!', 'img/treat3', 'img/treat3_1,img/treat3_2,img/treat3_3,img/treat3_4'),
(11, 'Soft&Chewy Beef&Filet Mignon Treats', 11.98, 'treats', '2021-11-07 23:04:03', '2021-11-07 23:04:03', 'Milk-Bone Soft & Chewy Beef & Filet Mignon Recipe Dog Treats are savory, tender treats made with real beef and filet mignon infused with a natural smoke flavor. Their gourmet meaty taste is sure to spark pure joy in your pup as soon as he hears the crinkle of the bag and smells the delicious aroma of premium beef. With their pliable texture, these bone-shaped snacks are easier to chew and make the perfect reward for dogs with tender gums, senior dogs or any dog that prefers a softer treat. You can feel good about giving your pup such a decadent treat because it’s fortified with 12 vitamins and minerals to help keep dogs at their best.', 'img/treat4', 'img/treat4_1,img/treat4_2'),
(12, 'Beef & Cheese Flavor Treats', 4.46, 'treats', '2021-11-07 23:04:03', '2021-11-07 23:04:03', 'If you’re wondering what could make a meaty treat even better, Snausages In a Blanket Beef & Cheese Flavor Dog Treats are the answer. Beef is appetizing on its own, but this treat wraps it up in delicious cheese to intensify the flavor factor. No dog can refuse the golden outer layer of cheese with a mouthwatering beefy center that creates an exciting fusion of flavors. It’s like treating your furry pal to gourmet sausages in a blanket, only they’re even tastier and made just for him. With their chewy texture, Snausages In a Blanket make the perfect snack for seniors, dogs with tender gums and pretty much any dog that enjoys a beef-flavored cheesy treat.', 'img/treat5', 'img/treat5_1,img/treat5_2,img/treat5_3'),
(13, 'Friskies Shreds Cat Food', 21.84, 'food', '2021-11-07 23:04:03', '2021-11-07 23:04:03', 'Answer your cat\'s every flavor craving with Friskies Shreds in Gravy Variety Pack Canned Cat Food. Each pack contains four equally tempting entrees, including Purina Friskies Savory Shreds Chicken & Salmon Dinner in Gravy, Turkey & Cheese Dinner in Gravy, With Ocean Whitefish & Tuna in Sauce, and With Beef in Gravy. Every recipe features real meat, poultry or fish along with other high-quality ingredients you can both appreciate. The thin, tender shreds deliver an irresistible texture, while the savory gravy and sauce pile on the yum in every bowl. She\'s sure to love the delightful tastes and you can feel good about spoiling your kitty. Stock up on her favorite flavor combinations, and give her meal options that are as delicious as they are nutritious with a variety pack with the tastes she loves.', 'img/food1', 'img/food1_1,img/food1_2'),
(14, 'Original Choice Dry Cat Food', 7.78, 'food', '2021-11-07 23:04:03', '2021-11-07 23:04:03', 'Meow Mix Original Choice Dry Cat Food is specially formulated to help adult cats stay healthy and happy. To maintain wellness throughout adulthood, fully grown cats need the proper nutrition to keep them in top shape as they age. Meow Mix Original Choice provides all the essential nutrients they need, including high-quality protein and essential fatty acids to help support strong muscles and keep their coat looking its best. It’s packed with tons of wholesome ingredients and the irresistible flavors of chicken, turkey, salmon and ocean fish. This tasty food is complete and balanced for adult cats with all the vitamins and minerals they need for optimal health.', 'img/food2', 'img/food2_1,img/food2_2'),
(15, 'Faux Fur Cat Tree & Condo', 74.37, 'others', '2021-11-07 23:04:03', '2021-11-07 23:04:03', 'The Frisco 72-Inch Cat Tree is the ultimate all-in-one spot for your kitty to do all the things she loves, from lounging to leaping to honing her expert hunting skills. Frisky cats can jump from perch to perch and climb to the top of the lookout tower. Carefully placed dangling toys give kitty the thrill of the hunt as she bats them around till her heart’s content. With 10 enticing scratching posts and two scratch board ramps, several cats can claw at once, so it’s great for multi-cat households. When it’s time for a catnap, two private kitty apartments provide quiet spots to curl up for snoozing. The soft, plush fabric covering makes naptime comfy, plus it’s great for face rubbing and nuzzling.', 'img/tree', 'img/tree_1');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
