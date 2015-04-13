-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                5.6.17 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Versie:              9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Databasestructuur van anime wordt geschreven
DROP DATABASE IF EXISTS `anime`;
CREATE DATABASE IF NOT EXISTS `anime` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `anime`;


-- Structuur van  tabel anime.adminboard wordt geschreven
DROP TABLE IF EXISTS `adminboard`;
CREATE TABLE IF NOT EXISTS `adminboard` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(1000) NOT NULL,
  `comment` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumpen data van tabel anime.adminboard: ~0 rows (ongeveer)
DELETE FROM `adminboard`;
/*!40000 ALTER TABLE `adminboard` DISABLE KEYS */;
/*!40000 ALTER TABLE `adminboard` ENABLE KEYS */;


-- Structuur van  tabel anime.comments wordt geschreven
DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `topic_id` int(11) NOT NULL DEFAULT '0',
  `contents` text NOT NULL,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumpen data van tabel anime.comments: ~0 rows (ongeveer)
DELETE FROM `comments`;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;


-- Structuur van  tabel anime.news wordt geschreven
DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(1000) NOT NULL DEFAULT '0',
  `comment` varchar(10000) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumpen data van tabel anime.news: ~0 rows (ongeveer)
DELETE FROM `news`;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
/*!40000 ALTER TABLE `news` ENABLE KEYS */;


-- Structuur van  tabel anime.topics wordt geschreven
DROP TABLE IF EXISTS `topics`;
CREATE TABLE IF NOT EXISTS `topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `reason` varchar(100) NOT NULL DEFAULT 'Anything different',
  `user_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel anime.topics: ~1 rows (ongeveer)
DELETE FROM `topics`;
/*!40000 ALTER TABLE `topics` DISABLE KEYS */;
INSERT INTO `topics` (`id`, `name`, `date`, `reason`, `user_id`) VALUES
	(1, 'Leblanc en Zed zijn 2 achtelijke mongolen die niet precies weten wat ze wel en niet kunnen doen. Daarom besluiten ze kinderen te maken, hier kwam de scout: "Teemo" uit.', '2010-06-30 21:15:15', 'A story', 1);
/*!40000 ALTER TABLE `topics` ENABLE KEYS */;


-- Structuur van  tabel anime.users wordt geschreven
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '0',
  `password` varchar(2500) NOT NULL DEFAULT '0',
  `first_name` varchar(250) NOT NULL DEFAULT '0',
  `last_name` varchar(250) NOT NULL DEFAULT '0',
  `email` varchar(500) NOT NULL DEFAULT '0',
  `phonenumber` int(10) NOT NULL DEFAULT '0',
  `age` int(3) NOT NULL DEFAULT '0',
  `rank` int(11) NOT NULL DEFAULT '1',
  `join_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel anime.users: ~4 rows (ongeveer)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `email`, `phonenumber`, `age`, `rank`, `join_date`) VALUES
	(1, 'cbr600f0', 'autist4tw', 'sidney', 'batenburg', 'sidneybatenburg@hotmail.com', 614914901, 18, 1, '2015-04-13 08:59:43'),
	(2, 'FullyHumanGamer', '$2y$10$F.gWo5XxjDz7eK5jwMJ6memis0xDCYWpfV2hRVxNuQH1ANzsmBu/C', 'Jason', 'Roffel', 'jasonroffel@hotmail.nl', 1111111111, 2, 1, '0000-00-00 00:00:00'),
	(3, 'Json', '$2y$10$8kx7HTPTPKIgFgx8D8np/OmOcjuYi51.WIrAfVS4B/.Yhr9Tg/Yc2', 'Jason', 'Roffel', 'jasonroffel@hotmail.nl', 1111111111, 2, 1, '2015-04-13 14:19:40'),
	(4, 'Hello', '$2y$10$D9yHmb.e1OjHmOnJ7arP8OoJt72m/EKBj8unxZd6bUEFjxcgRzdI6', 'Jason', 'Roffel', 'jasonroffel@hotmail.nl', 1111111111, 2, 1, '2015-04-13 14:29:01');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
