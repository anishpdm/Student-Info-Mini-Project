-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 10, 2019 at 09:25 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `StudentInfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `Id` int(11) NOT NULL,
  `Uname` varchar(33) NOT NULL,
  `Pass` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`Id`, `Uname`, `Pass`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `Faculty`
--

CREATE TABLE `Faculty` (
  `Id` int(11) NOT NULL,
  `Name` varchar(444) NOT NULL,
  `dept` varchar(44) NOT NULL,
  `sub` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Faculty`
--

INSERT INTO `Faculty` (`Id`, `Name`, `dept`, `sub`) VALUES
(1, 'ARATHY', 'BSC', 'CS');

-- --------------------------------------------------------

--
-- Table structure for table `Feedback`
--

CREATE TABLE `Feedback` (
  `id` int(11) NOT NULL,
  `studid` int(11) NOT NULL,
  `msg` varchar(770) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Marks`
--

CREATE TABLE `Marks` (
  `AutoId` int(11) NOT NULL,
  `StudId` int(11) NOT NULL,
  `ExamName` varchar(55) NOT NULL,
  `Sub1Name` varchar(55) NOT NULL,
  `Sub1MarkObtained` bigint(20) UNSIGNED NOT NULL,
  `Sub2Name` varchar(55) NOT NULL,
  `Sub2MarkObtained` int(11) NOT NULL,
  `Sub3Name` varchar(55) NOT NULL,
  `Sub3MarkObtained` int(11) NOT NULL,
  `Sub4name` varchar(55) NOT NULL,
  `Sub4MarkObtained` int(11) NOT NULL,
  `Sub5name` varchar(55) NOT NULL,
  `Sub5MarkObtained` int(11) NOT NULL,
  `DateOfExam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `PlacementDetails`
--

CREATE TABLE `PlacementDetails` (
  `Id` int(11) NOT NULL,
  `CompanyName` varchar(55) NOT NULL,
  `Qualification` varchar(55) NOT NULL,
  `Date` date NOT NULL,
  `Venue` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Student`
--

CREATE TABLE `Student` (
  `Id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `dept` varchar(44) NOT NULL,
  `sem` varchar(33) NOT NULL,
  `Address` varchar(33) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `Uname` varchar(44) NOT NULL,
  `Password` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Student`
--

INSERT INTO `Student` (`Id`, `name`, `dept`, `sem`, `Address`, `phone`, `Uname`, `Password`) VALUES
(1, 'arathy', 'bsc cs', 'S1', 'gokulam', 9526674440, 'arathynath@gmail.com', 'arathy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Faculty`
--
ALTER TABLE `Faculty`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Feedback`
--
ALTER TABLE `Feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Marks`
--
ALTER TABLE `Marks`
  ADD PRIMARY KEY (`AutoId`),
  ADD UNIQUE KEY `Sub1MarkObtained` (`Sub1MarkObtained`);

--
-- Indexes for table `PlacementDetails`
--
ALTER TABLE `PlacementDetails`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Student`
--
ALTER TABLE `Student`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Admin`
--
ALTER TABLE `Admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Faculty`
--
ALTER TABLE `Faculty`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Feedback`
--
ALTER TABLE `Feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Marks`
--
ALTER TABLE `Marks`
  MODIFY `AutoId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `PlacementDetails`
--
ALTER TABLE `PlacementDetails`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Student`
--
ALTER TABLE `Student`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
