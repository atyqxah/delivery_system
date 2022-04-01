-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2019 at 04:55 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_ordering`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustId` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `QuestionId` int(5) NOT NULL,
  `Answer` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `FoodId` int(15) NOT NULL,
  `FoodName` varchar(45) NOT NULL,
  `FoodDescription` text NOT NULL,
  `FoodPrice` float NOT NULL,
  `FoodPhoto` varchar(45) NOT NULL,
  `FoodCategory` int(15) NOT NULL,
  `CustId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_form`
--

CREATE TABLE `order_form` (
  `OrderId` int(15) NOT NULL,
  `OrderDesc` text NOT NULL,
  `OrderQuantity` int(4) NOT NULL,
  `OrderDate` date NOT NULL,
  `CustId` int(11) NOT NULL,
  `FoodId` int(15) NOT NULL,
  `Amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `ReceiptId` int(15) NOT NULL,
  `ReceiptDesc` text NOT NULL,
  `ReceiptDate` date NOT NULL,
  `StaffId` int(15) NOT NULL,
  `CustId` int(11) NOT NULL,
  `OrderId` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `StaffId` int(11) NOT NULL,
  `StaffFirstName` varchar(25) NOT NULL,
  `StaffLastName` varchar(25) NOT NULL,
  `Address` text NOT NULL,
  `StaffPhoneNo` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustId`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`FoodId`),
  ADD KEY `CUSTOMER` (`CustId`);

--
-- Indexes for table `order_form`
--
ALTER TABLE `order_form`
  ADD PRIMARY KEY (`OrderId`),
  ADD KEY `CUSTOMER` (`CustId`),
  ADD KEY `FOOD` (`FoodId`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`ReceiptId`),
  ADD KEY `STAFF` (`StaffId`),
  ADD KEY `CUSTOMER` (`CustId`),
  ADD KEY `ORDER_FORM` (`OrderId`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `FoodId` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_form`
--
ALTER TABLE `order_form`
  MODIFY `OrderId` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `ReceiptId` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `StaffId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`CustId`) REFERENCES `customer` (`CustId`);

--
-- Constraints for table `order_form`
--
ALTER TABLE `order_form`
  ADD CONSTRAINT `order_form_ibfk_1` FOREIGN KEY (`FoodId`) REFERENCES `food` (`FoodId`),
  ADD CONSTRAINT `order_form_ibfk_2` FOREIGN KEY (`CustId`) REFERENCES `customer` (`CustId`);

--
-- Constraints for table `receipt`
--
ALTER TABLE `receipt`
  ADD CONSTRAINT `receipt_ibfk_1` FOREIGN KEY (`StaffId`) REFERENCES `staff` (`StaffId`),
  ADD CONSTRAINT `receipt_ibfk_2` FOREIGN KEY (`CustId`) REFERENCES `customer` (`CustId`),
  ADD CONSTRAINT `receipt_ibfk_3` FOREIGN KEY (`OrderId`) REFERENCES `order_form` (`OrderId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
