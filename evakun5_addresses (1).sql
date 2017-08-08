-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2017 at 08:37 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE TABLE `evakun5_addresses` (
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
  `Extra` int(11) DEFAULT NULL,
  `Paid` varchar(3) DEFAULT NULL,
  `AID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evakun5_addresses`
--

INSERT INTO `evakun5_addresses` (`Date`, `StreetNum`, `StreetName`, `StreetType`, `Direction`, `UnitNum`, `City`, `Province`, `PostalCode`, `Basic`, `Listing`, `Comps`, `Extra`, `Paid`, `AID`) VALUES
('2017-06-18', 657, '65', 'Avenue', 'E', NULL, 'Vancouver', 'BC', 'V5X 2P7', 1, 1, 1, NULL, 'x', 1),
('2017-06-23', 4750, 'Highlawn', 'Drive', NULL, NULL, 'Burnaby', 'BC', 'V5C 3T1', 1, 1, 0, NULL, 'x', 2),
('2017-06-24', 7878, 'Westminster ', 'Highway', NULL, 606, 'Richmond', 'BC', 'V6X 4A2', 0, 1, 0, NULL, 'x', 3),
('2017-06-24', 10391, 'Holleywell', 'Drive', NULL, NULL, 'Richmond', 'BC', 'V7E 5C8', 0, 0, 1, NULL, 'x', 4),
('2017-06-27', 5288, 'Grimmer', 'Street', NULL, 216, 'Burnaby', 'BC', 'V5H 0C5', 1, 1, 1, NULL, 'x', 5),
('2017-07-05', 3975, 'Mcgill', 'Street', NULL, NULL, 'Burnaby', 'BC', 'V5C 1M4', 1, 1, 1, NULL, 'x', 6),
('2017-07-05', 220, 'Sandringham', 'Crescent', NULL, NULL, 'Vancouver', 'BC', 'V7N 2R6', 1, 0, 0, NULL, 'x', 7),
('2017-07-06', 1238, 'Richards', 'Street', NULL, 1608, 'Vancouver', 'BC', 'V6B 6M6', 0, 0, 1, 1, 'x', 8),
('2017-07-06', 2023, '4', 'Ave', 'E', NULL, 'Vancouver', 'BC', 'V5N 1K5', 1, 1, 0, NULL, 'x', 9),
('2017-07-07', 408, '17', 'Ave', 'W', NULL, 'Vancouver', 'BC', 'V5Y 2A2', 1, 1, 1, NULL, 'x', 10),
('2017-07-22', 7711, 'French ', 'Street', NULL, NULL, 'Vancouver', 'BC', 'V6P 4V5', 1, 1, 0, NULL, 'x', 11),
('2017-07-22', 2609, 'St George', 'Street', NULL, NULL, 'Port Moody', 'BC', 'V6P 6G5', 1, 1, 1, NULL, 'x', 12),
('2017-07-22', 7711, 'French ', 'Street', NULL, NULL, 'Vancouver', 'BC', 'V6P 4V5', 1, 1, 0, NULL, 'x', 13),
('2017-07-22', 2609, 'St George', 'Street', NULL, NULL, 'Port Moody', 'BC', 'V6P 6G5', 1, 1, 1, NULL, 'x', 14),
('2017-07-17', 3851, 'Broadway', 'Street', NULL, NULL, 'Richmond', 'BC', 'V7E 2Y3', 1, 1, 1, NULL, 'x', 15),
('2017-07-11', 832, 'York', 'Street', NULL, NULL, 'New Westminster', 'BC', 'V7E 2Y3', 1, 1, 1, NULL, 'x', 16),
('2017-07-20', 5969, 'Granville', 'Street', NULL, NULL, 'Vancouver', 'BC', 'V6P 4V9', 1, 1, 1, NULL, 'x', 17),
('2017-07-23', 6033, 'Katsura', 'Street', NULL, NULL, 'Richmond', 'BC', 'V6Y 0B3', 1, 1, 1, NULL, 'x', 18),
('2017-07-31', 5380, 'Oben', 'Street', NULL, 1807, 'Vancouver', 'BC', 'V5R 6H7', 1, 1, 1, NULL, 'x', 19),
('2017-07-31', 4688, 'Kingsway', NULL, NULL, 2908, 'Burnaby', 'BC', 'V5H 0E9', 1, 1, 1, NULL, 'x', 20),
('2017-07-28', 969, 'Richards', 'Street', NULL, 1902, 'Vancouver', 'BC', 'V6B 1A8', 1, 1, 1, 1, 'x', 21),
('2017-07-28', 3333, '4th', 'Avenue', 'W', 313, 'Vancouver', 'BC', 'V6R 4R9', 1, 1, 1, NULL, 'x', 22),
('2017-07-26', 12891, 'Jack Bell', 'Drive', '', 60, 'Richmond', 'BC', 'V6V 2T7', 1, 1, 1, NULL, 'x', 23),
('2017-07-24', 4688, 'Kingsway', NULL, NULL, 1607, 'Burnaby', 'BC', 'V5H 0E9', 1, 1, 1, NULL, 'x', 24),
('2017-07-23', 11571, 'Thorpe', 'Road', NULL, 2, 'Richmond', 'BC', 'V6X 3Z4', 1, 1, 1, NULL, 'x', 25),
('2017-08-03', 9399, 'Odlin', 'Road', NULL, 122, 'Richmond', 'BC', 'V6X 0J6', 1, 1, 1, NULL, NULL, 26),
('2017-08-03', 10751, 'Springmont', 'Drive', NULL, NULL, 'Richmond', 'BC', 'V7E 1W3', 1, 1, 1, NULL, NULL, 27),
('2017-08-02', 668, 'Citadel Parade', NULL, NULL, 503, 'Vancouver', 'BC', 'V6B 1W6', 1, 1, NULL, NULL, NULL, 29);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `evakun5_addresses`
--
ALTER TABLE `evakun5_addresses`
  ADD PRIMARY KEY (`AID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `evakun5_addresses`
--
ALTER TABLE `evakun5_addresses`
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
