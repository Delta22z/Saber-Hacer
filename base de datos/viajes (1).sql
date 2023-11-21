-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2023 a las 03:40:11
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `viajes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agencia`
--

CREATE TABLE `agencia` (
  `Id` int(11) NOT NULL,
  `Viajes` varchar(20) NOT NULL,
  `Clase_vuelo` varchar(20) NOT NULL,
  `Destino` varchar(20) NOT NULL,
  `Hora_salida` varchar(10) NOT NULL,
  `Hora_Llegada` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `agencia`
--

INSERT INTO `agencia` (`Id`, `Viajes`, `Clase_vuelo`, `Destino`, `Hora_salida`, `Hora_Llegada`) VALUES
(1, '8 - 9 am', 'Primera Clase', 'Cancun', '9 am', ' 2 pm'),
(2, '10 - 11 am', 'Clase Economica', 'E.U.A', '12 am', '4 am'),
(4, 'Cuevana', 'Turista', 'Espana', '9', '10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id`, `descripcion`) VALUES
(1, 'Administrador'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `costos`
--

CREATE TABLE `costos` (
  `Id` int(20) NOT NULL,
  `Destino` varchar(20) NOT NULL,
  `Costo_Pesos` varchar(20) NOT NULL,
  `Costo_Dolares` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `costos`
--

INSERT INTO `costos` (`Id`, `Destino`, `Costo_Pesos`, `Costo_Dolares`) VALUES
(1, 'Mexico', '$1000', '$100'),
(2, 'Europa', '1200', '65.72'),
(3, 'Minecraft', '1300', '71.19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` int(4) NOT NULL,
  `Nproyecto` varchar(20) NOT NULL,
  `Tproyecto` varchar(20) NOT NULL,
  `Estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id`, `Nproyecto`, `Tproyecto`, `Estado`) VALUES
(10, 'Construccion', 'Local', 'Activo'),
(20, 'Construccion escolar', 'Local', 'Pausado'),
(30, 'Construccion cyber', 'Pausado', 'Activo '),
(40, 'Tapar baches', 'Nacional', 'Activo'),
(50, 'Limpieza oficina', 'Local', 'Finalizado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sugerencias`
--

CREATE TABLE `sugerencias` (
  `Id` int(20) NOT NULL,
  `Fecha` varchar(20) NOT NULL,
  `Comentario` varchar(20) NOT NULL,
  `tipo_usuario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sugerencias`
--

INSERT INTO `sugerencias` (`Id`, `Fecha`, `Comentario`, `tipo_usuario`) VALUES
(1, '14/10/2023', 'Buen Servicio', ''),
(2, '20/10/2023', 'Mejoren los asientos', ''),
(3, '2023-10-11', 'd', 'Cliente'),
(4, '2023-10-05', 'le falta estilo', 'Anónimo'),
(5, '2023-10-07', '777', 'Anónimo'),
(6, '2023-10-06', 'dd', 'Cliente'),
(8, '2023-10-27', 'ladlladld nawhdahcia', 'Cliente'),
(9, '2023-10-06', 'Limpia el bano', 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `usuario` varchar(250) NOT NULL,
  `contraseña` varchar(250) NOT NULL,
  `id_cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `contraseña`, `id_cargo`) VALUES
(1, 'Luis', 'Luis', '2002', 1),
(2, 'Oscar', 'Oscar', '4567', 1),
(3, 'Doryan', 'Doryan', 'lol15', 2),
(4, 'Raven', 'Raven', '2020', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agencia`
--
ALTER TABLE `agencia`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `costos`
--
ALTER TABLE `costos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sugerencias`
--
ALTER TABLE `sugerencias`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cargo` (`id_cargo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agencia`
--
ALTER TABLE `agencia`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `costos`
--
ALTER TABLE `costos`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `sugerencias`
--
ALTER TABLE `sugerencias`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
