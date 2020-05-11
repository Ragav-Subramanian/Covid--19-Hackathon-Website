-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 07, 2020 at 03:28 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id13520606_covid19`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(22) NOT NULL,
  `dname` varchar(22) NOT NULL,
  `userid` int(22) NOT NULL,
  `dcontact` varchar(22) NOT NULL,
  `expertise` varchar(22) NOT NULL,
  `fee` varchar(22) NOT NULL,
  `pname` varchar(22) NOT NULL,
  `pcontact` varchar(22) NOT NULL,
  `email` varchar(111) NOT NULL,
  `address` varchar(22) NOT NULL,
  `dates` date NOT NULL,
  `tyme` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(22) NOT NULL,
  `cat` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `doctor` (
  `doc_id` int(22) NOT NULL,
  `name` varchar(22) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(14) NOT NULL,
  `email` varchar(22) NOT NULL,
  `expertise` varchar(22) NOT NULL,
  `id` int(11) NOT NULL,
  `fee` varchar(111) NOT NULL,
  `userid` varchar(22) NOT NULL,
  `password` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `name` varchar(22) NOT NULL,
  `age` varchar(22) NOT NULL,
  `contact` varchar(22) NOT NULL,
  `address` varchar(22) NOT NULL,
  `bgroup` varchar(22) NOT NULL,
  `email` varchar(111) NOT NULL,
  `password` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `age`, `contact`, `address`, `bgroup`, `email`, `password`) VALUES
(1, 'Md. Azharul Islam', '21', '01746314882', 'Dinajpur', 'O+', 'azad.ece13@gmail.com', '1234'),
(2, 'Al-Mamun', '22', '01746314882', 'Saidpur,Rangpur', 'AB+', 'mamun@gmail.com', '123'),
(3, 'test name', '22', '01765674567', 'Dinajpur', 'A-', 'test@gmail.com', '123'),
(5, 'developerazad', '21', '01764761919', 'Dhaka', 'O+', 'developerazad.hstu@gmail.com', 'developerazad'),
(6, 'developerazad', '22', '01521470368', 'Dhaka', 'AB+', 'developerazad.hstu@gmail.com', '1234'),
(7, 'arun', '12', '856324157', 'NO:8,street', 'A+', 'arun@gmail.com', 'arun');

-- --------------------------------------------------------

--
-- Table structure for table `patientdb`
--

CREATE TABLE `patientdb` (
  `id` int(11) NOT NULL,
  `patientname` varchar(40) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `age` int(11) NOT NULL,
  `adt` varchar(20) NOT NULL,
  `btemp` int(11) NOT NULL,
  `bsl` int(11) NOT NULL,
  `diagnised` int(11) NOT NULL,
  `oill` varchar(20) NOT NULL,
  `q1` varchar(11) NOT NULL,
  `q2` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientdb`
--

INSERT INTO `patientdb` (`id`, `patientname`, `gender`, `age`, `adt`, `btemp`, `bsl`, `diagnised`, `oill`, `q1`, `q2`) VALUES
(1, 'Ragav', 'M', 19, '2020-05-05', 102, 300, 973, 'Headpain', '', ''),
(4, 'hjgkkk', 'F', 66, '7777-07-07', 45, 66, 978, 'hjgggg', '', ''),
(3, 'aasiya', 'F', 19, '2222-12-12', 122, 80, 979, 'dwqqqqqq', 'Array', ''),
(3, 'aasiya', 'F', 19, '2222-12-12', 122, 80, 979, 'dwqqqqqq', 'Array', ''),
(2, 'ms dnmsnfn', 'M', 33, '5555-12-31', 222, 22, 977, 'eeeeeee', 'Array', ''),
(2, 'ms dnmsnfn', 'M', 33, '5555-12-31', 222, 22, 977, 'eeeeeee', 'rapid,nasal', ''),
(2, 'ms dnmsnfn', 'M', 33, '5555-12-31', 222, 22, 977, 'eeeeeee', 'rapid,nasal', ''),
(3, 'aasiya', 'F', 19, '2000-12-12', 99, 120, 0, 'none', 'swab,nasal', 'shortness ');

-- --------------------------------------------------------

--
-- Table structure for table `shelters`
--

CREATE TABLE `shelters` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `capacity` int(11) NOT NULL,
  `current_holding` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shelters`
--

INSERT INTO `shelters` (`id`, `name`, `latitude`, `longitude`, `capacity`, `current_holding`) VALUES
(1, 'KKDI2', 12.0012, 72.15, 1000, 500);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `pwd`) VALUES
('admin', '$2y$10$RHF22LZLgmzILAlJDHHf.eMgkrwmUogXly5SqmRWU87WE3pqja4WS'),
('mei', '$2y$10$QgnGhR5JxDqipQNR7Asvtu7REJkJd1OB7DFQVcBr3q0vdorCXlswG'),
('ven', '$2y$10$7NNuBgZAf6hbQWrp4g4ozO3x1OVk0Ctbb7fGdVKJh7VdEO/Q0b8Bm'),
('ragav_1302', '$2y$10$TbNuKHGxjafAxfPVKYv/I.2KxyEsYGu6jyE0Cx6kJxGcyc8cWsI6y'),
('ragav', '$2y$10$KfwjyGevKDsqshrGyLM4fet9iyvHVipW.HEKA.iRHrf2sXE0dLdVi'),
('subash', '$2y$10$JZP6l/rhen9MmxCqypPUH.DMoXc0rcYI..8MOUkNpH9dZW11XxKIe'),
('p', '$2y$10$PVTiSJaVPFSgVI0Lra6Jqeji/sjtfR9bihT.es6J/ZCD1wivd9kii'),
('as', '$2y$10$YYIWdibxFkKu1MVNXWRGqOxQP7aEg.0P5Uzdo31LPT1qPziPKRHr.'),
('Nihafarheen', '$2y$10$IZ/kjF9enH8zI3yYaK5sF.mPvtdIHw3qUbzEzs7WYu.FuNstp4k16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shelters`
--
ALTER TABLE `shelters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doc_id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `shelters`
--
ALTER TABLE `shelters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
CREATE TABLE
IF NOT EXISTS `essential`
(
  `email` varchar
(22) NOT NULL,
  `name` varchar
(22) NOT NULL,
  `aadhar` int
(22) NOT NULL,
  `vnum` int
(14) NOT NULL,
  `trip`varchar
(22) NOT NULL,
  `start` int
(22) date,
   `
end` data,
  `gender` varchar
(111) NOT NULL,
  `account` varchar
(22) NOT NULL,
  `reason` varchar
(22) NOT NULL,
  PRIMARY KEY
(`email`)
)
