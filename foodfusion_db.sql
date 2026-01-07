-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2026 at 04:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodfusion_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `post_id`, `user_id`, `comment`, `created_at`) VALUES
(1, 7, 2, 'hello', '2026-01-03 22:13:17'),
(2, 8, 2, 'yeah', '2026-01-04 16:31:10'),
(3, 8, 2, 'Wow!', '2026-01-05 07:21:09'),
(4, 10, 11, 'Isn\'t it great?', '2026-01-06 17:10:04');

-- --------------------------------------------------------

--
-- Table structure for table `community_cookbook_entries`
--

CREATE TABLE `community_cookbook_entries` (
  `entry_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `message_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`message_id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
(1, 'lala', 'test@gmail.com', 'mama', 'i love your website!', '2026-01-05 00:05:35'),
(2, 'lala', 'test@gmail.com', 'mama', 'yo', '2026-01-05 00:51:05');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `user_id`, `content`, `image`, `created_at`) VALUES
(1, 1, 'Tried a new spice mix today — amazing flavors!', NULL, '2026-01-03 21:09:10'),
(2, 1, 'Does anyone have a good vegan jollof recipe?', NULL, '2026-01-03 21:09:10'),
(3, 1, 'Sunday cooking hits different 🍲', NULL, '2026-01-03 21:09:10'),
(4, 2, 'hello', NULL, '2026-01-03 21:34:04'),
(5, 2, 'Hello', NULL, '2026-01-03 21:34:33'),
(6, 2, 'good food!', '1767476746_2(3).png', '2026-01-03 21:45:46'),
(7, 2, 'I made something new today lol', '1767478372_amara-food.jpg', '2026-01-03 22:12:52'),
(8, 2, 'Food is ready!', NULL, '2026-01-04 16:31:01'),
(9, 10, 'Hey Lala!', NULL, '2026-01-06 08:46:52'),
(10, 11, 'Hi Guys!\r\nMeal of the day!', '1767719388_food.png', '2026-01-06 17:09:48');

-- --------------------------------------------------------

--
-- Table structure for table `post_likes`
--

CREATE TABLE `post_likes` (
  `like_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post_likes`
--

INSERT INTO `post_likes` (`like_id`, `post_id`, `user_id`) VALUES
(4, 6, 2),
(1, 7, 2),
(2, 8, 2),
(5, 10, 11);

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `recipe_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `cuisine_type` varchar(50) NOT NULL,
  `dietary_preference` varchar(50) DEFAULT NULL,
  `difficulty_level` enum('Easy','Medium','Hard') NOT NULL,
  `instructions` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `resource_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `type` enum('recipe','video','pdf','infographic') NOT NULL,
  `category` enum('culinary','energy') NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`resource_id`, `title`, `description`, `type`, `category`, `thumbnail`, `file_path`, `created_at`) VALUES
(1, 'Italian Pasta Guide', 'Authentic pasta techniques', 'pdf', 'culinary', 'thumbnails/pasta.jpg', 'downloads/pasta.pdf', '2026-01-04 21:03:02'),
(2, 'Knife Skills 101', 'Professional knife handling', 'video', 'culinary', 'thumbnails/knife.jpg', 'videos/knife.mp4', '2026-01-04 21:03:02'),
(3, 'World Sauces Guide', 'Sauces from 12 cultures', 'pdf', 'culinary', 'thumbnails/sauces.jpg', 'downloads/sauces.pdf', '2026-01-04 21:03:02'),
(4, 'Fermentation Basics', 'Learn kimchi & kombucha', 'video', 'culinary', 'thumbnails/ferment.jpg', 'videos/ferment.mp4', '2026-01-04 21:03:02'),
(5, 'Street Food Cultures', 'Iconic street foods', 'pdf', 'culinary', 'thumbnails/street.jpg', 'downloads/street.pdf', '2026-01-04 21:03:02'),
(6, 'Baking Science', 'Why baking works', 'video', 'culinary', 'thumbnails/baking.jpg', 'videos/baking.mp4', '2026-01-04 21:03:02'),
(7, 'Plating Like a Chef', 'Food presentation techniques', 'pdf', 'culinary', 'thumbnails/plating.jpg', 'downloads/plating.pdf', '2026-01-04 21:03:02'),
(8, 'Spice Pairing Chart', 'Flavor combinations', 'infographic', 'culinary', 'thumbnails/spices.jpg', 'downloads/spices.pdf', '2026-01-04 21:03:02'),
(9, 'Healthy Meal Prep', 'Weekly prep system', 'video', 'culinary', 'thumbnails/mealprep.jpg', 'videos/mealprep.mp4', '2026-01-04 21:03:02'),
(10, 'Knife Skills Mastery', 'Professional knife techniques for safer and faster cooking', 'video', 'culinary', 'thumbnails/knife-skills.jpg', 'videos/knife-skills.mp4', '2026-01-04 21:03:02'),
(11, 'Solar Energy Basics', 'Renewable energy explained', 'pdf', 'energy', 'thumbnails/solar.jpg', 'downloads/solar.pdf', '2026-01-04 21:03:02'),
(12, 'Renewable Energy Basics', 'Intro to clean energy', 'video', 'energy', 'thumbnails/renewable.jpg', 'videos/renewable.mp4', '2026-01-04 21:03:02'),
(13, 'Solar Energy Explained', 'How solar power works', 'pdf', 'energy', 'thumbnails/solar.jpg', 'downloads/solar.pdf', '2026-01-04 21:03:02'),
(14, 'Wind Power Systems', 'Turbines and energy grids', 'video', 'energy', 'thumbnails/wind.jpg', 'videos/wind.mp4', '2026-01-04 21:03:02'),
(15, 'Energy Efficiency Guide', 'Reduce energy consumption', 'pdf', 'energy', 'thumbnails/efficiency.jpg', 'downloads/efficiency.pdf', '2026-01-04 21:03:02'),
(16, 'Sustainable Living', 'Daily eco-friendly habits', 'video', 'energy', 'thumbnails/sustain.jpg', 'videos/sustain.mp4', '2026-01-04 21:03:02'),
(17, 'Climate Change Visuals', 'Infographic series', 'infographic', 'energy', 'thumbnails/climate.jpg', 'downloads/climate.pdf', '2026-01-04 21:03:02'),
(18, 'Green Architecture', 'Future sustainable buildings', 'pdf', 'energy', 'thumbnails/architecture.jpg', 'downloads/architecture.pdf', '2026-01-04 21:03:02'),
(19, 'Energy Storage Tech', 'Batteries and future storage', 'video', 'energy', 'thumbnails/storage.jpg', 'videos/storage.mp4', '2026-01-04 21:03:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `failed_login_attempts` int(11) DEFAULT 0,
  `lockout_until` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password_hash`, `failed_login_attempts`, `lockout_until`, `created_at`) VALUES
(1, 'test', 'user', 'testuser@gmail.com', '$2y$10$6Z/.BpG6ncZShNRD9Y.tQeVxpZwoSljAHMm5UpBJ73.fS4QnZG/Dy', 1, NULL, '2025-12-27 23:15:15'),
(2, 'lala', 'mama', 'test@gmail.com', '$2y$10$tgjkAKQm5w1jNCTWMNXWh.BgbEEwcng43VvBRNj7CTOtnlus.upha', 0, NULL, '2025-12-27 23:34:28'),
(3, 'lolo', 'mama', 'example@gmail.com', '$2y$10$MEM9nruAHGsn486agOONyuSCx2YciC0IH8wacJ8Or7y.UNIeX3Fau', 0, NULL, '2025-12-28 06:40:50'),
(4, 'lolo', 'mama', 'example1@gmail.com', '$2y$10$UVb9EijF7yOSjcwuqDK6M.q6Rp/ECslX.ICSabSmo4MYi.PzN9hyu', 0, NULL, '2025-12-28 06:41:07'),
(5, 'Peace', 'Ebere', 'pebby@gmail.com', '$2y$10$zvmBnJ55WoTqGnLZr6wDEOpWMc6meUvEMYh.mnuVRBhyKVB/rFQSm', 1, NULL, '2025-12-30 05:36:09'),
(6, 'lolo', 'papa', 'papa@gmail.com', '$2y$10$J3Jdw7IQza98qv7LisBeKeZT0EYuv3Uuk8LIcfklK5uWrRpCgHdOO', 0, NULL, '2025-12-30 06:18:17'),
(7, 'pebbo', 'master', 'peb@gmail.com', '$2y$10$XQ1gpKG9YrTDmPosrqAzl.iec71buvg5zzVTFvZKzyEnyT8sgnvnm', 0, NULL, '2025-12-30 06:24:50'),
(8, 'amara', 'mama', 'aa@gmail.com', '$2y$10$d7cNDqTc4HDfqziodfhKdOWboM4JzGKaUc4.MxuScDGAmN26gyDZm', 0, NULL, '2025-12-30 12:48:40'),
(9, 'amazing', 'pepe', 'amaa@gmail.com', '$2y$10$4fEm3wtpYoZfaRvWSAa.xOw8lmqjU8/WaWemfVj7xQLVM0.jUEEnK', 0, NULL, '2026-01-01 19:40:34'),
(10, 'Emmanuella', 'Chiemeke', 'emmyebube2008@gmail.com', '$2y$10$IhRwerUYnwD66FLCpRaRxeaJG4PJPAKyT8gpC90ne5KNi/bPHG7Vi', 0, NULL, '2026-01-06 07:11:53'),
(11, 'hello', 'i\'m', 'hello@gmail.com', '$2y$10$j5f.9Qc68t5N4wbIgC1l3uIFYE1Y4ObWWbBGWR96Rgim9mFLuynni', 0, NULL, '2026-01-06 18:08:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `community_cookbook_entries`
--
ALTER TABLE `community_cookbook_entries`
  ADD PRIMARY KEY (`entry_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `recipe_id` (`recipe_id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post_likes`
--
ALTER TABLE `post_likes`
  ADD PRIMARY KEY (`like_id`),
  ADD UNIQUE KEY `post_id` (`post_id`,`user_id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`recipe_id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`resource_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `community_cookbook_entries`
--
ALTER TABLE `community_cookbook_entries`
  MODIFY `entry_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `post_likes`
--
ALTER TABLE `post_likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `recipe_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `resource_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `community_cookbook_entries`
--
ALTER TABLE `community_cookbook_entries`
  ADD CONSTRAINT `community_cookbook_entries_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `community_cookbook_entries_ibfk_2` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`recipe_id`) ON DELETE CASCADE;

--
-- Constraints for table `recipes`
--
ALTER TABLE `recipes`
  ADD CONSTRAINT `recipes_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
