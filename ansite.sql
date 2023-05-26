-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 26 2023 г., 22:17
-- Версия сервера: 8.0.30
-- Версия PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ansite`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cards`
--

CREATE TABLE `cards` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `shortdescription` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `cards`
--

INSERT INTO `cards` (`id`, `name`, `shortdescription`, `description`, `image`) VALUES
(11, 'Автоматизация тестирования', 'Разработка автоматических тестовых сценариев', 'Какой-то текст', '/images/pic03.jpg'),
(12, 'Web-разработка интерфейсов', 'Создание пользовательских интерфейсов для web-приложений', 'Какой-то текст', '/images/pic04.jpg'),
(13, 'Разработка приложений', 'Кроссплатформенные мобильные приложения на базе React Native', 'Какой-то текст', '/images/pic05.jpg'),
(47, 'Оптимизация производительности', 'Оптимизация производительности серверов и приложений', 'Какой-то текст', '/images/pic06.jpg'),
(49, 'Разработка GraphQL API', 'Создание гибкого и масштабируемого GraphQL API', '<div style=\"text-align: justify;\"><font style=\"\" color=\"#000000\" face=\"open sans\" size=\"4\"><span style=\"\" open=\"\" sans\";\"=\"\">В настоящее время создание гибких и масштабируемых GraphQL API является одной из самых востребованных задач в области разработки программного обеспечения. Однако, для достижения этой цели требуется иметь хорошее понимание функционала, используемых технологий разработки, а также этапов проектирования и реализации.\r\n\r\nGraphQL - это язык запросов, который позволяет клиентам запрашивать только необходимые данные с сервера. В результате, снижается нагрузка на сервер и улучшается производительность системы. GraphQL API предоставляет возможность использовать этот язык запросов для доступа к данным и функционалу приложения.&nbsp;</span><span style=\"\" open=\"\" sans\";\"=\"\">Для реализации гибкого и масштабируемого GraphQL API необходимо использовать современные технологии разработки, такие как Node.js, Express.js, Apollo Server, TypeScript и MongoDB.&nbsp;</span></font></div><div style=\"text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\";\"=\"\"><font color=\"#000000\" face=\"open sans\" size=\"4\"><br></font></span></div><div style=\"text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\";\"=\"\"><font color=\"#000000\" face=\"open sans\" size=\"4\">Первый этап разработки - определение целей и задач. Нужно определить основные задачи, которые должен выполнять API, а также установить ограничения на его функциональность. На этом этапе можно также определить структуру данных и типы запросов.&nbsp;</font></span></div><div style=\"text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\";\"=\"\"><font color=\"#000000\" face=\"open sans\" size=\"4\"><br></font></span></div><div style=\"text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\";\"=\"\"><font color=\"#000000\" face=\"open sans\" size=\"4\">Второй этап - проектирование GraphQL схемы. Схема определяет типы данных, доступные клиентам и запросы, которые могут быть выполнены. На этом этапе определяются все поля, аргументы и возвращаемые значения для каждого типа.&nbsp;</font></span></div><div style=\"text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\";\"=\"\"><font color=\"#000000\" face=\"open sans\" size=\"4\"><br></font></span></div><div style=\"text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\";\"=\"\"><font color=\"#000000\" face=\"open sans\" size=\"4\">Третий этап - реализация GraphQL API. Используя Apollo Server и Express.js, можно создать сервер GraphQL API. В этот момент необходимо реализовать запросы, которые были определены на предыдущем этапе, и обработать ошибки, которые могут возникнуть в процессе работы.&nbsp;</font></span></div><div style=\"text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\";\"=\"\"><font color=\"#000000\" face=\"open sans\" size=\"4\"><br></font></span></div><div style=\"text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\";\"=\"\"><font color=\"#000000\" face=\"open sans\" size=\"4\">Четвертый этап - тестирование. Тестирование GraphQL API поможет убедиться в правильной работе всех запросов и функциональности. Кроме того, тестирование может помочь выявить потенциальные проблемы и недостатки, которые могут быть устранены до выпуска продукта.&nbsp;</font></span></div><div style=\"text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\";\"=\"\"><font color=\"#000000\" face=\"open sans\" size=\"4\"><br></font></span></div><div style=\"text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\";\"=\"\"><font color=\"#000000\" face=\"open sans\" size=\"4\">Пятый этап - деплоймент. После успешного завершения тестирования и устранения всех недостатков GraphQL API готов к деплою на продакшн-сервер.&nbsp;</font></span></div><div style=\"text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\";\"=\"\"><font color=\"#000000\" face=\"open sans\" size=\"4\"><br></font></span></div><div style=\"text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\";\"=\"\"><font style=\"\" color=\"#000000\" face=\"open sans\" size=\"4\">В результате выполнения всех этапов разработки получается гибкий и масштабируемый GraphQL API, который позволяет клиентам получать только необходимые данные с сервера и улучшает производительность системы в целом.</font></span></div>', 'https://i.ibb.co/hLcDdQw/pic05.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `card_id` int NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `card_id`, `body`) VALUES
(49, 49, '<div class=\"video-wrapper\"><iframe src=\"https://www.youtube.com/embed/PvYewHIAdKc\" title=\"Node.js #19 Создание API (Create API)\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen<=\"\" iframe=\"\"></div></iframe></div>');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `card_id` (`card_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`card_id`) REFERENCES `cards` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
