-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-01-2022 a las 18:22:18
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `abas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficiario`
--

CREATE TABLE `beneficiario` (
  `id` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `nomReferente` varchar(50) NOT NULL,
  `estado` varchar(10) NOT NULL,
  `fechaAlta` date NOT NULL,
  `fechaActivo` date NOT NULL,
  `fechaBaja` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `id` int(11) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `nro` varchar(10) NOT NULL,
  `entre` varchar(50) NOT NULL,
  `barrio` varchar(50) NOT NULL,
  `codInstitucion` int(11) NOT NULL,
  `tipoInstitucion` varchar(1) NOT NULL,
  `localidad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `direccion`
--

INSERT INTO `direccion` (`id`, `calle`, `nro`, `entre`, `barrio`, `codInstitucion`, `tipoInstitucion`, `localidad`) VALUES
(1, '4', '1423', '61 y 62', '', 5, 'S', 'CASCO URBANO'),
(2, '89', '880', '12 y 13', 'Villa Elvira', 6, 'S', 'VILLA ELVIRA'),
(3, '19', '2204', '77 y 78', 'ALTOS DE SAN LORENZO', 7, 'S', 'ALTOS DE SAN LORENZO'),
(4, '157', 's/n', '27 y 28', 'VILLA ROCA', 8, 'S', 'BERISSO'),
(5, '75', '2937', '154 y 155', 'LOS HORNOS', 9, 'S', 'LOS HORNOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

CREATE TABLE `localidad` (
  `id` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mail`
--

CREATE TABLE `mail` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nomContacto` varchar(50) NOT NULL,
  `codInstitucion` int(11) NOT NULL,
  `tipoInstitucion` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mail`
--

INSERT INTO `mail` (`id`, `email`, `nomContacto`, `codInstitucion`, `tipoInstitucion`) VALUES
(1, '', 'Laura', 5, 'S'),
(2, '', 'SUSANA DIAZ', 7, 'S'),
(3, 'jesuseselcamino@gmail.com', 'ROSA AGUIRRE', 9, 'S');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id` int(11) NOT NULL,
  `desayuno` varchar(2) NOT NULL,
  `almuerzo` varchar(2) NOT NULL,
  `merienda` varchar(2) NOT NULL,
  `cena` varchar(2) NOT NULL,
  `bolson` varchar(2) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `horario` varchar(50) NOT NULL,
  `codInstitucion` int(11) NOT NULL,
  `tipoInstitucion` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id`, `desayuno`, `almuerzo`, `merienda`, `cena`, `bolson`, `descripcion`, `horario`, `codInstitucion`, `tipoInstitucion`) VALUES
(1, 'SI', 'SI', 'SI', 'NO', 'NO', '', 'de 10 a 20', 5, 'S'),
(2, 'SI', 'NO', 'SI', 'NO', 'SI', 'Funciona bÃ¡sicamente como merendero, se preparan diariamente desayunos y meriendas, ademÃ¡s se reparten bolsones de comida segÃºn la situaciÃ³n de cada familia.', '8 a 11 y 17 a 19', 6, 'S'),
(3, 'SI', 'SI', 'SI', 'SI', 'NO', 'comedor que ofrece las cuatro comidas del dia', 'todos los dias de 10 a 14 y de 18 a 22 hs', 7, 'S'),
(4, 'SI', 'NO', 'SI', 'NO', 'NO', '', '9 a 11 y de 17 a 19 hs', 8, 'S'),
(5, 'SI', 'NO', 'SI', 'NO', 'SI', 'Merendero que funciona con apoyo de la Union de las Asambleas de Dios. Ofrece bolsones de comida a familias con mayores necesidades.', 'de 8 a 10 y de 18 a 20', 9, 'S');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitante`
--

CREATE TABLE `solicitante` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `nomReferente` varchar(50) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `hora` varchar(5) NOT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `solicitante`
--

INSERT INTO `solicitante` (`id`, `nombre`, `nomReferente`, `fecha`, `hora`, `estado`) VALUES
(5, 'CASA PADRE PIO', 'Laura', '22/01/2022', '16:09', 'PENDIENTE'),
(6, 'ORATORIO \"DON BOSCO\"', 'M. Harissa Achem', '22/01/2022', '17:06', 'PENDIENTE'),
(7, 'AMAR A LOS NIÃ±OS', 'SUSANA DIAZ', '22/01/2022', '17:27', 'PENDIENTE'),
(8, 'MERENDERO DEL BARRIO', 'YOLANDA PEREZ', '22/01/2022', '17:39', 'PENDIENTE'),
(9, 'JESUS ES EL CAMINO', 'ROSA AGUIRRE', '22/01/2022', '18:03', 'PENDIENTE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono`
--

CREATE TABLE `telefono` (
  `id` int(11) NOT NULL,
  `nro` varchar(15) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `nomContacto` varchar(50) NOT NULL,
  `codInstitucion` int(11) NOT NULL,
  `tipoInstitucion` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `telefono`
--

INSERT INTO `telefono` (`id`, `nro`, `tipo`, `nomContacto`, `codInstitucion`, `tipoInstitucion`) VALUES
(1, '2147483647', 'CELULAR', 'Laura', 5, 'S'),
(2, '0', '', 'Laura', 5, 'S'),
(3, '2214191966', 'CELULAR', 'M. Harissa Achem', 6, 'S'),
(4, '4512810', 'FIJO', 'SUSANA DIAZ', 7, 'S'),
(5, '2216149414', 'CELULAR', 'SUSANA DIAZ', 7, 'S'),
(6, '2216245763', 'CELULAR', 'YOLANDA PEREZ', 8, 'S'),
(7, '2213149684', 'CELULAR', 'ROSA AGUIRRE', 9, 'S');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `clave` varchar(30) NOT NULL,
  `rol` varchar(15) NOT NULL,
  `dni` int(8) NOT NULL,
  `apynom` varchar(50) NOT NULL,
  `domicilio` varchar(50) NOT NULL,
  `telFijo` varchar(20) NOT NULL,
  `telMovil` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `estado` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `clave`, `rol`, `dni`, `apynom`, `domicilio`, `telFijo`, `telMovil`, `email`, `estado`) VALUES
(1, 'SEBASTIAN', 'seba', 'ADMINISTRADOR', 34816804, 'Nuñez Sebastian', '', '', '', '', 'ACTIVO'),
(3, 'LUCIO', 'lucio', 'OPERADOR', 30303030, 'Arrua Lucio', '', '', '', '', 'ACTIVO'),
(11, 'JPEREZ', 'jperez', 'OPERADOR', 27937392, 'PÃ©rez Juan', '161 nro 2772', '4611873', '2215551246', 'jperez@gmail.com', 'ACTIVO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `beneficiario`
--
ALTER TABLE `beneficiario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `solicitante`
--
ALTER TABLE `solicitante`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `solicitante`
--
ALTER TABLE `solicitante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `telefono`
--
ALTER TABLE `telefono`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
