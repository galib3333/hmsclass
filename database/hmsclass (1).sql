-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2023 at 08:40 AM
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

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `patient_id`, `employ_id`, `app_date`, `serial`, `problem`, `approve`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 8, '2023-12-14', '1', 'dfdfgdfgdg', 1, 0, 6, NULL, NULL, '2023-12-18 22:05:28', '2023-12-18 22:05:28');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_requests`
--

CREATE TABLE `appointment_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `blood_id` bigint(20) UNSIGNED DEFAULT NULL,
  `details` text NOT NULL,
  `appdate` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointment_requests`
--

INSERT INTO `appointment_requests` (`id`, `department_id`, `doctor_id`, `name`, `email`, `phone`, `gender`, `blood_id`, `details`, `appdate`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 8, 'Abdur Rahim', 'ar@gmail.com', '01837898557', 'Male', 2, 'dfdfgdfgdg', '2023-12-14', 2, '2023-12-18 22:02:31', '2023-12-18 22:05:28'),
(2, 1, 8, 'f', 'ashkaiser@gmail.com', '0183757557', 'Male', 2, 'fg', '2023-12-22', 1, '2023-12-19 01:17:10', '2023-12-19 01:17:10');

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
(1, 'A+', 1, 1, NULL, NULL, '2023-12-18 21:12:11', '2023-12-18 21:12:11'),
(2, 'A-', 1, 1, NULL, NULL, '2023-12-18 21:12:17', '2023-12-18 21:12:17'),
(3, 'B+', 1, 1, NULL, NULL, '2023-12-18 21:12:23', '2023-12-18 21:12:23'),
(4, 'B-', 1, 1, NULL, NULL, '2023-12-18 21:12:31', '2023-12-18 21:12:31'),
(5, 'AB+', 1, 1, NULL, NULL, '2023-12-18 21:12:38', '2023-12-18 21:12:38'),
(6, 'AB-', 1, 1, NULL, NULL, '2023-12-18 21:12:44', '2023-12-18 21:12:44');

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
(1, 'Cardiology', 'sdfsfdsf', 1, 6, NULL, NULL, '2023-12-18 21:39:06', '2023-12-18 21:39:06'),
(2, 'Orthopedics', 'sdfsfdf', 1, 6, NULL, NULL, '2023-12-18 21:39:20', '2023-12-18 21:39:20'),
(3, 'Gynecology', 'sfsfd', 1, 6, NULL, NULL, '2023-12-18 21:39:35', '2023-12-18 21:39:35'),
(4, 'Pediatrics', 'sdfsfd', 1, 6, NULL, NULL, '2023-12-18 21:39:50', '2023-12-18 21:39:50'),
(5, 'Neurology', 'sfsf', 1, 6, NULL, NULL, '2023-12-18 21:40:04', '2023-12-18 21:40:04');

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
(1, 'Cardiologist', 'sfsfd', 1, 6, NULL, NULL, '2023-12-18 21:40:24', '2023-12-18 21:40:24'),
(2, 'Orthopedic Surgeon', 'sfsfd', 1, 6, NULL, NULL, '2023-12-18 21:40:40', '2023-12-18 21:40:40'),
(3, 'Gynecologist', 'sdfsdfsdf', 1, 6, NULL, NULL, '2023-12-18 21:40:53', '2023-12-18 21:40:53'),
(4, 'Pediatrician', 'sdfsfd', 1, 6, NULL, NULL, '2023-12-18 21:41:11', '2023-12-18 21:41:11'),
(5, 'Neurologist', 'sdfsfd', 1, 6, NULL, NULL, '2023-12-18 21:41:24', '2023-12-18 21:41:24');

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

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `employ_id`, `designation_id`, `department_id`, `biography`, `specialist`, `education`, `fees`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 7, 3, 3, 'dsfsfd', 'Women\'s Reproductive Health', 'sdfsfsf', 2000, 1, 6, NULL, NULL, '2023-12-18 21:42:13', '2023-12-18 21:42:13'),
(2, 6, 4, 4, 'sdfsdfsfd', 'Child Health', 'sfdsfd', 800, 1, 6, NULL, NULL, '2023-12-18 21:42:50', '2023-12-18 21:42:50'),
(3, 8, 1, 1, 'dsfsdf', 'Heart and Cardiovascular System', 'sdfsdf', 2000, 1, 6, 6, NULL, '2023-12-18 22:01:30', '2023-12-20 00:54:56');

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
(5, 1, 'Asadullah Al Galib', NULL, 'galib@gmail.com', '01533307176', NULL, 'Male', '1997-12-14', 3, '8591702956229.jpg', '2no Gate', '2no Gate', 1, 1, 6, NULL, '2023-12-18 21:23:49', '2023-12-18 21:31:25'),
(6, 2, 'Kamal Uddin', NULL, 'k@gmail.com', '464654', NULL, 'Male', '1991-12-13', 2, '3541702956664.jpg', 'dssdf', 'sdfsdf', 1, 6, NULL, NULL, '2023-12-18 21:31:04', '2023-12-18 21:31:04'),
(7, 2, 'Farjana Hamid', NULL, 'f@gmail.com', '018378957', NULL, 'Female', '1998-12-15', 3, '1691702956781.jpg', 'ctg', 'sfsdf', 1, 6, 6, NULL, '2023-12-18 21:33:01', '2023-12-18 21:35:15'),
(8, 2, 'Noman Uddin', NULL, 'n@gmail.com', '54454', NULL, 'Male', '2023-12-14', 5, '2251702958454.jpg', 'vcxv', 'xvcxcv', 1, 6, NULL, NULL, '2023-12-18 22:00:54', '2023-12-18 22:00:54');

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

--
-- Dumping data for table `invest_cats`
--

INSERT INTO `invest_cats` (`id`, `invset_cat_name`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Blood Tests', 1, 6, NULL, NULL, '2023-12-19 21:19:17', '2023-12-19 21:19:17'),
(2, 'Imaging', 1, 6, NULL, NULL, '2023-12-19 21:19:28', '2023-12-19 21:19:28'),
(3, 'Cardiology', 1, 6, NULL, NULL, '2023-12-19 21:19:38', '2023-12-19 21:19:38'),
(4, 'Neurology', 1, 6, NULL, NULL, '2023-12-19 21:19:48', '2023-12-19 21:19:48'),
(5, 'Gastroenterology', 1, 6, NULL, NULL, '2023-12-19 21:19:57', '2023-12-19 21:19:57'),
(6, 'Endocrinology', 1, 6, NULL, NULL, '2023-12-19 21:20:06', '2023-12-19 21:20:06'),
(7, 'Pathology', 1, 6, NULL, NULL, '2023-12-19 21:20:18', '2023-12-19 21:20:18'),
(8, 'Pulmonology', 1, 6, NULL, NULL, '2023-12-19 21:20:29', '2023-12-19 21:20:29');

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

--
-- Dumping data for table `invest_lists`
--

INSERT INTO `invest_lists` (`id`, `inv_cat_id`, `invset_name`, `description`, `price`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Complete Blood Count (CBC)', 'sdfsf', 250, 1, 6, NULL, NULL, '2023-12-19 21:21:40', '2023-12-19 21:21:40'),
(2, 1, 'Blood Glucose Test', 'ghfghfg', 300, 1, 6, NULL, NULL, '2023-12-19 21:22:00', '2023-12-19 21:22:00'),
(3, 1, 'Blood Type and Rh Factor', 'gfhfhg', 100, 1, 6, NULL, NULL, '2023-12-19 21:22:23', '2023-12-19 21:22:23'),
(4, 2, 'X-ray', 'fhfh', 1000, 1, 6, NULL, NULL, '2023-12-19 21:22:57', '2023-12-19 21:22:57'),
(5, 2, 'Magnetic Resonance Imaging (MRI)', 'ghfhg', 3000, 1, 6, NULL, NULL, '2023-12-19 21:23:21', '2023-12-19 21:23:21'),
(6, 2, 'Ultrasound', 'fghfghfh', 5000, 1, 6, NULL, NULL, '2023-12-19 21:23:52', '2023-12-19 21:23:52'),
(7, 3, 'Echocardiogram', 'fhfh', 20000, 1, 6, NULL, NULL, '2023-12-19 21:24:26', '2023-12-19 21:24:26'),
(8, 4, 'Magnetic Resonance Imaging (MRI) of the Brain', 'fghfh', 200000, 1, 6, NULL, NULL, '2023-12-19 21:24:57', '2023-12-19 21:24:57');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_11_11_115941_blood_table', 1),
(3, '2023_11_11_115942_create_roles_table', 1),
(4, '2023_11_11_115943_create_employ_basics_table', 1),
(5, '2023_11_11_115944_create_users_table', 1),
(6, '2023_11_12_043129_create_permissions_table', 1),
(7, '2023_11_18_154907_create_departments_table', 1),
(8, '2023_11_18_154908_create_designations_table', 1),
(9, '2023_11_18_154909_create_doctors_table', 1),
(10, '2023_11_18_155037_create_room_cats_table', 1),
(11, '2023_11_18_155038_create_room_lists_table', 1),
(12, '2023_11_18_155039_create_patients_table', 1),
(13, '2023_11_20_040120_create_appointments_table', 1),
(15, '2023_11_20_041304_create_invest_cats_table', 1),
(16, '2023_11_20_041342_create_invest_lists_table', 1),
(17, '2023_11_20_042341_create_patient_tests_table', 1),
(18, '2023_11_20_042342_create_patient_test_details_table', 1),
(19, '2023_11_20_042707_create_prescriptions_table', 1),
(20, '2023_11_20_042730_create_prescription_medis_table', 1),
(21, '2023_11_20_042958_create_shifts_table', 1),
(22, '2023_11_20_043042_days_table', 1),
(23, '2023_11_20_043043_create_schedules_table', 1),
(24, '2023_11_20_043233_create_births_table', 1),
(25, '2023_11_20_043249_create_deaths_table', 1),
(26, '2023_11_20_043323_create_operations_table', 1),
(27, '2023_11_20_043619_patient_prescribe_table', 1),
(28, '2023_11_20_043721_patient_medi_cat_table', 1),
(29, '2023_11_20_043722_patient_prescribe_medi_table', 1),
(30, '2023_12_10_061842_create_appointment_requests_table', 1),
(31, '2023_12_11_140022_create_patient_bills_table', 1),
(32, '2023_12_11_140154_create_patient_bill_details_table', 1),
(33, '2023_12_11_140224_create_patient_payments_table', 1),
(34, '2023_11_20_040648_create_patient_admits_table', 2);

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
  `patient_id` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_bn` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `contact_no_en` varchar(255) NOT NULL,
  `contact_no_bn` varchar(255) DEFAULT NULL,
  `present_address` text DEFAULT NULL,
  `permanent_address` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
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
(1, 'PT-2023121', 'Abdur Rahim', NULL, 'ar@gmail.com', '01837898557', NULL, NULL, NULL, NULL, NULL, 'Male', 2, 1, 6, NULL, NULL, '2023-12-18 22:05:28', '2023-12-18 22:05:28');

-- --------------------------------------------------------

--
-- Table structure for table `patient_admits`
--

CREATE TABLE `patient_admits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `husband_name` varchar(255) DEFAULT NULL,
  `marital_status` varchar(255) DEFAULT NULL,
  `doctor_ref` varchar(255) DEFAULT NULL,
  `problem` text DEFAULT NULL,
  `admit_date` date DEFAULT NULL,
  `release_date` date DEFAULT NULL,
  `room_id` bigint(20) UNSIGNED DEFAULT NULL,
  `guardian` varchar(255) DEFAULT NULL,
  `relation` varchar(255) DEFAULT NULL,
  `condition` text DEFAULT NULL,
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

INSERT INTO `patient_admits` (`id`, `patient_id`, `father_name`, `mother_name`, `husband_name`, `marital_status`, `doctor_ref`, `problem`, `admit_date`, `release_date`, `room_id`, `guardian`, `relation`, `condition`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'cvbcvb', 'cvbcvb', 'cvbcvb', 'married', 'cvbcvb', 'cvbcvb', '2023-12-04', NULL, 1, 'cvbcvb', 'cvbcv', 'vcbcvb', 1, 6, NULL, NULL, '2023-12-19 00:17:14', '2023-12-19 00:17:14');

-- --------------------------------------------------------

--
-- Table structure for table `patient_bills`
--

CREATE TABLE `patient_bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_amount` decimal(10,2) DEFAULT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `tax` decimal(10,2) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_bill_details`
--

CREATE TABLE `patient_bill_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_bill_id` bigint(20) UNSIGNED DEFAULT NULL,
  `particular` varchar(255) NOT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `patient_payments`
--

CREATE TABLE `patient_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED DEFAULT NULL,
  `date` date DEFAULT NULL,
  `admit_id` int(11) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_payments`
--

INSERT INTO `patient_payments` (`id`, `patient_id`, `date`, `admit_id`, `amount`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-12-20', 1, 200.00, '2023-12-19 21:26:04', '2023-12-19 21:26:04'),
(2, 1, '2023-12-20', 1, 200.00, '2023-12-19 21:53:34', '2023-12-19 21:53:34'),
(3, 1, '2023-12-20', 1, 200.00, '2023-12-19 21:57:35', '2023-12-19 21:57:35'),
(4, 1, '2023-12-20', 1, 220000.00, '2023-12-19 22:14:55', '2023-12-19 22:14:55');

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
-- Table structure for table `patient_tests`
--

CREATE TABLE `patient_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_price` double NOT NULL,
  `vat` double NOT NULL,
  `discount` double NOT NULL,
  `total_amount` double NOT NULL,
  `paid` double NOT NULL,
  `admit_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_tests`
--

INSERT INTO `patient_tests` (`id`, `patient_id`, `sub_price`, `vat`, `discount`, `total_amount`, `paid`, `admit_id`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 250, 15, 10, 258.75, 200, 1, 1, 6, NULL, NULL, '2023-12-19 21:26:04', '2023-12-19 21:26:04'),
(2, 1, 20000, 15, 10, 20700, 200, 1, 1, 6, NULL, NULL, '2023-12-19 21:53:34', '2023-12-19 21:53:34'),
(3, 1, 250, 5, 15, 223.125, 200, 1, 1, 6, NULL, NULL, '2023-12-19 21:57:35', '2023-12-19 21:57:35'),
(4, 1, 221000, 15, 10, 228735, 220000, 1, 1, 6, NULL, NULL, '2023-12-19 22:14:54', '2023-12-19 22:14:54');

-- --------------------------------------------------------

--
-- Table structure for table `patient_test_details`
--

CREATE TABLE `patient_test_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_test_id` bigint(20) UNSIGNED DEFAULT NULL,
  `inv_list_id` bigint(20) UNSIGNED DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_test_details`
--

INSERT INTO `patient_test_details` (`id`, `patient_test_id`, `inv_list_id`, `amount`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 250.00, '2023-12-19 21:26:04', '2023-12-19 21:26:04'),
(2, 2, 7, 20000.00, '2023-12-19 21:53:34', '2023-12-19 21:53:34'),
(3, 3, 1, 250.00, '2023-12-19 21:57:35', '2023-12-19 21:57:35'),
(4, 4, 7, 20000.00, '2023-12-19 22:14:55', '2023-12-19 22:14:55'),
(5, 4, 4, 1000.00, '2023-12-19 22:14:55', '2023-12-19 22:14:55'),
(6, 4, 8, 200000.00, '2023-12-19 22:14:55', '2023-12-19 22:14:55');

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
(7, 1, 'user.index', '2023-12-19 21:09:40', '2023-12-19 21:09:40'),
(8, 1, 'user.create', '2023-12-19 21:09:40', '2023-12-19 21:09:40'),
(9, 1, 'user.show', '2023-12-19 21:09:40', '2023-12-19 21:09:40'),
(10, 1, 'user.edit', '2023-12-19 21:09:40', '2023-12-19 21:09:40'),
(11, 1, 'user.destroy', '2023-12-19 21:09:40', '2023-12-19 21:09:40'),
(12, 1, 'role.index', '2023-12-19 21:09:40', '2023-12-19 21:09:40'),
(13, 1, 'role.create', '2023-12-19 21:09:40', '2023-12-19 21:09:40'),
(14, 1, 'role.show', '2023-12-19 21:09:40', '2023-12-19 21:09:40'),
(15, 1, 'role.edit', '2023-12-19 21:09:40', '2023-12-19 21:09:40'),
(16, 1, 'role.destroy', '2023-12-19 21:09:40', '2023-12-19 21:09:40'),
(17, 1, 'permission.list', '2023-12-19 21:09:40', '2023-12-19 21:09:40'),
(18, 1, 'patients.index', '2023-12-19 21:09:40', '2023-12-19 21:09:40'),
(19, 1, 'patients.create', '2023-12-19 21:09:40', '2023-12-19 21:09:40'),
(20, 1, 'patients.show', '2023-12-19 21:09:40', '2023-12-19 21:09:40'),
(21, 1, 'patients.edit', '2023-12-19 21:09:40', '2023-12-19 21:09:40'),
(22, 1, 'patients.destroy', '2023-12-19 21:09:40', '2023-12-19 21:09:40'),
(23, 1, 'employees.index', '2023-12-19 21:09:40', '2023-12-19 21:09:40'),
(24, 1, 'employees.create', '2023-12-19 21:09:40', '2023-12-19 21:09:40'),
(25, 1, 'employees.show', '2023-12-19 21:09:40', '2023-12-19 21:09:40'),
(26, 1, 'employees.edit', '2023-12-19 21:09:40', '2023-12-19 21:09:40'),
(27, 1, 'employees.destroy', '2023-12-19 21:09:40', '2023-12-19 21:09:40'),
(28, 1, 'blood.index', '2023-12-19 21:09:40', '2023-12-19 21:09:40'),
(29, 1, 'blood.create', '2023-12-19 21:09:40', '2023-12-19 21:09:40'),
(30, 1, 'blood.show', '2023-12-19 21:09:41', '2023-12-19 21:09:41'),
(31, 1, 'blood.edit', '2023-12-19 21:09:41', '2023-12-19 21:09:41'),
(32, 1, 'blood.destroy', '2023-12-19 21:09:41', '2023-12-19 21:09:41'),
(33, 1, 'department.index', '2023-12-19 21:09:41', '2023-12-19 21:09:41'),
(34, 1, 'department.create', '2023-12-19 21:09:41', '2023-12-19 21:09:41'),
(35, 1, 'department.show', '2023-12-19 21:09:41', '2023-12-19 21:09:41'),
(36, 1, 'department.edit', '2023-12-19 21:09:41', '2023-12-19 21:09:41'),
(37, 1, 'department.destroy', '2023-12-19 21:09:41', '2023-12-19 21:09:41'),
(38, 1, 'designation.index', '2023-12-19 21:09:41', '2023-12-19 21:09:41'),
(39, 1, 'designation.create', '2023-12-19 21:09:41', '2023-12-19 21:09:41'),
(40, 1, 'designation.show', '2023-12-19 21:09:41', '2023-12-19 21:09:41'),
(41, 1, 'designation.edit', '2023-12-19 21:09:41', '2023-12-19 21:09:41'),
(42, 1, 'designation.destroy', '2023-12-19 21:09:41', '2023-12-19 21:09:41'),
(43, 1, 'doctor.index', '2023-12-19 21:09:41', '2023-12-19 21:09:41'),
(44, 1, 'doctor.create', '2023-12-19 21:09:41', '2023-12-19 21:09:41'),
(45, 1, 'doctor.show', '2023-12-19 21:09:41', '2023-12-19 21:09:41'),
(46, 1, 'doctor.edit', '2023-12-19 21:09:41', '2023-12-19 21:09:41'),
(47, 1, 'doctor.destroy', '2023-12-19 21:09:41', '2023-12-19 21:09:41'),
(48, 1, 'roomCat.index', '2023-12-19 21:09:41', '2023-12-19 21:09:41'),
(49, 1, 'roomCat.create', '2023-12-19 21:09:41', '2023-12-19 21:09:41'),
(50, 1, 'roomCat.show', '2023-12-19 21:09:41', '2023-12-19 21:09:41'),
(51, 1, 'roomCat.edit', '2023-12-19 21:09:42', '2023-12-19 21:09:42'),
(52, 1, 'roomCat.destroy', '2023-12-19 21:09:42', '2023-12-19 21:09:42'),
(53, 1, 'roomList.index', '2023-12-19 21:09:42', '2023-12-19 21:09:42'),
(54, 1, 'roomList.create', '2023-12-19 21:09:42', '2023-12-19 21:09:42'),
(55, 1, 'roomList.show', '2023-12-19 21:09:42', '2023-12-19 21:09:42'),
(56, 1, 'roomList.edit', '2023-12-19 21:09:42', '2023-12-19 21:09:42'),
(57, 1, 'roomList.destroy', '2023-12-19 21:09:42', '2023-12-19 21:09:42'),
(58, 1, 'pAdmit.index', '2023-12-19 21:09:42', '2023-12-19 21:09:42'),
(59, 1, 'pAdmit.create', '2023-12-19 21:09:42', '2023-12-19 21:09:42'),
(60, 1, 'pAdmit.show', '2023-12-19 21:09:42', '2023-12-19 21:09:42'),
(61, 1, 'pAdmit.edit', '2023-12-19 21:09:42', '2023-12-19 21:09:42'),
(62, 1, 'pAdmit.destroy', '2023-12-19 21:09:42', '2023-12-19 21:09:42'),
(63, 1, 'shift.index', '2023-12-19 21:09:42', '2023-12-19 21:09:42'),
(64, 1, 'shift.create', '2023-12-19 21:09:42', '2023-12-19 21:09:42'),
(65, 1, 'shift.show', '2023-12-19 21:09:42', '2023-12-19 21:09:42'),
(66, 1, 'shift.edit', '2023-12-19 21:09:42', '2023-12-19 21:09:42'),
(67, 1, 'shift.destroy', '2023-12-19 21:09:42', '2023-12-19 21:09:42'),
(68, 1, 'day.index', '2023-12-19 21:09:42', '2023-12-19 21:09:42'),
(69, 1, 'day.create', '2023-12-19 21:09:42', '2023-12-19 21:09:42'),
(70, 1, 'day.show', '2023-12-19 21:09:42', '2023-12-19 21:09:42'),
(71, 1, 'day.edit', '2023-12-19 21:09:42', '2023-12-19 21:09:42'),
(72, 1, 'day.destroy', '2023-12-19 21:09:42', '2023-12-19 21:09:42'),
(73, 1, 'schedule.index', '2023-12-19 21:09:42', '2023-12-19 21:09:42'),
(74, 1, 'schedule.create', '2023-12-19 21:09:42', '2023-12-19 21:09:42'),
(75, 1, 'schedule.show', '2023-12-19 21:09:42', '2023-12-19 21:09:42'),
(76, 1, 'schedule.edit', '2023-12-19 21:09:42', '2023-12-19 21:09:42'),
(77, 1, 'schedule.destroy', '2023-12-19 21:09:42', '2023-12-19 21:09:42'),
(78, 1, 'investCat.index', '2023-12-19 21:09:42', '2023-12-19 21:09:42'),
(79, 1, 'investCat.create', '2023-12-19 21:09:42', '2023-12-19 21:09:42'),
(80, 1, 'investCat.show', '2023-12-19 21:09:42', '2023-12-19 21:09:42'),
(81, 1, 'investCat.edit', '2023-12-19 21:09:42', '2023-12-19 21:09:42'),
(82, 1, 'investCat.destroy', '2023-12-19 21:09:42', '2023-12-19 21:09:42'),
(83, 1, 'invest.index', '2023-12-19 21:09:42', '2023-12-19 21:09:42'),
(84, 1, 'invest.create', '2023-12-19 21:09:42', '2023-12-19 21:09:42'),
(85, 1, 'invest.show', '2023-12-19 21:09:42', '2023-12-19 21:09:42'),
(86, 1, 'invest.edit', '2023-12-19 21:09:43', '2023-12-19 21:09:43'),
(87, 1, 'invest.destroy', '2023-12-19 21:09:43', '2023-12-19 21:09:43'),
(88, 1, 'testDetail.index', '2023-12-19 21:09:43', '2023-12-19 21:09:43'),
(89, 1, 'testDetail.create', '2023-12-19 21:09:43', '2023-12-19 21:09:43'),
(90, 1, 'testDetail.show', '2023-12-19 21:09:43', '2023-12-19 21:09:43'),
(91, 1, 'testDetail.edit', '2023-12-19 21:09:43', '2023-12-19 21:09:43'),
(92, 1, 'testDetail.destroy', '2023-12-19 21:09:43', '2023-12-19 21:09:43'),
(93, 1, 'patienttest.index', '2023-12-19 21:09:43', '2023-12-19 21:09:43'),
(94, 1, 'patienttest.create', '2023-12-19 21:09:43', '2023-12-19 21:09:43'),
(95, 1, 'patienttest.show', '2023-12-19 21:09:43', '2023-12-19 21:09:43'),
(96, 1, 'patienttest.edit', '2023-12-19 21:09:43', '2023-12-19 21:09:43'),
(97, 1, 'patienttest.destroy', '2023-12-19 21:09:43', '2023-12-19 21:09:43'),
(98, 1, 'birth.index', '2023-12-19 21:09:43', '2023-12-19 21:09:43'),
(99, 1, 'birth.create', '2023-12-19 21:09:43', '2023-12-19 21:09:43'),
(100, 1, 'birth.show', '2023-12-19 21:09:43', '2023-12-19 21:09:43'),
(101, 1, 'birth.edit', '2023-12-19 21:09:43', '2023-12-19 21:09:43'),
(102, 1, 'birth.destroy', '2023-12-19 21:09:43', '2023-12-19 21:09:43'),
(103, 2, 'doctor.index', '2023-12-19 21:11:16', '2023-12-19 21:11:16'),
(104, 2, 'doctor.show', '2023-12-19 21:11:16', '2023-12-19 21:11:16'),
(105, 2, 'pAdmit.index', '2023-12-19 21:11:16', '2023-12-19 21:11:16'),
(106, 2, 'pAdmit.show', '2023-12-19 21:11:16', '2023-12-19 21:11:16'),
(107, 2, 'patienttest.index', '2023-12-19 21:11:16', '2023-12-19 21:11:16'),
(108, 2, 'patienttest.show', '2023-12-19 21:11:16', '2023-12-19 21:11:16');

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
(1, 'Super Admin', 'superadmin', 1, NULL, NULL, NULL, '2023-12-18 00:57:13', NULL),
(2, 'Doctor', 'doctor', 1, NULL, NULL, NULL, '2023-12-18 00:57:13', NULL),
(3, 'Receptionist', 'receptionist', 1, NULL, NULL, NULL, '2023-12-18 00:57:13', NULL),
(4, 'Accountant', 'accountant', 1, NULL, NULL, NULL, '2023-12-18 00:57:13', NULL);

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
(1, 'AC', 1, 6, NULL, NULL, '2023-12-18 21:35:28', '2023-12-18 21:35:28'),
(2, 'Non-AC', 1, 6, NULL, NULL, '2023-12-18 21:35:44', '2023-12-18 21:35:44');

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
(1, 1, 1, 1, 'sfsfd', 4, 2000, 1, 6, NULL, NULL, '2023-12-18 21:36:29', '2023-12-18 21:36:29'),
(2, 2, 2, 1, 'sfdsfd', 4, 1000, 1, 6, NULL, NULL, '2023-12-18 21:37:08', '2023-12-18 21:37:08');

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
(6, 5, 1, 'Asadullah Al Galib', 'galib@gmail.com', '01533307176', '$2y$12$8rTPEfTBb59o1Q2g.iz6LehBlTBBFh9rMJUThUWeikTXOQrLUs5xa', 'en', 1, 1, 1, 6, NULL, '2023-12-18 21:23:50', '2023-12-20 00:58:55', NULL),
(7, 6, 2, 'Kamal Uddin', 'k@gmail.com', '464654', '$2y$12$rwbIpJ2pkG6UITibjd5MEOaD7E.4RAHtb65H9nYXSRehqgO.A8hhC', 'en', 0, 1, 6, NULL, NULL, '2023-12-18 21:31:04', '2023-12-18 21:31:04', NULL),
(8, 7, 2, 'Farjana Hamid', 'f@gmail.com', '018378957', '$2y$12$JQ9g5fqeck0nI2cAyKGXEu99sEI/vUFgTyFfS9oqEE63sJ5BIOthy', 'en', 0, 1, 6, NULL, NULL, '2023-12-18 21:33:02', '2023-12-18 21:33:02', NULL),
(9, 8, 2, 'Noman Uddin', 'n@gmail.com', '54454', '$2y$12$39GgLlKRTNHeVMx98zzwwevEoziVsvn8HfN8KXuBMu.dM.AB.fylG', 'en', 0, 1, 6, NULL, NULL, '2023-12-18 22:00:54', '2023-12-18 22:00:54', NULL);

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
-- Indexes for table `appointment_requests`
--
ALTER TABLE `appointment_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointment_requests_department_id_foreign` (`department_id`),
  ADD KEY `appointment_requests_doctor_id_foreign` (`doctor_id`);

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
-- Indexes for table `patient_bills`
--
ALTER TABLE `patient_bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_bills_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `patient_bill_details`
--
ALTER TABLE `patient_bill_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_bill_details_patient_bill_id_foreign` (`patient_bill_id`);

--
-- Indexes for table `patient_medi_cat`
--
ALTER TABLE `patient_medi_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_payments`
--
ALTER TABLE `patient_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_payments_patient_id_foreign` (`patient_id`);

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
-- Indexes for table `patient_tests`
--
ALTER TABLE `patient_tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_tests_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `patient_test_details`
--
ALTER TABLE `patient_test_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_test_details_patient_test_id_foreign` (`patient_test_id`),
  ADD KEY `patient_test_details_inv_list_id_foreign` (`inv_list_id`);

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
  ADD UNIQUE KEY `roles_name_unique` (`name`),
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment_requests`
--
ALTER TABLE `appointment_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employ_basics`
--
ALTER TABLE `employ_basics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `invest_cats`
--
ALTER TABLE `invest_cats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `invest_lists`
--
ALTER TABLE `invest_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `operations`
--
ALTER TABLE `operations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient_admits`
--
ALTER TABLE `patient_admits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient_bills`
--
ALTER TABLE `patient_bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_bill_details`
--
ALTER TABLE `patient_bill_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_medi_cat`
--
ALTER TABLE `patient_medi_cat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_payments`
--
ALTER TABLE `patient_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `patient_tests`
--
ALTER TABLE `patient_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patient_test_details`
--
ALTER TABLE `patient_test_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `room_cats`
--
ALTER TABLE `room_cats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `room_lists`
--
ALTER TABLE `room_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
-- Constraints for table `appointment_requests`
--
ALTER TABLE `appointment_requests`
  ADD CONSTRAINT `appointment_requests_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `appointment_requests_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `employ_basics` (`id`);

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
-- Constraints for table `patient_bills`
--
ALTER TABLE `patient_bills`
  ADD CONSTRAINT `patient_bills_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `patient_bill_details`
--
ALTER TABLE `patient_bill_details`
  ADD CONSTRAINT `patient_bill_details_patient_bill_id_foreign` FOREIGN KEY (`patient_bill_id`) REFERENCES `patient_bills` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `patient_payments`
--
ALTER TABLE `patient_payments`
  ADD CONSTRAINT `patient_payments_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `patient_tests`
--
ALTER TABLE `patient_tests`
  ADD CONSTRAINT `patient_tests_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `patient_test_details`
--
ALTER TABLE `patient_test_details`
  ADD CONSTRAINT `patient_test_details_inv_list_id_foreign` FOREIGN KEY (`inv_list_id`) REFERENCES `invest_lists` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `patient_test_details_patient_test_id_foreign` FOREIGN KEY (`patient_test_id`) REFERENCES `patient_tests` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_employ_id_foreign` FOREIGN KEY (`employ_id`) REFERENCES `employ_basics` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
