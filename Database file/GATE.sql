-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 11, 2020 at 06:11 PM
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
-- Database: `GATE`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--
-- Creation: Jan 11, 2020 at 04:54 PM
-- Last update: Jan 11, 2020 at 04:56 PM
--

CREATE TABLE `admin` (
  `login_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `superpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `admin`:
--

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`login_id`, `password`,`superpassword`) VALUES
('gne', 'gate','phpislit');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--
-- Creation: Jan 11, 2020 at 04:51 PM
-- Last update: Jan 11, 2020 at 05:04 PM
--

CREATE TABLE `answers` (
  `aid` int(50) NOT NULL,
  `id` int(50) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `username` varchar(50) NOT NULL,
  `datetym` varchar(50) NOT NULL,
  `tym` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `answers`:
--

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `id`, `content`, `username`, `datetym`, `tym`, `level`) VALUES
(1, 1, 'Due to voltage regulation drops 10% extra voltage is to be provided. e.g. Instead of 100V , 100+10% of hundred i.e 1.1 times of 100 is provided (110V).  Hence all the voltages are multiples of 1.1 not 11.', 'user', '01/11/2020 10:34:24', '0-2 min', 'Low');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--
-- Creation: Jan 11, 2020 at 04:47 PM
-- Last update: Jan 11, 2020 at 05:02 PM
--

CREATE TABLE `questions` (
  `id` int(50) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `level` varchar(50) NOT NULL,
  `tym` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `datetym` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `questions`:
--

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `content`, `level`, `tym`, `branch`, `username`, `datetym`) VALUES
(1, 'Why electricity is being transmitted in multiple of 11 ?', 'Low', '0-2 min', 'EE', 'user', '01/11/2020 10:32:20');

-- --------------------------------------------------------

--
-- Table structure for table `userbase`
--
-- Creation: Jan 11, 2020 at 04:44 PM
-- Last update: Jan 11, 2020 at 04:58 PM
--

CREATE TABLE `userbase` (
  `user_id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `security` varchar(50) NOT NULL,
  `phone` bigint(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `datetym` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `userbase`:
--

--
-- Dumping data for table `userbase`
--

INSERT INTO `userbase` (`user_id`, `username`, `password`, `name`, `security`, `phone`, `email`, `datetym`) VALUES
(1, 'user', '123', 'dummy user', 'admin', 9756479370, 'TiwariMay2002@gmail.com', '01/11/2020 10:28:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userbase`
--
ALTER TABLE `userbase`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `aid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userbase`
--
ALTER TABLE `userbase`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
