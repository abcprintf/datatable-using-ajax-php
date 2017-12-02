-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2017 at 06:12 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datatable`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `firstname`, `lastname`, `email`) VALUES
(1, 'สุบุษราภรณ์', 'จำเริญสม', 'aaaaa@perfect-u.pw'),
(2, 'สุนวลออง', 'พลแก้ว', 'achraf-abrar@subpastore.co'),
(3, 'สุบุษราภรณ์ ', 'จำเริญสม', 'k29khaled29e@perfect-u.pw'),
(4, 'สุนวลออง', 'พลแก้ว', 'achraf-abrar@subpastore.co'),
(5, 'สุบุษราภรณ์ ', 'จำเริญสม', 'k29khaled29e@perfect-u.pw'),
(6, 'สุนวลออง', 'พลแก้ว', 'achraf-abrar@subpastore.co'),
(7, 'สุบุษราภรณ์ ', 'จำเริญสม', 'k29khaled29e@perfect-u.pw'),
(8, 'สุนวลออง', 'พลแก้ว', 'achraf-abrar@subpastore.co'),
(9, 'สุบุษราภรณ์ ', 'จำเริญสม', 'k29khaled29e@perfect-u.pw'),
(10, 'สุนวลออง', 'พลแก้ว', 'achraf-abrar@subpastore.co'),
(11, 'สุบุษราภรณ์ ', 'จำเริญสม', 'avxe@perfect-u.pw'),
(12, 'สุนวลออง', 'พลแก้ว', 'achraf-abrar@subpastore.co'),
(13, 'สุบุษราภรณ์ ', 'จำเริญสม', 'k29khaled29e@perfect-u.pw'),
(14, 'สุนวลออง', 'พลแก้ว', 'achraf-abrar@subpastore.co'),
(15, 'สุบุษราภรณ์ ', 'จำเริญสม', 'k29khaled29e@perfect-u.pw'),
(16, 'สุนวลออง', 'พลแก้ว', 'achraf-abrar@subpastore.co'),
(17, 'สุบุษราภรณ์ ', 'จำเริญสม', 'k29khaled29e@perfect-u.pw'),
(18, 'สุนวลออง', 'พลแก้ว', 'achraf-abrar@subpastore.co'),
(19, 'สุบุษราภรณ์ ', 'จำเริญสม', 'k29khaled29e@perfect-u.pw'),
(20, 'สุนวลออง', 'พลแก้ว', 'achraf-abrar@subpastore.co'),
(21, 'สุบุษราภรณ์ ', 'จำเริญสม', 'k29khaled29e@perfect-u.pw'),
(22, 'สุนวลออง', 'พลแก้ว', 'achraf-abrar@subpastore.co'),
(23, 'สุบุษราภรณ์ ', 'จำเริญสม', 'k29khaled29e@perfect-u.pw'),
(24, 'สุนวลออง', 'พลแก้ว', 'achraf-abrar@subpastore.co'),
(25, 'สุบุษราภรณ์ ', 'จำเริญสม', 'k29khaled29e@perfect-u.pw'),
(26, 'สุนวลออง', 'พลแก้ว', 'achraf-abrar@subpastore.co'),
(27, 'สุบุษราภรณ์ ', 'จำเริญสม', 'k29khaled29e@perfect-u.pw'),
(28, 'สุนวลออง', 'พลแก้ว', 'achraf-abrar@subpastore.co'),
(29, 'สุบุษราภรณ์ ', 'จำเริญสม', 'k29khaled29e@perfect-u.pw'),
(30, 'สุนวลออง', 'พลแก้ว', 'achraf-abrar@subpastore.co'),
(31, 'สุบุษราภรณ์ ', 'จำเริญสม', 'k29khaled29e@perfect-u.pw'),
(32, 'สุนวลออง', 'พลแก้ว', 'achraf-abrar@subpastore.co');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
