-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 09, 2020 at 06:14 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(20) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `level` varchar(50) NOT NULL,
  `tym` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `datetym` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `content`, `level`, `tym`, `branch`, `username`, `datetym`) VALUES
(1, 'is gate real', 'Low', '0-2 min', 'CSE/IT', 'louie', '0000-00-00 00:00:00.000000'),
(11, 'gate definition', 'Low', '0-2 min', 'CSE/IT', 'aish', '01/08/2020 02:28:30'),
(13, 'gate conduction bodies', 'Low', '0-2 min', 'CSE/IT', 'aish', '01/08/2020 05:59:33'),
(16, 'IS GATE ANY GOOD?', 'High', '2-5 Min', 'ME', 'vaibhav', '01/09/2020 03:00:50'),
(17, 'FSDFSADFS', 'Low', '0-2 min', 'CSE/IT', 'aish', '01/09/2020 03:03:57'),
(18, 'DSFSADFFSDFSADFS', 'Low', '0-2 min', 'CSE/IT', 'aish', '01/09/2020 03:04:03'),
(19, 'WHY VOLTAGE IS ALWAYS IN MULTIPLE OF 11', 'Low', '0-2 min', 'CSE/IT', 'aish', '01/09/2020 03:13:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
