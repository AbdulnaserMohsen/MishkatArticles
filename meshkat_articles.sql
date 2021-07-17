-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2021 at 08:30 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meshkat_articles`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `content` text NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `admin_id` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `image`, `content`, `category_id`, `admin_id`, `created_at`, `updated_at`) VALUES
(5, 'Sports is good for health', 'images/ArticleImages/ezzH9C_1626542727_different_sports.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit consectetur purus non sollicitudin. Praesent ac laoreet orci, nec euismod risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu fermentum justo. Mauris et diam vestibulum, lacinia velit vitae, egestas justo. Maecenas vel mauris scelerisque urna dignissim pellentesque. Morbi egestas, est non tincidunt varius, urna turpis eleifend nibh, sed mollis tellus dui sed metus. In turpis sapien, aliquam nec suscipit nec, sagittis vel dui. Sed a mi eu enim consequat congue aliquam id nibh.\r\n\r\nIn hac habitasse platea dictumst. Pellentesque volutpat lacinia dolor, at fringilla mi fermentum lobortis. Fusce condimentum posuere felis ac imperdiet. Vestibulum pellentesque, lectus eget bibendum interdum, sem urna pellentesque dolor, tristique efficitur metus neque sit amet tellus. Pellentesque a ligula ex. Mauris ultrices leo neque, eu mattis ligula cursus non. Proin a dictum mauris. Proin commodo accumsan vestibulum. Nulla in nisl sed mauris bibendum vestibulum ut id erat. Donec a ante vestibulum, interdum elit at, volutpat purus. Nulla dignissim mi nisi, ut egestas mauris vestibulum at. Nulla facilisi. Integer luctus congue mattis.\r\n\r\nCras auctor tempus malesuada. Pellentesque malesuada efficitur quam vitae dignissim. Suspendisse feugiat enim venenatis eleifend interdum. Cras mollis elementum ultrices. Phasellus tempus, augue et ultricies posuere, metus mi rhoncus ipsum, non venenatis magna leo quis elit. Vestibulum a vehicula purus. Aenean malesuada nisi arcu. Morbi sed felis mollis, cursus libero eu, consequat lacus. Donec fermentum ut felis vel ultricies. Curabitur molestie felis non diam scelerisque posuere. Vivamus eu leo eget nunc luctus ullamcorper. Vivamus blandit aliquet lorem sed sollicitudin. Duis non vestibulum tortor, id tempor turpis. Sed eleifend risus at ornare convallis. Mauris lobortis justo quis dui molestie aliquet.\r\n\r\nNam vitae lectus sapien. Sed fringilla orci ipsum, eu sodales justo condimentum a. Pellentesque vel massa semper, mattis ex ut, sollicitudin felis. Duis commodo nisi velit, pellentesque finibus ipsum dictum iaculis. Nulla at sodales ante, non gravida justo. Donec vitae felis dignissim, malesuada nisi at, pellentesque libero. Nulla facilisi. Vivamus pharetra gravida laoreet. Etiam auctor dui quis nunc luctus scelerisque. Nunc tempus massa auctor felis luctus scelerisque. Fusce sit amet enim vel neque tincidunt sollicitudin et consectetur metus. Morbi sed feugiat massa, quis lobortis odio.\r\n\r\nPraesent ac ante sit amet purus eleifend accumsan id vitae mauris. Cras odio tellus, lacinia eget posuere ut, faucibus vitae tellus. Etiam lacinia consequat nisl scelerisque blandit. Nulla dapibus dapibus facilisis. Praesent eu arcu enim. Nunc finibus, tellus eget vulputate semper, ipsum arcu vulputate dui, a aliquet dolor nibh nec arcu. Fusce tempor massa sit amet augue cursus, in hendrerit turpis accumsan. Sed molestie, est vitae euismod convallis, eros massa mattis lorem, et volutpat turpis ligula vitae diam. Donec fermentum sem id metus faucibus cursus. Vestibulum at turpis at libero interdum faucibus. Nunc dictum at lacus quis interdum.', 34, 3, '2021-07-15 12:40:29', '2021-07-17 15:25:27'),
(6, 'Different Science', 'images/ArticleImages/FvbasW_1626543582_Science-resized-750x325.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit consectetur purus non sollicitudin. Praesent ac laoreet orci, nec euismod risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu fermentum justo. Mauris et diam vestibulum, lacinia velit vitae, egestas justo. Maecenas vel mauris scelerisque urna dignissim pellentesque. Morbi egestas, est non tincidunt varius, urna turpis eleifend nibh, sed mollis tellus dui sed metus. In turpis sapien, aliquam nec suscipit nec, sagittis vel dui. Sed a mi eu enim consequat congue aliquam id nibh.\r\n\r\nIn hac habitasse platea dictumst. Pellentesque volutpat lacinia dolor, at fringilla mi fermentum lobortis. Fusce condimentum posuere felis ac imperdiet. Vestibulum pellentesque, lectus eget bibendum interdum, sem urna pellentesque dolor, tristique efficitur metus neque sit amet tellus. Pellentesque a ligula ex. Mauris ultrices leo neque, eu mattis ligula cursus non. Proin a dictum mauris. Proin commodo accumsan vestibulum. Nulla in nisl sed mauris bibendum vestibulum ut id erat. Donec a ante vestibulum, interdum elit at, volutpat purus. Nulla dignissim mi nisi, ut egestas mauris vestibulum at. Nulla facilisi. Integer luctus congue mattis.\r\n\r\nCras auctor tempus malesuada. Pellentesque malesuada efficitur quam vitae dignissim. Suspendisse feugiat enim venenatis eleifend interdum. Cras mollis elementum ultrices. Phasellus tempus, augue et ultricies posuere, metus mi rhoncus ipsum, non venenatis magna leo quis elit. Vestibulum a vehicula purus. Aenean malesuada nisi arcu. Morbi sed felis mollis, cursus libero eu, consequat lacus. Donec fermentum ut felis vel ultricies. Curabitur molestie felis non diam scelerisque posuere. Vivamus eu leo eget nunc luctus ullamcorper. Vivamus blandit aliquet lorem sed sollicitudin. Duis non vestibulum tortor, id tempor turpis. Sed eleifend risus at ornare convallis. Mauris lobortis justo quis dui molestie aliquet.', 56, 3, '2021-07-15 13:51:28', '2021-07-17 15:39:42'),
(7, 'Economy Development', 'images/ArticleImages/oCvvL2_1626543748_Economic Concepts.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit consectetur purus non sollicitudin. Praesent ac laoreet orci, nec euismod risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu fermentum justo. Mauris et diam vestibulum, lacinia velit vitae, egestas justo. Maecenas vel mauris scelerisque urna dignissim pellentesque. Morbi egestas, est non tincidunt varius, urna turpis eleifend nibh, sed mollis tellus dui sed metus. In turpis sapien, aliquam nec suscipit nec, sagittis vel dui. Sed a mi eu enim consequat congue aliquam id nibh.\r\n\r\nIn hac habitasse platea dictumst. Pellentesque volutpat lacinia dolor, at fringilla mi fermentum lobortis. Fusce condimentum posuere felis ac imperdiet. Vestibulum pellentesque, lectus eget bibendum interdum, sem urna pellentesque dolor, tristique efficitur metus neque sit amet tellus. Pellentesque a ligula ex. Mauris ultrices leo neque, eu mattis ligula cursus non. Proin a dictum mauris. Proin commodo accumsan vestibulum. Nulla in nisl sed mauris bibendum vestibulum ut id erat. Donec a ante vestibulum, interdum elit at, volutpat purus. Nulla dignissim mi nisi, ut egestas mauris vestibulum at. Nulla facilisi. Integer luctus congue mattis.\r\n\r\nCras auctor tempus malesuada. Pellentesque malesuada efficitur quam vitae dignissim. Suspendisse feugiat enim venenatis eleifend interdum. Cras mollis elementum ultrices. Phasellus tempus, augue et ultricies posuere, metus mi rhoncus ipsum, non venenatis magna leo quis elit. Vestibulum a vehicula purus. Aenean malesuada nisi arcu. Morbi sed felis mollis, cursus libero eu, consequat lacus. Donec fermentum ut felis vel ultricies. Curabitur molestie felis non diam scelerisque posuere. Vivamus eu leo eget nunc luctus ullamcorper. Vivamus blandit aliquet lorem sed sollicitudin. Duis non vestibulum tortor, id tempor turpis. Sed eleifend risus at ornare convallis. Mauris lobortis justo quis dui molestie aliquet.', 57, 3, '2021-07-15 13:52:30', '2021-07-17 15:42:59'),
(10, 'Data Science', 'images/ArticleImages/vduyMH_1626543982_Information Technology_PAAS.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit consectetur purus non sollicitudin. Praesent ac laoreet orci, nec euismod risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu fermentum justo. Mauris et diam vestibulum, lacinia velit vitae, egestas justo. Maecenas vel mauris scelerisque urna dignissim pellentesque. Morbi egestas, est non tincidunt varius, urna turpis eleifend nibh, sed mollis tellus dui sed metus. In turpis sapien, aliquam nec suscipit nec, sagittis vel dui. Sed a mi eu enim consequat congue aliquam id nibh.\r\n\r\nIn hac habitasse platea dictumst. Pellentesque volutpat lacinia dolor, at fringilla mi fermentum lobortis. Fusce condimentum posuere felis ac imperdiet. Vestibulum pellentesque, lectus eget bibendum interdum, sem urna pellentesque dolor, tristique efficitur metus neque sit amet tellus. Pellentesque a ligula ex. Mauris ultrices leo neque, eu mattis ligula cursus non. Proin a dictum mauris. Proin commodo accumsan vestibulum. Nulla in nisl sed mauris bibendum vestibulum ut id erat. Donec a ante vestibulum, interdum elit at, volutpat purus. Nulla dignissim mi nisi, ut egestas mauris vestibulum at. Nulla facilisi. Integer luctus congue mattis.\r\n\r\nCras auctor tempus malesuada. Pellentesque malesuada efficitur quam vitae dignissim. Suspendisse feugiat enim venenatis eleifend interdum. Cras mollis elementum ultrices. Phasellus tempus, augue et ultricies posuere, metus mi rhoncus ipsum, non venenatis magna leo quis elit. Vestibulum a vehicula purus. Aenean malesuada nisi arcu. Morbi sed felis mollis, cursus libero eu, consequat lacus. Donec fermentum ut felis vel ultricies. Curabitur molestie felis non diam scelerisque posuere. Vivamus eu leo eget nunc luctus ullamcorper. Vivamus blandit aliquet lorem sed sollicitudin. Duis non vestibulum tortor, id tempor turpis. Sed eleifend risus at ornare convallis. Mauris lobortis justo quis dui molestie aliquet.', 58, 3, '2021-07-15 13:55:17', '2021-07-17 15:46:22'),
(11, 'Computer Science', 'images/ArticleImages/a4QNeB_1626544029_unnamed.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit consectetur purus non sollicitudin. Praesent ac laoreet orci, nec euismod risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu fermentum justo. Mauris et diam vestibulum, lacinia velit vitae, egestas justo. Maecenas vel mauris scelerisque urna dignissim pellentesque. Morbi egestas, est non tincidunt varius, urna turpis eleifend nibh, sed mollis tellus dui sed metus. In turpis sapien, aliquam nec suscipit nec, sagittis vel dui. Sed a mi eu enim consequat congue aliquam id nibh.\r\n\r\nIn hac habitasse platea dictumst. Pellentesque volutpat lacinia dolor, at fringilla mi fermentum lobortis. Fusce condimentum posuere felis ac imperdiet. Vestibulum pellentesque, lectus eget bibendum interdum, sem urna pellentesque dolor, tristique efficitur metus neque sit amet tellus. Pellentesque a ligula ex. Mauris ultrices leo neque, eu mattis ligula cursus non. Proin a dictum mauris. Proin commodo accumsan vestibulum. Nulla in nisl sed mauris bibendum vestibulum ut id erat. Donec a ante vestibulum, interdum elit at, volutpat purus. Nulla dignissim mi nisi, ut egestas mauris vestibulum at. Nulla facilisi. Integer luctus congue mattis.\r\n\r\nCras auctor tempus malesuada. Pellentesque malesuada efficitur quam vitae dignissim. Suspendisse feugiat enim venenatis eleifend interdum. Cras mollis elementum ultrices. Phasellus tempus, augue et ultricies posuere, metus mi rhoncus ipsum, non venenatis magna leo quis elit. Vestibulum a vehicula purus. Aenean malesuada nisi arcu. Morbi sed felis mollis, cursus libero eu, consequat lacus. Donec fermentum ut felis vel ultricies. Curabitur molestie felis non diam scelerisque posuere. Vivamus eu leo eget nunc luctus ullamcorper. Vivamus blandit aliquet lorem sed sollicitudin. Duis non vestibulum tortor, id tempor turpis. Sed eleifend risus at ornare convallis. Mauris lobortis justo quis dui molestie aliquet.', 58, 3, '2021-07-15 13:55:46', '2021-07-17 15:47:09');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(34, 'Sports', '2021-07-14 23:43:38', '2021-07-17 15:04:21'),
(56, 'Science', '2021-07-15 13:39:11', '2021-07-17 15:11:06'),
(57, 'Economic', '2021-07-15 13:39:17', '2021-07-17 15:05:44'),
(58, 'Information Technology', '2021-07-15 13:39:23', '2021-07-17 15:12:03'),
(59, 'category 5', '2021-07-15 13:39:29', '2021-07-15 13:39:29');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `article_id` bigint(20) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `article_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 3, 5, 'aaaaa', '2021-07-15 16:53:58', '2021-07-15 16:53:58'),
(2, 3, 5, 'flkadjfklajdfklajldfadfadfad', '2021-07-15 16:54:08', '2021-07-15 16:54:08'),
(3, 1, 5, 'dffadfdfadfadfadfa', '2021-07-15 17:08:19', '2021-07-15 17:08:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` enum('Admin','Visitor') NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ahmed', 'ahmed@aaa.com', '$2y$10$q.0CNze82PrsgCtywiFX4uOmELYiXotfwovOftEuCFeu702W0eJLm', 'Visitor', NULL, '2021-07-14 16:00:04', '2021-07-14 16:00:04'),
(2, 'a', 'ahmed1@aaa.com', '$2y$10$pT2wTuJNVQHuvRWI9j5CJuCz9nRomz10tRexJjcfK/LF38PRiFXJS', 'Visitor', NULL, '2021-07-14 16:13:34', '2021-07-14 16:13:34'),
(3, 'admin', 'admin@admin.com', '$2y$10$qZ2RZ7qKui2eljWqls9sM.w06RGF1S7Gsmr.BhvJ18evzBFbhdUIm', 'Admin', NULL, '2021-07-14 18:19:48', '2021-07-14 18:19:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_ibfk_1` (`admin_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_id` (`article_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `articles_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
