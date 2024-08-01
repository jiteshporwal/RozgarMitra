-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 14, 2024 at 05:16 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `RojgarMitra-services`
--

USE `RojgarMitra-services`;

-- --------------------------------------------------------

--
-- Table structure for table `service-plumber`
--

CREATE TABLE `service-plumber` (
  `Name` varchar(222) NOT NULL,
  `Age` int(2) NOT NULL,
  `contact number` int(12) NOT NULL,
  `Address` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service-plumber`
--

INSERT INTO `service_plumber` (`name`, `age`, `mobile_number`, `address`) VALUES
('Suresh Yadav', 32, '9876543200', 'New Colony, Mandsaur, Madhya Pradesh, India'),
('Rajesh Patel', 35, '9876543201', 'Gandhi Nagar, Mandsaur, Madhya Pradesh, India'),
('Amit Singh', 29, '9876543202', 'Shivaji Nagar, Mandsaur, Madhya Pradesh, India'),
('Vikram Chauhan', 33, '9876543203', 'Sindhi Colony, Mandsaur, Madhya Pradesh, India'),
('Kavita Jain', 30, '9876543204', 'Saraswati Nagar, Mandsaur, Madhya Pradesh, India'),
('Prakash Sharma', 36, '9876543205', 'Balaji Nagar, Mandsaur, Madhya Pradesh, India'),
('Anita Gupta', 31, '9876543206', 'Jawahar Nagar, Mandsaur, Madhya Pradesh, India'),
('Sunil Verma', 34, '9876543207', 'Nehru Nagar, Mandsaur, Madhya Pradesh, India'),
('Ritu Tiwari', 28, '9876543208', 'Shastri Nagar, Mandsaur, Madhya Pradesh, India'),
('Alok Mishra', 37, '9876543209', 'Vivekananda Nagar, Mandsaur, Madhya Pradesh, India');
COMMIT;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
