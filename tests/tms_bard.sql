-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2015 at 06:49 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tms_bard`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE IF NOT EXISTS `announcements` (
`id` int(10) unsigned NOT NULL,
  `heading` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE IF NOT EXISTS `attendances` (
`id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `day` date NOT NULL,
  `session_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trainee_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `session_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trainee_attendance` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `course_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=150 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `created_at`, `updated_at`, `day`, `session_id`, `trainee_id`, `session_name`, `trainee_attendance`, `course_id`) VALUES
(78, '2015-10-13 21:05:22', '2015-10-13 21:05:22', '2015-10-04', '', '123323432', 'session1', 'P', 1),
(79, '2015-10-13 21:05:22', '2015-10-13 21:05:22', '2015-10-04', '', '1322342', 'session1', 'A', 1),
(80, '2015-10-13 21:05:22', '2015-10-13 21:05:22', '2015-10-04', '', '12334354', 'session1', 'P', 1),
(81, '2015-10-13 21:06:22', '2015-10-13 21:06:22', '2015-10-31', '', '12345', 'session4', 'P', 2),
(82, '2015-10-13 21:06:22', '2015-10-13 21:06:22', '2015-10-31', '', '2343455456', 'session4', 'A', 2),
(83, '2015-10-13 21:06:55', '2015-10-13 21:06:55', '2015-10-22', '', '12345', 'session3', 'P', 2),
(84, '2015-10-13 21:06:55', '2015-10-13 21:06:55', '2015-10-22', '', '2343455456', 'session3', 'A', 2),
(85, '2015-10-13 21:07:35', '2015-10-13 21:07:35', '2015-10-21', '', '12345', 'session3', 'P', 2),
(86, '2015-10-13 21:07:35', '2015-10-13 21:07:35', '2015-10-21', '', '2343455456', 'session3', 'A', 2),
(87, '2015-10-13 21:33:42', '2015-10-13 21:33:42', '2015-10-23', '', '123323432', 'session1', 'P', 1),
(88, '2015-10-13 21:34:07', '2015-10-13 21:34:07', '2015-10-23', '', '123323432', 'session1', 'P', 1),
(89, '2015-10-13 21:34:56', '2015-10-13 21:34:56', '2015-10-23', '', '123323432', 'session1', 'P', 1),
(90, '2015-10-13 21:34:56', '2015-10-13 21:34:56', '2015-10-23', '', '1322342', 'session1', 'A', 1),
(91, '2015-10-13 21:34:56', '2015-10-13 21:34:56', '2015-10-23', '', '12334354', 'session1', 'P', 1),
(92, '2015-10-13 21:35:08', '2015-10-13 21:35:08', '2015-10-21', '', '12345', 'session3', 'P', 2),
(93, '2015-10-13 21:35:08', '2015-10-13 21:35:08', '2015-10-21', '', '2343455456', 'session3', 'A', 2),
(94, '2015-10-13 21:35:43', '2015-10-13 21:35:43', '2015-10-14', '', '12345', 'session4', 'P', 2),
(95, '2015-10-13 21:35:43', '2015-10-13 21:35:43', '2015-10-14', '', '2343455456', 'session4', 'A', 2),
(96, '2015-10-13 21:38:55', '2015-10-13 21:38:55', '2015-10-19', '', '12345', 'session3', 'A', 2),
(97, '2015-10-13 21:38:55', '2015-10-13 21:38:55', '2015-10-19', '', '2343455456', 'session3', 'P', 2),
(98, '2015-10-13 21:42:09', '2015-10-13 21:42:09', '2015-10-21', '', '123323432', 'session1', 'P', 1),
(99, '2015-10-13 21:42:52', '2015-10-13 21:42:52', '2015-10-21', '', '123323432', 'session1', 'P', 1),
(100, '2015-10-13 21:46:42', '2015-10-13 21:46:42', '2015-10-21', '', '123323432', 'session1', 'P', 1),
(101, '2015-10-13 21:47:39', '2015-10-13 21:47:39', '2015-10-21', '', '123323432', 'session1', 'P', 1),
(102, '2015-10-13 21:48:29', '2015-10-13 21:48:29', '2015-10-21', '', '123323432', 'session1', 'P', 1),
(103, '2015-10-13 21:48:41', '2015-10-13 21:48:41', '2015-10-21', '', '123323432', 'session1', 'P', 1),
(104, '2015-10-13 21:49:00', '2015-10-13 21:49:00', '2015-10-21', '', '123323432', 'session1', 'P', 1),
(105, '2015-10-13 21:49:44', '2015-10-13 21:49:44', '2015-10-21', '', '123323432', 'session1', 'P', 1),
(106, '2015-10-13 21:50:19', '2015-10-13 21:50:19', '2015-10-21', '', '123323432', 'session1', 'P', 1),
(107, '2015-10-13 21:53:53', '2015-10-13 21:53:53', '2015-10-21', '', '123323432', 'session1', 'P', 1),
(108, '2015-10-13 21:53:58', '2015-10-13 21:53:58', '2015-10-21', '', '123323432', 'session1', 'P', 1),
(109, '2015-10-13 21:54:08', '2015-10-13 21:54:08', '2015-10-21', '', '123323432', 'session1', 'P', 1),
(110, '2015-10-13 21:54:26', '2015-10-13 21:54:26', '2015-10-21', '', '123323432', 'session1', 'P', 1),
(111, '2015-10-13 21:55:55', '2015-10-13 21:55:55', '2015-10-21', '', '123323432', 'session1', 'P', 1),
(112, '2015-10-13 21:56:07', '2015-10-13 21:56:07', '2015-10-21', '', '123323432', 'session1', 'P', 1),
(113, '2015-10-13 21:56:15', '2015-10-13 21:56:15', '2015-10-21', '', '123323432', 'session1', 'P', 1),
(114, '2015-10-13 21:56:30', '2015-10-13 21:56:30', '2015-10-21', '', '123323432', 'session1', 'P', 1),
(115, '2015-10-13 21:56:41', '2015-10-13 21:56:41', '2015-10-21', '', '123323432', 'session1', 'P', 1),
(116, '2015-10-13 21:56:44', '2015-10-13 21:56:44', '2015-10-21', '', '123323432', 'session1', 'P', 1),
(117, '2015-10-13 21:56:46', '2015-10-13 21:56:46', '2015-10-21', '', '123323432', 'session1', 'P', 1),
(118, '2015-10-13 21:57:05', '2015-10-13 21:57:05', '2015-10-21', '', '123323432', 'session1', 'P', 1),
(119, '2015-10-13 22:09:04', '2015-10-13 22:09:04', '2015-10-21', '', '123323432', 'session1', 'P', 1),
(120, '2015-10-13 22:09:04', '2015-10-13 22:09:04', '2015-10-21', '', '1322342', 'session1', 'A', 1),
(121, '2015-10-13 22:09:04', '2015-10-13 22:09:04', '2015-10-21', '', '12334354', 'session1', 'P', 1),
(122, '2015-10-13 22:09:19', '2015-10-13 22:09:19', '2015-10-15', '', '123323432', 'session1', 'P', 1),
(123, '2015-10-13 22:09:19', '2015-10-13 22:09:19', '2015-10-15', '', '1322342', 'session1', 'A', 1),
(124, '2015-10-13 22:09:19', '2015-10-13 22:09:19', '2015-10-15', '', '12334354', 'session1', 'P', 1),
(125, '2015-10-13 22:09:55', '2015-10-13 22:09:55', '2015-10-21', '', '123323432', 'session1', 'P', 1),
(126, '2015-10-13 22:10:29', '2015-10-13 22:10:29', '2015-10-21', '', '123323432', 'session1', 'P', 1),
(127, '2015-10-13 22:10:32', '2015-10-13 22:10:32', '2015-10-21', '', '123323432', 'session1', 'P', 1),
(128, '2015-10-13 22:11:25', '2015-10-13 22:11:25', '2015-10-21', '', '123323432', 'session1', 'P', 1),
(129, '2015-10-13 22:14:33', '2015-10-13 22:14:33', '2015-10-21', '', '123323432', 'session1', 'P', 1),
(130, '2015-10-13 22:14:51', '2015-10-13 22:14:51', '2015-10-21', '', '123323432', 'session1', 'P', 1),
(131, '2015-10-13 22:15:13', '2015-10-13 22:15:13', '2015-10-21', '', '123323432', 'session1', 'P', 1),
(132, '2015-10-13 22:16:18', '2015-10-13 22:16:18', '2015-10-21', '', '123323432', 'session1', 'P', 1),
(133, '2015-10-13 22:16:34', '2015-10-13 22:16:34', '2015-10-21', '', '123323432', 'session1', 'P', 1),
(134, '2015-10-13 22:16:56', '2015-10-13 22:16:56', '2015-10-21', '', '123323432', 'session1', 'P', 1),
(135, '2015-10-13 22:17:22', '2015-10-13 22:17:22', '2015-10-21', '', '123323432', 'session1', 'P', 1),
(136, '2015-10-13 22:17:34', '2015-10-13 22:17:34', '2015-10-21', '', '123323432', 'session1', 'P', 1),
(137, '2015-10-13 22:17:44', '2015-10-13 22:17:44', '2015-10-21', '', '123323432', 'session1', 'P', 1),
(138, '2015-10-13 22:17:54', '2015-10-13 22:17:54', '2015-10-21', '', '123323432', 'session1', 'P', 1),
(139, '2015-10-13 22:18:02', '2015-10-13 22:18:02', '2015-10-21', '', '123323432', 'session1', 'P', 1),
(140, '2015-10-13 22:18:42', '2015-10-13 22:18:42', '2015-10-22', '', '12345', 'session3', 'P', 2),
(141, '2015-10-13 22:18:59', '2015-10-13 22:18:59', '2015-10-22', '', '12345', 'session3', 'P', 2),
(142, '2015-10-13 22:19:19', '2015-10-13 22:19:19', '2015-10-22', '', '12345', 'session3', 'P', 2),
(143, '2015-10-13 22:19:43', '2015-10-13 22:19:43', '2015-10-22', '', '12345', 'session3', 'P', 2),
(144, '2015-10-13 22:19:54', '2015-10-13 22:19:54', '2015-10-22', '', '12345', 'session3', 'P', 2),
(145, '2015-10-13 22:26:14', '2015-10-13 22:26:14', '2015-10-22', '', '12345', 'session3', 'P', 2),
(146, '2015-10-13 22:26:35', '2015-10-13 22:26:35', '2015-10-22', '', '12345', 'session3', 'P', 2),
(147, '2015-10-13 22:26:50', '2015-10-13 22:26:50', '2015-10-22', '', '12345', 'session3', 'P', 2),
(148, '2015-10-13 22:27:01', '2015-10-13 22:27:01', '2015-10-22', '', '12345', 'session3', 'P', 2),
(149, '2015-10-13 22:27:46', '2015-10-13 22:27:46', '2015-10-22', '', '12345', 'session3', 'P', 2);

-- --------------------------------------------------------

--
-- Table structure for table `calenders`
--

CREATE TABLE IF NOT EXISTS `calenders` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
`id` int(10) unsigned NOT NULL,
  `client_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_phone_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_address` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
`id` int(10) unsigned NOT NULL,
  `course_name` text COLLATE utf8_unicode_ci NOT NULL,
  `introduction` text COLLATE utf8_unicode_ci NOT NULL,
  `objectives` text COLLATE utf8_unicode_ci NOT NULL,
  `course_contents` text COLLATE utf8_unicode_ci NOT NULL,
  `training_methods` text COLLATE utf8_unicode_ci NOT NULL,
  `participants` text COLLATE utf8_unicode_ci NOT NULL,
  `duration` text COLLATE utf8_unicode_ci NOT NULL,
  `academic_staff` text COLLATE utf8_unicode_ci NOT NULL,
  `course_fee` text COLLATE utf8_unicode_ci NOT NULL,
  `accommodation_and_food` text COLLATE utf8_unicode_ci NOT NULL,
  `library` text COLLATE utf8_unicode_ci NOT NULL,
  `award` text COLLATE utf8_unicode_ci NOT NULL,
  `address_for_correspondence` text COLLATE utf8_unicode_ci NOT NULL,
  `training_name` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `introduction`, `objectives`, `course_contents`, `training_methods`, `participants`, `duration`, `academic_staff`, `course_fee`, `accommodation_and_food`, `library`, `award`, `address_for_correspondence`, `training_name`, `created_at`, `updated_at`) VALUES
(1, 'PHP', 'qwrertrtytryqwrertrtytryqwrertrtytry', 'qwrertrtytry', 'qwrertrtytry', 'qwrertrtytry', 'qwrertrtytry', 'qwrertrtytry', 'qwrertrtytry', 'qwrertrtytry', 'qwrertrtytry', 'qwrertrtytry', 'qwrertrtytry', 'qwrertrtytry', '--Select Traning--', '2015-10-13 07:15:21', '2015-10-13 07:15:21'),
(2, '.NET', 'dsgdgfhfdsgdgfhfdsgdgfhfdsgdgfhf', 'dsgdgfhf', 'dsgdgfhf', 'dsgdgfhf', 'dsgdgfhf', 'dsgdgfhf', 'dsgdgfhf', 'dsgdgfhf', 'dsgdgfhf', 'dsgdgfhf', 'dsgdgfhf', 'dsgdgfhf', '--Select Traning--', '2015-10-13 07:16:57', '2015-10-13 07:16:57');

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE IF NOT EXISTS `educations` (
`id` int(10) unsigned NOT NULL,
  `name_of_degree` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Year` date NOT NULL,
  `board` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE IF NOT EXISTS `faqs` (
`id` int(10) unsigned NOT NULL,
  `training_id` int(11) NOT NULL,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE IF NOT EXISTS `feedbacks` (
`id` int(10) unsigned NOT NULL,
  `voice_range` int(11) NOT NULL,
  `voice_clearity` int(11) NOT NULL,
  `communication_skills` int(11) NOT NULL,
  `rapport_building` int(11) NOT NULL,
  `interaction` int(11) NOT NULL,
  `topic_usefulness` int(11) NOT NULL,
  `material_organization` int(11) NOT NULL,
  `speakers_knowledge` int(11) NOT NULL,
  `comments` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trainer_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `health_exams`
--

CREATE TABLE IF NOT EXISTS `health_exams` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `navel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `blood_pressure` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `respiration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anemia` text COLLATE utf8_unicode_ci NOT NULL,
  `jaundice` text COLLATE utf8_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `heart` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `liver` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `spleen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kidney` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hernia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hydrocil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `left_eye` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `right_eye` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comments_mofficer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `health_reports`
--

CREATE TABLE IF NOT EXISTS `health_reports` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `present_address` text COLLATE utf8_unicode_ci NOT NULL,
  `permanent_address` text COLLATE utf8_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `age_beginning_course` int(11) NOT NULL,
  `marital_status` text COLLATE utf8_unicode_ci NOT NULL,
  `present_disease` text COLLATE utf8_unicode_ci NOT NULL,
  `physical_disability` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE IF NOT EXISTS `infos` (
`id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `trainee_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `course_id` int(10) unsigned NOT NULL,
  `institution` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `educational_qualification` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `service_experience` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `experience_year` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `birth_place` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `join_date` date NOT NULL,
  `guardians_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `village` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `post_office` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sub_district` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `service_station` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `marital` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ph_home` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `ph_office` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `ph_mobile` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `diseases` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `soprts` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `hobby` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `expertise` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `interested_game` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `height` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `weight` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `waist_abdomen` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `chest` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `weight_end_course` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `created_at`, `updated_at`, `slug`, `status`, `name`, `gender`, `trainee_id`, `course_id`, `institution`, `educational_qualification`, `service_experience`, `experience_year`, `date_of_birth`, `birth_place`, `join_date`, `guardians_name`, `village`, `post_office`, `sub_district`, `district`, `service_station`, `marital`, `ph_home`, `ph_office`, `ph_mobile`, `diseases`, `soprts`, `hobby`, `expertise`, `interested_game`, `height`, `weight`, `waist_abdomen`, `chest`, `weight_end_course`) VALUES
(1, '2015-10-13 07:15:39', '2015-10-13 07:15:39', '561d03fbe6794', 1, 'adfsgdf', 'Male', '123323432', 1, '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', 'Married', '', '', '', 'N;', '', '', 'N;', '', '', '', '', 'Normal', ''),
(2, '2015-10-13 07:15:52', '2015-10-13 07:15:52', '561d040806e05', 1, 'asdfdsgdfgd', 'Male', '1322342', 1, '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', 'Married', '', '', '', 'N;', '', '', 'N;', '', '', '', '', 'Normal', ''),
(3, '2015-10-13 07:17:15', '2015-10-13 07:17:15', '561d045b07802', 1, 'adssdgdfhfghgf', 'Male', '12345', 2, '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', 'Married', '', '', '', 'N;', '', '', 'N;', '', '', '', '', 'Normal', ''),
(4, '2015-10-13 07:17:34', '2015-10-13 07:17:34', '561d046ee6d67', 1, 'adsdgdfg', 'Female', '2343455456', 2, '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', 'Married', '', '', '', 'N;', '', '', 'N;', '', '', '', '', 'Normal', ''),
(5, '2015-10-13 07:55:10', '2015-10-13 07:55:10', '561d0d3eb8f51', 1, 'asdffdkggh', 'Male', '12334354', 1, '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', 'Married', '', '', '', 'N;', '', '', 'N;', '', '', '', '', 'Normal', '');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_09_30_154652_create_courses_table', 1),
('2015_09_30_171431_registration_form', 1),
('2015_09_30_173619_create_health_reports_table', 1),
('2015_10_01_021402_training_info', 1),
('2015_10_01_032031_create_infos_table', 1),
('2015_10_01_055042_educations', 1),
('2015_10_01_063325_create_clients_table', 1),
('2015_10_02_165316_create_health_exams_table', 1),
('2015_10_02_171906_create_trainers_table', 1),
('2015_10_03_145409_frequently_asked_questions', 1),
('2015_10_04_055205_announcement', 1),
('2015_10_04_145016_create_calenders_table', 1),
('2015_10_05_023139_create_newsletters_table', 1),
('2015_10_05_031530_create_feedbacks_table', 1),
('2015_10_05_050415_create_contacts_table', 1),
('2015_10_06_134418_create_attendances_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE IF NOT EXISTS `newsletters` (
`id` int(10) unsigned NOT NULL,
  `email_subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE IF NOT EXISTS `registrations` (
`id` int(10) unsigned NOT NULL,
  `bengali_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `english_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mother_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `village` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_office` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `upazila` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_code` int(10) unsigned NOT NULL,
  `organization` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` int(10) unsigned NOT NULL,
  `fax` int(10) unsigned NOT NULL,
  `e_mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` int(10) unsigned NOT NULL,
  `joining_date` date NOT NULL,
  `service_code` int(11) NOT NULL,
  `marital_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_person_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_person_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_person_tel` int(11) NOT NULL,
  `participant_rel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `edu_id` int(11) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `deletable` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE IF NOT EXISTS `trainers` (
`id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `educational_qualification` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `skill_set` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `previous_experience` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `cell_number` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `course_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE IF NOT EXISTS `trainings` (
`training_id` int(10) unsigned NOT NULL,
  `training_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `training_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `applying_information` text COLLATE utf8_unicode_ci NOT NULL,
  `objectives` text COLLATE utf8_unicode_ci NOT NULL,
  `courses` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `provided_resources` text COLLATE utf8_unicode_ci NOT NULL,
  `accommodation` text COLLATE utf8_unicode_ci NOT NULL,
  `testimonial` text COLLATE utf8_unicode_ci,
  `daily_schedule` text COLLATE utf8_unicode_ci NOT NULL,
  `fees_structure` text COLLATE utf8_unicode_ci NOT NULL,
  `responsible_person` text COLLATE utf8_unicode_ci NOT NULL,
  `training_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
 ADD PRIMARY KEY (`id`), ADD KEY `attendances_course_id_foreign` (`course_id`);

--
-- Indexes for table `calenders`
--
ALTER TABLE `calenders`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
 ADD PRIMARY KEY (`id`), ADD KEY `feedbacks_trainer_id_foreign` (`trainer_id`);

--
-- Indexes for table `health_exams`
--
ALTER TABLE `health_exams`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `health_reports`
--
ALTER TABLE `health_reports`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infos`
--
ALTER TABLE `infos`
 ADD PRIMARY KEY (`id`), ADD KEY `infos_course_id_foreign` (`course_id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
 ADD PRIMARY KEY (`id`), ADD KEY `trainers_course_id_foreign` (`course_id`);

--
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
 ADD PRIMARY KEY (`training_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=150;
--
-- AUTO_INCREMENT for table `calenders`
--
ALTER TABLE `calenders`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `health_exams`
--
ALTER TABLE `health_exams`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `health_reports`
--
ALTER TABLE `health_reports`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
MODIFY `training_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendances`
--
ALTER TABLE `attendances`
ADD CONSTRAINT `attendances_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `feedbacks`
--
ALTER TABLE `feedbacks`
ADD CONSTRAINT `feedbacks_trainer_id_foreign` FOREIGN KEY (`trainer_id`) REFERENCES `trainers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `infos`
--
ALTER TABLE `infos`
ADD CONSTRAINT `infos_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `trainers`
--
ALTER TABLE `trainers`
ADD CONSTRAINT `trainers_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
