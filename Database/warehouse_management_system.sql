-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 11:00 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warehouse_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_audit_trail`
--

CREATE TABLE `tbl_audit_trail` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `timein` varchar(255) NOT NULL,
  `timeout` varchar(255) DEFAULT NULL,
  `activity` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_audit_trail`
--

INSERT INTO `tbl_audit_trail` (`id`, `username`, `firstname`, `lastname`, `middlename`, `timein`, `timeout`, `activity`, `date`) VALUES
(1, 'admin', 'Ordep', 'Badeo', 'Labrador', '12:46 am', '12:47 am', 'Logged In', 'May 7, 2021'),
(2, 'admin', 'Ordep', 'Badeo', 'Labrador', '12:47 am', '12:54 am', 'Logged In', 'May 7, 2021'),
(3, 'admin', 'Ordep', 'Badeo', 'Labrador', '12:54 am', '12:54 am', 'Logged In', 'May 7, 2021'),
(4, 'admin', 'Ordep', 'Badeo', 'Labrador', '10:57 am', '12:22 pm', 'Logged In', 'May 9, 2021'),
(5, 'admin', 'Ordep', 'Badeo', 'Labrador', '12:19 pm', '12:22 pm', 'Uploaded image in gallery', 'May 9, 2021'),
(6, 'admin', 'Ordep', 'Badeo', 'Labrador', '12:20 pm', '12:22 pm', 'Uploaded image in gallery', 'May 9, 2021'),
(7, 'admin', 'Ordep', 'Badeo', 'Labrador', '12:23 pm', '02:35 pm', 'Logged In', 'May 9, 2021'),
(8, 'admin', 'Ordep', 'Badeo', 'Labrador', '12:38 pm', '02:35 pm', 'Registered user to the system', 'May 9, 2021'),
(9, 'admin', 'Ordep', 'Badeo', 'Labrador', '12:49 pm', '02:35 pm', 'Search Product to the inventory', 'May 9, 2021'),
(10, 'admin', 'Ordep', 'Badeo', 'Labrador', '02:36 pm', '02:50 pm', 'Logged In', 'May 9, 2021'),
(11, 'admin', 'Ordep', 'Badeo', 'Labrador', '02:50 pm', '02:50 pm', 'Logged In', 'May 9, 2021'),
(12, 'admin', 'Ordep', 'Badeo', 'Labrador', '02:50 pm', '02:59 pm', 'Logged In', 'May 9, 2021'),
(13, 'admin', 'Ordep', 'Badeo', 'Labrador', '02:56 pm', '02:59 pm', 'Logged In', 'May 9, 2021'),
(14, 'admin', 'Ordep', 'Badeo', 'Labrador', '03:00 pm', '11:00 pm', 'Logged In', 'May 9, 2021'),
(15, 'admin', 'Ordep', 'Badeo', 'Labrador', '08:33 pm', '11:00 pm', 'Logged In', 'May 9, 2021'),
(16, 'admin', 'Ordep', 'Badeo', 'Labrador', '10:40 pm', '11:00 pm', 'Search Product to the inventory', 'May 9, 2021'),
(17, 'admin', 'Ordep', 'Badeo', 'Labrador', '10:56 pm', '11:00 pm', 'Search Product to the inventory', 'May 9, 2021'),
(18, 'admin', 'Ordep', 'Badeo', 'Labrador', '10:56 pm', '11:00 pm', 'Search Product to the inventory', 'May 9, 2021'),
(19, 'admin', 'Ordep', 'Badeo', 'Labrador', '10:56 pm', '11:00 pm', 'Search Product to the inventory', 'May 9, 2021'),
(20, 'admin', 'Ordep', 'Badeo', 'Labrador', '11:00 pm', '11:00 pm', 'Searched user or product', 'May 9, 2021'),
(21, 'admin', 'Ordep', 'Badeo', 'Labrador', '09:56 pm', '11:26 pm', 'Logged In', 'May 11, 2021'),
(22, 'admin', 'Ordep', 'Badeo', 'Labrador', '10:03 pm', '11:26 pm', 'Registered Product', 'May 11, 2021'),
(23, 'admin', 'Ordep', 'Badeo', 'Labrador', '10:18 pm', '11:26 pm', 'Searched user or product', 'May 11, 2021'),
(24, 'admin', 'Ordep', 'Badeo', 'Labrador', '10:32 pm', '11:26 pm', 'Search Product to the inventory', 'May 11, 2021'),
(25, 'admin', 'Ordep', 'Badeo', 'Labrador', '10:33 pm', '11:26 pm', 'Search Product to the inventory', 'May 11, 2021'),
(26, 'admin', 'Ordep', 'Badeo', 'Labrador', '10:33 pm', '11:26 pm', 'Input New Incoming Product', 'May 11, 2021'),
(27, 'admin', 'Ordep', 'Badeo', 'Labrador', '10:39 pm', '11:26 pm', 'Input New Incoming Product', 'May 11, 2021'),
(28, 'admin', 'Ordep', 'Badeo', 'Labrador', '10:39 pm', '11:26 pm', 'Input New Incoming Product', 'May 11, 2021'),
(29, 'admin', 'Ordep', 'Badeo', 'Labrador', '10:57 pm', '11:26 pm', 'Searched in Sales and Purchase', 'May 11, 2021'),
(30, 'admin', 'Ordep', 'Badeo', 'Labrador', '11:00 pm', '11:26 pm', 'Searched in Sales and Purchase', 'May 11, 2021'),
(31, 'admin', 'Ordep', 'Badeo', 'Labrador', '11:00 pm', '11:26 pm', 'Searched in Sales and Purchase', 'May 11, 2021'),
(32, 'admin', 'Ordep', 'Badeo', 'Labrador', '11:00 pm', '11:26 pm', 'Searched in Sales and Purchase', 'May 11, 2021'),
(33, 'admin', 'Ordep', 'Badeo', 'Labrador', '11:02 pm', '11:26 pm', 'Searched in Sales and Purchase', 'May 11, 2021'),
(34, 'admin', 'Ordep', 'Badeo', 'Labrador', '11:02 pm', '11:26 pm', 'Searched in Sales and Purchase', 'May 11, 2021'),
(35, 'admin', 'Ordep', 'Badeo', 'Labrador', '11:03 pm', '11:26 pm', 'Searched user or product', 'May 11, 2021'),
(36, 'admin', 'Ordep', 'Badeo', 'Labrador', '10:14 pm', '11:26 pm', 'Logged In', 'May 11, 2021'),
(37, 'admin', 'Ordep', 'Badeo', 'Labrador', '10:14 pm', '11:26 pm', 'Searched in Sales and Purchase', 'May 11, 2021'),
(38, 'admin', 'Ordep', 'Badeo', 'Labrador', '10:14 pm', '11:26 pm', 'Searched in Sales and Purchase', 'May 11, 2021'),
(39, 'admin', 'Ordep', 'Badeo', 'Labrador', '10:14 pm', '11:26 pm', 'Search Product to the inventory', 'May 11, 2021'),
(40, 'admin', 'Ordep', 'Badeo', 'Labrador', '10:14 pm', '11:26 pm', 'Search Product to the inventory', 'May 11, 2021'),
(41, 'admin', 'Ordep', 'Badeo', 'Labrador', '10:14 pm', '11:26 pm', 'Searched user or product', 'May 11, 2021'),
(42, 'admin', 'Ordep', 'Badeo', 'Labrador', '10:22 pm', '11:26 pm', 'Searched user or product', 'May 11, 2021'),
(43, 'admin', 'Ordep', 'Badeo', 'Labrador', '11:26 pm', '11:41 pm', 'Logged In', 'May 11, 2021'),
(44, 'admin', 'Ordep', 'Badeo', 'Labrador', '11:41 pm', '08:09 pm', 'Logged In', 'May 12, 2021'),
(45, 'admin', 'Ordep', 'Badeo', 'Labrador', '11:45 pm', '08:09 pm', 'Searched user or product', 'May 12, 2021'),
(46, 'admin', 'Ordep', 'Badeo', 'Labrador', '11:45 pm', '08:09 pm', 'Searched user or product', 'May 12, 2021'),
(47, 'admin', 'Ordep', 'Badeo', 'Labrador', '12:00 am', '08:09 pm', 'Input New Outgoing Product', 'May 12, 2021'),
(48, 'admin', 'Ordep', 'Badeo', 'Labrador', '12:06 am', '08:09 pm', 'Input New Outgoing Product', 'May 12, 2021'),
(49, 'admin', 'Ordep', 'Badeo', 'Labrador', '12:07 am', '08:09 pm', 'Input New Outgoing Product', 'May 12, 2021'),
(50, 'admin', 'Ordep', 'Badeo', 'Labrador', '09:31 am', '08:09 pm', 'Logged In', 'May 12, 2021'),
(51, 'admin', 'Ordep', 'Badeo', 'Labrador', '09:32 am', '08:09 pm', 'Searched in Sales and Purchase', 'May 12, 2021'),
(52, 'admin', 'Ordep', 'Badeo', 'Labrador', '09:32 am', '08:09 pm', 'Searched in Sales and Purchase', 'May 12, 2021'),
(53, 'admin', 'Ordep', 'Badeo', 'Labrador', '07:29 pm', '08:09 pm', 'Logged In', 'May 12, 2021'),
(54, 'admin', 'Ordep', 'Badeo', 'Labrador', '08:10 pm', '08:11 pm', 'Logged In', 'May 12, 2021'),
(55, 'admin', 'Ordep', 'Badeo', 'Labrador', '08:12 pm', '09:52 pm', 'Logged In', 'May 12, 2021'),
(56, 'admin', 'Ordep', 'Badeo', 'Labrador', '08:15 pm', '09:52 pm', 'Registered user to the system', 'May 12, 2021'),
(57, 'admin', 'Ordep', 'Badeo', 'Labrador', '08:54 pm', '09:52 pm', 'Searched in daily attendance', 'May 12, 2021'),
(58, 'admin', 'Ordep', 'Badeo', 'Labrador', '08:54 pm', '09:52 pm', 'Searched in daily attendance', 'May 12, 2021'),
(59, 'admin', 'Ordep', 'Badeo', 'Labrador', '08:54 pm', '09:52 pm', 'Searched in daily attendance', 'May 12, 2021'),
(60, 'admin', 'Ordep', 'Badeo', 'Labrador', '08:56 pm', '09:52 pm', 'Searched in daily attendance', 'May 12, 2021'),
(61, 'admin', 'Ordep', 'Badeo', 'Labrador', '08:56 pm', '09:52 pm', 'Searched in daily attendance', 'May 12, 2021'),
(62, 'admin', 'Ordep', 'Badeo', 'Labrador', '08:56 pm', '09:52 pm', 'Searched in daily attendance', 'May 12, 2021'),
(63, 'admin', 'Ordep', 'Badeo', 'Labrador', '08:56 pm', '09:52 pm', 'Search Product to the inventory', 'May 12, 2021'),
(64, 'admin', 'Ordep', 'Badeo', 'Labrador', '08:56 pm', '09:52 pm', 'Search Product to the inventory', 'May 12, 2021'),
(65, 'admin', 'Ordep', 'Badeo', 'Labrador', '08:57 pm', '09:52 pm', 'Search Product to the inventory', 'May 12, 2021'),
(66, 'admin', 'Ordep', 'Badeo', 'Labrador', '08:57 pm', '09:52 pm', 'Search Product to the inventory', 'May 12, 2021'),
(67, 'admin', 'Ordep', 'Badeo', 'Labrador', '08:57 pm', '09:52 pm', 'Search Product to the inventory', 'May 12, 2021'),
(68, 'admin', 'Ordep', 'Badeo', 'Labrador', '08:57 pm', '09:52 pm', 'Searched user or product', 'May 12, 2021'),
(69, 'admin', 'Ordep', 'Badeo', 'Labrador', '08:57 pm', '09:52 pm', 'Searched user or product', 'May 12, 2021'),
(70, 'admin', 'Ordep', 'Badeo', 'Labrador', '08:57 pm', '09:52 pm', 'Searched user or product', 'May 12, 2021'),
(71, 'admin', 'Ordep', 'Badeo', 'Labrador', '08:57 pm', '09:52 pm', 'Searched user or product', 'May 12, 2021'),
(72, 'admin', 'Ordep', 'Badeo', 'Labrador', '08:58 pm', '09:52 pm', 'Searched in daily attendance', 'May 12, 2021'),
(73, 'admin', 'Ordep', 'Badeo', 'Labrador', '08:58 pm', '09:52 pm', 'Searched in daily attendance', 'May 12, 2021'),
(74, 'admin', 'Ordep', 'Badeo', 'Labrador', '08:58 pm', '09:52 pm', 'Searched in daily attendance', 'May 12, 2021'),
(75, 'admin', 'Ordep', 'Badeo', 'Labrador', '08:58 pm', '09:52 pm', 'Searched in daily attendance', 'May 12, 2021'),
(76, 'admin', 'Ordep', 'Badeo', 'Labrador', '08:59 pm', '09:52 pm', 'Searched in daily attendance', 'May 12, 2021'),
(77, 'admin', 'Ordep', 'Badeo', 'Labrador', '08:59 pm', '09:52 pm', 'Searched in daily attendance', 'May 12, 2021'),
(78, 'admin', 'Ordep', 'Badeo', 'Labrador', '08:59 pm', '09:52 pm', 'Searched in daily attendance', 'May 12, 2021'),
(79, 'admin', 'Ordep', 'Badeo', 'Labrador', '09:01 pm', '09:52 pm', 'Searched user or product', 'May 12, 2021'),
(80, 'admin', 'Ordep', 'Badeo', 'Labrador', '09:24 pm', '09:52 pm', 'Searched user or product', 'May 12, 2021'),
(81, 'admin', 'Ordep', 'Badeo', 'Labrador', '09:24 pm', '09:52 pm', 'Searched user or product', 'May 12, 2021'),
(82, 'admin', 'Ordep', 'Badeo', 'Labrador', '09:24 pm', '09:52 pm', 'Searched user or product', 'May 12, 2021'),
(83, 'admin', 'Ordep', 'Badeo', 'Labrador', '09:24 pm', '09:52 pm', 'Searched user or product', 'May 12, 2021'),
(84, 'admin', 'Ordep', 'Badeo', 'Labrador', '09:26 pm', '09:52 pm', 'Searched in daily attendance', 'May 12, 2021'),
(85, 'admin', 'Ordep', 'Badeo', 'Labrador', '09:26 pm', '09:52 pm', 'Searched in daily attendance', 'May 12, 2021'),
(86, 'admin', 'Ordep', 'Badeo', 'Labrador', '09:26 pm', '09:52 pm', 'Searched in daily attendance', 'May 12, 2021'),
(87, 'admin', 'Ordep', 'Badeo', 'Labrador', '09:26 pm', '09:52 pm', 'Searched in daily attendance', 'May 12, 2021'),
(88, 'admin', 'Ordep', 'Badeo', 'Labrador', '09:27 pm', '09:52 pm', 'Searched in daily attendance', 'May 12, 2021'),
(89, 'admin', 'Ordep', 'Badeo', 'Labrador', '09:27 pm', '09:52 pm', 'Searched in daily attendance', 'May 12, 2021'),
(90, 'admin', 'Ordep', 'Badeo', 'Labrador', '09:33 pm', '09:52 pm', 'Searched user or product', 'May 12, 2021'),
(91, 'admin', 'Ordep', 'Badeo', 'Labrador', '09:45 pm', '09:52 pm', 'Searched in audit trail', 'May 12, 2021'),
(92, 'admin', 'Ordep', 'Badeo', 'Labrador', '09:46 pm', '09:52 pm', 'Searched in audit trail', 'May 12, 2021'),
(93, 'admin', 'Ordep', 'Badeo', 'Labrador', '09:47 pm', '09:52 pm', 'Searched in audit trail', 'May 12, 2021'),
(94, 'admin', 'Ordep', 'Badeo', 'Labrador', '09:48 pm', '09:52 pm', 'Searched in audit trail', 'May 12, 2021'),
(95, 'admin', 'Ordep', 'Badeo', 'Labrador', '09:52 pm', NULL, 'Logged In', 'May 12, 2021'),
(96, 'admin', 'Ordep', 'Badeo', 'Labrador', '10:46 pm', NULL, 'Input New Incoming Product', 'May 12, 2021'),
(97, 'admin', 'Ordep', 'Badeo', 'Labrador', '10:47 pm', NULL, 'Input New Incoming Product', 'May 12, 2021'),
(98, 'admin', 'Ordep', 'Badeo', 'Labrador', '10:58 pm', NULL, 'Searched in sales report', 'May 12, 2021'),
(99, 'admin', 'Ordep', 'Badeo', 'Labrador', '10:58 pm', NULL, 'Searched in sales report', 'May 12, 2021'),
(100, 'admin', 'Ordep', 'Badeo', 'Labrador', '10:58 pm', NULL, 'Searched in sales report', 'May 12, 2021'),
(101, 'admin', 'Ordep', 'Badeo', 'Labrador', '10:59 pm', NULL, 'Searched in sales report', 'May 12, 2021'),
(102, 'admin', 'Ordep', 'Badeo', 'Labrador', '11:37 pm', NULL, 'Searched in sales report', 'May 12, 2021'),
(103, 'admin', 'Ordep', 'Badeo', 'Labrador', '10:31 pm', NULL, 'Logged In', 'May 14, 2021'),
(104, 'admin', 'Ordep', 'Badeo', 'Labrador', '10:34 pm', NULL, 'Searched in sales report', 'May 14, 2021'),
(105, 'admin', 'Ordep', 'Badeo', 'Labrador', '10:34 pm', NULL, 'Searched in sales report', 'May 14, 2021'),
(106, 'admin', 'Ordep', 'Badeo', 'Labrador', '10:34 pm', NULL, 'Searched in sales report', 'May 14, 2021'),
(107, 'admin', 'Ordep', 'Badeo', 'Labrador', '10:42 pm', NULL, 'Searched in sales report', 'May 14, 2021'),
(108, 'admin', 'Ordep', 'Badeo', 'Labrador', '10:44 pm', NULL, 'Searched in sales report', 'May 14, 2021'),
(109, 'admin', 'Ordep', 'Badeo', 'Labrador', '10:46 pm', NULL, 'Searched in sales report', 'May 14, 2021'),
(110, 'admin', 'Ordep', 'Badeo', 'Labrador', '10:47 pm', NULL, 'Searched in sales report', 'May 14, 2021'),
(111, 'admin', 'Ordep', 'Badeo', 'Labrador', '10:51 pm', NULL, 'Searched in sales report', 'May 14, 2021'),
(112, 'admin', 'Ordep', 'Badeo', 'Labrador', '10:52 pm', NULL, 'Searched in sales report', 'May 14, 2021'),
(113, 'admin', 'Ordep', 'Badeo', 'Labrador', '10:55 pm', NULL, 'Searched in Sales and Purchase', 'May 14, 2021'),
(114, 'admin', 'Ordep', 'Badeo', 'Labrador', '11:01 pm', NULL, 'Searched user or product', 'May 14, 2021'),
(115, 'admin', 'Ordep', 'Badeo', 'Labrador', '11:01 pm', NULL, 'Searched user or product', 'May 14, 2021'),
(116, 'admin', 'Ordep', 'Badeo', 'Labrador', '11:33 am', NULL, 'Logged In', 'May 15, 2021'),
(117, 'admin', 'Ordep', 'Badeo', 'Labrador', '01:01 pm', NULL, 'Input New Outgoing Product', 'May 15, 2021'),
(118, 'admin', 'Ordep', 'Badeo', 'Labrador', '01:04 pm', NULL, 'Input New Outgoing Product', 'May 15, 2021'),
(119, 'admin', 'Ordep', 'Badeo', 'Labrador', '01:28 pm', NULL, 'Logged In', 'May 16, 2021'),
(120, 'admin', 'Ordep', 'Badeo', 'Labrador', '02:47 pm', NULL, 'Update email address', 'May 16, 2021'),
(121, 'admin', 'Ordep', 'Badeo', 'Labrador', '02:47 pm', NULL, 'Update email address', 'May 16, 2021'),
(122, 'admin', 'Ordep', 'Badeo', 'Labrador', '02:49 pm', NULL, 'Update password', 'May 16, 2021'),
(123, 'admin', 'Ordep', 'Badeo', 'Labrador', '02:49 pm', NULL, 'Update password', 'May 16, 2021'),
(124, 'admin', 'Ordep', 'Badeo', 'Labrador', '04:42 pm', NULL, 'Update price', 'May 16, 2021'),
(125, 'admin', 'Ordep', 'Badeo', 'Labrador', '04:44 pm', NULL, 'Update price', 'May 16, 2021'),
(126, 'admin', 'Ordep', 'Badeo', 'Labrador', '04:45 pm', NULL, 'Update price', 'May 16, 2021'),
(127, 'admin', 'Ordep', 'Badeo', 'Labrador', '04:45 pm', NULL, 'Update price', 'May 16, 2021'),
(128, 'admin', 'Ordep', 'Badeo', 'Labrador', '04:46 pm', NULL, 'Update price', 'May 16, 2021');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_billing`
--

CREATE TABLE `tbl_billing` (
  `id` int(11) NOT NULL,
  `brandName` varchar(100) NOT NULL,
  `type` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `filename`) VALUES
(1, '07LeRLO9rbj6luakpZvMVvg-1.1602529741.fit_lpad.size_625x365.jpg'),
(2, 'blender.jpeg'),
(3, 'SKU_36950_grande.jpg'),
(4, 'stove.jpeg'),
(5, 'washing-machine.jpeg'),
(6, 'download.jpg'),
(7, 'cdfa61cff4685276dbad0c446208d426.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_incoming_product`
--

CREATE TABLE `tbl_incoming_product` (
  `id` int(11) NOT NULL,
  `brandName` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_incoming_product`
--

INSERT INTO `tbl_incoming_product` (`id`, `brandName`, `type`, `model`, `date`, `quantity`) VALUES
(1, 'Hanabisihi', 'Washing Machine', '', '2021-05-21', '5'),
(2, 'Samsung', 'Air Conditioner', '', '2021-05-22', '15'),
(3, 'Hanabisihi', 'Washing Machine', '', '2021-05-29', '10'),
(4, 'Panasonic', 'Washing Machine', 'NA-V10FX1LP1', '2021-05-27', '10'),
(5, 'Hanabisihi', 'Washing Machine', '', '2021-05-27', '20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_outgoing_product`
--

CREATE TABLE `tbl_outgoing_product` (
  `id` int(11) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `brandName` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `store` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_outgoing_product`
--

INSERT INTO `tbl_outgoing_product` (`id`, `product_id`, `brandName`, `type`, `model`, `date`, `quantity`, `store`) VALUES
(1, '20368975', 'Samsung', 'Refrigerator', 'VS2800G2D20K40484', '2021-05-26', '5', 'Quezon City'),
(3, '76510983', 'Samsung', 'Washing Machine', 'WR24M9960KV/TC', '2021-05-22', '5', 'Quezon City');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `productId` varchar(50) NOT NULL,
  `brandName` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `productId`, `brandName`, `type`, `model`, `color`, `quantity`, `price`) VALUES
(1, '20368975', 'Samsung', 'Refrigerator', 'VS2800G2D20K40484', 'Black', '8', '24,000.00'),
(2, '76510983', 'Samsung', 'Washing Machine', 'WR24M9960KV/TC', 'Black', '15', '15,000.00'),
(3, '08276194', 'Samsung', 'Refrigerator', 'RT51K6351BS/TC', 'Black', '10', '20,000.00'),
(4, '20368976', 'Hanabisihi', 'Washing Machine', 'VS2800G2D20K40485', 'White', '15', '25,000.00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_store`
--

CREATE TABLE `tbl_product_store` (
  `id` int(11) NOT NULL,
  `productId` varchar(50) NOT NULL,
  `brandName` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `store` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product_store`
--

INSERT INTO `tbl_product_store` (`id`, `productId`, `brandName`, `type`, `model`, `quantity`, `color`, `price`, `store`) VALUES
(1, '20368975', 'Samsung', 'Refrigerator', 'VS2800G2D20K40484', '8', 'black', '24,000.00', 'Quezon City');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sales_and_purchase`
--

CREATE TABLE `tbl_sales_and_purchase` (
  `id` int(11) NOT NULL,
  `typeOfTransaction` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `brandName` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sales_and_purchase`
--

INSERT INTO `tbl_sales_and_purchase` (`id`, `typeOfTransaction`, `date`, `brandName`, `type`, `quantity`, `price`) VALUES
(1, 'Purchase', '2021-05-21', 'Hanabishi', 'Washing Machine', '15', '24,000.00'),
(2, 'Sales', '2021-05-21', 'Hanabishi', 'Refrigerator', '15', '24,000.00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `middlename` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `birthdate` date NOT NULL,
  `contactnumber` varchar(250) NOT NULL,
  `email` varchar(255) NOT NULL,
  `loa` varchar(20) NOT NULL,
  `store` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `firstname`, `lastname`, `middlename`, `address`, `birthdate`, `contactnumber`, `email`, `loa`, `store`) VALUES
(1, 'admin', 'admin', 'Ordep', 'Badeo', 'Labrador', 'Antipolo City', '1996-03-05', '09565290841', 'jhaycee122098@gmail.com', 'Administrator', ''),
(2, 'JBevangelista', 'jV67#%', 'Jan Bernard', 'Evangelista', 'Espiritu', '28 Sta. Maria Compd. Santolan, Pasig City', '1997-01-07', '09276928641', 'jbevangelista07@gmail.com', 'Employee', ''),
(3, 'JepCureg', 'vJ64%)', 'Jordan Jeffrey', 'Cureg', 'You wanna know why', 'Antipolo City', '1997-01-04', '09565290842', 'jepcureg@gmail.com', 'Branch', 'Quezon City'),
(4, 'Employee123', 'DZ72*(', 'Jan Christan', 'Evangelista', 'Espiritu', '28 Sta. Maria Compd. Santolan, Pasig City', '1999-12-20', '09265944316', 'ordepbadeo143@gmail.com', 'Employee', ''),
(5, '16001669900', 'sW40!#', 'Dayle', 'Sacopanio', 'Reyes', 'Marikina City', '1995-07-08', '09265944317', 'daylesacopanio@gmail.com', 'Employee', ''),
(6, '16001669901', 'Nm21)$', 'Blaize', 'Faylon', 'Secret', 'Laguna', '1990-12-12', '09265944319', 'blaize.faylon50@gmail.com', 'Employee', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_daily_attendance`
--

CREATE TABLE `tb_daily_attendance` (
  `id` int(11) NOT NULL,
  `time` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `staff` varchar(255) NOT NULL,
  `typeOfTransaction` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_daily_attendance`
--

INSERT INTO `tb_daily_attendance` (`id`, `time`, `date`, `staff`, `typeOfTransaction`, `brand`, `type`, `quantity`) VALUES
(1, '8:35 PM', '5/12/2021', 'Employee123', 'Receive Product', 'Hanabisihi', 'Washing Machine', '15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_audit_trail`
--
ALTER TABLE `tbl_audit_trail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_billing`
--
ALTER TABLE `tbl_billing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_incoming_product`
--
ALTER TABLE `tbl_incoming_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_outgoing_product`
--
ALTER TABLE `tbl_outgoing_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product_store`
--
ALTER TABLE `tbl_product_store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sales_and_purchase`
--
ALTER TABLE `tbl_sales_and_purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_daily_attendance`
--
ALTER TABLE `tb_daily_attendance`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_audit_trail`
--
ALTER TABLE `tbl_audit_trail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `tbl_billing`
--
ALTER TABLE `tbl_billing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_incoming_product`
--
ALTER TABLE `tbl_incoming_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_outgoing_product`
--
ALTER TABLE `tbl_outgoing_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_product_store`
--
ALTER TABLE `tbl_product_store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_sales_and_purchase`
--
ALTER TABLE `tbl_sales_and_purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_daily_attendance`
--
ALTER TABLE `tb_daily_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
