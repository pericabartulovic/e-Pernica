-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2020 at 12:49 AM
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
-- Table structure for table `testovi`
--

CREATE TABLE `testovi` (
  `id` int(11) NOT NULL,
  `datum` date NOT NULL,
  `predmet` text COLLATE utf8_unicode_ci NOT NULL,
  `vrsta` text COLLATE utf8_unicode_ci NOT NULL,
  `fk_uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `testovi`
--

INSERT INTO `testovi` (`id`, `datum`, `predmet`, `vrsta`, `fk_uid`) VALUES
(50, '2020-02-21', 'Priroda', 'pismeni', 2),
(54, '2020-02-11', 'Matematika', 'pismeni', 8);

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
(15, 'rope789', 'pbartulov2@hotmail.com', '$2y$10$HrApFZhJqD9ojJO.5bMSmu3gxk6RLprKTao3HEXHLA9lwy1ziv5aO');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `testovi`
--
ALTER TABLE `testovi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `testovi`
--
ALTER TABLE `testovi`
  ADD CONSTRAINT `testovi_ibfk_1` FOREIGN KEY (`fk_uid`) REFERENCES `users` (`idUsers`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
