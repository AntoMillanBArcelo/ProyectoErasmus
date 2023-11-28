-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2023 a las 14:10:54
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `erasmus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `baremacion`
--

CREATE TABLE `baremacion` (
  `dni` varchar(9) NOT NULL,
  `id_convocatoria` int(11) DEFAULT NULL,
  `id_item` int(11) DEFAULT NULL,
  `nota` int(11) DEFAULT NULL,
  `url` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidatos`
--

CREATE TABLE `candidatos` (
  `DNI` varchar(9) NOT NULL,
  `fecha_nacimiento` datetime DEFAULT NULL,
  `tutor_dni` varchar(9) DEFAULT NULL,
  `apellido1` varchar(100) DEFAULT NULL,
  `apellido2` varchar(100) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `contraseña` varchar(50) DEFAULT NULL,
  `curso` varchar(40) DEFAULT NULL,
  `tlf` varchar(20) DEFAULT NULL,
  `correo` varchar(300) DEFAULT NULL,
  `domicilio` varchar(500) DEFAULT NULL,
  `rol` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidatos_convocatoria`
--

CREATE TABLE `candidatos_convocatoria` (
  `id_convocatoria` int(11) NOT NULL,
  `DNI` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocatorias`
--

CREATE TABLE `convocatorias` (
  `id_convocatoria` int(11) NOT NULL,
  `num_movilidades` int(11) DEFAULT NULL,
  `tipo` varchar(30) DEFAULT NULL,
  `fecha_inicio` datetime DEFAULT NULL,
  `fecha_fin` datetime DEFAULT NULL,
  `fechaInicioPruebas` datetime DEFAULT NULL,
  `fechaFinPruebas` datetime DEFAULT NULL,
  `fechaListadoProvisional` datetime DEFAULT NULL,
  `fechaListadoDefinitivo` datetime DEFAULT NULL,
  `codigo_proyecto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocatoria_baremable`
--

CREATE TABLE `convocatoria_baremable` (
  `id_convocatoria` int(11) DEFAULT NULL,
  `id_baremo` int(11) DEFAULT NULL,
  `maximo` int(11) DEFAULT NULL,
  `requisito` tinyint(1) DEFAULT NULL,
  `minimo` int(11) DEFAULT NULL,
  `aportaalumno` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocatoria_baremables_idioma`
--

CREATE TABLE `convocatoria_baremables_idioma` (
  `id_convocatoria` int(11) DEFAULT NULL,
  `id_idioma` int(11) DEFAULT NULL,
  `id_baremo` int(11) DEFAULT NULL,
  `nota_idioma` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destinatarios`
--

CREATE TABLE `destinatarios` (
  `codigo_grupo` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destinatarios_convocatorias`
--

CREATE TABLE `destinatarios_convocatorias` (
  `id_destinatario_convocatoria` int(11) NOT NULL,
  `id_convocatoria` int(11) DEFAULT NULL,
  `codigo_grupo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item_baremable`
--

CREATE TABLE `item_baremable` (
  `id_item` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel_idioma`
--

CREATE TABLE `nivel_idioma` (
  `id` int(11) NOT NULL,
  `nivel` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `nivel_idioma`
--

INSERT INTO `nivel_idioma` (`id`, `nivel`) VALUES
(1, 'A1'),
(2, 'A2'),
(3, 'B1'),
(4, 'B2'),
(5, 'C1'),
(6, 'C2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `codigo_proyecto` varchar(100) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `fecha_inicio` datetime DEFAULT NULL,
  `fecha_fin` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutor_legal`
--

CREATE TABLE `tutor_legal` (
  `dni` varchar(9) NOT NULL,
  `apellido1` varchar(100) DEFAULT NULL,
  `apellido2` varchar(100) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `domicilio` varchar(500) DEFAULT NULL,
  `tlf` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `baremacion`
--
ALTER TABLE `baremacion`
  ADD PRIMARY KEY (`dni`),
  ADD KEY `fk_item_baremable_baremacion` (`id_item`);

--
-- Indices de la tabla `candidatos`
--
ALTER TABLE `candidatos`
  ADD PRIMARY KEY (`DNI`),
  ADD KEY `fk_tutor_legal` (`tutor_dni`);

--
-- Indices de la tabla `candidatos_convocatoria`
--
ALTER TABLE `candidatos_convocatoria`
  ADD PRIMARY KEY (`id_convocatoria`),
  ADD KEY `fk_dnin` (`DNI`);

--
-- Indices de la tabla `convocatorias`
--
ALTER TABLE `convocatorias`
  ADD PRIMARY KEY (`id_convocatoria`),
  ADD KEY `fk_proyecto` (`codigo_proyecto`);

--
-- Indices de la tabla `convocatoria_baremable`
--
ALTER TABLE `convocatoria_baremable`
  ADD KEY `fk_convoc` (`id_convocatoria`),
  ADD KEY `fk_baremo` (`id_baremo`);

--
-- Indices de la tabla `convocatoria_baremables_idioma`
--
ALTER TABLE `convocatoria_baremables_idioma`
  ADD KEY `fk_convocatoria_cb_idioma` (`id_convocatoria`),
  ADD KEY `fk_item_baremable_cb_idioma` (`id_baremo`),
  ADD KEY `fk_nivel_idioma_cb_idioma` (`id_idioma`);

--
-- Indices de la tabla `destinatarios`
--
ALTER TABLE `destinatarios`
  ADD PRIMARY KEY (`codigo_grupo`);

--
-- Indices de la tabla `destinatarios_convocatorias`
--
ALTER TABLE `destinatarios_convocatorias`
  ADD PRIMARY KEY (`id_destinatario_convocatoria`),
  ADD KEY `fk_convocatoria` (`id_convocatoria`),
  ADD KEY `fk_destinatario` (`codigo_grupo`);

--
-- Indices de la tabla `item_baremable`
--
ALTER TABLE `item_baremable`
  ADD PRIMARY KEY (`id_item`);

--
-- Indices de la tabla `nivel_idioma`
--
ALTER TABLE `nivel_idioma`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`codigo_proyecto`);

--
-- Indices de la tabla `tutor_legal`
--
ALTER TABLE `tutor_legal`
  ADD PRIMARY KEY (`dni`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `convocatorias`
--
ALTER TABLE `convocatorias`
  MODIFY `id_convocatoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `destinatarios_convocatorias`
--
ALTER TABLE `destinatarios_convocatorias`
  MODIFY `id_destinatario_convocatoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `item_baremable`
--
ALTER TABLE `item_baremable`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nivel_idioma`
--
ALTER TABLE `nivel_idioma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `baremacion`
--
ALTER TABLE `baremacion`
  ADD CONSTRAINT `fk_candidatos_convocatoria` FOREIGN KEY (`dni`) REFERENCES `candidatos_convocatoria` (`DNI`),
  ADD CONSTRAINT `fk_item_baremable_baremacion` FOREIGN KEY (`id_item`) REFERENCES `item_baremable` (`id_item`);

--
-- Filtros para la tabla `candidatos`
--
ALTER TABLE `candidatos`
  ADD CONSTRAINT `fk_tutor_legal` FOREIGN KEY (`tutor_dni`) REFERENCES `tutor_legal` (`DNI`);

--
-- Filtros para la tabla `candidatos_convocatoria`
--
ALTER TABLE `candidatos_convocatoria`
  ADD CONSTRAINT `fk_con` FOREIGN KEY (`id_convocatoria`) REFERENCES `convocatorias` (`id_convocatoria`),
  ADD CONSTRAINT `fk_dnin` FOREIGN KEY (`DNI`) REFERENCES `candidatos` (`DNI`);

--
-- Filtros para la tabla `convocatorias`
--
ALTER TABLE `convocatorias`
  ADD CONSTRAINT `fk_proyecto` FOREIGN KEY (`codigo_proyecto`) REFERENCES `proyectos` (`codigo_proyecto`);

--
-- Filtros para la tabla `convocatoria_baremable`
--
ALTER TABLE `convocatoria_baremable`
  ADD CONSTRAINT `fk_baremo` FOREIGN KEY (`id_baremo`) REFERENCES `item_baremable` (`id_item`),
  ADD CONSTRAINT `fk_convoc` FOREIGN KEY (`id_convocatoria`) REFERENCES `convocatorias` (`id_convocatoria`);

--
-- Filtros para la tabla `convocatoria_baremables_idioma`
--
ALTER TABLE `convocatoria_baremables_idioma`
  ADD CONSTRAINT `fk_convocatoria_cb_idioma` FOREIGN KEY (`id_convocatoria`) REFERENCES `convocatorias` (`id_convocatoria`),
  ADD CONSTRAINT `fk_item_baremable_cb_idioma` FOREIGN KEY (`id_baremo`) REFERENCES `item_baremable` (`id_item`),
  ADD CONSTRAINT `fk_nivel_idioma_cb_idioma` FOREIGN KEY (`id_idioma`) REFERENCES `nivel_idioma` (`id`);

--
-- Filtros para la tabla `destinatarios_convocatorias`
--
ALTER TABLE `destinatarios_convocatorias`
  ADD CONSTRAINT `fk_convocatoria` FOREIGN KEY (`id_convocatoria`) REFERENCES `convocatorias` (`id_convocatoria`),
  ADD CONSTRAINT `fk_destinatario` FOREIGN KEY (`codigo_grupo`) REFERENCES `destinatarios` (`codigo_grupo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
