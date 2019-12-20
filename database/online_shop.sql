-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-12-2019 a las 18:28:20
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

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
(4, 'Libros', 'imagenes/categorias/libros.png', 'A la baja. No consideraron las necesidades del consumidor sino que surgieron por moda o son productos con versiones que se actualizan cada año; por ejemplo los smartphones, que se renuevan constantemente.'),
(5, 'Perfumeria', 'imagenes/categorias/perfumeria.jpg', 'Perfumeria online Nº1 de España. Productos originales de primeras marcas, con descuentos hasta -80% y entrega en 24 horas.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `usuario` varchar(40) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(225) NOT NULL,
  `img_usuario` varchar(255) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `token` text NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `usuario`, `nombre`, `apellido`, `correo`, `contrasena`, `img_usuario`, `fecha_registro`, `token`, `tipo`) VALUES
(34, 'AkiraReiDeveloper', 'Victor', 'Manuel', 'vmrg241096@gmail.com', 'lokoko', 'imagenes/usuarios/foto_perfil.jpg', '2019-12-20 17:10:46', '7e863991329b3bba2f3dea7dd14376de23b42bb962fbcbc2', 1),
(35, 'AkiraReyesdDev', 'VICTOR MANUEL', 'REYES', 'aaf_tu2@hotmail.com', 'Tostitos', '', '2019-12-20 17:12:50', '5f62fcef079147b094b773e2c11ecf520bac69bf3c8984e7', 2),
(36, 'AkiraReyes', 'VICTOR MANUEL', 'REYES', 'aaf_tu2@hotmail.com', 'Tostitos', '', '2019-12-20 17:12:50', '5f62fcef079147b094b773e2c11ecf520bac69bf3c8984e7', 2),
(38, 'AkiraRei', 'VICTOR MANUEL', 'REYES', 'aaf_tu2@hotmail.com', '202cb962ac59075b964b07152d234b70', 'imagenes/usuarios/Labrador_retriever_06457.jpg', '2019-12-20 17:12:50', '5f62fcef079147b094b773e2c11ecf520bac69bf3c8984e7', 2),
(39, 'AkiraRei', 'VICTOR MANUEL', 'REYES', 'aaf_tu2@hotmail.com', '202cb962ac59075b964b07152d234b70', 'imagenes/usuarios/American_water_spaniel_00648.jpg', '2019-12-20 17:12:50', '5f62fcef079147b094b773e2c11ecf520bac69bf3c8984e7', 2),
(40, 'AkiraReiewr5', 'VICTOR MANUEL', 'REYES', 'aaf_tu2@hotmail.com', 'b643f013cb9f3ccc9b44c0bd1ebbc669', 'imagenes/usuarios/imagen.jpg', '2019-12-20 17:12:50', '5f62fcef079147b094b773e2c11ecf520bac69bf3c8984e7', 2),
(41, 'AkiraReiewr5ew', 'VICTOR MANUEL', 'REYES', 'aaf_tu2@hotmail.com', '3979f7f001b2962787ccc75f394b7689', '', '2019-12-20 17:12:50', '5f62fcef079147b094b773e2c11ecf520bac69bf3c8984e7', 2),
(42, 'AkiraReiewr5234', 'VICTOR MANUEL', 'REYES', 'aaf_tu2@hotmail.com', '157eb9ce33644ada6d0499c1097c4f5d', '', '2019-12-20 17:12:50', '5f62fcef079147b094b773e2c11ecf520bac69bf3c8984e7', 2),
(43, 'AkiraReiewr5234', 'VICTOR MANUEL', 'REYES', 'aaf_tu2@hotmail.com', 'baa7a52965b99778f38ef37f235e9053', '', '2019-12-20 17:12:50', '5f62fcef079147b094b773e2c11ecf520bac69bf3c8984e7', 2),
(44, 'werwerwer', 'erwer', 'erwerwer', 'vmrg241096@gmail.com', 'lokoko', '', '2019-12-20 17:10:46', '7e863991329b3bba2f3dea7dd14376de23b42bb962fbcbc2', 2),
(45, 'werwerwer', 'erwer', 'erwerwer', 'vmrg241096@gmail.com', 'lokoko', '', '2019-12-20 17:10:46', '7e863991329b3bba2f3dea7dd14376de23b42bb962fbcbc2', 2),
(46, 'sdfsdffhgfh', 'ghfghfgh', 'gfhfgthfgh', 'vmrg241096@gmail.com', 'lokoko', 'imagenes/usuarios/icons8-administrador-del-hombre-150.png', '2019-12-20 17:10:46', '7e863991329b3bba2f3dea7dd14376de23b42bb962fbcbc2', 2),
(47, 'MiguelARGS', 'Miguel', 'Herrera', 'MiguiMilk@gmail.com', 'Tostitos', 'imagenes/usuarios/Welsh_springer_spaniel_08203.jpg', '2019-12-12 17:04:22', '', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `comentario` text NOT NULL,
  `forenkey_producto` int(11) NOT NULL,
  `forenkey_usuario` int(11) NOT NULL,
  `fecha_comentario` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `comentario`, `forenkey_producto`, `forenkey_usuario`, `fecha_comentario`) VALUES
(1, 'Muy buen producto', 3, 35, '2019-12-19 04:03:41'),
(2, 'Gracias, el producto es muy bueno', 3, 36, '2019-12-19 04:03:41'),
(9, 'comentario', 4, 36, '2019-12-19 05:54:10'),
(10, 'Thanks!', 3, 36, '2019-12-19 05:56:28'),
(11, 'Hello!', 3, 36, '2019-12-19 06:00:23'),
(12, 'Que paso?', 2, 36, '2019-12-19 06:19:07'),
(13, 'Que pedo we?', 3, 36, '2019-12-19 20:08:00');

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
(11, 'Completed', 337, '50420834YA199970R', 'MXN'),
(12, 'Completed', 337, '2TB66484EF285280P', 'MXN'),
(13, 'Completed', 337, '2TB66484EF285280P', 'MXN'),
(14, 'Completed', 337, '2TB66484EF285280P', 'MXN'),
(15, 'Completed', 337, '8KP88738DR137643E', 'MXN'),
(16, 'Completed', 674, '7JP25259KR507494A', 'MXN'),
(17, 'Completed', 1274, '7Y8195037L749800E', 'MXN'),
(18, 'Completed', 1274, '7Y8195037L749800E', 'MXN'),
(19, 'Completed', 1474, '7PP555173U228360Y', 'MXN'),
(20, 'Completed', 337, '6L754796WB2484303', 'MXN'),
(21, 'Completed', 337, '6L754796WB2484303', 'MXN'),
(22, 'Completed', 337, '6L754796WB2484303', 'MXN'),
(23, 'Completed', 337, '0UW560109L503063B', 'MXN'),
(24, 'Completed', 337, '5FW17728GS4962020', 'MXN'),
(25, 'Completed', 1037, '0BK45989EL408353C', 'MXN'),
(26, 'Completed', 637, '9NE548400F3581056', 'MXN'),
(27, 'Completed', 910, '9J197393TN621933L', 'MXN'),
(28, 'Completed', 910, '9J197393TN621933L', 'MXN');

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
(2, 'Xiaomi Pocophone F2 Dual SIM 128GB.', 8690, 5, 'imagenes/productos/pocophonef1.jpg', 'Celular marca Xiaomi edicion pocophone f1, mmemoria ram 6GB, memoria ROM 128GB', 'Celular marca Xiaomi edicion pocophone f1, mmemoria ram 6GB, memoria ROM 128GB no expansible, snapdragon 845, camara frontal de 12 y 20 mpx, frontal de 20.', 2),
(3, 'Nintendo Switch Lite Yellow color', 5499, 6, 'imagenes/productos/nintendoswitchlite.jpg', 'Consola Nintendo Switch, color amarrillo, incluye cargador', 'Consola Nintendo Switch, color amarrillo, incluye cargador, completamente nueva de fabrica. Especial para uso portatil.', 1),
(4, 'Balon de futbol Adidas Startlancer V.', 337, 1, 'imagenes/productos/balonadidas.jpg', 'Balon de fulbol con calcomania de adidas, color rosa', 'Balon de fulbol con calcomania de adidas, color rosa de uso exclusivo profesional, soporte de humedad, union con costuras', 3),
(5, 'Xiaomi Pocophone F1 Dual SIM 128GB.', 8690, 4, 'imagenes/productos/pocophonef1.jpg', 'Celular marca Xiaomi edicion pocophone f1, mmemoria ram 6GB, memoria ROM 128GB', 'Celular marca Xiaomi edicion pocophone f1, mmemoria ram 6GB, memoria ROM 128GB no expansible, snapdragon 845, camara frontal de 12 y 20 mpx, frontal de 20.', 2),
(6, 'Nintendo Switch Lite Yellow color', 5499, 8, 'imagenes/productos/nintendoswitchlite.jpg', 'Consola Nintendo Switch, color amarrillo, incluye cargador', 'Consola Nintendo Switch, color amarrillo, incluye cargador, completamente nueva de fabrica. Especial para uso portatil.', 1),
(7, 'El Principito', 600, 1, 'imagenes/productos/elprincipito.png', 'Libro apto para todo publico', 'Libro nuevo para todo tipo de publico', 4),
(8, 'It - (Eso)', 800, 5, 'imagenes/productos/it.png', 'Libro apto para mayores de 18', 'Libro nuevo para mayores de 18años', 4),
(9, 'El Spico Analista', 700, 9, 'imagenes/productos/elpsicoanalista.png', 'Libro recomendado para mayores de 18 años', 'Libro nuevo para mayores de 18 años', 4),
(11, 'El Bazar de los Malos Sueños', 700, 32, 'imagenes/productos/elbazardelosmalossuenos.png', 'Libro recomendado para mayores de 18 años', 'Libro nuevo recomendado para mayores de 18 años', 4),
(12, 'Python Pocket Reference ', 2000, 23, 'imagenes/productos/python.png', 'Libro practico para desarrollo de aplicaciones en python', 'Libro practico para el desarrollo de aplicaciones en python 100% nuevo', 4),
(13, 'Un Final Perfecto', 300, 1, 'imagenes/productos/unfinalerfecto.png', 'Libro recomendado para todo publico', 'Libro nuevo disponibilidad apto para todo publico', 4),
(14, 'CK One Unisex de Calvin Klein Eau de toilette 200ml', 573, 6, 'imagenes/productos/perfume.jpg', 'Las notas superiores son piña, notas verdes, mandarina, papaya, bergamota, cardamomo y limón (lima ácida).', 'Tener un buen aroma siempre ha sido de gran importancia para la mayoría de las personas es por ello que se han creado numerosas fragancias que nos ayudan en esta tarea. Hay una gran variedad de perfumes entre los cuales se puede elegir. Calvin Klein, nos ofrece algunas opciones, esta es una casa de modas estadounidense fundada en 1968, que cuenta con una gran trayectoria ty es una de las más famosas en el mundo.', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_tipo` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tipo`, `nombre`) VALUES
(1, 'administrador'),
(2, 'usuario');

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipo` (`tipo`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `forenkey_producto` (`forenkey_producto`),
  ADD KEY `forenkey_usuario` (`forenkey_usuario`);

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
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tipo`);

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
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_productos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ventas_dia`
--
ALTER TABLE `ventas_dia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `tipo_usuario` (`id_tipo`);

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`forenkey_producto`) REFERENCES `productos` (`id_productos`),
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`forenkey_usuario`) REFERENCES `clientes` (`id`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
