-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 15, 2022 at 07:00 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alkhirat537`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

DROP TABLE IF EXISTS `activities`;
CREATE TABLE IF NOT EXISTS `activities` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `activity_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plan_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `monthly_cost` int(11) DEFAULT NULL,
  `target_class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `management_id` int(10) UNSIGNED NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_done` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `activities_management_id_foreign` (`management_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

DROP TABLE IF EXISTS `activity_log`;
CREATE TABLE IF NOT EXISTS `activity_log` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `log_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `causer_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `properties` json DEFAULT NULL,
  `batch_uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subject` (`subject_type`,`subject_id`),
  KEY `causer` (`causer_type`,`causer_id`),
  KEY `activity_log_log_name_index` (`log_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `beneficiaries`
--

DROP TABLE IF EXISTS `beneficiaries`;
CREATE TABLE IF NOT EXISTS `beneficiaries` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_info_id` bigint(20) UNSIGNED NOT NULL,
  `membership_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `id_number` int(11) DEFAULT NULL,
  `id_date` date DEFAULT NULL,
  `id_occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education_level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `major` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house_ownership` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_members` int(11) DEFAULT NULL,
  `family_male_members` int(11) DEFAULT NULL,
  `family_female_members` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank_in_family` int(11) DEFAULT NULL,
  `nationality_id` int(10) UNSIGNED DEFAULT NULL,
  `father_occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filling_form_date` date DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `health_status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `health_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `koshak_sega_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `koshak_etimad` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `koshak_vehicle_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `koshak_toreed_office` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `koshak_driver_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `koshak_mobile_number` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `beneficiaries_user_info_id_foreign` (`user_info_id`),
  KEY `beneficiaries_nationality_id_foreign` (`nationality_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `beneficiaries`
--

INSERT INTO `beneficiaries` (`id`, `user_info_id`, `membership_id`, `date_of_birth`, `id_number`, `id_date`, `id_occupation`, `marital_status`, `education_level`, `major`, `address`, `house_ownership`, `house_type`, `family_members`, `family_male_members`, `family_female_members`, `rank_in_family`, `nationality_id`, `father_occupation`, `filling_form_date`, `full_name`, `health_status`, `health_description`, `koshak_sega_number`, `koshak_etimad`, `koshak_vehicle_type`, `koshak_toreed_office`, `koshak_driver_name`, `koshak_mobile_number`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 1, 'WBR01474444', '2000-06-08', 102896587, '2022-06-01', 'طالب جامعي', 'أعزب', 'جامعي', 'اقتصاد', 'المنصور', 'ايجار', 'عمارة', 5, 3, '2', 3, 1, 'سائق', NULL, 'محمد علي موسى سعيد', 'سليم', 'لايوجد', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `beneficiary_services`
--

DROP TABLE IF EXISTS `beneficiary_services`;
CREATE TABLE IF NOT EXISTS `beneficiary_services` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `beneficiary_id` int(10) UNSIGNED NOT NULL,
  `service_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `beneficiary_services_beneficiary_id_foreign` (`beneficiary_id`),
  KEY `beneficiary_services_service_id_foreign` (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

DROP TABLE IF EXISTS `certificates`;
CREATE TABLE IF NOT EXISTS `certificates` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `beneficiary_id` int(10) UNSIGNED NOT NULL,
  `certificate_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certificate_date` date DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `certificates_beneficiary_id_foreign` (`beneficiary_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `beneficiary_id`, `certificate_name`, `certificate_date`, `note`, `attachment`, `created_at`, `updated_at`) VALUES
(1, 2, 'شهادة لغة انجليزية', '2022-06-01', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contributiontypes`
--

DROP TABLE IF EXISTS `contributiontypes`;
CREATE TABLE IF NOT EXISTS `contributiontypes` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `contributiontypes`
--

INSERT INTO `contributiontypes` (`id`, `name`, `created_at`, `updated_at`, `note`) VALUES
(1, 'المساهمة في التأسيس', '2022-06-14 13:28:37', '2022-06-14 13:28:43', ''),
(2, 'المساهمة في التشغيل', '2022-06-14 13:28:49', '2022-06-14 13:28:55', ''),
(3, 'الزيارات المنزلية', '2022-06-14 13:28:58', '2022-06-14 13:29:01', ''),
(4, 'الاستضافة في مقر الوقف', '2022-06-14 13:29:03', '2022-06-14 13:29:06', '');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

DROP TABLE IF EXISTS `districts`;
CREATE TABLE IF NOT EXISTS `districts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `distric` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `distric`, `city`, `created_at`, `updated_at`) VALUES
(1, 'المنصور', 'مكة', NULL, NULL),
(2, 'النزهة', 'مكة', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

DROP TABLE IF EXISTS `experiences`;
CREATE TABLE IF NOT EXISTS `experiences` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `beneficiary_id` int(10) UNSIGNED NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `experiences_beneficiary_id_foreign` (`beneficiary_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `beneficiary_id`, `job_title`, `company`, `start_date`, `end_date`, `note`, `attachment`, `created_at`, `updated_at`) VALUES
(5, 2, 'موظف استقبال', 'فندق دار التوحيد', '2022-06-01', '2022-06-14', '', NULL, NULL, NULL),
(6, 2, 'مرجع حسابات', 'وقف الخيرات', '2022-05-01', '2022-06-01', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `influencetypes`
--

DROP TABLE IF EXISTS `influencetypes`;
CREATE TABLE IF NOT EXISTS `influencetypes` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `influencetypes`
--

INSERT INTO `influencetypes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'مؤثر', NULL, NULL),
(2, 'قوي', NULL, NULL),
(3, 'داعم محايد', NULL, NULL),
(4, 'نشط مقاوم', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `managements`
--

DROP TABLE IF EXISTS `managements`;
CREATE TABLE IF NOT EXISTS `managements` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_info_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `managements_user_info_id_foreign` (`user_info_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `managements`
--

INSERT INTO `managements` (`id`, `user_info_id`, `title`, `note`, `created_at`, `updated_at`) VALUES
(1, 4, 'مدير عام', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `membershiptypes`
--

DROP TABLE IF EXISTS `membershiptypes`;
CREATE TABLE IF NOT EXISTS `membershiptypes` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `membershiptypes`
--

INSERT INTO `membershiptypes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'مشترك', NULL, NULL),
(2, 'التميز', NULL, NULL),
(3, 'الألفة', NULL, NULL),
(4, 'البركة', NULL, NULL),
(5, 'الإدارة الإشرافية', NULL, NULL),
(6, 'الإدارة التنفيذية', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_22_144618_create_permission_tables', 1),
(5, '2021_04_14_044507_create_settings_table', 1),
(6, '2021_04_15_044508_create_districts_table', 1),
(7, '2021_06_15_022916_create_user_infos_table', 1),
(8, '2021_06_23_041411_create_activity_log_table', 1),
(9, '2021_06_23_041412_add_event_column_to_activity_log_table', 1),
(10, '2021_06_23_041413_add_batch_uuid_column_to_activity_log_table', 1),
(11, '2021_11_04_200820_add_api_token_column', 1),
(12, '2022_05_28_202706_create_Beneficiaries_table', 1),
(13, '2022_05_28_202706_create_ContributionTypes_table', 1),
(14, '2022_05_28_202706_create_Experiences_table', 1),
(15, '2022_05_28_202706_create_Payments_table', 1),
(16, '2022_05_28_202706_create_Skills_table', 1),
(17, '2022_05_28_202706_create_Supporters_table', 1),
(18, '2022_05_28_202706_create_activities_table', 1),
(19, '2022_05_28_202706_create_beneficiary_services_table', 1),
(20, '2022_05_28_202706_create_certificates_table', 1),
(21, '2022_05_28_202706_create_influenceTypes_table', 1),
(22, '2022_05_28_202706_create_managements_table', 1),
(23, '2022_05_28_202706_create_membershipTypes_table', 1),
(24, '2022_05_28_202706_create_nationalities_table', 1),
(25, '2022_05_28_202706_create_necessities_table', 1),
(26, '2022_05_28_202706_create_organizations_table', 1),
(27, '2022_05_28_202706_create_paymentMethods_table', 1),
(28, '2022_05_28_202706_create_projects_table', 1),
(29, '2022_05_28_202706_create_referrals_table', 1),
(30, '2022_05_28_202706_create_serviceTypes_table', 1),
(31, '2022_05_28_202706_create_services_table', 1),
(32, '2022_05_28_202706_create_specialties_table', 1),
(33, '2022_05_28_202706_create_supporter_contributions_table', 1),
(34, '2022_05_28_202706_create_supporter_influences_table', 1),
(35, '2022_05_28_202706_create_volunteer_logs_table', 1),
(36, '2022_05_28_202706_create_volunteers_table', 1),
(37, '2022_05_28_202716_create_foreign_keys', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(3, 'App\\Models\\User', 1),
(4, 'App\\Models\\User', 2),
(4, 'App\\Models\\User', 3),
(5, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4);

-- --------------------------------------------------------

--
-- Table structure for table `nationalities`
--

DROP TABLE IF EXISTS `nationalities`;
CREATE TABLE IF NOT EXISTS `nationalities` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `nationalities`
--

INSERT INTO `nationalities` (`id`, `name`, `flag`, `created_at`, `updated_at`) VALUES
(1, 'عماني', NULL, NULL, NULL),
(2, 'مصري', NULL, NULL, NULL),
(3, 'سعودي', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `necessities`
--

DROP TABLE IF EXISTS `necessities`;
CREATE TABLE IF NOT EXISTS `necessities` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `beneficiary_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `necessities_beneficiary_id_foreign` (`beneficiary_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `necessities`
--

INSERT INTO `necessities` (`id`, `beneficiary_id`, `name`, `note`, `created_at`, `updated_at`) VALUES
(1, 2, 'احتياجات تعليمية', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

DROP TABLE IF EXISTS `organizations`;
CREATE TABLE IF NOT EXISTS `organizations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(700) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manager` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`id`, `name`, `manager`, `email`, `description`, `phone`, `website`, `mobile`, `note`, `created_at`, `updated_at`) VALUES
(1, 'مجمع البلد الأمين', 'حامد سالم', 'hamed@salem.hwa', 'مجمع خيري بمكة المكرمة', '123456678', 'mojama.com', '123456789', 'للتعاون في الدورات التدريبية', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `paymentmethods`
--

DROP TABLE IF EXISTS `paymentmethods`;
CREATE TABLE IF NOT EXISTS `paymentmethods` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `paymentmethods`
--

INSERT INTO `paymentmethods` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'تحويل بنكي', NULL, NULL, NULL),
(2, 'كاش', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `supporter_id` int(10) UNSIGNED NOT NULL,
  `amount` double(8,2) NOT NULL DEFAULT '0.00',
  `paymentMethod_id` int(10) UNSIGNED NOT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `payments_supporter_id_foreign` (`supporter_id`),
  KEY `payments_paymentmethod_id_foreign` (`paymentMethod_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `management_id` int(10) UNSIGNED NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date NOT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `projects_management_id_foreign` (`management_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `referrals`
--

DROP TABLE IF EXISTS `referrals`;
CREATE TABLE IF NOT EXISTS `referrals` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` enum('user','form','community','other') COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referrer_user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `referrals`
--

INSERT INTO `referrals` (`id`, `type`, `value`, `referrer_user_id`, `created_at`, `updated_at`) VALUES
(1, 'form', 'النموذج', NULL, NULL, NULL),
(2, 'other', 'اونلاين', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'web', NULL, NULL),
(2, 'admin', 'web', NULL, NULL),
(3, 'beneficiary', 'web', NULL, NULL),
(4, 'supporter', 'web', NULL, NULL),
(5, 'volunteer', 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `serviceType_id` int(10) UNSIGNED NOT NULL,
  `service_name` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `organization_id` int(10) UNSIGNED NOT NULL,
  `attachment` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `services_servicetype_id_foreign` (`serviceType_id`),
  KEY `services_organization_id_foreign` (`organization_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `serviceType_id`, `service_name`, `description`, `quantity`, `organization_id`, `attachment`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 1, 'دورة تعليم مهارات التواصل', 'مهارات التواصل الفعال', 30, 1, NULL, NULL, NULL, NULL),
(4, 2, 'توزيع 100 راس غنم', 'ذبائح مقدمة من الجمعية', 100, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `servicetypes`
--

DROP TABLE IF EXISTS `servicetypes`;
CREATE TABLE IF NOT EXISTS `servicetypes` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriptoin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `servicetypes`
--

INSERT INTO `servicetypes` (`id`, `name`, `descriptoin`, `created_at`, `updated_at`) VALUES
(1, 'تعليمية', 'خدمات تعليمية', NULL, NULL),
(2, 'اغاثية', 'خدمات اغاثية', NULL, NULL),
(3, 'طبية', 'خدمات طبية', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `settings_key_index` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `skill_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beneficiary_id` int(10) UNSIGNED NOT NULL,
  `skill_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill_certificate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skill_date` date DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `skills_beneficiary_id_foreign` (`beneficiary_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill_name`, `beneficiary_id`, `skill_level`, `skill_certificate`, `skill_date`, `note`, `attachment`, `created_at`, `updated_at`) VALUES
(1, 'التواصل الفعال', 2, 'ممتاز', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'لغة انجليزية', 2, 'ممتازة', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `specialties`
--

DROP TABLE IF EXISTS `specialties`;
CREATE TABLE IF NOT EXISTS `specialties` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `specialties`
--

INSERT INTO `specialties` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'هندسة نظم', NULL, NULL),
(2, 'إعلام', NULL, NULL),
(3, 'عسكري', NULL, NULL),
(4, 'مراقب مخزون', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `supporters`
--

DROP TABLE IF EXISTS `supporters`;
CREATE TABLE IF NOT EXISTS `supporters` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_info_id` bigint(20) UNSIGNED NOT NULL,
  `membershipType_id` int(10) UNSIGNED NOT NULL,
  `membership_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialty_id` int(10) UNSIGNED NOT NULL,
  `referral_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `bank_account` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `supporters_user_info_id_foreign` (`user_info_id`),
  KEY `supporters_membershiptype_id_foreign` (`membershipType_id`),
  KEY `supporters_specialty_id_foreign` (`specialty_id`),
  KEY `supporters_referral_id_foreign` (`referral_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `supporters`
--

INSERT INTO `supporters` (`id`, `user_info_id`, `membershipType_id`, `membership_id`, `description`, `specialty_id`, `referral_id`, `created_at`, `updated_at`, `deleted_at`, `bank_account`, `work`) VALUES
(1, 3, 2, 'MEM258522', 'عضو داعم في الوقف', 2, 1, NULL, NULL, NULL, NULL, 'جامعة ام القرى'),
(2, 2, 2, 'MEM258523', 'عضو داعم في الوقف', 3, 1, NULL, NULL, NULL, NULL, 'الحرس الوطني');

-- --------------------------------------------------------

--
-- Table structure for table `supporter_contributions`
--

DROP TABLE IF EXISTS `supporter_contributions`;
CREATE TABLE IF NOT EXISTS `supporter_contributions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `contributionType_id` int(10) UNSIGNED NOT NULL,
  `supporter_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `supporter_contributions_contributiontype_id_foreign` (`contributionType_id`),
  KEY `supporter_contributions_supporter_id_foreign` (`supporter_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `supporter_contributions`
--

INSERT INTO `supporter_contributions` (`id`, `contributionType_id`, `supporter_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `supporter_influences`
--

DROP TABLE IF EXISTS `supporter_influences`;
CREATE TABLE IF NOT EXISTS `supporter_influences` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `supporter_id` int(10) UNSIGNED NOT NULL,
  `influenceType_id` int(10) UNSIGNED NOT NULL,
  `status` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `supporter_influences_supporter_id_foreign` (`supporter_id`),
  KEY `supporter_influences_influencetype_id_foreign` (`influenceType_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
   `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_token` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_api_token_unique` (`api_token`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `api_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'محمد', 'موسى علي', 'demo@demo.com', NULL, '$2y$10$/TPsXYLnARvvOL5lD0vPRezxsVIl4Q0vPDHWYuBrr9yGEWWyh8AKO', NULL, NULL, NULL, NULL),
(2, 'وليد', 'عبدالحميد عبدالغني', 'demo2@demo2.com', NULL, '$2y$10$/TPsXYLnARvvOL5lD0vPRezxsVIl4Q0vPDHWYuBrr9yGEWWyh8AKO', NULL, NULL, NULL, NULL),
(3, 'طاهر', 'شعبان صالح', 'demo3@demo3.com', NULL, '$2y$10$/TPsXYLnARvvOL5lD0vPRezxsVIl4Q0vPDHWYuBrr9yGEWWyh8AKO', NULL, NULL, NULL, NULL),
(4, 'ياسر', 'سفيان محمد', 'demo4@demo4.com', NULL, '$2y$10$/TPsXYLnARvvOL5lD0vPRezxsVIl4Q0vPDHWYuBrr9yGEWWyh8AKO', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_infos`
--

DROP TABLE IF EXISTS `user_infos`;
CREATE TABLE IF NOT EXISTS `user_infos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` int(10) UNSIGNED DEFAULT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timezone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `communication` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marketing` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_infos_user_id_foreign` (`user_id`),
  KEY `user_infos_district_id_foreign` (`district_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `user_infos`
--

INSERT INTO `user_infos` (`id`, `user_id`, `district_id`, `avatar`, `company`, `phone`, `website`, `country`, `language`, `timezone`, `currency`, `communication`, `marketing`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, 'شركة فيس بوك', '12345678', 'www.website.com', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 2, 1, NULL, 'شركة قوقل', '1234567899', 'www.website2.com', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 3, 1, NULL, 'شركة الامارات', '1234567', 'www.website3.com', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 4, 2, NULL, 'شركة السعودية', '1234564447', 'www.website4.com', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------


--
-- Table structure for table `volunteers`
--

DROP TABLE IF EXISTS `volunteers`;
CREATE TABLE IF NOT EXISTS `volunteers` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_info_id` bigint(20) UNSIGNED NOT NULL,
  `volunteer_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `volunteers_user_info_id_foreign` (`user_info_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `volunteers`
--

INSERT INTO `volunteers` (`id`, `user_info_id`, `volunteer_type`, `note`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 'تطوع علمي', 'متطوع داعم', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `volunteer_logs`
--

DROP TABLE IF EXISTS `volunteer_logs`;
CREATE TABLE IF NOT EXISTS `volunteer_logs` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `volunteer_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hours` int(11) DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `volunteer_logs_volunteer_id_foreign` (`volunteer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `volunteer_logs`
--

INSERT INTO `volunteer_logs` (`id`, `volunteer_id`, `name`, `hours`, `note`, `created_at`, `updated_at`) VALUES
(1, 1, 'دورة لطلاب المدارس في اختبار قياس القدرات', 10, NULL, NULL, NULL),
(2, 1, 'تدريب الطلاب على اجتياز اختبار الايلتس', 7, NULL, NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Dumping data for table `supporter_influences`
--

INSERT INTO `supporter_influences` (`id`, `supporter_id`, `influenceType_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 0, NULL,NULL),
(2, 2, 4, 0, NULL,NULL);

-- --------------------------------------------------------

--
-- Structure de la table `suggestions`
--

CREATE TABLE `suggestions` (
  `id` int(11) NOT NULL,
  `user_info_id_sender` bigint(20) UNSIGNED NOT NULL,
  `user_info_id_receiver` bigint(20) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `message` text NOT NULL,
  `attachment` text DEFAULT NULL,
  `urgent` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `suggestions`
--

INSERT INTO `suggestions` (`id`, `user_info_id_sender`, `user_info_id_receiver`, `title`, `message`, `attachment`, `urgent`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 2, 4, 'موضوع الاقتراح', '<p dir=\"rtl\" style=\"margin-bottom: 15px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; white-space: normal;\">لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق \"ليتراسيت\" (Letraset) البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل \"ألدوس بايج مايكر\" (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم</p>', NULL, 1, '2022-08-21 13:49:10', '2022-08-21 13:49:10', NULL),
(7, 4, 2, 'موضوع رسالة جديدة', '<div style=\"text-align: justify;\"><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; white-space: normal; background-color: var(--kt-input-bg);\">خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور \"ريتشارد ماك لينتوك\" (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي \"consectetur\"، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب \"حول أقاصي الخير والشر\" (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم \"Lorem ipsum dolor sit amet..\" يأتي من سطر في القسم 1.20.32 من هذا الكتاب.</span><br></div><div style=\"text-align: justify;\"><div><br></div></div>', NULL, 1, '2022-08-21 13:50:42', '2022-08-21 13:50:42', NULL);

--
-- Index pour les tables déchargées
--

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_management_id_foreign` FOREIGN KEY (`management_id`) REFERENCES `managements` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `beneficiaries`
--
ALTER TABLE `beneficiaries`
  ADD CONSTRAINT `beneficiaries_nationality_id_foreign` FOREIGN KEY (`nationality_id`) REFERENCES `nationalities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `beneficiaries_user_info_id_foreign` FOREIGN KEY (`user_info_id`) REFERENCES `user_infos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `beneficiary_services`
--
ALTER TABLE `beneficiary_services`
  ADD CONSTRAINT `beneficiary_services_beneficiary_id_foreign` FOREIGN KEY (`beneficiary_id`) REFERENCES `beneficiaries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `beneficiary_services_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `certificates`
--
ALTER TABLE `certificates`
  ADD CONSTRAINT `certificates_beneficiary_id_foreign` FOREIGN KEY (`beneficiary_id`) REFERENCES `beneficiaries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `experiences`
--
ALTER TABLE `experiences`
  ADD CONSTRAINT `experiences_beneficiary_id_foreign` FOREIGN KEY (`beneficiary_id`) REFERENCES `beneficiaries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `managements`
--
ALTER TABLE `managements`
  ADD CONSTRAINT `managements_user_info_id_foreign` FOREIGN KEY (`user_info_id`) REFERENCES `user_infos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `necessities`
--
ALTER TABLE `necessities`
  ADD CONSTRAINT `necessities_beneficiary_id_foreign` FOREIGN KEY (`beneficiary_id`) REFERENCES `beneficiaries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_paymentmethod_id_foreign` FOREIGN KEY (`paymentMethod_id`) REFERENCES `paymentmethods` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payments_supporter_id_foreign` FOREIGN KEY (`supporter_id`) REFERENCES `supporters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_management_id_foreign` FOREIGN KEY (`management_id`) REFERENCES `managements` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_organization_id_foreign` FOREIGN KEY (`organization_id`) REFERENCES `organizations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `services_servicetype_id_foreign` FOREIGN KEY (`serviceType_id`) REFERENCES `servicetypes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_beneficiary_id_foreign` FOREIGN KEY (`beneficiary_id`) REFERENCES `beneficiaries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `supporters`
--
ALTER TABLE `supporters`
  ADD CONSTRAINT `supporters_membershiptype_id_foreign` FOREIGN KEY (`membershipType_id`) REFERENCES `membershiptypes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `supporters_referral_id_foreign` FOREIGN KEY (`referral_id`) REFERENCES `referrals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `supporters_specialty_id_foreign` FOREIGN KEY (`specialty_id`) REFERENCES `specialties` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `supporters_user_info_id_foreign` FOREIGN KEY (`user_info_id`) REFERENCES `user_infos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `supporter_contributions`
--
ALTER TABLE `supporter_contributions`
  ADD CONSTRAINT `supporter_contributions_contributiontype_id_foreign` FOREIGN KEY (`contributionType_id`) REFERENCES `contributiontypes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `supporter_contributions_supporter_id_foreign` FOREIGN KEY (`supporter_id`) REFERENCES `supporters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `supporter_influences`
--
ALTER TABLE `supporter_influences`
  ADD CONSTRAINT `supporter_influences_influencetype_id_foreign` FOREIGN KEY (`influenceType_id`) REFERENCES `influencetypes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `supporter_influences_supporter_id_foreign` FOREIGN KEY (`supporter_id`) REFERENCES `supporters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_infos`
--
ALTER TABLE `user_infos`
  ADD CONSTRAINT `user_infos_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_infos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD CONSTRAINT `volunteers_user_info_id_foreign` FOREIGN KEY (`user_info_id`) REFERENCES `user_infos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `volunteer_logs`
--
ALTER TABLE `volunteer_logs`
  ADD CONSTRAINT `volunteer_logs_volunteer_id_foreign` FOREIGN KEY (`volunteer_id`) REFERENCES `volunteers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;


--
-- Index pour la table `suggestions`
--
ALTER TABLE `suggestions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_info_id_sender` (`user_info_id_sender`),
  ADD KEY `user_info_id_receiver` (`user_info_id_receiver`);

--
-- AUTO_INCREMENT pour la table `suggestions`
--
ALTER TABLE `suggestions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour la table `suggestions`
--
ALTER TABLE `suggestions`
  ADD CONSTRAINT `suggestions_ibfk_1` FOREIGN KEY (`user_info_id_receiver`) REFERENCES `user_infos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `suggestions_ibfk_2` FOREIGN KEY (`user_info_id_sender`) REFERENCES `user_infos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

ALTER TABLE `beneficiaries` CHANGE `created_at` `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
