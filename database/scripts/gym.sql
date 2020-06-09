-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 09-06-2020 a las 02:04:29
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gym`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensualidades`
--

CREATE TABLE `mensualidades` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `mensualidades`
--

INSERT INTO `mensualidades` (`id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 1, '2020-06-09 01:39:40', '2020-06-09 01:39:40'),
(2, 4, 0, '2020-06-09 01:39:54', '2020-06-09 01:39:54'),
(8, 6, 1, '2020-06-09 04:01:55', '2020-06-09 04:01:55'),
(11, 11, 0, '2020-06-09 04:35:20', '2020-06-09 04:35:20'),
(12, 12, 0, '2020-06-09 06:55:33', '2020-06-09 06:55:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_06_05_232710_create_roles_table', 1),
(5, '2020_06_05_232734_create_role_users_table', 1),
(6, '2020_06_07_013234_create_servicios_table', 1),
(7, '2020_06_07_082956_add_deleted_to_servicios_table', 1),
(8, '2020_06_08_005730_create_suscripcions_table', 1),
(9, '2020_06_08_010539_create_pagos_table', 1),
(10, '2020_06_08_152740_create_mensualidades_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `suscripcion_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id`, `user_id`, `suscripcion_id`, `created_at`, `updated_at`) VALUES
(6, 3, 12, '2020-06-09 06:44:26', '2020-06-09 06:44:26'),
(7, 3, 13, '2020-06-09 06:47:52', '2020-06-09 06:47:52'),
(8, 12, 14, '2020-06-09 06:55:41', '2020-06-09 06:55:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'suscriptor'),
(2, 'cobrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`) VALUES
(1, 2, 1),
(2, 2, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(11, 1, 11),
(12, 1, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `costo` int(11) NOT NULL,
  `mora` int(11) NOT NULL,
  `horario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `nombre`, `costo`, `mora`, `horario`, `imagen1`, `imagen2`, `imagen3`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Yoga', 250, 50, '10:00', '1591647971yoga 2.jpg', '1591647971yoga 1.jpg', '1591647971yoga 3.jpg', 'Yoga', '2020-06-09 01:26:11', '2020-06-09 01:26:11', NULL),
(2, 'Zumba', 300, 30, '12:00', '1591647997zumba 1.jpg', '1591647997zumba 2.jpg', '1591647997zumba 3.jpeg', 'Zumba', '2020-06-09 01:26:37', '2020-06-09 01:26:37', NULL),
(3, 'Gym', 250, 30, '12:00', '1591648028gym 1.jpg', '1591648028gym 2.jpg', '1591648028gym 3.jpg', 'Gym', '2020-06-09 01:27:08', '2020-06-09 01:27:08', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscripcions`
--

CREATE TABLE `suscripcions` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `servicio_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `suscripcions`
--

INSERT INTO `suscripcions` (`id`, `user_id`, `servicio_id`, `created_at`, `updated_at`) VALUES
(11, 3, 3, '2020-06-02 01:33:00', NULL),
(12, 3, 3, '2020-06-09 06:44:26', '2020-06-09 06:44:26'),
(13, 3, 1, '2020-06-09 06:47:52', '2020-06-09 06:47:52'),
(14, 12, 3, '2020-06-09 06:55:41', '2020-06-09 06:55:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rfc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `direccion`, `rfc`, `celular`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'cobrador1', 'avenida cobrador1', '1234cobrador1', '0987654321', 'cobrador1@gmail.com', NULL, '$2y$10$4TjujHiqhu90QFRctsclIurtxAo6TJ8vzpmij1ruEYWT6nDHD914q', NULL, '2020-06-09 00:21:53', '2020-06-09 00:21:53'),
(2, 'cobrador2', 'avenida cobrador2', '1234cobrador2', '12345678990', 'cobrador2@gmail.com', NULL, '$2y$10$/uGEg/Qel0cc0Ds9.t7ga.GPU3ggl5fk4pr039i8q1FZKClpM5WJq', NULL, '2020-06-09 00:21:53', '2020-06-09 00:21:53'),
(3, 'suscriptor1', 'avenida suscriptor1', '12suscriptor1', '1123456789', 'suscriptor1@gmail.com', NULL, '$2y$10$CVv76Fl4Q.hGRuzR8CFnsOPB/QYfcu4J696l14POFDx5/qA7qKZWW', NULL, '2020-06-09 00:21:53', '2020-06-09 00:21:53'),
(4, 'suscriptor2', 'avenida suscriptor2', '12suscriptor2', '0012345678', 'suscriptor2@gmail.com', NULL, '$2y$10$GELKPGpqRbIYoSgZf6clpeH7goDK9.G0MouP9dOsK4TOLk/r5VbBe', NULL, '2020-06-09 00:21:53', '2020-06-09 00:21:53'),
(5, 'Sergio Ricardo Nanguse González', 'calle ignacio lopez rayon', '1234567890123', '9613533279', 'sergioricardonangusegonzalez@gmail.com', NULL, '$2y$10$aRTbSAjLrBMSKEe5ghuzRuiOhzEn1OkZ/IpgIIz588as1TV7xyoKa', NULL, '2020-06-09 01:07:12', '2020-06-09 01:07:12'),
(6, 'ivette', 'sdcsdcsdcs', '1234567890123', '1234567890', 'ive@gmail.com', NULL, '$2y$10$nrykC0ARriBTGfWTfJLBZeNTlSCMRPkwXgR01zA2iqt/YoxlHMKSe', NULL, '2020-06-09 03:58:48', '2020-06-09 03:58:48'),
(11, 'Ana gonzalez reynosa', 'ddssdfsdf', '1234567890123', '1234567890', 'naru96@gmail.com', NULL, '$2y$10$UVaVorQXemw5T.mC9iOLeuk6X9hJel/ybylWu0aspEGeyFVj678Oe', NULL, '2020-06-09 04:35:20', '2020-06-09 04:35:20'),
(12, 'Ana gonzalez reynosa', 'dssdfsd', '1234567890123', '1234567890', 'narutoremolinoo96@gmail.com', NULL, '$2y$10$5Zl5ASdu7CHDgBhEmgNblenHkVbuufhu9qY3NfP9.i0q3T7XrOevi', NULL, '2020-06-09 06:55:33', '2020-06-09 06:55:33');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mensualidades`
--
ALTER TABLE `mensualidades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mensualidades_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pagos_user_id_foreign` (`user_id`),
  ADD KEY `pagos_suscripcion_id_foreign` (`suscripcion_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `servicios_slug_unique` (`slug`);

--
-- Indices de la tabla `suscripcions`
--
ALTER TABLE `suscripcions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `suscripcions_user_id_foreign` (`user_id`),
  ADD KEY `suscripcions_servicio_id_foreign` (`servicio_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mensualidades`
--
ALTER TABLE `mensualidades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `suscripcions`
--
ALTER TABLE `suscripcions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `mensualidades`
--
ALTER TABLE `mensualidades`
  ADD CONSTRAINT `mensualidades_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `pagos_suscripcion_id_foreign` FOREIGN KEY (`suscripcion_id`) REFERENCES `suscripcions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pagos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `suscripcions`
--
ALTER TABLE `suscripcions`
  ADD CONSTRAINT `suscripcions_servicio_id_foreign` FOREIGN KEY (`servicio_id`) REFERENCES `servicios` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `suscripcions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
