-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-04-2019 a las 23:24:47
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `arduino`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasesarduino`
--

CREATE TABLE `clasesarduino` (
  `id` int(11) NOT NULL,
  `nombre` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripcion1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `imagen` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clasesarduino`
--

INSERT INTO `clasesarduino` (`id`, `nombre`, `descripcion`, `descripcion1`, `imagen`) VALUES
(2, 'BRAZO ROBOTICO', '\r\n\r\n\r\n', '', 'brazo-robotico.png'),
(3, 'PROYECTO CON BANDA TRANSPORTADORA', '', '', 'faja.jpg'),
(4, 'ROBOT SEGUIDOR DE LINEA NEGRA Y ARDUINO', '', '', 'seguidor.jpg'),
(5, 'PROYECTO INVERNADERO CON CONTROL PID O CONTROLADOR DIFUSO.', '', '', 'invernadero.jpg'),
(6, 'PROYECTO DE CONTROL DE RIEGO AUTOMATICO', '', '', 'riego.jpg'),
(7, 'PIROMETRO DIGITAL CON ARDUINO', '', '', 'pirometro.jpg'),
(10, 'SENSOR DE TEMPERATURA LM35 Y LABVIEW', '', '', 'temperatura.jpg'),
(11, 'ENCENDIDO DE LED CON APP INVENTOR', '', '', 'moduloblue.jpg'),
(12, 'CONTROL DE VOZ CON ANDROID Y APP INVENTOR', '', '', 'moduloblue.jpg'),
(13, 'CONTROL DE SERVOMOTORES CON MODULO BLUETOOTH Y APP INVENTOR\r\n', '.', '', 'dos_servos.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clasesarduino`
--
ALTER TABLE `clasesarduino`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clasesarduino`
--
ALTER TABLE `clasesarduino`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
