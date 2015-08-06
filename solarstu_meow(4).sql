-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Авг 04 2015 г., 15:44
-- Версия сервера: 5.5.42-cll
-- Версия PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `solarstu_meow`
--

-- --------------------------------------------------------

--
-- Структура таблицы `acrm_menu`
--

CREATE TABLE IF NOT EXISTS `acrm_menu` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `portion` text NOT NULL,
  `descr` varchar(100) NOT NULL,
  `cat` varchar(10) NOT NULL,
  `src` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Дамп данных таблицы `acrm_menu`
--

INSERT INTO `acrm_menu` (`id`, `name`, `price`, `portion`, `descr`, `cat`, `src`) VALUES
(13, 'Салат 66222', 212, '150/100', 'Блюдо вкусное.', 'Второе', 'logo.png'),
(12, 'Салат 5', 18, '150/100', 'Блюдо, но не очень.', 'Салаты', 'logo.png'),
(11, 'Салат 4', 17, '150/100', 'Блюдо не очень.', 'Салаты', 'logo.png'),
(3, 'Салат 3', 12.5, '150/100', 'Блюдо не вкусное.', 'Салаты', 'logo.png'),
(2, 'Салат 2', 11, '150/100', 'Блюдо вкусное, но не очень.', 'Салаты', 'logo.png'),
(1, 'Салат 1', 15, '150/100', 'Не очень вкусное блюдо.', 'Салаты', 'logo.png');

-- --------------------------------------------------------

--
-- Структура таблицы `acrm_orders`
--

CREATE TABLE IF NOT EXISTS `acrm_orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_str` text NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `client_email` varchar(50) DEFAULT NULL,
  `client_phone` varchar(15) DEFAULT NULL,
  `client_adress` varchar(100) DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT '3',
  `comment` text,
  PRIMARY KEY (`id`),
  KEY `status_id` (`status_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Дамп данных таблицы `acrm_orders`
--

INSERT INTO `acrm_orders` (`id`, `order_str`, `client_name`, `client_email`, `client_phone`, `client_adress`, `date`, `time`, `status_id`, `comment`) VALUES
(14, '1x11', 'Ян', 'yankolovorotny@gmail.com', '0635246625', 'IT', '2015-06-09', '08:00:00', 3, NULL),
(15, '1x3', 'Ян1', 'yankolovorotny@gmail.com', '0635246625', 'IT', '2015-06-21', '11:30:00', 3, NULL),
(9, '1x11;1x13', 'Янss', 'yankolovorotny@gmail.com', '0635246625', 'Одесса', '2015-07-31', '09:14:12', 3, NULL),
(10, '1x12;1x13', 'Янss2', 'yankolovorotny@gmail.com', '0635246625', 'Одесса', '2015-07-30', '18:02:37', 3, NULL),
(12, '1x12', 'Янggg', 'yankolovorotny@gmail.com', '0635246625', 'IT', '2015-07-27', '17:20:32', 3, NULL),
(8, '1x1;1x13', 'Янss', 'yankolovorotny@gmail.com', '0635246625', 'Одесса', '2015-07-30', '13:22:37', 3, NULL),
(18, '1x1;1x3', 'Ян3', 'yankolovorotny@gmail.com', '0635246625', 'IT', '2015-07-28', '08:00:00', 3, NULL),
(17, '1x2', 'Ян2', 'yankolovorotny@gmail.com', '0635246625', 'IT', '2015-07-28', '08:00:00', 3, NULL),
(19, '1x3', 'Ян3', 'yankolovorotny@gmail.com', '0635246625', 'IT', '2015-07-29', '12:00:00', 3, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `acrm_Product_type`
--

CREATE TABLE IF NOT EXISTS `acrm_Product_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `acrm_Product_type`
--

INSERT INTO `acrm_Product_type` (`id`, `name`) VALUES
(1, 'Корма'),
(2, 'Консервы'),
(3, 'Аксессуары');

-- --------------------------------------------------------

--
-- Структура таблицы `acrm_schedule`
--

CREATE TABLE IF NOT EXISTS `acrm_schedule` (
  `weekdate_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  UNIQUE KEY `weekdate_id` (`weekdate_id`,`menu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `acrm_schedule`
--

INSERT INTO `acrm_schedule` (`weekdate_id`, `menu_id`) VALUES
(9, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `acrm_status`
--

CREATE TABLE IF NOT EXISTS `acrm_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `val` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `acrm_status`
--

INSERT INTO `acrm_status` (`id`, `val`) VALUES
(1, 'Выполнен'),
(2, 'В обработке'),
(3, 'Новый');

-- --------------------------------------------------------

--
-- Структура таблицы `acrm_user`
--

CREATE TABLE IF NOT EXISTS `acrm_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(16) NOT NULL,
  `pass` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `acrm_user`
--

INSERT INTO `acrm_user` (`id`, `login`, `pass`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Структура таблицы `acrm_weekdate`
--

CREATE TABLE IF NOT EXISTS `acrm_weekdate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `weekday_id` int(11) NOT NULL,
  `visible` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `date` (`date`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `acrm_weekdate`
--

INSERT INTO `acrm_weekdate` (`id`, `date`, `weekday_id`, `visible`) VALUES
(9, '2015-08-18', 2, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `acrm_weekday`
--

CREATE TABLE IF NOT EXISTS `acrm_weekday` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `acrm_weekday`
--

INSERT INTO `acrm_weekday` (`id`, `name`) VALUES
(1, 'Понедельник'),
(2, 'Вторник'),
(3, 'Среда'),
(4, 'Четверг'),
(5, 'Пятница');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `Manufactures`
--

INSERT INTO `Manufactures` (`id`, `name`, `country`) VALUES
(1, 'Whiskas', 'Украина'),
(2, 'Kitekat', 'Украина'),
(5, 'Семерка', 'Мухосранск'),
(8, 'Просто Жека:)', 'Украина');

-- --------------------------------------------------------

--
-- Структура таблицы `Orders`
--

CREATE TABLE IF NOT EXISTS `Orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_str` text NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `client_email` varchar(50) DEFAULT NULL,
  `client_phone` varchar(15) DEFAULT NULL,
  `client_adress` varchar(100) DEFAULT NULL,
  `delivery_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT '3',
  `comment` text,
  PRIMARY KEY (`id`),
  KEY `delivery_id` (`delivery_id`),
  KEY `status_id` (`status_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `Orders`
--

INSERT INTO `Orders` (`id`, `order_str`, `client_name`, `client_email`, `client_phone`, `client_adress`, `delivery_id`, `date`, `time`, `status_id`, `comment`) VALUES
(7, '1x2;2x3;1x4;1x12', 'JJ', 'pro', '06321457', 'Odessa', 1, '2015-07-27', '21:22:35', 1, '');

-- --------------------------------------------------------

--
-- Структура таблицы `order_tab`
--

CREATE TABLE IF NOT EXISTS `order_tab` (
  `orders_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  KEY `orders_id` (`orders_id`),
  KEY `product_id` (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
(3, 'Взрослые'),
(4, 'Пожилые');

-- --------------------------------------------------------

--
-- Структура таблицы `Pets_size`
--

CREATE TABLE IF NOT EXISTS `Pets_size` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `val` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `Pets_size`
--

INSERT INTO `Pets_size` (`id`, `val`) VALUES
(1, 'Большие'),
(2, 'Средние'),
(3, 'Маленькие');

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
(1, 'Собаки'),
(2, 'Кошки');

-- --------------------------------------------------------

--
-- Структура таблицы `Product`
--

CREATE TABLE IF NOT EXISTS `Product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT 'Название',
  `product_type_id` int(11) DEFAULT NULL COMMENT 'Тип продукта',
  `manufact_id` int(11) DEFAULT NULL COMMENT 'Ссылка на производителя',
  `pet_type_id` int(11) DEFAULT NULL COMMENT 'Вид животного',
  `pet_age_id` int(11) DEFAULT NULL COMMENT 'Тип возраста',
  `price` int(11) DEFAULT NULL COMMENT 'Цена',
  `product_count` int(11) DEFAULT NULL COMMENT 'Количество на складе',
  `comment_text` text CHARACTER SET utf8 COMMENT 'Описание',
  `src` varchar(100) CHARACTER SET utf8 NOT NULL,
  `pet_size_id` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_type_id` (`product_type_id`),
  KEY `manufact_id` (`manufact_id`),
  KEY `pet_type_id` (`pet_type_id`),
  KEY `pet_age_id` (`pet_age_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=41 ;

--
-- Дамп данных таблицы `Product`
--

INSERT INTO `Product` (`id`, `product_name`, `product_type_id`, `manufact_id`, `pet_type_id`, `pet_age_id`, `price`, `product_count`, `comment_text`, `src`, `pet_size_id`) VALUES
(39, 'Pro Plan Little Cat', 1, 1, 2, 1, 10000, NULL, 'Описание\r\nСухой корм для кошек МиС КиС «Ягненок с карпатскими травами» — это полноценный сбалансированный корм для кошек, которые живут в закрытом помещении. Такие животные лишены возможности получать необходимые им элементы, встречающиеся в природе.  Сухой корм для кошек обеспечит всеми необходимыми элементами для поддержки хорошего здоровья, благодаря содержанию в нем карпатских трав.\r\n \r\nКакие карпатские травы содержит корм?\r\n \r\nКрапива — это растение оказывает общеукрепляющее и очищающее действие, способствует выведению из организма токсинов. В нем содержатся витамины С, К, В. Крапива особенно полезна кошкам, страдающим болезнями почек, печении и желчных путей.\r\n \r\nЭхинацея — трава, обладающая противовирусными, антибактериальными и иммуностимулирующими свойствами. Предотвращает развитие у кошек болезней кожи. Способствует хорошую работу печени и почек животного, благотворно влияет на лимфатическую и кровеносную систему.\r\n \r\nЦикорий — растение, оказывающее противомикробное действие. Употребление цикория улучшает аппетит, способствует лучшему пищеварению, положительно влияет на работу сердечной мышцы кошки. Благодаря содержащимся в нем витаминам группы В, С, а также каротину, цикорий выступает общеукрепляющим средством.', 'HD.at.ua-Pic-1-23.jpg', 1),
(2, 'Сухой корм "Две Корочки"', 1, 1, 1, 1, 1300, 100, 'Lorem ipsum dolor sit amet2', '16wxRS7wrew.jpg', 2),
(3, 'Сухой корм "Одна Корочка"', 1, 1, 1, 1, 140, 100, 'Lorem ipsum dolor sit amet3', 'logo.png', 3),
(4, 'Сухой корм "Не две Корочки"', 1, 1, 1, 1, 100, 100, 'Lorem ipsum dolor sit amet4', 'logo.png', 2),
(5, 'Сухой корм "Не три Корочки"', 1, 1, 1, 1, 150, 150, 'Lorem ipsum dolor sit amet5', 'logo.png', 1),
(6, 'Сухой корм "Много Корочек"', 1, 1, 1, 1, 110, 100, 'Lorem ipsum dolor sit amet6', 'logo.png', 1),
(7, 'Сухой корм "Три Корочки1"', 1, 8, 1, 1, 120, 100, 'Lorem ipsum dolor sit amet', '', 1),
(8, 'Сухой корм "Три Корочки"', 1, 1, 1, 1, 120, 100, 'Lorem ipsum dolor sit amet', 'logo.png', 1),
(9, 'Сухой корм "Три Корочки"', 1, 1, 1, 1, 120, 100, 'Lorem ipsum dolor sit amet', 'logo.png', 1),
(10, 'Сухой корм "Три Корочки"', 1, 1, 1, 1, 120, 100, 'Lorem ipsum dolor sit amet', 'logo.png', 1),
(11, 'Сухой корм "Три Корочки"', 1, 1, 1, 1, 120, 100, 'Lorem ipsum dolor sit amet', 'logo.png', 1),
(12, 'Сухой корм "Три Корочки"', 1, 1, 1, 1, 120, 100, 'Lorem ipsum dolor sit amet', 'logo.png', 1),
(37, 'cxfbg', 1, 1, 1, 1, 10, NULL, 'prooooooooooooooooooooooooooooooooo', 'HD.at.ua-Pic-1-23.jpg', 1),
(14, 'Сухой корм "Три Корочки"', 1, 1, 1, 1, 120, 100, 'Lorem ipsum dolor sit amet', 'logo.png', 1),
(26, 'Сухой корм "Три Корочки"', 1, 1, 1, 1, 120, 100, 'Lorem ipsum dolor sit amet', 'logo.png', 1),
(25, 'Сухой корм "Три Корочки"', 1, 1, 1, 1, 120, 100, 'Lorem ipsum dolor sit amet', 'logo.png', 1),
(24, 'Сухой корм "Три Корочки"', 1, 1, 1, 1, 120, 100, 'Lorem ipsum dolor sit amet', 'logo.png', 1),
(23, 'Сухой корм "Три Корочки"', 1, 1, 1, 1, 120, 100, 'Lorem ipsum dolor sit amet', 'logo.png', 1),
(22, 'Сухой корм "Три Корочки"', 1, 1, 1, 1, 120, 100, 'Lorem ipsum dolor sit amet', 'logo.png', 1),
(21, 'Сухой корм "Три Корочки"', 1, 1, 1, 1, 120, 100, 'Lorem ipsum dolor sit amet', 'logo.png', 1),
(20, 'Сухой корм "Три Корочки"', 1, 1, 1, 1, 120, 100, 'Lorem ipsum dolor sit amet', 'logo.png', 1),
(19, 'Сухой корм "Три Корочки"', 1, 1, 1, 1, 120, 100, 'Lorem ipsum dolor sit amet', 'logo.png', 1),
(18, 'Сухой корм "Три Корочки"', 1, 1, 1, 1, 120, 100, 'Lorem ipsum dolor sit amet', 'logo.png', 1),
(17, 'Сухой корм "Три Корочки"', 1, 1, 1, 1, 120, 100, 'Lorem ipsum dolor sit amet', 'logo.png', 1),
(16, 'Сухой корм "Три Корочки"', 1, 1, 1, 1, 120, 100, 'Lorem ipsum dolor sit amet', 'logo.png', 1),
(28, 'Сухой корм "Три Корочки"', 1, 1, 1, 1, 120, 100, 'Lorem ipsum dolor sit amet', 'logo.png', 1),
(29, 'Сухой корм "Три Корочки"', 1, 1, 1, 1, 120, 100, 'Lorem ipsum dolor sit amet', 'logo.png', 1),
(40, 'аксессуар', 3, 1, 1, 1, 733, NULL, 'многооооооооооооооооооооооооооооооооооооооооооооооооооооооооооооооооооооооооооооооооооооооооооооооооо', 'logo.png', 1);

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

-- --------------------------------------------------------

--
-- Структура таблицы `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Дамп данных таблицы `slider`
--

INSERT INTO `slider` (`id`, `url`) VALUES
(18, 'bozita-trockenfutter.jpg'),
(20, 'Inside-Out-Series-Web-Banner-1920x799.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `val` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `status`
--

INSERT INTO `status` (`id`, `val`) VALUES
(1, 'Выполнен'),
(2, 'В обработке'),
(3, 'Новый');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(16) NOT NULL,
  `pass` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `pass`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
