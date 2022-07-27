-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 07:55 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `file_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `subject`, `semester`, `file_name`) VALUES
(3, 'ada', 'adad', '13094abc.pdf'),
(4, 'adasssss', 'adad', '38480abc.pdf'),
(5, 'ada', 'adad', '1610abc.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(50) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(500) NOT NULL,
  `BirthDate` varchar(500) NOT NULL,
  `PhoneNumber` int(50) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `usertype` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `FirstName`, `LastName`, `Email`, `Password`, `BirthDate`, `PhoneNumber`, `Gender`, `usertype`) VALUES
(11, '', '', '3nlightenedb31ng@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 'Male', 'user'),
(12, '', '', '3nlightenedb31ng@gmail.com', 'f30aa7a662c728b7407c54ae6bfd27d1', '', 0, 'Male', ''),
(13, '', '', 'hello@gmail.com', '7815696ecbf1c96e6894b779456d330e', '', 0, 'Female', 'user'),
(14, 'fbh', 'fbhjd', 'hello@gmail.com', '7815696ecbf1c96e6894b779456d330e', '2022-07-06', 878957458, 'Female', 'user'),
(15, 'fjbj', 'fjbsj', '3nlightenedb31ng@gmail.com', '7815696ecbf1c96e6894b779456d330e', '2022-06-30', 363, 'Female', 'admin'),
(16, 'Sameer', 'Tamang', '3nlightenedb31ng@gmail.com', 'f30aa7a662c728b7407c54ae6bfd27d1', '2022-07-13', 123456, 'Male', 'admin'),
(17, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 0, '', ''),
(18, 'sdsds', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
