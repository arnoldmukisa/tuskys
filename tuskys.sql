-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 31, 2016 at 10:17 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tuskys`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `itemID` int(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `category` varchar(128) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(128) NOT NULL,
  `delivery_date` date NOT NULL,
  `expiry_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemID`, `name`, `category`, `quantity`, `price`, `delivery_date`, `expiry_date`) VALUES
(1, 'Milk', 'Dairy', 20, 1400, '2016-05-06', '2016-05-13'),
(2, 'Milk', 'Dairy', 20, 1400, '2016-05-06', '2016-05-13'),
(3, 'Milk', 'Dairy', 20, 1400, '2016-05-06', '2016-05-13'),
(4, 'Milk', 'Dairy', 20, 1400, '2016-05-06', '2016-05-13'),
(5, 'Milk', 'Dairy', 20, 1400, '2016-05-06', '2016-05-13'),
(6, 'Milk', 'Dairy', 20, 1400, '2016-05-06', '2016-05-13'),
(7, 'Milk', 'Dairy', 20, 1400, '2016-05-06', '2016-05-13'),
(8, 'Milk', 'Dairy', 20, 1400, '2016-05-06', '2016-05-13'),
(9, 'Milk', 'Dairy', 20, 1400, '2016-05-06', '2016-05-13'),
(10, 'Milk', 'Dairy', 20, 1400, '2016-05-06', '2016-05-13'),
(11, 'Bread', 'Bread/Bakery â€“', 40, 1200, '2016-05-06', '2016-05-15');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supplierID` int(128) NOT NULL,
  `name` varchar(20) NOT NULL,
  `category` text NOT NULL,
  `address` text NOT NULL,
  `telephone` text NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplierID`, `name`, `category`, `address`, `telephone`, `email`) VALUES
(1, 'Fresh Diary', 'Dairy', 'Bugolobi', '0794595943', 'info@freshdiary.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(20) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `f_name` varchar(128) NOT NULL,
  `l_name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password`, `f_name`, `l_name`) VALUES
(2, 'jerryetty', '0cc175b9c0f1b6a831c399e269772661', 'Jerry', 'Etiang'),
(3, 'johnD', '0cc175b9c0f1b6a831c399e269772661', 'John', 'Doe'),
(4, 'arnold', '7215ee9c7d9dc229d2921a40e899ec5f', 'Arnold', 'Mukisa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemID`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplierID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `itemID` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `supplierID` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
