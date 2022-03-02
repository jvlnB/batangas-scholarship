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
-- Database: `u231655845_scholar`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `userID` int(11) NOT NULL,
  `usersName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `code` varchar(50) NOT NULL,
  `verify_key` varchar(255) NOT NULL,
  `verify_status` tinyint(1) NOT NULL,
  `creation_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`userID`, `usersName`, `email`, `pass`, `code`, `verify_key`, `verify_status`, `creation_date`) VALUES
(4, '', 'rhona.araza@g.batstate-u.edu.ph', 'passmeby28', '12345', '62f9cf21767ee374272ac0b343ee32cb', 1, '2021-11-22'),
(5, '', 'vinson.lat@g.batstate-u.edu.ph', 'vinson123', 'HIM27KWH', '7dbc4d5d3fab5d9becd10cd758204139', 1, '2021-11-22'),
(7, '', 'rufamaeatega@gmail.com', 'bongsoon14', 'HIM2WNBF', 'd39d37f2a92d9d13c1fc6c7d2e28c62c', 0, '2021-11-22'),
(8, '', 'naomi.sangalang@g.batstate-u.edu.ph', 'BAL030918', 'HIM8C8A7', '7a952e3f56532882280adb0bb3e0765a', 1, '2021-11-22'),
(9, '', 'Poliasluis00@gmail.com', 'Luispolias00', 'HIM4HEBH', '7ffdb9eeca5fa865d19514a1a207b105', 1, '2021-11-22'),
(10, '', 'roselmaluisa@gmail.com', 'roselmaluisa050300', 'HIM7QSZB', '05aa38202bd8fb9bd16ba766d0499dfe', 0, '2021-11-22'),
(11, '', 'eariola18@gmail.com', 'Ariola123', 'HIMAFKW4', 'de8b5d59d8c42d5cb7b477858b3d4edd', 1, '2021-11-22'),
(12, '', 'mylene.valencia@g.batstate-u.edu.ph', 'myy22', 'HIM93MXC', '4a6de3e74a766fb158e4d74782e7881d', 1, '2021-11-22'),
(13, '', 'magamponaaron@gmail.com', '123456', 'HIMAFKW4', '5c8e7ddb99a268c98ed10ece09efefda', 1, '2021-11-22'),
(14, '', 'lingadanica22@gmail.com', '123456789', 'HIMH9WPS', 'b234caf1ea1897287e5b58f776ef3058', 1, '2021-11-22'),
(15, '', 'fohibal299@keagenan.com', 'password', '1', 'df463f89015988a17f0558948cf12757', 1, '2021-11-22'),
(16, '', 'shairasgmn@gmail.com', 'alejandromarietta', 'HIMBPEKU', '34b6a1a44a42281ac79ef76dc384cd57', 1, '2021-11-22'),
(17, '', 'kierkaye.asis@g.batstate-u.edu.ph', '123456789', 'HIML3QR5', 'f9ad6932417401d33d0badb9476e0b71', 1, '2021-11-22'),
(18, '', 'casipitestelleannsocito20@gmail.com', '0111socito', 'HIMMUNLA', 'c7781623a68bf330312b8c5c60636566', 1, '2021-11-22'),
(19, '', 'chrs1323@gmail.com', 'Chrs13230123', 'HIM9UDRW', 'badbb37f9f710bb469be237db077e6f8', 1, '2021-11-23'),
(20, '', 'donnalie.balba@g.batstate-u.edu.ph', 'Kiesler12', 'HIMCQJMU', '829ec5858cfd0eb38081cde930341ee0', 1, '2021-11-23'),
(21, '', 'dailyn.pelaez@g.batstate-u.edu.ph', 'maybethistime', 'HIMMXKFB', 'f88e0a0cdf610368d017dc7bdc378577', 1, '2021-11-23'),
(22, '', 'dechavezrenalyn@gmail.com', '112277rena', 'HIMCS4X8', 'd8d4988af353df825fadc79816ee2e95', 1, '2021-11-23'),
(23, '', 'ilaganjackielyn00@gmail.com', 'LuisGabriel17', 'HIMN3NNS', 'e6f458c068ef1dff29df36cf0b3ecb29', 1, '2021-11-23'),
(24, '', 'jester.dechavez@g.batstate-u.edu.ph', '537837jpdc', 'HIMD8BGR', '9b1c308000aa7effe68bba9ab46639b9', 0, '2021-11-23'),
(25, '', 'pahagon747@jasmne.com', 'password', '1', 'a0a6651499608bd248f89d09df858a5f', 1, '2021-11-23'),
(26, '', 'jovelynbrojan37@gmail.com', '1234', 'HIMNWQLD', 'f993e9315190a0fab49168b6f2690f39', 1, '2021-11-24'),
(27, '', 'lester.cueva@g.batstate-u.edu.ph', 'Spidervenom', 'HIMPUSZA', '56c01ffed6e79de28aa25fbb4756cf67', 1, '2021-11-24'),
(28, '', 'aaronmagampon@gmail.com', '1234567', 'HIMQJ22L', '0ec6021354ca4a2880b62f65e4403a42', 1, '2021-11-27');

-- --------------------------------------------------------

--
-- Table structure for table `regcodes`
--

CREATE TABLE `regcodes` (
  `code` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0 = available, 1 = taken'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regcodes`
--

INSERT INTO `regcodes` (`code`, `status`) VALUES
('HIM27KWH', 1),
('HIM2KXEJ', 1),
('HIM2SYHG', 1),
('HIM2WNBF', 1),
('HIM4HEBH', 1),
('HIM7QSZB', 1),
('HIM8C8A7', 1),
('HIM93MXC', 1),
('HIM9UDRW', 1),
('HIMAFKW4', 1),
('HIMBF9C2', 1),
('HIMBPEKU', 1),
('HIMCQJMU', 1),
('HIMCS4X8', 1),
('HIMD8BGR', 1),
('HIMFY5JH', 1),
('HIMH9WPS', 1),
('HIML3QR5', 1),
('HIMMUNLA', 1),
('HIMMXKFB', 0),
('HIMN3NNS', 0),
('HIMNWQLD', 0),
('HIMPS2TR', 0),
('HIMPUSZA', 0),
('HIMQJ22L', 0),
('HIMR4AWP', 0),
('HIMR6SFW', 0),
('HIMRJP7F', 0),
('HIMT8XYQ', 0),
('HIMTVR6B', 0),
('HIMW7FH2', 0),
('HIMXMDLA', 0),
('HIMY6BJU', 0),
('HIMZ9S2Q', 0),
('HIMZTJ3Z', 0);

-- --------------------------------------------------------

--
-- Table structure for table `requirements`
--

CREATE TABLE `requirements` (
  `req_id` int(11) NOT NULL,
  `regFile_name` varchar(255) NOT NULL,
  `regStatus` varchar(50) NOT NULL,
  `grFile_name` varchar(255) NOT NULL,
  `gr_evalStatus` varchar(50) NOT NULL,
  `idFile_name` varchar(255) NOT NULL,
  `id_status` varchar(50) NOT NULL,
  `eval_form` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `dis_reason` mediumtext NOT NULL,
  `userID` int(11) NOT NULL,
  `date_updated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requirements`
--

INSERT INTO `requirements` (`req_id`, `regFile_name`, `regStatus`, `grFile_name`, `gr_evalStatus`, `idFile_name`, `id_status`, `eval_form`, `status`, `dis_reason`, `userID`, `date_updated`) VALUES
(1, '1637596583965-329751867.jpg', '', '1637596606103-1047249695.jpg', '', '1637596618141-145878461.jpg', '', '', '', '', 5, '2021-11-22 16:00:04'),
(2, 'Student Portal COR - Dashboard.pdf', '', '', '', '', '', '', '', '', 11, '2021-11-22 16:06:46'),
(3, '', '', '', '', '', '', 'doc.pdf', '', '', 13, '2021-11-23 14:18:24'),
(4, '270317964719185.png', 'Valid', '270317964719185.png', 'Valid', '270317964719185.png', 'Valid', '', 'APPROVED', '', 16, '2021-11-22 23:42:14'),
(5, 'Certified True Copy of Registration Form.docx', '', 'Certified True Copy of Grades.docx', '', 'Photocopy of Student I.D..docx', '', '', '', '', 18, '2021-11-23 00:06:36'),
(6, 'Student Portal - Dashboard (1).pdf', '', 'Student Portal - Dashboard.pdf', '', 'Student Portal - Dashboard.pdf', '', '', '', '', 20, '2021-11-23 00:27:19'),
(7, 'Midterm Solution_ MOPON-RENALYN-D.IE-3301.pdf', 'Valid', 'Mopon, Renalyn D..pdf', 'Valid', 'solution.pdf', 'Valid', 'Quiz1  Mopon Renalyn D.pdf', 'APPROVED', '', 22, '2021-11-23 00:45:35'),
(8, 'Sample PDF.pdf', '', '', '', '', '', '', '', '', 17, '2021-11-23 01:04:27'),
(9, 'sample_file.php', '', '', '', '', '', '', '', '', 15, '2021-11-23 01:16:24'),
(10, 'regform.pdf', 'Valid', 'grades.pdf', 'Not Valid', 'ID.pdf', 'Valid', 'doc.pdf', 'DISAPPROVED', 'invalid evaluation form', 23, '2021-11-24 02:35:30'),
(11, '', '', 'sample_file2s.php', '', '', '', 'sample_fils.php', '', '', 25, '2021-11-23 15:40:50'),
(12, 'reg form.pdf', 'Valid', 'grades.pdf', 'Valid', 'Brojan, Jovelyn B..pdf', 'Valid', 'jov.pdf', 'APPROVED', '', 26, '2021-11-24 03:09:41'),
(13, 'regform.pdf', '', 'grades.pdf', '', 'ID.pdf', '', 'doc (1).pdf', '', '', 9, '2021-11-24 04:02:22'),
(14, 'RegForm_2nd Sem (2020)_Aaron.pdf', '', 'Grade_2ndSem(2019-20)_Magampon, Aaron.pdf', '', 'Application Form.pdf', '', 'eval_form.pdf', '', '', 28, '2021-11-30 07:03:58'),
(17, 'A.pdf', '', 'B.pdf', '', 'eval.pdf', '', 'C.pdf', '', '', 26, '2021-12-10 13:47:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notif`
--

CREATE TABLE `tbl_notif` (
  `id` int(11) NOT NULL,
  `eval_count` int(11) NOT NULL,
  `n_read` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_notif`
--

INSERT INTO `tbl_notif` (`id`, `eval_count`, `n_read`) VALUES
(1, 1, 1),
(2, 23, 1),
(3, 26, 1),
(4, 9, 1),
(5, 28, 1),
(6, 26, 1),
(7, 26, 1);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `infoID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `profPic` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `bday` date NOT NULL,
  `bplace` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `num` bigint(20) NOT NULL,
  `category` varchar(255) NOT NULL,
  `house_Add` varchar(255) NOT NULL,
  `brgy` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `year_lvl` varchar(255) NOT NULL,
  `units` int(11) NOT NULL,
  `exp_grad` int(50) NOT NULL,
  `graduating` varchar(50) NOT NULL,
  `sch_name` varchar(255) NOT NULL,
  `sch_add` varchar(255) NOT NULL,
  `date_updated` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`infoID`, `userID`, `profPic`, `first_name`, `middle_name`, `last_name`, `suffix`, `bday`, `bplace`, `age`, `sex`, `num`, `category`, `house_Add`, `brgy`, `city`, `province`, `program`, `year_lvl`, `units`, `exp_grad`, `graduating`, `sch_name`, `sch_add`, `date_updated`) VALUES
(1, 4, '', 'Rhona', 'Fernandez', 'Araza', '', '1999-11-28', 'Bayambang, Pangasinan', 21, 'female', 9060087415, 'BPSP -SCHEME 1', 'San felix', 'San felix', '4234', 'Batangas', 'Bsie', '4th', 350, 2022, '', 'Batangas state university', 'Poblacion, malvar, batangas', '2021-11-22'),
(2, 5, '', 'Vinson', 'Dantes', 'Lat', '', '1999-07-13', 'MALVAR BATANGAS', 22, 'male', 9471062800, 'BPSP -SCHEME 1', '042', 'Luta Sur', '4233', 'BATANGAS', 'BSIT', '4th Year', 21, 2022, '', 'Batangas State University', 'G. Leviste St. Poblacion, Malvar, Batangas', '2021-11-22'),
(4, 7, '', 'rufa mae', 'sanchez', 'atega', '', '1998-11-15', 'Batangas', 23, 'female', 9511220507, 'BPSP -SCHEME 1', 'G. Leviste', 'Poblacion', '4233', 'Batangas', 'BSMexE', '4th year', 22, 2022, '', 'Batangas State University', 'Malvar Batangas', '2021-11-22'),
(5, 8, 'wp4762565.jpg', 'NAOMI', 'DE GUZMAN', 'SANGALANG', '', '2000-07-11', 'TANAUAN CITY BATANGAS', 21, 'female', 9075681471, 'BPEAP', '011', 'BALAS', '4220', 'BATANGAS', 'BACHELOR OF SECONDARY EDUCATION MAJOR IN SCIENCES', '4TH YEAR', 22, 2022, '', 'BATANGAS STATE UNIVERSITY-JPLPC MALVAR ', 'MALVAR BATANGAS', '2021-11-22'),
(6, 9, 'images.jpeg', 'Luis Gabriel', '', 'Polias', '', '2000-02-24', 'Santa Rosa, Laguna', 21, 'male', 9454929892, 'BPEAP', 'Block 11 Lot 17 Pili Street, Park Place, Pueblo De Oro', 'San Rafael', '4234', 'Batangas', 'BSIT', '4th Year', 23, 2022, '', 'Batangas State University', 'Malvar, Batangas', '2021-11-22'),
(7, 10, '', 'Ma. Luisa', 'Paracuellas', 'Rosel', '', '2000-05-03', 'Makati City', 21, 'female', 9272192471, 'BPEAP', 'Las Palmas', 'II', '4234', 'Batangas', 'BSEE', '4th', 28, 2022, '', 'Laguna State Polytechnic Univesity', 'San Pablo City', '2021-11-22'),
(8, 11, '', 'Ejay', 'Ariola', 'Encarnacion', '', '2000-09-02', 'LAUREL, BATANGAS', 21, 'male', 9060452393, 'BPEAP', '009 elias caray street, poblacion 1, laurel, batangas', 'poblacion 1', '4221', 'batangas', 'Information Technology', 'Fourth year', 21, 2022, '', 'Ejay Encarnacion', 'JPLPC Malvar Batangas', '2021-11-22'),
(9, 12, 'BSU.png', 'Mylene', 'Mape', 'Valencia', '', '1998-04-22', 'Malvar', 23, 'female', 9273359454, 'BPSP -SCHEME 1', 'Malvar', 'San Andres ', '4233', 'Batangas', 'BSIT', '4th year ', 23, 2022, '', 'BSU - Malvar', 'JPLPC St. Joaquin', '2021-11-22'),
(10, 13, '22449449_876953805788170_1468872684_o.jpg', 'Aaron', 'Abescoro', 'Magampon', '', '1999-11-25', 'Tanauan City Batangas', 21, 'male', 9973905564, 'BPEAP', '036 Purok 2 Rizal Avenue Streer', 'Brgy. Santol', '4232', 'Batangas', 'Bachelor of Science in Information Technology', '4th', 21, 2022, '', 'Batangas State University', 'JPLPC- Malvar Batangas', '2021-11-22'),
(11, 14, '', 'Danica Rose', 'Near', 'Linga', '', '1999-11-01', 'Muntinlupa City', 22, 'female', 9456656471, 'BPEAP', 'Sec.10 Blk.7 Lot.3 Blue Isle Subdvision', 'Sta. Maria', '4234', 'Batangas', 'BS Computer Science', '4th year', 21, 2022, '', 'Batangas State University', 'Malvar Batangas', '2021-11-22'),
(13, 16, '', 'Shaira', 'Carandang', 'Sagmon', '', '1999-09-28', 'Tanauan City, Batangas', 22, 'Female', 9207950841, 'BPEAP', '1058', 'uno', '4232', 'Batangas', 'BSIE', '4th year', 10, 2022, '', 'BSU', 'JPLPC Malvar ', '2021-11-23'),
(14, 17, '', 'Asis', 'Natanauan', 'Kier', '', '2000-09-08', 'Batangas', 21, 'male', 9154612844, 'BPSP -SCHEME 1', 'None', 'None', '4221', 'Batangas', 'Computer Science', '4th', 21, 2022, '', 'Batangas State University', 'Malvar, Batangas', '2021-11-22'),
(15, 18, '', 'Estelle Ann', 'Socito', 'Casipit ', 'NA', '2000-01-11', 'Pasay City', 21, 'Female', 9480170532, 'BPEAP', 'Phase 2 Block 6 lot 22 Sec 4 ', 'dos', '4234', 'Batangas', 'Bachelor of Science in Computer Science', '4th year', 21, 2023, '', 'Batangas State University', 'JPLPC - Malvar Batangas', '2021-11-23'),
(16, 19, '', 'Charise Joy', 'Galario', 'Gonzales', '', '2000-02-13', 'Barangay 1, Tanauan City, Batangas', 21, 'female', 9083443537, 'BPEAP', '56 N. Gonzales St.', 'Barangay 2', '4232', 'Batangas', 'BSIT', '4th Year', 21, 2022, '', 'BSU', 'Malvar', '2021-11-23'),
(17, 20, '', 'Donnalie', 'J', 'Balba', '', '2000-03-26', 'Batangas City', 21, 'female', 109263117707, 'BPEAP', '127 Maria Paz Tanauan City', 'Maria Paz', '4232', 'Batangas', 'BSIE', '4th', 50, 2022, '', 'Donnalie Balba', 'Malvar', '2021-11-23'),
(18, 21, '', 'Dailyn', 'Atienza', 'Pelaez', '', '2000-02-23', 'Tanauan City', 21, 'female', 9770874806, 'BPEAP', '025 Purok 1', 'Altura Matanda', '4232', 'Batangas', 'BSBA-MARKETING MANAGEMENT', '4th Year', 21, 2022, '', 'Batangas State University', 'Malvar, Batangas', '2021-11-23'),
(19, 22, '20211027_225041.jpg', 'Min', 'Seok', 'Kim', '', '1996-11-27', 'Santiago', 27, 'female', 9072613093, 'BPSP -SCHEME 1', 'Pueblo', 'Santiago', '4234', 'Batangas', 'BSIE', '4th', 20, 2022, '', 'BSU MALVAR', 'Poblacion', '2021-11-23'),
(20, 23, 'IMG_20210314_102113.jpg', 'Jackielyn', 'Narvaez', 'Ilagan', '', '2000-05-16', 'Santol, Tanauan City, Batangas', 21, 'female', 9952362725, 'BPEAP', '036', 'Santol', '4232', 'Batangas', 'BSIT', '4th', 23, 2022, '', 'Batangas State University - Malvar Campus', 'Malvar, Batangas', '2021-11-23'),
(21, 24, '', 'Jester', 'Parra', 'de Chavez', '', '1999-10-04', 'City of Sto. Tomas', 22, 'male', 9516739568, 'BPEAP', '197', 'San Vicente', '4234', 'Batangas', 'Bachelor of Science in Industrial Engineering', 'Fourth Year College', 7, 2022, '', 'Batangas State university', 'Poblacion, Malvar, Batangas', '2021-11-23'),
(22, 25, 'sample_fils.php', '', '', '', '', '0000-00-00', '', 0, 'female', 0, 'BPEAP', '', '', '4211', '', '', '', 0, 2023, '', '', '', '2021-11-23'),
(23, 26, '91812862_2086352648177638_648650171772567552_n.jpg', 'Jovelyn', 'B.', 'Brojan', '', '1999-11-10', 'Calamba', 22, 'female', 9162045583, 'BPSP -SCHEME 2', 'Brgy. Makiling', 'Makiling', '4232', 'BATANGAS', 'BSIT', '4th year', 23, 2022, '', 'Lyceum of the Philippines Batangas', 'Malvar, Batangas', '2021-11-24'),
(24, 27, '', 'Lester1', 'Sanchez1', 'Cueva1', '', '2021-11-24', 'Sta Cruz Manila', 30, 'male', 9056620721, 'BPEAP', 'lkl', 'lkl', '4221', 'lk', 'lk', 'kl', 0, 2023, '', 'lk', 'lk', '2021-11-24'),
(25, 28, '', 'Mary Joy', 'Astejada', 'Villanueva', '', '1999-01-27', 'Lipa City, Batangas', 22, 'female', 9066414128, 'BPEAP', '0213 Mabini Street', 'Brgy. Sabang', '4217', 'Batangas', 'BS Nursing', '3rd Year', 31, 2022, '', 'Lyceum of the Philippines ', 'Batangas City', '2021-11-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `regcodes`
--
ALTER TABLE `regcodes`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `requirements`
--
ALTER TABLE `requirements`
  ADD PRIMARY KEY (`req_id`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `tbl_notif`
--
ALTER TABLE `tbl_notif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`infoID`),
  ADD KEY `userID` (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `requirements`
--
ALTER TABLE `requirements`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_notif`
--
ALTER TABLE `tbl_notif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `infoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `requirements`
--
ALTER TABLE `requirements`
  ADD CONSTRAINT `requirements_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `accounts` (`userID`);

--
-- Constraints for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD CONSTRAINT `userinfo_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `accounts` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
