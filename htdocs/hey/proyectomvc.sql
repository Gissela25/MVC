-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-02-2022 a las 10:02:38
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectomvc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laptops`
--

CREATE TABLE `laptops` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Marca` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Precio` float(10,2) NOT NULL,
  `Cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `laptops`
--

INSERT INTO `laptops` (`ID`, `Nombre`, `Marca`, `Precio`, `Cantidad`) VALUES
(1, 'DDR3', 'Kingston HyperX Fury', 78.00, 5),
(2, 'Pantalla', 'ASUS', 54.00, 22);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pc`
--

CREATE TABLE `pc` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Marca` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Precio` float(10,2) NOT NULL,
  `Cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pc`
--

INSERT INTO `pc` (`ID`, `Nombre`, `Marca`, `Precio`, `Cantidad`) VALUES
(2, 'Pantalla', 'ASUS', 120.00, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes`
--

CREATE TABLE `redes` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Marca` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Precio` float NOT NULL,
  `Cantidad` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `redes`
--

INSERT INTO `redes` (`ID`, `Nombre`, `Marca`, `Precio`, `Cantidad`) VALUES
(2, 'usb-wifi', 'DELL', 12, 12),
(7, 'Pantalla', 'ASUS', 120, 23);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `laptops`
--
ALTER TABLE `laptops`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `pc`
--
ALTER TABLE `pc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `redes`
--
ALTER TABLE `redes`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `laptops`
--
ALTER TABLE `laptops`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pc`
--
ALTER TABLE `pc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `redes`
--
ALTER TABLE `redes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
