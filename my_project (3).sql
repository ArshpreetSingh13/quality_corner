-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2025 at 03:49 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

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
(79, 'tannu@gmail.com', '5', 17, 50, 'active', '2025-03-27 14:26:52'),
(80, 'tannu@gmail.com', '6', 3, 50, 'active', '2025-03-27 14:27:10'),
(81, 'tannu@gmail.com', '2', 4, 300, 'active', '2025-03-27 14:27:17'),
(82, 'tania@gmail.com', '6', 2, 50, 'active', '2025-03-27 14:46:19'),
(83, 'tania@gmail.com', '2', 2, 300, 'active', '2025-03-27 14:47:16');

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
(8, 'Chocolates & Candies', '1614157854-chocolates.jpg', 'active', '2025-03-12 07:18:15');

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
(109, 'hjhgf666', 11, 'flat', '55', 50, 'active', '2025-03-25 13:56:27');

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
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(9) NOT NULL,
  `user` varchar(100) NOT NULL,
  `total` int(9) NOT NULL,
  `address` longtext NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'active',
  `created at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(2, 'kit kat', 300, '8', '1677867399-snaks.jpg', 'arshhhhpreet singh', 'active', '2025-03-20 15:43:12'),
(5, 'iu', 50, '7', '543678146-chocolates.jpg', 'ioi', 'active', '2025-03-20 16:02:02'),
(6, 'amul', 50, '8', '2043513829-chocolates.jpg', 'hjk', 'active', '2025-03-24 06:11:53');

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
(1, 'Arshpreet Singh M-10', 'arshpreetsingh1327@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 9501154841, 'Sarai Khas\r\nKartarpur', 144801, 'Jalandhar', 'active', '2025-03-04 14:31:36'),
(3, 'shrn', 'shrn@gmail.com', '08b25b3e2d2116443497101e4162cb05', 9501154841, 'Sarai Khas\r\nKartarpur', 144801, 'Jalandhar', 'active', '2025-03-04 15:01:37'),
(5, 'shrn', 'shrne@gmail.com', '206299f8d8ba8a07426ffa471398d9bf', 9501154841, 'Sarai Khas\r\nKartarpur', 144801, 'Jalandhar', 'active', '2025-03-04 15:02:25'),
(6, 'tania', 'taina@gmail.com', '32ad39ebae9c469b77b6ec36387a312a', 987452, 'Sarai Khas\r\nKartarpur', 144801, 'Jalandhar', 'active', '2025-03-04 15:08:18');

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
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_id` (`order_id`);

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
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password` (`password`);

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
