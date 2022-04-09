-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-04-2022 a las 23:59:08
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dealerdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cars`
--

CREATE TABLE `cars` (
  `Id` int(11) NOT NULL,
  `CarImg` varchar(300) NOT NULL,
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
  `Color` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cars`
--

INSERT INTO `cars` (`Id`, `CarImg`, `CarType`, `Make`, `Model`, `Milleage`, `Fuel`, `EngineSize`, `MotorPower`, `Gearbox`, `SeatNumber`, `Doors`, `Color`) VALUES
(1, '../../../assets/dist/images/toyota.jfif', 'Used vehicle', 'Toyota', 'Camry 2018', '5000 km', 'Diesel', '1800 cc', '85 hp', 'Automatic', '4', '4', 'Red'),
(2, '../../../assets/dist/images/honda.jfif', 'New vehicle', 'Honda', 'Fit 2015', '0 km', 'Diesel', '1400 cc', '80 hp', 'Automatic', '4', '4', 'White'),
(3, '../../../assets/dist/images/porch.jpg', 'New vehicle', 'Porsche', 'Carrera GT 2003', '0 km', 'Diesel', '1800 cc', '604 hp', 'Automatic', '2', '2', 'White'),
(4, '../../../assets/dist/images/lambor.jpg', 'New vehicle', 'Lamborghini', 'Veneno 2013', '0 km', 'Diesel', '1800 cc', '509 hp', 'Automatic', '2', '2', 'Black'),
(5, '../../../assets/dist/images/mustan.jfif', 'New vehicle', 'Mustang', 'GT 2017', '4000 km', 'Diesel', '1800 cc', '509 hp', 'Automatic', '2', '2', 'Red'),
(6, '../../../assets/dist/images/supra.jfif', 'User vehicle', 'Supra', 'MK5 2022', '0 km', 'Diesel', '1800 cc', '259 hp', 'Automatic', '2', '2', 'Yellow');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cars`
--
ALTER TABLE `cars`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
