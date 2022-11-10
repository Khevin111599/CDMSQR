-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2022 at 06:48 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_barangay`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblactivity`
--

CREATE TABLE `tblactivity` (
  `id` int(11) NOT NULL,
  `dateofactivity` date NOT NULL,
  `activity` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblactivityphoto`
--

CREATE TABLE `tblactivityphoto` (
  `id` int(11) NOT NULL,
  `activityid` int(11) NOT NULL,
  `filename` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblblotter`
--

CREATE TABLE `tblblotter` (
  `id` int(11) NOT NULL,
  `yearRecorded` varchar(4) NOT NULL,
  `dateRecorded` date NOT NULL,
  `complainant` text NOT NULL,
  `cage` int(11) NOT NULL,
  `caddress` text NOT NULL,
  `ccontact` int(11) NOT NULL,
  `personToComplain` text NOT NULL,
  `page` int(11) NOT NULL,
  `paddress` text NOT NULL,
  `pcontact` int(11) NOT NULL,
  `complaint` text NOT NULL,
  `respondent` varchar(50) NOT NULL,
  `sStatus` varchar(50) NOT NULL,
  `locationOfIncidence` text NOT NULL,
  `recordedby` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblclearance`
--

CREATE TABLE `tblclearance` (
  `id` int(11) NOT NULL,
  `clearanceNo` int(11) NOT NULL,
  `residentname` varchar(50) NOT NULL,
  `findings` text NOT NULL,
  `purpose` text NOT NULL,
  `orNo` int(11) NOT NULL,
  `samount` int(11) NOT NULL,
  `dateRecorded` date NOT NULL,
  `recorderid` int(11) NOT NULL,
  `recordedBy` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblclearance`
--

INSERT INTO `tblclearance` (`id`, `clearanceNo`, `residentname`, `findings`, `purpose`, `orNo`, `samount`, `dateRecorded`, `recorderid`, `recordedBy`, `status`) VALUES
(1, 1212, '2', 'DFDS', '', 232, 2323, '2022-11-05', 0, 'admin', 'Approved'),
(2, 2, 'test test', 'None', 'None', 3545444, 200, '2022-11-09', 0, '', 'Approved'),
(3, 3, 'asdadasdasdas', 'asdas', 'asdas', 3434, 3434, '2022-11-09', 0, 'admin', 'Approved'),
(4, 2131, 'dasdasd', 'ada', 'asdas', 6765, 121, '2022-11-09', 0, 'admin', 'Approved'),
(5, 1123, 'dadada', 'asda', 'asdasdas', 43434, 2334, '2022-11-09', 17, 'secretary1', 'New'),
(6, 2322, 'Bruno Mars', 'sdfsd', 'sdfsdf', 454, 123, '2022-11-09', 17, 'Secretary One', 'New'),
(7, 312321, 'Justin Timberlake', 'None', 'None', 2323, 200, '2022-11-09', 18, 'Secretary Two', 'New'),
(8, 123, 'sdfs', 'adaf', 'adfs', 34234, 324, '2022-11-10', 19, 'Secretary Three', 'New'),
(9, 121, 'Name Name', 'Findings', 'Purpose', 2332, 200, '2022-11-11', 17, 'Secretary One', 'New'),
(10, 234, 'dfsdf', 'sdfsdf', 'sdfsd', 434, 234, '2022-11-11', 18, 'Secretary Two', 'New'),
(100000, 1, 'sad', 'asd', 'sd', 0, 232, '2022-11-11', 0, 'Administrator', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `tblhousehold`
--

CREATE TABLE `tblhousehold` (
  `id` int(11) NOT NULL,
  `householdno` int(11) NOT NULL,
  `zone` varchar(11) NOT NULL,
  `totalhouseholdmembers` int(2) NOT NULL,
  `headoffamily` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbllogs`
--

CREATE TABLE `tbllogs` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `logdate` datetime NOT NULL,
  `action` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllogs`
--

INSERT INTO `tbllogs` (`id`, `user`, `logdate`, `action`) VALUES
(3, 'Administrator', '2022-11-05 13:25:41', 'Added Resident named Fajard, Khevin Reyes'),
(4, 'Administrator', '2022-11-05 13:27:14', 'Added Clearance with clearance number of 1'),
(5, 'administrator', '2022-11-09 12:54:55', 'Added Official named asdsd'),
(6, 'Administrator', '2022-11-09 13:26:20', 'Added Official named test test test'),
(7, 'Administrator', '2022-11-09 13:27:48', 'Added Official named test test test'),
(8, 'Administrator', '2022-11-09 13:28:10', 'Added Official named test test test'),
(9, 'Administrator', '2022-11-09 13:35:43', 'Added Official named test test test'),
(10, 'Administrator', '2022-11-09 13:58:43', 'Added Clearance with clearance number of 1'),
(11, 'Administrator', '2022-11-09 13:59:07', 'Added Clearance with clearance number of 2'),
(12, 'Administrator', '2022-11-09 21:11:08', 'Update Clearance with clearance number of 2'),
(13, 'Administrator', '2022-11-09 21:11:15', 'Update Clearance with clearance number of 2'),
(14, 'Administrator', '2022-11-09 21:11:24', 'Update Clearance with clearance number of 2'),
(15, 'Administrator', '2022-11-09 21:34:47', 'Added Permit with business name of test'),
(16, 'Administrator', '2022-11-09 21:35:59', 'Added Permit with business name of asdasd'),
(17, 'Administrator', '2022-11-09 21:36:41', 'Update Permit with business name of testr'),
(18, 'Administrator', '2022-11-09 21:55:22', 'Update Permit with business name of testr'),
(19, 'Administrator', '2022-11-09 22:14:36', 'Update Official named Secretary One'),
(20, 'Administrator', '2022-11-09 22:14:59', 'Added Official named Secretary Two'),
(21, 'Administrator', '2022-11-09 22:16:15', 'Update Official named Administrator'),
(22, 'Administrator', '2022-11-09 22:45:26', 'Added Clearance with clearance number of 3'),
(23, 'Administrator', '2022-11-09 22:50:46', 'Added Clearance with clearance number of 2131'),
(24, 'Secretary', '2022-11-09 22:51:39', 'Added Clearance with clearance number of 1123'),
(25, 'Secretary', '2022-11-09 23:13:44', 'Added Clearance with clearance number of 232'),
(26, 'Secretary', '2022-11-09 23:21:52', 'Update Clearance with clearance number of 2322'),
(27, 'Secretary', '2022-11-09 23:23:52', 'Update Clearance with clearance number of 2322'),
(28, 'Secretary', '2022-11-09 23:24:12', 'Update Clearance with clearance number of 2322'),
(29, 'Secretary', '2022-11-09 23:30:06', 'Added Permit with business name of asdasd'),
(30, 'Secretary', '2022-11-09 23:31:04', 'Added Permit with business name of asdas'),
(31, 'Secretary', '2022-11-09 23:31:22', 'Update Permit with business name of Ponzi'),
(32, 'Secretary', '2022-11-09 23:34:12', 'Added Permit with business name of Ponzi'),
(33, 'Secretary', '2022-11-09 23:38:05', 'Added Permit with business name of Vulcanizing Shop'),
(34, 'Secretary', '2022-11-09 23:40:49', 'Added Clearance with clearance number of 312321'),
(35, 'Secretary', '2022-11-09 23:41:10', 'Added Permit with business name of Entrepreneur'),
(36, 'Administrator', '2022-11-10 16:15:36', 'Added Official named Secretary Three'),
(37, 'Secretary', '2022-11-10 16:16:08', 'Added Clearance with clearance number of 123'),
(38, 'Administrator', '2022-11-10 20:25:26', 'Added Clearance with clearance number of 121'),
(39, 'Administrator', '2022-11-10 20:27:38', 'Update Clearance with clearance number of 1212'),
(40, 'Administrator', '2022-11-10 20:32:56', 'Update Clearance with clearance number of 1212'),
(41, 'Administrator', '2022-11-10 20:33:05', 'Update Clearance with clearance number of 1212'),
(42, 'Administrator', '2022-11-10 20:33:30', 'Update Clearance with clearance number of 1212'),
(43, 'Administrator', '2022-11-10 20:35:50', 'Added Clearance with clearance number of 12'),
(44, 'Administrator', '2022-11-10 20:35:57', 'Update Clearance with clearance number of 12222'),
(45, 'Administrator', '2022-11-10 20:44:51', 'Added Clearance with clearance number of 23'),
(46, 'Secretary', '2022-11-10 22:05:13', 'Added Clearance with clearance number of 1231'),
(47, 'Administrator', '2022-11-10 22:20:24', 'Update Official named Secretary One'),
(48, 'Administrator', '2022-11-10 22:22:29', 'Update Official named Secretary Two'),
(49, 'Administrator', '2022-11-10 22:22:36', 'Update Official named Secretary Three'),
(50, 'Administrator', '2022-11-10 23:23:06', 'Update Official named Secretary One'),
(51, 'Administrator', '2022-11-10 23:23:18', 'Update Official named Secretary Two'),
(52, 'Administrator', '2022-11-10 23:23:23', 'Update Official named Secretary Three'),
(53, 'Administrator', '2022-11-10 23:23:27', 'Update Official named Secretary Three'),
(54, 'Administrator', '2022-11-11 00:38:21', 'Added Permit with business name of asdasd'),
(55, 'Administrator', '2022-11-11 00:39:01', 'Added Permit with business name of asdad'),
(56, 'Administrator', '2022-11-11 00:46:19', 'Added Permit with business name of asdasd'),
(57, 'Administrator', '2022-11-11 00:51:13', 'Update Permit with business name of Entrepreneur'),
(58, 'Administrator', '2022-11-11 00:51:27', 'Added Permit with business name of asdasd'),
(59, 'Secretary', '2022-11-11 00:58:56', 'Added Clearance with clearance number of 121'),
(60, 'Secretary', '2022-11-11 01:08:11', 'Added Clearance with clearance number of 234'),
(61, 'Secretary', '2022-11-11 01:13:28', 'Added Permit with business name of Ponzi'),
(62, 'Secretary', '2022-11-11 01:16:40', 'Added Permit with business name of Ponzi'),
(63, 'Secretary', '2022-11-11 01:16:46', 'Update Permit with business name of Ponzi'),
(64, 'Secretary', '2022-11-11 01:17:17', 'Update Permit with business name of Ponzi'),
(65, 'Secretary', '2022-11-11 01:19:38', 'Added Permit with business name of Business Name'),
(66, 'Administrator', '2022-11-11 01:38:16', 'Added Clearance with clearance number of 1');

-- --------------------------------------------------------

--
-- Table structure for table `tblofficial`
--

CREATE TABLE `tblofficial` (
  `id` int(11) NOT NULL,
  `sPosition` varchar(50) NOT NULL,
  `oimage` text NOT NULL,
  `completeName` text NOT NULL,
  `pcontact` varchar(20) NOT NULL,
  `paddress` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `captain` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblofficial`
--

INSERT INTO `tblofficial` (`id`, `sPosition`, `oimage`, `completeName`, `pcontact`, `paddress`, `username`, `password`, `captain`) VALUES
(15, 'Administrator', '', 'Administrator', '', '', 'admin', 'admin', ''),
(17, 'Secretary', '', 'Secretary One', '1000000', 'Aguinaldo', 'secretary1', 'pass', 'Captain One'),
(18, 'Secretary', '', 'Secretary Two', '00000000', 'La Fuente', 'secretary2', 'pass', 'Captain Two'),
(19, 'Secretary', '', 'Secretary Three', '54654654', 'Berang', 'secretary3', 'pass', 'Captain Three');

-- --------------------------------------------------------

--
-- Table structure for table `tblpermit`
--

CREATE TABLE `tblpermit` (
  `id` int(11) NOT NULL,
  `residentname` varchar(50) NOT NULL,
  `businessName` text NOT NULL,
  `businessAddress` text NOT NULL,
  `typeOfBusiness` varchar(50) NOT NULL,
  `orNo` int(11) NOT NULL,
  `samount` int(11) NOT NULL,
  `dateRecorded` varchar(25) NOT NULL,
  `recorderid` int(11) NOT NULL,
  `recordedBy` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpermit`
--

INSERT INTO `tblpermit` (`id`, `residentname`, `businessName`, `businessAddress`, `typeOfBusiness`, `orNo`, `samount`, `dateRecorded`, `recorderid`, `recordedBy`, `status`) VALUES
(1, 'test test', 'testr', 'cabanatuan city', 'Sole Proprietorship', 34343, 222, '2022-11-09', 0, '', 'Approved'),
(7, 'Justin Timberlake', 'Entrepreneur', 'Cabanatuan CIty', 'Partnership', 5454, 200, '2022-11-09', 18, 'Secretary Two', 'New'),
(12, 'Ricky Montgomery', 'Ponzi', 'Gapan City', 'Sole Proprietorship', 66666, 200, '11th of November 2022', 17, 'Secretary One', 'New'),
(13, 'test test', 'Ponzi', 'Gapan City', 'Partnership', 3434, 200, '11th of November 2022', 17, 'Secretary One', 'New'),
(14, 'Name Name', 'Business Name', 'La Fuente', 'Partnership', 34343, 200, '11th of November 2022', 17, 'Secretary One', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `tblresidency`
--

CREATE TABLE `tblresidency` (
  `id` int(11) NOT NULL,
  `residencyNo` int(11) NOT NULL,
  `residentname` varchar(50) NOT NULL,
  `findings` text NOT NULL,
  `RorNo` int(11) NOT NULL,
  `dateRecorded` date NOT NULL,
  `recorderid` int(11) NOT NULL,
  `recordedBy` varchar(50) NOT NULL,
  `option` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblresidency`
--

INSERT INTO `tblresidency` (`id`, `residencyNo`, `residentname`, `findings`, `RorNo`, `dateRecorded`, `recorderid`, `recordedBy`, `option`) VALUES
(1, 1212, 'asdsad', 'DFDS', 232, '2022-11-10', 15, '', '2323'),
(2, 12222, 'zsdas', 'asd', 23, '2022-11-10', 15, '', 'asdsadsa'),
(3, 23, 'dsfdsfs', 'sdfdsf', 324, '2022-11-10', 15, '', '223'),
(4, 1231, 'asdad', 'asd', 234, '2022-11-10', 17, '', 'sdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `tblresident`
--

CREATE TABLE `tblresident` (
  `id` int(11) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `bdate` varchar(20) NOT NULL,
  `bplace` text NOT NULL,
  `age` int(11) NOT NULL,
  `barangay` varchar(120) NOT NULL,
  `zone` varchar(5) NOT NULL,
  `totalhousehold` int(5) NOT NULL,
  `civilstatus` varchar(20) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `householdnum` int(11) NOT NULL,
  `lengthofstay` int(11) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblresident`
--

INSERT INTO `tblresident` (`id`, `lname`, `fname`, `mname`, `bdate`, `bplace`, `age`, `barangay`, `zone`, `totalhousehold`, `civilstatus`, `occupation`, `householdnum`, `lengthofstay`, `nationality`, `gender`, `image`) VALUES
(2, 'Fajard', 'Khevin', 'Reyes', '1999-11-15', 'Tabuating', 22, 'Santa Teresita', '1', 2, 'Single', 'N/A', 1, 100, 'Filipino', 'Male', '1667625941999_cece.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin', 'admin', 'administrator'),
(3, 'secretary1', 'pass', 'secretary'),
(4, 'secretary2', 'pass', 'secretary');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblactivity`
--
ALTER TABLE `tblactivity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblactivityphoto`
--
ALTER TABLE `tblactivityphoto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblblotter`
--
ALTER TABLE `tblblotter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblclearance`
--
ALTER TABLE `tblclearance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblhousehold`
--
ALTER TABLE `tblhousehold`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbllogs`
--
ALTER TABLE `tbllogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblofficial`
--
ALTER TABLE `tblofficial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpermit`
--
ALTER TABLE `tblpermit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblresidency`
--
ALTER TABLE `tblresidency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblresident`
--
ALTER TABLE `tblresident`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblactivity`
--
ALTER TABLE `tblactivity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblactivityphoto`
--
ALTER TABLE `tblactivityphoto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblblotter`
--
ALTER TABLE `tblblotter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblclearance`
--
ALTER TABLE `tblclearance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100001;

--
-- AUTO_INCREMENT for table `tblhousehold`
--
ALTER TABLE `tblhousehold`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbllogs`
--
ALTER TABLE `tbllogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `tblofficial`
--
ALTER TABLE `tblofficial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tblpermit`
--
ALTER TABLE `tblpermit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tblresidency`
--
ALTER TABLE `tblresidency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblresident`
--
ALTER TABLE `tblresident`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
