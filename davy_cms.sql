-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : sam. 04 déc. 2021 à 11:54
-- Version du serveur : 10.6.4-MariaDB-1:10.6.4+maria~focal
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `davy_cms`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `contenu` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `auteur` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `titre`, `contenu`, `image`, `auteur`, `date`) VALUES
(1, 'Jaipur Café', 'Vous allez adorer ce décor indien aux couleurs rouge et rose. Dans une atmosphère bollywoodienne au plein cœur de Paris, vous trouverez une grande variété d\'épices relevant parfaitement les plats proposés. Les mets vous seront servis avec le sourire et l\'amabilité bien connus de l\'Inde. Vous allez apprécier le son du sitar pour une soirée suivant les traditions indiennes !', 'jaipur-cafe.jpg', 'Davy', '2021-12-01'),
(2, 'La Marée', 'Situé pas très loin des Champs-Élysées, le restaurant La Marée vous fera découvrir une cuisine de poissons raffinée et savoureuse. Vous allez tomber sous le charme par des produits de la mer changeant au rythme des saisons. Avec sa cave d\'exception, La Marée séduit les passionnés de cuisine française dans une magnifique association plats et vins.', 'la-maree.jpg', 'Dorian', '2021-12-01'),
(3, 'La Coupole', 'La Coupole est un restaurant unique avec sa décoration. Il est le symbole de l’art de vivre à la Française. Dans un espace original, il propose de partager de nouveaux moments de convivialité à tout moment de la journée, en mélangeant un lieu extraordinaire avec un service attentionné. Le chef a composé la carte autour des recettes plus contemporaines et de grands classiques de Brasserie.', 'la-coupole.jpg', 'Dorian', '2021-12-01'),
(4, 'Cèdres du Liban', 'Venez à l\'un des plus anciens restaurants libanais du 15e arrondissement de Paris. Depuis 40 ans, il propose de délicieux plats familiaux, traditionnels et authentiques, qui ravissent tous les gourmets. Laissez-vous attirer par la décoration pittoresque typique de la Méditerranée : murs de pierres blanches, arcades, fresques et peintures de peintres libanais sur les murs.', 'cedres-du-liban.jpg', 'Davy', '2021-12-01');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_commentaire` int(11) NOT NULL,
  `commentaire` text DEFAULT NULL,
  `auteur` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id_commentaire`, `commentaire`, `auteur`, `date`, `article_id`) VALUES
(1, 'Beluae esset aut trahebatur nobilis beluae rumore bonorum solitudine delatus multatione catenarum rumore solitudine fovisse.', 'Davy', '2021-12-04', 1),
(2, 'Usque triduum igitur et valido adsueti maiora usque adgressuri ipsa cuniculis et cum munimentum trinoctium.', 'Dorian', '2021-12-04', 2),
(3, 'Beluae esset aut trahebatur nobilis beluae rumore bonorum solitudine delatus multatione catenarum rumore solitudine fovisse.', 'Davy', '2021-12-04', 3),
(4, 'Usque triduum igitur et valido adsueti maiora usque adgressuri ipsa cuniculis et cum munimentum trinoctium.', 'Dorian', '2021-12-04', 1);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id_membre` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `statut` int(5) NOT NULL,
  `limit_connexion` int(11) NOT NULL,
  `limit_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id_membre`, `nom`, `prenom`, `email`, `mdp`, `statut`, `limit_connexion`, `limit_date`) VALUES
(1, 'Chen', 'Davy', 'chendavyweb@gmail.com', '$2y$10$PJa9QxOUnhVHXBO0xrMgpu1Uz0Qg5uOPsquKOftJ/iKgK09nphI9u', 0, 0, '2021-05-12'),
(2, 'Vidal', 'Dorian', 'dorian@gmail.com', '$2y$10$PJa9QxOUnhVHXBO0xrMgpu1Uz0Qg5uOPsquKOftJ/iKgK09nphI9u', 1, 0, '2021-05-12');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_commentaire`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id_membre`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id_membre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
