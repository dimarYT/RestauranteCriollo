-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2023 a las 05:00:02
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `listadocris`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `dni` varchar(20) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `correo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `dni`, `fecha_nacimiento`, `correo`) VALUES
(26, 'Glicerio', 'Muller ', '7845784', '2023-11-02', 'glicerio12_1211@gmail.com'),
(27, 'Romel', 'Sanchez', '75819287', '2023-11-02', 'vargas_12@gmail.com'),
(36, 'Ronaldo', 'Crispin', '75819287', '2023-12-06', 'crispin_11@gmail.com'),
(37, 'Ronaldo', 'Crispin', '75819287', '2023-12-06', 'crispin_11@gmail.com'),
(38, 'Jesus ', 'Torres', '7458892', '2023-12-14', 'EdgarMiranda_12@hotmail.com'),
(39, 'edgar', 'Torres Chavez', '74578125', '2023-12-07', 'jesus@gmial.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `edad` int(11) NOT NULL,
  `genero` varchar(100) NOT NULL,
  `direccion` varchar(300) NOT NULL,
  `correo` varchar(300) NOT NULL,
  `contrasena` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `nombre`, `apellido`, `cargo`, `edad`, `genero`, `direccion`, `correo`, `contrasena`) VALUES
(1, 'Ronaldo', 'Crispin', 'Auxiliar', 5, 'Masculino', 'Mz A Lote 7 Canta Callao', 'crispin_11@gmail.comfk', '456123'),
(13, 'Sarita', 'Huaman', 'Actriz', 32, 'Femenino', 'Mz A Lote 7 Canta Callao', 'Sarita12_23@hotmail.com', 'saritamazna12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nombreMenu` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id`, `nombreMenu`, `descripcion`, `precio`) VALUES
(14, 'Arroz con Pollo', 'Pollo, papa, atun, salchipapa', 17),
(16, 'Papa', 'asd', 78);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesas`
--

CREATE TABLE `mesas` (
  `id` int(11) NOT NULL,
  `numeroMesa` int(11) NOT NULL,
  `capacidad` int(11) NOT NULL,
  `ubicacion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mesas`
--

INSERT INTO `mesas` (`id`, `numeroMesa`, `capacidad`, `ubicacion`) VALUES
(1, 15, 26, 'Santa Maria Baño'),
(19, 4, 10, 'Plaza Uniion'),
(20, 7, 22, 'Plaza Uniion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promocion`
--

CREATE TABLE `promocion` (
  `id` int(11) NOT NULL,
  `nombrePromocion` varchar(100) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `categoriaPromocion` varchar(300) NOT NULL,
  `codigoPromocion` varchar(300) NOT NULL,
  `estadoPromocion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `promocion`
--

INSERT INTO `promocion` (`id`, `nombrePromocion`, `descripcion`, `categoriaPromocion`, `codigoPromocion`, `estadoPromocion`) VALUES
(2, 'Alianza Lima', 'Universitario de deportes', 'Copa libertadores', 'Copa Sudamericana', 'Pagado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id` int(11) NOT NULL,
  `nombreProveedor` varchar(200) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `servicios` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id`, `nombreProveedor`, `telefono`, `correo`, `servicios`) VALUES
(5, 'Pura Vida', '944571547', 'Alicorp@gmail.com', 'arroz, arina, aceite'),
(8, 'Molitalia', '947513687', 'Molitalia123_12_12@hotmail.com', 'Productos mermoleados, gaseosa y harina'),
(12, 'Alicorp', '933396357', 'EdgarMiranda_12@hotmail.com', 'Productos lacteos y cerveza peruana'),
(14, 'Celular', '974587452', 'celular34@gmail.com.pe.e.e', 'celulares robados e internacionales dañados'),
(15, 'Alessamdra', '98974465', 'alesandra@gmail.com', 'papa con camote y no se que');

--
-- Índices para tablas volcadas
--

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
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mesas`
--
ALTER TABLE `mesas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `promocion`
--
ALTER TABLE `promocion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `mesas`
--
ALTER TABLE `mesas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `promocion`
--
ALTER TABLE `promocion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
