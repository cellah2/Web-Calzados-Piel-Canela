-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 05-01-2021 a las 18:13:56
-- Versión del servidor: 5.7.31-0ubuntu0.18.04.1
-- Versión de PHP: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `PielCanela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--
CREATE DATABASE IF NOT EXISTS PielCanela;
USE PielCanela;

CREATE TABLE `categorias` (
  `cod_categoria` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`cod_categoria`, `nombre`) VALUES
(1, 'Mujer'),
(2, 'Hombre'),
(3, 'Tacos'),
(4, 'Botines'),
(5, 'Zapatos'),
(6, 'Sandalias'),
(7, 'Zapatillas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `cod_prod` varchar(45) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `temporada` varchar(100) NOT NULL,
  `categoria` int(100) NOT NULL,
  `categoria2` int(10) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL,
  `precio` int(11) NOT NULL,
  `talla` varchar(45) DEFAULT NULL,
  `insumos` varchar(100) DEFAULT NULL,
  `taco` varchar(45) DEFAULT NULL,
  `plataforma` varchar(45) DEFAULT NULL,
  `destacado` int(10) DEFAULT NULL,
  `disponible` int(10) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `cod_prod`, `nombre`, `descripcion`, `temporada`, `categoria`, `categoria2`, `color`, `precio`, `talla`, `insumos`, `taco`, `plataforma`, `destacado`, `disponible`, `imagen`) VALUES
(7, 'ZAP321', 'Zapatilla Malandra Blanca c/ Burdeo', 'Calzado 100% cuero,  diseÃ±o y confecciÃ³n nacional. Fabricado, diseÃ±ado y combinado por Calzados Piel Canela spa.', 'OtoÃ±o 2020', 1, 7, 'Blanco con Burdeo', 59990, '37,38,39,40', 'Cuero liso y cuero con folia', '4,5 cm', 'NO', 1, 1, 'zapatilla.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `textos`
--

CREATE TABLE `textos` (
  `id` int(11) NOT NULL,
  `texto` text NOT NULL,
  `nombre_texto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `textos`
--

INSERT INTO `textos` (`id`, `texto`, `nombre_texto`) VALUES
(1, 'Calzados Piel Canela es una empresa que cuenta con 9 años de experiencia lo que ha hecho posible su posicionamiento en el mercado, fue fundada por Paola Peña Pérez una visionaria y emprendedora empresaria.\n\nEmpresa Piel Canela está especializada en la fabricación y comercialización del calzado 100% cuero, el cual tiene como principal fortaleza las combinaciones y los insumos ocupados en los productos, tales como cueros de diferentes texturas y folias que se exportan de diferentes países, lo que ha hecho posible su gran participación dentro del sector calzado; cuenta con una excelente administración, maquinaria de punta y un equipo de trabajo altamente calificado y capacitado en el rubro del calzado de cuero; se ha logrado explotar su potencial al máximo, garantizando un producto final exclusivo que ayuda a seguir innovando en nuevos mercados, destacándonos con nuestro calzado Chileno. PRUEBA', 'nosotros'),
(2, 'Fabricar calzado y accesorios de cuero es nuestra vocación. Nuestros productos están basados en la exclusividad, en la unión perfecta entre texturas, colores y folias, esto hace que nos caractericemos por nuestros diseños y combinaciones, lo que finalmente refleja nuestra esencia.\n\n', 'destacados');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `priv` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `email`, `password`, `priv`) VALUES
(1, 'Paola', 'paola@calzadospielcanela.cl', 'paola123', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`cod_categoria`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`cod_prod`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `categoria` (`categoria`),
  ADD KEY `categoria2_fk` (`categoria2`);

--
-- Indices de la tabla `textos`
--
ALTER TABLE `textos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `textos`
--
ALTER TABLE `textos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `categoria2_fk` FOREIGN KEY (`categoria2`) REFERENCES `categorias` (`cod_categoria`),
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`cod_categoria`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
