-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2023 at 06:06 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cassava`
--

CREATE TABLE `cassava` (
  `Product_id` int(11) NOT NULL,
  `Price` decimal NOT NULL,
  `Date` Date NOT NULL,
  `Graph` text NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cassava`
--

INSERT INTO `cassava` (`Product_id`, `Price`, `Date`, `Graph`) VALUES
(1, '3.55', '2023-09-24', './assets/g-cassava.png');

-- --------------------------------------------------------

--
-- Table structure for table `corn`
--

CREATE TABLE `corn` (
  `Product_id` int(11) NOT NULL,
  `Price` decimal NOT NULL,
  `Date` Date NOT NULL,
  `Graph` text NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `corn`
--

INSERT INTO `corn` (`Product_id`, `Price`, `Date`, `Graph`) VALUES
(1, '10.70', '2023-09-24', './assets/gcorn.png');

-- --------------------------------------------------------

--
-- Table structure for table `durian`
--

CREATE TABLE `durian` (
  `Product_id` int(11) NOT NULL,
  `Price` decimal NOT NULL,
  `Date` Date NOT NULL,
  `Graph` text NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `durian`
--

INSERT INTO `durian` (`Product_id`, `Price`, `Date`, `Graph`) VALUES
(1, '150', '2023-09-24', 'assets/graphdurian.png');

-- --------------------------------------------------------

--
-- Table structure for table `mangosteen`
--

CREATE TABLE `mangosteen` (
  `Product_id` int(11) NOT NULL,
  `Price` decimal NOT NULL,
  `Date` Date NOT NULL,
  `Graph` text NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `mangosteen`
--

INSERT INTO `mangosteen` (`Product_id`, `Price`, `Date`, `Graph`) VALUES
(1, '45', '2023-09-24', './assets/g-q.png');

-- --------------------------------------------------------
--
-- Table structure for table `palm`
--

CREATE TABLE `palm` (
  `Product_id` int(11) NOT NULL,
  `Price` decimal NOT NULL,
  `Date` Date NOT NULL,
  `Graph` text NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `palm`
--

INSERT INTO `palm` (`Product_id`, `Price`, `Date`, `Graph`) VALUES
(1, '5', '2023-09-24', './assets/Gplam.png');

-- --------------------------------------------------------
--
-- Table structure for table `para`
--

CREATE TABLE `para` (
  `Product_id` int(11) NOT NULL,
  `Price` decimal NOT NULL,
  `Date` Date NOT NULL,
  `Graph` text NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `para`
--

INSERT INTO `para` (`Product_id`, `Price`, `Date`, `Graph`) VALUES
(1, '42', '2023-09-24', './assets/กราฟยาง.png');

-- --------------------------------------------------------

--
-- Table structure for table `rambutan`
--

CREATE TABLE `rambutan` (
  `Product_id` int(11) NOT NULL,
  `Price` decimal NOT NULL,
  `Date` Date NOT NULL,
  `Graph` text NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `rambutan`
--

INSERT INTO `rambutan` (`Product_id`, `Price`, `Date`, `Graph`) VALUES
(1, '20', '2023-09-24', './assets/g-rambutan.png');

-- --------------------------------------------------------

--
-- Table structure for table `rice`
--

CREATE TABLE `rice` (
  `Product_id` int(11) NOT NULL,
  `Price` decimal NOT NULL,
  `Date` Date NOT NULL,
  `Graph` text NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `rice`
--

INSERT INTO `rice` (`Product_id`, `Price`, `Date`, `Graph`) VALUES
(1, '16000', '2023-09-24', './assets/g-rice.png');

-- --------------------------------------------------------

--
-- Indexes for table `cassava`
--
ALTER TABLE `cassava`
  ADD PRIMARY KEY (`Product_id`);

--
-- Indexes for table `corn`
--
ALTER TABLE `corn`
  ADD PRIMARY KEY (`Product_id`);

--
-- Indexes for table `durian`
--
ALTER TABLE `durian`
  ADD PRIMARY KEY (`Product_id`);

--
-- Indexes for table `mangosteen`
--
ALTER TABLE `mangosteen`
  ADD PRIMARY KEY (`Product_id`);

--
-- Indexes for table `palm`
--
ALTER TABLE `palm`
  ADD PRIMARY KEY (`Product_id`);

--
-- Indexes for table `para`
--
ALTER TABLE `para`
  ADD PRIMARY KEY (`Product_id`);

--
-- Indexes for table `rambutan`
--
ALTER TABLE `rambutan`
  ADD PRIMARY KEY (`Product_id`);

--
-- Indexes for table `rice`
--
ALTER TABLE `rice`
  ADD PRIMARY KEY (`Product_id`);


--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cassava`
--
ALTER TABLE `cassava`
  MODIFY `Product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `corn`
--
ALTER TABLE `corn`
  MODIFY `Product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `durian`
--
ALTER TABLE `durian`
  MODIFY `Product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mangosteen`
--
ALTER TABLE `mangosteen`
  MODIFY `Product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `palm`
--
ALTER TABLE `palm`
  MODIFY `Product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `para`
--
ALTER TABLE `para`
  MODIFY `Product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rambutan`
--
ALTER TABLE `rambutan`
  MODIFY `Product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rice`
--
ALTER TABLE `rice`
  MODIFY `Product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
