-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2018 at 07:07 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mis`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `about` varchar(1000) NOT NULL,
  `mission` varchar(1000) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`about`, `mission`, `contact`, `image`, `email`) VALUES
('Savaari is India’s largest retail focused Intercity cab rental player. We have been serving customers for the last 10 years. We have a proven business and service model of providing quality chauffeur driven car rental services in 60 cities across India. We are venture funded by leading investors - Intel Capital and Inventus Capital Partners.', 'To build an institution to achieve customer loyaltyCarzonrent is the result of a Dream - to build an Institution, which will achieve customer loyalty through understanding ever-changing needs, deliver service quality and follow value for money approach.', '09944254684', 'audi.jpg', 'rentacar@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `adminl`
--

CREATE TABLE `adminl` (
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adminl`
--

INSERT INTO `adminl` (`Username`, `Password`) VALUES
('Parth', 'parth4299');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `Car_name` varchar(45) NOT NULL,
  `Modelno` varchar(45) NOT NULL,
  `Car_company` varchar(45) NOT NULL,
  `Rate` varchar(45) NOT NULL,
  `Car_img1` varchar(45) NOT NULL,
  `Car_img2` varchar(45) NOT NULL,
  `Car_img3` varchar(45) NOT NULL,
  `Car_img4` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`Car_name`, `Modelno`, `Car_company`, `Rate`, `Car_img1`, `Car_img2`, `Car_img3`, `Car_img4`) VALUES
('Swift Dzire', '', 'Maruti Suzuki', '3', 'Cars/Economy/swiftdesire/s1.jpg', 'Cars/Economy/swiftdesire/s2.jpg', 'Cars/Economy/swiftdesire/s3.jpg', 'Cars/Economy/swiftdesire/s4.jpg'),
('I10', '', 'Hyndai', '3', 'Cars/Economy/i10/i1.jpg', 'Cars/Economy/i10/i2.jpg', 'Cars/Economy/i10/i3.jpg', 'Cars/Economy/i10/i4.jpg'),
('Wagon R', '', 'Maruti Suzuki', '3', 'Cars/Economy/wagonr/w1.jpg', 'Cars/Economy/wagonr/w2.jpg', 'Cars/Economy/wagonr/w3.jpg', 'Cars/Economy/wagonr/w4.jpg'),
('Duster', '', 'Renault', '4', 'Cars/Standard/duster/d1.jpg', 'Cars/Standard/duster/d2.jpg', 'Cars/Standard/duster/d3.jpg', 'Cars/Standard/duster/d4.jpg'),
('Honda City', '', 'Honda', '4', 'Cars/Standard/hondacity/h1.jpg', 'Cars/Standard/hondacity/h2.jpg', 'Cars/Standard/hondacity/h3.jpg', 'Cars/Standard/hondacity/h4.jpg'),
('Ertiga', '', 'Maruti Suzuki', '4', 'Cars/Standard/ertiga/e1.jpg', 'Cars/Standard/ertiga/e2.jpg', 'Cars/Standard/ertiga/e3.jpg', 'Cars/Standard/ertiga/e4.jpg'),
('BMW', '', 'BMW', '5', 'Cars/Luxury/bmw/b1.jpg', 'Cars/Luxury/bmw/b2.jpg', 'Cars/Luxury/bmw/b3.jpg', 'Cars/Luxury/bmw/b4.jpg'),
('Mercedes SLK', '', 'Mercedes', '5', 'Cars/Luxury/mercedes/m1.jpg', 'Cars/Luxury/mercedes/m2.jpg', 'Cars/Luxury/mercedes/m3.jpg', 'Cars/Luxury/mercedes/m4.jpg'),
('Altima', '', 'Nissan', '5', 'Cars/Luxury/nissan/n1.jpg', 'Cars/Luxury/nissan/n2.jpg', 'Cars/Luxury/nissan/n3.jpg', 'Cars/Luxury/nissan/n4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `carcategory`
--

CREATE TABLE `carcategory` (
  `category_id` int(10) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Cust_id` int(10) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Address1` varchar(60) NOT NULL,
  `Address2` varchar(50) NOT NULL,
  `Address3` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cust_id`, `Username`, `Password`, `Email`, `Address1`, `Address2`, `Address3`, `Phone`) VALUES
(1, 'Parth4299', '1498032', 'shahparth4299@gmail.com', 'B/105 SHANTI JYOT', 'BALAJI NAGAR', 'BHAYANDAR(W) Thane 401101 ', ''),
(4, 'Devansh4444', '1498030', 'devshsdsadf@g.com', 'fssdf', 'dsfsdf', 'dsfsdfsdf', '343454545455'),
(6, 'Kunal', '1498006', 'sdsfdsdg', 'dgdfgdgdf', 'dgdfgdfgsdfgdf', 'fdgsdffgdfg', 'tgdfgdfgdfgdfg'),
(8, 'Bhavin', '1498038', 'dasdfsadfsdfdsf', 'sdfsdfsdf', 'sdfsdfsdfs', 'dsdfsdfsdfsdf', '456456456'),
(9, 'Devansh', '789654', 'abc@gmail.com', '', '', '', '7412589625'),
(10, 'Likita', '1498026', 'abcd@gmail.com', '', '', '', '7896541236'),
(11, 'Forum', '1498002', 'abc@gmail.com', '', '', '', '7412589632'),
(19, 'Karan', '1498040', 'abc@gmail.com', '', '', '', '7896541237'),
(20, 'Vinit', '1498034', 'abc@gmail.com', '', '', '', '7412589632'),
(21, 'Yash', '1498021', 'abc@gmail.com', '', '', '', '7896541254'),
(22, 'Bhumi', '1498001', 'abc@gmail.com', '', '', '', '7896541254'),
(23, 'Raju', 'dfgtdsgdfg', 'raj07@gmail.com', '', '', '', '8745142365');

-- --------------------------------------------------------

--
-- Table structure for table `newcar`
--

CREATE TABLE `newcar` (
  `Car_id` int(10) NOT NULL,
  `Car_name` varchar(100) NOT NULL,
  `Price` int(100) NOT NULL,
  `Company_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `newcar`
--

INSERT INTO `newcar` (`Car_id`, `Car_name`, `Price`, `Company_name`) VALUES
(1, 'Honda civic', 4444, 'HONDA');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `Hreview` varchar(100) NOT NULL,
  `Review` varchar(300) NOT NULL,
  `Dat` int(6) NOT NULL,
  `Tim` datetime(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`Hreview`, `Review`, `Dat`, `Tim`) VALUES
('', '', 0, '0000-00-00 00:00:00.00000'),
('Raj Parekh', 'WEFSDF SDFSDF SDFSDF SDFSDF 			', 0, '0000-00-00 00:00:00.00000'),
('Parth shah', 'f affsd   fsf sdfsfsdfsdfsdf asfsdf', 20170221, '0000-00-00 00:00:00.00000'),
('Devansh shah', 'dsfvds dsgfdsg fvsdfsdf sfsdf fsdfv			', 20170221, '2017-02-21 03:48:32.00000'),
('Google pixel', 'the phone is cool but the design is ok ram is nice overall the phone is best better than the iphone			', 20170221, '2017-02-21 12:27:03.00000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carcategory`
--
ALTER TABLE `carcategory`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cust_id`);

--
-- Indexes for table `newcar`
--
ALTER TABLE `newcar`
  ADD PRIMARY KEY (`Car_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carcategory`
--
ALTER TABLE `carcategory`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Cust_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `newcar`
--
ALTER TABLE `newcar`
  MODIFY `Car_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
