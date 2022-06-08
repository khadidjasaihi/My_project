-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 08 juin 2022 à 14:03
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cart_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `id_cour` int(11) NOT NULL,
  `titre` varchar(230) NOT NULL,
  `rapport` varchar(500) NOT NULL,
  `valider` varchar(11) NOT NULL,
  `reservation` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id_cour`, `titre`, `rapport`, `valider`, `reservation`) VALUES
(1, 'rapport2.pdf', 'tttt', ' oui', 'hhhhhhhh'),
(2, '5398333196e9b.pdf', '', '', ''),
(3, '5398333196e9b.pdf', '', '', ''),
(4, '5398333196e9b.pdf', '', '', ''),
(5, '5398333196e9b.pdf', '', '', ''),
(6, '5398333196e9b.pdf', '', '', ''),
(7, '5398333196e9b.pdf', '', '', ''),
(8, 'rapport2.pdf', '', '', ''),
(9, 'book reading awrerness.pdf', '', '', ''),
(10, 'book reading awrerness.pdf', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `csd`
--

CREATE TABLE `csd` (
  `id_csd` int(11) NOT NULL,
  `mpass` varchar(230) NOT NULL,
  `email` varchar(230) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `csf`
--

CREATE TABLE `csf` (
  `id_csf` int(11) NOT NULL,
  `mpass` varchar(230) NOT NULL,
  `email` varchar(230) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `ens`
--

CREATE TABLE `ens` (
  `email` varchar(230) NOT NULL,
  `mpass` varchar(230) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `fac` varchar(255) NOT NULL,
  `dep` varchar(255) NOT NULL,
  `propos` varchar(500) NOT NULL,
  `tel` int(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ens`
--

INSERT INTO `ens` (`email`, `mpass`, `nom`, `fac`, `dep`, `propos`, `tel`, `id`) VALUES
('kk@gmail.com', '123456', 'YAS', 'HHHHHHHH', 'HHHHHHHHHHHH', 'HHHHHHHHHHHH', 123, 1),
('jj@gmail.com', '111111', 'GGGGG', 'GGGGGGGGG', 'GGGGGG', 'GGGGGGG', 123, 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id_cour`);

--
-- Index pour la table `csd`
--
ALTER TABLE `csd`
  ADD PRIMARY KEY (`id_csd`);

--
-- Index pour la table `csf`
--
ALTER TABLE `csf`
  ADD PRIMARY KEY (`id_csf`);

--
-- Index pour la table `ens`
--
ALTER TABLE `ens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id_cour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `csd`
--
ALTER TABLE `csd`
  MODIFY `id_csd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `csf`
--
ALTER TABLE `csf`
  MODIFY `id_csf` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ens`
--
ALTER TABLE `ens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
