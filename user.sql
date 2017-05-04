-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2017 at 09:14 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `software`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(40) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `name`, `image`) VALUES
(1, 'rishabh', 'asfasfasf', 'rishabh@gmail.com', 'Rishabh', ''),
(6, 'sfsdf', '20838a8df7cc0babd745c7af4b7d94e2', 'sdfdsf@fgsg.com', 'dsfgdsf', ''),
(8, 'rishabh1234', '61cd8e7b46aaab3581ba282bfd474a75', 'rishab12h@gmail.com', 'Rishabh', ''),
(9, 'dsgsdgs', '06a53dff852b2da2eea823e75450c4af', 'sdgsd@sdfghsd.com', 'sgsdgdsg', ''),
(10, 'rishshdfas', '0853b26115169bc48e512a3901955bd8', 'sdfdsf@dgd.com', 'R', ''),
(14, 'rish', '6b7e136a1307176da0149af46b694d9e', 'rish@gmail.com', 'rish', 'upload/images/rish.jpg'),
(15, 'risha', '9c05dd5bb434d8f313650d1b0fa7c556', 'risha@gmail.com', 'risha', 'upload/images/risha.jpg'),
(16, 'anubhav1006', 'a0098ee20a6d22a2e29d73dbb2da696a', 'aj1006.aj@gmail.com', 'Anubhav Jha', 'upload/images/anubhav1006.jpg'),
(17, '123', '202cb962ac59075b964b07152d234b70', 'aj1006.aj@gmail.com', 'Anubhav Jha', 'upload/images/123.jpg'),
(18, 'anubhav', '81dc9bdb52d04dc20036dbd8313ed055', 'aj1006.aj@gmail.com', 'Anubhav Jha', 'upload/images/anubhav.jpg'),
(19, 'ankit', '202cb962ac59075b964b07152d234b70', 'ankit@abc.com', 'Ankit', 'upload/images/ankit.jpg'),
(20, 'abcd', '202cb962ac59075b964b07152d234b70', 'adfvcasv@gmail.com', 'Abcd', 'upload/images/abcd.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
