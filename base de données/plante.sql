-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 01 juin 2019 à 14:04
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `plante`
--

-- --------------------------------------------------------

--
-- Structure de la table `mesures`
--

DROP TABLE IF EXISTS `mesures`;
CREATE TABLE IF NOT EXISTS `mesures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `temperature` int(5) NOT NULL,
  `luminosite` int(5) NOT NULL,
  `humidite` int(5) NOT NULL,
  `date` datetime NOT NULL,
  `id_plante` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FOREIGN` (`id_plante`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mesures`
--

INSERT INTO `mesures` (`id`, `temperature`, `luminosite`, `humidite`, `date`, `id_plante`) VALUES
(1, 19, 3, 87, '2019-05-18 00:00:00', 1),
(2, 20, 2, 85, '2019-05-18 00:00:00', 2),
(3, 19, 3, 86, '2019-05-18 00:00:00', 3),
(4, 18, 2, 88, '2019-05-18 00:00:00', 4),
(5, 20, 1, 85, '2019-05-18 00:00:00', 5),
(6, 0, 3, 0, '2019-05-18 00:00:00', 6),
(7, 0, 1, 0, '2019-05-18 00:00:00', 5);

-- --------------------------------------------------------

--
-- Structure de la table `plante`
--

DROP TABLE IF EXISTS `plante`;
CREATE TABLE IF NOT EXISTS `plante` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(31) DEFAULT NULL,
  `categorie` varchar(44) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `humidite` varchar(117) DEFAULT NULL,
  `temperature` varchar(113) DEFAULT NULL,
  `luminosite` varchar(80) DEFAULT NULL,
  `periode` varchar(51) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `plante`
--

INSERT INTO `plante` (`id`, `nom`, `categorie`, `description`, `photo`, `humidite`, `temperature`, `luminosite`, `periode`) VALUES
(1, 'Oeillet', 'Fleur', 'Plante de 20 à 80 cm\r\n', '', 'Humiditee moyenne', 'Température moyen', 'Plein soleil, mi-ombre', 'Mai à septembre'),
(2, 'Capucines', 'Fleur', 'Plante grimpantes aux fleurs vivement colorées', '', 'Humiditée moyenne', 'Température moyen', 'Ensoleillée', 'Juin à Septembre'),
(3, 'Cosmos', 'Fleur', 'Plante de 20cm à 1 mètre, sensible au gel', '', 'Humiditee intermédiaires', 'Température moyen', 'Plein soleil', 'Juillet - Octobre'),
(4, 'Roses trémière', 'Fleur', 'Plante de 1.50m de haut avec des feuilles arrondies\r\n', '', 'Humidité moyenne', 'Température chaude', 'Ensoleillée', 'Juin à septembre'),
(5, 'Iris', 'Fleur', 'Résistant aux maladies et aux insectes', '', 'Humidité intermédiaire', 'Température moyenne', 'Plein Soleil', 'Mai à Juillet'),
(6, 'Pommier', 'Arbre', 'Arbre qui fait des pommes', NULL, 'Moyenne', 'Température chaude', 'Bonne Luminosité', 'Juin'),
(7, 'Moto', 'Plante', 'Plante qui fait de la moto', NULL, 'assez pour survivre', 'chaude', 'assez lumineux', 'Aout');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `mail`) VALUES
(1, 'michel.rillette@wanadoo.fr'),
(2, 'michel.rillette@outlook.fr'),
(7, 'oui@gmail.com');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `mesures`
--
ALTER TABLE `mesures`
  ADD CONSTRAINT `FOREIGN` FOREIGN KEY (`id_plante`) REFERENCES `plante` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
