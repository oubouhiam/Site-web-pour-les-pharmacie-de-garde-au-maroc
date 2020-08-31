-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2020 at 12:23 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zentao`
--

-- --------------------------------------------------------

--
-- Table structure for table `phara`
--

CREATE TABLE `phara` (
  `phara_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `day` date NOT NULL,
  `ville_id` int(11) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `addrsse` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phara`
--

INSERT INTO `phara` (`phara_id`, `name`, `day`, `ville_id`, `tel`, `mail`, `addrsse`, `ville`) VALUES
(18, ' Pharmacie du Maroc Tichka', '0000-00-00', 18, ' 05 24 83 22 91 ', ' MarocTichka@gmail.com', ' 377, lot. Bougafer , 045000 TINGHIR ', 'tinghir'),
(19, ' Pharmacie du Souk', '0000-00-00', 18, ' 05 24 83 38 13 ', ' soukTehti@gmail.com ', ' souk Tehti n°393, 4800 TINGHIR', 'tinghir'),
(20, ' Pharmacie ElFilaha', '2020-09-02', 18, '05 24 83 23 75 ', ' Pharmacie ElFilaha@gmail.com', ' El Filaha, 45000 TINGHIR', 'tinghir'),
(21, ' Pharmacie Grand Atlas', '2020-09-02', 18, ' 06 88 42 58 04 ', 'PharmacieGrandAtlas@gmail.com', ' 506, bd Mohammed V TINGHIR ', 'tinghir'),
(22, ' Pharmacie Ighir', '2020-09-02', 18, '05 24 83 32 32 ', ' PharmacieIghir@gmail.com', ' 351, av. Mohammed V TINGHIR ', 'tinghir'),
(23, ' Pharmacie les Gorges', '2020-09-02', 18, '05 24 83 35 82 ', ' Pharmacie les Gorges@gmail.com', ' Pharmacie les Gorges', 'tinghir'),
(24, ' Pharmacie Soufiane', '0000-00-00', 19, ' 05 22 89 09 63 ', ' PharmacieSoufiane@gmail.com', ' hay El Oulfa, grp.K, rue 154 n°23/25, Q. Oulfa, 20220 CASABLANCA ', 'casablanca'),
(25, ' Pharmacie Souktani ', '0000-00-00', 19, ' 05 22 29 61 10 ', ' PharmacieSouktani@gmail.com ', ' 11, rue Moutanabbi -ex Roziers , Q. Gautier, 20070 CASABLANCA ', 'casablanca'),
(26, ' Pharmacie Soulaima', '2020-09-03', 19, ' 05 22 21 98 94 ', ' PharmacieSoulaima@gmail.com', ' 05 22 21 98 94 ', 'casablanca'),
(27, ' Pharmacie Soultana', '2020-09-02', 19, '05 22 93 29 64 ', ' Pharmacie Soultana@gmail.com', '  bd Oued Drâa (El Oulfa), grp. \"Z\", rue 44 n°8 et 10, Q. Oulfa, 20220 CASABLANCA ', 'casablanca'),
(28, ' Pharmacie Borj Taddart', '0000-00-00', 20, ' 05 28 82 32 13 ', ' Pharmacie Borj Taddart@gmail.com', ' 45, bd des F.a.r., imm.Tigmi N°14 AGADIR ', 'agadir'),
(29, ' Pharmacie Bouargane', '0000-00-00', 20, ' 05 28 23 11 45 ', ' PharmacieRiadlHouda@gmail.com', ' 1176, hay Al Houda AGADIR ', 'agadir'),
(31, 'KJHJDFB', '2020-08-26', 18, 'KHFDQSKJ', 'GRGREHFGKJ', 'GFHDSQV', 'tinghir'),
(35, 'hgjkshg', '2020-08-05', 18, '768688', 'lhjldhfdgf@fgkdfj', 'sdfgdfghf', 'tinghir');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `firstname`, `lastname`, `cpassword`, `image`, `type`) VALUES
(23, 'smayl', '81dc9bdb52d04dc20036dbd8313ed055', 'smail@smail', 'smail', 'kaddi', '81dc9bdb52d04dc20036dbd8313ed055', ' https://images.pexels.com/photos/264636/pexels-photo-264636.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'admin'),
(32, 'smail1995', '827ccb0eea8a706c4c34a16891f84e7b', 'ismail', '827ccb0eea8a706c4c34a16891f84e7b', 'ismail1995@gmail.com', ' hhhhhhhhhhhh', 'kaddi', ''),
(33, 'ismail25', '81dc9bdb52d04dc20036dbd8313ed055', 'smailkaddi@gmail.com', 'ismail', 'kaddi', '81dc9bdb52d04dc20036dbd8313ed055', ' hhhhhhhhhh', '');

-- --------------------------------------------------------

--
-- Table structure for table `ville`
--

CREATE TABLE `ville` (
  `ville_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ville`
--

INSERT INTO `ville` (`ville_id`, `name`, `color`, `user_id`) VALUES
(18, 'tinghir', '#ff8000', 23),
(19, 'casa', '#808000', 23),
(20, 'agadir', '#0000a0', 23);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phara`
--
ALTER TABLE `phara`
  ADD PRIMARY KEY (`phara_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`ville_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phara`
--
ALTER TABLE `phara`
  MODIFY `phara_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `ville`
--
ALTER TABLE `ville`
  MODIFY `ville_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
