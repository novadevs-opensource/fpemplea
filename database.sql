-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 12-02-2018 a las 17:08:50
-- Versión del servidor: 5.6.35
-- Versión de PHP: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `fpemplea_fpemplea`
--
CREATE DATABASE IF NOT EXISTS `fpemplea_fpemplea` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `fpemplea_fpemplea`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alert`
--

CREATE TABLE `alert` (
  `id` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `alertSubject` varchar(250) DEFAULT NULL,
  `alertBody` varchar(400) DEFAULT NULL,
  `generationDate` date DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `applicant_has_skill`
--

CREATE TABLE `applicant_has_skill` (
  `id` int(11) NOT NULL,
  `applicant` int(11) DEFAULT NULL,
  `skill` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `applicant_has_workexp`
--

CREATE TABLE `applicant_has_workexp` (
  `id` int(11) NOT NULL,
  `applicant` int(11) DEFAULT NULL,
  `workexp` longtext,
  `company` int(11) DEFAULT NULL,
  `other_company` varchar(250) NOT NULL DEFAULT '0',
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `position` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `idPadre` int(11) DEFAULT NULL,
  `nombre` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `idPadre`, `nombre`) VALUES
(1, NULL, 'Informática y Comunicaciones'),
(2, NULL, 'Imagen y Sonido'),
(3, NULL, 'Comercio y Marketing'),
(4, NULL, 'Fabricación mecánica'),
(5, NULL, 'Agraría'),
(6, NULL, 'Transporte y Mantenimiento de Vehículos'),
(7, NULL, 'Servicios Socioculturales y a la Comunidad'),
(8, NULL, 'Energía y Agua'),
(9, NULL, 'Edificación y Obra Civil'),
(10, NULL, 'Electricidad y Electrónica'),
(11, NULL, 'Química'),
(12, NULL, 'Instalación y Mantenimiento'),
(13, 1, 'Administración de Sistemas'),
(14, 1, 'Administrador de Base de Datos'),
(15, 1, 'Administrador Sistemas de Gestión Empresarial'),
(16, 1, 'Mantenimiento Hardware y Redes'),
(17, 1, 'Asistencia Remota'),
(18, 1, 'Herramientas de Productividad'),
(19, 2, 'Grabación'),
(20, 2, 'Guión'),
(21, 2, 'Iluminación'),
(22, 2, 'Eventos'),
(23, 2, 'Espectáculos'),
(24, 2, 'Financiación'),
(25, 2, 'Gestión Empresarial'),
(26, 2, 'Realización Audiovisual'),
(27, 2, 'Regiduría de Espectáculos y Eventos'),
(28, 2, 'Montaje y Postproducción'),
(29, 2, 'Medios técnicos Audiovisuales y Escénicos'),
(30, 2, 'Diseño de Personajes'),
(31, 2, 'Diseño de Props y Entornos'),
(32, 2, 'Dibujo'),
(33, 2, 'Modelado orgánico'),
(34, 2, 'Texturizado'),
(35, 2, 'Animación de personajes 2D'),
(36, 2, 'Rigging'),
(37, 2, 'Stop Motion'),
(38, 2, 'Composición Digital'),
(39, 2, 'Edición y Postproducción'),
(40, 2, 'Programación'),
(41, 2, 'Desarrollo de Aplicaciones Interactivos'),
(42, 2, 'Desarrollo de Entornos Interactivos'),
(43, 2, 'Planificacón y Desarrollo Proyecto Multimedia Interactivos'),
(44, 2, 'Maquetación y Presentación de Proyectos'),
(45, 2, 'Maquetación Web'),
(46, 3, 'Escaparate'),
(47, 3, 'Comercial'),
(48, 3, 'Cajeras'),
(49, 3, 'Atenc. Cliente'),
(50, 3, 'Tráfico de Viajeros'),
(51, 3, 'Tráfico de Mercancías'),
(52, 3, 'Comercial de Servicios de Transporte'),
(53, 3, 'Logística'),
(54, 3, ''),
(55, 3, 'Comercio Digital Internacional'),
(56, 3, 'Sistema de Investigación de Mercados'),
(57, 3, 'Créditos Documentarios y Otros Medios de Pago'),
(58, 3, 'Documentación Import/Export'),
(59, 3, 'Marketing Digital'),
(60, 3, 'Trabajo de Campo'),
(61, 3, 'Diseño'),
(62, 3, 'Medios y Soportes'),
(63, 3, 'Políticas de Marketing'),
(64, 3, 'Investigación Comercial'),
(65, 3, 'RRPP y Organización de Eventos'),
(66, 3, 'Logística de Almacenaje'),
(67, 3, 'Política de Marketing'),
(68, 4, 'Soldadura'),
(69, 4, 'Mecanizada'),
(70, 4, 'Conformado'),
(71, 4, 'Montaje de Estructuras'),
(72, 4, 'Medición y Verificación'),
(73, 5, 'Producción Porcina Intensiva'),
(74, 5, 'Producción Intensiva de Rumiantes'),
(75, 5, 'Producción Extensiva de Rumientes'),
(76, 5, 'Producción Avícola y Cunícula Intensiva'),
(77, 5, 'Fruticultura'),
(78, 5, 'Cultivo Herbáceos'),
(79, 5, 'Viveros'),
(80, 5, 'Manejo y Mantenimiento de Maquinaria Agraria'),
(81, 5, 'Comercialización de Productos Agrícolas'),
(82, 5, 'Jardinería'),
(83, 5, 'Garden Center'),
(84, 5, 'Floristería'),
(85, 5, 'Monte'),
(86, 5, 'Viveros y Zonas Verdes'),
(87, 5, 'Aplicación de Productos Fitosanitarios'),
(88, 5, 'Incendios'),
(89, 5, 'Mantenimiento de Maquinaria Forestal'),
(90, 5, 'Conservación y Uso Público del Medio Natural'),
(91, 5, 'Aprovechamiento cinegéticos y piscícolas'),
(92, 5, 'Gabinete Técnico'),
(93, 5, 'Explotaciones Ganaderas'),
(94, 5, 'Yeguadas'),
(95, 5, 'Auxiliar Técnico Veterinario'),
(96, 5, 'Ayudante de Veterinario Autónomo en Granjas'),
(97, 5, 'Comunes a las Cuadro Áreas'),
(98, 5, 'Jardinería y Restauración del Paisaje'),
(99, 5, 'Producción Agrícola'),
(100, 5, 'Producción de semillas y Plantas en Viveros'),
(101, 5, 'Céspedes en Campos Deportivos'),
(102, 6, 'Sistemas Eléctricos'),
(103, 6, 'Sistemas de Transmisión y Dirección'),
(104, 6, 'Sistemas de Frenado'),
(105, 6, 'Pintura'),
(106, 6, 'Motores'),
(107, 6, 'Presupuestado'),
(108, 6, 'Administración y Gestión de Talleres'),
(109, 6, 'Preparación y Protección de Superficies'),
(110, 6, 'Sustitución de Elementos Fijos de la Carrocería'),
(111, 6, 'Reparación de Chapas o Elementos Metálicos'),
(112, 6, 'Sustituir y Ajustar Elementos Amovibles'),
(113, 6, 'Reparación de Plásticos'),
(114, 6, 'Conformación en Bancada'),
(115, 7, 'Atención Necesidades Básicas'),
(116, 7, 'Animación'),
(117, 7, 'Expresión y Comunicación'),
(118, 7, 'Gestión de Grupos y Conflictos'),
(119, 7, 'Gestión de Conflictos'),
(120, 7, 'Primeros Auxilios'),
(121, 7, 'Psicomotricidad'),
(122, 8, 'Energía Fotovoltaica'),
(123, 8, 'Energía Eólica'),
(124, 8, 'Suubestaciones Eléctricas'),
(125, 9, 'Estructuras de Construcción'),
(126, 9, 'Representaciones de Construcción'),
(127, 9, 'Instalaciones en Edificación'),
(128, 9, 'Replanteos de Construcción'),
(129, 9, 'Diseño y Construcción de Edificios'),
(130, 9, 'Mediciones y Valoraciones de Construcción'),
(131, 9, 'Planificación de Construcción'),
(132, 9, 'Eficiencia energética en Edificación'),
(133, 9, 'Desarrollo de Proyectos de Edificación no Residencial'),
(134, 9, 'Desarrollo de Proyectos de Edificación Residencial'),
(135, 10, 'Instalaciones Interiores'),
(136, 10, 'Automatización de Procesos Industriales'),
(137, 10, 'Mantenimiento y Reparación de Maquinaria Industrial'),
(138, 10, 'Comprobación y verificación de Instalaciones Eléctricas'),
(139, 10, 'Instalacions Básicas de Telecomunicaciones'),
(140, 10, 'Distribución de Energía Eléctrica'),
(141, 10, 'Automatización de Edificios y Viviendas'),
(142, 10, 'Técnicas de Fabricación'),
(143, 10, 'Técnicas de unión'),
(144, 10, 'Electricidad'),
(145, 10, 'Automatismos'),
(146, 10, 'Montaje y Mantenimiento Electromecánico'),
(147, 11, 'Industria Química'),
(148, 11, 'Almacén'),
(149, 11, 'Laboratorio de Control de Calidad'),
(150, 11, 'Industria Agroalimentaria'),
(151, 11, 'Industria Farmacéutica'),
(152, 11, 'Construcción'),
(153, 11, 'Insdustria Metalúrgica'),
(154, 11, 'Industria Mecánica'),
(155, 11, 'Industría Electrónica'),
(156, 11, 'Industria Textil'),
(157, 11, 'Transformación de Plásticos'),
(158, 11, 'Transformación de Caucho'),
(159, 11, 'Industrias Alimentarias'),
(160, 11, 'Medioambiente'),
(161, 11, 'Depuración de Aguas'),
(162, 11, 'Industria de Manufactura'),
(163, 10, 'Sistemas de Telecomunicaciones'),
(164, 10, 'Redes Telemáticas'),
(165, 10, 'Sistemas Informáticos'),
(166, 8, 'Eficiencia Energética'),
(167, 8, 'Certificación Energética'),
(168, 8, 'Auditorías Energéticas'),
(169, 12, 'Montaje y Mantenimiento de Instalaciones'),
(170, 12, 'Procesos Automáticos'),
(171, 12, 'Representación Instalaciones Térmicas'),
(172, 12, 'Configuración y Diseño de Instalaciones Térmicas'),
(173, 11, 'Almacén'),
(174, 11, 'Centros de Investigación'),
(175, 2, 'Sonido'),
(176, 2, 'Teatro'),
(177, 2, 'Fotografía'),
(178, 2, 'Vídeo'),
(179, 2, 'Diseño 3D'),
(180, 2, 'Videojuegos'),
(181, 2, 'Web'),
(182, 2, 'Ilustración'),
(183, 2, 'Usabilidad'),
(184, 2, 'Toma Foto'),
(185, 2, 'Edición Foto'),
(186, 2, 'Impresión'),
(187, 2, 'Diseño Productos'),
(188, 2, 'Gestión Foto'),
(189, 2, 'Regiduría'),
(190, 2, 'Dirección'),
(191, 2, 'Producción'),
(192, 2, 'Modelado Inorgánico'),
(193, 2, 'Animación de Personajes 3D'),
(194, 10, 'Instalaciones Básicas de Telecomunicaciones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centroestudios`
--

CREATE TABLE `centroestudios` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `nombre` varchar(90) CHARACTER SET utf8 NOT NULL,
  `CIF` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `familiaProf` varchar(120) CHARACTER SET utf8 DEFAULT NULL,
  `telefono` varchar(20) CHARACTER SET utf8 NOT NULL,
  `direccion` varchar(45) CHARACTER SET utf8 NOT NULL,
  `cp` int(11) DEFAULT NULL,
  `localidad` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `pais` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `eMail` varchar(45) CHARACTER SET utf8 NOT NULL,
  `fechaCreacion` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `fechaBorrado` varchar(250) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `activo` int(1) NOT NULL DEFAULT '1',
  `web` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `imagen` varchar(250) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `subfamiliaProf` varchar(120) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `education_level`
--

CREATE TABLE `education_level` (
  `id` int(11) NOT NULL,
  `level` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `education_level`
--

INSERT INTO `education_level` (`id`, `level`) VALUES
(1, 'CFGM'),
(2, 'CFGS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formacion`
--

CREATE TABLE `formacion` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) CHARACTER SET utf8 NOT NULL,
  `familiaProf` int(11) DEFAULT NULL,
  `level` int(11) NOT NULL,
  `creditos` int(11) DEFAULT NULL,
  `extinto` tinyint(1) DEFAULT '0',
  `fechaCreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fechaBorrado` varchar(250) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formacion_has_centroestudios`
--

CREATE TABLE `formacion_has_centroestudios` (
  `id` int(11) NOT NULL,
  `formacion_id` int(11) DEFAULT NULL,
  `centroestudios_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `subject` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messagemetadata`
--

CREATE TABLE `messagemetadata` (
  `id` int(11) NOT NULL,
  `is_read` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas`
--

CREATE TABLE `ofertas` (
  `id` int(11) NOT NULL,
  `idEmpresa` int(11) DEFAULT NULL,
  `fechaCreacion` varchar(250) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fechaRevision` varchar(250) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fechaBorrado` varchar(250) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `fechaInicio` date DEFAULT NULL,
  `fechaFin` date DEFAULT NULL,
  `categoria` int(11) DEFAULT NULL,
  `inscribed` int(10) NOT NULL DEFAULT '0',
  `vacancies` int(10) DEFAULT NULL,
  `descripcion` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `title` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `validated` tinyint(1) DEFAULT '0',
  `active` tinyint(1) DEFAULT '1',
  `finished` tinyint(1) NOT NULL DEFAULT '0',
  `closureReason` varchar(250) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `closureExplanation` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `engagement` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfilempresa`
--

CREATE TABLE `perfilempresa` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `nombreEmpresa` varchar(250) CHARACTER SET utf8 NOT NULL,
  `cif` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `fechaCreacion` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `sector` varchar(120) CHARACTER SET utf8 DEFAULT NULL,
  `trabajadores` int(11) DEFAULT NULL,
  `telefono` varchar(20) CHARACTER SET utf8 NOT NULL,
  `direccion` varchar(45) CHARACTER SET utf8 NOT NULL,
  `cp` int(11) DEFAULT NULL,
  `localidad` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `pais` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `eMailContacto` varchar(45) CHARACTER SET utf8 NOT NULL,
  `personaContacto` varchar(250) CHARACTER SET utf8 NOT NULL,
  `horarioContacto` varchar(45) CHARACTER SET utf8 NOT NULL,
  `fechaBorrado` varchar(250) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `fechaModificacion` varchar(250) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `web` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `imagen` varchar(250) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfilestudiante`
--

CREATE TABLE `perfilestudiante` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `DNI` varchar(10) CHARACTER SET utf8 NOT NULL,
  `telefonouno` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefonodos` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `direccion` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `cp` int(11) DEFAULT NULL,
  `localidad` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `pais` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `diponibilidad` date NOT NULL,
  `intereses` tinytext CHARACTER SET utf8,
  `cvPDF` blob,
  `cvTXT` longtext CHARACTER SET utf8,
  `fexibilidadGeografica` tinyint(1) DEFAULT NULL,
  `fechaNacimiento` date NOT NULL,
  `nombre` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `apellidos` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `imagen` varchar(250) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `public` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfilestudiante_has_centroestudios`
--

CREATE TABLE `perfilestudiante_has_centroestudios` (
  `id` int(11) NOT NULL,
  `perfilestudiante_id` int(11) DEFAULT NULL,
  `centroestudios_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfilestudiante_has_formacion`
--

CREATE TABLE `perfilestudiante_has_formacion` (
  `id` int(11) NOT NULL,
  `perfilestudiante_id` int(11) DEFAULT NULL,
  `formacion_id` int(11) DEFAULT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `finished` tinyint(1) NOT NULL DEFAULT '0',
  `school` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfilestudiante_has_ofertas`
--

CREATE TABLE `perfilestudiante_has_ofertas` (
  `ID` int(11) NOT NULL,
  `perfilestudianteId` int(11) DEFAULT NULL,
  `ofertasId` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rrss`
--

CREATE TABLE `rrss` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rrss`
--

INSERT INTO `rrss` (`id`, `nombre`) VALUES
(1, 'facebook'),
(2, 'twitter'),
(3, 'instagram'),
(4, 'youtube'),
(5, 'vimeo'),
(6, 'linkedin'),
(7, 'google+');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `school_has_offer`
--

CREATE TABLE `school_has_offer` (
  `id` int(11) NOT NULL,
  `school` int(11) DEFAULT NULL,
  `offer` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `skill` varchar(250) NOT NULL,
  `skill_category` int(11) NOT NULL,
  `category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `skill`
--

INSERT INTO `skill` (`id`, `parent`, `skill`, `skill_category`, `category`) VALUES
(3, NULL, 'Línea imaginaria', 1, 46),
(4, 3, '3D Estudio', 1, 46),
(6, NULL, 'Venta Directa', 1, 47),
(7, NULL, 'TPV', 1, 48),
(8, NULL, 'Presencial', 1, 49),
(9, NULL, 'Telefónica', 1, 49),
(10, NULL, 'E-mail', 1, 49),
(11, NULL, 'SMS', 1, 49),
(12, NULL, 'Web', 1, 49),
(13, NULL, 'Documentación y Normativa', 1, 50),
(14, NULL, 'Costes', 1, 51),
(15, NULL, 'Normativa Transporte', 1, 51),
(16, NULL, 'Transporte Especial', 1, 51),
(17, NULL, 'ADR', 1, 51),
(18, NULL, 'ATP', 1, 51),
(19, NULL, 'AAVV', 1, 51),
(20, NULL, 'Asignación de Rutas', 1, 51),
(21, NULL, 'Incidencias', 1, 51),
(22, NULL, 'Técnicas de Investigación Comercial', 1, 52),
(23, NULL, 'Técnicas de Negociación y Ventas', 1, 52),
(24, NULL, 'Técnicas de Archivo', 1, 52),
(25, NULL, 'Técnicas de Comunicación', 1, 52),
(26, NULL, 'Control de Calidad del Servicio', 1, 52),
(27, NULL, 'Mejora Continua', 1, 53),
(28, NULL, 'Alojamiento Gratuito', 1, 55),
(29, NULL, 'Creación Blog', 1, 55),
(30, NULL, 'Creación Web', 1, 55),
(31, NULL, 'Creación Tienda Virtual', 1, 55),
(32, NULL, 'Redes Sociales', 1, 55),
(33, NULL, 'Planificación de Información', 1, 56),
(34, NULL, 'Recopilación de Información de Mercados', 1, 56),
(35, NULL, 'Tratamiento de Datos', 1, 56),
(36, NULL, 'Investigación de Mercados', 1, 56),
(37, NULL, 'Atención al Usuario', 1, 56),
(38, NULL, 'Medios de Pago Electrónicos', 1, 57),
(39, NULL, 'Certificado de Circulación', 1, 58),
(40, NULL, 'Certificado de Origen', 1, 58),
(41, NULL, 'Certificado Sanitario', 1, 58),
(42, NULL, 'Solicitud de Inspección (SOIVRE)', 1, 58),
(43, NULL, 'DUAS Import / Export', 1, 58),
(44, NULL, 'Declaración de Valor', 1, 58),
(45, NULL, 'Licencias', 1, 58),
(46, NULL, 'Intrastat', 1, 58),
(47, NULL, 'Notificaciones Previas a la Import / Export', 1, 58),
(48, NULL, 'Autorizaciones', 1, 58),
(49, NULL, 'Documentación Transporte', 1, 58),
(50, NULL, 'Creación de Cuestionarios On line', 1, 60),
(51, NULL, 'Elaboración de Materiales de Publicidad', 1, 61),
(52, NULL, 'TV', 1, 62),
(53, NULL, 'Radio', 1, 62),
(54, NULL, 'Briefing y Plan de Medios', 1, 62),
(55, NULL, 'Estrategia Publicitaria', 1, 62),
(56, NULL, 'Elaborar Informes sobre las Diferentes Variables de Marketing para la Toma de Decisiones', 1, 63),
(57, NULL, 'Participar Activamente en el Diseño e Implementación del Mix de Marketing  y del Plan de Marketing', 1, 63),
(58, NULL, 'Elaborar Encuestas', 1, 64),
(59, NULL, 'Analizar Informes con los Datos', 1, 64),
(60, NULL, 'Elaborar Informes con los Datos de la Investigación Comercial para Toma de Decisiones', 1, 64),
(61, NULL, 'Briefing', 1, 65),
(62, NULL, 'Planificación', 1, 65),
(63, NULL, 'Coordinación', 1, 65),
(64, NULL, 'Evaluación', 1, 65),
(65, NULL, 'Analizar Estadísticamente los Datos', 1, 64),
(66, NULL, 'Técnicas de Ventas: AIDDA', 1, 47),
(67, NULL, 'Técnicas de Ventas: SPIN', 1, 47),
(68, NULL, 'Técnicas de Ventas: ZELEV NOEL', 1, 47),
(69, NULL, 'Negociación y Cierre de Ventas', 1, 47),
(70, NULL, 'Correspondencia Comercial', 1, 47),
(71, NULL, 'Monocámara', 1, 19),
(72, NULL, 'Multicámara', 1, 19),
(73, NULL, 'Guión TV', 1, 20),
(74, NULL, 'Guión Cine', 1, 20),
(75, NULL, 'Guión Literario', 1, 20),
(76, NULL, 'Guión Técnico', 1, 20),
(77, NULL, 'Iluminación Audiovisual', 1, 21),
(78, NULL, 'Escénica', 1, 20),
(79, NULL, 'Espectáculos', 1, 21),
(80, NULL, 'Planificación de Eventos', 1, 22),
(81, NULL, 'Tipología de Eventos', 1, 22),
(82, NULL, 'Planificación y Gestión de Espectáculos y Festivales', 1, 23),
(83, NULL, 'Fórmulas de Financiación', 1, 24),
(84, NULL, 'Contabilidad Básica', 1, 24),
(85, NULL, 'Subvenciones', 1, 24),
(86, NULL, 'Programas Media', 1, 24),
(87, NULL, 'Marketing y Promoción Audiovisual y Espectáculos', 1, 25),
(88, NULL, 'Procedimiento de Gestión de Empresas Audiovisuales y Espectáculos', 1, 25),
(89, NULL, 'Operador de Cámara ENG', 1, 26),
(90, NULL, 'Operador de Cámara en Plató', 1, 26),
(91, NULL, 'Ayudante de Realización en Control de Televisión', 1, 26),
(92, NULL, 'Mixer en Control de Televisión', 1, 26),
(93, NULL, 'Regidor de Televisión', 1, 26),
(94, NULL, 'Director de Cine y Vídeo', 1, 26),
(95, NULL, 'Regidor de Espectáculos', 1, 27),
(96, NULL, 'Montaje de Audio/Vídeo', 1, 28),
(97, NULL, 'Etalonaje', 1, 28),
(98, NULL, 'Conocimientos de Captación de Sonido: Micrófonos y Otros Elementos', 1, 29),
(99, NULL, 'Conocimientos de Captación de Imagen', 1, 29),
(100, NULL, 'Conocimientos de Multimedia', 1, 29),
(101, NULL, 'Creación de Personajes a través de su Aspecto Físico y Vestuario', 1, 30),
(102, NULL, 'Creación de Ítems y Entornos', 1, 31),
(103, NULL, 'Capacidad de Plasmar Ideas sobre un Papel mediante Ilustraciones', 1, 32),
(104, NULL, 'Recreación de un Objeto Inerte en un Entorno 3D con una Correcta Topología', 1, 192),
(105, NULL, 'Recreación de un Personaje a través de Bocetos', 1, 33),
(106, NULL, 'Aplicación de Texturas sobre el Modelo', 1, 34),
(107, NULL, 'Creación de Movimientos en Personajes empleando Técnicas Tradicionales, Avanzadas y Técnicas de Capturas de movimiento', 1, 193),
(108, NULL, 'Creación de una Estructura de Controladores de Ayudantes y Controladores que Simplifiquen la Animación en un Entorno 3D', 1, 36),
(109, NULL, 'Creación de Animaciones Mediante la Técnica de Capturar el Movimiento Fotograma a Fotograma Teniendo en Cuenta los Principios Básicos de la Animación', 1, 37),
(110, NULL, 'Combinación de Varias Imágenes para Conseguir un Resultado Final, Atendiendo a las Características de Luz y Color', 1, 38),
(111, NULL, 'Creación de Vídeos y Elementos Gráficos para la Producción Audiovisual', 1, 39),
(112, NULL, 'Capacidad de Dar Instrucciones a un Programa para que Realice las Tareas Deseadas', 1, 40),
(113, NULL, 'Administración de Sistemas Windows', 1, 13),
(114, NULL, 'Administración de Sistemas Linux', 1, 13),
(115, NULL, 'Administrador de Sistemas Virtualizados', 1, 13),
(116, NULL, 'Administrador de Bases de Datos', 1, 14),
(117, NULL, 'Administración de Sistemas de Gestión Empresarial (ERP)', 1, 15),
(118, NULL, 'Monitorización de Sistemas', 1, 16),
(119, NULL, 'Redes', 1, 16),
(120, NULL, 'Hardware de Sistemas', 1, 16),
(121, NULL, 'Asistencia Remota', 1, 17),
(122, NULL, 'Ofimática y Desarrollo de Contenidos', 1, 18),
(123, NULL, 'Higiene', 1, 115),
(124, NULL, 'Alimentación', 1, 115),
(125, NULL, 'Sueño', 1, 115),
(126, NULL, 'Juego', 1, 115),
(127, NULL, 'Programación', 1, 116),
(128, NULL, 'Preparación', 1, 116),
(129, NULL, 'Implementación', 1, 116),
(130, NULL, 'Expresión Oral', 1, 117),
(131, NULL, 'Expresión Musical', 1, 117),
(132, NULL, 'Expresión Plástica', 1, 117),
(133, NULL, 'Expresión Corporal', 1, 117),
(134, NULL, 'Expresión Lógico-matemática', 1, 117),
(135, NULL, 'Expresión Gráfica', 1, 117),
(136, NULL, 'Técnicas para Favorecer la Comunicación y Relación Social con su Entorno', 1, 118),
(137, NULL, 'Técnicas de Dinamización y Funcionamiento de Grupos', 1, 118),
(138, NULL, 'Técnicas de Moderación de Reuniones', 1, 118),
(139, NULL, 'Técnicas de Recogida de Información y Evaluación de Resultados de una Reunión', 1, 118),
(140, NULL, 'Técnicas y Estrategias para la Gestión de Conflictos', 1, 119),
(141, NULL, 'Técnicas de Mediación y Negociación', 1, 118),
(142, NULL, 'Técnicas de Investigación Social y Sociométricas', 1, 118),
(143, NULL, 'Técnicas para el Análisis de los Grupos', 1, 118),
(144, NULL, 'Capacidad de Trabajo en Equipo', 1, 118),
(145, NULL, 'Técnicas de la Modificación de Conducta', 1, 119),
(146, NULL, 'Técnicas de Resolución Pacífica de Conflictos', 1, 119),
(147, NULL, 'Mediación', 1, 119),
(148, NULL, 'Técnicas de Soporte Vital Básico', 1, 120),
(149, NULL, 'Técnicas de Apoyo Psicológico y de Autocontrol al Accidentado y Acompañantes', 1, 120),
(150, NULL, 'Técnicas de Autoprotección en la Manipulación de Personas Accidentadas', 1, 120),
(151, NULL, 'Técnicas a Emplear para Controlar una Situación de Duelo, Ansiedad o Agresividad', 1, 120),
(152, NULL, 'Técnicas de Soporte Vital', 1, 120),
(153, NULL, 'Técnicas de Primeros Auxilios', 1, 120),
(154, NULL, 'Diagnosis de Averías', 1, 102),
(155, NULL, 'Operaciones de Mantenimiento', 1, 102),
(156, NULL, 'Lijado a Mano y a Máquina', 1, 105),
(157, NULL, 'Aplicación de Pintura', 1, 105),
(158, NULL, 'Tasación y Presupuestado en el Área de Carrocería', 1, 107),
(159, NULL, 'Tasación y Presupuestado en el Área de Electromecánica', 1, 107),
(160, NULL, 'Gestión Almacén/Recambios', 1, 108),
(161, NULL, 'Planes de Mantenimiento del Taller', 1, 108),
(162, NULL, 'Lijado a Mano y al Agua', 1, 109),
(163, NULL, 'Colocación Masillas', 1, 109),
(164, NULL, 'Aparejado', 1, 109),
(165, NULL, 'Corte y Unión de Elementos', 1, 110),
(166, NULL, 'Desabollado', 1, 111),
(167, NULL, 'Interpretación de Manuales', 1, 112),
(168, NULL, 'Procedimientos de Sustitución', 1, 112),
(169, NULL, 'Procedimientos de Soldadura', 1, 113),
(170, NULL, 'Conformación en Caliente', 1, 113),
(171, NULL, 'Pegado con Adhesivos', 1, 113),
(172, NULL, 'Diagnosis', 1, 114),
(173, NULL, 'Manejo de Bancada', 1, 114),
(174, NULL, 'Bienestar Animal', 1, 73),
(175, NULL, 'Transporte de Animales Vivos', 1, 73),
(176, NULL, 'Biocidas de Uso en Industria Alimentaria', 1, 73),
(177, NULL, 'Aplicador de Productos Fitosanitarios de Nivel 2', 1, 77),
(178, NULL, 'Carnet de Conducir B1', 1, 80),
(179, NULL, 'Carnet de Conducir E (Remolques pesados)', 1, 80),
(180, NULL, 'Manejo de Carretilla Elevadora', 1, 81),
(181, NULL, 'Poda en Altura', 1, 82),
(182, NULL, 'Manejo de Maquinaria Ligera  (Motosierra, CortaCésped, Desbrozadora, Carretilla Elevadora, motocultor))', 1, 82),
(183, NULL, 'Manejo de Pequeña Herramienta Manual (Tijeras de Podar, Azadas)', 1, 82),
(184, NULL, 'Manejo de Tractor con Aperos', 1, 82),
(185, NULL, 'Interpretación de Aparatos Topográficos', 1, 82),
(186, NULL, 'Conocimiento y Manejo de Especies', 1, 82),
(187, NULL, 'Conocimiento y Manejo de Materiales (Sustratos, Abonos, de Riego, de Protección, de Construcción)', 1, 82),
(188, NULL, 'Preparación y Aplicación de Tratamientos Fitosanitarios de Nivel 2', 1, 82),
(189, NULL, 'Carnet de Conducir B2', 1, 82),
(190, NULL, 'Técnicas de Propagación de Plantas (Recogida de Semillas y Frutos, Injertos, Acodos, Estaquillado, Propagación de Meristemos)', 1, 79),
(191, NULL, 'Producción de Tepes de Césped', 1, 79),
(192, NULL, 'Técnicas de Venta y de Atención al Público', 1, 83),
(193, NULL, 'Conocimiento y Manejo de Especies de Interior y Exterior', 1, 83),
(194, NULL, 'Conocimiento y Manejo de Flor Natural (Fresa, Seca, Artificial)', 1, 84),
(195, NULL, 'Conocimiento y Manejo de Plantas de Interior', 1, 84),
(196, NULL, 'Realización de Arreglos Florales (para Decoración de Estancias y Salones de Ceremonias)', 1, 84),
(197, NULL, 'Realización de Ramos (Bouquest, Boutonieres y Otros)', 1, 84),
(198, NULL, 'Manejo de Maquinaria Pesada', 1, 85),
(199, NULL, 'Herramientas Manuales', 1, 85),
(200, NULL, 'Manejo de Herramientas Manuales', 1, 86),
(201, NULL, 'Manejo de Diferentes Técnicas y Métodos para el Control Fitosanitario', 1, 87),
(202, NULL, 'Prevención, Vigilancia y Extinción', 1, 88),
(203, NULL, 'Uso de Equipo de Soldadura', 1, 89),
(204, NULL, 'Manejo de Escalas de Desarrollo', 1, 121),
(205, NULL, 'Métodos de Estimulación Sensorial', 1, 121),
(206, NULL, 'Métodos de Estimulación Motora', 1, 121),
(207, NULL, 'Métodos de Estimulación Cognitiva', 1, 121),
(208, NULL, 'Especialista en Desarrollo de Psicomotricidad Vivenciada', 1, 121),
(209, NULL, 'Mantenimiento Hidráulico', 1, 89),
(210, NULL, 'Afilado de las Diferentes Herramientas de Corte', 1, 89),
(211, NULL, 'Censos de Fauna', 1, 90),
(212, NULL, 'Inventarios de Flora', 1, 90),
(213, NULL, 'Acogida de Visitantes', 1, 90),
(214, NULL, 'Censos Piscícolas e Inventarios Fluviales', 1, 91),
(215, NULL, 'Conocimiento y Manejo de Diferentes Artes de Pesca', 1, 91),
(216, NULL, 'Manejo y Mantenimiento de Instalaciones de Reproducción y Cría de Especies Piscícolas', 1, 91),
(217, NULL, 'Gestión y Manejo de Maquinaria Pesada', 1, 85),
(218, NULL, 'Gestión y Manejo de Maquinaria Ligera', 1, 85),
(219, NULL, 'Gestión de Recursos Humanos y Materiales', 1, 85),
(220, NULL, 'Incendios', 1, 85),
(221, NULL, 'Obtención de la Información y Redacción de Informes: Dasométricos y de Aprovechamiento', 1, 92),
(222, NULL, 'Manejo de Mapas y Planos, Cartografía Digital y Herramientas SIG', 1, 92),
(223, NULL, 'Seguimiento y Manejo  de Especies Silvestres', 1, 90),
(224, NULL, 'Educación ambiental', 1, 90),
(225, NULL, 'Diseño de Planes de Pesca', 1, 91),
(226, NULL, 'Conocimiento y Aplicación de la Legislación Vigente en Materia de Pesca Fluvial', 1, 91),
(227, NULL, 'Tractorista', 1, 93),
(228, NULL, 'Conocimientos Informáticos (datos de explotación)', 1, 93),
(229, NULL, 'Manejo Libro de Explotación', 1, 93),
(230, NULL, 'Labores de Recogida, Tratamiento y Eliminación de Residuos, Cadáveres y Restos de Animales de la Explotación', 1, 93),
(231, NULL, 'Asesoramiento a los Ganaderos en Aplicación de Programas de Bioseguridad y Saneamiento Ganadero', 1, 93),
(232, NULL, 'Realización de Análisis Rápidos Sencillos (Coprológicos)', 1, 93),
(233, NULL, 'Manejo de Reproductores, Crías, Animales de Reposición y Cebo', 1, 93),
(234, NULL, 'Control de la Alimentación (Calculo de Raciones)', 1, 93),
(235, NULL, 'Control de la Reproducción', 1, 93),
(236, NULL, 'Manejo de Reproductores', 1, 94),
(237, NULL, 'Arreglo de Cascos', 1, 94),
(238, NULL, 'Trabajos de Amansamiento y Desbrave de Potros', 1, 94),
(239, NULL, 'Monta de Caballos', 1, 94),
(240, NULL, 'Preparación Quirófano, Instrumental Quirúgico', 1, 95),
(241, NULL, 'Conocimientos Informáticos: Documentación y registros sanitarios del centro veterinario', 1, 95),
(242, NULL, 'Tareas auxiliares en pruebas diagnósticas, tratamientos, curas e intervenciones quirúrgicas', 1, 95),
(244, NULL, 'Conocimientos Informáticos (Recogida de Datos Sanitarios, Productivos de los Clientes)', 1, 96),
(245, NULL, 'Preparación y Manipulación del Material Veterinario (Curas, Sangrados, Vacunas, Medicamentos…) del Botiquín', 1, 96),
(246, NULL, 'Atención y Asistencia en Partos', 1, 96),
(247, NULL, 'Carnet de Bienestar Animal (Manipulador de Animales)', 1, 97),
(248, NULL, 'Conocimientos Básicos Informáticos (Word, Excell…)', 1, 97),
(249, NULL, 'Instalación de Parques y Jardines y la Restauración del Paisaje.', 1, 98),
(250, NULL, 'Conservación de Parques y Jardines', 1, 98),
(251, NULL, 'Maquinaria, Equipos e Instalaciones de Jardinería', 1, 98),
(252, NULL, 'Preparación del Terreno y de Implantación de Cultivos', 1, 99),
(253, NULL, 'Operaciones de Cultivo', 1, 99),
(254, NULL, 'Recolección y Conservación de Productos Agrícolas', 1, 99),
(255, NULL, 'Maquinaria, Equipos e Instalaciones de la Explotación Agrícola', 1, 99),
(256, NULL, 'Propagación de Plantas en Vivero', 1, 100),
(257, NULL, 'Gestionar el Cultivo de Plantas y Tepes en Vivero.', 1, 100),
(258, NULL, 'Realizar Operaciones Topográficas en Trabajos de Agricultura, Jardinería y Montes.', 1, 101),
(259, NULL, 'Mantenimiento y Recuperación de Césped en Campos Deportivos.', 1, 101),
(260, NULL, 'Soldadura con Electrodo Revestido', 1, 68),
(261, NULL, 'Soldadura con Soplete Oxiacetilénico', 1, 68),
(262, NULL, 'Soldadura con MIC-MAC', 1, 68),
(263, NULL, 'Soldadura TIG de Acero', 1, 68),
(264, NULL, 'Soldadura TIG de Aluminio', 1, 68),
(265, NULL, 'Taladrado', 1, 69),
(266, NULL, 'Fabricación de Roscas', 1, 69),
(267, NULL, 'Ajuste de Piezas', 1, 69),
(268, NULL, 'Corte Mecánico', 1, 69),
(269, NULL, 'Corte Térmico', 1, 69),
(270, NULL, 'Doblado de Chapa con Plegadora', 1, 70),
(271, NULL, 'Doblado de Chapa con los Rodillos', 1, 70),
(272, NULL, 'Curvado de Tubería', 1, 70),
(273, NULL, 'Conformado Manual', 1, 70),
(274, NULL, 'Cálculo de Desarrollos en Chapa', 1, 70),
(275, NULL, 'Interpretación de Planos de Montaje', 1, 71),
(276, NULL, 'Realización de Montajes Desmontables', 1, 71),
(277, NULL, 'Realización de Montajes no Desmontables', 1, 71),
(278, NULL, 'Remachado', 1, 71),
(279, NULL, 'Utilización de Calibre', 1, 72),
(280, NULL, 'Utilización de Micrómetro', 1, 72),
(281, NULL, 'Utilización de Goniómetro', 1, 72),
(282, NULL, 'Verificación de Dimensiones', 1, 72),
(283, NULL, 'Montaje', 1, 122),
(284, NULL, 'Mantenimiento', 1, 122),
(285, NULL, 'Operación', 1, 123),
(286, NULL, 'Cálculo (Nivel Básico) y Representación de las Distintas Tipologías Estructurales aplicadas a la Edificación', 1, 125),
(287, NULL, 'Representaciones Gráficas de Proyectos de Edificación y Obra Civil, Indistintamente', 1, 126),
(288, NULL, 'Técnica de Maquetado, Infografías e Impresiones 3D', 1, 126),
(289, NULL, 'Cálculo y Representación de las Instalaciones de un Edificio', 1, 127),
(290, NULL, 'Levantamientos y Operaciones Topográficas Asociadas al Proceso de Constructivo', 1, 128),
(291, NULL, 'Análisis y Estudio de las Diferentes Soluciones y Técnicas Constructivas Aplicadas al Proceso de Contructivo', 1, 129),
(292, NULL, 'Cálculo, Medición y Valoración de las Diferentes Unidades de Obra que Intervienen a lo Largo del Proceso Constructivo', 1, 130),
(293, NULL, 'Estudio de las Diferentes Técnicas de Planificación y Programación', 1, 131),
(294, NULL, 'Análisis de Desviaciones y Estudios Relacionados con el Ámbito de la Seguridad y Salud del Proceso Constructivo', 1, 131),
(295, NULL, 'Estudio del Comportamiento, Eficiencia y Clasificación Energética de los Edificios', 1, 132),
(296, NULL, 'Desarrollo de Proyectos de Instalaciones Aplicados a Edificios de Tipología No Residencial', 1, 133),
(297, NULL, 'Desarrollo de Proyectos Residenciales', 1, 134),
(298, NULL, 'Interpretación de Planos, Situación Mecanismos, Cableado, Conexionado, Verificación de Instalaciones y Puesta en Marcha', 1, 135),
(299, NULL, 'Interpretación de Esquemas, Montaje de Cuadros de Automatización y Programaciones de Bajo Nivel', 1, 136),
(300, NULL, 'Seguimiento de Planes de Mantenimiento, Comprobación y Ensayos en Máquinas Eléctricas Estáticas y Rotativas', 1, 137),
(301, NULL, 'Verificaciones Reglamentarias de Instalaciones de Edificios con más de 10 Años.', 1, 138),
(302, NULL, 'Propuestas de Mejora en la Eficiencia y Seguridad', 1, 138),
(303, NULL, 'Instalación, Reparación y Ampliación de Instalaciones de Telecomunicación', 1, 194),
(304, NULL, 'Telefonía, Red de Banda Ancha y Control de Acceso.', 1, 194),
(305, NULL, 'Televisión por Cable y Satélite', 1, 194),
(306, NULL, 'Mantenimiento e Instalación de Acometidas Aéreas y Subterráneas', 1, 140),
(307, NULL, 'Instalaciones de Producción de Energía Limpia', 1, 140),
(308, NULL, 'Instalaciones Domóticas e Inmóticas: Confort, Ahorro, Seguridad y Control desde Móvil, Tablet y PC', 1, 141),
(309, NULL, 'Fresadora', 1, 142),
(310, NULL, 'Torno', 1, 142),
(311, NULL, 'Ajuste Mecánico', 1, 142),
(312, NULL, 'Soldadura', 1, 143),
(313, NULL, 'Arranque de Motores', 1, 144),
(314, NULL, 'Instalación y Mantenimiento Industrial', 1, 144),
(315, NULL, 'Neumático', 1, 145),
(316, NULL, 'Hidráulico', 1, 145),
(317, NULL, 'Robótica', 1, 145),
(318, NULL, 'Mecánico', 1, 146),
(319, NULL, 'Eléctrico y Electrónico', 1, 146),
(320, NULL, 'Líneas Automatizadas', 1, 146),
(321, NULL, 'Análisis Químicos', 1, 147),
(322, NULL, 'Ensayos Fisioquímicos', 1, 147),
(323, NULL, 'Ensayos Físicos', 1, 149),
(324, NULL, 'Ensayos Microbiológicos', 1, 149),
(325, NULL, 'Elementos', 1, 163),
(326, NULL, 'Infraestructuras', 1, 163),
(327, NULL, 'Procesos', 1, 163),
(328, NULL, 'Configuración', 1, 164),
(329, NULL, 'Producción Audiovisual', 1, 165),
(330, NULL, 'Hogar Digital', 1, 165),
(331, NULL, 'Instalaciones de Frío', 1, 166),
(332, NULL, 'Instalaciones de Climatización', 1, 166),
(333, NULL, 'Instalaciones Caloríficas', 1, 166),
(334, NULL, 'Instalaciones Solar-Térmica', 1, 166),
(335, NULL, 'Instalaciones de Agua', 1, 166),
(336, NULL, 'Agua', 1, 169),
(337, NULL, 'Frío', 1, 169),
(338, NULL, 'Calor', 1, 169),
(339, NULL, 'Climatización', 1, 169),
(340, NULL, 'Gas', 1, 169),
(341, NULL, 'Energía Solar Térmica', 1, 169),
(342, NULL, 'Instalaciones Eléctricas', 1, 169),
(343, NULL, 'Test', 2, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `skill_category`
--

CREATE TABLE `skill_category` (
  `id` int(11) NOT NULL,
  `category` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `skill_category`
--

INSERT INTO `skill_category` (`id`, `category`) VALUES
(1, 'Profesional'),
(2, 'Personal'),
(3, 'Interpersonal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `thread`
--

CREATE TABLE `thread` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `is_spam` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `threadmetadata`
--

CREATE TABLE `threadmetadata` (
  `id` int(11) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `last_participant_message_date` datetime DEFAULT NULL,
  `last_message_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposoferta`
--

CREATE TABLE `tiposoferta` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tiposoferta`
--

INSERT INTO `tiposoferta` (`id`, `nombre`) VALUES
(1, 'Contrato laboral'),
(2, 'Contrato en prácticas'),
(3, 'Contrato Formación-Aprendizaje (Dual)'),
(4, 'Beca formación');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_has_sn`
--

CREATE TABLE `user_has_sn` (
  `id` int(11) NOT NULL,
  `user` int(11) DEFAULT NULL,
  `sn` int(11) DEFAULT NULL,
  `snUrl` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(255) NOT NULL,
  `role` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `securityToken` varchar(250) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8 DEFAULT 'deprecated',
  `nif` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `fechaCreacion` varchar(250) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fechaBorrado` varchar(250) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `done` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alert`
--
ALTER TABLE `alert`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_userid_idx` (`userid`);

--
-- Indices de la tabla `applicant_has_skill`
--
ALTER TABLE `applicant_has_skill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_applicant_idx` (`applicant`),
  ADD KEY `fk_skill_idx` (`skill`);

--
-- Indices de la tabla `applicant_has_workexp`
--
ALTER TABLE `applicant_has_workexp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicant_fk_idx` (`applicant`),
  ADD KEY `company_fk_idx` (`company`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idPadre` (`idPadre`);

--
-- Indices de la tabla `centroestudios`
--
ALTER TABLE `centroestudios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_centroestudios_usuarios1_idx` (`idUsuario`);

--
-- Indices de la tabla `education_level`
--
ALTER TABLE `education_level`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `formacion`
--
ALTER TABLE `formacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `familiaProf` (`familiaProf`),
  ADD KEY `level` (`level`);

--
-- Indices de la tabla `formacion_has_centroestudios`
--
ALTER TABLE `formacion_has_centroestudios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_94AB1777A8803ABC` (`centroestudios_id`,`formacion_id`) USING BTREE,
  ADD KEY `UNIQ_94AB1777F0798A6E` (`formacion_id`) USING BTREE;

--
-- Indices de la tabla `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `messagemetadata`
--
ALTER TABLE `messagemetadata`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fk_ofertas_categorias` (`id`,`categoria`),
  ADD KEY `fk_ofertas_perfilempresa1_idx` (`idEmpresa`),
  ADD KEY `categoria` (`categoria`),
  ADD KEY `fk_tipo_idx` (`tipo`);

--
-- Indices de la tabla `perfilempresa`
--
ALTER TABLE `perfilempresa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_perfilempresa_usuarios_idx` (`idUsuario`);

--
-- Indices de la tabla `perfilestudiante`
--
ALTER TABLE `perfilestudiante`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_perfiltrabajador_usuarios1_idx` (`idUsuario`);

--
-- Indices de la tabla `perfilestudiante_has_centroestudios`
--
ALTER TABLE `perfilestudiante_has_centroestudios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_perfilestudiante_has_centroestudios_idx` (`centroestudios_id`),
  ADD KEY `fp_centroestudios_has_perfilestudiante_idx` (`perfilestudiante_id`);

--
-- Indices de la tabla `perfilestudiante_has_formacion`
--
ALTER TABLE `perfilestudiante_has_formacion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_perfilestudiante_idx` (`perfilestudiante_id`),
  ADD KEY `fk_formacion_idx` (`formacion_id`),
  ADD KEY `fk_school_idx` (`school`);

--
-- Indices de la tabla `perfilestudiante_has_ofertas`
--
ALTER TABLE `perfilestudiante_has_ofertas`
  ADD PRIMARY KEY (`ID`) USING BTREE,
  ADD KEY `fk_perfilestudiante_has_ofertas_ofertas1_idx` (`ofertasId`),
  ADD KEY `fk_perfilestudiante_has_ofertas_perfilestudiante1_idx` (`perfilestudianteId`);

--
-- Indices de la tabla `rrss`
--
ALTER TABLE `rrss`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `school_has_offer`
--
ALTER TABLE `school_has_offer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_offerSchool_idx` (`offer`),
  ADD KEY `fk_school_offer` (`school`);

--
-- Indices de la tabla `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_skill_category_idx` (`skill_category`),
  ADD KEY `fk_category` (`category`),
  ADD KEY `skill_ibfk_2` (`parent`);

--
-- Indices de la tabla `skill_category`
--
ALTER TABLE `skill_category`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `thread`
--
ALTER TABLE `thread`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `threadmetadata`
--
ALTER TABLE `threadmetadata`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tiposoferta`
--
ALTER TABLE `tiposoferta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user_has_sn`
--
ALTER TABLE `user_has_sn`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `snUrl_UN` (`snUrl`),
  ADD KEY `fk_user_idx` (`user`),
  ADD KEY `fk_sn_idx` (`sn`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alert`
--
ALTER TABLE `alert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `applicant_has_skill`
--
ALTER TABLE `applicant_has_skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de la tabla `applicant_has_workexp`
--
ALTER TABLE `applicant_has_workexp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;
--
-- AUTO_INCREMENT de la tabla `centroestudios`
--
ALTER TABLE `centroestudios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `education_level`
--
ALTER TABLE `education_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `formacion`
--
ALTER TABLE `formacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `formacion_has_centroestudios`
--
ALTER TABLE `formacion_has_centroestudios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `messagemetadata`
--
ALTER TABLE `messagemetadata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `perfilempresa`
--
ALTER TABLE `perfilempresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `perfilestudiante`
--
ALTER TABLE `perfilestudiante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `perfilestudiante_has_centroestudios`
--
ALTER TABLE `perfilestudiante_has_centroestudios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `perfilestudiante_has_formacion`
--
ALTER TABLE `perfilestudiante_has_formacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `perfilestudiante_has_ofertas`
--
ALTER TABLE `perfilestudiante_has_ofertas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `rrss`
--
ALTER TABLE `rrss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `school_has_offer`
--
ALTER TABLE `school_has_offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=344;
--
-- AUTO_INCREMENT de la tabla `skill_category`
--
ALTER TABLE `skill_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `thread`
--
ALTER TABLE `thread`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `threadmetadata`
--
ALTER TABLE `threadmetadata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tiposoferta`
--
ALTER TABLE `tiposoferta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `user_has_sn`
--
ALTER TABLE `user_has_sn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alert`
--
ALTER TABLE `alert`
  ADD CONSTRAINT `fk_userid` FOREIGN KEY (`userid`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `applicant_has_skill`
--
ALTER TABLE `applicant_has_skill`
  ADD CONSTRAINT `fk_applicant` FOREIGN KEY (`applicant`) REFERENCES `perfilestudiante` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_skill` FOREIGN KEY (`skill`) REFERENCES `skill` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `applicant_has_workexp`
--
ALTER TABLE `applicant_has_workexp`
  ADD CONSTRAINT `applicant_fk` FOREIGN KEY (`applicant`) REFERENCES `perfilestudiante` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `company_fk` FOREIGN KEY (`company`) REFERENCES `perfilempresa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD CONSTRAINT `categorias_ibfk_1` FOREIGN KEY (`idPadre`) REFERENCES `categorias` (`id`);

--
-- Filtros para la tabla `centroestudios`
--
ALTER TABLE `centroestudios`
  ADD CONSTRAINT `fk_centroestudios_usuarios1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `formacion`
--
ALTER TABLE `formacion`
  ADD CONSTRAINT `formacion_ibfk_1` FOREIGN KEY (`familiaProf`) REFERENCES `categorias` (`id`),
  ADD CONSTRAINT `formacion_ibfk_3` FOREIGN KEY (`level`) REFERENCES `education_level` (`id`);

--
-- Filtros para la tabla `formacion_has_centroestudios`
--
ALTER TABLE `formacion_has_centroestudios`
  ADD CONSTRAINT `fk_formacion_has_centroestudios_centroestudios1` FOREIGN KEY (`centroestudios_id`) REFERENCES `centroestudios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_formacion_has_centroestudios_formacion1` FOREIGN KEY (`formacion_id`) REFERENCES `formacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD CONSTRAINT `fk_ofertas_perfilempresa1` FOREIGN KEY (`idEmpresa`) REFERENCES `perfilempresa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tipo` FOREIGN KEY (`tipo`) REFERENCES `tiposoferta` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ofertas_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`id`);

--
-- Filtros para la tabla `perfilempresa`
--
ALTER TABLE `perfilempresa`
  ADD CONSTRAINT `fk_perfilempresa_usuarios` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `perfilestudiante`
--
ALTER TABLE `perfilestudiante`
  ADD CONSTRAINT `fk_perfiltrabajador_usuarios1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `perfilestudiante_has_centroestudios`
--
ALTER TABLE `perfilestudiante_has_centroestudios`
  ADD CONSTRAINT `fk_perfilestudiante_has_centroestudios` FOREIGN KEY (`centroestudios_id`) REFERENCES `centroestudios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fp_centroestudios_has_perfilestudiante` FOREIGN KEY (`perfilestudiante_id`) REFERENCES `perfilestudiante` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `perfilestudiante_has_formacion`
--
ALTER TABLE `perfilestudiante_has_formacion`
  ADD CONSTRAINT `fk_formacion_has_perfilestudiante` FOREIGN KEY (`formacion_id`) REFERENCES `formacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_perfilestudiante_has_formacion` FOREIGN KEY (`perfilestudiante_id`) REFERENCES `perfilestudiante` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_school` FOREIGN KEY (`school`) REFERENCES `centroestudios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `perfilestudiante_has_ofertas`
--
ALTER TABLE `perfilestudiante_has_ofertas`
  ADD CONSTRAINT `fk_perfilestudiante_has_ofertas_ofertas1` FOREIGN KEY (`ofertasId`) REFERENCES `ofertas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_perfilestudiante_has_ofertas_perfilestudiante1` FOREIGN KEY (`perfilestudianteId`) REFERENCES `perfilestudiante` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `school_has_offer`
--
ALTER TABLE `school_has_offer`
  ADD CONSTRAINT `fk_offer_school` FOREIGN KEY (`offer`) REFERENCES `ofertas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_school_offer` FOREIGN KEY (`school`) REFERENCES `centroestudios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `skill`
--
ALTER TABLE `skill`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`category`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `skill_ibfk_1` FOREIGN KEY (`skill_category`) REFERENCES `skill_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `skill_ibfk_2` FOREIGN KEY (`parent`) REFERENCES `skill` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Filtros para la tabla `user_has_sn`
--
ALTER TABLE `user_has_sn`
  ADD CONSTRAINT `fk_sn` FOREIGN KEY (`sn`) REFERENCES `rrss` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`user`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
