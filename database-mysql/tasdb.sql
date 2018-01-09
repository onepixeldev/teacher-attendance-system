-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2018 at 06:23 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tasdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `fullname` varchar(232) NOT NULL,
  `email` varchar(232) NOT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `fullname`, `email`, `phone`) VALUES
(1, 'admin1', 'admin1', 'Mohd Syazwan \'Izzan', 'xenotime@gmail.com', '011-33295442');

-- --------------------------------------------------------

--
-- Table structure for table `clockin`
--

CREATE TABLE `clockin` (
  `clockID` int(11) NOT NULL,
  `teacherID` bigint(20) NOT NULL,
  `teacherName` varchar(255) NOT NULL,
  `date_in_out` date NOT NULL,
  `timeIN` time NOT NULL,
  `timeOUT` time DEFAULT NULL,
  `tickIN` varchar(10) NOT NULL,
  `tickOUT` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clockin`
--

INSERT INTO `clockin` (`clockID`, `teacherID`, `teacherName`, `date_in_out`, `timeIN`, `timeOUT`, `tickIN`, `tickOUT`) VALUES
(27, 920619035242, 'FATIN NABILAH BINTI MOHAMED', '2017-12-04', '08:00:00', '17:00:00', 'MASUK', 'KELUAR'),
(28, 880925115044, 'IKLIMAH BINTI ABDUL MANAF', '2017-12-04', '08:00:00', '17:00:00', 'MASUK', 'KELUAR'),
(29, 910829115516, 'LIHAYAATI BINTI MAT-ISA', '2017-12-04', '08:00:00', '17:04:00', 'MASUK', 'KELUAR'),
(30, 920516035485, 'MOHAMAD RASHID BIN MAT YUSOF', '2017-12-05', '07:59:00', '17:00:00', 'MASUK', 'KELUAR'),
(31, 910613035891, 'MUHAMMAD SYAHRIL BIN MOHAMED', '2017-12-05', '08:00:00', '17:00:00', 'MASUK', 'KELUAR'),
(32, 961211085933, 'SALMAN BIN HAMZAH', '2017-12-05', '08:00:00', '17:00:00', 'MASUK', 'KELUAR'),
(33, 900329115852, 'WAN ATHIRAH BINTI WAN YUSOF', '2017-12-06', '08:00:00', '17:00:00', 'MASUK', 'KELUAR'),
(34, 931014036254, 'WAN NUR AFIQAH BINTI WAN MUSTAFA', '2017-12-06', '08:00:00', '17:06:00', 'MASUK', 'KELUAR'),
(35, 890105115689, 'ZUREMI BIN RAMLI', '2017-12-07', '08:00:00', '17:13:00', 'MASUK', 'KELUAR'),
(36, 920619035242, 'FATIN NABILAH BINTI MOHAMED', '2017-12-07', '08:00:00', '17:00:00', 'MASUK', 'KELUAR'),
(37, 880925115044, 'IKLIMAH BINTI ABDUL MANAF', '2017-12-08', '08:00:00', '17:00:00', 'MASUK', 'KELUAR'),
(38, 880925115044, 'IKLIMAH BINTI ABDUL MANAF', '2017-12-18', '08:00:00', '17:00:00', 'MASUK', 'KELUAR'),
(39, 910829115516, 'LIHAYAATI BINTI MAT-ISA', '2017-12-18', '08:03:00', '17:00:00', 'MASUK', 'KELUAR'),
(40, 920516035485, 'MOHAMAD RASHID BIN MAT YUSOF', '2017-12-19', '08:00:00', '17:00:00', 'MASUK', 'KELUAR'),
(41, 910613035891, 'MUHAMMAD SYAHRIL BIN MOHAMED', '2017-12-19', '08:00:00', '17:00:00', 'MASUK', 'KELUAR'),
(42, 961211085933, 'SALMAN BIN HAMZAH', '2017-12-20', '08:00:00', '17:00:00', 'MASUK', 'KELUAR'),
(43, 900329115852, 'WAN ATHIRAH BINTI WAN YUSOF', '2017-12-20', '08:00:00', '17:00:00', 'MASUK', 'KELUAR'),
(44, 931014036254, 'WAN NUR AFIQAH BINTI WAN MUSTAFA', '2018-01-01', '08:00:00', '17:00:00', 'MASUK', 'KELUAR'),
(45, 890105115689, 'ZUREMI BIN RAMLI', '2018-01-02', '08:00:00', '17:00:00', 'MASUK', 'KELUAR'),
(46, 920619035242, 'FATIN NABILAH BINTI MOHAMED', '2018-01-02', '08:00:00', '17:00:00', 'MASUK', 'KELUAR'),
(47, 880925115044, 'IKLIMAH BINTI ABDUL MANAF', '2018-01-03', '08:00:00', '17:00:00', 'MASUK', 'KELUAR'),
(48, 910829115516, 'LIHAYAATI BINTI MAT-ISA', '2018-01-03', '08:00:00', '17:00:00', 'MASUK', 'KELUAR'),
(49, 920516035485, 'MOHAMAD RASHID BIN MAT YUSOF	', '2018-01-04', '08:00:00', '17:00:00', 'MASUK', 'KELUAR'),
(50, 910613035891, 'MUHAMMAD SYAHRIL BIN MOHAMED', '2018-01-04', '08:00:00', '17:00:00', 'MASUK', 'KELUAR');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `no` int(11) NOT NULL,
  `iduser` bigint(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fullname` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`no`, `iduser`, `password`, `fullname`) VALUES
(27, 880925115044, '880925115044', 'IKLIMAH BINTI ABDUL MANAF'),
(22, 890105115689, '890105115689', 'ZUREMI BIN RAMLI'),
(26, 900329115852, '900329115852', 'WAN ATHIRAH BINTI WAN YUSOF'),
(23, 910613035891, '910613035891', 'MUHAMMAD SYAHRIL BIN MOHAMED '),
(24, 910829115516, '910829115516', 'LIHAYAATI BINTI MAT-ISA'),
(25, 920516035485, '920516035485', 'MOHAMAD RASHID BIN MAT YUSOF'),
(28, 920619035242, '920619035242', 'FATIN NABILAH BINTI MOHAMED'),
(29, 931014036254, '931014036254', 'WAN NUR AFIQAH BINTI WAN MUSTAFA'),
(30, 961211085933, '961211085933', 'SALMAN BIN HAMZAH');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `clockin`
--
ALTER TABLE `clockin`
  ADD PRIMARY KEY (`clockID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`iduser`),
  ADD UNIQUE KEY `no` (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clockin`
--
ALTER TABLE `clockin`
  MODIFY `clockID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
