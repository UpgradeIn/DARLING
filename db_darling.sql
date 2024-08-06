-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2024 at 06:51 AM
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
-- Database: `db_darling`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2024-06-05-083910', 'App\\Database\\Migrations\\CreateRolesTable', 'default', 'App', 1718354529, 1),
(2, '2024-06-05-095519', 'App\\Database\\Migrations\\CreateUsersTable', 'default', 'App', 1718354529, 1),
(3, '2024-06-05-103311', 'App\\Database\\Migrations\\CreateCoursesTable', 'default', 'App', 1718354530, 1),
(4, '2024-06-05-104807', 'App\\Database\\Migrations\\CreateLearningPathTable', 'default', 'App', 1718354530, 1),
(5, '2024-06-05-110003', 'App\\Database\\Migrations\\CreateLearningPathCoursesTable', 'default', 'App', 1718354530, 1),
(6, '2024-06-05-110729', 'App\\Database\\Migrations\\CreateSubCoursesTable', 'default', 'App', 1718354530, 1),
(7, '2024-06-05-111701', 'App\\Database\\Migrations\\WrittenMaterialsTable', 'default', 'App', 1718354530, 1),
(8, '2024-06-05-111952', 'App\\Database\\Migrations\\VideoMaterialsTable', 'default', 'App', 1718354530, 1),
(9, '2024-06-05-112044', 'App\\Database\\Migrations\\TestMaterialsTable', 'default', 'App', 1718354530, 1),
(10, '2024-06-05-114104', 'App\\Database\\Migrations\\CreateOptionTestTable', 'default', 'App', 1718354530, 1),
(11, '2024-06-05-114254', 'App\\Database\\Migrations\\CreateUserCoursesTable', 'default', 'App', 1718354530, 1),
(12, '2024-06-05-120250', 'App\\Database\\Migrations\\CreateUserLearningPathsTable', 'default', 'App', 1718354530, 1),
(13, '2024-06-05-121001', 'App\\Database\\Migrations\\CreateUserSubcoursesTable', 'default', 'App', 1718354530, 1),
(14, '2024-06-05-121428', 'App\\Database\\Migrations\\CreateUserAnswersTable', 'default', 'App', 1718354530, 1),
(15, '2024-06-05-121729', 'App\\Database\\Migrations\\CreateAssignLearningPathTable', 'default', 'App', 1718354530, 1),
(16, '2024-06-05-121949', 'App\\Database\\Migrations\\CreateRequestLearningPathsTable', 'default', 'App', 1718354530, 1),
(17, '2024-06-05-122403', 'App\\Database\\Migrations\\CreateCategoriesTable', 'default', 'App', 1718354530, 1),
(18, '2024-06-05-132145', 'App\\Database\\Migrations\\CreateNewsTable', 'default', 'App', 1718354530, 1),
(19, '2024-06-11-003427', 'App\\Database\\Migrations\\UpdateAndAddfieldToAssignmentLearningPathsTable', 'default', 'App', 1718354530, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_assign_learning_paths`
--

CREATE TABLE `tb_assign_learning_paths` (
  `id` int(5) UNSIGNED NOT NULL,
  `user_id` int(5) UNSIGNED NOT NULL,
  `learning_path_id` int(5) UNSIGNED NOT NULL,
  `admin_id` int(5) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `message_assignment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_assign_learning_paths`
--

INSERT INTO `tb_assign_learning_paths` (`id`, `user_id`, `learning_path_id`, `admin_id`, `created_at`, `updated_at`, `message_assignment`) VALUES
(2, 3, 1, 2, '2024-06-14 10:11:38', '2024-06-14 10:11:38', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `tb_categories`
--

CREATE TABLE `tb_categories` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_categories`
--

INSERT INTO `tb_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Berita', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(2, 'Pengumuman', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(3, 'Agenda', '2024-06-14 08:42:43', '2024-06-14 08:42:43');

-- --------------------------------------------------------

--
-- Table structure for table `tb_courses`
--

CREATE TABLE `tb_courses` (
  `id` int(5) UNSIGNED NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `module` varchar(255) NOT NULL,
  `status` enum('publish','draft') DEFAULT NULL,
  `skill_type` enum('soft-skill','hard-skill') DEFAULT NULL,
  `course_type` enum('mandatory','optional') DEFAULT NULL,
  `published_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_courses`
--

INSERT INTO `tb_courses` (`id`, `thumbnail`, `name`, `slug`, `description`, `module`, `status`, `skill_type`, `course_type`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'base_thumbnail.jpg', 'CodeIgniter 4', 'codeigniter-4', 'Belajar CodeIgniter 4', 'base_module.pdf', 'publish', 'soft-skill', 'mandatory', '2024-06-14 08:42:43', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(2, 'base_thumbnail.jpg', 'Laravel 8', 'laravel-8', 'Belajar Laravel 8', 'base_module.pdf', 'publish', 'hard-skill', 'mandatory', '2024-06-14 08:42:43', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(3, 'base_thumbnail.jpg', 'PHP 8', 'php-8', 'Belajar PHP 8', 'base_module.pdf', 'publish', 'soft-skill', 'optional', '2024-06-14 08:42:43', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(4, 'base_thumbnail.jpg', 'Public Speaking', 'public-speaking', 'Belajar Public Speaking', 'base_module.pdf', 'publish', 'soft-skill', 'optional', '2024-06-14 08:42:43', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(5, 'base_thumbnail.jpg', 'Kepemimpinan', 'kepemimpinan', 'Belajar Kepemimpinan', 'base_module.pdf', 'publish', 'soft-skill', 'optional', '2024-06-14 08:42:43', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(6, 'base_thumbnail.jpg', 'Perawatan Armada', 'perawatan-armada', 'Belajar Perawatan Armada', 'base_module.pdf', 'publish', 'hard-skill', 'mandatory', '2024-06-14 08:42:43', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(7, 'base_thumbnail.jpg', 'Perawatan Server', 'perawatan-server', 'Belajar Perawatan Server', 'base_module.pdf', 'publish', 'soft-skill', 'mandatory', '2024-06-21 03:40:13', '2024-06-14 08:42:43', '2024-06-21 03:40:13'),
(8, '391819_2.jpg', 'Micorosoft Excel', 'micorosoft-excel', 'abc', '391819_3.jpg', 'draft', 'hard-skill', 'mandatory', NULL, '2024-06-20 09:12:46', '2024-06-20 09:12:46'),
(9, '391819_3.jpg', 'Micorosoft Word', 'micorosoft-word', 'abcd', 'Statistika NN056L– Soal AAS.pdf', 'draft', NULL, NULL, NULL, '2024-08-01 06:27:20', '2024-08-04 16:09:56'),
(10, '391819_4.jpg', 'Micorosoft Powerpoint', 'micorosoft-powerpoint', 'abc powerpoint', 'Statistika NN056L– Soal AAS_1.pdf', 'draft', 'hard-skill', 'mandatory', NULL, '2024-08-05 01:46:53', '2024-08-05 01:46:53');

-- --------------------------------------------------------

--
-- Table structure for table `tb_learning_paths`
--

CREATE TABLE `tb_learning_paths` (
  `id` int(5) UNSIGNED NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `period` int(3) NOT NULL,
  `status` enum('publish','draft') DEFAULT NULL,
  `published_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_learning_paths`
--

INSERT INTO `tb_learning_paths` (`id`, `thumbnail`, `name`, `slug`, `description`, `period`, `status`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'base_thumbnail.jpg', 'Operasional', 'it-fundamentals', 'Comprehensive bootcamp covering IT fundamentals.', 4, 'publish', '2024-08-05 09:57:41', '2024-06-14 08:42:43', '2024-08-05 09:57:41'),
(2, 'base_thumbnail.jpg', 'Keuangan', 'marketing', 'Comprehensive bootcamp covering marketing fundamentals.', 6, 'publish', '2024-08-05 10:00:43', '2024-06-14 08:42:43', '2024-08-05 10:00:43'),
(4, 'base_thumbnail.jpg', 'Sumber Daya Manusia', 'umum', 'Comprehensive bootcamp covering marketing fundamentals.', 50, 'draft', NULL, '2024-08-05 01:48:09', '2024-08-05 09:59:44');

-- --------------------------------------------------------

--
-- Table structure for table `tb_learning_path_courses`
--

CREATE TABLE `tb_learning_path_courses` (
  `id` int(5) UNSIGNED NOT NULL,
  `learning_path_id` int(5) UNSIGNED NOT NULL,
  `course_id` int(5) UNSIGNED NOT NULL,
  `sequence` int(2) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_learning_path_courses`
--

INSERT INTO `tb_learning_path_courses` (`id`, `learning_path_id`, `course_id`, `sequence`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(2, 1, 2, 2, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(3, 1, 3, 3, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(4, 1, 4, 4, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(5, 2, 5, 1, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(6, 2, 6, 2, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(7, 2, 7, 3, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(8, 2, 4, 4, '2024-06-14 08:42:43', '2024-06-14 08:42:43');

-- --------------------------------------------------------

--
-- Table structure for table `tb_news`
--

CREATE TABLE `tb_news` (
  `id` int(5) UNSIGNED NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `category_id` int(5) UNSIGNED NOT NULL,
  `admin_id` int(5) UNSIGNED NOT NULL,
  `status` enum('publish','draft') DEFAULT NULL,
  `published_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_news`
--

INSERT INTO `tb_news` (`id`, `thumbnail`, `title`, `slug`, `content`, `category_id`, `admin_id`, `status`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'base_thumbnail.jpg', 'Berita 1', 'berita-1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus nec nunc tincidunt ultricies. Nullam nec purus nec nunc tincidunt ultricies. Nullam nec purus nec nunc tincidunt ultricies.', 1, 2, 'publish', '2024-06-14 08:42:43', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(2, 'base_thumbnail.jpg', 'Berita 2', 'berita-2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus nec nunc tincidunt ultricies. Nullam nec purus nec nunc tincidunt ultricies. Nullam nec purus nec nunc tincidunt ultricies.', 1, 3, 'publish', '2024-06-14 08:42:43', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(3, 'base_thumbnail.jpg', 'Pengumuman 1', 'pengumuman-1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus nec nunc tincidunt ultricies. Nullam nec purus nec nunc tincidunt ultricies. Nullam nec purus nec nunc tincidunt ultricies.', 2, 3, 'publish', '2024-06-14 08:42:43', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(4, 'base_thumbnail.jpg', 'Pengumuman 2', 'pengumuman-2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus nec nunc tincidunt ultricies. Nullam nec purus nec nunc tincidunt ultricies. Nullam nec purus nec nunc tincidunt ultricies.', 2, 2, 'publish', '2024-06-14 08:42:43', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(5, 'base_thumbnail.jpg', 'Agenda 1', 'agenda-1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus nec nunc tincidunt ultricies. Nullam nec purus nec nunc tincidunt ultricies. Nullam nec purus nec nunc tincidunt ultricies.', 3, 2, 'publish', '2024-06-14 08:42:43', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(6, 'base_thumbnail.jpg', 'Agenda 2', 'agenda-2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus nec nunc tincidunt ultricies. Nullam nec purus nec nunc tincidunt ultricies. Nullam nec purus nec nunc tincidunt ultricies.', 3, 3, 'publish', '2024-06-14 08:42:43', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(7, '391819_1.jpg', 'Jadwal Course Microsoft Excel', 'jadwal-course-microsoft-excel', 'Diberitahukan kepada Para peserta bahwasanya  kegiatan courde microsoft excel dimulai malam ini', 3, 2, 'draft', NULL, '2024-06-20 06:38:31', '2024-06-20 06:38:31');

-- --------------------------------------------------------

--
-- Table structure for table `tb_option_tests`
--

CREATE TABLE `tb_option_tests` (
  `id` int(5) UNSIGNED NOT NULL,
  `test_material_id` int(5) UNSIGNED NOT NULL,
  `answer` varchar(255) NOT NULL,
  `correct` tinyint(1) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_option_tests`
--

INSERT INTO `tb_option_tests` (`id`, `test_material_id`, `answer`, `correct`, `created_at`, `updated_at`) VALUES
(1, 1, 'Pilihan A', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(2, 1, 'Pilihan B', 1, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(3, 1, 'Pilihan C', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(4, 1, 'Pilihan D', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(5, 2, 'Pilihan A', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(6, 2, 'Pilihan B', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(7, 2, 'Pilihan C', 1, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(8, 2, 'Pilihan D', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(9, 3, 'Pilihan A', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(10, 3, 'Pilihan B', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(11, 3, 'Pilihan C', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(12, 3, 'Pilihan D', 1, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(13, 4, 'Pilihan A', 1, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(14, 4, 'Pilihan B', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(15, 4, 'Pilihan C', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(16, 4, 'Pilihan D', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(17, 5, 'Pilihan A', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(18, 5, 'Pilihan B', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(19, 5, 'Pilihan C', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(20, 5, 'Pilihan D', 1, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(21, 6, 'Pilihan A', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(22, 6, 'Pilihan B', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(23, 6, 'Pilihan C', 1, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(24, 6, 'Pilihan D', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(25, 7, 'Pilihan A', 1, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(26, 7, 'Pilihan B', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(27, 7, 'Pilihan C', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(28, 7, 'Pilihan D', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(29, 8, 'Pilihan A', 1, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(30, 8, 'Pilihan B', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(31, 8, 'Pilihan C', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(32, 8, 'Pilihan D', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(33, 9, 'Pilihan A', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(34, 9, 'Pilihan B', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(35, 9, 'Pilihan C', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(36, 9, 'Pilihan D', 1, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(37, 10, 'Pilihan A', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(38, 10, 'Pilihan B', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(39, 10, 'Pilihan C', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(40, 10, 'Pilihan D', 1, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(41, 11, 'Pilihan A', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(42, 11, 'Pilihan B', 1, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(43, 11, 'Pilihan C', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(44, 11, 'Pilihan D', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(45, 12, 'Pilihan A', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(46, 12, 'Pilihan B', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(47, 12, 'Pilihan C', 1, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(48, 12, 'Pilihan D', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(49, 13, 'Pilihan A', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(50, 13, 'Pilihan B', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(51, 13, 'Pilihan C', 1, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(52, 13, 'Pilihan D', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(53, 14, 'Pilihan A', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(54, 14, 'Pilihan B', 1, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(55, 14, 'Pilihan C', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(56, 14, 'Pilihan D', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(57, 15, 'Pilihan A', 1, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(58, 15, 'Pilihan B', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(59, 15, 'Pilihan C', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(60, 15, 'Pilihan D', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(61, 16, 'Pilihan A', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(62, 16, 'Pilihan B', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(63, 16, 'Pilihan C', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(64, 16, 'Pilihan D', 1, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(65, 17, 'Pilihan A', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(66, 17, 'Pilihan B', 1, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(67, 17, 'Pilihan C', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(68, 17, 'Pilihan D', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(69, 18, 'Pilihan A', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(70, 18, 'Pilihan B', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(71, 18, 'Pilihan C', 1, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(72, 18, 'Pilihan D', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(73, 19, 'Pilihan A', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(74, 19, 'Pilihan B', 1, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(75, 19, 'Pilihan C', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(76, 19, 'Pilihan D', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(77, 20, 'Pilihan A', 1, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(78, 20, 'Pilihan B', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(79, 20, 'Pilihan C', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(80, 20, 'Pilihan D', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(81, 21, 'Pilihan A', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(82, 21, 'Pilihan B', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(83, 21, 'Pilihan C', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(84, 21, 'Pilihan D', 1, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(85, 22, 'Pilihan A', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(86, 22, 'Pilihan B', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(87, 22, 'Pilihan C', 1, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(88, 22, 'Pilihan D', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(89, 23, 'Pilihan A', 1, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(90, 23, 'Pilihan B', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(91, 23, 'Pilihan C', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(92, 23, 'Pilihan D', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(93, 24, 'Pilihan A', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(94, 24, 'Pilihan B', 1, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(95, 24, 'Pilihan C', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(96, 24, 'Pilihan D', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(97, 25, 'Pilihan A', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(98, 25, 'Pilihan B', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(99, 25, 'Pilihan C', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(100, 25, 'Pilihan D', 1, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(101, 26, 'Pilihan A', 1, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(102, 26, 'Pilihan B', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(103, 26, 'Pilihan C', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(104, 26, 'Pilihan D', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(105, 27, 'Pilihan A', 1, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(106, 27, 'Pilihan B', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(107, 27, 'Pilihan C', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(108, 27, 'Pilihan D', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(109, 28, 'Pilihan A', 1, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(110, 28, 'Pilihan B', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(111, 28, 'Pilihan C', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(112, 28, 'Pilihan D', 0, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(133, 34, 'a', 1, '2024-06-21 00:15:15', '2024-06-21 00:15:15'),
(134, 34, 'a', 0, '2024-06-21 00:15:15', '2024-06-21 00:15:15'),
(135, 34, 'a', 0, '2024-06-21 00:15:15', '2024-06-21 00:15:15'),
(136, 34, 'a', 0, '2024-06-21 00:15:15', '2024-06-21 00:15:15'),
(153, 39, 'dsa', 0, '2024-06-21 03:16:23', '2024-06-21 03:16:23'),
(154, 39, 'das', 1, '2024-06-21 03:16:23', '2024-06-21 03:16:23'),
(155, 39, 'gads', 0, '2024-06-21 03:16:23', '2024-06-21 03:16:23'),
(156, 39, 'gsa', 0, '2024-06-21 03:16:23', '2024-06-21 03:16:23'),
(157, 40, 'sadg', 0, '2024-06-21 03:16:23', '2024-06-21 03:16:23'),
(158, 40, 'as', 0, '2024-06-21 03:16:23', '2024-06-21 03:16:23'),
(159, 40, 'gas', 1, '2024-06-21 03:16:23', '2024-06-21 03:16:23'),
(160, 40, 'gsa', 0, '2024-06-21 03:16:23', '2024-06-21 03:16:23'),
(161, 41, 's', 0, '2024-08-01 06:28:45', '2024-08-01 06:28:45'),
(162, 41, 'we', 0, '2024-08-01 06:28:45', '2024-08-01 06:28:45'),
(163, 41, 'e', 0, '2024-08-01 06:28:45', '2024-08-01 06:28:45'),
(164, 41, 'e', 1, '2024-08-01 06:28:45', '2024-08-01 06:28:45'),
(165, 42, 'x', 0, '2024-08-06 01:52:28', '2024-08-06 01:52:28'),
(166, 42, 'y', 1, '2024-08-06 01:52:28', '2024-08-06 01:52:28'),
(167, 42, 'z', 0, '2024-08-06 01:52:28', '2024-08-06 01:52:28'),
(168, 42, 'a', 0, '2024-08-06 01:52:28', '2024-08-06 01:52:28');

-- --------------------------------------------------------

--
-- Table structure for table `tb_request_learning_paths`
--

CREATE TABLE `tb_request_learning_paths` (
  `id` int(5) UNSIGNED NOT NULL,
  `user_id` int(5) UNSIGNED NOT NULL,
  `learning_path_id` int(5) UNSIGNED NOT NULL,
  `admin_id` int(5) UNSIGNED DEFAULT NULL,
  `status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending',
  `message` varchar(255) DEFAULT NULL,
  `responded_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_request_learning_paths`
--

INSERT INTO `tb_request_learning_paths` (`id`, `user_id`, `learning_path_id`, `admin_id`, `status`, `message`, `responded_at`, `created_at`, `updated_at`) VALUES
(2, 4, 1, 2, 'approved', 'mau naik jabatan bang', '2024-06-16 09:08:22', '2024-06-16 09:08:00', '2024-06-16 09:08:22');

-- --------------------------------------------------------

--
-- Table structure for table `tb_roles`
--

CREATE TABLE `tb_roles` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(55) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_roles`
--

INSERT INTO `tb_roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'officials', 'pejabat', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(2, 'operator', 'admin', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(3, 'user', 'pegawai', '2024-06-14 08:42:43', '2024-06-14 08:42:43');

-- --------------------------------------------------------

--
-- Table structure for table `tb_subcourses`
--

CREATE TABLE `tb_subcourses` (
  `id` int(5) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `course_id` int(5) UNSIGNED NOT NULL,
  `sequence` int(2) UNSIGNED NOT NULL,
  `type` enum('video','test','written') DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_subcourses`
--

INSERT INTO `tb_subcourses` (`id`, `title`, `course_id`, `sequence`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Pre Test', 1, 1, 'test', '2024-06-14 08:42:43', '2024-07-30 13:30:48'),
(2, 'Subcourse 1', 1, 2, 'video', '2024-06-14 08:42:43', '2024-07-30 13:30:48'),
(3, 'Subcourse 2', 1, 3, 'video', '2024-06-14 08:42:43', '2024-07-30 13:30:48'),
(4, 'Post Test', 1, 5, 'test', '2024-06-14 08:42:43', '2024-07-30 13:30:48'),
(5, 'Pre Test', 2, 1, 'test', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(6, 'Subcourse 1', 2, 2, 'video', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(7, 'Subcourse 2', 2, 3, 'video', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(8, 'Post Test', 2, 4, 'test', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(9, 'Pre Test', 3, 1, 'test', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(10, 'Subcourse 1', 3, 2, 'video', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(11, 'Subcourse 2', 3, 3, 'video', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(12, 'Post Test', 3, 4, 'test', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(13, 'Pre Test', 4, 1, 'test', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(14, 'Subcourse 1', 4, 2, 'video', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(15, 'Subcourse 2', 4, 3, 'video', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(16, 'Post Test', 4, 4, 'test', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(17, 'Pre Test', 5, 1, 'test', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(18, 'Subcourse 1', 5, 2, 'video', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(19, 'Subcourse 2', 5, 3, 'video', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(20, 'Post Test', 5, 4, 'test', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(21, 'Pre Test', 6, 1, 'test', '2024-06-14 08:42:43', '2024-07-31 17:29:54'),
(22, 'Subcourse 1', 6, 2, 'video', '2024-06-14 08:42:43', '2024-07-31 17:29:54'),
(23, 'Subcourse 2', 6, 3, 'video', '2024-06-14 08:42:43', '2024-07-31 17:29:54'),
(24, 'Post Test', 6, 4, 'test', '2024-06-14 08:42:43', '2024-07-31 17:29:54'),
(25, 'Pre Test', 7, 1, 'test', '2024-06-14 08:42:43', '2024-08-06 02:20:24'),
(26, 'Subcourse 1', 7, 2, 'video', '2024-06-14 08:42:43', '2024-08-06 02:20:24'),
(27, 'Subcourse 2', 7, 3, 'video', '2024-06-14 08:42:43', '2024-08-06 02:20:24'),
(28, 'Post Test', 7, 7, 'test', '2024-06-14 08:42:43', '2024-08-06 02:20:24'),
(29, 'video belajar microsoft', 7, 5, 'video', '2024-06-20 04:09:19', '2024-08-06 02:20:24'),
(30, 'data science', 7, 4, 'written', '2024-06-20 11:00:42', '2024-08-06 02:20:24'),
(38, 'Pre Test', 8, 1, 'test', '2024-06-21 00:15:15', '2024-06-21 00:15:15'),
(43, 'Post Test', 8, 2, 'test', '2024-06-21 03:16:23', '2024-06-21 03:16:23'),
(44, 'tes', 1, 4, 'written', '2024-07-30 13:30:39', '2024-07-30 13:30:48'),
(45, 'Pre Test', 9, 1, 'test', '2024-08-01 06:28:45', '2024-08-01 06:33:40'),
(46, 'video belajar microsoft', 8, 3, 'video', '2024-08-05 14:38:20', '2024-08-05 14:38:20'),
(47, 'hei', 10, 3, 'video', '2024-08-06 01:06:56', '2024-08-06 01:52:40'),
(48, 'video belajar microsoft', 10, 2, 'written', '2024-08-06 01:10:34', '2024-08-06 01:52:40'),
(49, 'data science', 10, 4, 'written', '2024-08-06 01:11:43', '2024-08-06 01:52:40'),
(50, 'hei', 10, 5, 'video', '2024-08-06 01:12:13', '2024-08-06 01:52:40'),
(51, 'Pre Test', 10, 1, 'test', '2024-08-06 01:52:27', '2024-08-06 01:52:40'),
(52, 'video belajar microsoft', 10, 6, 'video', '2024-08-06 02:17:37', '2024-08-06 02:17:37'),
(53, 'video belajar microsoft', 7, 6, 'video', '2024-08-06 02:19:47', '2024-08-06 02:20:24');

-- --------------------------------------------------------

--
-- Table structure for table `tb_test_materials`
--

CREATE TABLE `tb_test_materials` (
  `id` int(5) UNSIGNED NOT NULL,
  `subcourse_id` int(5) UNSIGNED NOT NULL,
  `sequence` int(2) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `type_test` enum('pre_test','post_test') DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_test_materials`
--

INSERT INTO `tb_test_materials` (`id`, `subcourse_id`, `sequence`, `content`, `type_test`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'PIlih jawaban yang benar', 'pre_test', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(2, 1, 2, 'PIlih jawaban yang benar', 'pre_test', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(3, 4, 1, 'PIlih jawaban yang benar', 'post_test', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(4, 4, 2, 'PIlih jawaban yang benar', 'post_test', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(5, 5, 1, 'PIlih jawaban yang benar', 'pre_test', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(6, 5, 2, 'PIlih jawaban yang benar', 'pre_test', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(7, 8, 1, 'PIlih jawaban yang benar', 'post_test', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(8, 8, 2, 'PIlih jawaban yang benar', 'post_test', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(9, 9, 1, 'PIlih jawaban yang benar', 'pre_test', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(10, 9, 2, 'PIlih jawaban yang benar', 'pre_test', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(11, 12, 1, 'PIlih jawaban yang benar', 'post_test', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(12, 12, 2, 'PIlih jawaban yang benar', 'post_test', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(13, 13, 1, 'PIlih jawaban yang benar', 'pre_test', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(14, 13, 2, 'PIlih jawaban yang benar', 'pre_test', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(15, 16, 1, 'PIlih jawaban yang benar', 'post_test', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(16, 16, 2, 'PIlih jawaban yang benar', 'post_test', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(17, 17, 1, 'PIlih jawaban yang benar', 'pre_test', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(18, 17, 2, 'PIlih jawaban yang benar', 'pre_test', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(19, 20, 1, 'PIlih jawaban yang benar', 'post_test', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(20, 20, 2, 'PIlih jawaban yang benar', 'post_test', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(21, 21, 1, 'PIlih jawaban yang benar', 'pre_test', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(22, 21, 2, 'PIlih jawaban yang benar', 'pre_test', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(23, 24, 1, 'PIlih jawaban yang benar', 'post_test', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(24, 24, 2, 'PIlih jawaban yang benar', 'post_test', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(25, 25, 1, 'PIlih jawaban yang benar', 'pre_test', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(26, 25, 2, 'PIlih jawaban yang benar', 'pre_test', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(27, 28, 1, 'PIlih jawaban yang benar', 'post_test', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(28, 28, 2, 'PIlih jawaban yang benar', 'post_test', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(34, 38, 1, 'a', 'pre_test', '2024-06-21 00:15:15', '2024-06-21 00:15:15'),
(39, 43, 1, 'ag', 'post_test', '2024-06-21 03:16:23', '2024-06-21 03:16:23'),
(40, 43, 2, 'gas', 'post_test', '2024-06-21 03:16:23', '2024-06-21 03:16:23'),
(41, 45, 1, 'abc', 'pre_test', '2024-08-01 06:28:45', '2024-08-01 06:28:45'),
(42, 51, 1, 'hai', 'pre_test', '2024-08-06 01:52:28', '2024-08-06 01:52:28');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(5) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(5) UNSIGNED NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `birthday` datetime DEFAULT NULL,
  `gender` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `photo_url` varchar(255) DEFAULT NULL,
  `divisi` varchar(100) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id`, `email`, `password`, `role_id`, `fullname`, `birthday`, `gender`, `photo_url`, `divisi`, `position`, `created_at`, `updated_at`) VALUES
(1, 'officials@gmail.com', '$2y$10$BxqZmPEugpYzERm/niySUubnhhurUva8fdIhIJv0X9H7.HmvnCrmi', 1, 'aku pejabat', NULL, NULL, NULL, NULL, NULL, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(2, 'operator@gmail.com', '$2y$10$xWXvg5R8PQyKSxzO0MPmP.ePPni7lRxBn1twO7IDelCJwJsVquv5e', 2, 'aku admin', NULL, NULL, NULL, NULL, NULL, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(3, 'fatwa@gmail.com', '$2y$10$uqw0WyFC63Uh0eo8Ppp.D.sUARoa7VBxmIpa7fndm9N9PfdqPCri2', 3, 'Fatwa Fatahillah Fatah', NULL, NULL, NULL, NULL, NULL, '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(4, 'erdito@gmail.com', '$2y$10$E06q5mzm40odSp1K8lbP5.iPJxWU/5rxPjqYIdbXlRil/VDkBm33S', 3, 'Erdito Nausha Adam', NULL, NULL, NULL, NULL, NULL, '2024-06-14 12:09:21', '2024-06-14 12:09:21');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_answers`
--

CREATE TABLE `tb_user_answers` (
  `id` int(5) UNSIGNED NOT NULL,
  `user_id` int(5) UNSIGNED NOT NULL,
  `test_material_id` int(5) UNSIGNED NOT NULL,
  `option_test_id` int(5) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_courses`
--

CREATE TABLE `tb_user_courses` (
  `id` int(5) UNSIGNED NOT NULL,
  `user_id` int(5) UNSIGNED NOT NULL,
  `course_id` int(5) UNSIGNED NOT NULL,
  `grade_pre_test` int(3) UNSIGNED NOT NULL,
  `grade_post_test` int(3) UNSIGNED NOT NULL,
  `status` enum('not-started','on-progress','completed') DEFAULT NULL,
  `completed_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_learning_paths`
--

CREATE TABLE `tb_user_learning_paths` (
  `id` int(5) UNSIGNED NOT NULL,
  `user_id` int(5) UNSIGNED NOT NULL,
  `learning_path_id` int(5) UNSIGNED NOT NULL,
  `status` enum('not-started','on-progress','completed') DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `completed_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user_learning_paths`
--

INSERT INTO `tb_user_learning_paths` (`id`, `user_id`, `learning_path_id`, `status`, `start_date`, `end_date`, `completed_at`, `created_at`, `updated_at`) VALUES
(2, 3, 1, 'not-started', '2024-06-14 10:11:38', '2024-10-14 10:11:38', NULL, '2024-06-14 10:11:38', '2024-06-14 10:11:38'),
(4, 4, 1, 'not-started', '2024-06-16 09:08:22', '2024-10-16 09:08:22', NULL, '2024-06-16 09:08:22', '2024-06-16 09:08:22');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_subcourses`
--

CREATE TABLE `tb_user_subcourses` (
  `id` int(5) UNSIGNED NOT NULL,
  `user_id` int(5) UNSIGNED NOT NULL,
  `subcourse_id` int(5) UNSIGNED NOT NULL,
  `status` enum('not-started','on-progress','completed') DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_video_materials`
--

CREATE TABLE `tb_video_materials` (
  `id` int(5) UNSIGNED NOT NULL,
  `subcourse_id` int(5) UNSIGNED NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_video_materials`
--

INSERT INTO `tb_video_materials` (`id`, `subcourse_id`, `video_url`, `created_at`, `updated_at`) VALUES
(1, 2, 'XseAIiQY9Hk', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(2, 3, 'XseAIiQY9Hk', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(3, 6, 'XseAIiQY9Hk', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(4, 7, 'XseAIiQY9Hk', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(5, 10, 'XseAIiQY9Hk', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(6, 11, 'XseAIiQY9Hk', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(7, 14, 'XseAIiQY9Hk', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(8, 15, 'XseAIiQY9Hk', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(9, 18, 'XseAIiQY9Hk', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(10, 19, 'XseAIiQY9Hk', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(11, 22, 'XseAIiQY9Hk', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(12, 23, 'XseAIiQY9Hk', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(13, 26, 'XseAIiQY9Hk', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(14, 27, 'XseAIiQY9Hk', '2024-06-14 08:42:43', '2024-06-14 08:42:43'),
(15, 29, 'XseAIiQY9Hk', '2024-06-20 04:09:19', '2024-06-20 04:09:19'),
(17, 46, 'XseAIiQY9Hk', '2024-08-05 14:38:20', '2024-08-05 14:38:20'),
(18, 47, 'XseAIiQY9Hk', '2024-08-06 01:06:56', '2024-08-06 01:06:56'),
(19, 50, 'hei', '2024-08-06 01:12:13', '2024-08-06 01:12:13'),
(20, 52, '61zmwIfQQ2Y', '2024-08-06 02:17:37', '2024-08-06 02:17:37'),
(21, 53, '61zmwIfQQ2Y', '2024-08-06 02:19:47', '2024-08-06 02:19:47');

-- --------------------------------------------------------

--
-- Table structure for table `tb_written_materials`
--

CREATE TABLE `tb_written_materials` (
  `id` int(5) UNSIGNED NOT NULL,
  `subcourse_id` int(5) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_written_materials`
--

INSERT INTO `tb_written_materials` (`id`, `subcourse_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 30, 'abc', '2024-06-20 11:00:43', '2024-06-20 11:00:43'),
(3, 44, 'testt', '2024-07-30 13:30:39', '2024-07-30 13:30:39'),
(4, 48, 'abc', '2024-08-06 01:10:34', '2024-08-06 01:10:34'),
(5, 49, 'abc', '2024-08-06 01:11:43', '2024-08-06 01:11:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_assign_learning_paths`
--
ALTER TABLE `tb_assign_learning_paths`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_assign_learning_paths_user_id_foreign` (`user_id`),
  ADD KEY `tb_assign_learning_paths_admin_id_foreign` (`admin_id`),
  ADD KEY `tb_assign_learning_paths_learning_path_id_foreign` (`learning_path_id`);

--
-- Indexes for table `tb_categories`
--
ALTER TABLE `tb_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_courses`
--
ALTER TABLE `tb_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_learning_paths`
--
ALTER TABLE `tb_learning_paths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_learning_path_courses`
--
ALTER TABLE `tb_learning_path_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_learning_path_courses_learning_path_id_foreign` (`learning_path_id`),
  ADD KEY `tb_learning_path_courses_course_id_foreign` (`course_id`);

--
-- Indexes for table `tb_news`
--
ALTER TABLE `tb_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_news_category_id_foreign` (`category_id`),
  ADD KEY `tb_news_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `tb_option_tests`
--
ALTER TABLE `tb_option_tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_option_tests_test_material_id_foreign` (`test_material_id`);

--
-- Indexes for table `tb_request_learning_paths`
--
ALTER TABLE `tb_request_learning_paths`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_request_learning_paths_user_id_foreign` (`user_id`),
  ADD KEY `tb_request_learning_paths_admin_id_foreign` (`admin_id`),
  ADD KEY `tb_request_learning_paths_learning_path_id_foreign` (`learning_path_id`);

--
-- Indexes for table `tb_roles`
--
ALTER TABLE `tb_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_subcourses`
--
ALTER TABLE `tb_subcourses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_subcourses_course_id_foreign` (`course_id`);

--
-- Indexes for table `tb_test_materials`
--
ALTER TABLE `tb_test_materials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_test_materials_subcourse_id_foreign` (`subcourse_id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `tb_users_role_id_foreign` (`role_id`);

--
-- Indexes for table `tb_user_answers`
--
ALTER TABLE `tb_user_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_user_answers_user_id_foreign` (`user_id`),
  ADD KEY `tb_user_answers_test_material_id_foreign` (`test_material_id`),
  ADD KEY `tb_user_answers_option_test_id_foreign` (`option_test_id`);

--
-- Indexes for table `tb_user_courses`
--
ALTER TABLE `tb_user_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_user_courses_user_id_foreign` (`user_id`),
  ADD KEY `tb_user_courses_course_id_foreign` (`course_id`);

--
-- Indexes for table `tb_user_learning_paths`
--
ALTER TABLE `tb_user_learning_paths`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_user_learning_paths_user_id_foreign` (`user_id`),
  ADD KEY `tb_user_learning_paths_learning_path_id_foreign` (`learning_path_id`);

--
-- Indexes for table `tb_user_subcourses`
--
ALTER TABLE `tb_user_subcourses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_user_subcourses_user_id_foreign` (`user_id`),
  ADD KEY `tb_user_subcourses_subcourse_id_foreign` (`subcourse_id`);

--
-- Indexes for table `tb_video_materials`
--
ALTER TABLE `tb_video_materials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_video_materials_subcourse_id_foreign` (`subcourse_id`);

--
-- Indexes for table `tb_written_materials`
--
ALTER TABLE `tb_written_materials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_written_materials_subcourse_id_foreign` (`subcourse_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_assign_learning_paths`
--
ALTER TABLE `tb_assign_learning_paths`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_categories`
--
ALTER TABLE `tb_categories`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_courses`
--
ALTER TABLE `tb_courses`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_learning_paths`
--
ALTER TABLE `tb_learning_paths`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_learning_path_courses`
--
ALTER TABLE `tb_learning_path_courses`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_news`
--
ALTER TABLE `tb_news`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_option_tests`
--
ALTER TABLE `tb_option_tests`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `tb_request_learning_paths`
--
ALTER TABLE `tb_request_learning_paths`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_roles`
--
ALTER TABLE `tb_roles`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_subcourses`
--
ALTER TABLE `tb_subcourses`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tb_test_materials`
--
ALTER TABLE `tb_test_materials`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_user_answers`
--
ALTER TABLE `tb_user_answers`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user_courses`
--
ALTER TABLE `tb_user_courses`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user_learning_paths`
--
ALTER TABLE `tb_user_learning_paths`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_user_subcourses`
--
ALTER TABLE `tb_user_subcourses`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_video_materials`
--
ALTER TABLE `tb_video_materials`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_written_materials`
--
ALTER TABLE `tb_written_materials`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_assign_learning_paths`
--
ALTER TABLE `tb_assign_learning_paths`
  ADD CONSTRAINT `tb_assign_learning_paths_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `tb_users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_assign_learning_paths_learning_path_id_foreign` FOREIGN KEY (`learning_path_id`) REFERENCES `tb_learning_paths` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_assign_learning_paths_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `tb_users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_learning_path_courses`
--
ALTER TABLE `tb_learning_path_courses`
  ADD CONSTRAINT `tb_learning_path_courses_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `tb_courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_learning_path_courses_learning_path_id_foreign` FOREIGN KEY (`learning_path_id`) REFERENCES `tb_learning_paths` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_news`
--
ALTER TABLE `tb_news`
  ADD CONSTRAINT `tb_news_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `tb_users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_news_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `tb_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_option_tests`
--
ALTER TABLE `tb_option_tests`
  ADD CONSTRAINT `tb_option_tests_test_material_id_foreign` FOREIGN KEY (`test_material_id`) REFERENCES `tb_test_materials` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_request_learning_paths`
--
ALTER TABLE `tb_request_learning_paths`
  ADD CONSTRAINT `tb_request_learning_paths_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `tb_users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_request_learning_paths_learning_path_id_foreign` FOREIGN KEY (`learning_path_id`) REFERENCES `tb_learning_paths` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_request_learning_paths_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `tb_users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_subcourses`
--
ALTER TABLE `tb_subcourses`
  ADD CONSTRAINT `tb_subcourses_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `tb_courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_test_materials`
--
ALTER TABLE `tb_test_materials`
  ADD CONSTRAINT `tb_test_materials_subcourse_id_foreign` FOREIGN KEY (`subcourse_id`) REFERENCES `tb_subcourses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD CONSTRAINT `tb_users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `tb_roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_user_answers`
--
ALTER TABLE `tb_user_answers`
  ADD CONSTRAINT `tb_user_answers_option_test_id_foreign` FOREIGN KEY (`option_test_id`) REFERENCES `tb_option_tests` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_user_answers_test_material_id_foreign` FOREIGN KEY (`test_material_id`) REFERENCES `tb_test_materials` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_user_answers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `tb_users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_user_courses`
--
ALTER TABLE `tb_user_courses`
  ADD CONSTRAINT `tb_user_courses_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `tb_courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_user_courses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `tb_users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_user_learning_paths`
--
ALTER TABLE `tb_user_learning_paths`
  ADD CONSTRAINT `tb_user_learning_paths_learning_path_id_foreign` FOREIGN KEY (`learning_path_id`) REFERENCES `tb_learning_paths` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_user_learning_paths_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `tb_users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_user_subcourses`
--
ALTER TABLE `tb_user_subcourses`
  ADD CONSTRAINT `tb_user_subcourses_subcourse_id_foreign` FOREIGN KEY (`subcourse_id`) REFERENCES `tb_subcourses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_user_subcourses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `tb_users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_video_materials`
--
ALTER TABLE `tb_video_materials`
  ADD CONSTRAINT `tb_video_materials_subcourse_id_foreign` FOREIGN KEY (`subcourse_id`) REFERENCES `tb_subcourses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_written_materials`
--
ALTER TABLE `tb_written_materials`
  ADD CONSTRAINT `tb_written_materials_subcourse_id_foreign` FOREIGN KEY (`subcourse_id`) REFERENCES `tb_subcourses` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
