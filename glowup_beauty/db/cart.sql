-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2020 at 10:48 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beauty_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `order_id` int(3) NOT NULL,
  `pname` varchar(300) NOT NULL,
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `price` int(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `p_image` varchar(100) NOT NULL,
  `cname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`order_id`, `pname`, `id`, `username`, `price`, `quantity`, `p_image`, `cname`) VALUES
(160, 'Maybelline New York The Rock Nudes Eye Shadow Palette', 3, 'jmg', 905, 1, './images/eyeshadow/rock.jpg', 'eyeshadow'),
(161, 'Smashbox Cover Shot Eye Palette - Golden Hour', 4, 'jmg', 2950, 1, './images/eyeshadow/cover.jpg', 'eyeshadow'),
(162, 'Lakme Absolute Shine Line Eye Liner - Liquid Gold', 22, 'jmg', 450, 1, './images/eyeliner/shine.jpg', 'eyeliner'),
(166, 'Enamor W001 Smart Mask - Adult', 99, 'elise', 499, 1, 'images/others/ena.jpg ', 'Essentials'),
(168, 'Maybelline New York Colossal Bold Eyeliner - Black', 17, 'elise', 249, 1, './images/eyeliner/col.jpg', 'eyeliner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `order_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id`) REFERENCES `products` (`pid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
