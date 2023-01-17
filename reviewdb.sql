-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 03:55 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reviewdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

CREATE TABLE `review_table` (
  `id` int(11) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `user_review` longtext NOT NULL,
  `user_rating` int(3) NOT NULL,
  `date_time` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`id`, `user_name`, `user_review`, `user_rating`, `date_time`) VALUES
(1, 'Charles', 'Lorem ipsum, dolor sit amet consectetur \nadipisicing elit. Cumque necessitatibus asperiores \nquasi dolorum cum enim culpa ab aperiam nihil amet,\neos iste odio, dicta, corporis nulla quaerat optio ', 4, '2021-06-29 09:38:22'),
(2, 'Monazzi', 'Lorem ipsum, dolor sit amet consectetur \nadipisicing elit. Cumque necessitatibus asperiores \nquasi dolorum cum enim culpa ab aperiam nihil amet,\neos iste odio, dicta, corporis nulla quaerat optio \naliquam facere delectus ipsa provident? Officia, \nuos laborum! Repudiandae perspiciatis, voluptate \nassumenda beatae perferendis nostrum nulla! Ab, \nconsequuntur soluta non beatae aspernatur ad doloremque \ndoloribus neque illum odit nobis praesentium totam\nalias vero perferendis corrupti libero quam animi \nasperiores quis autem iste voluptatum repellat! Possimus, ', 3, '2021-06-29 13:41:52'),
(3, 'Shibaby', 'Lorem ipsum, dolor sit amet consectetur \nadipisicing elit. Cumque necessitatibus asperiores \nquasi dolorum cum enim culpa ab aperiam nihil amet,\neos iste odio, dicta, corporis nulla quaerat optio \naliquam facere delectus ipsa provident? Officia, \nuos laborum! Repudiandae perspiciatis, voluptate \nassumenda beatae perferendis nostrum nulla! Ab, \nconsequuntur soluta non beatae aspernatur ad doloremque \ndoloribus neque illum odit nobis praesentium totam\nalias vero perferendis corrupti libero quam animi \nasperiores quis autem iste voluptatum repellat! Possimus, ', 3, '2021-06-29 13:43:48'),
(4, 'N Y Ave', 'Lorem ipsum, dolor sit amet consectetur \nadipisicing elit. Cumque necessitatibus asperiores \nquasi dolorum cum enim culpa ab aperiam nihil amet,\neos iste odio, dicta, corporis nulla quaerat optio \naliquam facere delectus ipsa provident? Officia, \nuos laborum! Repudiandae perspiciatis, voluptate \nassumenda beatae perferendis nostrum nulla! Ab, \nconsequuntur soluta non beatae aspernatur ad doloremque \ndoloribus neque illum odit nobis praesentium totam', 4, '2021-06-29 13:59:11'),
(5, 'Chickie', 'I fucking hate this!', 1, '2021-06-29 14:27:02'),
(6, 'Avadoo', 'Lorem ipsum, dolor sit amet consectetur \nadipisicing elit. Cumque necessitatibus asperiores \nquasi dolorum cum enim culpa ab aperiam nihil amet,\neos iste odio, dicta, corporis nulla quaerat optio \naliquam facere delectus ipsa provident? Officia, \nuos laborum! Repudiandae perspiciatis, voluptate \nassumenda beatae perferendis nostrum nulla! Ab, \nconsequuntur soluta non beatae aspernatur ad doloremque \ndoloribus neque illum odit nobis praesentium totam\nalias vero perferendis corrupti libero quam animi \nasperiores quis autem iste voluptatum repellat! Possimus, \nconsequatur, laudantium deserunt natus aspernatur sed esse \nat quasi praesentium nisi qui voluptatibus neque laborum \nipsam error eveniet cumque! Sequi dolore, atque nihil \nrepellendus enim porro explicabo!', 5, '2021-06-29 14:31:57'),
(7, 'Soo', 'Lorem ipsum, dolor sit amet consectetur \nadipisicing elit. Cumque necessitatibus asperiores \nquasi dolorum cum enim culpa ab aperiam nihil amet,\neos iste odio, dicta, corporis nulla quaerat optio \naliquam facere delectus ipsa provident? Officia, \nuos laborum! Repudiandae perspiciatis, voluptate \nassumenda beatae perferendis nostrum nulla! Ab, \nconsequuntur soluta non beatae aspernatur ad doloremque \ndoloribus neque illum odit nobis praesentium totam\nalias vero perferendis corrupti libero quam animi \n', 2, '2021-06-29 14:32:29'),
(8, 'Ahua FC', 'quasi dolorum cum enim culpa ab aperiam nihil amet,\neos iste odio, dicta, corporis nulla quaerat optio \naliquam facere delectus ipsa provident? Officia, \nuos laborum! Repudiandae perspiciatis, voluptate ', 4, '2021-06-29 14:33:06'),
(9, 'Theo ', 'Lorem ipsum, dolor sit amet consectetur \nadipisicing elit. Cumque necessitatibus asperiores \nquasi dolorum cum enim culpa ab aperiam nihil amet,\neos iste odio, dicta, corporis nulla quaerat optio \naliquam facere delectus ipsa provident? Officia, \nuos laborum! Repudiandae perspiciatis, voluptate \nassumenda beatae perferendis nostrum nulla! Ab, \nconsequuntur soluta non beatae aspernatur ad doloremque \ndoloribus neque illum odit nobis praesentium totam\nalias vero perferendis corrupti libero quam animi \nasperiores quis autem iste voluptatum repellat! Possimus, \nconsequatur, laudantium deserunt natus aspernatur sed esse \nat quasi praesentium nisi qui voluptatibus neque laborum \nipsam error eveniet cumque! Sequi dolore, atque nihil \nrepellendus enim porro explicabo!', 5, '2021-06-29 15:04:58'),
(10, 'Ice ', 'Lorem ipsum, dolor sit amet consectetur \nadipisicing elit. Cumque necessitatibus asperiores \nquasi dolorum cum enim culpa ab aperiam nihil amet,\neos iste odio, dicta, corporis nulla quaerat optio \naliquam facere delectus ipsa provident? Officia, \nuos laborum! Repudiandae perspiciatis, voluptate \nassumenda beatae perferendis nostrum nulla! Ab, \nconsequuntur soluta non beatae aspernatur ad doloremque \ndoloribus neque illum odit nobis praesentium totam\nalias vero perferendis corrupti libero quam animi \nasperiores quis autem iste voluptatum repellat! Possimus, \nconsequatur, laudantium deserunt natus aspernatur sed esse \nat quasi praesentium nisi qui voluptatibus neque laborum \nipsam error eveniet cumque! Sequi dolore, atque nihil \nrepellendus enim porro explicabo!', 3, '2021-06-29 19:51:00'),
(11, 'Stefan', 'Lorem ipsum, dolor sit amet consectetur \nadipisicing elit. Cumque necessitatibus asperiores \nquasi dolorum cum enim culpa ab aperiam nihil amet,\neos iste odio, dicta, corporis nulla quaerat optio \naliquam facere delectus ipsa provident? Officia, \nuos laborum! Repudiandae perspiciatis, voluptate \nassumenda beatae perferendis nostrum nulla! Ab, \nconsequuntur soluta non beatae aspernatur ad doloremque \ndoloribus neque illum odit nobis praesentium totam\nalias vero perferendis corrupti libero quam animi \nasperiores quis autem iste voluptatum repellat! Possimus, \nconsequatur, laudantium deserunt natus aspernatur sed esse \nat quasi praesentium nisi qui voluptatibus neque laborum \nipsam error eveniet cumque! Sequi dolore, atque nihil \nrepellendus enim porro explicabo!', 2, '2021-06-29 20:06:42'),
(12, 'Bella', 'lorem ipsum dolor sit amet consectuter adispicing elit.', 3, '2021-06-30 11:41:32'),
(13, 'Kingdom', 'dfghjkfghjkfghj', 4, '2022-01-25 11:35:27'),
(14, 'Iorngbouch Charles', 'lorem ipsum dolor sit amet consectuter adipisicing elit.', 3, '2022-01-27 20:36:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
