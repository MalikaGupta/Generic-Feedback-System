-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2018 at 03:28 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `fbinfrastructure`
--

CREATE TABLE `fbinfrastructure` (
  `rollno` int(10) NOT NULL,
  `quesno` int(10) NOT NULL,
  `rating` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `username` int(10) NOT NULL,
  `pass` text NOT NULL,
  `name` text NOT NULL,
  `sem` int(10) NOT NULL,
  `email` text NOT NULL,
  `phone` bigint(12) NOT NULL,
  `aadhar` bigint(12) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `username`, `pass`, `name`, `sem`, `email`, `phone`, `aadhar`, `dob`) VALUES
(1, 1609110089, '007', 'Rohit Jakhmola', 4, '', 0, 0, '0000-00-00'),
(2, 1609110006, '006', 'Abhishek Singh', 4, '', 0, 0, '0000-00-00'),
(3, 1609110011, '011', 'Amitesh Agrahari', 0, '', 0, 0, '0000-00-00'),
(4, 1609110089, 'pass', 'Rohit', 4, '', 0, 0, '0000-00-00'),
(5, 1609110089, '1', 'Rohit Jhkj', 4, 'rjakhmola5@gmail.com', 2147483647, 0, '0001-12-03'),
(6, 1609110089, '1', 'Rohit Jhkj', 4, 'rjakhmola5@gmail.com', 2147483647, 2147483647, '0001-12-03'),
(7, 1609100094, '12345', 'Rahul Singh', 4, 'rahul@gmail.com', 2147483647, 2147483647, '1985-11-13'),
(8, 1609110078, '12345', 'jnkjhhjgjh jkhkjhkj', 4, 'khk@jhkj.com', 2147483647, 2147483647, '1985-01-01'),
(9, 1609100094, '12', 'sadadas dfsffsd', 4, 'rohit@gmail.com', 918505823336, 2147483647, '1985-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `name`) VALUES
(2, 'admin', 'admin', 'admin'),
(3, 'user', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
