-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2023 at 04:01 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `t3`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courier`
--

CREATE TABLE `tbl_courier` (
  `cid` int(10) NOT NULL,
  `cons_no` varchar(20) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `s_mail` varchar(100) NOT NULL,
  `s_phone` varchar(20) NOT NULL,
  `s_add` varchar(200) NOT NULL,
  `r_name` varchar(100) NOT NULL,
  `r_mail` varchar(100) NOT NULL,
  `r_phone` varchar(20) NOT NULL,
  `r_add` varchar(200) NOT NULL,
  `type` varchar(40) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `invoice_no` varchar(20) NOT NULL,
  `qty` int(10) NOT NULL,
  `freight` varchar(30) NOT NULL,
  `mode` varchar(20) NOT NULL,
  `pmode` varchar(30) NOT NULL,
  `pick_date` varchar(100) NOT NULL,
  `dept_date` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `origin` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lon` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_courier`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_courier_officers`
--

CREATE TABLE `tbl_courier_officers` (
  `cid` int(10) NOT NULL,
  `officer_name` varchar(40) NOT NULL,
  `off_pwd` varchar(255) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ph_no` varchar(12) NOT NULL,
  `office` varchar(100) NOT NULL,
  `reg_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_courier_officers`
--

INSERT INTO `tbl_courier_officers` (`cid`, `officer_name`, `off_pwd`, `address`, `email`, `ph_no`, `office`, `reg_date`) VALUES
(1, 'admin', '$2y$10$fKKJPw3myAqAWZgXxeDrV.vJCbmh20J7wEedMId4Sbu2CmNby0o1C', 'DHL EXPRESS LOGISTICS', 'support@dhlexpresslogistics.online', '000000000000', 'DHL EXPRESS LOGISTICS', '2011-01-30 09:25:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courier_track`
--

CREATE TABLE `tbl_courier_track` (
  `id` int(10) NOT NULL,
  `cid` int(10) NOT NULL,
  `cons_no` varchar(20) NOT NULL,
  `update_date` varchar(50) NOT NULL,
  `current_city` varchar(100) NOT NULL,
  `new_status` varchar(300) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `current_location` varchar(300) NOT NULL,
  `bk_time` varchar(50) NOT NULL,
  `r_name` varchar(255) NOT NULL,
  `r_phone` varchar(255) NOT NULL,
  `r_mail` varchar(255) NOT NULL,
  `r_add` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_courier_track`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_offices`
--

CREATE TABLE `tbl_offices` (
  `id` int(10) NOT NULL,
  `off_name` varchar(100) NOT NULL,
  `address` varchar(230) NOT NULL,
  `city` varchar(100) NOT NULL,
  `ph_no` varchar(20) NOT NULL,
  `office_time` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_courier`
--
ALTER TABLE `tbl_courier`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_courier_officers`
--
ALTER TABLE `tbl_courier_officers`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_courier_track`
--
ALTER TABLE `tbl_courier_track`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_offices`
--
ALTER TABLE `tbl_offices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_courier`
--
ALTER TABLE `tbl_courier`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT for table `tbl_courier_officers`
--
ALTER TABLE `tbl_courier_officers`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_courier_track`
--
ALTER TABLE `tbl_courier_track`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT for table `tbl_offices`
--
ALTER TABLE `tbl_offices`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
