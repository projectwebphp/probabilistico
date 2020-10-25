-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2020 a las 03:16:48
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `probabilistico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contingenciasmilitaresactivosmdn`
--

CREATE TABLE `contingenciasmilitaresactivosmdn` (
  `idcontingencia` int(11) NOT NULL,
  `idgrupopersonalMDN` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `totalpartidas` double(20,4) NOT NULL,
  `personasinvalidez` int(11) NOT NULL,
  `porcentajeinvalidez` double(20,10) NOT NULL,
  `valorinvalidez` double(20,4) NOT NULL,
  `reservainvalidez` double(20,4) NOT NULL,
  `personasfallecimiento` int(11) NOT NULL,
  `porcentajefallecimiento` double(10,4) NOT NULL,
  `valorfallecimiento` double(20,4) NOT NULL,
  `reservafallecimiento` double(20,4) NOT NULL,
  `cantidaddesvinculacion` int(11) NOT NULL,
  `porcentajedesvinculacion` double(10,4) NOT NULL,
  `valordesvinculacion` double(20,4) NOT NULL,
  `reservadesvinculacion` double(20,4) NOT NULL,
  `cantidadretiro` int(11) NOT NULL,
  `porcentajeretiro` double(10,4) NOT NULL,
  `valorretiro` double(20,4) NOT NULL,
  `reservaretiro` double(20,4) NOT NULL,
  `totalpersonas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contingenciasmilitaresactivosmdn`
--

INSERT INTO `contingenciasmilitaresactivosmdn` (`idcontingencia`, `idgrupopersonalMDN`, `anio`, `totalpartidas`, `personasinvalidez`, `porcentajeinvalidez`, `valorinvalidez`, `reservainvalidez`, `personasfallecimiento`, `porcentajefallecimiento`, `valorfallecimiento`, `reservafallecimiento`, `cantidaddesvinculacion`, `porcentajedesvinculacion`, `valordesvinculacion`, `reservadesvinculacion`, `cantidadretiro`, `porcentajeretiro`, `valorretiro`, `reservaretiro`, `totalpersonas`) VALUES
(1, 1, 2020, 237077076151782.0000, 75, 0.0078856061, 416526605007176.0000, 312394953755382.0000, 275, 0.0289, 554264290667789.0000, 152422679933642.0000, 1699, 0.1786, 956918218791906.0000, 162580405372745.0000, 1197, 0.1259, 420460003959643.0000, 503290624739693.0000, 9511),
(2, 2, 2020, 240835517733747.0000, 138, 0.0145095153, 275447755434958.0000, 380117902500243.0000, 530, 0.0557, 341413299861486.0000, 180949048926588.0000, 3284, 0.3453, 526373681453787.0000, 172861116989424.0000, 2313, 0.2432, 265936920221215.0000, 615112096471.6700, 0),
(3, 3, 2020, 373056650232852.0000, 2147483647, 0.0811923742, 118764704951645.0000, 300210066104262.0000, 2147483647, 0.0118, 115910282611483.0000, 427555877074455.0000, 2147483647, 0.0333, 870526405622943.0000, 903119163236175.0000, 6697, 0.2151, 302693490069516.0000, 2027138302995.5500, 2147483647),
(4, 4, 2020, 52841048768028.0000, 2147483647, 0.1564584002, 781261574344924.0000, 380555466172904.0000, 712, 0.0229, 764620062111599.0000, 544409484223458.0000, 2002, 0.0643, 506898442960282.0000, 101481068280648.0000, 12917, 0.4149, 200252397262688.0000, 2586660215442.1400, 0),
(5, 5, 2020, 971286900356525.0000, 2147483647, 0.1398963061, 173660634253256.0000, 2046445627332.9900, 2147483647, 0.1317, 109846146541418.0000, 1218955791451.7600, 2147483647, 0.3899, 628567987619708.0000, 206428071897612.0000, 2147483647, 0.3385, 186322567410087.0000, 5312594504665.5600, 84235),
(6, 6, 2020, 661905894299815.0000, 6, 0.0022244794, 251098231282364.0000, 150658938769418.0000, 2147483647, 0.0039, 356038999360573.0000, 377055097098932.0000, 490, 0.1817, 945362850263266.0000, 4632277966.2900, 321, 0.1190, 333426551365426.0000, 107029922988302.0000, 2147483647),
(7, 7, 2020, 701801265957879.0000, 2147483647, 0.0039558787, 229732292676856.0000, 245125148519419.0000, 24, 0.0089, 240215294837555.0000, 576516707610131.0000, 1102, 0.4086, 390615872751572.0000, 430458691772232.0000, 733, 0.2718, 238541629051138.0000, 174851014094484.0000, 0),
(8, 8, 2020, 103849608212062.0000, 2147483647, 0.0019486021, 252202573875317.0000, 417012953934156.0000, 75, 0.0088, 221289962979786.0000, 165967472234.8400, 1042, 0.1228, 981283554552811.0000, 102249746384403.0000, 1661, 0.1957, 371610319765274.0000, 617244741130.1200, 2147483647),
(9, 9, 2020, 145766140723439.0000, 2147483647, 0.0040014333, 152690915796619.0000, 518448537323545.0000, 153, 0.0180, 134861397682435.0000, 206337938454125.0000, 2093, 0.2467, 482160478166074.0000, 100916188080159.0000, 3411, 0.4020, 224899243800024.0000, 767131320601882.0000, 0),
(10, 10, 2020, 115070220002217.0000, 695, 0.0969993022, 150944106896867.0000, 104906154293322.0000, 966, 0.1348, 241488732451912.0000, 233278115548547.0000, 2035, 0.2840, 748550071383573.0000, 152329939526557.0000, 3469, 0.4842, 184732445175684.0000, 640836852314448.0000, 7165),
(11, 11, 2020, 703122656491162.0000, 6, 0.0030226367, 538341931576322.0000, 323005158945793.0000, 4, 0.0020, 685736051261379.0000, 274294420504551.0000, 2147483647, 0.2596, 855447167447392.0000, 440783690233863.0000, 2147483647, 0.0334, 389340995757937.0000, 25784523162436.0000, 2147483647),
(12, 12, 2020, 73093234222535.0000, 8, 0.0040301822, 63151649665684.0000, 505213197325472.0000, 1, 0.0005, 310965522120561.0000, 310965522120561.0000, 1227, 0.6181, 478125452327706.0000, 586659930006095.0000, 2147483647, 0.0794, 256014303529119.0000, 40329638792528.0000, 0),
(13, 13, 2020, 389788882230058.0000, 2147483647, 0.0028367028, 343886720814051.0000, 205435166072603.0000, 1, 0.0003, 158758381145375.0000, 86219074802551.0000, 2147483647, 0.2301, 101023160281666.0000, 489547747534189.0000, 2147483647, 0.0384, 360919045609427.0000, 291645718056421.0000, 2147483647),
(14, 14, 2020, 664463758579795.0000, 2147483647, 0.0076099493, 213646716686862.0000, 342391943454338.0000, 2147483647, 0.0007, 986319180861053.0000, 143698458004252.0000, 1300, 0.6173, 474928739450385.0000, 6174073612855.0000, 2147483647, 0.1028, 22447219707977.0000, 486076196760701.0000, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercito`
--

CREATE TABLE `ejercito` (
  `IdEntidad` int(11) NOT NULL,
  `Anio` int(4) NOT NULL,
  `GR` double(10,2) NOT NULL,
  `MG` double(10,2) NOT NULL,
  `BG` double(10,2) NOT NULL,
  `CR` double(10,2) NOT NULL,
  `TC` double(10,2) NOT NULL,
  `MY` double(10,2) NOT NULL,
  `CT` double(10,2) NOT NULL,
  `TE` double(10,2) NOT NULL,
  `ST` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `IdEstado` int(1) NOT NULL,
  `NombreEstado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`IdEstado`, `NombreEstado`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupopersonalmdn`
--

CREATE TABLE `grupopersonalmdn` (
  `idgrupopersonalMDN` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `consecutivo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupopersonalmdn`
--

INSERT INTO `grupopersonalmdn` (`idgrupopersonalMDN`, `nombre`, `consecutivo`) VALUES
(1, 'EJÉRCITO - OFICIAL - 15/20', 1),
(2, 'EJÉRCITO - OFICIAL - 20/25', 2),
(3, 'EJÉRCITO - SUBOFICIAL - 15/20', 3),
(4, 'EJÉRCITO - SUBOFICIAL - 20/25', 4),
(5, 'EJÉRCITO - SOLDADOS PROFESIONALES', 5),
(6, 'ARMADA - OFICIAL - 15/20', 6),
(7, 'ARMADA - OFICIAL - 20/25', 7),
(8, 'ARMADA - SUBOFICIAL - 15/20', 8),
(9, 'ARMADA - SUBOFICIAL - 20/25', 9),
(10, 'ARMADA  - INFANTES DE MARINA PROFESIONALES', 10),
(11, 'FUERZA AÉREA - OFICIAL - 15/20', 11),
(12, 'FUERZA AÉREA - OFICIAL - 20/25', 12),
(13, 'FUERZA AÉREA- SUBOFICIAL - 15/20', 13),
(14, 'FUERZA AÉREA- SUBOFICIAL - 20/25', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `IdMenu` int(4) NOT NULL,
  `NombreMenu` varchar(200) NOT NULL,
  `LinkMenu` text NOT NULL,
  `IdEstado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`IdMenu`, `NombreMenu`, `LinkMenu`, `IdEstado`) VALUES
(1, 'Gestionar Usuarios', 'Gestionar Usuarios', 1),
(2, 'Gestionar Permisos', 'Gestionar Permisos', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE `permiso` (
  `IdRol` int(2) NOT NULL,
  `IdMenu` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `permiso`
--

INSERT INTO `permiso` (`IdRol`, `IdMenu`) VALUES
(1, 1),
(2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personalfuerza`
--

CREATE TABLE `personalfuerza` (
  `IdPersonalFuerza` int(11) NOT NULL,
  `IdEntidad` int(11) NOT NULL,
  `Anio` int(4) NOT NULL,
  `Rango` varchar(5) NOT NULL,
  `Personal` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personalfuerza`
--

INSERT INTO `personalfuerza` (`IdPersonalFuerza`, `IdEntidad`, `Anio`, `Rango`, `Personal`) VALUES
(1, 1, 2019, 'GR', 4.00),
(2, 1, 2019, 'MG', 24.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `IdRol` int(11) NOT NULL,
  `NombreRol` varchar(20) NOT NULL,
  `IdEstado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`IdRol`, `NombreRol`, `IdEstado`) VALUES
(1, 'Administrador', 1),
(2, 'Asesor', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `IdUsuario` int(11) NOT NULL,
  `NumeroDocumento` varchar(15) NOT NULL,
  `Nombres` varchar(25) NOT NULL,
  `Apellidos` varchar(25) NOT NULL,
  `CorreoElectronico` varchar(50) NOT NULL,
  `Contrasena` varchar(100) NOT NULL,
  `IdRol` int(1) NOT NULL,
  `IdEstado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `NumeroDocumento`, `Nombres`, `Apellidos`, `CorreoElectronico`, `Contrasena`, `IdRol`, `IdEstado`) VALUES
(1, '5656', 'Diego', 'Lopez', 'diegol720@gmail.com', '7b7a53e239400a13bd6be6c91c4f6c4e', 1, 1),
(3, '1111', 'RIBONA', 'AGAMENO', 'RIBONA@GMAIL.COM', 'b59c67bf196a4758191e42f76670ceba', 1, 1),
(10, '1020', 'Lorenza', 'Marti', 'lorenzamarti@gmail.com', '65cc2c8205a05d7379fa3a6386f710e1', 1, 1),
(12, '6789', 'Jety', 'Rems', 'jety@gmail.com', '46d045ff5190f6ea93739da6c0aa19bc', 1, 2),
(13, '22222', 'FRANCISCO', 'SANTANDER', 'franciscosantander@gmail.com', '3d2172418ce305c7d16d4b05597c6a59', 1, 1),
(14, '1122', 'Simon', 'Bolivar', '', '3b712de48137572f3849aabd5666a4e3', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contingenciasmilitaresactivosmdn`
--
ALTER TABLE `contingenciasmilitaresactivosmdn`
  ADD PRIMARY KEY (`idcontingencia`);

--
-- Indices de la tabla `ejercito`
--
ALTER TABLE `ejercito`
  ADD PRIMARY KEY (`IdEntidad`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`IdEstado`);

--
-- Indices de la tabla `grupopersonalmdn`
--
ALTER TABLE `grupopersonalmdn`
  ADD PRIMARY KEY (`idgrupopersonalMDN`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`IdMenu`);

--
-- Indices de la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD PRIMARY KEY (`IdRol`,`IdMenu`);

--
-- Indices de la tabla `personalfuerza`
--
ALTER TABLE `personalfuerza`
  ADD PRIMARY KEY (`IdPersonalFuerza`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`IdRol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IdUsuario`),
  ADD UNIQUE KEY `NumeroDocumento` (`NumeroDocumento`),
  ADD UNIQUE KEY `CorreoElectronico` (`CorreoElectronico`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contingenciasmilitaresactivosmdn`
--
ALTER TABLE `contingenciasmilitaresactivosmdn`
  MODIFY `idcontingencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `grupopersonalmdn`
--
ALTER TABLE `grupopersonalmdn`
  MODIFY `idgrupopersonalMDN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `IdMenu` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `personalfuerza`
--
ALTER TABLE `personalfuerza`
  MODIFY `IdPersonalFuerza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
