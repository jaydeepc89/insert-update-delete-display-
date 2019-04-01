-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2019 at 05:32 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `address` varchar(150) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `education` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirmpassword` varchar(50) NOT NULL,
  `hobby` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `name`, `email`, `mobile`, `address`, `gender`, `education`, `password`, `confirmpassword`, `hobby`) VALUES
(2, 'jaydeep', 'jaydeep@gmail.com', '9033666666', '    				    				Bhavnagar Gujrat    			    			    			', 'male', 'mca', 'f1ec0aa981a4fd4b27656c05841bafe3', 'f1ec0aa981a4fd4b27656c05841bafe3', 'reading,cricket'),
(4, 'rajdeep', 'rajdeep@gmail.com', '7878414141', 'Dholera Ahmedabad Gujrat', 'male', 'mca', '71b3b26aaa319e0cdf6fdb8429c112b0', '71b3b26aaa319e0cdf6fdb8429c112b0', 'reading,cricket'),
(5, 'krishna', 'krishna@gmail.com', '8460172030', '    				Kutch Gujrat    			', 'female', 'mca', 'a9b3ebcbfceb48e9d41ac5c500392cfe', 'a9b3ebcbfceb48e9d41ac5c500392cfe', 'reading,cricket'),
(6, 'dipak', 'dipakbhatt@gmail.com', '8866728896', '    				Bhavangar    			', 'male', 'mca', '604f671a98719e50df034629fa13482d', '604f671a98719e50df034629fa13482d', 'reading'),
(7, 'Monika', 'monika@gmail.com', '7894567891', '    				Rajkot Gujrat    			    			', 'female', 'mca', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', 'reading,swiming'),
(8, 'takshay', 'takshay@gmail.com', '9909999099', 'Bhavnagar Gujrat', 'male', 'mca', '9fab6755cd2e8817d3e73b0978ca54a6', '9fab6755cd2e8817d3e73b0978ca54a6', 'reading,cricket'),
(9, 'jaydeep', 'jay@gmail.com', '8794561237', 'bhvanagar', 'male', 'bca', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', 'reading,cricket'),
(10, 'jayveer', 'jayveer143@gmail.com', '9099662256', 'Bhavnagar Gujrat    			', 'male', 'mca', 'eb24a158164a1b12af2bab4fd7ebeadc', 'eb24a158164a1b12af2bab4fd7ebeadc', 'reading,cricket'),
(11, 'jaydeep', 'chudasama@gmail.com', '9099662256', 'Bhavnagar', 'male', 'mca', '5166308c60c344bd6a330e7703301e1c', '5166308c60c344bd6a330e7703301e1c', 'reading,cricket');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
