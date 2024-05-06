-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Сен 09 2016 г., 13:53
-- Версия сервера: 5.6.28-76.1-log
-- Версия PHP: 5.6.18-pl0-gentoo

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ipzaj_koma`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bron`
--

CREATE TABLE `bron` (
  `id` int(11) NOT NULL,
  `name_room` text NOT NULL,
  `seans_1` varchar(255) NOT NULL,
  `seans_2` varchar(255) NOT NULL,
  `seans_3` varchar(255) NOT NULL,
  `seans_4` varchar(255) NOT NULL,
  `seans_5` varchar(255) NOT NULL,
  `seans_6` varchar(255) NOT NULL,
  `seans_7` varchar(255) NOT NULL,
  `seans_8` varchar(255) NOT NULL,
  `seans_9` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `bron_time`
--

CREATE TABLE `bron_time` (
  `id` int(255) NOT NULL,
  `id_room` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `seans_1` int(11) NOT NULL DEFAULT '0',
  `seans_2` int(11) NOT NULL DEFAULT '0',
  `seans_3` int(11) NOT NULL DEFAULT '0',
  `seans_4` int(11) NOT NULL DEFAULT '0',
  `seans_5` int(11) NOT NULL DEFAULT '0',
  `seans_6` int(11) NOT NULL DEFAULT '0',
  `seans_7` int(11) NOT NULL DEFAULT '0',
  `seans_8` int(11) NOT NULL DEFAULT '0',
  `seans_9` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bron`
--
ALTER TABLE `bron`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `bron_time`
--
ALTER TABLE `bron_time`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `bron`
--
ALTER TABLE `bron`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT для таблицы `bron_time`
--
ALTER TABLE `bron_time`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
