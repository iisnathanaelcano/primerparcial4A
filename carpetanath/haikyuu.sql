-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-02-2025 a las 20:20:04
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
-- Base de datos: `haikyuu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personajes`
--

CREATE TABLE `personajes` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(11) NOT NULL,
  `Apellido` varchar(11) NOT NULL,
  `mumero` varchar(11) NOT NULL,
  `posicion` varchar(11) NOT NULL,
  `equipo` varchar(11) NOT NULL,
  `escuela` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personajes`
--

INSERT INTO `personajes` (`id`, `Nombre`, `Apellido`, `mumero`, `posicion`, `equipo`, `escuela`) VALUES
(1, 'shoyo', 'hinata', '10', 'bloqueador ', 'karasuno', 'karasuno'),
(2, 'tobio', 'kageyama', '9', 'colocador', 'karasuno', 'karasuno'),
(3, 'yu', 'nishinoya', '4', 'libero', 'karasuno', 'karasuno'),
(4, 'Ryūnosuke', 'tanaka', '5', 'receptor', 'karasuno', 'karasuno'),
(5, 'kei', 'tsukishima', '11', 'bloqueador ', 'karasuno', 'karasuno'),
(6, 'tadashi', 'yamaguchi', '12', 'sacador', 'karasuno', 'karasuno'),
(7, 'koshi', 'sugawara', '2', 'colocador', 'karasuno', 'karasuno');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personajes`
--
ALTER TABLE `personajes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personajes`
--
ALTER TABLE `personajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
