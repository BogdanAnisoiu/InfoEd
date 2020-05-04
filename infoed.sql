-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2020 at 01:36 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infoed`
--

-- --------------------------------------------------------

--
-- Table structure for table `materii`
--

CREATE TABLE `materii` (
  `id_materie` int(11) NOT NULL,
  `denumire_materie` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materii`
--

INSERT INTO `materii` (`id_materie`, `denumire_materie`) VALUES
(1, 'Matematica'),
(2, 'Informatica');

-- --------------------------------------------------------

--
-- Table structure for table `teste`
--

CREATE TABLE `teste` (
  `id_test` int(11) NOT NULL,
  `id_materie` int(11) NOT NULL,
  `intrebare1` text NOT NULL,
  `v11` text NOT NULL,
  `v12` text NOT NULL,
  `v13` text NOT NULL,
  `v14` text NOT NULL,
  `v15` text NOT NULL,
  `raspuns_corect1` int(11) NOT NULL,
  `intrebare2` text NOT NULL,
  `v21` text NOT NULL,
  `v22` text NOT NULL,
  `v23` text NOT NULL,
  `v24` text NOT NULL,
  `v25` text NOT NULL,
  `raspuns_corect2` int(11) NOT NULL,
  `intrebare3` text NOT NULL,
  `v31` text NOT NULL,
  `v32` text NOT NULL,
  `v33` text NOT NULL,
  `v34` text NOT NULL,
  `v35` text NOT NULL,
  `raspuns_corect3` int(11) NOT NULL,
  `intrebare4` text NOT NULL,
  `v41` text NOT NULL,
  `v42` text NOT NULL,
  `v43` text NOT NULL,
  `v44` text NOT NULL,
  `v45` text NOT NULL,
  `raspuns_corect4` int(11) NOT NULL,
  `intrebare5` text NOT NULL,
  `v51` text NOT NULL,
  `v52` text NOT NULL,
  `v53` text NOT NULL,
  `v54` text NOT NULL,
  `v55` text NOT NULL,
  `raspuns_corect5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teste`
--

INSERT INTO `teste` (`id_test`, `id_materie`, `intrebare1`, `v11`, `v12`, `v13`, `v14`, `v15`, `raspuns_corect1`, `intrebare2`, `v21`, `v22`, `v23`, `v24`, `v25`, `raspuns_corect2`, `intrebare3`, `v31`, `v32`, `v33`, `v34`, `v35`, `raspuns_corect3`, `intrebare4`, `v41`, `v42`, `v43`, `v44`, `v45`, `raspuns_corect4`, `intrebare5`, `v51`, `v52`, `v53`, `v54`, `v55`, `raspuns_corect5`) VALUES
(1, 2, 'Cati luptatori a avut Leonidas sub carma sa: ', '300', '1000', '7000', '480', '2500', 3, 'Din cati soldati era alcatuita armata persana: ', '100000-150000', 'Peste un milion ', '250000', '90000', '500000', 1, 'Cate zile au tinut grecii piept persilor?', '2 zile', '7 zile', '10 zile', '5 zile', '1 zi', 2, 'In ce an a fost inaltat monumentul de la Termopile?', '1820', '1750', '1918', '2002', '1955', 5, 'Cine a prezis moartea regelui Leonidas ?', 'Sotia acestuia', 'Luptatorii lui', 'Oracolul de la Delfi', 'Un vraci', 'Un comandant dezertor', 3),
(2, 2, 'Cati soldati erau condusi de un singur comandant gal?', '80', '240', '520', '480', '160', 4, 'Din ce provincie facea parte Vercingetorix?', 'Arveni', 'Abrincatui', 'Unelli', 'Veneti', 'Ruteni', 1, 'Cati luptatori gali a reusit Cezar sa infrunte cu o armata de 6000 de calareti?', '20000', '54000', '100000', '10000', '60000', 5, 'Cati metri inaltime are monumentul de la Alesia?', '15', '35', '26', '22', '32', 3, 'Cati ani a stat Vercingetorix in inchisoarea de la Tullianum?', '3 ani', '1 an', '10 ani', '5 ani', '2 ani', 4),
(3, 2, 'In ce an a patruns Laiota in Tara Romaneasca?', '1474', '1470', '1475', '1472', '1468', 1, 'Care a fost cheia victoriei voievodului moldovean?', 'razboinicii ', 'norocul', 'tatica', 'avantajul numeric', 'curajul acestuia', 3, 'Cati moldoveni au luptat la marea infruntare de la Valea Alba?', '30000', '25000', '10000', '12000', '8000', 4, 'In ce an a fost inaugurata statuia lui Stefan cel Mare?', '1965', '1955', '1950', '1970', '1975', 5, 'Ce inaltime are statuia ecvestra a lui Stefan cel Mare?', '6,9 metri', '5 metri', '4 metri', '7,8 metri', '9,5 metri', 1),
(4, 2, 'Cand ataca Mihai Viteazul tabara otomana ?', '12 iunie', '26 iulie', '27 mai', '23 august', '3 martie', 4, 'Cati otomani au cazut pe frontul de lupta? ', '8500', '7000', '7500', '6800', '8200', 2, 'Care a  fost primul oras in care otomanii s-au luptat cu romanii?', 'Bucuresti', 'Giurgiu', 'Alba Iulia', 'Targoviste', 'Suceava', 4, 'In ce luna a anului 1595 a avut loc victoria totala a lui M.Viteazu?', 'iulie', 'august', 'mai', 'septembrie', 'octombrie', 5, 'In ce an a fost ridicata crucea din piatra ca monument al victoriei?', '1680', '1682', '1692', '1674', '1690', 2),
(5, 2, 'Cati oameni a pierdut Napoleon dupa victoria decisiva a Coalitiei?', '70000', '50000', '55000', '60000', '45000', 1, 'In ce luna s-a desfasurat prima confruntare a groaznicei batalii de la Leipzig?', 'august', 'octombrie', 'mai', 'septembrie', 'aprilie', 2, 'In ce an a fost obligat Napoleon sa abdice?', '1935', '1805', '1814', '1816', '1818', 3, 'Cati metri inaltime are monumentul impunator de la Leipzig?', '81', '91', '95', '87', '101', 2, 'Ce personalitate importanta frecventa monumetul ca si spatiu de intalniri oficiale', 'Hitler', 'Stalin', 'Regele Carol al II-lea', 'Elisabeta a II-a', 'Regina Maria', 1),
(6, 2, 'Care este numarul aproximativ al pierderilor umane din Batalia de la Stalingrad.', '1 milion', '5 milioane', '3 milioane', '2 milioane', '6 milioane', 3, 'Cand a avut loc victoria asupra Germaniei Naziste ?', '1940', '1935', '1950', '1945', '1955', 4, 'Cand au lansat sovieticii o ofensiva distrugatoare care a spulberat trupele inamice? ', '19 noiembrie', '15 august', '12 mai', '20 iunie', '21 aprilie', 1, 'Cand au fost finalizate lucrarile pentru monumentul Kuraganul lui Mamai? ', '1965', '1955', '1942', '1944', '1967', 5, 'Pana in ce data a rezistat Plutonul lui Platov?  ', '30 august', '25 noiembrie', '22 mai', '25 iunie', '26 iulie', 2);

-- --------------------------------------------------------

--
-- Table structure for table `utilizatori`
--

CREATE TABLE `utilizatori` (
  `id_utilizator` int(11) NOT NULL,
  `email` varchar(80) NOT NULL,
  `parola` varchar(80) NOT NULL,
  `nume` varchar(80) NOT NULL,
  `prenume` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilizatori`
--

INSERT INTO `utilizatori` (`id_utilizator`, `email`, `parola`, `nume`, `prenume`) VALUES
(3, 'bogdan.anisoiu@gmail.com', '2cc87527166ea863d656025cf17de2ae', 'Anisoiu', 'Bogdan-Andrei');

-- --------------------------------------------------------

--
-- Table structure for table `utilizatori_teste`
--

CREATE TABLE `utilizatori_teste` (
  `id_utilizatori_teste` int(11) NOT NULL,
  `id_test` int(11) NOT NULL,
  `id_utilizator` int(11) DEFAULT NULL,
  `raspuns_utilizator1` int(11) NOT NULL,
  `raspuns_utilizator2` int(11) NOT NULL,
  `raspuns_utilizator3` int(11) NOT NULL,
  `raspuns_utilizator4` int(11) NOT NULL,
  `raspuns_utilizator5` int(11) NOT NULL,
  `scor` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `materii`
--
ALTER TABLE `materii`
  ADD PRIMARY KEY (`id_materie`);

--
-- Indexes for table `teste`
--
ALTER TABLE `teste`
  ADD PRIMARY KEY (`id_test`),
  ADD KEY `id_materie` (`id_materie`);

--
-- Indexes for table `utilizatori`
--
ALTER TABLE `utilizatori`
  ADD PRIMARY KEY (`id_utilizator`);

--
-- Indexes for table `utilizatori_teste`
--
ALTER TABLE `utilizatori_teste`
  ADD PRIMARY KEY (`id_utilizatori_teste`),
  ADD KEY `id_test` (`id_test`),
  ADD KEY `id_utilizator` (`id_utilizator`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `materii`
--
ALTER TABLE `materii`
  MODIFY `id_materie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `teste`
--
ALTER TABLE `teste`
  MODIFY `id_test` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `utilizatori`
--
ALTER TABLE `utilizatori`
  MODIFY `id_utilizator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `utilizatori_teste`
--
ALTER TABLE `utilizatori_teste`
  MODIFY `id_utilizatori_teste` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
