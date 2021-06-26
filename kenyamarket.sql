-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 04 jan. 2021 à 12:03
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `kenyamarket`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `numero` int(5) NOT NULL,
  `utilisateur_idutilisateur` int(11) NOT NULL,
  `login` varchar(16) NOT NULL,
  `pwd` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`idAdmin`, `numero`, `utilisateur_idutilisateur`, `login`, `pwd`) VALUES
(1, 9878787, 1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

CREATE TABLE `agent` (
  `idagent` int(11) NOT NULL,
  `adresse` varchar(545) DEFAULT NULL,
  `utilisateur_idutilisateur` int(11) NOT NULL,
  `matricule` varchar(16) NOT NULL,
  `pwd` varchar(16) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `agent`
--

INSERT INTO `agent` (`idagent`, `adresse`, `utilisateur_idutilisateur`, `matricule`, `pwd`, `phone`) VALUES
(1, 'arno@gmail.com', 2, 'arnold', 'arnold', '+243974070832');

-- --------------------------------------------------------

--
-- Structure de la table `attribution`
--

CREATE TABLE `attribution` (
  `idattribution` int(11) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` varchar(45) DEFAULT NULL,
  `agent_idagent` int(11) NOT NULL,
  `vendeur_idvendeur` int(11) NOT NULL,
  `Place_idPlace` int(11) NOT NULL,
  `etat` int(11) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `attribution`
--

INSERT INTO `attribution` (`idattribution`, `date_debut`, `date_fin`, `agent_idagent`, `vendeur_idvendeur`, `Place_idPlace`, `etat`, `state`) VALUES
(1, '2020-12-10', '2020-12-31', 1, 5, 1, 1, 1),
(3, '2020-12-10', '2020-12-31', 1, 6, 3, 1, 1),
(4, '2020-12-20', '2021-01-10', 1, 7, 4, 1, 0),
(6, '2020-12-10', '2021-01-10', 1, 2, 6, 1, 0),
(7, '2021-01-04', '2021-01-08', 1, 8, 7, 1, 0),
(8, '2021-01-04', '2021-01-14', 1, 9, 8, 0, 0),
(9, '2021-01-04', '2021-01-08', 1, 10, 9, 0, 0),
(10, '2021-01-04', '2021-01-08', 1, 11, 10, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `idcategorie` int(11) NOT NULL,
  `titre` varchar(45) NOT NULL,
  `descriptions` varchar(545) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`idcategorie`, `titre`, `descriptions`) VALUES
(1, 'nkombo', '<jgvwwsdvsdsvxsh,bsq dklsqegcdfg'),
(2, 'bitoyo', 'fghgj');

-- --------------------------------------------------------

--
-- Structure de la table `emplacement`
--

CREATE TABLE `emplacement` (
  `idemplacement` int(11) NOT NULL,
  `definition` varchar(45) NOT NULL,
  `nbreMaxP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `emplacement`
--

INSERT INTO `emplacement` (`idemplacement`, `definition`, `nbreMaxP`) VALUES
(1, 'mitwaba', 10),
(2, 'ndugu', 20),
(5, 'lubumbashi', 20),
(6, 'de l\'eglise', 78);

-- --------------------------------------------------------

--
-- Structure de la table `place`
--

CREATE TABLE `place` (
  `idPlace` int(11) NOT NULL,
  `description` varchar(45) NOT NULL,
  `emplacement_idemplacement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `place`
--

INSERT INTO `place` (`idPlace`, `description`, `emplacement_idemplacement`) VALUES
(1, '1', 1),
(3, '2', 1),
(4, '3', 1),
(6, '1', 1),
(7, '1', 6),
(8, '1', 6),
(9, '1', 6),
(10, '1', 6);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idutilisateur` int(11) NOT NULL,
  `nom` varchar(145) NOT NULL,
  `email` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idutilisateur`, `nom`, `email`) VALUES
(1, 'admin', 'admin@gmail.com\r\n'),
(2, 'arnold', 'dann@gmail.com'),
(4, 'allegra KAMWANG', '16kk106@esisalama.org'),
(8, 'Petra', 'prisca@gmail.com'),
(9, 'kapinga raissa', 'dann@gmail.com'),
(10, 'Kanyoko prince', 'dann@gmail.com'),
(11, 'serge', 'dann@gmail.com'),
(12, 'tshibala', 'prisca@gmail.com'),
(13, 'kamba', 'danno@gmail.com'),
(14, 'bruce', 'dannp@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `vendeur`
--

CREATE TABLE `vendeur` (
  `idvendeur` int(11) NOT NULL,
  `matricule` varchar(45) NOT NULL,
  `pwd` varchar(45) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `adresse` varchar(145) NOT NULL,
  `categorie_idcategorie` int(11) NOT NULL,
  `utilisateur_idutilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vendeur`
--

INSERT INTO `vendeur` (`idvendeur`, `matricule`, `pwd`, `phone`, `adresse`, `categorie_idcategorie`, `utilisateur_idutilisateur`) VALUES
(2, 'allegra', '', '22222222', '32 av du carmel gamella2', 2, 4),
(5, '16KK101', '', '+243974070832', '32 av du carmel gamella2', 1, 8),
(6, '16KK1012', '', '22222222', '32 av du carmel gamella2', 1, 9),
(7, 'kammba', '', '9009988888', '32 av du carmel gamella3', 1, 10),
(8, '16KK112', '', '+243974070832', 'qdndjdqldglkcgdfgnhcfk', 1, 11),
(9, '16KK1081', '', '+243974070832', '21 av:nyembo Q:gambela 3 C: lubumbashi', 2, 12),
(10, '14kkjk', '', '+243974070832', '21 av:nyembo Q:gambela 3 C: lubumbashi', 2, 13),
(11, '16KK111', '', '+243974070832', '1kjndxddjolchofhcdfhdn', 2, 14);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`),
  ADD KEY `fk_Admin_utilisateur1_idx` (`utilisateur_idutilisateur`);

--
-- Index pour la table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`idagent`),
  ADD KEY `fk_agent_utilisateur1_idx` (`utilisateur_idutilisateur`);

--
-- Index pour la table `attribution`
--
ALTER TABLE `attribution`
  ADD PRIMARY KEY (`idattribution`),
  ADD KEY `fk_attribution_agent1_idx` (`agent_idagent`),
  ADD KEY `fk_attribution_vendeur1_idx` (`vendeur_idvendeur`),
  ADD KEY `fk_attribution_Place1_idx` (`Place_idPlace`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idcategorie`);

--
-- Index pour la table `emplacement`
--
ALTER TABLE `emplacement`
  ADD PRIMARY KEY (`idemplacement`);

--
-- Index pour la table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`idPlace`),
  ADD KEY `fk_Place_emplacement1_idx` (`emplacement_idemplacement`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idutilisateur`);

--
-- Index pour la table `vendeur`
--
ALTER TABLE `vendeur`
  ADD PRIMARY KEY (`idvendeur`),
  ADD KEY `fk_vendeur_categorie1_idx` (`categorie_idcategorie`),
  ADD KEY `fk_vendeur_utilisateur1_idx` (`utilisateur_idutilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `agent`
--
ALTER TABLE `agent`
  MODIFY `idagent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `attribution`
--
ALTER TABLE `attribution`
  MODIFY `idattribution` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idcategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `emplacement`
--
ALTER TABLE `emplacement`
  MODIFY `idemplacement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `place`
--
ALTER TABLE `place`
  MODIFY `idPlace` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idutilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `vendeur`
--
ALTER TABLE `vendeur`
  MODIFY `idvendeur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `fk_Admin_utilisateur1` FOREIGN KEY (`utilisateur_idutilisateur`) REFERENCES `utilisateur` (`idutilisateur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `agent`
--
ALTER TABLE `agent`
  ADD CONSTRAINT `fk_agent_utilisateur1` FOREIGN KEY (`utilisateur_idutilisateur`) REFERENCES `utilisateur` (`idutilisateur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `attribution`
--
ALTER TABLE `attribution`
  ADD CONSTRAINT `fk_attribution_Place1` FOREIGN KEY (`Place_idPlace`) REFERENCES `place` (`idPlace`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_attribution_agent1` FOREIGN KEY (`agent_idagent`) REFERENCES `agent` (`idagent`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_attribution_vendeur1` FOREIGN KEY (`vendeur_idvendeur`) REFERENCES `vendeur` (`idvendeur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `place`
--
ALTER TABLE `place`
  ADD CONSTRAINT `fk_Place_emplacement1` FOREIGN KEY (`emplacement_idemplacement`) REFERENCES `emplacement` (`idemplacement`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `vendeur`
--
ALTER TABLE `vendeur`
  ADD CONSTRAINT `fk_vendeur_categorie1` FOREIGN KEY (`categorie_idcategorie`) REFERENCES `categorie` (`idcategorie`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vendeur_utilisateur1` FOREIGN KEY (`utilisateur_idutilisateur`) REFERENCES `utilisateur` (`idutilisateur`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
