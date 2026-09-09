-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-09-2026 a las 23:55:19
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
-- Estructura de tabla para la tabla `candidatos`
--

CREATE TABLE `candidatos` (
  `id` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `cargo` varchar(40) NOT NULL,
  `ambito` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `candidatos`
--

INSERT INTO `candidatos` (`id`, `nombres`, `apellidos`, `cargo`, `ambito`) VALUES
(1, 'Franz Armando', 'Villalpando Amonzabel', 'Vicerector', 'Toda la  Universidad'),
(2, 'Janine ', 'Ayes', 'Vicerector', 'Toda la  Universidad'),
(3, 'Carlos Alberto', 'Mendoza Rojas', 'Rector', 'Toda la Universidad'),
(4, 'María Fernanda', 'Gutiérrez Pérez', 'Rector', 'Toda la Universidad'),
(5, 'Luis Fernando', 'Torrez Vargas', 'Vicerector', 'Toda la Universidad'),
(6, 'Ana María', 'Céspedes Flores', 'Vicerector', 'Toda la Universidad'),
(7, 'Jorge Andrés', 'Mamani Quispe', 'Decano', 'Facultad de Ingeniería'),
(8, 'Patricia Elena', 'Rojas Salazar', 'Decano', 'Facultad de Ciencias Económicas'),
(9, 'Roberto Carlos', 'Fernández Arias', 'Decano', 'Facultad de Derecho'),
(10, 'Gabriela Sofía', 'Vargas Molina', 'Decano', 'Facultad de Ciencias Sociales'),
(11, 'Miguel Ángel', 'Quispe Condori', 'Director de Carrera', 'Ingeniería de Sistemas'),
(12, 'Laura Beatriz', 'Paredes Gutiérrez', 'Director de Carrera', 'Ingeniería Comercial'),
(13, 'Diego Alejandro', 'Suárez Mendoza', 'Director de Carrera', 'Derecho'),
(14, 'Carla Daniela', 'Flores Romero', 'Director de Carrera', 'Administración de Empresas'),
(15, 'Fernando José', 'Vega Castro', 'Director de Carrera', 'Contaduría Pública'),
(16, 'Silvia Marlene', 'Cruz Fernández', 'Director de Carrera', 'Economía'),
(17, 'Oscar Daniel', 'Montaño Rojas', 'Consejero', 'Facultad de Ingeniería'),
(18, 'Verónica Isabel', 'Salinas Pérez', 'Consejero', 'Facultad de Derecho'),
(19, 'Juan Carlos', 'Arce Villarroel', 'Consejero', 'Facultad de Ciencias Económicas'),
(20, 'Natalia Andrea', 'Mendoza Flores', 'Consejero', 'Facultad de Ciencias Sociales'),
(21, 'Rodrigo Esteban', 'López Vargas', 'Representante Docente', 'Facultad de Ingeniería'),
(22, 'Mariana Alejandra', 'Castro Quispe', 'Representante Docente', 'Facultad de Derecho'),
(23, 'Pablo Andrés', 'Guzmán Rojas', 'Representante Docente', 'Facultad de Ciencias Económicas'),
(24, 'Diana Carolina', 'Salazar Molina', 'Representante Docente', 'Facultad de Ciencias Sociales'),
(25, 'Eduardo Martín', 'Vargas Condori', 'Representante Estudiantil', 'Ingeniería de Sistemas'),
(26, 'Andrea Paola', 'Romero Mamani', 'Representante Estudiantil', 'Ingeniería Comercial'),
(27, 'José Luis', 'Pérez Choque', 'Representante Estudiantil', 'Derecho'),
(28, 'Valeria Sofía', 'Arias Fernández', 'Representante Estudiantil', 'Administración de Empresas'),
(29, 'Mauricio René', 'Cabrera Flores', 'Representante Estudiantil', 'Contaduría Pública'),
(30, 'Claudia Beatriz', 'Molina Rojas', 'Representante Estudiantil', 'Economía'),
(31, 'Héctor Iván', 'Torrez Salazar', 'Representante Estudiantil', 'Ingeniería de Sistemas'),
(32, 'Roxana Elizabeth', 'Céspedes Vargas', 'Representante Estudiantil', 'Ingeniería Comercial');

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
-- Indices de la tabla `candidatos`
--
ALTER TABLE `candidatos`
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
-- AUTO_INCREMENT de la tabla `candidatos`
--
ALTER TABLE `candidatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
