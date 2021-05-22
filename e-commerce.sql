-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2021 at 08:06 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categories_name` varchar(50) NOT NULL,
  `categories_id` varchar(50) NOT NULL,
  `categories_photo` varchar(300) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Active',
  `c_time` varchar(50) NOT NULL DEFAULT current_timestamp(),
  `up_time` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories_name`, `categories_id`, `categories_photo`, `status`, `c_time`, `up_time`) VALUES
(1, 'Beauty', 'BEAUTY', '83af06fe3f4b673ea7eb21f0eb9a0410.jpg', 'Active', '2021-05-22 23:45:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productname` varchar(50) NOT NULL,
  `productscategorie` varchar(50) NOT NULL,
  `productid` varchar(30) NOT NULL,
  `priceoriginal` varchar(20) NOT NULL,
  `pricediscount` varchar(20) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Active',
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `c_time` varchar(60) NOT NULL DEFAULT current_timestamp(),
  `up_time` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productname`, `productscategorie`, `productid`, `priceoriginal`, `pricediscount`, `photo`, `status`, `trash`, `c_time`, `up_time`) VALUES
(1, 'notch blazer in longline', 'beauty', 'NOTCH BLAZER IN LONGLINE', '200', '180', '0f145e3b6b5931083f1f2e86fd27bb67.jpg', 'Active', 0, '2021-05-23 00:04:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_info`
--

CREATE TABLE `users_info` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `image` varchar(300) NOT NULL,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `status` varchar(30) NOT NULL DEFAULT 'Inactive',
  `c_time` varchar(20) NOT NULL DEFAULT current_timestamp(),
  `up_time` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_info`
--

INSERT INTO `users_info` (`id`, `name`, `username`, `email`, `phone`, `password`, `gender`, `image`, `trash`, `status`, `c_time`, `up_time`) VALUES
(1, 'shuvo', 'shuvo20', 'gm@gmail.com', '0178890998765', 'c83b2d5bb1fb4d93d9d064593ed6eea2', 'Male', '2f4ac658e659aac483e0ae7f015c6167.jfif', 0, 'Active', '2021-05-22 23:30:15', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_info`
--
ALTER TABLE `users_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_info`
--
ALTER TABLE `users_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
