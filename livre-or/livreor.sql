-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 28, 2020 at 09:35 AM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `livreor`
--

-- --------------------------------------------------------

--
-- Table structure for table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `commentaire` text NOT NULL,
  `id_utilisateurs` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commentaires`
--

INSERT INTO `commentaires` (`id`, `commentaire`, `id_utilisateurs`, `date`) VALUES
(1, 'Génial hâte de commencer ce super sport d\'équipe', 3, '2020-11-19'),
(2, 'Equipe pro, bonne ambiance recommande', 2, '2020-11-04'),
(3, 'CHAMPION D\'EUROPE YEAH !!!!!!', 2, '2020-11-01'),
(4, 'I LOVE IT !', 1, '2020-11-19'),
(5, 'lolo', 1, '2020-11-24'),
(6, 'Super sport! Mais j\'arrête à cause de mes nombreuses blessures et la non humanité du coach ...', 5, '2020-11-24'),
(7, 'J\'adore ! Comment ca se fait que ce site existe et que je ne suis meme pas au courant ! bravo et bonne continuation :).', 6, '2020-11-24'),
(9, 'moment magique avec des personnes incroyables!!', 8, '2020-11-24'),
(10, 'super site hâte d\'aller aux bals des sorciers !!', 9, '2020-11-28'),
(11, 'déçu ...', 10, '2020-11-28');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(1, 'petitchat', 'pussy123'),
(2, 'piglet', 'piggy'),
(3, 'César', 'petitsauvage'),
(4, 'Lila', 'lila1'),
(5, 'Rara', 'petitrara'),
(6, 'chay', 'chay'),
(8, 'Mariecharlotte', 'mama'),
(9, 'siropderable', 'sirop'),
(10, 'petitmoulin', 'moulin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
