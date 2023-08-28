-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2018 at 02:44 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(255) NOT NULL,
  `admin_id` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `admin_id`, `admin_pass`) VALUES
(1, 'asd', 'asd'),
(2, 'jkl', 'jkl'),
(3, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `bookingdetails`
--

CREATE TABLE `bookingdetails` (
  `b_id` int(5) NOT NULL,
  `h_id` int(5) NOT NULL,
  `HotelName` varchar(20) NOT NULL,
  `Booker` varchar(50) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `ContactNo` varchar(20) NOT NULL,
  `no_rooms` int(5) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookingdetails`
--

INSERT INTO `bookingdetails` (`b_id`, `h_id`, `HotelName`, `Booker`, `Name`, `ContactNo`, `no_rooms`, `Status`) VALUES
(4, 1, 'X', 'shafi', 'ss', '01679537677', 5, 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `h_id` int(5) NOT NULL,
  `h_name` varchar(20) NOT NULL,
  `Booked_room` int(5) NOT NULL,
  `Total_room` int(5) NOT NULL,
  `Location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`h_id`, `h_name`, `Booked_room`, `Total_room`, `Location`) VALUES
(1, 'X', 5, 100, 'Cox\'s Bazaar'),
(2, 'Y', 0, 100, 'Cox\'s Bazaar'),
(3, 'A', 0, 100, 'Rangamati'),
(4, 'B', 0, 100, 'Rangamati'),
(5, 'Q', 0, 100, 'Sajek'),
(6, 'W', 0, 100, 'Sajek'),
(7, 'E', 0, 100, 'Jaflong'),
(8, 'R', 0, 100, 'Jaflong'),
(9, 'T', 0, 100, 'Sundarbans'),
(10, 'U', 0, 100, 'Sundarbans'),
(11, 'O', 0, 100, 'St.Martin'),
(12, 'P', 0, 100, 'St.Martin'),
(13, 'A', 0, 100, 'Lawachara'),
(14, 'S', 0, 100, 'Lawachara'),
(15, 'F', 0, 100, 'Foy\'s Lake'),
(16, 'G', 0, 100, 'Foy\'s Lake'),
(21, 'H', 0, 200, 'Cox\'s Bazaar');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `p_id` int(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `number_of_visitors` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`p_id`, `p_name`, `number_of_visitors`) VALUES
(1, 'Cox\'s Bazaar', 25000),
(2, 'Jaflong', 15000),
(3, 'Rangamati', 1267),
(4, 'Sajek', 250),
(5, 'Sundarbans', 9875),
(6, 'St. Martins Islands', 5500),
(7, 'Lawachara', 12547),
(8, 'Foy\'s Lake', 98632);

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` int(11) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `First_Name`, `Last_Name`, `Email`, `Comment`) VALUES
(1, 'Arafat', 'Chowdhury', 'chowdhury@arafat.com', 'Sir, i would like to the prices of the hotel named \"DIg Bijoy\"\r\n\r\nTIA'),
(2, 'gop', 'asdsad', 'asd@gmail.com', 'how are u'),
(3, 'safasd', 'asdasd', 'sdsad@gmail.com', 'asdasdasd'),
(4, 'sdfsf', 'sdfsf', 'sfsf@sdfsdf.com', 'sdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `t_id` int(11) NOT NULL,
  `t_des` varchar(255) NOT NULL,
  `t_time_date` date NOT NULL,
  `t_no` varchar(255) NOT NULL,
  `t_price` int(255) NOT NULL,
  `t_dep` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `user_id` int(50) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `ContactNo` int(12) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`user_id`, `FirstName`, `LastName`, `Username`, `Password`, `ContactNo`, `Email`) VALUES
(15, 'tamanna', 'tamanna', 'afrin', 'afrin', 215622, 'tamanna@tamanna.com'),
(16, 'al', 'shafi', 'shafi', 'shafi', 45612, 'shafi@gmail.com'),
(17, 'Safayet-Bin', 'Azam', 'rafa', 'rafa', 1679537677, 'prangonsafayet@gmail.com'),
(18, 'ss', 'ss', 'ss', 'ss', 1712517280, 'ss@ff.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`,`admin_id`,`admin_pass`);

--
-- Indexes for table `bookingdetails`
--
ALTER TABLE `bookingdetails`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`,`Email`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`user_id`,`Username`,`ContactNo`,`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bookingdetails`
--
ALTER TABLE `bookingdetails`
  MODIFY `b_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `h_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `p_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
