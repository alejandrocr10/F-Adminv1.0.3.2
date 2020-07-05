-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-07-2020 a las 18:54:34
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `f&admin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos`
--

CREATE TABLE `archivos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(30) CHARACTER SET utf8 NOT NULL,
  `descripcion` varchar(100) CHARACTER SET utf8 NOT NULL,
  `fecha` date NOT NULL,
  `ruta` varchar(100) CHARACTER SET utf8 NOT NULL,
  `carpeta` varchar(50) CHARACTER SET utf8 NOT NULL,
  `responsable` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `archivos`
--

INSERT INTO `archivos` (`id`, `titulo`, `descripcion`, `fecha`, `ruta`, `carpeta`, `responsable`) VALUES
(22, 'Acta de Matrimonio', 'Vieja', '2020-06-30', 'Archivos/casos/CASO I/ACTIVIDADES PEDAGOGICAS.docx', 'CASO I', 'Jefferson Caballero'),
(23, 'Cedula', 'Asdrubal', '2020-06-30', 'Archivos/casos/CASO I/Koala.jpg', 'CASO I', 'Jefferson Caballero'),
(24, 'doc', 'prueba', '2020-07-01', 'Archivos/casos/Caso II/Koala.jpg', 'Caso II', 'Jefferson Caballero'),
(25, 'doc', 'prueba', '2020-07-01', 'Archivos/casos/Caso III/Penguins.jpg', 'Caso III', 'Jefferson Caballero'),
(27, 'docFermin', 'Evidencia', '2020-07-03', 'Archivos/casos/CASO I/Koala.jpg', 'CASO I', 'Victor Figueroa'),
(28, 'DOC1', 'PRUEBA', '2020-07-03', 'Archivos/casos/Documento  de Venta/ACTIVIDADES PEDAGOGICAS.docx', 'Documento  de Venta', 'Victor Figueroa'),
(31, 'DOC1CANTV', 'PRUEBA', '2020-07-03', 'Archivos/casos/CASO CANTV/PÃ¡rrafo expositivo sobre la computadora.docx', 'CASO CANTV', 'Victor Figueroa'),
(32, 'DOC1', 'PRUEBA', '2020-07-03', 'Archivos/casos/CANTV ES HACKEADO/PÃ¡rrafo expositivo sobre la computadora.docx', 'CANTV ES HACKEADO', 'Victor Figueroa'),
(33, 'NUEVO', 'AÃ‘ADIDO', '2020-07-03', 'Archivos/casos/CASO I/Readme.txt', 'CASO I', 'Jefferson Caballero'),
(34, 'NUEVO2', 'AÃ‘ADIDO2', '2020-07-03', 'Archivos/casos/Caso II/index.php', 'Caso II', 'Jefferson Caballero'),
(35, '', '', '2020-07-03', 'Archivos/casos/sss/', 'sss', 'Jefferson Caballero'),
(36, 'Documento ', 'Movistar2', '2020-07-05', 'Archivos/casos/Caso III/casos.php', 'Caso III', 'Jefferson Caballero'),
(37, 'ELIMINAR', 'ELIMINAR', '2020-07-05', 'Archivos/casos/ELIMINAR/noche estrellada.png', 'ELIMINAR', 'Jefferson Caballero'),
(38, 'ELIMINAR2', 'ELIMINAR2', '2020-07-05', 'Archivos/casos/ELIMINAR/', 'ELIMINAR', 'Jefferson Caballero'),
(39, 'ELIMINAR3', 'ELIMINAR3', '2020-07-05', 'Archivos/casos/ELIMINAR/2013-tesla-model-s-front-three-quarters-on-the-beach.jpg', 'ELIMINAR', 'Jefferson Caballero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos_compartidos`
--

CREATE TABLE `archivos_compartidos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` date NOT NULL,
  `ruta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `archivos_compartidos`
--

INSERT INTO `archivos_compartidos` (`id`, `titulo`, `descripcion`, `fecha`, `ruta`) VALUES
(60, 'Documento', 'Prueba', '2020-06-27', 'Archivos/archivos_compartidos/PÃ¡rrafo expositivo sobre la computadora.docx'),
(61, 'img', 'jeis', '2020-07-03', 'Archivos/archivos_compartidos/h.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id` int(11) NOT NULL,
  `cedula` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `asistencia` int(11) NOT NULL,
  `causa` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `periodo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id`, `cedula`, `fecha`, `asistencia`, `causa`, `periodo`) VALUES
(26, 'v-26.918.748', '2020-07-04', 1, '*', 'JUL-1'),
(27, 'v-20.145.458', '2020-07-04', 1, '*', 'JUL-1'),
(28, 'v-17.380.669', '2020-07-04', 1, '*', 'JUL-1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casos`
--

CREATE TABLE `casos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `materia` varchar(30) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `cliente` varchar(100) NOT NULL,
  `responsable` varchar(30) NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `casos`
--

INSERT INTO `casos` (`id`, `titulo`, `descripcion`, `materia`, `fecha_inicio`, `cliente`, `responsable`, `estado`) VALUES
(20, 'CASO I', 'Divorcio Lic.Asdrubal.', 'Civil', '2020-06-29', 'Asdrubal Ortiz. ', 'Jefferson Caballero', 'EN PROCESO'),
(25, 'CASO I', 'ESTAFA FERMIN', 'Laboral', '2020-07-02', 'Jose Fermin. ', 'Victor Figueroa', 'EN PROCESO'),
(26, 'Documento  de Venta', 'Venta de casa ', 'Mercantil', '2020-07-03', 'Margarita Cabello. ', 'Victor Figueroa', 'EN PROCESO'),
(28, 'CASO CANTV', 'CANTV ha sido demandado por 1 millon de $', 'Mercantil', '2020-07-03', 'CANTV CANTV. ', 'Victor Figueroa', 'EN PROCESO'),
(29, 'CANTV ES HACKEADO', 'LEYES DIGITALES', 'Civil', '2020-12-31', 'CANTV CANTV. ', 'Victor Figueroa', 'FINALIZADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `cedula` varchar(30) NOT NULL,
  `rif` varchar(30) NOT NULL,
  `tlf` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `cedula`, `rif`, `tlf`) VALUES
(27, 'Asdrubal H.', 'Ortiz', 'V-16.548.639', 'J-123456789', '04144859684'),
(29, 'Alejandro', 'Cabello', '26918748', 'J-312545895', '0424-858.92.24'),
(30, 'Jose', 'Camachi', '26918748', 'NO', '0414-777.61.18'),
(31, 'Margarita', 'Cabello', 'V-4.621.360', 'NO', '0414-189.84.96'),
(33, 'Jose', 'Fermin', 'V-4.654.858', 'NO', '0414-777.21.27'),
(34, 'CANTV', 'CANTV', 'NO', 'J-987654123', '0293-8574858'),
(37, 'Vestalia', 'Romero', 'V-11.826.265', 'NO', '0414-159.54.63'),
(38, 'Maria', 'Lopez', '26918748', '123456789', '04145858489');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `cedula` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tlf` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cargo` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `banco` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `n_cuenta` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `cedula`, `nombre`, `apellido`, `tlf`, `cargo`, `direccion`, `banco`, `n_cuenta`) VALUES
(2, 'v-26.918.748', 'Alejandro Yousef', 'Cabello', '04248589224', 'Tecnico', 'Av.Cantarrana', 'BBVA', '0108-0029-0025-0000-1002'),
(3, 'v-20.145.458', 'Francisco', 'Martinez', '0414-154.26.53', 'Jefe de Mantenimiento ', 'CumanÃ¡goto Norte. Casa Funda sucre. Gimnasio de B', 'Venezuela', '0102-0178-9121-0002-7252'),
(4, 'v-17.380.669', 'Jessica', 'Romero', '0424-863.59.43', 'Secretaria', 'Av.Cancamure.Urb JosÃ© MarÃ­a Vargas', 'B.F.C', '0116-0428-5301-9987-9800');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodos`
--

CREATE TABLE `periodos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `fecha_i` date NOT NULL,
  `fecha_f` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `periodos`
--

INSERT INTO `periodos` (`id`, `nombre`, `fecha_i`, `fecha_f`) VALUES
(1, 'JUL-1', '2020-07-02', '2020-07-09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `passw` varchar(30) NOT NULL,
  `nivel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `correo`, `passw`, `nivel`) VALUES
(2, 'Alejandro ', 'Cabello ', 'ale.cabello15@gmail.com', '1234', '3'),
(6, 'Camilo', 'Figueroa', 'camilofig@gmail.com', '1234', '2'),
(7, 'Jefferson', 'Caballero', 'jefferster@gmail.com', '1234', '1'),
(9, 'Victor', 'Figueroa', 'victorfigueroa@gmail.com', '1234', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `archivos_compartidos`
--
ALTER TABLE `archivos_compartidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `casos`
--
ALTER TABLE `casos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `periodos`
--
ALTER TABLE `periodos`
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
-- AUTO_INCREMENT de la tabla `archivos`
--
ALTER TABLE `archivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `archivos_compartidos`
--
ALTER TABLE `archivos_compartidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `casos`
--
ALTER TABLE `casos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `periodos`
--
ALTER TABLE `periodos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
