-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2015 at 08:38 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ql_bansua`
--

-- --------------------------------------------------------

--
-- Table structure for table `ct_hoadon`
--

CREATE TABLE IF NOT EXISTS `ct_hoadon` (
  `So_hoa_don` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Ma_sua` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `So_luong` int(11) NOT NULL,
  `Don_gia` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hang_sua`
--

CREATE TABLE IF NOT EXISTS `hang_sua` (
  `Ma_hang_sua` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Ten_hang_sua` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Dia_chi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Dien_thoai` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE IF NOT EXISTS `hoa_don` (
  `So_hoa_don` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Ngay_HD` date NOT NULL,
  `Ma_khach_hang` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Tri_gia` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE IF NOT EXISTS `khach_hang` (
  `Ma_khach_hang` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Ten_khach_hang` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Phai` tinyint(1) DEFAULT NULL,
  `Dia_chi` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Dien_thoai` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`Ma_khach_hang`, `Ten_khach_hang`, `Phai`, `Dia_chi`, `Dien_thoai`, `Email`) VALUES
('kh009', 'Phan Anh', 0, '159 Pasteur Q.1 Tp.HCM', '8321456', 'phan_anh@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `loai_sua`
--

CREATE TABLE IF NOT EXISTS `loai_sua` (
  `Ma_loai_sua` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Ten_loai` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sua`
--

CREATE TABLE IF NOT EXISTS `sua` (
  `Ma_sua` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `Ten_sua` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Ma_hang_sua` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Ma_loai_sua` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Trong_luong` int(11) NOT NULL,
  `Don_gia` int(11) NOT NULL,
  `TP_Dinh_Duong` text COLLATE utf8_unicode_ci,
  `Loi_ich` text COLLATE utf8_unicode_ci,
  `Hinh` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ct_hoadon`
--
ALTER TABLE `ct_hoadon`
  ADD PRIMARY KEY (`So_hoa_don`);

--
-- Indexes for table `hang_sua`
--
ALTER TABLE `hang_sua`
  ADD PRIMARY KEY (`Ma_hang_sua`);

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`So_hoa_don`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`Ma_khach_hang`);

--
-- Indexes for table `loai_sua`
--
ALTER TABLE `loai_sua`
  ADD PRIMARY KEY (`Ma_loai_sua`);

--
-- Indexes for table `sua`
--
ALTER TABLE `sua`
  ADD PRIMARY KEY (`Ma_sua`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
