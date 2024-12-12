-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2024 at 03:20 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlsv_dinhhoangduc`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_students`
--

CREATE TABLE `table_students` (
  `id` int(200) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` int(5) NOT NULL,
  `hometown` varchar(200) NOT NULL,
  `level` int(5) NOT NULL,
  `group` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_students`
--

INSERT INTO `table_students` (`id`, `fullname`, `dob`, `gender`, `hometown`, `level`, `group`) VALUES
(1, 'Đinh Hoàng Đức ', '2005-03-29', 1, 'Hà Nội', 0, 8),
(2, 'Phan Tuấn Phong', '2005-06-15', 1, 'Hà Nội', 1, 8),
(3, 'Nguyễn Văn Dương', '2005-02-04', 1, 'Hà Nội', 2, 8),
(4, 'Khương Văn Khải', '2005-08-08', 1, 'Hà Nội', 3, 8),
(5, 'Lưu Đức Anh Dũng', '2005-03-12', 1, 'Hải Dương', 0, 8),
(6, 'Hà Hải Anh', '2005-05-05', 1, 'Hà Nội', 1, 8),
(7, 'Nguyễn Văn Linh', '2005-09-09', 1, 'Hà Nội', 2, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_students`
--
ALTER TABLE `table_students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_students`
--
ALTER TABLE `table_students`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
