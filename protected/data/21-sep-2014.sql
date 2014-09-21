-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Sep 21, 2014 at 10:05 AM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `data_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `stng_area`
--

CREATE TABLE `stng_area` (
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

CREATE TABLE `stng_blood_group` (
  `blood_group_id` int(11) NOT NULL AUTO_INCREMENT,
  `blood_group_name` varchar(45) DEFAULT NULL,
  `blood_group_type` enum('+','-') DEFAULT NULL,
  PRIMARY KEY (`blood_group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 AUTO_INCREMENT=10 ;

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
(8, 'O', '-'),
(9, 'A', '+');

-- --------------------------------------------------------

--
-- Table structure for table `stng_nominal_roll`
--

CREATE TABLE `stng_nominal_roll` (
  `nominal_roll_id` int(11) NOT NULL AUTO_INCREMENT,
  `serial_no` int(11) DEFAULT NULL,
  `centre_name` varchar(225) DEFAULT NULL COMMENT 'sewa send from',
  `dated` date DEFAULT NULL COMMENT 'sewa send on',
  `area_name` varchar(225) DEFAULT NULL COMMENT 'sewa send area',
  `zone_name` varchar(10) DEFAULT NULL COMMENT 'sewa send zone',
  `help_line_no` text,
  `driver_vehicle_no` varchar(225) DEFAULT NULL,
  `driver_vehicle_type` varchar(225) DEFAULT NULL,
  `drive_name` varchar(225) DEFAULT NULL,
  `drive_mobile_no` bigint(12) DEFAULT NULL,
  `period_from` date DEFAULT NULL COMMENT 'sewa period from',
  `period_to` date DEFAULT NULL COMMENT 'sewa period to',
  `destination` text,
  `area_id` int(11) DEFAULT NULL COMMENT 'sewa send to area',
  `centre_id` int(11) DEFAULT NULL COMMENT 'sewa send to centre',
  `sewadar_id` int(11) DEFAULT NULL,
  `incharge_badge_no` int(11) DEFAULT NULL,
  `incharge_mobile_no` int(11) DEFAULT NULL,
  `secretary_president_mobile_no` text,
  `sewa_type` varchar(225) DEFAULT NULL,
  `total_sewadar` int(11) DEFAULT NULL,
  `total_male` int(11) DEFAULT NULL,
  `total_female` int(11) DEFAULT NULL,
  `department_name` varchar(225) DEFAULT NULL,
  `sewa_sent` enum('YES','NO','PROGRESS') DEFAULT NULL,
  `sewa_not_sent_reason` text,
  `created_on` date DEFAULT NULL,
  PRIMARY KEY (`nominal_roll_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `stng_nominal_roll`
--

INSERT INTO `stng_nominal_roll` (`nominal_roll_id`, `serial_no`, `centre_name`, `dated`, `area_name`, `zone_name`, `help_line_no`, `driver_vehicle_no`, `driver_vehicle_type`, `drive_name`, `drive_mobile_no`, `period_from`, `period_to`, `destination`, `area_id`, `centre_id`, `sewadar_id`, `incharge_badge_no`, `incharge_mobile_no`, `secretary_president_mobile_no`, `sewa_type`, `total_sewadar`, `total_male`, `total_female`, `department_name`, `sewa_sent`, `sewa_not_sent_reason`, `created_on`) VALUES
(2, 1, 'Baltana', '2014-08-23', 'Mohali', 'IB', '97794-57671, 97794-58991', 'PB 65V3645', 'Bus', 'Balwinder Singh', 2147483647, '2014-08-23', '2014-08-26', 'Beas Langer Sewa', 1, 3, NULL, NULL, NULL, '98789-03823, 98558-24925', 'langer', 7, 6, 1, 'langer', 'PROGRESS', '', '2014-08-23'),
(4, 2, 'Baltana', '2014-08-24', 'Mohali', 'IB', '97794-57671, 97794-58991', 'PB 65V3645', 'Bus', 'Balwinder Singh', 2147483647, '2014-08-24', '2014-08-27', 'Beas Langer Sewa', 1, 3, NULL, NULL, NULL, '98789-03823, 98558-24925', 'langer', 4, 3, 1, 'langer', 'NO', '', '2014-08-24'),
(5, 3, 'Baltana', '2014-08-24', 'Mohali', 'IB', '97794-57671, 97794-58991', 'PB 65V3645', 'Bus', 'Balwinder Singh', 9041999119, '2014-08-24', '2014-08-27', 'Beas Langer Sewa', 1, 3, NULL, NULL, NULL, '98789-03823, 98558-24925', 'langer', 5, 5, 0, 'langer', 'NO', '', '2014-08-24'),
(6, 86, 'Baltana', '2014-09-28', 'Mohali', 'IB', '97794-57671, 97794-58991', 'PB 65V3645', 'Bus', 'Balwinder Singh', 9914879286, '2014-09-28', '2014-09-28', 'Mohali', 2, 4, 9, 10211, 2147483647, '98789-03823, 98558-24925', 'Special Sewa', 3, 2, 1, 'Construction', 'NO', 'Not enough sewadars', '2014-09-21');

-- --------------------------------------------------------

--
-- Table structure for table `stng_nominal_roll_detail`
--

CREATE TABLE `stng_nominal_roll_detail` (
  `nominal_roll_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `nominal_roll_id` int(11) NOT NULL,
  `sewadar_id` int(11) NOT NULL,
  `order` enum('0','1','2') NOT NULL COMMENT '0- jathedar,1-male,2-female',
  PRIMARY KEY (`nominal_roll_detail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `stng_nominal_roll_detail`
--

INSERT INTO `stng_nominal_roll_detail` (`nominal_roll_detail_id`, `nominal_roll_id`, `sewadar_id`, `order`) VALUES
(12, 2, 3, '0'),
(13, 2, 6, '0'),
(14, 2, 8, '0'),
(15, 2, 2, '0'),
(16, 2, 7, '0'),
(17, 2, 4, '0'),
(21, 4, 8, '0'),
(23, 4, 2, '0'),
(24, 4, 10, '0'),
(25, 4, 3, '0'),
(28, 2, 10, '0'),
(31, 5, 8, '0'),
(32, 5, 10, '0'),
(33, 5, 7, '0'),
(34, 5, 6, '0'),
(35, 5, 9, '1'),
(38, 6, 11, '2'),
(39, 6, 9, '0'),
(40, 6, 3, '1');

-- --------------------------------------------------------

--
-- Table structure for table `stng_satsang_centre`
--

CREATE TABLE `stng_satsang_centre` (
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
-- Table structure for table `stng_sewadard_technical_detail`
--

CREATE TABLE `stng_sewadard_technical_detail` (
  `detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `sewadar_id` int(11) DEFAULT NULL,
  `job_type` int(11) DEFAULT NULL COMMENT '1,govt.job , 2. pvt. job, 3 - business',
  `department_company` text,
  `designation` varchar(225) DEFAULT NULL,
  `sewa_department` varchar(225) DEFAULT NULL,
  `period_from` date DEFAULT NULL,
  `period_to` date DEFAULT NULL,
  `badget_no` int(11) DEFAULT NULL,
  `center` varchar(11) DEFAULT NULL,
  `merital_status` int(11) DEFAULT NULL COMMENT '1-marrried,2-unmarried,3-others',
  `email_id` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`detail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `stng_sewadard_technical_detail`
--

INSERT INTO `stng_sewadard_technical_detail` (`detail_id`, `sewadar_id`, `job_type`, `department_company`, `designation`, `sewa_department`, `period_from`, `period_to`, `badget_no`, `center`, `merital_status`, `email_id`) VALUES
(1, 12, 1, 'BSNL', 'SDE', 'Sound', '2004-01-01', '2014-09-21', 2029, NULL, 1, 'ashoksehgal1966@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `stng_sewadars`
--

CREATE TABLE `stng_sewadars` (
  `sewadar_id` int(11) NOT NULL AUTO_INCREMENT,
  `badge_no` int(11) DEFAULT NULL,
  `serial_no` int(11) NOT NULL,
  `old_badge_no` int(11) DEFAULT NULL,
  `sewadar_name` varchar(45) DEFAULT NULL,
  `father_dauther_son_wife_of` varchar(45) DEFAULT NULL,
  `relation` varchar(45) DEFAULT NULL,
  `section` int(11) NOT NULL,
  `old_section` varchar(45) DEFAULT NULL,
  `mobile_primary` bigint(20) DEFAULT NULL,
  `mobile_secondary` bigint(20) DEFAULT NULL,
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
  `is_technical` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`sewadar_id`),
  UNIQUE KEY `Badge_no_UNIQUE` (`badge_no`),
  KEY `fk_stng_sewadars_stng_sewa_sections1_idx` (`section`),
  KEY `fk_stng_sewadars_stng_blood_group1_idx` (`blood_group`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `stng_sewadars`
--

INSERT INTO `stng_sewadars` (`sewadar_id`, `badge_no`, `serial_no`, `old_badge_no`, `sewadar_name`, `father_dauther_son_wife_of`, `relation`, `section`, `old_section`, `mobile_primary`, `mobile_secondary`, `gender`, `date_of_birth`, `age`, `address1`, `address2`, `address3`, `district`, `state`, `date_of_initiation`, `qualification`, `profession`, `specialization`, `sewardar_picture`, `date_of_creation`, `blood_group`, `is_technical`) VALUES
(2, 1212, 1, 1221, 'female', '', '', 14, '', NULL, NULL, 'FEMALE', '1985-01-01', 0, '', '', '', '', '', '0000-00-00', '', '', '', '', NULL, NULL, 0),
(3, NULL, 2, NULL, 'vishal', '', '', 1, '', 0, 0, 'MALE', '0000-00-00', 0, 'aasdfasd', 'fasdf', 'asdfasd', 'dffdfasdfasdfasdfasdf', 'dfsdfsdf', '0000-00-00', '', '', '', '', NULL, NULL, 1),
(4, 11, 3, 12, 'ani lkumar', '', '', 3, '', NULL, NULL, 'MALE', '0000-00-00', 0, '', '', '', '', '', '0000-00-00', '', '', '', '', NULL, 2, 1),
(5, 121, 4, NULL, 'kumar', '', '', 4, '', NULL, NULL, 'MALE', '0000-00-00', 0, '', '', '', '', '', '0000-00-00', '', '', '', '', NULL, 4, 1),
(6, 221, 5, NULL, 'vishal', '', '', 4, '', NULL, NULL, 'MALE', '0000-00-00', 0, '', '', '', '', '', '0000-00-00', '', '', '', '', NULL, NULL, 1),
(7, NULL, 6, NULL, 'manik', '', '', 13, '', NULL, NULL, 'MALE', '0000-00-00', 0, '', '', '', '', '', '0000-00-00', '', '', '', '', NULL, NULL, 1),
(8, NULL, 7, NULL, 'anil kumar', '', '', 13, '', NULL, NULL, 'MALE', '0000-00-00', 0, '', '', '', '', '', '0000-00-00', '', '', '', '', NULL, NULL, 1),
(9, 10211, 8, 1021, 'anil kumar', 'mohinder pal', 'father', 12, 'Parking', 9876109902, 0, 'MALE', '1988-06-01', 16, '27', 'golden estate, baltana', 'zirakpur', 'mohali', 'punjab', '0000-00-00', 'mca', 'software eng', 'website developement', '', NULL, 2, 1),
(10, NULL, 9, NULL, 'Gurpal Singh', 'Chuhar Singh', 'father', 12, '', 9041999119, 9041999119, 'MALE', '1967-12-01', 36, '#733', 'sec-19', 'panchkula', 'panchkula', 'haryana', '2011-11-01', 'Pre university', 'business', 'Electronics', '_Gurpal_Singh.jpg', NULL, 2, 1),
(11, NULL, 3001, NULL, 'Vimla Devi', 'Kapur singh', 'Wife', 13, '', 9788937363, 0, 'FEMALE', '1991-07-10', 10, '56, Saini Vihar, Phase - 2', 'Baltana', 'Zirakpur', 'Mohali', 'Punjab', '0000-00-00', 'Metric', 'House Wife', '', '_Vimla_Devi.jpg', NULL, 2, 0),
(12, 2029, 2029, NULL, 'Ashok Sehgal', 'Parshotam Lal Sehgal', 'Son', 12, '', 9464445533, 0, 'MALE', '1996-09-20', 10, '155, Tribune Model Gram', 'Baltana', 'Zirakpur', 'Mohali', 'Punjab', '2005-12-27', 'B. Sc.', 'Sub Divisional Engineer', '-', '2029_Ashok_Sehgal.jpg', NULL, 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `stng_sewa_sections`
--

CREATE TABLE `stng_sewa_sections` (
  `section_id` int(11) NOT NULL AUTO_INCREMENT,
  `section_name` varchar(45) DEFAULT NULL,
  `section_jathedar_name` varchar(45) DEFAULT NULL,
  `section_jathedar_mobile_no` bigint(11) DEFAULT NULL,
  `section_jathedar_mobile_secondary` bigint(11) DEFAULT NULL,
  PRIMARY KEY (`section_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

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
(12, 'Sound', 'test', 9041999119, 9041999119),
(13, 'General', NULL, NULL, NULL),
(14, 'Safai', NULL, NULL, NULL),
(15, 'Book Stall', NULL, NULL, NULL),
(16, 'Chhabeel', NULL, NULL, NULL),
(17, 'Batch Box', NULL, NULL, NULL),
(18, 'Office', NULL, 987654321, NULL),
(19, 'testing', 'testing jathedar name', 2147483647, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `stng_users`
--

CREATE TABLE `stng_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `status` enum('enable','disable') NOT NULL,
  `user_type` enum('admin','user') NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `stng_users`
--

INSERT INTO `stng_users` (`user_id`, `username`, `password`, `email`, `status`, `user_type`) VALUES
(1, 'lucky', 'd745958ee78d10bcd3537ca9c46b43ac', 'lucky@admin.com', 'enable', 'admin'),
(2, 'harry', '7892033115df266200cd0f618f5449bb', 'harry@admin.com', 'enable', 'admin'),
(3, 'anil', '4a98d88c662fa03402ee31d840b215c0', 'anil@admin.com', 'enable', 'admin'),
(4, 'mintu', '9370e1e5a83d946668715b6c472ab474', 'mintu@admin.com', 'enable', 'admin'),
(5, 'admin', '239d69cade737ee78b31232f6eb75737', 'admin@admin.com', 'enable', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_migration`
--

CREATE TABLE `tbl_migration` (
  `version` varchar(255) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_migration`
--

INSERT INTO `tbl_migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1410352430),
('m140904_042445_new_user_table', 1410352430),
('m140904_042525_change_in_nomial_roll', 1410352430),
('m140904_042542_update_sewa_section', 1410352430),
('m140907_021204_updateTableNominalRollDetail', 1410353059),
('m140915_022516_tech_detail_table', 1411275468),
('m140915_025704_updateSewadarDetail', 1411275468),
('m140915_030112_updateSewadarTechnicalDetail', 1411275468),
('m140915_035952_updateSewadarTechnicalDetail', 1411275468),
('m140919_122550_insertUSers', 1411275468),
('m140919_131832_updateNominalRoll', 1411275468);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stng_sewadars`
--
ALTER TABLE `stng_sewadars`
  ADD CONSTRAINT `fk_stng_sewadars_stng_blood_group1` FOREIGN KEY (`blood_group`) REFERENCES `stng_blood_group` (`blood_group_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_stng_sewadars_stng_sewa_sections1` FOREIGN KEY (`section`) REFERENCES `stng_sewa_sections` (`section_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
