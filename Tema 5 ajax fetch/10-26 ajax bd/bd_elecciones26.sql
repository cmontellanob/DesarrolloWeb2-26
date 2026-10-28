-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-09-2026 a las 23:59:52
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_elecciones26`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambitos`
--

CREATE TABLE `ambitos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ambitos`
--

INSERT INTO `ambitos` (`id`, `nombre`) VALUES
(1, 'Toda la  Universidad'),
(2, 'Facultad de Ciencias Politicas y Sociales'),
(3, 'Facultad de Ciencias y Tecnolgía'),
(4, 'Facultad de Ciencias Económicas'),
(5, 'Facultad de Derecho'),
(6, 'Facultad de Ciencias Sociales'),
(7, 'Ingeniería de Sistemas'),
(8, 'Ingeniería Comercial'),
(9, 'Derecho'),
(10, 'Administración de Empresas'),
(11, 'Contaduría Pública'),
(12, 'Economía');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidatos`
--

CREATE TABLE `candidatos` (
  `id` int(11) NOT NULL,
  `fotografia` varchar(100) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `cargo_id` int(11) NOT NULL,
  `ambito_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `candidatos`
--

INSERT INTO `candidatos` (`id`, `fotografia`, `nombres`, `apellidos`, `cargo_id`, `ambito_id`) VALUES
(1, '6ab447ea1b57f.jfif', 'Franz Armando', 'Villalpando Amonzabel', 1, 1),
(2, '6ab44b492d644.jfif', 'Jamile', 'Ayes', 1, 1),
(3, '6ab44b60452b3.jfif', 'Eduardo', 'Rivero Zurita', 2, 1),
(4, '', 'María Fernanda', 'Gutiérrez Pérez', 2, 0),
(5, '', 'Luis Fernando', 'Torrez Vargas', 2, 0),
(6, '', 'Ana María', 'Céspedes Flores', 2, 0),
(7, '', 'Jorge Andrés', 'Mamani Quispe', 3, 0),
(8, '', 'Alberto Ramiro', 'Duran', 4, 7),
(9, '', 'Roberto Carlos', 'Fernández Arias', 5, 0),
(10, '', 'Gabriela Sofía', 'Vargas Molina', 6, 0),
(11, '', 'Miguel Ángel', 'Quispe Condori', 7, 0),
(12, '', 'Laura Beatriz', 'Paredes Gutiérrez', 8, 0),
(13, '', 'Diego Alejandro', 'Suárez Mendoza', 9, 0),
(14, '', 'Carla Daniela', 'Flores Romero', 10, 0),
(15, '', 'Fernando José', 'Vega Castro', 11, 0),
(16, '', 'Silvia Marlene', 'Cruz Fernández', 12, 0),
(17, '', 'Oscar Daniel', 'Montaño Rojas', 3, 0),
(18, '', 'Verónica Isabel', 'Salinas Pérez', 5, 0),
(19, '', 'Juan Carlos', 'Arce Villarroel', 4, 0),
(20, '', 'Natalia Andrea', 'Mendoza Flores', 6, 0),
(21, '', 'Rodrigo Esteban', 'López Vargas', 3, 0),
(22, '', 'Mariana Alejandra', 'Castro Quispe', 5, 0),
(23, '', 'Pablo Andrés', 'Guzmán Rojas', 4, 0),
(24, '', 'Diana Carolina', 'Salazar Molina', 6, 0),
(25, '', 'Eduardo Martín', 'Vargas Condori', 7, 0),
(26, '', 'Andrea Paola', 'Romero Mamani', 8, 0),
(27, '', 'José Luis', 'Pérez Choque', 9, 0),
(28, '', 'Valeria Sofía', 'Arias Fernández', 10, 0),
(29, '', 'Mauricio René', 'Cabrera Flores', 11, 0),
(30, '', 'Claudia Beatriz', 'Molina Rojas', 12, 0),
(31, '', 'Héctor Iván', 'Torrez Salazar', 7, 0),
(32, '', 'Roxana Elizabeth', 'Céspedes Vargas', 8, 0),
(36, '6ab4462894e3f.png', 'Juan', 'Perez', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`id`, `nombre`) VALUES
(1, 'Vicerector'),
(2, 'Rector'),
(3, 'Decano'),
(4, 'Director de Carrera'),
(5, 'Consejero'),
(6, 'Representante Docente'),
(7, 'Representante Estudiantil');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `rol` enum('admin','user','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `correo`, `clave`, `rol`) VALUES
(1, 'admin@sis256.edu', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'admin'),
(2, 'user@sis256.edu', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ambitos`
--
ALTER TABLE `ambitos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `candidatos`
--
ALTER TABLE `candidatos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ambitos`
--
ALTER TABLE `ambitos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `candidatos`
--
ALTER TABLE `candidatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
