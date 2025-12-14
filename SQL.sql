-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 13 déc. 2025 à 22:04
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
-- Base de données : `upb`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenoms` varchar(150) NOT NULL,
  `genre` enum('M','F') NOT NULL,
  `email` varchar(150) NOT NULL,
  `quartier` varchar(100) NOT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `nom`, `prenoms`, `genre`, `email`, `quartier`, `contact`, `created_at`, `photo`) VALUES
(27, 'Brou', 'Maurel ange', 'M', 'maurelbrou040@gmail.com', 'BINGERVILLE', '0700000003', '2025-12-13 01:45:52', 'photo_693cc550cda39.webp'),
(28, 'anoh', 'amien', 'M', 'anohamien@gmail.com', 'kossonou', '0709598338', '2025-12-13 02:27:32', 'photo_693ccf14e7b6b.png'),
(29, 'koffi', 'nango', 'M', 'christ@gmail.com', 'marcory', '0160089132', '2025-12-13 02:28:56', 'photo_693ccf68ab565.jfif'),
(30, 'Danhi', 'minmon', 'M', 'minmon@gmail.com', 'akandje', '0702607646', '2025-12-13 02:30:19', 'photo_693ccfbb8b22d.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'maurel', '$2y$10$A07CYJnonwjs6AN1prfOYuOz.mzBl//G1DjTfn4ug6GKuS8aEH.v6', '2025-12-05 11:27:15'),
(2, 'Koffi', '$2y$10$WgEA9GXo2obQKg2jNbigKechLnA5JgITwd/vmuU5I9eL3j4OzyjyO', '2025-12-05 11:56:17'),
(5, 'Koffie', '$2y$10$8DMuQSIuYmc7WQZUM3iD/e4IqvpTMzN6uX16aYqk.5ACjNclftO2e', '2025-12-05 12:10:43'),
(6, 'badas', '$2y$10$NKYT765I2VZrVJBi71rq4uacCUabPT/08ktWpADpefnOqmt/kTFvi', '2025-12-05 12:13:18');

-- --------------------------------------------------------

--
-- Structure de la table `users1`
--

CREATE TABLE `users1` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users1`
--

INSERT INTO `users1` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'Koffi', '$2y$10$An6i.JiG0TApAl67PJPtVufa19O4IInX95VRTrPa9OrFrxFDHLVnG', '2025-12-10 01:08:03'),
(2, 'bigmo', '$2y$10$qEd0WSlsJAqVbNBySpE.M.ZMRteJxyUJhWMa3YQcbZIZUkH9aX1km', '2025-12-13 01:05:01'),
(3, 'ronaldo', '$2y$10$I4ZuXSYEzwJ98InhakXnIubdWSPHSkzw31wf1Whvjw6pI7ldZWfaO', '2025-12-13 03:25:52'),
(4, 'bigm', '$2y$10$fNBRCE6ryznVdGqZ06.6luf40iTuKvBQS7GogcQ4oKSPThuIWrhOG', '2025-12-13 21:57:01');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `date_inscription` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `mot_de_passe`, `date_inscription`) VALUES
(1, 'Koffi', '$2y$10$gFe0SncszGCyKzXRL.xPienhb19vMYHDSIqw6.92E/eLmxFeXxsZS', '2025-12-09 23:56:45'),
(2, 'azaaez', '$2y$10$CHz.c86EZS9.rglXJ4RQD.25wjoalif1ys94.JOKscwK4AimTE2l.', '2025-12-09 23:58:03'),
(3, 'Koffi', '$2y$10$4L.dSULAy7UIYl8GNfM/Q.utOCHd2ETDAnVanTH/h0hokwTgu6Hsi', '2025-12-10 00:02:04'),
(4, 'Koffi', '$2y$10$DhOIVtA6UNdLfgXfGNfOme5mUyQXFXaaaajbSaJLG8UiLYGBPtoVu', '2025-12-10 00:02:06'),
(5, 'Koffi', '$2y$10$nifn546l7OonSN527OGwsOfgGSTjh5RRwJBTZa0XpIllJk8P3pD0W', '2025-12-10 00:02:07'),
(6, 'Koffi', '$2y$10$MDN1GxSMRgtpfCEWZblAmehOD4x5dYKX5RA3hTgrqHxD7f7oB26/u', '2025-12-10 00:02:08');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Index pour la table `users1`
--
ALTER TABLE `users1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `users1`
--
ALTER TABLE `users1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
