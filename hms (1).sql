-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 10:24 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `mobile`) VALUES
(1, 'admin', 'a', '1', 77874512);

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `order_id` varchar(233) NOT NULL,
  `status` varchar(233) NOT NULL,
  `dis_st` varchar(10) NOT NULL,
  `amount` varchar(233) NOT NULL,
  `date` text NOT NULL,
  `custid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`order_id`, `status`, `dis_st`, `amount`, `date`, `custid`) VALUES
('ORDS45157734', 'TXN_SUCCESS', 'Success', '1800.00', '2021-06-14 01:48:55.0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pc`
--

CREATE TABLE `pc` (
  `id` int(11) NOT NULL,
  `dates_of` int(11) NOT NULL,
  `price_of` int(11) NOT NULL,
  `rooms_of` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pc`
--

INSERT INTO `pc` (`id`, `dates_of`, `price_of`, `rooms_of`) VALUES
(4, 1, 1800, 'Delux'),
(5, 1, 1600, 'semi-delux'),
(6, 2, 3600, 'Delux'),
(7, 1, 2000, 'Super-delux');

-- --------------------------------------------------------

--
-- Table structure for table `semi`
--

CREATE TABLE `semi` (
  `uid` int(11) NOT NULL,
  `Price` int(10) DEFAULT NULL,
  `order_id` varchar(256) NOT NULL,
  `fname` varchar(256) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(256) NOT NULL,
  `adhar-card-no` text DEFAULT NULL,
  `adhar-card-f-1` varchar(100) DEFAULT NULL,
  `adhar-card-s-1` varchar(100) DEFAULT NULL,
  `approching-date` varchar(50) DEFAULT NULL,
  `leaving-date` varchar(50) DEFAULT NULL,
  `Days-stay` int(10) DEFAULT NULL,
  `room-type` text DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `Adults` int(1) DEFAULT NULL,
  `Childs` int(1) DEFAULT NULL,
  `Beds` int(1) DEFAULT NULL,
  `status` int(1) NOT NULL,
  `rooms` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semi`
--

INSERT INTO `semi` (`uid`, `Price`, `order_id`, `fname`, `phone`, `email`, `address`, `adhar-card-no`, `adhar-card-f-1`, `adhar-card-s-1`, `approching-date`, `leaving-date`, `Days-stay`, `room-type`, `gender`, `Adults`, `Childs`, `Beds`, `status`, `rooms`) VALUES
(1, NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 105),
(2, NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 106),
(3, NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 107),
(4, NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 108);

-- --------------------------------------------------------

--
-- Table structure for table `super`
--

CREATE TABLE `super` (
  `uid` int(11) NOT NULL,
  `Price` int(10) DEFAULT NULL,
  `order_id` varchar(256) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `address` varchar(256) NOT NULL,
  `adhar-card-no` int(15) DEFAULT NULL,
  `adhar-card-f-1` varchar(50) DEFAULT NULL,
  `adhar-card-s-1` varchar(50) DEFAULT NULL,
  `approching-date` varchar(50) DEFAULT NULL,
  `leaving-date` varchar(50) DEFAULT NULL,
  `Days-stay` int(10) DEFAULT NULL,
  `room-type` text DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `Adults` int(1) DEFAULT NULL,
  `Childs` int(1) DEFAULT NULL,
  `Beds` int(1) DEFAULT NULL,
  `status` int(1) NOT NULL,
  `rooms` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `super`
--

INSERT INTO `super` (`uid`, `Price`, `order_id`, `fname`, `phone`, `email`, `address`, `adhar-card-no`, `adhar-card-f-1`, `adhar-card-s-1`, `approching-date`, `leaving-date`, `Days-stay`, `room-type`, `gender`, `Adults`, `Childs`, `Beds`, `status`, `rooms`) VALUES
(1, NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 109),
(2, NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 110),
(3, NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 111),
(4, NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 112),
(5, NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 113),
(6, NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 114);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `Price` int(10) NOT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `fname` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `adhar-card-no` int(12) DEFAULT NULL,
  `adhar-card-f-1` varchar(256) DEFAULT NULL,
  `adhar-card-s-1` varchar(256) DEFAULT NULL,
  `approching-date` varchar(256) DEFAULT NULL,
  `leaving-date` varchar(256) NOT NULL,
  `Days-stay` int(11) NOT NULL,
  `recorde-date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `room-type` text DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `Adults` int(10) NOT NULL,
  `Childs` int(10) NOT NULL,
  `Beds` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `rooms` int(3) NOT NULL,
  `payment` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `Price`, `order_id`, `fname`, `phone`, `email`, `address`, `adhar-card-no`, `adhar-card-f-1`, `adhar-card-s-1`, `approching-date`, `leaving-date`, `Days-stay`, `recorde-date`, `room-type`, `gender`, `Adults`, `Childs`, `Beds`, `status`, `rooms`, `payment`) VALUES
(13, 1800, 'ORDS45157734', 'Shubhradeep Bose', '07908807895', 'shubhradeepbose79@gmail.com', 'Santinagar,Burnpur', 3, 'IMG-60c668167e2f84.95362465.jpg', 'IMG-60c668167e30b0.23503739.jpg', ' 2021-06-01', '2021-06-02', 1, '2021-06-13 20:18:30', 'Delux', 'Male', 1, 0, 1, 1, 101, ''),
(15, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, '2021-06-13 19:57:19', NULL, NULL, 0, 0, 0, 0, 102, ''),
(16, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, '2021-06-13 19:57:33', NULL, NULL, 0, 0, 0, 0, 103, ''),
(17, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, '2021-06-13 14:44:02', NULL, NULL, 0, 0, 0, 0, 104, '');

-- --------------------------------------------------------

--
-- Table structure for table `user12`
--

CREATE TABLE `user12` (
  `sno` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user12`
--

INSERT INTO `user12` (`sno`, `username`, `password`, `email`, `dt`) VALUES
(28, 'Shubho', '1', 'shubhradeepbose79@gmail.com', '2021-06-13 21:42:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pc`
--
ALTER TABLE `pc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semi`
--
ALTER TABLE `semi`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `super`
--
ALTER TABLE `super`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `user12`
--
ALTER TABLE `user12`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pc`
--
ALTER TABLE `pc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `semi`
--
ALTER TABLE `semi`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `super`
--
ALTER TABLE `super`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user12`
--
ALTER TABLE `user12`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
