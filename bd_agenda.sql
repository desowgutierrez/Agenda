-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2022 a las 10:03:42
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_datos_persona`
--

CREATE TABLE `tb_datos_persona` (
  `ID_TELEFONO` int(11) NOT NULL,
  `NOMBRES` varchar(255) NOT NULL,
  `APELLIDOS` varchar(255) NOT NULL,
  `DIRECCION` varchar(255) NOT NULL,
  `CORREO` varchar(255) NOT NULL,
  `FECHA_NAC` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_datos_persona`
--

INSERT INTO `tb_datos_persona` (`ID_TELEFONO`, `NOMBRES`, `APELLIDOS`, `DIRECCION`, `CORREO`, `FECHA_NAC`) VALUES
(1935157, 'hernandez', 'Voluptatem et duis ', 'Rem proident volupt', 'nyjufuw@mailinator.com', '1901-02-24'),
(2364359, 'walde', 'Blanditiis consequat', 'Duis esse ipsum nos', 'bykel@mailinator.com', '2069-06-10'),
(2934126, 'guti', 'Velit commodo excep', 'Non dolore sequi obc', 'civejagyr@mailinator.com', '2056-06-10'),
(3281803, 'claro', 'tigo', 'In minima nulla nisi', 'vanu@mailinator.com', '2016-05-25'),
(4089683, 'ocka', 'Nesciunt quia aut a', 'Eaque ducimus iusto', 'kywycamu@mailinator.com', '2026-08-08'),
(5555555, 'pppp', 'pppp', '', 'oscar@gmail.com', '1990-11-20'),
(20202020, 'juan', 'zam', '', 'bypi@mailinator.com', '1958-11-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_telefono`
--

CREATE TABLE `tb_telefono` (
  `ID_TELEFONO` int(11) NOT NULL,
  `TELEFONO_ID` int(11) NOT NULL,
  `TIPO_TELEFONO` varchar(20) DEFAULT NULL,
  `RFECHA` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_telefono`
--

INSERT INTO `tb_telefono` (`ID_TELEFONO`, `TELEFONO_ID`, `TIPO_TELEFONO`, `RFECHA`) VALUES
(1935157, 1935157, '2', '2022-11-28'),
(2364359, 2364359, '3', '2022-11-27'),
(2934126, 2934126, '1', '2022-11-27'),
(3281803, 3281803, '1', '2022-11-28'),
(4089683, 4089683, '2', '2022-11-27'),
(5555555, 5555555, '1', '2022-11-28'),
(20202020, 55555555, '1', '2022-11-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_tipo_telefono`
--

CREATE TABLE `tb_tipo_telefono` (
  `ID_TIPO` int(11) NOT NULL,
  `DESCRIPCION` varchar(50) NOT NULL,
  `ESTADO` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_tipo_telefono`
--

INSERT INTO `tb_tipo_telefono` (`ID_TIPO`, `DESCRIPCION`, `ESTADO`) VALUES
(1, 'PERSONAL', 'A'),
(2, 'REFERENCIA LABORAL', 'A'),
(3, 'REFERENCIA FAMILIAR', 'A'),
(4, 'LABORAL', 'I');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_datos_persona`
--
ALTER TABLE `tb_datos_persona`
  ADD PRIMARY KEY (`ID_TELEFONO`);

--
-- Indices de la tabla `tb_telefono`
--
ALTER TABLE `tb_telefono`
  ADD PRIMARY KEY (`ID_TELEFONO`);

--
-- Indices de la tabla `tb_tipo_telefono`
--
ALTER TABLE `tb_tipo_telefono`
  ADD PRIMARY KEY (`ID_TIPO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_tipo_telefono`
--
ALTER TABLE `tb_tipo_telefono`
  MODIFY `ID_TIPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
