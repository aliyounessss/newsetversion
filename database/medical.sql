-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2021 at 10:19 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appId` int(3) NOT NULL,
  `patientIc` bigint(12) NOT NULL,
  `scheduleId` int(10) NOT NULL,
  `appSymptom` varchar(100) NOT NULL,
  `appComment` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'process'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appId`, `patientIc`, `scheduleId`, `appSymptom`, `appComment`, `status`) VALUES
(5, 1234, 42, '8g76gyuhi', 'jbvcresrtfghb', 'process'),
(86, 920517105553, 40, 'Pening Kepala', 'Bila doktor free?', 'done'),
(87, 920517105553, 1, 'jnj', 'k', 'process'),
(92, 1234, 44, 'k', 'jn', 'process'),
(96, 1234, 45, 'ji', 'gt7yiukjbnm', 'done');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `icDoctor` bigint(12) NOT NULL,
  `password` varchar(20) NOT NULL,
  `doctorId` int(3) NOT NULL,
  `doctorFirstName` varchar(50) NOT NULL,
  `doctorLastName` varchar(50) NOT NULL,
  `doctorAddress` varchar(100) NOT NULL,
  `doctorPhone` varchar(15) NOT NULL,
  `doctorEmail` varchar(20) NOT NULL,
  `doctorDOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`icDoctor`, `password`, `doctorId`, `doctorFirstName`, `doctorLastName`, `doctorAddress`, `doctorPhone`, `doctorEmail`, `doctorDOB`) VALUES
(123456789, '123', 123, 'esa', 'coding_lab', 'Beirut-Lebanon', '0173567758', 'dali@gmail.com', '1990-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `dName` varchar(50) COLLATE utf8_bin NOT NULL,
  `Id` int(20) NOT NULL,
  `Email_address` varchar(50) COLLATE utf8_bin NOT NULL,
  `Telephone` int(12) NOT NULL,
  `Speciality` varchar(50) COLLATE utf8_bin NOT NULL,
  `consultation` int(11) NOT NULL,
  `hospital` varchar(50) COLLATE utf8_bin NOT NULL,
  `Experience` longtext COLLATE utf8_bin NOT NULL,
  `education` text COLLATE utf8_bin NOT NULL,
  `Dpassword` int(11) NOT NULL,
  `confirm_pass` int(11) NOT NULL,
  `lastname` varchar(25) COLLATE utf8_bin NOT NULL,
  `BDay` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`dName`, `Id`, `Email_address`, `Telephone`, `Speciality`, `consultation`, `hospital`, `Experience`, `education`, `Dpassword`, `confirm_pass`, `lastname`, `BDay`) VALUES
('Dr. Kareema Jaber', 1, 'kareemajb@gmail.com', 7111222, 'Urology ', 50, 'AUBMC- beirut', 'Envisioning a society in which all people have access to quality,affordable health care. Providing a united voice for the 160 million people with chronic diseases & disabilities. Read Blog. Browse Resources. Meet The Staff.', 'Osteopathic physicians complete four years of medical school, followed by internships, residencies and fellowships. This training lasts three to eight years and prepares DOs to practice a specialty.', 0, 0, '0', NULL),
('Dr. jana youness', 2, 'jana_youness@gmail.com', 8111555, 'Cardiology', 70, 'Hotel Dieu De France  ', ' Image result for experience of a doctor In order to become a doctor, a person must first complete a bachelor\'s degree. Then, he must attend and complete four years of medical school. Medical students rotate through various specialties such as surgery, pediatrics, or neurology to learn about each field so they can decide which is of most interest to them.', 'The amount of education mandatory for a career in audiology has gradually increased over time, and nowadays a Doctor of Audiology – or Au.D. – degree is the standard entry-level credential in the field, according to the U.S. Bureau of Labor Statistics. Every U.S. state requires audiologists to receive a license, the bureau notes, and many audiologists seek certification from professional organizations such as the American Speech-Language-Hearing Association or the American Board of Audiology', 0, 0, '0', NULL),
('Dr. Zahi Mahmoud', 3, 'zahim@gmail.com', 1452542, 'Urology ', 80, 'AUBMC- beirut', 'From your work experience, you will have learnt that Doctors are constantly faced with difficult situations and challenges. In these situations, a Doctor\'s ability to be flexible, use their initiative, and adapt their communication skills to the present situation is what makes them stand out.', 'Specialty Diploma in Internal Medicine, Saint Joseph University, \r\nBeirut  University Diploma in Infectious Diseases, \r\nUniversity Rene Descartes, Paris  University Diploma in Rheumatic and Autoimmune Diseases, \r\nUniversity Paris Sud  Instructor,\r\n\r\n Faculty of Medicine, Saint Joseph University, Beirut', 0, 0, '0', NULL),
('Dr. Jamal ghabris', 4, 'jamal@gmail.com', 70525252, 'Orthopedics', 20, 'Nabatieh Hospital', 'Physicians should be personable, great listeners, and empathetic to the concerns of their patients,” he elaborates. “They should not be condescending or arrogant. They should treat others as they want to be treated.” \"Physicians should be personable, great listeners, and empathetic to the concerns of their patients.\"', 'Fellowship in Medical Oncology, Jules Bordet Institute, Brussels, Belgium  Inter-university degree in Cytogenetics, Grenobles Alpes University, Grenobles, France  Inter-university degree in Oncogenetics, Paris-Diderot University, Faculty of Medicine, Paris, France  Inter-university degree in Digestive Oncology, Paris Descartes University, Faculty of Medicine, Paris France  Masters in Bioethics, Paris Descartes University, Faculty of Medicine, Paris France  Post-Doctoral specialization in Hematology-Oncology, Faculty of Medicine of Saint Joseph University, Beirut, Lebanon', 0, 0, '0', NULL),
('dr. Fayez Nehme', 5, 'fayeznehme@gmail.com', 70448114, 'Cardiology', 44, 'Qana Hospital', 'Canada\'s national application & matching service for medical residency training. Match Timelines. Eligibility Criteria. Program Descriptions. Highlights: Not-For-Profit Organization, Providing Objective And Transparent Application.', 'AUB graduated in 1998\r\nHead of Sectionof cardiology in Hotel Dieu 2005', 0, 0, '0', NULL),
('zaafaran', 9, 'hodroj@gmail.com', 26854312, '1', 0, '', '', '', 123456, 123456, '0', '2021-12-01'),
('zaafaran', 10, 'hodroj@gmail.com', 26854312, '1', 0, '', '', '', 123456, 123456, 'hodroj', '2021-12-01'),
('zaafaran', 11, 'hodroj@gmail.com', 26854312, '1', 0, '', '', '', 123456, 123456, 'hodroj', '2021-12-01'),
('hjb', 12, 'hy@j.com', 4865, '2', 0, '', '', '', 123456, 123456, 'yrhkufyfky6u', '2021-12-07');

-- --------------------------------------------------------

--
-- Table structure for table `doctorschedule`
--

CREATE TABLE `doctorschedule` (
  `scheduleId` int(11) NOT NULL,
  `scheduleDate` date NOT NULL,
  `scheduleDay` varchar(15) NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `bookAvail` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorschedule`
--

INSERT INTO `doctorschedule` (`scheduleId`, `scheduleDate`, `scheduleDay`, `startTime`, `endTime`, `bookAvail`) VALUES
(1, '2021-12-13', 'Monday', '09:00:00', '10:00:00', 'notavail'),
(2, '2021-12-13', 'Monday', '00:00:08', '00:00:10', 'notavail'),
(41, '2021-12-13', 'Monday', '10:00:00', '11:00:00', 'notavail'),
(42, '2021-12-14', 'Tuesday', '11:00:00', '12:00:00', 'notavail'),
(43, '2021-12-14', 'Tuesday', '11:00:00', '12:00:00', 'available'),
(44, '2021-12-15', 'Monday', '01:00:00', '02:00:00', 'notavail'),
(45, '2021-12-13', 'Monday', '11:04:00', '13:00:00', 'notavail'),
(47, '2021-12-22', 'Wednesday', '11:55:00', '23:10:00', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_doc` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `E-mail` varchar(50) COLLATE utf8_bin NOT NULL,
  `details` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_doc`, `name`, `E-mail`, `details`) VALUES
(1, 'hoda nassar', 'hoda@gmail.com', 'Dr. Jaber a great doctor .'),
(1, 'Karima Al Cheikh', 'karima_chei5h@hotmail.com', 'Hi, I advise you to visit dr. because she is very good dr.'),
(1, 'hiba hammoud', 'hiba@gmail.com', 'great dr. !'),
(2, 'kawthar rislan', 'rislan@gmail.com', 'She is the best'),
(2, 'nawal', 'nawal@gmail.com', 'good'),
(3, 'wafaa', 'wafaa@gmail.com', 'he is an excellent dr.'),
(5, 'kawthar rislan', 'karima_i5h@hotmail.com', 'great doctor'),
(3, 'ali youness', 'ali@gmail.com', 'a great doctorrrr'),
(2, 'nawal', '[', '.lopl,');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `icPatient` bigint(12) NOT NULL,
  `password` varchar(20) NOT NULL,
  `patientFirstName` varchar(20) NOT NULL,
  `patientLastName` varchar(20) NOT NULL,
  `patientMaritialStatus` varchar(10) NOT NULL,
  `patientDOB` date NOT NULL,
  `patientGender` varchar(10) NOT NULL,
  `patientAddress` varchar(100) NOT NULL,
  `patientPhone` varchar(15) NOT NULL,
  `patientEmail` varchar(100) NOT NULL,
  `confirmpass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`icPatient`, `password`, `patientFirstName`, `patientLastName`, `patientMaritialStatus`, `patientDOB`, `patientGender`, `patientAddress`, `patientPhone`, `patientEmail`, `confirmpass`) VALUES
(0, '1234567', 'jkbukjbmn ', 'jgub', '', '2021-12-17', '', '', '58201', 'aliyounes805@outlook.com', '1234567'),
(1234, '1234', 'karen', 'cheikh', 'single', '2001-01-01', 'female', 'doueir liban', '70825518', 'ko@gmail.com', '0'),
(12345, '12345', 'ali', 'youness', 'single', '2000-12-07', 'male', 'Beirut', '70518451', 'ali@gmail.com', '0'),
(185412, '12345678', 'hgyjhvn', '', '', '2021-12-22', '', '', '21510', '41730118@students.liu.edu.lb', '12345678'),
(555458, '123456', 'gftrf', 'jhuyhj', '', '2021-12-29', '', '', '6531', '41730118@students.liu.edu.lb', '123456'),
(5864512, '123456789', 'jkbub', 'bngvfgv', '', '2021-12-24', '', '', '258412', 'vfyjhv@gmail.com', '123456789'),
(6584521, '123456', 'olo', 'fhyujfhvn', '', '2022-01-04', '', '', '5', 'hassanzahra911@gmail.com', '123456'),
(21548645120, '123456', 'jkbub', '', '', '2021-12-23', '', '', '145864210', '41730118@students.liu.edu.lb', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `patientregistration`
--

CREATE TABLE `patientregistration` (
  `patient_id` int(11) NOT NULL,
  `fname_patient` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `lname_patient` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `email_patient` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `phone_patient` double DEFAULT NULL,
  `date_ofbirth_patient` date DEFAULT NULL,
  `password_patient` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `confirmpass_patient` varchar(30) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `patientregistration`
--

INSERT INTO `patientregistration` (`patient_id`, `fname_patient`, `lname_patient`, `email_patient`, `phone_patient`, `date_ofbirth_patient`, `password_patient`, `confirmpass_patient`) VALUES
(1, 'rawan', 'ibrahim', 'rawanib@gmail.com', 70101525, '2011-11-08', '123456', '123456'),
(2, 'hiba', 'nawfal', 'hibanawfal@gmail.com', 3125125, '2000-11-05', 'hiba123', 'hiba123'),
(3, 'zeina', 'charif', 'zeinacharif@gmail.com', 12151215, '1999-01-01', '123456789', '123456789'),
(5, 'hala', 'semaan', 'hala@outlook.com', 3151814, '1995-03-25', '124578963', '124578963'),
(6, 'kamilia', 'asmar', 'kamilia@gmail.com', 3157157, '1998-06-28', 'koko123456789', 'koko123456789'),
(7, 'milia', 'chamas', 'mi@outlook.com', 3126126, '1989-08-25', 'milia123', 'milia123'),
(9, 'ali', 'mortada', 'ali@gmail.com', 3178989, '1988-09-06', '852ali', '852ali'),
(10, 'rawan', 'kanso', 'kanso@gmail.com', 70825645, '1977-12-02', 'kanso147', 'kanso147'),
(11, 'zalfa', 'hattab', 'zal@gmail.com', 3151518, '1990-06-05', 'zalfazalfa', 'zalfazalfa'),
(12, 'ali', 'balkis', 'alib@gmail.com', 70158589, '2000-08-05', '123456789', '123456789'),
(13, 'nader', 'hjeizi', 'nader@outlook.com', 70484848, '1989-08-05', 'nader147', 'nader147'),
(14, 'nader', 'nader', 'na@gmail.com', 3178787, '1990-04-25', 'naderqwe', 'naderqwe'),
(15, 'hoda', 'lml', 'ihuihn@gmail.com', 154845120, '2021-12-22', '1234567', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `speciality`
--

CREATE TABLE `speciality` (
  `speciality_id` int(11) NOT NULL,
  `speciality_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `speciality`
--

INSERT INTO `speciality` (`speciality_id`, `speciality_name`) VALUES
(1, 'dentist'),
(2, 'Urology');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appId`),
  ADD UNIQUE KEY `scheduleId_2` (`scheduleId`),
  ADD KEY `patientIc` (`patientIc`),
  ADD KEY `scheduleId` (`scheduleId`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`icDoctor`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `doctorschedule`
--
ALTER TABLE `doctorschedule`
  ADD PRIMARY KEY (`scheduleId`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD KEY `id_doc` (`id_doc`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`icPatient`);

--
-- Indexes for table `patientregistration`
--
ALTER TABLE `patientregistration`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `speciality`
--
ALTER TABLE `speciality`
  ADD PRIMARY KEY (`speciality_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `doctorschedule`
--
ALTER TABLE `doctorschedule`
  MODIFY `scheduleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `patientregistration`
--
ALTER TABLE `patientregistration`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `speciality`
--
ALTER TABLE `speciality`
  MODIFY `speciality_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
