-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2021 at 07:00 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freelance`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `emailid`, `username`, `rating`, `comment`) VALUES
('admin', 'ab@ccd.com', '', 0, 'The user interface could be better.'),
('admin', 'ab@ccd.com', 'admin', 5, 'no comments'),
('rahul', 'sasdfs@ggsgs.com', 'dsdgfdhs', 3, 'gansljafakwetusfbalsgvaigwyldbgkjasgfa'),
('nb ', 'chkhk@ggyygg.bbb', 'jvkhgvk', 3, ' b fbtyfuyuhbuy5echyh'),
('rahul', 'ab@ccd.com', 'abcd', 3, ' chdyjfjuyguyrcy6urkbgnjyf'),
('Gus__', 'a@b.com', 'gus', 1, 'not a good website'),
('sachin', 'abcd@nmail.com', 'srt', 1, 'a b c d e f');

-- --------------------------------------------------------

--
-- Table structure for table `project_details`
--

CREATE TABLE `project_details` (
  `project_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `project_name` varchar(50) NOT NULL,
  `description` varchar(400) NOT NULL,
  `job_type` varchar(50) NOT NULL,
  `price_range` varchar(50) NOT NULL,
  `assigned_status` int(11) NOT NULL DEFAULT -1,
  `assigned_to` varchar(50) NOT NULL,
  `trend_rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_details`
--

INSERT INTO `project_details` (`project_id`, `name`, `project_name`, `description`, `job_type`, `price_range`, `assigned_status`, `assigned_to`, `trend_rate`) VALUES
(1, 'FoodFiesta', 'This is a website for a restaurant.', 'This website is for a restaurant that makes India food .We,at FoodFiesta are incredibly passionate about food.', 'Front-end Developer', '₹5000-₹20000', 1, 'rahul dravid', 2),
(2, 'SportsAcad', 'A sports academy website.', 'A website for a sports academy located in United kingdom,London.', 'Database Admin', '₹100000-₹5000000', 1, '', 5),
(4, 'GlitchPartus', 'An online streaming platform', 'GlitchPartus is an Indore-based startup specializing in video technology. The flagship product of GlitchPartus would bean automated lecture capture system. ', 'Fullstack Developer', '₹600-₹5000', 1, 'admin', 1),
(5, 'TwoDirections', 'A website to keep people updated about musical eve', 'TwoDirections is a music band and we wish to get a a website that shows our fans the schedule of our musical concerts.We wish to hire a skilled developer.', 'Fullstack Developer', '₹20000-₹50000', 1, 'admin', 3),
(6, 'Bohne Greene', 'A website for an author', 'I am a best-selling author and I wish to keep a website that describes me and hopefully gets me out of this labyrinth.', 'Fullstack Developer', '₹50000-₹100000', 1, 'admin', 4),
(7, 'Google', 'Build ', 'Its', 'Database Admin', '₹50000-₹100000', 1, 'admin', 4),
(8, 'Facebbok', 'website', 'interesting', 'Fullstack Developer', '>₹10000000', 1, 'admin', 7),
(12, 'dhruva', 'Grind', 'boring', 'Front-end Developer', '₹600-₹5000', 1, 'admin', 1),
(13, '', '', '', 'Front-end Developer', '₹600-₹5000', 1, 'rahul dravid', 1),
(14, 'rahul', 'sports', 'Build me a website for my sports page.', 'Database Admin', '₹600-₹5000', 1, 'rahul dravid', 1),
(15, 'lionel messi', 'football website', 'I want a website to tell people about me.', 'Fullstack Developer', '₹5000000-₹10000000', 1, 'test', 6),
(16, 'chetan bhagat', 'book website', 'A website that allows people to purchase my books', 'Fullstack Developer', '₹50000-₹100000', 1, 'test', 4),
(17, 'dhruva', 'sports website', 'build me a website for my sports academy', 'Database Admin', '₹50000-₹100000', 1, 'admin', 4),
(18, 'Gus__', 'watch ', 'watch website', 'Front-end Developer', '₹600-₹5000', 1, 'admin', 1),
(19, 'prithvi shaw', 'watch ', 'watch website', 'Database Admin', '₹20000-₹50000', 1, 'abcd', 3),
(20, 'Guitar', 'Guitar string fix', 'A website for guitar repiar', 'Front-end Developer', '₹5000-₹20000', 1, 'admin', 2),
(21, 'dhruva', 'football website', 'Make a football website', 'Fullstack Developer', '₹600-₹5000', 1, '', 1),
(22, 'Times of India', 'Ramaswamy', 'Website for the Times Of India.', 'Fullstack Developer', '₹100000-₹5000000', 1, 'rahul dravid', 5),
(23, 'Chelsea', 'Abramovich', 'Chelsea FC website', 'Front-end Developer', '₹50000-₹100000', 1, 'rahul dravid', 4),
(24, 'Tottenham', 'Football website', 'Website for Tottenham F.C.', 'Front-end Developer', '₹20000-₹50000', 1, 'ab', 3),
(25, 'Samit D Manvar', 'blog website', 'A website for my blogs.', 'Front-end Developer', '₹50000-₹100000', -1, '', 4),
(26, 'Glazers', 'football website', 'A football website for Manchester United F.C.\r\nGlory glory Man united!', 'Front-end Developer', '₹50000-₹100000', -1, '', 4),
(27, 'Naveen', 'Personal website', 'A personal website for a social media content creator.', 'Front-end Developer', '₹600-₹5000', -1, '', 1),
(28, 'Byomkesh Bakshi', 'Law firm', 'A website for a law firm situated in Bangalore.', 'Database Admin', '₹20000-₹50000', -1, '', 3),
(29, 'Microsoft', 'Github website', 'A website for github.', 'Fullstack Developer', '₹50000-₹100000', -1, '', 4),
(30, 'a', 'b', 'c', 'Front-end Developer', '₹20000-₹50000', -1, '', 3),
(31, 'Govt Of Karnataka', 'Covid Care', 'Webpage for Karnataka official Covid count.', 'Back-end Developer', '₹100000-₹5000000', -1, '', 5),
(32, 'RBI', 'Bank website', 'Website for Reserve Bank OF India', 'Back-end Developer', '₹20000-₹50000', -1, '', 3),
(33, 'c', 'd', 'e', 'Front-end Developer', '₹20000-₹50000', -1, '', 3),
(34, 'abc', 'def', 'ghi', 'Front-end Developer', '₹600-₹5000', -1, '', 1),
(35, '123', '456', '789', 'Front-end Developer', '₹5000-₹20000', -1, '', 2),
(36, 'def', 'ghi', 'jkl', 'Back-end Developer', '₹5000-₹20000', -1, '', 2),
(37, '1', '2', '3', 'Front-end Developer', '₹20000-₹50000', -1, '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `email_list` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`email_list`) VALUES
('dhruvasree296@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`username`, `email`, `password`) VALUES
('ab', 'a@b.com', '123'),
('admin', 'ab@ccd.com', 'adminadmin'),
('abcd', 'abcd@nmail.com', '123456789'),
('a', 'chkhk@ggyygg.bbb', 'v'),
('dhr', 'dhruvasree296@gmail.com', '123'),
('rahul dravid', 'dravid@gmail.com', 'password1234'),
('drishti', 'drishtishreenath@gmail.com', 'pass'),
('dhruva', 'ds@hotmail.com', '12345'),
('raul', 'gjhaksj@ghsg.com', '456789'),
('haaland', 'haaland@gmail.com', 'hahaha'),
('nameisname', 'pshaw@gmail.com', '12345'),
('sachin', 'sachinten@yahoo.com', 'sachin1234'),
('Rahul Sharma', 'sharmarahul1729@gmail.com', '123'),
('test', 'test@test.com', 'password1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project_details`
--
ALTER TABLE `project_details`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`email_list`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project_details`
--
ALTER TABLE `project_details`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
