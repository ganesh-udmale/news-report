-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 29, 2018 at 07:51 PM
-- Server version: 10.0.36-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 5.6.36-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `movie_name` varchar(50) DEFAULT NULL,
  `actor_name` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `DATE` date DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `text`) VALUES
(1, 'Test', 'test', 'Hello World !!'),
(2, 'What is Lorem Ipsum?', 'what-is-lorem-ipsum', 'Lorem Ipsum is simply dummy text.'),
(3, 'Mouse', 'mouse', 'Laser '),
(4, 'Mouse', 'mouse', 'Laser '),
(7, 'Sagar', 'sagar', 'Khese News'),
(18, 'News ', 'news', 'Desc '),
(19, 'Headline', 'headline', 'Breaking News Headline ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(12) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `user_name`, `email`, `password`, `status`) VALUES
(1, 'Ganehs', 'Ganesh', 'ganesh@gmail.com', 'e6d59f0958ff38f261f4b6b6fde0b763', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
