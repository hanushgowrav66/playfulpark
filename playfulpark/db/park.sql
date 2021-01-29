-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2021 at 06:52 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `park`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookingid` int(10) NOT NULL,
  `Fullname` varchar(20) NOT NULL,
  `Email` varchar(35) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `City` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Zip` int(6) NOT NULL,
  `Date` date NOT NULL,
  `Numberoftickets` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `Nameoncard` varchar(20) NOT NULL,
  `Cardnumber` int(16) NOT NULL,
  `Expmonth` int(2) NOT NULL,
  `Expyear` int(4) NOT NULL,
  `CVV` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingid`, `Fullname`, `Email`, `Address`, `City`, `State`, `Zip`, `Date`, `Numberoftickets`, `Total`, `Nameoncard`, `Cardnumber`, `Expmonth`, `Expyear`, `CVV`) VALUES
(1, 'Hanush Gowrav', 'hanushgowrav66@gmail.com', 'Silk Farm', 'Hebbur', 'KARNATAKA', 572120, '2021-01-05', 5, 3750, 'Hanush', 2147483647, 12, 2025, 968),
(2, 'Brundha', 'brundham6@gmail.com', 'Kadur', 'Kadur', 'Karnataka', 578787, '2021-01-30', 3, 2250, 'Brundha M', 2147483647, 5, 2025, 125),
(3, 'Dhanush', 'dhanushgowrav365@gmail.com', 'Hebbur', 'Tumkur', 'Karnataka', 572120, '2021-02-07', 9, 6750, 'Dhanush', 2147483647, 9, 2021, 365),
(4, 'Hanush Gowrav', 'gowravhanush66@gmail.com', 'Silk Farm', 'Hebbur', 'KARNATAKA', 572120, '2021-01-30', 3, 2250, 'Hanush Gowrav', 2147483647, 2, 2025, 365);

-- --------------------------------------------------------

--
-- Table structure for table `cancelbooking`
--

CREATE TABLE `cancelbooking` (
  `Email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cancelbooking`
--

INSERT INTO `cancelbooking` (`Email`) VALUES
('dhanushgowrav365@gma');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Firstname` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Subject` varchar(20) NOT NULL,
  `Rate` int(1) NOT NULL,
  `Message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Firstname`, `Lastname`, `Email`, `Subject`, `Rate`, `Message`) VALUES
('Brundha ', 'M', 'brundham6@gmail.com', 'Feedback about park', 4, 'Nice'),
('Hanush', 'Gowrav', 'hanushgowrav66@gmail', 'Sample', 5, 'Goood!!!!');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(1, 'Hanush', 'hanushgowrav66@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2020-11-19 07:07:11'),
(2, 'Brundha', 'brundham6@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2020-11-19 07:15:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
