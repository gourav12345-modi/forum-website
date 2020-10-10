-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2020 at 11:44 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gforum`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(8) NOT NULL,
  `categories_name` varchar(255) NOT NULL,
  `categories_description` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_name`, `categories_description`, `created`, `image`) VALUES
(1, 'python', 'python is programming language.Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis sint, aut distinctio officia quibusdam laboriosam culpa unde. Eos quod ea temporibus magni.\r\n', '2020-07-20 20:06:32', './img/python.jpg'),
(2, 'javascript ', 'javascript is a awsome language for webdev.Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis sint, aut distinctio officia quibusdam laboriosam culpa unde. Eos quod ea temporibus magni.\r\n', '2020-07-20 20:09:07', './img/javascript.jpg'),
(3, 'html', 'htmlis a awsome language for webdev.Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis sint, aut distinctio officia quibusdam laboriosam culpa unde. Eos quod ea temporibus magni.\r\n', '2020-07-20 23:14:40', './img/html.jpg'),
(4, 'css', 'css is a awsome language for webdev.Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis sint, aut distinctio officia quibusdam laboriosam culpa unde. Eos quod ea temporibus magni.\r\n', '2020-07-20 23:15:25', './img/css.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_content` text NOT NULL,
  `thread_id` int(11) NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT current_timestamp(),
  `comment_by` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE `thread` (
  `thread_id` int(11) NOT NULL,
  `thread_title` varchar(5555) NOT NULL,
  `thread_desc` text NOT NULL,
  `thread_cat_id` int(55) NOT NULL,
  `thread_user_id` varchar(5555) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thread`
--

INSERT INTO `thread` (`thread_id`, `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `time`) VALUES
(1, 'pip not working ', 'i have installed ', 1, 'akd', '2020-07-21 14:57:00'),
(23, ' unknonw h1 tag', ' what is the use of h1', 3, 'oper', '2020-07-21 20:07:11');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sn.` int(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `tstamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sn.`, `name`, `password`, `tstamp`) VALUES
(33, 'go', '$2y$10$OMQKWQ.NiTPqFhITbhciXOUcy.nvWjjfApqpp2Ks9iZjLOW2VSoBK', '2020-09-11 15:01:36'),
(34, 'gou', '$2y$10$RCxQVhTow.x6.gZq9CxSpeaaZdWuSIEUFm3dHxjk77mIzHezWx7n.', '2020-09-11 15:03:55'),
(35, 'gouravmodi', '$2y$10$YxFgE3JX7/0L6MSKXr0zduHASbL7QeRbeLwz8qTBzKuMI897iFooG', '2020-09-11 15:07:12'),
(36, 'gi', '$2y$10$QPMiBsaEQzCP7YdlFZNsx.bguHSKP2m5wT.bR4jZHVz0iO//sOwtG', '2020-09-11 15:09:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `thread`
--
ALTER TABLE `thread`
  ADD PRIMARY KEY (`thread_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`sn.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thread`
--
ALTER TABLE `thread`
  MODIFY `thread_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sn.` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
