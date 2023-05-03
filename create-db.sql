-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-05-2023 a las 20:59:03
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `skoobdoog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `author`
--

CREATE TABLE `author` (
  `author_id` int(10) NOT NULL,
  `author_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `author`
--

INSERT INTO `author` (`author_id`, `author_name`) VALUES
(2, 'Viktor Frankl'),
(3, 'J.K. Rowling'),
(4, 'Ted Chiang'),
(5, 'Eloy Moreno'),
(6, 'Robin Sharma'),
(7, 'Stephen King'),
(8, 'Santiago Posteguillo'),
(9, 'George Orwell'),
(10, 'Javier Castillo'),
(11, 'John Boyne'),
(12, 'Príncipe Harry'),
(13, 'Tracy Wolff'),
(14, 'H.D. Carlton'),
(15, 'Camilla Läckberg'),
(16, 'Fernando Aramburu'),
(17, 'Inma Rubiales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `book`
--

CREATE TABLE `book` (
  `book_isbn` bigint(13) NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `book_price` decimal(5,2) NOT NULL,
  `book_stock` int(5) NOT NULL,
  `author_id` int(10) NOT NULL,
  `publisher_id` int(10) NOT NULL,
  `bookCategory_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `book`
--

INSERT INTO `book` (`book_isbn`, `book_title`, `book_price`, `book_stock`, `author_id`, `publisher_id`, `bookCategory_id`) VALUES
(9781644730065, 'El monje que vendió su Ferrari: Una fábula espiritual', '14.45', 11, 6, 6, 2),
(9788401029813, 'En la sombra', '21.75', 43, 12, 9, 8),
(9788408266914, 'Hechizo', '18.52', 28, 13, 10, 9),
(9788408267928, 'El arte de ser nosotros', '17.00', 29, 17, 10, 2),
(9788408268307, 'La secta', '22.70', 18, 15, 10, 6),
(9788411072281, 'Hijos de la fábula', '19.85', 7, 16, 12, 10),
(9788416588435, 'Invisible', '15.15', 14, 5, 5, 5),
(9788418968815, 'Todas las piezas rotas', '19.00', 20, 11, 3, 5),
(9788419421890, 'Haunting Adeline: Nunca te dejaré', '18.00', 32, 14, 11, 9),
(9788425432026, 'El hombre en busca de sentido', '12.25', 21, 2, 2, 2),
(9788466671781, 'Roma soy yo: La verdadera historia de Julio César', '22.70', 21, 8, 7, 7),
(9788490627662, 'Mr. Mercedes', '9.45', 41, 7, 6, 6),
(9788491293552, 'El cuco de cristal', '19.85', 33, 10, 8, 6),
(9788498386943, 'Harry Potter y la piedra filosofal', '18.50', 13, 3, 3, 3),
(9788498891355, 'La historia de tu vida', '18.95', 27, 4, 4, 4),
(9788499890944, '1984', '7.95', 6, 9, 6, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bookcategory`
--

CREATE TABLE `bookcategory` (
  `bookCategory_id` int(10) NOT NULL,
  `bookCategory_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bookcategory`
--

INSERT INTO `bookcategory` (`bookCategory_id`, `bookCategory_name`) VALUES
(2, 'Autoayuda'),
(3, 'Fantasía'),
(4, 'Ciencia ficción'),
(5, 'Drama'),
(6, 'Misterio y suspense'),
(7, 'Historia'),
(8, 'Autobiografía'),
(9, 'Romance paranormal'),
(10, 'Novela');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contain`
--

CREATE TABLE `contain` (
  `order_id` int(10) NOT NULL,
  `book_isbn` bigint(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order`
--

CREATE TABLE `order` (
  `order_id` int(10) NOT NULL,
  `order_date` date NOT NULL,
  `order_shippingMethod` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publisher`
--

CREATE TABLE `publisher` (
  `publisher_id` int(10) NOT NULL,
  `publisher_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `publisher`
--

INSERT INTO `publisher` (`publisher_id`, `publisher_name`) VALUES
(2, 'Herder'),
(3, 'Salamandra'),
(4, 'Alamut'),
(5, 'Nube de tinta'),
(6, 'DeBolsillo'),
(7, 'Ediciones B'),
(8, 'SUMA'),
(9, 'Plaza & Janes'),
(10, 'Planeta'),
(11, 'Montena'),
(12, 'Tusquets Editores');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_phone` int(20) NOT NULL,
  `user_surname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_address`, `user_phone`, `user_surname`) VALUES
(1, 'Usuario random', 'user@random.com', 'calle A, 5', 606655884, 'olakase');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indices de la tabla `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_isbn`),
  ADD KEY `book-publisher_id` (`publisher_id`),
  ADD KEY `book-author_id` (`author_id`),
  ADD KEY `book-bookCategory_id` (`bookCategory_id`);

--
-- Indices de la tabla `bookcategory`
--
ALTER TABLE `bookcategory`
  ADD PRIMARY KEY (`bookCategory_id`);

--
-- Indices de la tabla `contain`
--
ALTER TABLE `contain`
  ADD PRIMARY KEY (`order_id`,`book_isbn`),
  ADD KEY `contain-book_isbn` (`book_isbn`);

--
-- Indices de la tabla `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `order-user_id` (`user_id`);

--
-- Indices de la tabla `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisher_id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `bookcategory`
--
ALTER TABLE `bookcategory`
  MODIFY `bookCategory_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisher_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book-author_id` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`),
  ADD CONSTRAINT `book-bookCategory_id` FOREIGN KEY (`bookCategory_id`) REFERENCES `bookcategory` (`bookCategory_id`),
  ADD CONSTRAINT `book-publisher_id` FOREIGN KEY (`publisher_id`) REFERENCES `publisher` (`publisher_id`);

--
-- Filtros para la tabla `contain`
--
ALTER TABLE `contain`
  ADD CONSTRAINT `contain-book_isbn` FOREIGN KEY (`book_isbn`) REFERENCES `book` (`book_isbn`),
  ADD CONSTRAINT `contain-order_id` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`);

--
-- Filtros para la tabla `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order-user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
