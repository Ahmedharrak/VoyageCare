-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 26 juin 2019 à 12:21
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `voyage`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id` int(50) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `motpasse` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id`, `nom`, `motpasse`) VALUES
(1, 'voyagecar', 'voyagecar2019');

-- --------------------------------------------------------

--
-- Structure de la table `car`
--

CREATE TABLE `car` (
  `idCar` int(50) NOT NULL,
  `idDeplacement` int(50) NOT NULL,
  `type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `car`
--

INSERT INTO `car` (`idCar`, `idDeplacement`, `type`) VALUES
(92, 4, 'MAR'),
(110, 5, 'GRM'),
(120, 1, 'MAR'),
(330, 3, 'MAR'),
(350, 2, 'MAR'),
(590, 6, 'GRM'),
(1002, 7, 'GRM'),
(1010, 8, 'ITA'),
(1050, 9, 'ITA');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `idClient` int(20) NOT NULL,
  `Nom` varchar(100) DEFAULT NULL,
  `Prenom` varchar(100) DEFAULT NULL,
  `idDeplacement` int(50) DEFAULT NULL,
  `Numero` varchar(100) DEFAULT NULL,
  `Gmail` varchar(100) DEFAULT NULL,
  `Gsm` int(100) DEFAULT NULL,
  `Nbplace` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idClient`, `Nom`, `Prenom`, `idDeplacement`, `Numero`, `Gmail`, `Gsm`, `Nbplace`) VALUES
(43, 'raihani', 'zakaria', NULL, '12548', 'zakaria@gmail.com', 614853514, 1),
(44, 'karrak', 'ahmed', NULL, '1577', 'harrak@gmail.com', 1558, 1),
(45, 'raiahani', 'zaka', NULL, '1222', 'zaka@gmali.com', 1355, 2),
(46, 'abd', 'douib', NULL, '1225', 'ZAKA@GMAIL.COM', 32212, 3),
(47, 'zaka', 'rai', NULL, '125', 'zaka@gmail.com', 2222, 4),
(48, 'zakaria', 'ahmed', NULL, '1022', 'zineb@gmail.com', 1255, 5),
(49, 'zineb', 'fatmi', NULL, '0255', 'love@gmail.com', 222, 6);

-- --------------------------------------------------------

--
-- Structure de la table `conducteur`
--

CREATE TABLE `conducteur` (
  `idCar` int(50) NOT NULL,
  `numero` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `conducteur`
--

INSERT INTO `conducteur` (`idCar`, `numero`) VALUES
(92, 150),
(110, 1070),
(120, 1071),
(330, 1072),
(350, 1075),
(1002, 1080),
(1010, 1201),
(1050, 1210);

-- --------------------------------------------------------

--
-- Structure de la table `deplacement`
--

CREATE TABLE `deplacement` (
  `idDeplacement` int(50) NOT NULL,
  `villeDepart` varchar(15) NOT NULL,
  `villeArrive` varchar(15) NOT NULL,
  `heureDepart` varchar(15) NOT NULL,
  `heureArrive` varchar(15) NOT NULL,
  `prix` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `deplacement`
--

INSERT INTO `deplacement` (`idDeplacement`, `villeDepart`, `villeArrive`, `heureDepart`, `heureArrive`, `prix`) VALUES
(1, 'TÃ©touan', 'Tanger', '07:00h', '08:00h', '20dh'),
(2, 'Casablanca', 'TÃ©touan', '4:15h', '8:30h', '90dh'),
(3, 'Ouezzane', 'TÃ©touan', '11:45h', '13:30h', '55DH'),
(4, 'Rabat', 'MeknÃ©s', '14:45h', '17:45h', '80DH'),
(5, 'Laayoune', 'Casablanca', '5:00h', '4:15h', '250dh'),
(6, 'Oujda', 'Tanger', '10:45h', '15:45h', '120dh'),
(7, 'FÃ©s', 'Ouezzane', '9:15h', '12:00h', '35dh'),
(8, 'TÃ©touan', 'Tanger', '09:00h', '10:00h', '20dh'),
(9, 'TÃ©touan', 'Tanger', '16:45h', '17:45h', '20dh'),
(10, 'TETOUAN', 'TANGER', '10:00h', '10:00h', '20DH'),
(11, 'Tanger', 'Tétouan', '10:00h', '12:30h', '250dh'),
(12, 'Tanger', 'TÃ©touan', '10:00h', '17:45h', '20dh'),
(13, 'Tanger', 'TÃ©touan', '9:00h', '12:30h', '20dh'),
(14, 'Tanger', 'TÃ©touan', '11:45h', '12:35h', '25dh');

-- --------------------------------------------------------

--
-- Structure de la table `personnel`
--

CREATE TABLE `personnel` (
  `numero` int(50) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `prenom` varchar(15) NOT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `adresse` varchar(30) DEFAULT NULL,
  `age` char(50) DEFAULT NULL,
  `lieuetdatedenaissance` varchar(50) DEFAULT NULL,
  `gmail` char(50) DEFAULT NULL,
  `gener` char(50) DEFAULT NULL,
  `nationalite` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personnel`
--

INSERT INTO `personnel` (`numero`, `nom`, `prenom`, `telephone`, `adresse`, `age`, `lieuetdatedenaissance`, `gmail`, `gener`, `nationalite`) VALUES
(150, 'zakaria', 'raihani', '0676113436', 'ouezzane', '30ans', 'ouezzane', 'germany', 'zakaria@gmail.com', 'm'),
(1070, 'rai', 'zaka', '0612353615', 'tetouan', '20ans', 'tetouan', 'zakai@gmail.com', '', 'maroc'),
(1071, 'zouichi', 'hanae', '0676113254', 'ouezzane', '25 ans', '26/12/1996 ouezzane', 'maroc', 'hanae@gmail.com', 'F'),
(1072, 'ghaila', 'hind', '0721325548', 'tanger', '30 ans', '20/02/1993', 'maroc', 'hind@gmail.com', 'f'),
(1075, 'ghaylan', 'ayoub', '0762435851', 'fÃ©s', '28 ans', '25/11/1993 tetouan', 'maroc', 'ayoub@gmail.com', 'M'),
(1080, 'mloli', 'naser', '0676124555', 'tanger', '28 ans', '21/24/1980', '40 ans', 'M', 'german'),
(1201, 'fat', 'zaineb', '0671548545', 'tetouan', '23 ans', 'tetouan', 'zineb@gmail.com', 'F', 'maroc'),
(1210, 'khadir', 'barae', '0635184188', 'rachidia', '25 ans', '21/54/1990', 'barae@gmail.com', 'M', 'maroc'),
(1230, 'khawdar', 'yassir', '076254865', 'kesar', '36 ans', 'kesar', 'yassir@gmail.com', 'M', 'maroc'),
(1300, 'lafac', 'hafsa', '0736253698', 'mhanech', '24 ans', 'tetouan', 'hafsa@gmail.com', 'F', 'maroc');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `idReservation` int(50) NOT NULL,
  `idDeplacement` int(50) NOT NULL,
  `date` date DEFAULT NULL,
  `DNaiss` date DEFAULT NULL,
  `confirme` tinyint(1) DEFAULT NULL,
  `annule` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`idCar`),
  ADD KEY `idDeplacement` (`idDeplacement`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idClient`),
  ADD KEY `idDeplacement` (`idDeplacement`);

--
-- Index pour la table `conducteur`
--
ALTER TABLE `conducteur`
  ADD PRIMARY KEY (`numero`),
  ADD KEY `idCar` (`idCar`);

--
-- Index pour la table `deplacement`
--
ALTER TABLE `deplacement`
  ADD PRIMARY KEY (`idDeplacement`);

--
-- Index pour la table `personnel`
--
ALTER TABLE `personnel`
  ADD PRIMARY KEY (`numero`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`idReservation`),
  ADD KEY `idDeplacement` (`idDeplacement`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `idClient` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `car_ibfk_1` FOREIGN KEY (`idDeplacement`) REFERENCES `deplacement` (`idDeplacement`),
  ADD CONSTRAINT `car_ibfk_2` FOREIGN KEY (`idDeplacement`) REFERENCES `deplacement` (`idDeplacement`) ON DELETE CASCADE;

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`idDeplacement`) REFERENCES `deplacement` (`idDeplacement`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Contraintes pour la table `conducteur`
--
ALTER TABLE `conducteur`
  ADD CONSTRAINT `conducteur_ibfk_1` FOREIGN KEY (`idCar`) REFERENCES `car` (`idCar`),
  ADD CONSTRAINT `conducteur_ibfk_2` FOREIGN KEY (`numero`) REFERENCES `personnel` (`numero`),
  ADD CONSTRAINT `conducteur_ibfk_3` FOREIGN KEY (`idCar`) REFERENCES `car` (`idCar`) ON DELETE CASCADE,
  ADD CONSTRAINT `conducteur_ibfk_4` FOREIGN KEY (`numero`) REFERENCES `personnel` (`numero`) ON DELETE CASCADE;

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`idDeplacement`) REFERENCES `deplacement` (`idDeplacement`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
