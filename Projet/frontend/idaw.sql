-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mer. 06 avr. 2022 à 07:20
-- Version du serveur :  5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `idaw`
--

-- --------------------------------------------------------

--
-- Structure de la table `ALIMENT`
--

CREATE TABLE `ALIMENT` (
  `ID_ALIMENT` int(11) NOT NULL,
  `LIBELLE` varchar(100) DEFAULT NULL,
  `DATE` date NOT NULL,
  `CALORIES` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ALIMENT`
--

INSERT INTO `ALIMENT` (`ID_ALIMENT`, `LIBELLE`, `DATE`, `CALORIES`) VALUES
(3, 'poulet', '2022-04-03', 1),
(4, 'riz', '2022-04-03', 1),
(5, 'poulet', '2022-04-03', 1);

-- --------------------------------------------------------

--
-- Structure de la table `COMPOSITION`
--

CREATE TABLE `COMPOSITION` (
  `ID_COMPOSITION` int(11) NOT NULL,
  `LIBELLE` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `COMPOSITION`
--

INSERT INTO `COMPOSITION` (`ID_COMPOSITION`, `LIBELLE`) VALUES
(1, 'Semoule'),
(2, 'Viandes'),
(3, 'Légumes'),
(4, 'Sauce'),
(5, 'Salade verte'),
(6, 'Tomate'),
(7, 'Concombre'),
(8, 'Huile'),
(9, 'Sel');

-- --------------------------------------------------------

--
-- Structure de la table `CONSOMMER`
--

CREATE TABLE `CONSOMMER` (
  `ID_UTILISATEUR` int(11) NOT NULL,
  `ID_ALIMENT` int(11) NOT NULL,
  `QUANTITE` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `CONTENIR`
--

CREATE TABLE `CONTENIR` (
  `ID_ALIMENT` int(11) NOT NULL,
  `RATIO` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `SE_COMPOSER`
--

CREATE TABLE `SE_COMPOSER` (
  `ID_ALIMENT` int(11) NOT NULL,
  `ID_COMPOSITION` int(11) NOT NULL,
  `RATIO` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `SPORT`
--

CREATE TABLE `SPORT` (
  `ID_SPORT` int(11) NOT NULL,
  `LIBELLE` varchar(15) DEFAULT NULL,
  `ID_UTILISATEUR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `TYPE_ALIMENT`
--

CREATE TABLE `TYPE_ALIMENT` (
  `ID_TYPE` int(11) NOT NULL,
  `LIBELLE` varchar(15) DEFAULT NULL,
  `ID_ALIMENT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `UTILISATEUR`
--

CREATE TABLE `UTILISATEUR` (
  `ID_UTILISATEUR` int(11) NOT NULL,
  `NOM` varchar(50) DEFAULT NULL,
  `PRENOM` varchar(50) DEFAULT NULL,
  `LOGIN` varchar(100) DEFAULT NULL,
  `PASSWORD` varchar(100) DEFAULT NULL,
  `AGE` int(3) DEFAULT NULL,
  `SEXE` varchar(5) DEFAULT NULL,
  `BESOIN_ENERGITIQUE` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `UTILISATEUR`
--

INSERT INTO `UTILISATEUR` (`ID_UTILISATEUR`, `NOM`, `PRENOM`, `LOGIN`, `PASSWORD`, `AGE`, `SEXE`, `BESOIN_ENERGITIQUE`) VALUES
(9, 'NGUYEN', 'William', 'william.nguyen@etu.imt-lille-douai.fr', NULL, NULL, NULL, NULL),
(10, 'POIROT', 'Alexis', 'alexis.poirot@etu.imt-lille-douai.fr', NULL, NULL, NULL, NULL),
(11, 'LAMBERT', 'Antoine', 'antoine.lambert@etu.imt-lille-douai.fr', NULL, NULL, NULL, NULL),
(12, 'PRAST', 'Cédric', 'cedric.prast@etu.imt-lille-douai.fr', NULL, NULL, NULL, NULL),
(13, 'GOUTHIER', 'Anthony', 'anthony.gouthier@etu.imt-lille-douai.fr', NULL, NULL, NULL, NULL),
(14, 'GAUDIN', 'Johan', 'johan.gaudin@etu.imt-lille-douai.fr', NULL, NULL, NULL, NULL),
(15, 'FAURE', 'Guillaume', 'guillaume.faure@etu.imt-lille-douai.fr', NULL, NULL, NULL, NULL),
(16, 'HEBBOUL', 'Hatim', 'hatim.hebboul@etu.imt-lille-douai.fr', NULL, NULL, NULL, NULL),
(17, 'SUMO MOUDJIE TCHAMABE', 'Armand', 'armand.sumo@etu.imt-lille-douai.fr', NULL, NULL, NULL, NULL),
(18, 'JOLIVEL', 'Mathis', 'mathis.jolivel@etu.imt-lille-douai.fr', NULL, NULL, NULL, NULL),
(19, 'AL ZAHABI', 'Ezzat', 'ezzat.al.zahabi@etu.imt-lille-douai.fr', 'Ezzat99', 22, 'M', 3000),
(20, 'ERHART', 'Gaelle', 'gaelle.erhart@etu.imt-lille-douai.fr', NULL, NULL, NULL, NULL),
(21, 'ARIB', 'Lucas', 'lucas.arib@etu.imt-lille-douai.fr', NULL, NULL, NULL, NULL),
(22, 'LIM', 'Hugo', 'hugo.lim@etu.imt-lille-douai.fr', NULL, NULL, NULL, NULL),
(23, 'SICOLI', 'Sacha', 'sacha.sicoli@etu.imt-lille-douai.fr', NULL, NULL, NULL, NULL),
(24, 'PEROUSE', 'Emil', 'emil.perouse@etu.imt-lille-douai.fr', NULL, NULL, NULL, NULL),
(25, 'GRUMIAUX', 'Léa', 'lea.grumiaux@etu.imt-lille-douai.fr', NULL, NULL, NULL, NULL),
(26, 'MARTIN', 'Pierre', 'pierre.martin@etu.imt-lille-douai.fr', NULL, NULL, NULL, NULL),
(27, 'DJAMOINE', 'Kanlanfaye', 'kanlanfaye.djamoine@etu.imt-lille-douai.fr', NULL, NULL, NULL, NULL),
(28, 'FEENSTRA', 'Tanguy', 'tanguy.feenstra@etu.imt-lille-douai.fr', NULL, NULL, NULL, NULL),
(29, 'DE VEYRAC', 'Maxime', 'maxime.de.veyrac@etu.imt-lille-douai.fr', NULL, NULL, NULL, NULL),
(30, 'BEN HAMIDOUCHE', 'Mekki', 'mekki.ben.hamidouche@etu.imt-lille-douai.fr', NULL, NULL, NULL, NULL),
(31, 'ZINK', 'Julia', 'julia.zink@etu.imt-lille-douai.fr', NULL, NULL, NULL, NULL),
(32, 'FAVREAU', 'Alexandre', 'alexandre.favreau@etu.imt-lille-douai.fr', NULL, NULL, NULL, NULL),
(33, 'DEVA', 'Nilavan', 'nilavan.deva@etu.imt-lille-douai.fr', NULL, NULL, NULL, NULL),
(34, 'bot', 'bot', 'bot', 'bot', 22, 'M', 1),
(35, 'bot', 'bot', 'bot', 'bot', 22, 'M', 1),
(36, 'bot', 'bot', 'bot', 'bot', 1, 'M', 1),
(37, 'bot', 'bot', 'bot', 'bot', 1, 'M', 1),
(38, 'bot', 'bot', 'bot', 'bot', 1, 'M', 1),
(39, 'toto', 'toto', 'toto', 'toto', 1, 'M', 1),
(40, 'toto', 'toto', 'toto', 'toto', 1, 'M', 1),
(41, 'toto', 'toto', 'toto', 'toto', 1, 'M', 1),
(42, 'tata', 'tata', 'tata', 'tata', 2, 'F', 2),
(43, 'tata', 'tata', 'tata', 'tata', 2, 'F', 2),
(44, 'tata', 'tata', 'tata', 'tata', 2, 'F', 2),
(45, 'titi', 'titi', 'titi', 'titi', 3, 'F', 3),
(46, 'titi', 'titi', 'titi', 'titi', 3, 'F', 3),
(47, 'riri', 'riri', 'riri', 'riri', 4, 'F', 4),
(48, 'roro', 'roro', 'roro@hotmail.fr', 'roro', 2, '', 2),
(49, 'mahery', 'randriamanga', 'mahery@gmail.fr', 'mahery', 22, '', 4000),
(50, 'ezzat', 'ezzat', 'ezzat@gmail.com', 'ezzat', 1, 'F', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ALIMENT`
--
ALTER TABLE `ALIMENT`
  ADD PRIMARY KEY (`ID_ALIMENT`);

--
-- Index pour la table `COMPOSITION`
--
ALTER TABLE `COMPOSITION`
  ADD PRIMARY KEY (`ID_COMPOSITION`);

--
-- Index pour la table `CONSOMMER`
--
ALTER TABLE `CONSOMMER`
  ADD KEY `ID_UTILISATEUR` (`ID_UTILISATEUR`),
  ADD KEY `ID_ALIMENT` (`ID_ALIMENT`);

--
-- Index pour la table `CONTENIR`
--
ALTER TABLE `CONTENIR`
  ADD KEY `ID_ALIMENT` (`ID_ALIMENT`);

--
-- Index pour la table `SE_COMPOSER`
--
ALTER TABLE `SE_COMPOSER`
  ADD KEY `ID_ALIMENT` (`ID_ALIMENT`),
  ADD KEY `ID_COMPOSITION` (`ID_COMPOSITION`);

--
-- Index pour la table `SPORT`
--
ALTER TABLE `SPORT`
  ADD PRIMARY KEY (`ID_SPORT`),
  ADD KEY `ID_UTILISATEUR` (`ID_UTILISATEUR`);

--
-- Index pour la table `TYPE_ALIMENT`
--
ALTER TABLE `TYPE_ALIMENT`
  ADD PRIMARY KEY (`ID_TYPE`),
  ADD KEY `ID_ALIMENT` (`ID_ALIMENT`);

--
-- Index pour la table `UTILISATEUR`
--
ALTER TABLE `UTILISATEUR`
  ADD PRIMARY KEY (`ID_UTILISATEUR`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ALIMENT`
--
ALTER TABLE `ALIMENT`
  MODIFY `ID_ALIMENT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `COMPOSITION`
--
ALTER TABLE `COMPOSITION`
  MODIFY `ID_COMPOSITION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `SPORT`
--
ALTER TABLE `SPORT`
  MODIFY `ID_SPORT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `TYPE_ALIMENT`
--
ALTER TABLE `TYPE_ALIMENT`
  MODIFY `ID_TYPE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `UTILISATEUR`
--
ALTER TABLE `UTILISATEUR`
  MODIFY `ID_UTILISATEUR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `CONSOMMER`
--
ALTER TABLE `CONSOMMER`
  ADD CONSTRAINT `consommer_ibfk_1` FOREIGN KEY (`ID_UTILISATEUR`) REFERENCES `UTILISATEUR` (`ID_UTILISATEUR`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `consommer_ibfk_2` FOREIGN KEY (`ID_ALIMENT`) REFERENCES `ALIMENT` (`ID_ALIMENT`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `CONTENIR`
--
ALTER TABLE `CONTENIR`
  ADD CONSTRAINT `contenir_ibfk_1` FOREIGN KEY (`ID_ALIMENT`) REFERENCES `ALIMENT` (`ID_ALIMENT`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `SE_COMPOSER`
--
ALTER TABLE `SE_COMPOSER`
  ADD CONSTRAINT `se_composer_ibfk_1` FOREIGN KEY (`ID_ALIMENT`) REFERENCES `ALIMENT` (`ID_ALIMENT`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `se_composer_ibfk_2` FOREIGN KEY (`ID_COMPOSITION`) REFERENCES `COMPOSITION` (`ID_COMPOSITION`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `SPORT`
--
ALTER TABLE `SPORT`
  ADD CONSTRAINT `sport_ibfk_1` FOREIGN KEY (`ID_UTILISATEUR`) REFERENCES `UTILISATEUR` (`ID_UTILISATEUR`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `TYPE_ALIMENT`
--
ALTER TABLE `TYPE_ALIMENT`
  ADD CONSTRAINT `type_aliment_ibfk_1` FOREIGN KEY (`ID_ALIMENT`) REFERENCES `ALIMENT` (`ID_ALIMENT`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
