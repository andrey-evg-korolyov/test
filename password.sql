-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Ноя 17 2023 г., 10:19
-- Версия сервера: 8.0.35-0ubuntu0.22.04.1
-- Версия PHP: 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `password`
--

CREATE TABLE `password` (
  `id` int NOT NULL,
  `login` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `folder` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `password`
--

INSERT INTO `password` (`id`, `login`, `password`, `folder`) VALUES
(1, 'alic', '0000', 'user'),
(2, 'nice', '1111', 'admin'),
(3, 'xdebug', 'xxxx1111', 'admin'),
(4, 'foxnews', '5555news', 'user'),
(5, 'oxxda', '9999zzzz', 'admin'),
(6, '', '', ''),
(7, '1', '11', '111'),
(8, '', 'hggf', ''),
(9, 'qwerer', 'ghjgfh', ''),
(10, 'asdddf', 'sdsfdd', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `password`
--
ALTER TABLE `password`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `password`
--
ALTER TABLE `password`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
