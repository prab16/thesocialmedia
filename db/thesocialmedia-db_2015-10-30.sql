-- phpMyAdmin SQL Dump
-- version 4.4.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1:3306
-- Généré le :  Ven 30 Octobre 2015 à 20:24
-- Version du serveur :  5.5.44
-- Version de PHP :  5.4.43

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `thesocialmedia`
--

-- --------------------------------------------------------

--
-- Structure de la table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `activities`
--

INSERT INTO `activities` (`id`, `name`) VALUES
(1, 'Gamer'),
(2, 'Danse'),
(3, 'Musculation'),
(4, 'Touriste');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(1, 'Personnel'),
(2, 'Travail'),
(3, 'École');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `profile_id` int(11) NOT NULL,
  `network_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `profile_id`, `network_id`) VALUES
(1, 'sosa', 3, 1),
(2, 'commentaire', 3, 8),
(3, 'sa', 3, 21);

-- --------------------------------------------------------

--
-- Structure de la table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `countries`
--

INSERT INTO `countries` (`id`, `name`) VALUES
(1, 'Canada'),
(2, 'United-States'),
(3, 'Mexico');

-- --------------------------------------------------------

--
-- Structure de la table `networks`
--

CREATE TABLE `networks` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `networks`
--

INSERT INTO `networks` (`id`, `title`) VALUES
(1, 'facebook'),
(2, 'gmail'),
(3, 'myspace'),
(5, 'Tencent QQ'),
(6, 'Tencent Qzone'),
(7, 'Google+'),
(8, 'Skype'),
(9, 'Twitter '),
(10, 'Line'),
(11, 'RenRen'),
(12, 'LinkedIn'),
(13, 'Instagram'),
(14, 'Nimbuzz'),
(15, 'Sina Weibo'),
(16, 'reddit'),
(17, 'VK'),
(18, 'Tumblr '),
(19, 'Tencent Weibo'),
(20, 'Tencent Qzone'),
(21, 'Other');

-- --------------------------------------------------------

--
-- Structure de la table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `profiles`
--

INSERT INTO `profiles` (`id`, `name`, `lastName`, `email`, `avatar`, `category_id`, `user_id`, `created`, `modified`, `state_id`) VALUES
(7, 'sosa', 'sosa', 'sosa@sosa.com', 'uploads/index.png', 1, 3, '2015-10-08', '2015-10-23', 2),
(15, 'd', 'd', 'dd@dd.com', '', 1, 3, '2015-10-23', '2015-10-23', 8),
(16, 's', 's', 's@s.com', '', 2, 3, '2015-10-30', '2015-10-30', 9),
(17, 's', 's', 's@s.com', 'uploads/Desert.jpg', 1, 3, '2015-10-30', '2015-10-30', 6);

-- --------------------------------------------------------

--
-- Structure de la table `profiles_activities`
--

CREATE TABLE `profiles_activities` (
  `id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `profiles_activities`
--

INSERT INTO `profiles_activities` (`id`, `profile_id`, `activity_id`) VALUES
(1, 3, 2),
(2, 3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `states`
--

INSERT INTO `states` (`id`, `name`, `country_id`) VALUES
(1, 'Quebec', 1),
(2, 'Ontario', 1),
(3, 'Alberta', 1),
(4, 'Brirtish-Colombia', 1),
(5, 'Manitoba', 1),
(6, 'Kentucky', 2),
(7, 'Virginia', 2),
(8, 'Pennsylvania', 2),
(9, ' Massachusetts', 2),
(10, 'Alaska', 2),
(11, 'Chihuahua', 3),
(12, 'Sonora', 3),
(13, 'Coahuila', 3),
(14, 'Durango', 3),
(15, 'Oaxaca', 3),
(16, 'Colima', 3);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  `confirm` varchar(1) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `email`, `created`, `modified`, `confirm`) VALUES
(3, 'admin', '$2a$10$ND9oKB4xAIvdtpmOg0pSZeYorJiI5rAPLuIbgIc0W/RmTkpN0lVSq', 'admin', 'admin@admin.com', '2015-09-10', '2015-09-10', ''),
(4, 'profile1', '$2a$10$7z0cBE2unN0EvAVtM/JvJuQS32w4a1pME8koylSW.X38TXD9UXpoi', 'admin', 'profile1@profile1.com', '2015-09-10', '2015-09-10', ''),
(5, 'profile2', '$2a$10$hNy/MQdcHjV691BgQAU0q.JfZQ6Wgu0yz1J2Oe7rk.48vjmc45ve6', 'profile', 'profile2@profile2.com', '2015-09-10', '2015-09-10', ''),
(6, 'profile4', '$2a$10$4oqhhud.aVNsiZlvMfWLH.zLJSXGwGeKJyYLdLnRFpzbSej6Xuhu.', 'profile', 'profile4@profile4.com', '2015-09-10', '2015-09-10', ''),
(7, 'sosa', '$2a$10$5EgGZDh5Cr2xBCY6mEvOROWRSSOHVkHXNsCeMomU4y0BN6sxWyMmG', 'profile', 'sosa@sosa.com', '2015-09-17', '2015-09-17', ''),
(10, 's', '$2a$10$lKsC35ZG7vj06ZRSH91k6.mIExevAcWOWB33z5mmUhxm4zgR4qHVa', 'profile', 's@s.com', '2015-10-23', '2015-10-23', '0'),
(11, 'h', '$2a$10$QDITmLIRErS0A3WQjjrOFeCoB4fNecdQaXaKPTqjfB8HlBix0RRE.', 'utilisateur', 'prab16@gmail.com', '2015-10-23', '2015-10-23', '1'),
(12, 'y', '$2a$10$CAv3QzYbHCBH/gUFU.gfe.DQEXrhZSp4kHInP.ymwwNm.i1M6VPD.', 'utilisateur', 'prab16@gmail.com', '2015-10-23', '2015-10-23', '0'),
(13, 's', '$2a$10$yPNRSGz6SAto2JWYFLVOmecasTH6IYnKXQWIKLwJrKPkRJj1jswxm', 'utilisateur', 's@sp.com', '2015-10-30', '2015-10-30', '0'),
(14, 'x', '$2a$10$iHzelLoCTBFDpeHJCvLAwuDict3dRfFNRT63nCs1rqret/z9lZm/a', 'utilisateur', 'prab16@gmail.com', '2015-10-30', '2015-10-30', '0'),
(15, 'x', '$2a$10$YWvLEgfYPk7ndaPWdUHd0.spHYqjtdk3cYwpbq8XxyNAvgj3FKF86', 'utilisateur', 'prab16@gmail.com', '2015-10-30', '2015-10-30', '0');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `networks`
--
ALTER TABLE `networks`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `profiles_activities`
--
ALTER TABLE `profiles_activities`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `networks`
--
ALTER TABLE `networks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT pour la table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `profiles_activities`
--
ALTER TABLE `profiles_activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
