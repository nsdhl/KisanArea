-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2022 at 07:33 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kisanarea`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `user` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(20) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `order_id` int(20) NOT NULL DEFAULT current_timestamp(),
  `orderedby` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `payment_mode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `item_name`, `price`, `quantity`, `order_id`, `orderedby`, `address`, `phoneno`, `payment_mode`) VALUES
(1, 'Bethu Ko Saag', 125, 100, 39, 'Bimochan Bajimaya', 'Kathmandu', 9818874376, 'COD'),
(2, 'Apple', 50, 102, 87, 'Nischal Dahal', 'Saptari', 9746639988, 'COD'),
(3, 'Brinjal', 60, 200, 10, 'Nischal Dahal', 'Saptari', 9746639988, 'COD'),
(4, 'Apple', 50, 100, 99, 'Bimochan Bajimaya', 'Kathmandu', 9818874376, 'COD');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `unit` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text NOT NULL,
  `category` varchar(11) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT 1,
  `isFeatured` tinyint(1) NOT NULL DEFAULT 1,
  `price` int(11) NOT NULL,
  `stock` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productid`, `name`, `photo`, `unit`, `description`, `category`, `isActive`, `isFeatured`, `price`, `stock`) VALUES
(2, 'Bethu Ko Saag', 'bethu ko saag.jpg', 'Mutha', 'Fresh product from beni', 'Vegetable', 1, 1, 30, 75),
(3, 'Mango', 'mango1.jpg', 'Kg', 'Fresh product', 'Fruit', 1, 1, 150, 400),
(4, 'Apple', 'apple.jpg', 'Kg', 'Apple                                ', 'Fruit', 1, 1, 50, 100),
(5, 'Brinjal', 'brinjal.jpg', 'Kg', 'This product is fresh one from organic farm', 'Vegetable', 1, 1, 60, 200),
(6, 'Broccoli', 'brocolli.jpg', 'Kg', 'Broccoli from Bhaktapur', 'Vegetable', 1, 1, 70, 100),
(7, 'Grapes', 'grapes.jpg', 'Jhuppa', 'This product is fresh one from organic farm', 'Fruit', 1, 1, 50, 100),
(38, 'Potato', 'potato.jpg', 'Kg', 'Organic Potato from Sankhu', 'Vegetable', 1, 1, 150, 50),
(39, 'Mushroom', 'mushroom.JPG', 'Kg', 'Fresh Mushroom from Banke', 'Vegetable', 1, 1, 110, 50),
(53, 'Rice', 'rice.jpg', 'Kg', 'Jeera Masina from Bhaktapur', 'Others', 1, 1, 150, 700),
(56, 'Wheat', 'Wheat5.jpg', 'Kg', 'Wheat from Lagankhel', 'Others', 1, 1, 120, 500);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `address`, `phone`, `email`, `username`, `password`) VALUES
(1, 'Bimochan Bajimaya', 'Kathmandu', 9860232480, 'bmochanb@gmail.com', 'bimochan07', 'b18101a24012552d4f5b'),
(2, 'srijan', 'golfutar', 9861497286, 'srijankhadka123@gmail.com', 'srijank', '25d55ad283aa400af464');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
