-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 04:46 PM
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
  `resifname` varchar(50) NOT NULL,
  `resimname` varchar(50) NOT NULL,
  `resilname` varchar(50) NOT NULL,
  `findings` text NOT NULL,
  `purpose` text NOT NULL,
  `dateRecorded` date NOT NULL,
  `recorderid` int(11) NOT NULL,
  `recordedBy` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblclearance`
--

INSERT INTO `tblclearance` (`id`, `clearanceNo`, `resifname`, `resimname`, `resilname`, `findings`, `purpose`, `dateRecorded`, `recorderid`, `recordedBy`, `status`) VALUES
(100005, 23432, 'FDSFDSF', '', '', 'ADASD', 'asdas', '0000-00-00', 0, '', ''),
(100007, 100006, 'asd', '', '', 'asd', 'asdasd', '2022-11-24', 25, '', 'New'),
(100013, 100012, 'sdf', '', '', 'sdfs', 'dsfds', '2022-11-24', 25, '', 'New'),
(100015, 100013, 'asd', '', '', 'asdasd', 'Purpose 2', '2022-11-24', 25, '', 'New'),
(100016, 100015, 'Juan', 'Luna', 'Cruz', 'None', 'Purpose 2', '2022-11-24', 25, '', 'New');

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
(66, 'Administrator', '2022-11-11 01:38:16', 'Added Clearance with clearance number of 1'),
(67, 'Administrator', '2022-11-14 16:28:19', 'Added Clearance with clearance number of 1'),
(68, 'Administrator', '2022-11-14 16:28:28', 'Added Clearance with clearance number of 43434'),
(69, 'Administrator', '2022-11-14 16:31:06', 'Added Permit with business name of asdasd'),
(70, 'Administrator', '2022-11-14 16:36:58', 'Update Clearance with clearance number of 11'),
(71, 'Administrator', '2022-11-14 16:39:00', 'Update Clearance with clearance number of 11'),
(72, 'Administrator', '2022-11-14 16:43:50', 'Update Clearance with clearance number of 11'),
(73, 'Administrator', '2022-11-14 16:45:26', 'Update Clearance with clearance number of 1121221'),
(74, 'Administrator', '2022-11-14 17:16:04', 'Added Official named asddddasd'),
(75, 'Administrator', '2022-11-14 17:46:45', 'Added Official named asdsad'),
(76, 'Administrator', '2022-11-17 21:27:56', 'Added Permit with business name of rerer'),
(77, 'Administrator', '2022-11-17 21:29:45', 'Added Permit with business name of terter'),
(78, 'Administrator', '2022-11-17 21:32:47', 'Added Permit with business name of asdasd'),
(79, 'Administrator', '2022-11-17 21:35:05', 'Added Permit with business name of asdsa'),
(80, 'Administrator', '2022-11-17 21:35:46', 'Added Permit with business name of asdasd'),
(81, 'Administrator', '2022-11-17 21:39:25', 'Added Permit with business name of sdfsd'),
(82, 'Secretary', '2022-11-17 22:08:57', 'Added Permit with business name of Vulcanizing Shop'),
(83, 'Secretary', '2022-11-17 22:09:40', 'Added Permit with business name of Vulcanizing Shop'),
(84, 'Secretary', '2022-11-17 22:10:24', 'Added Permit with business name of Vulcanizing Shop'),
(85, 'Secretary', '2022-11-17 22:17:06', 'Added Permit with business name of Vulcanizing Shop'),
(86, 'Secretary', '2022-11-17 23:13:11', 'Added Permit with business name of Pharmacy'),
(87, 'Secretary', '2022-11-17 23:15:20', 'Added Permit with business name of Pharmacy'),
(88, 'Mayor Secretary', '2022-11-18 00:19:01', 'Approve Permit with business name of '),
(89, 'Mayor Secretary', '2022-11-18 00:19:52', 'Disapprove Permit with business name of '),
(90, 'Mayor Secretary', '2022-11-18 00:19:59', 'Approve Permit with business name of '),
(91, 'Secretary', '2022-11-18 00:24:25', 'Added Permit with business name of Vulcanizing Shop'),
(92, 'Secretary', '2022-11-18 01:00:33', 'Added Permit with business name of Pharmacy'),
(93, 'Mayor Secretary', '2022-11-18 01:01:46', 'Approve Permit with business name of '),
(94, 'Mayor Secretary', '2022-11-18 01:01:51', 'Disapprove Permit with business name of '),
(95, 'Secretary', '2022-11-18 02:28:25', 'Added Permit with business name of Vulcanizing Shop'),
(96, 'Secretary', '2022-11-21 14:14:50', 'Added Permit with business name of Pharmacy'),
(97, 'Mayor Secretary', '2022-11-21 14:15:50', 'Approve Permit with business name of '),
(98, 'Mayor Secretary', '2022-11-21 14:15:58', 'Disapprove Permit with business name of '),
(99, 'Administrator', '2022-11-24 05:43:09', 'Added Official named asdasd, asdasd asdsad'),
(100, 'Administrator', '2022-11-24 05:45:37', 'Added Official named asdasd, asdasd asdsad'),
(101, 'Administrator', '2022-11-24 05:45:53', 'Added Official named asdasd, asdasd sadsa'),
(102, 'Administrator', '2022-11-24 05:46:26', 'Added Official named asdsad, asdasd asdasd'),
(103, 'Administrator', '2022-11-24 09:04:46', 'Added Official named Jovic, Small Nikola'),
(104, 'Administrator', '2022-11-24 09:05:36', 'Added Official named Jovic, Small Nikola'),
(105, 'Administrator', '2022-11-24 09:47:01', 'Update Official named Jovic, Jovic Power'),
(106, 'Administrator', '2022-11-24 09:47:36', 'Update Official named Jovic, Jovic Power'),
(107, 'Administrator', '2022-11-24 09:48:12', 'Update Official named Jovic, Jovic Power'),
(108, 'Administrator', '2022-11-24 09:49:31', 'Update Official named Jovic, Jovic Power'),
(109, 'Administrator', '2022-11-24 09:50:16', 'Update Official named Jovic, Jovic Power'),
(110, 'Administrator', '2022-11-24 09:52:59', 'Added Official named Herro, Point Tyler'),
(111, 'Administrator', '2022-11-24 09:53:54', 'Update Official named Herro, Herro Point'),
(112, 'Administrator', '2022-11-24 09:54:28', 'Update Official named Jovic, Jovic Power'),
(113, 'Administrator', '2022-11-24 09:54:35', 'Update Official named Herro, Herro Point'),
(114, 'Secretary', '2022-11-24 10:15:47', 'Added Clearance with clearance number of 23323'),
(115, 'Secretary', '2022-11-24 10:16:59', 'Added Clearance with clearance number of 23323'),
(116, 'Secretary', '2022-11-24 10:24:00', 'Added Clearance with clearance number of 100001'),
(117, 'Secretary', '2022-11-24 10:24:13', 'Added Clearance with clearance number of 100003'),
(118, 'Secretary', '2022-11-24 10:29:25', 'Added Clearance with clearance number of 32323'),
(119, 'Secretary', '2022-11-24 10:31:02', 'Added Clearance with clearance number of 100006'),
(120, 'Secretary', '2022-11-24 10:31:19', 'Added Clearance with clearance number of 100007'),
(121, 'Secretary', '2022-11-24 10:32:48', 'Added Clearance with clearance number of 100007'),
(122, 'Secretary', '2022-11-24 10:32:55', 'Added Clearance with clearance number of 100008'),
(123, 'Secretary', '2022-11-24 10:53:27', 'Added Clearance with clearance number of 100008'),
(124, 'Secretary', '2022-11-24 10:53:30', 'Added Clearance with clearance number of 100010'),
(125, 'Secretary', '2022-11-24 10:53:34', 'Added Clearance with clearance number of 100011'),
(126, 'Secretary', '2022-11-24 10:53:37', 'Added Clearance with clearance number of 100012'),
(127, 'Secretary', '2022-11-24 11:15:42', 'Added Clearance with clearance number of 100013'),
(128, 'Secretary', '2022-11-24 11:18:48', 'Added Clearance with clearance number of 100013'),
(129, 'Secretary', '2022-11-24 11:19:22', 'Update Clearance with clearance number of 100013'),
(130, 'Secretary', '2022-11-24 11:31:41', 'Added Clearance with clearance number of 100015'),
(131, 'Secretary', '2022-11-24 11:41:05', 'Update Clearance with clearance number of 100015'),
(132, 'Secretary', '2022-11-24 11:55:13', 'Added Permit with business name of Leon Sari Sari Store'),
(133, 'Administrator', '2022-11-24 12:50:12', 'Added Permit with business name of Juan Convenience Store'),
(134, 'Administrator', '2022-11-24 12:50:19', 'Update Permit with business name of Juan Convenience Storee'),
(135, 'Administrator', '2022-11-24 12:50:26', 'Update Permit with business name of Juan Convenience Store'),
(136, 'Secretary', '2022-11-24 12:55:49', 'Added Permit with business name of Sacate Fruit Store'),
(137, 'Secretary', '2022-11-24 13:04:31', 'Added Permit with business name of Juan Sari Sari Store'),
(138, 'Administrator', '2022-11-24 15:58:08', 'Added Clearance with clearance number of 100016');

-- --------------------------------------------------------

--
-- Table structure for table `tblofficial`
--

CREATE TABLE `tblofficial` (
  `id` int(11) NOT NULL,
  `sPosition` varchar(50) NOT NULL,
  `oimage` text NOT NULL,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `lname` text NOT NULL,
  `paddress` text NOT NULL,
  `cptfname` text NOT NULL,
  `cptmname` text NOT NULL,
  `cptlname` text NOT NULL,
  `pcontact` bigint(20) NOT NULL,
  `pemail` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblofficial`
--

INSERT INTO `tblofficial` (`id`, `sPosition`, `oimage`, `fname`, `mname`, `lname`, `paddress`, `cptfname`, `cptmname`, `cptlname`, `pcontact`, `pemail`, `username`, `password`) VALUES
(1, 'Administrator', '', 'Administrator', '', '', '', '', '', '', 0, '', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(22, 'Mayor Secretary', '', 'Mayor Secretary', '', '', '', '', '', '', 0, '', 'mayorsec1', '32250170a0dca92d53ec9624f336ca24'),
(23, 'Secretary', '', 'asdasd', 'asdasd', 'asdsad', 'asdasdasd', 'asdas', 'asdasd', 'asdasd', 342, '', 'asdasd', '32250170a0dca92d53ec9624f336ca24'),
(24, 'Secretary', '', 'Nikola', 'Small', 'Jovic', 'asdasdsad', 'Jimmy', 'Power', 'Butler', 956115455, 'nikolajovic@gmail.com', 'NJovic6654', '32250170a0dca92d53ec9624f336ca24'),
(25, 'Secretary', '', 'Tyler', 'Point', 'Herro', 'Addressss', 'Kyle', 'Point', 'Lowry', 956445458, 'kylelowry@gmail.com', 'THerro5545', '32250170a0dca92d53ec9624f336ca24');

-- --------------------------------------------------------

--
-- Table structure for table `tblpermit`
--

CREATE TABLE `tblpermit` (
  `id` int(11) NOT NULL,
  `resifname` varchar(50) NOT NULL,
  `resimname` varchar(50) NOT NULL,
  `resilname` varchar(50) NOT NULL,
  `businessName` text NOT NULL,
  `businessAddress` text NOT NULL,
  `typeOfBusiness` varchar(50) NOT NULL,
  `orNo` int(11) NOT NULL,
  `samount` int(11) NOT NULL,
  `dateRecorded` varchar(25) NOT NULL,
  `recorderid` int(11) NOT NULL,
  `recordedBy` varchar(50) NOT NULL,
  `qrlink` varchar(100) NOT NULL,
  `qrdir` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpermit`
--

INSERT INTO `tblpermit` (`id`, `resifname`, `resimname`, `resilname`, `businessName`, `businessAddress`, `typeOfBusiness`, `orNo`, `samount`, `dateRecorded`, `recorderid`, `recordedBy`, `qrlink`, `qrdir`, `status`) VALUES
(33, 'Juan', 'Gomez', 'Dela Cruz', 'Juan Sari Sari Store', 'Sta Rosa', 'Sari Sari Store', 252252, 200, '24th of November 2022', 25, 'Herro, Tyler Point', '192.168.1.12/trackingsystem/tracking/statustracking.php?qrcode=252252', 'image/4ff05e91817dbc815a4da1b3acf28a48.png', 'Pending');

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
(4, 1231, 'asdad', 'asd', 234, '2022-11-10', 17, '', 'sdfsdf'),
(5, 43434, 'sdfsf', 'df', 65656565, '2022-11-14', 15, '', 'sdfsd');

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
(4, 'secretary2', 'pass', 'secretary'),
(5, 'mayorsec', 'pass', 'mayorsecretary');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100018;

--
-- AUTO_INCREMENT for table `tblhousehold`
--
ALTER TABLE `tblhousehold`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbllogs`
--
ALTER TABLE `tbllogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `tblofficial`
--
ALTER TABLE `tblofficial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tblpermit`
--
ALTER TABLE `tblpermit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tblresidency`
--
ALTER TABLE `tblresidency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblresident`
--
ALTER TABLE `tblresident`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
