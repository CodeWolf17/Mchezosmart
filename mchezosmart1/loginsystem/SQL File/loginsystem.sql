-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2020 at 03:23 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'f925916e2754e5e03f75dd58a5733251');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname1` varchar(255) NOT NULL,
  `mconta1` int(255) NOT NULL,
  `mlocati1` varchar(255) NOT NULL,
  `mname2` varchar(255) NOT NULL,
  `mconta2` int(255) NOT NULL,
  `mlocati2` varchar(255) NOT NULL,
  `mname3` varchar(255) NOT NULL,
  `mconta3` int(255) NOT NULL,
  `mlocati3` varchar(255) NOT NULL,
  `mname4` varchar(255) NOT NULL,
  `mconta4` int(255) NOT NULL,
  `mlocati4` varchar(255) NOT NULL,
  `mname5` varchar(255) NOT NULL,
  `mconta5` int(255) NOT NULL,
  `mlocati5` varchar(255) NOT NULL,
  `mname6` varchar(255) NOT NULL,
  `mconta6` int(255) NOT NULL,
  `mlocati6` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `tamount1` decimal(9,2) NOT NULL,
  `tdate1` varchar(255) DEFAULT NULL,
  `ttrans1` varchar(17) NOT NULL,
  `tamount2` decimal(9,2) NOT NULL,
  `tdate2` varchar(255) DEFAULT NULL,
  `ttrans2` varchar(17) NOT NULL,
  `tamount3` decimal(9,2) NOT NULL,
  `tdate3` varchar(255) DEFAULT NULL,
  `ttrans3` varchar(17) NOT NULL,
  `tamount4` decimal(9,2) NOT NULL,
  `tdate4` varchar(255) DEFAULT NULL,
  `ttrans4` varchar(17) NOT NULL,
  `tamount5` decimal(9,2) NOT NULL,
  `tdate5` varchar(255) DEFAULT NULL,
  `ttrans5` varchar(17) NOT NULL,
  `tamount6` decimal(9,2) NOT NULL,
  `tdate6` varchar(255) DEFAULT NULL,
  `ttrans6` varchar(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `fname`, `tamount1`, `tdate1`, `ttrans1`, `tamount2`, `tdate2`, `ttrans2`, `tamount3`, `tdate3`, `ttrans3`, `tamount4`, `tdate4`, `ttrans4`, `tamount5`, `tdate5`, `ttrans5`, `tamount6`, `tdate6`, `ttrans6`) VALUES
(122, 'kelvin', '10000.00', '', '', '0.00', '', '', '0.00', '', '', '0.00', '', '', '0.00', '', '', '0.00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `sponsor` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `fname` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `lname` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `password` varchar(300) CHARACTER SET utf8mb4 DEFAULT NULL,
  `activate` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `bdate` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `region` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `contactno` varchar(11) CHARACTER SET utf8mb4 NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `sponsor`, `fname`, `lname`, `email`, `password`, `activate`, `bdate`, `country`, `region`, `contactno`, `posting_date`) VALUES
(9, 'mabantu', 'Anuj', 'Kumar', 'demouser@gmail.com', 'tesing', 'testing', '', 'tanzania', 'masaki', '21222222', '2020-04-15 18:30:00'),
(14, '', 'inno', 'mwijo', 'innomwijo@gmail.com', 'joeboy', '', '', '', '', '0735444117', '2020-09-20 17:50:18'),
(15, '', 'julie', 'jo', 'juliejo@gmail.com', 'juliejo', 'juliejo', '', '', '', '0766666666', '2020-09-24 11:45:18'),
(17, '', 'kelvin', 'kevo', 'kevlinkevo@fish.com', 'fish2', 'fish2', '', '', '', '0735444117', '2020-09-25 18:40:25'),
(41, 'anuja', 'kevlino', 'kevlin', 'kevlinkevo@fish.com', NULL, 'fish', '2192 dodoma', '', '', '0766555442', '2020-09-26 10:24:20'),
(43, 'ke', 'se', 'see', 'see@see', 'see', 'see', 'seee', 'seee', 'seee', 'seee', '2020-09-26 10:26:07'),
(44, 'samij', 'samoor', 'samaar', 'samoojsamaar@samaar.com', 'osama', 'osama', '', 'pakistan', 'afganistan', '08974735748', '2020-09-27 11:22:25');

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `membersin` int(6) NOT NULL,
  `cash_in` int(6) NOT NULL,
  `bonuscash` decimal(9,2) NOT NULL,
  `bonus_left` int(6) NOT NULL,
  `withdraws` decimal(9,2) NOT NULL,
  `balance` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fname_3` (`fname`),
  ADD KEY `fname` (`fname`),
  ADD KEY `fname_2` (`fname`),
  ADD KEY `fname_4` (`fname`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fname` (`fname`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fname` (`fname`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fname` (`fname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
