-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 09, 2017 at 09:24 PM
-- Server version: 5.5.58-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Corporate_Directory`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_log`
--

CREATE TABLE IF NOT EXISTS `access_log` (
  `logid` int(11) NOT NULL AUTO_INCREMENT,
  `eid` int(11) NOT NULL,
  `ad` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`logid`),
  KEY `FOREIGN_KEY` (`eid`) COMMENT 'foreign_key'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `access_log`
--

INSERT INTO `access_log` (`eid`, `ad`) VALUES
(1, '2017-11-01 04:00:00'),
(4, '2017-11-15 05:00:00'),
(4, '2017-11-02 04:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE IF NOT EXISTS `application` (
  `appid` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(96) NOT NULL,
  PRIMARY KEY (`appid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`description`) VALUES
('Skype'),
('Salesforce'),
('Assets'),
('Outlook'),
('Teamcity'),
('Artifactory');

-- --------------------------------------------------------

--
-- Table structure for table `application_access_log`
--

CREATE TABLE IF NOT EXISTS `application_access_log` (
  `appid` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  KEY `FOREIGN_KEY` (`appid`) COMMENT 'foreign_key',
  KEY `FOREIGN_KEY2` (`eid`) COMMENT 'foreign_key'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_access_log`
--

INSERT INTO `application_access_log` (`appid`, `eid`) VALUES
(1, 2),
(1, 4),
(4, 3),
(3, 5),
(6, 2),
(5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `application_request`
--

CREATE TABLE IF NOT EXISTS `application_request` (
  `reqid` int(11) NOT NULL AUTO_INCREMENT,
  `app_id` int(11) NOT NULL,
  `e_id` int(11) NOT NULL,
  `rd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `description` text,
  PRIMARY KEY (`reqid`),
  KEY `foreign_key` (`app_id`),
  KEY `foreign_key2` (`e_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `application_request`
--

INSERT INTO `application_request` (`app_id`, `e_id`, `rd`, `description`) VALUES
(1, 2, '2017-10-03 04:00:00', NULL),
(4, 3, '2017-06-19 04:00:00', 'I would like access to this since I need to use it for video editing.'),
(5, 5, '2017-05-15 04:00:00', 'Hi, I need to Skype clients in Russia.'),
(1, 4, '2016-11-13 05:00:00', 'Hi, I like this app. I want to use it. Thanks. '),
(2, 3, '0000-00-00 00:00:00', 'hello'),
(4, 2, '2017-11-10 02:22:35', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `oid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `username` varchar(96) NOT NULL,
  `reportsTo` int(11) DEFAULT NULL,
  `firstname` varchar(96) NOT NULL,
  `lastname` varchar(96) NOT NULL,
  `dob` date NOT NULL,
  `hireDate` date NOT NULL,
  `homePhone` bigint(30) NOT NULL,
  `workExt` int(11) NOT NULL,
  `email` varchar(96) NOT NULL,
  `streetAddress` varchar(96) NOT NULL,
  `city_town` varchar(96) NOT NULL,
  `state` varchar(96) DEFAULT NULL,
  `country` varchar(96) NOT NULL,
  `zip` int(11) NOT NULL,
  PRIMARY KEY (`eid`),
  UNIQUE KEY `eid` (`eid`),
  KEY `FOREIGN_KEY` (`oid`) COMMENT 'foreign_key',
  KEY `FOREIGN_KEY3` (`username`) COMMENT 'foreign_key3',
  KEY `FOREIGN_KEY2` (`tid`) COMMENT 'foreign_key2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`oid`, `tid`, `username`, `reportsTo`, `firstname`, `lastname`, `dob`, `hireDate`, `homePhone`, `workExt`, `email`, `streetAddress`, `city_town`, `state`, `country`, `zip`) VALUES
(1, 1, 'kaimanners', NULL, 'kai', 'manners', '1996-02-22', '2001-08-09', 2147483647, 324, 'somethingweird102@gmail.com', '8721 Nero St.', 'Hollis', 'NY', 'USA', 11423),
(2, 5, 'leokeefe', 1, 'leo', 'keefe', '1996-09-01', '2017-11-06', 989809090, 898, 'leokeefe@hotmail.com', '777 Clarke Street', 'Minneapolis', 'MN', 'USA', 82909),
(3, 4, 'barackobama', 1, 'barack', 'obama', '2017-02-05', '2017-11-05', 985059483, 898, 'barackobama@gmail.com', '21 Pennsylvania Avenue', 'Washington DC', 'Virginia', 'USA', 9281),
(4, 3, 'Masahiro.Sakurai', 1, 'Masashiro ', 'Sakurai', '2015-07-13', '2017-09-18', 9810929091, 761, 'supersmash@gmail.com', '78 Ico Avenue', 'Tokyo', NULL, 'JP', 87192),
(5, 2, 'Hideki.Kamiya', 3, 'Hideki ', 'Kamiya', '2017-03-26', '2017-11-07', 7189098282, 898, 'viewtifuljoe@gmail.com', '87 Nanako Street', 'Nagano Perfecture', NULL, 'JP', 11433),
(2, 2, 'kwest', 5, 'Kanye ', 'West', '1980-11-11', '2017-08-21', 7489830493, 321, 'iamagod@gmail.com', '76 Chitown St.', 'Chicago', 'Illinois', 'USA', 54672),
(5, 4, 'quentintarantino', 6, 'quentin', 'tarantino', '1975-11-09', '2017-08-21', 7489580293, 758, 'killbill@hotmail.com', '87 Pulp Lane', 'Los Angeles', 'California', 'USA', 64785),
(1, 2, 'hov', 1, 'shawn', 'carter', '1967-08-07', '2017-05-22', 7890987364, 758, 'younghov@gmail.com', '87 Magna Carta St.', 'New York City', 'New York', 'USA', 64785);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(96) NOT NULL,
  `pwd` varchar(96) NOT NULL,
  `pwdset` date NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `pwd`, `pwdset`) VALUES
('barackobama', 'realpres1234', '2017-11-02'),
('Hideki.Kamiya', 'bayonetta123', '2017-07-18'),
('kaimanners', 'ihatemylife647', '2017-07-10'),
('leokeefe', 'ilovekai898', '2017-11-30'),
('Masahiro.Sakurai', 'capcomsucks909', '2016-10-17');

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE IF NOT EXISTS `organization` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(96) NOT NULL,
  PRIMARY KEY (`oid`),
  UNIQUE KEY `location` (`location`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`location`) VALUES
('New York City'),
('Chicago'),
('Los Angeles'),
('Tokyo'),
('Paris'),
('London');

-- --------------------------------------------------------

--
-- Table structure for table `systems`
--

CREATE TABLE IF NOT EXISTS `systems` (
  `sysid` int(11) NOT NULL AUTO_INCREMENT,
  `descrip` varchar(96) NOT NULL,
  PRIMARY KEY (`sysid`),
  KEY `descrip` (`descrip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `systems`
--

INSERT INTO `systems` (`descrip`) VALUES
('phone'),
('email'),
('web server'),
('instant messaging');

-- --------------------------------------------------------

--
-- Table structure for table `system_mgmt`
--

CREATE TABLE IF NOT EXISTS `system_mgmt` (
  `sysid` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  KEY `FOREIGN_KEY` (`eid`) COMMENT 'foreign_key',
  KEY `sysid` (`sysid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_mgmt`
--

INSERT INTO `system_mgmt` (`sysid`, `eid`) VALUES
(1, 2),
(2, 3),
(3, 1),
(4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

CREATE TABLE IF NOT EXISTS `title` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `posname` varchar(96) NOT NULL,
  PRIMARY KEY (`tid`),
  UNIQUE KEY `posname` (`posname`),
  KEY `tid` (`tid`),
  KEY `posname_2` (`posname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `title`
--

INSERT INTO `title` (`posname`) VALUES
('CEO/Board'),
('Administrator'),
('HR'),
('Manager'),
('Employee');
--
-- Constraints for dumped tables
--

--
-- Constraints for table `access_log`
--
ALTER TABLE `access_log`
  ADD CONSTRAINT `access_log_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `employee` (`eid`);

--
-- Constraints for table `application_access_log`
--
ALTER TABLE `application_access_log`
  ADD CONSTRAINT `application_access_log_ibfk_1` FOREIGN KEY (`appid`) REFERENCES `application` (`appid`),
  ADD CONSTRAINT `application_access_log_ibfk_2` FOREIGN KEY (`eid`) REFERENCES `employee` (`eid`);

--
-- Constraints for table `application_request`
--
ALTER TABLE `application_request`
  ADD CONSTRAINT `application_request_ibfk_1` FOREIGN KEY (`app_id`) REFERENCES `application` (`appid`),
  ADD CONSTRAINT `application_request_ibfk_2` FOREIGN KEY (`e_id`) REFERENCES `employee` (`eid`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`oid`) REFERENCES `organization` (`oid`),
  ADD CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`tid`) REFERENCES `title` (`tid`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`username`) REFERENCES `employee` (`username`);

--
-- Constraints for table `system_mgmt`
--
ALTER TABLE `system_mgmt`
  ADD CONSTRAINT `system_mgmt_ibfk_1` FOREIGN KEY (`sysid`) REFERENCES `systems` (`sysid`),
  ADD CONSTRAINT `system_mgmt_ibfk_2` FOREIGN KEY (`eid`) REFERENCES `employee` (`eid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;