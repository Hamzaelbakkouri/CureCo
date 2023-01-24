-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 24 jan. 2023 à 01:55
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
-- Base de données : `cureco`
--

-- --------------------------------------------------------

--
-- Structure de la table `medicine`
--

CREATE TABLE `medicine` (
  `id_m` int(155) NOT NULL,
  `name_m` varchar(155) NOT NULL,
  `price` int(155) NOT NULL,
  `quantity` int(155) NOT NULL,
  `image_m` varchar(155) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `medicine`
--

INSERT INTO `medicine` (`id_m`, `name_m`, `price`, `quantity`, `image_m`, `date`) VALUES
(25, 'hamza', 399, 40, '450-1664881728.jfif', '2023-01-23 00:00:00'),
(26, 'doliprane', 40, 30, 'desarrollador-1288x724.jpg', '2023-01-23 00:00:00'),
(29, 'doliprane', 33, 44, 'damnboy.PNG', '2023-01-23 17:36:32'),
(30, 'aspirine', 30, 33, 'Screenshot_20221130_022206.png', '2023-01-23 17:36:32'),
(31, 'doliprane', 35, 55, 'Screenshot_20221130_022206.png', '2023-01-23 19:24:34');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_u` int(155) NOT NULL,
  `Fname` varchar(155) NOT NULL,
  `pass` varchar(155) NOT NULL,
  `email` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_u`, `Fname`, `pass`, `email`) VALUES
(5, 'hamza el bakkouri', '$2y$10$b2hT/tOQPN24tzSgLkkjT.4Ll4fI7KyH4Ygi9hsWTWql2fg3nZ7/G', 'elbak@gmail.com'),
(11, 'mr formateur', '$2y$10$ImUJD9Wn8QP.jahepfmuauFlD5TwOqZLnQ9PeKPsgKA4mjNx9VH1K', 'admin@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id_m`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_u`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id_m` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_u` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
