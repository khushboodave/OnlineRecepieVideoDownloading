-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2018 at 10:11 AM
-- Server version: 10.1.29-MariaDB
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rating_id` bigint(10) NOT NULL,
  `recepie_name` varchar(100) DEFAULT NULL,
  `rating` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`rating_id`, `recepie_name`, `rating`) VALUES
(3, 'Red Chutney For Masla Dosa', '3'),
(5, 'Chickoo Coffee Walnut ice Cream', '2'),
(6, 'Chickoo Coffee Walnut ice Cream', '4');

-- --------------------------------------------------------

--
-- Table structure for table `recepie`
--

CREATE TABLE `recepie` (
  `recepie_id` bigint(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `method` varchar(500) NOT NULL,
  `ingredients` varchar(500) NOT NULL,
  `cooking_time` varchar(100) NOT NULL,
  `preparation_time` varchar(100) NOT NULL,
  `video` varchar(200) NOT NULL,
  `cat` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recepie`
--

INSERT INTO `recepie` (`recepie_id`, `name`, `method`, `ingredients`, `cooking_time`, `preparation_time`, `video`, `cat`) VALUES
(26, 'Chickoo Coffee Walnut ice Cream', 'Add sapodilla pulp and crushed walnuts and mixed.', 'Walnuts crushed 1/2 cup\r\nSapodilla (chickoo) pulp 1 cup\r\nMilk 1 cup\r\nFresh cream 1 cup\r\nMilk powder 1 cup\r\nPowdered sugar 1/2 cup', '2 minutes', '5 Minutes', 'Coffee and Walnut Ice Cream - Cooking with California Walnuts - Sanjeev Kapoor Khazana.mp4', 'nonveg'),
(28, 'Red Chutney For Masla Dosa', 'Transfer into a bowl and serve with Mysore masala ', '\r\nSplit Bengal gram (chana dal) Â½ cup\r\nGarlic cloves 8\r\nDried red chillies broken, 5-6\r\nLemon juice 1 tablespoon\r\nSalt to taste', '5 minutes', '5 Minutes', 'Red Chutney for Masala Dosa - YouTube (360p).mp4', 'vegg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `recepie`
--
ALTER TABLE `recepie`
  ADD PRIMARY KEY (`recepie_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rating_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `recepie`
--
ALTER TABLE `recepie`
  MODIFY `recepie_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
