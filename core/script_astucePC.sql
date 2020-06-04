-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 04 Juin 2020 à 09:11
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `astucepcv2`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualites`
--

CREATE TABLE IF NOT EXISTS `actualites` (
  `actuRef` int(11) NOT NULL AUTO_INCREMENT,
  `texteActu` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`actuRef`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `actualites`
--

INSERT INTO `actualites` (`actuRef`, `texteActu`) VALUES
(1, 'BlaBla bvdkibjk');

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminRef` int(11) NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(50) DEFAULT NULL,
  `mdp` varchar(100) DEFAULT NULL,
  `actuRef` int(11) DEFAULT NULL,
  PRIMARY KEY (`adminRef`),
  KEY `actuRef` (`actuRef`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`adminRef`, `identifiant`, `mdp`, `actuRef`) VALUES
(1, 'admin', '$2y$10$wPRqdG9UXD3BhjUN1cuRA.Y.CX.AbZUKX7pAOd84fM8kqSQf63p5u', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `clientRef` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `mdp` varchar(50) DEFAULT NULL,
  `telephone` varchar(10) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `rue` varchar(100) DEFAULT NULL,
  `cp` int(11) DEFAULT NULL,
  PRIMARY KEY (`clientRef`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contactRef` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `telephone` varchar(10) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`contactRef`),
  UNIQUE KEY `telephone` (`telephone`),
  UNIQUE KEY `mail` (`mail`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`contactRef`, `nom`, `prenom`, `telephone`, `mail`) VALUES
(10, 'Blandin', 'Lucas', '0781542010', 'lucasblandin@hotmail.fr'),
(12, 'Blandin', 'Lucas', '0615234710', 'delasalle.sio.blandin.l@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `familleproduits`
--

CREATE TABLE IF NOT EXISTS `familleproduits` (
  `famillePdtRef` int(11) NOT NULL AUTO_INCREMENT,
  `famillePdtLibelle` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`famillePdtRef`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `familleproduits`
--

INSERT INTO `familleproduits` (`famillePdtRef`, `famillePdtLibelle`) VALUES
(1, 'PCFixe'),
(2, 'PCPortable'),
(3, 'PiecesDetachees');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `pdtRef` int(11) NOT NULL AUTO_INCREMENT,
  `pdtLibelle` varchar(100) DEFAULT NULL,
  `pdtDescription` varchar(255) NOT NULL,
  `pdtPrix` decimal(5,2) DEFAULT NULL,
  `pdtImage` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `famillePdtLibelle` varchar(50) NOT NULL,
  `pdtCategorie` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `pdtSousCategorie` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`pdtRef`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`pdtRef`, `pdtLibelle`, `pdtDescription`, `pdtPrix`, `pdtImage`, `famillePdtLibelle`, `pdtCategorie`, `pdtSousCategorie`) VALUES
(1, 'Boitier Spint of Gamer ROGUE II ATX', 'Blabla', '62.00', 'Spint', 'PiecesDetachées', 'Boitiers', 'NULL\r\n'),
(2, 'Boitier Heden Smart Micro ATX', 'Blabla', '50.00', 'Heden', 'PiecesDetachées', 'Boitiers', 'NULL\r\n'),
(3, 'Boitier ANTEC VSK 3000', 'Blabla', '40.00', 'Antec', 'PiecesDetachées', 'Boitiers', 'NULL\r\n'),
(4, 'Boitier Cooler Master N 300', 'Blabla', '45.00', 'CoolerMaster300', 'PiecesDetachées', 'Boitiers', 'NULL\r\n'),
(5, 'Boitier Cooler Master N 200', 'Blabla', '50.00', 'CoolerMaster200', 'PiecesDetachées', 'Boitiers', 'NULL\r\n');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`actuRef`) REFERENCES `actualites` (`actuRef`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
