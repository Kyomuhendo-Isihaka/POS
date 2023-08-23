-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 23, 2023 at 11:48 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbot_hints`
--

CREATE TABLE `chatbot_hints` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `reply` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `chatbot_hints`
--

INSERT INTO `chatbot_hints` (`id`, `question`, `reply`) VALUES
(1, 'HI||Hello||Hola', 'Hello, how are you.'),
(2, 'How are you', 'Good to see you again!'),
(3, 'what is your name||whats your name', 'My name is Vishal Bot'),
(4, 'what should I call you', 'You can call me Vishal Bot'),
(5, 'Where are your from', 'I m from India'),
(6, 'Bye||See you later||Have a Good Day', 'Sad to see you are going. Have a nice day');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `added_on` datetime NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `message`, `added_on`, `type`) VALUES
(1, 'Hi', '2020-04-22 12:41:04', 'user'),
(2, 'Hello, how are you.', '2020-04-22 12:41:05', 'bot'),
(3, 'what is your name', '2020-04-22 12:41:22', 'user'),
(4, 'My name is Vishal Bot', '2020-04-22 12:41:22', 'bot'),
(5, 'Where are your from', '2020-04-22 12:41:30', 'user'),
(6, 'I m from India', '2020-04-22 12:41:30', 'bot'),
(7, 'Go to hell', '2020-04-22 12:41:41', 'user'),
(8, 'Sorry not be able to understand you', '2020-04-22 12:41:41', 'bot'),
(9, 'bye', '2020-04-22 12:41:46', 'user'),
(10, 'Sad to see you are going. Have a nice day', '2020-04-22 12:41:46', 'bot'),
(11, 'hi', '2023-08-18 11:21:56', 'user'),
(12, 'Hello, how are you.', '2023-08-18 11:21:56', 'bot'),
(13, 'am okay how are you', '2023-08-18 11:22:07', 'user'),
(14, 'Sorry not be able to understand you', '2023-08-18 11:22:07', 'bot'),
(15, 'hello', '2023-08-18 11:26:19', 'user'),
(16, 'Hello, how are you.', '2023-08-18 11:26:19', 'bot'),
(17, 'stupid', '2023-08-18 11:26:29', 'user'),
(18, 'Sorry not be able to understand you', '2023-08-18 11:26:29', 'bot'),
(19, 'hi', '2023-08-19 01:44:02', 'user'),
(20, 'Hello, how are you.', '2023-08-19 01:44:02', 'bot'),
(21, 'how are you', '2023-08-20 12:51:56', 'user'),
(22, 'Good to see you again!', '2023-08-20 12:51:56', 'bot'),
(23, 'stupid', '2023-08-20 12:52:06', 'user'),
(24, 'Sorry not be able to understand you', '2023-08-20 12:52:06', 'bot'),
(25, 'hi', '2023-08-20 01:22:43', 'user'),
(26, 'Hello, how are you.', '2023-08-20 01:22:43', 'bot');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatbot_hints`
--
ALTER TABLE `chatbot_hints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatbot_hints`
--
ALTER TABLE `chatbot_hints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
