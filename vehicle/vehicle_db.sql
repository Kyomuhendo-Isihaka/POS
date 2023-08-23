-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2022 at 12:16 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehicle_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company` varchar(30) NOT NULL,
  `balance` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company`, `balance`) VALUES
('Amul_Dairy_Products', 0),
('Sri_Shakthi_Logistics', 0),
('Standard_Fireworks', 191000),
('Vinayaga_Traders', 67000);

-- --------------------------------------------------------

--
-- Table structure for table `invoiceno`
--

CREATE TABLE `invoiceno` (
  `invoiceno` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoiceno`
--

INSERT INTO `invoiceno` (`invoiceno`) VALUES
(2112);

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE `main` (
  `sno` int(5) NOT NULL,
  `date` date NOT NULL,
  `vehicle` varchar(15) NOT NULL,
  `company` varchar(25) NOT NULL,
  `invoice` varchar(10) NOT NULL,
  `too` varchar(20) NOT NULL,
  `material` varchar(30) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `freight` int(5) NOT NULL,
  `loading` int(5) NOT NULL,
  `weighment` int(5) NOT NULL,
  `unloading` int(5) NOT NULL,
  `store` int(5) NOT NULL,
  `other` int(5) NOT NULL,
  `total` int(5) NOT NULL,
  `advance` int(5) NOT NULL,
  `balance` int(5) NOT NULL,
  `remark` varchar(30) NOT NULL,
  `advancetype` varchar(20) NOT NULL,
  `mamul` int(5) NOT NULL,
  `commision` int(5) NOT NULL,
  `cashmode` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL,
  `bill` varchar(20) NOT NULL,
  `no` bigint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`sno`, `date`, `vehicle`, `company`, `invoice`, `too`, `material`, `weight`, `freight`, `loading`, `weighment`, `unloading`, `store`, `other`, `total`, `advance`, `balance`, `remark`, `advancetype`, `mamul`, `commision`, `cashmode`, `status`, `bill`, `no`) VALUES
(13, '2021-11-06', 'TN-21-B-5591', 'Sri_Shakthi_Logistics', '2021110601', 'Theni', 'Timber Woods', '80', 500000, 20000, 30000, 20000, 20000, 5000, 595000, 300000, 295000, 'High Quality Timber Woods', 'cash', 3000, 4500, 'company_cash', 'complete', 'notrequired', 2111),
(14, '2021-11-06', 'TN-23-T-6734', 'Amul_Dairy_Products', '2021110602', 'Trichy', 'Milk Powder', '30', 200000, 10000, 7500, 10000, 25000, 3000, 255500, 100000, 155500, 'Store in dry places', 'account', 1500, 2000, 'company_account', 'complete', 'notrequired', 2110),
(17, '2021-11-06', 'TN-29-SW-5790', 'Standard_Fireworks', '2021110603', 'Salem', 'Fireworks', '50', 400000, 30000, 25000, 30000, 50000, 6000, 541000, 350000, 191000, 'Keep away from high temperatur', 'cash', 10000, 15000, 'company_cash', 'incomplete', 'notrequires', 0),
(18, '0000-00-00', 'TN-21-B-5591', 'Vinayaga_Traders', '2022012201', 'Theni', 'Sugar Cane', '30', 30000, 7000, 8000, 7000, 12000, 3000, 67000, 25000, 42000, 'Natural made sugar cane', 'cash', 2000, 2500, 'company_cash', 'complete', 'notrequired', 2112);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vehicle` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vehicle`) VALUES
('TN-21-B-5591'),
('TN-23-T-6734'),
('TN-29-SW-5790'),
('TN-48-Y-7729'),
('TN-58-Y-3278'),
('TN-59-Z-8623'),
('TN-92-H-4835');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD UNIQUE KEY `company` (`company`);

--
-- Indexes for table `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD UNIQUE KEY `vehicle` (`vehicle`),
  ADD UNIQUE KEY `vehicle_2` (`vehicle`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `main`
--
ALTER TABLE `main`
  MODIFY `sno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
