-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2025 at 11:28 PM
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
-- Database: `sama`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `phone`, `type`, `date`, `time`, `notes`, `created_at`, `updated_at`) VALUES
(2, 'تست', '01002431895', 'اشعة رنين', '2025-04-29', 'After the afternoon', NULL, '2025-04-20 21:44:41', '2025-04-20 21:44:41'),
(3, 'احمد محمد', '01002431895', 'اشعة رنين', '2025-04-27', 'evening', NULL, '2025-04-23 13:16:17', '2025-04-23 13:16:17');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `visits` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `visits`, `created_at`, `updated_at`) VALUES
(1, '2048174471403567fe393347053.jpg', 0, '2025-04-15 08:47:15', '2025-04-15 08:47:15'),
(12, '2048174471403567fe393347053.jpg', 0, '2025-04-20 19:47:01', '2025-04-20 19:47:01'),
(13, '2048174471403567fe393347053.jpg', 0, '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(14, '2048174471403567fe393347053.jpg', 0, '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(15, '2048174471403567fe393347053.jpg', 0, '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(16, '2048174471403567fe393347053.jpg', 0, '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(17, '2048174471403567fe393347053.jpg', 0, '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(18, '2048174471403567fe393347053.jpg', 0, '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(19, '2048174471403567fe393347053.jpg', 0, '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(20, '2048174471403567fe393347053.jpg', 0, '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(21, '2048174471403567fe393347053.jpg', 0, '2025-04-20 19:47:02', '2025-04-20 19:47:02');

-- --------------------------------------------------------

--
-- Table structure for table `blog_translations`
--

CREATE TABLE `blog_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `body` text DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `locale` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_translations`
--

INSERT INTO `blog_translations` (`id`, `blog_id`, `title`, `body`, `slug`, `meta_keywords`, `meta_description`, `locale`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lorem ipsum dolor sit amet', '<p>Lorem ipsum dolor sit amet, impetus commune intellegat mea eu, ius at vocibus principes. Has te noster integre numquam, stet nusquam mel no. Ea habeo causae pri, ei usu illum detraxit pertinacia. Diceret necessitatibus mel te, eos molestiae scriptorem ex. Qui exerci quidam neglegentur no, habeo reque euismod cu usu. Ea usu ipsum offendit scaevola, audiam pertinax no qui, ad mea ridens feugiat suscipiantur. Ex diceret vivendum qui, ea his error regione praesent.</p>', 'lorem-ipsum-dolor-sit-amet', 'Lorem,ipsum', 'Lorem ipsum dolor sit amet, impetus commune intellegat mea eu,', 'en', '2025-04-15 08:47:15', '2025-04-15 09:14:10'),
(2, 1, 'من إعمار بتطويق بالسيطرة بحث 1', '<p style=\"text-align:right\">من إعمار بتطويق بالسيطرة بحث. به، ماذا الدّفاع الإقتصادي ان, دون فبعد الوزراء لم. بين لهذه والحزب إذ, كانتا الحدود تشيكوسلوفاكيا به، و. أن مسؤولية بالمحور ذلك, به، والروسية المتّبعة ولكسمبورغ و. لهيمنة العالمية جهة كل, مع الأجل انتباه العسكري فعل. ثم ذات سياسة أعمال الحيلولة, عل إختار وتنامت الجنوبي فصل, وفي إذ الصفحة واقتصار. تم بعض غرّة، ويعزى, كلا هو مقاطعة ديسمبر واقتصار.</p>', 'mn-aaamar-bttoyk-balsytr-bhth-1', 'بالسيطرة,بتطويق', 'ن إعمار بتطويق بالسيطرة بحث. به، ماذا الدّفاع الإقتصادي ان, دون فبعد الوزراء لم. بين لهذه والحزب إ', 'ar', '2025-04-15 08:47:15', '2025-04-15 09:14:10'),
(13, 12, 'Lorem ipsum dolor sit amet0', '<p>Lorem ipsum dolor sit amet, impetus commune intellegat mea eu, ius at vocibus principes. Has te noster integre numquam, stet nusquam mel no. Ea habeo causae pri, ei usu illum detraxit pertinacia. Diceret necessitatibus mel te, eos molestiae scriptorem ex. Qui exerci quidam neglegentur no, habeo reque euismod cu usu. Ea usu ipsum offendit scaevola, audiam pertinax no qui, ad mea ridens feugiat suscipiantur. Ex diceret vivendum qui, ea his error regione praesent.</p>', 'lorem-ipsum-dolor-sit-amet0', 'Lorem,ipsum', 'Lorem ipsum dolor sit amet, impetus commune intellegat mea eu,', 'en', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(14, 12, 'من إعمار بتطويق بالسيطرة بحث 10', '<p style=\"text-align:right\">من إعمار بتطويق بالسيطرة بحث. به، ماذا الدّفاع الإقتصادي ان, دون فبعد الوزراء لم. بين لهذه والحزب إذ, كانتا الحدود تشيكوسلوفاكيا به، و. أن مسؤولية بالمحور ذلك, به، والروسية المتّبعة ولكسمبورغ و. لهيمنة العالمية جهة كل, مع الأجل انتباه العسكري فعل. ثم ذات سياسة أعمال الحيلولة, عل إختار وتنامت الجنوبي فصل, وفي إذ الصفحة واقتصار. تم بعض غرّة، ويعزى, كلا هو مقاطعة ديسمبر واقتصار.</p>', 'mn-aaamar-bttoyk-balsytr-bhth-10', 'بالسيطرة,بتطويق', 'ن إعمار بتطويق بالسيطرة بحث. به، ماذا الدّفاع الإقتصادي ان, دون فبعد الوزراء لم. بين لهذه والحزب إ', 'ar', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(15, 13, 'من إعمار بتطويق بالسيطرة بحث 11', '<p style=\"text-align:right\">من إعمار بتطويق بالسيطرة بحث. به، ماذا الدّفاع الإقتصادي ان, دون فبعد الوزراء لم. بين لهذه والحزب إذ, كانتا الحدود تشيكوسلوفاكيا به، و. أن مسؤولية بالمحور ذلك, به، والروسية المتّبعة ولكسمبورغ و. لهيمنة العالمية جهة كل, مع الأجل انتباه العسكري فعل. ثم ذات سياسة أعمال الحيلولة, عل إختار وتنامت الجنوبي فصل, وفي إذ الصفحة واقتصار. تم بعض غرّة، ويعزى, كلا هو مقاطعة ديسمبر واقتصار.</p>', 'mn-aaamar-bttoyk-balsytr-bhth-11', 'بالسيطرة,بتطويق', 'ن إعمار بتطويق بالسيطرة بحث. به، ماذا الدّفاع الإقتصادي ان, دون فبعد الوزراء لم. بين لهذه والحزب إ', 'ar', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(16, 13, 'Lorem ipsum dolor sit amet1', '<p>Lorem ipsum dolor sit amet, impetus commune intellegat mea eu, ius at vocibus principes. Has te noster integre numquam, stet nusquam mel no. Ea habeo causae pri, ei usu illum detraxit pertinacia. Diceret necessitatibus mel te, eos molestiae scriptorem ex. Qui exerci quidam neglegentur no, habeo reque euismod cu usu. Ea usu ipsum offendit scaevola, audiam pertinax no qui, ad mea ridens feugiat suscipiantur. Ex diceret vivendum qui, ea his error regione praesent.</p>', 'lorem-ipsum-dolor-sit-amet1', 'Lorem,ipsum', 'Lorem ipsum dolor sit amet, impetus commune intellegat mea eu,', 'en', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(17, 14, 'من إعمار بتطويق بالسيطرة بحث 12', '<p style=\"text-align:right\">من إعمار بتطويق بالسيطرة بحث. به، ماذا الدّفاع الإقتصادي ان, دون فبعد الوزراء لم. بين لهذه والحزب إذ, كانتا الحدود تشيكوسلوفاكيا به، و. أن مسؤولية بالمحور ذلك, به، والروسية المتّبعة ولكسمبورغ و. لهيمنة العالمية جهة كل, مع الأجل انتباه العسكري فعل. ثم ذات سياسة أعمال الحيلولة, عل إختار وتنامت الجنوبي فصل, وفي إذ الصفحة واقتصار. تم بعض غرّة، ويعزى, كلا هو مقاطعة ديسمبر واقتصار.</p>', 'mn-aaamar-bttoyk-balsytr-bhth-12', 'بالسيطرة,بتطويق', 'ن إعمار بتطويق بالسيطرة بحث. به، ماذا الدّفاع الإقتصادي ان, دون فبعد الوزراء لم. بين لهذه والحزب إ', 'ar', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(18, 14, 'Lorem ipsum dolor sit amet2', '<p>Lorem ipsum dolor sit amet, impetus commune intellegat mea eu, ius at vocibus principes. Has te noster integre numquam, stet nusquam mel no. Ea habeo causae pri, ei usu illum detraxit pertinacia. Diceret necessitatibus mel te, eos molestiae scriptorem ex. Qui exerci quidam neglegentur no, habeo reque euismod cu usu. Ea usu ipsum offendit scaevola, audiam pertinax no qui, ad mea ridens feugiat suscipiantur. Ex diceret vivendum qui, ea his error regione praesent.</p>', 'lorem-ipsum-dolor-sit-amet2', 'Lorem,ipsum', 'Lorem ipsum dolor sit amet, impetus commune intellegat mea eu,', 'en', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(19, 15, 'من إعمار بتطويق بالسيطرة بحث 13', '<p style=\"text-align:right\">من إعمار بتطويق بالسيطرة بحث. به، ماذا الدّفاع الإقتصادي ان, دون فبعد الوزراء لم. بين لهذه والحزب إذ, كانتا الحدود تشيكوسلوفاكيا به، و. أن مسؤولية بالمحور ذلك, به، والروسية المتّبعة ولكسمبورغ و. لهيمنة العالمية جهة كل, مع الأجل انتباه العسكري فعل. ثم ذات سياسة أعمال الحيلولة, عل إختار وتنامت الجنوبي فصل, وفي إذ الصفحة واقتصار. تم بعض غرّة، ويعزى, كلا هو مقاطعة ديسمبر واقتصار.</p>', 'mn-aaamar-bttoyk-balsytr-bhth-13', 'بالسيطرة,بتطويق', 'ن إعمار بتطويق بالسيطرة بحث. به، ماذا الدّفاع الإقتصادي ان, دون فبعد الوزراء لم. بين لهذه والحزب إ', 'ar', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(20, 15, 'Lorem ipsum dolor sit amet3', '<p>Lorem ipsum dolor sit amet, impetus commune intellegat mea eu, ius at vocibus principes. Has te noster integre numquam, stet nusquam mel no. Ea habeo causae pri, ei usu illum detraxit pertinacia. Diceret necessitatibus mel te, eos molestiae scriptorem ex. Qui exerci quidam neglegentur no, habeo reque euismod cu usu. Ea usu ipsum offendit scaevola, audiam pertinax no qui, ad mea ridens feugiat suscipiantur. Ex diceret vivendum qui, ea his error regione praesent.</p>', 'lorem-ipsum-dolor-sit-amet3', 'Lorem,ipsum', 'Lorem ipsum dolor sit amet, impetus commune intellegat mea eu,', 'en', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(21, 16, 'من إعمار بتطويق بالسيطرة بحث 14', '<p style=\"text-align:right\">من إعمار بتطويق بالسيطرة بحث. به، ماذا الدّفاع الإقتصادي ان, دون فبعد الوزراء لم. بين لهذه والحزب إذ, كانتا الحدود تشيكوسلوفاكيا به، و. أن مسؤولية بالمحور ذلك, به، والروسية المتّبعة ولكسمبورغ و. لهيمنة العالمية جهة كل, مع الأجل انتباه العسكري فعل. ثم ذات سياسة أعمال الحيلولة, عل إختار وتنامت الجنوبي فصل, وفي إذ الصفحة واقتصار. تم بعض غرّة، ويعزى, كلا هو مقاطعة ديسمبر واقتصار.</p>', 'mn-aaamar-bttoyk-balsytr-bhth-14', 'بالسيطرة,بتطويق', 'ن إعمار بتطويق بالسيطرة بحث. به، ماذا الدّفاع الإقتصادي ان, دون فبعد الوزراء لم. بين لهذه والحزب إ', 'ar', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(22, 16, 'Lorem ipsum dolor sit amet4', '<p>Lorem ipsum dolor sit amet, impetus commune intellegat mea eu, ius at vocibus principes. Has te noster integre numquam, stet nusquam mel no. Ea habeo causae pri, ei usu illum detraxit pertinacia. Diceret necessitatibus mel te, eos molestiae scriptorem ex. Qui exerci quidam neglegentur no, habeo reque euismod cu usu. Ea usu ipsum offendit scaevola, audiam pertinax no qui, ad mea ridens feugiat suscipiantur. Ex diceret vivendum qui, ea his error regione praesent.</p>', 'lorem-ipsum-dolor-sit-amet4', 'Lorem,ipsum', 'Lorem ipsum dolor sit amet, impetus commune intellegat mea eu,', 'en', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(23, 17, 'من إعمار بتطويق بالسيطرة بحث 15', '<p style=\"text-align:right\">من إعمار بتطويق بالسيطرة بحث. به، ماذا الدّفاع الإقتصادي ان, دون فبعد الوزراء لم. بين لهذه والحزب إذ, كانتا الحدود تشيكوسلوفاكيا به، و. أن مسؤولية بالمحور ذلك, به، والروسية المتّبعة ولكسمبورغ و. لهيمنة العالمية جهة كل, مع الأجل انتباه العسكري فعل. ثم ذات سياسة أعمال الحيلولة, عل إختار وتنامت الجنوبي فصل, وفي إذ الصفحة واقتصار. تم بعض غرّة، ويعزى, كلا هو مقاطعة ديسمبر واقتصار.</p>', 'mn-aaamar-bttoyk-balsytr-bhth-15', 'بالسيطرة,بتطويق', 'ن إعمار بتطويق بالسيطرة بحث. به، ماذا الدّفاع الإقتصادي ان, دون فبعد الوزراء لم. بين لهذه والحزب إ', 'ar', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(24, 17, 'Lorem ipsum dolor sit amet5', '<p>Lorem ipsum dolor sit amet, impetus commune intellegat mea eu, ius at vocibus principes. Has te noster integre numquam, stet nusquam mel no. Ea habeo causae pri, ei usu illum detraxit pertinacia. Diceret necessitatibus mel te, eos molestiae scriptorem ex. Qui exerci quidam neglegentur no, habeo reque euismod cu usu. Ea usu ipsum offendit scaevola, audiam pertinax no qui, ad mea ridens feugiat suscipiantur. Ex diceret vivendum qui, ea his error regione praesent.</p>', 'lorem-ipsum-dolor-sit-amet5', 'Lorem,ipsum', 'Lorem ipsum dolor sit amet, impetus commune intellegat mea eu,', 'en', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(25, 18, 'من إعمار بتطويق بالسيطرة بحث 16', '<p style=\"text-align:right\">من إعمار بتطويق بالسيطرة بحث. به، ماذا الدّفاع الإقتصادي ان, دون فبعد الوزراء لم. بين لهذه والحزب إذ, كانتا الحدود تشيكوسلوفاكيا به، و. أن مسؤولية بالمحور ذلك, به، والروسية المتّبعة ولكسمبورغ و. لهيمنة العالمية جهة كل, مع الأجل انتباه العسكري فعل. ثم ذات سياسة أعمال الحيلولة, عل إختار وتنامت الجنوبي فصل, وفي إذ الصفحة واقتصار. تم بعض غرّة، ويعزى, كلا هو مقاطعة ديسمبر واقتصار.</p>', 'mn-aaamar-bttoyk-balsytr-bhth-16', 'بالسيطرة,بتطويق', 'ن إعمار بتطويق بالسيطرة بحث. به، ماذا الدّفاع الإقتصادي ان, دون فبعد الوزراء لم. بين لهذه والحزب إ', 'ar', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(26, 18, 'Lorem ipsum dolor sit amet6', '<p>Lorem ipsum dolor sit amet, impetus commune intellegat mea eu, ius at vocibus principes. Has te noster integre numquam, stet nusquam mel no. Ea habeo causae pri, ei usu illum detraxit pertinacia. Diceret necessitatibus mel te, eos molestiae scriptorem ex. Qui exerci quidam neglegentur no, habeo reque euismod cu usu. Ea usu ipsum offendit scaevola, audiam pertinax no qui, ad mea ridens feugiat suscipiantur. Ex diceret vivendum qui, ea his error regione praesent.</p>', 'lorem-ipsum-dolor-sit-amet6', 'Lorem,ipsum', 'Lorem ipsum dolor sit amet, impetus commune intellegat mea eu,', 'en', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(27, 19, 'من إعمار بتطويق بالسيطرة بحث 17', '<p style=\"text-align:right\">من إعمار بتطويق بالسيطرة بحث. به، ماذا الدّفاع الإقتصادي ان, دون فبعد الوزراء لم. بين لهذه والحزب إذ, كانتا الحدود تشيكوسلوفاكيا به، و. أن مسؤولية بالمحور ذلك, به، والروسية المتّبعة ولكسمبورغ و. لهيمنة العالمية جهة كل, مع الأجل انتباه العسكري فعل. ثم ذات سياسة أعمال الحيلولة, عل إختار وتنامت الجنوبي فصل, وفي إذ الصفحة واقتصار. تم بعض غرّة، ويعزى, كلا هو مقاطعة ديسمبر واقتصار.</p>', 'mn-aaamar-bttoyk-balsytr-bhth-17', 'بالسيطرة,بتطويق', 'ن إعمار بتطويق بالسيطرة بحث. به، ماذا الدّفاع الإقتصادي ان, دون فبعد الوزراء لم. بين لهذه والحزب إ', 'ar', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(28, 19, 'Lorem ipsum dolor sit amet7', '<p>Lorem ipsum dolor sit amet, impetus commune intellegat mea eu, ius at vocibus principes. Has te noster integre numquam, stet nusquam mel no. Ea habeo causae pri, ei usu illum detraxit pertinacia. Diceret necessitatibus mel te, eos molestiae scriptorem ex. Qui exerci quidam neglegentur no, habeo reque euismod cu usu. Ea usu ipsum offendit scaevola, audiam pertinax no qui, ad mea ridens feugiat suscipiantur. Ex diceret vivendum qui, ea his error regione praesent.</p>', 'lorem-ipsum-dolor-sit-amet7', 'Lorem,ipsum', 'Lorem ipsum dolor sit amet, impetus commune intellegat mea eu,', 'en', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(29, 20, 'من إعمار بتطويق بالسيطرة بحث 18', '<p style=\"text-align:right\">من إعمار بتطويق بالسيطرة بحث. به، ماذا الدّفاع الإقتصادي ان, دون فبعد الوزراء لم. بين لهذه والحزب إذ, كانتا الحدود تشيكوسلوفاكيا به، و. أن مسؤولية بالمحور ذلك, به، والروسية المتّبعة ولكسمبورغ و. لهيمنة العالمية جهة كل, مع الأجل انتباه العسكري فعل. ثم ذات سياسة أعمال الحيلولة, عل إختار وتنامت الجنوبي فصل, وفي إذ الصفحة واقتصار. تم بعض غرّة، ويعزى, كلا هو مقاطعة ديسمبر واقتصار.</p>', 'mn-aaamar-bttoyk-balsytr-bhth-18', 'بالسيطرة,بتطويق', 'ن إعمار بتطويق بالسيطرة بحث. به، ماذا الدّفاع الإقتصادي ان, دون فبعد الوزراء لم. بين لهذه والحزب إ', 'ar', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(30, 20, 'Lorem ipsum dolor sit amet8', '<p>Lorem ipsum dolor sit amet, impetus commune intellegat mea eu, ius at vocibus principes. Has te noster integre numquam, stet nusquam mel no. Ea habeo causae pri, ei usu illum detraxit pertinacia. Diceret necessitatibus mel te, eos molestiae scriptorem ex. Qui exerci quidam neglegentur no, habeo reque euismod cu usu. Ea usu ipsum offendit scaevola, audiam pertinax no qui, ad mea ridens feugiat suscipiantur. Ex diceret vivendum qui, ea his error regione praesent.</p>', 'lorem-ipsum-dolor-sit-amet8', 'Lorem,ipsum', 'Lorem ipsum dolor sit amet, impetus commune intellegat mea eu,', 'en', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(31, 21, 'من إعمار بتطويق بالسيطرة بحث 19', '<p style=\"text-align:right\">من إعمار بتطويق بالسيطرة بحث. به، ماذا الدّفاع الإقتصادي ان, دون فبعد الوزراء لم. بين لهذه والحزب إذ, كانتا الحدود تشيكوسلوفاكيا به، و. أن مسؤولية بالمحور ذلك, به، والروسية المتّبعة ولكسمبورغ و. لهيمنة العالمية جهة كل, مع الأجل انتباه العسكري فعل. ثم ذات سياسة أعمال الحيلولة, عل إختار وتنامت الجنوبي فصل, وفي إذ الصفحة واقتصار. تم بعض غرّة، ويعزى, كلا هو مقاطعة ديسمبر واقتصار.</p>', 'mn-aaamar-bttoyk-balsytr-bhth-19', 'بالسيطرة,بتطويق', 'ن إعمار بتطويق بالسيطرة بحث. به، ماذا الدّفاع الإقتصادي ان, دون فبعد الوزراء لم. بين لهذه والحزب إ', 'ar', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(32, 21, 'Lorem ipsum dolor sit amet9', '<p>Lorem ipsum dolor sit amet, impetus commune intellegat mea eu, ius at vocibus principes. Has te noster integre numquam, stet nusquam mel no. Ea habeo causae pri, ei usu illum detraxit pertinacia. Diceret necessitatibus mel te, eos molestiae scriptorem ex. Qui exerci quidam neglegentur no, habeo reque euismod cu usu. Ea usu ipsum offendit scaevola, audiam pertinax no qui, ad mea ridens feugiat suscipiantur. Ex diceret vivendum qui, ea his error regione praesent.</p>', 'lorem-ipsum-dolor-sit-amet9', 'Lorem,ipsum', 'Lorem ipsum dolor sit amet, impetus commune intellegat mea eu,', 'en', '2025-04-20 19:47:02', '2025-04-20 19:47:02');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone_1` varchar(50) DEFAULT NULL,
  `phone_2` varchar(50) DEFAULT NULL,
  `location_url` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `image`, `created_at`, `updated_at`, `phone_1`, `phone_2`, `location_url`) VALUES
(1, '3179174463779967fd0f6700319.jpg', '2025-04-14 11:36:39', '2025-04-19 15:49:41', '0210101111', '012255555', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `branch_translations`
--

CREATE TABLE `branch_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `locale` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branch_translations`
--

INSERT INTO `branch_translations` (`id`, `branch_id`, `name`, `locale`, `created_at`, `updated_at`, `address`) VALUES
(1, 1, 'toukh branch 2', 'en', '2025-04-14 11:36:39', '2025-04-19 15:50:05', '10 abaas elakaad st nasr city cairo'),
(2, 1, 'فرع طوخ 2', 'ar', '2025-04-14 11:36:39', '2025-04-19 15:50:05', '10 ش عباس العقاد مدينة نصر القاهرة');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'تست', '102546978', 'mm@gmail.com', 'تست', '2025-04-19 22:55:04', '2025-04-19 22:55:04');

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contracts`
--

INSERT INTO `contracts` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '4806174470994367fe2937419c2.webp', '2025-04-15 07:37:23', '2025-04-15 07:39:03'),
(2, '3627174470995567fe29431a122.webp', '2025-04-15 07:39:15', '2025-04-15 07:39:15');

-- --------------------------------------------------------

--
-- Table structure for table `contract_translations`
--

CREATE TABLE `contract_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contract_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `locale` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contract_translations`
--

INSERT INTO `contract_translations` (`id`, `contract_id`, `title`, `locale`, `created_at`, `updated_at`) VALUES
(1, 2, 'niqbah mohameen', 'en', '2025-04-15 08:18:50', '2025-04-15 08:18:50'),
(2, 2, 'نقابة المحامين', 'ar', '2025-04-15 08:18:50', '2025-04-15 08:18:50'),
(3, 1, 'niqbah sydlah', 'en', '2025-04-15 08:19:24', '2025-04-15 08:19:24'),
(4, 1, 'نقابة الصيادلة', 'ar', '2025-04-15 08:19:24', '2025-04-15 08:19:24');

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `created_at`, `updated_at`) VALUES
(1, '2025-04-15 07:48:15', '2025-04-15 07:48:15'),
(13, '2025-04-20 19:47:01', '2025-04-20 19:47:01'),
(14, '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(15, '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(16, '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(17, '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(18, '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(19, '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(20, '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(21, '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(22, '2025-04-20 19:47:02', '2025-04-20 19:47:02');

-- --------------------------------------------------------

--
-- Table structure for table `faq_translations`
--

CREATE TABLE `faq_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `faq_id` bigint(20) UNSIGNED DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `locale` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq_translations`
--

INSERT INTO `faq_translations` (`id`, `faq_id`, `question`, `answer`, `locale`, `created_at`, `updated_at`) VALUES
(1, 1, 'question 1 question 1 question 1 11', 'question 1 question 1 question 1  question 1 question 1 question 1  question 1 question 1 question 1', 'en', '2025-04-15 07:48:15', '2025-04-15 07:48:36'),
(2, 1, 'السؤال الاول السؤال الاول 1', 'السؤال الاول السؤال الاول  السؤال الاول السؤال الاول  السؤال الاول السؤال الاول', 'ar', '2025-04-15 07:48:15', '2025-04-15 07:48:36'),
(13, 13, 'question 1 question 1 question 1 110', 'question 1 question 1 question 1  question 1 question 1 question 1  question 1 question 1 question 1', 'en', '2025-04-20 19:47:01', '2025-04-20 19:47:01'),
(14, 13, 'السؤال الاول السؤال الاول 10', 'السؤال الاول السؤال الاول  السؤال الاول السؤال الاول  السؤال الاول السؤال الاول', 'ar', '2025-04-20 19:47:01', '2025-04-20 19:47:01'),
(15, 14, 'السؤال الاول السؤال الاول 11', 'السؤال الاول السؤال الاول  السؤال الاول السؤال الاول  السؤال الاول السؤال الاول', 'ar', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(16, 14, 'question 1 question 1 question 1 111', 'question 1 question 1 question 1  question 1 question 1 question 1  question 1 question 1 question 1', 'en', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(17, 15, 'السؤال الاول السؤال الاول 12', 'السؤال الاول السؤال الاول  السؤال الاول السؤال الاول  السؤال الاول السؤال الاول', 'ar', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(18, 15, 'question 1 question 1 question 1 112', 'question 1 question 1 question 1  question 1 question 1 question 1  question 1 question 1 question 1', 'en', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(19, 16, 'السؤال الاول السؤال الاول 13', 'السؤال الاول السؤال الاول  السؤال الاول السؤال الاول  السؤال الاول السؤال الاول', 'ar', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(20, 16, 'question 1 question 1 question 1 113', 'question 1 question 1 question 1  question 1 question 1 question 1  question 1 question 1 question 1', 'en', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(21, 17, 'السؤال الاول السؤال الاول 14', 'السؤال الاول السؤال الاول  السؤال الاول السؤال الاول  السؤال الاول السؤال الاول', 'ar', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(22, 17, 'question 1 question 1 question 1 114', 'question 1 question 1 question 1  question 1 question 1 question 1  question 1 question 1 question 1', 'en', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(23, 18, 'السؤال الاول السؤال الاول 15', 'السؤال الاول السؤال الاول  السؤال الاول السؤال الاول  السؤال الاول السؤال الاول', 'ar', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(24, 18, 'question 1 question 1 question 1 115', 'question 1 question 1 question 1  question 1 question 1 question 1  question 1 question 1 question 1', 'en', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(25, 19, 'السؤال الاول السؤال الاول 16', 'السؤال الاول السؤال الاول  السؤال الاول السؤال الاول  السؤال الاول السؤال الاول', 'ar', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(26, 19, 'question 1 question 1 question 1 116', 'question 1 question 1 question 1  question 1 question 1 question 1  question 1 question 1 question 1', 'en', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(27, 20, 'السؤال الاول السؤال الاول 17', 'السؤال الاول السؤال الاول  السؤال الاول السؤال الاول  السؤال الاول السؤال الاول', 'ar', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(28, 20, 'question 1 question 1 question 1 117', 'question 1 question 1 question 1  question 1 question 1 question 1  question 1 question 1 question 1', 'en', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(29, 21, 'السؤال الاول السؤال الاول 18', 'السؤال الاول السؤال الاول  السؤال الاول السؤال الاول  السؤال الاول السؤال الاول', 'ar', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(30, 21, 'question 1 question 1 question 1 118', 'question 1 question 1 question 1  question 1 question 1 question 1  question 1 question 1 question 1', 'en', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(31, 22, 'السؤال الاول السؤال الاول 19', 'السؤال الاول السؤال الاول  السؤال الاول السؤال الاول  السؤال الاول السؤال الاول', 'ar', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(32, 22, 'question 1 question 1 question 1 119', 'question 1 question 1 question 1  question 1 question 1 question 1  question 1 question 1 question 1', 'en', '2025-04-20 19:47:02', '2025-04-20 19:47:02');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_04_13_101210_create_settings_table', 1),
(6, '2025_04_13_101244_create_setting_translations_table', 1),
(7, '2025_04_13_101255_create_testimonials_table', 1),
(8, '2025_04_13_101405_create_services_table', 1),
(9, '2025_04_13_101410_create_service_translations_table', 1),
(10, '2025_04_13_101430_create_branches_table', 1),
(11, '2025_04_13_101437_create_branch_translations_table', 1),
(12, '2025_04_13_101521_create_steps_table', 1),
(13, '2025_04_13_101526_create_step_translations_table', 1),
(14, '2025_04_13_101550_create_faqs_table', 1),
(15, '2025_04_13_101555_create_faq_translations_table', 1),
(16, '2025_04_13_101656_create_contacts_table', 1),
(17, '2025_04_13_101801_create_blogs_table', 1),
(18, '2025_04_13_101807_create_blog_translations_table', 1),
(19, '2025_04_13_101918_create_contracts_table', 1),
(20, '2025_04_13_101950_create_appointments_table', 1),
(21, '2025_04_13_103937_create_testimonial_translations_table', 1),
(22, '2014_10_12_100000_create_password_resets_table', 2),
(23, '2025_04_14_133859_add_new_cols_to_branches', 2),
(24, '2025_04_15_101437_create_contract_translations_table', 3),
(25, '2025_04_15_111723_create_packages_table', 4),
(26, '2025_04_15_111733_create_package_translations_table', 4),
(27, '2025_04_19_161416_add_cols_to_settings', 5),
(28, '2025_04_19_162636_add_cols_to_setting_translations', 6),
(29, '2025_04_19_174609_add_cols_to_branch_translations', 7),
(30, '2025_04_21_000047_create_why_choose_us_table', 8),
(31, '2025_04_21_000130_create_why_choose_us_translations_table', 8),
(32, '2025_04_21_000215_add_new_cols_to_settings', 8),
(33, '2025_04_21_000224_add_new_cols_to_setting_translations', 8),
(34, '2025_04_23_144050_create_permission_tables', 9),
(35, '2025_04_23_211530_add_price_to_packages', 10);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(3, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `image`, `created_at`, `updated_at`, `price`) VALUES
(1, '1522174471697367fe44adb5bdd.svg', '2025-04-15 09:36:13', '2025-04-15 09:36:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `package_translations`
--

CREATE TABLE `package_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `list` text DEFAULT NULL,
  `locale` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_translations`
--

INSERT INTO `package_translations` (`id`, `package_id`, `title`, `list`, `locale`, `created_at`, `updated_at`) VALUES
(1, 1, 'package 1', 'test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1,tets2 tet tets2 tet tets2 tettets2 tet tets2 tettets2 tet', 'en', '2025-04-15 09:36:14', '2025-04-15 09:38:52'),
(2, 1, 'باقة 1', 'تجربة تجربة تجربة تجربة,تجربة 2 تجربة 2 تجربة 2 تجربة 2', 'ar', '2025-04-15 09:36:14', '2025-04-15 09:38:52');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `permission_monitor` varchar(255) NOT NULL,
  `permission_group` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `permission_monitor`, `permission_group`, `created_at`, `updated_at`) VALUES
(1, 'list services', 'web', 'services', 'settings', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(2, 'add service', 'web', 'services', 'settings', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(3, 'edit service', 'web', 'services', 'settings', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(4, 'delete service', 'web', 'services', 'settings', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(5, 'list branches', 'web', 'branches', 'settings', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(6, 'add branch', 'web', 'branches', 'settings', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(7, 'edit branch', 'web', 'branches', 'settings', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(8, 'delete branch', 'web', 'branches', 'settings', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(9, 'list steps', 'web', 'steps', 'settings', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(10, 'add step', 'web', 'steps', 'settings', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(11, 'edit step', 'web', 'steps', 'settings', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(12, 'delete step', 'web', 'steps', 'settings', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(13, 'list faqs', 'web', 'faqs', 'settings', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(14, 'add faq', 'web', 'faqs', 'settings', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(15, 'edit faq', 'web', 'faqs', 'settings', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(16, 'delete faq', 'web', 'faqs', 'settings', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(17, 'list testimonials', 'web', 'testimonials', 'settings', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(18, 'add testimonial', 'web', 'testimonials', 'settings', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(19, 'edit testimonial', 'web', 'testimonials', 'settings', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(20, 'delete testimonial', 'web', 'testimonials', 'settings', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(21, 'list contracts', 'web', 'contracts', 'settings', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(22, 'add contract', 'web', 'contracts', 'settings', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(23, 'edit contract', 'web', 'contracts', 'settings', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(24, 'delete contract', 'web', 'contracts', 'settings', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(25, 'list packages', 'web', 'packages', 'settings', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(26, 'add package', 'web', 'packages', 'settings', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(27, 'edit package', 'web', 'packages', 'settings', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(28, 'delete package', 'web', 'packages', 'settings', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(29, 'list why choose us', 'web', 'why choose us', 'settings', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(30, 'add why choose us', 'web', 'why choose us', 'settings', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(31, 'edit why choose us', 'web', 'why choose us', 'settings', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(32, 'delete why choose us', 'web', 'why choose us', 'settings', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(33, 'edit settings', 'web', 'settings', 'settings', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(34, 'list admins', 'web', 'admins', 'admins and roles', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(35, 'add admin', 'web', 'admins', 'admins and roles', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(36, 'edit admin', 'web', 'admins', 'admins and roles', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(37, 'delete admin', 'web', 'admins', 'admins and roles', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(38, 'list roles', 'web', 'roles', 'admins and roles', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(39, 'add role', 'web', 'roles', 'admins and roles', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(40, 'edit role', 'web', 'roles', 'admins and roles', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(41, 'delete role', 'web', 'roles', 'admins and roles', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(42, 'list appointments', 'web', 'appointments', 'customers services', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(43, 'delete appointment', 'web', 'appointments', 'customers services', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(44, 'list contacts', 'web', 'contacts', 'customers services', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(45, 'delete contact', 'web', 'contacts', 'customers services', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(46, 'list blogs', 'web', 'blogs', 'blogs', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(47, 'add blog', 'web', 'blogs', 'blogs', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(48, 'edit blog', 'web', 'blogs', 'blogs', '2025-04-23 13:18:23', '2025-04-23 13:18:23'),
(49, 'delete blog', 'web', 'blogs', 'blogs', '2025-04-23 13:18:23', '2025-04-23 13:18:23');

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(3, 'super admin', 'web', '2025-04-23 13:49:08', '2025-04-23 13:49:08');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 3),
(2, 3),
(3, 3),
(4, 3),
(5, 3),
(6, 3),
(7, 3),
(8, 3),
(9, 3),
(10, 3),
(11, 3),
(12, 3),
(13, 3),
(14, 3),
(15, 3),
(16, 3),
(17, 3),
(18, 3),
(19, 3),
(20, 3),
(21, 3),
(22, 3),
(23, 3),
(24, 3),
(25, 3),
(26, 3),
(27, 3),
(28, 3),
(29, 3),
(30, 3),
(31, 3),
(32, 3),
(33, 3),
(34, 3),
(35, 3),
(36, 3),
(37, 3),
(38, 3),
(39, 3),
(40, 3),
(41, 3),
(42, 3),
(43, 3),
(44, 3),
(45, 3),
(46, 3),
(47, 3),
(48, 3),
(49, 3);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '1736174463737467fd0dbe4ddd0.svg', '2025-04-14 11:29:34', '2025-04-14 11:29:34'),
(4, '1736174463737467fd0dbe4ddd0.svg', '2025-04-20 19:47:01', '2025-04-20 19:47:01'),
(5, '1736174463737467fd0dbe4ddd0.svg', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(6, '1736174463737467fd0dbe4ddd0.svg', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(7, '1736174463737467fd0dbe4ddd0.svg', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(8, '1736174463737467fd0dbe4ddd0.svg', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(9, '1736174463737467fd0dbe4ddd0.svg', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(10, '1736174463737467fd0dbe4ddd0.svg', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(11, '1736174463737467fd0dbe4ddd0.svg', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(12, '1736174463737467fd0dbe4ddd0.svg', '2025-04-20 19:47:02', '2025-04-20 19:47:02');

-- --------------------------------------------------------

--
-- Table structure for table `service_translations`
--

CREATE TABLE `service_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `locale` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_translations`
--

INSERT INTO `service_translations` (`id`, `service_id`, `title`, `description`, `locale`, `created_at`, `updated_at`) VALUES
(1, 1, 'service 1', 'service 1 service 1 service 1 service 1 service 1 service 1 service 1', 'en', '2025-04-14 11:29:35', '2025-04-14 11:29:35'),
(2, 1, 'خدمة 2', 'وصف خدمة 1 وصف خدمة 1 وصف خدمة 1 وصف خدمة 1', 'ar', '2025-04-14 11:29:35', '2025-04-14 11:30:09'),
(6, 4, 'service 10', 'service 1 service 1 service 1 service 1 service 1 service 1 service 1', 'en', '2025-04-20 19:47:01', '2025-04-20 19:47:01'),
(7, 4, 'خدمة 20', 'وصف خدمة 1 وصف خدمة 1 وصف خدمة 1 وصف خدمة 1', 'ar', '2025-04-20 19:47:01', '2025-04-20 19:47:01'),
(8, 5, 'خدمة 21', 'وصف خدمة 1 وصف خدمة 1 وصف خدمة 1 وصف خدمة 1', 'ar', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(9, 5, 'service 11', 'service 1 service 1 service 1 service 1 service 1 service 1 service 1', 'en', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(10, 6, 'خدمة 22', 'وصف خدمة 1 وصف خدمة 1 وصف خدمة 1 وصف خدمة 1', 'ar', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(11, 6, 'service 12', 'service 1 service 1 service 1 service 1 service 1 service 1 service 1', 'en', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(12, 7, 'خدمة 23', 'وصف خدمة 1 وصف خدمة 1 وصف خدمة 1 وصف خدمة 1', 'ar', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(13, 7, 'service 13', 'service 1 service 1 service 1 service 1 service 1 service 1 service 1', 'en', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(14, 8, 'خدمة 24', 'وصف خدمة 1 وصف خدمة 1 وصف خدمة 1 وصف خدمة 1', 'ar', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(15, 8, 'service 14', 'service 1 service 1 service 1 service 1 service 1 service 1 service 1', 'en', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(16, 9, 'خدمة 25', 'وصف خدمة 1 وصف خدمة 1 وصف خدمة 1 وصف خدمة 1', 'ar', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(17, 9, 'service 15', 'service 1 service 1 service 1 service 1 service 1 service 1 service 1', 'en', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(18, 10, 'خدمة 26', 'وصف خدمة 1 وصف خدمة 1 وصف خدمة 1 وصف خدمة 1', 'ar', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(19, 10, 'service 16', 'service 1 service 1 service 1 service 1 service 1 service 1 service 1', 'en', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(20, 11, 'خدمة 27', 'وصف خدمة 1 وصف خدمة 1 وصف خدمة 1 وصف خدمة 1', 'ar', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(21, 11, 'service 17', 'service 1 service 1 service 1 service 1 service 1 service 1 service 1', 'en', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(22, 12, 'خدمة 28', 'وصف خدمة 1 وصف خدمة 1 وصف خدمة 1 وصف خدمة 1', 'ar', '2025-04-20 19:47:02', '2025-04-20 19:47:02'),
(23, 12, 'service 18', 'service 1 service 1 service 1 service 1 service 1 service 1 service 1', 'en', '2025-04-20 19:47:02', '2025-04-20 19:47:02');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `about_image` varchar(255) DEFAULT NULL,
  `why_us_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `facebook_link` varchar(500) DEFAULT NULL,
  `twitter_link` varchar(500) DEFAULT NULL,
  `youtube_link` varchar(500) DEFAULT NULL,
  `home_banner_image` varchar(255) DEFAULT NULL,
  `steps_image` varchar(255) DEFAULT NULL,
  `appointment_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `email`, `phone`, `logo`, `about_image`, `why_us_image`, `created_at`, `updated_at`, `facebook_link`, `twitter_link`, `youtube_link`, `home_banner_image`, `steps_image`, `appointment_image`) VALUES
(1, 'test@test.com', '0122222222', '1106174463329767fcfdd179d57.jpg', '7561174463329767fcfdd1d798b.jpg', '1082174463329867fcfdd20dbf4.webp', '2025-04-13 09:17:49', '2025-04-20 22:39:21', 'https://github.com/artesaos/seotools', 'https://github.com/artesaos/seotools', 'https://github.com/artesaos/seotools', '237917450811506803d33eb5b5c.jpg', '646417450811516803d33ff3373.jpg', '99621745195960680593b8d1f7c.webp');

-- --------------------------------------------------------

--
-- Table structure for table `setting_translations`
--

CREATE TABLE `setting_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `setting_id` bigint(20) UNSIGNED DEFAULT NULL,
  `system_name` varchar(255) DEFAULT NULL,
  `about_us_title` varchar(255) DEFAULT NULL,
  `about_us_description` text DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `locale` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `working_times` varchar(500) DEFAULT NULL,
  `home_banner_title` varchar(300) DEFAULT NULL,
  `meta_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting_translations`
--

INSERT INTO `setting_translations` (`id`, `setting_id`, `system_name`, `about_us_title`, `about_us_description`, `address`, `locale`, `created_at`, `updated_at`, `working_times`, `home_banner_title`, `meta_description`) VALUES
(1, 1, 'sama scan', 'about us title', 'about us description about us description about us description about us description about us description about us description about us description', '10 abaas elakaad st nasr city cairo', 'en', '2025-04-14 10:21:38', '2025-04-20 22:39:21', 'sat - thur 1:00 pm - 12:00 am', 'home banner title', 'about us description about us description about us description about us description about us description about us description about us description'),
(2, 1, 'سما سكان', 'عنوان من نحن', 'وصف من نحن وصف من نحن  وصف من نحن  وصف من نحن   وصف من نحن   وصف من نحن   وصف من نحن   وصف من نحن   وصف من نحن   وصف من نحن   وصف من نحن   وصف من نحن', '10 ش عباس العقاد مدينة نصر القاهرة', 'ar', '2025-04-14 10:21:38', '2025-04-20 22:39:21', 'السيت - الخميس  ١:٠٠ م - ١٢:٠٠ ص', 'نص بانر الصفحة الرئيسية', 'وصف من نحن وصف من نحن  وصف من نحن  وصف من نحن   وصف من نحن   وصف من نحن   وصف من نحن   وصف من نحن   وصف من نحن   وصف من نحن   وصف من نحن   وصف من نحن');

-- --------------------------------------------------------

--
-- Table structure for table `steps`
--

CREATE TABLE `steps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `steps`
--

INSERT INTO `steps` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '9488174471167067fe2ff6e0d97.svg', '2025-04-15 08:07:51', '2025-04-15 08:07:51');

-- --------------------------------------------------------

--
-- Table structure for table `step_translations`
--

CREATE TABLE `step_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `step_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `locale` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `step_translations`
--

INSERT INTO `step_translations` (`id`, `step_id`, `title`, `description`, `locale`, `created_at`, `updated_at`) VALUES
(1, 1, 'service 1', 'service 1 service 1 service 1 service 1 service 1', 'en', '2025-04-15 08:07:51', '2025-04-15 08:07:51'),
(2, 1, 'حجز الموعد 01', 'ابدأ رحلتك الصحية بحجز موعدك بسهولة عبر موقعنا الإلكتروني أو من خلال الاتصال المباشر بفريقنا.', 'ar', '2025-04-15 08:07:51', '2025-04-15 08:08:38');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '167117450854596803e41311eeb.jpg', '2025-04-15 07:58:49', '2025-04-19 15:57:39'),
(2, '681917450854746803e422c1156.webp', '2025-04-19 15:57:54', '2025-04-19 15:57:54');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial_translations`
--

CREATE TABLE `testimonial_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `testimonial_id` bigint(20) UNSIGNED DEFAULT NULL,
  `system_name` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `opinion` text DEFAULT NULL,
  `locale` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonial_translations`
--

INSERT INTO `testimonial_translations` (`id`, `testimonial_id`, `system_name`, `name`, `opinion`, `locale`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'market offer 1', 'market offer 1 market offer 1 market offer 1 market offer 1 market offer 1 market offer 1 market offer 1 market offer 1 market offer 1 market offer 1', 'en', '2025-04-15 07:58:49', '2025-04-15 07:58:49'),
(2, 1, NULL, 'طارق السعيد 1', 'طارق السعيد طارق السعيد طارق السعيد طارق السعيد طارق السعيدطارق السعيدطارق السعيد طارق السعيد طارق السعيد طارق السعيد طارق السعيد طارق السعيد طارق السعيد طارق السعيد طارق السعيد طارق السعيد طارق السعيد', 'ar', '2025-04-15 07:58:49', '2025-04-15 07:59:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$/TWZLF3MfX1ArEPfOL.ZfusfYQAd50WdzjCMmdnZ8fUQxqUqPhSsa', NULL, '2025-04-13 09:17:49', '2025-04-13 09:17:49'),
(2, 'test 3', 'admin2@gmail.com', NULL, '$2y$12$pMz/GXQXrNrWCtdfV6Q7GOk64.uxxIF622dfvYaOO3yAjV7SxosoG', NULL, '2025-04-14 09:50:17', '2025-04-14 09:50:58');

-- --------------------------------------------------------

--
-- Table structure for table `why_choose_us`
--

CREATE TABLE `why_choose_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_choose_us`
--

INSERT INTO `why_choose_us` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '7915174519536668059166b8c3d.svg', '2025-04-20 22:29:26', '2025-04-20 22:29:26'),
(2, '2250174519554468059218954dd.svg', '2025-04-20 22:32:24', '2025-04-20 22:32:24');

-- --------------------------------------------------------

--
-- Table structure for table `why_choose_us_translations`
--

CREATE TABLE `why_choose_us_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `why_choose_us_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `locale` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_choose_us_translations`
--

INSERT INTO `why_choose_us_translations` (`id`, `why_choose_us_id`, `title`, `text`, `locale`, `created_at`, `updated_at`) VALUES
(1, 2, 'Lorem ipsum dolor sit amet, te mel eruditi sadipscing', 'Lorem ipsum dolor sit amet, te mel eruditi sadipscing vituperatoribus, id salutandi sententiae voluptatibus vel. Omnesque molestie te eam', 'en', '2025-04-20 22:32:24', '2025-04-20 22:32:24'),
(2, 2, 'عقل بـ حدى, وترك سبتمبر ليرتفع حتى مع', 'وبعد مئات معقل بـ حدى, وترك سبتمبر ليرتفع حتى مع, مكن و ليركز الشرقية ماليزيا،. هذا بل يذكر بلديهما, الأول بأيدي أم بين. و وقرى وسفن مشارف', 'ar', '2025-04-20 22:32:24', '2025-04-20 22:32:24'),
(3, 1, 'Lorem ipsum dolor sit amet, te mel eruditi sadipscing  3', 'Lorem ipsum dolor sit amet, te mel eruditi sadipscing vituperatoribus, id salutandi sententiae voluptatibus vel. Omnesque molestie te eam', 'en', '2025-04-20 22:32:54', '2025-04-20 22:32:54'),
(4, 1, 'عقل بـ حدى, وترك سبتمبر ليرتفع حتى مع 3', 'وبعد مئات معقل بـ حدى, وترك سبتمبر ليرتفع حتى مع, مكن و ليركز الشرقية ماليزيا،. هذا بل يذكر بلديهما, الأول بأيدي أم بين. و وقرى وسفن مشارف', 'ar', '2025-04-20 22:32:54', '2025-04-20 22:32:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_translations`
--
ALTER TABLE `blog_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_translations_blog_id_locale_unique` (`blog_id`,`locale`),
  ADD KEY `blog_translations_locale_index` (`locale`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch_translations`
--
ALTER TABLE `branch_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `branch_translations_branch_id_locale_unique` (`branch_id`,`locale`),
  ADD KEY `branch_translations_locale_index` (`locale`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contract_translations`
--
ALTER TABLE `contract_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contract_translations_contract_id_locale_unique` (`contract_id`,`locale`),
  ADD KEY `contract_translations_locale_index` (`locale`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_translations`
--
ALTER TABLE `faq_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `faq_translations_faq_id_locale_unique` (`faq_id`,`locale`),
  ADD KEY `faq_translations_locale_index` (`locale`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_translations`
--
ALTER TABLE `package_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `package_translations_package_id_locale_unique` (`package_id`,`locale`),
  ADD KEY `package_translations_locale_index` (`locale`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_translations`
--
ALTER TABLE `service_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `service_translations_service_id_locale_unique` (`service_id`,`locale`),
  ADD KEY `service_translations_locale_index` (`locale`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_translations`
--
ALTER TABLE `setting_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `setting_translations_setting_id_locale_unique` (`setting_id`,`locale`),
  ADD KEY `setting_translations_locale_index` (`locale`);

--
-- Indexes for table `steps`
--
ALTER TABLE `steps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `step_translations`
--
ALTER TABLE `step_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `step_translations_step_id_locale_unique` (`step_id`,`locale`),
  ADD KEY `step_translations_locale_index` (`locale`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial_translations`
--
ALTER TABLE `testimonial_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `testimonial_translations_testimonial_id_locale_unique` (`testimonial_id`,`locale`),
  ADD KEY `testimonial_translations_locale_index` (`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `why_choose_us`
--
ALTER TABLE `why_choose_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `why_choose_us_translations`
--
ALTER TABLE `why_choose_us_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `why_choose_us_translations_why_choose_us_id_locale_unique` (`why_choose_us_id`,`locale`),
  ADD KEY `why_choose_us_translations_locale_index` (`locale`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `blog_translations`
--
ALTER TABLE `blog_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branch_translations`
--
ALTER TABLE `branch_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contract_translations`
--
ALTER TABLE `contract_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `faq_translations`
--
ALTER TABLE `faq_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `package_translations`
--
ALTER TABLE `package_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `service_translations`
--
ALTER TABLE `service_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting_translations`
--
ALTER TABLE `setting_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `steps`
--
ALTER TABLE `steps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `step_translations`
--
ALTER TABLE `step_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonial_translations`
--
ALTER TABLE `testimonial_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `why_choose_us`
--
ALTER TABLE `why_choose_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `why_choose_us_translations`
--
ALTER TABLE `why_choose_us_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_translations`
--
ALTER TABLE `blog_translations`
  ADD CONSTRAINT `blog_translations_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `branch_translations`
--
ALTER TABLE `branch_translations`
  ADD CONSTRAINT `branch_translations_branch_id_foreign` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contract_translations`
--
ALTER TABLE `contract_translations`
  ADD CONSTRAINT `contract_translations_contract_id_foreign` FOREIGN KEY (`contract_id`) REFERENCES `contracts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `faq_translations`
--
ALTER TABLE `faq_translations`
  ADD CONSTRAINT `faq_translations_faq_id_foreign` FOREIGN KEY (`faq_id`) REFERENCES `faqs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `package_translations`
--
ALTER TABLE `package_translations`
  ADD CONSTRAINT `package_translations_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `service_translations`
--
ALTER TABLE `service_translations`
  ADD CONSTRAINT `service_translations_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `setting_translations`
--
ALTER TABLE `setting_translations`
  ADD CONSTRAINT `setting_translations_setting_id_foreign` FOREIGN KEY (`setting_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `step_translations`
--
ALTER TABLE `step_translations`
  ADD CONSTRAINT `step_translations_step_id_foreign` FOREIGN KEY (`step_id`) REFERENCES `steps` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `testimonial_translations`
--
ALTER TABLE `testimonial_translations`
  ADD CONSTRAINT `testimonial_translations_testimonial_id_foreign` FOREIGN KEY (`testimonial_id`) REFERENCES `testimonials` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `why_choose_us_translations`
--
ALTER TABLE `why_choose_us_translations`
  ADD CONSTRAINT `why_choose_us_translations_why_choose_us_id_foreign` FOREIGN KEY (`why_choose_us_id`) REFERENCES `why_choose_us` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
