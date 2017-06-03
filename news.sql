-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Час створення: Чрв 03 2017 р., 21:48
-- Версія сервера: 5.5.48
-- Версія PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `news`
--

-- --------------------------------------------------------

--
-- Структура таблиці `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `desc` text COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL DEFAULT '1',
  `category_id` int(10) unsigned NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп даних таблиці `articles`
--

INSERT INTO `articles` (`id`, `title`, `text`, `desc`, `alias`, `img`, `created_at`, `updated_at`, `user_id`, `category_id`) VALUES
(8, 'Vodafone обеспечил новое 3G покрытие в 25 населенных пунктах', '<p>Vodafonе Украина продолжает расширять 3G покрытие. В конце мая оператор запустил 3G сети в ряде населенных пунктов северных и центральных областей Украины.</p>\r\n\r\n<p>Качественный 3G от Vodafone заработал в населенных пунктах Сумской области: в городе Кролевец, селах Ямное и Боромля.</p>\r\n\r\n<p>Сразу 17 населенных пунктов Полтавской области получили доступ к скоростному мобильному интернету &ndash; город Заводское, пгт Гоголево, села Ромодан, Ольшанка, Михайловка, Пальчиковка, Халтурино, Александровка, Демина Балка, Белоцерковка, Алексеевка, Жуки, Великая Круча, Мостовивщина, Кукобовка, Пышное и Повстин.</p>\r\n\r\n<p>Еще три населенных пункта &ndash; села Першотравневое, Андрусовка и Коробочкино Харьковской области &ndash; также получили доступ к скоростному мобильному интернету. Скоростной мобильный интернет также появился в селе Зарванцы и пгт Стрижавка Винницкой области.</p>\r\n', '<p>Мобильные новости</p>', 'news', '{"mini":"b4ZtZcoX_mini.jpg","max":"b4ZtZcoX_max.jpg","path":"b4ZtZcoX.jpg"}', '2017-06-02 11:22:11', '2017-06-02 11:22:11', 1, 2),
(9, 'Va', '<p>Vodafonе Украина продолжает расширять 3G покрытие. В конце мая оператор запустил 3G сети в ряде населенных пунктов северных и центральных областей Украины.</p>\r\n\r\n<p>Качественный 3G от Vodafone заработал в населенных пунктах Сумской области: в городе Кролевец, селах Ямное и Боромля.</p>\r\n\r\n<p>Сразу 17 населенных пунктов Полтавской области получили доступ к скоростному мобильному интернету &ndash; город Заводское, пгт Гоголево, села Ромодан, Ольшанка, Михайловка, Пальчиковка, Халтурино, Александровка, Демина Балка, Белоцерковка, Алексеевка, Жуки, Великая Круча, Мостовивщина, Кукобовка, Пышное и Повстин.</p>\r\n\r\n<p>Еще три населенных пункта &ndash; села Першотравневое, Андрусовка и Коробочкино Харьковской области &ndash; также получили доступ к скоростному мобильному интернету. Скоростной мобильный интернет также появился в селе Зарванцы и пгт Стрижавка Винницкой области.</p>\r\n', '<p>Мобильные новости</p>', 'vodafoneukraina', '{"mini":"Nrn1Pt8h_mini.jpg","max":"Nrn1Pt8h_max.jpg","path":"Nrn1Pt8h.jpg"}', '2017-06-02 11:22:36', '2017-06-02 12:23:33', 1, 2),
(14, '3G покрытие в 25 населенных пунктах', '<p>Vodafonе Украина продолжает расширять 3G покрытие. В конце мая оператор запустил 3G сети в ряде населенных пунктов северных и центральных областей Украины.</p>\r\n\r\n<p>Качественный 3G от Vodafone заработал в населенных пунктах Сумской области: в городе Кролевец, селах Ямное и Боромля.</p>\r\n\r\n<p>Сразу 17 населенных пунктов Полтавской области получили доступ к скоростному мобильному интернету &ndash; город Заводское, пгт Гоголево, села Ромодан, Ольшанка, Михайловка, Пальчиковка, Халтурино, Александровка, Демина Балка, Белоцерковка, Алексеевка, Жуки, Великая Круча, Мостовивщина, Кукобовка, Пышное и Повстин.</p>\r\n\r\n<p>Еще три населенных пункта &ndash; села Першотравневое, Андрусовка и Коробочкино Харьковской области &ndash; также получили доступ к скоростному мобильному интернету. Скоростной мобильный интернет также появился в селе Зарванцы и пгт Стрижавка Винницкой области.</p>\r\n', '<p>Мобильные новости</p>', 'newswww', '{"mini":"b4ZtZcoX_mini.jpg","max":"b4ZtZcoX_max.jpg","path":"b4ZtZcoX.jpg"}', '2017-06-02 11:22:11', '2017-06-02 11:22:11', 1, 2),
(15, 'TESY', '<p>asddasdsdas</p>\r\n', '', 'tesy', '{"mini":"Hepmv3H3_mini.jpg","max":"Hepmv3H3_max.jpg","path":"Hepmv3H3.jpg"}', '2017-06-03 03:27:10', '2017-06-03 03:27:10', 1, 2),
(16, 'qwertyqwerty', '<p>qwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwerty</p>\r\n', '', 'qwertyqwerty', '{"mini":"eH6twYnb_mini.jpg","max":"eH6twYnb_max.jpg","path":"eH6twYnb.jpg"}', '2017-06-03 03:27:51', '2017-06-03 03:28:15', 1, 2);

-- --------------------------------------------------------

--
-- Структура таблиці `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп даних таблиці `categories`
--

INSERT INTO `categories` (`id`, `title`, `parent_id`, `alias`, `created_at`, `updated_at`) VALUES
(1, 'Новости', 0, 'news', '2017-05-30 21:00:00', NULL),
(2, 'Новости', 1, '', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп даних таблиці `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_05_30_201254_CreateArticlesTable', 1),
('2017_05_30_204208_ChangeArticlesTable', 2),
('2017_05_30_204437_CreateCategoriesTable', 2),
('2017_05_30_210258_ChangeArticlesTable', 3),
('2017_05_31_185337_ChangeUsersTable', 4),
('2017_06_01_105308_CreateRolesTable', 5),
('2017_06_01_105354_CreatePermissionsTable', 5),
('2017_06_01_105449_CreatePermissionRoleTable', 5),
('2017_06_01_105541_CreateRoleUserTable', 5),
('2017_06_01_110050_ChangeRoleUserTable', 6),
('2017_06_01_110140_ChangePermissionRoleTable', 6);

-- --------------------------------------------------------

--
-- Структура таблиці `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп даних таблиці `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'VIEW_ADMIN', NULL, NULL),
(2, 'ADD_ARTICLES', NULL, NULL),
(3, 'UPDATE_ARTICLES', NULL, NULL),
(4, 'DELETE_ARTICLES', NULL, NULL),
(5, 'ADMIN_USERS', NULL, NULL),
(6, 'VIEW_ADMIN_ARTICLES', NULL, NULL),
(7, 'EDIT_USERS', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `permission_role`
--

CREATE TABLE IF NOT EXISTS `permission_role` (
  `id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `permission_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп даних таблиці `permission_role`
--

INSERT INTO `permission_role` (`id`, `created_at`, `updated_at`, `role_id`, `permission_id`) VALUES
(1, NULL, NULL, 1, 1),
(2, NULL, NULL, 1, 2),
(3, NULL, NULL, 1, 3),
(4, NULL, NULL, 1, 4),
(5, NULL, NULL, 1, 5),
(6, NULL, NULL, 1, 6),
(7, NULL, NULL, 1, 7);

-- --------------------------------------------------------

--
-- Структура таблиці `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп даних таблиці `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Moderator', NULL, NULL),
(3, 'Guest', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `role_user`
--

CREATE TABLE IF NOT EXISTS `role_user` (
  `id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп даних таблиці `role_user`
--

INSERT INTO `role_user` (`id`, `created_at`, `updated_at`, `user_id`, `role_id`) VALUES
(1, NULL, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `login`) VALUES
(1, 'Antonina', 'user@gmail.com', '$2y$10$Jsccqs5An1xhR25E5Uvi3OLffNqxMyBj4txHXfyEK3aWWBYoMxrjW', 'r90GGkHZtsCNtgeYHPhBseIqcEIPY6JH9yp107oQKxlrRPVPO1USsNCEtyPr', '2017-05-30 18:20:39', '2017-06-02 11:38:39', 'user');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_alias_unique` (`alias`),
  ADD KEY `articles_user_id_foreign` (`user_id`),
  ADD KEY `articles_category_id_foreign` (`category_id`);

--
-- Індекси таблиці `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_alias_unique` (`alias`);

--
-- Індекси таблиці `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Індекси таблиці `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`),
  ADD KEY `permission_role_permission_id_foreign` (`permission_id`);

--
-- Індекси таблиці `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT для таблиці `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT для таблиці `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблиці `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблиці `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблиці `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблиці `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`),
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
