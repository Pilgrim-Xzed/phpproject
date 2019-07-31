-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 01, 2019 at 01:39 PM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `mydaycare`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `password`, `role`, `date`) VALUES
(1, '1234', 'parent', '2019-06-06 13:46:48');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `Id` int(11) NOT NULL,
  `msg` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`Id`, `msg`, `username`) VALUES
(1, 'potatoes are good for my kid', 'proudmama101');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `health` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `fphone` int(50) NOT NULL,
  `femail` varchar(50) NOT NULL,
  `haddress` varchar(50) NOT NULL,
  `workaddress` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `mphone` int(50) NOT NULL,
  `memail` varchar(50) NOT NULL,
  `mhaddress` varchar(50) NOT NULL,
  `mwaddress` varchar(50) NOT NULL,
  `password` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `fullname`, `dob`, `gender`, `health`, `fname`, `fphone`, `femail`, `haddress`, `workaddress`, `mname`, `mphone`, `memail`, `mhaddress`, `mwaddress`, `password`) VALUES
(1, 'Manal', '2019-06-13', 'Female', 'Babu Rashin lafiya', 'Baba', 2345678, 'baba@gmail.com', 'Kano, Nigeria ', 'Kano ', 'Mama', 234567, 'mama@gmail.com', ' Kano Nigeria', ' Kano, Nigeria', '202cb962ac59075b964b07152d234b70'),
(2, 'khady', '2019-06-06', 'Female', 'normal', 'bg', 9876, 'l@yahoo.com', ' hj jk io', ' cd df g', 'mg', 98765, 's@yahoo.com', ' er', ' ty', '02522a2b2726fb0a03bb19f2d8d9524d'),
(3, 'hlo', '2019-06-05', 'Male', '32', 'erf', 6565, 'l@yahoo.com', 't56 hy6e ', ' 4rfty yte5w5', 'hgf', 6666, 's@yahoo.com', ' egrsgbte', ' gtvget', '15de21c670ae7c3f6f3f1f37029303c9'),
(4, 'hlo', '2019-06-05', 'Male', '32', 'erf', 6565, 'l@yahoo.com', 't56 hy6e ', ' 4rfty yte5w5', 'hgf', 6666, 's@yahoo.com', ' egrsgbte', ' gtvget', 'd41d8cd98f00b204e9800998ecf8427e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

