-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 09, 2022 at 12:00 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dealerdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `CarType` varchar(50) NOT NULL,
  `Make` varchar(50) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Milleage` varchar(20) NOT NULL,
  `Fuel` varchar(50) NOT NULL,
  `EngineSize` varchar(20) NOT NULL,
  `MotorPower` varchar(20) NOT NULL,
  `Gearbox` varchar(50) NOT NULL,
  `SeatNumber` varchar(2) NOT NULL,
  `Doors` varchar(3) NOT NULL,
  `Color` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`Id`, `CarType`, `Make`, `Model`, `Milleage`, `Fuel`, `EngineSize`, `MotorPower`, `Gearbox`, `SeatNumber`, `Doors`, `Color`) VALUES
(1, 'Used vehicle', 'Toyota', 'Camry 2018', '5000 km', 'Diesel', '1800 cc', '85 hp', 'Automatic', '4', '4', 'Red'),
(2, 'New vehicle', 'Honda', 'Fit 2015', '0 km', 'Diesel', '1400 cc', '80 hp', 'Automatic', '4', '4', 'White');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
