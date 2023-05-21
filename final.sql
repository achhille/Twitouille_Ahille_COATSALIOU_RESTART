-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 21, 2023 at 05:31 PM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `twoot`
--

CREATE TABLE `twoot` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL DEFAULT 'Invité',
  `twoot` varchar(280) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `twoot`
--

INSERT INTO `twoot` (`id`, `name`, `twoot`, `date`) VALUES
(1, 'Francis', 'Bonjour c\'est Francis (eh oui)', '2023-05-16 17:00:24'),
(2, 'ParagrahMan', 'Voluptatum impedit deserunt voluptatum possimus repellat neque. Perspiciatis facere quae id totam magni debitis totam. Eos nesciunt reiciendis rerum. Enim consequatur sequi tenetur nostrum autem tempore cum nesciunt natus.', '2023-05-18 19:45:42'),
(3, 'Rémi', 'Salut c\'est franck', '2023-05-19 03:04:06'),
(4, 'baptousolide47', 'aïe, j\'ai fait une chute à vélo. je vais me mettre au roller :/', '2023-05-19 03:04:53'),
(5, 'fred', 'oui fred c\'est fred (fred)', '2023-05-19 03:04:53'),
(6, 'Invité', 'slt', '2023-05-19 03:10:26'),
(7, 'anclumo', 'Loin de moi l\'idée d\'abandonner le php, c\'est vraiment de très loin ma matière préférée :)))))', '2023-05-19 19:32:32'),
(8, 'anclumo', 'LET\'S GOOOOOO ÇA MARCHE JE SUIS TROP FORT ', '2023-05-19 19:33:04'),
(9, 'carole', 'slt c carol', '2023-05-19 19:45:45'),
(10, 'achille', 'rien de neuf pour ma part', '2023-05-20 16:30:51'),
(14, 'achille', 'test', '2023-05-21 18:00:51');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `creation`) VALUES
(1, 'bonjour', 'motdepasse', '2023-05-20 17:22:40'),
(2, 'Achille', 'qergqerg', '2023-05-20 17:22:40'),
(3, 'qergqerg', 'rqegqerg', '2023-05-20 17:22:40'),
(4, 'aerga', 'qergergqerg', '2023-05-20 17:22:40'),
(5, 'qergqerg', 'rqgergq', '2023-05-20 17:22:40'),
(6, 'qerg', 'qergqerg', '2023-05-20 17:22:40'),
(7, 'Achille', 'qergergq', '2023-05-20 17:22:40'),
(8, 'Achille', 'qergergq', '2023-05-20 17:22:40'),
(9, 'qergq', 'qergqergq', '2023-05-20 17:22:40'),
(10, 'qergq', 'qergqergq', '2023-05-20 17:22:40'),
(11, 'qergq', 'qergqer', '2023-05-20 17:22:40'),
(12, 'qergq', 'qergqer', '2023-05-20 17:22:40'),
(13, 'Achille', 'zczoirh', '2023-05-20 17:22:40'),
(14, 'qergqer', 'rqergqerg', '2023-05-20 17:22:40'),
(15, 'Achille', 'rqgqerg', '2023-05-20 17:22:40'),
(16, 'achille', 'flipose', '2023-05-20 17:22:40'),
(17, 'qergqerg', 'qergqerg', '2023-05-20 17:22:40'),
(18, 'bernardtapie', 'tapisserie', '2023-05-20 17:22:40'),
(19, 'anclumo', 'mdp', '2023-05-20 17:22:40'),
(20, 'anclumouille', 'mdp', '2023-05-20 17:22:40'),
(21, 'carole', 'choucroute', '2023-05-20 17:22:40'),
(22, 'euury', 'losingapieceofme&é\"', '2023-05-21 16:09:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `twoot`
--
ALTER TABLE `twoot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `twoot`
--
ALTER TABLE `twoot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
