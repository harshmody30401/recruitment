-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 17, 2020 at 08:36 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `collegereg`
--

CREATE TABLE `collegereg` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `head` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `location` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jobprovider`
--

CREATE TABLE `jobprovider` (
  `Id` int(11) NOT NULL,
  `Official_email` varchar(20) NOT NULL,
  `First_name` varchar(20) NOT NULL,
  `Last_name` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Mobile_no` varchar(20) NOT NULL,
  `Company_type` varchar(40) NOT NULL,
  `Location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobprovider`
--

INSERT INTO `jobprovider` (`Id`, `Official_email`, `First_name`, `Last_name`, `Password`, `Mobile_no`, `Company_type`, `Location`) VALUES
(1, 'pvc@gmail.com', 'Aishwarya', 'Charkha', '', '9876543210', 'MNC', 'pune'),
(2, 'jan@gmail.com', 'lmn', 'xyz', 'lmn123', '8794561258', 'oil', 'Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker`
--

CREATE TABLE `jobseeker` (
  `ID` int(11) NOT NULL,
  `First_name` varchar(20) NOT NULL,
  `Last_name` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Mobile_No` varchar(20) NOT NULL,
  `Location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobseeker`
--

INSERT INTO `jobseeker` (`ID`, `First_name`, `Last_name`, `Email`, `Password`, `Mobile_No`, `Location`) VALUES
(5, 'Aishwarya', 'Charkha', 'aishwarya290823@gmail.com', '', 'pune', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `recruite`
--

CREATE TABLE `recruite` (
  `id` int(11) NOT NULL,
  `first` varchar(100) NOT NULL,
  `last` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `location` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recruite`
--

INSERT INTO `recruite` (`id`, `first`, `last`, `email`, `password`, `phone`, `location`) VALUES
(1, 'first', 'last', 'firstlast@gmail.com', 'fl123', '9454545678', 'goa');

-- --------------------------------------------------------

--
-- Table structure for table `vendorreg`
--

CREATE TABLE `vendorreg` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `first` varchar(100) NOT NULL,
  `last` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `ctype` varchar(200) NOT NULL,
  `location` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendorreg`
--

INSERT INTO `vendorreg` (`id`, `email`, `first`, `last`, `password`, `phone`, `ctype`, `location`) VALUES
(1, 'first@gmail.com', 'first', 'last', 'fl123', '6125478956', 'food', 'pune'),
(2, 'first', 'janvi', 'last', '1234', 'abcd', 'food', 'pune'),
(3, 'ac@gmail.com', 'axn', 'cij', '', '9874589654', 'Textile', 'Goa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collegereg`
--
ALTER TABLE `collegereg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobprovider`
--
ALTER TABLE `jobprovider`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `jobseeker`
--
ALTER TABLE `jobseeker`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recruite`
--
ALTER TABLE `recruite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendorreg`
--
ALTER TABLE `vendorreg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collegereg`
--
ALTER TABLE `collegereg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobprovider`
--
ALTER TABLE `jobprovider`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobseeker`
--
ALTER TABLE `jobseeker`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recruite`
--
ALTER TABLE `recruite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vendorreg`
--
ALTER TABLE `vendorreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
