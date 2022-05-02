-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2022 at 08:50 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(150) CHARACTER SET utf8 NOT NULL,
  `password` varchar(150) CHARACTER SET utf8 NOT NULL,
  `createdon` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `createdon`) VALUES
(1, 'gurjeet', 'mypEtjerry23@99', '2022-05-01 17:43:29.000000');

-- --------------------------------------------------------

--
-- Table structure for table `appliedjobs`
--

CREATE TABLE `appliedjobs` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `contactno` varchar(20) CHARACTER SET utf8 NOT NULL,
  `resume` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `appliedon` varchar(200) CHARACTER SET utf8 NOT NULL,
  `appliedid` varchar(11) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appliedjobs`
--

INSERT INTO `appliedjobs` (`id`, `fullname`, `email`, `contactno`, `resume`, `appliedon`, `appliedid`, `status`) VALUES
(1, 'Gurmeet Kaur', 'jobseekertwo@gmail.com', '5689784578', 'images/RESUME.pdf', '22-04-21 11:50:30', '8', 'pending'),
(2, 'Gurjit Singh', 'gurjeets1024@gmail.com', '8427335450', 'images/RESUME-GURJEET.pdf', '22-04-30 01:22:26', '1', 'pending'),
(3, 'Gurjeet Singh', 'gurjeets1024@gmail.com', '8427335450', 'images/.CV.pdf', '22-05-01 07:26:05', '9', 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `profile` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`id`, `name`, `email`, `password`, `profile`, `company`, `logo`) VALUES
(1, 'employer', 'employer@example.com', 'Angrybirds4', NULL, 'Wipro', 'images/logo_wipro.png'),
(2, 'vaibhav pal', 'vaibhavpal@email.com', 'vabhiav12345', NULL, 'Tata', 'images/logo_tata.png'),
(3, 'Employer Two', 'employertwo@example.com', '1234', NULL, 'Google', 'images/logo_google_single.png'),
(4, 'employerthree', 'employerthree@example.com', '1234', NULL, 'Facebook', 'images/logo_facebook.png'),
(5, 'amrit', 'gurjeet@email.com', '1234', NULL, 'Twitter', 'images/logo_twitter.png'),
(6, 'Instagramer', 'instragramer@email.com', 'xyz', 'images/.', 'Instagram', 'images/.logo_instagram.png'),
(7, 'Employer ', 'employer@email.com', '1234', NULL, 'Girtz', 'images/.logo.jpg'),
(8, 'Mehkin Gupta', 'mok@jobportal.com', 'mypassword23@12', NULL, 'Michael', 'images/.logo.jpg'),
(9, 'Employer One Ninty One', 'employer191@gmail.com', 'employer@191', 'images/.', 'Whatsapp', 'images/.'),
(10, 'Employer One Ninty Two', 'employer192@gmail.com', 'employer@192', 'images/.employer.png', 'Whatsapp', 'images/.whatsapp.png');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker`
--

CREATE TABLE `jobseeker` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `lastname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `mothername` varchar(100) CHARACTER SET utf8 NOT NULL,
  `fathername` varchar(100) CHARACTER SET utf8 NOT NULL,
  `address` varchar(500) CHARACTER SET utf8 NOT NULL,
  `gender` varchar(20) CHARACTER SET utf8 NOT NULL,
  `dob` varchar(20) CHARACTER SET utf8 NOT NULL,
  `email` varchar(150) CHARACTER SET utf8 NOT NULL,
  `password` varchar(20) NOT NULL,
  `pic` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobseeker`
--

INSERT INTO `jobseeker` (`id`, `firstname`, `lastname`, `mothername`, `fathername`, `address`, `gender`, `dob`, `email`, `password`, `pic`) VALUES
(1, 'Jobseeker', 'One', 'motherExample', 'fatherExample', 'addressExample', 'Male', '20-11-1999', 'jobseekerone@gmail.com', 'mypassword12@34', NULL),
(2, 'Jobseeker', 'Two', 'motherExampletwo', 'fatherExampletwo', 'addr', 'Female', '21-11-1999', 'jobseekertwo@gmail.com', 'mypetjerry38@89', 'images/.MY_PIC.png'),
(3, 'Gurjit', 'Singh', 'Mothername', 'Fathername', 'H Number 300, Main Bazar, Gurdev Nagar, Amritsar, Punjab', 'Male', '23-11-1999', 'gurjeets1024@gmail.com', 'myself23@99', 'images/.mypropic.jpg'),
(8, 'Jobseeker ', 'Three', 'motherExampltefour', 'fatherExamplefour', 'addressExamplefour', 'Female', '22-11-1999', 'jobseekerfour@gmail.com', 'mypassword2', 'images/.thankyou.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `sender` varchar(200) NOT NULL,
  `reciever` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL,
  `optional` varchar(200) DEFAULT NULL,
  `reply` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `sender`, `reciever`, `message`, `optional`, `reply`) VALUES
(1, 'instragramer@email.com', 'jobseekertwo@gmail.com', 'This is inform you that you have been selected for the next steps for the hiring into our company.', 'Please submit documents at ....', NULL),
(2, 'instragramer@email.com', 'jobseekertwo@gmail.com', '', '', NULL),
(4, 'employer191@gmail.com', 'gurjeets1024@gmail.com', 'Ok good, reupload the same document to proceed the process.\r\nThankyou.', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `postid` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date` datetime NOT NULL,
  `category` varchar(200) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `company` varchar(200) NOT NULL,
  `location` varchar(500) NOT NULL,
  `companylogo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postid`, `title`, `description`, `date`, `category`, `salary`, `experience`, `company`, `location`, `companylogo`) VALUES
(1, 'Web Designer', 'This job requires 1 year experience in web designing', '2022-03-29 05:50:17', 'Software Engineering', '10000-20000', '1 year', 'Instagram', 'Amritsar,Punjab', 'images/logo_instagram.png'),
(2, 'Software Engineer', 'The job person will have to handle all the software                ', '2022-03-29 05:53:23', 'Software Engineering', '20000-30000', '2 years', 'Google', 'Amritsar,Punjab', 'images/logo_google_single.png'),
(3, 'Software Designer', 'This job is for software designers.                ', '2022-03-30 11:10:48', 'Software Engineering', '15000-20000', 'fresher', 'Girtz', 'Phagwara,Punjab', 'images/.logo.jpg'),
(4, 'Agriculture Manager', 'This job requires person experienced in agriculture field', '2022-03-30 11:13:03', 'Agriculture Mangement', '20000-25000', '2 years', 'Girtz', 'Amritsar,Punjab', 'images/.logo.jpg'),
(5, 'Web Designer', 'This job requires experience of person in web designing for 2 years in the same.                ', '2022-04-01 03:33:17', 'Software Engineering', '20000-30000', '2 years', 'Tata', 'Amritsar,Punjab', 'images/logo_tata.png'),
(6, 'Agriculture Manager', 'This job requires person having the knowledge of agriculture mangement and experience of 2 years in the same field.                ', '2022-04-01 03:35:31', 'Agriculture Mangement', '20000-30000', '2 years', 'Tata', 'Amritsar,Punjab', 'images/logo_tata.png'),
(7, 'Civil Engineer', 'This job requires person to be experience in civil engineering                ', '2022-04-01 03:37:55', 'Others', '20000-30000', '1 year', 'Twitter', 'Lawgate,Jalandhar', 'images/logo_twitter.png'),
(8, 'Artist ', 'This job requires experience of 1 year in art and science of computer engineering', '2022-04-01 09:39:42', 'Software Engineering', '10000', '1 year', 'Instagram', 'Mohali,Chandigarh', 'images/logo_instagram.png'),
(9, 'Php Developer', 'This job requires the person experience in php server-side scripting and person should be able to build whole backend services like insert,update,select,delete and commit changes whenever neccessary and manage them effectively. The qualifications like B.tech in CSE or similar branch, BCA , MCA, or relevant experience of developing in the web development field is accepted quantifyingly.', '2022-04-24 01:56:41', 'Software Engineering', '20000-25000', '1 year', 'Whatsapp', '(Remote) HQ: Nagpur,Maharashtra, India', 'images/.whatsapp.png');

-- --------------------------------------------------------

--
-- Table structure for table `repy`
--

CREATE TABLE `repy` (
  `id` int(11) NOT NULL,
  `sender` varchar(500) NOT NULL,
  `reciever` varchar(500) NOT NULL,
  `reply` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `repy`
--

INSERT INTO `repy` (`id`, `sender`, `reciever`, `reply`) VALUES
(1, 'gurmeet878@gmail.com', 'gurjeets2024@gmail.com', '0'),
(2, 'gurjeets1024@gmail.com', 'employer191@gmail.com', 'Oh! Sorry Sent by Mistake, will be careful for the next time');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appliedjobs`
--
ALTER TABLE `appliedjobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobseeker`
--
ALTER TABLE `jobseeker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postid`);

--
-- Indexes for table `repy`
--
ALTER TABLE `repy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appliedjobs`
--
ALTER TABLE `appliedjobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jobseeker`
--
ALTER TABLE `jobseeker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `repy`
--
ALTER TABLE `repy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
