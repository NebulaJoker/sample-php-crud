-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2024 at 03:40 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inmate`
--
CREATE DATABASE IF NOT EXISTS `inmate` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `inmate`;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `inmate_id` int(11) NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `record` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`inmate_id`, `relationship`, `number`, `record`) VALUES
(1, 'Cousin', 212723847, 1),
(2, 'Mother', 212277295, 2),
(3, 'Aunt', 212538450, 3),
(4, 'Aunt', 212391612, 4),
(5, 'Father', 212435298, 5),
(6, 'Aunt', 212721757, 6),
(7, 'Cousin', 212653406, 7),
(8, 'Father', 212104071, 8),
(9, 'Father', 212849712, 9),
(10, 'Uncle', 212842951, 10),
(11, 'Sister', 212171071, 11),
(12, 'Aunt', 212185274, 12),
(13, 'Grandfather', 212454542, 13),
(14, 'Uncle', 212532670, 14),
(15, 'Mother', 212842529, 15),
(16, 'Brother', 212717584, 16),
(17, 'Aunt', 212111760, 17),
(18, 'Mother', 212916489, 18),
(19, 'Father', 212433885, 19),
(21, 'Mother', 210034500, 21),
(21, 'Grandmother', 210000085, 22);

-- --------------------------------------------------------

--
-- Table structure for table `inmate`
--

DROP TABLE IF EXISTS `inmate`;
CREATE TABLE `inmate` (
  `inmate_id` int(11) NOT NULL COMMENT 'Primary Key',
  `name` varchar(255) DEFAULT NULL,
  `age` int(11) NOT NULL,
  `gender` char(1) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inmate`
--

INSERT INTO `inmate` (`inmate_id`, `name`, `age`, `gender`, `address`) VALUES
(1, 'Hyndia Vasconcelos', 28, 'F', 'Rua Mina 112 Castelo Branco 6250-112 Caria Gare'),
(2, 'Alexandr Rodovalho', 49, 'M', 'R Cimo Povo 72 Porto 4610-699 Outeiro Velho'),
(3, 'Muhammad Gravato', 59, 'M', 'R Cerdeira Ervas 82 Braga 4705-733 Braga'),
(4, 'Alexa Gorjão', 21, 'F', 'R Nossa Senhora Fátima 62 Coimbra 3400-261 Cimo Da Ribeira'),
(5, 'Mame Lários', 43, 'M', 'Avenida Madre Andaluz 117 Santarém 2040-123 Freiria'),
(6, 'Neliany Varão', 41, 'F', 'R Poeta João Ruiz 68 Castelo Branco 6215-290 Erada'),
(7, 'Haylla Quesado', 43, 'F', 'R Amadeu S Cardoso 113 Setúbal 2865-654 Quinta Das Laranjeiras'),
(8, 'Bevan Barra', 44, 'M', 'Avenida João Crisóstomo 97 Lisboa 1000-216 Lisboa'),
(9, 'Valquíria Veleda', 36, 'F', 'R Forças Armadas 41 Beja 7645-302 Vila Nova De Milfontes'),
(10, 'Karna Saltão', 52, 'M', 'R São João 24 Beja 7920-366 Vila Nova Da Baronia'),
(11, 'Enrik Sanches', 25, 'M', 'Avenida Forças Armadas 14 Lisboa 1169-040 Lisboa'),
(12, 'Yago Chaves', 31, 'M', 'Rua Condes Torre 29 Portalegre 7330-263 Santo António Das Areias'),
(13, 'Ava Gago', 23, 'F', 'R Desidério Bessa 16 Lisboa 1495-716 Dafundo'),
(14, 'Marat Boga', 20, 'M', 'R Alto Paixão 70 Braga 4720-581 Aguião'),
(15, 'Khusbhu Canela', 62, 'F', 'R Maria L Sales 39 Beja 7800-680 Salvada'),
(16, 'Guadalupe Roçadas', 45, 'F', 'R Principal 86 Guarda 6270-469 Seia'),
(17, 'Afna Linhares', 52, 'F', 'Rua Índia 64 Lisboa 2795-123 Linda A Velha'),
(18, 'Danil Matos', 60, 'M', 'R Alferes Veiga Pestana 30 Ilha da Madeira 9230-146 Covas'),
(19, 'Preciosa Severo', 23, 'F', 'Avenida Manuel Figueiredo 36 Santarém 2490-140 Gondemaria'),
(21, 'Arisha Robalo', 29, 'F', 'R Pinhão 118 Setúbal 2925-153 Azeitão'),
(22, 'Maria Santos', 35, 'F', 'Rua Condes Torre 68 Portalegre 7370-066 Campo Maior');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`record`),
  ADD KEY `inmate_id` (`inmate_id`);

--
-- Indexes for table `inmate`
--
ALTER TABLE `inmate`
  ADD PRIMARY KEY (`inmate_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `record` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `inmate`
--
ALTER TABLE `inmate`
  MODIFY `inmate_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `inmate_id` FOREIGN KEY (`inmate_id`) REFERENCES `inmate` (`inmate_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
