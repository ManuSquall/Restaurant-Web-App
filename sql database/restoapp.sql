-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 13 sep. 2019 à 06:14
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
-- Base de données :  `restoapp`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `nomComplet` varchar(255) NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nomComplet`) VALUES
(1, 'squall ndiaye'),
(2, 'manu ndiaye'),
(3, 'ndeva mbow'),
(4, 'anta sene');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id_commande` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(255) NOT NULL,
  `id_client` int(11) NOT NULL,
  `modePayement` varchar(255) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id_commande`),
  KEY `id_client` (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `numero`, `id_client`, `modePayement`, `total`) VALUES
(1, 'CMD-28062019', 2, 'espece', 5500),
(2, 'CMD-28062019-2', 2, 'espece', 5500),
(3, 'CMD-28062019-3', 1, 'carte', 6600),
(4, 'CMD-28062019-4', 2, 'om', 1500),
(5, 'CMD-28062019-5', 1, 'espece', 8900),
(6, 'CMD-28062019-6', 1, 'espece', 8900),
(7, 'CMD-28062019-7', 1, 'espece', 8900),
(8, 'CMD-28062019-8', 3, 'espece', 6500),
(9, '', 3, 'carte', 6500),
(10, '', 1, 'carte', 1500),
(11, 'CMD-28062019-11', 1, 'carte', 1400),
(12, 'CMD-28062019-12', 1, 'om', 29500),
(13, 'CMD-28062019-13', 1, 'espece', 6000),
(14, 'CMD-28062019-14', 2, 'espece', 11800),
(15, 'CMD-28062019-15', 1, 'carte', 5400);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id_produit` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  PRIMARY KEY (`id_produit`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `libelle`, `prix`) VALUES
(3, 'Hamburger Simple', 1500),
(4, 'Hamburger Poulet', 1800),
(5, 'Hamburger Royal', 1800),
(6, 'Hamburger Double', 2200),
(7, 'Chawarma', 1300),
(8, 'Chawarma Royal', 1800),
(9, 'Chawarma Poulet', 1800),
(10, 'Pacha', 1800),
(11, 'Norvégienne', 1400),
(12, 'Barquette de Frite', 1000),
(13, 'Sandwich Steak', 1300),
(14, 'Sandwich Gourmand', 1500),
(15, 'Sandwich Dibi', 1300),
(16, 'Sandwich Philadelphia', 1500),
(17, 'Sandwich Poulet', 2000),
(18, 'Fataya Simple', 500),
(19, 'Fataya Complet', 800),
(20, 'Omelette Jambon Fromage', 2000),
(21, 'Omelette Poulet Fromage', 2500),
(22, 'Hot Dog (Omelette Americaine)', 2500),
(23, 'Panini Poulet', 1700),
(24, 'Panini Jambon', 1500),
(25, 'Beurre Sucre', 1200),
(26, 'Nutella', 1500),
(27, 'Nutella Banane', 1800);

-- --------------------------------------------------------

--
-- Structure de la table `produitcommande`
--

DROP TABLE IF EXISTS `produitcommande`;
CREATE TABLE IF NOT EXISTS `produitcommande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produit` int(11) NOT NULL,
  `id_commande` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_commande` (`id_commande`),
  KEY `id_produit` (`id_produit`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produitcommande`
--

INSERT INTO `produitcommande` (`id`, `id_produit`, `id_commande`, `quantite`) VALUES
(1, 7, 7, 5),
(2, 25, 7, 2),
(3, 7, 8, 5),
(4, 7, 9, 5),
(5, 3, 9, 1),
(6, 11, 11, 1),
(7, 22, 12, 1),
(8, 3, 12, 8),
(9, 3, 12, 5),
(10, 16, 12, 5),
(11, 20, 13, 3),
(12, 4, 14, 1),
(13, 21, 14, 4),
(14, 4, 15, 3);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`);

--
-- Contraintes pour la table `produitcommande`
--
ALTER TABLE `produitcommande`
  ADD CONSTRAINT `produitcommande_ibfk_1` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id_commande`),
  ADD CONSTRAINT `produitcommande_ibfk_2` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
