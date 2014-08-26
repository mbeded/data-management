-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2014 at 07:47 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `data_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `stng_area`
--

CREATE TABLE IF NOT EXISTS `stng_area` (
  `area_id` int(11) NOT NULL AUTO_INCREMENT,
  `area_name` varchar(45) DEFAULT NULL,
  `area_description` text,
  PRIMARY KEY (`area_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `stng_area`
--

INSERT INTO `stng_area` (`area_id`, `area_name`, `area_description`) VALUES
(1, 'Beas', 'Beas area'),
(2, 'Mohali', ''),
(3, 'Patiala', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `stng_blood_group`
--

CREATE TABLE IF NOT EXISTS `stng_blood_group` (
  `blood_group_id` int(11) NOT NULL AUTO_INCREMENT,
  `blood_group_name` varchar(45) DEFAULT NULL,
  `blood_group_type` enum('+','-') DEFAULT NULL,
  PRIMARY KEY (`blood_group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `stng_blood_group`
--

INSERT INTO `stng_blood_group` (`blood_group_id`, `blood_group_name`, `blood_group_type`) VALUES
(2, 'B', '+'),
(3, 'AB', '+'),
(4, 'A', '-'),
(5, 'B', '-'),
(6, 'AB', '-'),
(7, 'O', '+'),
(8, 'O', '-');

-- --------------------------------------------------------

--
-- Table structure for table `stng_satsang_centre`
--

CREATE TABLE IF NOT EXISTS `stng_satsang_centre` (
  `centre_id` int(11) NOT NULL AUTO_INCREMENT,
  `centre_name` varchar(45) DEFAULT NULL,
  `centre_secretary_name` varchar(45) DEFAULT NULL,
  `centre_secretary_mobile_number` varchar(45) DEFAULT NULL,
  `centre_code` varchar(45) DEFAULT NULL,
  `area_id` int(11) NOT NULL,
  PRIMARY KEY (`centre_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `stng_satsang_centre`
--

INSERT INTO `stng_satsang_centre` (`centre_id`, `centre_name`, `centre_secretary_name`, `centre_secretary_mobile_number`, `centre_code`, `area_id`) VALUES
(1, 'Baltana', '', '', '11', 2),
(2, 'DeraBassi', '', '', '', 2),
(3, 'Beas', '', '', NULL, 1),
(4, 'Mohali', '', '', NULL, 2),
(5, 'Patiala', '', '', NULL, 3),
(6, 'Lalru', '', '', NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `stng_sewadars`
--

CREATE TABLE IF NOT EXISTS `stng_sewadars` (
  `sewadar_id` int(11) NOT NULL AUTO_INCREMENT,
  `badge_no` int(11) DEFAULT NULL,
  `serial_no` int(11) NOT NULL,
  `old_badge_no` int(11) DEFAULT NULL,
  `sewadar_name` varchar(45) DEFAULT NULL,
  `father_dauther_son_wife_of` varchar(45) DEFAULT NULL,
  `relation` varchar(45) DEFAULT NULL,
  `section` int(11) NOT NULL,
  `old_section` varchar(45) DEFAULT NULL,
  `mobile_primary` int(10) DEFAULT NULL,
  `mobile_secondary` int(10) DEFAULT NULL,
  `gender` enum('MALE','FEMALE') DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `age` int(10) DEFAULT NULL,
  `address1` text,
  `address2` text,
  `address3` text,
  `district` varchar(223) DEFAULT NULL,
  `state` varchar(223) DEFAULT NULL,
  `date_of_initiation` date DEFAULT NULL,
  `qualification` varchar(45) DEFAULT NULL,
  `profession` varchar(45) DEFAULT NULL,
  `specialization` varchar(45) DEFAULT NULL,
  `sewardar_picture` varchar(45) DEFAULT NULL,
  `date_of_creation` date DEFAULT NULL,
  `blood_group` int(11) DEFAULT NULL,
  `is_technical` tinyint(1) NOT NULL,
  PRIMARY KEY (`sewadar_id`),
  UNIQUE KEY `Badge_no_UNIQUE` (`badge_no`),
  KEY `fk_stng_sewadars_stng_sewa_sections1_idx` (`section`),
  KEY `fk_stng_sewadars_stng_blood_group1_idx` (`blood_group`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `stng_sewadars`
--

INSERT INTO `stng_sewadars` (`sewadar_id`, `badge_no`, `serial_no`, `old_badge_no`, `sewadar_name`, `father_dauther_son_wife_of`, `relation`, `section`, `old_section`, `mobile_primary`, `mobile_secondary`, `gender`, `date_of_birth`, `age`, `address1`, `address2`, `address3`, `district`, `state`, `date_of_initiation`, `qualification`, `profession`, `specialization`, `sewardar_picture`, `date_of_creation`, `blood_group`, `is_technical`) VALUES
(2, 1212, 1, 1221, 'adsfasd', '', '', 14, '', NULL, NULL, 'MALE', '0000-00-00', 0, '', '', '', '', '', '0000-00-00', '', '', '', '', NULL, NULL, 0),
(3, NULL, 2, NULL, 'aaaaaaaaaaaaa', '', '', 1, '', NULL, NULL, 'MALE', '0000-00-00', 0, 'aasdfasd', 'fasdf', 'asdfasd', 'dffdfasdfasdfasdfasdf', 'dfsdfsdf', '0000-00-00', '', '', '', '', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `stng_sewa_sections`
--

CREATE TABLE IF NOT EXISTS `stng_sewa_sections` (
  `section_id` int(11) NOT NULL AUTO_INCREMENT,
  `section_name` varchar(45) DEFAULT NULL,
  `section_jathedar_name` varchar(45) DEFAULT NULL,
  `section_jathedar_mobile_no` int(10) DEFAULT NULL,
  `section_jathedar_mobile_secondary` int(10) DEFAULT NULL,
  PRIMARY KEY (`section_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `stng_sewa_sections`
--

INSERT INTO `stng_sewa_sections` (`section_id`, `section_name`, `section_jathedar_name`, `section_jathedar_mobile_no`, `section_jathedar_mobile_secondary`) VALUES
(1, 'Committee Member', NULL, NULL, NULL),
(2, 'Centre Jathedar', NULL, NULL, NULL),
(3, 'Pandal', NULL, NULL, NULL),
(4, 'Pathi', NULL, NULL, NULL),
(5, 'Satsang Karta', NULL, NULL, NULL),
(6, 'Security', NULL, NULL, NULL),
(7, 'Stage', NULL, NULL, NULL),
(8, 'Traffic', NULL, NULL, NULL),
(9, 'Jathdar', NULL, NULL, NULL),
(10, 'Mobile Counter', NULL, NULL, NULL),
(11, 'Parking', NULL, NULL, NULL),
(12, 'Sound', NULL, NULL, NULL),
(13, 'General', NULL, NULL, NULL),
(14, 'Safai', NULL, NULL, NULL),
(15, 'Book Stall', NULL, NULL, NULL),
(16, 'Chhabeel', NULL, NULL, NULL),
(17, 'Batch Box', NULL, NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stng_sewadars`
--
ALTER TABLE `stng_sewadars`
  ADD CONSTRAINT `fk_stng_sewadars_stng_blood_group1` FOREIGN KEY (`blood_group`) REFERENCES `stng_blood_group` (`blood_group_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_stng_sewadars_stng_sewa_sections1` FOREIGN KEY (`section`) REFERENCES `stng_sewa_sections` (`section_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
