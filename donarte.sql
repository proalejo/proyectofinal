-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-07-2019 a las 16:12:00
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `donarte`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `tipo de producto` varchar(60) NOT NULL,
  `descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `tipo de producto`, `descripcion`) VALUES
(1, 'silla', 'silla cuatro patas con tapizado en buenas condiciones. (despintada)'),
(2, 'sillon', 'sillon para tapizar'),
(3, 'mesa', 'mesa lista para pintar'),
(4, 'campera', 'campera en buen estado'),
(5, 'silla', 'silla de plastico blanca'),
(6, 'sillon', 'sillon un cuerpo de tela'),
(7, 'campera', 'campera de cuero'),
(8, 'leche', 'leche nido'),
(9, 'lata', 'lata de arvejas'),
(10, 'lata', 'lata de lentejas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo de producto`
--

CREATE TABLE `tipo de producto` (
  `id` int(11) NOT NULL,
  `tipo_de_producto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo de producto`
--

INSERT INTO `tipo de producto` (`id`, `tipo_de_producto`) VALUES
(1, 'mueble'),
(2, 'ropa'),
(3, 'alimentos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre de usuario` varchar(40) NOT NULL,
  `contraseña` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre de usuario`, `contraseña`, `email`) VALUES
(1, 'jorge', '1234', 'jorge@gmail.com'),
(2, 'juan', '456', 'juan@gmail.com'),
(3, 'jaime', '111', 'jaime@gmail.com'),
(4, 'carlos', '777', 'carlos@gmail.com'),
(5, 'pedro', '0000', 'pedro@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo de producto`
--
ALTER TABLE `tipo de producto`
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
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tipo de producto`
--
ALTER TABLE `tipo de producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tipo de producto`
--
ALTER TABLE `tipo de producto`
  ADD CONSTRAINT `tipo de producto_ibfk_1` FOREIGN KEY (`id`) REFERENCES `productos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
