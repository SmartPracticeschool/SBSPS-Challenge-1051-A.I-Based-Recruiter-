-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2020 at 06:37 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `uname` varchar(20) NOT NULL COMMENT 'username',
  `passwd` varchar(20) NOT NULL COMMENT 'password'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='database to store registered users details';

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`uname`, `passwd`) VALUES
('R0H17', 'L1N94L4'),
('R0H17', 'L1N94L4'),
('K4R7H1K', 'J4NNUP4LL1'),
('K4R7H1K', 'J4NNUP4LL1'),
('$R4V4N7H1', 'K4K1'),
('$R4V4N7H1', 'K4K1'),
('R007', '700R'),
('', ''),
('R007', '700R'),
('', ''),
('test@gmail.com', '73$7'),
('test@gmail.com', '73$7');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
