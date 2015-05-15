-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2015 at 02:17 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `repute system`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='To identify unique accounts and type of account ';

-- --------------------------------------------------------

--
-- Table structure for table `pupil`
--

CREATE TABLE IF NOT EXISTS `pupil` (
  `name` varchar(15) NOT NULL,
  `USN` varchar(15) NOT NULL,
  `repute` int(5) NOT NULL DEFAULT '10',
  `Department` varchar(5) NOT NULL,
  `u_name` varchar(15) NOT NULL,
  `acc_type` varchar(10) NOT NULL DEFAULT 'Student',
  PRIMARY KEY (`USN`),
  KEY `foreignkey` (`u_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reported_sites`
--

CREATE TABLE IF NOT EXISTS `reported_sites` (
  `USN` varchar(15) NOT NULL,
  `site` varchar(30) NOT NULL,
  KEY `fkey` (`USN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `r_sites`
--

CREATE TABLE IF NOT EXISTS `r_sites` (
  `teacherID` varchar(15) NOT NULL,
  `site` varchar(30) NOT NULL,
  KEY `f_key` (`teacherID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE IF NOT EXISTS `sites` (
  `URL` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL,
  `upvotes` int(4) NOT NULL,
  `downvotes` int(4) NOT NULL,
  PRIMARY KEY (`URL`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `name` varchar(15) NOT NULL,
  `id` varchar(15) NOT NULL,
  `repute` int(5) NOT NULL DEFAULT '50',
  `Department` varchar(5) NOT NULL,
  `u_name` varchar(15) NOT NULL,
  `acc_type` varchar(10) NOT NULL DEFAULT 'Teacher',
  PRIMARY KEY (`id`),
  KEY `fkey1` (`u_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `voted_sites`
--

CREATE TABLE IF NOT EXISTS `voted_sites` (
  `USN` varchar(15) NOT NULL,
  `URL` varchar(30) NOT NULL,
  `vote` varchar(10) NOT NULL,
  KEY `fkey3` (`USN`),
  KEY `fkey4` (`URL`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `v_sites`
--

CREATE TABLE IF NOT EXISTS `v_sites` (
  `teacher_id` varchar(15) NOT NULL,
  `URL` varchar(30) NOT NULL,
  `vote` varchar(10) NOT NULL,
  KEY `fkey6` (`teacher_id`),
  KEY `fkey7` (`URL`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pupil`
--
ALTER TABLE `pupil`
  ADD CONSTRAINT `pupil_ibfk_1` FOREIGN KEY (`u_name`) REFERENCES `accounts` (`username`);

--
-- Constraints for table `reported_sites`
--
ALTER TABLE `reported_sites`
  ADD CONSTRAINT `fkey` FOREIGN KEY (`USN`) REFERENCES `pupil` (`USN`);

--
-- Constraints for table `r_sites`
--
ALTER TABLE `r_sites`
  ADD CONSTRAINT `f_key` FOREIGN KEY (`teacherID`) REFERENCES `teacher` (`id`);

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `fkey1` FOREIGN KEY (`u_name`) REFERENCES `accounts` (`username`);

--
-- Constraints for table `voted_sites`
--
ALTER TABLE `voted_sites`
  ADD CONSTRAINT `fkey4` FOREIGN KEY (`URL`) REFERENCES `sites` (`URL`),
  ADD CONSTRAINT `fkey3` FOREIGN KEY (`USN`) REFERENCES `pupil` (`USN`);

--
-- Constraints for table `v_sites`
--
ALTER TABLE `v_sites`
  ADD CONSTRAINT `fkey7` FOREIGN KEY (`URL`) REFERENCES `sites` (`URL`),
  ADD CONSTRAINT `fkey6` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
