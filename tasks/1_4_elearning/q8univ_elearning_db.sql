-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2024 at 04:43 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `q8univ_elearning_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `crsID` varchar(15) NOT NULL,
  `crsTitle` varchar(100) NOT NULL,
  `crsDescription` text NOT NULL,
  `crsUnits` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`crsID`, `crsTitle`, `crsDescription`, `crsUnits`) VALUES
('JAVA', 'Java Programming Course', 'Java\r\nProgramming\r\nLanguage', '30.00'),
('LAW', 'Law and Order', '', '30.00'),
('UKITL4', 'UK IT Level 4 Diploma in IT', 'International\r\nDiploma\r\nin\r\nInformation Technology', '120.00'),
('WEBDEV', 'Web Development Course', 'Web Design\r\nWeb Development\r\nWebmastering', '30.00');

-- --------------------------------------------------------

--
-- Table structure for table `course_material`
--

CREATE TABLE `course_material` (
  `cmID` int(11) NOT NULL,
  `cmCourse` varchar(15) NOT NULL,
  `cmTitle` varchar(150) NOT NULL,
  `cmFiles` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_material`
--

INSERT INTO `course_material` (`cmID`, `cmCourse`, `cmTitle`, `cmFiles`) VALUES
(1001, 'UKITL4', 'Introduction to IT', 'IT_PDFFile.pdf|Dummy.docx|Dummy2.doc|Sample.psd|Fifth.mp4'),
(1002, 'UKITL4', 'Lesson 1', 'TGIF.pdf|UKITL4_Lesson1.docx|UKITL4_Lesson1.pdf|ddasdjsakdja.doc'),
(1003, 'JAVA', 'Only One', 'JAVA_Lesson1.docx|anyFilename.ppt|Photo2.psd'),
(1004, 'WEBDEV', 'Introduction', 'intro.pdf|intro.docx'),
(1005, 'WEBDEV', 'Module 1', 'module1.pdf'),
(1006, 'WEBDEV', 'Module 2', 'module2.pdf'),
(1007, 'WEBDEV', 'Module 3', 'module3.pdf|module3.ppt');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `enrID` int(11) NOT NULL,
  `enrDateTime` datetime NOT NULL,
  `enrCourse` varchar(15) NOT NULL,
  `enrStudent` varchar(10) NOT NULL,
  `AccessUntil` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`enrID`, `enrDateTime`, `enrCourse`, `enrStudent`, `AccessUntil`) VALUES
(2, '2023-09-15 09:48:27', 'JAVA', '2023-00000', '2024-01-01'),
(11, '2023-09-15 10:09:24', 'WEBDEV', '2023-00001', NULL),
(12, '2024-06-14 10:35:30', 'LAW', '2024-1010', NULL),
(13, '2024-06-14 10:37:30', 'UKITL4', '2024-1010', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stdID` varchar(10) NOT NULL,
  `stdPassword` varchar(100) NOT NULL,
  `stdNameEN` varchar(100) NOT NULL,
  `stdNameAR` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stdID`, `stdPassword`, `stdNameEN`, `stdNameAR`) VALUES
('2023-00000', '*48D38EC2A7239A9FAE9869B9ABB8398BEC1BD0FC', 'Test', 'Student'),
('2023-00001', '*90F2A225B1179A5D554F9DA11B0C12FA66681109', 'Test', 'Two'),
('2024-1010', '*592E20C9837BD8CD85C86104BE4E84430C1FD497', 'A', 'B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`crsID`);

--
-- Indexes for table `course_material`
--
ALTER TABLE `course_material`
  ADD PRIMARY KEY (`cmID`),
  ADD KEY `fk_coursematerial_course` (`cmCourse`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`enrID`),
  ADD KEY `fk_enrollment_student` (`enrStudent`),
  ADD KEY `fk_enrollment_course` (`enrCourse`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stdID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_material`
--
ALTER TABLE `course_material`
  MODIFY `cmID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1008;

--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `enrID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_material`
--
ALTER TABLE `course_material`
  ADD CONSTRAINT `fk_coursematerial_course` FOREIGN KEY (`cmCourse`) REFERENCES `course` (`crsID`) ON UPDATE CASCADE;

--
-- Constraints for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD CONSTRAINT `fk_enrollment_course` FOREIGN KEY (`enrCourse`) REFERENCES `course` (`crsID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_enrollment_student` FOREIGN KEY (`enrStudent`) REFERENCES `student` (`stdID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
