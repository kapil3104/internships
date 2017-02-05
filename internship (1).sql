-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2017 at 02:24 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internship`
--

-- --------------------------------------------------------

--
-- Table structure for table `available_internship`
--

CREATE TABLE `available_internship` (
  `org_name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `interview_type` varchar(50) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `content` mediumtext NOT NULL,
  `id_no` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `available_internship`
--

INSERT INTO `available_internship` (`org_name`, `location`, `type`, `interview_type`, `duration`, `salary`, `content`, `id_no`) VALUES
('', 'Mumbai', 'Remote', 'In Campus', '6 months', '15,000', 'This is the best internship around.', 1),
('Google Internship', 'Delhi', 'Regular', 'On campus', '6 Months', '15,000', 'This is the best internship available for b.tech students.', 2),
('Facebook Internship', 'Mumbai', 'Work From home', 'On campus', '6 months', '15,000', 'Facebook is looking for our developers team, we are interested in those candidates who are good in php and fql(facebook query).', 3),
('asdlkj', 'lksdjfl', 'klfasjfdlj', 'lksjfdlj', 'lkasjfls', 'lkasjflsk', 'lksdjfl', 4),
('asdlkj', 'lksdjfl', 'klfasjfdlj', 'lksjfdlj', 'lkasjfls', 'lkasjflsk', 'lksdjfl', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `mob_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `name`, `pass`, `mob_no`) VALUES
('asdCZX', 'zcxZC', 'aadC', 'af798a403988443d2d9f51e3fce75c92'),
('dfgdsda', 'asfsdf', 'sdfsa', '57fb6ba460f59d8618f76e98b3d59c30'),
('dfgsdg', 'sdfgsw', 'asdfsf', '08c6a51dde006e64aed953b94fd68f0c'),
('dfgsdgf', 'asfasdfa', 'sdgg', 'f970e2767d0cfe75876ea857f92e319b'),
('dgsas', 'sfsfsaf', 'gdas', '83eff957624f46d8b5c0d0a86d92bcda'),
('gdsf', 'asdfsa', 'gfasdf', '6226f7cbe59e99a90b5cef6f94f966fd'),
('htrwet', 'asdfgd', 'dfs', 'c143757bb591547f4e89096212be233c'),
('kapil3104', 'Kapil Kumar Verma', '3499776ee73013a17c9ce7c3c3b252e5', '8445464950'),
('kapil3104@gmail.com', 'Kapil Kumar Verma', '827ccb0eea8a706c4c34a16891f84e7b', '8445464950'),
('kapil31104', 'Kapil Kumar Verma', '827ccb0eea8a706c4c34a16891f84e7b', '8445464950'),
('klasjflskj', 'lkjlsf', 'laskdfjsalf', 'lkasjflsjkafl'),
('lkasfdlj', 'lklsd', 'lkasdfk', 'e32e10237222f8881673c74c3f67ebb2'),
('ssfsdaf', 'asdfasf', 'aSDad', 'f5bcde8525dd0ee8dd8b58aaf65c1588');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `available_internship`
--
ALTER TABLE `available_internship`
  ADD KEY `id_no` (`id_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `available_internship`
--
ALTER TABLE `available_internship`
  MODIFY `id_no` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
