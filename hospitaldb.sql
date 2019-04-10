-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 09, 2018 at 08:56 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospitaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `docdb`
--

CREATE TABLE `docdb` (
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `dob` varchar(40) NOT NULL,
  `degree` varchar(40) NOT NULL,
  `department` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `docdb`
--

INSERT INTO `docdb` (`fname`, `lname`, `email`, `contact`, `gender`, `dob`, `degree`, `department`) VALUES
('Sujata', 'Sen', 'drssen@gmail.com', '565489421', 'Female', '1998-03-17', 'MBBS', 'Cardiology'),
('Rony', 'Bhatt', 'rbdoc@yahoo.com', '856412367', 'Male', '1989-07-19', 'MD', 'Dentistry');

-- --------------------------------------------------------

--
-- Table structure for table `doctorapp`
--

CREATE TABLE `doctorapp` (
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `contact` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `dob` varchar(40) NOT NULL,
  `blood` varchar(10) NOT NULL,
  `problem` varchar(40) NOT NULL,
  `payment` varchar(40) NOT NULL,
  `discharge` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorapp`
--

INSERT INTO `doctorapp` (`fname`, `lname`, `contact`, `gender`, `dob`, `blood`, `problem`, `payment`, `discharge`) VALUES
('Subhojit', 'Paul', '459762134', 'Male', '2018-10-17', 'AB+', 'Dementia', 'later', 'no'),
('Avirup', 'Kundu', '567812549', 'Male', '', 'B+', 'Head Injury', 'yes', 'yes'),
('Jojo', 'Homeboy', '700312345', 'Male', '', 'AB+', 'Tibia Fracture', 'later', 'no'),
('Bishwaroop', 'Dey', '700596754', 'Male', '', 'A+', 'Hallucination', 'yes', 'yes'),
('Subhajit', 'Das', '775644982', 'Male', '2018-10-09', 'O+', 'Premature baby', 'yes', 'yes'),
('Srijit', 'Sutradhar', '785463219', 'Male', '', 'B+', 'Influenza', 'later', 'no'),
('Harman', 'Joshi', '786412384', 'Male', '2004-07-16', 'AB+', 'Chronic Cough', 'yes', 'yes'),
('Susan', 'Bright', '965845327', 'Female', '1998-03-17', 'B+', 'Sunburn', 'later', 'no'),
('Prangan', 'Mukherjee', '987612347', 'Male', '', 'O+', 'Dementia', 'yes', 'yes'),
('Rafiz', 'Ali', '987654321', 'Male', '2018-10-10', 'B-', 'Heart Attack', 'later', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `logindb`
--

CREATE TABLE `logindb` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logindb`
--

INSERT INTO `logindb` (`username`, `password`) VALUES
('admin', 'admin'),
('srijit4real', '19471857');

-- --------------------------------------------------------

--
-- Table structure for table `staffdb`
--

CREATE TABLE `staffdb` (
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `contact` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `dob` varchar(40) NOT NULL,
  `post` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffdb`
--

INSERT INTO `staffdb` (`fname`, `lname`, `contact`, `gender`, `dob`, `post`) VALUES
('Vikas', 'Gaen', '331456218', 'Male', '1994-10-26', 'Warden'),
('Harish', 'Kedia', '331456748', 'Male', '1991-11-14', 'Pharmacist'),
('Sohini', 'Dey', '778955642', 'Female', '1995-06-14', 'Head Nurse');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `docdb`
--
ALTER TABLE `docdb`
  ADD PRIMARY KEY (`contact`),
  ADD UNIQUE KEY `contact` (`contact`);

--
-- Indexes for table `doctorapp`
--
ALTER TABLE `doctorapp`
  ADD PRIMARY KEY (`contact`),
  ADD UNIQUE KEY `contact` (`contact`);

--
-- Indexes for table `logindb`
--
ALTER TABLE `logindb`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `staffdb`
--
ALTER TABLE `staffdb`
  ADD PRIMARY KEY (`contact`),
  ADD UNIQUE KEY `contact` (`contact`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
