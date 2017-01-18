-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2017 at 01:55 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dab_wegentum`
--

-- --------------------------------------------------------

--
-- Table structure for table `tab_clients`
--

CREATE TABLE `tab_clients` (
  `int_client_id` int(11) NOT NULL,
  `txt_fname` varchar(150) NOT NULL,
  `txt_mname` varchar(100) DEFAULT NULL,
  `txt_lname` varchar(150) NOT NULL,
  `txt_address1` varchar(200) NOT NULL,
  `txt_address2` varchar(200) DEFAULT NULL,
  `txt_city` varchar(50) DEFAULT NULL,
  `txt_pincode` varchar(10) DEFAULT NULL,
  `txt_state` varchar(50) DEFAULT NULL,
  `txt_country` varchar(50) DEFAULT NULL,
  `dt_dob` date DEFAULT NULL,
  `txt_landline` varchar(20) DEFAULT NULL,
  `txt_cell_no` varchar(20) DEFAULT NULL,
  `txt_email` varchar(200) DEFAULT NULL,
  `txt_photo` varchar(200) DEFAULT NULL,
  `txt_signature_photo` varchar(200) DEFAULT NULL,
  `txt_pan_photo` varchar(200) DEFAULT NULL,
  `txt_id_photo` varchar(200) DEFAULT NULL,
  `txt_id_back_photo` varchar(200) NOT NULL,
  `txt_cheque_photo` varchar(255) NOT NULL,
  `txt_father_name` varchar(200) DEFAULT NULL,
  `txt_mother_name` varchar(200) DEFAULT NULL,
  `txt_gender` tinyint(4) DEFAULT NULL COMMENT '0=>Male,1=>Female',
  `txt_maritial_status` tinyint(4) DEFAULT NULL COMMENT '0=>Single,1=>Married',
  `txt_nationality` varchar(50) DEFAULT NULL,
  `txt_pan_no` varchar(25) DEFAULT NULL,
  `txt_annual_income` varchar(20) NOT NULL,
  `txt_nominee_name` varchar(200) DEFAULT NULL,
  `txt_nominee_relation` varchar(100) DEFAULT NULL,
  `txt_nominee_allocation` varchar(10) DEFAULT NULL,
  `txt_bank_name` varchar(150) DEFAULT NULL,
  `txt_bank_type` varchar(15) DEFAULT NULL,
  `txt_bank_acccount_no` varchar(30) DEFAULT NULL,
  `txt_bank_ifsc` varchar(15) DEFAULT NULL,
  `txt_bank_address` varchar(200) DEFAULT NULL,
  `txt_p_address1` varchar(100) DEFAULT NULL,
  `txt_p_address2` varchar(100) DEFAULT NULL,
  `txt_p_city` varchar(100) DEFAULT NULL,
  `txt_p_zip` varchar(20) DEFAULT NULL,
  `txt_p_state` varchar(50) DEFAULT NULL,
  `txt_p_country` varchar(50) DEFAULT NULL,
  `int_user_id` int(11) NOT NULL,
  `int_status` tinyint(4) NOT NULL,
  `int_unique_id` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab_clients`
--

INSERT INTO `tab_clients` (`int_client_id`, `txt_fname`, `txt_mname`, `txt_lname`, `txt_address1`, `txt_address2`, `txt_city`, `txt_pincode`, `txt_state`, `txt_country`, `dt_dob`, `txt_landline`, `txt_cell_no`, `txt_email`, `txt_photo`, `txt_signature_photo`, `txt_pan_photo`, `txt_id_photo`, `txt_id_back_photo`, `txt_cheque_photo`, `txt_father_name`, `txt_mother_name`, `txt_gender`, `txt_maritial_status`, `txt_nationality`, `txt_pan_no`, `txt_annual_income`, `txt_nominee_name`, `txt_nominee_relation`, `txt_nominee_allocation`, `txt_bank_name`, `txt_bank_type`, `txt_bank_acccount_no`, `txt_bank_ifsc`, `txt_bank_address`, `txt_p_address1`, `txt_p_address2`, `txt_p_city`, `txt_p_zip`, `txt_p_state`, `txt_p_country`, `int_user_id`, `int_status`, `int_unique_id`) VALUES
(139, 'rahul', 'kumar ', 'singh', 'ojjy', 'iuuytut', 'jhg', 'jgj', 'jhgjhg', 'ghjg', '2017-01-21', 'gjhgjg', 'jgj', 'gjg', 'upload/20170108205614.jpg', 'upload/20170108205614.jpg', 'kjhkjg', 'jhghj', 'gjh', 'ghjg', 'jhg', 'jghg', 0, 0, 'indian', 'kjhjkg', 'jjhgjg', 'jg', 'jg', 'jgj', 'hgj', 'gj', 'gjg', 'jgj', 'gj', 'gj', 'gj', 'jg', '88998', 'gjg', 'j', 0, 0, ''),
(131, 'jhjk hjkhk hkjhk', 'hjkhk', 'hkjhk', 'hkj', 'hkh', 'gjg', 'jg', 'jhgj', 'jhg', '2017-01-04', 'jgjg', 'jgj', 'gjhg', 'upload/20170108185208.jpg', 'jg', 'kjhj', 'kh', 'kjhkj', 'hhj', 'jk', 'kjh', 0, 0, 'other', '123456', 'kljhkj', 'hkjh', 'jkh', 'jkh', 'jkhk', 'hkh', 'kh', 'khk', 'hkh', 'kh', 'kh', 'hk', '66868', 'khk', 'kh', 0, 0, ''),
(114, 'ROHIT ', 'KUMAR ', 'SINGH', 'EWS 156 KABIR NAGAR DURGAKUND', 'DURGAKUND', 'VARANASI', '221005', 'UTTAR PRADESH', 'INDIA', '1991-12-20', '', '9918449477', 'ROHITKUMAR.S333@GMAIL.COM', 'uploads/clients/photo/11420161118121701.jpg', NULL, 'uploads/clients/pan/11420161118121625.jpg', 'uploads/clients/idproof/11420161118121757.jpg', 'uploads/clients/idproof/11420161118121901_back.jpg', 'uploads/clients/cheque/11420161118121950.jpg', 'ARUN KUMAR SINGH', 'MADHURI SINGH', 0, NULL, 'INDIAN', 'FLHPS9509D', '2.4 LAKH', 'MADHURI SINGH', 'MOTHER', '100', 'STATE BANK OF INDIA', 'SAVING', '33538798945', 'SBIN0008002', 'ASSI VARANASI', 'EWS 156 KABIR NAGAR DURGAKUND', 'DURGAKUND', 'VARANASI', NULL, 'UTTAR PRADESH', 'INDIA', 1, 1, 'WSRS114'),
(115, 'ASHISH ', 'KUMAR ', 'YADAV', 'B36/64 A-1 KABIR NAGAR', 'DURGAKUND', 'VARANASI', '221005', 'UTTAR PRADESH', 'INDIAN', '1992-12-26', '', '7523862012', 'ANSHUYADY@GMAIL.COM', '', NULL, '', '', '', '', 'ADITYA PRAKASH YADAV', 'BEENA YADAV', 0, NULL, 'INDIAN', 'AICPY6748H', '2.15 LAKH', 'BEENA YADAV', 'MOTHER', '100%', 'STATE BANK OF INDIA', 'SAVING', '33538868711', 'SBIN0008002', 'ASSI VARANASI', 'B36/64 A-1 KABIR NAGAR', 'DURGAKUND', 'VARANASI', NULL, 'UTTAR PRADESH', 'INDIAN', 1, 1, 'WSAY115'),
(124, 'rakesh ', 'singh', 'kumar', 'lalkuan aminabad lko', 'mumbai', 'lko', '226018', 'up', 'india', '2017-01-19', '768767', '666666', 'izhar@iul.ac.in', 'kjkjkoj', 'ojojo', 'oj', 'ojo', 'joj', 'oj', 'ojoj', 'oj', 0, 0, 'joj', 'oj', 'j', 'ojo', 'joj', 'j', 'jo', 'oj', 'oj', 'j', 'ojj', 'oj', 'oj', 'j', 'ojo', 'jo', 'oj', 0, 0, ''),
(133, 'jhjk', 'hjkhk', 'hkjhk', 'hkj', 'hkh', 'gjg', 'jg', 'jhgj', 'jhg', '2017-01-04', 'jgjg', 'jgj', 'gjhg', 'upload/20170108185409.jpg', 'jg', 'kjhj', 'kh', 'kjhkj', 'hhj', 'jk', 'kjh', 0, 0, 'other', 'j', 'kljhkj', 'hkjh', 'jkh', 'jkh', 'jkhk', 'hkh', 'kh', 'khk', 'hkh', 'kh', 'kh', 'hk', '66868', 'khk', 'kh', 0, 0, ''),
(135, 'kjhkjh', 'jkhkj', 'hkjh', 'kjh', 'kh', 'kjhkj', 'hkh', 'hhkjh', 'jklj', '2017-01-26', 'kh', 'khk', 'h', 'upload/20170108190012.jpg', 'upload/20170108190012.jpg', 'jh', 'jhghjg', 'jhg', 'jgj', 'gjg', 'jgj', 0, 0, 'other', 'oiuiou', 'iuyuiy', 'iuy', 'uiy', 'uiy', 'uiy', 'uiy', 'uiyijhjhfyt', 't', 'dtrrrrett', 'tr', 'etet', 'te', '65656', 'te', 'etre', 0, 0, ''),
(136, 'kjhkjh', 'jkhkj', 'hkjh', 'kjh', 'kh', 'kjhkj', 'hkh', 'hhkjh', 'jklj', '2017-01-26', 'kh', 'khk', 'h', 'upload/20170108190155.jpg', 'upload/20170108190155.jpg', 'jh', 'jhghjg', 'jhg', 'jgj', 'gjg', 'jgj', 0, 0, 'other', 'oiuiou', 'iuyuiy', 'iuy', 'uiy', 'uiy', 'uiy', 'uiy', 'uiyijhjhfyt', 't', 'dtrrrrett', 'tr', 'etet', 'te', '65656', 'te', 'etre', 0, 0, ''),
(142, 'yjky', 'u', 'u', 'uytytuy', 'rtyr', 'jhhg', 'jhg', 'ghjg', 'gjhghj', '2017-01-09', 'jh', 'jhgf', 'hgfhg', 'upload/20170109065708.jpg', 'upload/20170109065708.jpg', 'ykjytu', 'ut', 'utut', 'u', 'u', 'uytu', 0, 0, 'other', 'jjhkj', 'guyt', 'ui', 'yuyt', 'ut', 'uy', 'tuy', 'ur', 'uyr', 'u', 'yu', 'rur', 'tryt', '567575', 'ytry', 'yr', 0, 0, ''),
(143, 'ljlh', 'h;lh', 'hhh', 'h;h', ';h;', 'b,b,', 'v', 'fkf', ',b,', '2017-01-21', 'v', ',v,v', ',v,', 'Screenshot (32).png', 'Screenshot (32).png', 'Screenshot (32).png', 'Screenshot (32).png', 'Screenshot (32).png', 'Screenshot (32).png', 'hll', 'glgl', 0, 0, 'indian', 'kjjf', 'lgjl', 'glgl', 'glg', 'lgl', 'glg', 'lgl', 'gll', 'gl', 'glg', 'll', 'lgg', 'lgl', '22422', 'l', 'lgl', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tab_documents`
--

CREATE TABLE `tab_documents` (
  `int_user_id` int(11) NOT NULL,
  `txt_title` varchar(100) NOT NULL,
  `txt_description` varchar(255) NOT NULL,
  `Uploaded_File` varchar(150) NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `int_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab_documents`
--

INSERT INTO `tab_documents` (`int_user_id`, `txt_title`, `txt_description`, `Uploaded_File`, `TimeStamp`, `int_id`) VALUES
(21, 'Client', 'document', 'upload/20170113105629.jpg', '2017-01-13 05:26:29', 9),
(22, 'Client2', '123', 'upload/20170113105810.jpg', '2017-01-13 05:28:10', 9),
(23, 'Excel ', 'Data', 'upload/20170118102745.xlsx', '2017-01-18 04:57:45', 114),
(24, 'PDF', 'glglg', 'upload/20170118112947.pdf', '2017-01-18 05:59:47', 114);

-- --------------------------------------------------------

--
-- Table structure for table `tab_log`
--

CREATE TABLE `tab_log` (
  `int_log_id` bigint(20) NOT NULL,
  `txt_msg` varchar(225) NOT NULL,
  `dt_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `int_user_id` bigint(20) NOT NULL,
  `int_usertype` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab_log`
--

INSERT INTO `tab_log` (`int_log_id`, `txt_msg`, `dt_timestamp`, `int_user_id`, `int_usertype`) VALUES
(3, 'Employee Added', '2017-01-18 03:57:17', 1, 1),
(4, 'Employee Deleted', '2017-01-18 04:16:56', 1, 1),
(5, 'Client Deleted', '2017-01-18 04:24:50', 19, 2),
(6, 'Client Updated', '2017-01-18 04:26:43', 19, 2),
(7, 'Employee Deleted', '2017-01-18 04:27:39', 1, 1),
(8, 'Employee Deleted', '2017-01-18 04:27:41', 1, 1),
(9, 'Employee Deleted', '2017-01-18 04:27:43', 1, 1),
(10, 'Document Added', '2017-01-18 04:57:45', 114, 3),
(11, 'Document Added', '2017-01-18 05:59:47', 114, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tab_users`
--

CREATE TABLE `tab_users` (
  `int_user_id` bigint(20) NOT NULL,
  `txt_name` varchar(100) DEFAULT NULL,
  `txt_email` varchar(255) DEFAULT NULL,
  `txt_cell_no` varchar(20) DEFAULT NULL,
  `txt_password` varchar(100) DEFAULT NULL,
  `txt_designation` varchar(40) DEFAULT NULL,
  `txt_address` varchar(100) DEFAULT NULL,
  `int_last_package` float DEFAULT NULL,
  `txt_last_company` varchar(100) DEFAULT NULL,
  `txt_gender` varchar(20) DEFAULT NULL,
  `int_user_group` int(11) DEFAULT NULL,
  `dt_added` date DEFAULT NULL,
  `upload_img` varchar(500) NOT NULL,
  `auth_key` varchar(100) NOT NULL,
  `int_unique_id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab_users`
--

INSERT INTO `tab_users` (`int_user_id`, `txt_name`, `txt_email`, `txt_cell_no`, `txt_password`, `txt_designation`, `txt_address`, `int_last_package`, `txt_last_company`, `txt_gender`, `int_user_group`, `dt_added`, `upload_img`, `auth_key`, `int_unique_id`) VALUES
(1, 'Debashish Khamaru', 'debashish@wegentum.com', '9839988099', '96e79218965eb72c92a549dd5a330112', 'admin', NULL, NULL, NULL, 'male', 1, '2016-09-19', '20170118132618.JPG', 'AFTHDJHGGCGFDFR75674653D', 'DKWA01'),
(19, 'Vikrant', 'ervik@gmail.com', '7256656665', 'a9b7ba70783b617e9998dc4dd82eb3c5', 'JE', 'Alambagh', 1.8, 'Indoways', 'Male', 2, '2017-01-09', '20170117113909.JPG', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tab_clients`
--
ALTER TABLE `tab_clients`
  ADD PRIMARY KEY (`int_client_id`);

--
-- Indexes for table `tab_documents`
--
ALTER TABLE `tab_documents`
  ADD PRIMARY KEY (`int_user_id`);

--
-- Indexes for table `tab_log`
--
ALTER TABLE `tab_log`
  ADD PRIMARY KEY (`int_log_id`);

--
-- Indexes for table `tab_users`
--
ALTER TABLE `tab_users`
  ADD PRIMARY KEY (`int_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tab_clients`
--
ALTER TABLE `tab_clients`
  MODIFY `int_client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;
--
-- AUTO_INCREMENT for table `tab_documents`
--
ALTER TABLE `tab_documents`
  MODIFY `int_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tab_log`
--
ALTER TABLE `tab_log`
  MODIFY `int_log_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tab_users`
--
ALTER TABLE `tab_users`
  MODIFY `int_user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
