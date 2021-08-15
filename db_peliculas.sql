-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 15-08-2021 a las 22:35:30
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_peliculas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `id_genero` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`id_genero`, `nombre`) VALUES
(2, 'Terror'),
(4, 'Drama'),
(5, 'Comedia'),
(6, 'Acción');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id_pelicula` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `sinopsis` text NOT NULL,
  `anio` year(4) NOT NULL,
  `duracion` int(11) NOT NULL,
  `reparto` text NOT NULL,
  `urlPoster` varchar(255) NOT NULL,
  `urlPelicula` text NOT NULL,
  `generos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id_pelicula`, `titulo`, `sinopsis`, `anio`, `duracion`, `reparto`, `urlPoster`, `urlPelicula`, `generos`) VALUES
(4, 'Jungle Cruise', 'Film ambientado a principios del siglo XX. Frank (Interpretado por Dwayne Johnson) es el carismático capitán de una peculiar embarcación que recorre la selva amazónica. Allí, a pesar de los peligros que el río Amazonas les tiene preparados, Frank llevará en su barco a la científica Lily Houghton (Interpretada por Emily Blunt) y a su hermano McGregor Houghton (Interpretado por Jack Whitehall). Su misión será encontrar un árbol místico que podría tener poderes curativos. Claro que su objetivo no será fácil, y en su aventura se encontrarán con toda clase de dificultades, además de una expedición alemana que busca también este árbol con propiedades curativas. Esta comedia de acción y aventuras está basada en la atracción Jungle Cruise de los parques de ocio de Disney.', 2021, 127, 'Dwayne Johnson', 'https://img.repelis.id/cover/jungle-cruise-2-1627653129.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/hIJUnZnvAzA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Acción,Comedia,Comedia Negra,Erótico'),
(5, 'Scooby-Doo: Comienza el Misterio', 'Es la tercera película con actores reales basada en la serie Scooby Doo. Se trata de una precuela que narra los orígenes de los personajes y de cómo llegó a formarse Misterios S.A. Un día, los cuatros adolescentes son expulsados temporalmente por ser acusados de una gamberrada que asustó a todo el colegio. Con el fin de limpiar sus nombres y demostrar que no son culpables, se reunirán para resolver el misterio sobrenatural junto a un perro aparentemente normal y corriente que se vuelve adicto a la comida y que encima habla.', 2009, 82, 'Kate Melton, Hayley Kiyoko, Robbie Amell, Nick Palatas', 'https://static.noimg.net/movie/cover/original/51293f988f72aa61a9cbed444c43bebe.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/JBClEj8QVTI\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Aventura,Comedia,Fantasía,Infantil,Misterio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `correo`, `contrasena`) VALUES
(2, 'Administrador', 'admin@admin.com', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id_pelicula`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id_pelicula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
