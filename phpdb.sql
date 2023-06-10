-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 16, 2022 at 11:03 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `uid`, `pid`, `qty`) VALUES
(1, 6, 5, 3),
(2, 6, 2, 1),
(4, 6, 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf32_bin NOT NULL,
  `email` varchar(255) COLLATE utf32_bin NOT NULL,
  `phone` varchar(255) COLLATE utf32_bin NOT NULL,
  `text` text COLLATE utf32_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `text`) VALUES
(1, 'User 1', 'user@mail.com', '019191919', 'Hello World!'),
(2, 'User Two', 'u2@email.com', '019283493829', 'Very Constructive Feedback Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf32_bin NOT NULL,
  `price` decimal(13,2) NOT NULL,
  `img` varchar(512) COLLATE utf32_bin NOT NULL,
  `descr` text COLLATE utf32_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `img`, `descr`) VALUES
(2, 'Apple MacBook Pro 13.3-Inch Retina Display M2 Chip 8GB RAM 512GB SSD', '189999.00', 'macprom2.png', 'The Apple MacBook Pro 13.3-Inch laptop is powered by the new M2 chip. It is loaded with 8GB RAM and 512GB SSD. The MacBook Pro 13.3 inch laptop features a brilliant Retina display, a FaceTime HD camera, and studio‑quality mics. It comes with the same compact design but now it supports an active cooling system to sustain enhanced performance. macOS and M2 work together to bring more speed and responsiveness to all your go‑to apps. The Apple MacBook Pro comes with active cooling that sustains blazing‑fast performance.'),
(4, 'iPhone 14 Pro 6GB 256GB', '150000.00', 'iphone14pro.png', 'iPhone 14 pro gives you an entire new iPhone using experience with a massive upgrade in every aspect from its previous version. A pack of innovative features take it far beyond from any typical smartphone.\r\niPhone 14 pro is an amalgamation of upgraded camera, upgraded chipset,entirely new safety innovations with unparalleled display technology. \r\nA completely new revolutionary screen technology state between hardware and software called The Dynamic island. \r\nIn one word, from design to  feature everything gives you a pro vibe with a completely new attire.'),
(5, 'Logitech G331 3.5mm Headphone', '6100.00', 'lghp.png', 'Logitech G331 3.5mm Multi Platform Gaming Headphone Black'),
(6, 'Apple iPad Pro 11-inch 512GB', '110000.00', 'ipadpro.png', 'Apple iPad Pro 11-inch Wi-Fi 512GB'),
(7, 'Razer Blade 15 Core i7 11th Gen', '299000.00', 'razerlap.png', 'Razer Blade 15 Advanced Model Core i7 11th Gen 16GB RAM RTX3070 8GB'),
(8, 'Asus RT-AX56U AX1800 Dual Band', '15150.00', 'asusrouter.png', 'Asus RT-AX56U AX1800 Dual Band WiFi 6 Gaming Router'),
(9, 'Apple Watch Series 6 A2292', '43000.00', 'applewatch.png', 'Apple Watch Series 6 A2292 (M00D3LL/A) 44mm Sport Band (Silver Aluminum, White)');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf32_bin NOT NULL,
  `password` varchar(255) COLLATE utf32_bin NOT NULL,
  `email` varchar(255) COLLATE utf32_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`) VALUES
(6, 'user', '$2y$10$FR8BJ4LgEyVVugChJBbPn.IqBydnzPZZDGORvyX/nN1P9JRmHJLDy', 'u@m.c'),
(7, 'user2', '$2y$10$4eqv9C4pTfO3eJblMWwZZuRbiQ/M/Y3e3EGCyLHHUB9ogclSYkjY2', 'u2@m.c'),
(8, 'u3', '$2y$10$kGlryzeRpyFErlNUcq55a.AqZf6ulY3j4wLYRNAaLEt1o/n5ceVlS', 'u3@m.c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
