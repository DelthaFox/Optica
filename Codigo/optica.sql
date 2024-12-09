-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-07-2023 a las 08:12:14
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `optica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horasatencion`
--

CREATE TABLE `horasatencion` (
  `Nombre` varchar(35) NOT NULL,
  `Correo` varchar(35) NOT NULL,
  `Fono` int(12) NOT NULL,
  `Dia` date NOT NULL,
  `Socursal` varchar(35) NOT NULL,
  `Mensaje` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `horasatencion`
--

INSERT INTO `horasatencion` (`Nombre`, `Correo`, `Fono`, `Dia`, `Socursal`, `Mensaje`) VALUES
('juan', 'CORREO', 3322332, '2023-07-13', 'a', 'aa'),
('juanin', 'correito@gmail.com', 1234, '0000-00-00', '2023-07-06', 'fiumba'),
('almirante', 'correito1@gmail.com', 12341, '2023-07-13', 'sucursal2', 'fiumba'),
('juanin3', 'correito3@gmail.com', 123456, '2023-07-13', 'sucursal1', 'fiumba'),
('juanin3', 'correito3@gmail.com', 123456, '2023-07-13', 'sucursal1', 'fiumba'),
('juanin3', 'correito3@gmail.com', 123456, '2023-07-13', 'sucursal1', 'fiumba'),
('juanin6', 'correito6@gmail.com', 12347, '2023-07-14', 'sucursal2', 'fiumba'),
('juanin', 'correito7@gmail.com', 12348, '2023-07-13', 'sucursal3', 'fiumba'),
('juanin', 'correito@gmail.com', 1234, '2023-07-13', 'sucursal2', 'fiumba'),
('99', 'correito@gmail.com', 1234, '2023-07-14', 'sucursal3', 'fiumba');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
