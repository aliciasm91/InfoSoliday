-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-04-2015 a las 20:33:53
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `infosolidary`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE IF NOT EXISTS `articulos` (
`id` int(11) NOT NULL,
  `imagen` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `descripcion` varchar(150) COLLATE latin1_general_ci NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `anonimato` tinyint(1) DEFAULT '0',
  `creacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `imagen`, `descripcion`, `id_usuario`, `anonimato`, `creacion`) VALUES
(1, 'C:\\xampp\\htdocs\\InfoSolidary\\imagenes\\ConjutoMujer.png', 'Conjunto Rojo de mujer', 1, 0, '2015-04-17 20:27:56'),
(2, 'C:\\xampp\\htdocs\\InfoSolidary\\imagenes\\ConjutoMujer.png', 'Conjunto de mujer rojo', 1, NULL, '2015-04-17 20:32:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos_donados`
--

CREATE TABLE IF NOT EXISTS `articulos_donados` (
  `id_articulo` int(11) NOT NULL,
  `id_usuario_receptor` int(11) NOT NULL,
  `anonimato` tinyint(1) DEFAULT '0',
  `creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo_categoria`
--

CREATE TABLE IF NOT EXISTS `articulo_categoria` (
  `id_articulo` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcado de datos para la tabla `articulo_categoria`
--

INSERT INTO `articulo_categoria` (`id_articulo`, `id_categoria`) VALUES
(1, 1),
(2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asociaciones`
--

CREATE TABLE IF NOT EXISTS `asociaciones` (
`id` int(11) NOT NULL,
  `institucion` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
`id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(3, 'Juguetes'),
(4, 'Libros'),
(1, 'Ropa'),
(2, 'Zapatos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario_articulo`
--

CREATE TABLE IF NOT EXISTS `comentario_articulo` (
`id` int(11) NOT NULL,
  `id_articulo` int(11) NOT NULL,
  `id_usuario_comenta` int(11) NOT NULL,
  `anonimato` tinyint(1) NOT NULL,
  `creacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario_usuario`
--

CREATE TABLE IF NOT EXISTS `comentario_usuario` (
`id` int(11) NOT NULL,
  `id_usuario_comentado` int(11) NOT NULL,
  `id_usuario_comenta` int(11) NOT NULL,
  `titulo` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `comentario` varchar(150) COLLATE latin1_general_ci NOT NULL,
  `anonimato` tinyint(1) DEFAULT '0',
  `creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
`id` int(11) NOT NULL,
  `titulo` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `texto` varchar(1000) COLLATE latin1_general_ci NOT NULL,
  `creacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `texto`, `creacion`) VALUES
(1, 'Las carreras populares se apun', 'La Carrera Solidaria Manos Unidas se adueñó el pasado fin de semana de las calles de Avilés. Y este, la Carrera en Favor de Asempa (Asociación de Enfermos Neuromusculares), en Gijón, la Carrera Solidaria Contra el Hambre, en Oviedo, y la Carrera Castrillón Moving4 (niños con artritis) tomarán el relevo. Y así un buen número de fines de semana durante todo el año que han convertido a las pruebas populares en un buen instrumento para conseguir recursos para programas para los más desprotegidos <img src="C:\\xampp\\htdocs\\InfoSolidary\\ImagenesNoticas\\carreraSolidaria.jpg" alt="Imagen_carrera"> y para sensibilizar a la sociedad sobre la lucha silenciosa que llevan muchas personas contra enfermedades raras.', '2015-04-17 20:10:27'),
(2, 'Solidaridad a pie de playa', 'En Tenerife más de 600 alumnos del instituto de El Sobradillo participan en la quinta edición de las Jornadas de Voluntariado con actividades destinadas al cuidado de Las Teresitas\r\n\r\n<img src="C:\\xampp\\htdocs\\InfoSolidary\\ImagenesNoticas\\Playa.jpg" alt="Imagen_playa"> ', '2015-04-17 20:10:27'),
(3, 'Estudian crear un economato so', 'Los grupos de Cáritas de las parroquias del casco histórico están estudiando la posibilidad de unir sus fuerzas para poner en funcionamiento un economato social desde el que atender a las familias que periódicamente reciben alimentos y otros productos para la higiene o para bebés. El espectacular incremento del número de familias que son atendidas cada semana o cada mes en las parroquias de toda la ciudad -y que sigue creciendo- está desbordando la atención de los voluntarios de Cáritas, lo que ha motivado este planteamiento de crear un economato social. \r\n<a src="C:\\xampp\\htdocs\\InfoSolidary\\ImagenesNoticas\\caritas.jpg" >', '2015-04-17 20:21:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id` int(11) NOT NULL,
  `nif` varchar(9) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `nombre` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `apellidos` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `localidad` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `email` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `telefono` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `bloqueado` tinyint(1) NOT NULL DEFAULT '0',
  `creacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nif`, `password`, `nombre`, `apellidos`, `localidad`, `email`, `telefono`, `fecha_nacimiento`, `bloqueado`, `creacion`) VALUES
(1, '11111111A', '11111111A', 'Primero', 'Primero', 'Murcia', 'primero@primero.com', '111111111', '1991-11-21', 0, '2015-04-17 20:27:32'),
(2, '22222222B', '22222222B', '222222222', '222222222', 'Cataluña', NULL, NULL, NULL, 0, '2015-04-17 20:27:32');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
 ADD PRIMARY KEY (`id`,`id_usuario`), ADD KEY `usu_art` (`id_usuario`);

--
-- Indices de la tabla `articulos_donados`
--
ALTER TABLE `articulos_donados`
 ADD PRIMARY KEY (`id_articulo`,`id_usuario_receptor`), ADD KEY `usu_receptor` (`id_usuario_receptor`);

--
-- Indices de la tabla `articulo_categoria`
--
ALTER TABLE `articulo_categoria`
 ADD PRIMARY KEY (`id_articulo`,`id_categoria`), ADD KEY `cat_art` (`id_categoria`);

--
-- Indices de la tabla `asociaciones`
--
ALTER TABLE `asociaciones`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `nombre` (`nombre`), ADD UNIQUE KEY `nombre_2` (`nombre`), ADD UNIQUE KEY `nombre_3` (`nombre`);

--
-- Indices de la tabla `comentario_articulo`
--
ALTER TABLE `comentario_articulo`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentario_usuario`
--
ALTER TABLE `comentario_usuario`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `nif` (`nif`), ADD UNIQUE KEY `nif_2` (`nif`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `asociaciones`
--
ALTER TABLE `asociaciones`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `comentario_articulo`
--
ALTER TABLE `comentario_articulo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `comentario_usuario`
--
ALTER TABLE `comentario_usuario`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulos`
--
ALTER TABLE `articulos`
ADD CONSTRAINT `usu_art` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `articulos_donados`
--
ALTER TABLE `articulos_donados`
ADD CONSTRAINT `usu_receptor` FOREIGN KEY (`id_usuario_receptor`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `articulo_categoria`
--
ALTER TABLE `articulo_categoria`
ADD CONSTRAINT `art_cat` FOREIGN KEY (`id_articulo`) REFERENCES `articulos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `cat_art` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
