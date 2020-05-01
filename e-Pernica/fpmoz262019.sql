-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2020 at 03:04 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-pernica`
--

-- --------------------------------------------------------

--
-- Table structure for table `informacije`
--

CREATE TABLE `informacije` (
  `idi` int(11) NOT NULL,
  `ucitelj` text COLLATE utf8_unicode_ci NOT NULL,
  `dan` text COLLATE utf8_unicode_ci NOT NULL,
  `sat` text COLLATE utf8_unicode_ci NOT NULL,
  `fk_uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `informacije`
--

INSERT INTO `informacije` (`idi`, `ucitelj`, `dan`, `sat`, `fk_uid`) VALUES
(92, 'Volarić', 'ponedjeljak', '13.15', 2),
(93, 'Vasić', 'utorak', '10.00', 2),
(94, 'Bartulović', 'srijeda', '12.00', 2),
(95, 'Mišković', 'petak', '23.00', 2),
(96, 'Pejić', 'četvrtak', '7.30', 2),
(97, 'Zahirović', 'ponedjeljak', '3.50', 2),
(98, '-', '-', '', 2),
(99, '-', '-', '', 2),
(100, '-', '-', '', 2),
(101, '', '', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `obavijesti`
--

CREATE TABLE `obavijesti` (
  `id` int(11) NOT NULL,
  `datumob` date NOT NULL,
  `obavijest` text COLLATE utf8_unicode_ci NOT NULL,
  `fk_uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `obavijesti`
--

INSERT INTO `obavijesti` (`id`, `datumob`, `obavijest`, `fk_uid`) VALUES
(29, '2020-05-03', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ocjene`
--

CREATE TABLE `ocjene` (
  `oid` int(11) NOT NULL,
  `predmet` text COLLATE utf8_unicode_ci NOT NULL,
  `ocjena` int(11) NOT NULL,
  `fk_uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ocjene`
--

INSERT INTO `ocjene` (`oid`, `predmet`, `ocjena`, `fk_uid`) VALUES
(19, 'Hrvatski jez.', 3, 2),
(20, 'Hrvatski jez.', 4, 2),
(21, 'Kemija', 2, 2),
(22, 'Kemija', 1, 2),
(23, 'Matematika', 5, 2),
(24, 'Matematika', 4, 2),
(25, 'Hrvatski jez.', 5, 2),
(26, 'Kemija', 5, 2),
(27, 'Povijest', 2, 2),
(28, 'Biologija', 5, 2),
(29, 'Biologija', 4, 2),
(30, 'Povijest', 3, 2),
(31, 'Povijest', 4, 2),
(32, 'Kemija', 1, 2),
(34, 'Matematika', 1, 2),
(35, 'Njemački jez.', 5, 2),
(36, 'Povijest', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `raspored`
--

CREATE TABLE `raspored` (
  `rid` int(11) NOT NULL,
  `sat` text COLLATE utf8_unicode_ci NOT NULL,
  `ponedjeljak` text COLLATE utf8_unicode_ci NOT NULL,
  `utorak` text COLLATE utf8_unicode_ci NOT NULL,
  `srijeda` text COLLATE utf8_unicode_ci NOT NULL,
  `cetvrtak` text COLLATE utf8_unicode_ci NOT NULL,
  `petak` text COLLATE utf8_unicode_ci NOT NULL,
  `fk_uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `raspored`
--

INSERT INTO `raspored` (`rid`, `sat`, `ponedjeljak`, `utorak`, `srijeda`, `cetvrtak`, `petak`, `fk_uid`) VALUES
(564, '0.', 'Sat razrednika', 'Hrvatski jez.', 'Engleski jez.', '', '', 2),
(565, '1.', 'Fizika', 'Kemija', 'Biologija', 'Biologija', 'Povijest', 2),
(566, '2.', 'Geografija', 'Likovna kul.', 'Geografija', 'Tehnička kul', 'TZK', 2),
(567, '3.', 'Vjeronauk', 'Hrvatski jez.', 'Engleski jez.', 'Njemački jez.', 'Matematika', 2),
(568, '4.', 'Fizika', 'Kemija', 'Biologija', 'Priroda', 'Geografija', 2),
(569, '5.', 'Glazbena kul.', 'Likovna kul.', 'TZK', 'TZK', 'Informatika', 2),
(570, '6.', 'Vjeronauk', 'Kemija', 'Matematika', 'Hrvatski jez.', '', 2),
(571, '7.', '', '', '', '', '', 2),
(572, 'akt1', 'robotika', '', 'engleski dodatna', '', '', 2),
(573, 'akt2', 'robotika', '', '', '', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `testovi`
--

CREATE TABLE `testovi` (
  `id` int(11) NOT NULL,
  `datum` date DEFAULT NULL,
  `predmet` text COLLATE utf8_unicode_ci NOT NULL,
  `vrsta` text COLLATE utf8_unicode_ci NOT NULL,
  `fk_uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `testovi`
--

INSERT INTO `testovi` (`id`, `datum`, `predmet`, `vrsta`, `fk_uid`) VALUES
(88, '2020-02-27', 'Tehnička kul', 'pismeni', 8),
(90, '2020-02-28', 'Hrvatski jez.', 'lektira', 8),
(114, '2020-02-10', 'Hrvatski jez.', '', 8),
(142, '2020-02-29', 'Informatika', 'praktični rad', 2),
(143, '2020-02-28', 'Engleski jez.', 'usmeni', 2),
(144, '2020-03-03', 'Matematika', 'pismeni', 2),
(145, '2020-03-06', 'Geografija', 'prezentacija', 2),
(146, '2020-03-11', 'Hrvatski jez.', 'pismeni', 2),
(147, '2020-03-10', 'Engleski jez.', 'usmeni', 2),
(148, '2020-05-02', 'Sat razrednika', 'lektira', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `emailUsers` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `pwdUsers` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`) VALUES
(2, 'perica987', 'pbartulov@hotmail.com', '$2y$10$AsiAfuP7i9L76E9VgUXxsud0BR./o998/CYs3dxNZjl6gB0.ZPwuG'),
(8, 'pero', 'peric@hotmail.com', '$2y$10$Sj.YTcXPouaqMHJWxSvfXulysV0GBaWGouv2e8uzLuc.tkKONeJRC'),
(15, 'rope789', 'pbartulov2@hotmail.com', '$2y$10$HrApFZhJqD9ojJO.5bMSmu3gxk6RLprKTao3HEXHLA9lwy1ziv5aO'),
(16, 'perica9876', 'pbartulov@hotmai.com', '$2y$10$kcXvquY4cq68T4RqjhPs7.j/IeUbRGNevuWH1w395ESg/4csVFiSi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `informacije`
--
ALTER TABLE `informacije`
  ADD PRIMARY KEY (`idi`),
  ADD KEY `fk_uid` (`fk_uid`);

--
-- Indexes for table `obavijesti`
--
ALTER TABLE `obavijesti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_uid` (`fk_uid`);

--
-- Indexes for table `ocjene`
--
ALTER TABLE `ocjene`
  ADD PRIMARY KEY (`oid`),
  ADD KEY `fk_uid` (`fk_uid`);

--
-- Indexes for table `raspored`
--
ALTER TABLE `raspored`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `raspored_ibfk_1` (`fk_uid`);

--
-- Indexes for table `testovi`
--
ALTER TABLE `testovi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_uid` (`fk_uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `informacije`
--
ALTER TABLE `informacije`
  MODIFY `idi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `obavijesti`
--
ALTER TABLE `obavijesti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `ocjene`
--
ALTER TABLE `ocjene`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `raspored`
--
ALTER TABLE `raspored`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=584;

--
-- AUTO_INCREMENT for table `testovi`
--
ALTER TABLE `testovi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `informacije`
--
ALTER TABLE `informacije`
  ADD CONSTRAINT `informacije_ibfk_1` FOREIGN KEY (`fk_uid`) REFERENCES `users` (`idUsers`);

--
-- Constraints for table `obavijesti`
--
ALTER TABLE `obavijesti`
  ADD CONSTRAINT `obavijesti_ibfk_1` FOREIGN KEY (`fk_uid`) REFERENCES `users` (`idUsers`);

--
-- Constraints for table `ocjene`
--
ALTER TABLE `ocjene`
  ADD CONSTRAINT `ocjene_ibfk_1` FOREIGN KEY (`fk_uid`) REFERENCES `users` (`idUsers`);

--
-- Constraints for table `raspored`
--
ALTER TABLE `raspored`
  ADD CONSTRAINT `raspored_ibfk_1` FOREIGN KEY (`fk_uid`) REFERENCES `users` (`idUsers`);

--
-- Constraints for table `testovi`
--
ALTER TABLE `testovi`
  ADD CONSTRAINT `testovi_ibfk_1` FOREIGN KEY (`fk_uid`) REFERENCES `users` (`idUsers`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
