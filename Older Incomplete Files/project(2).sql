-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 20, 2010 at 01:35 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `month` varchar(12) NOT NULL COMMENT 'this is the field used to distinguish the monthly details of each employee',
  `year` int(4) NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  `emp_no` varchar(15) NOT NULL,
  `emp_desig` varchar(255) NOT NULL,
  `emp_category` varchar(255) NOT NULL,
  `emp_bankacno` varchar(255) NOT NULL DEFAULT '0',
  `pen_sch` varchar(4) NOT NULL DEFAULT 'nps',
  `pay_band` varchar(255) DEFAULT NULL,
  `basic_pay` float(20,2) NOT NULL DEFAULT '0.00',
  `da` float(20,2) NOT NULL DEFAULT '0.00',
  `hra` float(20,2) NOT NULL DEFAULT '0.00',
  `gpf` float(20,2) NOT NULL DEFAULT '0.00',
  `bank_loan` float(20,2) NOT NULL DEFAULT '0.00',
  `bank_name` varchar(255) DEFAULT NULL,
  `grade_pay` float(20,2) NOT NULL DEFAULT '0.00',
  `gpfloan` float(20,2) NOT NULL DEFAULT '0.00',
  `telephone` float(20,2) NOT NULL DEFAULT '0.00',
  `personal_pay` float(20,2) NOT NULL DEFAULT '0.00',
  `nps` float(20,2) NOT NULL DEFAULT '0.00',
  `h_loan` float(20,2) NOT NULL DEFAULT '0.00',
  `other_allow` float(20,2) NOT NULL DEFAULT '0.00',
  `npsloan` float(20,2) NOT NULL DEFAULT '0.00',
  `c_loan` float(20,2) NOT NULL DEFAULT '0.00',
  `wash_allow` float(20,2) NOT NULL DEFAULT '0.00',
  `lic` float(20,2) NOT NULL DEFAULT '0.00',
  `h_rent` float(20,2) NOT NULL DEFAULT '0.00',
  `convey_allow` float(20,2) NOT NULL DEFAULT '0.00',
  `rds` float(20,2) NOT NULL DEFAULT '0.00',
  `g_rent` float(20,2) NOT NULL DEFAULT '0.00',
  `tpt` float(20,2) NOT NULL DEFAULT '0.00',
  `gis` float(20,2) NOT NULL DEFAULT '0.00',
  `electricity` float(20,2) NOT NULL DEFAULT '0.00',
  `lib_incen` float(20,2) NOT NULL DEFAULT '0.00',
  `association` float(20,2) NOT NULL DEFAULT '0.00',
  `w_charge` float(20,2) NOT NULL DEFAULT '0.00',
  `relief` float(20,2) NOT NULL DEFAULT '0.00',
  `recovery` float(20,2) NOT NULL DEFAULT '0.00',
  `m_rent` float(20,2) NOT NULL DEFAULT '0.00',
  `mandir` float(20,2) NOT NULL DEFAULT '0.00',
  `f_rent` float(20,2) NOT NULL DEFAULT '0.00',
  `vbill` float(20,2) NOT NULL DEFAULT '0.00',
  `i_tax` float(20,2) NOT NULL DEFAULT '0.00',
  `v_advance` float(20,2) NOT NULL DEFAULT '0.00',
  `r_stamp` float(20,2) NOT NULL DEFAULT '0.00',
  `w_advance` float(20,2) NOT NULL DEFAULT '0.00',
  `e_pf_subs` float(20,2) NOT NULL DEFAULT '0.00',
  `f_advance` float(20,2) NOT NULL DEFAULT '0.00',
  `pf_contri` float(20,2) NOT NULL DEFAULT '0.00',
  `medicare` float(20,2) NOT NULL DEFAULT '0.00',
  `gross_salary` float(20,2) NOT NULL DEFAULT '0.00',
  `total_dedn` float(20,2) NOT NULL DEFAULT '0.00',
  `net_pay` float(20,2) NOT NULL DEFAULT '0.00',
  `supp_allow` float(20,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `month` (`month`,`year`,`emp_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='this table will be a log of all the entrys made to the datab' AUTO_INCREMENT=38 ;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `month`, `year`, `emp_name`, `emp_no`, `emp_desig`, `emp_category`, `emp_bankacno`, `pen_sch`, `pay_band`, `basic_pay`, `da`, `hra`, `gpf`, `bank_loan`, `bank_name`, `grade_pay`, `gpfloan`, `telephone`, `personal_pay`, `nps`, `h_loan`, `other_allow`, `npsloan`, `c_loan`, `wash_allow`, `lic`, `h_rent`, `convey_allow`, `rds`, `g_rent`, `tpt`, `gis`, `electricity`, `lib_incen`, `association`, `w_charge`, `relief`, `recovery`, `m_rent`, `mandir`, `f_rent`, `vbill`, `i_tax`, `v_advance`, `r_stamp`, `w_advance`, `e_pf_subs`, `f_advance`, `pf_contri`, `medicare`, `gross_salary`, `total_dedn`, `net_pay`, `supp_allow`) VALUES
(1, '', 0, 'kper', '21', 'sptd', 'A', '0', 'nps', NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(13, '09', 2010, 'Sh. Prem Lal', '400053', 'JS', 'A', '0', 'gpf', NULL, 18280.00, 6398.00, 0.00, 1828.00, 0.00, '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 100.00, 223.00, 1080.00, 175.00, 0.00, 0.00, 20.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 200.00, 0.00, 1.00, 800.00, 7000.00, 0.00, 0.00, 0.00, 25758.00, 10347.00, 15411.00, 0.00),
(15, '10', 2010, 'Mukesh Chaudhary', '400123', 'PTI', 'C', '0', 'nps', NULL, 12130.00, 4246.00, 0.00, 0.00, 0.00, 'SBi', 0.00, 0.00, 0.00, 150.00, 1638.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 217.00, 0.00, 900.00, 451.00, 1080.00, 175.00, 637.00, 0.00, 20.00, 1.00, 0.00, 0.00, 2.00, 31.00, 0.00, 0.00, 0.00, 0.00, 1.00, 0.00, 6500.00, 0.00, 0.00, 0.00, 17606.00, 10573.00, 7033.00, 0.00),
(18, '09', 2010, 'Spider Man', '1', 'Superhero', 'A', '0', 'gpf', '15-1500', 123.00, 43.00, 0.00, 12.00, 0.00, '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 166.00, 12.00, 154.00, 0.00),
(19, '09', 2010, 's1', '200001', '21', '', '0', 'nps', NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(22, '09', 2010, 's1', '7890', '', '', '0', 'nps', NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(25, '10', 2010, 's3', '7890', '', '', '0', 'nps', NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(26, '09', 2010, 'Arinjay Jain', '08120013', 'Webmaster', 'A', '0', 'nps', '7500-25000', 10000.00, 4200.00, 0.00, 0.00, 0.00, '', 2000.00, 0.00, 1000.00, 0.00, 1620.00, 0.00, 0.00, 0.00, 0.00, 0.00, 100.00, 200.00, 0.00, 0.00, 200.00, 0.00, 175.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 500.00, 0.00, 0.00, 2000.00, 0.00, 0.00, 0.00, 10.00, 16200.00, 5805.00, 10395.00, 0.00),
(27, '09', 2010, 'Pranav Dhanpal', '061513', 'Asso. Professor', 'A', '0', 'nps', '200000-500000', 250000.00, 96250.00, 0.00, 0.00, 0.00, '', 25000.00, 0.00, 10000.00, 5000.00, 37125.00, 0.00, 0.00, 0.00, 10000.00, 0.00, 500.00, 5000.00, 2000.00, 0.00, 2000.00, 0.00, 175.00, 10000.00, 0.00, 20.00, 10.00, 0.00, 0.00, 2.00, 100.00, 0.00, 5000.00, 50000.00, 0.00, 2.00, 5000.00, 500.00, 2000.00, 0.00, 20000.00, 378250.00, 157434.00, 220816.00, 0.00),
(37, '01', 2010, 'Pranav Dhanpal', '061513', 'Asso. Professor', 'A', '0', 'nps', NULL, 5191.00, 192714.20, 0.00, 0.00, 161.00, '11', 545421.00, 0.00, 0.00, 16.00, 74332.62, 16.00, 0.00, 0.00, 61.00, 616.00, 161.00, 61.00, 61.00, 61.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 74332.62, 0.00, 744019.19, 74853.62, 669165.56, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `empdetails`
--

CREATE TABLE IF NOT EXISTS `empdetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_name` varchar(255) NOT NULL,
  `emp_no` varchar(15) NOT NULL,
  `emp_desig` varchar(255) NOT NULL,
  `emp_bankacno` varchar(255) NOT NULL DEFAULT '0',
  `date_birth` date NOT NULL,
  `date_appoint` date NOT NULL,
  `emp_jis` date DEFAULT NULL,
  `emp_category` varchar(255) NOT NULL,
  `pen_sch` varchar(4) NOT NULL DEFAULT 'nps',
  `res_status` varchar(20) DEFAULT NULL,
  `pay_band` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `emp_no` (`emp_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `empdetails`
--

INSERT INTO `empdetails` (`id`, `emp_name`, `emp_no`, `emp_desig`, `emp_bankacno`, `date_birth`, `date_appoint`, `emp_jis`, `emp_category`, `pen_sch`, `res_status`, `pay_band`) VALUES
(1, 'kper', '21', 'sptd', '', '1985-09-14', '2008-09-14', '0000-00-00', 'D', 'nps', 'residing', '2000-10000'),
(7, 'Spider Man', '1', 'Superhero', '1', '1970-06-06', '1999-05-05', '0000-00-00', 'A', 'gpf', 'residing', '15-1500'),
(8, 'Spider Mans', '2', 'Superheros', '12', '1970-06-06', '1999-05-05', '0000-00-00', 'A', 'gpf', 'residing', '15-5000'),
(10, 'Sh. Prem Lal', '400053', 'JS', '10841485143', '1956-11-01', '1977-05-05', '0000-00-00', 'D', 'gpf', 'non-residing', NULL),
(11, 'Mukesh Chaudhary', '400123', 'PTI', '23148542231', '1970-06-06', '1999-05-05', '0000-00-00', 'C', 'nps', 'residing', NULL),
(16, 'Arinjay Jain', '08120013', 'Webmaster', '123456789', '2010-09-09', '2010-09-09', '2010-09-09', 'F', 'gpf', 'non-residing', '7500-25000'),
(17, 'Pranav Dhanpal', '061513', 'Asso. Professor', '12345678910', '1988-10-29', '2010-09-09', '2010-07-07', 'A', 'nps', 'residing', '250000-500000');

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE IF NOT EXISTS `payroll` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `month` varchar(12) NOT NULL COMMENT 'this is the field used to distinguish the monthly details of each employee',
  `emp_no` varchar(15) NOT NULL,
  `emp_bankacno` varchar(255) DEFAULT NULL,
  `emp_category` varchar(255) NOT NULL,
  `basic_pay` int(11) DEFAULT NULL,
  `gpf` int(11) DEFAULT NULL,
  `bank_loan` int(11) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `grade_pay` int(11) DEFAULT NULL,
  `gpfloan` int(11) DEFAULT NULL,
  `telephone` int(11) DEFAULT NULL,
  `personal_pay` int(11) DEFAULT NULL,
  `nps` int(11) DEFAULT NULL,
  `h_loan` int(11) DEFAULT NULL,
  `other_allow` int(11) DEFAULT NULL,
  `npsloan` int(11) DEFAULT NULL,
  `c_loan` int(11) DEFAULT NULL,
  `wash_allow` int(11) DEFAULT NULL,
  `lic` int(11) DEFAULT NULL,
  `h_rent` int(11) DEFAULT NULL,
  `convey_allow` int(11) DEFAULT NULL,
  `rds` int(11) DEFAULT NULL,
  `g_rent` int(11) DEFAULT NULL,
  `tpt` int(11) DEFAULT NULL,
  `gis` int(11) DEFAULT NULL,
  `electricity` int(11) DEFAULT NULL,
  `lib_incen` int(11) DEFAULT NULL,
  `association` int(11) DEFAULT NULL,
  `w_charge` int(11) DEFAULT NULL,
  `relief` int(11) DEFAULT NULL,
  `recovery` int(11) DEFAULT NULL,
  `m_rent` int(11) DEFAULT NULL,
  `mandir` int(11) DEFAULT NULL,
  `f_rent` int(11) DEFAULT NULL,
  `vbill` int(11) DEFAULT NULL,
  `i_tax` int(11) DEFAULT NULL,
  `v_advance` int(11) DEFAULT NULL,
  `r_stamp` int(11) DEFAULT NULL,
  `w_advance` int(11) DEFAULT NULL,
  `e_pf_subs` int(11) DEFAULT NULL,
  `f_advance` int(11) DEFAULT NULL,
  `m_recovery` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `emp_id` (`emp_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='this table will be a log of all the entrys made to the datab' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `payroll`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='this table will be used for the purpose of login in the proj' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fname`, `lname`, `post`) VALUES
(1, '1', '1', '1', '1', '1'),
(2, '2', '2', '2', '2', '2');

-- --------------------------------------------------------

--
-- Stand-in structure for view `user_view`
--
CREATE TABLE IF NOT EXISTS `user_view` (
`username` varchar(50)
,`password` varchar(50)
);
-- --------------------------------------------------------

--
-- Structure for view `user_view`
--
DROP TABLE IF EXISTS `user_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_view` AS select `user`.`username` AS `username`,`user`.`password` AS `password` from `user`;
