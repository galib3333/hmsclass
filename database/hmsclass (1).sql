-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2023 at 04:55 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmsclass`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED DEFAULT NULL,
  `employ_id` bigint(20) UNSIGNED NOT NULL,
  `app_date` date NOT NULL,
  `serial` varchar(255) NOT NULL,
  `problem` text NOT NULL,
  `approve` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `births`
--

CREATE TABLE `births` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `gender` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `doc_ref` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blood_type_name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`id`, `blood_type_name`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'A+', 1, NULL, NULL, NULL, '2023-11-22 23:00:56', '2023-11-22 23:00:56'),
(2, 'A-', 1, NULL, NULL, NULL, '2023-11-22 23:01:02', '2023-11-22 23:01:02'),
(3, 'B+', 1, NULL, NULL, NULL, '2023-11-25 22:39:58', '2023-11-25 22:39:58'),
(4, 'B-', 1, NULL, NULL, NULL, '2023-11-25 22:40:05', '2023-11-25 22:40:05'),
(5, 'AB+', 1, NULL, NULL, NULL, '2023-11-25 22:40:13', '2023-11-25 22:40:13'),
(6, 'AB-', 1, NULL, NULL, NULL, '2023-11-25 22:40:19', '2023-11-25 22:40:19');

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day_name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deaths`
--

CREATE TABLE `deaths` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED DEFAULT NULL,
  `death_date` date NOT NULL,
  `description` text DEFAULT NULL,
  `doc_ref` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dep_name` varchar(255) NOT NULL,
  `dep_des` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `dep_name`, `dep_des`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'dsfgdfgsfd', 'sdfsdfsdf', 1, 2, NULL, NULL, '2023-11-26 22:26:55', '2023-11-26 22:26:55'),
(2, 'ffffffffffffff', 'gdfgdfg', 0, 2, NULL, '2023-11-26 22:32:21', '2023-11-26 22:27:30', '2023-11-26 22:32:21'),
(3, 'ghjghhhhhhhhhhhhhhhhhhh', 'hhhhhhhhhhhhh', 0, 2, NULL, NULL, '2023-11-27 00:10:13', '2023-11-27 00:12:45'),
(4, 'h', 'fghfgh', 1, 2, NULL, NULL, '2023-11-27 00:50:13', '2023-11-27 00:50:13'),
(5, 'rtyrtyrt', 'yrtyrty', 1, 2, NULL, NULL, '2023-11-27 00:51:08', '2023-11-27 00:51:08');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `desig_name` varchar(255) NOT NULL,
  `desig_des` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `desig_name`, `desig_des`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'fghfghfgh', 'fghfgh', 0, 2, NULL, NULL, '2023-11-27 00:02:45', '2023-11-27 00:05:52'),
(2, 'ghghg', 'hghghgh', 0, 2, NULL, NULL, '2023-11-27 00:06:38', '2023-11-27 00:06:38'),
(3, 'gggggggggggg', 'gggggggggggg', 1, 2, NULL, NULL, '2023-11-27 00:09:18', '2023-11-27 00:09:18');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employ_id` bigint(20) UNSIGNED DEFAULT NULL,
  `designation_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `biography` text NOT NULL,
  `specialist` varchar(255) NOT NULL,
  `education` text NOT NULL,
  `fees` double NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employ_basics`
--

CREATE TABLE `employ_basics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_bn` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `contact_no_en` varchar(255) NOT NULL,
  `contact_no_bn` varchar(255) DEFAULT NULL,
  `gender` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `blood_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `present_address` text NOT NULL,
  `permanent_address` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employ_basics`
--

INSERT INTO `employ_basics` (`id`, `role_id`, `name_en`, `name_bn`, `email`, `contact_no_en`, `contact_no_bn`, `gender`, `birth_date`, `blood_id`, `image`, `present_address`, `permanent_address`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(6, 1, 'Asadullah Al Galib', NULL, 'galib@gmail.com', '018375755799', NULL, 'Male', '2023-11-15', 1, '7191701059484.jpg', 'sdfsdfsdf', 'sdfsdfsdf', 1, NULL, 2, NULL, '2023-11-23 00:42:44', '2023-11-26 23:05:47'),
(8, 2, 'arabi hamid', 'arabi hamid', 'ashkaiser@gmail.com', '018375755766', NULL, 'Male', '2023-11-23', 1, '4081701059505.jpg', 'ctg', 'dfxgdfgdfg', 1, NULL, 2, '0000-00-00 00:00:00', '2023-11-25 21:20:55', '2023-11-26 23:05:32'),
(9, 3, 'Kamal Uddin', NULL, 'k@gmail.com', '12569', NULL, 'Male', '1999-11-23', 5, '7341701146353.jpg', 'dfdfdf', 'dfdfdf', 1, 2, 2, NULL, '2023-11-27 22:39:13', '2023-11-27 22:39:45'),
(10, 2, 'Joshim Uddin', NULL, 'j@gmail.com', '25865', NULL, 'Male', '1999-11-23', 6, '3681701146701.jpg', 'dfgdfgdf', 'dfgdfgdfg', 1, 2, 2, NULL, '2023-11-27 22:45:01', '2023-11-28 22:40:51'),
(11, 2, 'Farabi', NULL, 'f@gmail.com', '01458795687', NULL, 'Male', '2023-11-11', 1, '1911701146852.jpg', 'dfgdfgdg', 'dfgdfgdfg', 1, 2, 2, NULL, '2023-11-27 22:47:32', '2023-11-29 21:32:08');

-- --------------------------------------------------------

--
-- Table structure for table `invest_cats`
--

CREATE TABLE `invest_cats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invset_cat_name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invest_lists`
--

CREATE TABLE `invest_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `inv_cat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `invset_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
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
(59, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(60, '2023_11_11_115941_blood_table', 1),
(61, '2023_11_11_115942_create_roles_table', 1),
(62, '2023_11_11_115943_create_employ_basics_table', 1),
(64, '2023_11_12_043129_create_permissions_table', 1),
(65, '2023_11_18_154907_create_departments_table', 1),
(66, '2023_11_18_154908_create_designations_table', 1),
(68, '2023_11_18_155037_create_room_cats_table', 1),
(69, '2023_11_18_155038_create_room_lists_table', 1),
(70, '2023_11_18_155039_create_patients_table', 1),
(71, '2023_11_20_040120_create_appointments_table', 1),
(72, '2023_11_20_040648_create_patient_admits_table', 1),
(73, '2023_11_20_041304_create_invest_cats_table', 1),
(74, '2023_11_20_041342_create_invest_lists_table', 1),
(75, '2023_11_20_042341_create_tests_table', 1),
(76, '2023_11_20_042342_create_test_details_table', 1),
(77, '2023_11_20_042707_create_prescriptions_table', 1),
(78, '2023_11_20_042730_create_prescription_medis_table', 1),
(79, '2023_11_20_042958_create_shifts_table', 1),
(80, '2023_11_20_043042_days_table', 1),
(81, '2023_11_20_043043_create_schedules_table', 1),
(82, '2023_11_20_043233_create_births_table', 1),
(83, '2023_11_20_043249_create_deaths_table', 1),
(84, '2023_11_20_043323_create_operations_table', 1),
(88, '2023_11_11_115944_create_users_table', 2),
(89, '2023_11_18_154909_create_doctors_table', 3),
(90, '2023_11_20_043619_patient_prescribe_table', 4),
(91, '2023_11_20_043721_patient_medi_cat_table', 4),
(92, '2023_11_20_043722_patient_prescribe_medi_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `operations`
--

CREATE TABLE `operations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ot_no` varchar(255) NOT NULL,
  `operation_date` date NOT NULL,
  `doc_ref` bigint(20) UNSIGNED DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_bn` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `contact_no_en` varchar(255) NOT NULL,
  `contact_no_bn` varchar(255) DEFAULT NULL,
  `present_address` text NOT NULL,
  `permanent_address` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `gender` varchar(255) NOT NULL,
  `blood_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `patient_id`, `name_en`, `name_bn`, `email`, `contact_no_en`, `contact_no_bn`, `present_address`, `permanent_address`, `image`, `birth_date`, `gender`, `blood_id`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '09e7733a-e3df-4aef-a2ec-bdc6ab801add', 'sdfsdfsdfsdf', NULL, 'ddfsdf@gmail.com', '556454', NULL, 'zxczxczcx', 'zczczxc', '5931701056459.jpg', '2023-11-15', 'Male', 1, 0, NULL, 2, NULL, '2023-11-25 21:53:52', '2023-11-26 21:40:59'),
(2, '9ab3d3db-e872-4f7a-98d7-a04f9d80df07', 'sdsdsd', NULL, 'sdsd@gmail.com', '334343434', NULL, 'dfgdfgdfg', 'dfgdfgdfg', '4251701056480.jpg', '2023-11-23', 'Male', 3, 0, NULL, 2, NULL, '2023-11-25 22:04:02', '2023-11-26 21:41:20'),
(3, '12eedb1b-3db0-4877-9b95-b4de71a2aa1e', 'yrtrtyrty', NULL, 'ttt@gmail.com', '454444', NULL, 'fghfghfgh', 'cvfgh', '8951700975607.jpg', '2023-11-17', 'Male', 6, 0, 2, 2, '2023-11-25 23:49:02', '2023-11-25 23:13:28', '2023-11-25 23:49:02'),
(4, '7ac41718-6045-4cb4-90ef-adeeedbbf4a4', 'fffffffff', NULL, 'yy@gmail.com', '5555', NULL, 'dfgdfg', 'cfgf', '9701701056490.jpg', '2023-11-21', 'Male', 4, 1, 2, 2, NULL, '2023-11-26 00:25:39', '2023-11-29 00:40:03');

-- --------------------------------------------------------

--
-- Table structure for table `patient_admits`
--

CREATE TABLE `patient_admits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED DEFAULT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `husband_name` varchar(255) NOT NULL,
  `marital_status` varchar(255) NOT NULL,
  `doctor_ref` varchar(255) NOT NULL,
  `problem` text NOT NULL,
  `admit_date` date NOT NULL,
  `room_id` bigint(20) UNSIGNED DEFAULT NULL,
  `guardian` varchar(255) NOT NULL,
  `relation` varchar(255) NOT NULL,
  `condition` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_admits`
--

INSERT INTO `patient_admits` (`id`, `patient_id`, `father_name`, `mother_name`, `husband_name`, `marital_status`, `doctor_ref`, `problem`, `admit_date`, `room_id`, `guardian`, `relation`, `condition`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, 'dfgdfgdfg', 'dfgdfgdfg', 'dfgdfgdfg', 'single', 'fdgdfgdfg', 'dfgdfg', '2023-11-16', NULL, 'dfgdfg', 'dfgdfg', 'dfgdfgdfg', 1, 2, NULL, NULL, '2023-11-30 01:13:52', '2023-11-30 01:13:52');

-- --------------------------------------------------------

--
-- Table structure for table `patient_medi_cat`
--

CREATE TABLE `patient_medi_cat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `medicine_cat_name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_prescribe`
--

CREATE TABLE `patient_prescribe` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED DEFAULT NULL,
  `cc` varchar(255) NOT NULL,
  `inv_list_id` bigint(20) UNSIGNED DEFAULT NULL,
  `advice` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_prescribe_medi`
--

CREATE TABLE `patient_prescribe_medi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prescribe_id` bigint(20) UNSIGNED DEFAULT NULL,
  `medicine_cat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `medi_name` varchar(255) NOT NULL,
  `dose` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `role_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'role.index', '2023-11-26 00:53:41', '2023-11-26 00:53:41'),
(2, 1, 'role.create', '2023-11-26 00:53:41', '2023-11-26 00:53:41'),
(3, 1, 'role.show', '2023-11-26 00:53:41', '2023-11-26 00:53:41'),
(4, 1, 'role.edit', '2023-11-26 00:53:41', '2023-11-26 00:53:41'),
(5, 1, 'role.destroy', '2023-11-26 00:53:41', '2023-11-26 00:53:41'),
(6, 1, 'permission.list', '2023-11-26 00:53:41', '2023-11-26 00:53:41');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `app_id` bigint(20) UNSIGNED DEFAULT NULL,
  `cc` text NOT NULL,
  `inv` text NOT NULL,
  `advice` text NOT NULL,
  `visit` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prescription_medis`
--

CREATE TABLE `prescription_medis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prescription_id` bigint(20) UNSIGNED DEFAULT NULL,
  `medi_name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `dose` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `duration` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `identity` varchar(30) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `identity`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin', 1, NULL, NULL, NULL, '2023-11-22 22:59:25', NULL),
(2, 'Doctor', 'doctor', 1, NULL, NULL, NULL, '2023-11-22 22:59:25', NULL),
(3, 'Receptionist', 'receptionist', 1, NULL, NULL, NULL, '2023-11-22 22:59:25', NULL),
(4, 'Accountant', 'accountant', 1, NULL, NULL, NULL, '2023-11-22 22:59:25', NULL),
(5, 'Nurse', 'nurse', 1, 2, NULL, NULL, '2023-11-26 00:52:23', '2023-11-26 00:52:23');

-- --------------------------------------------------------

--
-- Table structure for table `room_cats`
--

CREATE TABLE `room_cats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_cat_name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_cats`
--

INSERT INTO `room_cats` (`id`, `room_cat_name`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'hhhhhhhhhhhhhhhh', 0, 2, 2, NULL, '2023-11-28 23:24:55', '2023-11-29 21:54:07'),
(2, 'ghhhhhhhhhhhhhhhj', 0, 2, NULL, '2023-11-28 23:29:51', '2023-11-28 23:29:36', '2023-11-28 23:29:51');

-- --------------------------------------------------------

--
-- Table structure for table `room_lists`
--

CREATE TABLE `room_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_cat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `room_no` int(11) NOT NULL,
  `floor_no` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `capacity` int(11) NOT NULL,
  `price` double NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_lists`
--

INSERT INTO `room_lists` (`id`, `room_cat_id`, `room_no`, `floor_no`, `description`, `capacity`, `price`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 12, 6, 'f d fgdfgdfgdfxx x', 2, 20000, 1, 2, 2, NULL, '2023-11-29 21:03:51', '2023-11-29 21:54:20');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employ_id` bigint(20) UNSIGNED DEFAULT NULL,
  `day_id` bigint(20) UNSIGNED DEFAULT NULL,
  `shift_id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shifts`
--

CREATE TABLE `shifts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `start` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED DEFAULT NULL,
  `vat` double NOT NULL,
  `discount` double NOT NULL,
  `paid` double NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test_details`
--

CREATE TABLE `test_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `test_id` bigint(20) UNSIGNED DEFAULT NULL,
  `inv_list_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employ_id` bigint(20) UNSIGNED DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact_no_en` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL DEFAULT 'en',
  `full_access` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=yes, 0=no',
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = active, 2 = inactive',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `employ_id`, `role_id`, `name_en`, `email`, `contact_no_en`, `password`, `language`, `full_access`, `status`, `created_by`, `updated_by`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 6, 1, 'Asadullah Al Galib', 'galib@gmail.com', '018375755799', '$2y$12$JrYgams5nXcHmqlnk7aUTOnC2rtZ1aABHLbt7ElC2ghErwzkv2kZ2', 'en', 1, 1, NULL, 2, NULL, '2023-11-23 00:42:44', '2023-11-26 23:05:47', NULL),
(4, 9, 3, 'Kamal Uddin', 'k@gmail.com', '12569', '$2y$12$SlQqXma10cbi6q3TvviR5OuPXl/K0QSZTxrtvbN6ygGErLMvYJaQe', 'en', 0, 1, 2, NULL, NULL, '2023-11-27 22:39:13', '2023-11-28 22:31:35', NULL),
(5, 10, 2, 'Joshim Uddin', 'j@gmail.com', '25865', '$2y$12$8NwZWWrJlpXYmk5TvmBwvupiY1IJaH1wE.bW4jlOMWZLVYCC.GJMq', 'en', 0, 1, 2, 2, NULL, '2023-11-27 22:45:02', '2023-11-28 22:40:52', NULL),
(6, 11, 2, 'Farabi', 'f@gmail.com', '01458795687', '$2y$12$7T0vRQVY0XM8UBwxZySNV.i5JFdTeVfHdKMvk8SpKR2bykq.lmJje', 'en', 0, 1, 2, 2, NULL, '2023-11-27 22:47:33', '2023-11-29 21:32:08', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointments_patient_id_foreign` (`patient_id`),
  ADD KEY `appointments_employ_id_foreign` (`employ_id`);

--
-- Indexes for table `births`
--
ALTER TABLE `births`
  ADD PRIMARY KEY (`id`),
  ADD KEY `births_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deaths`
--
ALTER TABLE `deaths`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deaths_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctors_employ_id_foreign` (`employ_id`),
  ADD KEY `doctors_designation_id_foreign` (`designation_id`),
  ADD KEY `doctors_department_id_foreign` (`department_id`);

--
-- Indexes for table `employ_basics`
--
ALTER TABLE `employ_basics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employ_basics_contact_no_en_unique` (`contact_no_en`),
  ADD UNIQUE KEY `employ_basics_contact_no_bn_unique` (`contact_no_bn`),
  ADD KEY `employ_basics_role_id_foreign` (`role_id`),
  ADD KEY `employ_basics_blood_id_foreign` (`blood_id`);

--
-- Indexes for table `invest_cats`
--
ALTER TABLE `invest_cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invest_lists`
--
ALTER TABLE `invest_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invest_lists_inv_cat_id_foreign` (`inv_cat_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operations`
--
ALTER TABLE `operations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `operations_patient_id_foreign` (`patient_id`),
  ADD KEY `operations_doc_ref_foreign` (`doc_ref`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `patients_contact_no_en_unique` (`contact_no_en`),
  ADD UNIQUE KEY `patients_contact_no_bn_unique` (`contact_no_bn`),
  ADD KEY `patients_blood_id_foreign` (`blood_id`);

--
-- Indexes for table `patient_admits`
--
ALTER TABLE `patient_admits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_admits_patient_id_foreign` (`patient_id`),
  ADD KEY `patient_admits_room_id_foreign` (`room_id`);

--
-- Indexes for table `patient_medi_cat`
--
ALTER TABLE `patient_medi_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_prescribe`
--
ALTER TABLE `patient_prescribe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_prescribe_patient_id_foreign` (`patient_id`),
  ADD KEY `patient_prescribe_inv_list_id_foreign` (`inv_list_id`);

--
-- Indexes for table `patient_prescribe_medi`
--
ALTER TABLE `patient_prescribe_medi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_prescribe_medi_prescribe_id_foreign` (`prescribe_id`),
  ADD KEY `patient_prescribe_medi_medicine_cat_id_foreign` (`medicine_cat_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_role_id_index` (`role_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prescriptions_app_id_foreign` (`app_id`);

--
-- Indexes for table `prescription_medis`
--
ALTER TABLE `prescription_medis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prescription_medis_prescription_id_foreign` (`prescription_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_type_unique` (`name`),
  ADD UNIQUE KEY `roles_identity_unique` (`identity`);

--
-- Indexes for table `room_cats`
--
ALTER TABLE `room_cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_lists`
--
ALTER TABLE `room_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_lists_room_cat_id_foreign` (`room_cat_id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedules_employ_id_foreign` (`employ_id`),
  ADD KEY `schedules_day_id_foreign` (`day_id`),
  ADD KEY `schedules_shift_id_foreign` (`shift_id`);

--
-- Indexes for table `shifts`
--
ALTER TABLE `shifts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tests_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `test_details`
--
ALTER TABLE `test_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test_details_test_id_foreign` (`test_id`),
  ADD KEY `test_details_inv_list_id_foreign` (`inv_list_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_contact_no_en_unique` (`contact_no_en`),
  ADD KEY `users_employ_id_foreign` (`employ_id`),
  ADD KEY `users_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `births`
--
ALTER TABLE `births`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deaths`
--
ALTER TABLE `deaths`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employ_basics`
--
ALTER TABLE `employ_basics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `invest_cats`
--
ALTER TABLE `invest_cats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invest_lists`
--
ALTER TABLE `invest_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `operations`
--
ALTER TABLE `operations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patient_admits`
--
ALTER TABLE `patient_admits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient_medi_cat`
--
ALTER TABLE `patient_medi_cat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_prescribe`
--
ALTER TABLE `patient_prescribe`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_prescribe_medi`
--
ALTER TABLE `patient_prescribe_medi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prescription_medis`
--
ALTER TABLE `prescription_medis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `room_cats`
--
ALTER TABLE `room_cats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `room_lists`
--
ALTER TABLE `room_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shifts`
--
ALTER TABLE `shifts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test_details`
--
ALTER TABLE `test_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_employ_id_foreign` FOREIGN KEY (`employ_id`) REFERENCES `employ_basics` (`id`),
  ADD CONSTRAINT `appointments_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Constraints for table `births`
--
ALTER TABLE `births`
  ADD CONSTRAINT `births_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `deaths`
--
ALTER TABLE `deaths`
  ADD CONSTRAINT `deaths_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `doctors_designation_id_foreign` FOREIGN KEY (`designation_id`) REFERENCES `designations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `doctors_employ_id_foreign` FOREIGN KEY (`employ_id`) REFERENCES `employ_basics` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employ_basics`
--
ALTER TABLE `employ_basics`
  ADD CONSTRAINT `employ_basics_blood_id_foreign` FOREIGN KEY (`blood_id`) REFERENCES `blood` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employ_basics_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `invest_lists`
--
ALTER TABLE `invest_lists`
  ADD CONSTRAINT `invest_lists_inv_cat_id_foreign` FOREIGN KEY (`inv_cat_id`) REFERENCES `invest_cats` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `operations`
--
ALTER TABLE `operations`
  ADD CONSTRAINT `operations_doc_ref_foreign` FOREIGN KEY (`doc_ref`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `operations_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `patients_blood_id_foreign` FOREIGN KEY (`blood_id`) REFERENCES `blood` (`id`);

--
-- Constraints for table `patient_admits`
--
ALTER TABLE `patient_admits`
  ADD CONSTRAINT `patient_admits_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`),
  ADD CONSTRAINT `patient_admits_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `room_lists` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `patient_prescribe`
--
ALTER TABLE `patient_prescribe`
  ADD CONSTRAINT `patient_prescribe_inv_list_id_foreign` FOREIGN KEY (`inv_list_id`) REFERENCES `invest_lists` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `patient_prescribe_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `patient_prescribe_medi`
--
ALTER TABLE `patient_prescribe_medi`
  ADD CONSTRAINT `patient_prescribe_medi_medicine_cat_id_foreign` FOREIGN KEY (`medicine_cat_id`) REFERENCES `patient_medi_cat` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `patient_prescribe_medi_prescribe_id_foreign` FOREIGN KEY (`prescribe_id`) REFERENCES `patient_prescribe` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD CONSTRAINT `prescriptions_app_id_foreign` FOREIGN KEY (`app_id`) REFERENCES `appointments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `prescription_medis`
--
ALTER TABLE `prescription_medis`
  ADD CONSTRAINT `prescription_medis_prescription_id_foreign` FOREIGN KEY (`prescription_id`) REFERENCES `prescriptions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `room_lists`
--
ALTER TABLE `room_lists`
  ADD CONSTRAINT `room_lists_room_cat_id_foreign` FOREIGN KEY (`room_cat_id`) REFERENCES `room_cats` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_day_id_foreign` FOREIGN KEY (`day_id`) REFERENCES `days` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `schedules_employ_id_foreign` FOREIGN KEY (`employ_id`) REFERENCES `employ_basics` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `schedules_shift_id_foreign` FOREIGN KEY (`shift_id`) REFERENCES `shifts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tests`
--
ALTER TABLE `tests`
  ADD CONSTRAINT `tests_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `test_details`
--
ALTER TABLE `test_details`
  ADD CONSTRAINT `test_details_inv_list_id_foreign` FOREIGN KEY (`inv_list_id`) REFERENCES `invest_lists` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `test_details_test_id_foreign` FOREIGN KEY (`test_id`) REFERENCES `tests` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_employ_id_foreign` FOREIGN KEY (`employ_id`) REFERENCES `employ_basics` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
