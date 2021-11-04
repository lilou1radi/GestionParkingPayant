-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 21 juin 2020 à 19:37
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
-- Base de données : `parking`
--

-- --------------------------------------------------------

--
-- Structure de la table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `currency` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `company`
--

INSERT INTO `company` (`id`, `name`, `address`, `message`, `currency`) VALUES
(1, 'PARKING PAYANT', 'CasablancaTechnopark adress ... /...Rure Bd ...090', '<blockquote><blockquote><p></p><p></p><p></p><p></p><p></p><p>MERCI ET BONNE ROUTE</p><p><img alt=\"\" src=\"https://www.iconfinder.com/icons/2639905/car_icon\"><br></p><p></p><p></p><p></p><p></p><p></p></blockquote></blockquote><p></p>', 'MAD');

-- --------------------------------------------------------

--
-- Structure de la table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `permission` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `groups`
--

INSERT INTO `groups` (`id`, `group_name`, `permission`) VALUES
(1, 'Super Administrator', 'a:28:{i:0;s:10:\"createUser\";i:1;s:10:\"updateUser\";i:2;s:8:\"viewUser\";i:3;s:10:\"deleteUser\";i:4;s:11:\"createGroup\";i:5;s:11:\"updateGroup\";i:6;s:9:\"viewGroup\";i:7;s:11:\"deleteGroup\";i:8;s:14:\"createCategory\";i:9;s:14:\"updateCategory\";i:10;s:12:\"viewCategory\";i:11;s:14:\"deleteCategory\";i:12;s:11:\"createRates\";i:13;s:11:\"updateRates\";i:14;s:9:\"viewRates\";i:15;s:11:\"deleteRates\";i:16;s:11:\"createSlots\";i:17;s:11:\"updateSlots\";i:18;s:9:\"viewSlots\";i:19;s:11:\"deleteSlots\";i:20;s:13:\"createParking\";i:21;s:13:\"updateParking\";i:22;s:11:\"viewParking\";i:23;s:13:\"deleteParking\";i:24;s:13:\"updateCompany\";i:25;s:13:\"updateSetting\";i:26;s:11:\"viewReports\";i:27;s:11:\"viewProfile\";}'),
(5, 'Staff', 'a:7:{i:0;s:12:\"viewCategory\";i:1;s:9:\"viewRates\";i:2;s:9:\"viewSlots\";i:3;s:13:\"createParking\";i:4;s:13:\"updateParking\";i:5;s:11:\"viewParking\";i:6;s:11:\"viewReports\";}'),
(6, 'GroupTest', 'a:8:{i:0;s:8:\"viewUser\";i:1;s:9:\"viewGroup\";i:2;s:12:\"viewCategory\";i:3;s:9:\"viewRates\";i:4;s:9:\"viewSlots\";i:5;s:11:\"viewParking\";i:6;s:11:\"viewReports\";i:7;s:11:\"viewProfile\";}'),
(7, 'Controllers', 'a:14:{i:0;s:10:\"createUser\";i:1;s:8:\"viewUser\";i:2;s:11:\"createGroup\";i:3;s:9:\"viewGroup\";i:4;s:14:\"createCategory\";i:5;s:12:\"viewCategory\";i:6;s:11:\"createRates\";i:7;s:9:\"viewRates\";i:8;s:11:\"createSlots\";i:9;s:9:\"viewSlots\";i:10;s:13:\"createParking\";i:11;s:11:\"viewParking\";i:12;s:13:\"createReports\";i:13;s:11:\"viewReports\";}');

-- --------------------------------------------------------

--
-- Structure de la table `parking`
--

CREATE TABLE `parking` (
  `id` int(11) NOT NULL,
  `parking_code` varchar(255) NOT NULL,
  `vehicule_cat_id` int(11) NOT NULL,
  `rate_id` int(11) NOT NULL,
  `slot_id` int(11) NOT NULL,
  `in_time` varchar(255) NOT NULL,
  `out_time` varchar(255) NOT NULL,
  `total_time` varchar(255) NOT NULL,
  `earned_amount` varchar(255) NOT NULL,
  `paid_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `parking`
--

INSERT INTO `parking` (`id`, `parking_code`, `vehicule_cat_id`, `rate_id`, `slot_id`, `in_time`, `out_time`, `total_time`, `earned_amount`, `paid_status`) VALUES
(1, 'PA-D885A9', 1, 1, 1, '1589045369', '1589047697', '1', '20', 1),
(2, 'PA-0E32BA', 1, 2, 2, '1589047773', '1589047809', '1', '50', 1),
(3, 'PA-58BB3A', 3, 3, 3, '1589047906', '1589048745', '1', '15', 1),
(5, 'PA-631AF3', 3, 4, 1, '1589394726', '1589396618', '1', '15', 1),
(6, 'PA-511532', 6, 6, 3, '1592689105', '', '', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `rate`
--

CREATE TABLE `rate` (
  `id` int(11) NOT NULL,
  `matricule` varchar(255) NOT NULL,
  `vehicule_cat_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `rate`
--

INSERT INTO `rate` (`id`, `matricule`, `vehicule_cat_id`, `type`, `rate`, `active`) VALUES
(1, 'FDJK098765RFGH', 1, 2, '20', 2),
(2, 'T6543678H', 1, 2, '50', 2),
(3, 'EDF4556GF', 1, 1, '15', 1),
(4, 'AB234VC', 3, 1, '15', 1),
(6, '14HOPF908', 6, 2, '5', 1);

-- --------------------------------------------------------

--
-- Structure de la table `slots`
--

CREATE TABLE `slots` (
  `id` int(11) NOT NULL,
  `slot_name` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  `availability_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `slots`
--

INSERT INTO `slots` (`id`, `slot_name`, `active`, `availability_status`) VALUES
(1, 'Maarif', 1, 2),
(2, 'Technopark', 1, 1),
(3, 'Centre_ville', 1, 2),
(4, 'CasaPort', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `firstname`, `lastname`, `phone`, `gender`) VALUES
(1, 'admin', '$2y$10$BZH7c.tfyXGRMqitLEV44uAXGwUsMZtSm8osb3G7/xdWWL/mXfZ.6', 'admin@admin.com', 'oumaima', 'radi', '0780789998', 2),
(5, 'nadiaradi', '$2y$10$mNNA7mPCCzbIO9gmLPSiHuszwox6/9gYd00w5QIT5wHSASyiQUYUi', 'nadia@gmail.com', 'nadia', 'radi', '0909090909', 2),
(6, 'fluffy', '$2y$10$z.YHdVvuKE8CQhvmSruRZuV1x5ZubdZNf1/uoAYqSZQ2vDs5iWo7y', 'fluf@gmail.com', 'radi', 'fluff', '0909090900', 1),
(7, 'safia', '$2y$10$HNksCIedGkt/MEJOedXo9OdihGEkKH7BuUXgPPNhaQHp2MLfIetYC', 'safia@gmail.com', 'radi', 'safia', '0789676767', 2);

-- --------------------------------------------------------

--
-- Structure de la table `user_group`
--

CREATE TABLE `user_group` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user_group`
--

INSERT INTO `user_group` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(6, 5, 6),
(7, 6, 5),
(8, 7, 1);

-- --------------------------------------------------------

--
-- Structure de la table `vehicule_category`
--

CREATE TABLE `vehicule_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vehicule_category`
--

INSERT INTO `vehicule_category` (`id`, `name`, `active`) VALUES
(1, 'Voiture', 1),
(3, 'bicycle', 1),
(5, 'camion', 1),
(6, 'scooter', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `parking`
--
ALTER TABLE `parking`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `slots`
--
ALTER TABLE `slots`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vehicule_category`
--
ALTER TABLE `vehicule_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `parking`
--
ALTER TABLE `parking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `rate`
--
ALTER TABLE `rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `slots`
--
ALTER TABLE `slots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `vehicule_category`
--
ALTER TABLE `vehicule_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
