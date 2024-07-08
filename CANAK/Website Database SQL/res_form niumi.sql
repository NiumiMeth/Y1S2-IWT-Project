-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2024 at 10:02 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canak`
--

-- --------------------------------------------------------

--
-- Table structure for table `res_form`
--

CREATE TABLE `res_form` (
  `id` int(11) NOT NULL,
  `F_name` varchar(100) NOT NULL,
  `L_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `P_number` int(20) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `selected_seat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `res_form`
--

INSERT INTO `res_form` (`id`, `F_name`, `L_name`, `email`, `P_number`, `uid`, `selected_seat`) VALUES
(6, 'C.A.', 'Methma', '0', 779929460, '0', '1-2'),
(10, 'C.A.', 'Methma', 'niumimethma@outlook.com', 777191271, 'IT23245860', '0'),
(11, 'C.A.', 'Methma', 'niumimethma@outlook.com', 777191271, 'IT23245860', '0'),
(12, 'C.A.', 'Methma', 'niumimethma@outlook.com', 777191271, 'IT23245860', ''),
(13, 'C.A.', 'Methma', 'niumimethma@outlook.com', 777191271, 'IT23245860', '1-1'),
(14, 'C.A.', 'Methma', 'niumimethma@outlook.com', 777191271, 'IT23245860', '1-1'),
(15, 'C.A.', 'Methma', 'niumimethma@outlook.com', 777191271, 'IT23245860', '1-2'),
(16, 'C.A.', 'Methma', 'niumimethma@outlook.com', 777191271, 'IT23245860', '1-1'),
(17, 'sandeepai', 'subabanis', 'sandeepa@banis.com', 742536984, 'it24356790', '1-6'),
(18, 'sandeepai', 'subabanis', 'sandeepa@banis.com', 742536984, 'it24356790', '1-6'),
(19, 'sandeepai', 'subabanis', 'sandeepa@banis.com', 742536984, 'it24356790', '1-6'),
(20, 'sandeepai', 'subabanis', 'sandeepa@banis.com', 742536984, 'it24356790', '1-6'),
(21, 'sandeepai', 'subabanis', 'sandeepa@banis.com', 742536984, 'it24356790', '1-6'),
(22, 'sandeepai', 'subabanis', 'sandeepa@banis.com', 742536984, 'it24356790', '1-6'),
(23, 'sandeepai', 'subabanis', 'sandeepa@banis.com', 742536984, 'it24356790', '1-6'),
(24, 'sandeepai', 'subabanis', 'sandeepa@banis.com', 742536984, 'it24356790', '1-6'),
(25, 'sandeepai', 'subabanis', 'sandeepa@banis.com', 742536984, 'it24356790', '1-6'),
(26, 'sandeepai', 'subabanis', 'sandeepa@banis.com', 742536984, 'it24356790', '1-6'),
(27, 'sandeepai', 'subabanis', 'sandeepa@banis.com', 742536984, 'it24356790', '1-6'),
(28, 'sandeepai', 'subabanis', 'sandeepa@banis.com', 742536984, 'it24356790', '1-6'),
(29, 'sandeepai', 'subabanis', 'sandeepa@banis.com', 742536984, 'it24356790', '1-6'),
(30, 'sandeepai', 'subabanis', 'sandeepa@banis.com', 742536984, 'it24356790', '1-6'),
(32, 'C.A.', 'Methma', 'niumimethma@outlook.com', 777191271, 'IT23245860', '1-2'),
(34, 'C.A.', 'Methma', 'niumimethma@outlook.com', 777191271, 'IT23245860', '1-2'),
(35, 'll', 'Methma', 'niumimethma@outlook.com', 779929460, 'dr5645637', '1-4'),
(37, 'C.A.', 'Methma', 'niumimethma@outlook.com', 777191271, 'dr5645637', '1-4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `res_form`
--
ALTER TABLE `res_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `res_form`
--
ALTER TABLE `res_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
