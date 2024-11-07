-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2024 at 07:14 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chamunda`
--

-- --------------------------------------------------------

--
-- Table structure for table `aaa`
--

CREATE TABLE `aaa` (
  `id` int(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pas` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aaa`
--

INSERT INTO `aaa` (`id`, `user`, `pas`) VALUES
(1, 'parth', '123'),
(2, 'admin', '123'),
(5, 'efg', '456');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `nam` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `subjec` varchar(255) NOT NULL,
  `messag` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `nam`, `email`, `phone`, `subjec`, `messag`) VALUES
(5, 'Parth Chhaya ', 'parthchhayan8114@gmail.com', '9265640996', 'Review ', 'Nice Work and Staff.'),
(6, 'parth', 'abc@xyz.com', '1234567890', 'ddfkm', 'dsnfknksdkfrdjgdklxcl;dmxkgnvkdmxclvndfklmcv nfdklcmvkdnfklxcvk dfklxcvkl dflcv kdkflmxflckn dsklxcml '),
(7, 'cdcv', 'sd@jg.d', '7845598621', '90sejdo', 'ejsodfopkaspzdpkesopdpeksofjcp[eskkdfkcsdfkcneksdfcmskdmxp[ckeksdfkcoekops0qwoaop'),
(8, 'iro', 'jdf@jdf.idj', '1245785614', 'sdfmksd', 'jsdiojgiojrdojgir gvr iofghuifhgvdfjjsdksjkxbjkdxncjvbfcvjjdxisjzioersidrwaspcjkxncvjkbfuasopzfiogjpsdxjcvobfcvcv'),
(9, 'bvjkjc', 'udhfu@df.ijesfd', '1964252348', 'eisjdfijsd', 'ffesdkfxckxcm caklsoejdewisjzkxklasnxcklm jwenszdncmszxm, skxdncsdz xm jszlmxszx lkdfnxjvlsdkldnx'),
(10, 'dsjfkxc', 'safcsd@gj.fh', '4578318956', 'sdfkcdsklxmkv', 'kdklxvkldxcv klxm clzxlc klxm;nsdkx;lcmzxk; msdkzxnksmz;lxcm ddckm');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`) VALUES
(13, '1.jpeg'),
(14, '2.jpeg'),
(15, '3.jpeg'),
(16, '4.jpeg'),
(17, '5.jpeg'),
(18, '6.jpeg'),
(19, '7.jpeg'),
(20, '8.jpeg'),
(21, '10.jpeg'),
(22, '11.jpeg'),
(23, '12.jpeg'),
(24, '9.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aaa`
--
ALTER TABLE `aaa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aaa`
--
ALTER TABLE `aaa`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
