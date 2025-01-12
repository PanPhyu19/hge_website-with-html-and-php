-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2022 at 03:01 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hge(db)`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `articleid` int(11) NOT NULL,
  `articletitle` varchar(100) DEFAULT NULL,
  `articleauthor` varchar(100) DEFAULT NULL,
  `articletext` varchar(500) DEFAULT NULL,
  `articledate` date DEFAULT NULL,
  `articleparagraph` varchar(500) DEFAULT NULL,
  `articleimage` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`articleid`, `articletitle`, `articleauthor`, `articletext`, `articledate`, `articleparagraph`, `articleimage`) VALUES
(1, 'Previously unknown aspects of running shoe design uncovered', 'University at Buffalo', 'A University at Buffalo researcher has some good news for athletes and fitness enthusiasts who favor thick, heavily cushioned running shoes. Although these shoes are increasingly popular because they provide comfort and a high degree of shock absorbing protection, those benefits were thought to come at the expense of increased overall leg stiffness, which altered a runners normal stride and could increase muscle fatigue.', '2022-01-26', 'A thick running shoe midsole is often favored for its shock absorbing protection, but it has been assumed that these heavily cushioned shoes increase leg stiffness and muscle fatigue. But results of a new study suggest that midsole thickness is unlikely to cause individuals to alter their leg stiffness.', 'images/_running shoes.webp'),
(2, 'Can individual walking pace impact their heart failure risk?', 'Wiley', 'In a study in the Journal of the American Geriatrics Society of postmenopausal women, those who reported a faster walking pace had a lower risk of developing heart failure.', '2022-01-20', 'In a study of postmenopausal women, those who reported a faster walking pace had a lower risk of developing heart failure.', 'images/_walking.jpg'),
(3, 'Does Walking 1 Hour Every Day Aid Weight Loss?', 'Gavin Van De Walle, MS, RD', 'Calories burned walking\r\n                               The simplicity of walking makes it an appealing activity for many — particularly those looking to burn extra calories.\r\n                               \r\n                               The number of calories you burn walking depends on numerous factors, especially your weight and walking speed.', '2020-05-25', 'SUMMARY\r\n                               The number of calories you burn walking depends mainly on your weight and walking speed. Walking faster allows you to burn more calories per hour.', 'images/_lose weight.jpg'),
(4, 'Exercise increases the bodys own cannabis-like substance which reduces chronic inflammation', 'University of Nottingham', 'Exercise increases the bodys own cannabis-like substances, which in turn helps reduce inflammation and could potentially help treat certain conditions such as arthritis, cancer and heart disease.', '2021-11-21', 'In a new study, published in Gut Microbes, experts from the University of Nottingham found that exercise intervention in people with arthritis, did not just reduce their pain, but it also lowered the levels of inflammatory substances (called cytokines). It also increased levels of cannabis-like substances produced by their own bodies, called endocannabinoids. Interestingly, the way exercise resulted in these changes was by altering the gut microbes.', 'images/_exercise.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookingid` int(11) NOT NULL,
  `bookingname` varchar(50) DEFAULT NULL,
  `bookingtype` varchar(100) DEFAULT NULL,
  `bookingtime` varchar(50) DEFAULT NULL,
  `bookingday` varchar(30) DEFAULT NULL,
  `customerid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingid`, `bookingname`, `bookingtype`, `bookingtime`, `bookingday`, `customerid`) VALUES
(1, 'Michael', 'online', 'Morning', 'Monday', 2);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contactid` int(11) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `surname` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contactid`, `firstname`, `surname`, `email`, `message`) VALUES
(1, 'Pan', 'Phyu', 'ph@gmail.com', 'Does buying the home gym equipment include home installation service?');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `counterid` int(11) NOT NULL,
  `ip_address` text DEFAULT NULL,
  `view_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`counterid`, `ip_address`, `view_date`) VALUES
(1, '12:12:12:12', '2022-02-02 01:51:19');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerid` int(11) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `surname` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phno` varchar(20) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerid`, `firstname`, `surname`, `email`, `phno`, `address`, `password`) VALUES
(1, 'Pan', 'Phyu', 'ph@gmail.com', NULL, NULL, '1234'),
(2, 'Michael', 'Blaze', 'michael@gmail.com', NULL, NULL, '1234'),
(3, 'Tom', 'Reynolds', 'tom@gmail.com', NULL, NULL, '1234');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productcode` int(11) NOT NULL,
  `productname` varchar(100) DEFAULT NULL,
  `producttype` varchar(30) DEFAULT NULL,
  `productimage` text DEFAULT NULL,
  `description` varchar(150) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productcode`, `productname`, `producttype`, `productimage`, `description`, `price`, `quantity`) VALUES
(1, 'EVERLAST powercore dual bag and stand', 'new', 'images/_Everlast Powercore Dual Bag and Stand.jpg', 'Dimensions:48.25-by-84-by-69 inches (W x H x D). Great endurance and durability', 160, 30),
(2, 'Gaiam Premium 2 color yoga mat', 'new', 'images/_Gaiam Premium 2-Color Yoga Mat.jpg', 'Durable and light-weight non-slip yoga mat suitable especially for beginners.', 30, 35),
(3, 'Fitnessery Ab Roller', 'new', 'images/_Fitnessery Ab Roller.jpg', 'A perfect equipment for cardio exercises. It will help you build up six-pack abs by acting as your personal trainer.', 24, 20),
(4, 'NordicTrack Commercial s22i Studio Cycle', 'new', 'images/_white nordic track.png', 'A top-notch workout bike providing Automatic Trainer Control and multiple levels of decline and incline, it becomes one of very few stationary bikes', 1499, 5),
(5, 'Bowflex PR3000 Home Gym', 'new', 'images/_Bowflex PR3000 Home Gym.png', 'A compact space-saving total-body home gym with over 50 exercises and no-change cable system between sets to stay focused on workouts', 1099, 10),
(6, 'FLYBIRD 2021 Adjustable Weight Bench', 'new', 'images/_flybird 2021.jpeg', 'The FLYBIRD adjustable weight bench has a width of 15.7”, a length of 49.2”, and a height of 44.5” and contains a Waist Pad.', 116, 20),
(7, 'Hydrow rower', 'new', 'images/_Hydrow rower.png', 'Provides you the feeling of rowing at the comfort of home including Heart rate monitoring and LED screen', 1999, 3),
(8, 'Tempo-Studio', 'new', 'images/_Tempo-Studio.png', 'A smart home gym which uses 3D censors to correct your posture and includes a digital screen', 2000, 2),
(9, 'Bowflex SelectTech 552 dumbbells', 'new', 'images/_Bowflex SelectTech 552 Dumbbells.jpg', 'Adjustable dumb bells from 52.5 lbs to 5lbs.', 200, 22),
(10, 'Viavito Exercise Bike', 'second', 'images/_Viavito.webp', 'Bought a year ago and used less than ten times.Still in good condition', 140, 1),
(11, 'CIAPO electric home treadmill', 'second', 'images/_CIAPO treadmill 1.jpg', 'Electric Driving type treadmill including LCD blue screen', 212, 5),
(12, 'Gym Bicycle Adjustable Spinning Bike', 'second', 'images/_gym bicycle.png', 'Adjustable indoor spinning bike which is adjustable and includes heart rate monitor', 75, 1),
(13, 'Multigym fitness machine', 'second', 'images/_Muscle multifunction.jpg', 'Multi gym fitness machine for various multi muscle funcion including abdominal train', 233, 3),
(14, 'VBEST strip Power Tower Pull Up Bar', 'second', 'images/__Pull Up bar.jpg', 'Pull Up Bar for Body improvement at home', 75, 2),
(15, 'Second Hand Arm and Leg Exercise Bike', 'second', 'images/_Arm and Leg exercise.jpg', 'Home Bike for Arm and Leg exercise', 13, 1),
(16, 'Fitbit Luxe', 'wearable tracker', 'images/_fitbit luxe.png', 'This waterproof fashionable fitness & wellness tracker with a battery which can run up to 5 days and tracks every step including menstrual health.', 150, 16),
(17, 'Fitbit Gorjana Special Edition', 'wearable tracker', 'images/_Special Edition gorjana.png', 'The special edition comes with a gold stainless steel from jewelery brand Gorjana with battery life up to 5 days.', 200, 6),
(18, 'Fitbit Ace 3', 'wearable tracker', 'images/_fitbit ace 3.png', 'This tracker for kids over 6 has battery life up to 8 days and is cool to customize for kids.It is also swim-proof and contains parental controls.', 80, 18),
(19, 'Fitbit Charge 5', 'wearable tracker', 'images/_fitbit charge5.png', 'Most advanced fitness tracker with on-wrist ECG app for heart health and EDA scan app for stress management.Its battery life is up to 7 days.', 120, 15),
(20, 'Fitbit Inspire 2', 'wearable tracker', 'images/_fitbit inspire 2.png', 'This water-proof and easy-to-use tracker measures heart rate and includes stress management system with battery up to 10 days.', 100, 15),
(21, 'Garmin Fenix 7', 'wearable running', 'images/_fenix 7 series.jpg', 'This multisport GPS watch with extended battery life includes health and wellness monitoring sensors such as on-wrist heart rate and pulse oximeter me', 900, 2),
(22, 'Garmin Forerunner 55', 'wearable running', 'images/_Forerunner 55.jpg', 'This easy-to-use running watch consists of GPS for runners and health monitoring system such as wrist-based heart rate and so on.', 200, 5),
(23, 'Garmin Tactix Delta Solar Edition', 'wearable running', 'images/_tactix delta series.jpg', 'This solar edition built to military-standard gets charged from the sunlight and includes multi GNSS support and outdoor sensors to help navigate the ', 2000, 1),
(24, 'Garmin Venu 2S', 'wearable running', 'images/_Venue Series.webp', 'This fashionable small-sized GPS smartwatch with advanced monitoring of health and fitness features.', 400, 5),
(25, 'Garmin Vivoactive 4s', 'wearable running', 'images/_vivoactive 4s.webp', 'This small-sized GPS smartwatch is built for your active lifestyle with battery up to 7-days.', 350, 4),
(26, 'POLAR H9', 'wearable heartrate', 'images/_POLAR H9.jpg', 'This reliable heart rate sensor is a chest strap which can be connected to various devices by Bluetooth, ANT+ and 5 kHz technologies.', 60, 8),
(27, 'POLAR H10', 'wearable heartrate', 'images/_POLAR H10.jpg', 'This accurate and connective heart rate sensor includes high quality electrodes to measure the heart rate accurately.', 90, 6),
(28, 'POLAR Verity Sense', 'wearable heartrate', 'images/_Polar verity sense.jpg', 'This optical heart rate monitor allows you the maximum freedom of movement and by Bluetooth®, ANT+ and internal memory,you can record your workout.', 90, 4);

-- --------------------------------------------------------

--
-- Table structure for table `secondproducts`
--

CREATE TABLE `secondproducts` (
  `productid` int(11) NOT NULL,
  `productname` varchar(50) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `productprice` int(11) DEFAULT NULL,
  `useremail` varchar(50) DEFAULT NULL,
  `productimage` text DEFAULT NULL,
  `customerid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `serviceid` int(11) NOT NULL,
  `servicename` varchar(50) DEFAULT NULL,
  `serviceimage` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serviceid`, `servicename`, `serviceimage`) VALUES
(1, 'Maintenance', 'images/_equipment maintenance.jpg'),
(2, 'Treadmill Repair', 'images/_treadmill workshop.jpg'),
(3, 'Gym Installation', 'images/_gym installation.jpg'),
(4, 'Relocation & Installation', 'images/_Relocation and installation.jpg'),
(5, 'Gym Cable Replacement', 'images/_cable replacement.jpg'),
(6, 'Elliptical Repair', 'images/_elliptical repair.jpg'),
(7, 'Weight Equipment Repair', 'images/_weight equipment repair.jpg'),
(8, 'Gym Upholstery Repair', 'images/_gym upholstery repair.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffid` int(11) NOT NULL,
  `staffname` varchar(30) DEFAULT NULL,
  `staffemail` varchar(30) DEFAULT NULL,
  `staffpassword` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffid`, `staffname`, `staffemail`, `staffpassword`) VALUES
(1, 'Ella', 'ella@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `requestid` int(11) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `surname` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phno` varchar(20) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `section` varchar(30) DEFAULT NULL,
  `others` varchar(100) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL,
  `customerid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`articleid`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingid`),
  ADD KEY `customerid` (`customerid`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`counterid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productcode`);

--
-- Indexes for table `secondproducts`
--
ALTER TABLE `secondproducts`
  ADD PRIMARY KEY (`productid`),
  ADD KEY `customerid` (`customerid`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`serviceid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffid`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`requestid`),
  ADD KEY `customerid` (`customerid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `articleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contactid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `counterid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productcode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `secondproducts`
--
ALTER TABLE `secondproducts`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `serviceid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `requestid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`customerid`) REFERENCES `customer` (`customerid`);

--
-- Constraints for table `secondproducts`
--
ALTER TABLE `secondproducts`
  ADD CONSTRAINT `secondproducts_ibfk_1` FOREIGN KEY (`customerid`) REFERENCES `customer` (`customerid`);

--
-- Constraints for table `workshop`
--
ALTER TABLE `workshop`
  ADD CONSTRAINT `workshop_ibfk_1` FOREIGN KEY (`customerid`) REFERENCES `customer` (`customerid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
