-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2024 at 05:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login-logic`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `mail_id` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `security_pin` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `date_of_birth`, `gender`, `phone_number`, `mail_id`, `username`, `password`, `security_pin`) VALUES
(1, 'KATHIRESAN T', '2005-10-16', 'Male', '6384472853', 'KATHIRES432@GMAIL.COM', 'KATHIRES143', '$2y$10$u9OaCDRLJlhlFNsnzDOOsuZD0uv0JipFnDthgDUUO79gkXO7dBknO', '1234'),
(2, 'SRINIVASAN A', '2004-07-12', 'Male', '8015824201', 'SRINIANBU2004@GMAIL.COM', 'SRINI135', '$2y$10$tFWnDvfAO9yhmfqjyQjQzOy/WKV8R0AFbtfc9/gb6yL1HsyFLs3PC', '4321'),
(3, 'AADHISHWAR P', '2004-09-15', 'Male', '8838059175', 'ITSMEPATTU982@GMAIL.COM', 'AADHI205', '$2y$10$POEhANCtzyUb.1rAp9tFKeri2HMvNEewSIiui1anDqyTGTBZKS40y', '3124');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail_id` (`mail_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `phone_number` (`phone_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
