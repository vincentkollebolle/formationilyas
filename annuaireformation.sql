-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 07 Juillet 2021 à 17:40
-- Version du serveur :  5.7.34-0ubuntu0.18.04.1
-- Version de PHP :  7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `annuaireformation`
--

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

CREATE TABLE `formations` (
  `id` int(11) NOT NULL,
  `nomformation` text NOT NULL,
  `description` text NOT NULL,
  `prix` int(11) NOT NULL,
  `departement` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `formations`
--

INSERT INTO `formations` (`id`, `nomformation`, `description`, `prix`, `departement`, `type`) VALUES
(1, 'formation electrique debutant', 'une super formation ....', 60, '69', 'ELEC01'),
(2, 'electricité avancé', 'lalalalalalalala', 180, '26', 'ELEC02'),
(3, 'Electricité débutant', 'zeopgkoejgozpejgopze ,opejgopzegopze,gopzeg', 60, '01', 'ELEC01'),
(4, 'electricité débutant', 'zopejgopze opzejgopzejgopz jopzejgopzejgopzjgopzjegopzjegopz jzopejgozpejgopzejgz', 60, '01', 'ELEC01'),
(5, 'PHP', 'une super formation', 60, '69', 'PHP-01');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `formations`
--
ALTER TABLE `formations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
