-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: shareddb-z.hosting.stackcp.net
-- Generation Time: Aug 01, 2021 at 12:16 PM
-- Server version: 10.4.14-MariaDB-log
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seedsgarden-313635a100`
--

-- --------------------------------------------------------

--
-- Table structure for table `equip`
--

CREATE TABLE `equip` (
  `name` varchar(225) NOT NULL,
  `id` int(225) NOT NULL,
  `price` int(225) NOT NULL,
  `img_url` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equip`
--

INSERT INTO `equip` (`name`, `id`, `price`, `img_url`) VALUES
('HAND GLOVES', 7, 120, 'https://roofgardening.tk/img/gardeninggloves.jpg'),
('HOSE', 8, 200, 'https://roofgardening.tk/img/hose.jpg'),
('HOE', 9, 250, 'https://roofgardening.tk/img/hoe.jpg'),
('LEAF RAKE', 11, 400, 'https://roofgardening.tk/img/leafrake.jpg'),
('HAND TROWLER', 12, 180, 'https://roofgardening.tk/img/handtrowler.jpg'),
('GARDEN SPADE', 15, 140, 'https://roofgardening.tk/img/gardenspade.jpg'),
('LAWN MOVER', 17, 1250, 'https://roofgardening.tk/img/lawnmower.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(225) NOT NULL,
  `id` int(11) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role` varchar(225) NOT NULL,
  `phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `id`, `password`, `role`, `phone`) VALUES
('hardik', 1, 'hardik3259', 'admin', 0),
('dev', 5, '', 'user', 9413737698),
('himanshu', 15, '', 'user', 7014021640),
('yash21k', 16, '', 'user', 9625014435),
('preet', 20, '', 'user', 8440860595),
('keshav', 23, '', 'user', 8278603218),
('tarun', 24, '', 'user', 7976524001),
('hardik', 28, '', 'user', 9116763067),
('RUCHIT AGARWAL', 30, '', 'user', 8560004802),
('nitin', 31, '', 'user', 9571426231);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `username` varchar(225) NOT NULL,
  `total` bigint(20) NOT NULL,
  `items` varchar(2000) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`username`, `total`, `items`, `id`) VALUES
('Guest', 3002, '[{\"id\":\"5\",\"qty\":\"1\",\"type\":\"pt\"}]', 30),
('Guest', 12, '[{\"id\":\"7\",\"qty\":\"1\",\"type\":\"eq\"}]', 31),
('Guest', 22, '[{\"id\":\"4\",\"qty\":\"1\",\"type\":\"pt\"}]', 32),
('Guest', 460, '[{\"id\":\"8\",\"qty\":\"1\",\"type\":\"eq\"},{\"id\":\"3\",\"qty\":\"1\",\"type\":\"pt\"},{\"id\":\"4\",\"qty\":2,\"type\":\"pt\"}]', 33),
('hardik', 425, '[{\"id\":\"7\",\"qty\":2,\"type\":\"eq\"},{\"id\":\"4\",\"qty\":\"1\",\"type\":\"pt\"},{\"id\":\"3\",\"qty\":\"1\",\"type\":\"pt\"}]', 34),
('Guest', 420, '{\"0\":{\"id\":\"4\",\"qty\":4,\"type\":\"pt\"},\"2\":{\"id\":\"16\",\"qty\":\"1\",\"type\":\"pt\"}}', 35);

-- --------------------------------------------------------

--
-- Table structure for table `plants`
--

CREATE TABLE `plants` (
  `name` varchar(225) NOT NULL,
  `id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `img_url` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plants`
--

INSERT INTO `plants` (`name`, `id`, `price`, `img_url`) VALUES
('AIR PLANT', 4, 75, 'https://roofgardening.tk/img/airplant.jpg'),
('ARROW HEAD PLANT', 5, 90, 'https://roofgardening.tk/img/arrowheadplant.jpg'),
('FICUSALII', 7, 300, 'https://roofgardening.tk/img/ficusalii.jpg'),
('HOYA', 8, 230, 'https://roofgardening.tk/img/hoya.jpg'),
('JADE', 14, 155, 'https://roofgardening.tk/img/jade.jpg'),
('PILEA PEPEROMIOIDES', 15, 320, 'https://roofgardening.tk/img/pileapeperomioides.jpg'),
('SPIDER PLANT', 16, 120, 'https://roofgardening.tk/img/spiderplant.jpg'),
('ARALIA FABIAN', 17, 220, 'https://roofgardening.tk/img/araliafabian.jpg'),
('BURGUNDRY RUBBER TREE', 18, 320, 'https://roofgardening.tk/img/burgundyrubbertree.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equip`
--
ALTER TABLE `equip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plants`
--
ALTER TABLE `plants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equip`
--
ALTER TABLE `equip`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `plants`
--
ALTER TABLE `plants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
