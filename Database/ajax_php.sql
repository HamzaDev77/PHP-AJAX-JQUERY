-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 20 sep. 2021 à 20:03
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ajax_php`
--

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

DROP TABLE IF EXISTS `profil`;
CREATE TABLE IF NOT EXISTS `profil` (
  `id` int NOT NULL AUTO_INCREMENT,
  `adm_nom` varchar(150) COLLATE utf8_bin NOT NULL,
  `adm_prenom` varchar(150) COLLATE utf8_bin NOT NULL,
  `adm_email` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `profession` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT 'Administrator',
  `login` varchar(150) COLLATE utf8_bin NOT NULL,
  `passwrd` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_s` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `adm_email` (`adm_email`),
  KEY `id` (`id`),
  KEY `id_s` (`id_s`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `profil`
--

INSERT INTO `profil` (`id`, `adm_nom`, `adm_prenom`, `adm_email`, `profession`, `login`, `passwrd`, `id_s`) VALUES
(1, 'Lahbabi', 'Ahmed7', 'huge77@php.net', 'Administrator', 'hulk', '88ea39439e74fa27c09a4fc0bc8ebe6d00978392', 1),
(20, 'Zillan', 'Ilham', 'zilhamou@lioniste.net', 'Femme au Foyer', 'Hilight77', '4b9eaeba58ee4cbef655e3bc8c6c361ab35d7a29', 1),
(21, 'lahbabi', 'Mohamed', 'hamza.lahbabi1991@gmail.com', 'Guide', 'Med5968', 'c93205f06b5bf79368d8e7f2ef19e249fb2faaf3', 4),
(23, 'Lahbabi', 'Hamza', 'hamza.lahbabi22@gmail.com', 'Ingénieur', 'Lioniste8', 'cd374733db1618fd9318ace3c6c9a6749624197a', 4);

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id_s` int NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf32_bin NOT NULL,
  `number_emp` int NOT NULL,
  PRIMARY KEY (`id_s`),
  KEY `service` (`id_s`) USING BTREE,
  KEY `id` (`id_s`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id_s`, `name`, `number_emp`) VALUES
(1, 'Administration', 2),
(2, 'Marketing', 0),
(3, 'Production', 0),
(4, 'Developpement', 2),
(5, 'IT', 0),
(6, 'Cleaning', 0);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `profil`
--
ALTER TABLE `profil`
  ADD CONSTRAINT `id_s` FOREIGN KEY (`id_s`) REFERENCES `services` (`id_s`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
