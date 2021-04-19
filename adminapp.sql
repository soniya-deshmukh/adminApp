-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2021 at 09:51 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(5) NOT NULL,
  `page_title` varchar(25) NOT NULL,
  `page_body` varchar(700) NOT NULL,
  `is_published` tinyint(1) NOT NULL,
  `meta_tag` varchar(50) NOT NULL,
  `meta_description` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `admin_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_title`, `page_body`, `is_published`, `meta_tag`, `meta_description`, `created_at`, `updated_at`, `admin_id`) VALUES
(2, 'About ', '<p>webnmap.com is the UK&rsquo;s leading website development company. Our website was launched in the UK in 1996 by the publishers of the Yellow Pages directory. Since then, we have put the names, addresses and telephone numbers of over 2.9 million businesses at your fingertips.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Search over 3,000&nbsp;classifications for companies matching the type of business you need, or&nbsp;find the right business&nbsp;near you by searching for a company name. Our service covers the whole of the UK (except the Isle of Man and the Channel Islands).</p>\r\n\r\n<p>&nbsp;</p>\r\n', 0, '<title>', 'WebNmap Techologies', '2020-11-25 17:04:19', '2020-12-08 12:49:00', 4),
(4, 'Services', '<p>Branding</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Development</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Web Design</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Social Media</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ecommerce</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sa', 0, 'tag', ' tag desciption', '2020-11-25 17:12:12', '2020-12-08 12:25:05', 4),
(5, 'Contact', '<p><strong>Contact Us:</strong></p>\r\n\r\n<p>WebNmap Techologies,</p>\r\n\r\n<p>46 market Place,</p>\r\n\r\n<p>Eastbourn 4534,</p>\r\n\r\n<p>Brighton,</p>\r\n\r\n<p>+44 9696 3882.</p>\r\n\r\n<p>hello@webnmap.com&nbsp;</p>\r\n', 1, '', '   ', '2020-11-25 17:17:13', '2021-01-02 12:55:37', 4),
(13, 'Home', '<p><strong>In the last 20 years, WebNmap has created 380,000 websites&nbsp;for businesses like yours.</strong>&nbsp;With our flexible website design packages, we don&rsquo;t just build you a great looking website; we provide all the tools you need to help grow and maintain it. You&#39;ll be able to review your website analytics, make updates with our easy to use editor or access online help and support videos anytime, anywhere, 24/7 with the <strong>WebNmap </strong>for Business app.</p>\r\n\r\n<p>We can even customise your <strong>WebNmap </strong>mobile-responsive website, so visitors see different content depending on variables like the time of day they visit and whether they&amp;</p>\r\n', 1, '<meta> ', '  <meta name=\"description\" content=\"websites for businesses \">,\r\n <meta name=\"keywords\" content=\"PHP, HTML, CSS, JavaScript\">', '2020-11-30 10:59:46', '2020-12-16 12:20:19', 4);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(5) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `post_body` varchar(1000) NOT NULL,
  `is_published` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL,
  `created_by` smallint(5) NOT NULL,
  `updated_by` smallint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_title`, `post_body`, `is_published`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'About I-connect App', '<p>Lorem&nbsp;ipsum&nbsp;dolor,&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Minus&nbsp;dicta,&nbsp;facilis&nbsp;qui&nbsp;voluptatem&nbsp;distinctio&nbsp;ex!&nbsp;Amet&nbsp;atque&nbsp;quibusdam&nbsp;sint&nbsp;explicabo&nbsp;facilis&nbsp;autem,&nbsp;numquam&nbsp;nobis&nbsp;at,&nbsp;optio&nbsp;officiis&nbsp;illum?&nbsp;Saepe,&nbsp;qui?</p>\r\n\r\n<p>Lorem&nbsp;ipsum&nbsp;dolor,&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Minus&nbsp;dicta,&nbsp;facilis&nbsp;qui&nbsp;voluptatem&nbsp;distinctio&nbsp;ex!&nbsp;Amet&nbsp;atque&nbsp;quibusdam&nbsp;sint&nbsp;explicabo&nbsp;facilis&nbsp;autem,&nbsp;numquam&nbsp;nobis&nbsp;at,&nbsp;optio&nbsp;officiis&nbsp;illum?&nbsp;Saepe,&nbsp;qui?</p>\r\n\r\n<p>Lorem&nbsp;ipsum&nbsp;dolor,&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Minus&nbsp;dicta,&nbsp;facilis&nbsp;qui&nbsp;voluptatem&nbsp;distinctio&nbsp;ex!&nbsp;Amet&nbsp;atque&nbsp;quibusdam&nbsp;sint&nbsp;explicabo&nbsp;facilis&nbsp;autem', 1, '2020-12-02 12:18:09', '2020-12-08 12:39:11', 4, 4),
(3, 'What is E commerce', '<p>Lorem&nbsp;ipsum&nbsp;dolor,&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Minus&nbsp;dicta,&nbsp;facilis&nbsp;qui&nbsp;voluptatem&nbsp;distinctio&nbsp;ex!&nbsp;Amet&nbsp;atque&nbsp;quibusdam&nbsp;sint&nbsp;explicabo&nbsp;facilis&nbsp;autem,&nbsp;numquam&nbsp;nobis&nbsp;at,&nbsp;optio&nbsp;officiis&nbsp;illum?&nbsp;Saepe,&nbsp;qui?</p>\r\n\r\n<p>Lorem&nbsp;ipsum&nbsp;dolor,&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Minus&nbsp;dicta,&nbsp;facilis&nbsp;qui&nbsp;voluptatem&nbsp;distinctio&nbsp;ex!&nbsp;Amet&nbsp;atque&nbsp;quibusdam&nbsp;sint&nbsp;explicabo&nbsp;facilis&nbsp;autem,&nbsp;numquam&nbsp;nobis&nbsp;at,&nbsp;optio&nbsp;officiis&nbsp;illum?&nbsp;Saepe,&nbsp;qui?</p>\r\n', 0, '2020-12-02 14:17:30', '2020-12-08 12:41:53', 4, 4),
(4, 'Job post for Sr. php developer ', '<p>Lorem&nbsp;ipsum&nbsp;dolor,&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Minus&nbsp;dicta,&nbsp;facilis&nbsp;qui&nbsp;voluptatem&nbsp;distinctio&nbsp;ex!&nbsp;Amet&nbsp;atque&nbsp;quibusdam&nbsp;sint&nbsp;explicabo&nbsp;facilis</p>\r\n\r\n<p>Lorem&nbsp;ipsum&nbsp;dolor,&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Minus&nbsp;dicta,&nbsp;facilis&nbsp;qui&nbsp;voluptatem&nbsp;distinctio&nbsp;ex!&nbsp;Amet&nbsp;atque&nbsp;quibusdam&nbsp;sint&nbsp;explicabo&nbsp;facilis&nbsp;autem,&nbsp;numquam&nbsp;nobis&nbsp;at,&nbsp;optio&nbsp;officiis&nbsp;illum?&nbsp;Saepe,&nbsp;qui?</p>\r\n\r\n<p>Lorem&nbsp;ipsum&nbsp;dolor,&nbsp;sit&nbsp;amet&nbsp;consectetur&amp;nb</p>\r\n\r\n<p>Lorem&nbsp;ipsum&nbsp;dolor,&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Minus&nbsp;dicta,&nbsp;facilis&nbsp;qui&nbsp;voluptatem&nbsp;distinctio&nbsp;ex!&nbsp;Amet&nbsp;atque&nbsp;quibusdam&nbsp;sint&nbsp;explicabo&nbsp;facilis&nbsp;autem,&nbsp;numquam&nbsp;no', 1, '2020-12-02 14:18:00', '2020-12-08 12:41:35', 4, 4),
(6, 'Job post for HR Manager', '<p>Lorem&nbsp;ipsum&nbsp;dolor,&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Minus&nbsp;dicta,&nbsp;facilis&nbsp;qui&nbsp;voluptatem&nbsp;distinctio&nbsp;ex!&nbsp;Amet&nbsp;atque&nbsp;quibusdam&nbsp;sint&nbsp;explicabo&nbsp;facilis</p>\r\n\r\n<p>Lorem&nbsp;ipsum&nbsp;dolor,&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Minus&nbsp;dicta,&nbsp;facilis&nbsp;qui&nbsp;voluptatem&nbsp;distinctio&nbsp;ex!&nbsp;Amet&nbsp;atque&nbsp;quibusdam&nbsp;sint&nbsp;explicabo&nbsp;facilis&nbsp;autem,&nbsp;numquam&nbsp;nobis&nbsp;at,&nbsp;optio&nbsp;officiis&nbsp;illum?&nbsp;Saepe,&nbsp;qui?</p>\r\n\r\n<p>Lorem&nbsp;ipsum&nbsp;dolor,&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Minus&nbsp;dicta,&nbsp;facilis&nbsp;qui&nbsp;voluptatem&nbsp;distinctio&nbsp;ex!&nbsp;Amet&nbsp;atque&nbsp;quibusdam&nbsp;sint&nbsp;explicabo&nbsp;facilis</p>\r\n\r\n<p>Lorem&nbsp;ipsum&nbsp;dolor,&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Minus&', 1, '2020-12-29 16:57:35', '2021-01-02 20:10:04', 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(2) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `notes` varchar(100) DEFAULT NULL,
  `created_by` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_admin`, `created_at`, `notes`, `created_by`) VALUES
(4, 'admin', 'admin@gmail.com', 'admin123', 1, '0000-00-00 00:00:00.000000', '              ', NULL),
(6, 'maggy', 'maggy@yahoo.com', 'Laryy', 0, '2020-12-01 16:59:27.247523', '', 3),
(7, 'mark', 'mark_Otto@gmail.com', 'mark', 0, '2020-12-01 17:00:10.974396', '                 details', 3),
(9, 'larry', 'Larry@yahoo.co', 'larry', 0, '2020-12-01 17:01:14.684043', '      ', 3),
(27, 'Jon', 'jon.doe@gmail.com', 'asasas', 0, '2020-12-07 14:10:03.598328', '  ', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
