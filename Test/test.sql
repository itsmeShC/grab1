-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2018 at 08:01 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_panel`
--

CREATE TABLE `admin_panel` (
  `id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pasw` varchar(20) NOT NULL,
  `img` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_panel`
--

INSERT INTO `admin_panel` (`id`, `email`, `pasw`, `img`) VALUES
(1, 'admin@gmail.com', '12345', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(20) NOT NULL,
  `sdate` datetime NOT NULL,
  `edate` datetime NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`, `sdate`, `edate`, `time`) VALUES
(1, 'php', '1970-01-01 01:33:37', '1970-01-01 01:33:37', 2),
(2, 'sql', '1970-01-01 01:33:37', '1970-01-01 01:33:37', 5),
(3, 'maths', '1970-01-01 01:33:37', '1970-01-01 01:33:37', 8);

-- --------------------------------------------------------

--
-- Table structure for table `category2`
--

CREATE TABLE `category2` (
  `id` int(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category2`
--

INSERT INTO `category2` (`id`, `email`) VALUES
(1, 'aksingh@gmail.com'),
(8, 'aksingh@gmail.com'),
(7, 'aksingh@gmail.com'),
(2, 'aksingh@gmail.com'),
(1, 'atul@gmail.com'),
(2, 'atul@gmail.com'),
(1, 'mohan@gmail.com'),
(2, 'mohan@gmail.com'),
(1, 'lohan@gmail.com'),
(1, 'sohan@gmail.com'),
(1, 'gupta@gmail.com'),
(1, 'ashu@gmail.com'),
(1, 'p@gmail.com'),
(1, '');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(200) NOT NULL,
  `ques` varchar(200) NOT NULL,
  `ans1` varchar(200) NOT NULL,
  `ans2` varchar(200) NOT NULL,
  `ans3` varchar(200) NOT NULL,
  `ans4` varchar(200) NOT NULL,
  `ans` int(200) NOT NULL,
  `cat_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `ques`, `ans1`, `ans2`, `ans3`, `ans4`, `ans`, `cat_id`) VALUES
(3, 'What does PHP stand for?', 'Personal Hypertext Processor', ' Private Home Page', ' PHP: Hypertext Preprocessor', 'none', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `ques_ans`
--

CREATE TABLE `ques_ans` (
  `id` int(11) NOT NULL,
  `ques` varchar(255) NOT NULL,
  `ans1` varchar(255) NOT NULL,
  `ans2` varchar(255) NOT NULL,
  `ans3` varchar(255) NOT NULL,
  `ans4` varchar(255) NOT NULL,
  `ans` int(2) NOT NULL,
  `cat_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ques_ans`
--

INSERT INTO `ques_ans` (`id`, `ques`, `ans1`, `ans2`, `ans3`, `ans4`, `ans`, `cat_id`) VALUES
(47, 'PHP server scripts are surrounded by delimiters, which?', '<&>...</&>', '<?php>...</?>', '<script>...</script>', '<?php...?>', 3, 1),
(48, ' How do you write "Hello World" in PHP', 'echo "Hello World";', 'Document.Write("Hello World");', '"Hello World";', 'none', 0, 1),
(49, 'All variables in PHP start with which symbol?', '!', 'd', '$', '^', 2, 1),
(50, 'What does SQL stand for?', 'Strong Question Language', ' Structured Query Language', 'Structured Question Language', 'none', 1, 5),
(51, 'Which SQL statement is used to extract data from a database?', 'extract', 'select', 'nkou', 'none', 1, 5),
(52, 'which one is even number?', '0', '1', '3', '5', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pasw` varchar(20) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `email`, `pasw`, `img`) VALUES
(1, 'p@gmail.com', '12345', '01 aa 001.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_panel`
--
ALTER TABLE `admin_panel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ques_ans`
--
ALTER TABLE `ques_ans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_panel`
--
ALTER TABLE `admin_panel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ques_ans`
--
ALTER TABLE `ques_ans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
