-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-04-2023 a las 07:10:18
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mbdmoreliaoscori`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE `inscripcion` (
  `ciestudiante` int(10) NOT NULL,
  `sigla` varchar(10) NOT NULL,
  `nota1` int(10) NOT NULL,
  `nota2` int(10) NOT NULL,
  `nota3` int(10) NOT NULL,
  `notafinal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inscripcion`
--

INSERT INTO `inscripcion` (`ciestudiante`, `sigla`, `nota1`, `nota2`, `nota3`, `notafinal`) VALUES
(765433, 'INF121', 56, 54, 34, 34),
(765433, 'INF121', 56, 54, 34, 34),
(765433, 'INF121', 56, 54, 34, 34),
(765433, 'INF121', 56, 54, 34, 34),
(765433, 'INF121', 56, 54, 34, 34),
(765433, 'INF121', 56, 54, 34, 34),
(765467, 'INF121', 34, 56, 56, 51),
(765467, 'INF121', 34, 56, 56, 51),
(765467, 'INF121', 34, 56, 56, 51),
(765467, 'INF121', 34, 56, 56, 51),
(765467, 'INF121', 34, 56, 56, 51),
(765487, 'INF131', 54, 54, 67, 51),
(765545, 'INF131', 54, 54, 67, 51),
(7654765, 'INF131', 54, 54, 67, 51),
(65335442, 'INF131', 54, 54, 67, 51),
(65335446, 'INF131', 54, 54, 67, 50),
(65335564, 'INF131', 54, 54, 67, 51);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` int(13) NOT NULL,
  `ci` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fechanac` varchar(10) NOT NULL,
  `telefono` int(10) NOT NULL,
  `departamento` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `ci`, `nombre`, `fechanac`, `telefono`, `departamento`) VALUES
(3, 765487, 'mmoscori1', '12/09/1997', 6535784, 3),
(4, 765545, 'mmoscori1', '12/09/1997', 6535784, 2),
(5, 7654765, 'mmoscori1', '12/09/1997', 6535784, 3),
(6, 65335442, 'mmoscori4', '10/09/1998', 67675456, 2),
(7, 65335443, 'mmoscori', '10/09/1998', 6767543, 7),
(8, 65335446, 'mmoscori3', '10/09/1998', 6767586, 1),
(9, 65335448, 'mmoscori5', '10/09/1998', 6767598, 2),
(10, 65335564, 'mmoscori2', '10/09/1998', 6767545, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ci` int(10) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `rol` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ci`, `usuario`, `password`, `rol`) VALUES
(8432286, 'morelia', '5498Morelia', ''),
(98768576, 'director', '123456', 'director');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ci`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ci` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98768577;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
