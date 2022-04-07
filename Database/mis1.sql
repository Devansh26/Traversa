-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2018 at 03:20 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mis1`
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
  `category` varchar(45) NOT NULL,
  `Car_company` varchar(45) NOT NULL,
  `Rate` varchar(45) NOT NULL,
  `Car_img1` varchar(45) NOT NULL,
  `Car_img2` varchar(45) NOT NULL,
  `Car_img3` varchar(45) NOT NULL,
  `Car_img4` varchar(45) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`Car_name`, `category`, `Car_company`, `Rate`, `Car_img1`, `Car_img2`, `Car_img3`, `Car_img4`, `price`) VALUES
('Swift Dzire', 'Economy', 'Maruti Suzuki', '3', 'Cars/Economy/swiftdesire/s1.jpg', 'Cars/Economy/swiftdesire/s2.jpg', 'Cars/Economy/swiftdesire/s3.jpg', 'Cars/Economy/swiftdesire/s4.jpg', 500),
('I10', 'Economoy', 'Hyndai', '3', 'Cars/Economy/i10/i1.jpg', 'Cars/Economy/i10/i2.jpg', 'Cars/Economy/i10/i3.jpg', 'Cars/Economy/i10/i4.jpg', 700),
('Wagon R', 'Economoy', 'Maruti Suzuki', '3', 'Cars/Economy/wagonr/w1.jpg', 'Cars/Economy/wagonr/w2.jpg', 'Cars/Economy/wagonr/w3.jpg', 'Cars/Economy/wagonr/w4.jpg', 650),
('Duster', 'Standard', 'Renault', '4', 'Cars/Standard/duster/d1.jpg', 'Cars/Standard/duster/d2.jpg', 'Cars/Standard/duster/d3.jpg', 'Cars/Standard/duster/d4.jpg', 1500),
('Honda City', 'Standard', 'Honda', '4', 'Cars/Standard/hondacity/h1.jpg', 'Cars/Standard/hondacity/h2.jpg', 'Cars/Standard/hondacity/h3.jpg', 'Cars/Standard/hondacity/h4.jpg', 1900),
('Ertiga', 'Standard', 'Maruti Suzuki', '4', 'Cars/Standard/ertiga/e1.jpg', 'Cars/Standard/ertiga/e2.jpg', 'Cars/Standard/ertiga/e3.jpg', 'Cars/Standard/ertiga/e4.jpg', 1750),
('BMW', 'Luxury', 'BMW', '5', 'Cars/Luxury/bmw/b1.jpg', 'Cars/Luxury/bmw/b2.jpg', 'Cars/Luxury/bmw/b3.jpg', 'Cars/Luxury/bmw/b4.jpg', 5000),
('Mercedes SLK', 'Luxury', 'Mercedes', '5', 'Cars/Luxury/mercedes/m1.jpg', 'Cars/Luxury/mercedes/m2.jpg', 'Cars/Luxury/mercedes/m3.jpg', 'Cars/Luxury/mercedes/m4.jpg', 4500),
('Altima', 'Luxury', 'Nissan', '5', 'Cars/Luxury/nissan/n1.jpg', 'Cars/Luxury/nissan/n2.jpg', 'Cars/Luxury/nissan/n3.jpg', 'Cars/Luxury/nissan/n4.jpg', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `car2`
--

CREATE TABLE `car2` (
  `Price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car2`
--

INSERT INTO `car2` (`Price`) VALUES
(700),
(850),
(500),
(1100),
(1300),
(1350),
(3000),
(4000),
(6000);

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
-- Table structure for table `complainbox`
--

CREATE TABLE `complainbox` (
  `carname` varchar(100) NOT NULL,
  `Hcomplain` varchar(300) NOT NULL,
  `complain` varchar(5000) NOT NULL,
  `Dat` date NOT NULL,
  `Tim` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `complainbox`
--

INSERT INTO `complainbox` (`carname`, `Hcomplain`, `complain`, `Dat`, `Tim`) VALUES
('', 'gjghjghjghcj', 'ghjgchjgc jgchjghcj hj gjghj ghcjghk ghc zdfjghk ghk ghk ghk gkgckghkgchkgh k hhlj hjlhlhjl', '2017-03-05', '2017-03-05 02:19:32.000000'),
('car', 'CAR IS BAD', 'what a bad car the car was not working properly how can you take this much money from customer', '2017-03-05', '2017-03-05 02:22:45.000000'),
('jghkjhgk', 'hjkhjk', 'hjkhjk khkhjk fghk fgkf fgk fkf fhkk hgghkgh k gk g kg gkgkghk gk gk ', '2017-03-05', '2017-03-05 02:24:04.000000'),
('ifugkighk', 'jkhjkhg', 'hjkhjkjghk', '2017-03-05', '2017-03-05 20:09:46.000000'),
('HONDA', 'tychgvjvjj', 'hgvugihohoioioihoh', '2017-03-05', '2017-03-05 20:19:01.000000'),
('i10', 'tatti', 'gimme bmw for 10rs', '2018-10-14', '2018-10-14 12:06:13.000000'),
('', '', '', '2018-10-14', '2018-10-14 12:11:34.000000'),
('', '', '', '2018-10-14', '2018-10-14 12:11:36.000000'),
('', '', '', '2018-10-14', '2018-10-14 12:11:37.000000'),
('', '', '', '2018-10-14', '2018-10-14 12:11:38.000000'),
('', '', '', '2018-10-14', '2018-10-14 12:11:46.000000'),
('', '', '', '2018-10-14', '2018-10-14 12:12:40.000000'),
('', '', '', '2018-10-14', '2018-10-14 12:12:46.000000'),
('sfdsdf', 'sdfd', 'sdfsdf', '2018-10-14', '2018-10-14 12:16:58.000000');

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
(9, 'Sai', 'Sai12356', 'sai@gmail.com', '', '', '', '2421234123');

-- --------------------------------------------------------

--
-- Table structure for table `final`
--

CREATE TABLE `final` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `adate` varchar(100) NOT NULL,
  `time1` varchar(100) NOT NULL,
  `ddate` varchar(100) NOT NULL,
  `time2` varchar(100) NOT NULL,
  `carcategory` varchar(100) NOT NULL,
  `hours` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `final`
--

INSERT INTO `final` (`name`, `email`, `adate`, `time1`, `ddate`, `time2`, `carcategory`, `hours`) VALUES
('', '', '', '', '', '', '', ''),
('Parth shah', 'parth4299.shah@gmail.com', '03/08/2017', '2 : 49 AM', '03/16/2017', '2 : 50 AM', 'Standard', '40'),
('Parth shah', 'parth4299.shah@gmail.com', '03/08/2017', '2 : 49 AM', '03/16/2017', '2 : 50 AM', 'Standard', '40'),
('Parth shah', 'parth4299.shah@gmail.com', '03/08/2017', '2 : 49 AM', '03/16/2017', '2 : 50 AM', 'Standard', '40'),
('Parth shah', 'parth4299.shah@gmail.com', '03/08/2017', '2 : 49 AM', '03/16/2017', '2 : 50 AM', 'Standard', '40'),
('Parth shah', 'shahparth4299@gmail.com', '03/09/2017', '3 : 13 AM', '03/09/2017', '8 : 13 AM', 'Standard', '4'),
('Parth shah', 'shahparth4299@gmail.com', '03/09/2017', '3 : 17 AM', '03/16/2017', '3 : 17 AM', 'Standard', '44'),
('Parth shah', 'shahparth4299@gmail.com', '03/09/2017', '3 : 17 AM', '03/16/2017', '3 : 17 AM', 'Standard', '44'),
('Parth shah', 'shahparth4299@gmail.com', '03/09/2017', '3 : 17 AM', '03/16/2017', '3 : 17 AM', 'Standard', '44'),
('Parth shah', 'p', '03/09/2017', '3 : 17 AM', '03/16/2017', '3 : 17 AM', 'Standard', '44'),
('Parth shah', 'parth4299.shah@gmail.com', '03/09/2017', '3 : 17 AM', '03/16/2017', '3 : 17 AM', 'Standard', '44'),
('Parth shah', 'parth4299.shah@gmail.com', '03/09/2017', '3 : 17 AM', '03/16/2017', '3 : 17 AM', 'Standard', '44'),
('Parth shah', 'parth4299.shah@gmail.com', '03/09/2017', '3 : 17 AM', '03/16/2017', '3 : 17 AM', 'Standard', '44'),
('Parth shah', 'parth4299.shah@gmail.com', '03/09/2017', '3 : 17 AM', '03/16/2017', '3 : 17 AM', 'Standard', '44'),
('Parth shah', 'parth4299.shah@gmail.com', '03/09/2017', '3 : 17 AM', '03/16/2017', '3 : 17 AM', 'Standard', '44'),
('Parth shah', 'parth4299.shah@gmail.com', '03/09/2017', '3 : 17 AM', '03/16/2017', '3 : 17 AM', 'Standard', '44'),
('Parth shah', 'parth4299.shah@gmail.com', '03/09/2017', '3 : 17 AM', '03/16/2017', '3 : 17 AM', 'Standard', '44'),
('Parth shah', 'parth4299.shah@gmail.com', '03/09/2017', '3 : 17 AM', '03/16/2017', '3 : 17 AM', 'Standard', '44'),
('Parth shah', 'parth4299.shah@gmail.com', '03/09/2017', '3 : 17 AM', '03/16/2017', '3 : 17 AM', 'Standard', '44'),
('Parth shah', 'parth4299.shah@gmail.com', '03/09/2017', '3 : 17 AM', '03/16/2017', '3 : 17 AM', 'Standard', '44'),
('Parth shah', 'parth4299.shah@gmail.com', '03/09/2017', '3 : 17 AM', '03/16/2017', '3 : 17 AM', 'Standard', '44'),
('Devansh', 'devansh981226@gmail.com', '03/08/2017', '9 : 00 AM', '03/09/2017', '9 : 00 AM', 'Standard', '7'),
('Devansh', 'devansh981226@gmail.com', '03/08/2017', '9 : 00 AM', '03/09/2017', '9 : 00 AM', 'Standard', '7'),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('Devansh', 'devansh981226@gmail.com', '03/08/2017', '9 : 00 AM', '03/09/2017', '9 : 00 AM', 'Standard', '7'),
('Jash', 'jashshah2501@gmail.com', '03/14/2018', '6 : 39 AM', '03/10/2018', '6 : 41 PM', 'Luxary', '2'),
('Devansh', 'devansh981226@gmail.com', '08/07/2018', 'Mumbai', '08/07/2018', '12 : 04 AM', 'Econamy', '20'),
('Devansh', 'devansh981226@gmail.com', '08/17/2018', 'Mumbai', '08/17/2018', '12 : 13 AM', 'Luxary', '88'),
('Devansh', 'devansh981226@gmail.com', '08/07/2018', 'Mumbai', '08/07/2018', '1 : 15 PM', 'Standard', '20'),
('Devansh', 'devansh981226@gmail.com', '08/17/2018', 'Mumbai', '08/07/2018', '1 : 22 PM', 'Standard', '13'),
('', '', '', '', '', '', '', ''),
('LAXMI', 'devansh981226@gmail.com', '02-09-2018', '01:58 PM', '24-09-2018', '05:58 PM', '', ''),
('', '', '', '', '', '', '', '0'),
('LAXMI', 'devansh981226@gmail.com', '23-09-2018', '05:00 PM', '30-09-2018', '06:01 PM', '', '7'),
('Devansh', 'devansh981226@gmail.com', '23-09-2018', '06:24 PM', '', '', '', '45'),
('', '', '', '', '', '', '', ''),
('Sa', 'devansh981226@gmail.com', '15-10-2018', '05:37 AM', '', '', '', '33'),
('', '', '', '', '', '', '', ''),
('Sai', 'devansh981226@gmail.com', '28-10-2018', '11:47 AM', '', '', '', '10'),
('asd', 'devansh981226@gmail.com', '09-10-2018', '11:55 AM', '', '', '', '10'),
('asdsadasda', 'devansh981226@gmail.com', '15-10-2018', '07:57 AM', '', '', '', '10'),
('adsasd', 'devansh981226@gmail.com', '21-10-2018', '11:59 AM', '', '', '', '10'),
('asdsd', 'devansh981226@gmail.com', '23-10-2018', '05:00 PM', '', '', '', '10'),
('dsad', 'devansh981226@gmail.com', '02-10-2018', '02:48 PM', '', '', '', '10'),
('Devansh', 'devansh981226@gmail.com', '22-10-2018', '03:23 PM', '', '', 'Economoy', '10'),
('Devansh ', 'devansh981226@gmail.com', '22-10-2018', '03:24 PM', '', '', 'Economoy', '14'),
('Devansh ', 'devansh981226@gmail.com', '22-10-2018', '03:25 PM', '', '', 'Economoy', '10'),
('', '', '', '', '', '', '', ''),
('Devansh ', 'devansh981226@gmail.com', '21-10-2018', '05:28 PM', '', '', '', '10'),
('', '', '', '', '', '', '', ''),
('Devansh', 'devansh981226@gmail.com', '30-10-2018', '04:29 PM', '', '', 'Economoy', '10'),
('', '', '', '', '', '', '', ''),
('Devansh', 'devansh981226@gmail.com', '21-10-2018', '03:32 PM', '', '', 'Economoy', '10'),
('Devansh', 'devansh981226@gmail.com', '23-10-2018', '05:33 PM', '', '', 'Economoy', '10'),
('Devansh ', 'devansh981226@gmail.com', '17-10-2018', '05:34 PM', '', '', 'Economoy', '10'),
('Devansh ', 'devansh981226@gmail.com', '21-10-2018', '06:35 PM', '', '', 'Economoy', '10'),
('Devansh ', 'devansh981226@gmail.com', '28-10-2018', '05:37 PM', '', '', 'Economoy', '10'),
('', '', '', '', '', '', '', ''),
('Devansh', 'devansh981226@gmail.com', '18-10-2018', '05:38 PM', '', '', 'Economoy', '10'),
('Devansh', 'devansh981226@gmail.com', '18-10-2018', '05:38 PM', '', '', 'Economoy', '10'),
('devasjdb', 'devansh981226@gmail.com', '23-10-2018', '05:38 PM', '', '', 'Economoy', '5'),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '');

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
  `carcategory` varchar(1000) NOT NULL,
  `carname` varchar(100) NOT NULL,
  `Hreview` varchar(100) NOT NULL,
  `Review` varchar(300) NOT NULL,
  `Dat` int(6) NOT NULL,
  `Tim` datetime(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`carcategory`, `carname`, `Hreview`, `Review`, `Dat`, `Tim`) VALUES
('Economy', 'Wagon R', 'car is nice', 'At this price the car is worth to buy awesome car', 20170307, '2017-03-07 03:59:53.00000'),
('Economy', 'Wagon R', 'Great Car', 'Good experience with Wagon R car i like the car & service is great', 20170307, '2017-03-07 04:01:04.00000'),
('Economy', 'Swift Dzire', 'Great Car', 'Good experience with Swift Dzire car i like the car & service is great thanks Rent A Car', 20170307, '2017-03-07 04:02:27.00000'),
('Economy', 'Swift Dzire', 'Poor car', 'Car was so old and it was not working properly very bad experience with rent a car', 20170307, '2017-03-07 04:03:25.00000'),
('Economy', 'Swift Dzire', 'Worth at this price', 'The car is great and the price is very low so good to take the car on rent', 20170307, '2017-03-07 04:03:51.00000'),
('Economy', 'I10', 'Worth at this price', 'The car is great and the price is very low so good to take the car on rent', 20170307, '2017-03-07 04:04:18.00000'),
('Economy', 'I10', 'Nice Car', 'To get I10 car at this price is very difficult thank you rent a car for great service', 20170307, '2017-03-07 04:05:12.00000'),
('standard', 'Dusted', 'Nice Car', 'To get Duster car on rent at this price is very difficult thank you rent a car for great service', 20170307, '2017-03-07 04:05:50.00000'),
('standard', 'Duster', 'Nice Car', 'To get Duster car on rent at this price is very difficult thank you rent a car for great service', 20170307, '2017-03-07 04:06:02.00000'),
('standard', 'Duster', 'Awesome Deal', 'The Duster Standard car at this price is great & the service is so good ', 20170307, '2017-03-07 04:07:03.00000'),
('standard', 'Honda City', 'Awesome Deal', 'The Duster Standard car at this price is great & the service is so good ', 20170307, '2017-03-07 04:07:32.00000'),
('standard', 'Honda City', 'Worth to pay', 'Honda is a big brand in the market and to get the honda city car on rent is good with the car in new condition ', 20170307, '2017-03-07 04:08:54.00000'),
('standard', 'Ertiga', 'Worth to pay', 'Honda is a big brand in the market and to get the honda city car on rent is good with the car in new condition ', 20170307, '2017-03-07 04:09:09.00000'),
('standard', 'Ertiga', 'Firstclass car', 'I bought this car on rent & the service was better than expections the first time bought car on rent great experience  ', 20170307, '2017-03-07 04:10:47.00000'),
('standard', 'BMW', 'Firstclass car', 'I bought this car on rent & the service was better than expections the first time bought car on rent great experience  ', 20170307, '2017-03-07 04:11:16.00000'),
('standard', 'BMW', 'Firstclass car', 'I bought this car on rent & the service was better than expections the first time bought car on rent great experience  ', 20170307, '2017-03-07 04:14:52.00000'),
('Luxury', 'Mercedes SLK', 'Firstclass car', 'I bought this car on rent & the service was better than expections the first time bought car on rent great experience  ', 20170307, '2017-03-07 04:15:28.00000'),
('Luxury', 'Altima', 'Bad car', 'I bought this car on rent & the service was better than expections the first time bought car on rent great experience  ', 20170307, '2017-03-07 04:15:48.00000'),
('Luxury', 'Altima', 'Dont go for this car', 'Altima car in rent a car is bad the car was to old and in bad condition waste of money  ', 20170307, '2017-03-07 04:16:52.00000'),
('Luxury', 'BMW', 'Bad car', 'Altima car in rent a car is bad the car was to old and in bad condition waste of money  ', 20170307, '2017-03-07 04:17:22.00000');

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
  MODIFY `Cust_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `newcar`
--
ALTER TABLE `newcar`
  MODIFY `Car_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
