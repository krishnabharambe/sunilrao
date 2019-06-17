-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2019 at 08:22 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srgzl`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutevent`
--

CREATE TABLE `aboutevent` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutevent`
--

INSERT INTO `aboutevent` (`id`, `description`) VALUES
(1, 'erwtewrtret rtr e trew rert erwt'),
(2, 'S. Sunil Rao is a ghazal singer, hailing from Hyderabad-Telangana State in India. He started his career with a ghazal Singer. He performed his talent in All India Radio when he was 7 years of age. After his success as a ghazal singer, he was invited to appear and sing ghazals has rose to further fame for singing, and live concerts around the globe brought him fame as a Ghazal and Sufi singer. And he is a Nephew of Late Ustad S. Vithal Rao who was worked as Last Court Ghazal Singer in Hyderabad Nizam Prince Moazzam Jah Bahadur â€œShajiâ€ and he worked in many hit films in bollywood Industry and Father Late Ganapath Rao who is also a Internationally fame as a Ghazal Singer.\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mainheader`
--

CREATE TABLE `mainheader` (
  `id` int(11) NOT NULL,
  `imagename` text NOT NULL,
  `ext` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mainheader`
--

INSERT INTO `mainheader` (`id`, `imagename`, `ext`) VALUES
(1, '5d06de189579a', 'jpg'),
(2, '5d06e995df4ec', 'jpg'),
(3, '5d06f8204b6a0', 'jpg');

-- --------------------------------------------------------

--
-- Table structure for table `newscutting`
--

CREATE TABLE `newscutting` (
  `id` int(11) NOT NULL,
  `imagename` text NOT NULL,
  `ext` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `performance`
--

CREATE TABLE `performance` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutevent`
--
ALTER TABLE `aboutevent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mainheader`
--
ALTER TABLE `mainheader`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newscutting`
--
ALTER TABLE `newscutting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `performance`
--
ALTER TABLE `performance`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutevent`
--
ALTER TABLE `aboutevent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mainheader`
--
ALTER TABLE `mainheader`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `newscutting`
--
ALTER TABLE `newscutting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `performance`
--
ALTER TABLE `performance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
