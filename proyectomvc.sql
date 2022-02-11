-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 11-02-2022 a las 08:07:36
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `laptops`
--

INSERT INTO `laptops` (`ID`, `Nombre`, `Marca`, `Precio`, `Cantidad`) VALUES
(1, 'Base de ventilador para laptop FN-40 2 USB 2.0 ', 'Marvo', 25.00, 23),
(2, 'Lector de tarjetas y hub USB 3.0 USB tipo C KCR500', 'Klip Xtreme', 24.95, 18);

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pc`
--

INSERT INTO `pc` (`ID`, `Nombre`, `Marca`, `Precio`, `Cantidad`) VALUES
(1, 'Kit 3 Fan ARGB Vortex 120MM', 'Cougar', 42.95, 5),
(2, 'Tarjeta de Sonido USB SB1', 'Sharkoon', 15.95, 34);

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `redes`
--

INSERT INTO `redes` (`ID`, `Nombre`, `Marca`, `Precio`, `Cantidad`) VALUES
(1, 'Router R4CM 300MBPS MI Router 4C', 'Xiaomi', 19.95, 10),
(2, 'Tarjeta USB3.0 Wifi Dualband Archer T4U Plus', 'TP-Link', 34.95, 23);

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
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Usuario`, `Nombre`, `Apellido`, `Email`, `Contraseña`, `Hash`, `Activo`) VALUES
(16, 'Jony-101', 'Jony Edenilson', 'Morales López', 'jony67lopezml@gmail.com', '12345678', NULL, 1),
(15, 'Jony-8', 'Jony Edenilson', 'Morales López', 'jony13lopezml@gmail.com', '12345678', NULL, 1),
(12, 'Jony-25', 'Jony Edenilson', 'Morales López', 'jony25lopezml@gmail.com', 'qwertyui', NULL, 1),
(13, 'Jony-8', 'Jony Edenilson', 'Morales López', 'jony09lopezml@gmail.com', '12345678', NULL, 1),
(14, 'Gissela-25', 'Jony Edenilson', 'Morales López', 'gisselaverenice@gmail.com', '12345678', NULL, 1),
(17, 'Jony-1012', 'Jony Edenilson', 'Morales López', 'jony673lopezml@gmail.com', '1234567885', NULL, 1),
(19, 'Gissela-8', 'Gissela Verenice', 'Serrano López', 'gissela8verenice@gmail.com', '87654321', NULL, 1),
(20, 'jonyL', 'Jony Edenilson', 'Morales Lopez', 'gisselaserrano14@gmail.com', 'bomba12345', NULL, 1),
(21, 'camo', 'camila alexandra', 'valdez vega', 'gil2sm@gmail.com', '12345b', NULL, 1),
(22, 'susa', 'Susan Abigail', 'Zelaya Flores', 'gissela18rm.gs@gmail.com', 'bomba12345', NULL, 1),
(23, 'will', 'william fernando', 'portan pineda', 'gissela25rm@hotmail.com', 'bomba12345', NULL, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
