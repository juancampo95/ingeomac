-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2018 at 04:06 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ingeomac_multir`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `fullname` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `company` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `phone` bigint(13) NOT NULL,
  `cellphone` bigint(13) NOT NULL,
  `email` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `obra_id` int(20) NOT NULL,
  `obra` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_creacion` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_modificacion` varchar(40) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `fullname`, `company`, `phone`, `cellphone`, `email`, `obra_id`, `obra`, `fecha_creacion`, `fecha_modificacion`) VALUES
(7, 'Juan Camilo Campo', 'Jaramillo Mora', 5879685, 3175503136, 'ceo@multiractiva.com.co', 8855, 'ClÃ­nica de los remedios', '2018-08-04T01:21:37.537Z', '2018-08-22T19:57:22.572Z'),
(12, 'Manuel Sanchez', 'Jaramillo Mora', 4458596, 3175503137, 'manuel@jaramillomora.com', 8975, 'ClÃ­nica de los remedios', '2018-08-04T18:20:57.500Z', '2018-08-22T19:47:35.390Z'),
(14, 'Juan Palmolive', 'Melendez', 355658, 3175666548, 'juan@palmolive.com', 9753, 'Edificio Palmolive', '2018-08-05T00:53:19.739Z', '2018-08-17T03:16:46.526Z'),
(16, 'Alejandro Carrera', 'Jaramillo Mora', 3968589, 300485968, 'alejo@mora.com', 6666, 'Torre blanca maestra', '2018-08-23T13:48:41.855Z', '2018-08-23T13:50:04.831Z');

-- --------------------------------------------------------

--
-- Table structure for table `reportes`
--

CREATE TABLE `reportes` (
  `id_docs` int(11) NOT NULL,
  `obra_id_docs` int(10) NOT NULL,
  `name_docs` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `create_date_docs` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `formato_docs` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `type_doc` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `reportes`
--

INSERT INTO `reportes` (`id_docs`, `obra_id_docs`, `name_docs`, `create_date_docs`, `formato_docs`, `type_doc`) VALUES
(27, 8578, 'densidades_9892.docx', '2018-08-07T23:19:05+02:00', 'word.svg', 'densidades'),
(29, 8456, 'hondadream.docx', '2018-08-08T00:17:15+02:00', 'word.svg', 'granulometrias'),
(30, 8457, 'tarjeta-nayibe.pdf', '2018-08-08T00:17:47+02:00', 'pdf.svg', 'e_compresion'),
(32, 5846, 'densidades_98912.docx', '2018-08-08T01:04:07+02:00', 'word.svg', 'densidades'),
(38, 5218, 'CAMISETA.pdf', '2018-08-09T18:57:48+02:00', 'pdf.svg', 'proctor_mod'),
(40, 1232, 'TARIFAS_.xls', '2018-08-09T19:27:31+02:00', 'excel.svg', 'proctor_mod'),
(41, 8855, 'JamundÃ­.docx', '2018-08-22T18:31:30+02:00', 'word.svg', 'densidades'),
(42, 8855, 'densidades 2018.docx', '2018-08-22T18:33:11+02:00', 'word.svg', 'densidades'),
(43, 8975, 'densidades 2018.docx', '2018-08-22T18:55:18+02:00', 'word.svg', 'densidades'),
(44, 8975, 'MODIFICACIONES .docx', '2018-08-22T19:12:38+02:00', 'word.svg', 'densidades'),
(46, 8975, 'proctor18.docx', '2018-08-22T19:46:32+02:00', 'word.svg', 'proctor_mod'),
(47, 8975, 'MODIFICACIONES .docx', '2018-08-22T19:47:07+02:00', 'word.svg', 'proctor_mod'),
(48, 9999, 'densidades.docx', '2018-08-22T22:05:00+02:00', 'word.svg', 'densidades'),
(49, 9999, 'proctor.docx', '2018-08-22T22:05:33+02:00', 'word.svg', 'proctor_mod'),
(50, 6666, 'densidates.docx', '2018-08-23T15:50:52+02:00', 'word.svg', 'densidades'),
(51, 6666, 'proctor.docx', '2018-08-23T15:52:42+02:00', 'word.svg', 'proctor_mod'),
(52, 6666, 'MODIFICACIONES .docx', '2018-08-23T15:53:03+02:00', 'word.svg', 'proctor_mod');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `empleado` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `username` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(60) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `empleado`, `username`, `contrasena`) VALUES
(1, 'Juan Camilo Campo', 'JuanCampo95', 'camilocampo'),
(2, 'Maicol Garzón', 'maicol_ingeomac', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`id_docs`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `reportes`
--
ALTER TABLE `reportes`
  MODIFY `id_docs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
