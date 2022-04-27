-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 21, 2021 at 03:15 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'POI', 'mobil@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'fr', 'kdlg@gmail.com', 'df6d2338b2b8fce1ec2f6dda0a630eb0'),
(3, 'MO', 'MOBILE@SHOP.COM', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'nu', 'nu@ac.com', '202cb962ac59075b964b07152d234b70'),
(5, 'abc', 'abc@def.com', '202cb962ac59075b964b07152d234b70'),
(6, 'a', 'a@b.com', '202cb962ac59075b964b07152d234b70'),
(7, 'mon', 'mon@shop.com', '202cb962ac59075b964b07152d234b70'),
(8, 'test', 'test@outlook.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(9, 'df', 'df@ad.com', '202cb962ac59075b964b07152d234b70'),
(10, 'mabelza', 'mo@gmail.com', '8af95a9ca4f3f7b8589c3f2fc390d258'),
(11, 'mmbb_test', 'mobile44.mm@gmail', '8af95a9ca4f3f7b8589c3f2fc390d258');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
