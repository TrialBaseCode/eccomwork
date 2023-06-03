-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2023 at 07:30 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpcomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `prod_qty` int(11) NOT NULL,
  `created_as` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `prod_id`, `prod_qty`, `created_as`) VALUES
(10, 1, 2, 2, '2023-06-01 11:43:27'),
(11, 1, 3, 2, '2023-06-01 11:43:30'),
(12, 1, 4, 4, '2023-06-01 11:43:34');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `status` tinyint(4) NOT NULL,
  `popular` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` longtext NOT NULL,
  `meta_keywords` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `status`, `popular`, `image`, `meta_title`, `meta_description`, `meta_keywords`, `created_at`) VALUES
(1, 'Phone', 'phone', 'a device that uses either a system of wires along which electrical signals are sent or a system of radio signals', 0, 1, '1685359225.jpg', 'Many people use their smartwatches', 'a device that uses either a system of wires along which electrical signals are sent or a system of radio signals', 'Many people use their smartwatches', '2023-05-29 11:20:25'),
(2, 'blazer', 'blazer', 'Buy Stylish Blazers for Men Online at lowest prices on Flipkart. Browse new arrival Blazers', 0, 1, '1685359380.png', 'Cutting-Edge Technology at Your Fingertips', 'Buy Stylish Blazers for Men Online at lowest prices on Flipkart. Browse new arrival Blazers', 'Cutting-Edge Technology at Your Fingertips', '2023-05-29 11:23:00'),
(3, 'smartwatch', 'smart', 'smart is best watch', 0, 1, '1685360094.jpg', 'digital watch', 'smart is best watch', 'smart is best ', '2023-05-29 11:34:54');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `tracking_no` varchar(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` mediumtext NOT NULL,
  `pincode` int(255) NOT NULL,
  `total_price` int(255) NOT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `payment_id` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `comments` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `tracking_no`, `user_id`, `name`, `email`, `phone`, `address`, `pincode`, `total_price`, `payment_mode`, `payment_id`, `status`, `comments`, `created_at`) VALUES
(1, 'Sharmacoder249067895689', 1, 'sonali', 'anu12@gmail.com', '4567895689', 'srdgffw wrgwrgwr', 751002, 4700, 'COD', '', 1, NULL, '2023-05-30 10:49:17'),
(2, 'Sharmacoder161767895689', 1, 'rimali', 'sikha@gmail.com', '4567895689', 'dwrgfwe wertwetf', 751002, 4700, 'COD', '', 0, NULL, '2023-05-30 10:49:49'),
(3, 'Sharmacoder199867895689', 1, 'sonali', 'anu12@gmail.com', '4567895689', 'gyertge r gwrgwr', 751002, 16700, 'COD', '', 0, NULL, '2023-06-01 11:01:15');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(255) NOT NULL,
  `prod_id` int(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `prod_id`, `qty`, `price`, `created_at`) VALUES
(1, 1, 4, 1, 3000, '2023-05-30 10:49:17'),
(2, 1, 3, 1, 800, '2023-05-30 10:49:17'),
(3, 1, 2, 1, 900, '2023-05-30 10:49:17'),
(4, 2, 4, 1, 3000, '2023-05-30 10:49:49'),
(5, 2, 3, 1, 800, '2023-05-30 10:49:49'),
(6, 2, 2, 1, 900, '2023-05-30 10:49:49'),
(7, 3, 4, 5, 3000, '2023-06-01 11:01:15'),
(8, 3, 3, 1, 800, '2023-06-01 11:01:15'),
(9, 3, 2, 1, 900, '2023-06-01 11:01:15');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `small_description` mediumtext NOT NULL,
  `description` mediumtext NOT NULL,
  `original_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `trending` tinyint(4) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keywords` mediumtext NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `small_description`, `description`, `original_price`, `selling_price`, `image`, `qty`, `status`, `trending`, `meta_title`, `meta_keywords`, `meta_description`, `created_at`) VALUES
(1, 0, 'oneplus', 'oneplus', 'The OnePlus One was introduced on 23 April 2014', 'The OnePlus One was introduced on 23 April 2014', 500, 400, '1685359557.jpg', 0, 1, 1, 'Many people use their smartwatches', 'Many people use their smartwatches', 'The OnePlus One was introduced on 23 April 2014', '2023-05-29 11:25:57'),
(2, 1, 'samsumg', 'samsung', 'best phone no', 'best phone no', 1000, 900, '1685359792.jpg', -3, 0, 1, 'Elevate your summer wardrobe', 'Elevate your summer wardrobe', 'best phone no', '2023-05-29 11:29:52'),
(3, 1, 'Samsung Galaxy S23', 'SamsungGalaxy', 'Samsung, South Korean company ', 'Samsung, South Korean company', 1000, 800, '1685359960.jpg', -3, 0, 1, 'Many people use their smartwatches', 'Samsung, South Korean company', 'Samsung, South Korean company', '2023-05-29 11:32:40'),
(4, 1, 'realme', 'realme', 'realme officially entered Europe', 'realme officially entered Europe', 4000, 3000, '1685360029.jpg', -7, 0, 1, ' digital media devices', 'realme officially entered Europe', 'realme officially entered Europe', '2023-05-29 11:33:49');

-- --------------------------------------------------------

--
-- Table structure for table `userreg`
--

CREATE TABLE `userreg` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userreg`
--

INSERT INTO `userreg` (`id`, `name`, `phone`, `email`, `password`, `role_as`, `create_at`) VALUES
(1, 'sonali', 123489, 'anu12@gmail.com', '123456', 1, '2023-05-11 12:48:43'),
(2, 'sikha', 56688688, 'sikha@gmail.com', '1234', 0, '2023-05-12 05:48:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userreg`
--
ALTER TABLE `userreg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userreg`
--
ALTER TABLE `userreg`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
