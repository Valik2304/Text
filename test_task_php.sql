-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Лис 04 2019 р., 10:55
-- Версія сервера: 5.6.41
-- Версія PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `test_task_php`
--

-- --------------------------------------------------------

--
-- Структура таблиці `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп даних таблиці `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(20, '2014_10_12_000000_create_users_table', 1),
(21, '2014_10_12_100000_create_password_resets_table', 1),
(22, '2019_10_19_124434_create_table_countries', 1),
(23, '2019_10_28_103312_create_table_responses', 1),
(24, '2019_10_28_103730_create_table_new_users', 1),
(25, '2019_10_28_180304_create_table_responsess', 2),
(26, '2019_10_28_220811_create_table_responsess', 3);

-- --------------------------------------------------------

--
-- Структура таблиці `new_users`
--

CREATE TABLE `new_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп даних таблиці `new_users`
--

INSERT INTO `new_users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'xxx', 'xxx', 'ff24e3e98bf795c92b7f869879653615', '2019-10-30 13:04:34', '2019-10-30 13:04:34');

-- --------------------------------------------------------

--
-- Структура таблиці `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `responses`
--

CREATE TABLE `responses` (
  `id` int(10) UNSIGNED NOT NULL,
  `new_users_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rating` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп даних таблиці `responses`
--

INSERT INTO `responses` (`id`, `new_users_id`, `rating`, `name`, `email`, `text`, `image`, `created_at`, `updated_at`) VALUES
(1, NULL, '4', 'Valentyn', 'valentyn@gmail.com', 'Привіт!', 'images/0aidwnsno6u.jpg', '2019-10-30 10:48:39', '2019-10-30 10:48:39'),
(2, NULL, '3', 'Nastia', 'valik@gmail.com', 'Hi!', 'images/315193.jpg', '2019-10-30 10:55:24', '2019-10-30 10:55:24'),
(3, NULL, '5', 'Valentyn', 'valik@gmail.com', 'Важливий момент!', 'images/315392.jpg', '2019-10-30 11:03:18', '2019-10-30 11:03:18'),
(4, NULL, '5', 'Валентин', 'valentyn@gmail.com', 'Спроба 2 !', 'NULL', '2019-10-30 11:08:03', '2019-10-30 11:08:03'),
(5, NULL, '4', 'sgdf', 'dfgvdf', 'dfvsdf', '', '2019-10-30 12:46:09', '2019-10-30 12:46:09'),
(6, NULL, '4', 'fdgerfd', 'erdfgdf', 'sdgsdf', 'images/315392.jpg', '2019-10-30 12:46:34', '2019-10-30 12:46:34'),
(7, NULL, '4', 'gfg', 'gttttr', 'errer', '', '2019-10-30 12:47:30', '2019-10-30 12:47:30'),
(8, NULL, '2', 'Valentyn', 'Спроба 3!', 'Привіт', 'images/anypics.ru-11573.jpg', '2019-10-30 12:54:34', '2019-10-30 12:54:34'),
(9, NULL, '4', 'valik', 'ooooyyyyeee', 'hello', 'images/images.jpg', '2019-10-30 13:05:02', '2019-10-30 13:05:02'),
(10, NULL, '2', 'efewr', 'ergdf', 'dfgdf', '', '2019-10-30 13:05:41', '2019-10-30 13:05:41'),
(12, NULL, '2', 'fsgvdf', 'dfvdf', 'dfbgd', '', '2019-10-30 13:08:20', '2019-10-30 13:08:20'),
(13, NULL, '3', 'dfgvdf', 'sfgvsf', 'sdvsd', 'images/0aidwnsno6u.jpg', '2019-10-31 10:31:13', '2019-10-31 10:31:13'),
(14, NULL, '2', 'василь', 'вася@gmail.com', 'Нормас', 'images/images.jpg', '2019-10-31 13:51:56', '2019-10-31 13:51:56'),
(15, NULL, '4', 'ccc', 'dzfdz@gmail.dzadf', 'ddddddddddddddddasdfczs', '', '2019-10-31 14:03:06', '2019-10-31 14:03:06'),
(16, NULL, '2', 'sdgsd', 'sdvsdv', 'sdvsd', 'images/0aidwnsno6u.jpg', '2019-10-31 14:04:41', '2019-10-31 14:04:41'),
(17, NULL, '3', 'gnbgd', 'dfbdf', 'dfbdgb', '', '2019-10-31 15:19:38', '2019-10-31 15:19:38'),
(18, NULL, '5', 'dfgrd', 'adfgbdf', 'dfbdf', '', '2019-10-31 15:19:51', '2019-10-31 15:19:51'),
(19, NULL, '5', 'adfg', 'dagd', 'adgd', '', '2019-10-31 15:20:07', '2019-10-31 15:20:07'),
(20, NULL, '5', 'марія', 'dsd@gmail.com', 'Добрий день!', '', '2019-11-01 06:07:20', '2019-11-01 06:07:20'),
(21, NULL, '4', 'vasa', 'valik@gmail.com', 'hello', '', '2019-11-01 10:34:41', '2019-11-01 10:34:41'),
(22, NULL, '4', 'vova', 'valentyn@gmail.com', '\r\n\r\nЧоловіча сорочка з довгим рукавом. Модель прямого крою, з відкладним коміром. Застібається на гудзики.\r\n', 'images/315392.jpg', '2019-11-01 11:33:06', '2019-11-01 11:33:06'),
(23, NULL, '5', 'dfsgdf', 'dsgfzdf', 'dxgvdz', 'images/315193.jpg', '2019-11-01 12:34:22', '2019-11-01 12:34:22'),
(24, NULL, '5', 'dfdasf', 'dafsdz', 'Сессии - это на самом деле очень просто. Надо только понимать, для чего они нужны и как устроены. Ответим сначала на первый вопрос.\r\nВозможно Вы знаете, что веб-сервер не поддерживает ', 'images/0aidwnsno6u.jpg', '2019-11-02 08:23:26', '2019-11-02 08:23:26'),
(25, NULL, '4', 'vova', 'valik@gmail.com', '150150150150150150150150150150150150', 'images/307600.jpg', '2019-11-02 08:26:18', '2019-11-02 08:26:18'),
(26, NULL, '3', 'vitia', 'valik@gmail.com', 'fsdfsdzf', 'images/уцацуацус.jpg', '2019-11-03 10:07:26', '2019-11-03 10:07:26');

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `new_users`
--
ALTER TABLE `new_users`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Індекси таблиці `responses`
--
ALTER TABLE `responses`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблиці `new_users`
--
ALTER TABLE `new_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблиці `responses`
--
ALTER TABLE `responses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
