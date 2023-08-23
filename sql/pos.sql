-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 23, 2023 at 11:49 AM
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
-- Database: `pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` int(11) NOT NULL,
  `dest_name` varchar(255) NOT NULL,
  `dest_length` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `dest_name`, `dest_length`) VALUES
(1, 'campsite', '16'),
(2, 'Stock Pile 1', '24'),
(3, 'Stock pile 2', '34'),
(4, 'Stock Pile 3', '45'),
(5, 'Karuma', '50');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `username`, `contact`) VALUES
(1, 'Jame Okullu', '0778237748'),
(2, 'Ojoko Andrew', '07761715368'),
(3, 'Ahebwa collin', '0757815368');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_number` varchar(255) NOT NULL,
  `project_title` varchar(255) NOT NULL,
  `vehicle` varchar(255) DEFAULT NULL,
  `driver` varchar(255) DEFAULT NULL,
  `destination` varchar(255) DEFAULT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_number`, `project_title`, `vehicle`, `driver`, `destination`, `created_at`) VALUES
(1, '001', 'project One', '1', '1', '1,2,3,5', '2023-08-07'),
(2, '002', 'project Two', '3', '3', '3,5', '2023-08-07'),
(4, '003', 'project three', '1', '2', '1,2,3,5', '2023-08-07'),
(5, '005', 'project  Five', '1', '1', '2,4', '2023-08-07'),
(6, '006', 'Project Six', '3', '3', '1,2,4,5', '2023-08-08'),
(7, '007', 'Project Seven', '2', '1', '2,4', '2023-08-08'),
(8, '12', 'project 8', '1', '1', '2,5', '2023-08-09'),
(9, 'LS4lY', 'project Nine', '1', '3', NULL, '2023-08-09');

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `trip_id` int(11) NOT NULL,
  `destination_id` varchar(255) NOT NULL,
  `trip_num` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`trip_id`, `destination_id`, `trip_num`) VALUES
(1, '2', '1'),
(2, '1', '22');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL,
  `vehicle_name` varchar(100) NOT NULL,
  `vehicle_num` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `vehicle_name`, `vehicle_num`, `model`) VALUES
(1, 'vehicle 1', 'UAB-776D', '1995'),
(2, 'vehicle 2', 'UBJ-334H', '2003'),
(3, 'vehicle 3', 'UAF-893L', '1985');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`trip_id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `trip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
