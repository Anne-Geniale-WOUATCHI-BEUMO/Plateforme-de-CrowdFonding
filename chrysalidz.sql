-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 09 août 2021 à 21:48
-- Version du serveur : 5.7.26
-- Version de PHP : 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `chrysalidz`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(100) NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `Sujet` varchar(100) NOT NULL,
  `Messages` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`Id`, `Nom`, `Mail`, `Sujet`, `Messages`) VALUES
(1, 'Franck Kevin NGANSO KEMADJOU', 'anicetjohannengansodjango@gmail.com', 'Avis', 'Ravi de votre travail'),
(2, 'GIN', 'genialebeumo@gmail.com', 'Besoin d\'orientation', 'Besoin d\'orientation!');

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(100) NOT NULL,
  `Prenom` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mdp` varchar(100) NOT NULL,
  `DateNaissance` date NOT NULL,
  `NumTel` varchar(15) NOT NULL,
  `Sexe` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`Id`, `Nom`, `Prenom`, `Email`, `Mdp`, `DateNaissance`, `NumTel`, `Sexe`) VALUES
(1, 'Nganso Django', 'Anicet Johanne', 'anicetjohannengansodjango@gmail.com', 'Anicet', '2021-08-06', '654888311', 'Male'),
(2, 'WOUATCHI BEUMO', 'Anne Geniale', 'anne@gmail.com', 'anne', '2021-08-15', '683908725', 'Female'),
(3, 'KAMGA', 'JUNIOR', 'kg@gmail.com', 'kg', '2021-08-12', '+237 683 90873 ', 'Male'),
(4, 'KAMENI', 'LUC', 'kameni@gmail.com', 'luc', '2021-08-22', '684878990', 'Male'),
(5, 'BEUMO', 'anne', 'genialebeumo@gmail.com', 'gin', '2021-08-21', '222222222333222', 'Female');

-- --------------------------------------------------------

--
-- Structure de la table `financer`
--

CREATE TABLE `financer` (
  `Id` int(11) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `NomEntreprise` varchar(50) NOT NULL,
  `NomParticulier` varchar(100) NOT NULL,
  `Prenom` text NOT NULL,
  `Montant` text NOT NULL,
  `Paiement` varchar(50) NOT NULL,
  `Tel` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `NomProjet` varchar(50) NOT NULL,
  `Categorie` varchar(50) NOT NULL,
  `Datesoumission` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `financer`
--

INSERT INTO `financer` (`Id`, `Status`, `NomEntreprise`, `NomParticulier`, `Prenom`, `Montant`, `Paiement`, `Tel`, `Date`, `NomProjet`, `Categorie`, `Datesoumission`) VALUES
(1, 'Entreprise', 'WiBAG', 'WOUATCHI BEUMO', 'Anne Geniale', '1.000.000 Fcfa', 'Mtn Money', '+237 683908725', '2021-08-09', 'Chambis', 'Numérique', '2021-08-08 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE `projets` (
  `Idp` int(11) NOT NULL,
  `Nom` varchar(100) NOT NULL,
  `Prenom` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mdp` varchar(100) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `NomProjet` varchar(100) NOT NULL,
  `Categorie` varchar(50) NOT NULL,
  `NomEntreprise` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`Idp`, `Nom`, `Prenom`, `Email`, `Mdp`, `Status`, `NomProjet`, `Categorie`, `NomEntreprise`, `Description`, `Date`) VALUES
(1, 'ANICET JOHANNE', 'Nganso Django', 'anicetjohannengansodjango@gmail.com', 'Anicet', 'particulier', 'Conceptions d\'application numerique1', 'numérique', 'Null', 'Projet de creation de site rentable pour les entreprises et particulier. pouvant se vendre a des millier de francs cfa', '2021-08-04'),
(2, 'Nganso Django', 'Anicet Johanne', 'anicetjohannengansodjango@gmail.com', 'Anicet', 'particulier', 'Chambis', 'Numérique', 'Null', 'Projet  de développement des plateformes d\'E learning  ', '2021-08-08'),
(3, 'WOUATCHI BEUMO', 'Anne Geniale', 'anne@gmail.com', 'anne', 'particulier', 'Easy credit', 'Numérique', 'Null', 'Site de pret d\'argent en ligne, afin de permettre aux entreprises et au particuliers de trouver des fonds au pres d\'autres entreprises et particuliers', '2021-08-08'),
(4, 'WOUATCHI BEUMO', 'Anne Geniale', 'anne@gmail.com', 'anne', 'Entreprise', 'ConCeptRealisation', 'Numérique', 'WiBAG', 'Le projet ConCeptRealisation est celui de la conception , de la realisation  et de la mise en places des applications web et mobiles.', '2021-08-09');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `financer`
--
ALTER TABLE `financer`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `NomProjet` (`Prenom`(50));

--
-- Index pour la table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`Idp`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `financer`
--
ALTER TABLE `financer`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
  MODIFY `Idp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
