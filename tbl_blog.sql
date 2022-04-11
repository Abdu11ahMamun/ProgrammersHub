-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 11, 2022 at 03:07 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tbl_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`) VALUES
(1, 'Java'),
(2, 'PHP'),
(3, 'Python');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` int(11) NOT NULL,
  `cat` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(50) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `cat`, `title`, `body`, `image`, `author`, `tags`, `date`) VALUES
(3, 1, 'Array Blog ', '<p><strong><span style=\"text-decoration: underline;\">Method 1</span>:</strong>&nbsp;This method discusses the&nbsp;<strong>Naive Solution</strong>&nbsp;which takes O(n<span>2</span>) amount of time.&nbsp;<br />The solution involves finding the sum of all the elements of the array in each rotation and then deciding the maximum summation value.&nbsp;</p>\r\n<ul>\r\n<li><strong>Approach:</strong>A simple solution is to try all possible rotations. Compute sum of i*arr[i] for every rotation and return maximum sum.</li>\r\n<li><strong>Algorithm:</strong><ol>\r\n<li>Rotate the array for all values from 0 to n.</li>\r\n<li>Calculate the sum for each rotations.</li>\r\n<li>Check if the maximum sum is greater than the current sum then update the maximum sum.</li>\r\n</ol></li>\r\n</ul>', 'uploads/52b4e443ec.png', 'Abdullah', 'Java ', '2022-04-10 15:28:41'),
(4, 1, 'Edited', '<p><span><span><span>VDC Research conducts an annual survey of Java in the enterprise, to maintain current data on Java adoption and important aspects of where and how Java is being used. The 2021 report based on 507 technology executives, managers and developers from around the world, confirmed that strong adoption of Java for new projects continues, both on-premises and in the cloud.</span></span></span></p>\r\n<p>&nbsp;</p>\r\n<p><span><span><span>The study looked at more than 20 of the top programming languages in use today and found that Java continues to be the #1 rated language for top technology trends, and the highest-rated language developers trust to address security initiatives.</span></span></span></p>', 'upload/decd0f2496.png', 'Abdullah', 'Java ', '2022-04-10 17:29:46'),
(5, 3, 'My Post ', '<p>Hello World.&nbsp;Hello World.&nbsp;Hello World.&nbsp;Hello World.&nbsp;Hello World.&nbsp;Hello World.&nbsp;Hello World.&nbsp;Hello World.&nbsp;Hello World.&nbsp;Hello World.&nbsp;Hello World.&nbsp;Hello World.&nbsp;Hello World.&nbsp;Hello World.&nbsp;Hello World.&nbsp;Hello World.&nbsp;Hello World.&nbsp;Hello World.&nbsp;Hello World.&nbsp;Hello World.&nbsp;Hello World.&nbsp;Hello World.&nbsp;Hello World.&nbsp;Hello World.&nbsp;Hello World.&nbsp;Hello World.&nbsp;Hello World.&nbsp;Hello World.&nbsp;Hello World.&nbsp;Hello World.&nbsp;Hello World.&nbsp;</p>', 'upload/79281d3a6a.png', 'Mamun', 'Py', '2022-04-11 04:10:13'),
(6, 3, 'Test', '<p>TestingTestingTestingTestingTestingTestingTestingTestingTestingTestingTestingTestingTestingTesting</p>', 'upload/8c8bc49eb2.png', 'Mamun', 'Test', '2022-04-11 05:44:54'),
(7, 3, 'Test', '<p>TestingTestingTestingTestingTestingTestingTestingTestingTestingTestingTestingTestingTestingTesting</p>', 'upload/21d5aadbad.png', 'Mamun', 'Test', '2022-04-11 11:26:09'),
(8, 3, 'Test', '<p>TestingTestingTestingTestingTestingTestingTestingTestingTestingTestingTestingTestingTestingTesting</p>', 'upload/ef2096ec3b.png', 'Mamun', 'Test', '2022-04-11 11:28:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`) VALUES
(2, 'mamun', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
