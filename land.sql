-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июн 18 2017 г., 10:23
-- Версия сервера: 5.7.17
-- Версия PHP: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `land`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blocks`
--

CREATE TABLE `blocks` (
  `id` int(11) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `url` text,
  `image` text,
  `glyph` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `blocks`
--

INSERT INTO `blocks` (`id`, `slug`, `title`, `body`, `url`, `image`, `glyph`, `created`, `modified`) VALUES
(1, 'Pokemons', 'Pokemons', 'My body is rotten flesh.', '', 'http://media.istockphoto.com/vectors/black-and-white-seamless-pattern-with-funny-monsters-vector-id497545639', '', '2017-06-05 03:08:25', '2017-06-08 23:38:58'),
(2, 'Wallpapers', 'Wallpapers', 'Haha, no body here.', '', 'http://img0.liveinternet.ru/images/attach/c/0/32/183/32183104_476090.gif', '', '2017-06-06 02:43:05', '2017-06-08 23:31:23'),
(3, 'News', 'News', 'Is it legal to leave comments like that?', 'medusa.io', 'http://uconstructor.com/_ld/10/54942870.jpg', '', '2017-06-08 23:30:36', '2017-06-08 23:30:36');

-- --------------------------------------------------------

--
-- Структура таблицы `entries`
--

CREATE TABLE `entries` (
  `id` int(11) NOT NULL,
  `block_id` int(11) NOT NULL,
  `position` int(11) NOT NULL DEFAULT '1',
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `url` text,
  `image` text,
  `glyph` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `entries`
--

INSERT INTO `entries` (`id`, `block_id`, `position`, `title`, `body`, `url`, `image`, `glyph`, `created`, `modified`) VALUES
(1, 1, 1, 'SlowPoke', 'Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow Too slow ...\r\nWhat?', 'http://i2.kym-cdn.com/entries/icons/facebook/000/000/128/slowpoke_pokemon.jpg', 'http://i2.kym-cdn.com/entries/icons/facebook/000/000/128/slowpoke_pokemon.jpg', '', '2017-06-05 03:09:35', '2017-06-11 04:21:24'),
(2, 1, 1, 'PikaChuunibyou', 'Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika Pika-pika ', 'http://vignette4.wikia.nocookie.net/pokemon/images/5/5f/025Pikachu_OS_anime_11.png/revision/latest?cb=20150717063951', 'http://vignette4.wikia.nocookie.net/pokemon/images/5/5f/025Pikachu_OS_anime_11.png/revision/latest?cb=20150717063951', '', '2017-06-05 03:10:39', '2017-06-11 04:21:38'),
(3, 2, 1, 'Butterfly', '', 'https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-301332.jpg', 'https://alpha.wallhaven.cc/wallpapers/thumb/small/th-301332.jpg', '', '2017-06-06 02:44:44', '2017-06-06 02:44:44'),
(4, 2, 0, 'Landscape', '', 'https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-201942.jpg', 'https://alpha.wallhaven.cc/wallpapers/thumb/small/th-201942.jpg', '', '2017-06-06 02:46:14', '2017-06-17 07:28:35'),
(5, 3, 1, 'WAAAAAAAAR!', 'Des eez de vooo', 'https://meduza.io/feature/2017/06/08/aktivisty-vospolzovalis-uyazvimostyu-v-rabote-roskomnadzora-i-teper-blokiruyut-chuzhie-sayty-kak-eto-ustroeno', 'https://meduza.io/image/attachments/images/002/196/952/large/riEpJOfH_wNV7bdvz6prAw.jpg', '', '2017-06-08 23:45:46', '2017-06-08 23:46:00'),
(6, 1, 1, 'Charizard', 'Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard Zaaaard', 'https://cdn.bulbagarden.net/upload/thumb/7/7e/006Charizard.png/250px-006Charizard.png', 'https://cdn.bulbagarden.net/upload/thumb/7/7e/006Charizard.png/250px-006Charizard.png', '', '2017-06-11 03:10:59', '2017-06-11 04:21:51');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blocks`
--
ALTER TABLE `blocks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Индексы таблицы `entries`
--
ALTER TABLE `entries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `block_key` (`block_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blocks`
--
ALTER TABLE `blocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `entries`
--
ALTER TABLE `entries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `entries`
--
ALTER TABLE `entries`
  ADD CONSTRAINT `entries_ibfk_1` FOREIGN KEY (`block_id`) REFERENCES `blocks` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
