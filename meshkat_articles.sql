-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2021 at 08:48 PM
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `image`, `content`, `category_id`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, 'Sports is good for health', 'images/ArticleImages/EsyRXZ_1627151852_different_sports.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit consectetur purus non sollicitudin. Praesent ac laoreet orci, nec euismod risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu fermentum justo. Mauris et diam vestibulum, lacinia velit vitae, egestas justo. Maecenas vel mauris scelerisque urna dignissim pellentesque. Morbi egestas, est non tincidunt varius, urna turpis eleifend nibh, sed mollis tellus dui sed metus. In turpis sapien, aliquam nec suscipit nec, sagittis vel dui. Sed a mi eu enim consequat congue aliquam id nibh.\\r\\n\\r\\nIn hac habitasse platea dictumst. Pellentesque volutpat lacinia dolor, at fringilla mi fermentum lobortis. Fusce condimentum posuere felis ac imperdiet. Vestibulum pellentesque, lectus eget bibendum interdum, sem urna pellentesque dolor, tristique efficitur metus neque sit amet tellus. Pellentesque a ligula ex. Mauris ultrices leo neque, eu mattis ligula cursus non. Proin a dictum mauris. Proin commodo accumsan vestibulum. Nulla in nisl sed mauris bibendum vestibulum ut id erat. Donec a ante vestibulum, interdum elit at, volutpat purus. Nulla dignissim mi nisi, ut egestas mauris vestibulum at. Nulla facilisi. Integer luctus congue mattis.\\r\\n\\r\\nCras auctor tempus malesuada. Pellentesque malesuada efficitur quam vitae dignissim. Suspendisse feugiat enim venenatis eleifend interdum. Cras mollis elementum ultrices. Phasellus tempus, augue et ultricies posuere, metus mi rhoncus ipsum, non venenatis magna leo quis elit. Vestibulum a vehicula purus. Aenean malesuada nisi arcu. Morbi sed felis mollis, cursus libero eu, consequat lacus. Donec fermentum ut felis vel ultricies. Curabitur molestie felis non diam scelerisque posuere. Vivamus eu leo eget nunc luctus ullamcorper. Vivamus blandit aliquet lorem sed sollicitudin. Duis non vestibulum tortor, id tempor turpis. Sed eleifend risus at ornare convallis. Mauris lobortis justo quis dui molestie aliquet.\\r\\n\\r\\nNam vitae lectus sapien. Sed fringilla orci ipsum, eu sodales justo condimentum a. Pellentesque vel massa semper, mattis ex ut, sollicitudin felis. Duis commodo nisi velit, pellentesque finibus ipsum dictum iaculis. Nulla at sodales ante, non gravida justo. Donec vitae felis dignissim, malesuada nisi at, pellentesque libero. Nulla facilisi. Vivamus pharetra gravida laoreet. Etiam auctor dui quis nunc luctus scelerisque. Nunc tempus massa auctor felis luctus scelerisque. Fusce sit amet enim vel neque tincidunt sollicitudin et consectetur metus. Morbi sed feugiat massa, quis lobortis odio.\\r\\n\\r\\nPraesent ac ante sit amet purus eleifend accumsan id vitae mauris. Cras odio tellus, lacinia eget posuere ut, faucibus vitae tellus. Etiam lacinia consequat nisl scelerisque blandit. Nulla dapibus dapibus facilisis. Praesent eu arcu enim. Nunc finibus, tellus eget vulputate semper, ipsum arcu vulputate dui, a aliquet dolor nibh nec arcu. Fusce tempor massa sit amet augue cursus, in hendrerit turpis accumsan. Sed molestie, est vitae euismod convallis, eros massa mattis lorem, et volutpat turpis ligula vitae diam. Donec fermentum sem id metus faucibus cursus. Vestibulum at turpis at libero interdum faucibus. Nunc dictum at lacus quis interdum.', 1, 1, '2021-07-24 16:37:32', '2021-07-24 16:37:32'),
(2, 'Different Science', 'images/ArticleImages/StlAgM_1627151899_Science-resized-750x325.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit consectetur purus non sollicitudin. Praesent ac laoreet orci, nec euismod risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu fermentum justo. Mauris et diam vestibulum, lacinia velit vitae, egestas justo. Maecenas vel mauris scelerisque urna dignissim pellentesque. Morbi egestas, est non tincidunt varius, urna turpis eleifend nibh, sed mollis tellus dui sed metus. In turpis sapien, aliquam nec suscipit nec, sagittis vel dui. Sed a mi eu enim consequat congue aliquam id nibh.\\r\\n\\r\\nIn hac habitasse platea dictumst. Pellentesque volutpat lacinia dolor, at fringilla mi fermentum lobortis. Fusce condimentum posuere felis ac imperdiet. Vestibulum pellentesque, lectus eget bibendum interdum, sem urna pellentesque dolor, tristique efficitur metus neque sit amet tellus. Pellentesque a ligula ex. Mauris ultrices leo neque, eu mattis ligula cursus non. Proin a dictum mauris. Proin commodo accumsan vestibulum. Nulla in nisl sed mauris bibendum vestibulum ut id erat. Donec a ante vestibulum, interdum elit at, volutpat purus. Nulla dignissim mi nisi, ut egestas mauris vestibulum at. Nulla facilisi. Integer luctus congue mattis.\\r\\n\\r\\nCras auctor tempus malesuada. Pellentesque malesuada efficitur quam vitae dignissim. Suspendisse feugiat enim venenatis eleifend interdum. Cras mollis elementum ultrices. Phasellus tempus, augue et ultricies posuere, metus mi rhoncus ipsum, non venenatis magna leo quis elit. Vestibulum a vehicula purus. Aenean malesuada nisi arcu. Morbi sed felis mollis, cursus libero eu, consequat lacus. Donec fermentum ut felis vel ultricies. Curabitur molestie felis non diam scelerisque posuere. Vivamus eu leo eget nunc luctus ullamcorper. Vivamus blandit aliquet lorem sed sollicitudin. Duis non vestibulum tortor, id tempor turpis. Sed eleifend risus at ornare convallis. Mauris lobortis justo quis dui molestie aliquet.', 2, 1, '2021-07-24 16:38:19', '2021-07-24 16:38:19'),
(3, 'Economy Development', 'images/ArticleImages/aidfkR_1627151938_Economic Concepts.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit consectetur purus non sollicitudin. Praesent ac laoreet orci, nec euismod risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu fermentum justo. Mauris et diam vestibulum, lacinia velit vitae, egestas justo. Maecenas vel mauris scelerisque urna dignissim pellentesque. Morbi egestas, est non tincidunt varius, urna turpis eleifend nibh, sed mollis tellus dui sed metus. In turpis sapien, aliquam nec suscipit nec, sagittis vel dui. Sed a mi eu enim consequat congue aliquam id nibh.\\r\\n\\r\\nIn hac habitasse platea dictumst. Pellentesque volutpat lacinia dolor, at fringilla mi fermentum lobortis. Fusce condimentum posuere felis ac imperdiet. Vestibulum pellentesque, lectus eget bibendum interdum, sem urna pellentesque dolor, tristique efficitur metus neque sit amet tellus. Pellentesque a ligula ex. Mauris ultrices leo neque, eu mattis ligula cursus non. Proin a dictum mauris. Proin commodo accumsan vestibulum. Nulla in nisl sed mauris bibendum vestibulum ut id erat. Donec a ante vestibulum, interdum elit at, volutpat purus. Nulla dignissim mi nisi, ut egestas mauris vestibulum at. Nulla facilisi. Integer luctus congue mattis.\\r\\n\\r\\nCras auctor tempus malesuada. Pellentesque malesuada efficitur quam vitae dignissim. Suspendisse feugiat enim venenatis eleifend interdum. Cras mollis elementum ultrices. Phasellus tempus, augue et ultricies posuere, metus mi rhoncus ipsum, non venenatis magna leo quis elit. Vestibulum a vehicula purus. Aenean malesuada nisi arcu. Morbi sed felis mollis, cursus libero eu, consequat lacus. Donec fermentum ut felis vel ultricies. Curabitur molestie felis non diam scelerisque posuere. Vivamus eu leo eget nunc luctus ullamcorper. Vivamus blandit aliquet lorem sed sollicitudin. Duis non vestibulum tortor, id tempor turpis. Sed eleifend risus at ornare convallis. Mauris lobortis justo quis dui molestie aliquet.', 3, 1, '2021-07-24 16:38:58', '2021-07-24 16:38:58'),
(4, 'Data Science', 'images/ArticleImages/J9L5AQ_1627151977_Information Technology_PAAS.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit consectetur purus non sollicitudin. Praesent ac laoreet orci, nec euismod risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu fermentum justo. Mauris et diam vestibulum, lacinia velit vitae, egestas justo. Maecenas vel mauris scelerisque urna dignissim pellentesque. Morbi egestas, est non tincidunt varius, urna turpis eleifend nibh, sed mollis tellus dui sed metus. In turpis sapien, aliquam nec suscipit nec, sagittis vel dui. Sed a mi eu enim consequat congue aliquam id nibh.\\r\\n\\r\\nIn hac habitasse platea dictumst. Pellentesque volutpat lacinia dolor, at fringilla mi fermentum lobortis. Fusce condimentum posuere felis ac imperdiet. Vestibulum pellentesque, lectus eget bibendum interdum, sem urna pellentesque dolor, tristique efficitur metus neque sit amet tellus. Pellentesque a ligula ex. Mauris ultrices leo neque, eu mattis ligula cursus non. Proin a dictum mauris. Proin commodo accumsan vestibulum. Nulla in nisl sed mauris bibendum vestibulum ut id erat. Donec a ante vestibulum, interdum elit at, volutpat purus. Nulla dignissim mi nisi, ut egestas mauris vestibulum at. Nulla facilisi. Integer luctus congue mattis.\\r\\n\\r\\nCras auctor tempus malesuada. Pellentesque malesuada efficitur quam vitae dignissim. Suspendisse feugiat enim venenatis eleifend interdum. Cras mollis elementum ultrices. Phasellus tempus, augue et ultricies posuere, metus mi rhoncus ipsum, non venenatis magna leo quis elit. Vestibulum a vehicula purus. Aenean malesuada nisi arcu. Morbi sed felis mollis, cursus libero eu, consequat lacus. Donec fermentum ut felis vel ultricies. Curabitur molestie felis non diam scelerisque posuere. Vivamus eu leo eget nunc luctus ullamcorper. Vivamus blandit aliquet lorem sed sollicitudin. Duis non vestibulum tortor, id tempor turpis. Sed eleifend risus at ornare convallis. Mauris lobortis justo quis dui molestie aliquet.', 4, 1, '2021-07-24 16:39:37', '2021-07-24 16:39:37'),
(5, 'Computer Science', 'images/ArticleImages/wR2MPe_1627152008_unnamed.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit consectetur purus non sollicitudin. Praesent ac laoreet orci, nec euismod risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu fermentum justo. Mauris et diam vestibulum, lacinia velit vitae, egestas justo. Maecenas vel mauris scelerisque urna dignissim pellentesque. Morbi egestas, est non tincidunt varius, urna turpis eleifend nibh, sed mollis tellus dui sed metus. In turpis sapien, aliquam nec suscipit nec, sagittis vel dui. Sed a mi eu enim consequat congue aliquam id nibh.\\r\\n\\r\\nIn hac habitasse platea dictumst. Pellentesque volutpat lacinia dolor, at fringilla mi fermentum lobortis. Fusce condimentum posuere felis ac imperdiet. Vestibulum pellentesque, lectus eget bibendum interdum, sem urna pellentesque dolor, tristique efficitur metus neque sit amet tellus. Pellentesque a ligula ex. Mauris ultrices leo neque, eu mattis ligula cursus non. Proin a dictum mauris. Proin commodo accumsan vestibulum. Nulla in nisl sed mauris bibendum vestibulum ut id erat. Donec a ante vestibulum, interdum elit at, volutpat purus. Nulla dignissim mi nisi, ut egestas mauris vestibulum at. Nulla facilisi. Integer luctus congue mattis.\\r\\n\\r\\nCras auctor tempus malesuada. Pellentesque malesuada efficitur quam vitae dignissim. Suspendisse feugiat enim venenatis eleifend interdum. Cras mollis elementum ultrices. Phasellus tempus, augue et ultricies posuere, metus mi rhoncus ipsum, non venenatis magna leo quis elit. Vestibulum a vehicula purus. Aenean malesuada nisi arcu. Morbi sed felis mollis, cursus libero eu, consequat lacus. Donec fermentum ut felis vel ultricies. Curabitur molestie felis non diam scelerisque posuere. Vivamus eu leo eget nunc luctus ullamcorper. Vivamus blandit aliquet lorem sed sollicitudin. Duis non vestibulum tortor, id tempor turpis. Sed eleifend risus at ornare convallis. Mauris lobortis justo quis dui molestie aliquet.', 4, 1, '2021-07-24 16:40:08', '2021-07-24 16:40:08');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Sports', '2021-07-24 16:34:44', '2021-07-24 16:34:44'),
(2, 'Science', '2021-07-24 16:34:54', '2021-07-24 16:34:54'),
(3, 'Economic', '2021-07-24 16:35:02', '2021-07-24 16:35:02'),
(4, 'Information Technology', '2021-07-24 16:35:16', '2021-07-24 16:35:16'),
(5, 'Category 5', '2021-07-24 16:35:29', '2021-07-24 16:35:29');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `user_id`, `article_id`, `created_at`, `updated_at`) VALUES
(1, 'very good', 1, 1, '2021-07-24 16:42:27', '2021-07-24 16:42:27'),
(2, 'Excellent', 2, 1, '2021-07-24 16:43:08', '2021-07-24 16:43:08'),
(3, 'Excellent', 2, 2, '2021-07-24 16:43:24', '2021-07-24 16:43:24');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_24_182108_create_categories_table', 1),
(5, '2021_07_24_182125_create_articles_table', 1),
(6, '2021_07_24_182137_create_comments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('Admin','Visitor') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$KwkDxWNKKLh4ReN7rX0PZeNNpQx0uRBt4ki1FgBiESQ.uBdDiYR7q', 'Admin', NULL, '2021-07-24 16:33:34', '2021-07-24 16:33:34'),
(2, 'ahmed', 'ahmed@aaa.com', NULL, '$2y$10$glvoBBE3gJKmf9oMpPFzouKKGBz4VQK9w3vWfYJd/kGwlPj1cvyp6', 'Visitor', NULL, '2021-07-24 16:42:47', '2021-07-24 16:42:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_category_id_foreign` (`category_id`),
  ADD KEY `articles_admin_id_foreign` (`admin_id`);

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
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_article_id_foreign` (`article_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
