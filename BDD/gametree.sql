-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 29 déc. 2020 à 20:05
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gametree`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

CREATE TABLE `annonces` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `annonces`
--

INSERT INTO `annonces` (`id`, `title`, `content`, `user_id`, `time`) VALUES
(2, 'Atlas', 'jeu de pirates', 3, '2020-12-29 17:22:32'),
(3, 'Rust', 'je de survie', 3, '2020-12-29 19:48:24');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20201209172353', '2020-12-09 18:24:25', 85),
('DoctrineMigrations\\Version20201220194355', '2020-12-20 20:44:06', 51),
('DoctrineMigrations\\Version20201221171116', '2020-12-21 18:11:30', 82),
('DoctrineMigrations\\Version20201221175534', '2020-12-21 18:56:04', 56),
('DoctrineMigrations\\Version20201221182423', '2020-12-21 19:24:35', 115),
('DoctrineMigrations\\Version20201228143143', '2020-12-28 15:31:57', 146),
('DoctrineMigrations\\Version20201228145200', '2020-12-28 15:52:06', 47),
('DoctrineMigrations\\Version20201228145607', '2020-12-28 15:56:14', 125),
('DoctrineMigrations\\Version20201228170805', '2020-12-28 18:08:11', 123),
('DoctrineMigrations\\Version20201228180036', '2020-12-28 19:00:43', 128),
('DoctrineMigrations\\Version20201228192721', '2020-12-28 20:27:26', 35),
('DoctrineMigrations\\Version20201228202910', '2020-12-28 21:29:14', 33),
('DoctrineMigrations\\Version20201228210645', '2020-12-28 22:06:48', 100),
('DoctrineMigrations\\Version20201229092622', '2020-12-29 10:26:34', 566),
('DoctrineMigrations\\Version20201229130557', '2020-12-29 14:06:06', 62),
('DoctrineMigrations\\Version20201229142149', '2020-12-29 15:21:52', 75),
('DoctrineMigrations\\Version20201229161626', '2020-12-29 17:17:01', 37);

-- --------------------------------------------------------

--
-- Structure de la table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `annonce_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `user_id`, `name`) VALUES
(12, 3, 'd3e8245b856bbf428f47db0741458cf3.png');

-- --------------------------------------------------------

--
-- Structure de la table `image_annonces`
--

CREATE TABLE `image_annonces` (
  `id` int(11) NOT NULL,
  `annonces_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `image_annonces`
--

INSERT INTO `image_annonces` (`id`, `annonces_id`, `name`) VALUES
(1, 2, 'image_annonce_par_default.png');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `roles`) VALUES
(3, 'Slayer', '$argon2id$v=19$m=65536,t=4,p=1$RlJXeUoudXZOaVRWTjJyYg$2IE/FEeqcELHcx8l6g5ABJShPJcUxtVt41zUkmAt0fI', '[]');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonces`
--
ALTER TABLE `annonces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_CB988C6FA76ED395` (`user_id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_63540598805AB2F` (`annonce_id`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_E01FBE6AA76ED395` (`user_id`);

--
-- Index pour la table `image_annonces`
--
ALTER TABLE `image_annonces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_446802C74C2885D7` (`annonces_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annonces`
--
ALTER TABLE `annonces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `image_annonces`
--
ALTER TABLE `image_annonces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `annonces`
--
ALTER TABLE `annonces`
  ADD CONSTRAINT `FK_CB988C6FA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `FK_63540598805AB2F` FOREIGN KEY (`annonce_id`) REFERENCES `annonces` (`id`);

--
-- Contraintes pour la table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `FK_E01FBE6AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `image_annonces`
--
ALTER TABLE `image_annonces`
  ADD CONSTRAINT `FK_446802C74C2885D7` FOREIGN KEY (`annonces_id`) REFERENCES `annonces` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
