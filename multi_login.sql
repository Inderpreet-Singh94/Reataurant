-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2020 at 01:57 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multi_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `user_type`) VALUES
(0, 'Jaskaran Singh', 'jas17@email.com', '160298f5f42c5c9a58af4ce8f9c8ada7', 'user'),
(0, 'jass', 'jas@gmail.com', '160298f5f42c5c9a58af4ce8f9c8ada7', 'user'),
(0, 'jass', 'jass@gamil.com', '160298f5f42c5c9a58af4ce8f9c8ada7', 'user'),
(0, 'hello', 'hello@gmail.com', '5d41402abc4b2a76b9719d911017c592', 'user'),
(0, 'singh', 'singh@gamil.com', '2865a5b14e5a70273a7d311bfc150f4f', 'user'),
(0, 'singh1', 'singh@gmail.com', 'e90c6647830e603b4e761311d05238db', 'user'),
(0, 'singh2', 'singh2@gmail.com', '99d0556a10eee503a341bac59a272903', 'user'),
(0, 'singh2', 'singh2@gmail.com', '99d0556a10eee503a341bac59a272903', 'user'),
(0, 'yes', 'yes@gmailcom', 'a6105c0a611b41b08f1209506350279e', 'user'),
(0, 'no', 'no@email.com', '7fa3b767c460b54a2be4d49030b349c7', 'user'),
(0, 'inder', 'inder@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD KEY `id` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
