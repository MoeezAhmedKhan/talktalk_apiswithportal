-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 03, 2023 at 04:57 AM
-- Server version: 10.3.38-MariaDB
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sassolut_chanti`
--

-- --------------------------------------------------------

--
-- Table structure for table `agreement`
--

CREATE TABLE `agreement` (
  `a_id` int(11) NOT NULL,
  `a_content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `agreement`
--

INSERT INTO `agreement` (`a_id`, `a_content`) VALUES
(1, 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `color_id` int(11) NOT NULL,
  `color_name` varchar(255) DEFAULT NULL,
  `bgColor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`color_id`, `color_name`, `bgColor`) VALUES
(1, 'red', '#FF0000'),
(2, 'blue', '#0000FF'),
(3, 'yellow', '#FFFF00');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `start_time` varchar(255) DEFAULT NULL,
  `end_time` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `user_id`, `country`, `status`, `start_time`, `end_time`) VALUES
(27, 110, 'Pakistan', 'active', '2023/1/12 18:45:05', '2023/1/12 18:11:56'),
(28, 100, 'Pakistan', 'inactive', '2023/2/10 23:13:30', '2023/2/10 23:14:49'),
(29, 111, 'Pakistan', 'inactive', '2023/1/19 07:34:12', '2023/1/19 07:34:14'),
(30, 113, 'Pakistan', 'inactive', '2023/1/24 00:14:28', '2023/1/24 00:24:35'),
(31, 118, 'United States of America', 'inactive', '2023/1/13 12:53:59 PM', '2023/1/13 12:54:27 PM'),
(32, 118, 'United States of America', 'inactive', '2023/1/13 12:53:59 PM', '2023/1/13 12:54:27 PM'),
(33, 117, 'Pakistan', 'inactive', '2023/1/17 20:45:37', '2023/1/17 20:45:39'),
(34, 133, '', 'inactive', '2023/1/18 06:53:58', '2023/1/18 06:53:59'),
(35, 104, 'United States of America', 'inactive', '2023/3/22 1:53:10 PM', '2023/3/22 1:53:28 PM'),
(36, 112, '', 'inactive', '2023/1/19 5:06:08 PM', '2023/1/19 5:06:11 PM'),
(37, 106, '', 'inactive', '2023/1/20 13:38:33', '2023/1/27 08:36:15'),
(38, 0, 'United States of America', 'active', '2023/2/10 1:36:31 AM', NULL),
(39, 97, 'United States of America', 'active', '2023/2/10 1:37:52 AM', NULL),
(40, 134, 'United States of America', 'active', '2023/2/10 1:40:59 AM', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'notread',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `title`, `description`, `status`, `created_at`) VALUES
(42, 96, 'latest notification', 'hello world', 'read', '2022-12-01 15:02:44'),
(43, 97, 'latest notification', 'hello world', 'notread', '2022-12-01 15:02:44'),
(44, 98, 'latest notification', 'hello world', 'notread', '2022-12-01 15:02:44'),
(45, 99, 'latest notification', 'hello world', 'read', '2022-12-01 15:02:44'),
(46, 100, 'latest notification', 'hello world', 'read', '2022-12-01 15:02:45'),
(47, 101, 'latest notification', 'hello world', 'read', '2022-12-01 15:02:45'),
(54, 96, 'test not', 'hello', 'read', '2022-12-01 15:49:38'),
(55, 97, 'test not', 'hello', 'notread', '2022-12-01 15:49:38'),
(56, 98, 'test not', 'hello', 'notread', '2022-12-01 15:49:38'),
(57, 99, 'test not', 'hello', 'read', '2022-12-01 15:49:38'),
(58, 100, 'test not', 'hello', 'read', '2022-12-01 15:49:38'),
(59, 101, 'test not', 'hello', 'read', '2022-12-01 15:49:38'),
(60, 102, 'test not', 'hello', 'notread', '2022-12-01 15:49:38'),
(70, 96, 'hello noti', 'hello world', 'read', '2022-12-02 08:45:59'),
(71, 97, 'hello noti', 'hello world', 'notread', '2022-12-02 08:45:59'),
(72, 98, 'hello noti', 'hello world', 'notread', '2022-12-02 08:45:59'),
(73, 99, 'hello noti', 'hello world', 'read', '2022-12-02 08:45:59'),
(74, 100, 'hello noti', 'hello world', 'read', '2022-12-02 08:45:59'),
(75, 101, 'hello noti', 'hello world', 'read', '2022-12-02 08:45:59'),
(76, 102, 'hello noti', 'hello world', 'notread', '2022-12-02 08:45:59'),
(77, 103, 'hello noti', 'hello world', 'read', '2022-12-02 08:46:00'),
(78, 104, 'hello noti', 'hello world', 'read', '2022-12-02 08:46:00'),
(79, 96, 'try harder ', 'jhuihojokjkllhjgjkjkj', 'read', '2022-12-07 20:54:17'),
(80, 97, 'try harder ', 'jhuihojokjkllhjgjkjkj', 'notread', '2022-12-07 20:54:17'),
(81, 98, 'try harder ', 'jhuihojokjkllhjgjkjkj', 'notread', '2022-12-07 20:54:17'),
(82, 99, 'try harder ', 'jhuihojokjkllhjgjkjkj', 'read', '2022-12-07 20:54:17'),
(83, 100, 'try harder ', 'jhuihojokjkllhjgjkjkj', 'read', '2022-12-07 20:54:18'),
(84, 101, 'try harder ', 'jhuihojokjkllhjgjkjkj', 'read', '2022-12-07 20:54:18'),
(85, 102, 'try harder ', 'jhuihojokjkllhjgjkjkj', 'notread', '2022-12-07 20:54:18'),
(86, 103, 'try harder ', 'jhuihojokjkllhjgjkjkj', 'read', '2022-12-07 20:54:18'),
(87, 104, 'try harder ', 'jhuihojokjkllhjgjkjkj', 'read', '2022-12-07 20:54:18'),
(88, 105, 'try harder ', 'jhuihojokjkllhjgjkjkj', 'read', '2022-12-07 20:54:18'),
(89, 96, 'Testing', 'Hello testing the notification ', 'read', '2022-12-07 22:43:33'),
(90, 97, 'Testing', 'Hello testing the notification ', 'notread', '2022-12-07 22:43:33'),
(91, 98, 'Testing', 'Hello testing the notification ', 'notread', '2022-12-07 22:43:34'),
(92, 99, 'Testing', 'Hello testing the notification ', 'read', '2022-12-07 22:43:34'),
(93, 100, 'Testing', 'Hello testing the notification ', 'read', '2022-12-07 22:43:34'),
(94, 101, 'Testing', 'Hello testing the notification ', 'read', '2022-12-07 22:43:34'),
(95, 102, 'Testing', 'Hello testing the notification ', 'notread', '2022-12-07 22:43:34'),
(96, 103, 'Testing', 'Hello testing the notification ', 'read', '2022-12-07 22:43:34'),
(97, 104, 'Testing', 'Hello testing the notification ', 'read', '2022-12-07 22:43:34'),
(98, 105, 'Testing', 'Hello testing the notification ', 'read', '2022-12-07 22:43:35'),
(99, 106, 'Testing', 'Hello testing the notification ', 'read', '2022-12-07 22:43:35'),
(100, 96, 'hello notif', 'hey are you there', 'read', '2022-12-08 08:32:17'),
(101, 97, 'hello notif', 'hey are you there', 'notread', '2022-12-08 08:32:18'),
(102, 98, 'hello notif', 'hey are you there', 'notread', '2022-12-08 08:32:18'),
(103, 99, 'hello notif', 'hey are you there', 'notread', '2022-12-08 08:32:18'),
(104, 100, 'hello notif', 'hey are you there', 'read', '2022-12-08 08:32:18'),
(105, 101, 'hello notif', 'hey are you there', 'read', '2022-12-08 08:32:18'),
(106, 102, 'hello notif', 'hey are you there', 'notread', '2022-12-08 08:32:18'),
(107, 103, 'hello notif', 'hey are you there', 'read', '2022-12-08 08:32:18'),
(108, 104, 'hello notif', 'hey are you there', 'read', '2022-12-08 08:32:19'),
(109, 105, 'hello notif', 'hey are you there', 'read', '2022-12-08 08:32:19'),
(110, 106, 'hello notif', 'hey are you there', 'read', '2022-12-08 08:32:19'),
(111, 96, 'hello world', 'lorem ipsum', 'read', '2022-12-08 08:35:05'),
(112, 97, 'hello world', 'lorem ipsum', 'notread', '2022-12-08 08:35:05'),
(113, 98, 'hello world', 'lorem ipsum', 'notread', '2022-12-08 08:35:05'),
(114, 99, 'hello world', 'lorem ipsum', 'notread', '2022-12-08 08:35:05'),
(115, 100, 'hello world', 'lorem ipsum', 'read', '2022-12-08 08:35:06'),
(116, 101, 'hello world', 'lorem ipsum', 'read', '2022-12-08 08:35:06'),
(117, 102, 'hello world', 'lorem ipsum', 'notread', '2022-12-08 08:35:06'),
(118, 103, 'hello world', 'lorem ipsum', 'read', '2022-12-08 08:35:06'),
(119, 104, 'hello world', 'lorem ipsum', 'read', '2022-12-08 08:35:06'),
(120, 105, 'hello world', 'lorem ipsum', 'read', '2022-12-08 08:35:06'),
(121, 106, 'hello world', 'lorem ipsum', 'read', '2022-12-08 08:35:06'),
(144, 96, 'Testing', 'Hello testing the notification 161220222', 'read', '2022-12-16 21:44:10'),
(145, 97, 'Testing', 'Hello testing the notification 161220222', 'notread', '2022-12-16 21:44:10'),
(146, 98, 'Testing', 'Hello testing the notification 161220222', 'notread', '2022-12-16 21:44:10'),
(147, 99, 'Testing', 'Hello testing the notification 161220222', 'notread', '2022-12-16 21:44:10'),
(148, 100, 'Testing', 'Hello testing the notification 161220222', 'read', '2022-12-16 21:44:10'),
(149, 101, 'Testing', 'Hello testing the notification 161220222', 'read', '2022-12-16 21:44:10'),
(150, 102, 'Testing', 'Hello testing the notification 161220222', 'notread', '2022-12-16 21:44:11'),
(151, 103, 'Testing', 'Hello testing the notification 161220222', 'notread', '2022-12-16 21:44:11'),
(152, 104, 'Testing', 'Hello testing the notification 161220222', 'read', '2022-12-16 21:44:11'),
(153, 105, 'Testing', 'Hello testing the notification 161220222', 'read', '2022-12-16 21:44:11'),
(154, 106, 'Testing', 'Hello testing the notification 161220222', 'read', '2022-12-16 21:44:11'),
(155, 108, 'Testing', 'Hello testing the notification 161220222', 'notread', '2022-12-16 21:44:11'),
(156, 109, 'Testing', 'Hello testing the notification 161220222', 'read', '2022-12-16 21:44:12'),
(157, 110, 'Testing', 'Hello testing the notification 161220222', 'read', '2022-12-16 21:44:12'),
(158, 111, 'Testing', 'Hello testing the notification 161220222', 'read', '2022-12-16 21:44:12'),
(159, 112, 'Testing', 'Hello testing the notification 161220222', 'read', '2022-12-16 21:44:12'),
(160, 113, 'Testing', 'Hello testing the notification 161220222', 'read', '2022-12-16 21:44:12'),
(161, 96, 'Test', 'Test notification', 'read', '2022-12-20 14:34:47'),
(162, 97, 'Test', 'Test notification', 'notread', '2022-12-20 14:34:48'),
(163, 98, 'Test', 'Test notification', 'notread', '2022-12-20 14:34:48'),
(164, 99, 'Test', 'Test notification', 'notread', '2022-12-20 14:34:48'),
(165, 100, 'Test', 'Test notification', 'read', '2022-12-20 14:34:48'),
(166, 101, 'Test', 'Test notification', 'read', '2022-12-20 14:34:48'),
(167, 102, 'Test', 'Test notification', 'notread', '2022-12-20 14:34:48'),
(168, 103, 'Test', 'Test notification', 'notread', '2022-12-20 14:34:48'),
(169, 104, 'Test', 'Test notification', 'read', '2022-12-20 14:34:48'),
(170, 105, 'Test', 'Test notification', 'read', '2022-12-20 14:34:49'),
(171, 106, 'Test', 'Test notification', 'read', '2022-12-20 14:34:49'),
(172, 108, 'Test', 'Test notification', 'notread', '2022-12-20 14:34:49'),
(173, 109, 'Test', 'Test notification', 'read', '2022-12-20 14:34:49'),
(174, 110, 'Test', 'Test notification', 'read', '2022-12-20 14:34:49'),
(175, 111, 'Test', 'Test notification', 'read', '2022-12-20 14:34:50'),
(176, 112, 'Test', 'Test notification', 'read', '2022-12-20 14:34:50'),
(177, 113, 'Test', 'Test notification', 'read', '2022-12-20 14:34:50'),
(178, 114, 'Test', 'Test notification', 'notread', '2022-12-20 14:34:50'),
(179, 115, 'Test', 'Test notification', 'notread', '2022-12-20 14:34:50'),
(180, 96, 'test2', 'Test notification 2', 'read', '2022-12-20 14:38:24'),
(181, 97, 'test2', 'Test notification 2', 'notread', '2022-12-20 14:38:25'),
(182, 98, 'test2', 'Test notification 2', 'notread', '2022-12-20 14:38:25'),
(183, 99, 'test2', 'Test notification 2', 'notread', '2022-12-20 14:38:25'),
(184, 100, 'test2', 'Test notification 2', 'read', '2022-12-20 14:38:25'),
(185, 101, 'test2', 'Test notification 2', 'read', '2022-12-20 14:38:25'),
(186, 102, 'test2', 'Test notification 2', 'notread', '2022-12-20 14:38:25'),
(187, 103, 'test2', 'Test notification 2', 'notread', '2022-12-20 14:38:25'),
(188, 104, 'test2', 'Test notification 2', 'read', '2022-12-20 14:38:25'),
(189, 105, 'test2', 'Test notification 2', 'read', '2022-12-20 14:38:26'),
(190, 106, 'test2', 'Test notification 2', 'read', '2022-12-20 14:38:26'),
(191, 108, 'test2', 'Test notification 2', 'notread', '2022-12-20 14:38:26'),
(192, 109, 'test2', 'Test notification 2', 'read', '2022-12-20 14:38:26'),
(193, 110, 'test2', 'Test notification 2', 'read', '2022-12-20 14:38:26'),
(194, 111, 'test2', 'Test notification 2', 'read', '2022-12-20 14:38:26'),
(195, 112, 'test2', 'Test notification 2', 'read', '2022-12-20 14:38:26'),
(196, 113, 'test2', 'Test notification 2', 'read', '2022-12-20 14:38:27'),
(197, 114, 'test2', 'Test notification 2', 'notread', '2022-12-20 14:38:27'),
(198, 115, 'test2', 'Test notification 2', 'notread', '2022-12-20 14:38:27'),
(199, 96, 'Test 3', 'tester 3', 'read', '2022-12-20 14:51:39'),
(200, 97, 'Test 3', 'tester 3', 'notread', '2022-12-20 14:51:39'),
(201, 98, 'Test 3', 'tester 3', 'notread', '2022-12-20 14:51:39'),
(202, 99, 'Test 3', 'tester 3', 'notread', '2022-12-20 14:51:39'),
(203, 100, 'Test 3', 'tester 3', 'read', '2022-12-20 14:51:39'),
(204, 101, 'Test 3', 'tester 3', 'read', '2022-12-20 14:51:40'),
(205, 102, 'Test 3', 'tester 3', 'notread', '2022-12-20 14:51:40'),
(206, 103, 'Test 3', 'tester 3', 'notread', '2022-12-20 14:51:40'),
(207, 104, 'Test 3', 'tester 3', 'read', '2022-12-20 14:51:40'),
(208, 105, 'Test 3', 'tester 3', 'read', '2022-12-20 14:51:40'),
(209, 106, 'Test 3', 'tester 3', 'read', '2022-12-20 14:51:40'),
(210, 108, 'Test 3', 'tester 3', 'notread', '2022-12-20 14:51:40'),
(211, 109, 'Test 3', 'tester 3', 'read', '2022-12-20 14:51:40'),
(212, 110, 'Test 3', 'tester 3', 'read', '2022-12-20 14:51:41'),
(213, 111, 'Test 3', 'tester 3', 'read', '2022-12-20 14:51:41'),
(214, 112, 'Test 3', 'tester 3', 'read', '2022-12-20 14:51:41'),
(215, 113, 'Test 3', 'tester 3', 'read', '2022-12-20 14:51:41'),
(216, 114, 'Test 3', 'tester 3', 'notread', '2022-12-20 14:51:41'),
(217, 115, 'Test 3', 'tester 3', 'notread', '2022-12-20 14:51:41'),
(218, 96, 'Test 4', 'testing 4', 'read', '2022-12-20 14:52:31'),
(219, 97, 'Test 4', 'testing 4', 'notread', '2022-12-20 14:52:31'),
(220, 98, 'Test 4', 'testing 4', 'notread', '2022-12-20 14:52:31'),
(221, 99, 'Test 4', 'testing 4', 'notread', '2022-12-20 14:52:32'),
(222, 100, 'Test 4', 'testing 4', 'read', '2022-12-20 14:52:32'),
(223, 101, 'Test 4', 'testing 4', 'read', '2022-12-20 14:52:32'),
(224, 102, 'Test 4', 'testing 4', 'notread', '2022-12-20 14:52:32'),
(225, 103, 'Test 4', 'testing 4', 'notread', '2022-12-20 14:52:32'),
(226, 104, 'Test 4', 'testing 4', 'read', '2022-12-20 14:52:32'),
(227, 105, 'Test 4', 'testing 4', 'read', '2022-12-20 14:52:32'),
(228, 106, 'Test 4', 'testing 4', 'read', '2022-12-20 14:52:32'),
(229, 108, 'Test 4', 'testing 4', 'notread', '2022-12-20 14:52:32'),
(230, 109, 'Test 4', 'testing 4', 'read', '2022-12-20 14:52:32'),
(231, 110, 'Test 4', 'testing 4', 'read', '2022-12-20 14:52:33'),
(232, 111, 'Test 4', 'testing 4', 'read', '2022-12-20 14:52:33'),
(233, 112, 'Test 4', 'testing 4', 'read', '2022-12-20 14:52:33'),
(234, 113, 'Test 4', 'testing 4', 'read', '2022-12-20 14:52:33'),
(235, 114, 'Test 4', 'testing 4', 'notread', '2022-12-20 14:52:33'),
(236, 115, 'Test 4', 'testing 4', 'notread', '2022-12-20 14:52:33'),
(237, 96, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'read', '2022-12-23 14:57:40'),
(238, 97, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'notread', '2022-12-23 14:57:40'),
(239, 98, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'notread', '2022-12-23 14:57:40'),
(240, 99, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'notread', '2022-12-23 14:57:40'),
(241, 100, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'read', '2022-12-23 14:57:41'),
(242, 101, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'read', '2022-12-23 14:57:41'),
(243, 102, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'notread', '2022-12-23 14:57:41'),
(244, 103, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'notread', '2022-12-23 14:57:41'),
(245, 104, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'read', '2022-12-23 14:57:41'),
(246, 105, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'read', '2022-12-23 14:57:41'),
(247, 106, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'read', '2022-12-23 14:57:41'),
(248, 108, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'notread', '2022-12-23 14:57:41'),
(249, 109, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'notread', '2022-12-23 14:57:41'),
(250, 110, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'read', '2022-12-23 14:57:42'),
(251, 111, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'read', '2022-12-23 14:57:42'),
(252, 112, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'read', '2022-12-23 14:57:42'),
(253, 113, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'read', '2022-12-23 14:57:42'),
(254, 114, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'notread', '2022-12-23 14:57:42'),
(255, 115, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'notread', '2022-12-23 14:57:42'),
(256, 96, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', 'read', '2022-12-26 21:36:27'),
(257, 97, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', 'notread', '2022-12-26 21:36:27'),
(258, 98, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', 'notread', '2022-12-26 21:36:27'),
(259, 99, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', 'notread', '2022-12-26 21:36:28'),
(260, 100, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', 'read', '2022-12-26 21:36:28'),
(261, 101, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', 'notread', '2022-12-26 21:36:28'),
(262, 102, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', 'notread', '2022-12-26 21:36:28'),
(263, 103, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', 'notread', '2022-12-26 21:36:28'),
(264, 104, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', 'read', '2022-12-26 21:36:28'),
(265, 105, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', 'read', '2022-12-26 21:36:28'),
(266, 106, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', 'read', '2022-12-26 21:36:28'),
(267, 108, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', 'notread', '2022-12-26 21:36:28'),
(268, 109, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', 'notread', '2022-12-26 21:36:29'),
(269, 110, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', 'read', '2022-12-26 21:36:29'),
(270, 111, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', 'read', '2022-12-26 21:36:29'),
(271, 112, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', 'read', '2022-12-26 21:36:29'),
(272, 113, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', 'read', '2022-12-26 21:36:29'),
(273, 114, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', 'notread', '2022-12-26 21:36:29'),
(274, 115, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', 'notread', '2022-12-26 21:36:30'),
(275, 96, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'read', '2022-12-27 17:06:11'),
(276, 97, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'notread', '2022-12-27 17:06:11'),
(277, 98, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'notread', '2022-12-27 17:06:11'),
(278, 99, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'notread', '2022-12-27 17:06:11'),
(279, 100, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'read', '2022-12-27 17:06:12'),
(280, 101, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'notread', '2022-12-27 17:06:12'),
(281, 102, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'notread', '2022-12-27 17:06:12'),
(282, 103, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'notread', '2022-12-27 17:06:12'),
(283, 104, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'read', '2022-12-27 17:06:12'),
(284, 105, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'read', '2022-12-27 17:06:12'),
(285, 106, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'read', '2022-12-27 17:06:13'),
(286, 108, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'notread', '2022-12-27 17:06:13'),
(287, 109, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'notread', '2022-12-27 17:06:13'),
(288, 110, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'read', '2022-12-27 17:06:13'),
(289, 111, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'read', '2022-12-27 17:06:13'),
(290, 112, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'read', '2022-12-27 17:06:13'),
(291, 113, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'read', '2022-12-27 17:06:13'),
(292, 114, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'notread', '2022-12-27 17:06:13'),
(293, 115, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'notread', '2022-12-27 17:06:14'),
(294, 96, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'read', '2022-12-27 17:06:55'),
(295, 97, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'notread', '2022-12-27 17:06:55'),
(296, 98, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'notread', '2022-12-27 17:06:55'),
(297, 99, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'notread', '2022-12-27 17:06:55'),
(298, 100, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'read', '2022-12-27 17:06:55'),
(299, 101, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'notread', '2022-12-27 17:06:55'),
(300, 102, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'notread', '2022-12-27 17:06:55'),
(301, 103, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'notread', '2022-12-27 17:06:55'),
(302, 104, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'read', '2022-12-27 17:06:56'),
(303, 105, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'read', '2022-12-27 17:06:56'),
(304, 106, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'read', '2022-12-27 17:06:56'),
(305, 108, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'notread', '2022-12-27 17:06:56'),
(306, 109, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'notread', '2022-12-27 17:06:56'),
(307, 110, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'read', '2022-12-27 17:06:56'),
(308, 111, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'read', '2022-12-27 17:06:56'),
(309, 112, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'read', '2022-12-27 17:06:57');
INSERT INTO `notifications` (`id`, `user_id`, `title`, `description`, `status`, `created_at`) VALUES
(310, 113, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'read', '2022-12-27 17:06:57'),
(311, 114, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'notread', '2022-12-27 17:06:57'),
(312, 115, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'notread', '2022-12-27 17:06:57'),
(313, 96, 'test notify', 'hello world', 'notread', '2023-01-14 08:48:56'),
(314, 97, 'test notify', 'hello world', 'notread', '2023-01-14 08:48:56'),
(315, 98, 'test notify', 'hello world', 'notread', '2023-01-14 08:48:56'),
(316, 99, 'test notify', 'hello world', 'notread', '2023-01-14 08:48:56'),
(317, 100, 'test notify', 'hello world', 'read', '2023-01-14 08:48:56'),
(318, 101, 'test notify', 'hello world', 'notread', '2023-01-14 08:48:57'),
(319, 102, 'test notify', 'hello world', 'notread', '2023-01-14 08:48:57'),
(320, 103, 'test notify', 'hello world', 'notread', '2023-01-14 08:48:57'),
(321, 104, 'test notify', 'hello world', 'read', '2023-01-14 08:48:58'),
(322, 105, 'test notify', 'hello world', 'notread', '2023-01-14 08:48:58'),
(323, 106, 'test notify', 'hello world', 'read', '2023-01-14 08:48:59'),
(324, 108, 'test notify', 'hello world', 'notread', '2023-01-14 08:48:59'),
(325, 109, 'test notify', 'hello world', 'notread', '2023-01-14 08:48:59'),
(326, 110, 'test notify', 'hello world', 'notread', '2023-01-14 08:48:59'),
(327, 111, 'test notify', 'hello world', 'read', '2023-01-14 08:48:59'),
(328, 112, 'test notify', 'hello world', 'read', '2023-01-14 08:49:00'),
(329, 113, 'test notify', 'hello world', 'read', '2023-01-14 08:49:00'),
(330, 114, 'test notify', 'hello world', 'notread', '2023-01-14 08:49:00'),
(331, 115, 'test notify', 'hello world', 'notread', '2023-01-14 08:49:01'),
(332, 117, 'test notify', 'hello world', 'read', '2023-01-14 08:49:01'),
(333, 118, 'test notify', 'hello world', 'notread', '2023-01-14 08:49:01'),
(334, 119, 'test notify', 'hello world', 'read', '2023-01-14 08:49:01'),
(335, 96, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', 'notread', '2023-01-19 01:57:53'),
(336, 97, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', 'notread', '2023-01-19 01:57:53'),
(337, 98, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', 'notread', '2023-01-19 01:57:53'),
(338, 99, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', 'notread', '2023-01-19 01:57:53'),
(339, 100, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', 'read', '2023-01-19 01:57:53'),
(340, 101, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', 'notread', '2023-01-19 01:57:54'),
(341, 102, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', 'notread', '2023-01-19 01:57:54'),
(342, 103, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', 'notread', '2023-01-19 01:57:54'),
(343, 104, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', 'read', '2023-01-19 01:57:54'),
(344, 105, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', 'notread', '2023-01-19 01:57:54'),
(345, 106, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', 'read', '2023-01-19 01:57:54'),
(346, 108, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', 'notread', '2023-01-19 01:57:54'),
(347, 109, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', 'notread', '2023-01-19 01:57:54'),
(348, 110, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', 'notread', '2023-01-19 01:57:54'),
(349, 111, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', 'read', '2023-01-19 01:57:55'),
(350, 112, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', 'read', '2023-01-19 01:57:55'),
(351, 113, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', 'read', '2023-01-19 01:57:55'),
(352, 114, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', 'notread', '2023-01-19 01:57:55'),
(353, 115, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', 'notread', '2023-01-19 01:57:55'),
(354, 117, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', 'notread', '2023-01-19 01:57:55'),
(355, 118, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', 'notread', '2023-01-19 01:57:55'),
(356, 133, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', 'notread', '2023-01-19 01:57:56'),
(357, 96, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', 'notread', '2023-01-19 01:59:24'),
(358, 97, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', 'notread', '2023-01-19 01:59:24'),
(359, 98, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', 'notread', '2023-01-19 01:59:24'),
(360, 99, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', 'notread', '2023-01-19 01:59:24'),
(361, 100, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', 'read', '2023-01-19 01:59:24'),
(362, 101, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', 'notread', '2023-01-19 01:59:24'),
(363, 102, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', 'notread', '2023-01-19 01:59:25'),
(364, 103, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', 'notread', '2023-01-19 01:59:25'),
(365, 104, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', 'read', '2023-01-19 01:59:25'),
(366, 105, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', 'notread', '2023-01-19 01:59:25'),
(367, 106, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', 'read', '2023-01-19 01:59:25'),
(368, 108, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', 'notread', '2023-01-19 01:59:25'),
(369, 109, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', 'notread', '2023-01-19 01:59:25'),
(370, 110, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', 'notread', '2023-01-19 01:59:25'),
(371, 111, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', 'read', '2023-01-19 01:59:25'),
(372, 112, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', 'read', '2023-01-19 01:59:26'),
(373, 113, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', 'read', '2023-01-19 01:59:26'),
(374, 114, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', 'notread', '2023-01-19 01:59:26'),
(375, 115, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', 'notread', '2023-01-19 01:59:26'),
(376, 117, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', 'notread', '2023-01-19 01:59:26'),
(377, 118, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', 'notread', '2023-01-19 01:59:26'),
(378, 133, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', 'notread', '2023-01-19 01:59:26');

-- --------------------------------------------------------

--
-- Table structure for table `notification_log`
--

CREATE TABLE `notification_log` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `notification_log`
--

INSERT INTO `notification_log` (`id`, `user_id`, `title`, `description`, `created_at`) VALUES
(59, 96, 'latest notification', 'hello world', '2022-12-01 15:02:44'),
(60, 97, 'latest notification', 'hello world', '2022-12-01 15:02:44'),
(61, 98, 'latest notification', 'hello world', '2022-12-01 15:02:44'),
(62, 99, 'latest notification', 'hello world', '2022-12-01 15:02:44'),
(63, 100, 'latest notification', 'hello world', '2022-12-01 15:02:45'),
(64, 101, 'latest notification', 'hello world', '2022-12-01 15:02:45'),
(71, 96, 'test not', 'hello', '2022-12-01 15:49:38'),
(72, 97, 'test not', 'hello', '2022-12-01 15:49:38'),
(73, 98, 'test not', 'hello', '2022-12-01 15:49:38'),
(74, 99, 'test not', 'hello', '2022-12-01 15:49:38'),
(75, 100, 'test not', 'hello', '2022-12-01 15:49:38'),
(76, 101, 'test not', 'hello', '2022-12-01 15:49:38'),
(77, 102, 'test not', 'hello', '2022-12-01 15:49:38'),
(87, 96, 'hello noti', 'hello world', '2022-12-02 08:45:59'),
(88, 97, 'hello noti', 'hello world', '2022-12-02 08:45:59'),
(89, 98, 'hello noti', 'hello world', '2022-12-02 08:45:59'),
(90, 99, 'hello noti', 'hello world', '2022-12-02 08:45:59'),
(91, 100, 'hello noti', 'hello world', '2022-12-02 08:45:59'),
(92, 101, 'hello noti', 'hello world', '2022-12-02 08:45:59'),
(93, 102, 'hello noti', 'hello world', '2022-12-02 08:45:59'),
(94, 103, 'hello noti', 'hello world', '2022-12-02 08:46:00'),
(95, 104, 'hello noti', 'hello world', '2022-12-02 08:46:00'),
(96, 96, 'try harder ', 'jhuihojokjkllhjgjkjkj', '2022-12-07 20:54:17'),
(97, 97, 'try harder ', 'jhuihojokjkllhjgjkjkj', '2022-12-07 20:54:17'),
(98, 98, 'try harder ', 'jhuihojokjkllhjgjkjkj', '2022-12-07 20:54:17'),
(99, 99, 'try harder ', 'jhuihojokjkllhjgjkjkj', '2022-12-07 20:54:17'),
(100, 100, 'try harder ', 'jhuihojokjkllhjgjkjkj', '2022-12-07 20:54:18'),
(101, 101, 'try harder ', 'jhuihojokjkllhjgjkjkj', '2022-12-07 20:54:18'),
(102, 102, 'try harder ', 'jhuihojokjkllhjgjkjkj', '2022-12-07 20:54:18'),
(103, 103, 'try harder ', 'jhuihojokjkllhjgjkjkj', '2022-12-07 20:54:18'),
(104, 104, 'try harder ', 'jhuihojokjkllhjgjkjkj', '2022-12-07 20:54:18'),
(105, 105, 'try harder ', 'jhuihojokjkllhjgjkjkj', '2022-12-07 20:54:18'),
(106, 96, 'Testing', 'Hello testing the notification ', '2022-12-07 22:43:33'),
(107, 97, 'Testing', 'Hello testing the notification ', '2022-12-07 22:43:33'),
(108, 98, 'Testing', 'Hello testing the notification ', '2022-12-07 22:43:34'),
(109, 99, 'Testing', 'Hello testing the notification ', '2022-12-07 22:43:34'),
(110, 100, 'Testing', 'Hello testing the notification ', '2022-12-07 22:43:34'),
(111, 101, 'Testing', 'Hello testing the notification ', '2022-12-07 22:43:34'),
(112, 102, 'Testing', 'Hello testing the notification ', '2022-12-07 22:43:34'),
(113, 103, 'Testing', 'Hello testing the notification ', '2022-12-07 22:43:34'),
(114, 104, 'Testing', 'Hello testing the notification ', '2022-12-07 22:43:34'),
(115, 105, 'Testing', 'Hello testing the notification ', '2022-12-07 22:43:35'),
(116, 106, 'Testing', 'Hello testing the notification ', '2022-12-07 22:43:35'),
(117, 96, 'hello notif', 'hey are you there', '2022-12-08 08:32:18'),
(118, 97, 'hello notif', 'hey are you there', '2022-12-08 08:32:18'),
(119, 98, 'hello notif', 'hey are you there', '2022-12-08 08:32:18'),
(120, 99, 'hello notif', 'hey are you there', '2022-12-08 08:32:18'),
(121, 100, 'hello notif', 'hey are you there', '2022-12-08 08:32:18'),
(122, 101, 'hello notif', 'hey are you there', '2022-12-08 08:32:18'),
(123, 102, 'hello notif', 'hey are you there', '2022-12-08 08:32:18'),
(124, 103, 'hello notif', 'hey are you there', '2022-12-08 08:32:18'),
(125, 104, 'hello notif', 'hey are you there', '2022-12-08 08:32:19'),
(126, 105, 'hello notif', 'hey are you there', '2022-12-08 08:32:19'),
(127, 106, 'hello notif', 'hey are you there', '2022-12-08 08:32:19'),
(128, 96, 'hello world', 'lorem ipsum', '2022-12-08 08:35:05'),
(129, 97, 'hello world', 'lorem ipsum', '2022-12-08 08:35:05'),
(130, 98, 'hello world', 'lorem ipsum', '2022-12-08 08:35:05'),
(131, 99, 'hello world', 'lorem ipsum', '2022-12-08 08:35:05'),
(132, 100, 'hello world', 'lorem ipsum', '2022-12-08 08:35:06'),
(133, 101, 'hello world', 'lorem ipsum', '2022-12-08 08:35:06'),
(134, 102, 'hello world', 'lorem ipsum', '2022-12-08 08:35:06'),
(135, 103, 'hello world', 'lorem ipsum', '2022-12-08 08:35:06'),
(136, 104, 'hello world', 'lorem ipsum', '2022-12-08 08:35:06'),
(137, 105, 'hello world', 'lorem ipsum', '2022-12-08 08:35:06'),
(138, 106, 'hello world', 'lorem ipsum', '2022-12-08 08:35:06'),
(139, 96, 'hello zeeshan bhai', 'done ', '2022-12-09 12:25:43'),
(140, 97, 'hello zeeshan bhai', 'done ', '2022-12-09 12:25:43'),
(141, 98, 'hello zeeshan bhai', 'done ', '2022-12-09 12:25:43'),
(142, 99, 'hello zeeshan bhai', 'done ', '2022-12-09 12:25:43'),
(143, 100, 'hello zeeshan bhai', 'done ', '2022-12-09 12:25:43'),
(144, 101, 'hello zeeshan bhai', 'done ', '2022-12-09 12:25:43'),
(145, 102, 'hello zeeshan bhai', 'done ', '2022-12-09 12:25:44'),
(146, 103, 'hello zeeshan bhai', 'done ', '2022-12-09 12:25:44'),
(147, 104, 'hello zeeshan bhai', 'done ', '2022-12-09 12:25:44'),
(148, 105, 'hello zeeshan bhai', 'done ', '2022-12-09 12:25:44'),
(149, 106, 'hello zeeshan bhai', 'done ', '2022-12-09 12:25:44'),
(150, 96, 'Lorem Ipsum Mr Zeeshan', 'Hello ', '2022-12-09 16:08:22'),
(151, 97, 'Lorem Ipsum Mr Zeeshan', 'Hello ', '2022-12-09 16:08:22'),
(152, 98, 'Lorem Ipsum Mr Zeeshan', 'Hello ', '2022-12-09 16:08:22'),
(153, 99, 'Lorem Ipsum Mr Zeeshan', 'Hello ', '2022-12-09 16:08:22'),
(154, 100, 'Lorem Ipsum Mr Zeeshan', 'Hello ', '2022-12-09 16:08:22'),
(155, 101, 'Lorem Ipsum Mr Zeeshan', 'Hello ', '2022-12-09 16:08:22'),
(156, 102, 'Lorem Ipsum Mr Zeeshan', 'Hello ', '2022-12-09 16:08:23'),
(157, 103, 'Lorem Ipsum Mr Zeeshan', 'Hello ', '2022-12-09 16:08:23'),
(158, 104, 'Lorem Ipsum Mr Zeeshan', 'Hello ', '2022-12-09 16:08:23'),
(159, 105, 'Lorem Ipsum Mr Zeeshan', 'Hello ', '2022-12-09 16:08:23'),
(160, 106, 'Lorem Ipsum Mr Zeeshan', 'Hello ', '2022-12-09 16:08:23'),
(161, 96, 'Testing', 'Hello testing the notification 161220222', '2022-12-16 21:44:10'),
(162, 97, 'Testing', 'Hello testing the notification 161220222', '2022-12-16 21:44:10'),
(163, 98, 'Testing', 'Hello testing the notification 161220222', '2022-12-16 21:44:10'),
(164, 99, 'Testing', 'Hello testing the notification 161220222', '2022-12-16 21:44:10'),
(165, 100, 'Testing', 'Hello testing the notification 161220222', '2022-12-16 21:44:10'),
(166, 101, 'Testing', 'Hello testing the notification 161220222', '2022-12-16 21:44:10'),
(167, 102, 'Testing', 'Hello testing the notification 161220222', '2022-12-16 21:44:11'),
(168, 103, 'Testing', 'Hello testing the notification 161220222', '2022-12-16 21:44:11'),
(169, 104, 'Testing', 'Hello testing the notification 161220222', '2022-12-16 21:44:11'),
(170, 105, 'Testing', 'Hello testing the notification 161220222', '2022-12-16 21:44:11'),
(171, 106, 'Testing', 'Hello testing the notification 161220222', '2022-12-16 21:44:11'),
(172, 108, 'Testing', 'Hello testing the notification 161220222', '2022-12-16 21:44:12'),
(173, 109, 'Testing', 'Hello testing the notification 161220222', '2022-12-16 21:44:12'),
(174, 110, 'Testing', 'Hello testing the notification 161220222', '2022-12-16 21:44:12'),
(175, 111, 'Testing', 'Hello testing the notification 161220222', '2022-12-16 21:44:12'),
(176, 112, 'Testing', 'Hello testing the notification 161220222', '2022-12-16 21:44:12'),
(177, 113, 'Testing', 'Hello testing the notification 161220222', '2022-12-16 21:44:12'),
(178, 96, 'Test', 'Test notification', '2022-12-20 14:34:47'),
(179, 97, 'Test', 'Test notification', '2022-12-20 14:34:48'),
(180, 98, 'Test', 'Test notification', '2022-12-20 14:34:48'),
(181, 99, 'Test', 'Test notification', '2022-12-20 14:34:48'),
(182, 100, 'Test', 'Test notification', '2022-12-20 14:34:48'),
(183, 101, 'Test', 'Test notification', '2022-12-20 14:34:48'),
(184, 102, 'Test', 'Test notification', '2022-12-20 14:34:48'),
(185, 103, 'Test', 'Test notification', '2022-12-20 14:34:48'),
(186, 104, 'Test', 'Test notification', '2022-12-20 14:34:48'),
(187, 105, 'Test', 'Test notification', '2022-12-20 14:34:49'),
(188, 106, 'Test', 'Test notification', '2022-12-20 14:34:49'),
(189, 108, 'Test', 'Test notification', '2022-12-20 14:34:49'),
(190, 109, 'Test', 'Test notification', '2022-12-20 14:34:49'),
(191, 110, 'Test', 'Test notification', '2022-12-20 14:34:49'),
(192, 111, 'Test', 'Test notification', '2022-12-20 14:34:50'),
(193, 112, 'Test', 'Test notification', '2022-12-20 14:34:50'),
(194, 113, 'Test', 'Test notification', '2022-12-20 14:34:50'),
(195, 114, 'Test', 'Test notification', '2022-12-20 14:34:50'),
(196, 115, 'Test', 'Test notification', '2022-12-20 14:34:50'),
(197, 96, 'test2', 'Test notification 2', '2022-12-20 14:38:24'),
(198, 97, 'test2', 'Test notification 2', '2022-12-20 14:38:25'),
(199, 98, 'test2', 'Test notification 2', '2022-12-20 14:38:25'),
(200, 99, 'test2', 'Test notification 2', '2022-12-20 14:38:25'),
(201, 100, 'test2', 'Test notification 2', '2022-12-20 14:38:25'),
(202, 101, 'test2', 'Test notification 2', '2022-12-20 14:38:25'),
(203, 102, 'test2', 'Test notification 2', '2022-12-20 14:38:25'),
(204, 103, 'test2', 'Test notification 2', '2022-12-20 14:38:25'),
(205, 104, 'test2', 'Test notification 2', '2022-12-20 14:38:25'),
(206, 105, 'test2', 'Test notification 2', '2022-12-20 14:38:26'),
(207, 106, 'test2', 'Test notification 2', '2022-12-20 14:38:26'),
(208, 108, 'test2', 'Test notification 2', '2022-12-20 14:38:26'),
(209, 109, 'test2', 'Test notification 2', '2022-12-20 14:38:26'),
(210, 110, 'test2', 'Test notification 2', '2022-12-20 14:38:26'),
(211, 111, 'test2', 'Test notification 2', '2022-12-20 14:38:26'),
(212, 112, 'test2', 'Test notification 2', '2022-12-20 14:38:26'),
(213, 113, 'test2', 'Test notification 2', '2022-12-20 14:38:27'),
(214, 114, 'test2', 'Test notification 2', '2022-12-20 14:38:27'),
(215, 115, 'test2', 'Test notification 2', '2022-12-20 14:38:27'),
(216, 96, 'Test 3', 'tester 3', '2022-12-20 14:51:39'),
(217, 97, 'Test 3', 'tester 3', '2022-12-20 14:51:39'),
(218, 98, 'Test 3', 'tester 3', '2022-12-20 14:51:39'),
(219, 99, 'Test 3', 'tester 3', '2022-12-20 14:51:39'),
(220, 100, 'Test 3', 'tester 3', '2022-12-20 14:51:39'),
(221, 101, 'Test 3', 'tester 3', '2022-12-20 14:51:40'),
(222, 102, 'Test 3', 'tester 3', '2022-12-20 14:51:40'),
(223, 103, 'Test 3', 'tester 3', '2022-12-20 14:51:40'),
(224, 104, 'Test 3', 'tester 3', '2022-12-20 14:51:40'),
(225, 105, 'Test 3', 'tester 3', '2022-12-20 14:51:40'),
(226, 106, 'Test 3', 'tester 3', '2022-12-20 14:51:40'),
(227, 108, 'Test 3', 'tester 3', '2022-12-20 14:51:40'),
(228, 109, 'Test 3', 'tester 3', '2022-12-20 14:51:41'),
(229, 110, 'Test 3', 'tester 3', '2022-12-20 14:51:41'),
(230, 111, 'Test 3', 'tester 3', '2022-12-20 14:51:41'),
(231, 112, 'Test 3', 'tester 3', '2022-12-20 14:51:41'),
(232, 113, 'Test 3', 'tester 3', '2022-12-20 14:51:41'),
(233, 114, 'Test 3', 'tester 3', '2022-12-20 14:51:41'),
(234, 115, 'Test 3', 'tester 3', '2022-12-20 14:51:41'),
(235, 96, 'Test 4', 'testing 4', '2022-12-20 14:52:31'),
(236, 97, 'Test 4', 'testing 4', '2022-12-20 14:52:31'),
(237, 98, 'Test 4', 'testing 4', '2022-12-20 14:52:31'),
(238, 99, 'Test 4', 'testing 4', '2022-12-20 14:52:32'),
(239, 100, 'Test 4', 'testing 4', '2022-12-20 14:52:32'),
(240, 101, 'Test 4', 'testing 4', '2022-12-20 14:52:32'),
(241, 102, 'Test 4', 'testing 4', '2022-12-20 14:52:32'),
(242, 103, 'Test 4', 'testing 4', '2022-12-20 14:52:32'),
(243, 104, 'Test 4', 'testing 4', '2022-12-20 14:52:32'),
(244, 105, 'Test 4', 'testing 4', '2022-12-20 14:52:32'),
(245, 106, 'Test 4', 'testing 4', '2022-12-20 14:52:32'),
(246, 108, 'Test 4', 'testing 4', '2022-12-20 14:52:32'),
(247, 109, 'Test 4', 'testing 4', '2022-12-20 14:52:33'),
(248, 110, 'Test 4', 'testing 4', '2022-12-20 14:52:33'),
(249, 111, 'Test 4', 'testing 4', '2022-12-20 14:52:33'),
(250, 112, 'Test 4', 'testing 4', '2022-12-20 14:52:33'),
(251, 113, 'Test 4', 'testing 4', '2022-12-20 14:52:33'),
(252, 114, 'Test 4', 'testing 4', '2022-12-20 14:52:33'),
(253, 115, 'Test 4', 'testing 4', '2022-12-20 14:52:33'),
(254, 96, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-23 14:57:40'),
(255, 97, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-23 14:57:40'),
(256, 98, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-23 14:57:40'),
(257, 99, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-23 14:57:40'),
(258, 100, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-23 14:57:41'),
(259, 101, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-23 14:57:41'),
(260, 102, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-23 14:57:41'),
(261, 103, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-23 14:57:41'),
(262, 104, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-23 14:57:41'),
(263, 105, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-23 14:57:41'),
(264, 106, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-23 14:57:41'),
(265, 108, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-23 14:57:41'),
(266, 109, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-23 14:57:41'),
(267, 110, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-23 14:57:42'),
(268, 111, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-23 14:57:42'),
(269, 112, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-23 14:57:42'),
(270, 113, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-23 14:57:42'),
(271, 114, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-23 14:57:42'),
(272, 115, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-23 14:57:42'),
(273, 96, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', '2022-12-26 21:36:27'),
(274, 97, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', '2022-12-26 21:36:27'),
(275, 98, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', '2022-12-26 21:36:27'),
(276, 99, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', '2022-12-26 21:36:28'),
(277, 100, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', '2022-12-26 21:36:28'),
(278, 101, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', '2022-12-26 21:36:28'),
(279, 102, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', '2022-12-26 21:36:28'),
(280, 103, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', '2022-12-26 21:36:28'),
(281, 104, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', '2022-12-26 21:36:28'),
(282, 105, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', '2022-12-26 21:36:28'),
(283, 106, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', '2022-12-26 21:36:28'),
(284, 108, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', '2022-12-26 21:36:28'),
(285, 109, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', '2022-12-26 21:36:29'),
(286, 110, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', '2022-12-26 21:36:29'),
(287, 111, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', '2022-12-26 21:36:29'),
(288, 112, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', '2022-12-26 21:36:29'),
(289, 113, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', '2022-12-26 21:36:29'),
(290, 114, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', '2022-12-26 21:36:29'),
(291, 115, 'Admin User Testing Notifications', 'Hi. I\'m an admin user. Testing notifications on your app. â™¥', '2022-12-26 21:36:30'),
(292, 96, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:11'),
(293, 97, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:11'),
(294, 98, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:11'),
(295, 99, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:11'),
(296, 100, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:12'),
(297, 101, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:12'),
(298, 102, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:12'),
(299, 103, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:12'),
(300, 104, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:12'),
(301, 105, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:12'),
(302, 106, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:13'),
(303, 108, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:13'),
(304, 109, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:13'),
(305, 110, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:13'),
(306, 111, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:13'),
(307, 112, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:13'),
(308, 113, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:13'),
(309, 114, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:14'),
(310, 115, 'Announcement for January', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:14'),
(311, 96, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:55'),
(312, 97, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:55'),
(313, 98, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:55'),
(314, 99, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:55'),
(315, 100, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:55'),
(316, 101, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:55'),
(317, 102, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:55'),
(318, 103, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:55'),
(319, 104, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:56'),
(320, 105, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:56'),
(321, 106, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:56'),
(322, 108, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:56'),
(323, 109, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:56'),
(324, 110, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:56'),
(325, 111, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:56'),
(326, 112, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:57'),
(327, 113, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:57');
INSERT INTO `notification_log` (`id`, `user_id`, `title`, `description`, `created_at`) VALUES
(328, 114, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:57'),
(329, 115, 'Announcement for January 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-12-27 17:06:57'),
(330, 96, 'test notify', 'hello world', '2023-01-14 08:48:56'),
(331, 97, 'test notify', 'hello world', '2023-01-14 08:48:56'),
(332, 98, 'test notify', 'hello world', '2023-01-14 08:48:56'),
(333, 99, 'test notify', 'hello world', '2023-01-14 08:48:56'),
(334, 100, 'test notify', 'hello world', '2023-01-14 08:48:56'),
(335, 101, 'test notify', 'hello world', '2023-01-14 08:48:57'),
(336, 102, 'test notify', 'hello world', '2023-01-14 08:48:57'),
(337, 103, 'test notify', 'hello world', '2023-01-14 08:48:58'),
(338, 104, 'test notify', 'hello world', '2023-01-14 08:48:58'),
(339, 105, 'test notify', 'hello world', '2023-01-14 08:48:59'),
(340, 106, 'test notify', 'hello world', '2023-01-14 08:48:59'),
(341, 108, 'test notify', 'hello world', '2023-01-14 08:48:59'),
(342, 109, 'test notify', 'hello world', '2023-01-14 08:48:59'),
(343, 110, 'test notify', 'hello world', '2023-01-14 08:48:59'),
(344, 111, 'test notify', 'hello world', '2023-01-14 08:49:00'),
(345, 112, 'test notify', 'hello world', '2023-01-14 08:49:00'),
(346, 113, 'test notify', 'hello world', '2023-01-14 08:49:00'),
(347, 114, 'test notify', 'hello world', '2023-01-14 08:49:01'),
(348, 115, 'test notify', 'hello world', '2023-01-14 08:49:01'),
(349, 117, 'test notify', 'hello world', '2023-01-14 08:49:01'),
(350, 118, 'test notify', 'hello world', '2023-01-14 08:49:01'),
(351, 119, 'test notify', 'hello world', '2023-01-14 08:49:01'),
(352, 96, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', '2023-01-19 01:57:53'),
(353, 97, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', '2023-01-19 01:57:53'),
(354, 98, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', '2023-01-19 01:57:53'),
(355, 99, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', '2023-01-19 01:57:53'),
(356, 100, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', '2023-01-19 01:57:53'),
(357, 101, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', '2023-01-19 01:57:54'),
(358, 102, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', '2023-01-19 01:57:54'),
(359, 103, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', '2023-01-19 01:57:54'),
(360, 104, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', '2023-01-19 01:57:54'),
(361, 105, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', '2023-01-19 01:57:54'),
(362, 106, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', '2023-01-19 01:57:54'),
(363, 108, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', '2023-01-19 01:57:54'),
(364, 109, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', '2023-01-19 01:57:54'),
(365, 110, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', '2023-01-19 01:57:54'),
(366, 111, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', '2023-01-19 01:57:55'),
(367, 112, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', '2023-01-19 01:57:55'),
(368, 113, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', '2023-01-19 01:57:55'),
(369, 114, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', '2023-01-19 01:57:55'),
(370, 115, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', '2023-01-19 01:57:55'),
(371, 117, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', '2023-01-19 01:57:55'),
(372, 118, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', '2023-01-19 01:57:55'),
(373, 133, 'User Testing Notifications', 'Hi. I\'m the admin user. Testing notifications on your app. â™¥', '2023-01-19 01:57:56'),
(374, 96, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', '2023-01-19 01:59:24'),
(375, 97, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', '2023-01-19 01:59:24'),
(376, 98, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', '2023-01-19 01:59:24'),
(377, 99, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', '2023-01-19 01:59:24'),
(378, 100, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', '2023-01-19 01:59:24'),
(379, 101, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', '2023-01-19 01:59:24'),
(380, 102, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', '2023-01-19 01:59:25'),
(381, 103, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', '2023-01-19 01:59:25'),
(382, 104, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', '2023-01-19 01:59:25'),
(383, 105, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', '2023-01-19 01:59:25'),
(384, 106, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', '2023-01-19 01:59:25'),
(385, 108, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', '2023-01-19 01:59:25'),
(386, 109, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', '2023-01-19 01:59:25'),
(387, 110, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', '2023-01-19 01:59:25'),
(388, 111, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', '2023-01-19 01:59:25'),
(389, 112, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', '2023-01-19 01:59:26'),
(390, 113, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', '2023-01-19 01:59:26'),
(391, 114, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', '2023-01-19 01:59:26'),
(392, 115, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', '2023-01-19 01:59:26'),
(393, 117, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', '2023-01-19 01:59:26'),
(394, 118, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', '2023-01-19 01:59:26'),
(395, 133, 'Testing to see if \"Dear User\" is still there', 'Testing to see if \"Dear User\" is still there', '2023-01-19 01:59:26');

-- --------------------------------------------------------

--
-- Table structure for table `occasions`
--

CREATE TABLE `occasions` (
  `oid` int(11) NOT NULL,
  `o_name` varchar(255) DEFAULT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `occasions`
--

INSERT INTO `occasions` (`oid`, `o_name`, `img`) VALUES
(1, 'Random Questions', 'randomquestions.png'),
(2, 'Trivia Questions', 'qa.png');

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policy`
--

CREATE TABLE `privacy_policy` (
  `p_id` int(11) NOT NULL,
  `p_content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `privacy_policy`
--

INSERT INTO `privacy_policy` (`p_id`, `p_content`) VALUES
(1, 'We do not collect personally identifiable information e.g., name, e-mail address, contact or similar information unless you choose to provide it to us. If you voluntarily provide us with personal information, for example by sending an e-mail or by filling out a form and submitting it through our Website, we may use that information only to respond to your message and to help us provide you with the information or services that you request. To the extent that we process your personal information based on your consent, you may withdraw your consent at any time as stated below.');

-- --------------------------------------------------------

--
-- Table structure for table `privelages`
--

CREATE TABLE `privelages` (
  `p_id` int(11) NOT NULL,
  `privelage` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `privelages`
--

INSERT INTO `privelages` (`p_id`, `privelage`) VALUES
(2, 'addquestion_category'),
(3, 'add_questions'),
(4, 'manage_notification'),
(5, 'addtip'),
(6, 'managecat'),
(7, 'manage_questions'),
(8, 'manage_tips');

-- --------------------------------------------------------

--
-- Table structure for table `privelages_bt`
--

CREATE TABLE `privelages_bt` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `privelages_bt`
--

INSERT INTO `privelages_bt` (`id`, `user_id`, `p_id`, `status`) VALUES
(90, 1, 2, 'active'),
(91, 1, 3, 'active'),
(92, 1, 4, 'active'),
(93, 1, 5, 'active'),
(94, 1, 6, 'active'),
(95, 1, 7, 'active'),
(96, 1, 8, 'active'),
(100, 132, 2, 'suspended');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` longtext NOT NULL,
  `answer` text DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `occasion_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `answer`, `category_id`, `occasion_id`) VALUES
(202, 'How do you feel about putting mayonnaise on french fries?', 'Nothing', 25, 1),
(203, 'Whatâ€™s the strangest thing a friend has ever done at your house?', 'Nothing', 25, 1),
(204, 'Should you eat pizza with your hands or with a fork and knife?', 'Nothing', 25, 1),
(205, 'What is now considered classy, but used to be very trashy?', 'Nothing', 25, 1),
(206, 'If animals could talk, which would be the most charming?', 'Nothing', 25, 1),
(207, 'What is something that is popular now, but in 10 years we might be ashamed of?', 'Nothing', 25, 1),
(208, 'If you time traveled naked 200 years in the past, how would you prove that you were from the future?', 'Nothing', 25, 1),
(209, 'What are a few fun ways to answer the boring question of â€œwhat do you do for work?â€', 'Nothing', 25, 1),
(210, 'What was your favorite thing to do as a child that you would love to still be able to do as an adult?', 'Nothing', 25, 1),
(211, 'What is a dance move that everyone looks silly doing??', 'Nothing', 25, 1),
(212, 'What is the most surprising thing you have seen in someone elseâ€™s home?', 'Nothing', 25, 1),
(213, 'Whatâ€™s worst smell you have ever experienced?', 'Nothing', 25, 1),
(214, 'Who inspires you?', 'Nothing', 25, 1),
(215, 'If you could switch lives with anyone currently living for an entire day who would it be?', 'Nothing', 25, 1),
(216, 'Whitewater rafting, hiking, or skiing?', 'Nothing', 25, 1),
(217, 'How did you meet your best friend?', 'Nothing', 25, 1),
(218, 'What motivates you?', 'Nothing', 25, 1),
(219, 'What is something youâ€™ve always wanted to try but have been too afraid to?', 'Nothing', 25, 1),
(220, 'What is your hidden talent?', 'Nothing', 25, 1),
(221, 'What is something youâ€™ve tried but would never do again?', 'Nothing', 25, 1),
(222, 'If you only had 1 week left on Earth, what would you do?', 'Nothing', 25, 1),
(223, 'If you could go back in time and tell your younger self one thing, what would it be?', 'Nothing', 25, 1),
(224, 'If you could describe summer in 3 words, what would they be?', 'Nothing', 25, 1),
(225, 'What is your favorite summer memory?', 'Nothing', 25, 1),
(226, 'What is your most memorable summer vacation?', 'Nothing', 25, 1),
(227, 'What is your favorite way to cool off in the summertime?', 'Nothing', 25, 1),
(228, 'What is your favorite family activity for summertime?', 'Nothing', 25, 1),
(229, 'If you were invited to a cookout, what would you bring and why?', 'Nothing', 25, 1),
(230, 'Which do you prefer, summer or winter?', 'Nothing', 25, 1),
(231, 'What is your favorite Fall festival?', 'Nothing', 25, 1),
(232, 'Have you ever made apple cider or any other special drink from scratch?', 'Nothing', 25, 1),
(233, 'If you could, would you like go experience Oktoberfest in Munich?', 'Nothing', 25, 1),
(234, 'What is the scariest movie youâ€™ve ever seen?', 'Nothing', 25, 1),
(235, 'Have you ever been camping?', 'Nothing', 25, 1),
(236, 'What is your favorite way to spend a lazy day?', 'Nothing', 25, 1),
(237, 'If you could have it be warm year round, would you?', 'Nothing', 25, 1),
(238, 'What is your favorite winter sport?', 'Nothing', 25, 1),
(239, 'If you had the chance to go to the north pole would you take it?', 'Nothing', 25, 1),
(240, 'Skiing, snowboarding, or sledding?', 'Nothing', 25, 1),
(241, 'Would you ever go ice-fishing?', 'Nothing', 25, 1),
(242, 'Did you ever have the chance to make a snowman? If so, what was your best one? If not, what would you start with?', 'Nothing', 25, 1),
(243, 'There are 50 Eskimo words for snow, what is something that you think we need more words for?', 'Nothing', 25, 1),
(244, 'What do you think about Santa Claus?', 'Nothing', 25, 1),
(245, 'What is your favorite food to eat on a snowy date?', 'Nothing', 25, 1),
(246, 'What food would be at your ideal picnic?', 'Nothing', 25, 1),
(247, 'Jogging, cycling, or swimming?', 'Nothing', 25, 1),
(248, 'Have you ever been horseback riding?', 'Nothing', 25, 1),
(249, 'Youâ€™re on your way to an important meeting and you get caught in the rain without an umbrella, what do you do?', 'Nothing', 25, 1),
(250, 'If you could build a garden with only 3 plants, which ones would you grow?', 'Nothing', 25, 1),
(251, 'Do you believe in spring cleaning?', 'Nothing', 25, 1),
(252, 'What are your 3 favorite personality traits?', 'Nothing', 25, 1),
(253, 'If you could only take 2 items with you to a deserted island, what would they be?', 'Nothing', 25, 1),
(254, 'Do you prefer dogs or cats and why?', 'Nothing', 25, 1),
(261, 'Taron is adding a question without an answer. How do you feel about that?', '', 25, 1),
(262, 'Why does it say added a new category when I add a question?', '', 25, 1),
(285, 'What ks the name of your first pet?', '', 25, 1),
(286, 'Where did your parents first met?', '', 25, 1),
(296, 'What do you most like about yourself?', '', 25, 1),
(297, 'What do you consider your greatest weakness?', '', 34, 1);

-- --------------------------------------------------------

--
-- Table structure for table `questions_categories`
--

CREATE TABLE `questions_categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `questions_categories`
--

INSERT INTO `questions_categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(25, 'Random', '2022-12-16 19:34:46', NULL),
(34, 'Interview Questions', '2023-01-10 20:28:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `streak`
--

CREATE TABLE `streak` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `streak`
--

INSERT INTO `streak` (`id`, `user_id`, `date`) VALUES
(72, 97, '2022-11-17'),
(73, 96, '2022-11-17'),
(74, 98, '2022-11-17'),
(75, 96, '2022-11-17'),
(76, 96, '2022-12-09'),
(77, 96, '2022-12-12'),
(78, 96, '2022-12-13'),
(79, 108, '2022-12-13'),
(80, 104, '2022-12-13'),
(81, 109, '2022-12-14'),
(82, 104, '2022-12-14'),
(83, 105, '2022-12-14'),
(84, 101, '2022-12-14'),
(85, 101, '2022-12-15'),
(86, 110, '2022-12-15'),
(87, 111, '2022-12-15'),
(88, 109, '2022-12-15'),
(89, 112, '2022-12-15'),
(90, 110, '2022-12-16'),
(91, 101, '2022-12-16'),
(92, 112, '2022-12-16'),
(93, 104, '2022-12-16'),
(94, 114, '2022-12-16'),
(95, 110, '2022-12-17'),
(96, 110, '2022-12-19'),
(97, 115, '2022-12-19'),
(98, 110, '2022-12-20'),
(99, 104, '2022-12-21'),
(100, 96, '2022-12-21'),
(101, 109, '2022-12-21'),
(102, 96, '2022-12-24'),
(103, 110, '2022-12-24'),
(104, 112, '2022-12-26'),
(105, 105, '2022-12-27'),
(106, 112, '2022-12-27'),
(107, 96, '2023-01-04'),
(108, 106, '2023-01-10'),
(109, 104, '2023-01-10'),
(110, 105, '2023-01-11'),
(111, 112, '2023-01-11'),
(112, 110, '2023-01-11'),
(113, 118, '2023-01-11'),
(114, 110, '2023-01-12'),
(115, 118, '2023-01-13'),
(116, 100, '2023-01-13'),
(117, 111, '2023-01-13'),
(118, 104, '2023-01-16'),
(119, 117, '2023-01-17'),
(120, 104, '2023-01-18'),
(121, 112, '2023-01-19'),
(122, 106, '2023-01-19'),
(123, 104, '2023-01-20'),
(124, 104, '2023-02-03'),
(125, 104, '2023-02-04'),
(126, 101, '2023-02-07'),
(127, 111, '2023-02-12'),
(128, 104, '2023-02-22');

-- --------------------------------------------------------

--
-- Table structure for table `tip_log`
--

CREATE TABLE `tip_log` (
  `id` int(11) NOT NULL,
  `tip` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tip_of_day`
--

CREATE TABLE `tip_of_day` (
  `id` int(11) NOT NULL,
  `tip` text DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tip_of_day`
--

INSERT INTO `tip_of_day` (`id`, `tip`, `created_at`) VALUES
(137, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2023-01-24');

-- --------------------------------------------------------

--
-- Table structure for table `tip_title`
--

CREATE TABLE `tip_title` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tip_title`
--

INSERT INTO `tip_title` (`id`, `title`) VALUES
(1, 'Tip Of The Day');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT 2 COMMENT '0 for admin, 1 for sub admin',
  `social_id` longtext DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `amount` varchar(200) DEFAULT NULL,
  `profilepic` mediumtext DEFAULT NULL,
  `mission_statement` text DEFAULT NULL,
  `notification_token` varchar(200) DEFAULT NULL,
  `isLoggedIn` tinyint(1) NOT NULL DEFAULT 0,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `social_id`, `name`, `username`, `email`, `password`, `phone`, `amount`, `profilepic`, `mission_statement`, `notification_token`, `isLoggedIn`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, '', 'Admin', '', 'admin@gmail.com', 'admin', '33333333333', NULL, '', NULL, '', 0, 'active', '2022-07-13 14:15:49', NULL),
(96, 2, '', 'Mike Andreson', '', 'mike@gmail.com', '11111111', '4471632925', NULL, '1513916706_Profileimage', 'Mike Andreson, thats not the name but a brand.', 'cad5df37-dc67-49d8-8a92-c7cde3a4fc7d', 0, 'active', '2022-11-30 16:07:55', NULL),
(97, 2, '', 'Walter Scott', '', 'scott@gmail.com', '11111111', '1234567890', NULL, '828154706_Profileimage', 'That is a test statement', 'null', 0, 'active', '2022-11-30 16:14:35', NULL),
(98, 2, '', 'Daniel Wingett', '', 'zeshanfaisal308@gmail.com', '11111111', '13358679860', NULL, '', 'this is my test statement', '', 0, 'active', '2022-11-30 16:20:32', NULL),
(99, 2, '', 'Carter Otrig ', '', 'carter.otrig@gmail.com', '12345678', '8484946646', NULL, '', 'Hello testing 123', 'ec07d5f7-87f7-4008-8827-957afaaf6bb9', 0, 'active', '2022-11-30 20:23:27', NULL),
(100, 2, '', 'Daniel', '', 'mm.sodais@gmail.com', 'Test1234', '39595559595', NULL, NULL, NULL, '4f1a430d-dced-4028-abcd-b333ac1d5009', 0, 'active', '2022-11-30 21:19:34', NULL),
(101, 2, '107242646244046110185', 'Mark Tylor', '', 'user.4.314248948039334@gmail.com', '2378.4677059130104', '5511223377', NULL, '47409011_Profileimage', NULL, '6205f8ce-c43d-41e0-9542-9e5a593a7fc0', 0, 'active', '2022-12-01 12:23:18', NULL),
(102, 2, '116327352933737136922', 'James Foster', '', 'user.437.3378175796415@gmail.com', '11653.902183065455', '7657635765', NULL, '2010091154_Profileimage', 'This is my statemenr', 'null', 0, 'active', '2022-12-01 14:19:48', NULL),
(103, 2, '111177873092367910003', 'Lewis Padron', '', 'user.210.9867029591579@gmail.com', '12783.471596644395', '3331116622', NULL, NULL, 'this is a test status', 'f832ba09-94c8-4a74-a265-22390f9f932c', 0, 'active', '2022-12-01 15:05:45', NULL),
(104, 2, '', 'Chanti Niven', '', 'chantal.niven@gmail.com', 'Jabulani', '8189432446', NULL, '', 'Feeling more optimistic', '44d1ae39-bcee-4269-ba22-5566dc906ef9', 0, 'active', '2022-12-01 22:38:42', NULL),
(105, 2, '', 'Dan peterson', '', 'Danpetersonauto@gmail.com', 'Sar48000', '6127304853', NULL, NULL, NULL, 'c26f0062-6f7e-4761-b377-af09b84934aa', 0, 'active', '2022-12-06 19:08:53', NULL),
(106, 2, '103766400314994324334', 'Desiree', '', 'user.554.5418723527458@gmail.com', 'undefined', '8183127515', NULL, '', NULL, 'null', 0, 'active', '2022-12-07 21:11:40', NULL),
(108, 2, '', 'Desiree', '', 'Desiree.luethy@gmail.com', '@Q753az159', '8183127515', NULL, NULL, NULL, '', 0, 'active', '2022-12-13 20:14:25', NULL),
(109, 2, '', 'Taron', '', 'Taron@alumni.usc.edu', 'Hello1234', '4243334447', NULL, NULL, 'Hello$', '94a6ac05-38fa-41ca-94a6-6c9ad03f769e', 0, 'active', '2022-12-14 01:34:14', NULL),
(110, 2, '107590197303219709487', 'Barry', '', 'berry123@gmail.com', '11111111', '3131226248', NULL, NULL, 'intermediate ', '9d8dabb0-052f-4041-ac7c-cf4ee9c8ae89', 0, 'active', '2022-12-15 10:14:42', NULL),
(111, 2, '', 'Anderson ', '', 'mshahbazalamkhan@gmail.com', 'DATAALGO', '+923131226248', NULL, NULL, NULL, '9d8dabb0-052f-4041-ac7c-cf4ee9c8ae89', 0, 'active', '2022-12-15 12:26:11', NULL),
(112, 2, '117984863366247958330', 'Taron Sargsyan', '', 'user.773.3037249714873@gmail.com', '3134.916521161342', '4243334447', NULL, NULL, 'Hello. Testing ', '0a2ed341-b26c-4498-a9e1-8bc920e7a4e7', 0, 'active', '2022-12-15 16:39:55', NULL),
(113, 2, '100684191030885332269', 'Carter Otrig ', '', 'user.18.968326554985815@gmail.com', 'undefined', '3025258192', NULL, '1430219219_Profileimage', NULL, 'b9a1e539-9997-44b3-81e5-6584a1e5db45', 0, 'active', '2022-12-16 20:21:39', NULL),
(114, 2, '', 'Andy', '', 'Andriesindubai@gmail.com', '@Business4', '0849645771', NULL, NULL, NULL, '', 0, 'active', '2022-12-16 22:46:34', NULL),
(115, 2, '103153615872811226556', 'Ben', '', 'ben123@gmail.com', '11111111', '12345678912', NULL, NULL, NULL, 'cfb64981-238c-4599-8ee2-9d5ee1f37b52', 0, 'active', '2022-12-19 14:53:39', NULL),
(117, 2, '001278.743537635494499fa86d3427a8c29d88.1207', 'test apple', '', 'user.761.1347557718992@gmail.com', '682.9218003567246', '1581465715', NULL, NULL, NULL, '39e6c674-da4d-4984-b3c8-45ba759a9bd4', 0, 'active', '2023-01-10 13:19:30', NULL),
(118, 2, '126459160307704', 'Fb user', '', 'user.458.28088752069726@gmail.com', '19599.196363342555', '3826347283', NULL, NULL, 'Xsaxsassacasc', 'null', 0, 'active', '2023-01-10 16:58:53', NULL),
(132, 1, NULL, NULL, NULL, 'arham@gmail.com', 'arham', NULL, NULL, NULL, NULL, NULL, 0, 'suspended', '2023-01-17 08:38:04', NULL),
(133, 2, '110455497833449727532', 'Fizy', '', 'user.873.9984957300285@gmail.com', '9083.406736611085', '3023658231', NULL, NULL, 'null', 'null', 0, 'active', '2023-01-18 01:51:26', NULL),
(134, 2, '', 'Marry', '', 'marry@gmail.com', '11111111', '5454353454', NULL, NULL, NULL, 'null', 0, 'active', '2023-02-10 20:39:03', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agreement`
--
ALTER TABLE `agreement`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`color_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification_log`
--
ALTER TABLE `notification_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `occasions`
--
ALTER TABLE `occasions`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `privacy_policy`
--
ALTER TABLE `privacy_policy`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `privelages`
--
ALTER TABLE `privelages`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `privelages_bt`
--
ALTER TABLE `privelages_bt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions_categories`
--
ALTER TABLE `questions_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `streak`
--
ALTER TABLE `streak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tip_log`
--
ALTER TABLE `tip_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tip_of_day`
--
ALTER TABLE `tip_of_day`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tip_title`
--
ALTER TABLE `tip_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agreement`
--
ALTER TABLE `agreement`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=379;

--
-- AUTO_INCREMENT for table `notification_log`
--
ALTER TABLE `notification_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=396;

--
-- AUTO_INCREMENT for table `occasions`
--
ALTER TABLE `occasions`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `privacy_policy`
--
ALTER TABLE `privacy_policy`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `privelages`
--
ALTER TABLE `privelages`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `privelages_bt`
--
ALTER TABLE `privelages_bt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=298;

--
-- AUTO_INCREMENT for table `questions_categories`
--
ALTER TABLE `questions_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `streak`
--
ALTER TABLE `streak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `tip_log`
--
ALTER TABLE `tip_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tip_of_day`
--
ALTER TABLE `tip_of_day`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `tip_title`
--
ALTER TABLE `tip_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
