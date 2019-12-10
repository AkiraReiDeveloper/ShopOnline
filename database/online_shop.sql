-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2019 a las 16:45:51
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `online_shop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `img_categoria` varchar(255) NOT NULL,
  `descripcion_categoria` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`, `img_categoria`, `descripcion_categoria`) VALUES
(1, 'VideoJuegos', 'imagenes/categorias/videojuegos.png', 'Nuevos.  Se trata de aquellos productos que se ubican en fase de lanzamiento y que esperan la respuesta del consumidor sobre sus características.'),
(2, 'Celulares', 'imagenes/categorias/celulares.png', 'Estrella. Los productos estrella destacan por el boom que tienen en ventas al momento de su lanzamiento, hasta que sale un producto superior. Sin embargo, también están aquellos que se mantienen durante años como la estrella en su segmento. Tal como el iPhone de Apple o el Galaxy de Samsung.'),
(3, 'Deportes', 'imagenes/categorias/deportes.png', 'Apoyo. Son elementos indispensables para los demás productos, por ejemplo cargadores de celular, baterías, servicio Wi-Fi, etcétera.'),
(4, 'Libros', 'imagenes/categorias/libros.png', 'A la baja. No consideraron las necesidades del consumidor sino que surgieron por moda o son productos con versiones que se actualizan cada año; por ejemplo los smartphones, que se renuevan constantemente.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(6) UNSIGNED NOT NULL,
  `usuario` varchar(40) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(225) NOT NULL,
  `img_usuario` varchar(255) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `usuario`, `nombre`, `apellido`, `correo`, `contrasena`, `img_usuario`, `fecha_registro`, `token`) VALUES
(34, 'AkiraReiDeveloper', 'Victor', 'Manuel', 'vmrg241096@gmail.com', 'Tostitos', '', '2019-12-08 01:52:31', ''),
(35, 'AkiraReyesdDev', 'VICTOR MANUEL', 'REYES', 'aaf_tu2@hotmail.com', 'c38fc265ba6bd19e91716b07459e0840', '', '2019-12-08 02:50:01', ''),
(36, 'AkiraReyes', 'VICTOR MANUEL', 'REYES', 'aaf_tu2@hotmail.com', '84d9cfc2f395ce883a41d7ffc1bbcf4e', '', '2019-12-08 02:55:20', ''),
(37, 'AkiraRei', 'VICTOR MANUEL', 'REYES', 'aaf_tu2@hotmail.com', '202cb962ac59075b964b07152d234b70', '', '2019-12-08 02:59:51', ''),
(38, 'AkiraRei', 'VICTOR MANUEL', 'REYES', 'aaf_tu2@hotmail.com', '202cb962ac59075b964b07152d234b70', '', '2019-12-08 03:00:12', ''),
(39, 'AkiraRei', 'VICTOR MANUEL', 'REYES', 'aaf_tu2@hotmail.com', '202cb962ac59075b964b07152d234b70', '', '2019-12-08 03:05:46', ''),
(40, 'AkiraReiewr5', 'VICTOR MANUEL', 'REYES', 'aaf_tu2@hotmail.com', 'b643f013cb9f3ccc9b44c0bd1ebbc669', '', '2019-12-08 03:06:05', ''),
(41, 'AkiraReiewr5ew', 'VICTOR MANUEL', 'REYES', 'aaf_tu2@hotmail.com', '3979f7f001b2962787ccc75f394b7689', '', '2019-12-08 03:06:33', ''),
(42, 'AkiraReiewr5234', 'VICTOR MANUEL', 'REYES', 'aaf_tu2@hotmail.com', '157eb9ce33644ada6d0499c1097c4f5d', '', '2019-12-08 03:10:47', ''),
(43, 'AkiraReiewr5234', 'VICTOR MANUEL', 'REYES', 'aaf_tu2@hotmail.com', 'baa7a52965b99778f38ef37f235e9053', '', '2019-12-08 03:11:13', ''),
(44, 'werwerwer', 'erwer', 'erwerwer', 'vmrg241096@gmail.com', 'e130e5e618f15cee7a519d8b7b8306a0', '', '2019-12-08 03:15:08', ''),
(45, 'werwerwer', 'erwer', 'erwerwer', 'vmrg241096@gmail.com', 'c68c559d956d4ca20f435ed74a6e71e6', '', '2019-12-08 03:16:08', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `estatus_pedido` varchar(255) NOT NULL,
  `monto_pedido` float NOT NULL,
  `codigo_pedido` varchar(255) NOT NULL,
  `divisa_pedido` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `estatus_pedido`, `monto_pedido`, `codigo_pedido`, `divisa_pedido`) VALUES
(1, 'Completed', 674, '94834096GW753552K', 'MXN'),
(2, 'Completed', 674, '94834096GW753552K', 'MXN'),
(3, 'Completed', 674, '94834096GW753552K', 'MXN'),
(4, 'Completed', 674, '94834096GW753552K', 'MXN'),
(5, 'Completed', 674, '94834096GW753552K', 'MXN'),
(6, 'Completed', 674, '94834096GW753552K', 'MXN'),
(7, 'Completed', 674, '94834096GW753552K', 'MXN'),
(8, 'Completed', 674, '94834096GW753552K', 'MXN'),
(9, 'Completed', 674, '94834096GW753552K', 'MXN'),
(10, 'Completed', 674, '94834096GW753552K', 'MXN'),
(11, 'Completed', 337, '50420834YA199970R', 'MXN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_productos` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` double NOT NULL,
  `cantidad` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `descripcion_corta` text NOT NULL,
  `descripcion` text NOT NULL,
  `categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_productos`, `nombre`, `precio`, `cantidad`, `img`, `descripcion_corta`, `descripcion`, `categoria`) VALUES
(1, 'Balon de futbol Adidas Startlancer V.', 337, 10, 'imagenes/categorias/chi.jpg', 'Balon de fulbol con calcomania de adidas, color rosa', 'Balon de fulbol con calcomania de adidas, color rosa de uso exclusivo profesional, soporte de humedad, union con costuras', 3),
(2, 'Xiaomi Pocophone F1 Dual SIM 128GB.', 8690, 5, 'imagenes/productos/pocophonef1.jpg', 'Celular marca Xiaomi edicion pocophone f1, mmemoria ram 6GB, memoria ROM 128GB', 'Celular marca Xiaomi edicion pocophone f1, mmemoria ram 6GB, memoria ROM 128GB no expansible, snapdragon 845, camara frontal de 12 y 20 mpx, frontal de 20.', 2),
(3, 'Nintendo Switch Lite Yellow color', 5499, 6, 'imagenes/productos/nintendoswitchlite.jpg', 'Consola Nintendo Switch, color amarrillo, incluye cargador', 'Consola Nintendo Switch, color amarrillo, incluye cargador, completamente nueva de fabrica. Especial para uso portatil.', 1),
(4, 'Balon de futbol Adidas Startlancer V.', 337, 6, 'imagenes/productos/balon.jpg', 'Balon de fulbol con calcomania de adidas, color rosa', 'Balon de fulbol con calcomania de adidas, color rosa de uso exclusivo profesional, soporte de humedad, union con costuras', 3),
(5, 'Xiaomi Pocophone F1 Dual SIM 128GB.', 8690, 4, 'imagenes/productos/pocophonef1.jpg', 'Celular marca Xiaomi edicion pocophone f1, mmemoria ram 6GB, memoria ROM 128GB', 'Celular marca Xiaomi edicion pocophone f1, mmemoria ram 6GB, memoria ROM 128GB no expansible, snapdragon 845, camara frontal de 12 y 20 mpx, frontal de 20.', 2),
(6, 'Nintendo Switch Lite Yellow color', 5499, 8, 'imagenes/productos/nintendoswitchlite.jpg', 'Consola Nintendo Switch, color amarrillo, incluye cargador', 'Consola Nintendo Switch, color amarrillo, incluye cargador, completamente nueva de fabrica. Especial para uso portatil.', 1),
(7, 'El Principito', 600, 2, 'imagenes/productos/elprincipito.png', 'Libro apto para todo publico', 'Libro nuevo para todo tipo de publico', 4),
(8, 'It - (Eso)', 800, 5, 'imagenes/productos/it.png', 'Libro apto para mayores de 18', 'Libro nuevo para mayores de 18años', 4),
(9, 'El Spico Analista', 700, 9, 'imagenes/productos/elpsicoanalista.png', 'Libro recomendado para mayores de 18 años', 'Libro nuevo para mayores de 18 años', 4),
(11, 'El Bazar de los Malos Sueños', 700, 32, 'imagenes/productos/elbazardelosmalossuenos.png', 'Libro recomendado para mayores de 18 años', 'Libro nuevo recomendado para mayores de 18 años', 4),
(12, 'Python Pocket Reference ', 2000, 23, 'imagenes/productos/python.png', 'Libro practico para desarrollo de aplicaciones en python', 'Libro practico para el desarrollo de aplicaciones en python 100% nuevo', 4),
(13, 'Un Final Perfecto', 300, 1, 'imagenes/productos/unfinalerfecto.png', 'Libro recomendado para todo publico', 'Libro nuevo disponibilidad apto para todo publico', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas_dia`
--

CREATE TABLE `ventas_dia` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_productos`),
  ADD KEY `catgoria` (`categoria`);

--
-- Indices de la tabla `ventas_dia`
--
ALTER TABLE `ventas_dia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_productos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `ventas_dia`
--
ALTER TABLE `ventas_dia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
