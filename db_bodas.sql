-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-03-2020 a las 14:48:47
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_bodas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE `actividad` (
  `idactividad` int(11) NOT NULL,
  `idproveedor` int(11) NOT NULL,
  `nombre_evento` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `tipo_evento` varchar(100) NOT NULL,
  `horario` varchar(50) NOT NULL,
  `direccion_misa` varchar(255) NOT NULL,
  `direccion_recepcion` varchar(255) NOT NULL,
  `nombre_novio` varchar(50) NOT NULL,
  `apellidos_novio` varchar(50) NOT NULL,
  `nombre_novia` varchar(50) NOT NULL,
  `apellidos_novia` varchar(50) NOT NULL,
  `numero_personas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barrio`
--

CREATE TABLE `barrio` (
  `idbarrio` int(11) NOT NULL,
  `idmunicipio` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `condicion` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `barrio`
--

INSERT INTO `barrio` (`idbarrio`, `idmunicipio`, `nombre`, `condicion`) VALUES
(1, 1, 'Guayapaccha', 1),
(2, 1, 'Sekerancho', 1),
(3, 1, 'Flor de la Pampa', 1),
(4, 1, 'Munay Pata - Santa Ana', 1),
(5, 1, 'Tocopilla', 1),
(6, 1, 'Pampa Verde', 1),
(7, 1, 'Palomar', 1),
(8, 1, 'Huayrapata', 1),
(9, 1, 'Robles', 1),
(10, 1, 'Buen Retiro', 1),
(11, 1, 'San Roque - Trujillos', 1),
(12, 1, 'Charquipata', 1),
(13, 1, 'Tarabillo', 1),
(14, 1, 'Huaillapampa', 1),
(15, 1, 'Mojotorillo', 1),
(16, 1, 'K\'uripata o k\'uritambo', 1),
(17, 1, 'Lima Pampa', 1),
(18, 1, 'Pozocancha - Inisterio', 1),
(19, 1, 'Surapata', 1),
(20, 1, 'Calixto', 1),
(21, 1, 'Alkorancho', 1),
(22, 1, 'Alamada', 1),
(23, 1, 'Quinsa Molle', 1),
(24, 1, 'Mosocllacta - Alalaypata', 1),
(35, 9, 'Sopocachi', 1),
(36, 9, 'Chasquipampa', 1),
(37, 9, 'Pura Pura', 1),
(38, 9, 'Cota Cota', 1),
(39, 9, 'Kantutani', 1),
(40, 9, 'Irpavi', 1),
(41, 9, 'Miraflores', 1),
(42, 9, 'Ovejuyo', 1),
(43, 9, 'Alto Obrajes', 1),
(44, 9, 'Pasankeri', 1),
(45, 9, 'Tembladerani', 1),
(46, 9, 'Alto Tacagua', 1),
(47, 9, 'Villa El Carmen', 1),
(48, 9, 'Urbanizacion San Alberto', 1),
(49, 9, 'Villa Pabon', 1),
(50, 9, 'Seguencoma', 1),
(51, 9, 'Meseta de Achumani', 1),
(52, 9, 'Armando Escobar Uria', 1),
(53, 9, 'Casco Urbano Central', 1),
(54, 9, 'Barrio Rosasani', 1),
(55, 9, 'Sector \"B\" Alto Obrajes', 1),
(56, 9, 'San Miguel', 1),
(57, 9, 'Urbanizacion Los Claveles', 1),
(58, 9, 'Auquisamaña Bajo', 1),
(59, 9, 'Barrio Primavera', 1),
(60, 9, 'San Pedro Alto II', 1),
(61, 9, 'Alto Florida', 1),
(62, 9, 'Bolognia', 1),
(63, 9, 'Urbanizacion Miraflores', 1),
(64, 9, 'Alto Puerto Rico Miraflores', 1),
(65, 9, 'Aranjuez', 1),
(66, 9, 'Rosario', 1),
(67, 9, 'Cristo Rey', 1),
(68, 9, 'San Sebastian', 1),
(69, 9, 'Urbanizacion Virgen De Las Nieves', 1),
(70, 9, 'San Jorge', 1),
(71, 9, 'Bello Horizonte Alto II', 1),
(72, 9, 'Bella Vista', 1),
(73, 9, 'Obrajes', 1),
(74, 9, 'Urbanizacion Los Rosales', 1),
(75, 9, 'Juan XII', 1),
(76, 9, 'Olympic', 1),
(77, 9, 'Los Pinos', 1),
(78, 9, 'Lomas de Irpavi', 1),
(79, 9, 'Sector \"A\" Alto Obrajes', 1),
(80, 9, 'Parque Libano', 1),
(81, 9, 'San Pedro', 1),
(82, 9, 'San Luis', 1),
(83, 9, 'Urbanizacion Montebello', 1),
(84, 9, 'Santa Barbara', 1),
(85, 48, 'Ciudad Satelite', 1),
(86, 48, 'Villa Ingenio', 1),
(87, 48, 'Villa Cooperativa', 1),
(88, 48, 'Villa Exaltacion', 1),
(89, 48, 'Parcopata', 1),
(90, 48, 'Urbanizacion Nuevo Amanecer', 1),
(91, 48, 'Villa Dolores F', 1),
(92, 48, 'Villa Bolivar \"A\"', 1),
(93, 48, 'Pata Patani', 1),
(94, 48, 'Kenko', 1),
(95, 48, 'Urbanizacion 18 de Diciembre', 1),
(96, 48, 'Urbanizacion Corazon de Jesus', 1),
(97, 48, 'Villa Dolores', 1),
(98, 48, 'Urbanizacion El Ingenio D2 U2', 1),
(99, 48, 'Urbanizacion Litoral', 1),
(100, 48, 'Tejada Triangular', 1),
(101, 48, 'Zona Santa Isabel', 1),
(102, 48, 'Ballivian', 1),
(103, 48, 'Urbanizacion 21 de diciembre', 1),
(104, 48, 'Tejada Alpacoma', 1),
(105, 48, 'Santa Rosa', 1),
(106, 48, 'Cosmos 78-77', 1),
(107, 48, '12 de Octubre', 1),
(108, 48, 'Caloyu', 1),
(109, 48, 'Bolivar \"C\"', 1),
(110, 48, 'Santiago I', 1),
(111, 48, 'Zona San Agustin I D8', 1),
(112, 48, 'Yungoyu', 1),
(113, 48, 'Los Andes', 1),
(114, 48, 'San Luis Tasa', 1),
(115, 48, 'Urbanizacion Mercurio', 1),
(116, 48, 'Rosas Pampa', 1),
(117, 48, 'Tejada Rectangular', 1),
(118, 48, 'Bolivar \"B\"', 1),
(119, 48, 'Sector D - Zaragoza', 1),
(120, 48, 'Villa Elizardo Perez', 1),
(121, 48, 'Villa Pacajes', 1),
(122, 13, 'Las Palmas', 1),
(123, 13, 'Sirari', 1),
(124, 13, 'Pampa de la Isla', 1),
(125, 13, 'Barrio Urbarí', 1),
(126, 13, 'Barrio Urbarí', 1),
(127, 13, 'Ramafa', 1),
(128, 13, 'Barrio Equipetrol', 1),
(129, 13, 'Plan 3 mil', 1),
(130, 13, 'Urbanizacion Las Palmitas', 1),
(131, 13, 'Urbanizacion San Pedro', 1),
(132, 13, 'Urbanizacion El Quior', 1),
(133, 13, 'Distrito Municipal 9', 1),
(134, 13, 'Hamacas', 1),
(135, 13, 'El Remanso 1', 1),
(136, 13, 'Braniff', 1),
(137, 13, 'El Remanso 2', 1),
(138, 13, 'Barrio Flamingo', 1),
(139, 13, 'Unidad Vecinal 92', 1),
(140, 13, 'Barrio 27 de mayo', 1),
(141, 13, 'Distrito Municipal 8', 1),
(142, 13, 'Villa 1ro de Mayo', 1),
(143, 13, 'Barrio paititi Norte', 1),
(144, 13, 'San Carlos', 1),
(145, 13, 'UV-1', 1),
(146, 13, 'Santa Rosa', 1),
(147, 13, 'Barrio Virgen de Guadalupe', 1),
(148, 13, 'Barrio Panamericano', 1),
(149, 13, 'Barrio Aeronautico', 1),
(150, 13, 'Barrio San Jorge', 1),
(151, 13, 'Urbanizacion Sevilla II', 1),
(152, 13, 'Lomitas', 1),
(153, 13, 'Ichonfet', 1),
(154, 13, 'Barrio Casa Nova II', 1),
(155, 13, 'Barrio California', 1),
(156, 13, 'UV-2 El Paraiso', 1),
(157, 13, 'Urbanizacion La Rosa De Rodali', 1),
(158, 13, 'Alto Olivo', 1),
(159, 13, 'Los Jubas', 1),
(160, 13, 'Villa Fatima', 1),
(161, 13, 'Estancia El Colorado', 1),
(162, 13, 'Espinal Dorado', 1),
(163, 13, 'Palmar Viruez', 1),
(164, 13, 'Estancia Espinalito', 1),
(165, 13, 'Urbanizacion El Mundo', 1),
(166, 13, 'Urbanizacion Nazareth', 1),
(167, 13, 'La Abra', 1),
(168, 13, 'Bella Flor', 1),
(169, 13, 'Cortada', 1),
(170, 13, 'Sausalito', 1),
(171, 13, 'El Pari', 1),
(172, 13, 'Hilanderia', 1),
(173, 13, 'La Belgica', 1),
(174, 12, 'Villa Copacabana', 1),
(175, 12, 'Cantumarca', 1),
(176, 12, 'Las Delicias', 1),
(177, 12, 'San Benito', 1),
(178, 12, 'San Clemente', 1),
(179, 12, 'Ciudad Satelite', 1),
(180, 12, 'Plan 40', 1),
(181, 12, 'San Gerardo', 1),
(182, 12, 'San Bernardo', 1),
(183, 12, 'Villa Venezuela', 1),
(184, 12, 'Casco Viejo Central', 1),
(185, 12, 'Las Lecherias', 1),
(186, 12, 'San Pedro', 1),
(187, 10, 'San Isidro', 0),
(188, 10, 'Pumas Andinos', 1),
(189, 10, 'San Isidro', 1),
(191, 4, 'Sarcobamba', 1),
(192, 4, 'Queru Queru', 1),
(193, 4, 'Urbanización Lomas De Aranjuez', 1),
(194, 4, 'Colquiri Sud', 1),
(195, 4, 'La Chimba', 1),
(196, 4, 'Urbanizacion Paraiso', 1),
(197, 4, 'Villa Guadalupe', 1),
(198, 4, 'Cala Cala', 1),
(199, 4, 'Las Cuadras', 1),
(200, 4, 'Muyurina', 1),
(201, 4, 'Condebamba', 1),
(202, 4, 'Barrio Irlandes', 1),
(204, 3, 'Belen', 1),
(224, 3, 'Casco Viejo', 1),
(225, 3, 'Belen', 1),
(226, 3, 'Fatima Central', 1),
(227, 3, 'Arroyo Chico', 1),
(228, 3, 'Los Penocos', 1),
(229, 3, '13 De Abril', 1),
(230, 3, '23 De Marzo', 1),
(231, 3, 'Sta Maria', 1),
(232, 3, 'Conavi', 1),
(233, 3, 'Pompeya', 1),
(234, 3, 'Moxos', 1),
(235, 3, '4 De Febrero', 1),
(236, 3, 'Villa Corina', 1),
(237, 3, 'San Juan', 1),
(238, 3, '25 De Diciembre', 1),
(239, 3, 'Pailon', 1),
(240, 3, 'German Busch', 1),
(241, 3, '30 De Agosto', 1),
(242, 3, '18 De agosto', 1),
(243, 3, 'Pantanal', 1),
(244, 3, 'Venecia', 1),
(245, 3, 'San Vicente', 1),
(246, 3, 'San Antonio', 1),
(247, 3, 'Santa Maria', 1),
(248, 3, 'Santa Cruz Sur', 1),
(249, 3, 'Pedro Marban', 1),
(250, 3, 'Machetero', 1),
(251, 3, '27 De Mayo', 1),
(252, 3, '1ro De Mayo', 1),
(253, 3, 'Mangalito', 1),
(254, 3, 'Triunfo', 1),
(255, 3, 'Villa Ximena', 1),
(256, 3, 'Santa Anita', 1),
(257, 3, 'Urbanizacion Marin', 1),
(258, 3, 'Villa Marin', 1),
(259, 3, 'Pedro I', 1),
(260, 3, 'Muiba', 1),
(261, 3, '6 De Agosto', 1),
(262, 3, 'V. Monasterio', 1),
(263, 3, 'Tocopilla', 1),
(264, 3, 'San Luis', 1),
(265, 3, '30 De Noviembre', 1),
(266, 3, 'Virgen De Loreto', 1),
(267, 3, 'Villa Laguna Bomba', 1),
(268, 3, 'El Recreo', 1),
(269, 3, '24 De Septiembre', 1),
(270, 3, 'San Jose', 1),
(271, 3, 'Nuestra Señora De Fatima', 1),
(272, 3, '6 De Septiembre', 1),
(273, 3, 'Cipriano Barace', 1),
(274, 3, '26 De Enero', 1),
(275, 3, '21 De Septiembre', 1),
(276, 3, 'Villa Conchita', 1),
(277, 3, '26 De Enero', 1),
(278, 3, 'Cotoca', 1),
(279, 3, 'Nuestra Señora De La Merced', 1),
(280, 3, 'El Progreso', 1),
(281, 3, 'Nueva Trinidad', 1),
(282, 3, 'Bello Horizonte', 1),
(283, 3, 'Bello Horizonte Norte', 1),
(284, 3, 'Los Tocos', 1),
(285, 3, '12 De Abril', 1),
(286, 3, '24 De Agosto', 1),
(287, 3, 'Florida', 1),
(288, 3, 'Nuevo Amanecer', 1),
(289, 3, 'Villa Vecinal', 1),
(290, 3, 'Tahuichi', 1),
(291, 3, 'Villa Lolita', 1),
(292, 3, '6 De Junio', 1),
(293, 3, 'Profesionales', 1),
(294, 3, 'Sandunga', 1),
(295, 3, 'Sitraluz', 1),
(296, 3, '20 De Agosto', 1),
(297, 3, 'El Carmen', 1),
(298, 3, 'Chaparral', 1),
(299, 3, 'Villa Magdalena', 1),
(300, 14, 'Moto Mendez', 1),
(301, 14, 'Los Chapacos', 1),
(302, 14, 'Luis de Fuentes', 1),
(303, 14, '4 de Julio', 1),
(304, 14, 'La Pampa', 1),
(305, 14, 'La Loma', 1),
(306, 14, '15 De Junio', 1),
(307, 14, 'San Geronimo', 1),
(308, 14, 'IV Centenario', 1),
(309, 14, 'San Antonio', 1),
(310, 14, 'San Jose', 1),
(311, 14, 'Luis Espinal', 1),
(312, 14, '12 De Octubre', 1),
(313, 14, 'La Terminal', 1),
(314, 14, 'Pedro Antonio Flores', 1),
(315, 14, 'Bartolome Attard', 1),
(316, 14, 'Salamanca', 1),
(317, 14, 'San Marcos', 1),
(318, 14, 'Defensores Del Chaco', 1),
(319, 14, 'Guadalquivir', 1),
(320, 14, '7 De Septiembre', 1),
(321, 14, 'Aeropuerto', 1),
(322, 14, 'Narciso Campero', 1),
(323, 14, 'San Pedro', 1),
(324, 14, 'San Bernardo', 1),
(325, 14, 'San Martin', 1),
(326, 14, 'San Roque', 1),
(327, 14, 'Maria De Los Angeles', 1),
(328, 14, 'Oscar Alfaro', 1),
(329, 14, 'Mendez Arcos', 1),
(330, 14, 'German Busch', 1),
(331, 14, 'El Carmen', 1),
(332, 14, 'San Jorge I', 1),
(333, 14, 'Senac', 1),
(334, 14, 'La Florida', 1),
(335, 14, 'Aniceto Arce', 1),
(336, 14, '6 De Agosto', 1),
(337, 14, 'Rosedal', 1),
(338, 14, 'Virgen de Fatima', 1),
(339, 14, 'San Jorge II', 1),
(340, 14, 'Las Palomas', 1),
(341, 14, 'El Tejar', 1),
(342, 14, '15 de Abril', 1),
(343, 14, 'Avaroa', 1),
(344, 14, 'Juan XXIII', 1),
(345, 14, 'El Molino', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boda`
--

CREATE TABLE `boda` (
  `idboda` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `nombre_novio` int(11) NOT NULL,
  `apellidos_novio` varchar(50) NOT NULL,
  `nombre_novia` varchar(50) NOT NULL,
  `apellidos_novia` varchar(50) NOT NULL,
  `direccion_misa` varchar(100) DEFAULT NULL,
  `direccion_evento` varchar(100) DEFAULT NULL,
  `fecha` date NOT NULL,
  `horario` varchar(50) NOT NULL,
  `numero_personas` int(11) DEFAULT NULL,
  `opinion_boda` varchar(256) DEFAULT NULL,
  `condicion` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario_boda`
--

CREATE TABLE `comentario_boda` (
  `idcomentario_boda` int(11) NOT NULL,
  `idboda` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `comentario` varchar(256) NOT NULL,
  `fecha_hora` datetime NOT NULL,
  `imagen` varchar(50) DEFAULT NULL,
  `condicion` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario_publicacion`
--

CREATE TABLE `comentario_publicacion` (
  `idcomentario_publicacion` int(11) NOT NULL,
  `idpublicacion` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `comentario` varchar(256) NOT NULL,
  `imagen` varchar(50) DEFAULT NULL,
  `fecha_hora` datetime NOT NULL,
  `condicion` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `idcontacto` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `comentario` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control_servicio`
--

CREATE TABLE `control_servicio` (
  `idcontrol_servicio` int(11) NOT NULL,
  `idboda` int(11) NOT NULL,
  `idproveedor` int(11) NOT NULL,
  `tipo_proveedor` varchar(50) NOT NULL,
  `costo` decimal(10,2) NOT NULL,
  `condicion` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `iddepartamento` int(11) NOT NULL,
  `idpais` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `condicion` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`iddepartamento`, `idpais`, `nombre`, `condicion`) VALUES
(1, 1, 'Chuquisaca', 1),
(2, 2, 'otro', 1),
(3, 1, 'Beni', 1),
(4, 1, 'Cochabamba', 1),
(5, 1, 'La Paz', 1),
(6, 1, 'Oruro', 1),
(7, 1, 'Pando', 1),
(8, 1, 'Potosi', 1),
(9, 1, 'Santa Cruz', 1),
(10, 1, 'Tarija', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `idevento` int(11) NOT NULL,
  `idproveedor` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `tipo_evento` varchar(100) NOT NULL,
  `numero_personas` int(11) NOT NULL,
  `horario` varchar(50) NOT NULL,
  `tipo_lugar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen_boda`
--

CREATE TABLE `imagen_boda` (
  `idimagen_boda` int(11) NOT NULL,
  `idboda` int(11) NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen_evento`
--

CREATE TABLE `imagen_evento` (
  `idimagen_evento` int(11) NOT NULL,
  `idevento` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invitado`
--

CREATE TABLE `invitado` (
  `idinvitado` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idboda` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tipo_invitado` varchar(50) NOT NULL,
  `condicion` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `idmunicipio` int(11) NOT NULL,
  `iddepartamento` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `condicion` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`idmunicipio`, `iddepartamento`, `nombre`, `condicion`) VALUES
(1, 1, 'Sucre', 1),
(2, 1, 'Otro', 1),
(3, 3, 'Trinidad', 1),
(4, 4, 'Cochabamba', 1),
(9, 5, 'La Paz', 1),
(10, 6, 'Oruro', 1),
(11, 7, 'Cobija', 1),
(12, 8, 'Potosi', 1),
(13, 9, 'Santa Cruz', 1),
(14, 10, 'Tarija', 1),
(15, 1, 'Villa Azurduy', 1),
(16, 1, 'Tarvita', 1),
(17, 1, 'Villa Serrano', 1),
(18, 1, 'Monteagudo', 1),
(19, 1, 'San pablo de Huacareta', 1),
(20, 1, 'Villa Vaca Guzman', 1),
(21, 1, 'Huacaya', 1),
(22, 1, 'Machareti', 1),
(23, 1, 'Camargo', 1),
(24, 1, 'Hincahuasi', 1),
(25, 1, 'San Lucas', 1),
(26, 1, 'Villa Charcas', 1),
(27, 1, 'Poroma', 1),
(28, 1, 'Yotala', 1),
(29, 1, 'Camataqui', 1),
(30, 1, 'Culpina', 1),
(31, 1, 'Las Carreras', 1),
(32, 1, 'Padilla', 1),
(33, 1, 'El villar', 1),
(34, 1, 'Sopachuy', 1),
(35, 1, 'Tomina', 1),
(36, 1, 'Villa Alcala', 1),
(37, 1, 'Tarabuco', 1),
(38, 1, 'Yamparaez', 1),
(39, 1, 'Villa Zudañes', 1),
(40, 1, 'Icla', 1),
(41, 1, 'Presto', 1),
(42, 1, 'Villa Mojocoya', 1),
(43, 5, 'Comanche', 1),
(45, 5, 'Palca', 1),
(46, 5, 'Mecapaca', 1),
(47, 5, 'Achocalla', 1),
(48, 5, 'El Alto', 1),
(49, 5, 'Achacachi', 1),
(50, 5, 'Ancoraimes', 1),
(51, 5, 'Chua Cocani', 1),
(52, 5, 'Huarina', 1),
(53, 5, 'Santiago de Huata', 1),
(54, 5, 'Huatajata', 1),
(55, 5, 'Coro Coro', 1),
(56, 5, 'Caquiaviri', 1),
(57, 5, 'Calacoto', 1),
(58, 5, 'Charaña', 1),
(59, 5, 'Waldo Ballivián', 1),
(60, 5, 'Nazacara de Pacajes', 1),
(61, 5, 'Santiago de Callapa', 1),
(62, 5, 'Puerto Acosta', 1),
(63, 5, 'Mocomoco', 1),
(64, 5, 'Puerto Carabuco', 1),
(65, 5, 'Humanata', 1),
(66, 5, 'Escoma', 1),
(67, 5, 'Chuma', 1),
(68, 5, 'Viacha', 1),
(69, 5, 'Ayata', 1),
(70, 5, 'Aucapata', 1),
(71, 5, 'Sorata', 1),
(72, 5, 'Guanay', 1),
(73, 5, 'Tacacoma', 1),
(74, 5, 'Guaqui', 1),
(75, 5, 'Quiabaya', 1),
(76, 5, 'Combaya', 1),
(77, 5, 'Tipuani', 1),
(78, 5, 'Mapiri', 1),
(79, 5, 'Teoponte', 1),
(80, 5, 'Apolo', 1),
(81, 5, 'Pelechuco', 1),
(82, 5, 'Palos Blancos', 1),
(83, 5, 'Tiahuanacu', 1),
(84, 5, 'Desaguadero', 1),
(85, 5, 'San Andrés de Machaca', 1),
(86, 5, 'Jesús de Machaca', 1),
(87, 5, 'Taraco', 1),
(88, 5, 'Luribay', 1),
(89, 5, 'Sapahaqui', 1),
(90, 5, 'Yaco', 1),
(91, 5, 'Malla', 1),
(92, 5, 'Cairoma', 1),
(93, 5, 'Inquisivi', 1),
(94, 5, 'Quime', 1),
(95, 5, 'La Asunta', 1),
(96, 5, 'Cajuata', 1),
(97, 5, 'Colquiri', 1),
(98, 5, 'Ichoca', 1),
(99, 5, 'Licoma Pampa', 1),
(100, 5, 'Chulumani', 1),
(101, 5, 'Irupana', 1),
(102, 5, 'Yanacachi', 1),
(103, 5, 'Pucarani', 1),
(104, 5, 'Laja', 1),
(105, 5, 'Batallas', 1),
(106, 5, 'Puerto Pérez', 1),
(107, 5, 'Sica Sica', 1),
(108, 5, 'Umala', 1),
(109, 5, 'Ayo Ayo', 1),
(110, 5, 'Calamarca', 1),
(111, 5, 'Patacamaya', 1),
(112, 5, 'Colquencha', 1),
(113, 5, 'Collana', 1),
(114, 5, 'Coroico', 1),
(115, 5, 'Coripata', 1),
(116, 5, 'Ixiamas', 1),
(117, 5, 'San Buenaventura', 1),
(118, 5, 'Gral. Juan José Perez (Charazani)', 1),
(119, 9, 'Cotoca', 1),
(120, 9, 'Porongo (Ayacucho)', 1),
(121, 9, 'La Guardia', 1),
(122, 9, 'El Torno', 1),
(123, 9, 'Warnes', 1),
(124, 9, 'Okinawa', 1),
(125, 9, 'San Ignacio', 1),
(126, 9, 'San Miguel', 1),
(127, 9, 'San Rafael', 1),
(128, 9, 'Buena Vista', 1),
(129, 9, 'San Carlos', 1),
(130, 9, 'Yapacaní', 1),
(131, 9, 'San Juan', 1),
(132, 9, 'San José', 1),
(133, 9, 'Pailón', 1),
(134, 9, 'Roboré', 1),
(135, 9, 'Portachuelo', 1),
(136, 9, 'Santa Rosa del Sara', 1),
(137, 9, 'Colpa Bélgica', 1),
(138, 9, 'Lagunillas', 1),
(139, 9, 'Charagua', 1),
(140, 9, 'Cabezas', 1),
(141, 9, 'Cuevo', 1),
(142, 9, 'Gutiérrez', 1),
(143, 9, 'Camiri', 1),
(144, 9, 'Boyuibe', 1),
(145, 9, 'Vallegrande', 1),
(146, 9, 'El Trigal', 1),
(147, 9, 'Moro Moro', 1),
(148, 9, 'Postrervalle', 1),
(149, 9, 'Pucará', 1),
(150, 9, 'Samaipata', 1),
(151, 9, 'Pampa Grande', 1),
(152, 9, 'Mairana', 1),
(153, 9, 'Quirusillas', 1),
(154, 9, 'Montero', 1),
(155, 9, 'Gral. Saavedra', 1),
(156, 9, 'Mineros', 1),
(157, 9, 'Puerto Fernández Alonso', 1),
(158, 9, 'San Pedro', 1),
(159, 9, 'Concepción', 1),
(160, 9, 'San Javier', 1),
(161, 9, 'San Ramón', 1),
(162, 9, 'San Julián', 1),
(163, 9, 'San Antonio de Lomerío', 1),
(164, 9, 'Cuatro Cañadas', 1),
(165, 9, 'San Matías', 1),
(166, 9, 'Comarapa', 1),
(167, 9, 'Saipina', 1),
(168, 9, 'Puerto Suárez', 1),
(169, 9, 'Puerto Quijarro', 1),
(170, 9, 'Carmen Rivero Torres', 1),
(171, 9, 'Ascención de Guarayos', 1),
(172, 9, 'Urubichá', 1),
(173, 9, 'El Puente', 1),
(174, 8, 'Chaquí', 1),
(175, 8, 'Ckochas', 1),
(176, 8, 'Uyuni', 1),
(177, 8, 'Tomave', 1),
(179, 8, 'Tinguipaya', 1),
(180, 8, 'Villa de Yocalla', 1),
(181, 8, 'Belén de Urmiri', 1),
(182, 8, 'Uncía', 1),
(183, 8, 'Chayanta', 1),
(184, 8, 'Llallagua', 1),
(185, 8, 'Chuquihuta Ayllu Jucumani', 1),
(186, 8, 'Betanzos', 1),
(187, 8, 'Tacobamba', 1),
(188, 8, 'Colquechaca', 1),
(189, 8, 'Ravelo', 1),
(190, 8, 'Pocoata', 1),
(191, 8, 'Ocurí', 1),
(192, 8, 'San Pedro de Buena Vista', 1),
(193, 8, 'Toro Toro', 1),
(194, 8, 'Cotagaita', 1),
(195, 8, 'Vitichi', 1),
(196, 8, 'Sacaca', 1),
(197, 8, 'Caripuyo', 1),
(198, 8, 'Tupiza', 1),
(199, 8, 'Porco', 1),
(200, 8, 'Atocha', 1),
(201, 8, 'Colcha \"K\"', 1),
(202, 8, 'San Pedro de Quemes', 1),
(203, 8, 'San Pablo de Lipez', 1),
(204, 8, 'Mojinete', 1),
(205, 8, 'San Antonio de Esmoruco', 1),
(206, 8, 'Puna', 1),
(207, 8, 'Caiza \"D\"', 1),
(208, 8, 'Arampampa', 1),
(209, 8, 'Acasio', 1),
(210, 8, 'Llica', 1),
(211, 8, 'Tahua', 1),
(212, 8, 'Villazón', 1),
(213, 8, 'San Agustín', 1),
(214, 7, 'Porvenir', 1),
(215, 7, 'Bolpebra', 1),
(216, 7, 'Bella Flor', 1),
(217, 7, 'Puerto Rico', 1),
(218, 7, 'San Pedro', 1),
(219, 7, 'Filadelfia', 1),
(220, 7, 'Puerto Gonzalo Moreno', 1),
(221, 7, 'Blanca Flor (San Lorenzo)', 1),
(222, 7, 'El Sena', 1),
(223, 7, 'Santa Rosa del Abuná', 1),
(224, 7, 'Humaita (Ingavi)', 1),
(225, 7, 'Nueva Esperanza', 1),
(226, 7, 'Villa Nueva (Loma Alta)', 1),
(227, 7, 'Santos Mercado (Reserva)', 1),
(228, 6, 'Choquecota', 1),
(229, 6, 'Curahuara de Carangas', 1),
(230, 6, 'Esmeralda', 1),
(231, 6, 'Villa Poopó', 1),
(232, 6, 'Caracollo', 1),
(233, 6, 'El Choro', 1),
(234, 6, 'Soracachi (Paria)', 1),
(235, 6, 'Challapata', 1),
(236, 6, 'Santuario de Quillacas', 1),
(237, 6, 'Corque', 1),
(238, 6, 'Turco', 1),
(239, 6, 'Huachacalla', 1),
(240, 6, 'Escara', 1),
(241, 6, 'Cruz de Machacamarca', 1),
(242, 6, 'Yunguyo del Litoral', 1),
(243, 6, 'Pazña', 1),
(244, 6, 'Antequera', 1),
(245, 6, 'Villa Huanuni', 1),
(246, 6, 'Machacamarca', 1),
(247, 6, 'Salinas de Garci Mendoza', 1),
(248, 6, 'Pampa Aullagas', 1),
(249, 6, 'Sabaya', 1),
(250, 6, 'Coipasa', 1),
(251, 6, 'Chipaya', 1),
(252, 6, 'Toledo', 1),
(253, 6, 'Eucaliptus', 1),
(254, 6, 'Andamarca', 1),
(255, 6, 'Belén de Andamarca', 1),
(256, 6, 'Totora', 1),
(257, 6, 'Santiago de Huari', 1),
(258, 6, 'La Rivera', 1),
(259, 6, 'Todos Santos', 1),
(260, 6, 'Carangas', 1),
(261, 4, 'Aiquile', 1),
(262, 4, 'Pasorapa', 1),
(263, 4, 'Omereque', 1),
(264, 4, 'Independencia', 1),
(265, 4, 'Morochata', 1),
(266, 4, 'Cocapata', 1),
(267, 4, 'Tarata', 1),
(268, 4, 'Anzaldo', 1),
(269, 4, 'Arbieto', 1),
(270, 4, 'Sacabamba', 1),
(271, 4, 'Arani', 1),
(272, 4, 'Vacas', 1),
(273, 4, 'Arque', 1),
(274, 4, 'Tacopaya', 1),
(275, 4, 'Capinota', 1),
(276, 4, 'Santivañez', 1),
(277, 4, 'Sicaya', 1),
(278, 4, 'Cliza', 1),
(279, 4, 'Toco', 1),
(280, 4, 'Tolata', 1),
(281, 4, 'Quillacollo', 1),
(282, 4, 'Sipe Sipe', 1),
(283, 4, 'Tiquipaya', 1),
(284, 4, 'Vinto', 1),
(285, 4, 'Colcapirhua', 1),
(286, 4, 'Sacaba', 1),
(287, 4, 'Colomi', 1),
(288, 4, 'Villa Tunari', 1),
(289, 4, 'Tapacarí', 1),
(290, 4, 'Totora', 1),
(291, 4, 'Pojo', 1),
(292, 4, 'Pocona', 1),
(293, 4, 'Chimoré', 1),
(294, 4, 'Puerto Villarroel', 1),
(295, 4, 'Entre Ríos (Bulo Bulo)', 1),
(296, 4, 'Mizque', 1),
(297, 4, 'Vila Vila', 1),
(298, 4, 'Alalay', 1),
(299, 4, 'Punata', 1),
(300, 4, 'Villa Rivero', 1),
(301, 4, 'San Benito', 1),
(302, 4, 'Tacachi', 1),
(303, 4, 'Villa Gualberto Villarroel', 1),
(304, 4, 'Bolívar', 1),
(305, 4, 'Tiraque', 1),
(306, 4, 'Shinahota', 1),
(307, 3, 'Loreto', 1),
(308, 3, 'San Andrés', 1),
(309, 3, 'San Joaquín', 1),
(310, 3, 'San Ramón', 1),
(311, 3, 'Puerto Siles', 1),
(312, 3, 'Magdalena', 1),
(313, 3, 'Baures', 1),
(314, 3, 'San Javier', 1),
(315, 3, 'Riberalta', 1),
(316, 3, 'Guayaramerín', 1),
(317, 3, 'Reyes', 1),
(318, 3, 'San Borja', 1),
(319, 3, 'Santa Rosa', 1),
(320, 3, 'Rurrenabaque', 1),
(321, 3, 'Santa Ana', 1),
(322, 3, 'Exaltación', 1),
(323, 3, 'San Ignacio', 1),
(324, 3, 'Huacaraje', 1),
(325, 10, 'Bermejo', 1),
(326, 10, 'Padcaya', 1),
(327, 10, 'Yacuiba', 1),
(328, 10, 'Caraparí', 1),
(329, 10, 'Villamontes', 1),
(330, 10, 'Uriondo (Concepción)', 1),
(331, 10, 'Yunchará', 1),
(332, 10, 'San Lorenzo', 1),
(333, 10, 'El Puente', 1),
(334, 10, 'Entre Ríos', 1),
(335, 10, 'El Socavón', 1),
(336, 10, 'Mercado Young', 1),
(337, 0, 'Vinto', 0),
(338, 0, 'Plaza Sebastián Pagador', 0),
(339, 10, 'El Socavón', 1),
(340, 10, 'Mercado Young', 1),
(341, 10, 'Vinto', 1),
(342, 10, 'Plaza Sebastián Pagador', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `idproveedor` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `nombre_empresa` varchar(100) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `descripcion` text,
  `rango_minimo` decimal(10,2) NOT NULL,
  `rango_maximo` decimal(10,2) NOT NULL,
  `departamento` varchar(100) NOT NULL,
  `municipio` varchar(100) NOT NULL,
  `barrio` varchar(50) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `latitud` varchar(50) DEFAULT NULL,
  `longitud` varchar(50) DEFAULT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `especialidad` varchar(255) NOT NULL,
  `descuento` int(11) DEFAULT '0',
  `pagina_web` varchar(100) DEFAULT NULL,
  `logo` varchar(50) NOT NULL,
  `condicion` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`idproveedor`, `idusuario`, `nombre_empresa`, `tipo`, `descripcion`, `rango_minimo`, `rango_maximo`, `departamento`, `municipio`, `barrio`, `calle`, `latitud`, `longitud`, `telefono`, `email`, `especialidad`, `descuento`, `pagina_web`, `logo`, `condicion`) VALUES
(1, 1, 'empresa1', 'Banquete', 'descripcion', '1000.00', '1500.00', '1', '1', '3', 'El salvador', '-19.0426694', '-65.241584', '12345566', 'erwing@hotmail.com', 'camaras', 0, 'www.camaras.com', '1583361978.jpg', 1),
(2, 2, 'empresa', 'Fotografo', '', '0.00', '0.00', '', '', '', '', '', '', '12345667', 'erwing@hotmail.com', '', 0, '', '', 1),
(3, 3, 'empresa', 'Video', '', '0.00', '0.00', '', '', '', '', '', '', '534645665', 'erwing@hotmail.com', '', 0, '', '', 1),
(4, 4, 'empresa', 'Banquete', '', '0.00', '0.00', '', '', '', '', '', '', '12345667', 'erwing@hotmail.com', '', 0, '', '', 1),
(5, 5, 'Banquetes deliciosos', 'Fotografo', 'Los banquetes', '1500.00', '2000.00', '1', '1', '6', 'Luis mendizabal', '-19.0292216', '-65.2491344', '433232535', 'erwing@hotmail.com', 'Especialista en todo tipo de banquetes', 0, 'www.misbanquetes.com', '1583384608.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE `publicacion` (
  `idpublicacion` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `imagen` varchar(50) DEFAULT NULL,
  `texto_corto` varchar(255) DEFAULT NULL,
  `texto_largo` text,
  `fecha_hora` date NOT NULL,
  `condicion` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `idsolicitud` int(11) NOT NULL,
  `idproveedor` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_invitado`
--

CREATE TABLE `tipo_invitado` (
  `idtipo_invitado` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `condicion` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_proveedor`
--

CREATE TABLE `tipo_proveedor` (
  `idtipo_proveedor` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `condicion` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_proveedor`
--

INSERT INTO `tipo_proveedor` (`idtipo_proveedor`, `nombre`, `condicion`) VALUES
(1, 'Fotografo', 1),
(2, 'Video', 1),
(3, 'Música', 1),
(4, 'Banquete', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tipo_usuario` varchar(50) NOT NULL,
  `token` varchar(50) NOT NULL,
  `fecha_token` date NOT NULL,
  `condicion` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `apellido`, `login`, `password`, `email`, `tipo_usuario`, `token`, `fecha_token`, `condicion`) VALUES
(1, 'nombre', 'apellido', 'login123', '123456', 'erwing@hotmail.com', 'Banquete', '915ea9ywrfm924i4c8wh', '2020-03-03', 1),
(2, 'nombre', 'apellido', 'login123', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'erwing@hotmail.com', 'Fotografo', '2idn1s13171enr2o7yny', '2020-03-03', 1),
(3, 'nombre', 'apellido', 'login123', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'erwing@hotmail.com', 'Video', 'muirnhie8i1kxle2szua', '2020-03-03', 1),
(4, 'nombre', 'apellido', 'login123', '29d07b1b01e841ccc8855e100fefd568909d5d169ab1917adc5283220656797a', 'erwing@hotmail.com', 'Banquete', 'kjhrrrwbhtxibyc4oabu', '2020-03-03', 1),
(5, 'Lucas', 'San alberto', 'milogin', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'erwing@hotmail.com', 'proveedor', 'cv9usa7bakiw742jmmen', '2020-03-04', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE `valoracion` (
  `idvaloracion` int(11) NOT NULL,
  `idpublicacion` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `condicion` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`idactividad`);

--
-- Indices de la tabla `barrio`
--
ALTER TABLE `barrio`
  ADD PRIMARY KEY (`idbarrio`);

--
-- Indices de la tabla `boda`
--
ALTER TABLE `boda`
  ADD PRIMARY KEY (`idboda`);

--
-- Indices de la tabla `comentario_boda`
--
ALTER TABLE `comentario_boda`
  ADD PRIMARY KEY (`idcomentario_boda`);

--
-- Indices de la tabla `comentario_publicacion`
--
ALTER TABLE `comentario_publicacion`
  ADD PRIMARY KEY (`idcomentario_publicacion`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`idcontacto`);

--
-- Indices de la tabla `control_servicio`
--
ALTER TABLE `control_servicio`
  ADD PRIMARY KEY (`idcontrol_servicio`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`iddepartamento`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`idevento`);

--
-- Indices de la tabla `imagen_boda`
--
ALTER TABLE `imagen_boda`
  ADD PRIMARY KEY (`idimagen_boda`);

--
-- Indices de la tabla `imagen_evento`
--
ALTER TABLE `imagen_evento`
  ADD PRIMARY KEY (`idimagen_evento`);

--
-- Indices de la tabla `invitado`
--
ALTER TABLE `invitado`
  ADD PRIMARY KEY (`idinvitado`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`idmunicipio`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`idproveedor`);

--
-- Indices de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`idpublicacion`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`idsolicitud`);

--
-- Indices de la tabla `tipo_invitado`
--
ALTER TABLE `tipo_invitado`
  ADD PRIMARY KEY (`idtipo_invitado`);

--
-- Indices de la tabla `tipo_proveedor`
--
ALTER TABLE `tipo_proveedor`
  ADD PRIMARY KEY (`idtipo_proveedor`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- Indices de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD PRIMARY KEY (`idvaloracion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad`
--
ALTER TABLE `actividad`
  MODIFY `idactividad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `barrio`
--
ALTER TABLE `barrio`
  MODIFY `idbarrio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=346;

--
-- AUTO_INCREMENT de la tabla `boda`
--
ALTER TABLE `boda`
  MODIFY `idboda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comentario_boda`
--
ALTER TABLE `comentario_boda`
  MODIFY `idcomentario_boda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comentario_publicacion`
--
ALTER TABLE `comentario_publicacion`
  MODIFY `idcomentario_publicacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `idcontacto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `control_servicio`
--
ALTER TABLE `control_servicio`
  MODIFY `idcontrol_servicio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `iddepartamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `idevento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagen_boda`
--
ALTER TABLE `imagen_boda`
  MODIFY `idimagen_boda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagen_evento`
--
ALTER TABLE `imagen_evento`
  MODIFY `idimagen_evento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `invitado`
--
ALTER TABLE `invitado`
  MODIFY `idinvitado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `idmunicipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=343;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `idproveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `idpublicacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `idsolicitud` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_invitado`
--
ALTER TABLE `tipo_invitado`
  MODIFY `idtipo_invitado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_proveedor`
--
ALTER TABLE `tipo_proveedor`
  MODIFY `idtipo_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  MODIFY `idvaloracion` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
