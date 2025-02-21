-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2025 at 10:12 AM
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
-- Database: `institution`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_advisors`
--

CREATE TABLE `academic_advisors` (
  `academicAdvisorID` bigint(20) UNSIGNED NOT NULL,
  `advisorName` varchar(255) NOT NULL,
  `serviceID` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `advisorMajor` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `academic_advisors`
--

INSERT INTO `academic_advisors` (`academicAdvisorID`, `advisorName`, `serviceID`, `created_at`, `updated_at`, `advisorMajor`) VALUES
(1, 'Dr. John Smith', 1, '2025-01-13 15:02:14', '2025-01-13 15:02:14', 'Specializes in AI and Data Science'),
(2, 'Dr. Emily Johnson', 1, '2025-01-13 15:02:14', '2025-01-13 15:02:14', 'Expert in Educational Technology and Curriculum Development'),
(3, 'Prof. Michael Lee', 1, '2025-01-13 15:02:14', '2025-01-13 15:02:14', 'Focuses on Engineering and Applied Sciences');

-- --------------------------------------------------------

--
-- Table structure for table `advising_requests`
--

CREATE TABLE `advising_requests` (
  `advisingRequestID` bigint(20) UNSIGNED NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `advisor` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blogID` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `publishedDate` date NOT NULL,
  `details` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blogID`, `title`, `publishedDate`, `details`, `created_at`, `updated_at`) VALUES
(1, 'success story', '2025-03-19', 'hello i am reaching out to tell u my story', '2025-01-24 18:04:13', '2025-01-26 15:01:36');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `career_requests`
--

CREATE TABLE `career_requests` (
  `careerRequestID` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career_requests`
--

INSERT INTO `career_requests` (`careerRequestID`, `name`, `email`, `service`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Mohammad Al Haj', 'mohammedalhaj1444@gmail.com', 'resume_review', 'please review  my resume', '2025-01-25 18:02:41', '2025-01-25 18:02:41');

-- --------------------------------------------------------

--
-- Table structure for table `career_services`
--

CREATE TABLE `career_services` (
  `careerServiceID` bigint(20) UNSIGNED NOT NULL,
  `careerServiceName` varchar(255) NOT NULL,
  `serviceID` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career_services`
--

INSERT INTO `career_services` (`careerServiceID`, `careerServiceName`, `serviceID`, `created_at`, `updated_at`) VALUES
(1, 'Career Consulting', 3, '2025-01-13 15:17:43', '2025-01-13 15:17:43'),
(2, 'Resume Review', 3, '2025-01-13 15:17:43', '2025-01-13 15:17:43'),
(3, 'Interview Preparation', 3, '2025-01-13 15:17:43', '2025-01-13 15:17:43'),
(4, 'Job Search Strategies', 3, '2025-01-13 15:17:43', '2025-01-13 15:17:43');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `genderID` bigint(20) UNSIGNED NOT NULL,
  `genderName` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`genderID`, `genderName`, `created_at`, `updated_at`) VALUES
(1, 'Male', '2025-01-13 14:42:10', '2025-01-13 14:42:10'),
(2, 'Female', '2025-01-13 14:42:10', '2025-01-13 14:42:10');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `messageID` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(41, '0001_01_01_000000_create_users_table', 1),
(42, '0001_01_01_000001_create_cache_table', 1),
(43, '0001_01_01_000002_create_jobs_table', 1),
(44, '2025_01_11_182025_create_genders_table', 1),
(45, '2025_01_11_182128_create_nationalities_table', 1),
(46, '2025_01_11_183608_create_services_table', 1),
(47, '2025_01_12_194759_create_academic_advisors_table', 1),
(48, '2025_01_12_195903_create_tutoring_services_table', 1),
(49, '2025_01_12_200318_create_career_services_table', 1),
(50, '2025_01_13_153246_add_column_in_users_table', 1),
(51, '2025_01_13_155750_add_column_in_academic_advisors_table', 1),
(52, '2025_01_13_211959_create_user_services_table', 2),
(54, '2025_01_14_100820_add_phone_column_in_users_table', 3),
(55, '2025_01_14_160033_create_sessions_table', 4),
(56, '2025_01_22_133646_add_columns_in_user_services_table', 5),
(57, '2025_01_22_184213_create_messages_table', 6),
(58, '2025_01_24_174026_create_blogs_table', 7),
(59, '2025_01_25_140434_create_advising_requests_table', 8),
(61, '2025_01_25_162026_delete_column_in_advising_requests_table', 9),
(62, '2025_01_25_185659_create_tutoring_requests_table', 10),
(63, '2025_01_25_194140_create_career_requests_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `serviceID` bigint(20) UNSIGNED NOT NULL,
  `ServiceName` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serviceID`, `ServiceName`, `created_at`, `updated_at`) VALUES
(1, 'Academic Advising', '2025-01-13 14:49:20', '2025-01-13 14:49:20'),
(2, 'Tutoring Services', '2025-01-13 14:49:20', '2025-01-13 14:49:20'),
(3, 'Career Services', '2025-01-13 14:49:20', '2025-01-13 14:49:20');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('JlWrq6POCosmcVWcWPWcyRSDBu7XOFuU92yaQ6oA', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoid3RjTEh5MFNUUGdVTkNBMnkyOUNuWDFFMXBSZ1hhcXNsMnVJeUlGViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mzt9', 1737977515);

-- --------------------------------------------------------

--
-- Table structure for table `tutoring_requests`
--

CREATE TABLE `tutoring_requests` (
  `tutoringRequestID` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tutoring_requests`
--

INSERT INTO `tutoring_requests` (`tutoringRequestID`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'kklmojn ubuhhhhiu', 'hand.lyla@example.net', 'math', 'jjbuhfvyhviuyvfyofoyugl', '2025-01-25 17:20:28', '2025-01-25 17:20:28');

-- --------------------------------------------------------

--
-- Table structure for table `tutoring_services`
--

CREATE TABLE `tutoring_services` (
  `tutoringServiceID` bigint(20) UNSIGNED NOT NULL,
  `tutoringServiceName` varchar(255) NOT NULL,
  `serviceID` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tutoring_services`
--

INSERT INTO `tutoring_services` (`tutoringServiceID`, `tutoringServiceName`, `serviceID`, `created_at`, `updated_at`) VALUES
(1, 'Math', 2, '2025-01-13 15:07:08', '2025-01-13 15:07:08'),
(2, 'Science', 2, '2025-01-13 15:07:08', '2025-01-13 15:07:08'),
(3, 'English', 2, '2025-01-13 15:07:08', '2025-01-13 15:07:08'),
(4, 'History', 2, '2025-01-13 15:07:08', '2025-01-13 15:07:08'),
(5, 'Other', 2, '2025-01-13 15:07:08', '2025-01-13 15:07:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` bigint(20) UNSIGNED NOT NULL,
  `fName` varchar(15) NOT NULL,
  `lName` varchar(15) NOT NULL,
  `phone` varchar(8) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'student',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `genderID` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `fName`, `lName`, `phone`, `email`, `email_verified_at`, `username`, `password`, `role`, `remember_token`, `created_at`, `updated_at`, `genderID`) VALUES
(2, 'Karlie', 'Rempel', '85487770', 'elisabeth.boehm@example.org', NULL, 'wintheiser.kameron', '$2y$12$Qpb/JDDGliYBGQ2biA7H5u6cd9zQF8U4a7wDuN9cQWrFWlVpdSWLu', 'student', 'wVkXvvneZC', '2025-01-21 09:17:43', '2025-01-21 09:17:43', 2),
(3, 'mohammad', 'haj', '76724176', 'mohammedalhaj14@gmail.com', NULL, 'mohammadhaj14', '$2y$12$BhtRpYEEn7CgO5TObPfgbOXynI7k0aN77aMP2znZga5GzXhjBvFTC', 'student', NULL, '2025-01-21 14:30:36', '2025-01-21 14:30:36', 1),
(4, 'mohammad', 'Al Haj', '03777777', 'mohdalhaj2000@gmail.com', NULL, 'mido.haj', '$2y$12$BXQgy56tOnVGuaLXeunzieTVLDjbfRXSXaX8Zw8AO.JeICld/xXMC', 'admin', NULL, '2025-01-22 08:30:58', '2025-01-22 08:30:58', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_advisors`
--
ALTER TABLE `academic_advisors`
  ADD PRIMARY KEY (`academicAdvisorID`),
  ADD KEY `academic_advisors_serviceid_foreign` (`serviceID`);

--
-- Indexes for table `advising_requests`
--
ALTER TABLE `advising_requests`
  ADD PRIMARY KEY (`advisingRequestID`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blogID`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `career_requests`
--
ALTER TABLE `career_requests`
  ADD PRIMARY KEY (`careerRequestID`);

--
-- Indexes for table `career_services`
--
ALTER TABLE `career_services`
  ADD PRIMARY KEY (`careerServiceID`),
  ADD KEY `career_services_serviceid_foreign` (`serviceID`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`genderID`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messageID`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`serviceID`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tutoring_requests`
--
ALTER TABLE `tutoring_requests`
  ADD PRIMARY KEY (`tutoringRequestID`);

--
-- Indexes for table `tutoring_services`
--
ALTER TABLE `tutoring_services`
  ADD PRIMARY KEY (`tutoringServiceID`),
  ADD KEY `tutoring_services_serviceid_foreign` (`serviceID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD KEY `users_genderid_foreign` (`genderID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_advisors`
--
ALTER TABLE `academic_advisors`
  MODIFY `academicAdvisorID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `advising_requests`
--
ALTER TABLE `advising_requests`
  MODIFY `advisingRequestID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blogID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `career_requests`
--
ALTER TABLE `career_requests`
  MODIFY `careerRequestID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `career_services`
--
ALTER TABLE `career_services`
  MODIFY `careerServiceID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `genderID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messageID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `serviceID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tutoring_requests`
--
ALTER TABLE `tutoring_requests`
  MODIFY `tutoringRequestID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tutoring_services`
--
ALTER TABLE `tutoring_services`
  MODIFY `tutoringServiceID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `academic_advisors`
--
ALTER TABLE `academic_advisors`
  ADD CONSTRAINT `academic_advisors_serviceid_foreign` FOREIGN KEY (`serviceID`) REFERENCES `services` (`serviceID`) ON DELETE CASCADE;

--
-- Constraints for table `career_services`
--
ALTER TABLE `career_services`
  ADD CONSTRAINT `career_services_serviceid_foreign` FOREIGN KEY (`serviceID`) REFERENCES `services` (`serviceID`) ON DELETE CASCADE;

--
-- Constraints for table `tutoring_services`
--
ALTER TABLE `tutoring_services`
  ADD CONSTRAINT `tutoring_services_serviceid_foreign` FOREIGN KEY (`serviceID`) REFERENCES `services` (`serviceID`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_genderid_foreign` FOREIGN KEY (`genderID`) REFERENCES `genders` (`genderID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
