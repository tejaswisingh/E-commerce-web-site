-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2018 at 05:44 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `javajam`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `JobsId` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Experience` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`JobsId`, `Name`, `Email`, `Experience`) VALUES
(25, 'te', 'dsfsf@gmail.com', 'fdss'),
(26, 'Akshay', 'amitejasingh@gmail.com', 'Blah Blah'),
(27, 'jhj', 'ahha@gmail.com', 'jhfjahf'),
(28, 'hjhajhajfjfajhfajhfa', 'nitin@jahfjhaf.com', 'jhadjha'),
(29, 'TejaswiSingh', 'tejaswi@singh.com', '776');

-- --------------------------------------------------------

--
-- Table structure for table `musician`
--

CREATE TABLE `musician` (
  `MusicianID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Musician_Image_URL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `musician`
--

INSERT INTO `musician` (`MusicianID`, `Name`, `Musician_Image_URL`) VALUES
(1, 'Melanie Morris', 'image/melaniethumb.jpg'),
(2, 'Tahoe Greg', 'image/gregthumb.jpg'),
(3, 'Kanye West', 'image/kanyethumb.jpg'),
(4, 'Madonna', 'image/madonnathumb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `ProductId` int(11) NOT NULL,
  `Qty` int(11) NOT NULL,
  `Price` float DEFAULT NULL,
  `OrderId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Orderid` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `Zip` varchar(255) NOT NULL,
  `Credit_Card` varchar(255) NOT NULL,
  `Month` varchar(255) NOT NULL,
  `Year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `performance`
--

CREATE TABLE `performance` (
  `PerformanceID` int(11) NOT NULL,
  `MusicianID` int(11) NOT NULL,
  `MonthYear` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `performance`
--

INSERT INTO `performance` (`PerformanceID`, `MusicianID`, `MonthYear`, `Description`) VALUES
(1, 1, 'January', 'Melanie Morris entertains with her melodic folk style.'),
(2, 2, 'Februray', 'Tahoe Greg is is back from his tour. New Songs. New Stories.'),
(3, 3, 'March', 'Kanye West has got some free time from Kim. So he is back.'),
(4, 4, 'April', 'Madonna is as fresh as always. Her songs will keep you minty fresh');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductId` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Product_Image_URL` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductId`, `Name`, `Description`, `Product_Image_URL`, `Price`) VALUES
(1, 'JavaJam Shirts', 'are comfortable to wear to school and around town.100% cotton. XL only.', 'image/javashirt.jpg', '14.95'),
(2, 'JavaJam Mugs', 'carry a full load of caffeine (12 oz.) to jump start your morning.', 'image/javamug.jpg', '9.95'),
(3, 'Javajam Musclemilk', 'is really good for building muscles (4 oz.) to give you great start in the morning.', 'image/javamusclemilk.png', '15.95'),
(4, 'Javajam CoffeeMaker', 'is here to make your life easy, just put the coffee in and you are done.', 'image/javacoffeemaker.jpg', '25.95');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`JobsId`);

--
-- Indexes for table `musician`
--
ALTER TABLE `musician`
  ADD PRIMARY KEY (`MusicianID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Orderid`);

--
-- Indexes for table `performance`
--
ALTER TABLE `performance`
  ADD PRIMARY KEY (`PerformanceID`),
  ADD KEY `Foreign Key` (`MusicianID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `JobsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `musician`
--
ALTER TABLE `musician`
  MODIFY `MusicianID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Orderid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `performance`
--
ALTER TABLE `performance`
  MODIFY `PerformanceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `performance`
--
ALTER TABLE `performance`
  ADD CONSTRAINT `Foreign Key` FOREIGN KEY (`MusicianID`) REFERENCES `musician` (`MusicianID`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
