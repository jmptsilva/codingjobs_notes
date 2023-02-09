-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 28, 2022 at 01:03 PM
-- Server version: 8.0.31-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spaceship`
--

-- --------------------------------------------------------

--
-- Table structure for table `ships`
--

CREATE TABLE `ships` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `picture` varchar(255) NOT NULL,
  `fast_drive` tinyint(1) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ships`
--

INSERT INTO `ships` (`id`, `name`, `price`, `picture`, `fast_drive`, `description`) VALUES
(1, 'Hurricane', 1000000, 'hurricane.jpg', 0, 'Big things do come in small packages: the Hurricane is a fighting spacecraft that packs a deadly punch into a slight fuselage.'),
(2, 'Terrapin', 200000000, 'terrapin.jpg', 0, 'Outfitted with long-range scanners and encased in heavy armor and oversized shields, the U4A-3 Terrapin can face potentially hazardous circumstances with confidence, making it the ultimate combat scout and reconnaissance vehicle, at least according to Anvil.'),
(3, 'Mustang', 2500000, 'mustang.jpg', 1, 'Consolidated Outland teamed up with custom tuning company Accelerated Mass Design to create a limited edition racer that features a ramped up fuel intake for faster recycling of the ship’s already impressive boost system. '),
(4, 'Javelin', 10000000, 'javelin.jpg', 1, 'Designed for use by the UEE military, the Javelin is a massive, modular capital ship that can be appropriated for entrepreneurial use. With a detailed interior, plenty of modular room options and a high crew capacity, the Javelin is a ship that has made a name for itself in a variety of roles.'),
(14, 'TestShip', 345000000, 'testship.jpg', 1, 'The fastest test space ship ever.'),
(16, 'TestShip2', 345000000, 'testship2.jpg', 0, 'Mediocre ship. Too expensive.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ships`
--
ALTER TABLE `ships`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ships`
--
ALTER TABLE `ships`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
