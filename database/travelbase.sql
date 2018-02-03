-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 03, 2018 at 06:04 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `travel`
--

CREATE TABLE `travel` (
  `id` int(11) NOT NULL,
  `country` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `stay` varchar(140) NOT NULL,
  `eat` varchar(140) NOT NULL,
  `do` varchar(140) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `travel`
--

INSERT INTO `travel` (`id`, `country`, `city`, `stay`, `eat`, `do`) VALUES
(10, 'Canada', 'Montreal', 'Downtown', 'Ernie\\\'s', 'Walk around Old Montreal'),
(11, 'Colombia', 'Bogota ', 'BogotÃ¡ Plaza Summit Hotel', 'Marketplace Eatery', 'Columbia National Museum '),
(12, 'Israel', 'Jerusalem ', 'The Citadel ', 'The Shook', 'Western Wall'),
(13, 'United States', 'Orlando ', 'The Dolphin', 'Kres Chophouse', 'Downtown Disney '),
(14, 'United States', 'New York', 'The Plaza', 'Chelsea Market', 'Highline '),
(15, 'United States', 'New Orleans ', 'Hilton on Canal', ' Shaya', 'Bourbon Street'),
(16, 'Italy ', 'Rome', 'The Yellow Hostel', 'La Pergola', 'Colosseum'),
(17, 'England', 'London ', 'YHA London Central Hostel', 'Padella', 'Big Ben'),
(18, 'Spain', 'Madrid', 'Las Musas Hostel Madrid', 'Takos Al Pastor', 'Retiro Park '),
(19, 'Mexico ', 'Cancun ', 'Hostel Quetzal', 'Calypso\\\'s', 'Beaches');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `travel`
--
ALTER TABLE `travel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `travel`
--
ALTER TABLE `travel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
