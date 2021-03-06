-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2021 at 07:49 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(10) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `votes` int(100) NOT NULL DEFAULT '0',
  `address` text NOT NULL,
  `branch` varchar(100) NOT NULL,
  `number` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `username`, `password`, `image`, `date`, `email`, `votes`, `address`, `branch`, `number`) VALUES
(1, 'cs groups', 23, 'p1.jpeg', '2020-08-04', 'cdhh@gmail.com', 4, 'canteen development', 'certh.', 2147483647),
(2, 'scripters', 12, 'back.jpg', '2020-07-30', 'ccccccc@gmail.com', 0, 'technically develop', 'cs', 1234567899),
(3, 'hackers', 12, 'bac.jpg', '2020-08-01', 'c342@gmail.com', 0, 'technical development', 'cs', 1234567899),
(4, 'coders', 12, 'p1.jpeg', '2020-07-31', 'dgdg@gmail.com', 0, 'placement development', 'cs', 1234568899);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `address` text NOT NULL,
  `vote` tinyint(4) NOT NULL DEFAULT '0',
  `image` varchar(200) NOT NULL,
  `number` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `branch`, `date`, `address`, `vote`, `image`, `number`) VALUES
(1, 'deepak', 12, 'c6@gmail.com', 'cs', '2020-08-04', ' eee', 1, 'back.jpg', 1234567899),
(2, 'deepak', 12, 'cdddd@gmail.com', 'cs', '2020-08-01', ' eee', 1, 'p3.jpg', 1234567899),
(3, 'Bhuvan ', 12, 'b@gmail.com', 'Cse', '2000-09-04', ' --', 1, '', 2147483647),
(4, 'Suhas', 0, 'in4@gmail.com', 'CS', '2000-09-29', ' no', 1, 'deptlogo.jpg', 1234567899);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
