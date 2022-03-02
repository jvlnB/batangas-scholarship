-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 09, 2022 at 03:59 AM
-- Server version: 10.5.12-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u231655845_admin_eval`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `ID` int(11) NOT NULL,
  `Username` varchar(128) NOT NULL,
  `Password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`ID`, `Username`, `Password`) VALUES
(1, 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_posted` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `title`, `message`, `img`, `date_posted`) VALUES
(1, 'Submission', 'Submission of requirements will be until December 18, 2021 only. Kindly submit all the needed requirements ASAP. Thank you!', 'BSU.png', '2021-12-13');

-- --------------------------------------------------------

--
-- Table structure for table `evaluators_accs`
--

CREATE TABLE `evaluators_accs` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evaluators_accs`
--

INSERT INTO `evaluators_accs` (`id`, `username`, `password`, `area`) VALUES
(1, 'Agoncillo_eval', 'agoncillo_area_4211', '4211'),
(2, 'Alitagtag_eval', 'alitagtag_area_4205', '4205'),
(3, 'Balayan_eval', 'balayan_area_4213', '4213'),
(4, 'Balete_eval', 'balete_area_4219', '4219'),
(5, 'Batangas_eval', 'batangas_area_4200', '4200'),
(6, 'Bauan_eval', 'bauan_area_4201', '4201'),
(7, 'Calaca_eval', 'calaca_area_4212', '4212'),
(8, 'Calatagan_eval', 'calatagan_area_4215', '4215'),
(9, 'Cuenca_eval', 'cuenca_area_4222', '4222'),
(10, 'Fernando_eval', 'fernando_area_4218', '4218'),
(11, 'Ibaan_eval', 'ibaan_area_4230', '4230'),
(12, 'Laurel_eval', 'laurel_area_4221', '4221'),
(13, 'Lemery_eval', 'lemery_area_4209', '4209'),
(14, 'Lian_eval', 'lian_area_4216', '4216'),
(15, 'Lipa_eval', 'lipa_area_4217', '4217'),
(16, 'Lobo_eval', 'lobo_area_4229', '4229'),
(17, 'Mabini_eval', 'mabini_area_4202', '4202'),
(18, 'Malvar_eval', 'malvar_area_4233', '4233'),
(19, 'Mataas_na_kahoy_eval', 'mataas_area_4223', '4223'),
(20, 'Nasugbu_eval', 'nasugbu_area_4231', '4231'),
(21, 'Padre_Garcia', 'padre_garcia_area_4224', '4224'),
(22, 'Rosario_eval', 'rosario_area_4225', '4225'),
(23, 'Mabini_eval', 'mabini_area_4202', '4202'),
(24, 'San_Jose_eval', 'jose_area_4227', '4227'),
(25, 'San_Juan_eval', 'juan_area_4226', '4226'),
(26, 'San_Luis_eval', 'luis_area_4210', '4210'),
(27, 'San Nicolas_eval', 'nicolas_area_4207', '4207'),
(28, 'San_Pascual_eval', 'pascual_area_4204', '4204'),
(29, 'Sta_Teresita_eval', 'teresita_area_4206', '4206'),
(30, 'Sto_Tomas_eval', 'tomas_area_4234', '4234'),
(31, 'Taal_eval', 'taal_area_4208', '4208'),
(32, 'Talisay_eval', 'talisay_area_4220', '4220'),
(33, 'Tanauan_eval', 'tanauan_area_4232', '4232'),
(34, 'Taysan_eval', 'taysan_area_4228', '4228'),
(35, 'Tingloy', 'tingloy_area_4203', '4203'),
(36, 'Uy_eval', 'uy_area_4214', '4214');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evaluators_accs`
--
ALTER TABLE `evaluators_accs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `evaluators_accs`
--
ALTER TABLE `evaluators_accs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
