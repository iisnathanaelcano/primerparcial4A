-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-02-2025 a las 18:43:26
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
-- Base de datos: `informacion1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inff`
--

CREATE TABLE `inff` (
  `id` int(11) NOT NULL,
  `nombre` varchar(11) NOT NULL,
  `fecha de nacimiento` varchar(11) NOT NULL,
  `cuidad` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inff`
--

INSERT INTO `inff` (`id`, `nombre`, `fecha de nacimiento`, `cuidad`) VALUES
(1, 'Sergio Mich', '26/01/90', 'guadalajara'),
(2, 'patricio O\'', '06/03/99', 'Monterrey'),
(3, 'Luis enriqu', '02/08/01', 'michoacan'),
(4, 'Osacar Isaa', '09/03/79', 'Guadalajara'),
(5, 'Valentina f', '14/02/08', 'CdMX'),
(6, 'Fernnado Do', '22/11/08', 'Tampico'),
(7, 'Uriel parra', '07/04/93', 'Puebla'),
(8, 'Mauricio gu', '18/07/17', 'Puebla'),
(9, 'Elba helena', '07/06/06', 'baja califo'),
(10, 'alan marque', '9/03/08', 'reynosa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inff`
--
ALTER TABLE `inff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inff`
--
ALTER TABLE `inff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
