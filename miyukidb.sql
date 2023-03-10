-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2023 at 02:07 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miyukidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_tb`
--

CREATE TABLE `cart_tb` (
  `c_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `p_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `history_tb`
--

CREATE TABLE `history_tb` (
  `h_id` int(11) NOT NULL,
  `h_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `h_detail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `h_price` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `h_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rand_tb`
--

CREATE TABLE `rand_tb` (
  `r_id` int(11) NOT NULL,
  `r_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r_detail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rand_tb`
--

INSERT INTO `rand_tb` (`r_id`, `r_key`, `r_name`, `r_detail`, `category`) VALUES
(1, 'a31a575b14e8464f8577de75f618bedb', 'Valorant Randoms', 'Aduy99:yudanur123\r\n', 'Valorant'),
(2, 'ef7c15bdaa0e4a21ad4cfd949cf61038', 'Valorant Randoms', 'Tigersword555:wt110099z\r\n', 'Valorant'),
(3, 'e6246ab1dbdf4325845c67e6e66321c7', 'Valorant Randoms', 'lelouchx10:101199811Htet\r\n', 'Valorant'),
(4, '1044c49c3caa442fbb169497d827247c\r\n', 'Valorant Randoms', 'callmehboba59:Callmebob59\r\n', 'Valorant'),
(5, '39dedaed464c4d42804b4bc52b38d573', 'Valorant Randoms', 'z3rooi:cingkele123\r\n', 'Valorant');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `pid` int(11) NOT NULL,
  `pname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdetail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pqty` int(11) DEFAULT NULL,
  `pkey` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pprice` int(11) NOT NULL,
  `pimg` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`pid`, `pname`, `pdetail`, `pqty`, `pkey`, `pprice`, `pimg`) VALUES
(2, 'Valorant-NA01', 'Aduy99:yudanur123\r\n', 1, 'a31a575b14e8464f8577de75f618bedb', 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE `user_tb` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` int(11) DEFAULT NULL,
  `user_realname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profile` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `approve_status` int(11) DEFAULT NULL,
  `permission` int(11) DEFAULT NULL,
  `point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`userid`, `username`, `password`, `user_realname`, `profile`, `approve_status`, `permission`, `point`) VALUES
(1, 'admin', 1234, 'Kitttichai Raksawong', NULL, 0, 0, 100),
(2, 'example', 123456, 'HyperBloom', NULL, 0, 1, 100),
(3, 'yedheedinosaur', 1234, 'Kong YedHee', NULL, 0, 1, 5000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_tb`
--
ALTER TABLE `cart_tb`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `history_tb`
--
ALTER TABLE `history_tb`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `rand_tb`
--
ALTER TABLE `rand_tb`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user_tb`
--
ALTER TABLE `user_tb`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_tb`
--
ALTER TABLE `cart_tb`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history_tb`
--
ALTER TABLE `history_tb`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rand_tb`
--
ALTER TABLE `rand_tb`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
