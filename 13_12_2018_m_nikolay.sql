-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Мар 21 2019 г., 10:57
-- Версия сервера: 10.1.38-MariaDB
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `13_12_2018_m_nikolay`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL COMMENT 'id Пользователя',
  `excursion_name` varchar(30) NOT NULL COMMENT 'Название экскурсии',
  `quantity` varchar(30) NOT NULL COMMENT 'Количество человек',
  `user_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Форма выбора экскурсии';

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `excursion_name`, `quantity`, `user_id`) VALUES
(0, 'Организация мероприятий', '1-5', ''),
(0, 'Квест по центру Петербурга', '5-10', ''),
(0, 'Захватывающие крыши Санкт-Пете', '5-10', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'id Пользователя',
  `name` varchar(50) NOT NULL COMMENT 'Имя Пользователя',
  `email` varchar(30) NOT NULL COMMENT 'Email Пользователя',
  `tel` varchar(20) NOT NULL COMMENT 'Телефон Пользователя'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Пользователи';

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `tel`) VALUES
(1, 'Мумятов Николай', 'nikolay@gmail.com', '89076453838'),
(2, 'Иванов Кирилл', 'kirill@mail.ru', '89763450909'),
(3, 'Якушкина Фрося ', 'frosya@yandex.ru', '89166666666'),
(4, 'Васильев Петр', 'petya@mail.ru', '89765463939');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id Пользователя', AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
