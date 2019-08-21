-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2019 at 09:12 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grades`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student` int(11) NOT NULL,
  `school_board` varchar(4) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `grade1` int(11) NOT NULL,
  `grade2` int(11) NOT NULL,
  `grade3` int(11) NOT NULL,
  `grade4` int(11) NOT NULL,
  `average` int(11) NOT NULL,
  `final_result` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student`, `school_board`, `student_name`, `grade1`, `grade2`, `grade3`, `grade4`, `average`, `final_result`) VALUES
(1, 'CSM', 'Boris Beker', 7, 10, 7, 5, 7, 'PASS'),
(2, 'CSMB', 'Janik Noa', 6, 7, 6, 0, 7, 'FAIL'),
(3, 'CSMB', 'Anri Lekont', 5, 5, 5, 8, 7, 'FAIL'),
(4, 'CSMB', 'Bo Derek', 9, 5, 5, 5, 5, 'PASS'),
(5, 'CSM', 'Milos Kecmanovic', 7, 9, 8, 8, 8, 'PASS'),
(6, 'CSMB', 'Joe Koker', 7, 9, 6, 8, 9, 'PASS'),
(7, 'CSM', 'Rafael Nadal', 9, 8, 8, 7, 8, 'PASS'),
(8, 'CSM', 'Rodzer Federer', 6, 8, 5, 9, 7, 'PASS'),
(9, 'CSMB', 'Laslo Djere', 6, 6, 9, 0, 8, 'PASS'),
(10, 'CSM', 'Dominik Team', 6, 7, 7, 6, 7, 'FAIL'),
(11, 'CSM', 'Martin Potro', 8, 6, 8, 6, 7, 'PASS'),
(12, 'CSMB', 'Kevin Anderson', 7, 6, 6, 9, 8, 'PASS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
