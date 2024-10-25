-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 25, 2024 at 01:11 PM
-- Server version: 8.3.0
-- PHP Version: 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patient_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` tinyint NOT NULL AUTO_INCREMENT,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin', 'c93ccd78b2076528346216b3b2f701e6');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE IF NOT EXISTS `appointments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('male','female','other') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `doctor_specialization` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `appointment_date` date NOT NULL,
  `time_slot` varchar(200) NOT NULL,
  `payment` varchar(200) NOT NULL,
  `document_path` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `email`, `phone`, `dob`, `gender`, `address`, `doctor_name`, `doctor_specialization`, `appointment_date`, `time_slot`, `payment`, `document_path`, `created_at`) VALUES
(1, 'Philips ', 'philips@gmail.com', '8988523880', '2019-06-25', 'male', ' USA', 'John', 'Cardiology', '2024-10-25', '3:30 PM', 'COD', '../public/uploads/revised_list_of_grade-iii_grade-iv_posts_0.pdf', '2024-10-25 09:49:59'),
(2, 'Maria ', 'maria@gmail.com', '8988523881', '2021-06-25', 'female', ' UK ', 'John', 'Cardiology', '2024-10-25', '4:30 PM', 'COD', '../public/uploads/SQL-Cheat-Sheet.pdf', '2024-10-25 09:53:09'),
(3, 'Robert', 'robert@gmail.com', '8988523882', '2016-06-25', 'male', ' Canada', 'Anjana', 'ENT', '2024-10-25', '12 PM', 'COD', '../public/uploads/Affiliate Landing Page changes.docx', '2024-10-25 09:54:41'),
(4, 'Bishnoi ', 'bishnoi@gmail.com', '8988523883', '1998-10-10', 'male', ' Canada', 'Anjana', 'ENT', '2024-10-26', '2 PM', 'COD', '../public/uploads/admin_login_bg1.jpg', '2024-10-25 09:57:03'),
(5, 'Daaud ', 'daaud@gmail.com', '8988523884', '1995-06-25', 'male', ' UAE', 'John', 'Cardiology', '2024-10-26', '5 PM', 'COD', '../public/uploads/doctor_icon3.jpg', '2024-10-25 09:59:31');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE IF NOT EXISTS `doctors` (
  `id` tinyint NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `name` varchar(120) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(120) NOT NULL,
  `specialization` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `docFees` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `username`, `password`, `name`, `email`, `phone`, `specialization`, `docFees`) VALUES
(1, 'doctor1@2024', '$2y$10$jAST3IViG7bfa3jYxnmNSuBs2VpqGiM1aavSkPuHulmYhF4df30ei', 'John', 'john@gmail.com', '8988523880', 'Cardiology', 200),
(2, 'doctor2@2024', '$2y$10$WsT/1NLZcHv7oLrKHsOM7uymJP0D9qpe/RN91j51Sc6gy6R8HtgOK', 'Anjana', 'anjana@gmail.com', '9876543210', 'ENT', 454),
(3, 'doctor3@2024', '$2y$10$9gKfKJwZsF5sQD5OIlgnR.HOOZAt6iyptF6Uo.eoNba7m0QvN.P2K', 'Startup ', 'startup@gmail.com', '8988523880', 'Dermatology ', 300),
(4, 'doctor4@2024', '$2y$10$6JDwjwcFQBmitSyrNfnApeIbQ5yghxep9aWAvJVVtceLK.SdPH17O', 'William', 'william@gmail.com', '8988523883', 'Orthopedics', 400);

-- --------------------------------------------------------

--
-- Table structure for table `doctorspecializations`
--

DROP TABLE IF EXISTS `doctorspecializations`;
CREATE TABLE IF NOT EXISTS `doctorspecializations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `specialization` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `doctorspecializations`
--

INSERT INTO `doctorspecializations` (`id`, `specialization`) VALUES
(1, 'Cardiology'),
(2, 'ENT'),
(3, 'Dermatology '),
(4, 'Orthopedics'),
(5, 'Radiology');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_session`
--

DROP TABLE IF EXISTS `doctor_session`;
CREATE TABLE IF NOT EXISTS `doctor_session` (
  `id` int NOT NULL AUTO_INCREMENT,
  `doctor_id` int NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `doctor_specialization` varchar(255) NOT NULL,
  `sessions` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `appointment_day` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `doctor_session`
--

INSERT INTO `doctor_session` (`id`, `doctor_id`, `doctor_name`, `doctor_specialization`, `sessions`, `appointment_day`, `created_at`) VALUES
(1, 1, 'John Doe', 'Cardiology', '10 AM, 10:30 AM, 11 AM, 11:30 AM, 12 PM, 12:30 PM, ', 'Monday', '2024-10-21 09:57:58'),
(2, 1, 'John Doe', 'Cardiology', '10 AM, 10:30 AM, 11 AM, 11:30 AM, 12 PM, 12:30 PM, 1:30 PM, 2 PM, 2:30 PM, 3 PM, 3:30 PM, 4 PM, 4:30 PM, 5 PM, 5:30 PM', 'Tuesday', '2024-10-21 09:57:58'),
(3, 1, 'John Doe', 'Cardiology', '10 AM, 10:30 AM, 11 AM, 11:30 AM, 12 PM, 12:30 PM, 1:30 PM, 2 PM, 2:30 PM, 3 PM, 3:30 PM, 4 PM, 4:30 PM, 5 PM, 5:30 PM', 'Wednesday', '2024-10-21 09:57:58'),
(4, 1, 'John Doe', 'Cardiology', '10 AM, 10:30 AM, 11 AM, 11:30 AM, 12 PM, 12:30 PM, 1:30 PM, 2 PM, 2:30 PM, 3 PM, 3:30 PM, 4 PM', 'Friday', '2024-10-21 09:58:12'),
(5, 1, 'John Doe', 'Cardiology', '10 AM, 10:30 AM, 11 AM, 11:30 AM, 12 PM, 12:30 PM, 1:30 PM, 2 PM, 2:30 PM, 3 PM, 3:30 PM, 4 PM', 'Saturday', '2024-10-21 09:58:12'),
(6, 2, 'Anjana Jolly ', 'ENT', '10 AM, 10:30 AM, 11 AM, 11:30 AM, 12 PM, 12:30 PM, 1:30 PM, 2 PM, 2:30 PM, 3 PM, 3:30 PM, 4 PM, 4:30 PM, 5 PM', 'Monday', '2024-10-22 11:41:11'),
(7, 3, 'Startup ', 'Dermatology ', '10 AM, 10:30 AM, 11 AM, 11:30 AM, 12 PM, 12:30 PM, 1:30 PM, 2 PM, 2:30 PM, 3 PM, 3:30 PM, 4 PM', 'Monday', '2024-10-22 11:42:46');

-- --------------------------------------------------------

--
-- Table structure for table `medicalhistory`
--

DROP TABLE IF EXISTS `medicalhistory`;
CREATE TABLE IF NOT EXISTS `medicalhistory` (
  `id` int NOT NULL AUTO_INCREMENT,
  `patient_id` int NOT NULL,
  `symptoms` varchar(200) NOT NULL,
  `medicines` varchar(200) NOT NULL,
  `nextAppointment` date NOT NULL,
  `diet` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `medicalhistory`
--

INSERT INTO `medicalhistory` (`id`, `patient_id`, `symptoms`, `medicines`, `nextAppointment`, `diet`, `created_at`) VALUES
(1, 1, 'High cholesterol', 'Atorvastatin , Fluvastatin', '2024-11-02', '  less oily food , like junk food, increase water , & green vegetables ', '2024-10-25 11:01:09'),
(2, 3, 'Dust Allergy, dryness ', 'Himalaya Eye Care drop , ', '2024-11-03', '   Reduce Screen Time, and eat green Vegetables ', '2024-10-25 11:44:42'),
(3, 2, 'High BP , and sugar , ', 'Calcium channel blocker', '2024-10-30', ' eat Less salt & sugar , increase  daily doze of drink water, away from the stress.', '2024-10-25 11:49:58'),
(4, 1, 'High Cholesterol , High BP ', 'Atorvastatin ,', '2024-11-09', '  less oily food , like junk food, increase water , & green vegetables add some citric food ', '2024-10-25 12:03:21');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `staff_type` varchar(50) NOT NULL,
  `technical_staff` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `non_technical_staff` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `username`, `password`, `name`, `email`, `phone`, `gender`, `staff_type`, `technical_staff`, `non_technical_staff`, `created_at`) VALUES
(1, 'henary@2024', '$2y$10$HCQaElKia4j61kJagwOlQ.EllLfs1cJzG22c.dtdATE.Uib18t2yG', 'Philips ', 'john@gmail.com', '8988523880', 'male', 'technical', 'dietitian', '', '2024-10-17 12:31:39');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
