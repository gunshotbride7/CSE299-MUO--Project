-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 03:39 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctors`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `a_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `dob` date NOT NULL,
  `p_date` date NOT NULL,
  `p_time` time NOT NULL,
  `specialization` varchar(20) NOT NULL,
  `doctor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`a_id`, `name`, `email`, `phone`, `dob`, `p_date`, `p_time`, `specialization`, `doctor`) VALUES
(6, 'Mahmud', 'foyez@gmail.com', '01612388414', '2023-06-02', '2023-06-24', '12:11:00', 'something', 'Masud '),
(7, 'Reem', 'fattahahmed506988@gmail.c', '01612388414', '2023-06-01', '2023-06-22', '12:30:00', 'something', 'Masud ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass` varchar(35) NOT NULL,
  `specialization` varchar(15) NOT NULL,
  `About` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `pass`, `specialization`, `About`) VALUES
(3, 'Foyez', 'foyez@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Neurology', 'Dr. Foyez Ahmed, a prominent neurologist, has earned a well-deserved reputation for his exceptional expertise and unwavering commitment to improving the lives of his patients. With a deep-seated passion for unraveling the complexities of the human brain, Dr. Ahmed\'s journey in neurology began during his formative years. Fascinated by the intricate workings of the brain, he embarked on a relentless pursuit of knowledge, dedicating countless hours to studying the intricacies of the nervous system. Through his extensive research and unwavering determination, Dr. Ahmed has made significant contributions to the field, with his findings published in prestigious medical journals. Today, his compassionate approach, meticulous assessments, and innovative treatment strategies have solidified his status as a trusted authority in the realm of neurology, earning him immense respect from both his patients and colleagues.'),
(4, 'Masud ', 'masud@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Pathology', 'Masud, a distinguished pathology specialist, has garnered a commendable reputation for his profound expertise and unwavering dedication to the field. From an early age, Masud displayed an inherent curiosity and fascination with the intricate world of pathology. This passion drove him to pursue extensive education and training, allowing him to unravel the mysteries behind various diseases and their underlying mechanisms. Through years of meticulous research and insightful contributions to medical literature, Masud has emerged as a respected figure in the field of pathology. Patients and colleagues alike value his thoroughness, attention to detail, and ability to provide accurate diagnoses, cementing his position as a trusted and reliable authority in pathology.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
