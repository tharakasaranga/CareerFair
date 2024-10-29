-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2024 at 07:13 PM
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
-- Database: `careerfair`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `address` text DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `industry` varchar(100) DEFAULT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `logo` varchar(255) DEFAULT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `contact_person_position` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_name`, `email`, `phone_no`, `address`, `website`, `industry`, `registration_date`, `logo`, `contact_person`, `contact_person_position`) VALUES
(8, 'Virtusa', 'Virtusa15@gmail.com', '0776721614', 'Colombo 08', 'https://Virtusa.com', 'Software Development', '2024-10-28 17:07:41', 'img1.jpg', 'John White', '0332256487'),
(9, 'Gnanm IT center', 'gnanm15@gmail.com', '0332256980', 'Jaffna', 'https://gnanm.com', 'Web Design', '2024-10-28 17:08:39', 'logo_new.png', 'M. Muralidaran', '0332256456'),
(10, 'Code Alpha', 'codealpha@gmail.com', '0332256498', 'Colombo 09', 'https://www.codealpha.com', 'Data Science', '2024-10-28 17:47:46', 'Screenshot 2024-10-05 004321.png', 'Mr. K.A.H.P Disanayaka', '0754596565');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `studentRegNo` varchar(15) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phoneNo` varchar(20) DEFAULT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `gender` enum('Male','Female','Others') DEFAULT NULL,
  `uniName` varchar(100) DEFAULT NULL,
  `degreeProgram` varchar(100) DEFAULT NULL,
  `yearOfStudy` varchar(20) DEFAULT NULL,
  `GraduationDate` date DEFAULT NULL,
  `CGPA` decimal(3,2) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `resume` varchar(255) DEFAULT NULL,
  `skills` text DEFAULT NULL,
  `assigned_company` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `firstname`, `lastname`, `studentRegNo`, `email`, `phoneNo`, `dateOfBirth`, `gender`, `uniName`, `degreeProgram`, `yearOfStudy`, `GraduationDate`, `CGPA`, `username`, `password`, `resume`, `skills`, `assigned_company`) VALUES
(2041, 'Tharaka', 'Saranga', '2021/CSC/027', 'tharakasaranga755@gmail.com', '0776721614', '2001-04-19', 'Male', 'University of Jaffna', 'BSc Computer Science', '2nd Year', '2026-04-05', 3.75, 'tharakasaranga', '$2y$10$2muuD1ov/bT6FKD4rq52Gu2LzfuQiNIZ/xWa8r3H81CRjjbg8Qc3O', '../Files/My_CV.pdf', 'Java, Python, React, MySQL. PHP', 'Virtusa'),
(2042, 'Nipun', 'Maduranga', '2020/CSC/014', 'nipunmaduranga2000@gmail.com', '0717566985', '2000-05-02', 'Male', 'University of Jaffna', 'BSc Computer Science', '3rd Year', '2026-05-06', 3.20, 'nipun', '$2y$10$N8i0nCgGOcZqUThrY.hXfOlYeCVENy.AJGqNJ/d0eFZghIciO6LRe', '../Files/Tutorial_2_2.pdf', 'Java', 'Gnanm IT center'),
(2043, 'Sulakkana', 'Sandaruwan', '2022/CSC/058', 'sulakkanasandaruwan50@gmalil.com', '0776721618', '1998-01-05', 'Male', 'University of Jaffna', 'BSc Computer Science', '1st Year', '2026-05-02', 3.44, 'sulakkana', '$2y$10$fH6FGlrEo3sxK24aK3lXF.pLmQn5LdYH1NnfNVfztY/WHL56oo0CS', '../Files/ML_Basics_Quiz.pdf', 'Java', 'Gnanm IT center'),
(2044, 'Kasun', 'Perera', '2020/CSC/019', 'kasunperera1999@gmail.com', '0711234567', '1999-02-14', 'Male', 'University of Colombo', 'BSc Computer Science', '3rd Year', '2025-05-10', 3.80, 'kasunperera', '$2y$10$gH0rEvZjHRbR/2k5iP6U2u4xqNU7Vzx/h2.D94/uMv1wi4/2uZ4mS', '../Files/Kasun_CV.pdf', 'Java, HTML, CSS, MySQL', 'Code Alpha'),
(2045, 'Nadeesha', 'Fernando', '2021/CSC/032', 'nadeesha.fernando@gmail.com', '0776578492', '2001-07-22', 'Female', 'University of Peradeniya', 'BSc Information Technology', '2nd Year', '2026-07-05', 3.65, 'nadeeshafer', '$2y$10$t9yD91mA/p9iO6Zg1NxE.nW8ZIuVNVzSYDtOq8J5Te9Hu/sIFrXQG', '../Files/Nadeesha_CV.pdf', 'Python, SQL, React', 'Virtusa'),
(2046, 'Ruwan', 'Gunasekara', '2022/CSC/045', 'ruwangunasekara98@gmail.com', '0758476391', '1998-10-12', 'Male', 'University of Jaffna', 'BSc Software Engineering', '1st Year', '2027-05-02', 3.90, 'ruwangun', '$2y$10$D07Q3LgR.zFGteX4jIoUe1O7BqMO/S9CmG6Ht9v9LhlRWx4G3iKFi', '../Files/Ruwan_CV.pdf', 'C++, JavaScript, PHP', ''),
(2047, 'Chamari', 'Rajapaksha', '2020/CSC/007', 'chamarirajapaksha@gmail.com', '0702567893', '2000-06-01', 'Female', 'University of Kelaniya', 'BSc Computer Science', '3rd Year', '2025-06-20', 3.50, 'chamariraj', '$2y$10$sG9R1Eif/ZzBJs7aAk3V/eEiJw5T3N1eYWv8s4vRxEQmpHbGzUJ1m', '../Files/Chamari_CV.pdf', 'HTML, CSS, Python, Java', 'Code Alpha'),
(2048, 'Isuru', 'Wijesinghe', '2019/CSC/021', 'isuruwijesinghe@gmail.com', '0769876543', '1999-03-18', 'Male', 'University of Ruhuna', 'BSc Computer Science', '4th Year', '2024-04-30', 3.95, 'isuruwij', '$2y$10$rHYjV/xw9Z9EbfWnZGEFMO6I/Z8eSfG/6GxQG.eL1cOFu28IBpK9e', '../Files/Isuru_CV.pdf', 'Java, C#, SQL', 'Virtusa'),
(2049, 'Priyanka', 'De Silva', '2021/CSC/015', 'priyanka.desilva@gmail.com', '0773216549', '2001-09-15', 'Female', 'University of Colombo', 'BSc Computer Engineering', '2nd Year', '2026-08-05', 3.75, 'priyankad', '$2y$10$NlS2B3y12PzRZbJ6xl1N/OQ3/o8IrQerwEkIcyWfdO7Q3RmGEgW2m', '../Files/Priyanka_CV.pdf', 'Machine Learning, AI, Python', 'Gnanm IT center'),
(2050, 'Vimukthi', 'Samarasinghe', '2022/CSC/010', 'vimukthisama@gmail.com', '0714789652', '2000-12-05', 'Male', 'University of Moratuwa', 'BSc Data Science', '1st Year', '2027-05-15', 3.60, 'vimukthisam', '$2y$10$L6h5T3kqN1mO9L7P8DQFZOQF8Hr.tiYZ9Tx9/ZqYZMlsifzXy6M5y', '../Files/Vimukthi_CV.pdf', 'Data Analysis, Python, R', 'Gnanm IT center'),
(2051, 'Hansika', 'Liyanage', '2019/CSC/055', 'hansika.liyanage@gmail.com', '0786547890', '1999-11-20', 'Female', 'University of Sri Jayewardenepura', 'BSc Information Technology', '4th Year', '2024-06-25', 3.55, 'hansikaliya', '$2y$10$yYkQ4jRsE5GV8ObOdB2R4OfglJg7yU5zHXePB5NZX8LBKHkaT9E3K', '../Files/Hansika_CV.pdf', 'Python, React, JavaScript', ''),
(2052, 'Dilan', 'Jayasinghe', '2020/CSC/067', 'dilanjaya@gmail.com', '0720987654', '2000-01-29', 'Male', 'University of Jaffna', 'BSc Software Engineering', '3rd Year', '2025-07-01', 3.70, 'dilanjaya', '$2y$10$TG0G5xGg2z4MECUbLtY5u.KBLDlN5sbZHlRb8ODBrOs/RZmX2kY.q', '../Files/Dilan_CV.pdf', 'SQL, PHP, JavaScript', ''),
(2053, 'Lakshitha', 'Wickramasinghe', '2021/CSC/012', 'lakshitha.wickram@gmail.com', '0756578491', '2001-08-15', 'Male', 'University of Peradeniya', 'BSc Computer Engineering', '2nd Year', '2026-08-15', 3.85, 'lakshithaw', '$2y$10$JjL7g7n4.lO6/eZ4aU8Eue9dC1mDg4w8xzNx5VG.GlnBtYbWpH/jy', '../Files/Lakshitha_CV.pdf', 'Java, AI, ML', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2054;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
