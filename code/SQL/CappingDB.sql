-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2017 at 06:09 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corporate_directory`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_log`
--

CREATE TABLE `access_log` (
  `logid` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `ad` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `access_log`
--

INSERT INTO `access_log` (`logid`, `eid`, `ad`) VALUES
(1, 1, '2017-11-01 04:00:00'),
(2, 4, '2017-11-15 05:00:00'),
(3, 4, '2017-11-02 04:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `appid` int(11) NOT NULL,
  `description` varchar(96) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`appid`, `description`) VALUES
(1, 'Skype'),
(2, 'Salesforce'),
(3, 'Assets'),
(4, 'Outlook'),
(5, 'Teamcity'),
(6, 'Artifactory');

-- --------------------------------------------------------

--
-- Table structure for table `application_access_log`
--

CREATE TABLE `application_access_log` (
  `appid` int(11) NOT NULL,
  `eid` int(11) NOT NULL
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

CREATE TABLE `application_request` (
  `reqid` int(11) NOT NULL,
  `app_id` int(11) NOT NULL,
  `e_id` int(11) NOT NULL,
  `rd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_request`
--

INSERT INTO `application_request` (`reqid`, `app_id`, `e_id`, `rd`, `description`) VALUES
(1, 1, 2, '2017-10-03 04:00:00', NULL),
(2, 4, 3, '2017-06-19 04:00:00', 'I would like access to this since I need to use it for video editing.'),
(3, 5, 5, '2017-05-15 04:00:00', 'Hi, I need to Skype clients in Russia.'),
(4, 1, 4, '2016-11-13 05:00:00', 'Hi, I like this app. I want to use it. Thanks. '),
(5, 2, 3, '0000-00-00 00:00:00', 'hello'),
(6, 4, 2, '2017-11-10 02:22:35', 'yes'),
(9, 1, 6, '2017-11-10 05:34:34', 'wavy'),
(10, 1, 3, '2017-11-10 05:48:23', 'bc i was 44'),
(11, 5, 3, '2017-11-10 08:57:25', 'because I wanna test the database');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `did` int(11) NOT NULL,
  `description` varchar(96) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`did`, `description`) VALUES
(1, 'Sales'),
(2, 'Marketing'),
(3, 'Human Resources'),
(4, 'Information Technology'),
(5, 'Plant and Infrastructure '),
(6, 'Product Development');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `eid` int(11) NOT NULL,
  `oid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `did` int(11) DEFAULT NULL,
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
  `zip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eid`, `oid`, `tid`, `did`, `username`, `reportsTo`, `firstname`, `lastname`, `dob`, `hireDate`, `homePhone`, `workExt`, `email`, `streetAddress`, `city_town`, `state`, `country`, `zip`) VALUES
(1, 1, 1, NULL, 'kaimanners', NULL, 'kai', 'manners', '1996-02-22', '2001-08-09', 2147483647, 324, 'somethingweird102@gmail.com', '8721 Nero St.', 'Hollis', 'NY', 'USA', 11423),
(2, 2, 5, NULL, 'leokeefe', 1, 'leo', 'keefe', '1996-09-01', '2017-11-06', 989809090, 898, 'leokeefe@hotmail.com', '777 Clarke Street', 'Minneapolis', 'MN', 'USA', 82909),
(3, 3, 4, NULL, 'barackobama', 1, 'barack', 'obama', '2017-02-05', '2017-11-05', 985059483, 898, 'barackobama@gmail.com', '21 Pennsylvania Avenue', 'Washington DC', 'Virginia', 'USA', 9281),
(4, 4, 3, NULL, 'Masahiro.Sakurai', 1, 'Masashiro ', 'Sakurai', '2015-07-13', '2017-09-18', 9810929091, 761, 'supersmash@gmail.com', '78 Ico Avenue', 'Tokyo', NULL, 'JP', 87192),
(5, 5, 2, NULL, 'Hideki.Kamiya', 3, 'Hideki ', 'Kamiya', '2017-03-26', '2017-11-07', 7189098282, 898, 'viewtifuljoe@gmail.com', '87 Nanako Street', 'Nagano Perfecture', NULL, 'JP', 11433),
(6, 2, 2, NULL, 'kwest', 5, 'Kanye ', 'West', '1980-11-11', '2017-08-21', 7489830493, 321, 'iamagod@gmail.com', '76 Chitown St.', 'Chicago', 'Illinois', 'USA', 54672),
(7, 5, 4, NULL, 'quentintarantino', 6, 'quentin', 'tarantino', '1975-11-09', '2017-08-21', 7489580293, 758, 'killbill@hotmail.com', '87 Pulp Lane', 'Los Angeles', 'California', 'USA', 64785),
(8, 1, 2, NULL, 'hov', 1, 'shawn', 'carter', '1967-08-07', '2017-05-22', 7890987364, 758, 'younghov@gmail.com', '87 Magna Carta St.', 'New York City', 'New York', 'USA', 64785);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(96) NOT NULL,
  `pwd` varchar(96) NOT NULL,
  `pwdset` date NOT NULL
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

CREATE TABLE `organization` (
  `oid` int(11) NOT NULL,
  `location` varchar(96) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`oid`, `location`) VALUES
(2, 'Chicago'),
(6, 'London'),
(3, 'Los Angeles'),
(1, 'New York City'),
(5, 'Paris'),
(4, 'Tokyo');

-- --------------------------------------------------------

--
-- Table structure for table `systems`
--

CREATE TABLE `systems` (
  `sysid` int(11) NOT NULL,
  `descrip` varchar(96) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `systems`
--

INSERT INTO `systems` (`sysid`, `descrip`) VALUES
(2, 'email'),
(4, 'instant messaging'),
(1, 'phone'),
(3, 'web server');

-- --------------------------------------------------------

--
-- Table structure for table `system_mgmt`
--

CREATE TABLE `system_mgmt` (
  `sysid` int(11) NOT NULL,
  `eid` int(11) NOT NULL
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

CREATE TABLE `title` (
  `tid` int(11) NOT NULL,
  `posname` varchar(96) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `title`
--

INSERT INTO `title` (`tid`, `posname`) VALUES
(2, 'Administrator'),
(1, 'CEO/Board'),
(5, 'Employee'),
(3, 'HR'),
(4, 'Manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_log`
--
ALTER TABLE `access_log`
  ADD PRIMARY KEY (`logid`),
  ADD KEY `FOREIGN_KEY` (`eid`) COMMENT 'foreign_key';

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`appid`);

--
-- Indexes for table `application_access_log`
--
ALTER TABLE `application_access_log`
  ADD KEY `FOREIGN_KEY` (`appid`) COMMENT 'foreign_key',
  ADD KEY `FOREIGN_KEY2` (`eid`) COMMENT 'foreign_key';

--
-- Indexes for table `application_request`
--
ALTER TABLE `application_request`
  ADD PRIMARY KEY (`reqid`),
  ADD KEY `foreign_key` (`app_id`),
  ADD KEY `foreign_key2` (`e_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`),
  ADD KEY `FOREIGN_KEY` (`oid`) COMMENT 'foreign_key',
  ADD KEY `FOREIGN_KEY3` (`username`) COMMENT 'foreign_key3',
  ADD KEY `FOREIGN_KEY2` (`tid`) COMMENT 'foreign_key2',
  ADD KEY `did` (`did`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`oid`),
  ADD UNIQUE KEY `location` (`location`);

--
-- Indexes for table `systems`
--
ALTER TABLE `systems`
  ADD PRIMARY KEY (`sysid`),
  ADD KEY `descrip` (`descrip`);

--
-- Indexes for table `system_mgmt`
--
ALTER TABLE `system_mgmt`
  ADD KEY `FOREIGN_KEY` (`eid`) COMMENT 'foreign_key',
  ADD KEY `sysid` (`sysid`);

--
-- Indexes for table `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`tid`),
  ADD UNIQUE KEY `posname` (`posname`),
  ADD KEY `tid` (`tid`),
  ADD KEY `posname_2` (`posname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access_log`
--
ALTER TABLE `access_log`
  MODIFY `logid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `application_request`
--
ALTER TABLE `application_request`
  MODIFY `reqid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  ADD CONSTRAINT `appid` FOREIGN KEY (`appid`) REFERENCES `application` (`appid`),
  ADD CONSTRAINT `eid` FOREIGN KEY (`eid`) REFERENCES `employee` (`eid`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `did` FOREIGN KEY (`did`) REFERENCES `department` (`did`),
  ADD CONSTRAINT `oid` FOREIGN KEY (`oid`) REFERENCES `organization` (`oid`),
  ADD CONSTRAINT `tid` FOREIGN KEY (`tid`) REFERENCES `title` (`tid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
