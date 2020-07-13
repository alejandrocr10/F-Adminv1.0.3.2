-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 25, 2020 at 05:32 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sisnotas`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnos`
--

CREATE TABLE IF NOT EXISTS `alumnos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cedula` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellidos` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombres` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(99) NOT NULL,
  `direccion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `codSeccion` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`cedula`),
  UNIQUE KEY `id_2` (`id`),
  KEY `codSeccion` (`codSeccion`),
  KEY `id` (`id`),
  KEY `codSeccion_2` (`codSeccion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=41 ;

--
-- Dumping data for table `alumnos`
--

INSERT INTO `alumnos` (`id`, `cedula`, `apellidos`, `nombres`, `edad`, `direccion`, `email`, `telefono`, `codSeccion`, `fecha`) VALUES
(38, '10007007', 'Solis Gaspar', 'Marco Antonio', 60, 'av.mexico', 'marcox@gmail.com', '04142584585', 'I2DK', '1959-12-31'),
(35, '18111222', 'Gonzales', 'El Zorro', 40, 'av.espaÃ±a', 'zorrillo@gmail.com', '04148547458', 'I2DK', '1980-01-01'),
(39, '26458007', 'Neutron Cabello', 'Jimmy Jose', 20, 'av.Cancamure', 'jimmy@gmail.com', '04248589224', 'I5DI', '1999-12-31'),
(30, '26592578', 'Blanco Vallenilla', 'Ivan Dario', 23, 'Urb.La villa', 'ivandario@gmail.com', '02125968574', 'I5DI', '1997-02-05'),
(31, '26789456', 'Serrano Millan', 'Miriangelys Antonieta', 20, 'Urb.Villa la guardia', 'mirianto@gmail.com', '04142536987', 'I4DI', '1999-01-12'),
(32, '26918741', ' Figueroa Romero', 'Victor Ramon', 10, 'av.cancamure', 'viti-10.10@gmail.com', '04148589224', 'I1DI', '2009-02-03'),
(25, '26918748', 'Cabello Romero', 'Alejandro Yousef', 20, 'Av.Cancamure', 'ale.cabello15@gmail.com', '04248589224', 'I4DI', '1999-09-06'),
(34, '26918749', 'Cabello Romero', 'Alejandro Yousef', 20, 'av.cancamure', 'ale.cabello15@gmail.com', '04248589224', 'I4DI', '1999-09-06'),
(28, '27080883', 'Castro Coronado', 'Juan Miguel', 19, 'urb.Caiguire', 'yendifer@gmail.com', '04142569878', 'I5DI', '0000-00-00'),
(27, '27208556', 'Medina Guevara', 'Adrian Felipe', 20, 'Urb.El penon', 'adrianfmg@gmail.com', '04142145689', 'I4DI', '1999-02-11'),
(26, '27458357', 'Marquez Natera', 'Jesus Daniel', 19, 'Urb. La matica', 'jesus123@gmail.com', '04142589878', 'I4DI', '2000-08-08'),
(37, '44444444', 'zzzzzzzzzzzz', 'zzzzzzzzzzzz', 20, 'zzzzzzzzzzz', 'ale.cabello15@gmail.com', '00000000000000', 'I3DI', '2020-01-01'),
(36, '4621360', 'Cabello', 'Margarita', 60, 'cumana', 'margot@hotmail.com', '04141898496', 'I1DQ', '1970-03-05'),
(40, '999', 'Jackson', 'Michael ', 60, 'Av.Neverland', 'michael@gmail.com', '04148595654', 'I5DR', '1959-01-10');

-- --------------------------------------------------------

--
-- Table structure for table `asignam`
--

CREATE TABLE IF NOT EXISTS `asignam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ci_prof` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre_mat` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_prof` (`ci_prof`),
  KEY `nombre_mat` (`nombre_mat`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `asignam`
--

INSERT INTO `asignam` (`id`, `ci_prof`, `nombre_mat`) VALUES
(7, '26458526', 'LENGUAJE Y COMUNICACION'),
(8, '26918748', 'ADMINISTRACION DE EMPRESAS'),
(9, '26918748', 'MATEMATICA I'),
(10, '26918748', 'INFORMATICA BASICA'),
(11, '26918748', 'METODOLOGIA DE LA INVESTIGACION'),
(12, '26918748', 'LOGICA'),
(13, '26918748', 'INGLES INSTRUMENTAL'),
(14, '26458526', 'ORGANIZACION Y METODOS'),
(15, '26458526', 'EDUCACION CIUDADANA'),
(16, '26458526', 'MATEMATICA II'),
(17, '26458526', 'LENGUAJE DE PROGRAMACION I'),
(18, '16252362', 'ANALISIS Y DISENO DE SISTEMAS I'),
(19, '16252362', 'ESTRUCTURA DE DATOS'),
(20, '16252362', 'CALCULO MATRICIAL'),
(21, '16252362', 'LENGUAJE DE PROGRAMACION II'),
(22, '17568555', 'ESTADISTICA PROBABILISTICA'),
(23, '20253698', 'PLANIFICACION DE PROYECTOS'),
(24, '20253698', 'TELEPROCESOS'),
(25, '20253698', 'AUDITORIA DE SISTEMAS'),
(26, '20253698', 'LENGUAJE DE PROGAMACION IV'),
(27, '20253698', 'INVESTIGACION DE OPERACIONES'),
(28, '20253698', 'SIMULACION DE SISTEMAS'),
(29, '20253698', 'TELECOMUNICACIONES'),
(30, '999', 'FORMACION CONTABLE'),
(31, '999', 'ESTADISTICA GENERAL'),
(32, '999', 'CALCULO MATRICIAL'),
(33, '26918748', 'SIMULACION DE SISTEMAS');

-- --------------------------------------------------------

--
-- Table structure for table `materias`
--

CREATE TABLE IF NOT EXISTS `materias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codMateria` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `semestre` int(11) NOT NULL,
  PRIMARY KEY (`codMateria`),
  UNIQUE KEY `codMateria` (`codMateria`),
  UNIQUE KEY `nombre_2` (`nombre`),
  UNIQUE KEY `codMateria_2` (`codMateria`),
  KEY `nombre` (`nombre`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=37 ;

--
-- Dumping data for table `materias`
--

INSERT INTO `materias` (`id`, `codMateria`, `nombre`, `semestre`) VALUES
(1, '05A11', 'ADMINISTRACION DE EMPRESAS', 1),
(2, '05A12', 'LENGUAJE Y COMUNICACION', 1),
(3, '05A13', 'MATEMATICA I', 1),
(4, '05A14', 'INFORMATICA BASICA', 1),
(5, '05A15', 'METODOLOGIA DE LA INVESTIGACION', 1),
(6, '05A16', 'LOGICA', 1),
(7, '05A17', 'INGLES INSTRUMENTAL', 1),
(8, '05B21', 'ORGANIZACION Y METODOS', 2),
(9, '05B22', 'EDUCACION CIUDADANA', 2),
(10, '05B23', 'MATEMATICA II', 2),
(11, '05B24', 'LENGUAJE DE PROGRAMACION I', 2),
(12, '05B25', 'SISTEMAS DE INFORMACION', 2),
(13, '05B26', 'ARQUITECTURA DEL COMPUTADOR', 2),
(14, '05B27', 'INGLES INSTRUMENTAL II', 2),
(15, '05C31', 'ANALISIS Y DISENO DE SISTEMAS I', 3),
(16, '05C32', 'ESTRUCTURA DE DATOS', 3),
(17, '05C33', 'CALCULO MATRICIAL', 3),
(18, '05C34', 'LENGUAJE DE PROGRAMACION II', 3),
(19, '05C35', 'ESTADISTICA GENERAL', 3),
(20, '05C36', 'FORMACION CONTABLE', 3),
(21, '05D41', 'ANALISIS Y DISENO DE SISTEMAS II', 4),
(22, '05D42', 'EDUCACION AMBIENTAL', 4),
(23, '05D43', 'BASE DE DATOS', 4),
(24, '05D44', 'LENGUAJE DE PROGRAMACION III', 4),
(25, '05D45', 'ESTADISTICA PROBABILISTICA', 4),
(36, '05D46', 'INFO. SOCIEDAD Y ORGANIZACION', 4),
(27, '05D47', 'SISTEMAS OPERATIVOS', 4),
(29, '05E51', 'PLANIFICACION DE PROYECTOS', 5),
(30, '05E52', 'TELEPROCESOS', 5),
(31, '05E53', 'AUDITORIA DE SISTEMAS', 5),
(32, '05E54', 'LENGUAJE DE PROGAMACION IV', 5),
(33, '05E55', 'INVESTIGACION DE OPERACIONES', 5),
(34, '05E56', 'SIMULACION DE SISTEMAS', 5),
(35, '05E57', 'TELECOMUNICACIONES', 5),
(28, '05SCO', 'SERVICIO COMUNITARIO', 4);

-- --------------------------------------------------------

--
-- Table structure for table `notas`
--

CREATE TABLE IF NOT EXISTS `notas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cedula` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombreMat` varchar(30) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `codMateria` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `periodo` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `n1` float NOT NULL,
  `n2` float NOT NULL,
  `n3` float NOT NULL,
  `n4` float NOT NULL,
  `ob` float DEFAULT NULL,
  `total` float NOT NULL,
  `notaF` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cedula` (`cedula`),
  KEY `codMateria` (`codMateria`),
  KEY `nombreMat` (`nombreMat`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=58 ;

--
-- Dumping data for table `notas`
--

INSERT INTO `notas` (`id`, `cedula`, `nombreMat`, `codMateria`, `periodo`, `n1`, `n2`, `n3`, `n4`, `ob`, `total`, `notaF`) VALUES
(38, '26918748', 'MATEMATICA I', '05A13', 'p1-2020', 13, 13, 13, 20, 0, 59, 11),
(39, '26918748', 'PLANIFICACION DE PROYECTOS', '05E51', 'P1-2020', 15, 15, 15, 25, 0, 70, 14),
(40, '26918748', 'LOGICA', '05A16', 'P1-2020', 25, 25, 25, 25, 0, 100, 20),
(41, '26918748', 'ADMINISTRACION DE EMPRESAS', '05A11', 'P1-2020', 20, 20, 20, 20, 0, 80, 16),
(42, '26918748', 'LENGUAJE Y COMUNICACION', '05A12', 'P1-2020', 15, 10, 20, 18, 0, 63, 12),
(43, '26918748', 'INFORMATICA BASICA', '05A14', 'P1-2020', 10, 10, 10, 3, 0, 33, 6),
(45, '26918748', 'ORGANIZACION Y METODOS', '05B21', 'P1-2020', 10, 11, 12, 13, 11, 46, 10),
(48, '26918748', 'PLANIFICACION DE PROYECTOS', '05E51', 'P1-2020', 25, 18, 18, 22, 0, 83, 16),
(49, '26918748', 'AUDITORIA DE SISTEMAS', '05E53', 'P1-2020', 23, 10, 25, 17, 0, 75, 15),
(50, '999', 'FORMACION CONTABLE', '05C36', 'P1-2020', 16, 20, 12, 10, 0, 58, 11),
(51, '999', 'CALCULO MATRICIAL', '05C33', 'P1-2020', 20, 18, 19, 15, 0, 72, 14),
(52, '26918748', 'AUDITORIA DE SISTEMAS', '05E53', 'P2-2020', 10, 10, 10, 10, 12, 40, 10),
(53, '999', 'MATEMATICA I', '05A13', 'p1-2020', 20, 20, 25, 18, 0, 83, 16),
(54, '4621360', 'MATEMATICA I', '05A13', 'p1-2020', 20, 20, 25, 18, 0, 83, 16),
(55, '10007007', 'MATEMATICA I', '05A13', 'p1-2020', 18, 18, 18, 18, 0, 72, 14),
(56, '26592578', 'MATEMATICA I', '05A13', 'p1-2020', 20, 20, 25, 18, 0, 83, 16),
(57, '27458357', 'MATEMATICA I', '05A13', 'p1-2020', 18, 18, 18, 18, 0, 72, 14);

-- --------------------------------------------------------

--
-- Table structure for table `periodo`
--

CREATE TABLE IF NOT EXISTS `periodo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `profesores`
--

CREATE TABLE IF NOT EXISTS `profesores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cedula` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellidos` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombres` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `FechaNac` date NOT NULL,
  `Especialidad` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `direccion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `genero` int(11) NOT NULL,
  PRIMARY KEY (`cedula`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `profesores`
--

INSERT INTO `profesores` (`id`, `cedula`, `apellidos`, `nombres`, `email`, `telefono`, `FechaNac`, `Especialidad`, `direccion`, `genero`) VALUES
(5, '16252362', 'Suarez', 'Armando', 'ale.cabello15@gmail.com', '04148598741', '1970-02-04', 'Bachiller', 'Urb.llanada', 1),
(4, '17568555', 'Marquez', 'Carlos', 'carlosm@gmail.com', '04248589554', '1980-02-11', 'Lic.Informatica', 'Urb.Campeche', 1),
(3, '20253698', 'Leonet', 'Genesis', 'geneleo@gmail.com', '04248596547', '1999-02-04', 'Ing.Informatica', 'Urb.Brasil sur', 2),
(7, '26458526', 'Medina', 'Adrian', 'mediadrian@gmail.com', '04148589558', '1999-02-05', 'T.S.U Peluqueria Avanzada', 'Urb.El peÃ±on', 1),
(6, '26918748', 'Cabello', 'Alejandro', 'ale.cabello15@gmail.com', '04248589224', '1999-09-06', 'Ing.Informatico', 'Urb.New York', 1),
(9, '898789', 'Hernandez', 'Carolina ', 'carolg@gmail.com', '04148589988', '1995-12-31', 'ing.Petrolero', 'av.cancan', 2),
(8, '999', 'Jackson', 'Michael ', 'michael@gmail.com', '04148569654', '1959-01-10', 'Cantante', 'av.Neverland', 1);

-- --------------------------------------------------------

--
-- Table structure for table `seccion`
--

CREATE TABLE IF NOT EXISTS `seccion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `carrera` varchar(30) NOT NULL,
  `semestre` int(11) NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `seccion`
--

INSERT INTO `seccion` (`id`, `carrera`, `semestre`, `nombre`) VALUES
(1, 'Informatica', 1, 'I1DI'),
(8, 'Informatica', 2, 'I2DI'),
(9, 'Informatica', 3, 'I3DI'),
(10, 'Informatica', 4, 'I4DI'),
(11, 'Informatica', 5, 'I5DI'),
(12, 'Informatica', 5, 'I5DJ'),
(13, 'Informatica', 2, 'I2DK'),
(14, 'Informatica', 3, 'I3DJ'),
(15, 'Informatica', 1, 'I1DQ'),
(16, 'Informatica', 5, 'I5DR');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(30) NOT NULL,
  `passw` varchar(30) NOT NULL,
  `rol` int(11) NOT NULL,
  `cedula` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cedula` (`cedula`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `passw`, `rol`, `cedula`) VALUES
(4, 'admin', '1234', 1, '26918748'),
(8, 'pcarlos', '1234', 2, '17568555'),
(9, 'genesis', '1234', 2, '20253698'),
(10, 'mj', '1234', 2, '999'),
(11, 'carolg', '1234', 1, '898789');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`codSeccion`) REFERENCES `seccion` (`nombre`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `asignam`
--
ALTER TABLE `asignam`
  ADD CONSTRAINT `asignam_ibfk_1` FOREIGN KEY (`ci_prof`) REFERENCES `profesores` (`cedula`);

--
-- Constraints for table `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `materias-notas-cedula` FOREIGN KEY (`cedula`) REFERENCES `alumnos` (`cedula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materias-notas-codmateria` FOREIGN KEY (`codMateria`) REFERENCES `materias` (`codMateria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notas_ibfk_1` FOREIGN KEY (`nombreMat`) REFERENCES `materias` (`nombre`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`cedula`) REFERENCES `profesores` (`cedula`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
