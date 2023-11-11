-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2023 at 06:16 PM
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
-- Database: `student r system`
--

-- --------------------------------------------------------

--
-- Table structure for table `fggg`
--

CREATE TABLE `fggg` (
  `id` int(44) NOT NULL,
  `name` int(44) NOT NULL,
  `year` int(44) NOT NULL,
  `bprice` int(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `year` varchar(32) NOT NULL,
  `semester` varchar(34) NOT NULL,
  `course_code` varchar(122) NOT NULL,
  `batch` varchar(11) NOT NULL,
  `grade` int(22) NOT NULL,
  `cgpa` int(22) NOT NULL,
  `remark` varchar(111) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `year`, `semester`, `course_code`, `batch`, `grade`, `cgpa`, `remark`) VALUES
(4, '3rd', 'second', 'sc3084', '2011d', 3, 4, 'so good'),
(5, '3rd', '2ndfff', '3084', '2023', 3, 4, 'ye lelee'),
(6, 'second', '1st', 'cocs1212', '2012', 4, 3, 'Good preferable'),
(7, '45', 'rt', 'rww', 'ss', 0, 0, 'ss');

-- --------------------------------------------------------

--
-- Table structure for table `student2`
--

CREATE TABLE `student2` (
  `id` int(11) NOT NULL,
  `images` varchar(100) DEFAULT NULL,
  `firstname` varchar(123) NOT NULL,
  `lastname` varchar(222) NOT NULL,
  `Dateob` date NOT NULL,
  `email` varchar(222) DEFAULT NULL,
  `gender` varchar(11) DEFAULT NULL,
  `year` varchar(33) DEFAULT NULL,
  `semester` varchar(22) DEFAULT NULL,
  `college` varchar(22) DEFAULT NULL,
  `dept` varchar(111) DEFAULT NULL,
  `password1` varchar(222) NOT NULL,
  `confpassword` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student2`
--

INSERT INTO `student2` (`id`, `images`, `firstname`, `lastname`, `Dateob`, `email`, `gender`, `year`, `semester`, `college`, `dept`, `password1`, `confpassword`) VALUES
(2, 'img/WIN_20221120_10_08_10_Pro.jpg', 'Jack', 'ma', '2023-02-21', 'devd#@fg', 'male', '1st', '1st', 'Eng and tech', 'cs', '23/gh', '23/gh'),
(5, 'img/eris.jpg', 'david', 'degsew', '2023-02-22', 'aadada@ds.com', 'male', '1st', '1st', 'Eng and tech', 'fgd', 'cv', 'cv'),
(6, 'img/', 'lema', 'lema', '2023-02-26', 'lema@gmail', 'male', '3rd', 'ii', 'enginnering', 'cds', 'aA12', 'aA12');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `course_code` varchar(100) DEFAULT NULL,
  `course_name` varchar(123) DEFAULT NULL,
  `course_criedt` varchar(222) DEFAULT NULL,
  `course_inst` varchar(111) DEFAULT NULL,
  `contact` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `course_code`, `course_name`, `course_criedt`, `course_inst`, `contact`) VALUES
(3, '3081', 'webasedprogramming', '7', 'AmsaluTesema', '8hr per wee'),
(5, '2051', 'op c', '4', 'admin', '3hr per wee'),
(6, '3045', 'java jdbc', '3', 'Minte', '3per week'),
(7, '3061', 'java jdbc', '5', 'teachers', '3hr per wee');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(33) NOT NULL,
  `password1` varchar(123) NOT NULL,
  `confpassword` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password1`, `confpassword`) VALUES
(1, 'admin', '1234', '1234'),
(2, 'student', '1234', '1234'),
(11, 'ddd', '', ''),
(12, 'ddd', '', ''),
(13, 'ddd', '', ''),
(14, 'ddd', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student2`
--
ALTER TABLE `student2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student2`
--
ALTER TABLE `student2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
