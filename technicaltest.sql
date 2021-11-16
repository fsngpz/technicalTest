-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2021 at 07:13 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `technicaltest`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `ID` char(100) NOT NULL,
  `History_Time` timestamp NULL DEFAULT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`ID`, `History_Time`, `Message`) VALUES
('c6ad92b68e4a7c9a3aa3b0c592bb56ef', '2021-11-16 18:08:44', 'What is the issue?'),
('c6ad92b68e4a7c9a3aa3b0c592bb56ef', '2021-11-16 18:10:28', 'Puta madre');

-- --------------------------------------------------------

--
-- Table structure for table `ticketing`
--

CREATE TABLE `ticketing` (
  `ID` char(100) NOT NULL,
  `TicketNum` char(100) CHARACTER SET utf8 NOT NULL,
  `Subject` text CHARACTER SET utf8 NOT NULL,
  `Message` text CHARACTER SET utf8 NOT NULL,
  `Status` char(20) CHARACTER SET utf8 NOT NULL,
  `Priority` char(20) CHARACTER SET utf8 NOT NULL,
  `Update_Time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Create_Time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticketing`
--

INSERT INTO `ticketing` (`ID`, `TicketNum`, `Subject`, `Message`, `Status`, `Priority`, `Update_Time`, `Create_Time`) VALUES
('c6ad92b68e4a7c9a3aa3b0c592bb56ef', 'TN-6193f176ca050', 'Ticket - Salsa', 'Puta madre', 'Answered', 'Medium', '2021-11-16 18:10:28', '2021-11-16 17:59:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ticketing`
--
ALTER TABLE `ticketing`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
