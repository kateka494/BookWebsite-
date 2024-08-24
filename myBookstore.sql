-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 15, 2023 at 11:56 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

DROP TABLE IF EXISTS `tbladmin`;
CREATE TABLE IF NOT EXISTS `tbladmin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblaorder`
--

DROP TABLE IF EXISTS `tblaorder`;
CREATE TABLE IF NOT EXISTS `tblaorder` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `date` varchar(225) NOT NULL,
  `priority` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblbooks`
--

DROP TABLE IF EXISTS `tblbooks`;
CREATE TABLE IF NOT EXISTS `tblbooks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `isbn` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `author` varchar(225) NOT NULL,
  `year` varchar(225) NOT NULL,
  `bcondition` varchar(225) NOT NULL,
  `cover` varchar(225) NOT NULL,
  `file` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblbooks`
--

INSERT INTO `tblbooks` (`id`, `isbn`, `title`, `author`, `year`, `bcondition`, `cover`, `file`) VALUES
(1, '9781285856919', 'Java Programming', 'Joyce Farrell', 'java.jpg', 'Good', 'java.jpg', 'It comprehensively covers basic Java concepts such as programming principles, keywords, Java language syntaxes, Java 8 API, JavaBeans, servlets, applets, swing, etc.'),
(2, '9789544007737', 'Fundementals of C# Programming', 'Svetlin Nakov', '2014', 'Better', 'csharp.jpg', 'C# 8.0 and .NET Core 3.0 – Modern Cross-Platform Development: Build applications with C#, .NET Core, Entity Framework Core, ASP.NET Core, and ML.NET using Visual Studio Code, 4th Edition 4th Edition, Kindle Edition'),
(6, '‎1569319014', 'One Piece:Romance Dawn', 'Eiichiro Oda', '1999', 'Good', 'onepiece.jpg', 'Romance Dawn refers to two stories written by Eiichiro Oda before One Piece but set in a similar world. While a first-year junior high school student, he began sketching out ideas for a pirate-themed manga in a notebook, in p'),
(8, '9781974725199', 'One Piece: Wano Vol.98', 'Eiichiro Oda', '2022', 'Good', 'op98.jpg', 'As a child, Monkey D. Luffy dreamed of becoming King of the Pirates. But his life changed when he accidentally gained the power to stretch like rubber...at the cost of never being able to swim again! Years, later, Luffy sets '),
(9, '9781302931162', 'Immortal Hulk Vol. 11: Apocrypha', 'Al Ewing', '2020', 'Better', 'hulk.jpg', 'Complete your collection of Al Ewing\'s incredible saga of the Immortal Hulk! Stephen Strange is dead. All that is left is a charred skeleton. Bruce Banner wants to know why - and he won\'t stop until he knows the truth. The ro');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

DROP TABLE IF EXISTS `tbluser`;
CREATE TABLE IF NOT EXISTS `tbluser` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `studentnumber` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `user_type` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `name`, `username`, `studentnumber`, `password`, `user_type`) VALUES
(1, 'Tshedza', 'JetBlack7', 'ST10131676', 'dd057f88f69d05229d6b0d9739cdb0fd', 'admin'),
(2, 'Kevin', 'Kev123', 'ST10057836', '9d5e3ecdeb4cdb7acfd63075ae046672', 'user'),
(4, 'Jeffery', 'j1', 'ST10131676', 'e59842e08c3c2c6f43fb13dee26e2bf4', 'user'),
(5, 'Jake', 'jake12', 'ST12020202', '1200cf8ad328a60559cf5e7c5f46ee6d', 'user'),
(9, 'Kateka', 'kat123', 'ST10121314', 'b146a357c57fddd450f6b5c446108672', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
