-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2022 at 10:07 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `orderid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `txn_ammount` int(100) NOT NULL,
  `txn_status` varchar(60) NOT NULL,
  `txn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`orderid`, `username`, `book_name`, `txn_ammount`, `txn_status`, `txn_date`) VALUES
(1, 'yogesh', 'pytthon pragramming', 200, '', '0000-00-00 00:00:00'),
(2, 'yogesh', 'pytthon pragramming', 200, '', '0000-00-00 00:00:00'),
(3, 'yogesh', 'pytthon pragramming', 200, '', '0000-00-00 00:00:00'),
(4, 'Yogesh', 'pytthon pragramming', 200, '', '0000-00-00 00:00:00'),
(5, 'yogesh', 'pytthon pragramming', 200, '', '0000-00-00 00:00:00'),
(6, 'yogesh', 'pytthon pragramming', 200, '', '0000-00-00 00:00:00'),
(7, 'yogesh', 'pytthon pragramming', 200, '', '0000-00-00 00:00:00'),
(8, 'yogesh', 'pytthon pragramming', 200, '', '0000-00-00 00:00:00'),
(9, 'yogesh', 'pytthon pragramming', 200, '', '0000-00-00 00:00:00'),
(10, 'yogesh', 'pytthon pragramming', 200, '', '0000-00-00 00:00:00'),
(11, 'yogesh', 'pytthon pragramming', 200, '', '0000-00-00 00:00:00'),
(12, 'yogesh', 'pytthon pragramming', 200, '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `auther` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `book_desc` varchar(255) NOT NULL,
  `book_img` varchar(233) NOT NULL,
  `book_pdf` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `category`, `book_name`, `auther`, `price`, `book_desc`, `book_img`, `book_pdf`) VALUES
(1, 'pyhton', 'pytthon pragramming', 'yogesh', 200, 'pyhton is a high level programming language', 'python_book.png', 'python_book.pdf'),
(2, 'java', 'java programming CookBook', 'Herbert Schildt', 300, 'One of the Worlds Foremost authores of booksabout programming', 'java.png', 'javaprogrammingcookbookHS.pdf'),
(3, 'java', 'JAVA CookBook', 'lan Darwin', 250, 'JAVA Biginners Guide', 'javacookbook.jfif', 'Javacookbook.pdf'),
(4, 'program', 'Find Your Why A Practical', 'Simon Sinek', 300, 'Identify the things you can do to make other people\'s lives better.', 'Find Your Why A Practical.png', 'Find Your Why A Practical.pdf'),
(5, 'computer', 'The Book Thief', 'Markus Zusak', 307, 'The most popular book. Published in 2005. The Book Thief is a story narrated by a compassionate Death who tells us about Liesel, a girl growing up in Germany during World War II', 'the book thief.jpg', 'the book thief.pdf'),
(6, 'hacking', 'Computer Hacking For Beginners', 'Kevin James', 250, 'Hacking is an art and thus needs to be treated as such. As artist, we hackers solve problems and build things using our computers as our instruments. ', 'computer hacking.jpg', 'computer hacking.pdf'),
(7, 'story', '2 States The Story Of My Marriage ', 'Chetan Bhagat', 200, ' It is the story about a couple coming from two different states in India, who face hardships in convincing their parents to approve of their marriage. ', '2 states.jfif', '2 States The Story Of My Marriage (Chetan Bhagat).pdf'),
(8, 'Ego ', 'Ego is the Enemy', 'Ryan Holiday', 300, 'Ego Is the Enemy puts forth the argument that often our biggest problems are not caused by external factors such as other people or circumstances. Instead, our problems stem from our own attitude, selfishness and self-absorption', 'ego is the enemy.jpg', 'Ego is the Enemy The Fight to Master Our Greatest Opponent (Ryan Holiday).pdf'),
(9, 'elon musk', 'Elon Musk Tesla, SpaceX, and the Quest for a Fantastic Future ', 'Ashlee Vance', 350, 'Elon Musk Tesla, SpaceX, and the Quest for a Fantastic Future ', 'elon musk.jpg', 'elon musk.pdf'),
(10, 'sambhaji', 'Sambhaji', 'Vishwas Patil', 350, 'The Story great Warrior of India ', 'sambhaji.jpg', 'Sambhaji.pdf'),
(11, ' Abdul Kalam', 'Wings of Fire', 'Dr. A.P.J. Abdul Kalam', 300, 'A.P.J. Abdul Kalam (President of India (2002-07), Aerospace scientist) A.P.J. Abdul Kalam was a prominent Indian scientist who served as the 11th President of India from 2002 to 2007 his story', 'wings of fire.jpg', 'Wings of Fire (Dr. A.P.J. Abdul Kalam)'),
(12, 'The Idea', 'The Idea', 'Erik Bork', 230, 'The Idea The Seven Elements of a Viable Story for Screen, Stage or Fiction', 'the idea.jpg', 'The Idea The Seven Elements of a Viable Story for Screen, Stage or Fiction (Erik Bork).pdf'),
(13, 'gandhi', 'Gandhi An Autobiography...', 'Mahatma Gandhi', 300, 'The Story of My Experiments with Truth (Gujarati: Satya Na Prayogo athva Atmakatha, lit. \'Experiments of Truth or Autobiography\') is the autobiography of Mahatma Gandhi, covering his life from early childhood through to 1921. It was written in weekly inst', 'gandhi.jpg', 'gandhi.pdf'),
(14, 'gitanjali', 'Gitanjali', 'Rabindranath Tagore', 290, 'Gitanjali is a collection of poems by the Bengali poet Rabindranath Tagore. Tagore received the Nobel Prize for Literature, largely for the English translation, Song Offerings.\r\nIt is part of the UNESCO Collection of Representative Works.', 'gitanjali.jpg', 'gitanjali.pdf'),
(15, 'Java', 'Java The Ultimate Guide to Learn Java', 'Peter Hoffman', 322, 'Java The Ultimate Guide to Learn Java Programming and Computer Hacking (java for beginners, java for dummies, java apps,', 'java.jpg', 'java.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `books_user`
--

CREATE TABLE `books_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `book_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books_user`
--

INSERT INTO `books_user` (`id`, `username`, `book_name`) VALUES
(1, '', ''),
(2, 'yogesh', 'pytthon pragramming');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `usernamec` varchar(30) NOT NULL,
  `comment` text NOT NULL,
  `send_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `usernamec`, `comment`, `send_at`) VALUES
(1, 'Yogesh sutar', 'Yogesh', 'hello i am\r\n yogesh', '2022-05-07 00:00:00'),
(2, 'Yogesh', 'Yogesh', 'Yogesh', '2022-05-07 00:00:00'),
(3, 'yogesh', 'asdas', 'asdasdasdsa', '2022-05-07 00:00:00'),
(4, 'yogeshdas', 'asdasasd', 'asdasdasdasdas', '2022-05-07 00:00:00'),
(5, 'Yogesh sutar', 'asdas', 'asdasdsa', '2022-05-07 00:00:00'),
(6, 'asdasd', 'asd', 'asdas', '2022-05-07 00:00:00'),
(7, 'asdas', 'asd', 'asd', '2022-05-07 00:00:00'),
(8, 'asd', 'sad', 'asd', '2022-05-07 00:00:00'),
(9, 'asd', 'asd', 'asd', '2022-05-07 00:00:00'),
(10, 'asdasda', 'sdasdasd', 'asdasd', '2022-05-07 00:00:00'),
(11, 'yogesh', 'yogesh', 'Yogesh', '2022-05-15 00:00:00'),
(12, 'yogesh', 'yogesh', 'yogesh', '2022-05-15 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `idpass`
--

CREATE TABLE `idpass` (
  `userID` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobileno` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `ac_create_data` datetime NOT NULL,
  `resettoken` varchar(222) NOT NULL,
  `resettokenexpire` datetime DEFAULT NULL,
  `sendotp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `idpass`
--

INSERT INTO `idpass` (`userID`, `username`, `password`, `name`, `email`, `mobileno`, `gender`, `ac_create_data`, `resettoken`, `resettokenexpire`, `sendotp`) VALUES
(8, 'yogesh', '$2y$10$ZrJOJA9STu/0TJRJaQDgJOD5.LB98pkpNuEJMmLjCbfqUU3S/IFIq', 'yogesh', 'yogiall12345@gmail.com', 1234125434, '', '0000-00-00 00:00:00', '81700190a281b0f51c3fc709d3846f41', '2022-05-18 00:00:00', 533698);

-- --------------------------------------------------------

--
-- Table structure for table `ispass`
--

CREATE TABLE `ispass` (
  `userID` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobileno` int(12) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `ac_create_data` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `txn`
--

CREATE TABLE `txn` (
  `orderid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `amoount` int(10) NOT NULL,
  `txn_date` datetime NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `resettoken` varchar(255) DEFAULT NULL,
  `resettokenexpire` date DEFAULT NULL,
  `sendotp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `name`, `email`, `phone`, `username`, `password`, `gender`, `picture`, `created_at`, `resettoken`, `resettokenexpire`, `sendotp`) VALUES
(2, '', '', '', 'yogesh', '$2y$10$ie1GcEJZtS5XMsdTEWj3X.o3FcPRXR8Wfr3jRqRKprFgdwRDXGwcm', '', '', '2022-04-15 04:09:48', '5784d0516bac9eca012b6499fe008784', '2022-04-27', 0),
(3, '', '', '', 'mahesh', '$2y$10$ie1GcEJZtS5XMsdTEWj3X.o3FcPRXR8Wfr3jRqRKprFgdwRDXGwcm', '', '', '2022-04-17 00:26:54', '5784d0516bac9eca012b6499fe008784', '2022-04-27', 0),
(4, 'yogesh', 'yogesh1@gmail.com', '7894566564', 'yogesh1', '$2y$10$ie1GcEJZtS5XMsdTEWj3X.o3FcPRXR8Wfr3jRqRKprFgdwRDXGwcm', 'Male', '', '2022-04-17 05:09:11', NULL, NULL, 0),
(5, 'yogesh', 'yogesh134@gmail.com', '549545916', 'magesh', '$2y$10$ie1GcEJZtS5XMsdTEWj3X.o3FcPRXR8Wfr3jRqRKprFgdwRDXGwcm', 'Male', '', '2022-04-17 05:12:31', NULL, NULL, 0),
(6, 'yogesh', 'y1ogesh@gmail.com', '8494654', 'mahesh1', '$2y$10$ie1GcEJZtS5XMsdTEWj3X.o3FcPRXR8Wfr3jRqRKprFgdwRDXGwcm', 'Male', '', '2022-04-17 05:26:56', NULL, NULL, 0),
(7, 'yogesh111', 'yogesh111@gmail.com', '4561234564', 'yogesh111', '$2y$10$ie1GcEJZtS5XMsdTEWj3X.o3FcPRXR8Wfr3jRqRKprFgdwRDXGwcm', 'Male', '', '2022-04-17 05:40:48', NULL, NULL, 0),
(8, 'yogesh 123', 'yogesh123@gmail.com', '4567891235', 'yogesh 123', '$2y$10$ie1GcEJZtS5XMsdTEWj3X.o3FcPRXR8Wfr3jRqRKprFgdwRDXGwcm', 'Male', 'fund flow statement new     1 (1).pdf', '2022-04-17 07:36:02', 'cf53d8d37791ea9232951749dccc5bde', '2022-04-18', 0),
(9, 'yogiall', 'yogiall@gmail.com', '1234567885', 'yogiall', '$2y$10$Vbeog.MFug7TaJaFuW5qHOQhfjyUOp8Xii5cXbVutRsVnmtdcO9TK', 'Male', '', '2022-04-17 08:52:48', '', '2022-04-18', 0),
(10, 'library', 'library@gmail.com', 'library', 'library', '$2y$10$ie1GcEJZtS5XMsdTEWj3X.o3FcPRXR8Wfr3jRqRKprFgdwRDXGwcm', 'Male', '', '2022-04-17 11:49:38', 'be5a69fcceaadeeab1ed6135fcc0933b', '2022-04-18', 0),
(13, 'yogesh1234', 'yogesh@gmail.com', '549199', 'yogesh1234', '$2y$10$ie1GcEJZtS5XMsdTEWj3X.o3FcPRXR8Wfr3jRqRKprFgdwRDXGwcm', 'Male', '', '2022-04-23 09:04:13', NULL, NULL, 0),
(15, 'ganesh', 'ganesh@gmail.com', '4567891233', 'ganesh', '$2y$10$ie1GcEJZtS5XMsdTEWj3X.o3FcPRXR8Wfr3jRqRKprFgdwRDXGwcm', 'Select Gender', '', '2022-04-23 09:08:13', NULL, NULL, 0),
(16, 'ganesh', 'ganesh123@gmail.com', '123456789', 'ganesh123', '$2y$10$ie1GcEJZtS5XMsdTEWj3X.o3FcPRXR8Wfr3jRqRKprFgdwRDXGwcm', 'Select Gender', '', '2022-04-26 11:16:10', NULL, NULL, 0),
(17, 'yogiall', 'yogiall12345@gmail.com', '23457996519', 'yogiall10', '$2y$10$R3SPKU9VTDpsIWUS.qMB5.jMA9VnpXy9TaDQU1P8uE0Iios35MsmS', 'Male', '', '2022-04-27 11:34:29', 'b854031d1c81a5e872b71d8e187ec20b', '2022-05-07', 527135),
(18, 'asda', 'asd@gmal.com', '564654611', 'asd', '$2y$10$ie1GcEJZtS5XMsdTEWj3X.o3FcPRXR8Wfr3jRqRKprFgdwRDXGwcm', 'Male', '', '2022-04-27 11:56:25', NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `books_user`
--
ALTER TABLE `books_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idpass`
--
ALTER TABLE `idpass`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `ispass`
--
ALTER TABLE `ispass`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `txn`
--
ALTER TABLE `txn`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `books_user`
--
ALTER TABLE `books_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `idpass`
--
ALTER TABLE `idpass`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ispass`
--
ALTER TABLE `ispass`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `txn`
--
ALTER TABLE `txn`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
