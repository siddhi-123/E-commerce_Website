-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 09:38 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wdinternship3`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(250) NOT NULL,
  `uname` varchar(250) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` varchar(250) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
('1', 'Boys Navy Polka Dot Print Shirt And Pant Set With Bow', '749', 'n1.jpg'),
('10', 'Lemon-chillo Long Sleeve Unise', '649', 'f2.jpg'),
('11', 'Lemon-chillo Long Sleeve Unisex', '649', 'f3.jpg'),
('12', 'Lemon-chillo Long Sleeve Unisex', '649', 'f4.jpg'),
('13', 'Lemon-chillo Long Sleeve Unisex', '649', 'f5.jpg'),
('14', 'Lemon-chillo Long Sleeve Unisex', '649', 'f6.jpg'),
('15', 'Lemon-chillo Long Sleeve Unisex', '649', 'f7.jpg'),
('16', 'Lemon-chillo Long Sleeve Unisex', '649', 'f8.jpg'),
('2', 'Girls Black Checkered Blouse and Skirt Set', '957', 'n2.jpg'),
('3', 'Girls White Solid Party Dress With Net Hat', '1460', 'n3.jpg'),
('4', 'Girls Pink Solid Sleeveless Party Dress', '1484', 'n4.jpg'),
('5', 'Girls Green Text Print Onesies with Headband', '919', 'n5.jpg'),
('6', 'Girls Pink Solid Sleeveless Playsuit with Belt', '949', 'n6.jpg'),
('7', 'Unisex White Text Print Onesies - Pack Of 2', '464', 'n7.jpg'),
('8', 'Girls Green Sleeveless Floral Print Casual Dress with Hat', '863', 'n8.jpg'),
('9', 'Lemon-chillo Long Sleeve Unisex', '649', 'f1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uname` varchar(250) NOT NULL,
  `pwd` varchar(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `email_id` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uname`, `pwd`, `name`, `contact_no`, `email_id`) VALUES
('siddhi', 'siddhis', 'Siddhi Solanki', '9769201683', 'siddhimsolanki@gmail.com'),
('smita', 'smitas', 'Smita Solanki', '9769201683', 'siddhimsolanki@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
