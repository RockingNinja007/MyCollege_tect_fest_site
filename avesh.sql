-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2017 at 08:08 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avesh`
--

-- --------------------------------------------------------

--
-- Table structure for table `code_creater`
--

CREATE TABLE `code_creater` (
  `id` int(11) NOT NULL,
  `Participant_name` varchar(100) NOT NULL,
  `college_name` varchar(200) NOT NULL,
  `roll_no` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `semester` int(11) NOT NULL,
  `mobile` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `code_creater`
--

INSERT INTO `code_creater` (`id`, `Participant_name`, `college_name`, `roll_no`, `email`, `semester`, `mobile`) VALUES
(1, 'Vikas Kumar Ratre', 'gec-r', '3162213058', 'ratre.vikas@gmail.com', 2, '7805925123');

-- --------------------------------------------------------

--
-- Table structure for table `event_info`
--

CREATE TABLE `event_info` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `event_desc` varchar(3000) NOT NULL,
  `event_date` datetime NOT NULL,
  `first_price` int(11) NOT NULL,
  `second_price` int(11) NOT NULL,
  `venue` varchar(50) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `parent_event` varchar(100) NOT NULL,
  `register_in` varchar(100) NOT NULL,
  `rules` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_info`
--

INSERT INTO `event_info` (`event_id`, `event_name`, `event_desc`, `event_date`, `first_price`, `second_price`, `venue`, `contact`, `parent_event`, `register_in`, `rules`) VALUES
(2, 'Robo Soccer', 'It is a robotics event in which the two opponents have to strike goal in their opponent(s) goalpost by dribbling the ball through their bots. The team which strikes the maximum goal wins.', '2017-02-27 13:30:00', 5001, 2001, 'Central Hall', '9907595776', 'Robotics', 'robo_soccer', 'no feeds yet'),
(3, 'Code Creater', 'This event will puzzle your mind and challenge the coder within you. We will provide you system as well as the software. You have to use your intellect to debug the code, or to find the output, or even make the entire program.', '2017-02-27 13:00:00', 1001, 0, '', '7415151884', 'no', 'code_creater', ''),
(4, 'E-Strategy', ' E-STRATEGY is the flagship entrepreneurship event organized by the AVESH TechFest 2017 at Government Engineering College Raipur. The event will act as a platform to foster entrepreneurial spirit in participants through different rounds and levels.  Now the real time has come to show the world the hidden talents within you. Become an entrepreneur to solve problems and make an impact, never for the lifestyle of the glory.All you need is to ‘be you\'. The negotiating and planning skills run in Indian veins. Sometimes it comes up with “itna lagado na bhaiyya” and sometimes with seller’s attitude. So we present you a platform to estimate your fire and talents.', '2017-02-28 13:04:00', 2001, 0, 'C-106', '7415997026', 'no', 'e_strategy', ''),
(5, 'Front End', 'A mix of programming and layout that powers the visuals and interactions of the web.Front-end web development is the practice of producing HTML, CSS, JavaScript and J-query for a website or Web Application so that a user can see and interact with them directly.', '2017-02-28 10:30:00', 1001, 0, '', '8085742314', 'Hashmap', 'front_end', ''),
(6, 'Graphic Designing', 'This event is based on your creativity in the digital canvas. We are going to provide you the desktop along with the installed software.You have to design the art with the provided theme ( for example Swachh Bharat) in limited time.', '2017-02-27 11:00:00', 1001, 0, 'C-209', '8602630414', 'HashMap', 'graphic_design', ''),
(7, 'Jugaad', 'The junkyard event tests your engineering aptitude of making a working model of machine out of a given pile of junk.', '2017-02-27 11:32:00', 2001, 0, 'C-105', '9039640143', '', 'jugaad', ''),
(8, 'Nirmaan', 'This event is based on your creativity in the structural units. We are going to provide you the plot area for which you have to prepare the best suit plan and to present structural model of that in limited time. For which we will provide you material required for its fabrication.', '2017-02-27 13:23:00', 3001, 0, 'C-106', '9893939103', 'Stratum', 'nirmaan', ''),
(9, 'Model Presentation', 'This event is based on the creative thinking of the participant towards the solution of real life problems.', '2017-02-27 00:00:00', 4001, 2001, 'C-105', '9755952608', 'Parikalpana', 'model_presentation', ''),
(10, 'Quiz', '', '2017-02-27 10:05:00', 2001, 1001, 'Central Hall', '9589851715', '', 'quiz', ''),
(11, 'Robo Dangal', 'Just like WWE it’s a wrestling battle against two bots. The opponent bot has to push another bot towards the hurdles in the arena to reduce their points. More time taken to get out of a hurdle, more you will lose your points. So, come experience the live “DANGAL” between the Bots.', '2017-02-27 11:00:00', 5001, 2001, 'Central Hall', '7725043274', 'Robotics', 'robo_dangal', ''),
(12, 'Robo Drift', ' Design a manually controlled ROBOT that has capacity to cover maximum distance in shortest possible time, challenging the hurdles and be one of the best opponents. Think your robot can overcome any obstacle-big or small in the least of time. If so get it on the track and let the game begin. And bear in mind that maximizing RPM does not make you winner but winners are those who have good presence of mind, sharpness and practice.', '2017-02-27 00:00:00', 5001, 3001, 'Badminton Court', '9039826766', 'Robotics', 'robo_drift', ''),
(13, 'Setu', 'This event will test the techniques and abilities to give maximum output using minimum resources.', '2017-02-27 12:00:00', 2001, 1001, 'C-105', '7587108976 ', 'Robotics', 'setu', ''),
(14, 'Project Exhibition', 'In this event participants can showcase their engineering project.Final year students can all bring  their projects in the exhibition. ', '2017-02-27 12:00:00', 4001, 2001, 'Central Hall', '9755952608', 'Parikalpana', 'project_exhibition', 'not yet'),
(15, 'NFS', 'Like other NEED For SPEED games,NFS is a racing game.', '2017-02-28 07:00:00', 1001, 501, 'C-309', '9165310659', 'Lan Gamming', 'nfs', ''),
(16, 'Counter Strike', 'Counter Strike is series of multiplayer game first-person shooting game played in groups of two teams namely COUNTER TERRORISTS and TERRORISTS.', '2017-02-28 15:00:00', 2001, 0, 'c-309', '9165310659', 'Lan Gaming', 'counter_strike', '');

-- --------------------------------------------------------

--
-- Table structure for table `e_strategy`
--

CREATE TABLE `e_strategy` (
  `id` int(11) NOT NULL,
  `Participant_name` varchar(100) NOT NULL,
  `college_name` varchar(200) NOT NULL,
  `roll_no` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `semester` int(11) NOT NULL,
  `mobile` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `front_end`
--

CREATE TABLE `front_end` (
  `id` int(11) NOT NULL,
  `Participant_name` varchar(100) NOT NULL,
  `college_name` varchar(200) NOT NULL,
  `roll_no` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `semester` int(11) NOT NULL,
  `mobile` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `front_end`
--

INSERT INTO `front_end` (`id`, `Participant_name`, `college_name`, `roll_no`, `email`, `semester`, `mobile`) VALUES
(1, 'Vikas Kumar Ratre', 'gecr', '3162213058', 'ratre.vikas@gmail.com', 2, '7827673213');

-- --------------------------------------------------------

--
-- Table structure for table `graphic_design`
--

CREATE TABLE `graphic_design` (
  `id` int(11) NOT NULL,
  `Participant_name` varchar(100) NOT NULL,
  `college_name` varchar(200) NOT NULL,
  `roll_no` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `semester` int(11) NOT NULL,
  `mobile` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jugaad`
--

CREATE TABLE `jugaad` (
  `id` int(11) NOT NULL,
  `Participant_name` varchar(100) NOT NULL,
  `college_name` varchar(200) NOT NULL,
  `roll_no` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `semester` int(11) NOT NULL,
  `mobile` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nirmaan`
--

CREATE TABLE `nirmaan` (
  `id` int(11) NOT NULL,
  `Participant_name` varchar(100) NOT NULL,
  `college_name` varchar(200) NOT NULL,
  `roll_no` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `semester` int(11) NOT NULL,
  `mobile` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `Participant_name` varchar(100) NOT NULL,
  `college_name` varchar(200) NOT NULL,
  `roll_no` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `semester` int(11) NOT NULL,
  `mobile` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `robo_dangal`
--

CREATE TABLE `robo_dangal` (
  `id` int(11) NOT NULL,
  `Participant_name` varchar(100) NOT NULL,
  `college_name` varchar(200) NOT NULL,
  `roll_no` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `semester` int(11) NOT NULL,
  `mobile` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `robo_drift`
--

CREATE TABLE `robo_drift` (
  `id` int(11) NOT NULL,
  `Participant_name` varchar(100) NOT NULL,
  `college_name` varchar(200) NOT NULL,
  `roll_no` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `semester` int(11) NOT NULL,
  `mobile` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `robo_soccer`
--

CREATE TABLE `robo_soccer` (
  `id` int(11) NOT NULL,
  `participant_name` varchar(100) NOT NULL,
  `college_name` varchar(200) NOT NULL,
  `roll_no` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `semester` int(11) NOT NULL,
  `mobile` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `robo_soccer`
--

INSERT INTO `robo_soccer` (`id`, `participant_name`, `college_name`, `roll_no`, `email`, `semester`, `mobile`) VALUES
(1, 'vikas', 'gecr', '3162213058', 'ratre.vikas@gmail.com', 2, '7805925123'),
(2, 'vikas', 'gecr', '3162213058', 'ratre.vikas@gmail.com', 2, '7805925123');

-- --------------------------------------------------------

--
-- Table structure for table `setu`
--

CREATE TABLE `setu` (
  `id` int(11) NOT NULL,
  `Participant_name` varchar(100) NOT NULL,
  `college_name` varchar(200) NOT NULL,
  `roll_no` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `semester` int(11) NOT NULL,
  `mobile` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setu`
--

INSERT INTO `setu` (`id`, `Participant_name`, `college_name`, `roll_no`, `email`, `semester`, `mobile`) VALUES
(1, 'vikas', 'gecr', '3162213058', 'ratre.vikas@gmail.com', 0, '7805925123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `code_creater`
--
ALTER TABLE `code_creater`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_info`
--
ALTER TABLE `event_info`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `e_strategy`
--
ALTER TABLE `e_strategy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_end`
--
ALTER TABLE `front_end`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `graphic_design`
--
ALTER TABLE `graphic_design`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jugaad`
--
ALTER TABLE `jugaad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nirmaan`
--
ALTER TABLE `nirmaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `robo_dangal`
--
ALTER TABLE `robo_dangal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `robo_drift`
--
ALTER TABLE `robo_drift`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `robo_soccer`
--
ALTER TABLE `robo_soccer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setu`
--
ALTER TABLE `setu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `code_creater`
--
ALTER TABLE `code_creater`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `event_info`
--
ALTER TABLE `event_info`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `e_strategy`
--
ALTER TABLE `e_strategy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `front_end`
--
ALTER TABLE `front_end`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `graphic_design`
--
ALTER TABLE `graphic_design`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jugaad`
--
ALTER TABLE `jugaad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nirmaan`
--
ALTER TABLE `nirmaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `robo_dangal`
--
ALTER TABLE `robo_dangal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `robo_drift`
--
ALTER TABLE `robo_drift`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `robo_soccer`
--
ALTER TABLE `robo_soccer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `setu`
--
ALTER TABLE `setu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
