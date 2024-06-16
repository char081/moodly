-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2024 a las 17:46:44
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `moodly`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `IDUSUARIO` int(5) NOT NULL,
  `FECHA` date NOT NULL,
  `ACTIVIDAD` varchar(30) NOT NULL,
  `TIEMPO` varchar(15) NOT NULL,
  `OBSERVACIONES` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`IDUSUARIO`, `FECHA`, `ACTIVIDAD`, `TIEMPO`, `OBSERVACIONES`) VALUES
(13434, '2024-05-08', 'Deportes', '1 hora y m', 'Hice ejercicio en el gimnasio '),
(24680, '2024-03-21', 'Meditacion', '30 min', 'Me relaje mucho pero hice poco tiempo de lo usual'),
(72635, '2024-04-10', 'Salida al super', '4 horas aprox', 'Habia mucha gente y tarde mucho haciendo las compras');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diario`
--

CREATE TABLE `diario` (
  `IDUSUARIO` int(5) NOT NULL,
  `FECHA` date NOT NULL,
  `NOTAS` text NOT NULL,
  `OBSERVACIONES` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emociones`
--

CREATE TABLE `emociones` (
  `IDUSUARIO` int(5) NOT NULL,
  `FECHA` date NOT NULL,
  `EMOCIÓN` varchar(15) NOT NULL,
  `INTENSIDAD` int(2) NOT NULL,
  `OBSERVACIONES` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `IDUSUARIO` int(5) NOT NULL,
  `NOMBREDEUSUARIO` varchar(10) NOT NULL,
  `CONTRASENA` varchar(8) NOT NULL,
  `CONTACTO` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`IDUSUARIO`, `NOMBREDEUSUARIO`, `CONTRASENA`, `CONTACTO`) VALUES
(13434, 'Char', 'Mianahom', '6311655584'),
(24680, 'Mia Nahomi', '134340', 'coronadomia@gma'),
(72635, 'fer01', 'fercota1', '6315263789'),
(62537, 'yazy24', 'strakids', 'yazminleyva@gmail.co'),
(77243, 'yamipel22', 'solecito', '631125637'),
(93823, 'Angel05', 'luismigu', '6315362839');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
