-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 03:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `suan`
--

CREATE TABLE `suan` (
  `suan_id` int(10) NOT NULL,
  `suan_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `suan_size` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `suan_latitude` int(50) NOT NULL,
  `suan_longitude` int(50) NOT NULL,
  `suan_address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `suan`
--

INSERT INTO `suan` (`suan_id`, `suan_name`, `suan_size`, `suan_latitude`, `suan_longitude`, `suan_address`, `user_id`) VALUES
(1, 'aof', '18 ไร่', 123, 321, '60 หมู่3 ชร', '14'),
(6, 'ฟหก', '56', 486, 78, 'ฏฤโฤ', '14'),
(7, 'สวนดอย', '152', 423435, 456456222, 'ๆไพดำพดหำดหำด', '14'),
(8, 'asdasd', '123', 45361231, 123123, '13453', '15');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `user` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `user_fname` varchar(50) NOT NULL,
  `user_lname` varchar(50) NOT NULL,
  `user_address` varchar(50) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user`, `password`, `user_fname`, `user_lname`, `user_address`, `user_phone`, `user_pic`) VALUES
(14, 'asd', '123', 'นันทกร', 'ตุ้ยคง', 'ฟหก', '0931492882', '3.jpg'),
(15, 'abc', '123456789', 'หทัยกาญจน์', 'รอดทุกข์', 'แพร่', '123456', '1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `suan`
--
ALTER TABLE `suan`
  ADD PRIMARY KEY (`suan_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `suan`
--
ALTER TABLE `suan`
  MODIFY `suan_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
