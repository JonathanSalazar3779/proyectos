-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2018 a las 00:55:44
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `principal`
--

CREATE TABLE `principal` (
  `Id` int(20) NOT NULL,
  `Nombre_proyecto` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre_responsable` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `Prioridad` int(10) NOT NULL,
  `Points` int(10) NOT NULL,
  `Tipo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha_Creacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `principal`
--

INSERT INTO `principal` (`Id`, `Nombre_proyecto`, `Nombre_responsable`, `Descripcion`, `Prioridad`, `Points`, `Tipo`, `Fecha_Creacion`) VALUES
(1, 'Principiante', 'Jonathan Salazar', 'El proyecto, se trata de realizar una información acerca de un expediente clinico y formatear las bases de datos de las clinica para que no quede huella mia.', 3, 2, 'Planeado', '2018-04-23'),
(2, 'Sintesis', 'Jonathan Salazar', 'Realizar una sintesis del proyecto', 3, 1, 'Bug', '2018-04-26');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `principal`
--
ALTER TABLE `principal`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `principal`
--
ALTER TABLE `principal`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
