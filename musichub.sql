-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2017 at 03:27 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musichub`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `imageurl` varchar(255) NOT NULL,
  `releasedate` date NOT NULL,
  `noofsongs` int(11) NOT NULL,
  `price` float NOT NULL,
  `description` varchar(500) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `title`, `imageurl`, `releasedate`, `noofsongs`, `price`, `description`, `date_created`) VALUES
(1, 'Jago bangla', 'step-4-dasboard.jpg', '0000-00-00', 2, 30, 'Allmusic gives the album 3 stars stating The godfather of contemporary jazz-soul chills, changing the pace from his electrifying collaborations with Eddie Harris -- Swiss Movement and Second Movement -- that preceded and followed this mellow set of mostly love songs', '2017-08-24'),
(2, 'Sei Tumi', 'seitumi.jpg', '2017-08-31', 1, 15, 'The album prompted a wide array of reactions on social media; the project had been highly anticipated since Beyoncé’s revealing and Grammy-winning album Lemonade.', '2017-08-24');

-- --------------------------------------------------------

--
-- Table structure for table `albumartist`
--

CREATE TABLE `albumartist` (
  `id` int(20) NOT NULL,
  `albumid` int(11) NOT NULL,
  `artistid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `albumartist`
--

INSERT INTO `albumartist` (`id`, `albumid`, `artistid`) VALUES
(1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `albumsongs`
--

CREATE TABLE `albumsongs` (
  `id` int(20) NOT NULL,
  `albumid` int(11) DEFAULT NULL,
  `songid` int(11) DEFAULT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `albumsongs`
--

INSERT INTO `albumsongs` (`id`, `albumid`, `songid`, `date_created`) VALUES
(1, 1, 1, '2017-08-24'),
(2, 1, 2, '2017-08-24'),
(3, 2, 3, '2017-08-24');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `imageurl` varchar(255) NOT NULL,
  `membershipid` int(11) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `name`, `gender`, `email`, `imageurl`, `membershipid`, `phone_no`, `country`, `password`, `date_created`) VALUES
(2, 'Ashik Mahmud', 'male', 'amd690544@gmail.com', 'http://localhost/Musichub/pictures/profilepicture/1503472542.jpg', 1, '01932976181', 'Bangladesh', '$2y$10$ZziI1hCdX0AxAyscFmDEFe3tKxa3vNymZEVz8eNdXAVCnccKnsUZy', '2017-08-23'),
(3, 'Atish Sarker', 'male', 'atish.sarker@northsouth.edu', 'http://localhost/Musichub/pictures/profilepicture/1503603584.jpg', 2, '01755297218', 'Bangladesh', '$2y$10$suYxDRT8eZzKW4oO1AVc7..Xg3rG2IE/tUXJQQjMUuTzSB4.Tuu3O', '2017-08-24'),
(4, 'Dr. Sazzad Hossain', 'male', 'shazzad.hosain@northsouth.edu', 'http://localhost/Musichub/pictures/profilepicture/1503605302.jpg', 3, '88 02 55668200', 'Bangladesh', '$2y$10$h7vKeh6TUsqHbvbXGQlLiuoThNkTvgWzXeFraybz2R2Vg8VvUCreC', '2017-08-24');

-- --------------------------------------------------------

--
-- Table structure for table `calender`
--

CREATE TABLE `calender` (
  `id` int(20) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `eventid` int(11) DEFAULT NULL,
  `isgoing` tinyint(4) DEFAULT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(20) NOT NULL,
  `bandname` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL,
  `comment` varchar(500) NOT NULL,
  `artistid` int(11) DEFAULT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `bandname`, `location`, `datetime`, `comment`, `artistid`, `date_created`) VALUES
(1, 'Artcell', 'Basundhara R/A', '2017-08-23 13:00:00', 'This is going to be the best event ever. You all are welcome to this event.', 2, '2017-08-23'),
(2, 'ARK', 'Nikunjo 2', '2017-08-30 13:00:00', 'This is some dummy text', 2, '2017-08-25');

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `id` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `artistid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `follow`
--

INSERT INTO `follow` (`id`, `userid`, `artistid`) VALUES
(8, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `name`, `date_created`) VALUES
(1, 'Folk', '2017-08-23'),
(2, 'Classical', '2017-08-23'),
(3, 'Hip Hop', '2017-08-23'),
(4, 'Pop', '2017-08-23'),
(5, 'Rapping', '2017-08-23');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `name`, `price`) VALUES
(1, 'Basic', 10),
(2, 'Professional', 29),
(3, 'Enterprise', 50);

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE `song` (
  `id` int(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `genreid` int(11) DEFAULT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`id`, `title`, `filename`, `genreid`, `date_created`) VALUES
(1, 'Abhi To Haath Mein Jaam Hai-(Mr-Jatt.com).mp3', 'Abhi_To_Haath_Mein_Jaam_Hai-(Mr-Jatt.com).mp3', 1, '2017-08-24'),
(2, 'Tumi nijer mukhei (bengali-mp3.com).mp3', 'Tumi_nijer_mukhei_(bengali-mp3.com).mp3', 1, '2017-08-24'),
(3, 'Tumi nijer mukhei (bengali-mp3.com)1.mp3', 'Tumi_nijer_mukhei_(bengali-mp3.com)1.mp3', 2, '2017-08-24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `imageurl` varchar(500) NOT NULL,
  `email` varchar(255) NOT NULL,
  `membershipid` int(11) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `gender`, `imageurl`, `email`, `membershipid`, `phone_no`, `country`, `password`, `date_created`) VALUES
(1, 'Atik ', 'male', 'http://localhost/Musichub/pictures/profilepicture/1503646977.jpg', 'atik@gmail.com', 1, '01932976181', 'Bangladesh', '$2y$10$Mv0aTYrIscYrWre.IuhrQevCS/NXrqUikppE5PWi5zOKmpW440Yve', '2017-08-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `albumartist`
--
ALTER TABLE `albumartist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `albumid` (`albumid`),
  ADD KEY `artistid` (`artistid`);

--
-- Indexes for table `albumsongs`
--
ALTER TABLE `albumsongs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `albumid` (`albumid`),
  ADD KEY `songid` (`songid`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_artistKey` (`membershipid`);

--
-- Indexes for table `calender`
--
ALTER TABLE `calender`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `eventid` (`eventid`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artistid` (`artistid`);

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `artistid` (`artistid`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`id`),
  ADD KEY `genreid` (`genreid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_userKey` (`membershipid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `albumartist`
--
ALTER TABLE `albumartist`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `albumsongs`
--
ALTER TABLE `albumsongs`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `calender`
--
ALTER TABLE `calender`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `follow`
--
ALTER TABLE `follow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `song`
--
ALTER TABLE `song`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `albumartist`
--
ALTER TABLE `albumartist`
  ADD CONSTRAINT `albumartist_ibfk_1` FOREIGN KEY (`albumid`) REFERENCES `album` (`id`),
  ADD CONSTRAINT `albumartist_ibfk_2` FOREIGN KEY (`artistid`) REFERENCES `artist` (`id`);

--
-- Constraints for table `albumsongs`
--
ALTER TABLE `albumsongs`
  ADD CONSTRAINT `albumsongs_ibfk_1` FOREIGN KEY (`albumid`) REFERENCES `album` (`id`),
  ADD CONSTRAINT `albumsongs_ibfk_2` FOREIGN KEY (`songid`) REFERENCES `song` (`id`);

--
-- Constraints for table `artist`
--
ALTER TABLE `artist`
  ADD CONSTRAINT `FK_artistKey` FOREIGN KEY (`membershipid`) REFERENCES `membership` (`id`);

--
-- Constraints for table `calender`
--
ALTER TABLE `calender`
  ADD CONSTRAINT `calender_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `calender_ibfk_2` FOREIGN KEY (`eventid`) REFERENCES `event` (`id`);

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`artistid`) REFERENCES `artist` (`id`);

--
-- Constraints for table `follow`
--
ALTER TABLE `follow`
  ADD CONSTRAINT `follow_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `follow_ibfk_2` FOREIGN KEY (`artistid`) REFERENCES `artist` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `song`
--
ALTER TABLE `song`
  ADD CONSTRAINT `song_ibfk_1` FOREIGN KEY (`genreid`) REFERENCES `genre` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_userKey` FOREIGN KEY (`membershipid`) REFERENCES `membership` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
