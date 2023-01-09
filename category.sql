-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Гру 30 2022 р., 20:24
-- Версія сервера: 5.6.51
-- Версія PHP: 8.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `examphp`
--

-- --------------------------------------------------------

--
-- Структура таблиці `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `name` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `category`
--

INSERT INTO `category` (`id`, `name`, `image`, `description`) VALUES
(1, 'одежа1111', 'https://picsum.photos/400/300?random=20', 'Lorem ipsum dolor sit'),
(2, 'техніка', 'https://picsum.photos/200/300?random=2', 'Lorem ipsum dolor sit amet.'),
(3, 'телефон', 'https://picsum.photos/200/300?random=3', 'Lorem ipsum dolor sit amet.'),
(4, 'Em ipsum.', 'https://picsum.photos/200/300?random=4', 'Lorem ipsum dolor sit amet.'),
(5, 'Lorem ipsum.', 'https://picsum.photos/400/300?random=5', 'Lorem ipsum dolor sit amet.'),
(7, 'Lorem ipsum.', 'https://picsum.photos/400/300?random=6', 'Lorem ipsum dolor sit amet.'),
(8, 'Lorem', 'https://picsum.photos/400/300?random=7', 'Lorem ipsum lorem'),
(9, 'Lor', 'https://picsum.photos/200/300?random=9', 'Lorem ipsum dolor.'),
(11, 'lorem', './images/2.jpg', 'lorem'),
(12, 'test', 'https://picsum.photos/400/300?random=12', 'testtest'),
(13, 'Lorem ipsum.', './images/code.jpg', 'Lorem ipsum dolor sit.'),
(14, 'new', './images/newCard.jpg', 'card'),
(15, 'Lorem00', './images/google.jpg', 'Lorem ipsum dolor33');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
