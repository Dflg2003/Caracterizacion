-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-12-2022 a las 19:59:46
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formulario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_personales`
--

CREATE TABLE `datos_personales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `td` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `documento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `programa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parentesco_emergencia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_emergencia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular_emergencia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta7` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta8` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta9` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta10` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta11` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta12` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta13` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta14` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta15` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta16` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta17` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta18` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta19` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta20` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta21` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta22` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta23` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta24` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta25` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta26` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta27` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta28` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta29` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta30` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta31` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta32` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta33` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE `respuestas` (
  `id_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta34` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta35` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta36` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta37` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta38` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta39` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta40` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta41` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta42` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta43` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta44` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta45` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta46` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta47` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta48` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta49` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta50` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta51` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta52` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta53` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta54` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta55` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta56` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta57` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta58` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta59` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta60` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta61` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta62` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta63` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta64` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta65` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta66` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta67` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta68` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta69` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta70` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta71` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta72` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta73` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta74` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta75` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta76` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta77` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta78` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta79` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta80` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta81` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta82` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta83` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta84` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta85` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta86` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta87` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta88` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta89` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta90` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta91` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta92` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
