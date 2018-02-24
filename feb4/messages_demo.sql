-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2018 at 02:10 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `messages_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `messageText` varchar(5000) DEFAULT NULL,
  `messageDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `userId`, `messageText`, `messageDate`) VALUES
(1, 1, 'I posted a message', '2017-01-14 15:17:00'),
(2, 2, 'me too!', '2017-01-14 15:18:00'),
(3, 1, 'I posted another message', '2017-01-14 15:19:00'),
(4, 5, 'hi everyone this me', '2018-02-04 00:00:00'),
(6, 8, 'My name is krishna karki and i love coding', '2018-02-22 00:00:00'),
(7, 5, 'hello everyone \r\nnow i am live on facebook,insta', '2018-02-24 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `surname` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `birthday` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `firstname`, `surname`, `email`, `birthday`) VALUES
(1, 'John', 'Smith', 'john@example.org', '1990-02-05 00:00:00'),
(2, 'Sue', 'Evans', 'sue@example.org', '1991-04-02 00:00:00'),
(4, 'fdg', 'fdg', 'fdg', '0000-00-00 00:00:00'),
(5, 'samikshya', 'karki', 'katki.80,.@GMAIL.VPOM', '1996-09-24 00:00:00'),
(6, 'ram', 'sharma', 'ram@gmail.com', '1909-06-08 00:00:00'),
(7, 'anamol', 'sharma', 'anamol@yahoo.cpm', '1900-06-08 00:00:00'),
(8, 'prayash ', 'karki', 'karki.80.krishna@yahoo.com', '1999-09-16 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
