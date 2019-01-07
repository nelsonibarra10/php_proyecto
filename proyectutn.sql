-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-12-2018 a las 22:25:01
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectutn`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivo`
--

CREATE TABLE `archivo` (
  `id` int(11) NOT NULL,
  `producto` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `imagen` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(300) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `archivo`
--

INSERT INTO `archivo` (`id`, `producto`, `imagen`, `fecha`, `descripcion`) VALUES
(4, 'Muestras acrilico', 'Acrilico-Laminado.jpg', '22 de diciembre 2018', 'laminado de acrÃ­lico'),
(5, 'Escalera', 'escalera.jpg', '22 de diciembre 2018', 'escalera acrÃ­lico..');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(30) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` int(40) NOT NULL,
  `mensaje` varchar(400) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `nombre`, `apellido`, `correo`, `telefono`, `mensaje`) VALUES
(2, 'nelson', 'ibarra', 'nelnaik10@gmail.com', 1141989537, 'h'),
(12, 'Ariel ', 'ibarra', 'ari@gmail.com', 44567566, 'si'),
(15, 'nel', 'ibarra', 'bbbb@hotmail.com', 44535353, 'dsfsdfsdf'),
(16, 'nels', 'arisis', 'nelson@hotmail.com', 33344423, 'hola'),
(17, 'ari', 'iba', 'nelnaik10@gmail.com', 1141989537, 'hasta'),
(18, 'ariel', 'ibarra', 'nelnaik10@gmail.com', 1141989537, 'hola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `archivo`
--
ALTER TABLE `archivo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `archivo`
--
ALTER TABLE `archivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
