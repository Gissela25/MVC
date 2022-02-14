-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 13-02-2022 a las 21:20:32
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

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

DROP TABLE IF EXISTS `laptops`;
CREATE TABLE IF NOT EXISTS `laptops` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Marca` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Precio` float(10,2) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `laptops`
--

INSERT INTO `laptops` (`ID`, `Nombre`, `Marca`, `Precio`, `Cantidad`) VALUES
(3, 'Base de ventilador para laptop FN-40 2 USB 2.0 ', 'Marvo', 25.00, 23),
(4, 'Adaprador de USB 3.0 a RJ45 XTC373', 'Argom', 20.00, 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pc`
--

DROP TABLE IF EXISTS `pc`;
CREATE TABLE IF NOT EXISTS `pc` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Marca` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Precio` float(10,2) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pc`
--

INSERT INTO `pc` (`ID`, `Nombre`, `Marca`, `Precio`, `Cantidad`) VALUES
(3, 'Kit 3 Fan ARGB Vortex 120MM', 'Cougar', 42.95, 8),
(4, 'Tarjeta de Sonido USB SB1', 'Sharkoon', 15.95, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes`
--

DROP TABLE IF EXISTS `redes`;
CREATE TABLE IF NOT EXISTS `redes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Marca` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Precio` float(10,2) NOT NULL,
  `Cantidad` int(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `redes`
--

INSERT INTO `redes` (`ID`, `Nombre`, `Marca`, `Precio`, `Cantidad`) VALUES
(7, 'Router R4CM 300MBPS MI Router 4C', 'Xiaomi', 19.95, 7),
(8, 'Tarjeta PCI-E Eternet TG4368', 'TP-Link', 17.95, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Usuario` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Nombre` varchar(65) COLLATE utf8_unicode_ci NOT NULL,
  `Apellido` varchar(65) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Contraseña` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Hash` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Activo` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Usuario`, `Nombre`, `Apellido`, `Email`, `Contraseña`, `Hash`, `Activo`) VALUES
(14, 'Gissela-25', 'Jony Edenilson', 'Morales López', 'gisselaverenice@gmail.com', '12345678', NULL, 1),
(24, 'Camila-11', 'camila alexandra', 'valdez vega', 'serranogissela0@gmail.com', 'hola12345', NULL, 1),
(19, 'Gissela-8', 'Gissela Verenice', 'Serrano López', 'gissela8verenice@gmail.com', '87654321', NULL, 1),
(25, 'Luis-2000', 'Luis Fernando', 'Ulloa Giron', 'luisfer162000@gmail.com', 'hola12345', NULL, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
