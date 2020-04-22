-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2000 at 08:48 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USERNAME` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `addr` varchar(100) NOT NULL,
  `gen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USERNAME`, `EMAIL`, `PASSWORD`, `addr`, `gen`) VALUES
('2018115045', 'KAH', 'c2d9210da23c934aede9efa854c2e6c4', '', ''),
('2018115045', 'KAH', 'c2d9210da23c934aede9efa854c2e6c4', '', ''),
('harini', 'harini@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', ''),
('2018115045', 'harini@gmail.com', '202cb962ac59075b964b07152d234b70', '', ''),
('2018115045', 'KAH', 'c4ca4238a0b923820dcc509a6f75849b', 'kak', 'male'),
('abc', 'abc', 'c20ad4d76fe97759aa27a0c99bff6710', 'addf', 'male'),
('vengt', 'ben#@kad', '827ccb0eea8a706c4c34a16891f84e7b', '', ''),
('harashah', 'sgrfs', '827ccb0eea8a706c4c34a16891f84e7b', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
