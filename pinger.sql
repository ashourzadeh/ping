-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2024 at 10:24 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pinger`
--

-- --------------------------------------------------------

--
-- Table structure for table `antens`
--

CREATE TABLE `antens` (
  `id0` bigint(99) NOT NULL,
  `name0` varchar(255) NOT NULL,
  `ip0` varchar(255) NOT NULL,
  `tarikhqat0` varchar(255) NOT NULL,
  `tarikhvasl0` varchar(255) NOT NULL,
  `qati0` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `antens`
--

INSERT INTO `antens` (`id0`, `name0`, `ip0`, `tarikhqat0`, `tarikhvasl0`, `qati0`) VALUES
(14, 'Anten-01', '192.168.93.10', '', '', 0),
(15, 'Anten-02', '192.168.92.10', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cams`
--

CREATE TABLE `cams` (
  `id0` bigint(99) NOT NULL,
  `name0` varchar(255) NOT NULL,
  `ip0` varchar(255) NOT NULL,
  `tarikhqat0` varchar(255) NOT NULL,
  `tarikhvasl0` varchar(255) NOT NULL,
  `qati0` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cams`
--

INSERT INTO `cams` (`id0`, `name0`, `ip0`, `tarikhqat0`, `tarikhvasl0`, `qati0`) VALUES
(5, 'Cam-01', '192.168.47.135', '', '', 0),
(6, 'Cam-02', '192.168.47.136', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dvrs`
--

CREATE TABLE `dvrs` (
  `id0` bigint(99) NOT NULL,
  `name0` varchar(255) NOT NULL,
  `ip0` varchar(255) NOT NULL,
  `tarikhqat0` varchar(255) NOT NULL,
  `tarikhvasl0` varchar(255) NOT NULL,
  `dateofqati0` varchar(255) NOT NULL,
  `timeofqati0` varchar(255) NOT NULL,
  `qati0` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dvrs`
--

INSERT INTO `dvrs` (`id0`, `name0`, `ip0`, `tarikhqat0`, `tarikhvasl0`, `dateofqati0`, `timeofqati0`, `qati0`) VALUES
(1, 'Modem Fl-01', '192.168.1.10', '۱۴۰۳ / ۳ / ۲۳ - 11:52:00', '', '2024-06-12', '12:52:00', 1),
(2, 'Modem Fl-02', '192.168.2.10', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reporttbl`
--

CREATE TABLE `reporttbl` (
  `id0` bigint(99) NOT NULL,
  `name0` varchar(255) NOT NULL,
  `ip0` varchar(255) NOT NULL,
  `tarikhqat0` varchar(255) NOT NULL,
  `tarikhvasl0` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antens`
--
ALTER TABLE `antens`
  ADD PRIMARY KEY (`id0`),
  ADD UNIQUE KEY `ip0` (`ip0`);

--
-- Indexes for table `cams`
--
ALTER TABLE `cams`
  ADD PRIMARY KEY (`id0`),
  ADD UNIQUE KEY `ip0` (`ip0`);

--
-- Indexes for table `dvrs`
--
ALTER TABLE `dvrs`
  ADD PRIMARY KEY (`id0`),
  ADD UNIQUE KEY `ip0` (`ip0`);

--
-- Indexes for table `reporttbl`
--
ALTER TABLE `reporttbl`
  ADD PRIMARY KEY (`id0`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antens`
--
ALTER TABLE `antens`
  MODIFY `id0` bigint(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cams`
--
ALTER TABLE `cams`
  MODIFY `id0` bigint(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dvrs`
--
ALTER TABLE `dvrs`
  MODIFY `id0` bigint(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reporttbl`
--
ALTER TABLE `reporttbl`
  MODIFY `id0` bigint(99) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
