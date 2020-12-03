-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2020 a las 02:21:51
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bbdd_cerveceria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(50) NOT NULL,
  `descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre_categoria`, `descripcion`) VALUES
(1, 'Amargor bajo', 'Categoría segun IBU-INTERNATIONAL BITTERNESS UNITS (también nombrado como International Bittering Unit). Es decir, es la Unidad Internacional de amargor, una escala para medir la percepción del amargor de la cerveza.'),
(2, 'Amargor moderado', 'Categoría segun IBU-INTERNATIONAL BITTERNESS UNITS (también nombrado como International Bittering Unit). Es decir, es la Unidad Internacional de amargor, una escala para medir la percepción del amargor de la cerveza.'),
(3, 'Amargor alto', 'Categoría segun IBU-INTERNATIONAL BITTERNESS UNITS (también nombrado como International Bittering Unit). Es decir, es la Unidad Internacional de amargor, una escala para medir la percepción del amargor de la cerveza.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cerveza`
--

CREATE TABLE `cerveza` (
  `id_cerveza` int(11) NOT NULL,
  `nombre_producto` varchar(255) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `porcentaje_alc` double NOT NULL,
  `precio` double NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cerveza`
--

INSERT INTO `cerveza` (`id_cerveza`, `nombre_producto`, `descripcion`, `porcentaje_alc`, `precio`, `id_categoria`) VALUES
(2, 'Porter', 'Maltas oscuras. Sabor y aroma penetrante y nocturno. Chocolate, azúcar negro y café. La Porter es la cerveza tributo de Antares a la cultura de los primeros pubs en el puerto de Londres. Cheers.', 5, 160, 2),
(3, 'Scotch', 'Escocia es tierra de cebada y la Scotch Ale lleva ese paisaje impregnado en su código genético. Rubí intenso. Seis grados de alcohol. Dulce y maltosa. La Antares más servida en nuestro Brewpub. Una fórmula a prueba del paso del tiempo.', 6, 160, 1),
(4, 'Honey Beer', 'Babilonia antigua. Tras la boda, el padre de la novia convida al futuro yerno con cerveza de miel a lo largo de un mes. Así lo dicta la tradición. Nuestra Honey Beer recoge la historia que dio origen a “la luna de miel” y lo celebra con notas mento-ladas y frutales. Y, por supuesto, una inmersión de miel pura para abrir los corazones.', 7, 170, 1),
(5, 'Barley Wine', 'Nuestra cerveza de mayor graduación alcohólica. Una hermandad de malta y licor, con rasgos de nuez, caramelo y dulce de leche. Barley Wine, cuando la vid se vuelve cebada.', 10, 170, 2),
(6, 'India Pale Ale', 'De Inglaterra a India hay un largo recorrido. En 1780, Mr. Hodgson descubrió que elevando el lúpulo y la graduación alcohólica, la cerveza llegaba a destino intacta. Bautizó a su fórmula India Pale Ale. En Antares, le sumamos lúpulos americanos con presencia de flores y cítricos. Nuestra cerveza viajera.', 6.6, 180, 3),
(8, 'Imperial Stout', 'Catalina la Grande amaba las emociones fuertes. Por eso, la Imperial Stout, negra y tostada, empapada de alcohol y pasas, amarga y ahumada, era su cerveza favorita. Esencia inglesa de exportación. Tímidos, abstenerse.', 8.5, 170, 2),
(9, 'Cream Stout', 'Es una cerveza negra de origen irlandés. En ella se descubren sabores de chocolate y nueces en el paladar, con un licoroso y placentero post-gusto. Muy corpulenta, de espuma cremosa e increíblemente fácil de tomar debido a que posee menos gas carbónico que las cervezas tradicionales.', 7, 170, 2),
(10, 'El Centinela Roble', 'El roble tiene una larga historia acompañando las bebidas. Cerveza, vino, whisky y otros destilados fueron guardados en barricas de Roble hasta la llegada del acero inoxidable. Pero como en la cerveza artesanal todo vuelve, una vez más en Antares corremos los límites para crear cervezas que rompen el status quo y nos traen sensaciones nuevas. Después de buscar durante años, encontramos unas barricas de Roble Francés utilizadas para añejar destilados que le aportan carácter de vainilla, coco y dulce de leche. El alcohol impregnado en la madera, la oscuridad, el silencio, y el tiempo son los Centinelas ideales para cuidar una cerveza de guarda. Para honrar el pasado de las barricas creamos una Antares Barley Wine ideal para añejar. ', 14, 350, 2),
(11, 'Monasterio Belgian Quad', 'Antares Monasterio estilo Belgian Quad, y añejada en barricas de roble francés. Es una cerveza muy fuere. Sus 14 grados de alcohol se esconden detrás de un aroma frutado como a damasco, zapallos en almíbar y banana, que se complementan con el aporte de vainilla y madera de la barrica. Oscura pero sin carácter torrado ni tostado, es una bomba para añejar durante años.', 14, 350, 2),
(12, 'Sudestada', 'Llega el otoño. En Mar del Plata es sinónimo de SUDESTADA; viento, frío, las mejores olas. Una cerveza ámbar profundo estilo American Red Ale, con aromas y sabores a caramelos que se entrelazan con los cítricos y resinosos que aporta el lúpulo; la compañía ideal para la estación.', 4.5, 180, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `id_cerveza` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `comentario` varchar(255) NOT NULL,
  `valoracion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `id_cerveza`, `id_usuario`, `comentario`, `valoracion`) VALUES
(18, 2, 1, 'Muy buena cerveza!!', 5),
(19, 2, 1, 'Podria mejorar...', 3),
(20, 3, 1, 'Excelente sabor', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `password`, `admin`) VALUES
(1, 'usuario@administrador', '$2y$10$SrtxGjuSN11qsWy6vKiQe.uF8eoTPF2AXRLfGZeGPMjUqGX0OlQNm', 1),
(18, 'usuario@comun', '$2y$10$MOEMTWiX17ZP2uJgIboGweuXjflI.RD1uB08DcM0/G4fMmV5o50U6', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `cerveza`
--
ALTER TABLE `cerveza`
  ADD PRIMARY KEY (`id_cerveza`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_cerveza` (`id_cerveza`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `cerveza`
--
ALTER TABLE `cerveza`
  MODIFY `id_cerveza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cerveza`
--
ALTER TABLE `cerveza`
  ADD CONSTRAINT `cerveza_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_cerveza`) REFERENCES `cerveza` (`id_cerveza`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
