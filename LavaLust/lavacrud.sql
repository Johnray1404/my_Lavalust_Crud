-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 19, 2024 at 04:51 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lavacrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `year_section` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `contact_number` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `year_section`, `birthdate`, `address`, `email`, `contact_number`, `created_at`, `updated_at`) VALUES
('mcc2022', 'john ray', '3-F2', '0000-00-00', 'malvar', 'johnray@gmail.com', '09124577314', '2024-09-20 09:18:16', '2024-09-20 09:18:16'),
('91721', 'sohids', 'sasa', '7222-12-09', 'aaddq', 'qdqd@gmail.com', '097637373763', '2024-09-20 17:45:57', '2024-09-20 17:45:57'),
('MCC2022-0458', 'Carpio, John Ray M.', '3-F2', '2004-08-14', 'Malvar Naujan, Oriental Mindoro', 'johnraycarpio1404@gmail.com', '09124577314', '2024-09-20 17:47:33', '2024-09-20 17:47:33'),
('2424', '42142', '1313', '0041-03-11', '13131', '13131@gmail.com', '09124577314', '2024-09-20 17:57:32', '2024-09-20 17:57:32'),
('pgi', 'siaha', 'sdsd', '1998-03-12', 'bucayao', 'johnray@gmail.com', '0912175132323', '2024-09-21 16:52:46', '2024-09-21 16:52:46'),
('123', 'alex macalalad', '3-F9', '2000-03-12', 'salong', 'alex@gmail.com', '09365891276', '2024-09-23 14:14:53', '2024-09-23 14:14:53'),
('bunso', 'manuel', 'grade7', '2012-02-20', 'malvar', 'wako@gmail.com', '09263549873', '2024-09-21 16:09:28', '2024-09-21 16:09:28');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
