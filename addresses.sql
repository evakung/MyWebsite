-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2017 at 10:02 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reports_database`
--

-- --------------------------------------------------------
CREATE DATABASE evakung5_addresses;
--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `AID` int(11) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `StreetNum` int(5) DEFAULT NULL,
  `StreetName` varchar(30) DEFAULT NULL,
  `StreetType` varchar(20) DEFAULT NULL,
  `Direction` varchar(2) DEFAULT NULL,
  `UnitNum` int(10) DEFAULT NULL,
  `City` varchar(20) DEFAULT NULL,
  `Province` varchar(2) DEFAULT NULL,
  `PostalCode` varchar(7) DEFAULT NULL,
  `Basic` int(11) DEFAULT NULL,
  `Listing` int(11) DEFAULT NULL,
  `Comps` int(11) DEFAULT NULL,
  `Total` int(10) DEFAULT NULL,
  `Paid` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`AID`, `Date`, `StreetNum`, `StreetName`, `StreetType`, `Direction`, `UnitNum`, `City`, `Province`, `PostalCode`, `Basic`, `Listing`, `Comps`, `Total`, `Paid`) VALUES
(0, '2017-06-18', 657, '65', 'Avenue', 'E', NULL, 'Vancouver', 'BC', 'V5X 2P7', 1, 1, 1, 30, 'x'),
(0, '2017-06-23', 4750, 'Highlawn', 'Drive', NULL, NULL, 'Burnaby', 'BC', 'V5C 3T1', 1, 1, NULL, 20, 'x'),
(0, '2017-06-24', 7878, 'Westminster ', 'Highway', NULL, 606, 'Richmond', 'BC', 'V6X 4A2', NULL, 1, 0, 10, 'x'),
(0, '2017-06-24', 10391, 'Holleywell', 'Drive', NULL, NULL, 'Richmond', 'BC', 'V7E 5C8', NULL, NULL, 1, 10, 'x'),
(0, '2017-06-27', 5288, 'Grimmer', 'Street', NULL, 216, 'Burnaby', 'BC', 'V5H 0C5', 1, 1, 1, 30, 'x'),
(1, '2017-07-05', 3975, 'Mcgill', 'Street', NULL, NULL, 'Burnaby', 'BC', 'V5C 1M4', 1, 1, 1, 30, NULL),
(2, '2017-07-05', 220, 'Sandringham', 'Crescent', NULL, NULL, 'Vancouver', 'BC', 'V7N 2R6', 1, NULL, NULL, 10, NULL),
(3, '2017-07-06', 1238, 'Richards', 'Street', NULL, 1608, 'Vancouver', 'BC', 'V6B 6M6', NULL, NULL, 1, 10, NULL),
(4, '2017-07-06', 2023, '4', 'Ave', 'E', NULL, 'Vancouver', 'BC', 'V5N 1K5', 1, 1, NULL, 20, NULL),
(5, '2017-07-07', 408, '17', 'Ave', 'W', NULL, 'Vancouver', 'BC', 'V5Y 2A2', 1, 1, 1, 30, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
