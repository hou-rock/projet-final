-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Jeu 10 Janvier 2013 à 10:14
-- Version du serveur: 5.5.27-log
-- Version de PHP: 5.4.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";  
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `bmw`
--

-- --------------------------------------------------------

--
-- Structure de la table `authentification`
--

CREATE TABLE IF NOT EXISTS `authentification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `authentification`
--

INSERT INTO `authentification` (`id`, `username`, `password`) VALUES
(1, 'hatem', '123');

-- --------------------------------------------------------

--
-- Structure de la table `automobile`
--

CREATE TABLE IF NOT EXISTS `automobile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_prod` varchar(50) NOT NULL,
  `photo_prod` varchar(50) NOT NULL,
  `reference_prod` varchar(50) NOT NULL,
  `designe_prod` varchar(50) NOT NULL,
  `prix` int(50) NOT NULL,
  `info` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `automobile`
--

INSERT INTO `automobile` (`id`, `nom_prod`, `photo_prod`, `reference_prod`, `designe_prod`, `prix`, `info`) VALUES
(10, 'dfhd', 'BMW4.png', 'dfhd', 'dghdgh', 7867637, 'gjkfjf'),
(11, 'BMW6', '', 'x5', 'fsdgdfg', 4534, ' racem bmw');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_cat` varchar(50) NOT NULL,
  `desc` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cin_clt` int(9) NOT NULL,
  `nom_clt` varchar(50) NOT NULL,
  `prenom_clt` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `adresse_clt` varchar(100) NOT NULL,
  `tel_clt` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id`, `cin_clt`, `nom_clt`, `prenom_clt`, `password`, `email`, `adresse_clt`, `tel_clt`) VALUES
(1, 9291925, 'hatem', 'hadrich', 'ess', 'bmw@yahoo.com', 'ruemazoun', 24740260),
(2, 9291925, 'hatem', 'hadrich', 'ess', 'bmw@yahoo.com', 'ruemazoun', 0),
(3, 9291925, 'hatem', 'hadrich', 'ess', 'bmw@yahoo.com', 'ruemazoun', 24740260);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `id_comd` int(11) NOT NULL AUTO_INCREMENT,
  `num_comd` int(11) NOT NULL,
  `date_comd` date NOT NULL,
  PRIMARY KEY (`id_comd`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `raison` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`id`, `Nom`, `email`, `phone`, `raison`, `message`) VALUES
(1, 'hatem', 'bmw@yahoo.com', '24740260', 'pour quelque information', 'merci');

-- --------------------------------------------------------

--
-- Structure de la table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `gallery`
--

INSERT INTO `gallery` (`id`, `photo`, `Description`) VALUES
(1, 'BMW2.png', 'Bmw 2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
