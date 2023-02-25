-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2023 at 02:32 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iliria`
--
-- --------------------------------------------------------
--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(10) NOT NULL,
  `room_id` int(2) UNSIGNED NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `occupancy` int(2) NOT NULL,
  `total` float NOT NULL,
  `quantity` int(10) NOT NULL,
  `title` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `post_code` int(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `arrival` varchar(50) DEFAULT NULL,
  `comments` varchar(50) DEFAULT NULL,
  `card_type` varchar(50) NOT NULL,
  `card_number` int(50) NOT NULL,
  `card_holder` varchar(50) NOT NULL,
  `security_code` varchar(50) NOT NULL,
  `expiration` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `room_id`, `checkin`, `checkout`, `occupancy`, `total`, `quantity`, `title`, `name`, `last_name`, `email`, `telephone`, `mobile`, `address`, `city`, `post_code`, `country`, `arrival`, `comments`, `card_type`, `card_number`, `card_holder`, `security_code`, `expiration`) VALUES
(1, 10, '2023-02-15', '2023-02-17', 2, 67, 1, 'Mr', 'Jurgen', 'Xibrraku', 'xibrrakujurgen@gmail', '0682715097', '', 'Don Bosko', 'Tirana', 1001, 'Albania', '', '', 'mastercard', 1231321, '21321321', '1231321', '2131');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(500) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `message`, `time`) VALUES
(1, 'Jurgen Xibrraku', 'xibrrakujurgen@gmail.com', 'Review', '', '2023-02-10 16:41:20'),
(2, 'Elon Musk', 'elonmusk@mail.com', 'Artificial Intelligence', 'AI cannot take our jobs', '2023-02-10 16:42:11'),
(6, 'Jurgen Xibrraku', 'xibrrakujurgen@gmail.com', 'Job Application', 'test', '2023-02-10 17:03:45');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(2) UNSIGNED NOT NULL,
  `type` varchar(100) NOT NULL,
  `bedding` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `room_qnty` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `booked` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `type`, `bedding`, `image`, `room_qnty`, `available`, `booked`, `price`) VALUES
(1, 'Deluxe Double or Twin Room with Sea View', '2 single beds or 1 large double bed', 'images/1.jpg', 10, 10, 0, 38),
(2, 'Triple Room with Sea View', '1 single bed and\r\n1 large double bed', 'images/2.jpg', 4, 4, 0, 38),
(3, 'Deluxe Suite with Sea View', 'Living room: 1 sofa bed\r\nBedroom: 1 large double bed', 'images/3.jpg', 6, 6, 0, 38),
(4, 'Quadruple Room', '2 single beds\r\nand 1 large double bed', 'images/4.jpg', 7, 7, 0, 38),
(5, 'Double Room with Sea View', '1 large double bed', 'images/5.jpg', 1, 1, 0, 51),
(6, 'Double Room with Balcony', '1 large double bed', 'images/6.jpg', 2, 2, 0, 42),
(7, 'Triple Room with Balcony', '1 single bed\r\nand\r\n1 large double bed', 'images/7.jpg', 3, 3, 0, 43),
(8, 'Double or Twin Room', '2 single beds or 1 large double bed', 'images/8.jpg', 2, 2, 0, 47),
(9, 'Double or Twin Room with Balcony', '2 single beds or 1 large double bed', 'images/9.jpg', 2, 2, 0, 300),
(10, 'Quadruple Room with Sea View', '1 single bed and 1 double bed and 1 sofa bed', 'images/10.jpg', 1, 1, 0, 67);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
