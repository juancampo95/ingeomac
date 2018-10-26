-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2018 at 04:13 PM
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
  `username` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `obra_id` int(20) NOT NULL,
  `obra` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_creacion` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_modificacion` varchar(40) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `fullname`, `company`, `phone`, `cellphone`, `email`, `username`, `obra_id`, `obra`, `fecha_creacion`, `fecha_modificacion`) VALUES
(7, 'Daniela Salazar', 'Jaramillo Mora', 5879685, 3175503136, 'daniela@multiractiva.com.co', 'juan2019', 8855, 'ClÃ­nica de los remedios', '2018-08-04T01:21:37.537Z', '2018-10-11T01:49:04.359Z'),
(14, 'Juan Palmolive', 'Melendez', 355658, 3175666548, 'juan@palmolive.com', '', 9753, 'Edificio Palmolive', '2018-08-05T00:53:19.739Z', '2018-08-17T03:16:46.526Z'),
(16, 'Alejandro Carrera', 'Jaramillo Mora', 3968589, 300485968, 'alejo@mora.com', 'alejo2018', 6666, 'Torre blanca maestra', '2018-08-23T13:48:41.855Z', '2018-08-24T14:26:31.591Z'),
(17, 'Roberto', 'Melendez', 55555555, 3175503136, 'ceo@multiractiva.com', 'roberto36', 258, 'Proyect Juan', '2018-10-11T01:50:52.518Z', '2018-10-11T01:51:09.399Z');

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
(55, 8855, 'alquiler.docx', '2018-08-26T02:41:30+02:00', 'word.svg', 'alquiler_e'),
(56, 8855, 'FORMATO DE CUENTA.docx', '2018-10-11T03:51:48+02:00', 'word.svg', 'alquiler_e');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `reportes`
--
ALTER TABLE `reportes`
  MODIFY `id_docs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
