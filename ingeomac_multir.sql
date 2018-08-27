-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2018 at 05:16 PM
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
(7, 'Oscar Cardona', 'Jaramillo Mora', 5879685, 3175503136, 'ceo@multiractiva.net', 8855, 'ClÃ­nica de los remedios', '2018-08-04T01:21:37.537Z', '2018-08-04T18:21:53.619Z'),
(9, 'Roberto Carlos Campo', 'Jaramillo Mora', 3158596, 3175505586, 'manuel@jaramillomora.com', 8836, 'Casa Campo', '2018-08-04T01:24:49.537Z', '2018-08-04T18:23:09.428Z'),
(12, 'Manuel Sanchez', 'Jaramillo Mora', 325845, 3175503136, 'manuel@jaramillomora.com', 8975, 'ClÃ­nica de los remedios', '2018-08-04T18:20:57.500Z', ''),
(14, 'Juan Palmolive', 'Melendez', 355858, 3175685548, 'juan@palmolive.com', 9753, 'Edificio Palmolive', '2018-08-05T00:53:19.739Z', '2018-08-05T01:54:31.064Z');

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
(28, 8596, 'reneault.xlsx', '2018-08-07T23:31:23+02:00', 'excel.svg', 'proctor_mod'),
(29, 8456, 'hondadream.docx', '2018-08-08T00:17:15+02:00', 'word.svg', 'granulometrias'),
(30, 8457, 'tarjeta-nayibe.pdf', '2018-08-08T00:17:47+02:00', 'pdf.svg', 'e_compresion'),
(31, 9687, 'TARIFAS_MINIMAS_SUGERIDAS_ADGORA_2015.xls', '2018-08-08T00:47:16+02:00', 'excel.svg', 'proctor_mod'),
(32, 5846, 'densidades_98912.docx', '2018-08-08T01:04:07+02:00', 'word.svg', 'densidades'),
(33, 8578, 'proctor.docx', '2018-08-08T01:16:41+02:00', 'word.svg', 'proctor_mod'),
(34, 8578, 'PIXNIO-206725.jpg', '2018-08-08T01:20:00+02:00', 'archivo.svg', 'densidades'),
(35, 9685, 'densidades 45896.docx', '2018-08-08T16:18:35+02:00', 'word.svg', 'densidades');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `reportes`
--
ALTER TABLE `reportes`
  MODIFY `id_docs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
