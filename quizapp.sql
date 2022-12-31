-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 31 déc. 2022 à 17:31
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `quizapp`
--

-- --------------------------------------------------------

--
-- Structure de la table `player`
--

CREATE TABLE `player` (
  `idPLayer` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `IP` varchar(255) NOT NULL,
  `OS` varchar(255) NOT NULL,
  `browser` varchar(255) NOT NULL,
  `datePlayer` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `qa`
--

CREATE TABLE `qa` (
  `id` int(11) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `choix1` varchar(255) DEFAULT NULL,
  `choix2` varchar(255) DEFAULT NULL,
  `choix3` varchar(255) DEFAULT NULL,
  `choix4` varchar(255) DEFAULT NULL,
  `correctAnswer` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `qa`
--

INSERT INTO `qa` (`id`, `question`, `choix1`, `choix2`, `choix3`, `choix4`, `correctAnswer`) VALUES
(1, 'Que signifie PHP?', 'Personal Home Page Hypertext Preprocessor', 'Pretext Hypertext Processor', 'Preprocessor Home Page', 'Pretext Hypertext Processor', 1),
(2, 'Que signifie PHP?', 'Personal Home Page Hypertext Preprocessor', 'Pretext Hypertext Processor', 'Preprocessor Home Page', 'Pretext Hypertext Processor', 1),
(3, 'Que signifie PHP?', 'Personal Home Page Hypertext Preprocessor', 'Pretext Hypertext Processor', 'Preprocessor Home Page', 'Pretext Hypertext Processor', 1),
(4, 'Que signifie PHP?', 'Personal Home Page Hypertext Preprocessor', 'Pretext Hypertext Processor', 'Preprocessor Home Page', 'Pretext Hypertext Processor', 1),
(5, 'Que signifie PHP?', 'Personal Home Page Hypertext Preprocessor', 'Pretext Hypertext Processor', 'Preprocessor Home Page', 'Pretext Hypertext Processor', 1),
(6, 'Que signifie PHP?', 'Personal Home Page Hypertext Preprocessor', 'Pretext Hypertext Processor', 'Preprocessor Home Page', 'Pretext Hypertext Processor', 1),
(7, 'Que signifie PHP?', 'Personal Home Page Hypertext Preprocessor', 'Pretext Hypertext Processor', 'Preprocessor Home Page', 'Pretext Hypertext Processor', 1),
(8, 'Que signifie PHP?', 'Personal Home Page Hypertext Preprocessor', 'Pretext Hypertext Processor', 'Preprocessor Home Page', 'Pretext Hypertext Processor', 1),
(9, 'Que signifie PHP?', 'Personal Home Page Hypertext Preprocessor', 'Pretext Hypertext Processor', 'Preprocessor Home Page', 'Pretext Hypertext Processor', 1),
(10, 'Que signifie PHP?', 'Personal Home Page Hypertext Preprocessor', 'Pretext Hypertext Processor', 'Preprocessor Home Page', 'Pretext Hypertext Processor', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `useranswers`
--

CREATE TABLE `useranswers` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `idQuestion` int(11) NOT NULL,
  `givenAnswer` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `player`
--
ALTER TABLE `player`
  ADD KEY `idPLayer` (`idPLayer`);

--
-- Index pour la table `qa`
--
ALTER TABLE `qa`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `useranswers`
--
ALTER TABLE `useranswers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `idQuestion` (`idQuestion`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `qa`
--
ALTER TABLE `qa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `useranswers`
--
ALTER TABLE `useranswers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `player_ibfk_1` FOREIGN KEY (`idPLayer`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `useranswers`
--
ALTER TABLE `useranswers`
  ADD CONSTRAINT `useranswers_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `useranswers_ibfk_2` FOREIGN KEY (`idQuestion`) REFERENCES `qa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
