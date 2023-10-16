-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 04:13 AM
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
-- Database: `ttt`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(21) NOT NULL,
  `stid` int(21) NOT NULL,
  `name` varchar(11) NOT NULL,
  `date` int(23) NOT NULL,
  `period` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `stid`, `name`, `date`, `period`) VALUES
(0, 0, '', 2023, '');

-- --------------------------------------------------------

--
-- Table structure for table `sreg`
--

CREATE TABLE `sreg` (
  `fname` text NOT NULL,
  `sname` text NOT NULL,
  `phone` int(32) NOT NULL,
  `rollno` int(32) NOT NULL,
  `stupwd` varchar(32) NOT NULL,
  `dept` varchar(32) NOT NULL,
  `dob` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sreg`
--

INSERT INTO `sreg` (`fname`, `sname`, `phone`, `rollno`, `stupwd`, `dept`, `dob`) VALUES
('qwert', 'zxcv', 1234567890, 123456, 'Test@123', '', 0),
('qwert', 'zxcv', 1234567890, 12345, '123456', '', 0),
('qwert', 'zxcv', 1234567890, 12345, '123456', '', 0),
('ertyu', 'qwert', 123456, 123, '123', '', 0),
('ertyu', 'qwert', 123456, 123, '123', 'qwwq', 12121),
('rithick', 'mouli', 213456789, 123456, '123456', 'msc ds', 18),
('ertyu', 'qwert', 123456, 1234567, '1234567', '12', 21),
('', '', 0, 123, '123', '', 0),
('s', 's', 2147483647, 2147483647, '123', 'qq', 2147483647),
('', '', 0, 123, '123', '', 0),
('', '', 0, 123, '123', '', 0),
('Rithick', 'J', 701236488, 1234566, '12312345', 'Msc IT', 1245678);

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `staffid` int(10) NOT NULL,
  `mp1` varchar(10) NOT NULL,
  `mp2` varchar(10) NOT NULL,
  `mp3` varchar(10) NOT NULL,
  `mp4` varchar(10) NOT NULL,
  `mp5` varchar(10) NOT NULL,
  `tp1` varchar(10) NOT NULL,
  `tp2` varchar(10) NOT NULL,
  `tp3` varchar(10) NOT NULL,
  `tp4` varchar(10) NOT NULL,
  `tp5` text NOT NULL,
  `wp1` varchar(10) NOT NULL,
  `wp2` varchar(10) NOT NULL,
  `wp3` varchar(10) NOT NULL,
  `wp4` varchar(10) NOT NULL,
  `wp5` varchar(10) NOT NULL,
  `thp1` varchar(10) NOT NULL,
  `thp2` varchar(10) NOT NULL,
  `thp3` varchar(10) NOT NULL,
  `thp4` varchar(10) NOT NULL,
  `thp5` varchar(10) NOT NULL,
  `fp1` varchar(10) NOT NULL,
  `fp2` varchar(10) NOT NULL,
  `fp3` varchar(10) NOT NULL,
  `fp4` varchar(10) NOT NULL,
  `fp5` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`staffid`, `mp1`, `mp2`, `mp3`, `mp4`, `mp5`, `tp1`, `tp2`, `tp3`, `tp4`, `tp5`, `wp1`, `wp2`, `wp3`, `wp4`, `wp5`, `thp1`, `thp2`, `thp3`, `thp4`, `thp5`, `fp1`, `fp2`, `fp3`, `fp4`, `fp5`) VALUES
(123456789, '1', '0', '2', '02', '2', '0', '0', '0', '21', '3', '0', '2', '2', '2', '2', '0', '2', '230', '2', '20', '2', '0', '20', '0', '0'),
(0, '1', '0', '2', '02', '2', '0', '3', '2', '2', '20', '0', '2', '2', '2', '2', '', '', '', '', '', '2', '0', '20', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `treg`
--

CREATE TABLE `treg` (
  `name` varchar(32) NOT NULL,
  `stid` int(10) NOT NULL,
  `dept` varchar(32) NOT NULL,
  `phone` int(13) NOT NULL,
  `stpassword` varchar(32) NOT NULL,
  `dob` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `treg`
--

INSERT INTO `treg` (`name`, `stid`, `dept`, `phone`, `stpassword`, `dob`) VALUES
('rithick', 1001, 'msc', 123456789, '1001', 100000),
('Thabresh U', 7010, 'msc', 2147483647, '7010', 2023),
('Rithick J', 8888, 'msc', 2147483647, '8888', 2023),
('Thabresh U', 9025, 'msc', 2147483647, '9025', 2023),
('Rithick J', 118888, 'msc', 2147483647, '8888', 2023),
('Ravi', 2001001, 'Ms DS', 2147483647, '2001001', 2012),
('Rithick J', 118888, 'msc', 2147483647, '8888', 2023),
('Rithick J', 102, 'mnn', 2147483647, '102', 2023),
('moulis', 123456789, 'msc', 2147483647, '123456789', 2023);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
