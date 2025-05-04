-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 31-07-2024 a las 11:38:12
-- Versión del servidor: 5.7.24
-- Versión de PHP: 8.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdsanpablo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marco_alumno`
--

CREATE TABLE `marco_alumno` (
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tlf` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `curso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `marco_alumno`
--

INSERT INTO `marco_alumno` (`nombre`, `apellidos`, `dni`, `mail`, `tlf`, `localidad`, `curso`) VALUES
('guillermo', 'silverhand', '45632145', 'verosp.msm@hotmail.com', '666', 'night city', 'dar opor saco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marco_contacto`
--

CREATE TABLE `marco_contacto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tlf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mensaje` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marco_cursosdesempleados`
--

CREATE TABLE `marco_cursosdesempleados` (
  `codcertificado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nivel` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `horas` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `practicas` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disponible` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ver` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marco_cursostrabajadores`
--

CREATE TABLE `marco_cursostrabajadores` (
  `curso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `horas` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disponible` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ver` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marco_dudas`
--

CREATE TABLE `marco_dudas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interes` enum('cursos para trabajadores','cursos para desempleados') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marco_profesor`
--

CREATE TABLE `marco_profesor` (
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tlf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aula` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `curso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `marco_alumno`
--
ALTER TABLE `marco_alumno`
  ADD PRIMARY KEY (`dni`) USING BTREE;

--
-- Indices de la tabla `marco_contacto`
--
ALTER TABLE `marco_contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marco_cursosdesempleados`
--
ALTER TABLE `marco_cursosdesempleados`
  ADD PRIMARY KEY (`codcertificado`);

--
-- Indices de la tabla `marco_cursostrabajadores`
--
ALTER TABLE `marco_cursostrabajadores`
  ADD PRIMARY KEY (`curso`);

--
-- Indices de la tabla `marco_dudas`
--
ALTER TABLE `marco_dudas`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `marco_profesor`
--
ALTER TABLE `marco_profesor`
  ADD PRIMARY KEY (`nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `marco_contacto`
--
ALTER TABLE `marco_contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marco_dudas`
--
ALTER TABLE `marco_dudas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
