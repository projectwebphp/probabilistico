-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2020 a las 23:51:24
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
-- Estructura de tabla para la tabla `personalserviciomilitarobligatorioyalumnos`
--

CREATE TABLE `personalserviciomilitarobligatorioyalumnos` (
  `idpersonalserviciomilitarobligatorio` int(11) NOT NULL,
  `idgrupopersonalMDN` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `totalpersonasejercitonal` int(11) NOT NULL,
  `totalpersonasarmadanal` int(11) NOT NULL,
  `totalpersonasfac` int(11) NOT NULL,
  `valorpersona` double(20,4) NOT NULL,
  `reservadesvinculacion` double(20,4) NOT NULL,
  `cantidadinvalidez` double(20,10) NOT NULL,
  `estimacionpensionesinvalidez` double(30,10) NOT NULL,
  `estimacioninvidualpensioninvalidez` double(30,10) NOT NULL,
  `reservaanualinvaidez` double(30,10) NOT NULL,
  `cantidadfallecimiento` double(20,10) NOT NULL,
  `estimacionpensionesfallecimiento` double(30,10) NOT NULL,
  `estimacioninvidualpensionfallecimiento` double(30,10) NOT NULL,
  `reservaanualfallecimiento` double(30,10) NOT NULL,
  `totalpersonas` double(20,10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personalserviciomilitarobligatorioyalumnos`
--

INSERT INTO `personalserviciomilitarobligatorioyalumnos` (`idpersonalserviciomilitarobligatorio`, `idgrupopersonalMDN`, `anio`, `totalpersonasejercitonal`, `totalpersonasarmadanal`, `totalpersonasfac`, `valorpersona`, `reservadesvinculacion`, `cantidadinvalidez`, `estimacionpensionesinvalidez`, `estimacioninvidualpensioninvalidez`, `reservaanualinvaidez`, `cantidadfallecimiento`, `estimacionpensionesfallecimiento`, `estimacioninvidualpensionfallecimiento`, `reservaanualfallecimiento`, `totalpersonas`) VALUES
(1, 1, 2020, 6562, 4093, 2235, 1573096.7815, 20276365694.7974, 16624.1993281984, 214276927.4711980000, 1313078.7017581800, 16924873444.1820000000, 7226.3106341511, 93143231.0855335000, 1133233.7163120100, 14606768966.3837000000, 12889.4585081001),
(2, 2, 2020, 76212, 3069, 960, 1327258.6402, 106500363648.6530, 414.8921301575, 33291297.8658845000, 1111073.5645834400, 89153489065.7453000000, 174.1637201098, 13975045.2277940000, 958896.0836871480, 76942638396.9805000000, 80240.8516479915),
(3, 3, 2020, 1462, 0, 0, 1296511.5726, 1895097798.2326, 260.5650188812, 380865.2417764510, 1085846.2448595800, 1587170428.1573000000, 98.9630137667, 144653.2321453530, 937124.0076912600, 1369784644.5250300000, 1461.6898439084),
(4, 4, 2020, 0, 0, 0, 0.0000, 0.0000, 0.0000000000, 0.0000000000, 0.0000000000, 0.0000000000, 0.0000000000, 0.0000000000, 0.0000000000, 0.0000000000, 0.0000000000),
(5, 5, 2020, 4390, 640, 288, 1182163.3060, 6286813405.9096, 609.6054611895, 3241917.3952865700, 28626.4127989413, 152236932.7801840000, 480.8247098637, 2557053.8491387000, 29713.7326235930, 158019363.0210480000, 5318.0583208041),
(6, 6, 2020, 1769, 541, 447, 2319920.3394, 6395298722.5882, 1774.1870198666, 4890881.7208633200, 56177.5152783799, 154863934.5919740000, 1399.3850305999, 3857669.2253815500, 58311.3112297968, 160746146.2742700000, 2756.6889319431),
(7, 7, 2020, 0, 271, 0, 745673.4238, 202265964.7688, 0.0000000000, 0.0000000000, 22487.2655215339, 6099732.5509180500, 0.0000000000, 0.0000000000, 23341.4015497898, 6331419.2951100200, 271.2527472527);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personalserviciomilitarobligatorioyalumnos`
--
ALTER TABLE `personalserviciomilitarobligatorioyalumnos`
  ADD PRIMARY KEY (`idpersonalserviciomilitarobligatorio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personalserviciomilitarobligatorioyalumnos`
--
ALTER TABLE `personalserviciomilitarobligatorioyalumnos`
  MODIFY `idpersonalserviciomilitarobligatorio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
