-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-07-2026 a las 04:22:05
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_sabore_restaurante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`, `descripcion`) VALUES
(1, 'Bebidas', 'Jugos, gaseosas, agua y bebidas calientes.'),
(2, 'Entradas', 'Platos principales del menú.'),
(3, 'Postres', 'Dulces, pasteles y helados.'),
(4, 'Ensaladas', 'Ensaladas frescas y saludables.'),
(5, 'Sopas', 'Caldos y sopas del día.'),
(6, 'Comida Rápida', 'Hamburguesas, pizzas, hot dogs, etc.'),
(7, 'Mariscos', 'Platos preparados con mariscos y pescados.'),
(8, 'Parrilladas', 'Carnes a la parrilla y asados.'),
(9, 'Comida Típica', 'Platos tradicionales de la región.'),
(10, 'Menú Infantil', 'Comidas especiales para niños.'),
(11, 'Promociones', 'Combos y ofertas especiales.'),
(12, 'Platos Fuertes', 'El plato fuerte o plato principal es el eje central de un menú, el más contundente y elaborado.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `telefono`, `email`, `direccion`, `fecha_registro`) VALUES
(2, 'Juan Pérez', '0991234567', 'juan.perez@gmail.com', 'Av. 9 de Octubre, Guayaquil', '2026-07-07 00:30:31'),
(3, 'María López', '0987654321', 'maria.lopez@hotmail.com', 'Cdla. Alborada, Guayaquil', '2026-07-08 01:37:41'),
(4, 'Carlos Sánchez', '0961122334', 'carlos.sanchez@yahoo.com', 'Urdesa Central, Guayaquil', '2026-07-08 01:38:10'),
(5, 'Postres', '0977788330', 'julian.castro@gmail.com', 'Av. 9 de Octubre, Guayaquil', '2026-07-08 01:53:08'),
(6, 'Entradas', '0993267519', 'Lana.lopez@hotmail.com', 'Vía a la Costa, Guayaquil', '2026-07-08 01:54:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id_compra` int(11) NOT NULL,
  `id_proveedor` int(11) DEFAULT NULL,
  `fecha_compra` date DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`id_compra`, `id_proveedor`, `fecha_compra`, `total`) VALUES
(1, 1, '2026-04-30', 50.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id_empleado` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `cargo` varchar(50) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `fecha_contratacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_empleado`, `nombre`, `cargo`, `telefono`, `email`, `fecha_contratacion`) VALUES
(1, 'José Martínez', 'Gerente', '0991234567', 'jose.martinez@sabore.com', '2025-05-14'),
(2, 'Andrea Castillo', 'Cajera', '0987654321', 'andrea.castillo@sabore.com', '2025-07-04'),
(3, 'Carlos Vera', 'Chef', '0961122334', 'carlos.vera@sabore.com', '2024-05-27'),
(4, 'Sofía Morales', 'Mesera', '0954455667', 'sofia.morales@sabore.com', '2025-04-17'),
(5, 'Diego Rojas', 'Ayudante de Cocina', '0977788990', 'diego.rojas@sabore.com', '2025-10-21'),
(6, 'Miguel Herrera', 'Repartidor', '0985566778', 'miguel.herrera@sabore.com', '2026-02-03'),
(7, 'Daniela Paredes', 'Bartender', '0969988776', 'daniela.paredes@sabore.com', '2026-06-17'),
(8, 'Fernanda López', 'Administradora', '0976655443', 'fernanda.lopez@sabore.com', '2026-01-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `fecha_pedido` timestamp NOT NULL DEFAULT current_timestamp(),
  `estado` varchar(50) DEFAULT 'pendiente',
  `total` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `id_cliente`, `fecha_pedido`, `estado`, `total`) VALUES
(3, 2, '2026-04-10 05:00:00', 'Pendiente', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` decimal(10,2) NOT NULL,
  `stock` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `id_categoria`, `nombre`, `descripcion`, `precio`, `stock`) VALUES
(1, 1, 'Coca Cola', 'Gaseosa sabor cola.', 1.50, 50),
(2, 1, 'Jugo de naranja', 'Jugo natural de naranja.', 2.00, 30),
(3, 1, 'Agua mineral', 'Agua sin gas 600 ml.', 1.00, 80),
(4, 2, 'Pan de Ajo', 'Pan tostado con mantequilla y ajo.', 2.50, 15),
(5, 3, 'Cheesecake', 'Pastel de queso con mermelada.', 3.50, 12),
(6, 3, 'Helado de Vainilla', 'Helado artesanal.', 2.75, 20),
(7, 12, 'Arroz con Pollo', 'Arroz acompañado de pollo y ensalada.', 5.50, 18),
(8, 6, 'Hamburguesa Clásica', 'Hamburguesa de carne de res con queso, lechuga, tomate y salsa especial.', 5.00, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `nombre`, `telefono`, `email`, `direccion`) VALUES
(1, 'Luis Mendoza', '0977788990', 'luis.mendoza@outlook.com', 'Sauces 8, Guayaquil'),
(2, 'Ana Torres', '0954455667', 'ana.torres@gmail.com', 'Vía a la Costa, Guayaquil');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL,
  `id_empleado` int(11) DEFAULT NULL,
  `fecha_venta` timestamp NOT NULL DEFAULT current_timestamp(),
  `total` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id_venta`, `id_empleado`, `fecha_venta`, `total`) VALUES
(1, 1, '2026-07-08 01:45:01', 100.00),
(2, 2, '2026-07-08 01:45:42', 80.00);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `id_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_empleado` (`id_empleado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`id_empleado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
