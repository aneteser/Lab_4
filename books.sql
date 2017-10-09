-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2017 at 06:21 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `books`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookid` int(11) NOT NULL,
  `title` varchar(70) NOT NULL,
  `author` varchar(70) NOT NULL,
  `onloan` tinyint(2) DEFAULT '0',
  `duedate` date NOT NULL,
  `borrowerid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookid`, `title`, `author`, `onloan`, `duedate`, `borrowerid`) VALUES
(1, 'Animal Farm ', 'George Orwell ', 0, '2017-09-19', 123),
(2, 'Water for Elephants ', 'Sara Gruen ', 0, '2017-09-13', 132435),
(3, '1984', 'George Orwell', 0, '2017-09-08', 65432234),
(5, 'The Notebook', 'Nicholas Sparks', 0, '2017-09-14', 23456),
(6, 'The Curious Incident of the Dog in the Night-Time', 'Mark Haddon', 0, '2017-09-11', 3454321),
(7, 'Twilight', 'Stephenie Meyer', 0, '2017-09-19', 765432),
(8, 'The Truth About Forever', 'Sarah Dessen', 0, '2017-09-18', 663767476),
(9, 'About a Boy', 'Nick Hornby', 0, '2017-09-19', 875888),
(10, 'The Lovely Bones', 'Alice Sebold', 0, '2017-09-19', 3087999),
(11, 'The Acid House', 'Irvine Welsh', 0, '2017-09-26', 954645755);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
