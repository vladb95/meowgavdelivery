
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июл 15 2015 г., 11:54
-- Версия сервера: 10.0.11-MariaDB
-- Версия PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `u522145326_meow`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Delivery_method`
--

CREATE TABLE IF NOT EXISTS `Delivery_method` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `method` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `Delivery_method`
--

INSERT INTO `Delivery_method` (`id`, `method`) VALUES
(1, 'Курьером'),
(2, 'Новой Почтой'),
(3, 'Укрпоштой');

-- --------------------------------------------------------

--
-- Структура таблицы `Manufactures`
--

CREATE TABLE IF NOT EXISTS `Manufactures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `country` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `Manufactures`
--

INSERT INTO `Manufactures` (`id`, `name`, `country`) VALUES
(1, 'Whiskas', 'Украина'),
(2, 'Kitekat', 'Украина');

-- --------------------------------------------------------

--
-- Структура таблицы `Orders`
--

CREATE TABLE IF NOT EXISTS `Orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clisent_name` varchar(50) NOT NULL,
  `client_email` varchar(50) DEFAULT NULL,
  `client_phone` varchar(15) DEFAULT NULL,
  `client_adress` varchar(100) DEFAULT NULL,
  `delivery_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`),
  KEY `delivery_id` (`delivery_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `Pets_age`
--

CREATE TABLE IF NOT EXISTS `Pets_age` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `age_name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `Pets_age`
--

INSERT INTO `Pets_age` (`id`, `age_name`) VALUES
(1, 'Малыши'),
(2, 'Беременные'),
(3, 'Взрослые'),
(4, 'Старые');

-- --------------------------------------------------------

--
-- Структура таблицы `Pets_type`
--

CREATE TABLE IF NOT EXISTS `Pets_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `Pets_type`
--

INSERT INTO `Pets_type` (`id`, `type_name`) VALUES
(1, 'Большие'),
(2, 'Маленькие'),
(3, 'Средние');

-- --------------------------------------------------------

--
-- Структура таблицы `Product`
--

CREATE TABLE IF NOT EXISTS `Product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) NOT NULL COMMENT 'Название',
  `product_type_id` int(11) DEFAULT NULL COMMENT 'Тип продукта',
  `manufact_id` int(11) DEFAULT NULL COMMENT 'Ссылка на производителя',
  `pet_type_id` int(11) DEFAULT NULL COMMENT 'Вид животного',
  `pet_age_id` int(11) DEFAULT NULL COMMENT 'Тип возраста',
  `price` int(11) DEFAULT NULL COMMENT 'Цена',
  `product_count` int(11) DEFAULT NULL COMMENT 'Количество на складе',
  `comment_text` text COMMENT 'Описание',
  PRIMARY KEY (`id`),
  KEY `product_type_id` (`product_type_id`),
  KEY `manufact_id` (`manufact_id`),
  KEY `pet_type_id` (`pet_type_id`),
  KEY `pet_age_id` (`pet_age_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `Product`
--

INSERT INTO `Product` (`id`, `product_name`, `product_type_id`, `manufact_id`, `pet_type_id`, `pet_age_id`, `price`, `product_count`, `comment_text`) VALUES
(1, 'Сухой корм "Три Корочки"', 1, 1, 1, 1, 120, 100, 'Lorem ipsum dolor sit amet');

-- --------------------------------------------------------

--
-- Структура таблицы `Product_type`
--

CREATE TABLE IF NOT EXISTS `Product_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `Product_type`
--

INSERT INTO `Product_type` (`id`, `name`) VALUES
(1, 'Корма'),
(2, 'Консервы'),
(3, 'Аксессуары');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
