-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2018 at 10:59 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bytecode`
--

-- --------------------------------------------------------

--
-- Table structure for table `res_dir`
--

CREATE TABLE `res_dir` (
  `Sno` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Rating` float NOT NULL,
  `Link` varchar(200) NOT NULL,
  `Des` varchar(500) NOT NULL,
  `Category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res_dir`
--

INSERT INTO `res_dir` (`Sno`, `Name`, `Rating`, `Link`, `Des`, `Category`) VALUES
(1, 'Perl Monks', 4, 'http://www.perlmonks.org/', 'One of the oldest and best online resource to learn Perl, it also has an active community and a lot of tutorials to get started.', 'Perl'),
(2, 'GeeksforGeeks', 5, 'https://www.geeksforgeeks.org/', 'How many times were you frustrated while looking out for a good collection of programming/algorithm/interview questions? What did you expect and what did you get? This portal has been created to provide well written, well thought and well explained solutions for selected questions.', 'Basic,General, Theory of computation,dbms, database,os, operating sysems, computer architecture'),
(3, 'Stanford Engineering Everywhere', 3, 'https://see.stanford.edu/', 'Stanford Engineering Everywhere (SEE) expands the Stanford experience to students and educators online and at no charge. The SEE course portfolio includes one of Stanford\'s most popular sequences: the three-course Introduction to Computer Science, taken by the majority of Stanford\'s undergraduates, as well as more advanced courses in artificial intelligence and electrical engineering.', 'Basic,General,Misc,Artificial Intelligence, Machine Learning, Programming'),
(4, 'MIT OpenCourseWare', 5, 'https://ocw.mit.edu/', 'Openly available lectures and course materials from the Massachusetts Institute Of Technology.', 'General, Basic'),
(5, 'Android Programming by Coursera', 4.3, 'https://www.coursera.org/learn/android-programming', 'This course introduces you to the design and implementation of Android applications for mobile devices. You will develop an app from scratch, assuming a basic knowledge of Java, and learn how to set up Android Studio, work with various Activities and create simple user interfaces to make your apps run smoothly.', 'Android Programming'),
(6, 'Get started with ASP.NET Core MVC and Visual Studi', 4.5, 'https://docs.microsoft.com/en-us/aspnet/core/tutorials/first-mvc-app/start-mvc?view=aspnetcore-2.1&tabs=aspnetcore2x', 'This tutorial teaches ASP.NET Core MVC web development with controllers and views. Razor Pages is a new alternative in ASP.NET Core 2.0, a page-based programming model that makes building web UI easier and more productive. We recommend you try the Razor Pages tutorial before the MVC version.', 'ASP.NET , MVC, Visual Studio'),
(7, 'The Art of Assembly Language Programming ', 4.5, 'http://www.plantation-productions.com/Webster/www.artofasm.com/index.html', 'Assembly Language', 'Assembly Language Programming'),
(8, 'Intro to Artificial Intelligence - Udacity', 4.9, 'https://www.udacity.com/course/intro-to-artificial-intelligence--cs271', 'One of the best courses available on artificial intelligence for beginners.', 'Artificial Intelligence '),
(9, 'MySirG', 4.5, 'https://www.mysirg.com/', 'This is a website dedicated towards providing easy to watch video tutorials on various computer science subjects in hindi.', 'c,c++,java,sql,basic'),
(10, 'C++', 4.5, 'http://www.learncpp.com/', 'LearnCpp.com is a totally free website devoted to teaching you to program in C++. Whether youâ€™ve had any prior experience programming or not, the tutorials on this site will walk you through all the steps youâ€™ll need to know in order to create and compile your programs. ', 'C++'),
(11, 'MIT Open Courseware - Artificial Intelligence', 4.2, 'https://ocw.mit.edu/courses/electrical-engineering-and-computer-science/6-034-artificial-intelligence-fall-2010/lecture-videos/', 'Artificial Intelligence lectures from MIT.', 'Artificial Intelligence'),
(12, 'Git SCM Book', 4.5, 'https://git-scm.com/book/en/v2', 'One of the best book available on getting started with Git.', 'Git, VC, Version Control'),
(13, 'Algorithms - Shai Simonson ', 4.9, 'http://aduni.org/courses/theory/', 'The design of algorithms is studied, according to methodology and application. Methodologies include: divide and conquer, dynamic programming, and greedy strategies.', 'Algorithms'),
(14, 'Hackerrank', 4.7, 'https://www.hackerrank.com/', 'It is a competitive programming website which helps every aspiring programmer to acquire cutting edge skills by providing real life programming problems.', 'C,C++,Java,Python,C#,Data Structures'),
(15, 'Theory of Computation', 4.6, 'http://aduni.org/courses/theory/', 'The hierarchy of finite state machines, pushdown machines, context free grammars and Turing machines will be analyzed, along with their variations. The notions of decidability, complexity theory and a complete discussion of NP-Complete problems round out the course.', 'ToC, Automata, Computation');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Sno` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `userpass` varchar(20) NOT NULL,
  `useremailid` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Sno`, `username`, `userpass`, `useremailid`) VALUES
(1, 'abhishekarya', 'password123', 'abhishekarya@gmail.com'),
(2, 'yashsharma', 'yashsharma', 'yash@gmail.com'),
(3, 'joey', 'joey', 'joey@gmail.com'),
(4, 'rat', 'lklklk', 'yo@gmail.com'),
(5, 'sal', '123456', 'sal@gmail.com'),
(6, 'wizard', 'wizard', 'wizard@gmail.com'),
(7, 'josh', 'josh', 'josh@gmail.com'),
(8, 'prasad', 'ladoo', 'prasad@gmail.com'),
(9, 'entropy', 'entropy', 'entropy@gmail.com'),
(10, 'tomcat', 'tomcat', 'tomcat@gmail.com'),
(11, 'php', 'php', 'php@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `res_dir`
--
ALTER TABLE `res_dir`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `res_dir`
--
ALTER TABLE `res_dir`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
