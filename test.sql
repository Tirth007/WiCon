-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2017 at 05:42 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`id`, `code`, `created_at`, `updated_at`) VALUES
(610, 'EtIGQU', '2017-04-11 22:56:56', '2017-04-11 22:56:56'),
(611, 'bd4sA2', '2017-04-11 22:56:56', '2017-04-11 22:56:56'),
(614, 'D0I3kz', '2017-04-11 22:56:56', '2017-04-11 22:56:56'),
(615, 'QDNt8B', '2017-04-11 22:56:56', '2017-04-11 22:56:56'),
(616, 'XK1Vd1', '2017-04-11 22:56:56', '2017-04-11 22:56:56'),
(617, 'GQVkym', '2017-04-11 22:56:56', '2017-04-11 22:56:56'),
(618, '1K0uTG', '2017-04-11 22:56:56', '2017-04-11 22:56:56'),
(619, 'EnxJbp', '2017-04-11 22:56:56', '2017-04-11 22:56:56'),
(620, 'YonOWV', '2017-04-11 22:56:56', '2017-04-11 22:56:56'),
(621, 'GuQsdR', '2017-04-11 22:56:56', '2017-04-11 22:56:56'),
(622, 'wSnArI', '2017-04-11 22:56:56', '2017-04-11 22:56:56'),
(623, 'Z6ydoQ', '2017-04-11 22:56:56', '2017-04-11 22:56:56'),
(624, 'si9QGg', '2017-04-11 22:56:56', '2017-04-11 22:56:56'),
(625, 'iwTMIs', '2017-04-11 22:56:56', '2017-04-11 22:56:56'),
(626, 's1QXOh', '2017-04-11 22:56:56', '2017-04-11 22:56:56'),
(627, 'nyvAEW', '2017-04-11 22:56:56', '2017-04-11 22:56:56'),
(628, 'ZQOD0T', '2017-04-11 22:56:56', '2017-04-11 22:56:56'),
(629, '1gsVFM', '2017-04-11 22:56:56', '2017-04-11 22:56:56'),
(630, 'AwuWK0', '2017-04-11 22:56:56', '2017-04-11 22:56:56'),
(631, 'gna1US', '2017-04-11 22:56:56', '2017-04-11 22:56:56'),
(632, 'eh2A1H', '2017-04-11 22:56:56', '2017-04-11 22:56:56'),
(633, 'b4jNWI', '2017-04-11 22:56:56', '2017-04-11 22:56:56'),
(634, '2wdwYb', '2017-04-11 22:56:57', '2017-04-11 22:56:57'),
(635, 'ti1sRn', '2017-04-11 22:56:57', '2017-04-11 22:56:57'),
(636, 'vYG9Xh', '2017-04-11 22:56:57', '2017-04-11 22:56:57'),
(637, 'C348Fm', '2017-04-11 22:56:57', '2017-04-11 22:56:57'),
(638, 'kqosEP', '2017-04-11 22:56:57', '2017-04-11 22:56:57'),
(639, 'sKziR2', '2017-04-11 22:56:57', '2017-04-11 22:56:57'),
(640, 'ZmNHqK', '2017-04-11 22:56:57', '2017-04-11 22:56:57'),
(641, 'GixbDR', '2017-04-11 22:56:57', '2017-04-11 22:56:57'),
(642, 'pFyPBg', '2017-04-11 22:56:57', '2017-04-11 22:56:57'),
(643, 'RZlg77', '2017-04-11 22:56:57', '2017-04-11 22:56:57'),
(644, 'T31QuN', '2017-04-11 22:56:57', '2017-04-11 22:56:57'),
(645, 'CZguiM', '2017-04-11 22:56:57', '2017-04-11 22:56:57'),
(646, 'gvSmJX', '2017-04-11 22:56:57', '2017-04-11 22:56:57'),
(647, 'xB82fw', '2017-04-11 22:56:57', '2017-04-11 22:56:57'),
(648, 'PfHCZ7', '2017-04-11 22:56:57', '2017-04-11 22:56:57'),
(649, 'bzeA0Z', '2017-04-11 22:56:57', '2017-04-11 22:56:57'),
(650, 'rYK8Ik', '2017-04-11 22:56:57', '2017-04-11 22:56:57'),
(651, '28TshD', '2017-04-11 22:56:57', '2017-04-11 22:56:57'),
(652, 'DRMjGJ', '2017-04-11 22:56:57', '2017-04-11 22:56:57'),
(653, 'xmlb51', '2017-04-11 22:56:57', '2017-04-11 22:56:57'),
(654, 'amWsiC', '2017-04-11 22:56:57', '2017-04-11 22:56:57'),
(655, 'ETmuJA', '2017-04-11 22:56:57', '2017-04-11 22:56:57'),
(656, '51m3FM', '2017-04-11 22:56:57', '2017-04-11 22:56:57'),
(657, '4Nszc2', '2017-04-11 22:56:57', '2017-04-11 22:56:57'),
(658, 'wHJAvg', '2017-04-11 22:56:57', '2017-04-11 22:56:57'),
(659, 'ujEiiy', '2017-04-11 22:56:58', '2017-04-11 22:56:58'),
(660, 'whlwuW', '2017-04-11 22:56:58', '2017-04-11 22:56:58'),
(661, 'xrkeZf', '2017-04-11 22:56:58', '2017-04-11 22:56:58'),
(662, 'bA1t6A', '2017-04-11 22:56:58', '2017-04-11 22:56:58'),
(663, '9J9zln', '2017-04-11 22:56:58', '2017-04-11 22:56:58'),
(664, 'n9MhYu', '2017-04-11 22:56:58', '2017-04-11 22:56:58'),
(665, '3goMtT', '2017-04-11 22:56:58', '2017-04-11 22:56:58'),
(666, 'uYRjB9', '2017-04-11 22:56:58', '2017-04-11 22:56:58'),
(667, 'eeMcTd', '2017-04-11 22:56:58', '2017-04-11 22:56:58'),
(668, 'yvy2pI', '2017-04-11 22:56:58', '2017-04-11 22:56:58'),
(669, '3iEiJc', '2017-04-11 22:56:58', '2017-04-11 22:56:58'),
(670, 'j8HkW2', '2017-04-11 22:56:58', '2017-04-11 22:56:58'),
(671, 'MOlnXJ', '2017-04-11 22:56:58', '2017-04-11 22:56:58'),
(672, 'Bu6w2P', '2017-04-11 22:56:58', '2017-04-11 22:56:58'),
(673, 'H58qBf', '2017-04-11 22:56:58', '2017-04-11 22:56:58'),
(674, 'uRuJf1', '2017-04-11 22:56:58', '2017-04-11 22:56:58'),
(675, 'HgeInT', '2017-04-11 22:56:58', '2017-04-11 22:56:58'),
(676, 'PCwgK1', '2017-04-11 22:56:58', '2017-04-11 22:56:58'),
(677, 'enuSCV', '2017-04-11 22:56:58', '2017-04-11 22:56:58'),
(678, 'ZQb4ow', '2017-04-11 22:56:58', '2017-04-11 22:56:58'),
(679, '0U6uNN', '2017-04-11 22:56:58', '2017-04-11 22:56:58'),
(680, 'qQklRP', '2017-04-11 22:56:58', '2017-04-11 22:56:58'),
(681, 'WWIeII', '2017-04-11 22:56:58', '2017-04-11 22:56:58'),
(682, 'BO2cJL', '2017-04-11 22:56:58', '2017-04-11 22:56:58'),
(683, '7QDc5w', '2017-04-11 22:56:58', '2017-04-11 22:56:58'),
(684, '2eWf3c', '2017-04-11 22:56:58', '2017-04-11 22:56:58'),
(685, 'svApAt', '2017-04-11 22:56:58', '2017-04-11 22:56:58'),
(686, 'RjJ1eP', '2017-04-11 22:56:59', '2017-04-11 22:56:59'),
(687, 'KZixZl', '2017-04-11 22:56:59', '2017-04-11 22:56:59'),
(688, 'oTmeof', '2017-04-11 22:56:59', '2017-04-11 22:56:59'),
(689, 'maO7iu', '2017-04-11 22:56:59', '2017-04-11 22:56:59'),
(690, 'SJaOCu', '2017-04-11 22:56:59', '2017-04-11 22:56:59'),
(691, 'HPOI1H', '2017-04-11 22:56:59', '2017-04-11 22:56:59'),
(692, '0Q76mD', '2017-04-11 22:56:59', '2017-04-11 22:56:59'),
(693, '26wrS0', '2017-04-11 22:56:59', '2017-04-11 22:56:59'),
(694, 'fyZ7vr', '2017-04-11 22:56:59', '2017-04-11 22:56:59'),
(695, 'KYyZnR', '2017-04-11 22:56:59', '2017-04-11 22:56:59'),
(696, 'fNpNLd', '2017-04-11 22:56:59', '2017-04-11 22:56:59'),
(697, 'fRyQ5g', '2017-04-11 22:56:59', '2017-04-11 22:56:59'),
(698, 'XV6C81', '2017-04-11 22:56:59', '2017-04-11 22:56:59'),
(699, 'z8tL2s', '2017-04-11 22:56:59', '2017-04-11 22:56:59'),
(700, 'Hu1zNO', '2017-04-11 22:56:59', '2017-04-11 22:56:59');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `Item_ID` int(10) UNSIGNED NOT NULL,
  `Item_Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Item_Price` int(11) NOT NULL,
  `Item_Ingredients` text COLLATE utf8_unicode_ci NOT NULL,
  `Item_Description` text COLLATE utf8_unicode_ci NOT NULL,
  `Availability` int(11) NOT NULL,
  `Category` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`Item_ID`, `Item_Name`, `Item_Price`, `Item_Ingredients`, `Item_Description`, `Availability`, `Category`) VALUES
(1, 'Dabeli', 20, '', 'Tasty', 19, 'Snacks'),
(2, 'Italian Pizza', 140, '', 'Tasty', 14, 'Pizza'),
(3, 'Manchurian Dry', 90, '', 'Spicy', 23, 'Chinese'),
(4, 'Vadapav', 20, '', 'Spicy', 23, 'Snacks'),
(5, 'Jam Slice', 15, '', 'Yummy', 25, 'Snacks'),
(6, 'Butter Slice', 15, '', 'Tasty', 37, 'Snacks'),
(7, 'French Fries', 55, '', 'Yummy', 21, 'Snacks'),
(8, 'Veg Sandwich', 25, '', 'Healthy', 22, 'Snacks'),
(9, 'Manchurian Gravy', 90, '', 'Healthy', 25, 'Chinese'),
(10, 'Chinese Bhel', 90, '', 'Spicy', 22, 'Chinese'),
(11, 'Manchurian Noodles', 80, '', 'Yummy', 26, 'Chinese'),
(12, 'Maggi', 45, '', 'Tasty', 16, 'Snacks'),
(13, 'Schezwan Noodles', 85, '', 'Spicy', 16, 'Chinese'),
(14, 'Thin Crust', 130, '', 'Crunchy', 25, 'Pizza'),
(15, 'Double Cheese Pizza', 160, '', 'Yummy', 24, 'Pizza'),
(16, 'Margharetta', 140, '', 'Yummy', 19, 'Pizza');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_03_18_053808_create_codes_table', 1),
(4, '2017_04_03_201849_create_items_table', 1),
(5, '2017_04_03_202113_create_orders_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `Order_ID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Item_Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Item_Price` int(11) NOT NULL,
  `Quantity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Total` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `Order_ID`, `Item_Name`, `Item_Price`, `Quantity`, `Total`, `created_at`) VALUES
(4, 'CmVS7T', 'Dabeli', 20, '2', 40, '2017-04-04 11:21:14'),
(5, 'CmVS7T', 'Vadapav', 20, '1', 20, '2017-04-04 11:21:14'),
(6, 'CmVS7T', 'Jam Slice', 15, '1', 15, '2017-04-04 11:21:15'),
(7, '3ZJrGC', 'French Fries', 55, '1', 55, '2017-04-04 11:22:12'),
(8, 'rplbtF', 'Maggi', 45, '1', 45, '2017-04-04 11:23:01'),
(9, 'rplbtF', 'Veg Sandwich', 25, '1', 25, '2017-04-04 11:23:01'),
(10, 'rplbtF', 'Butter Slice', 15, '1', 15, '2017-04-04 11:23:01'),
(11, 'RIDM7K', 'Dabeli', 20, '2', 40, '2017-04-04 11:23:44'),
(12, 'RIDM7K', 'Vadapav', 20, '2', 40, '2017-04-04 11:23:44'),
(13, 'RIDM7K', 'Jam Slice', 15, '2', 30, '2017-04-04 11:24:05'),
(14, 'cnxi7s', 'Dabeli', 20, '1', 20, '2017-04-04 11:25:40'),
(15, 'cnxi7s', 'Butter Slice', 15, '1', 15, '2017-04-04 11:25:40'),
(16, 'cnxi7s', 'Dabeli', 20, '2', 40, '2017-04-04 11:27:06'),
(17, 'cnxi7s', 'Vadapav', 20, '1', 20, '2017-04-04 11:27:06'),
(18, '4CGXCl', 'Veg Sandwich', 25, '2', 50, '2017-04-04 11:27:55'),
(19, 'sEtaq2', 'Italian Pizza', 140, '1', 140, '2017-04-04 11:29:07'),
(20, 'sEtaq2', 'Veg Sandwich', 25, '2', 50, '2017-04-04 11:29:07'),
(21, 'sEtaq2', 'Dabeli', 20, '1', 20, '2017-04-04 15:36:46'),
(22, 'sEtaq2', 'Jam Slice', 15, '1', 15, '2017-04-04 15:36:46'),
(23, 'LBJkhP', 'Manchurian Dry', 90, '2', 180, '2017-04-04 15:49:24'),
(24, 'LBJkhP', 'Chinese Bhel', 90, '1', 90, '2017-04-04 15:49:24'),
(25, 'WRIqPb', 'Dabeli', 20, '1', 20, '2017-04-04 17:08:14'),
(26, 'WRIqPb', 'Vadapav', 20, '1', 20, '2017-04-04 17:08:14'),
(27, 'Ioq6kF', 'French Fries', 55, '1', 55, '2017-04-05 04:58:43'),
(36, '2DpbIj', 'Dabeli', 20, '1', 20, '2017-04-07 06:20:19'),
(37, 'A2BIB7', 'Vadapav', 20, '1', 20, '2017-04-07 06:28:44'),
(38, 'A2BIB7', 'Thin Crust', 130, '1', 130, '2017-04-07 06:28:44'),
(48, 'gQTPTK', 'Dabeli', 20, '1', 20, '2017-04-07 19:43:03'),
(49, 'gQTPTK', 'Vadapav', 20, '1', 20, '2017-04-07 19:53:16'),
(50, '5uU628', 'Jam Slice', 15, '1', 15, '2017-04-07 20:08:41'),
(51, 'kdqIt7', 'Dabeli', 20, '1', 20, '2017-04-07 20:09:56'),
(52, 'TYRQBG', 'Manchurian Dry', 90, '1', 90, '2017-04-07 20:12:51'),
(53, 'TYRQBG', 'Vadapav', 20, '1', 20, '2017-04-07 20:12:51'),
(54, 'fXwO07', 'Dabeli', 20, '1', 20, '2017-04-08 06:17:38'),
(55, '7q7A1V', 'French Fries', 55, '1', 55, '2017-04-08 17:05:40'),
(56, 'GFcMH4', 'French Fries', 55, '1', 55, '2017-04-09 04:16:31'),
(57, 'GFcMH4', 'Jam Slice', 15, '3', 45, '2017-04-09 04:16:31'),
(58, 'GFcMH4', 'Veg Sandwich', 25, '2', 50, '2017-04-09 04:16:31'),
(59, 'RlptNj', 'Dabeli', 20, '1', 20, '2017-04-09 04:49:57'),
(60, 'RlptNj', 'Vadapav', 20, '1', 20, '2017-04-09 04:49:57'),
(61, 'RlptNj', 'Jam Slice', 15, '1', 15, '2017-04-09 04:50:14'),
(62, 'EQWSe8', 'Vadapav', 20, '2', 40, '2017-04-09 10:51:43'),
(63, 'lm0a1u', 'Dabeli', 20, '2', 40, '2017-04-09 16:31:12'),
(64, 'gEEozh', 'Jam Slice', 15, '1', 15, '2017-04-10 04:35:42'),
(65, 'gEEozh', 'French Fries', 55, '1', 55, '2017-04-10 04:35:42'),
(66, 'gEEozh', 'Maggi', 45, '1', 45, '2017-04-10 04:35:42'),
(67, 'gEEozh', 'Margharetta', 140, '1', 140, '2017-04-10 04:35:42'),
(68, 'Dl3h5y', 'Veg Sandwich', 25, '2', 50, '2017-04-10 16:31:16'),
(69, 'ejUerl', 'Veg Sandwich', 25, '1', 25, '2017-04-12 02:38:41'),
(70, 'ejUerl', 'Double Cheese Pizza', 160, '1', 160, '2017-04-12 02:39:11'),
(71, 'LhNbLT', 'Jam Slice', 15, '1', 15, '2017-04-12 04:27:31'),
(72, 'LhNbLT', 'French Fries', 55, '1', 55, '2017-04-12 04:27:31'),
(73, 'LhNbLT', 'Maggi', 45, '1', 45, '2017-04-12 04:27:52'),
(74, 'EY9Y5N', 'Dabeli', 20, '1', 20, '2017-04-12 07:14:19'),
(75, 'EY9Y5N', 'Vadapav', 20, '1', 20, '2017-04-12 07:14:19'),
(76, 'ZWolOU', 'Manchurian Noodles', 80, '1', 80, '2017-04-12 07:34:23'),
(78, 'nLfGQ1', 'Italian Pizza', 140, '1', 140, '2017-04-12 08:11:57'),
(79, 'nLfGQ1', 'Vadapav', 20, '1', 20, '2017-04-12 08:13:21'),
(80, 'DFLJla', 'Dabeli', 20, '2', 40, '2017-04-12 08:23:01'),
(81, 'DFLJla', 'Vadapav', 20, '1', 20, '2017-04-12 08:23:01'),
(82, 'DFLJla', 'Margharetta', 140, '1', 140, '2017-04-12 08:23:45'),
(83, 'D0I3kz', 'Double Cheese Pizza', 160, '1', 160, '2017-04-12 09:42:21'),
(84, 'vPNCWL', 'French Fries', 55, '1', 55, '2017-04-12 10:42:12'),
(85, 'vPNCWL', 'Veg Sandwich', 25, '1', 25, '2017-04-12 10:42:13'),
(86, 'OhOopk', 'Dabeli', 20, '1', 20, '2017-04-13 05:52:08'),
(87, 'OhOopk', 'Vadapav', 20, '1', 20, '2017-04-13 05:52:08'),
(88, 'EtIGQU', 'Vadapav', 20, '1', 20, '2017-04-13 06:10:20'),
(89, 'yRFybC', 'Italian Pizza', 140, '1', 140, '2017-04-13 06:28:50'),
(90, 'yRFybC', 'Dabeli', 20, '1', 20, '2017-04-13 06:29:05'),
(91, 'aX2HFa', 'Dabeli', 20, '4', 80, '2017-04-18 10:57:51');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'DHAVAL BHENSDADIYA', 'dhb@gmail.com', '$2y$10$h8GE7xqxlJx0SaDe8ElRRuZ/ty4OjAo9Ar/VQwRiXsLiDpkRhd3vK', 'k0cpfz6YEPbzexFHvrAxOTDlBEgJDAf1Zaj3HutDvPc66U9AVr14Ac9Zhtmh', '2017-04-04 05:12:26', '2017-04-18 05:32:43'),
(2, 'Parinda', 'parinda102@gmail.com', '$2y$10$OrKoXJAKTfszBBYUo865A.wFidhO6qOzrl./Jb8W/ky/nwxYIJN/.', 's6ncDoA0EtiwYistihFze9tlDBwSUZa0UHC5ALgRpuFezmiWuIUVejxefgCe', '2017-04-13 00:27:58', '2017-04-13 00:31:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codes_code_unique` (`code`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`Item_ID`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

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
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=701;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `Item_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
