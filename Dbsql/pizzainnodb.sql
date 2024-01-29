-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 29 jan. 2024 à 22:40
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pizzainnodb`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `NROCLIE` int(11) NOT NULL,
  `NOMCLIE` char(20) DEFAULT NULL,
  `PRENOMCLIE` char(20) DEFAULT NULL,
  `ADRESSECLIE` char(50) DEFAULT NULL,
  `VILLECLIE` char(20) DEFAULT NULL,
  `CODEPOSTALCLIE` char(5) DEFAULT NULL,
  `TITRECLIE` char(20) DEFAULT NULL,
  `NROTELCLIE` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`NROCLIE`, `NOMCLIE`, `PRENOMCLIE`, `ADRESSECLIE`, `VILLECLIE`, `CODEPOSTALCLIE`, `TITRECLIE`, `NROTELCLIE`) VALUES
(1, 'Durban', 'Georges', '6, rue Emile Bertin', 'NANCY', '54000', 'M', ''),
(2, 'Dumas', 'Jean-Baptiste', '10, rue Ernest Renan', 'LAXOU', '54520', 'M', ''),
(3, 'Duvernoy', 'Martine', '24, rue du Sergent Blandan', 'NANCY', '54000', 'Mme', ''),
(4, 'Durendal', 'Roland', '17, boulevard Charlemagne', 'NANCY', '54000', 'M', ''),
(5, 'Durer', 'Albrecht', '20, rue Jules Ferry', 'NANCY', '54000', 'M', ''),
(6, 'Duquesnoy', 'Agnès', '10, rue des Clos', 'LAXOU', '54520', 'Mlle', ''),
(7, 'Dutronc', 'Jacques', '6, rue Rodin', 'VILLERS', '54600', 'M', ''),
(8, 'Durham', 'Jonathan', '12, rue Voltaire', 'NANCY', '54000', 'M', ''),
(9, 'Duluth', 'Pierre', '6, avenue Aristide Briand', 'NANCY', '54000', 'M', ''),
(10, 'Dutilleux', 'Henry', '10, avenue Paul Déroulède', 'LAXOU', '54520', 'M', ''),
(11, 'Dufour', 'Elodie', '52, boulevard Charlemagne', 'NANCY', '54000', 'Mme', ''),
(12, 'Duchatelet', 'Emilie', '20, boulevard Emile Zola', 'LAXOU', '54520', 'Mlle', ''),
(13, 'Durao', 'José', '10, avenue du Général Leclerc', 'VANDOEUVRE', '54000', 'M', ''),
(14, 'Dubcek', 'Alexndre', '20, rue de la Moselotte', 'LAXOU', '54520', 'Mme', ''),
(15, 'Dupatin', 'Sébastien', '101, rue Raymond Poincaré', 'NANCY', '54000', 'M', ''),
(16, 'Dupeyron', 'Juliette', '55, rue Emile Bertin', 'NANCY', '54000', 'M', ''),
(17, 'Durrazo', 'Jérémie', '120, avenue de Boufflers', 'NANCY', '54000', 'M', ''),
(18, 'Durango', 'Flora', '220, boulevard des Aiguillettes', 'VILLERS', '54600', 'Mlle', ''),
(19, 'Dusapin', 'Pascal', '45, rue de Maréville', 'LAXOU', '54520', 'M', ''),
(20, 'Duparc', 'Henri', '20, rue de l\'Abbé Didelot', 'LAXOU', '54520', 'M', ''),
(21, 'Durey', 'Louis', '30, rue Paul Bert', 'NANCY', '54000', 'M', ''),
(22, 'Duroc', 'Pierre', '25, rue de Santifontaine', 'NANCY', '54000', 'M', ''),
(23, 'Duverger', 'Maurice', '30, place de la Commanderie', 'NANCY', '54000', 'M', ''),
(24, 'Dullin', 'Charles', '5, rue du Petit Arbois', 'LAXOU', '54520', 'M', ''),
(25, 'Dughet', 'Gaspard', '20, rue Anatole France', 'NANCY', '54000', 'M', ''),
(26, 'Durbuy', 'Claudine', '25, rue de la Forêt', 'LAXOU', '54520', 'Mlle', ''),
(27, 'Dubrovnik', 'Raguse', '42, rue du Plateau', 'LAXOU', '54520', 'M', ''),
(28, 'Dufay', 'Guillaume', '15, rue du Four', 'LAXOU', '54520', 'M', ''),
(29, 'Dulcinée', 'Ginette', '53, avenue Aristide Briand', 'NANCY', '54000', 'M', ''),
(30, 'Dudley', 'Carole', '10, boulevard d\'Haussonville', 'VILLERS', '54600', 'Mlle', ''),
(31, 'Duse', 'Eléonora', '10, avenue Paul Déroulède', 'LAXOU', '54520', 'Mme', ''),
(32, 'Dunedine', 'Ginette', '50, rue du Petit Arbois', 'LAXOU', '54520', 'Mme', ''),
(33, 'Dudelange', 'Catherine', '3, place du Jet d\'eau', 'LAXOU', '54520', 'Mlle', ''),
(34, 'Dukou', 'Michaël', '52, rue Jules Ferry', 'NANCY', '54000', 'M', ''),
(35, 'Ducos', 'Martine', '10, place Paul painlevé', 'NANCY', '54000', 'Mlle', ''),
(36, 'Dunham', 'Catherine', '135, boulevard des Aiguilette', 'VILLERS', '54600', 'Mlle', ''),
(37, 'Duclos', 'Jacques', '42, boulevard Charlemagne', 'NANCY', '54000', 'M', ''),
(38, 'Dublin', 'Zaccharie', '42, avenue du Montet', 'VANDOEUVRE', '54500', 'M', ''),
(39, 'Duchesne', 'Aline', '5, allée du Bassigny', 'LAXOU', '54520', 'Mme', ''),
(40, 'Ducommun', 'Elie', '42, rue du Sergent Blandan', 'NANCY', '54000', 'M', ''),
(41, 'Dubout', 'Albert', '20, avenue du Montet', 'VANDOEUVRE', '54500', 'M', ''),
(42, 'Dubarry', 'Jeanne', '74, boulevard de Hardeval', 'LAXOU', '54520', 'Mme', ''),
(43, 'Dugommier', 'Jacques', '45, avenue de l\'Europe', 'LAXOU', '54520', 'M', ''),
(44, 'Duhem', 'Pierre', '10, rue Victor Hugo', 'LAXOU', '54520', 'M', ''),
(45, 'Duprat', 'Antoine', '25, rue de Heubach', 'LAXOU', '54520', 'M', ''),
(46, 'Duguillet', 'Pernette', '15, rue Lavigerie', 'NANCY', '54000', 'Mlle', ''),
(47, 'Dumas', 'Alexandre', '25, rue du Sergent Bobillot', 'NANCY', '54000', 'M', ''),
(48, 'Dupin', 'Jacques', '5, rue de l\'Octroi', 'NANCY', '54000', 'M', ''),
(49, 'Dumézil', 'Georges', '25, avenue de l\'Europe', 'NANCY', '54520', 'M', ''),
(50, 'Duguit', 'Léon', '12, rue Jean Mermoz', 'VILLERS', '54600', 'M', ''),
(51, 'Dupin', 'André', '52, avenue Paul Déroulède', 'LAXOU', '54520', 'M', ''),
(52, 'Dupond', 'Patrick', '24, rue du Onze Novembre', 'LAXOU', '54520', 'M', ''),
(53, 'Dupré', 'Marcel', '35, avenue Pierre Curie', 'LAXOU', '54520', 'M', ''),
(54, 'Dutourd', 'Jean', '21, rue de Cronstadt', 'NANCY', '54000', 'M', ''),
(55, 'Dutrochet', 'René', '3, avenue de l\'europe', 'LAXOU', '54520', 'M', ''),
(56, 'Duvivier', 'Julien', '2, rue de l\'Abbé Gridel', 'NANCY', '54000', 'M', ''),
(57, 'Duruflé', 'Maurice', '6, place des Ducs de Bar', 'NANCY', '54000', 'M', ''),
(58, 'Duras', 'Marguerite', '25, boulevard Cattenoz', 'VILLERS', '54600', 'Mme', ''),
(59, 'Duparc', 'Thérèse', '51, avenue de L\'Europe', 'LAXOU', '54520', 'Mme', ''),
(60, 'Dupré', 'Jules', '2, rue Léomont', 'VILLERS', '54600', 'M', ''),
(61, 'Duguesclin', 'Bertrand', '72, rue de Santifontaine', 'NANCY', '54000', 'M', ''),
(62, 'Dupré', 'Jacqueline', '25, rue de Mondésert', 'NANCY', '54000', 'Mme', ''),
(63, 'Dumas', 'Alexandre', '14, boulevard Cattenoz', 'VILLERS', '54600', 'M', ''),
(64, 'Dunand', 'Henri', '74, Boulevard de Baudricourt', 'VILLERS', '54600', 'M', ''),
(65, 'Duplessis', 'Armand', '20, rue de la Forêt', 'LAXOU', '54520', 'M', ''),
(66, 'Dulac', 'Germaine', '12, rue Marie-Odile', 'LAXOU', '54000', 'Mlle', ''),
(67, 'Dulong', 'Pierre', '13, rue de Mondésert', 'NANCY', '54000', 'M', ''),
(68, 'Dukas', 'Paul', '14, rue Edouard Grosjean', 'LAXOU', '54520', 'M', ''),
(69, 'Dufy', 'Raoul', '23, rue du Pressoir', 'LAXOU', '54000', 'M', ''),
(70, 'Dufresne', 'Diane', '25, Rue Pasteur', 'NANCY', '54000', 'Mme', ''),
(71, 'Duby', 'Georges', '51, rue des Coteaux', 'VILLERS', '54600', 'M', ''),
(72, 'Dubalet', 'Raoul', '14, rue baron Buquet', 'VILLERS', '54600', 'M', ''),
(73, 'Durango', 'Marina', '51, rue Ernest Albert', 'LAXOU', '54520', 'Mme', ''),
(74, 'Dubillard', 'Roland', '13, rue Chopin', 'VILLERS', '54600', 'M', ''),
(75, 'Duchamps', 'marcel', '54, rue Raymond Poincaré', 'LAXOU', '54520', 'M', ''),
(76, 'Dubellay', 'Joachim', '21, rue Mozart', 'VILLERS', '54600', 'M', ''),
(77, 'Dubuffet', 'Jean', '38, rue Coriolis', 'NANCY', '5400', 'M', ''),
(78, 'Dubos', 'René', '45, rue de l\'Asnée', 'VILLERS', '54600', 'M', ''),
(79, 'Ducasse', 'Alain', '15, Allées de Médreville', 'LAXOU', '54520', 'M', ''),
(80, 'Ducharme', 'Réjean', '65, rue du Colonel Moll', 'LAXOU', '54520', 'M', '');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `NROCMDE` int(11) NOT NULL,
  `DATECMDE` date DEFAULT NULL,
  `HEURECMDE` time DEFAULT NULL,
  `NROCLIE` int(11) NOT NULL,
  `NROLIVR` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`NROCMDE`, `DATECMDE`, `HEURECMDE`, `NROCLIE`, `NROLIVR`) VALUES
(453, '2021-04-06', '11:05:00', 66, 303),
(454, '2021-04-06', '11:25:00', 40, 303),
(455, '2021-04-06', '11:45:00', 80, 303),
(456, '2021-04-06', '11:55:00', 16, 303),
(457, '2021-04-06', '12:20:00', 15, 202),
(458, '2021-04-07', '12:25:00', 14, 202),
(459, '2021-04-07', '12:50:00', 34, 303),
(460, '2021-04-07', '13:15:00', 25, 202),
(461, '2021-04-07', '18:14:00', 52, 202),
(462, '2021-04-07', '18:24:00', 74, 202),
(463, '2021-04-07', '18:40:00', 72, 303),
(464, '2021-04-07', '19:00:00', 11, 303),
(465, '2021-04-07', '19:10:00', 42, 303),
(466, '2021-04-07', '19:20:00', 30, 202),
(467, '2021-04-07', '19:25:00', 62, 202),
(468, '2021-04-07', '19:35:00', 7, 202),
(469, '2021-04-07', '19:40:00', 8, 303),
(470, '2021-04-07', '19:50:00', 64, 303),
(471, '2021-04-07', '19:55:00', 4, 101),
(472, '2021-04-07', '20:00:00', 27, 202),
(473, '2021-04-07', '20:10:00', 38, 202),
(474, '2021-04-07', '20:15:00', 39, 202),
(475, '2021-04-07', '20:25:00', 75, 303),
(476, '2021-04-07', '20:35:00', 31, 303),
(477, '2021-04-09', '11:40:00', 13, 404),
(478, '2021-04-09', '11:50:00', 60, 404),
(479, '2021-04-09', '12:30:00', 18, NULL),
(480, '2021-04-09', '12:45:00', 54, 404),
(481, '2021-04-09', '19:10:00', 35, 505),
(482, '2021-04-09', '19:20:00', 51, 505),
(483, '2021-04-09', '19:30:00', 48, 505),
(484, '2021-04-09', '19:50:00', 3, NULL),
(485, '2021-04-09', '20:45:00', 59, 505),
(486, '2021-04-09', '20:50:00', 13, 505),
(487, '2021-04-11', '12:10:00', 52, 101),
(488, '2021-04-11', '12:15:00', 67, 101),
(489, '2021-04-11', '12:30:00', 29, 101),
(490, '2021-04-11', '12:50:00', 45, 101),
(491, '2021-04-11', '19:10:00', 46, 202),
(492, '2021-04-11', '20:00:00', 31, 101),
(493, '2021-04-11', '20:15:00', 75, 101),
(494, '2021-04-11', '20:30:00', 79, NULL),
(495, '2021-04-11', '20:35:00', 20, 101),
(496, '2021-04-11', '20:45:00', 22, 101);

-- --------------------------------------------------------

--
-- Structure de la table `composer`
--

CREATE TABLE `composer` (
  `NROPIZZ` int(11) NOT NULL,
  `CODEINGR` char(20) NOT NULL,
  `QTECOMP` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `composer`
--

INSERT INTO `composer` (`NROPIZZ`, `CODEINGR`, `QTECOMP`) VALUES
(10, 'artichaut', 5),
(11, 'basilic', 10),
(7, 'boeuf', 75),
(9, 'boeuf', 50),
(13, 'capre', 20),
(1, 'champignon', 40),
(4, 'champignon', 20),
(9, 'champignon', 30),
(2, 'chèvre', 60),
(3, 'chèvre', 40),
(6, 'chèvre', 30),
(1, 'chorizo', 50),
(4, 'crème', 10),
(12, 'crème', 50),
(3, 'emmental', 50),
(11, 'féta', 70),
(6, 'herbes', 5),
(1, 'jambon', 60),
(2, 'jambon', 40),
(4, 'jambon', 40),
(5, 'jambon', 50),
(12, 'jambon', 40),
(4, 'lard', 20),
(12, 'lard', 40),
(8, 'merguez', 1),
(1, 'mozzarelle', 120),
(2, 'mozzarelle', 90),
(3, 'mozzarelle', 60),
(5, 'mozzarelle', 120),
(6, 'mozzarelle', 80),
(7, 'mozzarelle', 80),
(8, 'mozzarelle', 80),
(9, 'mozzarelle', 120),
(10, 'mozzarelle', 80),
(11, 'mozzarelle', 60),
(13, 'mozzarelle', 80),
(5, 'oeuf', 1),
(8, 'oeuf', 1),
(7, 'oignon', 40),
(10, 'oignon', 30),
(12, 'oignon', 20),
(2, 'olive', 6),
(7, 'olive', 6),
(10, 'olive', 8),
(11, 'olive', 8),
(8, 'poivron', 40),
(9, 'poivron', 30),
(10, 'poivron', 30),
(11, 'poivron', 20),
(9, 'poulet', 60),
(12, 'roblochon', 40),
(3, 'roquefort', 40),
(13, 'thon', 60),
(6, 'thym', 4),
(10, 'thym', 4),
(1, 'tomate', 80),
(2, 'tomate', 70),
(3, 'tomate', 60),
(4, 'tomate', 80),
(5, 'tomate', 60),
(6, 'tomate', 60),
(7, 'tomate', 80),
(8, 'tomate', 80),
(9, 'tomate', 100),
(10, 'tomate', 80),
(13, 'tomate', 80),
(6, 'tomates', 1),
(10, 'tomates', 1),
(11, 'tomates', 80),
(13, 'tomates', 1);

-- --------------------------------------------------------

--
-- Structure de la table `ingredient`
--

CREATE TABLE `ingredient` (
  `CODEINGR` char(20) NOT NULL,
  `NOMINGR` char(20) DEFAULT NULL,
  `UNITEINGR` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `ingredient`
--

INSERT INTO `ingredient` (`CODEINGR`, `NOMINGR`, `UNITEINGR`) VALUES
('artichaut', 'Cœur d\'artichaut', 'u'),
('basilic', 'Basilic Frais', 'gr'),
('boeuf', 'Bœuf haché', 'gr'),
('capre', 'Capres', 'gr'),
('champignon', 'Champignons frais', 'gr'),
('chèvre', 'Fromage de chêvre', 'gr'),
('chorizo', 'Chorizo', 'gr'),
('ciboulette', 'Ciboulette fraîche', 'gr'),
('crème', 'Crème fraiche', 'cl'),
('emmental', 'emmental français', 'gr'),
('féta', 'Féta provençale', 'gr'),
('herbes', 'Herbes de provences', 'gr'),
('jambon', 'Epaule de porc', 'gr'),
('lard', 'Lardons', 'gr'),
('merguez', 'Merguez', 'u'),
('mozzarelle', 'Fromage mozzarelle', 'gr'),
('oeuf', 'Œuf', 'u'),
('oignon', 'Oignons frais', 'gr'),
('olive', 'olives noires', 'u'),
('poivron', 'Poivron Frais', 'gr'),
('poulet', 'morceaux de poulet', 'u'),
('roblochon', 'roblochon de savoie', 'gr'),
('roquefort', 'Roquefort', 'gr'),
('thon', 'Miettes de thon', 'gr'),
('thym', 'Thym de provence', 'gr'),
('tomate', 'Purée de tomate', 'ml'),
('tomates', 'Tomates fraiches', 'u');

-- --------------------------------------------------------

--
-- Structure de la table `lister`
--

CREATE TABLE `lister` (
  `NROCMDE` int(11) NOT NULL,
  `NROPIZZ` int(11) NOT NULL,
  `QTELIST` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `lister`
--

INSERT INTO `lister` (`NROCMDE`, `NROPIZZ`, `QTELIST`) VALUES
(453, 1, 2),
(458, 1, 3),
(462, 1, 1),
(469, 1, 2),
(478, 1, 3),
(484, 1, 2),
(492, 1, 2),
(454, 2, 4),
(455, 2, 1),
(464, 2, 1),
(465, 2, 1),
(467, 2, 1),
(476, 2, 2),
(485, 2, 1),
(494, 2, 1),
(454, 3, 1),
(455, 3, 1),
(465, 3, 1),
(470, 3, 1),
(474, 3, 2),
(477, 3, 1),
(486, 3, 2),
(495, 3, 1),
(458, 4, 1),
(462, 4, 1),
(468, 4, 2),
(470, 4, 3),
(473, 4, 1),
(480, 4, 2),
(487, 4, 2),
(492, 4, 1),
(453, 5, 1),
(471, 5, 2),
(480, 5, 2),
(481, 5, 2),
(488, 5, 2),
(491, 5, 2),
(459, 6, 2),
(460, 6, 2),
(473, 6, 2),
(489, 6, 2),
(492, 6, 1),
(454, 7, 2),
(455, 7, 1),
(459, 7, 1),
(461, 7, 2),
(482, 7, 3),
(490, 7, 1),
(492, 7, 1),
(496, 7, 3),
(454, 8, 1),
(468, 8, 1),
(475, 8, 2),
(488, 8, 1),
(492, 8, 1),
(494, 8, 1),
(457, 9, 1),
(462, 9, 1),
(464, 9, 3),
(468, 9, 1),
(476, 9, 1),
(488, 9, 1),
(456, 10, 2),
(460, 10, 2),
(466, 10, 1),
(473, 10, 1),
(474, 10, 1),
(486, 10, 1),
(496, 10, 2),
(459, 11, 1),
(472, 11, 1),
(480, 11, 1),
(483, 11, 1),
(486, 11, 1),
(493, 11, 2),
(455, 12, 1),
(463, 12, 4),
(467, 12, 2),
(477, 12, 1),
(479, 12, 2),
(484, 12, 1);

-- --------------------------------------------------------

--
-- Structure de la table `livreur`
--

CREATE TABLE `livreur` (
  `NROLIVR` int(11) NOT NULL,
  `NOMLIVR` char(20) DEFAULT NULL,
  `PRENOMLIVR` char(20) DEFAULT NULL,
  `DATEEMBAUCHLIVR` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `livreur`
--

INSERT INTO `livreur` (`NROLIVR`, `NOMLIVR`, `PRENOMLIVR`, `DATEEMBAUCHLIVR`) VALUES
(101, 'Hémeriche', 'Sylvain', '2003-10-01'),
(202, 'Gillon', 'Sylvette', '2003-10-01'),
(303, 'Tollag', 'Dino', '2003-11-01'),
(404, 'Pigeot', 'Loïc', '2003-12-01'),
(505, 'Patoux', 'Michel', '2003-12-01'),
(606, 'Ferry', 'Martin', '2004-02-01'),
(609, 'tom', 'SSS', '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `pizza`
--

CREATE TABLE `pizza` (
  `NROPIZZ` int(11) NOT NULL,
  `DESIGNPIZZ` char(20) DEFAULT NULL,
  `TARIFPIZZ` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `pizza`
--

INSERT INTO `pizza` (`NROPIZZ`, `DESIGNPIZZ`, `TARIFPIZZ`) VALUES
(1, 'pizza caviar', 250.00),
(2, 'La Seguin', 13.50),
(3, 'La From', 14.50),
(4, 'La Fermière', 12.50),
(5, 'La chausson', 13.00),
(6, 'La Provençale', 12.50),
(7, 'La Caramba', 14.50),
(8, 'l\'Orient Express', 14.50),
(9, 'La Gourmande', 14.50),
(10, 'La primeure', 12.50),
(11, 'La Péloponèse', 14.50),
(12, 'La Savoyarde', 14.50),
(13, 'la Pêcheur', 13.50);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`NROCLIE`) USING BTREE;

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`NROCMDE`) USING BTREE,
  ADD KEY `FK_FAIT` (`NROCLIE`) USING BTREE,
  ADD KEY `FK_LIVRE` (`NROLIVR`) USING BTREE;

--
-- Index pour la table `composer`
--
ALTER TABLE `composer`
  ADD PRIMARY KEY (`CODEINGR`,`NROPIZZ`) USING BTREE,
  ADD KEY `FK_COMPOSER2` (`NROPIZZ`) USING BTREE;

--
-- Index pour la table `ingredient`
--
ALTER TABLE `ingredient`
  ADD PRIMARY KEY (`CODEINGR`) USING BTREE;

--
-- Index pour la table `lister`
--
ALTER TABLE `lister`
  ADD PRIMARY KEY (`NROPIZZ`,`NROCMDE`) USING BTREE,
  ADD KEY `FK_LISTER2` (`NROCMDE`) USING BTREE;

--
-- Index pour la table `livreur`
--
ALTER TABLE `livreur`
  ADD PRIMARY KEY (`NROLIVR`) USING BTREE;

--
-- Index pour la table `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`NROPIZZ`) USING BTREE;

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `NROCLIE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT pour la table `livreur`
--
ALTER TABLE `livreur`
  MODIFY `NROLIVR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=612;

--
-- AUTO_INCREMENT pour la table `pizza`
--
ALTER TABLE `pizza`
  MODIFY `NROPIZZ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=476;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `FK_FAIT` FOREIGN KEY (`NROCLIE`) REFERENCES `client` (`NROCLIE`),
  ADD CONSTRAINT `FK_LIVRE` FOREIGN KEY (`NROLIVR`) REFERENCES `livreur` (`NROLIVR`);

--
-- Contraintes pour la table `composer`
--
ALTER TABLE `composer`
  ADD CONSTRAINT `FK_COMPOSER` FOREIGN KEY (`CODEINGR`) REFERENCES `ingredient` (`CODEINGR`),
  ADD CONSTRAINT `FK_COMPOSER2` FOREIGN KEY (`NROPIZZ`) REFERENCES `pizza` (`NROPIZZ`);

--
-- Contraintes pour la table `lister`
--
ALTER TABLE `lister`
  ADD CONSTRAINT `FK_LISTER` FOREIGN KEY (`NROPIZZ`) REFERENCES `pizza` (`NROPIZZ`),
  ADD CONSTRAINT `FK_LISTER2` FOREIGN KEY (`NROCMDE`) REFERENCES `commande` (`NROCMDE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
