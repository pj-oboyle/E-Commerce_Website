-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2021 at 11:47 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `g00398242`
--
CREATE DATABASE IF NOT EXISTS `g00398242` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `g00398242`;

-- --------------------------------------------------------

--
-- Table structure for table `comicbooks`
--

CREATE TABLE `comicbooks` (
  `comicID` smallint(3) NOT NULL,
  `comicTitle` varchar(50) NOT NULL,
  `issue` smallint(4) NOT NULL,
  `published` year(4) DEFAULT NULL,
  `publisher` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock` smallint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comicbooks`
--

INSERT INTO `comicbooks` (`comicID`, `comicTitle`, `issue`, `published`, `publisher`, `price`, `stock`) VALUES
(1, 'Batman Catwoman', 1, 2020, 'DC Comics', '4.99', 5),
(2, 'Knight of Vengeance', 106, 2016, 'DC Comics', '13.95', 3),
(3, 'Shadow Of The Bat', 35, 2015, 'DC Comics', '4.20', 2),
(4, 'The Next Batman', 1, 2012, 'DC Comics', '17.50', 6),
(5, 'Clown Hunter', 103, 2020, 'DC Comics', '5.20', 4),
(6, 'Batman Reborn', 1, 2015, 'DC Comics', '4.20', 2),
(7, 'Batman: Year 100', 88, 2017, 'DC Comics', '3.95', 5),
(8, 'The Black Mirror ', 10, 1988, 'DC Comics', '5.99', 3),
(9, 'Death Of The Family', 91, 1992, 'DC Comics', '4.20', 2),
(10, 'The Man Who Laughs', 1, 2020, 'DC Comics', '8.99', 5),
(11, 'The Killing Joke', 106, 2002, 'DC Comics', '3.99', 3),
(12, 'The War of Jokes', 1, 2011, 'DC Comics', '4.20', 2),
(13, 'Knightfall', 65, 1988, 'DC Comics', '7.99', 6),
(14, 'Gothic', 103, 2019, 'DC Comics', '5.20', 4),
(15, 'Strange Apparitions', 31, 2005, 'DC Comics', '4.50', 4),
(16, 'The Cult', 19, 1998, 'DC Comics', '4.99', 5),
(17, 'Batman & Robin', 14, 1997, 'DC Comics', '3.99', 3),
(18, 'A Death in the Family', 16, 2016, 'DC Comics', '4.20', 2),
(19, 'The Court of Owls', 106, 1982, 'DC Comics', '6.99', 3),
(20, 'Hush', 4, 2010, 'DC Comics', '7.20', 2);

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `userID` smallint(3) NOT NULL,
  `userName` varchar(25) NOT NULL,
  `userPass` varchar(25) NOT NULL,
  `firstName` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`userID`, `userName`, `userPass`, `firstName`) VALUES
(1, 'user', 'pass', 'Michael'),
(2, 'pj', '1234', 'Paul');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comicbooks`
--
ALTER TABLE `comicbooks`
  ADD PRIMARY KEY (`comicID`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comicbooks`
--
ALTER TABLE `comicbooks`
  MODIFY `comicID` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `userID` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
