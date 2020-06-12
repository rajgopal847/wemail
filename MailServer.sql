-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 02, 2020 at 11:13 AM
-- Server version: 5.7.30
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
--------------------------------------------------------

--
-- Table structure for table `draft`
--

CREATE TABLE `draft` (
  `draft_id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `attach` varchar(200) NOT NULL,
  `msg` text NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `draft`
--

INSERT INTO `draft` (`draft_id`, `user_id`, `sub`, `attach`, `msg`, `date`) VALUES
(1, 'hema', 'hiiiiiii', 'Winter.jpg', 'hiiiiiiiiiiii', '0000-00-00'),
(2, 'hema', 'my pics', 'Sunset.jpg', 'this is my pics', '0000-00-00'),
(3, 'hema', 'my pics', 'Sunset.jpg', 'this is my pics', '0000-00-00'),
(4, 'hema', 'abhi', 'Water lilies.jpg', 'hhhhhhhhhhhhh', '2013-06-09'),
(5, 'abhishek', 'my resume ', '', 'this is my resume format..........', '2013-06-13'),
(6, 'ramesh1', 'hi', '', 'this is test', '2020-05-14'),
(7, 'ramesh1', 'hello', '', 'test', '2020-05-14'),
(8, 'final', 'test', '', 'test', '2020-05-28'),
(9, 'raju', 'testing', '', 'draft test', '2020-05-28'),
(10, 'raju', 'testing all', '', 'this is to test all functionalities', '2020-05-28'),
(11, 'raj', 'test', '', 'this is a test', '2020-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `img_id` int(11) NOT NULL,
  `imagepath` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`img_id`, `imagepath`) VALUES
(1, 'Winter.jpg'),
(2, 'Winter.jpg'),
(3, 'Blue hills.jpg'),
(4, 'Winter.jpg'),
(5, ''),
(6, 'Winter.jpg'),
(7, 'Winter.jpg'),
(8, 'Winter.jpg'),
(9, 'Winter.jpg'),
(10, 'Sunset.jpg'),
(11, 'Water lilies.jpg'),
(12, 'Sunset.jpg'),
(13, 'Sunset.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `latestupd`
--

CREATE TABLE `latestupd` (
  `upd_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `latestupd`
--

INSERT INTO `latestupd` (`upd_id`, `title`, `content`, `image`, `date`) VALUES
(1, 'resul', 'mca result is declared.....', 'AboutPlugin.dll', '2013-06-13'),
(2, 'resul', 'mca result is declared.....', 'AboutPlugin.dll', '2013-06-13'),
(3, 'resue', 'resume......', 'Winter.jpg', '2013-06-13'),
(4, 'lkjlj', 'khkjhkh', '', '2013-06-13'),
(5, 'jjjjjjjjj', 'kkkkkkkkkkk', 'Water lilies.jpg', '2013-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `mails`
--

CREATE TABLE `mails` (
  `mail_id` int(11) NOT NULL,
  `rec_id` varchar(50) NOT NULL,
  `sen_id` varchar(50) NOT NULL,
  `sub` char(50) NOT NULL,
  `msg` text NOT NULL,
  `draft` text NOT NULL,
  `trash` text NOT NULL,
  `attachement` varchar(200) NOT NULL,
  `msgdate` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mails`
--

INSERT INTO `mails` (`mail_id`, `rec_id`, `sen_id`, `sub`, `msg`, `draft`, `trash`, `attachement`, `msgdate`) VALUES
(1, 'deepika', 'prabhat', 'hello', 'hello deepika', '', '', '', ''),
(2, 'prabhat', 'prabhat', 'hiiiiiiiii--msg failed', 'hiiiiiiiiiii', '', '', '', ''),
(3, 'prabhat', 'prabhat', 'hiiiiiiiii--msg failed', 'hiiiiiiiiiii', '', '', '', ''),
(4, 'deepika', 'prabhat', 'welcome', 'welcom........', '', '', '', ''),
(5, 'deepika', 'prabhat', 'welcome', 'welcom........', '', '', '', ''),
(6, 'deepika', 'prabhat', 'welcome', 'welcom........', '', '', '', ''),
(7, 'prabhat', '', 'my resume', '', 'dkljfldjlf', '', '', ''),
(8, 'deepika', 'prabhat', 'ldfjld', 'dkfjldj', '', '', '', '2013-03-03 10:57:47'),
(9, 'deepika', 'prabhat', 'ldfjld', 'dkfjldj', '', '', '', '2013-03-03 11:00:13'),
(10, 'rexx', 'prabhat', 'hello', 'hello', '', '', '', '2013-03-03 11:01:22'),
(11, 'rexx', 'prabhat', 'welll', 'welcome.rexx........', '', '', '', '2013-03-03 11:01:34');

-- --------------------------------------------------------

--
-- Table structure for table `trash`
--

CREATE TABLE `trash` (
  `trash_id` int(11) NOT NULL,
  `rec_id` varchar(50) NOT NULL,
  `sen_id` varchar(50) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `msg` text NOT NULL,
  `date` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trash`
--

INSERT INTO `trash` (`trash_id`, `rec_id`, `sen_id`, `sub`, `msg`, `date`) VALUES
(1, 'hema', 'ravi', 'hello', 'hello prabhat..........', '2015-06-22'),
(2, 'hema', 'hema', 'hhhhh', 'hello ravi', '2015-06-22'),
(3, 'hema', 'ravi', 'hello', 'hello prabhat..........', '2015-06-22'),
(4, 'hema', 'ravi', 'hello', 'hello deep hows you?......', '2015-06-22'),
(5, 'ramesh', 'ramesh', 'hi--msg failed', 'hi', '2020-05-13'),
(6, 'ramesh', 'ramesh', 'hi', 'hi', '2020-05-14'),
(7, 'ramesh1', 'ramesh1', 'full test', 'This is a send test', '2020-05-14'),
(8, 'ramesh1', 'ramesh1', 'image test', 'just checking image', '2020-05-14'),
(9, 'abcd', 'abcd', 'Subject--msg failed', 'Hi', '2020-05-20'),
(10, 'asdfa', 'asdfa', 'nothing--msg failed', 'sjdniasnfosalkdfasf', '2020-05-23'),
(11, 'raju', 'raju', 'delete test', 'delete test', '05-28-20'),
(14, 'arjun', 'arjun', 'first email', 'this is the first test to this account', '05-28-20');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `user_jd` int(11) NOT NULL,
  `user_name` char(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` enum('m','f') NOT NULL,
  `hobbies` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`user_jd`, `user_name`, `password`, `mobile`, `email`, `gender`, `hobbies`, `dob`, `image`) VALUES
(1, 'hema', 'hema123', 222222, '', 'f', 'reading', '1902-03-04', 'Blue hills.jpg'),
(2, 'mehak', 'mehak', 11111, 'mehak@gmail.com', 'f', 'cricket,football', '1917-11-16', ''),
(3, 'sanjeev', 'sanjeev', 55578857878, 'sanjeev@yahoo.com', 'm', 'cricket,football', '0000-00-00', ''),
(4, 'dfdfdfd', 'fdf', 0, 'dfdfd@gmail.lcom', 'm', 'cricket', '0000-00-00', ''),
(5, 'satish@gmail.com', 'satish', 45444, 'sanjeev@yahoo.com', 'm', 'cricket,football', '1902-04-04', 'Winter.jpg'),
(6, 'xyz', 'xyz111', 444444, 'xyz@gmail.com', 'm', 'cricket,football', '1901-04-04', 'Blue hills.jpg'),
(7, 'ravi', 'ravi111', 44444444, 'ravi@gmail.com', 'm', 'cricket,football', '1901-03-03', 'Winter.jpg'),
(8, 'abhishek', 'abhi', 888888888, 'abhishek@gmail.com', 'm', 'cricket,football', '1915-10-16', 'Sunset.jpg'),
(9, 'go4mugam01', 'password', 9952974454, 'go4mugam01@gmail.com', 'm', 'cricket', '1976-05-04', ''),
(10, 'go4ram01', 'password', 9952974454, 'go4ram01@gmail.com', 'm', 'cricket', '1912-06-15', ''),
(11, 'ramesh', 'ramesh', 7032255432, 'rameshr189@gmail.com', 'm', 'cricket', '1990-08-11', ''),
(12, 'ramesh1', 'Ramesh1', 7032255432, 'rameshr189@gmail.com', 'm', 'cricket', '1915-10-19', 'DSC_0263.JPG'),
(13, 'saf', 'sda', 9898989898, 'czv@hbv.cd', 'm', 'cricket', '1918-12-20', 'Diagram-Class.png'),
(14, 'harish', 'ssas', 9898989898, '', '', '', '1917-02-19', ''),
(15, 'abc', 'avd', 98, '', 'm', '', '1915-12-19', ''),
(16, 'abcd', 'abcd', 98, '', '', '', '1917-11-17', ''),
(17, 'asdf', 'asdf', 12345, '', 'm', '', '1934-09-16', 'dribbble.jpg'),
(18, 'qwerty', 'qwerty', 789, '', 'm', '', '1916-10-17', ''),
(19, 'abcd1', 'abcd1', 4556, '', 'm', '', '1915-09-18', ''),
(20, 'asdfa', 'aaaaaaaa', 9856487896, '', 'm', '', '1998-08-20', 'dc.jpeg'),
(21, 'raj', 'raj', 449554683, '', 'm', '', '1996-08-08', ''),
(22, 'fxghzg', 'zdgzdgbxdc bx', 0, '', 'm', '', '1918-10-17', ''),
(23, 'vivek@wemail.com', 'vivek', 451746465, '', 'm', '', '1993-12-19', ''),
(24, 'Saimitra', 'sai', 0, '', 'm', '', '1904-08-09', ''),
(25, 'Aaa', 'aaa', 0, '', 'm', '', '1900-04-06', ''),
(26, 'test@test.com', '1234', 1234, '', 'm', '', '1904-06-07', ''),
(27, 'final', 'final', 3326025253, '', 'm', '', '1911-10-10', 'download (2).jpg'),
(28, 'raju', 'rju', 12345, '', 'm', '', '1918-11-18', ''),
(29, 'arjun', 'arjun', 54321, '', 'm', '', '1998-08-17', '');

-- --------------------------------------------------------

--
-- Table structure for table `usermail`
--

CREATE TABLE `usermail` (
  `mail_id` int(11) NOT NULL,
  `rec_id` varchar(30) NOT NULL,
  `sen_id` varchar(30) NOT NULL,
  `sub` char(30) NOT NULL,
  `msg` text NOT NULL,
  `attachement` text NOT NULL,
  `recDT` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usermail`
--

INSERT INTO `usermail` (`mail_id`, `rec_id`, `sen_id`, `sub`, `msg`, `attachement`, `recDT`) VALUES
(3, 'ravi', 'ravi', 'welcome--msg failed', 'dljfldjfldj', '', '2013-03-05'),
(4, 'prabhat', 'ravi', 'hiiiii', 'hii prabhat.........', '', '2013-03-06'),
(5, 'prabhat', 'ravi', 'docs', 'project docs.............', '', '2013-03-06'),
(8, 'go4ram01', 'go4mugam01', 'testemail', 'testemail', '', '2020-05-13'),
(13, 'ramesh1', 'ramesh1', 'hi', 'This is a test email', '', '2020-05-14'),
(15, 'ramesh1', 'ramesh1', 'test 4', 'Hello human,This is one more test,..,pls check both accounts if they are getting emails.', '', '2020-05-20'),
(17, 'ramesh1', 'ramesh1', 'test again', 'one more test', '', '2020-05-21'),
(21, 'asdfa', 'fxghzg', 'hiiiiiiiii', 'Is this really working?', '', '2020-05-23'),
(20, 'raj', 'vivek@wemail.com', 'project', 'Hi', '', '2020-05-21'),
(22, 'raj', 'raj', 'raj', 'raj i love you', '', '2020-05-28'),
(23, 'raj', 'raj', 'another test', 'testing a little bit more', '', '2020-05-28'),
(29, 'raju', 'final', 'raju', 'raju', '', '2020-05-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `draft`
--
ALTER TABLE `draft`
  ADD PRIMARY KEY (`draft_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `latestupd`
--
ALTER TABLE `latestupd`
  ADD PRIMARY KEY (`upd_id`);

--
-- Indexes for table `mails`
--
ALTER TABLE `mails`
  ADD PRIMARY KEY (`mail_id`);

--
-- Indexes for table `trash`
--
ALTER TABLE `trash`
  ADD PRIMARY KEY (`trash_id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`user_jd`),
  ADD UNIQUE KEY `user_name` (`user_name`,`mobile`,`email`),
  ADD KEY `gender` (`gender`,`dob`);

--
-- Indexes for table `usermail`
--
ALTER TABLE `usermail`
  ADD PRIMARY KEY (`mail_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `draft`
--
ALTER TABLE `draft`
  MODIFY `draft_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `latestupd`
--
ALTER TABLE `latestupd`
  MODIFY `upd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mails`
--
ALTER TABLE `mails`
  MODIFY `mail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `trash`
--
ALTER TABLE `trash`
  MODIFY `trash_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `user_jd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `usermail`
--
ALTER TABLE `usermail`
  MODIFY `mail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
