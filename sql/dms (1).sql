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
-- Database: `dms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL DEFAULT 'admin',
  `avatar` varchar(255) NOT NULL DEFAULT 'avatar.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `fname`, `lname`, `email`, `phone`, `password`, `role`, `avatar`) VALUES
(2, 'kyomuhendo', 'Isihaka', 'isihaka@gmail.com', '0761715368', '$2y$10$.fU8LLeQeWo1eCtbIQvKxOApA6puC69V5F1IDyw98d4RpMlrj220C', 'admin', 'images.png');

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `id` int(11) NOT NULL,
  `drug_name` varchar(255) NOT NULL,
  `drug_description` varchar(255) NOT NULL,
  `manufacturing_date` text NOT NULL,
  `expiry_date` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`id`, `drug_name`, `drug_description`, `manufacturing_date`, `expiry_date`, `status`) VALUES
(1, 'Drug One', 'first drug', '2023-08-13', '2023-08-15', '-1'),
(2, 'Drug Two', 'second drug', '2023-08-14', '2023-08-25', '-1'),
(3, 'Drug Three', 'Third drug', '2023-08-14', '2023-08-19', '0'),
(4, 'Drug four', 'Fourth drug', '2023-08-13', '2023-08-14', '-1'),
(5, 'Drug Five', 'Fifth Drug', '2023-08-14', '2023-08-23', '-1'),
(6, 'Drug Six', 'Sixth Drug', '2023-08-14', '2023-08-23', '-1'),
(7, 'Drug Seven', 'Seventh Drug', '2023-08-14', '2023-08-23', '-1');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL DEFAULT 'manager',
  `avatar` varchar(255) NOT NULL DEFAULT 'avatar.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `fname`, `lname`, `email`, `phone`, `password`, `role`, `avatar`) VALUES
(8, 'Manager', 'Manager', 'manager@gmail.com', '0778237740', '$2y$10$LIFdEKKBMyGwgzNWZJEf6ucdrwYaZ0hPKICvSg4zhjbjR4qxXX5N2', 'manager', 'avatar.png'),
(9, 'Isihaka', 'kyomuhendo', 'kyomuhendoisihaka1@gmail.com', '0778237748', '$2y$10$HbKq8r4VeJ.TVgwRalQgc.y/aoJVv5LwcaZTyROrDwV.EC8UvguRm', 'manager', 'avatar.png');

-- --------------------------------------------------------

--
-- Table structure for table `salesmans`
--

CREATE TABLE `salesmans` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL DEFAULT 'salesman',
  `avatar` varchar(255) NOT NULL DEFAULT 'avatar.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `salesmans`
--

INSERT INTO `salesmans` (`id`, `fname`, `lname`, `email`, `phone`, `password`, `role`, `avatar`) VALUES
(9, 'otherUser', 'One', 'otheruser@one.com', '017000000', '$2y$10$QcBETp.yv7xnE2gtnGKN2eQiwCW4jwobEPoOBGK/qQ3knrW4OsEdG', 'salesman', 'avatar.png'),
(11, 'otherUser', 'Two', 'otheruser@two.com', '0777882872', '$2y$10$xhA/IoOzX6jj6JAtFCLLHeNvCgYWqE4nYNxtlBfuFpSSRjU9oCjw2', 'salesman', 'avatar.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `salesmans`
--
ALTER TABLE `salesmans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `drugs`
--
ALTER TABLE `drugs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `salesmans`
--
ALTER TABLE `salesmans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
