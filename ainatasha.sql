-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2022 at 04:21 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `command`
--

-- --------------------------------------------------------

--
-- Table structure for table `command`
--

CREATE TABLE `command` (
  `id` int(1) NOT NULL,
  `command` varchar(255) NOT NULL,
  `uoc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `command`
--

INSERT INTO `command` (`id`, `command`, `uoc`) VALUES
(4, 'open facebook', 'https://www.facebook.com/'),
(5, 'open twitter', 'https://twitter.com/?lang=en'),
(6, 'open whatsapp', 'https://web.whatsapp.com/'),
(7, 'i want to read c', 'https://www.tutorialspoint.com/cprogramming/index.htm'),
(8, 'i want to watch news in marathi', 'https://www.youtube.com/watch?v=Rs3GfkHRwXA'),
(9, 'i want to watch news in hindi', 'https://www.youtube.com/watch?v=onpn1FS8cKw'),
(10, 'i want to watch news in english', 'https://www.youtube.com/watch?v=WB-y7_ymPJ4'),
(11, 'i want to read newspaper in marathi', 'http://epaper.lokmat.com/'),
(12, 'i want to read newspaper in english', 'https://timesofindia.indiatimes.com/'),
(13, 'i want to read newspaper in hindi', 'https://www.bhaskar.com/'),
(14, 'i want to read computer fundamentals', 'https://www.tutorialspoint.com/computer_fundamentals/computer_fundamentals_tutorial.pdf'),
(15, 'i want to read digital electronics', 'https://www.javatpoint.com/digital-electronics'),
(16, 'i want to read c programing', 'https://www.tutorialspoint.com/cprogramming/index.htm'),
(17, 'i want to read microprocessor', 'https://www.tutorialspoint.com/microprocessor/microprocessor_overview.htm'),
(18, 'i want to read datastructure', 'https://www.tutorialspoint.com/data_structures_algorithms/index.htm'),
(19, 'i want to read operating system', 'https://www.tutorialspoint.com/operating_system/index.htm'),
(20, 'i want to read unix', 'https://www.tutorialspoint.com/unix/index.htm'),
(21, 'i want to read pc maintanance', 'https://doctorfeda.wordpress.com/students/pc-maintenance/lecture-notes/'),
(22, 'i want to read dbms', 'https://www.javatpoint.com/dbms-tutorial'),
(23, 'i want to read software engineering', 'https://www.javatpoint.com/software-engineering-tutorial'),
(24, 'i want to read fedora', 'https://www.javatpoint.com/fedora-operating-system'),
(25, 'i want to read networking', 'https://www.tutorialspoint.com/data_communication_computer_network/index.htm'),
(26, 'i want to read web fundamentals', 'https://www.tutorialspoint.com/web_developers_guide/web_basic_concepts.htm'),
(27, 'web fundamentals', 'https://www.tutorialspoint.com/web_developers_guide/web_basic_concepts.htm'),
(28, 'i want to plan my trip', 'https://www.makemytrip.com/'),
(29, 'book my bus', 'https://m.redbus.in/'),
(30, 'I want to read tatyache blog', 'https://tatyaguruji.w3spaces.com/');

-- --------------------------------------------------------

--
-- Table structure for table `usr`
--

CREATE TABLE `usr` (
  `sr` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usr`
--

INSERT INTO `usr` (`sr`, `Name`, `DOB`, `pass`) VALUES
(1, 'Pratik', '0000-00-00', ''),
(2, 'Pratik', '0000-00-00', ''),
(3, 'Pratik', '0000-00-00', ''),
(4, 'Pratik', '0000-00-00', ''),
(5, 'Pratik', '0000-00-00', ''),
(6, 'pratik', '2000-09-30', 'hbkj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `command`
--
ALTER TABLE `command`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usr`
--
ALTER TABLE `usr`
  ADD PRIMARY KEY (`sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `command`
--
ALTER TABLE `command`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `usr`
--
ALTER TABLE `usr`
  MODIFY `sr` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
