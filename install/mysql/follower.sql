-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le : Mar 15 Mai 2012 à 18:32
-- Version du serveur: 5.5.20
-- Version de PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `follower`
--

-- --------------------------------------------------------

--
-- Structure de la table `flux`
--

CREATE TABLE IF NOT EXISTS `flux` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_link` mediumint(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `readen_date` datetime NOT NULL,
  `status` enum('NEW','ARCHIVE') NOT NULL,
  `information` enum('CHANGE','404','NOLINK') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `id` mediumint(11) NOT NULL AUTO_INCREMENT,
  `id_page` mediumint(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `checked_date` datetime NOT NULL,
  `source` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` mediumint(11) NOT NULL AUTO_INCREMENT,
  `id_site` mediumint(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `sites`
--

CREATE TABLE IF NOT EXISTS `sites` (
  `id` mediumint(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
