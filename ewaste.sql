-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 11, 2023 at 05:28 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ewaste`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

DROP TABLE IF EXISTS `bank`;
CREATE TABLE IF NOT EXISTS `bank` (
  `acc_no` varchar(50) NOT NULL,
  `ownername` varchar(100) NOT NULL,
  `ifsccode` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  PRIMARY KEY (`acc_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`acc_no`, `ownername`, `ifsccode`, `amount`) VALUES
('1111111111111111', 'qwe', '1234', '330'),
('1234567890', 'ABC', '12345', '11481'),
('12345678901', 'ADMIN', '1111', '175787');

-- --------------------------------------------------------

--
-- Table structure for table `company_category`
--

DROP TABLE IF EXISTS `company_category`;
CREATE TABLE IF NOT EXISTS `company_category` (
  `cmp_cat_id` int NOT NULL AUTO_INCREMENT,
  `cmp_cat_name` varchar(50) NOT NULL,
  PRIMARY KEY (`cmp_cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_category`
--

INSERT INTO `company_category` (`cmp_cat_id`, `cmp_cat_name`) VALUES
(2, 'Hospital'),
(4, 'School'),
(5, 'Textiles'),
(6, 'Restaurent'),
(7, 'Airport office'),
(9, 'Railway Office'),
(10, 'clinic'),
(11, 'showroom'),
(12, 'College');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `cust_id` int NOT NULL AUTO_INCREMENT,
  `com_cat_id` int NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `added_by` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cust_id`, `com_cat_id`, `pincode`, `company_name`, `location`, `state`, `city`, `phone`, `added_by`, `email`) VALUES
(3, 4, '686514', 'CMS High School mdkm', 'Kottayam', '', 'mundakayam', '6234567891', '', 'cms@gmail.com'),
(4, 4, '686513', 'ckm hs koruthodu', 'Kottayam', '', 'maduka', '6234567890', '', 'ckm@gmail.com'),
(5, 12, '686813', 'ssc', 'Idukki', '', 'Mundakayam', '9495340534', '', 'ssc@gmail.com'),
(6, 2, '686513', 'MMT Hospital', 'Kottayam', '', 'Mundakayam', '9495098776', '', 'mmt@gmail.com'),
(7, 6, '167865', 'error', 'Kottayam', '', 'error', '6234567876', '', 'e@gmail.com'),
(8, 5, '167865', 'sulthan Textiles', 'Ernakulam', '', 'kochi', '6234567876', '', 'sulthan@gmail.com'),
(9, 5, '167865', 'sulthan Textiles', 'Ernakulam', 'Kerala', 'kochi', '6234567876', '', 'sulthan@gmail.com'),
(10, 5, '167865', 'sulthan Textiles', 'Ernakulam', 'Kerala', 'kochi', '6234567876', '', 'sulthan@gmail.com'),
(11, 5, '987654', 's', 'Thrissur', 's', 'vs', '6234567876', '', 's@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `emp_id` int NOT NULL AUTO_INCREMENT,
  `employee_type` varchar(200) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `city` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `district` varchar(30) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `employee_type`, `emp_name`, `phone`, `gender`, `city`, `email`, `district`) VALUES
(3, '', 'Babu Nambothri', '7558034567', 'Male', 'mdkm', 'babu@gmail.com', 'Kottayam'),
(4, '', 'chandran kudathil', '6234567890', 'Male', 'kochi', 'chandran@gmail.com', 'Ernakulam');

-- --------------------------------------------------------

--
-- Table structure for table `ewaste_category`
--

DROP TABLE IF EXISTS `ewaste_category`;
CREATE TABLE IF NOT EXISTS `ewaste_category` (
  `catid` int NOT NULL AUTO_INCREMENT,
  `catname` varchar(60) NOT NULL,
  `price` varchar(50) NOT NULL,
  PRIMARY KEY (`catid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ewaste_category`
--

INSERT INTO `ewaste_category` (`catid`, `catname`, `price`) VALUES
(1, 'recovery', '500'),
(3, 'Recycling', '1000'),
(4, 'disposal', '200');

-- --------------------------------------------------------

--
-- Table structure for table `forgotpassword`
--

DROP TABLE IF EXISTS `forgotpassword`;
CREATE TABLE IF NOT EXISTS `forgotpassword` (
  `forgotpassword_id` int NOT NULL AUTO_INCREMENT,
  `email_id` varchar(60) NOT NULL,
  `random_number` int NOT NULL,
  PRIMARY KEY (`forgotpassword_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forgotpassword`
--

INSERT INTO `forgotpassword` (`forgotpassword_id`, `email_id`, `random_number`) VALUES
(1, 'admin@gmail.com', 958015),
(2, 'admin@gmail.com', 959652),
(3, 'amlachirayil123@gmail.com', 929125),
(4, 'amlachirayil123@gmail.com', 891182),
(5, 'amlachirayil123@gmail.com', 889629),
(6, 'amlachirayil123@gmail.com', 952640),
(7, 'scm.maheshspillai@gmai.com', 906508),
(8, 'amla.faithinfo@gmail.com', 913313),
(9, 'amla.faithinfo@gmail.com', 990173),
(10, 'scm.maheshspillai@gmai.com', 955668),
(11, 'scm.maheshspillai@gmai.com', 929271),
(12, 'amla.faithinfo@gmail.com', 957509);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `usertype`, `status`) VALUES
('admin@gmail.com', 'admin123', 'admin', 'active'),
('babu@gmail.com', '7558034567', 'fieldofficer', 'active'),
('chandran@gmail.com', '6234567890', 'fieldofficer', 'active'),
('ckm@gmail.com', 'ckm', 'customer', 'active'),
('cms@gmail.com', 'cms', 'customer', 'active'),
('e@gmail.com', '1', 'customer', 'inactive'),
('mmt@gmail.com', 'MMT', 'customer', 'inactive'),
('nk@gmail.com', '9787890679', 'fieldofficer', 'active'),
('priya@gmail.com', '9495678965', 'fieldofficer', 'active'),
('s@gmail.com', '1', 'customer', 'inactive'),
('ssc@gmail.com', 'scc', 'customer', 'active'),
('sulthan@gmail.com', '123', 'customer', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `request_items`
--

DROP TABLE IF EXISTS `request_items`;
CREATE TABLE IF NOT EXISTS `request_items` (
  `req_item_id` int NOT NULL AUTO_INCREMENT,
  `req_id` int NOT NULL,
  `item_title` varchar(70) NOT NULL,
  `e_cat_id` int NOT NULL,
  `description` varchar(100) NOT NULL,
  `qty` int NOT NULL,
  `amount` int NOT NULL,
  PRIMARY KEY (`req_item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_items`
--

INSERT INTO `request_items` (`req_item_id`, `req_id`, `item_title`, `e_cat_id`, `description`, `qty`, `amount`) VALUES
(63, 25, 'keyboard', 4, 'fully damaged', 3, 125),
(64, 25, 'laptop', 3, 'broken display', 3, 500),
(66, 27, 'keyboard', 1, 'h', 4, 0),
(67, 27, 'keyboard', 1, 'h', 4, 0),
(68, 28, 'keyboard', 4, 'as', 1, 23),
(69, 29, 'laptop', 3, 'q2', 3, 345),
(70, 30, 'keyboard', 1, 'ggv', 1, 300),
(71, 27, 'v', 1, 'q', 1, 0),
(72, 31, 'a', 1, 'a', 1, 0),
(73, 32, 'h', 3, 'd', 1, 0),
(74, 33, 'computer', 4, 'b', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `schedule_employee`
--

DROP TABLE IF EXISTS `schedule_employee`;
CREATE TABLE IF NOT EXISTS `schedule_employee` (
  `sch_emp_id` int NOT NULL AUTO_INCREMENT,
  `req_id` int NOT NULL,
  `emp_id` int NOT NULL,
  `sch_date` date NOT NULL,
  `collected_date` date DEFAULT NULL,
  `sch_status` varchar(10) NOT NULL,
  PRIMARY KEY (`sch_emp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule_employee`
--

INSERT INTO `schedule_employee` (`sch_emp_id`, `req_id`, `emp_id`, `sch_date`, `collected_date`, `sch_status`) VALUES
(19, 25, 3, '2023-11-05', '2023-11-15', 'Completed'),
(20, 25, 4, '2023-11-05', '2023-11-21', 'Completed'),
(21, 25, 3, '2023-11-05', '2023-11-30', 'Completed'),
(22, 28, 4, '2023-11-06', '2023-11-15', 'Completed'),
(23, 29, 3, '2023-11-06', '2023-11-17', 'update'),
(24, 30, 3, '2023-11-07', '2023-11-21', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `selling_request`
--

DROP TABLE IF EXISTS `selling_request`;
CREATE TABLE IF NOT EXISTS `selling_request` (
  `request_id` int NOT NULL AUTO_INCREMENT,
  `comp_email` varchar(200) NOT NULL,
  `req_date` date NOT NULL,
  `req_status` varchar(10) NOT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `selling_request`
--

INSERT INTO `selling_request` (`request_id`, `comp_email`, `req_date`, `req_status`) VALUES
(25, 'cms@gmail.com', '2023-11-05', 'Completed'),
(27, 'cms@gmail.com', '2023-11-05', 'send'),
(28, 'ssc@gmail.com', '2023-11-06', 'Completed'),
(29, 'ckm@gmail.com', '2023-11-06', 'Updated'),
(30, 'ckm@gmail.com', '2023-11-06', 'Completed'),
(31, 'cms@gmail.com', '2023-11-07', 'send'),
(32, 'cms@gmail.com', '2023-11-07', 'send'),
(33, 'cms@gmail.com', '2023-11-07', 'send');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
