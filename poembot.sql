-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Сен 17 2021 г., 14:26
-- Версия сервера: 8.0.26-0ubuntu0.20.04.2
-- Версия PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `poembot`
--

-- --------------------------------------------------------

--
-- Структура таблицы `poems`
--

CREATE TABLE `poems` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(255) NOT NULL,
  `theme_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `poems`
--

INSERT INTO `poems` (`id`, `title`, `text`, `image`, `theme_id`) VALUES
(1, 'Травка зеленеет, солнышко блестит', 'Травка зеленеет,<br>\r\nСолнышко блестит;<br>\r\nЛасточка с весною<br>\r\nВ сени к нам летит.<br>\r\nС нею солнце краше<br>\r\nИ весна милей…<br>\r\nПрощебечь с дороги<br>\r\nНам привет скорей!<br>\r\nДам тебе я зерен,<br>\r\nА ты песню спой,<br>\r\nЧто из стран далеких<br>\r\nПринесла с собой…<br>', 'https://cdn.pnp.ru/upload/entities/2018/02/20/article/detailPicture/83/81/99/0a/071bf60962228836a6757d938fec08c3.jpg', 1),
(2, 'Бородино', '— Скажи-ка, дядя, ведь не даром<br>\r\nМосква, спаленная пожаром,<br>\r\nФранцузу отдана?<br>\r\nВедь были ж схватки боевые,<br>\r\nДа, говорят, еще какие!<br>\r\nНедаром помнит вся Россия<br>\r\nПро день Бородина!<br>', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLOXzqFMAQYZ4Iclanud_lff-N80VnhHd3jg&usqp=CAU', 2),
(5, 'Так оно и есть…', 'Так оно и есть —<br>\r\nСловно встарь, словно встарь:<br>\r\nЕсли шел вразрез —<br>\r\nНа фонарь, на фонарь,<br>\r\nЕсли воровал —<br>\r\nЗначит, сел, значит, сел,<br>\r\nЕсли много знал —<br>\r\nПод расстрел, под расстрел!<br>', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmx2cqqVen3wdDxKPdPsNg7OTlBsoiPYfKKw&usqp=CAU', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `themes`
--

CREATE TABLE `themes` (
  `ID` int NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `themes`
--

INSERT INTO `themes` (`ID`, `title`) VALUES
(1, 'Веселое'),
(2, 'Грустное'),
(5, 'Загалочное');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `poems`
--
ALTER TABLE `poems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `theme_id` (`theme_id`);

--
-- Индексы таблицы `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `poems`
--
ALTER TABLE `poems`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `themes`
--
ALTER TABLE `themes`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `poems`
--
ALTER TABLE `poems`
  ADD CONSTRAINT `poems_ibfk_1` FOREIGN KEY (`theme_id`) REFERENCES `themes` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
