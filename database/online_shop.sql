-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2019 a las 17:38:07
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 5.6.36

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
  `img_categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`, `img_categoria`) VALUES
(1, 'VideoJuegos', 'imagenes/categorias/videojuegos.png'),
(2, 'Celulares', 'imagenes/categorias/celulares.png'),
(3, 'Deportes', 'imagenes/categorias/deportes.png'),
(4, 'Libros', 'imagenes/categorias/libros.png');

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
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `usuario`, `nombre`, `apellido`, `correo`, `contrasena`, `fecha_registro`) VALUES
(1, 'ElKarlos69', 'Carlos', 'Alonso', 'juan_ps@gmoil.me', 'gfhdrfghfgm', '2019-09-15 01:09:10'),
(2, 'ElKarlos690', 'Carlos', 'Alonso', 'juan_ps@gmoil.me', 'lkbzdgq3rh.', '2019-09-15 01:09:24'),
(3, 'Lokos34', 'fdgsdg', 'dfgsdfg', 'fdghdfg@dfds.com', '1234', '2019-09-15 01:09:36'),
(4, 'Folagor02', 'fdgsdg', 'dfgsdfg', 'fdghdfg@dfds.com', '4feb2371a1843d099b28dd419dbab1ef', '2019-09-15 01:09:48'),
(5, 'AkiraReiGamer', 'Akira', 'Reyes', 'vmrg241096@gmail.com', 'da13fe07a8882019b0cacc144a53d9d7', '2019-09-15 01:10:00'),
(6, 'AkiraReyes', 'VICTOR MANUEL', 'REYES', 'vmrg241096@gmail.com', 'a14fc97a083cc9250089460bdc9bc37e', '2019-09-15 01:10:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_productos` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` double NOT NULL,
  `img` varchar(255) NOT NULL,
  `descripcion-corta` text NOT NULL,
  `descripcion` text NOT NULL,
  `categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_productos`, `nombre`, `precio`, `img`, `descripcion-corta`, `descripcion`, `categoria`) VALUES
(1, 'Balon de futbol Adidas Startlancer V.', 337, 'imagenes/productos/balon.jpg', 'Balon de fulbol con calcomania de adidas, color rosa', 'Balon de fulbol con calcomania de adidas, color rosa de uso exclusivo profesional, soporte de humedad, union con costuras', 3),
(2, 'Xiaomi Pocophone F1 Dual SIM 128GB.', 8690, 'imagenes/productos/pocophonef1.jpg', 'Celular marca Xiaomi edicion pocophone f1, mmemoria ram 6GB, memoria ROM 128GB', 'Celular marca Xiaomi edicion pocophone f1, mmemoria ram 6GB, memoria ROM 128GB no expansible, snapdragon 845, camara frontal de 12 y 20 mpx, frontal de 20.', 2),
(3, 'Nintendo Switch Lite Yellow color', 5499, 'imagenes/productos/nintendoswitchlite.jpg', 'Consola Nintendo Switch, color amarrillo, incluye cargador', 'Consola Nintendo Switch, color amarrillo, incluye cargador, completamente nueva de fabrica. Especial para uso portatil.', 1),
(4, 'Balon de futbol Adidas Startlancer V.', 337, 'imagenes/productos/balon.jpg', 'Balon de fulbol con calcomania de adidas, color rosa', 'Balon de fulbol con calcomania de adidas, color rosa de uso exclusivo profesional, soporte de humedad, union con costuras', 3),
(5, 'Xiaomi Pocophone F1 Dual SIM 128GB.', 8690, 'imagenes/productos/pocophonef1.jpg', 'Celular marca Xiaomi edicion pocophone f1, mmemoria ram 6GB, memoria ROM 128GB', 'Celular marca Xiaomi edicion pocophone f1, mmemoria ram 6GB, memoria ROM 128GB no expansible, snapdragon 845, camara frontal de 12 y 20 mpx, frontal de 20.', 2),
(6, 'Nintendo Switch Lite Yellow color', 5499, 'imagenes/productos/nintendoswitchlite.jpg', 'Consola Nintendo Switch, color amarrillo, incluye cargador', 'Consola Nintendo Switch, color amarrillo, incluye cargador, completamente nueva de fabrica. Especial para uso portatil.', 1),
(7, 'El Principito', 600, 'imagenes/productos/elprincipito.png', 'Libro apto para todo publico', 'Libro nuevo para todo tipo de publico', 4),
(8, 'It - (Eso)', 800, 'imagenes/productos/it.png', 'Libro apto para mayores de 18', 'Libro nuevo para mayores de 18años', 4),
(9, 'El Spico Analista', 700, 'imagenes/productos/elpsicoanalista.png', 'Libro recomendado para mayores de 18 años', 'Libro nuevo para mayores de 18 años', 4),
(10, 'Android', 2000, 'imagenes/productos/android.png', 'Libro basico de android', 'Libro basico para aprender a programar en dispositivos con sistema operativo android', 4),
(11, 'El Bazar de los Malos Sueños', 700, 'imagenes/productos/elbazardelosmalossuenos.png', 'Libro recomendado para mayores de 18 años', 'Libro nuevo recomendado para mayores de 18 años', 4),
(12, 'Python Pocket Reference ', 2000, 'imagenes/productos/python.png', 'Libro practico para desarrollo de aplicaciones en python', 'Libro practico para el desarrollo de aplicaciones en python 100% nuevo', 4),
(13, 'Un Final Perfecto', 300, 'imagenes/productos/unfinalerfecto.png', 'Libro recomendado para todo publico', 'Libro nuevo disponibilidad apto para todo publico', 4);

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
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
