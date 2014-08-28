-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 16, 2014 at 12:05 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bidello`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(15) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin1', '$2a$10$1qAz2wSx3eDc4rFv5tGb5eV8/xxIb9qlQHjp74SLX81.JWAueD8Bq$2a$10$1qAz2wSx3eDc4rFv5tGb5eV8/xxIb9qlQHjp74SLX81.JWAueD8Bq'),
('admin2', '$2a$10$1qAz2wSx3eDc4rFv5tGb5eXEzRo3Z6uTMZKkpCfmuUWXN1M8bf.DC$2a$10$1qAz2wSx3eDc4rFv5tGb5eXEzRo3Z6uTMZKkpCfmuUWXN1M8bf.DC');

-- --------------------------------------------------------

--
-- Table structure for table `bidders`
--

CREATE TABLE IF NOT EXISTS `bidders` (
  `randomID` varchar(15) NOT NULL,
  `bidderUserName` varchar(15) NOT NULL,
  `bidAmount` int(4) NOT NULL,
  PRIMARY KEY (`randomID`,`bidderUserName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidders`
--

INSERT INTO `bidders` (`randomID`, `bidderUserName`, `bidAmount`) VALUES
('20131014', 'five', 4500),
('20131014', 'seven', 6000),
('20131017', 'four', 18000),
('20131017', 'nine', 6000),
('20131021', 'anadi.r', 300),
('20131021', 'five', 390),
('20131021', 'four', 250),
('20131021', 'one', 250),
('201310216', 'anadi.r', 600),
('201310312', 'anadi.r', 1246),
('201310312', 'eleven', 2900),
('201310312', 'nine', 2200),
('201310312', 'two', 2200),
('201310410', 'one', 4000),
('201310410', 'seven', 2905),
('201310410', 'three', 2000),
('20131059', 'anadi.r', 677),
('20131059', 'five', 900),
('20131059', 'ten', 750),
('20131059', 'two', 850),
('20131062', 'eleven', 1300),
('20131062', 'six', 1200),
('20131075', 'five', 900),
('20131075', 'six', 900),
('20131075', 'ten', 1000),
('20131093', 'one', 300),
('20131093', 'ten', 220),
('20131098', 'nine', 800),
('20131098', 'six', 300);

-- --------------------------------------------------------

--
-- Table structure for table `bidinfo`
--

CREATE TABLE IF NOT EXISTS `bidinfo` (
  `sysid` int(10) NOT NULL AUTO_INCREMENT,
  `bidObject` varchar(100) NOT NULL,
  `randomID` varchar(15) NOT NULL,
  `sellerID` varchar(50) NOT NULL,
  `buyerID` varchar(50) NOT NULL,
  `lowerLimit` int(7) NOT NULL,
  `upperLimit` int(7) NOT NULL,
  `adminFlag` int(1) NOT NULL,
  `itemFlag` int(2) DEFAULT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `comments` text NOT NULL,
  `category` varchar(250) NOT NULL,
  PRIMARY KEY (`sysid`),
  UNIQUE KEY `randomID` (`randomID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `bidinfo`
--

INSERT INTO `bidinfo` (`sysid`, `bidObject`, `randomID`, `sellerID`, `buyerID`, `lowerLimit`, `upperLimit`, `adminFlag`, `itemFlag`, `startDate`, `endDate`, `comments`, `category`) VALUES
(1, 'danbrown', '20131021', 'two', '', 100, 500, 0, 0, '2013-10-01', '2013-10-31', '', 'books'),
(2, 'football', '20131062', 'nine', '', 1000, 2000, 0, 0, '2013-10-03', '2013-10-20', '', 'sportsandgym'),
(3, 'waterbottle', '20131093', 'six', '', 100, 500, 1, NULL, '2013-10-02', '2013-10-26', '', 'miscellaneous'),
(4, 'mobile HTC 1', '20131014', 'one', '', 5000, 9000, 0, 0, '2013-10-18', '2013-10-24', '', 'electronics'),
(5, 'strolley', '20131075', 'eight', '', 1000, 2000, 0, 0, '2013-10-01', '2013-10-24', '', 'travelandaccessories'),
(6, 'cycle', '20131066', 'five', '', 1000, 5000, 0, 0, '2013-10-15', '2013-10-28', '', 'sportsandgym'),
(7, 'Camera DSLR 150', '20131017', 'ten', 'four', 5000, 19000, 0, 1, '2013-10-01', '2013-10-15', '', 'electronics'),
(8, 'alarmclock', '20131098', 'four', '', 100, 1000, 0, 0, '2013-10-10', '2013-10-30', '', 'miscellaneous'),
(9, 'kettle', '20131059', 'nine', '', 500, 1200, 0, 0, '2013-10-01', '2013-10-25', '', 'roomappliances'),
(10, 'acoustic guitar', '201310410', 'six', '', 9000, 19000, 2, NULL, '2013-10-01', '2013-10-25', 'lower limit too high ', 'musicinstruments'),
(11, 'Floyyd 1885 album original DVD', '201310811', 'seven', '', 300, 2000, 0, 0, '2013-10-12', '2013-10-26', '', 'media'),
(12, 'stool', '201310312', 'three', '', 1000, 5000, 0, 0, '2013-10-03', '2013-10-25', '', 'furniture'),
(15, '50 year old BIBLE ', '201310215', 'two', '', 10000, 50000, 0, 0, '2013-10-17', '2013-11-07', '', 'books'),
(16, 'Anthology of Poems - Alfred Tennsesay', '201310216', 'eleven', '', 500, 3000, 0, 0, '2013-10-15', '2013-10-29', '', 'books'),
(17, 'Chanakya''s new Manifesto ', '201310217', 'one', '', 2000, 10000, 0, 0, '2013-10-01', '2013-10-31', '', 'books'),
(18, 'waverly scott', '201310218', 'eleven', '', 900, 3000, 0, 0, '2013-10-16', '2013-10-23', '', 'books'),
(19, 'Mein Kamph', '201310219', 'three', '', 1000, 5000, 0, 0, '2013-10-08', '2013-10-29', '', 'books');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `categoryname` varchar(100) NOT NULL,
  `catid` int(2) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`catid`),
  UNIQUE KEY `categoryname` (`categoryname`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryname`, `catid`) VALUES
('electronics', 1),
('books', 2),
('furniture', 3),
('musicinstruments', 4),
('roomappliances', 5),
('sportsandgym', 6),
('travelandaccessories', 7),
('media', 8),
('miscellaneous', 9);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `sysid` int(200) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` text NOT NULL,
  `contactNo` varchar(10) NOT NULL,
  `e-mail` varchar(30) NOT NULL,
  `dateofbirth` date NOT NULL,
  `address` varchar(45) NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `Secuity Question` text NOT NULL,
  `answer` text NOT NULL,
  PRIMARY KEY (`sysid`),
  UNIQUE KEY `e-mail` (`e-mail`),
  UNIQUE KEY `contactNo` (`contactNo`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`sysid`, `name`, `username`, `password`, `contactNo`, `e-mail`, `dateofbirth`, `address`, `city`, `state`, `gender`, `Secuity Question`, `answer`) VALUES
(1, 'one', 'one', '$2a$10$1qAz2wSx3eDc4rFv5tGb5ebr3jA.TFClY8whQx9Vqh0vFG7/THW26$2a$10$1qAz2wSx3eDc4rFv5tGb5ebr3jA.TFClY8whQx9Vqh0vFG7/THW26', '9999999999', 'one@gmail.com', '2013-10-01', 'MIG ', 'lucknow', 'up', 'male', '', ''),
(2, 'two', 'two', '$2a$10$1qAz2wSx3eDc4rFv5tGb5eP8G0r5P3M29ZTW4z1NxRwoEHePzCqAK$2a$10$1qAz2wSx3eDc4rFv5tGb5eP8G0r5P3M29ZTW4z1NxRwoEHePzCqAK', '9999999992', 'two@gmail.com', '2013-10-02', 'karolbagh', 'Delhi', 'Delhi', 'female', '', ''),
(3, 'three', 'three', '$2a$10$1qAz2wSx3eDc4rFv5tGb5ei9ltuxXxbG7lVoeNebXncrg6R0ngvZ.$2a$10$1qAz2wSx3eDc4rFv5tGb5ei9ltuxXxbG7lVoeNebXncrg6R0ngvZ.', '9999999993', 'three@gmail.com', '2013-10-03', 'CH-2 134', 'lucknow', 'up', 'male', '', ''),
(4, 'four', 'four', '$2a$10$1qAz2wSx3eDc4rFv5tGb5eQEuRfynuw0q.5unSwKtSFmTymh0h/Py$2a$10$1qAz2wSx3eDc4rFv5tGb5eQEuRfynuw0q.5unSwKtSFmTymh0h/Py', '9090909090', 'four@gmail.com', '2013-10-04', 'CH-2 134', 'Delhi', 'Delhi', 'female', '', ''),
(5, 'five', 'five', '$2a$10$1qAz2wSx3eDc4rFv5tGb5eVBGTMbNGvho9QxG5FC7/Y8JgodBpFWG$2a$10$1qAz2wSx3eDc4rFv5tGb5eVBGTMbNGvho9QxG5FC7/Y8JgodBpFWG', '9999999994', 'five@gmail.com', '2013-10-01', 'berlington', 'lucknow', 'up', 'male', '', ''),
(7, 'six', 'six', '$2a$10$1qAz2wSx3eDc4rFv5tGb5eIqNospoIbfnYAOJulY.vOn.jJBAYWyq$2a$10$1qAz2wSx3eDc4rFv5tGb5eIqNospoIbfnYAOJulY.vOn.jJBAYWyq', '9999999996', 'six@gmail.com', '2013-10-18', 'karolbagh', 'Delhi', 'Delhi', 'female', '', ''),
(8, 'seven', 'seven', '$2a$10$1qAz2wSx3eDc4rFv5tGb5eUasIWqGwUGy14rIW5pirUaAZV76FrAW$2a$10$1qAz2wSx3eDc4rFv5tGb5eUasIWqGwUGy14rIW5pirUaAZV76FrAW', '9999999997', 'seven@gmail.com', '2013-10-05', 'CH-2 134', 'goa', 'goa', 'male', '', ''),
(9, 'eight', 'eight', '$2a$10$1qAz2wSx3eDc4rFv5tGb5eRsWItvTUtzhl5AZEQOCqtYvqpRylG2G$2a$10$1qAz2wSx3eDc4rFv5tGb5eRsWItvTUtzhl5AZEQOCqtYvqpRylG2G', '9999999998', 'eight@gmail.com', '2013-10-18', 'CH-2 134', 'Delhi', 'Delhi', 'female', '', ''),
(10, 'nine', 'nine', '$2a$10$1qAz2wSx3eDc4rFv5tGb5eaBdtq1UKMfWF2jRt6p5WCRz5MBJEOzW$2a$10$1qAz2wSx3eDc4rFv5tGb5eaBdtq1UKMfWF2jRt6p5WCRz5MBJEOzW', '9999999990', 'nine@gmail.com', '2013-10-18', 'karolbagh', 'Delhi', 'Delhi', 'male', '', ''),
(11, 'ten', 'ten', '$2a$10$1qAz2wSx3eDc4rFv5tGb5eFKq.3WjlyefUfTgbFjTKeONz/FfTWZe$2a$10$1qAz2wSx3eDc4rFv5tGb5eFKq.3WjlyefUfTgbFjTKeONz/FfTWZe', '9999999910', 'ten@gmail.com', '2013-10-12', 'CH-2 134', 'Delhi', 'Delhi', 'male', '', ''),
(12, 'eleven', 'eleven', '$2a$10$1qAz2wSx3eDc4rFv5tGb5e0Pyf6oqt2XUbaMsxccAqn/jcfX3AjYm$2a$10$1qAz2wSx3eDc4rFv5tGb5e0Pyf6oqt2XUbaMsxccAqn/jcfX3AjYm', '9999999911', 'eleven@gmail.com', '2013-10-11', 'karolbagh', 'Delhi', 'Delhi', 'female', '', ''),
(14, 'narang', 'narang2', 'hello$2a$10$1qAz2wSx3eDc4rFv5tGb5eTwUNR4sM2rEnpptEOprYd7w1jipUMPe$2a$10$1qAz2wSx3eDc4rFv5tGb5e/slrz3L41WrO.qzoIQ2ziFEL5wEJUFW', '8787878787', 'ady.rast@gmail.com', '0000-00-00', 'delhi', 'delhi', 'delhi', 'Male', 'narang', '$2a$10$1qAz2wSx3eDc4rFv5tGb5enVsl6A1ZHkSP8eN.5PHZwJVsCWRkh.y'),
(19, 'mayur', 'mayur1', 'hello$2a$10$1qAz2wSx3eDc4rFv5tGb5e.Wgku0Y2uELIdjS0Ug1ouhFSiiaRjmS$2a$10$1qAz2wSx3eDc4rFv5tGb5exIhp3Pm3nA6.MmNomExcloItv4ObFtq', '8764119268', 'mathur@gmail.com', '0000-00-00', 'fhgo', 'hfrio', 'fiogrioje', 'Male', 'what is my surname ', '$2a$10$1qAz2wSx3eDc4rFv5tGb5eBLkekJaFgqLGkDKov3YdZeP5zmARlDi'),
(20, 'ANADI RASTOGI', 'anadi.r', 'hello$2a$10$1qAz2wSx3eDc4rFv5tGb5e81OQludw5ysK5mLBkvUlzIjs1TKhj9C$2a$10$1qAz2wSx3eDc4rFv5tGb5eUU8pz2fnbJmAlVEfncL9abY6ARBwXRi', '8089876121', 'f2011034@goa.bits-pilani.ac.in', '0000-00-00', 'CH2 204 , BITS PILANI GOA', 'ZUARINAGAR', 'Goa', 'Male', 'My Full Name', '$2a$10$1qAz2wSx3eDc4rFv5tGb5e298crOjKSg2AzDTf4a2K0KyNdNrGwMW'),
(21, 'howeez', 'howeez', 'hello$2a$10$1qAz2wSx3eDc4rFv5tGb5enNQJXvQjX5PPQHz5PHIykI4TH4T94y.$2a$10$1qAz2wSx3eDc4rFv5tGb5eEX93N7VHskKvtEGxLpx7awY.bt17N9G', '8087955834', 'anadi.rastogi47@gmail.com', '0000-00-00', 'CH2 204 , BITS PILANI GOA', 'ZUARINAGAR', 'Goa', 'Male', 'My Name', '$2a$10$1qAz2wSx3eDc4rFv5tGb5eAv5FUwANECH3goyAsoX8tVzpDAn6QBu');

-- --------------------------------------------------------

--
-- Table structure for table `productdescription`
--

CREATE TABLE IF NOT EXISTS `productdescription` (
  `randomID` varchar(15) NOT NULL,
  `condition` varchar(5) NOT NULL,
  `description` text NOT NULL,
  `originalBuyDate` date NOT NULL,
  PRIMARY KEY (`randomID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productdescription`
--

INSERT INTO `productdescription` (`randomID`, `condition`, `description`, `originalBuyDate`) VALUES
('20131014', 'new', '1) HTC \r\n2) bought 1 year back\r\n3) in good condition \r\n4) details could be checked on flipkart', '2012-10-03'),
('20131017', 'new', 'Nikon camera\r\n\r\nefficient battery , had been used for not more than 5-6 times\r\n\r\nonly 2 months old', '2013-08-03'),
('20131021', 'old', '1) bought it last year\r\n\r\n2) in readable condition .', '2012-07-01'),
('201310215', 'old', '1) Golden stripped Bible \r\n2) In a very used condition\r\n3) yet a treasured artifact\r\n4) Its 50 years old , but I bought it from  \r\n   a museum ten years back .', '2003-04-17'),
('201310216', 'new', 'bought 2 months back \r\ngood and readable condition', '2013-08-15'),
('201310217', 'old', '1) quite an old book.\r\n2) rare find in hyper book stores .', '2010-10-17'),
('201310218', 'new', '1) bought last month \r\n2) nice book , must read .\r\n', '2013-09-02'),
('201310219', 'new', 'Wonderful piece of Autobiography . Read it like thousand times . New from the store will cost u around 9000 INR', '2013-08-12'),
('201310312', 'old', '1) 5 years old .\r\n2) unique design .\r\n', '2009-10-01'),
('201310420', 'used', 'Bought it 5 years back .\r\nStill in good playing condition .\r\nBrand new Motif will not be less than 2 lakhs .\r\n', '2011-10-19'),
('20131059', 'new', 'recently bought .\r\n\r\ncompany - INALSA\r\nin good working condition .', '2013-04-04'),
('20131062', 'new', '1) company --> adidas\r\n2) finale of euro''13 was played with this .\r\n3) 5 months old .\r\n4) in good playable condition.', '2013-09-30'),
('20131066', 'old', 'comapny - hero\r\n\r\n2 yrs old . gear controlled bike', '2008-06-16'),
('20131075', 'new', '1) 6 months old .\r\n\r\n2) Used twice in this period\r\n\r\n3) company --> American Tourister', '2013-05-12'),
('201310811', 'old', 'around 2 years old . Rare in market . This collection is not available in PLANET M', '2011-08-09'),
('20131098', 'old', '1) antique \r\n\r\n2) I have it since 10 years\r\n\r\n3) working condition is as depicted in       \r\n   image', '1994-01-12');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
