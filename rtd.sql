-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 13-05-2020 a las 19:18:09
-- Versión del servidor: 5.7.30-0ubuntu0.18.04.1
-- Versión de PHP: 7.2.24-0ubuntu0.18.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rtd`
--
CREATE DATABASE IF NOT EXISTS `rtd` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `rtd`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `armors`
--

CREATE TABLE `armors` (
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `armour` int(11) NOT NULL,
  `penality` int(11) NOT NULL,
  `body_part` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `armors`
--

INSERT INTO `armors` (`item_id`, `armour`, `penality`, `body_part`) VALUES
(20, 1, 0, 'Cabeza'),
(21, 2, -1, 'Cabeza'),
(22, 1, 0, 'Cabeza'),
(23, 1, 0, 'Hombros'),
(24, 4, -3, 'Hombros'),
(25, 2, 0, 'Torso'),
(26, 4, -2, 'Torso'),
(27, 8, -4, 'Torso'),
(28, 1, 0, 'Guantes'),
(29, 4, -1, 'Guantes'),
(30, 1, 2, 'Piernas'),
(31, 3, -1, 'Piernas'),
(32, 1, 2, 'Pies'),
(33, 4, -1, 'Pies'),
(34, 1, 0, 'Escudo'),
(35, 2, -1, 'Escudo'),
(36, 4, -2, 'Escudo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bags`
--

CREATE TABLE `bags` (
  `char_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `bags`
--

INSERT INTO `bags` (`char_id`, `item_id`) VALUES
(1, 12),
(1, 17),
(1, 26),
(1, 30),
(1, 38);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campaigns`
--

CREATE TABLE `campaigns` (
  `campaign_id` int(10) UNSIGNED NOT NULL,
  `master` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `campaign_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `campaign_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `campaigns`
--

INSERT INTO `campaigns` (`campaign_id`, `master`, `campaign_name`, `campaign_password`) VALUES
(1, 'dortmac', 'Forjador de Reyes', 'Proyectodaw1920'),
(2, 'dortmac', 'Fortaleza del caos', 'Proyectodaw1920'),
(3, 'jugadorEnrique', 'Mansión Corbitt', 'Proyectodaw1920');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `characters`
--

CREATE TABLE `characters` (
  `user_id` int(11) NOT NULL,
  `char_id` int(10) UNSIGNED NOT NULL,
  `char_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `race` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alignment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hometown` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `characters`
--

INSERT INTO `characters` (`user_id`, `char_id`, `char_name`, `race`, `sex`, `class`, `alignment`, `religion`, `hometown`) VALUES
(1, 1, 'Dixser', 'Humano', 'Masculino', 'Bárbaro', 'Caótico neutral', 'Ninguna', 'Arreat'),
(3, 3, 'Domri', 'Gnomo', 'Masculino', 'Mago', 'Legal bueno', 'Ninguna', 'Ikoria'),
(4, 4, 'Ashiok', 'Orco', 'Masculino', 'Guerrero', 'Caótico neutral', 'Culto a Mitra', 'Uldum'),
(5, 5, 'Rakanishu', 'Trasgo', 'Masculino', 'Asesino', 'Caótico bueno', 'Ninguna', 'Arreat');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consumables`
--

CREATE TABLE `consumables` (
  `item_id` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `consumables`
--

INSERT INTO `consumables` (`item_id`, `description`) VALUES
(38, 'El personaje recupera 1d8 puntos de\r\ndaño.'),
(39, 'La altura del personaje se\r\nduplica y su peso crece de forma proporcional.'),
(40, 'El personaje se vuelve invisible\r\nde la misma manera que si hubiera recibido el hechizo\r\nInvisibilidad.'),
(41, 'Una cuerda de 40 metros de longitud.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `items`
--

CREATE TABLE `items` (
  `item_id` int(10) UNSIGNED NOT NULL,
  `item_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `item_type`, `item_price`) VALUES
(1, 'Alabarda', 'weapon', 150),
(2, 'Arcabuz', 'weapon', 1200),
(3, 'Arco corto', 'weapon', 300),
(4, 'Arco largo', 'weapon', 750),
(5, 'Báculo', 'weapon', 30),
(6, 'Ballesta', 'weapon', 800),
(7, 'Cimitarra', 'weapon', 250),
(8, 'Daga', 'weapon', 20),
(9, 'Espada ancha', 'weapon', 250),
(10, 'Espada bastarda', 'weapon', 500),
(11, 'Estilete', 'weapon', 100),
(12, 'Hacha de batalla', 'weapon', 300),
(13, 'Hacha de mano', 'weapon', 100),
(14, 'Lanza', 'weapon', 200),
(15, 'Martillo de Guerra', 'weapon', 200),
(16, 'Martillo pesado', 'weapon', 300),
(17, 'Navaja', 'weapon', 5),
(18, 'Tridente', 'weapon', 400),
(19, 'Varita', 'weapon', 400),
(20, 'Gorro', 'armor', 15),
(21, 'Casco de hierro', 'armor', 250),
(22, 'Pelaje de animal', 'armor', 300),
(23, 'Hombreras acolchadas', 'armor', 50),
(24, 'Guardahombros de hierro', 'armor', 350),
(25, 'Cota de cuero', 'armor', 250),
(26, 'Cota de mallas', 'armor', 800),
(27, 'Coraza de placas', 'armor', 5000),
(28, 'Guantes de cuero', 'armor', 30),
(29, 'Manoplas de acero', 'armor', 350),
(30, 'Pantalón de aventurero', 'armor', 35),
(31, 'Pantalón de malla', 'armor', 250),
(32, 'Botas', 'armor', 150),
(33, 'Botas de malla', 'armor', 275),
(34, 'Rodela', 'armor', 50),
(35, 'Escudo redondo', 'armor', 140),
(36, 'Escudo de torre', 'armor', 300),
(38, 'Poción de curación', 'consumable', 300),
(39, 'Poción de crecimiento', 'consumable', 200),
(40, 'Poción de invisibilidad', 'consumable', 1500),
(41, 'Cuerda', 'consumable', 50);

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
(1, '2020_04_24_102306_create_users_table', 1),
(2, '2020_04_24_102520_create_armor_table', 1),
(3, '2020_04_24_103015_create_bag_table', 1),
(4, '2020_04_24_103048_create_campaign_table', 1),
(5, '2020_04_24_103247_create_characters_table', 1),
(6, '2020_04_24_103456_create_consumable_table', 1),
(7, '2020_04_24_103531_create_item_table', 1),
(8, '2020_04_24_103652_create_scene_table', 1),
(9, '2020_04_24_104024_create_stats_table', 1),
(10, '2020_04_24_104155_create_roll_table', 1),
(11, '2020_04_24_104155_create_weapon_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolls`
--

CREATE TABLE `rolls` (
  `campaign_id` int(11) NOT NULL,
  `roll` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `scenes`
--

CREATE TABLE `scenes` (
  `campaign_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `char_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `scenes`
--

INSERT INTO `scenes` (`campaign_id`, `user_id`, `char_id`) VALUES
(1, 3, 3),
(1, 4, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stats`
--

CREATE TABLE `stats` (
  `char_id` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `strength` int(11) NOT NULL,
  `dexerity` int(11) NOT NULL,
  `stamina` int(11) NOT NULL,
  `intelligence` int(11) NOT NULL,
  `wisdom` int(11) NOT NULL,
  `charisma` int(11) NOT NULL,
  `current_health` int(11) NOT NULL,
  `max_health` int(11) NOT NULL,
  `armor` int(11) NOT NULL,
  `gold` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `stats`
--

INSERT INTO `stats` (`char_id`, `level`, `strength`, `dexerity`, `stamina`, `intelligence`, `wisdom`, `charisma`, `current_health`, `max_health`, `armor`, `gold`) VALUES
(1, 3, 19, 15, 17, 8, 8, 9, 36, 36, 5, 750),
(3, 1, 7, 9, 8, 9, 8, 8, 4, 4, 0, 150),
(4, 1, 9, 8, 9, 7, 8, 8, 10, 10, 0, 150),
(5, 1, 8, 9, 7, 8, 8, 8, 6, 6, 0, 150);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `user_type`) VALUES
(1, 'dortmac', '$2y$10$Mr8I/hNI1.WBp0.r9FB/0uj5sZ.eRd9.MmQnM/CrmaHTGeQUW/s/q', 'admin'),
(3, 'jugadorEnrique', '$2y$10$I6Ctm4w1G15.vx.GTYH/FO.A0dJfCWKTPwuteY5ELmt/8U/aecKfW', 'user'),
(4, 'jugadorCarlos', '$2y$10$zg5wiknqYAJ29lC2lLsIkO0Kd1y/42LrX1t/Zf/VICFlwgbWc68bm', 'user'),
(5, 'jugadorAntonio', '$2y$10$MW2hTrBjAzo2GJr8Yupry.8Y30XmbHzCvtZ5qsJFS30IxqhVBoafG', 'user');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `weapons`
--

CREATE TABLE `weapons` (
  `item_id` int(11) NOT NULL,
  `weapon_damage` int(11) NOT NULL,
  `weapon_hands` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weapon_range` int(11) NOT NULL,
  `weapon_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `weapons`
--

INSERT INTO `weapons` (`item_id`, `weapon_damage`, `weapon_hands`, `weapon_range`, `weapon_type`) VALUES
(1, 6, 'Dos Manos', 4, 'Arma de asta'),
(2, 10, 'Dos Manos', 15, 'Arma de fuego'),
(3, 3, 'Dos Manos', 20, 'Arco'),
(4, 6, 'Dos Manos', 40, 'Arco'),
(5, 1, 'Una Mano', 0, 'Bastón'),
(6, 10, 'Una Mano', 70, 'Ballesta'),
(7, 8, 'Una Mano', 0, 'Espada'),
(8, 2, 'Una Mano', 0, 'Cuchillo'),
(9, 6, 'Una Mano', 0, 'Espada'),
(10, 8, 'Dos Manos', 0, 'Espada'),
(11, 4, 'Una Mano', 0, 'Cuchillo'),
(12, 10, 'Dos Manos', 0, 'Hacha'),
(13, 6, 'Una Mano', 0, 'Hacha'),
(14, 6, 'Dos Manos', 2, 'Arma de asta'),
(15, 6, 'Una Mano', 0, 'Martillo'),
(16, 10, 'Dos Manos', 0, 'Martillo'),
(17, 1, 'Una Mano', 0, 'Cuchillo'),
(18, 6, 'Dos Manos', 2, 'Arma de asta'),
(19, 1, 'Una Mano', 0, 'Varita');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `armors`
--
ALTER TABLE `armors`
  ADD PRIMARY KEY (`item_id`);

--
-- Indices de la tabla `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`campaign_id`);

--
-- Indices de la tabla `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`char_id`);

--
-- Indices de la tabla `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `scenes`
--
ALTER TABLE `scenes`
  ADD UNIQUE KEY `scenes_user_id_unique` (`user_id`),
  ADD UNIQUE KEY `scenes_char_id_unique` (`char_id`);

--
-- Indices de la tabla `stats`
--
ALTER TABLE `stats`
  ADD UNIQUE KEY `stats_char_id_unique` (`char_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `armors`
--
ALTER TABLE `armors`
  MODIFY `item_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT de la tabla `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `campaign_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `characters`
--
ALTER TABLE `characters`
  MODIFY `char_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
