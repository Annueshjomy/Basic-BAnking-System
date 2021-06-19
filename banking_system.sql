-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jun 17, 2021 at 05:33 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transrecord`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sender` varchar(20) NOT NULL,
  `receiver` varchar(20) NOT NULL,
  `balance` int(10) NOT NULL,
  `datetime` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sender`, `receiver`, `balance`, `datetime`) VALUES
('Gowtham', 'Annuesh', 2000, '2021-06-19'),
('Annuesh', 'Vinay', 5000, '2021-06-19'),
('Vinay', 'Rushi', 400, '2021-06-19'),
('Prashant', 'Yoga', 900, '2021-06-19'),
('Yoga', 'Vinay', 1000, '2021-06-19'),
('Rushi', 'Yoga', 300, '2021-06-19'),
('Lattesh', 'Dinesh', 500, '2021-06-19'),
('Annuesh', 'Lattesh', 1000, '2021-06-19'),
('Kumar', 'Gowtham', 5000, '2021-06-19'),
('Gowtham', 'Yoga', 5000, '2021-06-19'),
('Ajesh', 'Annuesh', 3000, '2021-06-19');


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Gowtham', 'gowtham@gmail.com', 47800),
(2, 'Annuesh', 'annuesh@gmail.com', 20400),
(3, 'Kumar', 'kumar@gmail.com', 10000),
(4, 'Dinesh', 'dinesh@gmail.com', 30000),
(5, 'Lattesh', 'lattesh@gmail.com', 30500),
(6, 'Yoga', 'yoga@gmail.com', 48900),
(7, 'Vinay', 'vinay@gmail.com', 31800),
(8, 'Rushi', 'rushi@gmail.com', 20600),
(9, 'Prashant', 'prashant@gmail.com', 41000),
(10, 'Ajesh', 'ajesh@gmail.com', 49000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
