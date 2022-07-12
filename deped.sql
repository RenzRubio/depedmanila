-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 05:12 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deped`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `admin` varchar(500) NOT NULL,
  `action` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `target` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `admin`, `action`, `description`, `target`, `date`) VALUES
(223, 'hajinmark', 'Delete', 'Removed Employee', '', '2022-03-23 03:24:18'),
(224, 'hajinmark', 'Delete', 'Removed Employee', '', '2022-03-23 03:24:22'),
(225, 'hajinmark', 'Delete', 'Removed Employee', '', '2022-03-23 06:33:37'),
(226, 'hajinmark', 'Delete', 'Removed Employee', '', '2022-03-23 06:33:41'),
(227, 'hajinmark', 'Delete', 'Removed Employee', '', '2022-03-23 06:33:46'),
(228, 'hajinmark', 'Delete', 'Removed Employee', '', '2022-03-23 06:33:51'),
(229, 'hajinmark', 'Insert', 'Added New Employee', '', '2022-03-24 02:27:45'),
(230, 'hajinmark', 'Insert', 'Added New Employee', '', '2022-03-24 02:29:40'),
(231, 'hajinmark', 'Insert', 'Added New Employee', '', '2022-03-29 02:06:09'),
(232, 'hajinmark', 'Insert', 'Added New Employee', '', '2022-03-29 02:36:04'),
(233, 'hajinmark', 'Delete', 'Removed Employee', '', '2022-03-29 02:36:11'),
(234, 'hajinmark', 'Insert', 'Added New Employee', '', '2022-03-29 02:37:04'),
(235, 'hajinmark', 'Delete', 'Removed Employee', '', '2022-03-29 02:39:23'),
(236, 'hajinmark', 'Insert', 'Added New Employee', '', '2022-03-29 02:39:48'),
(237, 'hajinmark', 'Delete', 'Removed Employee', '', '2022-03-29 02:40:37'),
(238, 'hajinmark', 'Insert', 'Added New Employee', '', '2022-03-29 02:41:06'),
(239, 'hajinmark', 'Insert', 'Added New Employee', '', '2022-03-29 02:50:57'),
(240, 'hajinmark', 'Insert', 'Added New Employee', '', '2022-03-29 02:51:33'),
(241, 'hajinmark', 'Delete', 'Removed Employee', '', '2022-03-29 02:54:46'),
(242, 'hajinmark', 'Insert', 'Added New Employee', '', '2022-03-29 02:55:14'),
(243, 'hajinmark', 'Insert', 'Added New Employee', '', '2022-03-29 02:59:33'),
(244, 'hajinmark', 'Delete', 'Removed Employee', '', '2022-03-29 02:59:51'),
(245, 'hajinmark', 'Insert', 'Added New Employee', '', '2022-03-29 03:00:24'),
(246, 'hajinmark', 'Delete', 'Removed Employee', '', '2022-03-29 03:01:01'),
(247, 'hajinmark', 'Insert', 'Added New School', '', '2022-03-29 03:24:05'),
(248, 'hajinmark', 'Update', 'Update Employee Position', '', '2022-03-29 07:01:00'),
(249, 'hajinmark', 'Insert', 'Added New School', '', '2022-03-29 07:58:45'),
(250, 'hajinmark', 'Insert', 'Added New School', '', '2022-03-29 07:58:51'),
(251, 'hajinmark', 'Insert', 'Added New School', '', '2022-03-29 07:58:56'),
(252, 'hajinmark', 'Insert', 'Added New School', '', '2022-03-29 07:59:01'),
(253, 'hajinmark', 'Insert', 'Added New School', '', '2022-03-29 07:59:11'),
(254, 'hajinmark', 'Insert', 'Added New School', '', '2022-03-29 07:59:16'),
(255, 'hajinmark', 'Insert', 'Added New School', '', '2022-03-29 07:59:22'),
(256, 'hajinmark', 'Insert', 'Added New School', '', '2022-03-29 07:59:28'),
(257, 'hajinmark', 'Insert', 'Inserted New Position', '', '2022-03-30 00:16:58'),
(258, 'hajinmark', 'Delete', 'Deleted Employee Position', '', '2022-03-30 00:17:04'),
(259, 'hajinmark', 'Insert', 'Inserted New Position', '', '2022-03-30 00:21:08'),
(260, 'hajinmark', 'Delete', 'Deleted Employee Position', '', '2022-03-30 00:21:14'),
(261, 'hajinmark', 'Insert', 'Inserted New Position', '', '2022-03-30 00:28:12'),
(262, 'hajinmark', 'Delete', 'Deleted Employee Position', '', '2022-03-30 00:31:03'),
(263, 'hajinmark', 'Insert', 'Inserted New Position', '', '2022-03-30 00:31:13'),
(264, 'hajinmark', 'Delete', 'Deleted Employee Position', '', '2022-03-30 00:31:21'),
(265, 'hajinmark', 'Insert', 'Inserted New Position', '', '2022-03-30 00:37:37'),
(266, 'hajinmark', 'Delete', 'Deleted Employee Position', '', '2022-03-30 00:37:55'),
(267, 'hajinmark', 'Insert', 'Inserted New Position', '', '2022-03-30 00:38:34'),
(268, 'hajinmark', 'Delete', 'Deleted Employee Position', '', '2022-03-30 00:41:38'),
(269, 'hajinmark', 'Insert', 'Inserted New Position', '', '2022-03-30 00:41:46'),
(270, 'hajinmark', 'Delete', 'Deleted Employee Position', '', '2022-03-30 00:42:16'),
(271, 'hajinmark', 'Insert', 'Inserted New Position', '', '2022-03-30 00:42:21'),
(272, 'hajinmark', 'Delete', 'Deleted Employee Position', '', '2022-03-30 00:43:02'),
(273, 'hajinmark', 'Insert', 'Inserted New Position', '', '2022-03-30 00:46:07'),
(274, 'hajinmark', 'Delete', 'Deleted Employee Position', '', '2022-03-30 00:46:14'),
(275, 'hajinmark', 'Insert', 'Inserted New Position', '', '2022-03-30 00:48:22'),
(276, 'hajinmark', 'Delete', 'Deleted Employee Position', '', '2022-03-30 00:48:55'),
(277, 'hajinmark', 'Insert', 'Inserted New Position', '', '2022-03-30 00:49:08'),
(278, 'hajinmark', 'Insert', 'Added New Employee', '', '2022-03-30 01:07:31'),
(279, 'hajinmark', 'Delete', 'Removed Employee', '', '2022-03-30 01:07:38'),
(280, 'hajinmark', 'Delete', 'Removed Employee', '', '2022-03-30 01:07:57'),
(281, 'hajinmark', 'Delete', 'Removed Employee', '', '2022-03-30 01:09:19'),
(282, 'hajinmark', 'Insert', 'Added New Employee', '', '2022-03-30 01:36:53'),
(283, 'hajinmark', 'Delete', 'Removed Employee', '', '2022-03-30 03:20:37'),
(284, 'hajinmark', 'Insert', 'Added New Employee', '', '2022-03-30 05:15:46'),
(285, 'hajinmark', 'Delete', 'Removed Employee', '', '2022-03-31 00:26:22'),
(286, 'hajinmark', 'Delete', 'Removed Employee', '', '2022-03-31 01:35:11'),
(287, 'hajinmark', 'Delete', 'Removed Employee', '', '2022-03-31 01:35:24'),
(288, 'hajinmark', 'Delete', 'Removed Employee', '', '2022-03-31 01:35:31'),
(289, 'hajinmark', 'Delete', 'Removed Employee', '', '2022-03-31 01:52:16'),
(290, 'hajinmark', 'Delete', 'Removed Employee', '', '2022-03-31 01:52:56'),
(291, 'hajinmark', 'Delete', 'Removed Employee', '', '2022-03-31 01:53:02'),
(292, 'hajinmark', 'Insert', 'Added New School', '', '2022-03-31 05:02:56'),
(293, 'hajinmark', 'Delete', 'Removed Employee', '', '2022-03-31 08:08:14'),
(294, 'hajinmark', 'Insert', 'Added New Employee', '', '2022-03-31 08:09:01'),
(295, 'hajinmark', 'Delete', 'Removed Employee', '', '2022-03-31 23:49:40'),
(296, 'hajinmark', 'Delete', 'Removed Employee', '', '2022-03-31 23:58:17'),
(297, 'hajinmark', 'Insert', 'Added New Employee', '', '2022-03-31 23:59:08'),
(298, 'hajinmark', 'Insert', 'Added New Employee', '', '2022-04-01 00:00:17'),
(299, 'hajinmark', 'Insert', 'Added New School', '', '2022-04-01 00:00:42'),
(300, 'hajinmark', 'Insert', 'Added New Employee', '', '2022-04-01 00:01:25');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(2) NOT NULL,
  `category` varchar(25) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `category`) VALUES
(1, 'Fruits'),
(2, 'Colors'),
(3, 'Games'),
(4, 'Vehicles');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` tinyint(11) NOT NULL,
  `department` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department`) VALUES
(6, 'IT Department'),
(7, 'wew');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` tinyint(11) NOT NULL,
  `item_id` varchar(50) DEFAULT NULL,
  `item_name` text DEFAULT NULL,
  `quantity` double DEFAULT NULL,
  `cost` double DEFAULT NULL,
  `purchase_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` text DEFAULT NULL,
  `category` text DEFAULT NULL,
  `particular` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `item_id`, `item_name`, `quantity`, `cost`, `purchase_date`, `status`, `category`, `particular`) VALUES
(90, 'ITEM-4311', 'consumables', 39, 290, '2022-03-16 16:00:00', 'Available', 'Consumable', 'consume pa'),
(91, 'ITEM-0728', 'Smart TV', 0, 29004, '2022-03-16 16:00:00', 'Unavailable', 'TV', 'HD'),
(92, 'ITEM-4398', 'monitor', 0, 50000, '2022-03-16 16:00:00', 'Unavailable', 'Desktops', 'desktop na sira'),
(93, 'ITEM-1875', 'wew', 132, 3222, '2022-03-30 16:00:00', 'Available', 'Consumable', 'wew'),
(94, 'ITEM-1466', 'zxc', 12, 3232, '2022-03-30 16:00:00', 'Available', 'Consumable', 'we'),
(95, 'ITEM-2255', 'wewsq', 12, 3222, '2022-03-30 16:00:00', 'Available', 'Consumable', '232'),
(96, 'ITEM-6157', 'wewew', 1, 232, '2022-03-30 16:00:00', 'Available', 'TV', 'sdasdas'),
(97, '128911290', 'example', 1232, 23232, '2022-03-30 16:00:00', 'Available', 'Consumable', 'particular');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `position` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `position`) VALUES
(11, 'Information Technology Officer'),
(13, 'Web Developer'),
(14, 'IT Head'),
(25, 'wewwew');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `employee_no` varchar(50) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `username` text NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `position` text NOT NULL,
  `account_type` text NOT NULL,
  `department` varchar(500) NOT NULL,
  `school` varchar(1000) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `employee_no`, `firstname`, `lastname`, `username`, `password`, `email`, `position`, `account_type`, `department`, `school`, `phone`, `address`, `image`) VALUES
(349, '1289', 'Mark', 'Corpin', 'hajinmark', '7694f4a66316e53c8cdd9d9954bd611d', 'hajinmark', 'Information Technology Officer', 'Super Administrator', '', '', '0921901', 'home address', ''),
(675, '136446', 'Abes', 'Manila', 'AbesManila', '21232f297a57a5a743894a0e4a801fc3', 'abes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Abes Manila', '85238558', ' Tayuman-Ipil St. Sta. Cruz, Manila', ''),
(676, '136457', 'Alejandro', 'Albert', 'AlejandroAlbert', '21232f297a57a5a743894a0e4a801fc3', 'dralbert.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Alejandro Albert', '87412396', 'Dapitan Cor. Casa?as St. Sampaloc, Manila', ''),
(677, '500568A', 'amacedaes', 'manila', 'amacedaesmanila', '21232f297a57a5a743894a0e4a801fc3', 'amacedaes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'amacedaes manila', '87147368', 'Buenos Aires-Altura St. Sta. Mesa, Manila', ''),
(678, '500568B', 'amacedahs', 'manila', 'amacedahsmanila', '21232f297a57a5a743894a0e4a801fc3', 'amacedahs.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'amacedahs manila', '87156883', 'Magsaysay Blvd. Sta. Mesa, Manila', ''),
(679, '136436', 'Amado', 'Hernandez', 'AmadoHernandez', '21232f297a57a5a743894a0e4a801fc3', 'avhes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Amado Hernandez', '83531409', 'Bo. Magsaysay, Tondo, Manila', ''),
(680, '136450', 'Antonio', 'Regidor', 'AntonioRegidor', '21232f297a57a5a743894a0e4a801fc3', 'ares.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Antonio Regidor', '87115951', 'T. Alonzo St. Sta. Cruz, Manila', ''),
(681, '305292', 'Antonio', 'Villegas', 'AntonioVillegas', '21232f297a57a5a743894a0e4a801fc3', 'ajvvhs.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Antonio Villegas', '83541973', 'Bo. Magsaysay Tondo, Manila', ''),
(682, '136422', 'Antonio', 'Luna', 'AntonioLuna', '21232f297a57a5a743894a0e4a801fc3', 'alunaes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Antonio Luna', '87415929', '2701 Lico St. Tondo, Manila', ''),
(683, '136453', 'Apolinario', 'Mabini', 'ApolinarioMabini', '21232f297a57a5a743894a0e4a801fc3', 'ames.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Apolinario Mabini', '85231748', 'Severino-Soler St. Quiapo, Manila', ''),
(684, '136430', 'Arcenio', 'Lacson', 'ArcenioLacson', '21232f297a57a5a743894a0e4a801fc3', 'ahles.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Arcenio Lacson', '85230618', 'Younger St,  Balut Tondo, Manila', ''),
(685, '136418', 'Arcenio', 'Herrera', 'ArcenioHerrera', '21232f297a57a5a743894a0e4a801fc3', 'aches.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Arcenio Herrera', '83655167', ' Santos Teodoro St. Tondo, Manila', ''),
(686, '136477', 'Aurora', 'Quezon', 'AuroraQuezon', '21232f297a57a5a743894a0e4a801fc3', 'aaqes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Aurora Quezon', '83536964', 'San Andres St. Malate, Manila', ''),
(687, '136471', 'Bacood', 'Bacood', 'BacoodBacood', '21232f297a57a5a743894a0e4a801fc3', 'bacoodes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Bacood Bacood', '87130113', 'Mag. Albert St. Sta. Mesa, Manila', ''),
(688, '136482', 'Bagong', 'Diwa', 'BagongDiwa', '21232f297a57a5a743894a0e4a801fc3', 'bdes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Bagong Diwa', '85621027', 'Linceo-Adonis St. Pandacan, Manila', ''),
(689, '136480', 'Bagong', 'Barangay', 'BagongBarangay', '21232f297a57a5a743894a0e4a801fc3', 'bbes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Bagong Barangay', '85238895', 'Zamora St. Pandacan, Manila', ''),
(690, '136419', 'Barrio', 'Obrero', 'BarrioObrero', '21232f297a57a5a743894a0e4a801fc3', 'boes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Barrio Obrero', '83624966', ' Narra Ext. Tondo, Manila', ''),
(691, '136483', 'Beata', 'Beata', 'BeataBeata', '21232f297a57a5a743894a0e4a801fc3', 'beataes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Beata Beata', '82552607', 'Beata Cor. Certeza St. Pandacan, Manila', ''),
(692, '136459', 'Benigno', 'Aldana', 'BenignoAldana', '21232f297a57a5a743894a0e4a801fc3', 'drbaes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Benigno Aldana', '87132141', 'J. Fajardo St. Sampaloc, Manila', ''),
(693, '136461', 'Benito', 'Legarda', 'BenitoLegarda', '21232f297a57a5a743894a0e4a801fc3', 'bles.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Benito Legarda', '85249981', 'J. Fajardo-P. Leoncio St. Sampaloc, Manila', ''),
(694, '305310', 'Carlos', 'Garcia', 'CarlosGarcia', '21232f297a57a5a743894a0e4a801fc3', 'cpghs.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Carlos Garcia', '85627687', 'Jesus St. Pandacan, Manila', ''),
(695, '305300', 'Cayetano', 'Arellano', 'CayetanoArellano', '21232f297a57a5a743894a0e4a801fc3', 'cahs.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Cayetano Arellano', '87115928', 'D. Jose-T. Alonzo St. Sta. Cruz, Manila', ''),
(696, '136448', 'Cecilio', 'Apostol', 'CecilioApostol', '21232f297a57a5a743894a0e4a801fc3', 'caes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Cecilio Apostol', '83535842', 'Tayabas-F. Huertas St. Sta. Cruz, Manila', ''),
(697, '136474', 'Celedonio', 'Salvador', 'CeledonioSalvador', '21232f297a57a5a743894a0e4a801fc3', 'cses.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Celedonio Salvador', '85637197', 'Merced St. Paco, Manila', ''),
(698, '136445', 'Centex', 'Centex', 'CentexCentex', '21232f297a57a5a743894a0e4a801fc3', 'centex.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Centex Centex', '85231077', 'J. Abad Santos Ave.-Recto Tondo, Manila', ''),
(699, '305307', 'Claro', 'Recto', 'ClaroRecto', '21232f297a57a5a743894a0e4a801fc3', 'cmrhs.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Claro Recto', '87345540', '3rd St., C. Aguila, San Miguel, Manila', ''),
(700, '319401', 'Corazon', 'Aquino', 'CorazonAquino', '21232f297a57a5a743894a0e4a801fc3', 'pccahs.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Corazon Aquino', '85469432', 'Port Area, Manila', ''),
(701, '305299', 'Do?a Teodora', 'Alonzo', 'Do?a TeodoraAlonzo', '21232f297a57a5a743894a0e4a801fc3', 'dtahs.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Do?a Teodora Alonzo', '87314988', 'Alvarez St. Cor. Ipil St. Sta. Cruz, Manila', ''),
(702, '500569A', 'eaguinaldoes', 'manila', 'eaguinaldoesmanila', '21232f297a57a5a743894a0e4a801fc3', 'eaguinaldoes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'eaguinaldoes manila', '85321913', 'Punta Sta. Ana, Manila', ''),
(703, '500569B', 'eaguinaldohs', 'manila', 'eaguinaldohsmanila', '21232f297a57a5a743894a0e4a801fc3', 'eaguinaldohs.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'eaguinaldohs manila', '85351714', 'Punta St. Sta. Ana, Manila', ''),
(704, '305317', 'Elpidio', 'Quirino', 'ElpidioQuirino', '21232f297a57a5a743894a0e4a801fc3', 'eqhs.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Elpidio Quirino', '85595483', 'Bacood St. Sta Mesa, Manila', ''),
(705, '136433', 'Emilio', 'Jacinto', 'EmilioJacinto', '21232f297a57a5a743894a0e4a801fc3', 'ejes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Emilio Jacinto', '85210005', 'Velasquez St. Tondo, Manila', ''),
(706, '136476', 'Epifanio', 'Delos Santos', 'EpifanioDelos Santos', '21232f297a57a5a743894a0e4a801fc3', 'edses.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Epifanio Delos Santos', '85257173', ' 1725 Singalong-Malvar St. Malate, Manila', ''),
(707, '136447', 'Eriberto', 'Remigio', 'EribertoRemigio', '21232f297a57a5a743894a0e4a801fc3', 'eres.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Eriberto Remigio', '87416307', 'Oroquieta Ext. Sta. Cruz, Manila', ''),
(708, '305304', 'Esteban', 'Abada', 'EstebanAbada', '21232f297a57a5a743894a0e4a801fc3', 'eahs.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Esteban Abada', '87411736', 'Blumentritt St. Sampaloc, Manila', ''),
(709, '305319', 'Eulogio', 'Rodriguez', 'EulogioRodriguez', '21232f297a57a5a743894a0e4a801fc3', 'ervhs.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Eulogio Rodriguez', '87140753', 'Nagtahan St. Sampaloc, Manila', ''),
(710, '136486', 'Fernando', 'Amorsolo', 'FernandoAmorsolo', '21232f297a57a5a743894a0e4a801fc3', 'faes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Fernando Amorsolo', '85639986', 'Old Panaderos St. Sta. Ana, Manila', ''),
(711, '136484', 'Fernando', 'Maria Guerrero', 'FernandoMaria Guerrero', '21232f297a57a5a743894a0e4a801fc3', 'fmges.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Fernando Maria Guerrero', '85636684', 'Pedro Gil-Onyx St. Paco, Manila', ''),
(712, '500567A', 'fgces', 'manila', 'fgcesmanila', '21232f297a57a5a743894a0e4a801fc3', 'fgces.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'fgces manila', '82548750', 'Morong-Limay-Manuguit St. Tondo, Manila', ''),
(713, '500567B', 'fgchs', 'manila', 'fgchsmanila', '21232f297a57a5a743894a0e4a801fc3', 'fgchs.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'fgchs manila', '82531575', 'Hermosa St. Tondo, Manila', ''),
(714, '305298', 'Florentino', 'Torres', 'FlorentinoTorres', '21232f297a57a5a743894a0e4a801fc3', 'fths.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Florentino Torres', '82563507', 'Juan Luna St. Gagalangin Tondo, Manila', ''),
(715, '136451', 'Francisco', 'Balagtas', 'FranciscoBalagtas', '21232f297a57a5a743894a0e4a801fc3', 'fbaes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Francisco Balagtas', '87118194', 'Alvarez-Ipil St. Sta. Cruz, Manila', ''),
(716, '136426', 'Francisco', 'Benitez', 'FranciscoBenitez', '21232f297a57a5a743894a0e4a801fc3', 'fbes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Francisco Benitez', '82413524', '143 Solis St. Tondo, Manila', ''),
(717, '136454', 'Geronimo', 'Santiago', 'GeronimoSantiago', '21232f297a57a5a743894a0e4a801fc3', 'gses.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Geronimo Santiago', '87351693', 'J. Nepomuceno St. San Miguel, Manila', ''),
(718, '136460', 'Graciano', 'Lopez - Jaena', 'GracianoLopez - Jaena', '21232f297a57a5a743894a0e4a801fc3', 'gljes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Graciano Lopez - Jaena', '85215032', 'Matimyas St. Sampaloc, Manila', ''),
(719, '136428', 'Gregoria', 'De Jesus', 'GregoriaDe Jesus', '21232f297a57a5a743894a0e4a801fc3', 'gdjes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Gregoria De Jesus', '82552079', 'Dagupan-Bulacan St. Tondo, Manila', ''),
(720, '305290', 'Gregorio', 'Perfecto', 'GregorioPerfecto', '21232f297a57a5a743894a0e4a801fc3', 'gphs.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Gregorio Perfecto', '87424629', 'Ricafort St. Tondo, Manila', ''),
(721, '136443', 'Gregorio', 'Del Pilar', 'GregorioDel Pilar', '21232f297a57a5a743894a0e4a801fc3', 'gdpes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Gregorio Del Pilar', '83537418', 'Abad Santos-Recto St. Tondo, Manila', ''),
(723, '136478', 'hjatienzaes', 'manila', 'hjatienzaesmanila', '21232f297a57a5a743894a0e4a801fc3', 'hjatienzaes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'hjatienzaes manila', '82417559', 'Port Area, Manila', ''),
(724, '305313A', 'Ignacio', 'Villamor', 'IgnacioVillamor', '21232f297a57a5a743894a0e4a801fc3', 'ivjhs.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Ignacio Villamor', '8563-21-08', 'Pasig Line St. Sta. Ana, Manila', ''),
(725, '305313B', 'Ignacio', 'Villamor Senior High', 'IgnacioVillamor Senior High', '21232f297a57a5a743894a0e4a801fc3', 'ivshs.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Ignacio Villamor Senior High', '', 'Pasig Line St. Sta. Ana, Manila', ''),
(726, '136439', 'Isabelo', 'Delos Reyes', 'IsabeloDelos Reyes', '21232f297a57a5a743894a0e4a801fc3', 'ires.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Isabelo Delos Reyes', '82423823', 'Morga-Sande St. Tondo, Manila', ''),
(727, '136432', 'Jose', 'Rizal', 'JoseRizal', '21232f297a57a5a743894a0e4a801fc3', 'jprizales.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Jose Rizal', '83547207', 'Tayuman-Pingkian St. Tondo, Manila', ''),
(728, '305294', 'Jose', 'Laurel', 'JoseLaurel', '21232f297a57a5a743894a0e4a801fc3', 'jplhs.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Jose Laurel', '8516-3580', 'Pampanga St. Tondo, Manila', ''),
(729, '305302', 'Jose', 'Abad Santos', 'JoseAbad Santos', '21232f297a57a5a743894a0e4a801fc3', 'jashs.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Jose Abad Santos', '82399637', 'Urbiztondo-Numancia St. San Nicolas, Manila', ''),
(730, '136440', 'Jose Corazon', 'De Jesus', 'Jose CorazonDe Jesus', '21232f297a57a5a743894a0e4a801fc3', 'jcdjes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Jose Corazon De Jesus', '83545734', 'N. Zamora St. Tondo, Manila', ''),
(731, '136449', 'Juan', 'Sumulong', 'JuanSumulong', '21232f297a57a5a743894a0e4a801fc3', 'jses.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Juan Sumulong', '87110586', '253 Aragon St. Sta. Cruz, Manila', ''),
(732, '305288', 'Juan', 'Nolasco', 'JuanNolasco', '21232f297a57a5a743894a0e4a801fc3', 'jgnolascohs.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Juan Nolasco', '82545349', '2252 Tioco Park, Tondo, Manila', ''),
(733, '136465', 'Juan', 'Luna', 'JuanLuna', '21232f297a57a5a743894a0e4a801fc3', 'juanlunaes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Juan Luna', '87424588', ' 830 Catalu?a St. Sampaloc, Manila', ''),
(734, '136473', 'Justo', 'Lukban', 'JustoLukban', '21232f297a57a5a743894a0e4a801fc3', 'jlukbanes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Justo Lukban', '85258016', 'G. Apacible St. Paco, Manila', ''),
(735, '136481', 'jzes', 'manila', 'jzesmanila', '21232f297a57a5a743894a0e4a801fc3', 'jzes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'jzes manila', '85168263', 'E. Zamora St. Pandacan, Manila', ''),
(736, '136458', 'Laong', 'Laan', 'LaongLaan', '21232f297a57a5a743894a0e4a801fc3', 'laonglaanes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Laong Laan', '87418065', 'Laong Laan Cor. Blumentritt St. Sampaloc, Manila', ''),
(737, '136427', 'ldes', 'manila', 'ldesmanila', '21232f297a57a5a743894a0e4a801fc3', 'ldes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'ldes manila', '82549113', '154 Solis St. Tondo, Manila', ''),
(738, '305295', 'ldhs', 'manila', 'ldhsmanila', '21232f297a57a5a743894a0e4a801fc3', 'ldhs.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'ldhs manila', '82529794', 'Juan Luna St. Tondo, Manila', ''),
(739, '136429', 'Librada', 'Avelino', 'LibradaAvelino', '21232f297a57a5a743894a0e4a801fc3', 'laes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Librada Avelino', '87484475', 'Sunog-Apog St. Tondo, Manila', ''),
(740, '136462', 'Licerio', 'Geronimo', 'LicerioGeronimo', '21232f297a57a5a743894a0e4a801fc3', 'glges.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Licerio Geronimo', '83540900', '537 Geronimo St. Sampaloc, Manila', ''),
(742, '136438', 'Magat', 'Salamat', 'MagatSalamat', '21232f297a57a5a743894a0e4a801fc3', 'msalamates.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Magat Salamat', '82546334', '1429 Sta. Maria St. Tondo, Manila', ''),
(743, '305312', 'Manila', 'Science', 'ManilaScience', '21232f297a57a5a743894a0e4a801fc3', 'mshs.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Manila Science', '85368962', 'Taft Ave. P. Faura, Manila', ''),
(744, '305311', 'Manila', 'High School', 'ManilaHigh School', '21232f297a57a5a743894a0e4a801fc3', 'mhs.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Manila High School', '85214199', 'Victoria-Muralla St. Intramuros, Manila', ''),
(745, '305318', 'Manuel', 'Roxas', 'ManuelRoxas', '21232f297a57a5a743894a0e4a801fc3', 'marhs.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Manuel Roxas', '83536935', 'Canonigo St. Paco, Manila', ''),
(746, '136455', 'Marcela', 'Agoncillo', 'MarcelaAgoncillo', '21232f297a57a5a743894a0e4a801fc3', 'maes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Marcela Agoncillo', '83533180', 'Madrid-San Nicolas St. Binondo, Manila', ''),
(747, '136487', 'Margarita', 'Roxas De Ayala', 'MargaritaRoxas De Ayala', '21232f297a57a5a743894a0e4a801fc3', 'mraes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Margarita Roxas De Ayala', '85631438', 'A. Francisco cor. Arellano Sts. Sta Ana, Manila', ''),
(748, '305316', 'Mariano', 'Marcos', 'MarianoMarcos', '21232f297a57a5a743894a0e4a801fc3', 'mmmhs.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Mariano Marcos', '85642893', '2090 M. Carreon St. Sta. Ana, Manila', ''),
(749, '136423', 'Mariano', 'Ponce', 'MarianoPonce', '21232f297a57a5a743894a0e4a801fc3', 'mpes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Mariano Ponce', '83542109', 'Bugallon-T. Mapua St. Tondo, Manila', ''),
(750, '136444', 'Maximino', 'Hizon', 'MaximinoHizon', '21232f297a57a5a743894a0e4a801fc3', 'gmhes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Maximino Hizon', '82546162', 'Velasquez St., Tondo Manila', ''),
(751, '136424', 'Melchora', 'Aquino', 'MelchoraAquino', '21232f297a57a5a743894a0e4a801fc3', 'maquinoes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Melchora Aquino', '82540264', 'Solis St. Tondo, Manila', ''),
(752, '305309', 'Miguel', 'Araullo', 'MiguelAraullo', '21232f297a57a5a743894a0e4a801fc3', 'araullohs.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Miguel Araullo', '85246765', 'Taft Ave. Cor. U.N. Ave. Ermita, Manila', ''),
(753, '136470', 'Miguel', 'Malvar', 'MiguelMalvar', '21232f297a57a5a743894a0e4a801fc3', 'gmmes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Miguel Malvar', '87130654', 'Mangga Ave. Sta. Mesa, Manila', ''),
(754, '136437', 'mlqes', 'manila', 'mlqesmanila', '21232f297a57a5a743894a0e4a801fc3', 'mlqes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'mlqes manila', '', 'Perla-Verona St. Tondo, Manila', ''),
(755, '305297', 'mlqjhs', 'manila', 'mlqjhsmanila', '21232f297a57a5a743894a0e4a801fc3', 'mlqjhs.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'mlqjhs manila', '8711-26-81', 'Blumentritt St. Sta. Cruz, Manila', ''),
(756, '136464', 'Moises', 'Salvador', 'MoisesSalvador', '21232f297a57a5a743894a0e4a801fc3', 'mses.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Moises Salvador', '85211875', 'Geronimo St. Sampaloc, Manila', ''),
(757, '136452', 'Padre', 'Gomez', 'PadreGomez', '21232f297a57a5a743894a0e4a801fc3', 'pgomezes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Padre Gomez', '87363288', '1224 P. Guevarra St. Sta. Cruz, Manila', ''),
(758, '136467', 'Padre', 'Burgos', 'PadreBurgos', '21232f297a57a5a743894a0e4a801fc3', 'pbes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Padre Burgos', '87130652', 'Buenos Aires-Altura St. Sta. Mesa, Manila', ''),
(759, '136468', 'Pedro', 'Pelaez', 'PedroPelaez', '21232f297a57a5a743894a0e4a801fc3', 'ppes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Pedro Pelaez', '87130653', 'D. Santiago St. Sta. Mesa, Manila', ''),
(760, '136456', 'Pedro', 'Guevara', 'PedroGuevara', '21232f297a57a5a743894a0e4a801fc3', 'pguevaraes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Pedro Guevara', '85211508', 'San Fernando-San Nicolas St. Binondo, Manila', ''),
(761, '136472', 'Pio', 'Del Pilar', 'PioDel Pilar', '21232f297a57a5a743894a0e4a801fc3', 'pdpes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Pio Del Pilar', '87156552', 'Pureza St. Sta. Mesa, Manila', ''),
(762, '136425', 'Plaridel', 'Plaridel', 'PlaridelPlaridel', '21232f297a57a5a743894a0e4a801fc3', 'plarideles.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Plaridel Plaridel', '87111736', '398 Solis St. Tondo, Manila', ''),
(763, '136479', 'Rafael', 'Palma', 'RafaelPalma', '21232f297a57a5a743894a0e4a801fc3', 'rpes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Rafael Palma', '88957416', 'Vito Cruz-Zobel Roxas St. Manila', ''),
(764, '305303', 'Rajah', 'Soliman', 'RajahSoliman', '21232f297a57a5a743894a0e4a801fc3', 'rssths.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Rajah Soliman', '82473102', 'Lachambre St. Binondo, Manila', ''),
(765, '305306', 'Ramon', 'Magsaysay', 'RamonMagsaysay', '21232f297a57a5a743894a0e4a801fc3', 'rmhs.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Ramon Magsaysay', '87313225', 'Espa?a Blvd. Sampaloc, Manila', ''),
(766, '305301', 'Ramon', 'Avancena', 'RamonAvancena', '21232f297a57a5a743894a0e4a801fc3', 'rahs.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Ramon Avancena', '8733-99-71', 'J. Nepomuceno St. Quiapo, Manila', ''),
(767, '136441', 'Rosauro', 'Almario', 'RosauroAlmario', '21232f297a57a5a743894a0e4a801fc3', 'raes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Rosauro Almario', '82451376', 'Kagitingan St. Tondo, Manila', ''),
(768, '136485', 'Santa', 'Ana', 'SantaAna', '21232f297a57a5a743894a0e4a801fc3', 'saes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Santa Ana', '85597793', 'M. Roxas St. Sta. Ana, Manila', ''),
(769, '136968', 'Sen. Benigno', 'Aquino', 'Sen. BenignoAquino', '21232f297a57a5a743894a0e4a801fc3', 'sbaes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Sen. Benigno Aquino', '86689612', 'Port Area, Manila', ''),
(770, '305296', 'Sergio', 'Osmena', 'SergioOsmena', '21232f297a57a5a743894a0e4a801fc3', 'psohs.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Sergio Osmena', '8708-20-82', 'Earnshaw St. Cor. Bulacan St. Tondo, Manila', ''),
(771, '136475', 'Silahis ng', 'Katarungan', 'Silahis ngKatarungan', '21232f297a57a5a743894a0e4a801fc3', 'sikates.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Silahis ng Katarungan', '85636860', '1520 Paz St. Paco, Manila', ''),
(772, '136435', 'Teodoro', 'Yangco', 'TeodoroYangco', '21232f297a57a5a743894a0e4a801fc3', 'tryes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Teodoro Yangco', '82568368', 'Franco-Dandan St. Tondo, Manila', ''),
(773, '136489', 'Tomas', 'Earnshaw', 'TomasEarnshaw', '21232f297a57a5a743894a0e4a801fc3', 'tees.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Tomas Earnshaw', '85321798', 'A. Bautista Punta Sta. Ana, Manila', ''),
(774, '305291', 'Tondo', 'Tondo', 'TondoTondo', '21232f297a57a5a743894a0e4a801fc3', 'tondohs.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Tondo Tondo', '82545558', 'Quezon St. Bo. Magsaysay Tondo, Manila', ''),
(775, '500566A', 'tpaezes', 'manila', 'tpaezesmanila', '21232f297a57a5a743894a0e4a801fc3', 'tpaezes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'tpaezes manila', '85239296', 'Nepa St. Balut, Tondo, Manila', ''),
(776, '500566B', 'tpaezhs SHS', 'manila', 'tpaezhs SHSmanila', '21232f297a57a5a743894a0e4a801fc3', 'tpaezhs.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'tpaezhs SHS manila', '85229092', 'Buendia St. cor. Younger St. Tondo, Manila', ''),
(777, '136463', 'Trinidad', 'Tecson', 'TrinidadTecson', '21232f297a57a5a743894a0e4a801fc3', 'ttes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Trinidad Tecson', '87497238', '510 Geronimo St. Sampaloc, Manila', ''),
(778, '136466', 'vefmes', 'manila', 'vefmesmanila', '21232f297a57a5a743894a0e4a801fc3', 'vefmes.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'vefmes manila', '89346254', 'Manila Boystown Complex, Marikina City', ''),
(779, '305308B', 'vefmhs', 'manila', 'vefmhsmanila', '21232f297a57a5a743894a0e4a801fc3', 'vefmhs.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'vefmhs manila', '86256778', 'Parang, Marikina', ''),
(780, '136434', 'Vicente', 'Lim', 'VicenteLim', '21232f297a57a5a743894a0e4a801fc3', 'gvles.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Vicente Lim', '82543565', 'Roxas St. Magsaysay Village Tondo, Manila', ''),
(781, '305315', 'Victorino', 'Mapa', 'VictorinoMapa', '21232f297a57a5a743894a0e4a801fc3', 'vmhs.manila@deped.gov.ph', 'IT Head', 'ICT Coordinator', 'IT Department', 'Victorino Mapa', '8353-30-40   ', '300 San Rafael St. San Miguel, Manila', ''),
(782, '91299', 'Marky', 'Corpuz', 'corps', '7694f4a66316e53c8cdd9d9954bd611d', 'markycorpuz@yahoo.com', 'Web Developer', 'ICT Coordinator', 'IT Department', 'School Bukol', '0921389232', 'Tondo, Manila', 'animedp.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` tinyint(11) NOT NULL,
  `report_id` varchar(100) NOT NULL,
  `item_id` varchar(100) NOT NULL,
  `item_name` text NOT NULL,
  `school` text NOT NULL,
  `ict_coordinator` varchar(50) NOT NULL,
  `quantity` double NOT NULL,
  `export_date` varchar(50) NOT NULL,
  `ict_user` varchar(50) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `total_cost` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `report_id`, `item_id`, `item_name`, `school`, `ict_coordinator`, `quantity`, `export_date`, `ict_user`, `cost`, `total_cost`) VALUES
(84, 'REPORT-1007', 'ITEM-4311', 'consumables', 'Rajah Soliman', 'Rajah Soliman', 1, '2022-03-31', 'RajahSoliman', '290', '290');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `id` int(11) NOT NULL,
  `school_id` varchar(250) NOT NULL,
  `school_name` text NOT NULL,
  `school_head` text NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `school_id`, `school_name`, `school_head`, `address`) VALUES
(141, '136446', 'Abes Manila', 'Abes Manila', ' Tayuman-Ipil St. Sta. Cruz, Manila'),
(142, '136457', 'Alejandro Albert', 'Alejandro Albert', 'Dapitan Cor. Casa?as St. Sampaloc, Manila'),
(143, '500568A', 'amacedaes manila', 'amacedaes manila', 'Buenos Aires-Altura St. Sta. Mesa, Manila'),
(144, '500568B', 'amacedahs manila', 'amacedahs manila', 'Magsaysay Blvd. Sta. Mesa, Manila'),
(145, '136436', 'Amado Hernandez', 'Amado Hernandez', 'Bo. Magsaysay, Tondo, Manila'),
(146, '136450', 'Antonio Regidor', 'Antonio Regidor', 'T. Alonzo St. Sta. Cruz, Manila'),
(147, '305292', 'Antonio Villegas', 'Antonio Villegas', 'Bo. Magsaysay Tondo, Manila'),
(148, '136422', 'Antonio Luna', 'Antonio Luna', '2701 Lico St. Tondo, Manila'),
(149, '136453', 'Apolinario Mabini', 'Apolinario Mabini', 'Severino-Soler St. Quiapo, Manila'),
(150, '136430', 'Arcenio Lacson', 'Arcenio Lacson', 'Younger St,  Balut Tondo, Manila'),
(152, '136477', 'Aurora Quezon', 'Aurora Quezon', 'San Andres St. Malate, Manila'),
(153, '136471', 'Bacood Bacood', 'Bacood Bacood', 'Mag. Albert St. Sta. Mesa, Manila'),
(154, '136482', 'Bagong Diwa', 'Bagong Diwa', 'Linceo-Adonis St. Pandacan, Manila'),
(155, '136480', 'Bagong Barangay', 'Bagong Barangay', 'Zamora St. Pandacan, Manila'),
(156, '136419', 'Barrio Obrero', 'Barrio Obrero', ' Narra Ext. Tondo, Manila'),
(157, '136483', 'Beata Beata', 'Beata Beata', 'Beata Cor. Certeza St. Pandacan, Manila'),
(158, '136459', 'Benigno Aldana', 'Benigno Aldana', 'J. Fajardo St. Sampaloc, Manila'),
(159, '136461', 'Benito Legarda', 'Benito Legarda', 'J. Fajardo-P. Leoncio St. Sampaloc, Manila'),
(160, '305310', 'Carlos Garcia', 'Carlos Garcia', 'Jesus St. Pandacan, Manila'),
(161, '305300', 'Cayetano Arellano', 'Cayetano Arellano', 'D. Jose-T. Alonzo St. Sta. Cruz, Manila'),
(162, '136448', 'Cecilio Apostol', 'Cecilio Apostol', 'Tayabas-F. Huertas St. Sta. Cruz, Manila'),
(163, '136474', 'Celedonio Salvador', 'Celedonio Salvador', 'Merced St. Paco, Manila'),
(164, '136445', 'Centex Centex', 'Centex Centex', 'J. Abad Santos Ave.-Recto Tondo, Manila'),
(165, '305307', 'Claro Recto', 'Claro Recto', '3rd St., C. Aguila, San Miguel, Manila'),
(166, '319401', 'Corazon Aquino', 'Corazon Aquino', 'Port Area, Manila'),
(167, '305299', 'Do?a Teodora Alonzo', 'Do?a Teodora Alonzo', 'Alvarez St. Cor. Ipil St. Sta. Cruz, Manila'),
(168, '500569A', 'eaguinaldoes manila', 'eaguinaldoes manila', 'Punta Sta. Ana, Manila'),
(169, '500569B', 'eaguinaldohs manila', 'eaguinaldohs manila', 'Punta St. Sta. Ana, Manila'),
(170, '305317', 'Elpidio Quirino', 'Elpidio Quirino', 'Bacood St. Sta Mesa, Manila'),
(171, '136433', 'Emilio Jacinto', 'Emilio Jacinto', 'Velasquez St. Tondo, Manila'),
(172, '136476', 'Epifanio Delos Santos', 'Epifanio Delos Santos', ' 1725 Singalong-Malvar St. Malate, Manila'),
(173, '136447', 'Eriberto Remigio', 'Eriberto Remigio', 'Oroquieta Ext. Sta. Cruz, Manila'),
(174, '305304', 'Esteban Abada', 'Esteban Abada', 'Blumentritt St. Sampaloc, Manila'),
(175, '305319', 'Eulogio Rodriguez', 'Eulogio Rodriguez', 'Nagtahan St. Sampaloc, Manila'),
(176, '136486', 'Fernando Amorsolo', 'Fernando Amorsolo', 'Old Panaderos St. Sta. Ana, Manila'),
(177, '136484', 'Fernando Maria Guerrero', 'Fernando Maria Guerrero', 'Pedro Gil-Onyx St. Paco, Manila'),
(178, '500567A', 'fgces manila', 'fgces manila', 'Morong-Limay-Manuguit St. Tondo, Manila'),
(179, '500567B', 'fgchs manila', 'fgchs manila', 'Hermosa St. Tondo, Manila'),
(180, '305298', 'Florentino Torres', 'Florentino Torres', 'Juan Luna St. Gagalangin Tondo, Manila'),
(181, '136451', 'Francisco Balagtas', 'Francisco Balagtas', 'Alvarez-Ipil St. Sta. Cruz, Manila'),
(182, '136426', 'Francisco Benitez', 'Francisco Benitez', '143 Solis St. Tondo, Manila'),
(183, '136454', 'Geronimo Santiago', 'Geronimo Santiago', 'J. Nepomuceno St. San Miguel, Manila'),
(184, '136460', 'Graciano Lopez - Jaena', 'Graciano Lopez - Jaena', 'Matimyas St. Sampaloc, Manila'),
(185, '136428', 'Gregoria De Jesus', 'Gregoria De Jesus', 'Dagupan-Bulacan St. Tondo, Manila'),
(186, '305290', 'Gregorio Perfecto', 'Gregorio Perfecto', 'Ricafort St. Tondo, Manila'),
(187, '136443', 'Gregorio Del Pilar', 'Gregorio Del Pilar', 'Abad Santos-Recto St. Tondo, Manila'),
(189, '136478', 'hjatienzaes manila', 'hjatienzaes manila', 'Port Area, Manila'),
(190, '305313A', 'Ignacio Villamor', 'Ignacio Villamor', 'Pasig Line St. Sta. Ana, Manila'),
(191, '305313B', 'Ignacio Villamor Senior High', 'Ignacio Villamor Senior High', 'Pasig Line St. Sta. Ana, Manila'),
(192, '136439', 'Isabelo Delos Reyes', 'Isabelo Delos Reyes', 'Morga-Sande St. Tondo, Manila'),
(193, '136432', 'Jose Rizal', 'Jose Rizal', 'Tayuman-Pingkian St. Tondo, Manila'),
(194, '305294', 'Jose Laurel', 'Jose Laurel', 'Pampanga St. Tondo, Manila'),
(195, '305302', 'Jose Abad Santos', 'Jose Abad Santos', 'Urbiztondo-Numancia St. San Nicolas, Manila'),
(196, '136440', 'Jose Corazon De Jesus', 'Jose Corazon De Jesus', 'N. Zamora St. Tondo, Manila'),
(197, '136449', 'Juan Sumulong', 'Juan Sumulong', '253 Aragon St. Sta. Cruz, Manila'),
(198, '305288', 'Juan Nolasco', 'Juan Nolasco', '2252 Tioco Park, Tondo, Manila'),
(199, '136465', 'Juan Luna', 'Juan Luna', ' 830 Catalu?a St. Sampaloc, Manila'),
(200, '136473', 'Justo Lukban', 'Justo Lukban', 'G. Apacible St. Paco, Manila'),
(201, '136481', 'jzes manila', 'jzes manila', 'E. Zamora St. Pandacan, Manila'),
(202, '136458', 'Laong Laan', 'Laong Laan', 'Laong Laan Cor. Blumentritt St. Sampaloc, Manila'),
(203, '136427', 'ldes manila', 'ldes manila', '154 Solis St. Tondo, Manila'),
(204, '305295', 'ldhs manila', 'ldhs manila', 'Juan Luna St. Tondo, Manila'),
(205, '136429', 'Librada Avelino', 'Librada Avelino', 'Sunog-Apog St. Tondo, Manila'),
(206, '136462', 'Licerio Geronimo', 'Licerio Geronimo', '537 Geronimo St. Sampaloc, Manila'),
(208, '136438', 'Magat Salamat', 'Magat Salamat', '1429 Sta. Maria St. Tondo, Manila'),
(209, '305312', 'Manila Science', 'Manila Science', 'Taft Ave. P. Faura, Manila'),
(210, '305311', 'Manila High School', 'Manila High School', 'Victoria-Muralla St. Intramuros, Manila'),
(211, '305318', 'Manuel Roxas', 'Manuel Roxas', 'Canonigo St. Paco, Manila'),
(212, '136455', 'Marcela Agoncillo', 'Marcela Agoncillo', 'Madrid-San Nicolas St. Binondo, Manila'),
(213, '136487', 'Margarita Roxas De Ayala', 'Margarita Roxas De Ayala', 'A. Francisco cor. Arellano Sts. Sta Ana, Manila'),
(214, '305316', 'Mariano Marcos', 'Mariano Marcos', '2090 M. Carreon St. Sta. Ana, Manila'),
(215, '136423', 'Mariano Ponce', 'Mariano Ponce', 'Bugallon-T. Mapua St. Tondo, Manila'),
(216, '136444', 'Maximino Hizon', 'Maximino Hizon', 'Velasquez St., Tondo Manila'),
(217, '136424', 'Melchora Aquino', 'Melchora Aquino', 'Solis St. Tondo, Manila'),
(218, '305309', 'Miguel Araullo', 'Miguel Araullo', 'Taft Ave. Cor. U.N. Ave. Ermita, Manila'),
(219, '136470', 'Miguel Malvar', 'Miguel Malvar', 'Mangga Ave. Sta. Mesa, Manila'),
(220, '136437', 'mlqes manila', 'mlqes manila', 'Perla-Verona St. Tondo, Manila'),
(221, '305297', 'mlqjhs manila', 'mlqjhs manila', 'Blumentritt St. Sta. Cruz, Manila'),
(222, '136464', 'Moises Salvador', 'Moises Salvador', 'Geronimo St. Sampaloc, Manila'),
(223, '136452', 'Padre Gomez', 'Padre Gomez', '1224 P. Guevarra St. Sta. Cruz, Manila'),
(224, '136467', 'Padre Burgos', 'Padre Burgos', 'Buenos Aires-Altura St. Sta. Mesa, Manila'),
(225, '136468', 'Pedro Pelaez', 'Pedro Pelaez', 'D. Santiago St. Sta. Mesa, Manila'),
(226, '136456', 'Pedro Guevara', 'Pedro Guevara', 'San Fernando-San Nicolas St. Binondo, Manila'),
(227, '136472', 'Pio Del Pilar', 'Pio Del Pilar', 'Pureza St. Sta. Mesa, Manila'),
(228, '136425', 'Plaridel Plaridel', 'Plaridel Plaridel', '398 Solis St. Tondo, Manila'),
(229, '136479', 'Rafael Palma', 'Rafael Palma', 'Vito Cruz-Zobel Roxas St. Manila'),
(230, '305303', 'Rajah Soliman', 'Rajah Soliman', 'Lachambre St. Binondo, Manila'),
(231, '305306', 'Ramon Magsaysay', 'Ramon Magsaysay', 'Espa?a Blvd. Sampaloc, Manila'),
(232, '305301', 'Ramon Avancena', 'Ramon Avancena', 'J. Nepomuceno St. Quiapo, Manila'),
(233, '136441', 'Rosauro Almario', 'Rosauro Almario', 'Kagitingan St. Tondo, Manila'),
(234, '136485', 'Santa Ana', 'Santa Ana', 'M. Roxas St. Sta. Ana, Manila'),
(235, '136968', 'Sen. Benigno Aquino', 'Sen. Benigno Aquino', 'Port Area, Manila'),
(236, '305296', 'Sergio Osmena', 'Sergio Osmena', 'Earnshaw St. Cor. Bulacan St. Tondo, Manila'),
(237, '136475', 'Silahis ng Katarungan', 'Silahis ng Katarungan', '1520 Paz St. Paco, Manila'),
(238, '136435', 'Teodoro Yangco', 'Teodoro Yangco', 'Franco-Dandan St. Tondo, Manila'),
(239, '136489', 'Tomas Earnshaw', 'Tomas Earnshaw', 'A. Bautista Punta Sta. Ana, Manila'),
(240, '305291', 'Tondo Tondo', 'Tondo Tondo', 'Quezon St. Bo. Magsaysay Tondo, Manila'),
(241, '500566A', 'tpaezes manila', 'tpaezes manila', 'Nepa St. Balut, Tondo, Manila'),
(242, '500566B', 'tpaezhs SHS manila', 'tpaezhs SHS manila', 'Buendia St. cor. Younger St. Tondo, Manila'),
(243, '136463', 'Trinidad Tecson', 'Trinidad Tecson', '510 Geronimo St. Sampaloc, Manila'),
(244, '136466', 'vefmes manila', 'vefmes manila', 'Manila Boystown Complex, Marikina City'),
(245, '305308B', 'vefmhs manila', 'vefmhs manila', 'Parang, Marikina'),
(246, '136434', 'Vicente Lim', 'Vicente Lim', 'Roxas St. Magsaysay Village Tondo, Manila'),
(247, '305315', 'Victorino Mapa', 'Victorino Mapa', '300 San Rafael St. San Miguel, Manila'),
(248, '91299', 'School Bukol', 'Mr. Cruz', 'Tondo, Manila');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_no` (`employee_no`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`),
  ADD KEY `report_id` (`report_id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=783;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
