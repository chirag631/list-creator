-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2020 at 05:37 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `register_admin`
--

CREATE TABLE `register_admin` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_admin`
--

INSERT INTO `register_admin` (`id`, `username`, `password`, `mobile_no`, `email`, `city`, `dob`) VALUES
(2, 'chirag', '7321', '+919265206064', '05042000cdk@gmail.com', 'BHAVNAGAR', '2000-04-05'),
(3, 'vishal', '8347', '665656565', 'vishal@gmail.com', 'rajkot', '2000-06-05');

-- --------------------------------------------------------

--
-- Table structure for table `register_user`
--

CREATE TABLE `register_user` (
  `id` int(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_user`
--

INSERT INTO `register_user` (`id`, `username`, `password`, `mobile_no`, `email`, `city`, `dob`) VALUES
(1, 'KAMANI', '12345', '+919265206', '05042000cdk@gmail.com', 'jamnagar', '2000-04-05'),
(9, '', '4545', '9966554422', 'dhdh@gmail.com', 'rajkot', '1999-03-05'),
(10, 'vishal', '5656', '6464646446', 'vishal@gmail.com', 'bhavnagar', '2000-08-04'),
(11, 'dffs', '', '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user_creation`
--

CREATE TABLE `user_creation` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `item_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_creation`
--

INSERT INTO `user_creation` (`id`, `user_id`, `item_name`) VALUES
(13, 1, 'chirag'),
(14, 1, 'sjfvhjf'),
(15, 1, 'sfbcfdsh'),
(16, 9, 'sdfhv'),
(17, 9, 'dsfd'),
(18, 10, 'gfugudf'),
(19, 10, 'ffihs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register_admin`
--
ALTER TABLE `register_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_user`
--
ALTER TABLE `register_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_creation`
--
ALTER TABLE `user_creation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register_admin`
--
ALTER TABLE `register_admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register_user`
--
ALTER TABLE `register_user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_creation`
--
ALTER TABLE `user_creation`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
