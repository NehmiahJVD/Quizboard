-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2019 at 07:23 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizapplicationdb2`
--

-- --------------------------------------------------------

--
-- Table structure for table `mcqs`
--

CREATE TABLE `mcqs` (
  `mcqid` int(11) NOT NULL,
  `statement` varchar(500) NOT NULL,
  `answer1` varchar(256) NOT NULL,
  `answer2` varchar(256) NOT NULL,
  `answer3` varchar(256) NOT NULL,
  `answer4` varchar(256) NOT NULL,
  `correctanswer` tinyint(4) NOT NULL,
  `answer5` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mcqs`
--

INSERT INTO `mcqs` (`mcqid`, `statement`, `answer1`, `answer2`, `answer3`, `answer4`, `correctanswer`, `answer5`) VALUES
(7, 'HTML stands for ___________ ?', 'Hyper Text Markup Language', 'Hyper Transmission Markup Language', 'Hyper Text Markup Logics', 'Hyper Text Making Language', 1, 'Hyper Markup'),
(8, 'JavaScript is a ___________ language ?', 'server side', 'client side', 'neither server side nor client side', 'both server side and client side', 2, 'cloud'),
(9, 'MVC stands for ______ ?', 'Model vs Controller', 'Meta vs Controller', 'Model View Controller', 'Mesh View Control', 3, 'Modeling'),
(10, 'Loops are used for ______ ?', 'Repeating tasks', 'Single task', 'Many similar tasks', 'none is correct', 1, 'statements'),
(11, 'Do While executes at least ______ times ?', '5', '3', '2', '6', 5, '1'),
(13, 'i++ is referred to as ______ ?', 'parallel increment', 'post increment', 'post decrement', 'pre increment', 2, 'positive i'),
(14, '--i is referred to as ______ ?', 'parallel increment', 'negative i', 'post decrement', 'pre increment', 5, 'pre decrement'),
(15, '% is used for getting ______ ?', 'addition', 'subtraction', 'remainder', 'quotient', 3, 'dividend'),
(16, 'Array is used for storing collections of ______ ?', 'integers', 'strings', 'objects', 'variables', 5, 'all are correct'),
(17, 'What is the size of long variable in Java?', '8 bit', '16 bit', '32 bit', '64 bit', 4, '128 bit'),
(18, 'The attribute of form tag in HTML is?', 'Method', 'Action', 'Both (a)&(b)', 'None', 3, 'Target');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `resultid` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `marks_obtained` int(11) NOT NULL,
  `pin` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`resultid`, `date`, `marks_obtained`, `pin`) VALUES
(13, '2019-03-15 16:15:36', 4, '12345'),
(14, '2019-03-15 16:42:05', 3, '12345'),
(18, '2019-03-15 20:19:32', 9, '12345'),
(19, '2019-03-16 00:44:59', 2, '12345'),
(20, '2019-03-19 14:45:39', 8, '12345'),
(22, '2019-03-19 14:47:15', 8, '12345');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `pin` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`pin`, `password`, `full_name`, `email`, `role`) VALUES
('1212', 'admin*', 'Xo', 'admin@qb.com', 'admin'),
('12345', 'user*', 'Rizy', 'rizy@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mcqs`
--
ALTER TABLE `mcqs`
  ADD PRIMARY KEY (`mcqid`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`resultid`),
  ADD KEY `mobile_no` (`pin`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`pin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mcqs`
--
ALTER TABLE `mcqs`
  MODIFY `mcqid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `resultid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`pin`) REFERENCES `users` (`pin`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
