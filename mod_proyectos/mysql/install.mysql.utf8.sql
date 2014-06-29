-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-06-2014 a las 16:15:21
-- Versión del servidor: 5.5.35
-- Versión de PHP: 5.4.4-14+deb7u9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bd_joomla`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `#__AREA_ESTUDIO`
--

CREATE TABLE IF NOT EXISTS `#__AREA_ESTUDIO` (
  `NOMBRE_AREA` varchar(200) NOT NULL,
  `ID_AREA` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID_AREA`),
  KEY `NOMBRE_AREA` (`NOMBRE_AREA`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `#__AREA_ESTUDIO`
--

INSERT INTO `#__AREA_ESTUDIO` (`NOMBRE_AREA`, `ID_AREA`) VALUES
('Automatización de procesos', 1),
('Bases de datos y seguridad', 2),
('Comunicación', 3),
('Dispositivos de almacenamiento y procesamiento', 4),
('Ecología', 5),
('Educación digital', 6),
('Gerencial', 7),
('Imagen Digital', 8),
('INFORMATICA', 9),
('Robótica e inteligencia artificial', 10),
('Seguridad web', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `#__PAIS`
--

CREATE TABLE IF NOT EXISTS `#__PAIS` (
  `NOMBRE_PAIS` varchar(100) NOT NULL,
  `ID_PAIS` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID_PAIS`),
  KEY `NOMBRE_PAIS` (`NOMBRE_PAIS`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `#__PAIS`
--

INSERT INTO `#__PAIS` (`NOMBRE_PAIS`, `ID_PAIS`) VALUES
('Argentina', 1),
('Chile', 2),
('Colombia', 3),
('Costa Rica', 4),
('Cuba', 5),
('El Salvador', 6),
('México', 7),
('Panamá', 8),
('Paraguay', 9),
('Republica Dominicana', 10),
('Uruguay', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `#__PROYECTO`
--

CREATE TABLE IF NOT EXISTS `#__PROYECTO` (
  `ID_PROYECTO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_UNIVERSIDAD` int(11) DEFAULT NULL,
  `ID_PAIS` int(11) DEFAULT NULL,
  `ID_AREA` int(11) DEFAULT NULL,
  `NOMBRE_PROYECTO` varchar(100) NOT NULL,
  `RESPONSABLE` varchar(1000) NOT NULL,
  `COSTO` decimal(12,3) DEFAULT NULL,
  `ANO` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_PROYECTO`),
  KEY `FK_PERTENECE_A` (`ID_AREA`),
  KEY `FK_SE_CREAN` (`ID_UNIVERSIDAD`),
  KEY `FK_SE_REALIZAN` (`ID_PAIS`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Volcado de datos para la tabla `#__PROYECTO`
--

INSERT INTO `#__PROYECTO` (`ID_PROYECTO`, `ID_UNIVERSIDAD`, `ID_PAIS`, `ID_AREA`, `NOMBRE_PROYECTO`, `RESPONSABLE`, `COSTO`, `ANO`) VALUES
(1, 14, 10, 10, 'O&R  (TOMMY)\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'José Antonio Martinó, Tomas E. Concepción, Rony Vásquez Batías, Miguen Ángel Fermín, Eddys Gonzales Ozuna.\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', NULL, NULL),
(2, 7, 11, 2, 'Estructura de datos Distribuidos Escalables\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'Thomas Schwarz,  witoldlitwind, Darrell Long,SuchilJajodia, J.J Chabkinian y YakubHanafi\0Eddys Gonzales Ozuna.\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', NULL, 2012),
(3, 7, 11, 2, 'Sistemas masivos de almacenamiento\0calables\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'Darrell Long, Ethan Miller, Thomas Schwarz, Ahmed Amer,  Andy Hospodor, Jehan-François Pâris, WitoldLitwin, Stephanie Jones, Christina Strong, Zhike Zhang, Kevin Greenan, AvaniWildani, Damian Cieslicki y Stefan Schaekeler\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', NULL, 2012),
(4, 17, 8, 6, 'LACCIR\0\0', 'Clifton E. Clunie, Dra. Gisela T. de Clunie - MGTR. Jeanette Rileylifton E. Clunie, Dra. Gisela T. de Clunie - MGTR. JeanetteRiley', 50000.000, 2014),
(5, 17, 8, 6, 'Integración de los Estilos de Aprendizajes a los Sistemas Tutoriales Inteligentes', 'Euclides Samaniego Gonzalez,Nicolás A. Samaniego F. - Nicholas Béliz Osorio - Mirna M. Samaniego G.', 18724.200, 2013),
(6, 17, 8, 6, 'Evaluación del  proceso de  transformación curricular de  la educación  Media.', 'Nicolás A., Samamiego F., Anayansi Escobar, Arturo Rivera, Isis Nuñez, Euclides Samaniego Gonzales', NULL, 2013),
(7, 17, 8, 5, 'Análisis, Diseño y  Desarrollo de  un Sistema  Basado en el  Conocimiento  para Selección de Pastos', 'Nicholas Béliz Osorio, José Luis Alba Guerra,Cristiano Añico.', NULL, 2012),
(8, 6, 9, 10, 'Juca', 'Guillermo Ledesma', NULL, NULL),
(9, 2, 7, 5, 'Tecnología ecológica de nixtamalizacion húmeda para la producción de tortilla', 'Dr. Juan de Dios Figueroa', NULL, NULL),
(10, 16, 7, 8, 'Análisis  Cinemático de  movimiento  empleando  imágenes  digitales', 'M. Acevedo, F. Jaimes', NULL, 2000),
(11, 16, 7, 9, 'Diseño y simulación de convertidores analógicos para funciones no lineales', 'S. Raczynski', NULL, 2000),
(12, 16, 7, 10, 'Diseño de  cinemática  para brazos de  robots', 'S. Raczynski', NULL, 2000),
(13, 16, 7, 10, 'Diseño y  simulación de  convertidores  analógicos  para funciones  no lineales', 'S. Raczynski', NULL, 2000),
(14, 16, 7, 7, 'Sistema  Gerencial de  Información', 'O. Aguirre', NULL, 2001),
(15, 16, 7, 9, 'Sistema de  Beneficios  Flexibles', 'O. Aguirre', NULL, 2001),
(16, 16, 7, 1, 'Sistema de Control de Rutas', 'O. Aguirre', NULL, 2001),
(17, 16, 7, 1, 'Automatización de Trámites Gubernamentales', 'O. Aguirre', NULL, 2001),
(18, 16, 7, 9, 'LESMEC', 'S. Raczynski', NULL, 2001),
(19, 12, 5, 7, 'Modelo para  el análisis de  riesgos en  líneas de  productos de  software', 'Vladimir Martell Fernández', NULL, 2014),
(20, 12, 5, 4, 'Modelo para la extensión de las capacidades de procesamiento y memoria de tarjetas inteligentes Java', 'Susana María Ramírez Brey, Adonis César Legón Campo, Yusnier Valle Martínez', NULL, 2014),
(21, 10, 6, 1, 'Desarrollo de una plataforma de comunicaciones de bajo costo para el sector salud.', 'Werner David Meléndez', NULL, 2014),
(22, 9, 2, 3, 'Web  Información  Retrieval', 'Carlos Castillo', NULL, 2004),
(23, 9, 2, 4, 'Web Faces', 'Dr. Javier Ruiz Del Solar. Dr. Ricardo Baeza-Yates. Rodrigo Verschae Tannembaum. Karina Figueroa Mora. Julio Quinteros Felipe Ortiz Marín', NULL, 2004),
(24, 9, 2, 8, 'Ventana  Digital', '', NULL, 2004),
(25, 9, 2, 9, 'IXPN', 'Dr. Gonzalo Navarro', NULL, 2004),
(26, 15, 3, 6, 'Proyecto 50', 'Gloria Patricia, Claudia María ,Isabel Cristina, Ramón Eduardo y Juan Fernando', NULL, 2010),
(27, 11, 1, 9, 'Tecnologías y  Aplicaciones  en Sistemas  de Software  Distribuidos', 'Lic. Patricia Pesado y Dra. Cecilia Sanz', NULL, 2010),
(28, 11, 1, 9, 'Arquitecturas  Multiprocesador Distribuidas', 'Ing. Armando de Giusti y Dr. Fernando Tinetti', NULL, 2010),
(29, 11, 1, 4, 'Procesamiento Paralelo y Distribuido', 'Dr. R. Marcelo Naiouf y Lic.LauraLanzarini', NULL, 2010),
(30, 3, 4, 5, 'Figura e Flora', '', NULL, 2011),
(31, 3, 4, 9, 'eBridge 2.0', '', NULL, 2011),
(32, 5, 7, 9, 'MEXICA-impro', 'Vicente Castellanos Cerda. Dr. Rafael Pérez y Pérez. Dr. Eduardo Peñalosa, Dr. Santiago Negrete, Mtro. Otoniel Martínez, Mtro. Arturo Luna.', NULL, 2008),
(33, 5, 7, 8, 'PROMEP', 'Inés Cornejo, Vicente Castellanos, Francisco Mata, Carlos Saldaña, Daniel Peña, Jorge Suárez. Alejandra Osorio. Jesús Octavio Elizondo Martínez.', NULL, 2011),
(34, 5, 7, 6, 'Análisis de  espacios  naturales y  virtuales', 'Diego Carlos Mendez Granados.', NULL, 2011),
(35, 4, 9, 9, 'Estudio de la  eficacia y  eficiencia en la  implementaci  ón de  sistemas  informatico', 'Gustavo A.Ortiz', NULL, NULL),
(36, 13, 8, 3, 'Redes  Avanzadas de  Investigación', '', NULL, NULL),
(37, 13, 8, 9, 'ALICE2', '', NULL, NULL),
(38, 8, 8, 11, 'Modelación  léxico  semántica de  descripciones  de servicios  web', 'Dr. Christian Sánchez Sánchez', NULL, 2011),
(39, 5, 7, 9, 'Diseño de un ambiente de aprendizaje colaborativo', 'Dr. Caridad García Hernández y Mtra. Lucila Mercado. Caridad García Hernández.', NULL, 2011);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `#__UNIVERSIDAD`
--

CREATE TABLE IF NOT EXISTS `#__UNIVERSIDAD` (
  `NOMBRE_UNIVERSIDAD` varchar(200) NOT NULL,
  `ID_PAIS` INT(11) NOT NULL,
  `ID_UNIVERSIDAD` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID_UNIVERSIDAD`),
  UNIQUE KEY `NOMBRE_UNIVERSIDAD` (`NOMBRE_UNIVERSIDAD`),
   KEY `FK_TIENE` (`ID_PAIS`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `#__UNIVERSIDAD`
--
INSERT INTO `#__UNIVERSIDAD` (`NOMBRE_UNIVERSIDAD`, `ID_PAIS`, `ID_UNIVERSIDAD`) VALUES

('Instituto Politécnico Nacional', 7, 2),
('TEC (Tecnológico de Costa Rica)', 4, 3),
('Universidad Americana', 9, 4),
('Universidad Autonoma Metropolitana', 7, 5),
('Universidad Católica "Nuestra Señora de Asunción"', 9, 6),
('Universidad Catolica del Uruguay', 11, 7),
('Universidad Comunera', 8, 8),
('Universidad de Chile', 2, 9),
('Universidad de El Salvador', 6, 10),
('Universidad de la Plata', 1, 11),
('Universidad de las Ciencias Informáticas', 5, 12),
('Universidad de Panamá', 8, 13),
('Universidad Dominicana O&M', 10, 14),
('Universidad EAFIT', 3, 15),
('Universidad Panamericana', 7, 16),
('Universidad Tecnológica de Panamá.', 8, 17);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `#__PROYECTO`
--
ALTER TABLE `#__PROYECTO`
  ADD CONSTRAINT `FK_PERTENECE_A` FOREIGN KEY (`ID_AREA`) REFERENCES `#__AREA_ESTUDIO` (`ID_AREA`),
  ADD CONSTRAINT `FK_SE_CREAN` FOREIGN KEY (`ID_UNIVERSIDAD`) REFERENCES `#__UNIVERSIDAD` (`ID_UNIVERSIDAD`),
  ADD CONSTRAINT `FK_SE_REALIZAN` FOREIGN KEY (`ID_PAIS`) REFERENCES `#__PAIS` (`ID_PAIS`);

--
-- Filtros para la tabla `#__UNIVERSIDAD`
--
ALTER TABLE `#__UNIVERSIDAD`
  ADD CONSTRAINT `UNIVERSIDAD_ibfk_2` FOREIGN KEY (`ID_PAIS`) REFERENCES `#__PAIS` (`ID_PAIS`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
