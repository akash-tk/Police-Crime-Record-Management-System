-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 06, 2022 at 07:31 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(255) NOT NULL,
  `Pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Pass`) VALUES
('admin', 'a123');

-- --------------------------------------------------------

--
-- Table structure for table `courts`
--

CREATE TABLE `courts` (
  `courtid` bigint(20) NOT NULL,
  `courtname` varchar(255) NOT NULL,
  `courttype` varchar(255) NOT NULL,
  `courtcity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courts`
--

INSERT INTO `courts` (`courtid`, `courtname`, `courttype`, `courtcity`) VALUES
(11111, 'Supreme Court of India', 'Supreme Court', 'New Delhi'),
(21452, 'Bombay High Court', 'High Court', 'Mumbai'),
(32566, 'Kerala High Court', 'High Court', 'Kochi'),
(44213, 'Madras High Court', 'High Court', 'Chennai'),
(54788, 'District Munsif cum Judicial Magistrate Court, Kadaladi', 'District Munsif cum Judicial Magistrate Cour', 'Kadaladi'),
(56868, 'District Munsif cum Judicial Magistrate Court, Rameswaram', 'District Munsif cum Judicial Magistrate Court', 'Rameswaram'),
(75486, 'Judicial Magistrate Court, Mudukulathur', 'Judicial Magistrate Court', 'Mudukulathur'),
(87546, 'District Munsif Court, Paramakudi', 'District Munsif Court', 'Paramakudi'),
(87654, 'Subordinate Court, Paramakudi', 'Subordinate Court', 'Paramakudi'),
(98654, 'Principal District and Sessions Court, Ramanathapuram', 'Principal District and Sessions Court', 'Ramanathapuram');

-- --------------------------------------------------------

--
-- Table structure for table `courtstaffs`
--

CREATE TABLE `courtstaffs` (
  `Username` varchar(255) NOT NULL,
  `Pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courtstaffs`
--

INSERT INTO `courtstaffs` (`Username`, `Pass`) VALUES
('court1', '1258');

-- --------------------------------------------------------

--
-- Table structure for table `crimes`
--

CREATE TABLE `crimes` (
  `Crino` bigint(11) NOT NULL,
  `Criname` varchar(255) NOT NULL,
  `Crno` bigint(11) NOT NULL,
  `Crname` varchar(255) NOT NULL,
  `Crdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crimes`
--

INSERT INTO `crimes` (`Crino`, `Criname`, `Crno`, `Crname`, `Crdate`) VALUES
(35689, 'Varun', 356891, 'Burglary', '2021-12-05'),
(45286, 'Dhruv', 452861, 'Kidnapping', '2021-06-07'),
(45788, 'Rashana', 457882, 'Cyberbullying', '2022-12-12'),
(55468, 'Raghav', 554681, 'Credit Card Fraud', '2022-06-09'),
(75486, 'Bhamini', 754861, ' Drug Possession', '2022-02-02'),
(85746, 'Anand', 857461, 'Identity Theft', '2021-12-07');

--
-- Triggers `crimes`
--
DELIMITER $$
CREATE TRIGGER `crime_tigger` BEFORE DELETE ON `crimes` FOR EACH ROW INSERT INTO crimes1 values(old.Crino,old.Criname,old.Crno,old.Crname,old.Crdate)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `crimes1`
--

CREATE TABLE `crimes1` (
  `Crino` bigint(11) NOT NULL,
  `Criname` varchar(255) NOT NULL,
  `Crno` bigint(11) NOT NULL,
  `Crname` varchar(255) NOT NULL,
  `Crdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `criminal`
--

CREATE TABLE `criminal` (
  `Crino` bigint(11) NOT NULL,
  `Criname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `crimes_comm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `criminal`
--

INSERT INTO `criminal` (`Crino`, `Criname`, `address`, `nationality`, `crimes_comm`) VALUES
(35689, 'Varun', 'Cochin', 'India', 'Burglary'),
(45286, 'Dhruv', 'Chennai', 'India', 'Kidnapping'),
(45788, 'Rashana', 'Cochin', 'India', 'Cyberbullying'),
(55468, 'Raghav', 'Banglore', 'India', 'Credit Card Fraud'),
(75486, 'Bhamini', 'Mumbai', 'India', 'Drug Possession'),
(85746, 'Anand', 'Thrissur', 'India', 'Identity Theft');

--
-- Triggers `criminal`
--
DELIMITER $$
CREATE TRIGGER `crimn_trgr` BEFORE DELETE ON `criminal` FOR EACH ROW INSERT INTO criminal1 values(old.Crino,old.Criname,old.address,old.nationality,old.crimes_comm)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `criminal1`
--

CREATE TABLE `criminal1` (
  `Crino` bigint(11) NOT NULL,
  `Criname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `crimes_comm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `criminal1`
--

INSERT INTO `criminal1` (`Crino`, `Criname`, `address`, `nationality`, `crimes_comm`) VALUES
(98578, 'Arun', 'Calicut', 'India', 'Robbery, Kidnapping');

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

CREATE TABLE `police` (
  `pid` bigint(20) NOT NULL,
  `Poname` varchar(255) NOT NULL,
  `policestation` varchar(255) NOT NULL,
  `contact` bigint(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `police`
--

INSERT INTO `police` (`pid`, `Poname`, `policestation`, `contact`, `image`) VALUES
(15478, 'Kishore Kumar.J', 'Malappuram', 9497996924, ''),
(32587, 'Ravi K ', 'Kollam ', 9497996908, ''),
(44442, 'R Rajeev ', 'Kannur ', 94979, ''),
(45645, 'Sabu Mathew.K.M', 'Kottayam', 9497996947, ''),
(45698, 'Neeraj Kumar Gupta IPS ', 'Kochi', 9497998992, ''),
(45879, 'S.Syamsundar IPS', 'Calicut', 9497997999, ''),
(54555, 'Prasanthan Kani. B.K', 'Alappuzha', 9497996951, ''),
(78441, 'Sudarsan. K.S', 'Thrissur', 9497996948, ''),
(78542, 'P Vijayan IPS', 'Trivandrum', 9497977123, ''),
(78952, 'RB Krishna ', 'Cochin', 9497996997, ''),
(85469, 'G. Sparjan Kumar IPS ', 'Trivandrum', 9497996904, '');

-- --------------------------------------------------------

--
-- Table structure for table `policestaffs`
--

CREATE TABLE `policestaffs` (
  `Username` varchar(255) NOT NULL,
  `Pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `policestaffs`
--

INSERT INTO `policestaffs` (`Username`, `Pass`) VALUES
('police1', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `prisons`
--

CREATE TABLE `prisons` (
  `prisonid` bigint(20) NOT NULL,
  `prisonname` varchar(255) NOT NULL,
  `prisontype` varchar(255) NOT NULL,
  `prisoncity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prisons`
--

INSERT INTO `prisons` (`prisonid`, `prisonname`, `prisontype`, `prisoncity`) VALUES
(21335, 'Central Prison, Kannur', 'Central Prison', 'Kannur'),
(23566, 'Central Prison, Poojappura, Thiruvananthapuram', 'Central Prison', 'Poojappura'),
(25463, 'Central Prison, Viyyur, Thrissur', 'Central Prison', 'Viyyur'),
(31258, 'District Jail Palakkad (Malampuzha)', 'District Jail', 'Malampuzha'),
(32574, 'District Jail Kozhikode', 'District Jail', 'Kozhikode'),
(35666, 'District Jail Kollam', 'District Jail', 'Kollam'),
(36578, 'District Jail Alappuzha', 'District Jail', 'Alappuzha'),
(36987, 'District Jail Thiruvananthapuram (Poojappura)', 'District Jail', 'Poojappura'),
(52243, 'Sub Jail Perinthalmanna', 'Sub Jail', 'Perinthalmanna'),
(52876, 'Sub Jail Attingal', 'Sub Jail', 'Attingal'),
(54655, 'Sub Jail Meenachil', 'Sub Jail', 'Meenachil'),
(54862, 'Sub Jail Ottappalam', 'Sub Jail', 'Ottappalam'),
(57428, 'Sub Jail Tirur', 'Sub Jail', 'Tirur');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `name` varchar(10) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`name`, `id`) VALUES
('role', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `courts`
--
ALTER TABLE `courts`
  ADD PRIMARY KEY (`courtid`);

--
-- Indexes for table `courtstaffs`
--
ALTER TABLE `courtstaffs`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `crimes`
--
ALTER TABLE `crimes`
  ADD PRIMARY KEY (`Crno`),
  ADD KEY `crime no` (`Crino`);

--
-- Indexes for table `crimes1`
--
ALTER TABLE `crimes1`
  ADD PRIMARY KEY (`Crno`),
  ADD KEY `crime no` (`Crino`);

--
-- Indexes for table `criminal`
--
ALTER TABLE `criminal`
  ADD PRIMARY KEY (`Crino`);

--
-- Indexes for table `criminal1`
--
ALTER TABLE `criminal1`
  ADD PRIMARY KEY (`Crino`);

--
-- Indexes for table `police`
--
ALTER TABLE `police`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `policestaffs`
--
ALTER TABLE `policestaffs`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `prisons`
--
ALTER TABLE `prisons`
  ADD PRIMARY KEY (`prisonid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `crimes`
--
ALTER TABLE `crimes`
  ADD CONSTRAINT `crime no` FOREIGN KEY (`Crino`) REFERENCES `criminal` (`Crino`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
