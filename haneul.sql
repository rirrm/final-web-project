-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2023 at 12:25 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `haneul`
--

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `Id` int(11) NOT NULL,
  `home_image` varchar(255) NOT NULL,
  `home_emri` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`Id`, `home_image`, `home_emri`) VALUES
(1, './images/laneigehome.png', 'LIP SLEEPING MASK (MINT CHOCO)'),
(2, './images/rice-arabutin.jpg', 'Beauty of Joseon GLOW DEEP SERUM RICE + ALPHA ARBUTIN'),
(3, './images/CLEANSING-BAR.jpg', 'SOME BY MI AHA-BHA-PHA 30 DAYS MIRACLE CLEANSING BAR'),
(4, './images/pomegrenate.jpg', 'Missha Air Fit Sheet Mask Pomegranate');

-- --------------------------------------------------------

--
-- Table structure for table `kontakti`
--

CREATE TABLE `kontakti` (
  `Id` int(11) NOT NULL,
  `emri` varchar(255) NOT NULL,
  `mbiemri` varchar(255) NOT NULL,
  `mesazhi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lajmi`
--

CREATE TABLE `lajmi` (
  `Id` int(11) NOT NULL,
  `lajmi_titulli` varchar(255) NOT NULL,
  `lajmi_foto` varchar(255) NOT NULL,
  `lajmi_pershkrimi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lajmi`
--

INSERT INTO `lajmi` (`Id`, `lajmi_titulli`, `lajmi_foto`, `lajmi_pershkrimi`) VALUES
(6, 'Një udhëzues për t\'u kujdesur për lëkurën tuaj', './images/Hailey-About-BW_2000x.jpg', '1. Pastrimi: Zgjidhni një pastrues që nuk e lë lëkurën tuaj të shtrënguar pas larjes. Pastroni fytyrën tuaj jo më shumë se dy herë në ditë, ose vetëm një herë, nëse keni lëkurë të thatë dhe nuk përdorni grim.  2. Serumet: Një serum me vitaminë C ose faktorë rritjeje ose peptide do të ishte më mirë në mëngjes, nën kremrat e diellit. Natën, retinoli ose retinoidet me recetë funksionojnë më mirë.  3. Hidratues: Edhe lëkura e yndyrshme ka nevojë për hidratues, por përdorni një që është i lehtë, me bazë xhel ose që nuk bllokon poret tuaja. Lëkura e thatë mund të përfitojë nga më shumë hidratues me bazë kremi.  4. Krem kundër diellit: Aplikoni krem kundër diellit me të paktën 30 SPF 15 minuta përpara se të dilni jashtë, pasi duhet pak kohë që kremi kundër diellit të aktivizohet. Tonet e errëta të lëkurës në fakt kanë nevojë për më shumë mbrojtje nga dielli sepse hiperpigmentimi është më i vështirë për t\'u korrigjuar.'),
(8, 'Lokacioni më i ri', './images/Pristina-Mall.jpg', 'Na gjeni tani në pikën më të re në Prishtina Mall. Hapësirë moderne ku mund të ndiheni rehat të bëni zgjidhjen e duhur për lëkurën tuaj. Ju mirëpret stafi i ngrohtë i Haneul !!'),
(9, 'Si funksionojnë maskat për buzë ?', './images/laneige.webp', 'Ndërsa një balsam buzësh hidraton buzët tuaja, një maskë buzësh ofron një trajtim më intensiv.Formula e maskës së buzëve mund t\'i kthejë buzët tuaja në formë, duke ofruar rezultate qetësuese, të mbushura dhe zbutëse. Dhe, ndryshe nga balsamet e buzëve, rezultatet e maskës së buzëve duhet të zgjasin më gjatë pasi përbërësit e tyre hidratues ofrojnë një dozë më të thellë kujdesi. Kjo gjithashtu do të thotë që nuk keni nevojë të riaplikoni disa herë.Si çdo produkt bukurie, shumëllojshmëria e maskave të buzëve atje është e gjerë. Në përgjithësi, ato janë bërë me përbërës më të trashë se balsamët e buzëve, si gjalpi shea, vaji i kokosit ose vaji jojoba.Ata gjithashtu vijnë në të gjitha format e ndryshme - fletë, pelte ose argjilë, ju emërtoni! Disa maska janë menduar të mbahen për rreth 15 minuta, ndërsa të tjerat vihen në punë gjatë gjithë natë. Mënyra për të kërkuar maskat më të më të mira të buzëve është e thjeshtë: shikoni listën e përbërësve.');

-- --------------------------------------------------------

--
-- Table structure for table `produkti`
--

CREATE TABLE `produkti` (
  `Id` int(11) NOT NULL,
  `prod_pershkrimi` varchar(255) NOT NULL,
  `prod_foto` varchar(255) NOT NULL,
  `prod_cmimi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produkti`
--

INSERT INTO `produkti` (`Id`, `prod_pershkrimi`, `prod_foto`, `prod_cmimi`) VALUES
(3, 'Beauty of Joseon Glow Serum Proplis & Niacinamide', './images/1.jpg', '19.99'),
(4, 'Beauty of Joseon Relief Sun Rice + Probiotics 50ml', './images/2.jpg', '20.00'),
(5, 'MISSHA Airy Fit Sheet Mask', './images/3.jpg', '2.80'),
(6, 'Missha Perfect Cover BB Cream', './images/4.jpg', '15.00'),
(7, 'Beauty of Joseon GLOW DEEP SERUM RICE + ALPHA ARBUTIN', './images/5.jpg', '17.59'),
(8, 'ALOE REAL COOL SOOTHING GEL', './images/6.jpeg', '6.75'),
(9, 'JEJU Volcanic Scoria Konjac Sponge', './images/7.jpg', '6.30'),
(10, 'LIP SLEEPING MASK (MINT CHOCO)', './images/8.jpg', '17.00'),
(11, 'Missha All-around Safe Block Soft Finish Sun Milk', './images/9.jpg', '22.50'),
(12, 'ACNE PIMPLE MASTER PATCH 24pcs', './images/10.jpg', '6.00'),
(13, 'Laneige Lip Sleeping Mask EX Grapefruit 20gr', './images/11.jpeg', '20.00'),
(14, 'MISSHA Mascure Moisture Solution Sheet Mask Ceramide', './images/12.jpg', '3.50'),
(15, 'CARMEX CLASSIC JAR', './images/13.jpg', '3.00'),
(16, 'Missha All Around Safe Block Daily Sun SPF50+ PA++++ 50ml', './images/14.jpg', '14.50'),
(17, 'CARMEX PREMIUM LIME STICK SPF 15', './images/15.jpg', '2.56'),
(18, 'Missha Air Fit Sheet Mask Pomegranate', './images/16.jpg', '2.80'),
(19, 'COSRX LOW PH GOOD MORNING CLEANSER', './images/17.jpg', '14.00'),
(20, 'COSRX Aloe Soothing Sun Cream Spf 50+ Pa+++ 50ml', './images/18.jpg', '15.50'),
(21, 'Fermented Complex 94 Boosting Essence', './images/19.jpg', '24.50'),
(22, 'Beauty of Joseon Dynasty Cream', './images/20.jpg', '21.99'),
(23, 'BENTON SNAIL BEE HIGH CONTENT MASK PACK', './images/21.jpg', '2.62'),
(24, 'SHEA BUTTER & COCONUT BODY LOTION', './images/22.jpg', '24.00'),
(25, 'SOME BY MI AHA-BHA-PHA 30 DAYS MIRACLE CLEANSING BAR', './images/23.jpg', '13.00'),
(26, 'Etude House My Beauty Tool Pimple Popper', './images/24.jpg', '6.00'),
(27, 'ETUDE MY LASH SERUM', './images/25.jpg', '12.50'),
(28, 'SNAIL BEE HIGH CONTENT SKIN ', './images/26.jpg', '20.00'),
(29, 'CARMEX PREMIUM VANILLA STICK SPF 15', './images/27.jpg', '3.20'),
(30, 'Etude Dear Darling Water Gel Tint PK004', './images/28.jpg', '7.50');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userpassword` binary(60) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `email`, `username`, `userpassword`, `role`) VALUES
(4, 'admin1@gmail.com', 'admin', 0x243279243130242e49336a79514d4e51794f77774575512f536753702e5177755138703731737a79484c5a4737456d4668343050306d4245512f7a69, 1),
(5, 'admin2@gmail.com', 'adminn', 0x24327924313024392f494c64387030664c6876427877435467386b467561574253736751303735385a474c47785a772e31795936474970452f5a796d, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `kontakti`
--
ALTER TABLE `kontakti`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `lajmi`
--
ALTER TABLE `lajmi`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `produkti`
--
ALTER TABLE `produkti`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kontakti`
--
ALTER TABLE `kontakti`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lajmi`
--
ALTER TABLE `lajmi`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `produkti`
--
ALTER TABLE `produkti`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
