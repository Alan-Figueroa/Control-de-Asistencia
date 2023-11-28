-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2023 a las 17:33:41
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
-- Base de datos: `control_asistencia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id` int(11) NOT NULL,
  `id_usu` int(11) NOT NULL,
  `presente` varchar(11) NOT NULL,
  `fecha` date NOT NULL,
  `motivo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id`, `id_usu`, `presente`, `fecha`, `motivo`) VALUES
(41, 0, 'Si Asisto', '2023-10-19', ''),
(42, 0, 'no', '2023-10-31', ''),
(43, 0, 'Si Asisto', '2023-11-03', ''),
(44, 0, 'no', '2023-10-31', ''),
(45, 0, 'No Asisto', '2023-11-01', ''),
(46, 0, 'No Asisto', '2023-10-05', ''),
(47, 6, 'No Asisto', '2023-10-30', ''),
(48, 6, 'No Asisto', '2023-10-31', ''),
(49, 6, 'Si Asisto', '2023-11-01', ''),
(50, 6, 'Si Asisto', '2023-11-16', ''),
(51, 6, 'Si Asisto', '2023-11-10', ''),
(52, 6, 'Si Asisto', '2023-11-15', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `id` int(11) NOT NULL,
  `apellido_nombre` varchar(200) NOT NULL,
  `dni` int(8) NOT NULL,
  `telefono` int(10) NOT NULL,
  `email` varchar(250) NOT NULL,
  `f_nac` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`id`, `apellido_nombre`, `dni`, `telefono`, `email`, `f_nac`) VALUES
(1, 'Figueroa Alan', 45402036, 2147483647, 'alandamian182@gmail.com', '2003-12-31'),
(2, 'Raul Eduardo Dos Santos', 23098123, 1109122018, 'eduardosantos912@gmail.com', '2018-12-09'),
(3, 'Raul Eduardo Dos Santos', 2147483647, 6588, 'eduardosantos912@gmail.com', '2023-08-02'),
(4, 'Colman Joel', 12345678, 1109876532, 'jasjkashajs@gmail.com', '2023-08-31'),
(5, 'Nahuelquir Axel', 12345678, 1122334455, 'axelruperto@gmail.com', '2023-09-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `apellido` varchar(15) NOT NULL,
  `fecha` date NOT NULL,
  `mail` varchar(50) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `contrasenia` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `fecha`, `mail`, `usuario`, `contrasenia`) VALUES
(6, 'Alan', 'Figueroa', '2003-12-31', 'alanfigueroa754@gmail.com', 'AlanDF', '12345'),
(7, 'Axel', 'Nahuelquir', '2023-09-13', 'axelruperto@gmail.com', 'AxelN', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
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
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
