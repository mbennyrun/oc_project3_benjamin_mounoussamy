-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 15 mai 2018 à 13:03
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db_oc_project_3`
--

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date_create` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `date_create`) VALUES
(1, 'Chapitre 1', 'Le premier chapitre.', '2018-04-20 10:00:00'),
(2, 'Chapitre 2', 'Le second chapitre.', '2018-04-20 11:00:00'),
(3, 'Chapitre 3', 'Le troisième chapitre.', '2018-04-20 12:00:00'),
(4, 'Chapitre 4', 'Le quatrième chapitre.', '2018-04-20 13:00:00'),
(5, 'Chapitre 5', 'Le cinquième chapitre.', '2018-04-20 14:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `posts_comments`
--

DROP TABLE IF EXISTS `posts_comments`;
CREATE TABLE IF NOT EXISTS `posts_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `posts_comments`
--

INSERT INTO `posts_comments` (`id`, `post_id`, `author`, `comment`, `comment_date`) VALUES
(1, 1, 'Lui', 'Bon début.', '2018-04-21 11:00:00'),
(2, 2, 'Lui', 'Moyen, vraiment pas terrible.', '2018-04-21 12:00:00'),
(5, 2, 'Elle', 'Correct.', '2018-05-05 13:45:56'),
(6, 4, 'Nous', 'Pas mal du tout, continue comme ça !', '2018-05-12 10:43:55'),
(7, 1, 'Elle', 'Courage.', '2018-05-12 12:52:28'),
(8, 3, 'Eux', 'Pas mal.', '2018-05-12 12:59:31'),
(10, 3, 'Lui', 'Nul à chier.', '2018-05-12 13:05:37');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
