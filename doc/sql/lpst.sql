-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 26 mars 2021 à 13:22
-- Version du serveur :  8.0.23-0ubuntu0.20.04.1
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lpst`
--
CREATE DATABASE IF NOT EXISTS `lpst` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `lpst`;

-- --------------------------------------------------------

--
-- Structure de la table `address`
--

CREATE TABLE `address` (
  `id` int UNSIGNED NOT NULL,
  `street` varchar(255) COLLATE utf8_bin NOT NULL,
  `complement` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `number` mediumint UNSIGNED NOT NULL,
  `zip_code` varchar(45) COLLATE utf8_bin NOT NULL,
  `city` varchar(100) COLLATE utf8_bin NOT NULL,
  `country` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `address_book`
--

CREATE TABLE `address_book` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `firstname` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `lastname` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `delivery` tinyint(1) NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `address_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `baker`
--

CREATE TABLE `baker` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `address_id` int UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `baker_delivery`
--

CREATE TABLE `baker_delivery` (
  `id` int UNSIGNED NOT NULL,
  `baker_id` int UNSIGNED DEFAULT NULL,
  `delivery_date_id` int UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `bread`
--

CREATE TABLE `bread` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(45) COLLATE utf8_bin NOT NULL,
  `price` float NOT NULL,
  `weight` float DEFAULT NULL,
  `description` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `baker_id` int UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `bread_reservation`
--

CREATE TABLE `bread_reservation` (
  `id` bigint UNSIGNED NOT NULL,
  `amount` float NOT NULL,
  `bread_id` int UNSIGNED NOT NULL,
  `reservation_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `delivery_date`
--

CREATE TABLE `delivery_date` (
  `id` int UNSIGNED NOT NULL,
  `day` varchar(10) COLLATE utf8_bin NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `information`
--

CREATE TABLE `information` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `image` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `location` varchar(200) COLLATE utf8_bin NOT NULL,
  `user_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` bigint UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `delivery` datetime NOT NULL,
  `reservation_num` varchar(45) COLLATE utf8_bin NOT NULL,
  `validated` tinyint NOT NULL DEFAULT '0',
  `user_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id` tinyint UNSIGNED NOT NULL,
  `name` varchar(45) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `name`, `description`) VALUES
(1, 'admin', NULL),
(2, 'client', NULL),
(3, 'modérateur', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int UNSIGNED NOT NULL,
  `lastname` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `firstname` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mail` varchar(200) COLLATE utf8_bin NOT NULL,
  `pass` varchar(200) COLLATE utf8_bin NOT NULL,
  `phone` varchar(15) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `image` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `checked` tinyint NOT NULL DEFAULT '0',
  `key_verification` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `date_token` datetime DEFAULT NULL,
  `role_id` tinyint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `address_book`
--
ALTER TABLE `address_book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adress_fk_idx` (`address_id`),
  ADD KEY `user_fk_idx` (`user_id`);

--
-- Index pour la table `baker`
--
ALTER TABLE `baker`
  ADD PRIMARY KEY (`id`),
  ADD KEY `baker_address_fk_idx` (`address_id`);

--
-- Index pour la table `baker_delivery`
--
ALTER TABLE `baker_delivery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `baker_delivery_baker_fk_idx` (`baker_id`),
  ADD KEY `baker_delivery_date_fk_idx` (`delivery_date_id`);

--
-- Index pour la table `bread`
--
ALTER TABLE `bread`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bread_baker_fk_idx` (`baker_id`);

--
-- Index pour la table `bread_reservation`
--
ALTER TABLE `bread_reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bread_reservation_reservation_fk` (`reservation_id`),
  ADD KEY `bread_reservation_bread_fk` (`bread_id`);

--
-- Index pour la table `delivery_date`
--
ALTER TABLE `delivery_date`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_fk_idx` (`user_id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservation_user_fk_idx` (`user_id`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail_UNIQUE` (`mail`),
  ADD KEY `role_fk_idx` (`role_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `address`
--
ALTER TABLE `address`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `address_book`
--
ALTER TABLE `address_book`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `baker`
--
ALTER TABLE `baker`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `baker_delivery`
--
ALTER TABLE `baker_delivery`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `bread`
--
ALTER TABLE `bread`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `bread_reservation`
--
ALTER TABLE `bread_reservation`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `delivery_date`
--
ALTER TABLE `delivery_date`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `information`
--
ALTER TABLE `information`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` tinyint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `address_book`
--
ALTER TABLE `address_book`
  ADD CONSTRAINT `adress_addressB_fk` FOREIGN KEY (`address_id`) REFERENCES `address` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `user_addressB_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `baker`
--
ALTER TABLE `baker`
  ADD CONSTRAINT `baker_address_fk` FOREIGN KEY (`address_id`) REFERENCES `address` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `baker_delivery`
--
ALTER TABLE `baker_delivery`
  ADD CONSTRAINT `baker_delivery_baker_fk` FOREIGN KEY (`baker_id`) REFERENCES `baker` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `baker_delivery_date_fk` FOREIGN KEY (`delivery_date_id`) REFERENCES `delivery_date` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `bread`
--
ALTER TABLE `bread`
  ADD CONSTRAINT `bread_baker_fk` FOREIGN KEY (`baker_id`) REFERENCES `baker` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `bread_reservation`
--
ALTER TABLE `bread_reservation`
  ADD CONSTRAINT `bread_reservation_bread_fk` FOREIGN KEY (`bread_id`) REFERENCES `bread` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `bread_reservation_reservation_fk` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `information`
--
ALTER TABLE `information`
  ADD CONSTRAINT `information_user_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_user_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `role_user_fk` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
