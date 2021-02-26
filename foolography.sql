-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 08:51 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foolography`
--

-- --------------------------------------------------------

--
-- Table structure for table `short_urls`
--

CREATE TABLE `short_urls` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `long_url` varchar(100) NOT NULL,
  `short_code` varchar(100) NOT NULL,
  `hits` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `short_urls`
--

INSERT INTO `short_urls` (`id`, `user_id`, `long_url`, `short_code`, `hits`, `created`) VALUES
(2, 2, 'https://www.codexworld.com/php-url-shortener-library-create-short-url/', 'QrHg1Nx', 0, '2020-12-13 13:15:17'),
(6, 1, 'https://codewithawa.com/posts/php-crud-create,-edit,-update-and-delete-posts-with-mysql-database', 'kC64qGk', 3, '2020-12-13 14:43:31'),
(7, 1, 'https://www.codexworld.com/php-url-shortener-library-create-short-url/', '0fA966v', 1, '2020-12-13 16:56:13'),
(8, 2, 'https://www.11zon.com/zon/php/how-to-edit-data-in-php-using-form.php', '6kLZ8jg', 1, '2020-12-13 16:57:41'),
(9, 1, 'https://www.w3schools.com/php/php_mysql_update.asp', 'xApq6Vh', 0, '2020-12-13 18:10:40'),
(12, 1, 'https://www.univativ.de/mein-univativ/bewerbungen-und-projekte', 's4M9PJS', 1, '2020-12-13 18:24:55'),
(14, 1, 'https://my.smartrecruiters.com/home', 'JH4tf5s', 0, '2020-12-13 18:44:14'),
(15, 0, 'https://www.xspdf.com/resolution/50530993.html', 'tgJ6XxB', 0, '2020-12-14 08:32:43'),
(16, 2, 'https://www.xspdf.com/resolution/50530993.html', 'bkH8cRs', 0, '2020-12-14 08:34:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Fozan', 'Gill', 'fozangill@gmail.com', 'fozangill123'),
(2, 'John', 'Wick', 'john@gmail.com', 'john123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `short_urls`
--
ALTER TABLE `short_urls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `short_urls`
--
ALTER TABLE `short_urls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
