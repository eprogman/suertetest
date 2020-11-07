-- phpMyAdmin SQL Dump
-- version 3.4.4
-- http://www.phpmyadmin.net
--
-- Servidor: mysql.webcindario.com
-- Tiempo de generación: 16-04-2019 a las 16:25:30
-- Versión del servidor: 5.6.39
-- Versión de PHP: 5.6.40-1+0~20190111135457.9+jessie~1.gbp5f42c9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `pagina336`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `Apellido` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `Usuario` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `Password` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `Imagen` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `Nivel` text COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `Nombre`, `Apellido`, `Usuario`, `Password`, `Imagen`, `Nivel`) VALUES
(1, 'Jorge', 'Manzanares', 'arduino', 'arduino0102', 'imagen.jpg', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
