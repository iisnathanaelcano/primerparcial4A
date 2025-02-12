-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-02-2025 a las 20:04:00
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `basededatos345`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `haikyu`
--

CREATE TABLE `haikyu` (
  `id` int(10) NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `apellido` varchar(10) NOT NULL,
  `numero` int(10) NOT NULL,
  `posicion` varchar(10) NOT NULL,
  `equipo` varchar(10) NOT NULL,
  `escuela` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `haikyu`
--

INSERT INTO `haikyu` (`id`, `nombre`, `apellido`, `numero`, `posicion`, `equipo`, `escuela`) VALUES
(1, 'kiyoomi', 'kozume', 15, 'setter', 'nekoman', 'nekoman hi'),
(2, 'hinata', 'shoyo', 10, 'bloqueador', 'karasuno', 'karasuno'),
(3, 'oikawa', 'toru', 1, 'armador', 'aoba johsa', 'aoba johsa'),
(4, 'kageyama', 'tobio', 9, 'colocador', 'karasuno', 'karasuno'),
(5, 'kei', 'tsukkishim', 11, 'bloqueador', 'karasuno', 'karasuno'),
(6, 'tadashi', 'yamaguchi', 12, 'bloqueador', 'karasuno', 'karasuno'),
(7, 'wakatoshi', 'ushijima', 1, 'capitan', 'shiratoriz', 'shiratoriz'),
(8, 'satori', 'tendo', 5, 'bloqueador', 'shiratoriz', 'shiratoriz'),
(9, 'kuroo', 'tetsudo', 1, 'capitan', 'nekoman', 'nekoman hi'),
(10, 'lev', 'haiba', 11, 'bloqueador', 'nekoman', 'nekoman hi');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `haikyu`
--
ALTER TABLE `haikyu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `haikyu`
--
ALTER TABLE `haikyu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
