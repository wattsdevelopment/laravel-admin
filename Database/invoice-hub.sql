-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2017 at 09:46 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invoice-hub`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `clientname` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `balance` varchar(50) NOT NULL,
  `active` varchar(120) NOT NULL,
  `options` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`clientname`, `email`, `phone`, `balance`, `active`, `options`) VALUES
('\0', '\0', '88', '\0', 'yes', ''),
('michael', 'michael@invoicehub.com', '0934983459735', '£50.00', 'Yes', ''),
('ggh', 'gh', 'gh', 'gh', 'gh', 'gh'),
('bill', 'bill@test.co.uk', '01325', '100', 'no', 'n/a');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `status` varchar(120) NOT NULL,
  `invoicenumber` varchar(120) NOT NULL,
  `date` date NOT NULL,
  `due` date NOT NULL,
  `client` varchar(120) NOT NULL,
  `summary` text NOT NULL,
  `balance` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`status`, `invoicenumber`, `date`, `due`, `client`, `summary`, `balance`) VALUES
('\0', '1', '2017-04-24', '2017-04-27', '', 'Tank payment', '1500'),
('\0', '', '2017-04-24', '2017-04-27', '', '\0', '1500'),
('\0', '', '2017-04-24', '2017-04-27', '', '\0', 'Ü'),
('draft', '0001', '2017-04-24', '2017-04-27', '', 'Tanks', '1500'),
('\0', '', '2017-04-24', '2017-04-28', '', '\0', 'd'),
('sent', '0002', '2017-04-24', '2017-04-28', '', 'profile', ''),
('overdue', '0003', '2017-04-24', '2017-04-30', '', 'Recruitment', '1890'),
('collected', '0004', '2017-04-24', '2017-04-30', '', 'Finance', 'paid'),
('werwer', 'ewrwer', '2017-05-10', '2017-05-09', '', 'werwer', 'werwer');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `clientname` varchar(120) NOT NULL,
  `invoice` varchar(120) NOT NULL,
  `method` varchar(120) NOT NULL,
  `amount` varchar(120) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `status` text NOT NULL,
  `quotenumber` text NOT NULL,
  `date` date NOT NULL,
  `expires` date NOT NULL,
  `summary` text NOT NULL,
  `total` text NOT NULL,
  `invoiced` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`status`, `quotenumber`, `date`, `expires`, `summary`, `total`, `invoiced`, `email`) VALUES
('draft', '0001', '2017-04-24', '2017-06-21', 'wordpress website design', '500', 'yes', ''),
('sent', '0002', '2017-04-24', '2017-07-13', 'software design', '25000', 'no', ''),
('rejected', '0003', '2017-04-24', '2017-04-29', 'Rejected due to expense', '14000', 'no', ''),
('accepted', '0004', '2017-04-17', '2017-04-24', 'Accepted the quote - waiting for invoice to be sent', '18000', 'no', ''),
('test', 'test', '2017-05-09', '2017-05-09', 'test', 'test', '', ''),
('test', '0005', '2017-05-01', '2017-05-01', 'test', 'test', 'test', 'm.a.watts@live.co.uk'),
('efefef', 'efefaef', '2017-05-12', '2017-05-10', 'efef', 'efef', 'efef', 'm.a.watts@live.co.uk'),
('', '', '0000-00-00', '0000-00-00', '', '', '', ''),
('', '', '0000-00-00', '0000-00-00', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(120) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('\0', '\0'),
('michael', 'michael');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
