-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2023 at 10:04 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbshiraz`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`id`, `name`, `image`) VALUES
(1, 'computer', 'computer1.jpg'),
(2, 'mobiles', 'computer6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `marksheet`
--

CREATE TABLE `marksheet` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `english` int(11) DEFAULT NULL,
  `urdu` int(11) DEFAULT NULL,
  `maths` int(11) DEFAULT NULL,
  `physics` int(11) DEFAULT NULL,
  `chemistry` int(11) DEFAULT NULL,
  `marks_obtained` int(11) DEFAULT NULL,
  `total_marks` int(11) DEFAULT NULL,
  `percentage` varchar(10) DEFAULT NULL,
  `grade` varchar(10) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marksheet`
--

INSERT INTO `marksheet` (`id`, `name`, `english`, `urdu`, `maths`, `physics`, `chemistry`, `marks_obtained`, `total_marks`, `percentage`, `grade`, `remarks`) VALUES
(23, 'abdullah', 78, 56, 56, 89, 78, 357, 500, '71.4', 'A', 'Well Done'),
(26, 'rehan', 89, 78, 56, 66, 77, 366, 500, '73.2', 'A', 'Well Done');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_quantity` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `category_type` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_quantity`, `product_price`, `category_type`, `image`) VALUES
(2, 'infinix', '356', '40000', 'mobiles', 'computer5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `email`, `password`) VALUES
(1, 'shiraz@gmail.com', '231');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marksheet`
--
ALTER TABLE `marksheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `marksheet`
--
ALTER TABLE `marksheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
