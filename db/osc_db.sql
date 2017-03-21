-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2015 at 11:07 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `osc_db`
--
CREATE DATABASE IF NOT EXISTS `osc_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `osc_db`;

CREATE USER 'admin'@'localhost';

GRANT ALL PRIVILEGES ON *.* TO 'admin'@'localhost' WITH GRANT OPTION;

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

DROP TABLE IF EXISTS `assignment`;
CREATE TABLE IF NOT EXISTS `assignment` (
`id` int(255) NOT NULL,
  `week` text NOT NULL,
  `assignment` text NOT NULL,
  `totalmarks` text NOT NULL,
  `duedate` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `week`, `assignment`, `totalmarks`, `duedate`) VALUES
(1, '1', 'Week 1 assignment Here', '10', '2015-06-27'),
(2, '2', 'Week 2 Assignment.', '12', '2015-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
CREATE TABLE IF NOT EXISTS `attendance` (
`id` int(255) NOT NULL,
  `week` text NOT NULL,
  `studentid` text NOT NULL,
  `studentname` text NOT NULL,
  `attendance` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `week`, `studentid`, `studentname`, `attendance`) VALUES
(1, '1', '12602', 'vidit', 'P'),
(2, '1', '12457', 'ruchir', 'P'),
(3, '1', '12539', 'Shruti', 'E'),
(4, '1', '13434', 'dharmesh', 'L'),
(5, '1', '12255', 'Rakhi', 'P'),
(6, '2', '12602', 'vidit', 'P'),
(7, '2', '12457', 'ruchir', 'E'),
(8, '2', '12539', 'Shruti', 'A'),
(9, '2', '13434', 'dharmesh', 'L'),
(10, '2', '12255', 'Rakhi', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `handouts`
--

DROP TABLE IF EXISTS `handouts`;
CREATE TABLE IF NOT EXISTS `handouts` (
`id` int(255) NOT NULL,
  `week` text NOT NULL,
  `handout` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `handouts`
--

INSERT INTO `handouts` (`id`, `week`, `handout`) VALUES
(1, '1', 'Week 1 handout here'),
(2, '2', 'Week 2 Handout.');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
`id` int(255) NOT NULL,
  `name` text NOT NULL,
  `studentid` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `studentid`) VALUES
(1, 'vidit', '12602'),
(2, 'ruchir', '12457'),
(3, 'Shruti', '12539'),
(4, 'dharmesh', '13434'),
(5, 'Rakhi', '12255');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `handouts`
--
ALTER TABLE `handouts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `handouts`
--
ALTER TABLE `handouts`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
