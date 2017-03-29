-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2016 at 09:41 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE IF NOT EXISTS `doctors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `docname` varchar(20) NOT NULL,
  `specialization` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `docname`, `specialization`) VALUES
(1, 'aravind', 'Physician'),
(2, 'anusha', 'MBBS'),
(3, 'lsjdfgslk', 'lsdjkfgnslkdj'),
(4, 'lskjdgnlskdj', 'lajdsfasldkjfnsa');

-- --------------------------------------------------------

--
-- Table structure for table `lab_mapping`
--

CREATE TABLE IF NOT EXISTS `lab_mapping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lab_id` int(20) NOT NULL,
  `op_id` int(20) NOT NULL,
  `ip_id` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `lab_mapping`
--

INSERT INTO `lab_mapping` (`id`, `lab_id`, `op_id`, `ip_id`) VALUES
(1, 1, 54, '');

-- --------------------------------------------------------

--
-- Table structure for table `lab_module`
--

CREATE TABLE IF NOT EXISTS `lab_module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `test_name` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `lab_module`
--

INSERT INTO `lab_module` (`id`, `test_name`) VALUES
(1, 'Blood Test'),
(2, 'uric acid test');

-- --------------------------------------------------------

--
-- Table structure for table `op_bill`
--

CREATE TABLE IF NOT EXISTS `op_bill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `PatientType` varchar(20) NOT NULL,
  `cost` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `op_bill`
--

INSERT INTO `op_bill` (`id`, `PatientType`, `cost`) VALUES
(1, 'Regular', 100),
(2, 'outsidedoctor', 200),
(3, 'inhousedoctor', 50),
(4, 'Repeated Patient', 0);

-- --------------------------------------------------------

--
-- Table structure for table `op_patient`
--

CREATE TABLE IF NOT EXISTS `op_patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `age` int(2) NOT NULL,
  `Phoneno` bigint(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `ptype` varchar(20) NOT NULL,
  `date1` date NOT NULL,
  `Referred` varchar(20) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `time` time NOT NULL,
  `bill_status` int(2) NOT NULL,
  `docname` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `op_patient`
--

INSERT INTO `op_patient` (`id`, `name`, `age`, `Phoneno`, `gender`, `ptype`, `date1`, `Referred`, `Address`, `time`, `bill_status`, `docname`) VALUES
(27, 'kjshgbjsd', 54, 4964621651, 'Male', 'inhousedoctor', '2016-07-01', 'Walkin', 'kjhbfkjsdbfksdj', '00:00:00', 1, ''),
(28, 'lsjkgnflkjd', 23, 23487293847, 'Male', 'outsidedoctor', '2016-07-01', 'Walkin', 'Kothapalem beside co-operative bank\r\nGopalapatnam', '12:21:48', 1, ''),
(29, 'asdjfh', 54, 657461843, 'Male', 'outsidedoctor', '2016-07-01', 'Walkin', 's,djvbfskjksd', '12:39:28', 1, ''),
(30, 'lfjfs;kgj', 23, 8885019199, 'Male', 'inhousedoctor', '2016-07-01', 'Walkin', 'Kothapalem beside co-operative bank\r\nGopalapatnam', '04:40:00', 1, ''),
(32, 'avinash', 22, 8885018199, 'Male', 'outsidedoctor', '2016-07-02', 'helloworld', '#gopalapatnam', '01:31:00', 1, ''),
(34, 'sgdklj', 45, 8523695475, 'Male', 'outsidedoctor', '2016-07-04', 'Walkin', 'Kothapalem beside co-operative bank\r\nGopalapatnam', '11:56:46', 1, ''),
(35, 'lksjdgskd', 78, 6432186513, 'Male', 'Regular', '2016-07-04', 'Walkin', 'Kothapalem beside co-operative bank\r\nGopalapatnam', '12:02:20', 1, ''),
(36, 'lksjdgskd', 78, 8432186513, 'Male', 'Regular', '2016-07-04', 'Walkin', 'Kothapalem beside co-operative bank\r\nGopalapatnam', '12:03:13', 0, ''),
(40, 'fred', 12, 9632587412, 'Male', 'Regular', '2016-07-04', 'Walkin', 'Kothapalem beside co-operative bank\r\nGopalapatnam', '02:40:20', 0, ''),
(41, 'sdfsdf', 23, 9874563212, 'Male', 'inhousedoctor', '2016-07-04', 'Walkin', 'Kothapalem beside co-operative bank\r\nGopalapatnam', '10:13:45', 0, ''),
(43, 'avinash', 22, 8885018199, 'Male', 'Regular', '2016-07-05', 'Walkin', '#goplapatnam,vizag', '03:11:49', 0, ''),
(44, 'avinashd', 22, 8885018166, 'Male', 'Regular', '2016-07-05', 'Walkin', 'Kothapalem beside co-operative bank\r\nGopalapatnam', '03:40:31', 1, ''),
(45, 'avinash', 22, 8885018199, 'Male', 'Regular', '2016-07-06', 'Walkin', 'Kothapalem beside co-operative bank\r\nGopalapatnam', '12:16:41', 0, ''),
(46, 'avinash', 22, 8885018199, 'Male', 'Regular', '2016-07-06', 'Walkin', 'Kothapalem beside co-operative bank\r\nGopalapatnam', '12:17:44', 1, ''),
(47, 'gsfgsdfg', 23, 9876543212, 'Male', 'Regular', '2016-07-07', 'Walkin', 'Kothapalem beside co-operative bank\r\nGopalapatnam', '12:09:09', 1, ''),
(48, 'dfhdfh', 45, 9123456987, 'Male', 'Regular', '2016-07-07', 'Walkin', 'Kothapalem beside co-operative bank\r\nGopalapatnam', '12:19:35', 1, 'anusha'),
(49, 'akdjsfaskd', 56, 9632587412, 'Male', 'Regular', '2016-07-09', 'Walkin', 'Kothapalem beside co-operative bank\r\nGopalapatnam', '05:08:40', 0, 'jsdkgsjd'),
(50, ',dkfjghlkdfj', 58, 9632145698, 'Male', 'Regular', '2016-07-09', 'Walkin', 'essdjfb', '05:27:36', 0, 'djfhgdj'),
(51, 'sjdfg', 23, 9876543212, 'Male', 'Regular', '2016-07-09', 'Walkin', 'Kothapalem beside co-operative bank\r\nGopalapatnam', '05:35:43', 0, 'sdfj'),
(52, ',dfjgdk', 32, 9632587412, 'Male', 'Regular', '2016-07-09', 'Walkin', 'mhgfvkjhvb,', '05:47:40', 0, 'hgkjhbkljnk'),
(53, ',dfjgdk', 32, 8523145871, 'Male', 'Regular', '2016-07-09', 'Walkin', 'mhgfvkjhvb,', '05:48:20', 0, 'hgkjhbkljnk'),
(54, 'dsjkfg;sdkf', 78, 9462198511, 'Male', 'Regular', '2016-07-09', 'Walkin', 'Kothapalem beside co-operative bank\r\nGopalapatnam', '05:53:44', 0, 'msdfbs'),
(56, 'kwdjfd', 23, 9391384153, 'Male', 'Regular', '2016-07-12', 'Walkin', 'Kothapalem beside co-operative bank\r\nGopalapatnam', '01:19:34', 0, 'anusha'),
(57, 'avinash', 22, 8885018199, 'Male', 'RepeatedPatient', '2016-07-12', 'Walkin', 'Kothapalem beside co-operative bank\r\nGopalapatnam', '01:20:48', 0, 'anusha'),
(58, 'nbdf', 23, 9090909090, 'Male', 'Regular', '2016-07-12', 'Walkin', 's,d,fgsbdk,', '01:29:17', 0, 'asdflk'),
(59, 'asdjfsd', 85, 9632587412, 'Male', 'Regular', '2016-07-12', 'Walkin', 'Kothapalem beside co-operative bank\r\nGopalapatnam', '03:10:19', 0, 'sdjks'),
(60, 'umesh', 23, 9573907258, 'Male', 'inhousedoctor', '2016-07-13', 'option1', '', '11:14:52', 0, 'umesh'),
(61, 'umesh', 23, 9573907258, 'Male', 'inhousedoctor', '2016-07-13', 'option1', '', '11:15:56', 0, 'umesh');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Phonenumber` bigint(20) NOT NULL,
  `Emailid` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `FirstName`, `LastName`, `Phonenumber`, `Emailid`, `password`, `role`) VALUES
(4, 'ksajdfbk', 'kjsdbf', 8885017199, 'avin@gmail.com', '123456', 'client'),
(5, 'avinash', 'doddi', 8885018199, 'davinash047@gmail.com', '123456789', 'lab'),
(6, 'avinash', 'doddi', 8885018199, 'avinashdoddi@gmail.c', 'fc5e038d38a57032085441e7fe7010b0', 'client'),
(7, 'vskldfj', 'vsdkfn', 8536245368, 'kjsdh@gmail.com', 'hello', 'client'),
(9, 'a', 'd', 9393102273, 'ad@gmail.com', '1234567890', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
