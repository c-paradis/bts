-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le : Jeu 18 Octobre 2012 à 23:42
-- Version du serveur: 5.5.20
-- Version de PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `baserevues`
--
create database baserevues;
use baserevues;
-- --------------------------------------------------------

--
-- Structure de la table `revues`
--

CREATE TABLE IF NOT EXISTS `revues` (
  `IdRevue` int(11) NOT NULL AUTO_INCREMENT,
  `DesignationRevue` varchar(40) NOT NULL,
  `DureeAbonnement` int(11) NOT NULL,
  `TarifAbonnement` decimal(5,2) NOT NULL,
  `ImageRevue` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`IdRevue`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `revues`
--

INSERT INTO `revues` (`IdRevue`, `DesignationRevue`, `DureeAbonnement`, `TarifAbonnement`, `ImageRevue`) VALUES
(1, 'Automobile', 1, '23.00', 'Automobile.jpg'),
(2, 'Auto Moto', 1, '24.00', 'Auto_moto.jpg'),
(3, 'Auto Plus', 1, '75.00', 'Auto_plus.jpg'),
(4, 'BasketNews', 1, '99.00', 'BasketNews.jpg'),
(5, 'Déclic Pêche', 1, '34.00', 'declic_peche.jpg'),
(6, 'Equestrio', 1, '30.00', 'Equestrio.jpg'),
(7, 'F1 Racing', 1, '41.00', 'F1_racing.jpg'),
(8, 'France Football', 2, '200.00', 'France_football.jpg'),
(9, 'Le foot magazine', 2, '31.00', 'le_foot_magazine.jpg'),
(10, 'Le rugby magazine', 2, '39.00', 'Le_rugby_magazine.jpg'),
(11, 'Moto magazine', 1, '32.00', 'moto_magazine.jpg'),
(12, 'Plongée magazine', 2, '66.00', 'plongee_magazine.jpg'),
(13, 'Treck magazine', 1, '49.50', 'Treck_magazine.jpg'),
(14, 'Vraie chasse', 2, '54.00', 'Vraie_chasse.jpg'),
(15, 'Onze football', 1, '30.00', 'onze.jpg'),
(16, 'Sportmag', 2, '80.00', 'sportmag.jpg'),
(17, 'Skieur magazine', 1, '35.00', 'skieur_racine.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
