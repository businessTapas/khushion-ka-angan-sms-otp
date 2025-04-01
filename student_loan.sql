-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 03, 2024 at 04:00 PM
-- Server version: 8.0.36-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khushiyon-ka-angan`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_loan`
--

CREATE TABLE `student_loan` (
  `id` bigint NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phoneno` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `loan_no` varchar(255) DEFAULT NULL,
  `grievance_no` varchar(255) DEFAULT NULL,
  `cancelled_cheque` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `upi_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `student_loan`
--

INSERT INTO `student_loan` (`id`, `full_name`, `email`, `phoneno`, `loan_no`, `grievance_no`, `cancelled_cheque`, `upi_id`, `created_at`) VALUES
(1, 'Dfdsgf', 'saurav.roy@srvmedia.com', '', '12344566', '1223345', 'Screenshot from 2024-04-02 12-16-01.png', '12345', '2024-05-02 12:19:36.737890'),
(4, 'Dfdsgf', 'saurav.roy@srvmedia.com', '', '123455', '1223345', './images/upload/62png', '12345', '2024-05-02 12:31:05.967266'),
(5, 'Dfdsgf', 'saurav.roy@srvmedia.com', '', '2134', '1223345', './images/upload/0653351a1a269f99fb9c29fc6e7d3c19.png', '12345', '2024-05-02 12:33:28.842788'),
(6, 'Dfdf', 'dfdfcdc@gmail', '', '76766', '66', './images/upload/b6c079c6e059bbb521fad1a5ac7ce254.png', '535', '2024-05-02 12:45:55.652324'),
(7, 'Tapas', 'tapas.saha@srvmedia.com', '', '454', '54', './images/upload/b96076b2c6970b4e9b6b2571fd3d5f38.png', '4r4rt4', '2024-05-02 14:43:54.689423'),
(8, 'Tapas', 'tapas.saha@srvmedia.com', '', '454', '54', './images/upload/d8a48fe239aa4e83be9d34cc28f697f7.jpeg', '4r4rt4', '2024-05-02 14:50:23.023830'),
(9, 'Tapas', 'tapas.saha@srvmedia.com', '', '454', '54', './images/upload/ee9cabdc9eec4014ec20ac34f7ba1f3a.jpeg', '4r4rt4', '2024-05-02 14:51:01.525453'),
(10, 'Tapas', 'tapas.saha@srvmedia.com', '', '344343434', '343434', './images/upload/68f6e3f9339113b8b115af168e9adf87.jpeg', '4r4rt4', '2024-05-02 14:51:46.853262'),
(11, 'Tapas', 'tapas.saha@srvmedia.com', '', '344343434', '343434', './images/upload/3dca28847e2396b128348aeff849b798.jpeg', '4r4rt4', '2024-05-02 14:53:02.103900'),
(12, 'Tapas', 'tapas.saha@srvmedia.com', '', '344343434', '343434', './images/upload/dd4c1fedc12621a8a1a198654f40a5eb.jpeg', '4r4rt4', '2024-05-02 14:53:35.159936'),
(13, 'Tapas', 'tapas.saha@srvmedia.com', '', '344343434', '343434', './images/upload/93c02e351779857d5c8c9399c520f995.jpeg', '4r4rt4', '2024-05-02 14:57:41.846764'),
(14, 'Tapas', 'tapas.saha@srvmedia.com', '', '344343434', '343434', './images/upload/878d076b8021f666efa65bf88e78327d.jpeg', '4r4rt4', '2024-05-02 14:58:01.041339'),
(15, 'Tapas', 'tapas.saha@srvmedia.com', '', '4343', '444', './images/upload/a3c6de86b90c3cd565a220e3919824f0.jpeg', 'f4f', '2024-05-02 14:58:46.032861'),
(16, 'Tapas', 'tapas.saha@srvmedia.com', '', '4343', '444', './images/upload/1a00f47db9964a3ee0939e36ee1115ee.jpeg', 'f4f', '2024-05-02 15:00:12.831803'),
(17, 'Tapas', 'tapas.saha@srvmedia.com', '', '4343', '444', './images/upload/1e1b0b7b98ba51e15dfb82f617bcd0df.jpeg', 'f4f', '2024-05-02 15:00:26.837380'),
(18, 'Tapas', 'tapas.saha@srvmedia.com', '', '4343', '444', './images/upload/9dda21fdd3897464d7896499ae8b1d32.jpeg', 'f4f', '2024-05-02 15:07:16.725547'),
(19, 'Tapas', 'tapas.saha@srvmedia.com', '', '4343', '444', './images/upload/bdf0a476f544b8146fa4a0a1155abad9.jpeg', 'f4f', '2024-05-02 15:08:07.882359'),
(20, 'Tapas', 'umakant.sutar@srvmedia.com', '', '2422', '3444', './images/upload/fd14d6d6bc373e16bfd2e4a0c2d99f36.jpeg', 'f4f4ff', '2024-05-02 15:12:51.397891'),
(21, 'Tapas', 'umakant.sutar@srvmedia.com', '', '2422', '3444', './images/upload/01292740112604734c8741c4112942cf.jpeg', 'f4f4ff', '2024-05-02 15:14:06.168530'),
(22, 'Tapas', 'umakant.sutar@srvmedia.com', '', '2422', '3444', './images/upload/55c0e9bc26e76429d75991391f981a4d.jpeg', 'f4f4ff', '2024-05-02 15:15:13.184869'),
(23, 'Tapas', 'tapas.saha@srvmedia.com', '', '43434', '34343', './images/upload/703da777a35afb56f864de4be9d3ab41.jpeg', '43refe', '2024-05-03 09:25:47.284568');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_loan`
--
ALTER TABLE `student_loan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_loan`
--
ALTER TABLE `student_loan`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
