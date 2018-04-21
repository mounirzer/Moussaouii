-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2018 at 01:15 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siteweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `annee` text NOT NULL,
  `resumer` text NOT NULL,
  `type` varchar(10) NOT NULL,
  `lien` text NOT NULL,
  `module` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`id`, `nom`, `annee`, `resumer`, `type`, `lien`, `module`) VALUES
(8, 'poo', '2Ã©me annÃ©e informatique', 'kldsjflksj', 'Cour', '', 'poo'),
(9, 'reseauuuuu', '3Ã©me annÃ©e (DÃ©cisionnelle)', 'ldjfldk', 'Cour', '', 'reseau'),
(10, 'klsjdflks', 'Master (DÃ©cisionnelle)', '', 'Cour', '', 'basededonnee'),
(11, 'lksjfks', '2Ã©me annÃ©e informatique', 'lkjdlfkjs', 'TP', '', 'poo'),
(12, 'kmklml', '2Ã©me annÃ©e informatique', 'lkjskdjf', 'Cour', '', 'reseau');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
