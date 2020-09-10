-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2020 at 05:18 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `feynman`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
`id` int(36) NOT NULL,
  `topic` varchar(200) NOT NULL,
  `content` varchar(5000) NOT NULL,
  `classified_content` varchar(5000) NOT NULL,
  `percentage` varchar(6) NOT NULL DEFAULT '0',
  `user_id` int(36) NOT NULL,
  `upd_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `topic`, `content`, `classified_content`, `percentage`, `user_id`, `upd_date`) VALUES
(1, 'Lorem Ipsum', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '\n            <span class="block understood"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout </span>.<span class="block somewhatUnderstood">  The point of using Lorem Ipsum is that it has a more </span>-<span class="block"> or </span>-<span class="block"> less normal distribution of letters </span>,<span class="block somewhatUnderstood">  as opposed to using  </span>''<span class="block"> Content here </span>,<span class="block">  content here </span>''<span class="block">  </span>,<span class="block">  making it look like readable English </span>.<span class="block notClear">  Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text </span>,<span class="block">  and a search for  </span>''<span class="block"> lorem ipsum </span>''<span class="block">  will uncover many web sites still in their infancy </span>.<span class="block">  Various versions have evolved over the years </span>,<span class="block">  sometimes by accident </span>,<span class="block somewhatUnderstood">  sometimes on purpose  </span>(<span class="block rubbish"> injected humour and the like </span>)<span class="block">  </span>.<span class="block"> </span>        ', '66.666', 1, '2020-09-10 20:44:08'),
(2, 'Translation', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.', '\n            <span class="block rubbish"> On the other hand </span>,<span class="block">  we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment </span>,<span class="block">  so blinded by desire </span>,<span class="block notClear">  that they cannot foresee the pain and trouble that are bound to ensue </span>;<span class="block understood">  and equal blame belongs to those who fail in their duty through weakness of will </span>,<span class="block">  which is the same as saying through shrinking from toil and pain </span>.<span class="block">  These cases are perfectly simple and easy to distinguish </span>.<span class="block">  In a free hour </span>,<span class="block understood">  when our power of choice is untrammelled and when nothing prevents our being able to do what we like best </span>,<span class="block notClear">  every pleasure is to be welcomed and every pain avoided </span>.<span class="block understood">  But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted </span>.<span class="block rubbish">  The wise man therefore always holds in these matters to this principle of selection </span>:<span class="block">  he rejects pleasures to secure other greater pleasures </span>,<span class="block somewhatUnderstood">  or else he endures pains to avoid worse pains </span>.<span class="block"> </span>        ', '65.625', 1, '2020-09-10 20:48:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(36) NOT NULL,
  `name` varchar(100) NOT NULL,
  `upd_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `upd_date`) VALUES
(1, 'John', '2020-09-10 20:43:46');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `id` int(36) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(36) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
