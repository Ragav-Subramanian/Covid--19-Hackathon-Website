-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `doct`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `cat` varchar(22) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat`) VALUES
(1, 'Medicine'),
(2, 'Heart'),
(3, 'Bone'),
(4, 'Kedney'),
(5, 'Cardiologist'),
(6, 'Plastic Surgeon'),
(7, 'General Physician'),
(8, 'Neurologist'),
(9, 'Fertility doctor');
-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `doc_id` int(22) NOT NULL AUTO_INCREMENT,
  `name` varchar(22) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(14) NOT NULL,
  `email` varchar(22) NOT NULL,
  `expertise` varchar(22) NOT NULL,
  `id` int(11) NOT NULL,
  `fee` varchar(111) NOT NULL,
  `userid` varchar(22) NOT NULL,
  `password` varchar(22) NOT NULL,
  PRIMARY KEY (`doc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doc_id`, `name`, `address`, `contact`, `email`, `expertise`, `id`, `fee`, `userid`, `password`) VALUES
(1, 'Dr. Abdul Kader', 'Dinajpur', '01734761999', 'kader@gmail.com', 'Heart', 2, '500', '1001', '123'),
(2, 'Dr. Azharul Islam', 'Dinajpur', '01764761919', 'azad.ece13@gmail.com', 'Medicine', 1, '500', '1002', '123'),
(3, 'Dr. Rashid', 'Rangpur', '01521670654', 'rashid@gmail.com', 'Medicine', 1, '600', '1003', '123'),
(4, 'Dr. Badol Miah', 'Dhaka', '01949389983', 'badol@gmail.com', 'Kedney', 4, '700', '1004', '123'),
(5, 'Dr. Nur Mohammad', 'Dhaka', '01674546856', 'nur@gmail.com', 'Cardiologist', 5, '700', '1005', '123'),
(6, 'Dr. Majedul Islam', 'Dhaka', '01734761999', 'majedul@gmail.com', 'Medicine', 1, '800', '1006', '123'),
(7, 'Dr. Rafiq Ahmed', 'Rajsahi', '01674546563', 'rafiq@gmail.com', 'Neurologist', 8, '600', '1007', '123'),
(8, 'Dr. Sajedul Islam', 'Rangpur', '01521768936', 'sajedul@gmail.com', 'Bone', 3, '700', '1008', '123'),
(9, 'Dr. Abul Kalam', 'Pabna', '+8801976564536', 'abulkalam@gmail.com', 'Plastic Surgeon', 6, '500', '1009', '123'),
(10, 'Md. Azharul Islam', 'Dhaka', '01764761919', 'azad.ece13@gmail.com', 'Fertility doctor', 0, '800', '1012', '123');


-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(22) NOT NULL,
  `age` varchar(22) NOT NULL,
  `contact` varchar(22) NOT NULL,
  `address` varchar(22) NOT NULL,
  `bgroup` varchar(22) NOT NULL,
  `email` varchar(111) NOT NULL,
  `password` varchar(22) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `age`, `contact`, `address`, `bgroup`, `email`, `password`) VALUES
(1, 'Md. Azharul Islam', '21', '01746314882', 'Dinajpur', 'O+', 'azad.ece13@gmail.com', '1234'),
(2, 'Al-Mamun', '22', '01746314882', 'Saidpur,Rangpur', 'AB+', 'mamun@gmail.com', '123'),
(3, 'test name', '22', '01765674567', 'Dinajpur', 'A-', 'test@gmail.com', '123'),
(5, 'developerazad', '21', '01764761919', 'Dhaka', 'O+', 'developerazad.hstu@gmail.com', 'developerazad'),
(6, 'developerazad', '22', '01521470368', 'Dhaka', 'AB+', 'developerazad.hstu@gmail.com', '1234');

-- --------------------------------------------------------


--
-- Table structure for table `patient`
--
CREATE TABLE IF NOT EXISTS `booking`
(
  `booking_id` int
(22) NOT NULL AUTO_INCREMENT,
  `dname` varchar
(22) NOT NULL,
  `userid` int
(22) NOT NULL,
  `dcontact` varchar
(22) NOT NULL,
  `expertise` varchar
(22) NOT NULL,
  `fee` varchar
(22) NOT NULL,
  `pname` varchar
(22) NOT NULL,
  `pcontact` varchar
(22) NOT NULL,
  `email` varchar
(111) NOT NULL,
  `address` varchar
(22) NOT NULL,
  `dates` date NOT NULL,
  `tyme` varchar
(22) NOT NULL,
  PRIMARY KEY
(`booking_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

