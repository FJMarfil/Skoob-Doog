-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2023 a las 14:30:50
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
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) NOT NULL,
  `order_date` date NOT NULL,
  `order_shippingMethod` varchar(255) NOT NULL,
  `order_price` decimal(5,2) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `order_name` varchar(255) NOT NULL,
  `order_surname` varchar(255) NOT NULL,
  `order_email` varchar(255) NOT NULL,
  `order_phone` int(20) NOT NULL,
  `order_address` varchar(255) NOT NULL,
  `order_city` varchar(255) NOT NULL,
  `order_postalCode` int(5) NOT NULL,
  `order_province` varchar(255) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `orders`
--

INSERT INTO `orders` (`order_id`, `order_date`, `order_shippingMethod`, `order_price`, `order_status`, `order_name`, `order_surname`, `order_email`, `order_phone`, `order_address`, `order_city`, `order_postalCode`, `order_province`, `user_id`) VALUES
(4, '2023-06-01', 'Tarjeta de crédito', '208.10', 'Confirmado', 'Francisco Jesús', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(5, '2023-06-01', 'Tarjeta de crédito', '208.10', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(6, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco_Jesús', 'Marfil_Vargas', 'elou@hotmailsinoekisd.es', 606649234, 'Calle del Mar, 234', 'La Línea de la Concepción', 11300, 'Cádiz', 49),
(7, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco_Jesús', 'Marfil_Vargas', 'elou@hotmailsinoekisd.es', 606649234, 'Calle del Mar, 234', 'La Línea de la Concepción', 11300, 'Cádiz', 49),
(8, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco_Jesús', 'Marfil_Vargas', 'elou@hotmailsinoekisd.es', 606649234, 'Calle del Mar, 234', 'La Línea de la Concepción', 11300, 'Cádiz', 49),
(9, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco_Jesús', 'Marfil_Vargas', 'elou@hotmailsinoekisd.es', 606649234, 'Calle del Mar, 234', 'La Línea de la Concepción', 11300, 'Cádiz', 49),
(10, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco_Jesús', 'Marfil_Vargas', 'elou@hotmail.es', 606649234, 'Calle del Mar, 234', 'La Línea de la Concepción', 11300, 'Cádiz', 53),
(11, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(12, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(13, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(14, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(15, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(16, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(17, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(18, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(19, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(20, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(21, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(22, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(23, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(24, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(25, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(26, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(27, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(28, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Usuario randomASASAS', 'olakaseASASA', 'user@random.com', 606655884, 'calle A, 5', 'la sity', 11350, 'cadiiiz', 1),
(29, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(30, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(31, '2023-06-01', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(32, '2023-06-01', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(33, '2023-06-01', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(34, '2023-06-01', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(35, '2023-06-01', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(36, '2023-06-01', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(37, '2023-06-01', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(38, '2023-06-01', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(39, '2023-06-01', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(40, '2023-06-01', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(41, '2023-06-01', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(42, '2023-06-01', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(43, '2023-06-01', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(44, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(45, '2023-06-01', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(46, '2023-06-01', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(47, '2023-06-01', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(48, '2023-06-01', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(49, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(50, '2023-06-01', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(51, '2023-06-01', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(52, '2023-06-01', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(53, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(54, '2023-06-01', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(55, '2023-06-01', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(56, '2023-06-01', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(57, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(58, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(59, '2023-06-01', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(60, '2023-06-01', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(61, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(62, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(63, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(64, '2023-06-01', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(65, '2023-06-01', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(66, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(67, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(68, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(69, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(70, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(71, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(72, '2023-06-01', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(73, '2023-06-01', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(74, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(75, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(76, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(77, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(78, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(79, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(80, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(81, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(82, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(83, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(84, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(85, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(86, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(87, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(88, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(89, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(90, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(91, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(92, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(93, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(94, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(95, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(96, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(97, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(98, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(99, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(100, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(101, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(102, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(103, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(104, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(105, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(106, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(107, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(108, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(109, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(110, '2023-06-01', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(111, '2023-06-01', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(112, '2023-06-01', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(113, '2023-06-01', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(114, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(115, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(116, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(117, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(118, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(119, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(120, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(121, '2023-06-01', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(122, '2023-06-02', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(123, '2023-06-02', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(124, '2023-06-02', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(125, '2023-06-02', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(126, '2023-06-02', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(127, '2023-06-02', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(128, '2023-06-02', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(129, '2023-06-02', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(130, '2023-06-02', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(131, '2023-06-02', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(132, '2023-06-02', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(133, '2023-06-02', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(134, '2023-06-02', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(135, '2023-06-02', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(136, '2023-06-02', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(137, '2023-06-02', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(138, '2023-06-02', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(139, '2023-06-02', 'Tarjeta de crédito', '0.00', 'Confirmado', '', '', '', 0, '', '', 0, '', 74),
(140, '2023-06-02', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(141, '2023-06-02', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(142, '2023-06-02', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(143, '2023-06-02', 'Tarjeta de crédito', '57.15', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(144, '2023-06-02', 'Tarjeta de crédito', '196.10', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(145, '2023-06-02', 'Tarjeta de crédito', '96.50', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(146, '2023-06-02', 'Tarjeta de crédito', '85.75', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(147, '2023-06-02', 'Tarjeta de crédito', '105.97', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(148, '2023-06-02', 'Tarjeta de crédito', '127.25', 'Confirmado', 'Usuario randomASASAS', 'olakaseASASA', 'user@random.com', 606655884, 'calle A, 5', 'la sity', 11350, 'cadiiiz', 1),
(149, '2023-06-02', 'Tarjeta de crédito', '21.00', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(150, '2023-06-02', 'Tarjeta de crédito', '16.25', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(151, '2023-06-02', 'Tarjeta de crédito', '64.70', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(152, '2023-06-02', 'Tarjeta de crédito', '96.50', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(153, '2023-06-02', 'Tarjeta de crédito', '11.95', 'Confirmado', 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz', 2),
(154, '2023-06-02', 'Tarjeta de crédito', '150.30', 'Confirmado', 'Usuario randomASASAS', 'olakaseASASA', 'user@random.com', 606655884, 'calle A, 5', 'la sity', 11350, 'cadiiiz', 1);

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
  `user_surname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phone` int(20) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_city` varchar(255) NOT NULL,
  `user_postalCode` int(5) NOT NULL,
  `user_province` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_surname`, `user_email`, `user_phone`, `user_address`, `user_city`, `user_postalCode`, `user_province`) VALUES
(1, 'Usuario randomASASAS', 'olakaseASASA', 'user@random.com', 606655884, 'calle A, 5', 'la sity', 11350, 'cadiiiz'),
(2, 'Francisco Jesúsas', 'Marfil Vargas', 'franciski_98@hotmail.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz'),
(6, 'FranASAS', 'Marfilas', 'Franciski_98@hotmail.comas', 606649552, 'Calle del Mar, 521212131', 'La Línea de la Concepción', 11300, 'Cádiz'),
(15, 'FranNNNNNNNNNNNNNNN', 'MarfilASFASF', 'franciski_98@hotmail.com23w', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz'),
(16, 'FranNNNNNNNNNNNNNNN', 'MarfilASFASF', 'Hola@prueba.com', 606649552, 'Calle del Mar, 5', 'La Línea de la Concepción', 11300, 'Cádiz'),
(49, 'Francisco_Jesús', 'Marfil_Vargas', 'elou@hotmailsinoekisd.es', 606649234, 'Calle del Mar, 234', 'La Línea de la Concepción', 11300, 'Cádiz'),
(53, 'Francisco_Jesús', 'Marfil_Vargas', 'elou@hotmail.es', 606649234, 'Calle del Mar, 234', 'La Línea de la Concepción', 11300, 'Cádiz'),
(74, '', '', '', 0, '', '', 0, '');

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
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
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
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

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
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT de la tabla `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisher_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;

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
  ADD CONSTRAINT `contain-order_id` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);

--
-- Filtros para la tabla `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `order-user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
