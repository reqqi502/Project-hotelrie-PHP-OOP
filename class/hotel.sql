-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 22 nov. 2020 à 07:07
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hotel-bio`
--

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `iduser` int(11) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telephone` int(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `statu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`iduser`, `nom`, `prenom`, `email`, `telephone`, `password`, `statu`) VALUES
(1, 'akramrq', 'akram', 'akram.rq@gmail.com', 682406317, '000012', 'admin'),
(2, 'akram', 'reqqi', 'akram.rq.12@gmail.com', 682406317, '0000', 'user'),
(3, 'sjobs@apple.com', 'reqqi', 'sjobs@apple.com', 615644280, '123', 'user');

-- --------------------------------------------------------

--
-- Structure de la table `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `nom` varchar(1000) DEFAULT NULL,
  `prix` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `offers`
--

INSERT INTO `offers` (`id`, `image`, `date`, `nom`, `prix`) VALUES
(1, 'CM-plats-05.png', '2020-11-21', 'tajine poulet', 30),
(2, 'CM-plats-04.png', '2020-11-21', 'tajine poulet', 30),
(3, 'la-buvette-poulet-vietnamien.jpeg', '2020-11-21', 'plat vietnamie', 30),
(4, 'la-buvette-couscous.jpeg', '2020-11-21', 'couscous', 30),
(5, 'la-buvette-Penne-poulet-hampignons.png', '2020-11-21', 'poulet-hampignions', 40),
(6, 'la-buvette-brochettes-de-poulet.jpeg', '2020-11-21', 'brochettes-de-poulet', 30),
(7, 'la-buvette-sandwich-poulet.jpeg', '2020-11-21', 'sandwich-poulet', 25),
(8, 'la-buvette-sandwich-thon.jpeg', '2020-11-21', 'sandwich-thon', 20),
(9, 'la-buvette-sandwiche-jambon-fromage.jpeg', '2020-11-21', 'sandwich-jambon-fromage', 20),
(10, 'la-buvette-sandwich-kebab.jpeg', '2020-11-21', 'sandwich-kebab', 25),
(11, 'la-buvette-sandwiche-burger-poulet.png', '2020-11-21', 'sandwich-burger', 25),
(12, 'la-buvette-sandwich-chawarma.jpeg', '2020-11-21', 'sandwich-chawarma', 25),
(13, 'Chocolat-Oreo.jpg', '2020-11-21', 'chocolat-oreo', 50),
(14, 'la-buvette-sandwiche-suprem-poulet.png', '2020-11-21', 'sandwich-suprem-poulet', 25),
(15, 'Panna-cotta.jpg', '2020-11-21', 'cotta', 15),
(16, 'Mahalabia.jpg', '2020-11-21', 'mahalabia', 30);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `idReservation` int(11) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `naissance` date DEFAULT NULL,
  `sex` varchar(100) DEFAULT NULL,
  `Ncarte` int(100) DEFAULT NULL,
  `CartCvc` int(100) DEFAULT NULL,
  `IdOffers` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`idReservation`, `nom`, `prenom`, `email`, `naissance`, `sex`, `Ncarte`, `CartCvc`, `IdOffers`) VALUES
(1, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-31', 'male', 12345097, 1234, 4),
(20, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-09', 'male', 12345097, 1234, 4),
(23, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-16', 'male', 12345097, 1234, 4),
(24, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-08', 'male', 12345097, 1234, 4),
(25, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-17', 'male', 12345097, 1234, 4),
(26, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-09', 'male', 12345097, 1234, 4),
(27, '11', 'akram', 'reqqi', '0000-00-00', '2020-10-10', 0, 12345097, 4),
(28, '11', 'akram', 'reqqi', '0000-00-00', '2020-10-10', 0, 12345097, 4),
(29, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-10', 'male', 12345097, 1234, 4),
(30, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-16', 'male', 12345097, 1234, 4),
(31, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-10', 'male', 12345097, 1234, 4),
(32, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-03', 'male', 12345097, 1234, 4),
(33, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-22', 'male', 12345097, 1234, 4),
(34, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-23', 'male', 12345097, 1234, 4),
(35, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-03', 'male', 12345097, 1234, 4),
(36, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-10', 'femal', 12345097, 1234, 4),
(37, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-08', 'male', 12345, 1234, 4),
(38, 'akram', 'reqqi', 'akram.rq.645@gmail.com', '2020-10-08', 'male', 12345097, 1234, 4),
(39, 'akram', 'reqqi', 'akram.rq.645@gmail.com', '2020-10-08', 'male', 12345097, 1234, 4),
(40, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-23', 'male', 12345097, 1234, 4),
(41, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-01', 'male', 12345097, 1234, 4),
(42, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-03', 'male', 12345, 1234, 4),
(43, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-30', 'male', 12345097, 1234, 1),
(44, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-23', 'male', 12345097, 1234, 1),
(45, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-22', 'male', 12345097, 1234, 1),
(46, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-22', 'male', 12345097, 1234, 1),
(47, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-22', 'male', 12345097, 1234, 1),
(48, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-10', 'male', 12345097, 1234, 1),
(49, 'akram', 'reqqi', 'akram.rq.645@apple.com', '2020-10-17', 'male', 12345097, 1234, 1),
(50, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-08', 'male', 12345097, 1234, 1),
(51, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-08', 'male', 12345097, 1234, 1),
(52, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-08', 'male', 12345097, 1234, 1),
(53, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-08', 'male', 12345097, 1234, 1),
(54, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-08', 'male', 12345097, 1234, 1),
(55, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-08', 'male', 12345097, 1234, 1),
(56, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-08', 'male', 12345097, 1234, 1),
(57, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-08', 'male', 12345097, 1234, 1),
(58, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-08', 'male', 12345097, 1234, 1),
(59, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-08', 'male', 12345097, 1234, 1),
(60, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-08', 'male', 12345097, 1234, 1),
(61, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-08', 'male', 12345097, 1234, 1),
(62, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-08', 'male', 12345097, 1234, 1),
(63, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-03', 'male', 12345, 1234, 1),
(64, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-03', 'male', 12345, 1234, 1),
(65, 'akram', 'reqqi', 'sjobs@apple.com', '2020-10-03', 'male', 12345, 1234, 1),
(66, '', '', '', '0000-00-00', '', 0, 0, 1),
(67, '', '', '', '0000-00-00', '', 0, 0, 1),
(68, 'akram', 'reqqi', 'akram.rq.645@gmail.com', '2020-11-05', 'male', 12345097, 1234, 1),
(69, 'akram', 'reqqi', 'sjobs@apple.com', '2020-11-27', 'male', 12345097, 1234, 4),
(70, 'akram', 'reqqi', 'sjobs@apple.com', '2020-11-06', 'male', 12345097, 1234, 2),
(71, 'akram', 'reqqi', 'sjobs@apple.com', '2020-11-13', 'male', 12345097, 1234, 1),
(72, 'akram', 'reqqi', 'akram.rq.645@gmail.com', '2020-11-11', 'male', 12345097, 1234, 1),
(73, 'akram', 'reqqi', 'sjobs@apple.com', '2020-11-27', 'male', 12345097, 1234, 1),
(74, 'akram', 'reqqi', 'akram.rq.645@gmail.com', '2020-11-20', 'male', 12345097, 1234, 1),
(75, 'akram', 'reqqi', 'sjobs@apple.com', '2020-11-19', 'male', 12345097, 1234, 1),
(76, 'akram', 'reqqi', 'sjobs@apple.com', '2020-11-11', 'male', 12345097, 1234, 1),
(77, 'akram', 'reqqi', 'akram.rq.645@gmail.com', '2020-11-13', 'femal', 12345097, 1234, 1),
(78, 'akram', 'reqqi', 'akram.rq.645@gmail.com', '2020-11-11', 'male', 12345, 1234, 1),
(79, 'akram', 'reqqi', 'akram.rq.645@gmail.com', '2020-11-06', 'male', 12345097, 1234, 1),
(80, 'akram', 'reqqi', 'akram.rq.645@gmail.com', '2020-11-10', 'male', 12345, 1234, 2),
(81, 'akram', 'reqqi', 'akram.rq.645@gmail.com', '2020-11-11', 'male', 12345097, 1234, 1),
(82, 'akram', 'reqqi', 'sjobs@apple.com', '2020-11-26', 'male', 12345097, 123, 1),
(83, 'akram', 'reqqi', 'akram.rq.645@gmail.com', '2020-11-11', 'male', 12345097, 1234, 1),
(84, 'akram', 'reqqi', 'akram.rq.645@gmail.com', '2020-11-11', 'male', 12345097, 1234, 1),
(85, 'akram', 'reqqi', 'akram.rq.645@gmail.com', '2020-11-11', 'male', 1234567, 123, 1),
(86, 'akram', 'reqqi', 'sjobs@apple.com', '2020-11-11', 'male', 12345, 1234, 4),
(87, 'akram', 'reqqi', 'akram.rq.645@gmail.com', '2020-11-11', 'male', 12345097, 123, 11),
(88, 'akram', 'reqqi', 'sjobs@apple.com', '2020-11-11', 'male', 12345097, 1234, 1),
(89, 'akram', 'reqqi', 'akram.rq.645@gmail.com', '2020-11-04', 'male', 12345097, 1234, 1),
(90, 'akram', 'reqqi', 'sjobs@apple.com', '2020-11-06', 'male', 12345097, 123, 0),
(91, 'akram', 'reqqi', 'akram.rq.645@gmail.com', '2020-11-11', 'male', 12345097, 123, 10),
(92, 'akram', 'reqqi', 'sjobs@apple.com', '2020-11-11', 'male', 12345097, 1234, 1),
(93, 'akram', 'reqqi', 'sjobs@apple.com', '2020-11-11', 'male', 12345097, 123, 1),
(94, 'akram', 'reqqi', 'akram.rq.645@gmail.com', '2020-11-11', 'male', 12345097, 123, 3),
(95, 'akram', 'reqqi', 'akram.rq.645@gmail.com', '2020-11-11', 'male', 12345097, 123, 7),
(96, 'akram', 'reqqi', 'akram.rq.645@gmail.com', '2020-11-11', 'male', 12345097, 123, 4),
(97, 'akram', 'reqqi', 'akram.rq.645@gmail.com', '2020-11-11', 'male', 12345097, 123, 4),
(98, 'akram', 'reqqi', 'akram.rq.645@gmail.com', '2020-11-11', 'male', 12345097, 123, 1),
(99, 'akram', 'reqqi', 'akram.rq.645@gmail.com', '2020-11-11', 'male', 12345097, 123, 4),
(100, 'akram', 'reqqi', 'akram.rq.645@gmail.com', '2020-11-11', 'male', 12345097, 123, 4),
(101, 'akram', 'reqqi', 'akram.rq.645@gmail.com', '2020-11-11', 'male', 12345097, 123, 2),
(102, 'akram', 'reqqi', 'akram.rq.645@gmail.com', '2020-11-11', 'male', 12345097, 123, 3),
(103, 'akram', 'reqqi', 'akram.rq.645@gmail.com', '2020-11-11', 'male', 12345097, 123, 2),
(104, 'akram', 'reqqi', 'akram.rq.645@gmail.com', '2020-11-18', 'male', 12345097, 123, 2),
(105, 'akram', 'reqqi', 'akram.rq.645@gmail.com', '2020-11-11', 'male', 12345097, 1234, 1),
(106, 'akram', 'reqqi', 'akram.rq.645@gmail.com', '2020-11-11', 'male', 12345097, 1234, 1),
(107, 'akram', 'reqqi', 'akram.rq.645@gmail.com', '2020-11-04', 'male', 12345, 1234, 1);

-- --------------------------------------------------------

--
-- Structure de la table `semail`
--

CREATE TABLE `semail` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `semail`
--

INSERT INTO `semail` (`id`, `email`) VALUES
(1, 'akram.rq.645@gmail.com'),
(2, 'akram.rq.12@gmail.com'),
(3, 'email@gmail.com'),
(4, 'sjobs@apple.com'),
(5, '.akram.rq.645@gmail.com.'),
(6, '..'),
(7, '..'),
(8, '..'),
(9, '..'),
(10, '..'),
(11, '..'),
(12, '..'),
(13, '..'),
(14, '..'),
(15, '..'),
(16, '..'),
(17, '..'),
(18, '..'),
(19, '..'),
(20, '..');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`iduser`);

--
-- Index pour la table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`idReservation`);

--
-- Index pour la table `semail`
--
ALTER TABLE `semail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `idReservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT pour la table `semail`
--
ALTER TABLE `semail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
