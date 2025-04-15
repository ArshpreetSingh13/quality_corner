-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2025 at 07:17 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'active',
  `created at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `status`, `created at`) VALUES
(2, 'arsh@gmail.com', '202cb962ac59075b964b07152d234b70', 'active', '2025-03-19 05:43:26');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `quantity` int(9) NOT NULL,
  `price` int(9) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'active',
  `created at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `product`, `quantity`, `price`, `status`, `created at`) VALUES
(76, 'adminmgkc@gmail.com', '6', 2, 50, 'active', '2025-03-27 14:24:27'),
(77, 'adminmgkc@gmail.com', '5', 3, 50, 'active', '2025-03-27 14:24:27'),
(78, 'adminmgkc@gmail.com', '2', 2, 300, 'active', '2025-03-27 14:24:28'),
(91, '', '5', 1, 50, 'active', '2025-04-03 07:25:02'),
(92, '', '6', 1, 50, 'active', '2025-04-03 07:25:32');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(50) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'active',
  `created at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `image`, `status`, `created at`) VALUES
(7, 'Biscuits & Cookies', '622520573-buscuits.jpg', 'active', '2025-03-12 07:12:02'),
(8, 'Chocolates & Candies', '1614157854-chocolates.jpg', 'active', '2025-03-12 07:18:15'),
(9, 'Drinks & Juices', '1345526978-s.jpg', 'active', '2025-04-11 14:48:20'),
(10, 'Noodles & Pasta', '1099185767-Noodle-pasta-vermi_Banner.jpg', 'active', '2025-04-11 15:47:52'),
(11, 'Snacks', '514521231-snaks.jpg', 'active', '2025-04-12 03:42:09'),
(12, 'Atta, Sooji & Flours', '1788381244-ATTA-FLOURS-SOOJI-removebg-preview.jpg', 'active', '2025-04-12 14:29:52'),
(13, 'Dals & Pules', '621008135-download.jpg', 'active', '2025-04-12 14:49:44'),
(14, 'Rice', '588546735-106867601.jpg', 'active', '2025-04-13 10:09:47'),
(15, 'Salt & Sugar', '1170404052-download.jpg', 'active', '2025-04-13 10:35:45'),
(16, 'Ghee', '2048244674-istockphoto-1187181045-612x612.jpg', 'active', '2025-04-13 16:09:14'),
(17, 'Dry Fruits', '987988821-dry.jpg', 'active', '2025-04-13 16:23:11'),
(18, 'Hair Care', '933474928-Haircare-products.jpg', 'active', '2025-04-13 16:47:32');

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `id` int(50) NOT NULL,
  `code` varchar(100) NOT NULL,
  `discount` int(9) NOT NULL,
  `type` varchar(50) NOT NULL,
  `term` varchar(100) NOT NULL,
  `minamt` int(9) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'active',
  `created at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`id`, `code`, `discount`, `type`, `term`, `minamt`, `status`, `created at`) VALUES
(0, 'No coupon selected', 0, '', '', 0, 'active', '2025-04-05 15:06:59'),
(110, 'OFF50', 50, '2', 'If applicable, the coupon may require a minimum purchase amount before the discount is applied.', 500, 'active', '2025-04-02 12:52:29'),
(111, 'OFF100', 100, '1', 'If applicable, the coupon may require a minimum purchase amount before the discount is applied.', 500, 'active', '2025-04-02 12:52:52');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` longtext NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'active',
  `created at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(9) NOT NULL,
  `user` varchar(100) NOT NULL,
  `total` int(9) NOT NULL,
  `coupon_id` int(5) NOT NULL,
  `address` longtext NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `created at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user`, `total`, `coupon_id`, `address`, `status`, `created at`) VALUES
(5, 'arsh@gmail.com', 550, 111, ' ', 'pending', '2025-04-05 15:01:26'),
(6, 'arsh@gmail.com', 300, 110, ' ', 'pending', '2025-04-05 15:02:05'),
(7, 'tania@gmail.com', 650, 0, ' ', 'pending', '2025-04-05 15:02:57'),
(8, 'tania@gmail.com', 300, 110, ' ', 'Packed', '2025-04-05 15:15:07'),
(9, 'tania@gmail.com', 100, 0, ' ', 'pending', '2025-04-05 15:23:24'),
(10, 'tania@gmail.com', 325, 110, ' ', 'pending', '2025-04-08 15:40:53');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(9) NOT NULL,
  `order_id` int(9) NOT NULL,
  `product` varchar(50) NOT NULL,
  `quantity` int(9) NOT NULL,
  `price` int(9) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'active',
  `created at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product`, `quantity`, `price`, `status`, `created at`) VALUES
(15, 5, '5', 1, 50, 'active', '2025-04-05 15:01:26'),
(16, 5, '2', 2, 600, 'active', '2025-04-05 15:01:26'),
(17, 6, '2', 2, 600, 'active', '2025-04-05 15:02:05'),
(18, 7, '2', 2, 600, 'active', '2025-04-05 15:02:57'),
(19, 7, '5', 1, 50, 'active', '2025-04-05 15:02:57'),
(20, 8, '2', 2, 600, 'active', '2025-04-05 15:15:07'),
(21, 9, '5', 1, 50, 'active', '2025-04-05 15:23:24'),
(22, 10, '5', 1, 50, 'active', '2025-04-08 15:40:53'),
(23, 10, '2', 2, 600, 'active', '2025-04-08 15:40:53');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(50) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` int(9) NOT NULL,
  `category` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'active',
  `created at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `price`, `category`, `image`, `description`, `status`, `created at`) VALUES
(11, 'Sunfeast Dark Fantasy Creme Biscuits', 19, '7', '731993443-dark.jpg', 'Sunfeast Dark Fantasy Choco Creme is a fantasy that lives on forever. One bite of this choco biscuit and you d be lost in a world far away from normalcy. Where rivers of creamy chocolates flow free and mountains of dark chocolate stand tall. Made using the finest ingredients, Choco Creme is an indulgence for every true biscuit lover. Revel in the delight of luxurious chocolate as rich, dark chocolate creme is sandwiched between crunchy chocolate-flavoured biscuits. ', 'active', '2025-04-11 13:56:55'),
(13, 'Britannia Jimjam Sandwich Biscuits', 36, '7', '1607135685-jim.jpg', 'Britannia Jimjam Sandwich Biscuits are loved by people of almost all age groups. The crispy texture of biscuit is complemented by the sweet flavour of cream inside and top of all the jam at the center top sprinkled with the sugar crystals to make this biscuit best of all. Britannia biscuits and cookies for long has been a part of every home, sharing those moments of joy. Go ahead & buy this product online today!', 'active', '2025-04-11 14:13:08'),
(14, 'Britannia Good Day Cashew Biscuits', 150, '7', '1432117906-good.jpg', 'Britannia Good Day Cashew Biscuits 1 kg are delicious crunchy cookies blended with a nutty flavor of cashews. 100% vegetarian, cashew cookies satisfy your cravings between meals. Britannia biscuits, cookies, cakes, and rusk are a perfect companion for your tea. Believing in delivering fresh and delicious products, Britannia India manufactures some of Indias favorite brands like 50-50, Tiger, NutriChoice, Bourbon, Milk Bikis, and Marie Gold. So what are you waiting for? Go ahead and buy this product online today!', 'active', '2025-04-11 14:21:02'),
(15, 'Unibic Choco Chip Cookies', 27, '7', '1929813593-choco.jpg', 'Teatime calls for a tasty munch! So, here s a pack of goodness packed in with Unibic Choco Chip Cookies. These cookies are made with the choicest ingredients to make your tea times filled with fun and frolic. Have them with tea, coffee or as a standalone snack. These cookies are a sheer delight and quality is maintained throughout the packaging and production of the product so that it retains freshness for long. So go ahead and buy Unibic Choco Chip Cookies online today!', 'active', '2025-04-11 14:23:09'),
(16, 'Cadbury Oreo Pokemon Original Vanilla Cream Biscuit', 75, '7', '1149102118-oreo.jpg', 'OREO milks best friend for over 100 years! Cadbury OREO Vanilla creme sandwich biscuit consists of two chocolatey biscuits with a rich vanilla creme filling between them. Twist, lick and dunk! Enjoy OREO sandwich cookie with a glass of milk or add it to your favourite recipes like cakes and milkshakes! Add a scoop of vanilla ice cream to OREO creme biscuits to make your own creamy dessert! So what are you waiting for? Go ahead and buy this product online today', 'active', '2025-04-11 14:25:13'),
(17, 'Unibic Fruit & Nut Cookies', 27, '7', '1909610388-uninic.jpg', 'Make your snack breaks more interesting by grabbing a pack of crunchy Unibic Fruit & Nut Cookies that are a delectable combination of fruits and nuts. It is a pack that offers the indulgence of fruits and nuts like exotic cranberry and black currant, cashew and almonds. Enjoy these biscuits with your favourite cup of tea or coffee or just munch on them whenever hunger kicks in. So go ahead, buy Unibic Fruit & Nut Cookies online today!', 'active', '2025-04-11 14:27:05'),
(18, 'Cadbury Bournville Classic 50% Dark Chocolate', 110, '8', '1533742909-bonvita.jpg', 'Cadbury Bournville is a premium dark chocolate that delivers an intense experience to lovers of dark chocolate! Each Bournville dark chocolate is made from the finest cocoa sourced from some of the best places around the world, perfectly roasted for an intense taste. Along with this 50% dark chocolate bar, also try other variants of Bournville chocolate bar cranberry, 70% dark, and fruit & nut. So what are you waiting for? Go ahead and buy this product online today!', 'active', '2025-04-11 14:34:29'),
(19, 'Kinder Schoko Bons Crispy Milk Chocolate', 38, '8', '1713782228-kinder.jpg', 'Kinder Schoko Bons Crispy Milk Chocolate contains a handpicked delicious selection of finest quality ingredients. They are incredibly indulgent and will satisfy any discerning chocoholic s needs. Savour the taste of the smoothness, richness and creaminess with every bite. Treat your child s taste buds with an amazing burst of flavours. Buy this product online today.', 'active', '2025-04-11 14:37:28'),
(20, 'Snickers Peanut Filled Chocolate Bar', 45, '8', '763080047-snickers.jpg', 'Do not let hunger change you! Add some peanut power to your day with Snickers Chocolate Bar. Made with real peanuts and chocolate, this iconic candy satisfies your taste buds and helps you fuel up during a busy day. Snickers bar, packed with delicious and nutritious roasted peanuts, also contains nougat and caramel, creating a flavour that s enough to rock your taste buds, while busting hunger pangs between meals. Reach out for a Snickers hunger bar to tackle snack time at the office, in the car or at home, because you are not you when you are hungry. Snickers is the perfect snack while watching TV, gaming or just as a post-meal treat. The world s best-selling candy bar, Snickers was introduced in 1930 and it quickly became one of the planet s favourite treats. So what are you waiting for? Go ahead and buy this product online today!', 'active', '2025-04-11 14:40:14'),
(21, 'KitKat Chocolate', 32, '8', '1767467123-kitkat.jpg', 'KitKat was first introduced in the UK market in 1935 under the name of Chocolate Crips and has since then remained as the famous four fingers chocolate. KitKat Chocolate contains a handpicked delicious selection of finest quality ingredients. They are incredibly indulgent and the chocolate coated wafer fingers will satisfy any discerning chocoholic s needs. Savour the taste of the smoothness, richness and creaminess with every bite. Let your taste buds sink with an amazing burst of chocolatey flavours. Buy this product online today.', 'active', '2025-04-11 14:41:45'),
(22, 'Nestle Munch 17 Yummy Treats ', 75, '8', '1866269135-munch.jpg', 'Munch Yummy Treats contains a handpicked and delicious selection of finest quality ingredients. They are incredibly indulgent and will satisfy any discerning chocoholic s needs. Savour the taste of the smoothness, richness and creaminess with every bite. Let your taste buds sink with a delicious burst of chocolatey flavours. Buy this product online today.', 'active', '2025-04-11 14:43:01'),
(23, 'Cadbury Dairy Milk Chocolate Bar', 10, '8', '187465221-cadbury.jpg', 'Kuch achha ho jaaye, kuch meetha ho jaaye with Cadbury Dairy Milk. Generously made with a glass and a half of milk, offering a mouthful of goodness in every piece. This milk chocolate bar pack is perfect sweet for snacking or as a chocolate gift pack for gifting on special occasions like birthdays and get togethers. Made from sustainably sourced cocoa and suitable for vegetarians. So what are you waiting for? Go ahead and buy this product online today!', 'active', '2025-04-11 14:44:08'),
(24, 'Paper Boat Ready to Serve Nata De Coco Lychee Fruit Beverage', 36, '9', '716134473-lychee.jpg', 'Paper Boat Ready to Serve Nata De Coco Lychee Fruit Beverage is a refreshing drink crafted with the delightful combination of lychee flavor and tender nata de coco pieces. It offers a tropical escape with every sip, perfect for quenching your thirst on a hot day. So what are you waiting for? Go ahead and buy this product online today!', 'active', '2025-04-11 15:26:13'),
(25, 'Diet Coke 300 ml', 38, '9', '817136342-coke.jpg', 'Delight your guests with Diet Coke. It is the perfect drink for any weather. Gatherings are incomplete without it. One glass is never enough! So go ahead buy this product online today.', 'active', '2025-04-11 15:27:11'),
(26, 'B Natural Mixed Fruit,Rich in Vitamin C & E, Made with 100% Indian Fruit and 0% Concentrate', 70, '9', '1770859645-nature.jpg', 'The search for the perfect mixed fruit juice ends here. B Natural Mixed Fruit Juice has all the elements to make a classic mixed fruit juice, one that features the right balance of the juiciest fruits, maintains consistency, and provides incredible nutritional value.Allow yourself to experience this yummy concoction of delicious and juicy fruits like mango, banana, pineapple, guava, jamun, and bael. Relish the goodness of fruit and fiber as it has been squeezed into each pack of B Natural. Crafted using 100% fruit pulp, 0% concentrate, and no added preservatives, B Natural Mixed Fruit Juice offers an authentic fruit experience. B Natural ensures complete fruit nutrition for you and your family as it is packed with fiber and Vitamin C & E.This natural fruit juice serves as the perfect start to a busy day or as the perfect in-between drink to rejuvenate you when low on energy. Treat yourself to the genuine fresh and juicy flavors with every sip of B Natural Mixed Fruit Juice', 'active', '2025-04-11 15:28:56'),
(27, 'Maaza Mango Drink', 95, '9', '210000463-mazza.jpg', 'Turn your day around with Maaza Mango Drink! All it takes is a glass and a bit of ice. Delicious and refreshing - there s no other way to describe it. So go ahead, buy this product online today!', 'active', '2025-04-11 15:30:12'),
(28, 'Tang Mango Instant Drink Mix', 144, '9', '983491292-tang.jpg', 'Tang comes in a tasty mango which helps keep you refreshed during summer. Available in three different refreshing flavours i.e, orange, mango and lemon. Buy Now Tang - Drinks Break for Kids. Disclaimer : Tang is an occasional drink and cannot be used to substitute waterThis Contains Sucralose. Contains Non-Caloric Sweetner. So what are you waiting for? Go ahead and buy this product online today!', 'active', '2025-04-11 15:38:41'),
(29, 'Thums Up ', 33, '9', '1452093063-thums.jpg', 'Delight your guests with Thums Up. It is the perfect drink for any weather. Gatherings are incomplete without it. One glass is never enough! So go ahead buy this product online today.', 'active', '2025-04-11 15:39:40'),
(30, 'Maggi 2-Minute Masala Instant Noodles', 55, '10', '1591394516-maggi.jpg', 'Nestle Maggi 2-Minutes Noodles have been a classic Indian snack for a good few decades now. Nestle brings you delicious another instant food product - Maggi 2-Minute Masala Instant Noodles! These Maggi noodles offer you the delicious masala flavour that will you leave wanting for more. It is not just loved by young ones but adults too. For every busy day or lazy evening, these noodles are easy to make and are perfect for those untimely hunger pangs. They are made with all-natural ingredients and offers you are lip-smacking taste as they are loaded with authentic flavours. So go ahead, buy Maggi 2-Minute Masala Instant Noodle online today!', 'active', '2025-04-12 03:23:40'),
(31, 'Chings Secret Just Soak Veg Hakka Noodles', 27, '10', '818575771-chings.jpg', 'Chings Secret Just Soak Veg Hakka Noodles are super soft when cooked and taste delicious when garnished with the right sauces. Make mouth-watering Veg Hakka Noodles stir-fried with crunchy vegetables or prepare the non-veg version, add scrambled eggs, chicken or seafood of your choice. Say goodbye to soggy and mushy noodles, and welcome the al-dente, non-sticky noodles with this latest innovation from Chings Secret. So go ahead, buy Chings Secret Just Soak Veg Hakka Noodles online today!', 'active', '2025-04-12 03:28:40'),
(32, 'Yippee! Instant Pasta Treat - Masala', 26, '10', '1659095157-Yippee.jpg', 'Get ready to spice up your pasta game with this Sunfeast YiPPee! Pasta Treat - the instant masala pasta is a fusion of Italian pasta with a delicious desi twist. Imagine creamy, melt-in-mouth pasta infused with aromatic masala flavours that tingle your taste buds.Made with 100% suji/ rava, is the perfect snack partner for your snack cravings. In just 8 minutes, you can this delicious snack that combines the best of both worlds, Italian pasta with a desi flair.', 'active', '2025-04-12 03:29:56'),
(33, 'Nissin Mazedaar Masala Instant Cup Noodles', 50, '10', '2008822733-nissin.jpg', 'Nissin brings to you yet another delicious instant food product - Nissin Mazedaar Masala Instant Cup Noodles. These cup noodles have a balanced taste of roasted masala with curry leaf. It is easy to carry and even easier to make. For every busy day or lazy evening, these noodles are easy to make and are perfect for those untimely hunger pangs. These noodles are made from all-natural ingredients and are loaded with authentic flavours. So go ahead, buy Nissin Mazedaar Masala Instant Cup Noodles online today!', 'active', '2025-04-12 03:31:59'),
(34, 'Disano Pastalicious Penne Pasta', 99, '10', '1505060937-disano.jpg', 'Now you do not have to go all the way to Italy to eat authentic Italian Pasta. Disano Pastalicious Penne Pasta is made from durum wheat semolina and not from maida (refined wheat flour). Durum wheat semolina, is produced from a special type of hard wheat, which gives the consumer a delicious bite and does not feel sticky in the mouth. So what are you waiting for? Go ahead, buy Disano Pastalicious Penne Pasta online today.\r\n', 'active', '2025-04-12 03:34:32'),
(35, 'Bambino Roasted Vermicelli', 65, '10', '383715437-roasted.jpg', 'Use Bambino Roasted Vermicelli to make savoury upma or toss it with boiled vegetables for a wholesome pulao or make a creamy sweet kheer for the perfect dessert. This vermicelli is made from the finest quality hard wheat semolina and is pre-roasted this gives every dish an irresistible aroma and taste. It is exceptionally nutritious and a healthy meal option to opt for. So go ahead, buy Bambino Roasted Vermicelli online today!', 'active', '2025-04-12 03:35:53'),
(36, 'Bikaji Bikaneri Bhujia', 49, '11', '1941419376-bikaneri.jpg', 'Bikaji is a well-known ethnic snack manufacturer from Rajasthan since the 80s - giving consumers the authentic taste. Bikaji Bikaneri Bhujia is a crunchy, tasty and flavourful snack that brings you an authentic taste originated from Bikaner. Comes from Bikaji’s perfection of making Bhujia by hand and fryer. The crispy texture and combination of spices gives you a great taste. Buy this product online today!', 'active', '2025-04-12 04:23:34'),
(37, 'Kurkure Masala Munch', 27, '11', '479725924-kurkure.jpg', 'Kurkure brand belongs to the house of Pepsico and since 1999 have introduced many varieties of popular and crunchy snacks. Kurkure Masala Munch is crunchy and crispy snack. What makes it tasty and flavourful is the right ingredients mixed with the right blend of aromatic spices. Every bite brings you a burst of flavours that keeps you wanting for more. Buy this product online today!', 'active', '2025-04-12 04:24:36'),
(38, 'Bikaji Masala Munch Soya Sticks', 53, '11', '39859418-soya.jpg', 'Feel like having a tasty treat? Bikaji Masala Munch Soya Sticks is for you. Enjoy it with your favourite beverage or drink! It is the perfect party snack for when your friends and family are over. So go ahead, and buy this product online today!', 'active', '2025-04-12 04:26:47'),
(39, 'Bingo Masala Tadka Tedhe Medhe', 13, '11', '678968633-bingo.jpg', 'Feel like having a tasty treat? Bingo Masala Tadka Tedhe Medhe is for you. Enjoy it with your favourite beverage or drink! It is the perfect party snack for when your friends and family are over. It is made from the finest quality ingredients, so that you get a product that combines quality and affordability at the same time. So go ahead, buy this product online today!', 'active', '2025-04-12 04:28:21'),
(40, 'Bingo! Mad Angles Achaari Masti ', 33, '11', '1670727573-made anglr.jpg', 'Want to try something different from regular chips? How about some crunchy chips with the yummy flavour of mango pickles? Get home a pack of Bingo! Mad Angles Achaari Masti. A triangle chip made from a corn base and cooked with rice and flour. The achaari taste adds a delightful flavour to the uniquely textured crunchy chips. Reminiscent of your Dadi mango pickles stored in a white and brown ceramic barni, these crunchy achaari chips will transport you to those good old days with each bite. Bingo! Mad Angles takes the joy of having achaar and has turned it into fun and delicious triangle chips. Dig in the pack of this desi-flavoured Mad Angles and satisfy your snack cravings anytime, anywhere. Whether you are bored in a meeting, waiting for your favourite team to score the winning goal or having a party. They are just incomplete without a bag of Bingo! Mad Angles by your side.And if you are craving for a different flavour, Bingo! Mad Angles are available in awesome flavours like Peri Peri, Chaat Masti, Masala, Tomato Madness and Pizza!', 'active', '2025-04-12 04:31:41'),
(41, 'Lays American Style Cream & Onion Potato Chips', 32, '11', '682268020-lays.jpg', 'Feel like having a tasty treat? Lays American Style Cream & Onion Potato Chips (Party Pack) is for you. Enjoy it with your favourite beverage or drink! It is the perfect party snack for when your friends and family are over. So, what are you waiting for? Go ahead and buy this product online today!', 'active', '2025-04-12 04:32:57'),
(42, 'Fortune Maida / Refined Wheat Flour', 26, '12', '1068542533-maidaa.jpg', 'All-purpose flour, commonly known as Maida is made from premium quality, finely grounded wheat grains. Maida is used extensively for making fast foods, baked goods such as pastries, bread, several varieties of sweets, and traditional flatbreads. Buy Fortune Maida / Refined Wheat Flour online now!', 'active', '2025-04-12 14:39:26'),
(43, 'Good Life Maida 500 g', 29, '12', '943850868-maida.jpg', 'Maida is used for both desserts and savoury items. It is an all purpose flour used to make enticing bakery items like pancakes, bread, pizza base etc. Besides this, you can also use it for making paratha, puris and other forms of bread too. Buy Good Life Maida online now!', 'active', '2025-04-12 14:40:38'),
(44, 'Aashirvaad Multigrain Atta', 349, '12', '560055404-asshirvaad.jpg', 'Aashirvaad Atta with Multigrains is made with 6 natural grains wheat, maize, oats, soya, channa and psyllium husk. This unique grain blend promotes easy digestion & gut health with its high fibre content. This powerhouse multigrain atta also has many essentials which help the human body stay fit, active and healthy. It is high in protein which helps in maintaining the muscle mass. It contains low saturated fat which aids in maintaining cholesterol levels. The source of Vitamin B1, Thiamine in the atta aids in normal function of nerves and heart. The presence of iron in the atta supports immunity and helps in haemoglobin formation.The health benefits are not the only reason to switch to this multigrain flour. Aashirvaad understands the importance of taste and hence makes no compromise on that front as well. Behind every Aashirvaad pack are the Aashirvaad experts who have made the atta with extra care. The careful selection of grains and its proportions in the flour help absorb more water which results in the rotis being smooth, soft and tasty!', 'active', '2025-04-12 14:43:53'),
(45, 'Fortune Besan 1 kg', 99, '12', '438032059-beason.jpg', 'Fortune Besan is prepared from pure chana dal. It is pale yellow in colour and fine in texture. Rajasthani Gatta Curry or Gatte ki subzi is a very popular Rajasthani vegetarian dish made from besan atta. It is majorly used for making bhajji, bonda and many other Indian dishes. Buy Fortune Besan online now!', 'active', '2025-04-12 14:45:24'),
(46, 'Good Life Chakki Atta 5 kg', 205, '12', '725483416-atta.jpg', 'Good Life Chakki Atta is freshly made from the choicest grains. It is carefully ground using modern chakki technique. It is used to make a wide range of foods including bread, crumpets, muffins, noodles, pasta, biscuits, cakes, pastries, cereal bars, sweet and savoury snack foods, crackers, crisp-breads, sauces and confectioner. Buy Good Life Chakki Atta online now!', 'active', '2025-04-12 14:46:52'),
(47, 'Fortune Suji', 26, '12', '515325684-suji.jpg', 'Fortune Suji / Semolina commonly called as wheat rawa is used as a batter ingredient as well as to make various other food items like upma and sheera. It is coarse in texture and is made of wheat. It is a versatile ingredient and easy to cook. It makes a perfect food for breakfast. Buy Fortune Suji / Semolina online now!', 'active', '2025-04-12 14:47:49'),
(48, 'Good Life Urad Dal ', 79, '13', '479477939-urad.jpg', 'Good Life Urad Dal has immeasurable benefits. It has constituted an important part of Indian cuisine. It can fulfil the nutritional and dietary requirements of an entire meal. It has various positive impacts on one health and body. Buy Good Life Urad Dal online now!\r\n', 'active', '2025-04-12 15:06:37'),
(49, 'Good Life Dry White Peas', 55, '13', '954355653-peas.jpg', 'Good Life Dry White Peas are small powerhouses that are a boon for your health. Bengali Ghughni is a simple Indian curry made using dried white peas, served by itself or as an accompaniment. Buy Good Life Dry White Peas online now!', 'active', '2025-04-12 15:07:37'),
(50, 'Good Life Masoor Dal', 57, '13', '1603415274-masoor dal.jpg', 'Good Life Masoor Dal is considered as healthy dal option. It has constituted an important part of Indian cuisine. It can fulfil the dietary requirements of an entire meal. Saute and add some onions, tomatoes and green chillies to enjoy a tasty, flavourful bowl of masoor dal. Buy Good Life Masoor Dal online now!', 'active', '2025-04-12 15:08:37'),
(51, 'Good Life Moong Dal', 227, '13', '1504759189-moog dal.jpg', 'Moong Dal is essentially packed with loads of nutrients that are extremely beneficial for your health. Moong contains almost every important element that your body might need. Buy Good Life Moong Dal online today.', 'active', '2025-04-12 15:09:56'),
(52, 'Good Life Chana Dal', 106, '13', '1160977099-chana dal.jpg', 'Chana Dal is a commonly used dal in the Indian kitchen. Dalcha is a slow cooked lamb stew with Chana Dal and mild spices. This is certainly one tasty bet. It is generally utilized in curries and used to create besan flour. It is consumed boiled, fried and sprouted. Buy Good Life Chana Dal online now!', 'active', '2025-04-12 15:10:59'),
(53, 'Good Life Kabuli Chana', 79, '13', '368697492-good-life-kabuli-chana-500-g-product-images-o491187254-p491187254-0-202503101456.jpg', 'Kabuli Chana can be soaked in water and cooked along with vegetables in preparation of variety of curries that can be eaten with rice, roti, chapattis, puri, kulcha as well as bread. It can be sprouted after soaking in water for 24 hours and added to salads. Buy Good Life Kabuli Chana online now!', 'active', '2025-04-12 15:12:03'),
(54, 'India Gate Dubar Basmati Rice 1 kg', 135, '14', '1224969412-dubar.jpg', 'India Gate Dubar Basmati Rice is everyday Rice that makes each meal memorable. It is ideal for people who like to include Rice in their daily meal consumption. Aromatic, flavorful, and defined by its distinctly long and slender grains, India Gate Dubar Basmati Rice turns every meal into comfort food. No matter what you are in the mood for, India Gate Dubar Rice leaves you feeling satisfied and nourished. Buy India Gate Dubar Basmati Rice online today.', 'active', '2025-04-13 10:25:09'),
(55, 'Good Life HMT Kolam Rice 10 kg', 599, '14', '45441325-kolam.jpg', 'Rice is famous in the southern regions of India. It is aromatic and lightweight and is considered to be of the best quality. Rice is always a crowd-pleaser and can be used in so many ways! It is almost always used as a base for various saucy and savory meals. It is perfect for preparing dishes like sweet pongal, fried rice, biryani, and daily cooking. Buy Good Life HMT Kolam Rice online now.', 'active', '2025-04-13 10:26:33'),
(56, 'Daawat Rozana Super Basmati Rice 5 kg', 359, '14', '821757241-rozan.jpg', 'Basmati Rice has been an integral part of different Rice recipes in every Indian household. It is processed under the supervision of experts. It can be used in a variety of Rice dishes including biryani, pulao, and other Indian dishes. One can have it with meat, curries, dals and many more food items. Buy Daawat Rozana Super Basmati Rice online now!', 'active', '2025-04-13 10:28:12'),
(57, 'Elina Long Grain Rice 1 kg', 69, '14', '202529964-long grain.jpg', 'Guests coming over for dinner? Put on your cooking aprons and cook some delicious rice recipes with Elina Long Grain Rice. The slender long grained rice is aromatic and nutritious at the same time. Its flavourful rich taste will earn you lots of appreciation from your visitors. It is a premium brand that focuses on providing good quality products at affordable rates. Buy Elina Long Grain Rice online now!', 'active', '2025-04-13 10:29:37'),
(58, 'India Gate Mogra Basmati Rice 10 kg', 689, '14', '1692388190-mogra.jpg', 'India Gate Mogra Basmati Rice has been an integral part of different Rice recipes in every Indian household. It is processed under the supervision of experts. It can be used in a variety of Rice dishes including biryani, pulao, and other Indian dishes. One can have it with meat, curries, dals and many more food items. Buy India Gate Mogra Basmati Rice online now!', 'active', '2025-04-13 10:30:34'),
(59, 'India Gate Rozana Basmati Rice 5 kg', 429, '14', '1281764357-india gate.jpg', 'India Gate Rozana Basmati Rice is everyday Rice that makes each meal memorable. It is ideal for people who like to include Rice in their daily meal consumption. Aromatic and flavourful. India Gate Feast Rozzana Basmati Rice turns every meal into comfort food. No matter what you’re in the mood for, India Gate Feast Rozzana Basmati Rice leaves you feeling satisfied and nourished. Buy India Gate Feast Rozzana Basmati Rice online today.', 'active', '2025-04-13 10:31:41'),
(60, 'Loose Sugar (M) 1 kg', 45, '15', '383853196-loose sugar.jpg', 'Loose Sugar is a high-quality, pure, and naturally processed sweetener, perfect for daily use in tea, coffee, desserts, and cooking. It dissolves quickly and provides the ideal sweetness for all your culinary needs. Sourced from premium sugarcane, it is free from impurities and ensures consistent quality for a healthier and tastier experience. So what are you waiting for? Go ahead and buy this product online today!', 'active', '2025-04-13 10:40:41'),
(61, 'Tata Iodised Salt 1 kg', 28, '15', '117110023-salt.jpg', 'Tata Iodised Salt is one of the most important ingredients used in Indian households. It adds a flavour to your dishes. Used to make almost every food item, and also known as the preservatives in pickels. Buy Tata Iodised Salt online now.', 'active', '2025-04-13 10:42:40'),
(62, 'Tata Rock Salt 1 kg', 99, '15', '1296088418-rock salt.jpg', 'Rock salt is naturally harvested from salt mines. In crystalline form, it is light pink in colour. Once it is crushed, it becomes pale pink or off-white. It is used in cooking, much like regular sea salt, and is mostly used during fasting. It is also extensively used in ayurvedic medicines. It also finds use in bath products and salt lamps. Buy Tata Rock Salt online now!', 'active', '2025-04-13 10:43:31'),
(63, 'Good Life Free Flow Iodised Salt 1 kg', 14, '15', '1197244585-good.jpg', 'Salt is an important ingredient used in cooking any meal as it adds the requisite flavour and taste to the food. Good Life Free Flow Iodised Salt is the best choice for everyday cooking. So buy this product today to make your dishes more delicious and healthy. Buy Good Life Free Flow Iodised Salt online now!', 'active', '2025-04-13 10:44:30'),
(64, 'Mount 84 Rock Salt 1 kg', 49, '15', '1594038527-mount.jpg', 'Mount 84 Rock Salt is superior to table salt because rock salt is used as a condiment and preservative in Indian cuisine, especially during fasting days. It adds a great flavour to chaats, chutneys, raitas and many other savoury Indian snacks and vegetable preparations. Its coarse texture makes it easy to pick up and sprinkle on food during or after cooking. Buy Mount 84 Rock Salt online now!', 'active', '2025-04-13 10:45:10'),
(65, 'Independence Crystal Sugar 1 kg', 55, '15', '1001535829-independent.jpg', 'Independence Crystal Sugar is used in preparing sweetmeats and sweet dishes for your loved ones. It is a must-have product in your kitchen wardrobe. Buy Independence Crystal Sugar online now!', 'active', '2025-04-13 10:46:14'),
(66, 'Amul Cow Ghee 1 L (Pouch)', 549, '16', '475350328-amul-cow-ghee-1-l-pouch-product-images-o491135471-p491135471-0-202203170918.jpg', 'Ghee is a class of clarified butter that originated in ancient India. It is commonly used in Indian cooking. Amul Cow Ghee can be swapped for vegetable oil or coconut oil in baked goods or can be used for deep-frying. Or simply melt it and spread it on roti, or pour it on vegetables/dal before serving. So go ahead and buy this product online today!', 'active', '2025-04-13 16:16:07'),
(67, 'Gowardhan Pure Cow Ghee 500 ml', 369, '16', '1101202598-gowardan.jpg', 'Ghee is a class of clarified butter that originated in ancient India. It is commonly used in Indian cooking. Gowardhan Pure Cow Ghee can be swapped for vegetable oil or coconut oil in baked goods or can be used for deep-frying. Or simply melt it and spread it on roti, or pour it on vegetables/dal before serving. So go ahead and buy this product online today!', 'active', '2025-04-13 16:17:08'),
(68, 'Patanjali Cow Ghee 1.1', 675, '16', '388024505-cow.jpg', 'Patanjali Cow Ghee is a premium quality pure desi ghee that boasts a range of nutritive properties. Cow ghee, in particular, is a popular component in traditional ayurvedic medicine and is believed to possess a variety of properties. It facilitates nourishment, promotes healing, mitigates constipation, and serves as storehouse of energy. So what are you waiting for? Go ahead and buy this product online today!', 'active', '2025-04-13 16:17:58'),
(69, 'Amul Cow Ghee 1 L (Tin)', 629, '16', '1582998120-amul.jpg', 'Ghee is a class of clarified butter that originated in ancient India. It is commonly used in Indian cooking. Amul Cow Ghee can be swapped for vegetable oil or coconut oil in baked goods or can be used for deep-frying. Or simply melt it and spread it on roti, or pour it on vegetables/dal before serving. So go ahead and buy this product online today!', 'active', '2025-04-13 16:18:51'),
(70, 'Provedic 900 ml Desi Ghee Tin', 439, '16', '1631655462-provedic-900-ml-desi-ghee-tin-product-images-orv3rqv8ndf-p606922073-0-202401192108.jpg', 'Provedic pure desi ghee tin 900ml', 'active', '2025-04-13 16:19:54'),
(71, 'Gowardhan Cow Ghee 1 L (Pack of 2)', 1319, '16', '1113729825-comboo.jpg', 'Ghee is a class of clarified butter that originated in ancient India. It is commonly used in Indian cooking. Gowardhan Cow Ghee can be swapped for vegetable oil or coconut oil in baked goods or can be used for deep-frying. Or simply melt it and spread it on roti, or pour it on vegetables/dal before serving. So go ahead and buy this product online today!', 'active', '2025-04-13 16:20:42'),
(72, 'Good Life Walnut Kernels 100 g', 169, '17', '1643235377-walnuts.jpg', 'Good Life Walnut Kernels are healthy snack option. You can simply toast some walnuts and add them to the stuffing of your sandwich or paranthas. Toast some walnuts, grind them and keep them in an airtight container. No wonder walnuts are a favourite among snackers. Buy Good Life Walnut Kernels online now!', 'active', '2025-04-13 16:30:38'),
(73, 'LILA DRY FRUITS Natural Trail Mix', 78, ' 17', '1446756023-mix.jpg', 'This powerful value pack of fresh and organic Trail Mix can be used in the following manners:- 1. Can be eaten raw. 2. Can be used in plain milk, shakes or juices. 3. Make a homemade trail mix with other dried fruit, berries, whole-grain cereal, and dark chocolate. 4. Morning Cereal BowlThose who like to start their morning on a healthy note, the best bet is a bowl of cereals with a topping of fruits and nuts. 4. important ingredient in many Southeast Asian Cuisines. 5. Indian sweets like Barfi and Halwa. WHY LILA DRY FRUITS:- LILA DRY FRUITS IS A VALUE DRIVEN COMPANY. FROM LAST 40 YEARS, THE REASON OF OUR SUCCESS ARE 2 PRINCIPLES :- CUSTOMER SATISFACTION AT ALL COSTS AND CUSTOMER SAFTEY WITH ALL MEASURES. WE HAVE ALWAYS WORKED ON PROVIDING EXTRA VALUE TO OUR END CUSTOMERS BY MAINTAINING STANDARDS AND ETHICS OF WORKING. Our products are directly imported from the farmers who inturn grows them in highly organic manner. Unlike others, our products are bigger in size, fresh and certified. We pack the products in bulk lots daily, still making sure that our product is safe and not bitter in taste. We ensure our packing is properly sealed through vaccum pack in order to maintain proper levels of moisture. It helps to prevent the products from rotting, crushing and bad smell. We make sure that prices are evenly charged, because in order to maintain minimum prices, we do not tend to affect the quality of product which is to be consumed by our priceless customers. We make sure to keep the inventories in track and do not ship any product which is too old because we have an inhouse policy of discarding products whose shelf life has expired. We make sure there is no mixing in the quality and no discrimination in the quantity because of our highly experienced sourcing and packing team.', 'active', '2025-04-13 16:31:48'),
(74, 'Royal Delight Arabian Dates', 299, '17', '1066234106-date.jpg', 'Savor the authentic taste of premium Arabian Dates, hand-selected for their exceptional quality and flavor. These dates are naturally sweet, soft, and packed with nutrients, making them a delicious and wholesome choice for everyone. Whether as a snack, an ingredient in your favorite dishes, or a thoughtful gift, Arabian Dates are perfect for every occasion.', 'active', '2025-04-13 16:41:42'),
(75, 'Good Life Yellow Kishmish 500 g', 185, '17', '304043171-kishmish.jpg', 'Good Life Yellow Raisins can be paired with sweet and savory, mild or spicy flavors, cinnamon, vanilla and citrus flavors. They can create an excellent flavor base and background for ethnic and savory dishes and are also compatible with all sweet recipes. Buy Good Life Yellow Raisins online now!', 'active', '2025-04-13 16:42:26'),
(76, 'Good Life Whole (W320) Cashews 200 g', 188, '17', '2144203699-cashews.jpg', 'Good Life W320 Cashews are a tasty and nutritious dry fruit snack. They are used in many recipes, especially in sweets and icecreams. It is also used for thickening water-based dishes such as soups, meat stews and some Indian milk-based desserts. Buy Good Life W320 Cashews online today!', 'active', '2025-04-13 16:43:10'),
(77, 'Good Life Almonds 500 g', 455, '17', '1572581567-good-life-almonds-500-g-product-images-o491186625-p491186625-0-202205180139.jpg', 'Almonds are used in products such as cakes, bread, biscuits, muesli, confectionery and ice cream. One such cake is Bakewell tart. Almonds are used to make marzipan, frangipane and praline. In Indian cuisine they are used in a variety of recipes including those for Peshwari naan and many forms of curry. Buy Good Life Almonds online now!', 'active', '2025-04-13 16:43:56'),
(78, 'Parachute Advansed Jasmine Gold Coconut', 128, '18', '257734858-jasmine.jpg', 'Parachute Advansed Jasmine Gold Coconut Non-Sticky Hair Oil gives your hair care routine a twist of health and nourishment. This is a non-sticky hair oil that gives your hair the much-needed nourishment and complete protection from hair damage, split ends and breakage. So what are you waiting for? Buy the product at the best rate, right here!', 'active', '2025-04-13 16:59:07'),
(79, 'VIP NATURAL HAIR COLOUR SHAMPOO', 460, '18', '1489517997-color.jpg', 'Experience the luxurious VIP Hair Colour Shampoo in Brown. Transform your hair with this innovative formula that not only cleanses but also enhances your natural brown hue. Say goodbye to dull hair and hello to vibrant, salon-quality color. Get ready to flaunt your beautiful brown locks with confidence!', 'active', '2025-04-13 17:02:44'),
(80, 'TRESemme Keratin Smooth Shampoo 580 ml', 463, '18', '1134194162-trsemme.jpg', 'TRESemme Keratin Smooth Shampoo helps your hair restore its keratin leaving them visibly straight and smoother. Infused with light-weight Argan Oil, this professional shampoo nourishes each strand of your hair making them silky smooth and easier to manage. This unique combination of Keratin and Argan Oil conditions and strengthens your hair and provides them hydration and elasticity. With its dual action, TRESemmé Keratin Smooth Shampoo helps you to get smoother hair with more shine. Its lower sulfate formulation and patented micro-moisture technology smoothens and protects dry hair from damage. When used together with the TRESemmé Keratin Smooth Conditioner, this nourishing shampoo can control frizz for as long as upto 3 days. Recommended by professionals, the TRESemme Keratin Smooth Shampoo is especially formulated for Indian hair and is suitable for both naturally and chemically treated hair. It is also suitable for use in conjunction with any oil treatments. Now, get visibly straighter, smoother hair that is easier to style hair. Buy now to enjoy gorgeous, salon-quality smooth hair everyday without the salon price tag! Suitable for both men and women. To use: Apply to wet hair and gently massage to work into a lather. Rinse hair thoroughly. Follow with the TRESemme Keratin Smooth conditioner for an extra boost of smoothness.', 'active', '2025-04-13 17:05:56'),
(81, 'Dove Nutritive Solutions', 507, '18', '1132257771-dove.jpg', 'Let hair fall be an issue of the past! Use the Hair Fall Rescue Shampoo from Dove regularly to get thick and luscious hair as the shampoo works on repairing damaged hair and protects them from further harm. The shampoo, containing silicones and trichazole actives, nourishes your hair from the roots and reduces hair fall, giving you visibly fuller hair. Healthier hair means lesser breakage and reduced hair fall. So go ahead and buy this product online today!', 'active', '2025-04-13 17:08:34'),
(82, 'iCosmetiques Advance Care', 698, '18', '1740866892-serum.jpg', 'Unlock the secret to revitalized hair with iCosmetiques Advance Care Scalp Hair Growth Serum, a powerful formulation designed to promote hair revival and scalp health. This innovative serum features a unique blend of advanced ingredients, including 3% Redensyl, Procapil, Anagain, and Biacapil, all working synergistically to stimulate hair growth and reduce hair loss. Infused with the purest Himalayan Glacial Water, this serum nourishes the scalp, providing essential minerals for optimal hair health. Its lightweight, non-greasy formula absorbs quickly, delivering deep hydration without weighing down your hair. Transform your hair care routine with the iCosmetiques Advance Care Scalp Hair Growth Serum. With a 40 ml bottle packed with the best of nature and science, experience fuller, healthier hair like never before. Say goodbye to hair loss and hello to a revitalized scalp and luscious locks!', 'active', '2025-04-13 17:13:55'),
(83, 'Parachute 100% Pure Coconut Hair Oil 300 ml', 152, '18', '90310813-para.jpg', 'Tired of dull and frizzy hair? Hair oil plays a vital role in protecting your hair from regular wear and tear. Parachute 100% Pure Coconut Hair Oil gives your hair the much needed nourishment and protects it from further damage. It can be used for a deep relaxing massage before washing your hair or to tame your hair before styling. Give your hair the care it deserves by making this a part of your hair care regime. So what are you waiting for? Buy this product online at the best rate, right here!', 'active', '2025-04-13 17:14:45');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `address` longtext NOT NULL,
  `pincode` int(6) NOT NULL,
  `city` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'active',
  `created at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `contact`, `address`, `pincode`, `city`, `status`, `created at`) VALUES
(8, 'arsh', 'arsh@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 9501154841, 'Sarai Khas\r\nKartarpur', 144801, 'Jalandhar', 'active', '2025-04-02 12:42:27'),
(10, 'tania', 'tania@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 9501154841, 'Sarai Khas\r\nKartarpur', 144801, 'Jalandhar', 'active', '2025-04-02 12:44:50'),
(11, 'admin', 'adminmgkc@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 9501154841, 'Sarai Khas\r\nKartarpur', 144801, 'Jalandhar', 'active', '2025-04-02 12:45:12'),
(12, 'tannu', 'tannu@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 9501154841, 'Sarai Khas\r\nKartarpur', 144801, 'Jalandhar', 'active', '2025-04-02 12:46:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
