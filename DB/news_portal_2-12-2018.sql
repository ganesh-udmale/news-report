-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2018 at 05:43 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE `actors` (
  `id` int(11) NOT NULL,
  `actor_name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `city` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`id`, `actor_name`, `dob`, `city`, `description`, `created_date`) VALUES
(1, 'Varun Dhavan', '1990-11-30', 'Mumbai', 'Great   ', '0000-00-00'),
(2, 'Tiger shroff', '1990-11-30', 'Mumbai', 'Great   ', '0000-00-00'),
(3, 'Allu arjun', '1990-11-30', 'Hyderabad', 'All in one', '0000-00-00'),
(4, 'Sunny Deol', '1991-02-02', 'Panjab', 'Great Power', '0000-00-00'),
(5, 'Shahid Kapur', '2018-02-01', 'Dellhi', 'j ', '0000-00-00'),
(6, 'Sunil shetti', '2018-02-01', 'South', 'j ', '0000-00-00'),
(7, 'Govinda', '2017-10-31', 'Mumbai', ' All time hit', '0000-00-00'),
(8, 'Akshay Kumar', '1992-12-19', 'Delhi', 'Akki', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `movie_name` varchar(50) DEFAULT NULL,
  `actor_id` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `description` varchar(200) NOT NULL,
  `published_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `movie_name`, `actor_id`, `location`, `date`, `description`, `published_date`) VALUES
(1, 'ABCD', '1', 'pune', '2017-11-30', ' dgdg', '2018-12-02 12:13:38'),
(2, 'ABCD 2', '1', 'pune', '2017-11-30', ' dgdg', '2018-12-02 12:13:54'),
(3, 'Bhagi', '2', 'Pune', '2010-02-02', 'Tow more ', '2018-12-02 12:14:08'),
(4, 'Arya', '3', 'pune', '2017-11-30', ' dgdg', '2018-12-02 12:20:00'),
(5, 'Robot 2.O', '8', 'Hyd', '2018-12-30', ' #3 ', '2018-12-02 12:15:44'),
(13, 'Udata panjab', '5', 'PUne', '2019-02-01', 'HHJL ', '2018-12-02 12:16:30'),
(14, 'Welcome', '8', 'Nagar', '2019-02-01', 'Nana With Kumar and kapoor', '2018-12-02 12:23:21'),
(15, 'Maharaja', '7', 'Koimatur', '1999-03-19', 'Animal Power', '0000-00-00 00:00:00');

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
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

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
-- AUTO_INCREMENT for table `actors`
--
ALTER TABLE `actors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
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
