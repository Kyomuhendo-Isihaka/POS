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
-- Database: `chatbot_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `keyword1` varchar(100) NOT NULL,
  `keyword2` varchar(100) NOT NULL,
  `keyword3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `question`, `keyword1`, `keyword2`, `keyword3`) VALUES
(1, 'how are you', 'hell', 'hi', ''),
(7, 'how do you do', 'how', 'do', 'you'),
(8, 'what do you do', 'what', 'do', 'task'),
(10, 'whats good there', 'whats', 'good', 'there'),
(12, 'who are you', 'who', 'is', 'this');

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE `response` (
  `response_id` int(11) NOT NULL,
  `response` text NOT NULL,
  `keyword1` varchar(100) NOT NULL,
  `keyword2` varchar(100) NOT NULL,
  `keyword3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `response`
--

INSERT INTO `response` (`response_id`, `response`, `keyword1`, `keyword2`, `keyword3`) VALUES
(1, 'yes how are you ', 'hell', 'hi', ''),
(7, 'I work exactly as you wish', 'how', 'do', 'you'),
(8, 'online business', 'what', 'do', 'task'),
(10, 'Nothing much', 'whats', 'good', 'there'),
(12, 'I am the original Shaka-de-programmer', 'who', 'is', 'this');

-- --------------------------------------------------------

--
-- Table structure for table `unanswered_query`
--

CREATE TABLE `unanswered_query` (
  `id` int(11) NOT NULL,
  `query` varchar(100) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `unanswered_query`
--

INSERT INTO `unanswered_query` (`id`, `query`, `created_at`) VALUES
(14, ' xbfdn', '2023-08-21'),
(16, 'hgh', '2023-08-21'),
(17, 'jhewjhewhjjh', '2023-08-21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_password`, `created_at`) VALUES
(1, 'isihaka@gmail.com', '123', '2023-08-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`response_id`);

--
-- Indexes for table `unanswered_query`
--
ALTER TABLE `unanswered_query`
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
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `response`
--
ALTER TABLE `response`
  MODIFY `response_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `unanswered_query`
--
ALTER TABLE `unanswered_query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
