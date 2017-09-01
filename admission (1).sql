-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2017 at 03:48 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `edudetails`
--

CREATE TABLE `edudetails` (
  `grad_xam` varchar(30) NOT NULL,
  `grad_stream` varchar(30) NOT NULL,
  `grad_univ` varchar(30) NOT NULL,
  `grad_yop` varchar(30) NOT NULL,
  `grad_marks` int(11) NOT NULL,
  `pgrad_xam` varchar(30) NOT NULL,
  `pgrad_stream` varchar(30) NOT NULL,
  `pgrad_univ` varchar(30) NOT NULL,
  `pgrad_yop` int(11) NOT NULL,
  `pgrad_marks` int(11) NOT NULL,
  `othr_xam` varchar(30) NOT NULL,
  `othr_stream` varchar(30) NOT NULL,
  `othr_univ` varchar(30) NOT NULL,
  `othr_yop` int(11) NOT NULL,
  `othr_marks` int(11) NOT NULL,
  `course_applied` varchar(30) NOT NULL,
  `regId` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `edudetails`
--

INSERT INTO `edudetails` (`grad_xam`, `grad_stream`, `grad_univ`, `grad_yop`, `grad_marks`, `pgrad_xam`, `pgrad_stream`, `pgrad_univ`, `pgrad_yop`, `pgrad_marks`, `othr_xam`, `othr_stream`, `othr_univ`, `othr_yop`, `othr_marks`, `course_applied`, `regId`) VALUES
('BE', 'CSE', 'BATU', '2018', 99, 'MS', 'CSE', 'CALIFORNIA', 2020, 98, 'CERTIFICATE IN', 'CSE', 'ISALAMABAD', 2030, 50, 'PHD', ''),
('BE', 'CSE', 'SOL', '2012', 88, 'MS', 'CSE', 'NEW', 2030, 55, '', '', '', 0, 0, 'PHD', ''),
('', '', '', '', 0, '', '', '', 0, 0, '', '', '', 0, 0, '', ''),
('', '', '', '', 0, '', '', '', 0, 0, '', '', '', 0, 0, '', ''),
('', '', '', '', 0, '', '', '', 0, 0, '', '', '', 0, 0, '', ''),
('', '', '', '', 0, '', '', '', 0, 0, '', '', '', 0, 0, '', ''),
('', '', '', '', 0, '', 'DF', '', 0, 0, '', '', '', 0, 0, 'MSC(OP)', ''),
('', '', '', '', 0, '', 'DF', '', 0, 0, '', '', '', 0, 0, 'MSC(OP)', ''),
('', '', '', '', 0, '', '', '', 0, 0, '', '', '', 0, 0, '', ''),
('', '', '', '', 0, '', '', '', 0, 0, '', '', '', 0, 0, '', ''),
('', '', '', '', 0, '', '', '', 0, 0, '', '', '', 0, 0, '', ''),
('', '', '', '', 0, '', 'DF', '', 0, 0, '', '', '', 0, 0, 'MSC(OP)', ''),
('BSc', 'GGG', 'JHJJJ', '444', 47, 'MS', 'MM', 'NNN', 55, 55, 'DOEACCA', 'JJJ', 'JJ', 555, 88, 'MSC(OP)', ''),
('BSc', 'NN', 'MM', '55', 55, 'MS', 'NN', 'MM', 22, 55, 'DOEACCA', 'MM', 'K', 44, 44, 'MSC(OP)', ''),
('BSc', 'HH', 'HH', '88', 99, 'MS', 'MM', 'JJ', 99, 4, 'DOEACCA', 'GG', 'JJ', 8, 96, 'MSC(OP)', '330434011'),
('BScCS', 'VCCV', 'HHH', '777', 88, 'MS', 'HH', 'JJ', 255, 66, 'DOEACCA', 'HJJ', 'UU', 5252, 66, 'MSC(OP)', '326478857'),
('BScEngg', 'SCIENCE', 'SB', '2132', 88, 'ME', 'FFG', 'DFF', 1332, 88, 'PGDCS', 'DFDF', 'FFD', 2343, 97, 'MSC(CHEM)', '122556185');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `regId` varchar(30) NOT NULL,
  `dtime` date NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`firstname`, `lastname`, `email`, `username`, `password`, `regId`, `dtime`, `userid`) VALUES
('Rushabh', 'Phadkule', 'rph0@gmail.com', 'rp1', 'rp', '122556185', '2017-07-17', 11),
('xyz', 'qqq', 'aaa@gmail.com', 'zzz', '123', '221723438', '2017-07-16', 7),
('Rohan', 'Pawar', 'rohan@gmail.com', 'Rohan', '1234', '236202975', '2017-07-16', 4),
('Biru', 'Patil', 'Patil@gmail.com', 'Patlya', '1234', '317511085', '2017-07-15', 3),
('aaaa', 'qq', 'sss@gmail.com', 'onkar', '123', '326478857', '2017-07-17', 10),
('fhn', 'kn', 'df@gmail.com', 'aaa', '123', '330434011', '2017-07-15', 1),
('B', 'P', 'patil@gmail.com', 'patil', '1234', '388359471', '2017-07-16', 5),
('aa', 'ss', 'dd@gmail.com', 'aaa', '123', '418339384', '2017-07-16', 8),
('Rohan', 'Pawar', 'Rohan@gmail.com', 'Rohnation', '1234', '740118228', '2017-07-15', 2),
('AA', 'BB', 'CC@gmail.com', 'ABC', '456', '810247357', '2017-07-16', 6),
('Akshay', 'Tambake', 'akshay@gmail.com', 'akshay90', '1234', '814161112', '2017-07-17', 9),
('RY', 'etr', 'ro@gmail.com', 'er', 'er', '919114142', '2017-07-17', 12);

-- --------------------------------------------------------

--
-- Table structure for table `pdetails`
--

CREATE TABLE `pdetails` (
  `fullname` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `Mstatus` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `opt_cat` varchar(15) NOT NULL,
  `mname` varchar(15) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `religion` varchar(15) NOT NULL,
  `address` varchar(40) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pincode` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `regId` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdetails`
--

INSERT INTO `pdetails` (`fullname`, `age`, `Mstatus`, `gender`, `opt_cat`, `mname`, `fname`, `religion`, `address`, `state`, `pincode`, `email`, `mobile`, `regId`) VALUES
('ABC', 33, 'Single', 'MALE', '>>GENERAL', 'FG', 'N', '3', '\r\n	 SOLAPUR\r\n', 'ANDAMAN AND NICOBAR', 1122, 'bbb@gmail.com', '1234567890', '236202975'),
('AZA', 55, 'Single', 'MALE', '>>GENERAL', 'MM', 'BB', '1', '\r\n	 \r\n', 'ANDAMAN AND NICOBAR', 855, 'ss@gmail,com', '', '388359471'),
('AZA', 55, 'Single', 'MALE', '>>GENERAL', 'MM', 'BB', '1', '\r\n	 \r\n', 'ANDAMAN AND NICOBAR', 855, 'ss@gmail,com', '', '388359471'),
('AAA', 11, 'Single', 'MALE', 'GENERAL', 'AA', 'NNN', '1', 'VVV\r\n	 \r\n', 'ANDAMAN AND NICOBAR', 44, 'bb@gmail.com', '777', '221723438'),
('SSS', 88, 'Single', 'MALE', 'GENERAL', 'MM', 'NN', '1', 'HHH\r\n	 \r\n', 'ANDAMAN AND NICOBAR', 877, 'ddd@gmail.com', '85663', '330434011'),
('AA', 22, 'Single', 'MALE', 'GENERAL', 'HH', 'HH', '1', '\r\n	 \r\nRSDGF', 'ANDAMAN AND NICOBAR', 455, 'bdfg@gmail.com', '456789', '326478857'),
('RUSHABH P', 21, 'Single', 'MALE', 'GENERAL', 'SA', 'DF', '4', '\r\n	 \r\nDFG', 'MAHARASHTRA', 411019, 'rphadkule', '', '122556185'),
('AA', 22, 'Single', 'MALE', 'GENERAL', 'SS', 'A', '1', 'DFGHJ\r\n	 \r\n', 'MAHARASHTRA', 11, 'aaa@gmail.com', '', '<br />\r\n<b>Noti');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `regId` varchar(10) DEFAULT NULL,
  `photo` varchar(50) NOT NULL,
  `sign` varchar(30) NOT NULL,
  `draft` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`regId`, `photo`, `sign`, `draft`) VALUES
('', '', '', ''),
('740118228', 'Screenshot (7).png', 'Screenshot (2).png', 'Screenshot (6).png'),
('', '', '', ''),
('740118228', 'Screenshot (7).png', 'Screenshot (2).png', 'Screenshot (6).png'),
('317511085', 'Screenshot (2).png', 'Screenshot (3).png', 'Screenshot (4).png'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('388359471', 'Screenshot (2).png', 'Screenshot (3).png', 'Screenshot (4).png'),
('388359471', 'Screenshot (2).png', 'Screenshot (3).png', 'Screenshot (4).png'),
('', 'Screenshot (6).png', 'Screenshot (7).png', 'Screenshot (8).png'),
('418339384', 'Screenshot (5).png', 'Screenshot (7).png', 'Screenshot (12).png'),
('326478857', 'Screenshot (2).png', 'Screenshot (3).png', 'Screenshot (4).png'),
('122556185', 'Screenshot (2).png', 'Screenshot (7).png', 'Screenshot (7).png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`regId`),
  ADD UNIQUE KEY `userid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
