-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-07-2020 a las 09:42:43
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdtransporte`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carga`
--

CREATE TABLE `carga` (
  `patente` varchar(7) NOT NULL,
  `idElemento` varchar(5) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductor`
--

CREATE TABLE `conductor` (
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `rut` varchar(10) NOT NULL,
  `correo` varchar(25) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `conductor`
--

INSERT INTO `conductor` (`nombre`, `apellido`, `rut`, `correo`, `telefono`, `direccion`, `password`, `estado`) VALUES
('Francisco Ramón', 'Ojeda Casanueva', '19533298-3', 'ojedacasanueva@gmail.com', '982175252', 'Chiguay #780', '$2y$10$WnfgnAETab/vCg1WvJWt2.h/a.iqB1bv9mOxb/mLMJ9WiKcNrBvtW', 1),
('Matías', 'Baez', '19537544-5', 'mati@gmail.com', '', '', '$2y$10$AXdz5zQysUjaBCdOQdF0i.hOy/RC95w4Q4/cVV2uvLjTLLxVA/LBe', 0),
('María', 'Casanueva', '8977252-4', 'mari@gmail.com', '977568147', 'Chiguay 780', '$2y$10$HiiuCJl2uMhnroMhJHh8ue8otSDRVbLTzjLQu47Qhr9JR9LcmAiTe', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `elemento`
--

CREATE TABLE `elemento` (
  `idElemento` varchar(5) NOT NULL,
  `ubicacionElemento` varchar(25) NOT NULL,
  `descripcionElemento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maneja`
--

CREATE TABLE `maneja` (
  `patente` varchar(7) NOT NULL,
  `rut` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `patente` varchar(7) NOT NULL,
  `serieMotor` varchar(10) NOT NULL,
  `capacidadCarga` varchar(15) NOT NULL,
  `descripcionVehiculo` varchar(200) NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`patente`, `serieMotor`, `capacidadCarga`, `descripcionVehiculo`, `estado`) VALUES
('asaa-12', 'sdaadasda', 'asdddddd', 'asdasdasd', 0),
('ASDA-12', 'aasdasd', '1234325', 'asd', 0),
('ASDA-13', 'asdasd', '123123123123123', 'asdadasd', 0),
('AVCX-12', 'dasdasdas', 'asdasdasd', 'asdasdad123', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carga`
--
ALTER TABLE `carga`
  ADD PRIMARY KEY (`patente`,`idElemento`),
  ADD KEY `idElemento` (`idElemento`);

--
-- Indices de la tabla `conductor`
--
ALTER TABLE `conductor`
  ADD PRIMARY KEY (`rut`);

--
-- Indices de la tabla `elemento`
--
ALTER TABLE `elemento`
  ADD PRIMARY KEY (`idElemento`);

--
-- Indices de la tabla `maneja`
--
ALTER TABLE `maneja`
  ADD PRIMARY KEY (`patente`,`rut`),
  ADD KEY `fk_rut` (`rut`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`patente`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carga`
--
ALTER TABLE `carga`
  ADD CONSTRAINT `carga_ibfk_1` FOREIGN KEY (`patente`) REFERENCES `vehiculo` (`patente`),
  ADD CONSTRAINT `carga_ibfk_2` FOREIGN KEY (`idElemento`) REFERENCES `elemento` (`idElemento`);

--
-- Filtros para la tabla `maneja`
--
ALTER TABLE `maneja`
  ADD CONSTRAINT `fk_patente` FOREIGN KEY (`patente`) REFERENCES `vehiculo` (`patente`),
  ADD CONSTRAINT `fk_rut` FOREIGN KEY (`rut`) REFERENCES `conductor` (`rut`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
