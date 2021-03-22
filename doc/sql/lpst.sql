-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 22 mars 2021 à 11:28
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

-- --------------------------------------------------------

--
-- Structure de la table `address`
--

CREATE TABLE `address` (
  `id` int UNSIGNED NOT NULL,
  `street` varchar(255) COLLATE utf8_bin NOT NULL,
  `complement` varchar(50) COLLATE utf8_bin DEFAULT NULL,
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
  `user_id` int UNSIGNED NOT NULL,
  `address_id` int UNSIGNED NOT NULL
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
  `role_id` tinyint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `lastname`, `firstname`, `mail`, `pass`, `phone`, `image`, `checked`, `role_id`) VALUES
(2, 'bouttefeux', 'pierre-yves', 'tot@great.fr', '$2y$10$RmRXzYzz5fxrrUS5EqN1kuqnZAD0jQ21ZjOTkqAgIGB9iakC3uh3G', NULL, NULL, 0, 2),
(3, 'laville', 'tata', 'tata@laville.fr', '$2y$10$0QyytG5MYrJgkc0AJbKSTeH.zD6DxmrnQGtQHyj8ad5PRjuBfwymW', NULL, NULL, 0, 2);

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
-- Index pour la table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_fk_idx` (`user_id`);

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
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` tinyint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- Contraintes pour la table `information`
--
ALTER TABLE `information`
  ADD CONSTRAINT `information_user_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `role_user_fk` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
