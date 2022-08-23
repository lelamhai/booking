-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 23, 2022 at 11:38 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `wp_booking`
--

CREATE TABLE `wp_booking` (
  `booking_id` int(11) NOT NULL,
  `booking_fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_date` datetime NOT NULL,
  `booking_slots` int(11) NOT NULL,
  `booking_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booking_message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booking_timeid` int(11) NOT NULL,
  `booking_services` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booking_status` int(11) NOT NULL DEFAULT 1,
  `booking_phone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_booking`
--

INSERT INTO `wp_booking` (`booking_id`, `booking_fullname`, `booking_date`, `booking_slots`, `booking_email`, `booking_message`, `booking_timeid`, `booking_services`, `booking_status`, `booking_phone`) VALUES
(1, 'lelamhai', '2022-07-05 00:00:00', 1, '', '', 1, NULL, 1, 0),
(2, 'haitho', '2022-07-05 00:00:00', 1, 'lelamhai@gmail.com', 'note', 1, NULL, 1, 0),
(3, 'finsih', '2022-07-05 00:00:00', 1, 'lelamhai@gmail.com', 'note', 1, NULL, 1, 0),
(4, 'le huyen thao', '2022-07-05 00:00:00', 1, '', 'dfsafds', 1, NULL, 1, 0),
(5, 'le thanh tinh', '2022-07-05 00:00:00', 1, 'lethanhtinh@gmail.com', 'note', 1, NULL, 1, 0),
(6, 'admin', '2022-07-05 00:00:00', 1, 'admin@gmail.com', '', 2, NULL, 1, 0),
(7, 'message', '2022-07-06 00:00:00', 1, '', 'message', 4, NULL, 1, 0),
(8, 'kakaka', '2022-07-06 00:00:00', 1, 'fdsafd@gmail.com', 'kakaka', 4, NULL, 1, 0),
(9, 'Nguyen Van A', '2022-07-06 00:00:00', 1, 'nguyenvana@gmail.com', 'Nguyen Van A', 4, NULL, 1, 0),
(10, 'lelamhai', '2022-07-05 00:00:00', 3, 'test@gmail.com', 'note', 1, '[[\\\"Fullset acrylic with tips\\\"],[\\\"French design\\\",\\\"Title\\\"],[\\\"French design\\\"],[\\\"Acrylic overlay\\\",\\\"Nail ombre\\\"],[\\\"Nail ombre\\\",\\\"Title\\\"]]', 1, 0),
(11, 'test', '2022-07-06 00:00:00', 5, 'test@gmail.com', 'note test', 1, '[[\\\"Fullset acrylic with tips\\\"],[\\\"French design\\\",\\\"Title\\\"],[\\\"French design\\\"],[\\\"Acrylic overlay\\\",\\\"Nail ombre\\\"],[\\\"Nail ombre\\\",\\\"Title\\\"]]', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_commentmeta`
--

CREATE TABLE `wp_commentmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_comments`
--

CREATE TABLE `wp_comments` (
  `comment_ID` bigint(20) UNSIGNED NOT NULL,
  `comment_post_ID` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `comment_author` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_author_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT 0,
  `comment_approved` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'comment',
  `comment_parent` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_comments`
--

INSERT INTO `wp_comments` (`comment_ID`, `comment_post_ID`, `comment_author`, `comment_author_email`, `comment_author_url`, `comment_author_IP`, `comment_date`, `comment_date_gmt`, `comment_content`, `comment_karma`, `comment_approved`, `comment_agent`, `comment_type`, `comment_parent`, `user_id`) VALUES
(1, 1, 'A WordPress Commenter', 'wapuu@wordpress.example', 'https://wordpress.org/', '', '2022-06-21 08:44:19', '2022-06-21 08:44:19', 'Hi, this is a comment.\nTo get started with moderating, editing, and deleting comments, please visit the Comments screen in the dashboard.\nCommenter avatars come from <a href=\"https://en.gravatar.com/\">Gravatar</a>.', 0, '1', '', 'comment', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_links`
--

CREATE TABLE `wp_links` (
  `link_id` bigint(20) UNSIGNED NOT NULL,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_target` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_visible` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `link_rating` int(11) NOT NULL DEFAULT 0,
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_notes` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_rss` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_options`
--

CREATE TABLE `wp_options` (
  `option_id` bigint(20) UNSIGNED NOT NULL,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `autoload` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_options`
--

INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'siteurl', 'http://localhost/booking/', 'yes'),
(2, 'home', 'http://localhost/booking/', 'yes'),
(3, 'blogname', 'lelamhai', 'yes'),
(4, 'blogdescription', 'Just another WordPress site', 'yes'),
(5, 'users_can_register', '0', 'yes'),
(6, 'admin_email', 'leelamhair@gmail.com', 'yes'),
(7, 'start_of_week', '1', 'yes'),
(8, 'use_balanceTags', '0', 'yes'),
(9, 'use_smilies', '1', 'yes'),
(10, 'require_name_email', '1', 'yes'),
(11, 'comments_notify', '1', 'yes'),
(12, 'posts_per_rss', '10', 'yes'),
(13, 'rss_use_excerpt', '0', 'yes'),
(14, 'mailserver_url', 'mail.example.com', 'yes'),
(15, 'mailserver_login', 'login@example.com', 'yes'),
(16, 'mailserver_pass', 'password', 'yes'),
(17, 'mailserver_port', '110', 'yes'),
(18, 'default_category', '1', 'yes'),
(19, 'default_comment_status', 'open', 'yes'),
(20, 'default_ping_status', 'open', 'yes'),
(21, 'default_pingback_flag', '1', 'yes'),
(22, 'posts_per_page', '10', 'yes'),
(23, 'date_format', 'F j, Y', 'yes'),
(24, 'time_format', 'g:i a', 'yes'),
(25, 'links_updated_date_format', 'F j, Y g:i a', 'yes'),
(26, 'comment_moderation', '0', 'yes'),
(27, 'moderation_notify', '1', 'yes'),
(28, 'permalink_structure', '/%category%/%postname%.html', 'yes'),
(29, 'rewrite_rules', 'a:130:{s:11:\"^wp-json/?$\";s:22:\"index.php?rest_route=/\";s:14:\"^wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:21:\"^index.php/wp-json/?$\";s:22:\"index.php?rest_route=/\";s:24:\"^index.php/wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:17:\"^wp-sitemap\\.xml$\";s:23:\"index.php?sitemap=index\";s:17:\"^wp-sitemap\\.xsl$\";s:36:\"index.php?sitemap-stylesheet=sitemap\";s:23:\"^wp-sitemap-index\\.xsl$\";s:34:\"index.php?sitemap-stylesheet=index\";s:48:\"^wp-sitemap-([a-z]+?)-([a-z\\d_-]+?)-(\\d+?)\\.xml$\";s:75:\"index.php?sitemap=$matches[1]&sitemap-subtype=$matches[2]&paged=$matches[3]\";s:34:\"^wp-sitemap-([a-z]+?)-(\\d+?)\\.xml$\";s:47:\"index.php?sitemap=$matches[1]&paged=$matches[2]\";s:8:\"books/?$\";s:25:\"index.php?post_type=books\";s:38:\"books/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?post_type=books&feed=$matches[1]\";s:33:\"books/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?post_type=books&feed=$matches[1]\";s:25:\"books/page/([0-9]{1,})/?$\";s:43:\"index.php?post_type=books&paged=$matches[1]\";s:40:\"./(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:35:\"./(.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:16:\"./(.+?)/embed/?$\";s:46:\"index.php?category_name=$matches[1]&embed=true\";s:28:\"./(.+?)/page/?([0-9]{1,})/?$\";s:53:\"index.php?category_name=$matches[1]&paged=$matches[2]\";s:10:\"./(.+?)/?$\";s:35:\"index.php?category_name=$matches[1]\";s:44:\"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:39:\"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:20:\"tag/([^/]+)/embed/?$\";s:36:\"index.php?tag=$matches[1]&embed=true\";s:32:\"tag/([^/]+)/page/?([0-9]{1,})/?$\";s:43:\"index.php?tag=$matches[1]&paged=$matches[2]\";s:14:\"tag/([^/]+)/?$\";s:25:\"index.php?tag=$matches[1]\";s:45:\"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:40:\"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:21:\"type/([^/]+)/embed/?$\";s:44:\"index.php?post_format=$matches[1]&embed=true\";s:33:\"type/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?post_format=$matches[1]&paged=$matches[2]\";s:15:\"type/([^/]+)/?$\";s:33:\"index.php?post_format=$matches[1]\";s:49:\"services/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?services=$matches[1]&feed=$matches[2]\";s:44:\"services/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?services=$matches[1]&feed=$matches[2]\";s:25:\"services/([^/]+)/embed/?$\";s:41:\"index.php?services=$matches[1]&embed=true\";s:37:\"services/([^/]+)/page/?([0-9]{1,})/?$\";s:48:\"index.php?services=$matches[1]&paged=$matches[2]\";s:19:\"services/([^/]+)/?$\";s:30:\"index.php?services=$matches[1]\";s:46:\"times/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:44:\"index.php?times=$matches[1]&feed=$matches[2]\";s:41:\"times/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:44:\"index.php?times=$matches[1]&feed=$matches[2]\";s:22:\"times/([^/]+)/embed/?$\";s:38:\"index.php?times=$matches[1]&embed=true\";s:34:\"times/([^/]+)/page/?([0-9]{1,})/?$\";s:45:\"index.php?times=$matches[1]&paged=$matches[2]\";s:16:\"times/([^/]+)/?$\";s:27:\"index.php?times=$matches[1]\";s:33:\"books/[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:43:\"books/[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:63:\"books/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:58:\"books/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:58:\"books/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:39:\"books/[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:22:\"books/([^/]+)/embed/?$\";s:38:\"index.php?books=$matches[1]&embed=true\";s:26:\"books/([^/]+)/trackback/?$\";s:32:\"index.php?books=$matches[1]&tb=1\";s:46:\"books/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:44:\"index.php?books=$matches[1]&feed=$matches[2]\";s:41:\"books/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:44:\"index.php?books=$matches[1]&feed=$matches[2]\";s:34:\"books/([^/]+)/page/?([0-9]{1,})/?$\";s:45:\"index.php?books=$matches[1]&paged=$matches[2]\";s:41:\"books/([^/]+)/comment-page-([0-9]{1,})/?$\";s:45:\"index.php?books=$matches[1]&cpage=$matches[2]\";s:30:\"books/([^/]+)(?:/([0-9]+))?/?$\";s:44:\"index.php?books=$matches[1]&page=$matches[2]\";s:22:\"books/[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:32:\"books/[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:52:\"books/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:47:\"books/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:47:\"books/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:28:\"books/[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:48:\".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$\";s:18:\"index.php?feed=old\";s:20:\".*wp-app\\.php(/.*)?$\";s:19:\"index.php?error=403\";s:18:\".*wp-register.php$\";s:23:\"index.php?register=true\";s:32:\"feed/(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:27:\"(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:8:\"embed/?$\";s:21:\"index.php?&embed=true\";s:20:\"page/?([0-9]{1,})/?$\";s:28:\"index.php?&paged=$matches[1]\";s:41:\"comments/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:36:\"comments/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:17:\"comments/embed/?$\";s:21:\"index.php?&embed=true\";s:44:\"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:39:\"search/(.+)/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:20:\"search/(.+)/embed/?$\";s:34:\"index.php?s=$matches[1]&embed=true\";s:32:\"search/(.+)/page/?([0-9]{1,})/?$\";s:41:\"index.php?s=$matches[1]&paged=$matches[2]\";s:14:\"search/(.+)/?$\";s:23:\"index.php?s=$matches[1]\";s:47:\"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:42:\"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:23:\"author/([^/]+)/embed/?$\";s:44:\"index.php?author_name=$matches[1]&embed=true\";s:35:\"author/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?author_name=$matches[1]&paged=$matches[2]\";s:17:\"author/([^/]+)/?$\";s:33:\"index.php?author_name=$matches[1]\";s:69:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:45:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$\";s:74:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]\";s:39:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$\";s:63:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]\";s:56:\"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:51:\"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:32:\"([0-9]{4})/([0-9]{1,2})/embed/?$\";s:58:\"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true\";s:44:\"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]\";s:26:\"([0-9]{4})/([0-9]{1,2})/?$\";s:47:\"index.php?year=$matches[1]&monthnum=$matches[2]\";s:43:\"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:38:\"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:19:\"([0-9]{4})/embed/?$\";s:37:\"index.php?year=$matches[1]&embed=true\";s:31:\"([0-9]{4})/page/?([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&paged=$matches[2]\";s:13:\"([0-9]{4})/?$\";s:26:\"index.php?year=$matches[1]\";s:27:\".?.+?/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\".?.+?/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:33:\".?.+?/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:16:\"(.?.+?)/embed/?$\";s:41:\"index.php?pagename=$matches[1]&embed=true\";s:20:\"(.?.+?)/trackback/?$\";s:35:\"index.php?pagename=$matches[1]&tb=1\";s:40:\"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:35:\"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:28:\"(.?.+?)/page/?([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&paged=$matches[2]\";s:35:\"(.?.+?)/comment-page-([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&cpage=$matches[2]\";s:24:\"(.?.+?)(?:/([0-9]+))?/?$\";s:47:\"index.php?pagename=$matches[1]&page=$matches[2]\";s:36:\".+?/[^/]+.html/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:46:\".+?/[^/]+.html/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:66:\".+?/[^/]+.html/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:61:\".+?/[^/]+.html/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:61:\".+?/[^/]+.html/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:42:\".+?/[^/]+.html/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:27:\"(.+?)/([^/]+).html/embed/?$\";s:63:\"index.php?category_name=$matches[1]&name=$matches[2]&embed=true\";s:31:\"(.+?)/([^/]+).html/trackback/?$\";s:57:\"index.php?category_name=$matches[1]&name=$matches[2]&tb=1\";s:51:\"(.+?)/([^/]+).html/feed/(feed|rdf|rss|rss2|atom)/?$\";s:69:\"index.php?category_name=$matches[1]&name=$matches[2]&feed=$matches[3]\";s:46:\"(.+?)/([^/]+).html/(feed|rdf|rss|rss2|atom)/?$\";s:69:\"index.php?category_name=$matches[1]&name=$matches[2]&feed=$matches[3]\";s:39:\"(.+?)/([^/]+).html/page/?([0-9]{1,})/?$\";s:70:\"index.php?category_name=$matches[1]&name=$matches[2]&paged=$matches[3]\";s:46:\"(.+?)/([^/]+).html/comment-page-([0-9]{1,})/?$\";s:70:\"index.php?category_name=$matches[1]&name=$matches[2]&cpage=$matches[3]\";s:35:\"(.+?)/([^/]+).html(?:/([0-9]+))?/?$\";s:69:\"index.php?category_name=$matches[1]&name=$matches[2]&page=$matches[3]\";s:25:\".+?/[^/]+.html/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:35:\".+?/[^/]+.html/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:55:\".+?/[^/]+.html/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:50:\".+?/[^/]+.html/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:50:\".+?/[^/]+.html/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:31:\".+?/[^/]+.html/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:38:\"(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:33:\"(.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:14:\"(.+?)/embed/?$\";s:46:\"index.php?category_name=$matches[1]&embed=true\";s:26:\"(.+?)/page/?([0-9]{1,})/?$\";s:53:\"index.php?category_name=$matches[1]&paged=$matches[2]\";s:33:\"(.+?)/comment-page-([0-9]{1,})/?$\";s:53:\"index.php?category_name=$matches[1]&cpage=$matches[2]\";s:8:\"(.+?)/?$\";s:35:\"index.php?category_name=$matches[1]\";}', 'yes'),
(30, 'hack_file', '0', 'yes'),
(31, 'blog_charset', 'UTF-8', 'yes'),
(32, 'moderation_keys', '', 'no'),
(33, 'active_plugins', 'a:1:{i:0;s:36:\"contact-form-7/wp-contact-form-7.php\";}', 'yes'),
(34, 'category_base', '/.', 'yes'),
(35, 'ping_sites', 'http://rpc.pingomatic.com/', 'yes'),
(36, 'comment_max_links', '2', 'yes'),
(37, 'gmt_offset', '0', 'yes'),
(38, 'default_email_category', '1', 'yes'),
(39, 'recently_edited', 'a:3:{i:0;s:89:\"/Applications/XAMPP/xamppfiles/htdocs/booking/wp-content/themes/book/assets/css/style.css\";i:2;s:78:\"/Applications/XAMPP/xamppfiles/htdocs/booking/wp-content/themes/book/style.css\";i:3;s:0:\"\";}', 'no'),
(40, 'template', 'book', 'yes'),
(41, 'stylesheet', 'book', 'yes'),
(42, 'comment_registration', '0', 'yes'),
(43, 'html_type', 'text/html', 'yes'),
(44, 'use_trackback', '0', 'yes'),
(45, 'default_role', 'subscriber', 'yes'),
(46, 'db_version', '51917', 'yes'),
(47, 'uploads_use_yearmonth_folders', '1', 'yes'),
(48, 'upload_path', '', 'yes'),
(49, 'blog_public', '1', 'yes'),
(50, 'default_link_category', '2', 'yes'),
(51, 'show_on_front', 'posts', 'yes'),
(52, 'tag_base', '', 'yes'),
(53, 'show_avatars', '1', 'yes'),
(54, 'avatar_rating', 'G', 'yes'),
(55, 'upload_url_path', '', 'yes'),
(56, 'thumbnail_size_w', '150', 'yes'),
(57, 'thumbnail_size_h', '150', 'yes'),
(58, 'thumbnail_crop', '1', 'yes'),
(59, 'medium_size_w', '300', 'yes'),
(60, 'medium_size_h', '300', 'yes'),
(61, 'avatar_default', 'mystery', 'yes'),
(62, 'large_size_w', '1024', 'yes'),
(63, 'large_size_h', '1024', 'yes'),
(64, 'image_default_link_type', 'none', 'yes'),
(65, 'image_default_size', '', 'yes'),
(66, 'image_default_align', '', 'yes'),
(67, 'close_comments_for_old_posts', '0', 'yes'),
(68, 'close_comments_days_old', '14', 'yes'),
(69, 'thread_comments', '1', 'yes'),
(70, 'thread_comments_depth', '5', 'yes'),
(71, 'page_comments', '0', 'yes'),
(72, 'comments_per_page', '50', 'yes'),
(73, 'default_comments_page', 'newest', 'yes'),
(74, 'comment_order', 'asc', 'yes'),
(75, 'sticky_posts', 'a:0:{}', 'yes'),
(76, 'widget_categories', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(77, 'widget_text', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(78, 'widget_rss', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(79, 'uninstall_plugins', 'a:0:{}', 'no'),
(80, 'timezone_string', '', 'yes'),
(81, 'page_for_posts', '0', 'yes'),
(82, 'page_on_front', '0', 'yes'),
(83, 'default_post_format', '0', 'yes'),
(84, 'link_manager_enabled', '0', 'yes'),
(85, 'finished_splitting_shared_terms', '1', 'yes'),
(86, 'site_icon', '0', 'yes'),
(87, 'medium_large_size_w', '768', 'yes'),
(88, 'medium_large_size_h', '0', 'yes'),
(89, 'wp_page_for_privacy_policy', '184', 'yes'),
(90, 'show_comments_cookies_opt_in', '1', 'yes'),
(91, 'admin_email_lifespan', '1671353059', 'yes'),
(92, 'disallowed_keys', '', 'no'),
(93, 'comment_previously_approved', '1', 'yes'),
(94, 'auto_plugin_theme_update_emails', 'a:0:{}', 'no'),
(95, 'auto_update_core_dev', 'enabled', 'yes'),
(96, 'auto_update_core_minor', 'enabled', 'yes'),
(97, 'auto_update_core_major', 'enabled', 'yes'),
(98, 'wp_force_deactivated_plugins', 'a:0:{}', 'yes'),
(99, 'initial_db_version', '51917', 'yes'),
(100, 'wp_user_roles', 'a:5:{s:13:\"administrator\";a:2:{s:4:\"name\";s:13:\"Administrator\";s:12:\"capabilities\";a:61:{s:13:\"switch_themes\";b:1;s:11:\"edit_themes\";b:1;s:16:\"activate_plugins\";b:1;s:12:\"edit_plugins\";b:1;s:10:\"edit_users\";b:1;s:10:\"edit_files\";b:1;s:14:\"manage_options\";b:1;s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:6:\"import\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:8:\"level_10\";b:1;s:7:\"level_9\";b:1;s:7:\"level_8\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:12:\"delete_users\";b:1;s:12:\"create_users\";b:1;s:17:\"unfiltered_upload\";b:1;s:14:\"edit_dashboard\";b:1;s:14:\"update_plugins\";b:1;s:14:\"delete_plugins\";b:1;s:15:\"install_plugins\";b:1;s:13:\"update_themes\";b:1;s:14:\"install_themes\";b:1;s:11:\"update_core\";b:1;s:10:\"list_users\";b:1;s:12:\"remove_users\";b:1;s:13:\"promote_users\";b:1;s:18:\"edit_theme_options\";b:1;s:13:\"delete_themes\";b:1;s:6:\"export\";b:1;}}s:6:\"editor\";a:2:{s:4:\"name\";s:6:\"Editor\";s:12:\"capabilities\";a:34:{s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;}}s:6:\"author\";a:2:{s:4:\"name\";s:6:\"Author\";s:12:\"capabilities\";a:10:{s:12:\"upload_files\";b:1;s:10:\"edit_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;s:22:\"delete_published_posts\";b:1;}}s:11:\"contributor\";a:2:{s:4:\"name\";s:11:\"Contributor\";s:12:\"capabilities\";a:5:{s:10:\"edit_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;}}s:10:\"subscriber\";a:2:{s:4:\"name\";s:10:\"Subscriber\";s:12:\"capabilities\";a:2:{s:4:\"read\";b:1;s:7:\"level_0\";b:1;}}}', 'yes'),
(101, 'fresh_site', '0', 'yes'),
(102, 'user_count', '2', 'no'),
(103, 'widget_block', 'a:6:{i:2;a:1:{s:7:\"content\";s:19:\"<!-- wp:search /-->\";}i:3;a:1:{s:7:\"content\";s:154:\"<!-- wp:group --><div class=\"wp-block-group\"><!-- wp:heading --><h2>Recent Posts</h2><!-- /wp:heading --><!-- wp:latest-posts /--></div><!-- /wp:group -->\";}i:4;a:1:{s:7:\"content\";s:227:\"<!-- wp:group --><div class=\"wp-block-group\"><!-- wp:heading --><h2>Recent Comments</h2><!-- /wp:heading --><!-- wp:latest-comments {\"displayAvatar\":false,\"displayDate\":false,\"displayExcerpt\":false} /--></div><!-- /wp:group -->\";}i:5;a:1:{s:7:\"content\";s:146:\"<!-- wp:group --><div class=\"wp-block-group\"><!-- wp:heading --><h2>Archives</h2><!-- /wp:heading --><!-- wp:archives /--></div><!-- /wp:group -->\";}i:6;a:1:{s:7:\"content\";s:150:\"<!-- wp:group --><div class=\"wp-block-group\"><!-- wp:heading --><h2>Categories</h2><!-- /wp:heading --><!-- wp:categories /--></div><!-- /wp:group -->\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(104, 'sidebars_widgets', 'a:2:{s:19:\"wp_inactive_widgets\";a:5:{i:0;s:7:\"block-2\";i:1;s:7:\"block-3\";i:2;s:7:\"block-4\";i:3;s:7:\"block-5\";i:4;s:7:\"block-6\";}s:13:\"array_version\";i:3;}', 'yes'),
(105, 'cron', 'a:7:{i:1661247859;a:1:{s:34:\"wp_privacy_delete_old_export_files\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"hourly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:3600;}}}i:1661287459;a:4:{s:18:\"wp_https_detection\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:16:\"wp_version_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:17:\"wp_update_plugins\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:16:\"wp_update_themes\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1661287470;a:1:{s:21:\"wp_update_user_counts\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1661330659;a:2:{s:30:\"wp_site_health_scheduled_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"weekly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:604800;}}s:32:\"recovery_mode_clean_expired_keys\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1661330670;a:2:{s:19:\"wp_scheduled_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}s:25:\"delete_expired_transients\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1661330672;a:1:{s:30:\"wp_scheduled_auto_draft_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}s:7:\"version\";i:2;}', 'yes'),
(106, 'widget_pages', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(107, 'widget_calendar', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(108, 'widget_archives', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(109, 'widget_media_audio', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(110, 'widget_media_image', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(111, 'widget_media_gallery', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(112, 'widget_media_video', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(113, 'widget_meta', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(114, 'widget_search', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(115, 'widget_tag_cloud', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(116, 'widget_nav_menu', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(117, 'widget_custom_html', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(119, 'recovery_keys', 'a:0:{}', 'yes'),
(122, 'theme_mods_twentytwentytwo', 'a:2:{s:18:\"custom_css_post_id\";i:-1;s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1655802266;s:4:\"data\";a:3:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:3:{i:0;s:7:\"block-2\";i:1;s:7:\"block-3\";i:2;s:7:\"block-4\";}s:9:\"sidebar-2\";a:2:{i:0;s:7:\"block-5\";i:1;s:7:\"block-6\";}}}}', 'yes'),
(125, 'https_detection_errors', 'a:1:{s:23:\"ssl_verification_failed\";a:1:{i:0;s:24:\"SSL verification failed.\";}}', 'yes'),
(126, '_site_transient_update_core', 'O:8:\"stdClass\":4:{s:7:\"updates\";a:2:{i:0;O:8:\"stdClass\":10:{s:8:\"response\";s:7:\"upgrade\";s:8:\"download\";s:59:\"https://downloads.wordpress.org/release/wordpress-6.0.1.zip\";s:6:\"locale\";s:5:\"en_US\";s:8:\"packages\";O:8:\"stdClass\":5:{s:4:\"full\";s:59:\"https://downloads.wordpress.org/release/wordpress-6.0.1.zip\";s:10:\"no_content\";s:70:\"https://downloads.wordpress.org/release/wordpress-6.0.1-no-content.zip\";s:11:\"new_bundled\";s:71:\"https://downloads.wordpress.org/release/wordpress-6.0.1-new-bundled.zip\";s:7:\"partial\";s:69:\"https://downloads.wordpress.org/release/wordpress-6.0.1-partial-0.zip\";s:8:\"rollback\";s:0:\"\";}s:7:\"current\";s:5:\"6.0.1\";s:7:\"version\";s:5:\"6.0.1\";s:11:\"php_version\";s:6:\"5.6.20\";s:13:\"mysql_version\";s:3:\"5.0\";s:11:\"new_bundled\";s:3:\"5.9\";s:15:\"partial_version\";s:3:\"6.0\";}i:1;O:8:\"stdClass\":11:{s:8:\"response\";s:10:\"autoupdate\";s:8:\"download\";s:59:\"https://downloads.wordpress.org/release/wordpress-6.0.1.zip\";s:6:\"locale\";s:5:\"en_US\";s:8:\"packages\";O:8:\"stdClass\":5:{s:4:\"full\";s:59:\"https://downloads.wordpress.org/release/wordpress-6.0.1.zip\";s:10:\"no_content\";s:70:\"https://downloads.wordpress.org/release/wordpress-6.0.1-no-content.zip\";s:11:\"new_bundled\";s:71:\"https://downloads.wordpress.org/release/wordpress-6.0.1-new-bundled.zip\";s:7:\"partial\";s:69:\"https://downloads.wordpress.org/release/wordpress-6.0.1-partial-0.zip\";s:8:\"rollback\";s:70:\"https://downloads.wordpress.org/release/wordpress-6.0.1-rollback-0.zip\";}s:7:\"current\";s:5:\"6.0.1\";s:7:\"version\";s:5:\"6.0.1\";s:11:\"php_version\";s:6:\"5.6.20\";s:13:\"mysql_version\";s:3:\"5.0\";s:11:\"new_bundled\";s:3:\"5.9\";s:15:\"partial_version\";s:3:\"6.0\";s:9:\"new_files\";s:0:\"\";}}s:12:\"last_checked\";i:1661244460;s:15:\"version_checked\";s:3:\"6.0\";s:12:\"translations\";a:0:{}}', 'no'),
(131, '_site_transient_update_themes', 'O:8:\"stdClass\":5:{s:12:\"last_checked\";i:1661240169;s:7:\"checked\";a:1:{s:4:\"book\";s:3:\"2.0\";}s:8:\"response\";a:0:{}s:9:\"no_update\";a:0:{}s:12:\"translations\";a:0:{}}', 'no'),
(137, 'can_compress_scripts', '1', 'no'),
(152, 'finished_updating_comment_type', '1', 'yes'),
(157, 'current_theme', 'Book Online', 'yes'),
(158, 'theme_mods_book', 'a:3:{i:0;b:0;s:18:\"nav_menu_locations\";a:0:{}s:18:\"custom_css_post_id\";i:-1;}', 'yes'),
(159, 'theme_switched', '', 'yes'),
(160, 'recovery_mode_email_last_sent', '1661047383', 'yes'),
(178, 'recently_activated', 'a:1:{s:34:\"advanced-custom-fields-pro/acf.php\";i:1659887514;}', 'yes'),
(179, 'acf_version', '5.9.0', 'yes'),
(183, 'widget_recent-comments', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(184, 'widget_recent-posts', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(191, 'options_background_color_header', '#008037', 'no'),
(192, '_options_background_color_header', 'field_62b19a42fd223', 'no'),
(193, 'options_name_company_header', 'Lê Lam Hải', 'no'),
(194, '_options_name_company_header', 'field_62b19a80ac3f9', 'no'),
(195, 'options_menu_header_0_text', 'Our menu', 'no'),
(196, '_options_menu_header_0_text', 'field_62b19b5ff9737', 'no'),
(197, 'options_menu_header_1_text', 'Book online', 'no'),
(198, '_options_menu_header_1_text', 'field_62b19b5ff9737', 'no'),
(199, 'options_menu_header_2_text', 'Buy gift cards', 'no'),
(200, '_options_menu_header_2_text', 'field_62b19b5ff9737', 'no'),
(201, 'options_menu_header', '', 'no'),
(202, '_options_menu_header', 'field_62b46ef176ab7', 'no'),
(218, 'options_slider_body_0_image', '16', 'no'),
(219, '_options_slider_body_0_image', 'field_62b1a1bb2f214', 'no'),
(220, 'options_slider_body_1_image', '16', 'no'),
(221, '_options_slider_body_1_image', 'field_62b1a1bb2f214', 'no'),
(224, 'options_slider_body', '', 'no'),
(225, '_options_slider_body', 'field_62b1a1a32f213', 'no'),
(233, 'options_background_color_body', '#ffffff', 'no'),
(234, '_options_background_color_body', 'field_62b1a5a14a89c', 'no'),
(244, 'options_address_body', '99 Federal Blvd, Denver, CO 80219 lll', 'no'),
(245, '_options_address_body', 'field_62b1c5d34dd47', 'no'),
(246, 'options_number_phone_body', '09699999990', 'no'),
(247, '_options_number_phone_body', 'field_62b1c6299a063', 'no'),
(248, 'options_social_network_0_link', 'https://www.google.com.vn/', 'no'),
(249, '_options_social_network_0_link', 'field_62b1c69d0a872', 'no'),
(250, 'options_social_network_0_icon', '23', 'no'),
(251, '_options_social_network_0_icon', 'field_62b1c6a40a873', 'no'),
(252, 'options_social_network_1_link', 'https://www.google.com.vn/', 'no'),
(253, '_options_social_network_1_link', 'field_62b1c69d0a872', 'no'),
(254, 'options_social_network_1_icon', '24', 'no'),
(255, '_options_social_network_1_icon', 'field_62b1c6a40a873', 'no'),
(256, 'options_social_network', '', 'no'),
(257, '_options_social_network', 'field_62b1c67b0a871', 'no'),
(258, 'options_get_direction_body', 'https://www.google.com/maps/place/Ch%E1%BB%A3+M%E1%BB%9Bi,+Ch%E1%BB%A3+M%E1%BB%9Bi+District,+An+Giang,+Vietnam/@10.5445554,105.3963302,15z/data=!3m1!4b1!4m5!3m4!1s0x310a14d3db232923:0xb99c5080400238a9!8m2!3d10.5474757!4d105.4053436', 'no'),
(259, '_options_get_direction_body', 'field_62b1c98c0ae92', 'no'),
(264, 'options_frame_body', '33', 'no'),
(265, '_options_frame_body', 'field_62b1ce6083d7a', 'no'),
(266, 'options_heart_big_body', '37', 'no'),
(267, '_options_heart_big_body', 'field_62b1ce8cdf67d', 'no'),
(268, 'options_content_frame_body', 'Your welcome words, promotions & notifications to customers', 'no'),
(269, '_options_content_frame_body', 'field_62b1cf220bb31', 'no'),
(270, 'options_text_up_review', 'We hope you enjoyed our services, please give us a 5-star review. We appreciate your support. Thank you! lll', 'no'),
(271, '_options_text_up_review', 'field_62b1cf5ab5069', 'no'),
(272, 'options_star_body', '35', 'no'),
(273, '_options_star_body', 'field_62b1cfb21bf31', 'no'),
(274, 'options_video_body', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/LKChoK8R4-Q\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'no'),
(275, '_options_video_body', 'field_62b1d13f2fa9e', 'no'),
(309, '_transient_health-check-site-status-result', '{\"good\":12,\"recommended\":5,\"critical\":2}', 'yes'),
(313, 'options_slider_body_image1', '80', 'no'),
(314, '_options_slider_body_image1', 'field_62b2d6fe9de42', 'no'),
(315, 'options_slider_body_image2', '80', 'no'),
(316, '_options_slider_body_image2', 'field_62b2d74f9de43', 'no'),
(317, 'options_slider_body_image3', '80', 'no'),
(318, '_options_slider_body_image3', 'field_62b2d79b9de44', 'no'),
(323, 'category_children', 'a:0:{}', 'yes'),
(333, 'options_', '', 'no'),
(334, '_options_', 'field_62b2e11d38f26', 'no'),
(348, 'options_social_network_link_facebook', 'https://www.facebook.com/', 'no'),
(349, '_options_social_network_link_facebook', 'field_62b1c69d0a872', 'no'),
(350, 'options_social_network_link_youtube', 'https://www.youtube.com/', 'no'),
(351, '_options_social_network_link_youtube', 'field_62b312f25ce7e', 'no'),
(352, 'options_social_network_link_instagram', 'https://www.instagram.com/', 'no'),
(353, '_options_social_network_link_instagram', 'field_62b313075ce7f', 'no'),
(369, 'options_contact_0_week-body', 'Mon', 'no'),
(370, '_options_contact_0_week-body', 'field_62b325ba1ea8c', 'no'),
(371, 'options_contact_0_time-body', '9:30 am - 5:00 pm', 'no'),
(372, '_options_contact_0_time-body', 'field_62b325cb1ea8d', 'no'),
(373, 'options_contact_1_week-body', 'Tue', 'no'),
(374, '_options_contact_1_week-body', 'field_62b325ba1ea8c', 'no'),
(375, 'options_contact_1_time-body', '9:30 am - 5:00 pm', 'no'),
(376, '_options_contact_1_time-body', 'field_62b325cb1ea8d', 'no'),
(377, 'options_contact_2_week-body', 'Wed', 'no'),
(378, '_options_contact_2_week-body', 'field_62b325ba1ea8c', 'no'),
(379, 'options_contact_2_time-body', '9:30 am - 5:00 pm', 'no'),
(380, '_options_contact_2_time-body', 'field_62b325cb1ea8d', 'no'),
(381, 'options_contact_3_week-body', 'Thu', 'no'),
(382, '_options_contact_3_week-body', 'field_62b325ba1ea8c', 'no'),
(383, 'options_contact_3_time-body', '9:30 am - 5:00 pm', 'no'),
(384, '_options_contact_3_time-body', 'field_62b325cb1ea8d', 'no'),
(385, 'options_contact_4_week-body', 'Fri', 'no'),
(386, '_options_contact_4_week-body', 'field_62b325ba1ea8c', 'no'),
(387, 'options_contact_4_time-body', '9:30 am - 5:00 pm', 'no'),
(388, '_options_contact_4_time-body', 'field_62b325cb1ea8d', 'no'),
(389, 'options_contact_5_week-body', 'Sat', 'no'),
(390, '_options_contact_5_week-body', 'field_62b325ba1ea8c', 'no'),
(391, 'options_contact_5_time-body', '9:30 am - 5:00 pm', 'no'),
(392, '_options_contact_5_time-body', 'field_62b325cb1ea8d', 'no'),
(393, 'options_contact_6_week-body', 'Sun', 'no'),
(394, '_options_contact_6_week-body', 'field_62b325ba1ea8c', 'no'),
(395, 'options_contact_6_time-body', '9:30 am - 5:00 pm', 'no'),
(396, '_options_contact_6_time-body', 'field_62b325cb1ea8d', 'no'),
(397, 'options_contact', '7', 'no'),
(398, '_options_contact', 'field_62b324c31ea8b', 'no'),
(399, 'options_open_time_body_0_week-body', 'Mon', 'no'),
(400, '_options_open_time_body_0_week-body', 'field_62b325ba1ea8c', 'no'),
(401, 'options_open_time_body_0_time-body', 'Mon: 9:30 am - 5:00 pm', 'no'),
(402, '_options_open_time_body_0_time-body', 'field_62b325cb1ea8d', 'no'),
(403, 'options_open_time_body_1_week-body', 'Tue', 'no'),
(404, '_options_open_time_body_1_week-body', 'field_62b325ba1ea8c', 'no'),
(405, 'options_open_time_body_1_time-body', 'Tue: 9:30 am - 5:00 am', 'no'),
(406, '_options_open_time_body_1_time-body', 'field_62b325cb1ea8d', 'no'),
(407, 'options_open_time_body_2_week-body', 'Wed', 'no'),
(408, '_options_open_time_body_2_week-body', 'field_62b325ba1ea8c', 'no'),
(409, 'options_open_time_body_2_time-body', 'Wed: 9:30 am - 5:00 pm', 'no'),
(410, '_options_open_time_body_2_time-body', 'field_62b325cb1ea8d', 'no'),
(411, 'options_open_time_body_3_week-body', 'Thu', 'no'),
(412, '_options_open_time_body_3_week-body', 'field_62b325ba1ea8c', 'no'),
(413, 'options_open_time_body_3_time-body', 'Thu: 9:30 am - 5:00 pm', 'no'),
(414, '_options_open_time_body_3_time-body', 'field_62b325cb1ea8d', 'no'),
(415, 'options_open_time_body_4_week-body', 'Fri', 'no'),
(416, '_options_open_time_body_4_week-body', 'field_62b325ba1ea8c', 'no'),
(417, 'options_open_time_body_4_time-body', 'Fri: 9:30 am - 5:00 pm', 'no'),
(418, '_options_open_time_body_4_time-body', 'field_62b325cb1ea8d', 'no'),
(419, 'options_open_time_body_5_week-body', 'Sat', 'no'),
(420, '_options_open_time_body_5_week-body', 'field_62b325ba1ea8c', 'no'),
(421, 'options_open_time_body_5_time-body', 'Sat: 9:30 am - 5:00 pm', 'no'),
(422, '_options_open_time_body_5_time-body', 'field_62b325cb1ea8d', 'no'),
(423, 'options_open_time_body_6_week-body', 'Sun', 'no'),
(424, '_options_open_time_body_6_week-body', 'field_62b325ba1ea8c', 'no'),
(425, 'options_open_time_body_6_time-body', 'Sun: 9:30 am - 5:00 pm', 'no'),
(426, '_options_open_time_body_6_time-body', 'field_62b325cb1ea8d', 'no'),
(427, 'options_open_time_body', '7', 'no'),
(428, '_options_open_time_body', 'field_62b324c31ea8b', 'no'),
(433, 'options_term_of_service_footer', 'https://www.google.com.vn/', 'no'),
(434, '_options_term_of_service_footer', 'field_62b328f64f905', 'no'),
(435, 'options_privacy_policy_footer', 'https://www.google.com.vn/', 'no'),
(436, '_options_privacy_policy_footer', 'field_62b3292b4f906', 'no'),
(440, 'options_footer_text', 'Term of service', 'no'),
(441, '_options_footer_text', 'field_62b32c1551a62', 'no'),
(442, 'options_footer_link_term_of_service', 'https://www.google.com.vn/', 'no'),
(443, '_options_footer_link_term_of_service', 'field_62b32c3651a63', 'no'),
(444, 'options_footer_privacy_policy', 'Privacy policy', 'no'),
(445, '_options_footer_privacy_policy', 'field_62b32c4651a64', 'no'),
(446, 'options_footer_link_privacy_policy', 'https://www.google.com.vn/', 'no'),
(447, '_options_footer_link_privacy_policy', 'field_62b32c5e51a65', 'no'),
(448, 'options_footer', '', 'no'),
(449, '_options_footer', 'field_62b32bee51a61', 'no'),
(450, 'options_footer_text_term_of_service', 'Term of service', 'no'),
(451, '_options_footer_text_term_of_service', 'field_62b32c1551a62', 'no'),
(452, 'options_footer_text_privacy_policy', 'Privacy policy', 'no'),
(453, '_options_footer_text_privacy_policy', 'field_62b32c4651a64', 'no'),
(512, 'options_menu_0_menu_parent', 'Manicure Menu', 'no'),
(513, '_options_menu_0_menu_parent', 'field_62b42e4eb71dc', 'no'),
(514, 'options_menu_0_menu_child_0_title', 'Fullset acrylic with tips', 'no'),
(515, '_options_menu_0_menu_child_0_title', 'field_62b42e9db71de', 'no'),
(516, 'options_menu_0_menu_child_0_description', 'Perfect service for 60 mins', 'no'),
(517, '_options_menu_0_menu_child_0_description', 'field_62b42edfb71df', 'no'),
(518, 'options_menu_0_menu_child_0_price', '$50', 'no'),
(519, '_options_menu_0_menu_child_0_price', 'field_62b42eebb71e0', 'no'),
(520, 'options_menu_0_menu_child_1_title', 'Acrylic overlay', 'no'),
(521, '_options_menu_0_menu_child_1_title', 'field_62b42e9db71de', 'no'),
(522, 'options_menu_0_menu_child_1_description', '60 mins service', 'no'),
(523, '_options_menu_0_menu_child_1_description', 'field_62b42edfb71df', 'no'),
(524, 'options_menu_0_menu_child_1_price', '$45', 'no'),
(525, '_options_menu_0_menu_child_1_price', 'field_62b42eebb71e0', 'no'),
(526, 'options_menu_0_menu_child', '3', 'no'),
(527, '_options_menu_0_menu_child', 'field_62b42e6ab71dd', 'no'),
(528, 'options_menu_1_menu_parent', 'Pedicure Menu', 'no'),
(529, '_options_menu_1_menu_parent', 'field_62b42e4eb71dc', 'no'),
(530, 'options_menu_1_menu_child_0_title', 'French design', 'no'),
(531, '_options_menu_1_menu_child_0_title', 'field_62b42e9db71de', 'no'),
(532, 'options_menu_1_menu_child_0_description', 'Beautiful design', 'no'),
(533, '_options_menu_1_menu_child_0_description', 'field_62b42edfb71df', 'no'),
(534, 'options_menu_1_menu_child_0_price', '$15', 'no'),
(535, '_options_menu_1_menu_child_0_price', 'field_62b42eebb71e0', 'no'),
(536, 'options_menu_1_menu_child_1_title', 'Nail ombre', 'no'),
(537, '_options_menu_1_menu_child_1_title', 'field_62b42e9db71de', 'no'),
(538, 'options_menu_1_menu_child_1_description', 'Wonderful', 'no'),
(539, '_options_menu_1_menu_child_1_description', 'field_62b42edfb71df', 'no'),
(540, 'options_menu_1_menu_child_1_price', '$16', 'no'),
(541, '_options_menu_1_menu_child_1_price', 'field_62b42eebb71e0', 'no'),
(542, 'options_menu_1_menu_child', '3', 'no'),
(543, '_options_menu_1_menu_child', 'field_62b42e6ab71dd', 'no'),
(544, 'options_menu_2_menu_parent', 'Hair', 'no'),
(545, '_options_menu_2_menu_parent', 'field_62b42e4eb71dc', 'no'),
(546, 'options_menu_2_menu_child', '1', 'no'),
(547, '_options_menu_2_menu_child', 'field_62b42e6ab71dd', 'no'),
(548, 'options_menu', '4', 'no'),
(549, '_options_menu', 'field_62b42e0bb71db', 'no'),
(550, 'options_menu_0_title_parent', 'Nails', 'no'),
(551, '_options_menu_0_title_parent', 'field_62b42e4eb71dc', 'no'),
(552, 'options_menu_1_title_parent', 'Nail designs', 'no'),
(553, '_options_menu_1_title_parent', 'field_62b42e4eb71dc', 'no'),
(554, 'options_menu_2_title_parent', 'manicure', 'no'),
(555, '_options_menu_2_title_parent', 'field_62b42e4eb71dc', 'no'),
(556, 'options_menu_0_price_parent', '', 'no'),
(557, '_options_menu_0_price_parent', 'field_62b430356d75b', 'no'),
(558, 'options_menu_1_price_parent', '', 'no'),
(559, '_options_menu_1_price_parent', 'field_62b430356d75b', 'no'),
(560, 'options_menu_2_price_parent', '', 'no'),
(561, '_options_menu_2_price_parent', 'field_62b430356d75b', 'no'),
(568, 'options_menu_1_menu_child_2_title', 'Hand drawn (2 nails)', 'no'),
(569, '_options_menu_1_menu_child_2_title', 'field_62b42e9db71de', 'no'),
(570, 'options_menu_1_menu_child_2_description', 'pretty', 'no'),
(571, '_options_menu_1_menu_child_2_description', 'field_62b42edfb71df', 'no'),
(572, 'options_menu_1_menu_child_2_price', '$5', 'no'),
(573, '_options_menu_1_menu_child_2_price', 'field_62b42eebb71e0', 'no'),
(575, 'options_menu_0_description_parent', '', 'no'),
(576, '_options_menu_0_description_parent', 'field_62b4400ab37e5', 'no'),
(577, 'options_menu_1_description_parent', '', 'no'),
(578, '_options_menu_1_description_parent', 'field_62b4400ab37e5', 'no'),
(579, 'options_menu_2_description_parent', '', 'no'),
(580, '_options_menu_2_description_parent', 'field_62b4400ab37e5', 'no'),
(632, 'options_menu_header_link', '', 'no'),
(633, '_options_menu_header_link', 'field_62b46f0476ab8', 'no'),
(634, 'options_menu_header_text', '', 'no'),
(635, '_options_menu_header_text', 'field_62b46f0d76ab9', 'no'),
(640, 'options_popup_body', 'https://booking-page.mysoftkeymarketing.com/', 'no'),
(641, '_options_popup_body', 'field_62b46fa32d94a', 'no'),
(642, 'options_background_color_contact', '#22aa00', 'no'),
(643, '_options_background_color_contact', 'field_62b46feb29f9a', 'no'),
(740, 'options_pick_time_body_0_time', '9:00 AM - 10:00 AM', 'no'),
(741, '_options_pick_time_body_0_time', 'field_62b494d2b9ffb', 'no'),
(742, 'options_pick_time_body_1_time', '10:00 AM - 11:00 AM', 'no'),
(743, '_options_pick_time_body_1_time', 'field_62b494d2b9ffb', 'no'),
(744, 'options_pick_time_body_2_time', '11:00 AM - 12:00 PM', 'no'),
(745, '_options_pick_time_body_2_time', 'field_62b494d2b9ffb', 'no'),
(746, 'options_pick_time_body_3_time', '12:00 PM - 1:00 PM', 'no'),
(747, '_options_pick_time_body_3_time', 'field_62b494d2b9ffb', 'no'),
(748, 'options_pick_time_body_4_time', '1:00 PM - 1:00 PM', 'no'),
(749, '_options_pick_time_body_4_time', 'field_62b494d2b9ffb', 'no'),
(750, 'options_pick_time_body_5_time', '2:00 PM - 3:00 PM', 'no'),
(751, '_options_pick_time_body_5_time', 'field_62b494d2b9ffb', 'no'),
(752, 'options_pick_time_body', '9', 'no'),
(753, '_options_pick_time_body', 'field_62b494bab9ffa', 'no'),
(794, 'options_menu_0_menu_child_2_title', 'Acrylic infill', 'no'),
(795, '_options_menu_0_menu_child_2_title', 'field_62b42e9db71de', 'no'),
(796, 'options_menu_0_menu_child_2_description', '45 mins service', 'no'),
(797, '_options_menu_0_menu_child_2_description', 'field_62b42edfb71df', 'no'),
(798, 'options_menu_0_menu_child_2_price', '$40', 'no'),
(799, '_options_menu_0_menu_child_2_price', 'field_62b42eebb71e0', 'no'),
(804, 'options_menu_2_menu_child_0_title', 'abc', 'no'),
(805, '_options_menu_2_menu_child_0_title', 'field_62b42e9db71de', 'no'),
(806, 'options_menu_2_menu_child_0_description', 'sd', 'no'),
(807, '_options_menu_2_menu_child_0_description', 'field_62b42edfb71df', 'no'),
(808, 'options_menu_2_menu_child_0_price', '$10', 'no'),
(809, '_options_menu_2_menu_child_0_price', 'field_62b42eebb71e0', 'no'),
(889, 'options_pick_time_body_6_time', '3:00 PM - 4:00 PM', 'no'),
(890, '_options_pick_time_body_6_time', 'field_62b494d2b9ffb', 'no'),
(891, 'options_pick_time_body_7_time', '4:00 PM - 5:00 PM', 'no'),
(892, '_options_pick_time_body_7_time', 'field_62b494d2b9ffb', 'no'),
(893, 'options_pick_time_body_8_time', '5:00 PM - 6:00 PM', 'no'),
(894, '_options_pick_time_body_8_time', 'field_62b494d2b9ffb', 'no'),
(932, 'options_pick_time_body_0_slot', '0', 'no'),
(933, '_options_pick_time_body_0_slot', 'field_62b99f85112cc', 'no'),
(934, 'options_pick_time_body_1_slot', '4', 'no'),
(935, '_options_pick_time_body_1_slot', 'field_62b99f85112cc', 'no'),
(936, 'options_pick_time_body_2_slot', '9', 'no'),
(937, '_options_pick_time_body_2_slot', 'field_62b99f85112cc', 'no'),
(938, 'options_pick_time_body_3_slot', '4', 'no'),
(939, '_options_pick_time_body_3_slot', 'field_62b99f85112cc', 'no'),
(940, 'options_pick_time_body_4_slot', '2', 'no'),
(941, '_options_pick_time_body_4_slot', 'field_62b99f85112cc', 'no'),
(942, 'options_pick_time_body_5_slot', '17', 'no'),
(943, '_options_pick_time_body_5_slot', 'field_62b99f85112cc', 'no'),
(944, 'options_pick_time_body_6_slot', '11', 'no'),
(945, '_options_pick_time_body_6_slot', 'field_62b99f85112cc', 'no'),
(946, 'options_pick_time_body_7_slot', '50', 'no'),
(947, '_options_pick_time_body_7_slot', 'field_62b99f85112cc', 'no'),
(948, 'options_pick_time_body_8_slot', '20', 'no'),
(949, '_options_pick_time_body_8_slot', 'field_62b99f85112cc', 'no'),
(1375, 'options_menu_3_title_parent', 'lelamhai', 'no'),
(1376, '_options_menu_3_title_parent', 'field_62b42e4eb71dc', 'no'),
(1377, 'options_menu_3_description_parent', '', 'no'),
(1378, '_options_menu_3_description_parent', 'field_62b4400ab37e5', 'no'),
(1379, 'options_menu_3_price_parent', '', 'no'),
(1380, '_options_menu_3_price_parent', 'field_62b430356d75b', 'no'),
(1381, 'options_menu_3_menu_child_0_title', 'service1', 'no'),
(1382, '_options_menu_3_menu_child_0_title', 'field_62b42e9db71de', 'no'),
(1383, 'options_menu_3_menu_child_0_description', 'description', 'no'),
(1384, '_options_menu_3_menu_child_0_description', 'field_62b42edfb71df', 'no'),
(1385, 'options_menu_3_menu_child_0_price', '$100', 'no'),
(1386, '_options_menu_3_menu_child_0_price', 'field_62b42eebb71e0', 'no'),
(1387, 'options_menu_3_menu_child', '1', 'no'),
(1388, '_options_menu_3_menu_child', 'field_62b42e6ab71dd', 'no'),
(4840, 'businessName', 'lelamhai', 'yes'),
(4842, 'googleReview', 'eee', 'yes'),
(4843, 'address', 'qqq1', 'yes'),
(4844, 'googleMaps', 'gggg', 'yes'),
(4845, 'phoneNumber', '096999999', 'yes'),
(4846, 'facebook', 'f11', 'yes'),
(4847, 'instagram', 'i11', 'yes'),
(4848, 'youtube', 'https://www.youtube.com/embed/zzFzeLl5QT8', 'yes'),
(4874, 'week2', '10:30-0-11:30-1-1', 'yes'),
(4875, 'week6', '9:30-1-9:30-1-0', 'yes'),
(4876, 'week3', '9:30-0-9:30-1-0', 'yes'),
(4877, 'week7', '9:30-1-9:30-0-0', 'yes'),
(4878, 'week4', '9:30-1-9:30-0-0', 'yes'),
(4879, 'week5', '9:30-1-9:30-0-0', 'yes'),
(4880, 'week8', 'lelamhai-0-haitho-1-0', 'yes'),
(5022, 'headerColor', '#ff0000', 'yes'),
(5023, 'logo', '', 'yes'),
(5024, 'textColor', '#000000', 'yes'),
(5025, 'additionalMenu', 'menu 2', 'yes'),
(5026, 'linkMenu', 'link 2', 'yes'),
(5027, 'youtubeHeader', 'youtube 2', 'yes'),
(5078, 'backgroundColor', '#00ff11', 'yes'),
(5079, 'buttonColor', '#d400ff', 'yes'),
(5080, 'textColorBody', '#ff0000', 'yes'),
(5082, 'body', 'body', 'no'),
(5083, 'contentWelcome', 'kkakaaaka', 'no'),
(5085, 'titleWelcome', 'title 1234', 'yes'),
(5086, 'slider1', 'http://localhost/booking/wp-content/uploads/2022/07/282022989_2582768201856753_2756494824881119692_n-4.jpg', 'yes'),
(5087, 'slider2', 'http://localhost/booking/wp-content/uploads/2022/07/278032474_5017391924975289_8141950049696755457_n-1.jpeg', 'yes'),
(5088, 'slider3', 'http://localhost/booking/wp-content/uploads/2022/07/astronaut-copy-1.png', 'yes'),
(5089, 'slider4', 'http://localhost/booking/wp-content/uploads/2022/07/285289728_6003095709705795_8899118295110754795_n-2.jpg', 'yes'),
(5090, 'slider5', 'http://localhost/booking/wp-content/uploads/2022/07/288060299_1785661178437404_3929594054157294826_n-1.jpg', 'yes'),
(5110, 'backgroundColorReviews', '#e1ff00', 'yes'),
(5111, 'textColorReviews', '#ff0000', 'yes'),
(5112, 'titleReviews', '', 'yes'),
(5113, 'textBodyReviews1', 'content', 'yes'),
(5114, 'textBodyReviews2', 'content', 'yes'),
(5115, 'textBodyReviews3', 'content', 'yes'),
(5118, 'titleGift', 'aaaa', 'yes'),
(5119, 'contentGift', 'bbbb', 'yes'),
(5120, 'gift', 'http://localhost/booking/wp-content/uploads/2022/07/79331767_2512275302352114_7951899590813286400_n-7.jpeg', 'yes'),
(5148, '_wp_suggested_policy_text_has_changed', 'not-changed', 'yes'),
(5238, 'footerColor', '#59ff00', 'yes'),
(5239, 'textColorFooter', '#ff0000', 'yes'),
(5240, 'contentAboutUs', 'lelamhai', 'yes'),
(5909, 'business-name', 'haitho', 'yes'),
(5931, 'business-logo-header', 'http://localhost/booking/wp-content/uploads/2022/08/79331767_2512275302352114_7951899590813286400_n-1.jpeg', 'yes'),
(5936, 'business-backgroundcolor-header', '#7cc0bf', 'yes'),
(5941, 'business-text-color-header', '#ee9191', 'yes'),
(5948, 'business-addmenu-header', 'Products', 'yes'),
(5961, 'business-linkmenu-header', 'https://www.google.com.vn/', 'yes'),
(5964, 'business-youtubevideo-banner', 'cmmOZ5YnKr0', 'yes'),
(6119, 'business-address', '99 Federal Blvd, Denver, CO 80219', 'yes'),
(6124, 'business-phone-number', '0999999999', 'yes'),
(6129, 'business-google-map', 'https://www.google.com/maps/place/Ch%E1%BB%A3+M%E1%BB%9Bi,+Ch%E1%BB%A3+M%E1%BB%9Bi+District,+An+Giang,+Vietnam/@10.5445554,105.3963088,15z/data=!3m1!4b1!4m5!3m4!1s0x310a14d3db232923:0xb99c5080400238a9!8m2!3d10.5474757!4d105.4053436', 'yes'),
(6134, 'business-title-welcome-body', 'Add a little bit of body text Add a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit', 'yes'),
(6139, 'business-title-welcome', 'Welcome to Flower Nail & Spa hai', 'yes'),
(6140, 'business-content-welcome', 'Add a little bit of body text Add a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit ssss', 'yes');
INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(6149, 'business-slider1-welcome', 'http://localhost/booking/wp-content/uploads/2022/08/79331767_2512275302352114_7951899590813286400_n.jpeg', 'yes'),
(6150, 'business-slider2-welcome', 'http://localhost/booking/wp-content/uploads/2022/08/278032474_5017391924975289_8141950049696755457_n.jpeg', 'yes'),
(6151, 'business-slider3-welcome', 'http://localhost/booking/wp-content/uploads/2022/08/288060299_1785661178437404_3929594054157294826_n.jpg', 'yes'),
(6152, 'business-slider4-welcome', 'http://localhost/booking/wp-content/uploads/2022/08/astronaut-copy.png', 'yes'),
(6153, 'business-slider5-welcome', 'http://localhost/booking/wp-content/uploads/2022/08/buying.png', 'yes'),
(6159, 'business-backgroundcolor-reviews', '#00ffcc', 'yes'),
(6160, 'business-textcolor-reviews', '#0400ff', 'yes'),
(6165, 'business-title-reviews', 'Our Client\\\'s Reviews', 'yes'),
(6195, 'business-content1-reviews', '<p>body 1</p><p>sub</p>', 'yes'),
(6196, 'business-content2-reviews', '<p><em>body 2</em></p><p>sub</p>', 'yes'),
(6197, 'business-content3-reviews', '<p><strong>body 3</strong></p><p>sub</p>', 'yes'),
(6264, 'business-google-review', 'https://www.google.com.vn/', 'yes'),
(6340, 'business-content-gift', 'Buy gift cards for your beloved ones Buy gift cards for your beloved ones Buy gift cards for your beloved ones aaaa', 'yes'),
(6345, 'business-title-gift', 'Gift Cards aaa', 'yes'),
(6354, 'business-image-gift', 'http://localhost/booking/wp-content/uploads/2022/08/plance-1.832b6b7860d99d326540.png', 'yes'),
(6386, 'services_children', 'a:2:{i:168;a:1:{i:0;i:169;}i:170;a:2:{i:0;i:171;i:1;i:172;}}', 'yes'),
(6486, 'business-facebook', 'https://www.facebook.com/', 'yes'),
(6487, 'business-youtube', 'https://www.youtube.com/', 'yes'),
(6488, 'business-intergram', 'https://www.instagram.com/', 'yes'),
(6493, 'business-backgroundcolor-footer', '#7c756c', 'yes'),
(6494, 'business-textcolor-footer', '#ff0000', 'yes'),
(6495, 'business-aboutus-footer', 'Add a little bit of body text Add a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body text aaa', 'yes'),
(6575, 'business-map-iframe', '<iframe src=\\\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31364.119823900524!2d105.30460665587573!3d10.694705130034217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310a39149ffa4ed7%3A0xc7efe5981b3fea1b!2zQ2jhu6MgVsOgbSwgUGjDuiBUw6JuIERpc3RyaWN0LCBBbiBHaWFuZywgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1659770694047!5m2!1sen!2s\\\" width=\\\"600\\\" height=\\\"450\\\" style=\\\"border:0;\\\" allowfullscreen=\\\"\\\" loading=\\\"lazy\\\" referrerpolicy=\\\"no-referrer-when-downgrade\\\"></iframe>', 'yes'),
(6596, 'business-backgroundcolor-body', '#00bfff', 'yes'),
(6616, 'business-text-color-body', '#fff700', 'yes'),
(6671, 'business-text-colorbutton-body', '#ff0000', 'yes'),
(6737, 'business-backgroundbutton-body', '#9680e5', 'yes'),
(6955, 'wpcf7', 'a:2:{s:7:\"version\";s:5:\"5.6.1\";s:13:\"bulk_validate\";a:4:{s:9:\"timestamp\";i:1660031643;s:7:\"version\";s:5:\"5.6.1\";s:11:\"count_valid\";i:1;s:13:\"count_invalid\";i:0;}}', 'yes'),
(6958, 'secret_key', '|yPAJ/jGH[U9$yaODfu:#Q_Jf>a<dJ64Wvjix8C)L,mMnt=X{3f,Scdc2u(_Kztu', 'no'),
(7793, 'times_children', 'a:0:{}', 'yes'),
(8043, '_site_transient_timeout_browser_880e83e2207e3bc59bfccfc6208e4df9', '1661345559', 'no'),
(8044, '_site_transient_browser_880e83e2207e3bc59bfccfc6208e4df9', 'a:10:{s:4:\"name\";s:7:\"Firefox\";s:7:\"version\";s:5:\"103.0\";s:8:\"platform\";s:9:\"Macintosh\";s:10:\"update_url\";s:32:\"https://www.mozilla.org/firefox/\";s:7:\"img_src\";s:44:\"http://s.w.org/images/browsers/firefox.png?1\";s:11:\"img_src_ssl\";s:45:\"https://s.w.org/images/browsers/firefox.png?1\";s:15:\"current_version\";s:2:\"56\";s:7:\"upgrade\";b:0;s:8:\"insecure\";b:0;s:6:\"mobile\";b:0;}', 'no'),
(8080, '_site_transient_timeout_browser_8dbbec752b538d6f37ba4a2878298182', '1661423806', 'no'),
(8081, '_site_transient_browser_8dbbec752b538d6f37ba4a2878298182', 'a:10:{s:4:\"name\";s:6:\"Chrome\";s:7:\"version\";s:9:\"104.0.0.0\";s:8:\"platform\";s:9:\"Macintosh\";s:10:\"update_url\";s:29:\"https://www.google.com/chrome\";s:7:\"img_src\";s:43:\"http://s.w.org/images/browsers/chrome.png?1\";s:11:\"img_src_ssl\";s:44:\"https://s.w.org/images/browsers/chrome.png?1\";s:15:\"current_version\";s:2:\"18\";s:7:\"upgrade\";b:0;s:8:\"insecure\";b:0;s:6:\"mobile\";b:0;}', 'no'),
(8082, '_site_transient_timeout_php_check_653b16e6c5979ac325fae9f9db6a18fe', '1661423806', 'no'),
(8083, '_site_transient_php_check_653b16e6c5979ac325fae9f9db6a18fe', 'a:5:{s:19:\"recommended_version\";s:3:\"7.4\";s:15:\"minimum_version\";s:6:\"5.6.20\";s:12:\"is_supported\";b:1;s:9:\"is_secure\";b:1;s:13:\"is_acceptable\";b:1;}', 'no'),
(8700, '_site_transient_timeout_theme_roots', '1661246260', 'no'),
(8701, '_site_transient_theme_roots', 'a:1:{s:4:\"book\";s:7:\"/themes\";}', 'no'),
(8702, '_site_transient_update_plugins', 'O:8:\"stdClass\":5:{s:12:\"last_checked\";i:1661244460;s:8:\"response\";a:2:{s:19:\"akismet/akismet.php\";O:8:\"stdClass\":12:{s:2:\"id\";s:21:\"w.org/plugins/akismet\";s:4:\"slug\";s:7:\"akismet\";s:6:\"plugin\";s:19:\"akismet/akismet.php\";s:11:\"new_version\";s:3:\"5.0\";s:3:\"url\";s:38:\"https://wordpress.org/plugins/akismet/\";s:7:\"package\";s:54:\"https://downloads.wordpress.org/plugin/akismet.5.0.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:59:\"https://ps.w.org/akismet/assets/icon-256x256.png?rev=969272\";s:2:\"1x\";s:59:\"https://ps.w.org/akismet/assets/icon-128x128.png?rev=969272\";}s:7:\"banners\";a:1:{s:2:\"1x\";s:61:\"https://ps.w.org/akismet/assets/banner-772x250.jpg?rev=479904\";}s:11:\"banners_rtl\";a:0:{}s:8:\"requires\";s:3:\"5.0\";s:6:\"tested\";s:5:\"6.0.1\";s:12:\"requires_php\";b:0;}s:36:\"contact-form-7/wp-contact-form-7.php\";O:8:\"stdClass\":12:{s:2:\"id\";s:28:\"w.org/plugins/contact-form-7\";s:4:\"slug\";s:14:\"contact-form-7\";s:6:\"plugin\";s:36:\"contact-form-7/wp-contact-form-7.php\";s:11:\"new_version\";s:5:\"5.6.2\";s:3:\"url\";s:45:\"https://wordpress.org/plugins/contact-form-7/\";s:7:\"package\";s:63:\"https://downloads.wordpress.org/plugin/contact-form-7.5.6.2.zip\";s:5:\"icons\";a:3:{s:2:\"2x\";s:67:\"https://ps.w.org/contact-form-7/assets/icon-256x256.png?rev=2279696\";s:2:\"1x\";s:59:\"https://ps.w.org/contact-form-7/assets/icon.svg?rev=2339255\";s:3:\"svg\";s:59:\"https://ps.w.org/contact-form-7/assets/icon.svg?rev=2339255\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:69:\"https://ps.w.org/contact-form-7/assets/banner-1544x500.png?rev=860901\";s:2:\"1x\";s:68:\"https://ps.w.org/contact-form-7/assets/banner-772x250.png?rev=880427\";}s:11:\"banners_rtl\";a:0:{}s:8:\"requires\";s:3:\"5.9\";s:6:\"tested\";s:5:\"6.0.1\";s:12:\"requires_php\";b:0;}}s:12:\"translations\";a:0:{}s:9:\"no_update\";a:1:{s:9:\"hello.php\";O:8:\"stdClass\":10:{s:2:\"id\";s:25:\"w.org/plugins/hello-dolly\";s:4:\"slug\";s:11:\"hello-dolly\";s:6:\"plugin\";s:9:\"hello.php\";s:11:\"new_version\";s:5:\"1.7.2\";s:3:\"url\";s:42:\"https://wordpress.org/plugins/hello-dolly/\";s:7:\"package\";s:60:\"https://downloads.wordpress.org/plugin/hello-dolly.1.7.2.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:64:\"https://ps.w.org/hello-dolly/assets/icon-256x256.jpg?rev=2052855\";s:2:\"1x\";s:64:\"https://ps.w.org/hello-dolly/assets/icon-128x128.jpg?rev=2052855\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:67:\"https://ps.w.org/hello-dolly/assets/banner-1544x500.jpg?rev=2645582\";s:2:\"1x\";s:66:\"https://ps.w.org/hello-dolly/assets/banner-772x250.jpg?rev=2052855\";}s:11:\"banners_rtl\";a:0:{}s:8:\"requires\";s:3:\"4.6\";}}s:7:\"checked\";a:3:{s:19:\"akismet/akismet.php\";s:5:\"4.2.4\";s:36:\"contact-form-7/wp-contact-form-7.php\";s:5:\"5.6.1\";s:9:\"hello.php\";s:5:\"1.7.2\";}}', 'no'),
(8709, '_transient_timeout_global_styles_book', '1661247245', 'no'),
(8710, '_transient_global_styles_book', 'body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url(\'#wp-duotone-dark-grayscale\');--wp--preset--duotone--grayscale: url(\'#wp-duotone-grayscale\');--wp--preset--duotone--purple-yellow: url(\'#wp-duotone-purple-yellow\');--wp--preset--duotone--blue-red: url(\'#wp-duotone-blue-red\');--wp--preset--duotone--midnight: url(\'#wp-duotone-midnight\');--wp--preset--duotone--magenta-yellow: url(\'#wp-duotone-magenta-yellow\');--wp--preset--duotone--purple-green: url(\'#wp-duotone-purple-green\');--wp--preset--duotone--blue-orange: url(\'#wp-duotone-blue-orange\');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `wp_postmeta`
--

CREATE TABLE `wp_postmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_postmeta`
--

INSERT INTO `wp_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(3, 6, '_edit_last', '1'),
(4, 6, '_edit_lock', '1658905987:1'),
(5, 16, '_wp_attached_file', '2022/06/banner.jpeg'),
(6, 16, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:1920;s:6:\"height\";i:585;s:4:\"file\";s:19:\"2022/06/banner.jpeg\";s:8:\"filesize\";i:272579;s:5:\"sizes\";a:5:{s:6:\"medium\";a:5:{s:4:\"file\";s:18:\"banner-300x91.jpeg\";s:5:\"width\";i:300;s:6:\"height\";i:91;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:6466;}s:5:\"large\";a:5:{s:4:\"file\";s:20:\"banner-1024x312.jpeg\";s:5:\"width\";i:1024;s:6:\"height\";i:312;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:42473;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:19:\"banner-150x150.jpeg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:6352;}s:12:\"medium_large\";a:5:{s:4:\"file\";s:19:\"banner-768x234.jpeg\";s:5:\"width\";i:768;s:6:\"height\";i:234;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:27045;}s:9:\"1536x1536\";a:5:{s:4:\"file\";s:20:\"banner-1536x468.jpeg\";s:5:\"width\";i:1536;s:6:\"height\";i:468;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:79543;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(7, 23, '_wp_attached_file', '2022/06/icon_facebook.png'),
(8, 23, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:32;s:6:\"height\";i:32;s:4:\"file\";s:25:\"2022/06/icon_facebook.png\";s:8:\"filesize\";i:2094;s:5:\"sizes\";a:0:{}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(9, 24, '_wp_attached_file', '2022/06/icon_youtube.png'),
(10, 24, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:32;s:6:\"height\";i:32;s:4:\"file\";s:24:\"2022/06/icon_youtube.png\";s:8:\"filesize\";i:880;s:5:\"sizes\";a:0:{}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(13, 34, '_wp_attached_file', '2022/06/heart.png'),
(14, 34, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:114;s:6:\"height\";i:107;s:4:\"file\";s:17:\"2022/06/heart.png\";s:8:\"filesize\";i:1973;s:5:\"sizes\";a:0:{}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(15, 35, '_wp_attached_file', '2022/06/stars.png'),
(16, 35, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:133;s:6:\"height\";i:18;s:4:\"file\";s:17:\"2022/06/stars.png\";s:8:\"filesize\";i:2604;s:5:\"sizes\";a:0:{}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(19, 37, '_wp_attached_file', '2022/06/nail_heart.png'),
(20, 37, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:512;s:6:\"height\";i:453;s:4:\"file\";s:22:\"2022/06/nail_heart.png\";s:8:\"filesize\";i:14076;s:5:\"sizes\";a:2:{s:6:\"medium\";a:5:{s:4:\"file\";s:22:\"nail_heart-300x265.png\";s:5:\"width\";i:300;s:6:\"height\";i:265;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:6965;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:22:\"nail_heart-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:2773;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(22, 72, '_edit_lock', '1659252251:1'),
(26, 80, '_wp_attached_file', '2022/07/banner.jpg'),
(27, 80, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:1920;s:6:\"height\";i:770;s:4:\"file\";s:18:\"2022/07/banner.jpg\";s:8:\"filesize\";i:202596;s:5:\"sizes\";a:5:{s:6:\"medium\";a:5:{s:4:\"file\";s:18:\"banner-300x120.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:120;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:7473;}s:5:\"large\";a:5:{s:4:\"file\";s:19:\"banner-1024x411.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:411;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:39374;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:18:\"banner-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:5136;}s:12:\"medium_large\";a:5:{s:4:\"file\";s:18:\"banner-768x308.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:308;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:26143;}s:9:\"1536x1536\";a:5:{s:4:\"file\";s:19:\"banner-1536x616.jpg\";s:5:\"width\";i:1536;s:6:\"height\";i:616;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:72155;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(90, 130, '_edit_last', '1'),
(91, 130, '_edit_lock', '1657433947:1'),
(201, 173, 'booking_date', '2022-07-10'),
(202, 173, 'booking_phone', '1234567890'),
(203, 173, 'booking_email', ''),
(204, 173, 'booking_services', '[[\"French design\"],[\"Acrylic overlay\"]]'),
(205, 173, 'booking_status', '1'),
(206, 173, 'booking_slots', '2'),
(207, 173, '_edit_lock', '1657454596:1'),
(208, 174, 'booking_date', '2022-07-10'),
(209, 174, 'booking_phone', '1234567890'),
(210, 174, 'booking_email', ''),
(211, 174, 'booking_services', '[[\"Acrylic overlay\"],[\"French design\"],[\"Acrylic overlay\"],[\"French design\"],[\"Acrylic overlay\"]]'),
(212, 174, 'booking_status', '1'),
(213, 174, 'booking_slots', '5'),
(214, 175, 'booking_date', '2022-07-12'),
(215, 175, 'booking_phone', '1234567890'),
(216, 175, 'booking_email', ''),
(217, 175, 'booking_services', '[[\"Fullset acrylic with tips\"]]'),
(218, 175, 'booking_status', '1'),
(219, 175, 'booking_slots', '1'),
(220, 175, '_edit_lock', '1657537782:1'),
(221, 176, '_edit_lock', '1660730473:1'),
(222, 176, '_wp_page_template', 'edit-books.php'),
(223, 178, '_edit_lock', '1657635797:1'),
(224, 179, 'booking_date', '2022-07-12'),
(225, 179, 'booking_phone', '1234567890'),
(226, 179, 'booking_email', ''),
(227, 179, 'booking_services', '[[\"French design\"],[\"Acrylic overlay\"]]'),
(228, 179, 'booking_status', '1'),
(229, 179, 'booking_slots', '2'),
(230, 179, '_edit_lock', '1657635932:1'),
(231, 180, 'booking_date', '2022-07-12'),
(232, 180, 'booking_phone', '1234567890'),
(233, 180, 'booking_email', ''),
(234, 180, 'booking_services', '[[\"Fullset acrylic with tips\"],[\"Fullset acrylic with tips\"]]'),
(235, 180, 'booking_status', '1'),
(236, 180, 'booking_slots', '2'),
(237, 180, '_edit_lock', '1657640112:1'),
(238, 181, 'booking_date', '2022-07-14'),
(239, 181, 'booking_phone', '1234567890'),
(240, 181, 'booking_email', ''),
(241, 181, 'booking_services', '[[\"Fullset acrylic with tips\"],[\"lelamhai1\"]]'),
(242, 181, 'booking_status', '1'),
(243, 181, 'booking_slots', '2'),
(244, 181, '_edit_lock', '1659082204:1'),
(246, 184, '_edit_lock', '1659194987:1'),
(247, 184, '_wp_suggested_privacy_policy_content', 'a:3:{s:11:\"plugin_name\";s:9:\"WordPress\";s:11:\"policy_text\";s:4243:\"<h2>Who we are</h2><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Our website address is: http://localhost/booking.</p><h2>Comments</h2><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor&#8217;s IP address and browser user agent string to help spam detection.</p><p>An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.</p><h2>Media</h2><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p><h2>Cookies</h2><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p><p>If you visit our login page, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p><p>When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select &quot;Remember Me&quot;, your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p><p>If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p><h2>Embedded content from other websites</h2><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p><p>These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p><h2>Who we share your data with</h2><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you request a password reset, your IP address will be included in the reset email.</p><h2>How long we retain your data</h2><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p><p>For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.</p><h2>What rights you have over your data</h2><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.</p><h2>Where your data is sent</h2><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Visitor comments may be checked through an automated spam detection service.</p>\";s:5:\"added\";i:1659081762;}'),
(252, 197, 'booking_date', '2022-08-05'),
(253, 197, 'booking_phone', '1234567890'),
(254, 197, 'booking_email', ''),
(255, 197, 'booking_services', '[[\"title 1.2\"]]'),
(256, 197, 'booking_status', '1'),
(257, 197, 'booking_slots', '1'),
(258, 197, '_edit_lock', '1659701035:1'),
(259, 201, 'booking_date', '2022-08-05'),
(260, 201, 'booking_phone', '1234567890'),
(261, 201, 'booking_email', 'lehuyenthao@gmail.com'),
(262, 201, 'booking_location', ''),
(263, 201, 'booking_services', '[[\"title 1.2\"],[\"title 2.1\"]]'),
(264, 201, 'booking_status', '1'),
(265, 201, 'booking_slots', '2'),
(266, 201, '_edit_lock', '1660312204:1'),
(267, 202, 'booking_date', '2022-08-19'),
(268, 202, 'booking_phone', '1234567890'),
(269, 202, 'booking_email', 'trinhthina@gmail.com'),
(270, 202, 'booking_location', '234 Cho Moi, An Giang'),
(271, 202, 'booking_services', '[[\"title 1.2\"]]'),
(272, 202, 'booking_status', '0'),
(273, 202, 'booking_slots', '1'),
(274, 202, '_edit_lock', '1660319260:1'),
(275, 203, 'booking_date', '2022-08-15'),
(276, 203, 'booking_phone', '1234567890'),
(277, 203, 'booking_email', 'mail@gmail.com'),
(278, 203, 'booking_location', '234 abc'),
(279, 203, 'booking_services', '[[\"\"]]'),
(280, 203, 'booking_status', '0'),
(281, 203, 'booking_slots', '1'),
(282, 203, '_edit_lock', '1660485403:1'),
(283, 1, '_edit_lock', '1660637523:1'),
(321, 245, '_wp_attached_file', '2022/08/11.jpg'),
(322, 245, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:640;s:6:\"height\";i:960;s:4:\"file\";s:14:\"2022/08/11.jpg\";s:8:\"filesize\";i:17777;s:5:\"sizes\";a:2:{s:6:\"medium\";a:5:{s:4:\"file\";s:14:\"11-200x300.jpg\";s:5:\"width\";i:200;s:6:\"height\";i:300;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:5915;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:14:\"11-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:3209;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(323, 246, '_wp_attached_file', '2022/08/79331767_2512275302352114_7951899590813286400_n.jpeg'),
(324, 246, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:1920;s:6:\"height\";i:1276;s:4:\"file\";s:60:\"2022/08/79331767_2512275302352114_7951899590813286400_n.jpeg\";s:8:\"filesize\";i:566371;s:5:\"sizes\";a:5:{s:6:\"medium\";a:5:{s:4:\"file\";s:60:\"79331767_2512275302352114_7951899590813286400_n-300x199.jpeg\";s:5:\"width\";i:300;s:6:\"height\";i:199;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:19335;}s:5:\"large\";a:5:{s:4:\"file\";s:61:\"79331767_2512275302352114_7951899590813286400_n-1024x681.jpeg\";s:5:\"width\";i:1024;s:6:\"height\";i:681;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:142703;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:60:\"79331767_2512275302352114_7951899590813286400_n-150x150.jpeg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:8192;}s:12:\"medium_large\";a:5:{s:4:\"file\";s:60:\"79331767_2512275302352114_7951899590813286400_n-768x510.jpeg\";s:5:\"width\";i:768;s:6:\"height\";i:510;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:87724;}s:9:\"1536x1536\";a:5:{s:4:\"file\";s:62:\"79331767_2512275302352114_7951899590813286400_n-1536x1021.jpeg\";s:5:\"width\";i:1536;s:6:\"height\";i:1021;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:287506;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(325, 247, '_wp_attached_file', '2022/08/buying.png'),
(326, 247, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:512;s:6:\"height\";i:512;s:4:\"file\";s:18:\"2022/08/buying.png\";s:8:\"filesize\";i:39921;s:5:\"sizes\";a:2:{s:6:\"medium\";a:5:{s:4:\"file\";s:18:\"buying-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:29041;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:18:\"buying-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:13202;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(327, 248, '_wp_attached_file', '2022/08/plance-1.832b6b7860d99d326540.png'),
(328, 248, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:563;s:6:\"height\";i:550;s:4:\"file\";s:41:\"2022/08/plance-1.832b6b7860d99d326540.png\";s:8:\"filesize\";i:165996;s:5:\"sizes\";a:2:{s:6:\"medium\";a:5:{s:4:\"file\";s:41:\"plance-1.832b6b7860d99d326540-300x293.png\";s:5:\"width\";i:300;s:6:\"height\";i:293;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:74689;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:41:\"plance-1.832b6b7860d99d326540-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:27180;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(329, 249, '_form', '<label> Your name\n    [text* your-name] </label>\n\n<label> Your email\n    [email* your-email] </label>\n\n<label> Subject\n    [text* your-subject] </label>\n\n<label> Your message (optional)\n    [textarea your-message] </label>\n\n[submit \"Submit\"]'),
(330, 249, '_mail', 'a:8:{s:7:\"subject\";s:30:\"[_site_title] \"[your-subject]\"\";s:6:\"sender\";s:36:\"[_site_title] <leelamhair@gmail.com>\";s:4:\"body\";s:163:\"From: [your-name] <[your-email]>\nSubject: [your-subject]\n\nMessage Body:\n[your-message]\n\n-- \nThis e-mail was sent from a contact form on [_site_title] ([_site_url])\";s:9:\"recipient\";s:19:\"[_site_admin_email]\";s:18:\"additional_headers\";s:22:\"Reply-To: [your-email]\";s:11:\"attachments\";s:0:\"\";s:8:\"use_html\";i:0;s:13:\"exclude_blank\";i:0;}'),
(331, 249, '_mail_2', 'a:9:{s:6:\"active\";b:0;s:7:\"subject\";s:30:\"[_site_title] \"[your-subject]\"\";s:6:\"sender\";s:36:\"[_site_title] <leelamhair@gmail.com>\";s:4:\"body\";s:105:\"Message Body:\n[your-message]\n\n-- \nThis e-mail was sent from a contact form on [_site_title] ([_site_url])\";s:9:\"recipient\";s:12:\"[your-email]\";s:18:\"additional_headers\";s:29:\"Reply-To: [_site_admin_email]\";s:11:\"attachments\";s:0:\"\";s:8:\"use_html\";i:0;s:13:\"exclude_blank\";i:0;}'),
(332, 249, '_messages', 'a:12:{s:12:\"mail_sent_ok\";s:45:\"Thank you for your message. It has been sent.\";s:12:\"mail_sent_ng\";s:71:\"There was an error trying to send your message. Please try again later.\";s:16:\"validation_error\";s:61:\"One or more fields have an error. Please check and try again.\";s:4:\"spam\";s:71:\"There was an error trying to send your message. Please try again later.\";s:12:\"accept_terms\";s:69:\"You must accept the terms and conditions before sending your message.\";s:16:\"invalid_required\";s:27:\"Please fill out this field.\";s:16:\"invalid_too_long\";s:32:\"This field has a too long input.\";s:17:\"invalid_too_short\";s:33:\"This field has a too short input.\";s:13:\"upload_failed\";s:46:\"There was an unknown error uploading the file.\";s:24:\"upload_file_type_invalid\";s:49:\"You are not allowed to upload files of this type.\";s:21:\"upload_file_too_large\";s:31:\"The uploaded file is too large.\";s:23:\"upload_failed_php_error\";s:38:\"There was an error uploading the file.\";}'),
(333, 249, '_additional_settings', ''),
(334, 249, '_locale', 'en_US'),
(335, 250, '_form', '<label> Your email </label>\n<div class=\"box-content\">\n  [email* your-email]\n</div>\n<label> Your message</label>\n<div class=\"box-content\">\n  [textarea your-message]\n</div>\n<div class=\"box-submit\">[submit \"Submit\"]</div>'),
(336, 250, '_mail', 'a:9:{s:6:\"active\";b:1;s:7:\"subject\";s:13:\"[_site_title]\";s:6:\"sender\";s:36:\"[_site_title] <leelamhair@gmail.com>\";s:9:\"recipient\";s:20:\"leelamhair@gmail.com\";s:4:\"body\";s:113:\"From: <[your-email]>\n\n[your-message]\n\n-- \nThis e-mail was sent from a contact form on [_site_title] ([_site_url])\";s:18:\"additional_headers\";s:22:\"Reply-To: [your-email]\";s:11:\"attachments\";s:0:\"\";s:8:\"use_html\";b:0;s:13:\"exclude_blank\";b:0;}'),
(337, 250, '_mail_2', 'a:9:{s:6:\"active\";b:0;s:7:\"subject\";s:30:\"[_site_title] \"[your-subject]\"\";s:6:\"sender\";s:36:\"[_site_title] <leelamhair@gmail.com>\";s:9:\"recipient\";s:12:\"[your-email]\";s:4:\"body\";s:105:\"Message Body:\n[your-message]\n\n-- \nThis e-mail was sent from a contact form on [_site_title] ([_site_url])\";s:18:\"additional_headers\";s:29:\"Reply-To: [_site_admin_email]\";s:11:\"attachments\";s:0:\"\";s:8:\"use_html\";b:0;s:13:\"exclude_blank\";b:0;}'),
(338, 250, '_messages', 'a:22:{s:12:\"mail_sent_ok\";s:45:\"Thank you for your message. It has been sent.\";s:12:\"mail_sent_ng\";s:71:\"There was an error trying to send your message. Please try again later.\";s:16:\"validation_error\";s:61:\"One or more fields have an error. Please check and try again.\";s:4:\"spam\";s:71:\"There was an error trying to send your message. Please try again later.\";s:12:\"accept_terms\";s:69:\"You must accept the terms and conditions before sending your message.\";s:16:\"invalid_required\";s:27:\"Please fill out this field.\";s:16:\"invalid_too_long\";s:32:\"This field has a too long input.\";s:17:\"invalid_too_short\";s:33:\"This field has a too short input.\";s:13:\"upload_failed\";s:46:\"There was an unknown error uploading the file.\";s:24:\"upload_file_type_invalid\";s:49:\"You are not allowed to upload files of this type.\";s:21:\"upload_file_too_large\";s:31:\"The uploaded file is too large.\";s:23:\"upload_failed_php_error\";s:38:\"There was an error uploading the file.\";s:12:\"invalid_date\";s:41:\"Please enter a date in YYYY-MM-DD format.\";s:14:\"date_too_early\";s:32:\"This field has a too early date.\";s:13:\"date_too_late\";s:31:\"This field has a too late date.\";s:14:\"invalid_number\";s:22:\"Please enter a number.\";s:16:\"number_too_small\";s:34:\"This field has a too small number.\";s:16:\"number_too_large\";s:34:\"This field has a too large number.\";s:23:\"quiz_answer_not_correct\";s:36:\"The answer to the quiz is incorrect.\";s:13:\"invalid_email\";s:30:\"Please enter an email address.\";s:11:\"invalid_url\";s:19:\"Please enter a URL.\";s:11:\"invalid_tel\";s:32:\"Please enter a telephone number.\";}'),
(339, 250, '_additional_settings', ''),
(340, 250, '_locale', 'en_US'),
(341, 203, '_edit_last', '1'),
(342, 253, '_wp_attached_file', '2022/08/278032474_5017391924975289_8141950049696755457_n.jpeg'),
(343, 253, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:2048;s:6:\"height\";i:1365;s:4:\"file\";s:61:\"2022/08/278032474_5017391924975289_8141950049696755457_n.jpeg\";s:8:\"filesize\";i:421830;s:5:\"sizes\";a:5:{s:6:\"medium\";a:5:{s:4:\"file\";s:61:\"278032474_5017391924975289_8141950049696755457_n-300x200.jpeg\";s:5:\"width\";i:300;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:9430;}s:5:\"large\";a:5:{s:4:\"file\";s:62:\"278032474_5017391924975289_8141950049696755457_n-1024x683.jpeg\";s:5:\"width\";i:1024;s:6:\"height\";i:683;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:65175;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:61:\"278032474_5017391924975289_8141950049696755457_n-150x150.jpeg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:4785;}s:12:\"medium_large\";a:5:{s:4:\"file\";s:61:\"278032474_5017391924975289_8141950049696755457_n-768x512.jpeg\";s:5:\"width\";i:768;s:6:\"height\";i:512;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:39971;}s:9:\"1536x1536\";a:5:{s:4:\"file\";s:63:\"278032474_5017391924975289_8141950049696755457_n-1536x1024.jpeg\";s:5:\"width\";i:1536;s:6:\"height\";i:1024;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:128928;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(344, 254, '_wp_attached_file', '2022/08/288060299_1785661178437404_3929594054157294826_n.jpg'),
(345, 254, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:1433;s:6:\"height\";i:2048;s:4:\"file\";s:60:\"2022/08/288060299_1785661178437404_3929594054157294826_n.jpg\";s:8:\"filesize\";i:480061;s:5:\"sizes\";a:5:{s:6:\"medium\";a:5:{s:4:\"file\";s:60:\"288060299_1785661178437404_3929594054157294826_n-210x300.jpg\";s:5:\"width\";i:210;s:6:\"height\";i:300;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:14939;}s:5:\"large\";a:5:{s:4:\"file\";s:61:\"288060299_1785661178437404_3929594054157294826_n-717x1024.jpg\";s:5:\"width\";i:717;s:6:\"height\";i:1024;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:130230;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:60:\"288060299_1785661178437404_3929594054157294826_n-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:6906;}s:12:\"medium_large\";a:5:{s:4:\"file\";s:61:\"288060299_1785661178437404_3929594054157294826_n-768x1098.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:1098;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:143780;}s:9:\"1536x1536\";a:5:{s:4:\"file\";s:62:\"288060299_1785661178437404_3929594054157294826_n-1075x1536.jpg\";s:5:\"width\";i:1075;s:6:\"height\";i:1536;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:254792;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(346, 255, '_wp_attached_file', '2022/08/astronaut copy.png'),
(347, 202, '_edit_last', '1'),
(348, 257, 'booking_date', '2022-08-15'),
(349, 257, 'booking_phone', '11111111111111'),
(350, 257, 'booking_email', ''),
(351, 257, 'booking_location', ''),
(352, 257, 'booking_services', '[[\"title 1.2\",\"title 2.2\"],[\"title 1.2\"]]'),
(353, 257, 'booking_status', '0'),
(354, 257, 'booking_slots', '2'),
(355, 257, '_edit_lock', '1660319646:1'),
(356, 258, 'booking_date', '2022-08-20'),
(357, 258, 'booking_phone', '11111111111111'),
(358, 258, 'booking_email', ''),
(359, 258, 'booking_location', ''),
(360, 258, 'booking_services', '[[\"title 1.2\",\"title 2.2\"],[\"title 1.2\"],[\"title 2.2\"]]'),
(361, 258, 'booking_status', '2'),
(362, 258, 'booking_slots', '3'),
(363, 258, '_edit_lock', '1660381429:1'),
(364, 259, 'booking_date', '2022-08-15'),
(365, 259, 'booking_phone', '1234567890'),
(366, 259, 'booking_email', 'nva@gmail.com'),
(367, 259, 'booking_location', '112 Man Thien, Thu Duc'),
(368, 259, 'booking_services', '[{\"parent\":[167,168,173],\"children\":[169]},{\"parent\":[168,170],\"children\":[169,171]}]'),
(369, 259, 'booking_status', '0'),
(370, 259, 'booking_slots', '2'),
(371, 259, '_edit_lock', '1660459433:1'),
(372, 260, 'booking_date', '2022-08-14'),
(373, 260, 'booking_phone', '1234567890'),
(374, 260, 'booking_email', ''),
(375, 260, 'booking_location', ''),
(376, 260, 'booking_services', '[{\"parent\":[167,168,170,173],\"children\":[169,172]}]'),
(377, 260, 'booking_status', '1'),
(378, 260, 'booking_slots', '1'),
(379, 260, '_edit_lock', '1660468343:1'),
(380, 260, '_edit_last', '1'),
(381, 262, 'booking_date', '2022-08-14'),
(382, 262, 'booking_phone', '1234567890'),
(383, 262, 'booking_email', ''),
(384, 262, 'booking_location', ''),
(385, 262, 'booking_services', '[{\"parent\":[167,170],\"children\":[172]},{\"parent\":[167,168,170,173],\"children\":[169,171]}]'),
(386, 262, 'booking_status', '1'),
(387, 262, 'booking_slots', '2'),
(388, 263, 'booking_date', '2022-08-15'),
(389, 263, 'booking_phone', '1234567890'),
(390, 263, 'booking_email', ''),
(391, 263, 'booking_location', ''),
(392, 263, 'booking_services', '[{\"parent\":[167,170],\"children\":[172]},{\"parent\":[167,168,170,173],\"children\":[169,171]}]'),
(393, 263, 'booking_status', '1'),
(394, 263, 'booking_slots', '2'),
(395, 262, '_wp_trash_meta_status', 'publish'),
(396, 262, '_wp_trash_meta_time', '1660468493'),
(397, 262, '_wp_desired_post_slug', 'test'),
(398, 263, '_edit_lock', '1660470056:1'),
(399, 263, '_edit_last', '1'),
(400, 266, 'booking_date', '2022-08-14'),
(401, 266, 'booking_phone', '1234567890'),
(402, 266, 'booking_email', ''),
(403, 266, 'booking_location', ''),
(404, 266, 'booking_services', '[[169,172],[169,172]]'),
(405, 266, 'booking_status', '1'),
(406, 266, 'booking_slots', '2'),
(407, 267, 'booking_date', '2022-08-14'),
(408, 267, 'booking_phone', '1234567890'),
(409, 267, 'booking_email', ''),
(410, 267, 'booking_location', ''),
(411, 267, 'booking_services', '[[169,172],[169,172]]'),
(412, 267, 'booking_status', '1'),
(413, 267, 'booking_slots', '2'),
(414, 267, '_wp_trash_meta_status', 'publish'),
(415, 267, '_wp_trash_meta_time', '1660485550'),
(416, 267, '_wp_desired_post_slug', 'aaaaaaa-2'),
(417, 266, '_edit_lock', '1660486381:1'),
(418, 269, 'booking_date', '2022-08-14'),
(419, 269, 'booking_phone', '1234567890'),
(420, 269, 'booking_email', ''),
(421, 269, 'booking_location', ''),
(422, 269, 'booking_services', '[{\"parent\":[167,168],\"children\":[169]},{\"parent\":[167,168,170,173],\"children\":[169,171]}]'),
(423, 269, 'booking_status', '2'),
(424, 269, 'booking_slots', '2'),
(425, 269, '_edit_lock', '1660486822:1'),
(426, 270, 'booking_date', '2022-08-14'),
(427, 270, 'booking_phone', '1234567890'),
(428, 270, 'booking_email', ''),
(429, 270, 'booking_location', ''),
(430, 270, 'booking_services', '[{\"parent\":[170,173],\"children\":[172]},{\"parent\":[167,168,170,173],\"children\":[169,171]}]'),
(431, 270, 'booking_status', '1'),
(432, 270, 'booking_slots', '2'),
(433, 270, '_edit_lock', '1660661793:1'),
(434, 271, 'booking_date', '2022-08-14'),
(435, 271, 'booking_phone', '1234567890'),
(436, 271, 'booking_email', ''),
(437, 271, 'booking_location', ''),
(438, 271, 'booking_services', '[{\"parent\":[168,170],\"children\":[169,172]}]'),
(439, 271, 'booking_status', '2'),
(440, 271, 'booking_slots', '1'),
(441, 272, 'booking_date', '2022-08-16'),
(442, 272, 'booking_phone', '1234567890'),
(443, 272, 'booking_email', ''),
(444, 272, 'booking_location', ''),
(445, 272, 'booking_services', '[{\"parent\":[168,170],\"children\":[169,172]}]'),
(446, 272, 'booking_status', '1'),
(447, 272, 'booking_slots', '1'),
(448, 273, 'booking_date', '2022-08-14'),
(449, 273, 'booking_phone', '1234567890'),
(450, 273, 'booking_email', ''),
(451, 273, 'booking_location', ''),
(452, 273, 'booking_services', '[{\"parent\":[167],\"children\":[]}]'),
(453, 273, 'booking_status', '1'),
(454, 273, 'booking_slots', '1'),
(455, 274, 'booking_date', '2022-08-14'),
(456, 274, 'booking_phone', '1234567890'),
(457, 274, 'booking_email', ''),
(458, 274, 'booking_location', ''),
(459, 274, 'booking_services', '[{\"parent\":[167],\"children\":[]}]'),
(460, 274, 'booking_status', '1'),
(461, 274, 'booking_slots', '1'),
(462, 274, '_edit_lock', '1660571566:1'),
(463, 274, '_wp_trash_meta_status', 'publish'),
(464, 274, '_wp_trash_meta_time', '1660637951'),
(465, 274, '_wp_desired_post_slug', '1234567890-4'),
(466, 273, '_wp_trash_meta_status', 'publish'),
(467, 273, '_wp_trash_meta_time', '1660637953'),
(468, 273, '_wp_desired_post_slug', '1234567890-3'),
(469, 272, '_wp_trash_meta_status', 'publish'),
(470, 272, '_wp_trash_meta_time', '1660637955'),
(471, 272, '_wp_desired_post_slug', '1234567890-2'),
(472, 271, '_wp_trash_meta_status', 'publish'),
(473, 271, '_wp_trash_meta_time', '1660637956'),
(474, 271, '_wp_desired_post_slug', '1234567890'),
(475, 270, '_wp_trash_meta_status', 'publish'),
(476, 270, '_wp_trash_meta_time', '1660661952'),
(477, 270, '_wp_desired_post_slug', 'hai'),
(478, 269, '_wp_trash_meta_status', 'publish'),
(479, 269, '_wp_trash_meta_time', '1660661952'),
(480, 269, '_wp_desired_post_slug', 'kakaka'),
(481, 266, '_wp_trash_meta_status', 'publish'),
(482, 266, '_wp_trash_meta_time', '1660661952'),
(483, 266, '_wp_desired_post_slug', 'aaaaaaa'),
(484, 263, '_wp_trash_meta_status', 'publish'),
(485, 263, '_wp_trash_meta_time', '1660661952'),
(486, 263, '_wp_desired_post_slug', 'test-3'),
(487, 260, '_wp_trash_meta_status', 'publish'),
(488, 260, '_wp_trash_meta_time', '1660661952'),
(489, 260, '_wp_desired_post_slug', 'le-thanh-tinh-2'),
(490, 259, '_wp_trash_meta_status', 'publish'),
(491, 259, '_wp_trash_meta_time', '1660661952'),
(492, 259, '_wp_desired_post_slug', 'nva'),
(493, 258, '_wp_trash_meta_status', 'publish'),
(494, 258, '_wp_trash_meta_time', '1660661952'),
(495, 258, '_wp_desired_post_slug', 'test-2-2'),
(496, 257, '_wp_trash_meta_status', 'publish'),
(497, 257, '_wp_trash_meta_time', '1660661953'),
(498, 257, '_wp_desired_post_slug', 'test-1-2'),
(499, 285, 'booking_date', '2022-08-17'),
(500, 285, 'booking_phone', '1234567890'),
(501, 285, 'booking_email', ''),
(502, 285, 'booking_location', ''),
(503, 285, 'booking_services', '[{\"children\":[\"168-169\",\"170-172\"]},{\"children\":[\"170-171\"]}]'),
(504, 285, 'booking_status', '1'),
(505, 285, 'booking_slots', '2'),
(506, 285, '_edit_lock', '1660663667:1'),
(507, 285, '_wp_trash_meta_status', 'publish'),
(508, 285, '_wp_trash_meta_time', '1660663814'),
(509, 285, '_wp_desired_post_slug', '1234567890'),
(510, 287, 'booking_date', '2022-08-17'),
(511, 287, 'booking_phone', '1234567890'),
(512, 287, 'booking_email', ''),
(513, 287, 'booking_location', ''),
(514, 287, 'booking_services', '[{\"children\":[\"title 2-title 2.2\"]},{\"children\":[\"168-title 1.2\",\"170-title 2.1\"]}]'),
(515, 287, 'booking_status', '1'),
(516, 287, 'booking_slots', '2'),
(517, 287, '_edit_lock', '1660663932:1'),
(518, 287, '_wp_trash_meta_status', 'publish'),
(519, 287, '_wp_trash_meta_time', '1660664079'),
(520, 287, '_wp_desired_post_slug', '1234567890'),
(521, 289, 'booking_date', '2022-08-30'),
(522, 289, 'booking_phone', '1234567890'),
(523, 289, 'booking_email', ''),
(524, 289, 'booking_location', ''),
(525, 289, 'booking_services', '[{\"children\":[\"title 2-title 2.2\"]},{\"children\":[\"title 1-title 1.2\",\"title 2-title 2.1\"]}]'),
(526, 289, 'booking_status', '0'),
(527, 289, 'booking_slots', '2'),
(528, 289, '_edit_lock', '1660990214:1'),
(529, 290, 'booking_date', '2022-08-30'),
(530, 290, 'booking_phone', '0982115380'),
(531, 290, 'booking_email', ''),
(532, 290, 'booking_location', ''),
(533, 290, 'booking_services', '[{\"children\":[\"Nail Deigns-Nail Ombre\"]},{\"children\":[\"Nail Deigns-Nail Ombre\"]},{\"children\":[\"Waxing-Eyebrows shape\"]}]'),
(534, 290, 'booking_status', '1'),
(535, 290, 'booking_slots', '2'),
(536, 290, '_edit_lock', '1660704998:1'),
(537, 290, '_edit_last', '1'),
(538, 289, '_edit_last', '1'),
(539, 295, '_wp_attached_file', '2022/08/79331767_2512275302352114_7951899590813286400_n.jpeg'),
(540, 295, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:1920;s:6:\"height\";i:1276;s:4:\"file\";s:60:\"2022/08/79331767_2512275302352114_7951899590813286400_n.jpeg\";s:8:\"filesize\";i:566371;s:5:\"sizes\";a:5:{s:6:\"medium\";a:5:{s:4:\"file\";s:60:\"79331767_2512275302352114_7951899590813286400_n-300x199.jpeg\";s:5:\"width\";i:300;s:6:\"height\";i:199;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:19335;}s:5:\"large\";a:5:{s:4:\"file\";s:61:\"79331767_2512275302352114_7951899590813286400_n-1024x681.jpeg\";s:5:\"width\";i:1024;s:6:\"height\";i:681;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:142703;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:60:\"79331767_2512275302352114_7951899590813286400_n-150x150.jpeg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:8192;}s:12:\"medium_large\";a:5:{s:4:\"file\";s:60:\"79331767_2512275302352114_7951899590813286400_n-768x510.jpeg\";s:5:\"width\";i:768;s:6:\"height\";i:510;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:87724;}s:9:\"1536x1536\";a:5:{s:4:\"file\";s:62:\"79331767_2512275302352114_7951899590813286400_n-1536x1021.jpeg\";s:5:\"width\";i:1536;s:6:\"height\";i:1021;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:287506;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(541, 296, '_wp_trash_meta_status', 'publish'),
(542, 296, '_wp_trash_meta_time', '1660903687'),
(543, 297, '_wp_attached_file', '2022/08/cropped-plance-1.832b6b7860d99d326540.png'),
(544, 297, '_wp_attachment_context', 'site-icon'),
(545, 297, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:512;s:6:\"height\";i:512;s:4:\"file\";s:49:\"2022/08/cropped-plance-1.832b6b7860d99d326540.png\";s:8:\"filesize\";i:169142;s:5:\"sizes\";a:6:{s:6:\"medium\";a:5:{s:4:\"file\";s:49:\"cropped-plance-1.832b6b7860d99d326540-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:80098;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:49:\"cropped-plance-1.832b6b7860d99d326540-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:27993;}s:13:\"site_icon-270\";a:5:{s:4:\"file\";s:49:\"cropped-plance-1.832b6b7860d99d326540-270x270.png\";s:5:\"width\";i:270;s:6:\"height\";i:270;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:68214;}s:13:\"site_icon-192\";a:5:{s:4:\"file\";s:49:\"cropped-plance-1.832b6b7860d99d326540-192x192.png\";s:5:\"width\";i:192;s:6:\"height\";i:192;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:40728;}s:13:\"site_icon-180\";a:5:{s:4:\"file\";s:49:\"cropped-plance-1.832b6b7860d99d326540-180x180.png\";s:5:\"width\";i:180;s:6:\"height\";i:180;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:36907;}s:12:\"site_icon-32\";a:5:{s:4:\"file\";s:47:\"cropped-plance-1.832b6b7860d99d326540-32x32.png\";s:5:\"width\";i:32;s:6:\"height\";i:32;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:2761;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(547, 299, 'booking_date', '2022-08-30'),
(548, 299, 'booking_phone', '1234567890'),
(549, 299, 'booking_email', ''),
(550, 299, 'booking_location', ''),
(551, 299, 'booking_services', '[{\"children\":[\"title 1-title 1.2\",\"title 2-title 2.2\"]}]'),
(552, 299, 'booking_status', '1'),
(553, 299, 'booking_slots', '1'),
(554, 300, 'booking_date', '2022-08-20'),
(555, 300, 'booking_phone', '1234567890'),
(556, 300, 'booking_email', ''),
(557, 300, 'booking_location', ''),
(558, 300, 'booking_services', '[{\"children\":[\"168-title 1.2\"]}]'),
(559, 300, 'booking_status', '1'),
(560, 300, 'booking_slots', '1'),
(561, 301, 'booking_date', '2022-08-20'),
(562, 301, 'booking_phone', '1234567890'),
(563, 301, 'booking_email', ''),
(564, 301, 'booking_location', ''),
(565, 301, 'booking_services', '[{\"children\":[\"170-172\"]}]'),
(566, 301, 'booking_status', '1'),
(567, 301, 'booking_slots', '1'),
(568, 302, 'booking_date', '2022-08-20'),
(569, 302, 'booking_phone', '1234567890'),
(570, 302, 'booking_email', ''),
(571, 302, 'booking_location', ''),
(572, 302, 'booking_services', '[{\"children\":[\"167-0\",\"173-0\"]}]'),
(573, 302, 'booking_status', '1'),
(574, 302, 'booking_slots', '1'),
(575, 303, 'booking_date', '2022-08-20'),
(576, 303, 'booking_phone', '1234567890'),
(577, 303, 'booking_email', ''),
(578, 303, 'booking_location', ''),
(579, 303, 'booking_services', '[{\"children\":[\"167-0\"]}]'),
(580, 303, 'booking_status', '1'),
(581, 303, 'booking_slots', '1'),
(582, 303, '_wp_trash_meta_status', 'publish'),
(583, 303, '_wp_trash_meta_time', '1660999563'),
(584, 303, '_wp_desired_post_slug', 'wwwww'),
(585, 302, '_wp_trash_meta_status', 'publish'),
(586, 302, '_wp_trash_meta_time', '1660999563'),
(587, 302, '_wp_desired_post_slug', 'bbbb'),
(588, 301, '_wp_trash_meta_status', 'publish'),
(589, 301, '_wp_trash_meta_time', '1660999563'),
(590, 301, '_wp_desired_post_slug', 'bbb'),
(591, 300, '_wp_trash_meta_status', 'publish'),
(592, 300, '_wp_trash_meta_time', '1660999563'),
(593, 300, '_wp_desired_post_slug', 'aaaa'),
(594, 299, '_wp_trash_meta_status', 'publish'),
(595, 299, '_wp_trash_meta_time', '1660999563'),
(596, 299, '_wp_desired_post_slug', 'thanh-tuyen'),
(597, 290, '_wp_trash_meta_status', 'publish'),
(598, 290, '_wp_trash_meta_time', '1660999563'),
(599, 290, '_wp_desired_post_slug', '0982115380'),
(600, 289, '_wp_trash_meta_status', 'publish'),
(601, 289, '_wp_trash_meta_time', '1660999563'),
(602, 289, '_wp_desired_post_slug', '1234567890'),
(603, 203, '_wp_trash_meta_status', 'publish'),
(604, 203, '_wp_trash_meta_time', '1660999563'),
(605, 203, '_wp_desired_post_slug', 'lelamhaikaka'),
(606, 202, '_wp_trash_meta_status', 'publish'),
(607, 202, '_wp_trash_meta_time', '1660999563'),
(608, 202, '_wp_desired_post_slug', 'trinh-thi-na-2'),
(609, 201, '_wp_trash_meta_status', 'publish'),
(610, 201, '_wp_trash_meta_time', '1660999563'),
(611, 201, '_wp_desired_post_slug', 'le-huyen-thao-2'),
(612, 197, '_wp_trash_meta_status', 'publish'),
(613, 197, '_wp_trash_meta_time', '1660999563'),
(614, 197, '_wp_desired_post_slug', 'kaka'),
(615, 181, '_wp_trash_meta_status', 'publish'),
(616, 181, '_wp_trash_meta_time', '1660999563'),
(617, 181, '_wp_desired_post_slug', 'lelamhaitest'),
(618, 180, '_wp_trash_meta_status', 'publish'),
(619, 180, '_wp_trash_meta_time', '1660999563'),
(620, 180, '_wp_desired_post_slug', 'trinh-thi-na'),
(621, 179, '_wp_trash_meta_status', 'publish'),
(622, 179, '_wp_trash_meta_time', '1660999563'),
(623, 179, '_wp_desired_post_slug', 'le-thanh-tinh'),
(624, 178, '_wp_trash_meta_status', 'publish'),
(625, 178, '_wp_trash_meta_time', '1660999563'),
(626, 178, '_wp_desired_post_slug', 'le-huyen-thao'),
(627, 175, '_wp_trash_meta_status', 'publish'),
(628, 175, '_wp_trash_meta_time', '1660999563'),
(629, 175, '_wp_desired_post_slug', 'lelamhai'),
(630, 174, '_wp_trash_meta_status', 'publish'),
(631, 174, '_wp_trash_meta_time', '1660999563'),
(632, 174, '_wp_desired_post_slug', 'test-2'),
(633, 173, '_wp_trash_meta_status', 'publish'),
(634, 173, '_wp_trash_meta_time', '1660999563'),
(635, 173, '_wp_desired_post_slug', 'test-1'),
(636, 318, 'booking_date', '2022-08-20'),
(637, 318, 'booking_phone', '1234567890'),
(638, 318, 'booking_email', ''),
(639, 318, 'booking_location', ''),
(640, 318, 'booking_services', '[[\"169-168\",\"172-170\"]]'),
(641, 318, 'booking_status', '1'),
(642, 318, 'booking_slots', '1'),
(643, 318, '_wp_trash_meta_status', 'publish'),
(644, 318, '_wp_trash_meta_time', '1660999881'),
(645, 318, '_wp_desired_post_slug', 'lelamhai'),
(646, 320, 'booking_date', '2022-08-30'),
(647, 320, 'booking_phone', '1234567890'),
(648, 320, 'booking_email', ''),
(649, 320, 'booking_location', ''),
(650, 320, 'booking_services', '[{\"children\":[\"168-169\",\"170-172\"]},{\"children\":[\"168-169\",\"170-171\"]}]'),
(651, 320, 'booking_status', '1'),
(652, 320, 'booking_slots', '1'),
(653, 320, '_edit_lock', '1661006510:1'),
(654, 320, '_edit_last', '1'),
(655, 320, '_wp_trash_meta_status', 'publish'),
(656, 320, '_wp_trash_meta_time', '1661006657'),
(657, 320, '_wp_desired_post_slug', 'lelamhai'),
(658, 322, 'booking_date', '2022-08-20'),
(659, 322, 'booking_phone', '1234567890'),
(660, 322, 'booking_email', ''),
(661, 322, 'booking_location', ''),
(662, 322, 'booking_services', '[{\"children\":[\"168-title 1.2\",\"170-title 2.2\"]},{\"children\":[\"title 1-title 1.2\"]}]'),
(663, 322, 'booking_status', '1'),
(664, 322, 'booking_slots', '2'),
(665, 322, '_edit_lock', '1661007850:1'),
(666, 322, '_wp_trash_meta_status', 'publish'),
(667, 322, '_wp_trash_meta_time', '1661007996'),
(668, 322, '_wp_desired_post_slug', 'lelamhai'),
(669, 324, 'booking_date', '2022-08-20'),
(670, 324, 'booking_phone', '1234567890'),
(671, 324, 'booking_email', ''),
(672, 324, 'booking_location', ''),
(673, 324, 'booking_services', '[{\"data\":[\"168-title 1.2\",\"170-title 2.2\"]},{\"data\":[\"title 2-title 2.1\"]}]'),
(674, 324, 'booking_status', '1'),
(675, 324, 'booking_slots', '2'),
(676, 324, '_edit_lock', '1661007984:1'),
(677, 324, '_wp_trash_meta_status', 'publish'),
(678, 324, '_wp_trash_meta_time', '1661008131'),
(679, 324, '_wp_desired_post_slug', 'lelamhai'),
(680, 326, 'booking_date', '2022-08-20'),
(681, 326, 'booking_phone', '1234567890'),
(682, 326, 'booking_email', ''),
(683, 326, 'booking_location', ''),
(684, 326, 'booking_services', '[{\"children\":[\"168-title 1.2\",\"170-title 2.2\"]},{\"children\":[\"title 2-title 2.1\"]}]'),
(685, 326, 'booking_status', '1'),
(686, 326, 'booking_slots', '2'),
(687, 326, '_edit_lock', '1661008256:1'),
(688, 326, '_wp_trash_meta_status', 'publish'),
(689, 326, '_wp_trash_meta_time', '1661008402'),
(690, 326, '_wp_desired_post_slug', 'lelamhai'),
(691, 328, 'booking_date', '2022-08-20'),
(692, 328, 'booking_phone', '1234567890'),
(693, 328, 'booking_email', ''),
(694, 328, 'booking_location', ''),
(695, 328, 'booking_services', '[{\"children\":[\"168-title 1.2\",\"170-title 2.2\"]},{\"children\":[\"170-title 2.1\"]}]'),
(696, 328, 'booking_status', '1'),
(697, 328, 'booking_slots', '2'),
(698, 328, '_edit_lock', '1661008414:1'),
(699, 328, '_wp_trash_meta_status', 'publish'),
(700, 328, '_wp_trash_meta_time', '1661008558'),
(701, 328, '_wp_desired_post_slug', 'lelamhai'),
(702, 330, 'booking_date', '2022-08-30'),
(703, 330, 'booking_phone', '1234567890'),
(704, 330, 'booking_email', ''),
(705, 330, 'booking_location', ''),
(706, 330, 'booking_services', '[{\"children\":[\"168-169\",\"170-172\"]},{\"children\":[\"170-171\"]}]'),
(707, 330, 'booking_status', '0'),
(708, 330, 'booking_slots', '2'),
(709, 330, '_edit_lock', '1661056307:1'),
(710, 332, 'booking_date', '2022-08-25'),
(711, 332, 'booking_phone', '1234567890'),
(712, 332, 'booking_email', ''),
(713, 332, 'booking_location', ''),
(714, 332, 'booking_services', '[{\"children\":[\"167-0\"]},{\"children\":[\"173-0\"]}]'),
(715, 332, 'booking_status', '2'),
(716, 332, 'booking_slots', '2'),
(717, 332, '_edit_lock', '1661056450:1'),
(718, 330, '_edit_last', '1'),
(719, 332, '_edit_last', '1'),
(720, 335, '_edit_lock', '1661153918:1'),
(721, 335, '_wp_page_template', 'manage.php');

-- --------------------------------------------------------

--
-- Table structure for table `wp_posts`
--

CREATE TABLE `wp_posts` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `post_author` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_parent` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `guid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT 0,
  `post_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_posts`
--

INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(1, 1, '2022-06-21 08:44:19', '2022-06-21 08:44:19', '<!-- wp:paragraph -->\n<p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!</p>\n<!-- /wp:paragraph -->', 'Hello world!', '', 'publish', 'open', 'open', '', 'hello-world', '', '', '2022-06-21 08:44:19', '2022-06-21 08:44:19', '', 0, 'http://localhost/booking/?p=1', 0, 'post', '', 1),
(6, 1, '2022-06-21 10:13:28', '2022-06-21 10:13:28', 'a:7:{s:8:\"location\";a:1:{i:0;a:1:{i:0;a:3:{s:5:\"param\";s:12:\"options_page\";s:8:\"operator\";s:2:\"==\";s:5:\"value\";s:25:\"acf-options-theme-options\";}}}s:8:\"position\";s:6:\"normal\";s:5:\"style\";s:7:\"default\";s:15:\"label_placement\";s:3:\"top\";s:21:\"instruction_placement\";s:5:\"label\";s:14:\"hide_on_screen\";s:0:\"\";s:11:\"description\";s:0:\"\";}', 'Home', 'home', 'publish', 'closed', 'closed', '', 'group_62b199afb8cb9', '', '', '2022-06-27 12:16:23', '2022-06-27 12:16:23', '', 0, 'http://localhost/booking/?post_type=acf-field-group&#038;p=6', 0, 'acf-field-group', '', 0),
(7, 1, '2022-06-21 10:13:28', '2022-06-21 10:13:28', 'a:7:{s:4:\"type\";s:3:\"tab\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:9:\"placement\";s:3:\"top\";s:8:\"endpoint\";i:0;}', 'Header', 'header', 'publish', 'closed', 'closed', '', 'field_62b199b3a85ac', '', '', '2022-06-21 10:13:54', '2022-06-21 10:13:54', '', 6, 'http://localhost/booking/?post_type=acf-field&#038;p=7', 0, 'acf-field', '', 0),
(8, 1, '2022-06-21 10:14:31', '2022-06-21 10:14:31', 'a:7:{s:4:\"type\";s:3:\"tab\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:9:\"placement\";s:3:\"top\";s:8:\"endpoint\";i:0;}', 'Body', 'body', 'publish', 'closed', 'closed', '', 'field_62b199ece2fed', '', '', '2022-06-23 13:48:56', '2022-06-23 13:48:56', '', 6, 'http://localhost/booking/?post_type=acf-field&#038;p=8', 4, 'acf-field', '', 0),
(9, 1, '2022-06-21 10:14:31', '2022-06-21 10:14:31', 'a:7:{s:4:\"type\";s:3:\"tab\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:9:\"placement\";s:3:\"top\";s:8:\"endpoint\";i:0;}', 'Footer', 'footer', 'publish', 'closed', 'closed', '', 'field_62b199fae2fee', '', '', '2022-06-23 16:29:44', '2022-06-23 16:29:44', '', 6, 'http://localhost/booking/?post_type=acf-field&#038;p=9', 20, 'acf-field', '', 0),
(10, 1, '2022-06-21 10:16:19', '2022-06-21 10:16:19', 'a:6:{s:4:\"type\";s:12:\"color_picker\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:7:\"#991113\";}', 'Header color', 'background_color_header', 'publish', 'closed', 'closed', '', 'field_62b19a42fd223', '', '', '2022-06-23 07:53:04', '2022-06-23 07:53:04', '', 6, 'http://localhost/booking/?post_type=acf-field&#038;p=10', 1, 'acf-field', '', 0),
(11, 1, '2022-06-21 10:18:31', '2022-06-21 10:18:31', 'a:10:{s:4:\"type\";s:4:\"text\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:7:\"prepend\";s:0:\"\";s:6:\"append\";s:0:\"\";s:9:\"maxlength\";s:0:\"\";}', 'Your business name', 'name_company_header', 'publish', 'closed', 'closed', '', 'field_62b19a80ac3f9', '', '', '2022-06-23 13:48:56', '2022-06-23 13:48:56', '', 6, 'http://localhost/booking/?post_type=acf-field&#038;p=11', 3, 'acf-field', '', 0),
(14, 1, '2022-06-21 10:47:39', '2022-06-21 10:47:39', 'a:7:{s:4:\"type\";s:5:\"group\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:6:\"layout\";s:5:\"block\";s:10:\"sub_fields\";a:0:{}}', 'Slider', 'slider_body', 'publish', 'closed', 'closed', '', 'field_62b1a1a32f213', '', '', '2022-06-23 13:48:56', '2022-06-23 13:48:56', '', 6, 'http://localhost/booking/?post_type=acf-field&#038;p=14', 6, 'acf-field', '', 0),
(16, 1, '2022-06-21 10:49:17', '2022-06-21 10:49:17', '', 'banner', '', 'inherit', 'open', 'closed', '', 'banner', '', '', '2022-06-21 10:49:17', '2022-06-21 10:49:17', '', 0, 'http://localhost/booking/wp-content/uploads/2022/06/banner.jpeg', 0, 'attachment', 'image/jpeg', 0),
(17, 1, '2022-06-21 11:05:11', '2022-06-21 11:05:11', 'a:6:{s:4:\"type\";s:12:\"color_picker\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:7:\"#f6f1ea\";}', 'Background color', 'background_color_body', 'publish', 'closed', 'closed', '', 'field_62b1a5a14a89c', '', '', '2022-06-23 13:48:56', '2022-06-23 13:48:56', '', 6, 'http://localhost/booking/?post_type=acf-field&#038;p=17', 5, 'acf-field', '', 0),
(18, 1, '2022-06-21 13:21:57', '2022-06-21 13:21:57', 'a:10:{s:4:\"type\";s:4:\"text\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:7:\"prepend\";s:0:\"\";s:6:\"append\";s:0:\"\";s:9:\"maxlength\";s:0:\"\";}', 'Address', 'address_body', 'publish', 'closed', 'closed', '', 'field_62b1c5d34dd47', '', '', '2022-06-23 13:48:56', '2022-06-23 13:48:56', '', 6, 'http://localhost/booking/?post_type=acf-field&#038;p=18', 7, 'acf-field', '', 0),
(19, 1, '2022-06-21 13:23:33', '2022-06-21 13:23:33', 'a:10:{s:4:\"type\";s:4:\"text\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:7:\"prepend\";s:0:\"\";s:6:\"append\";s:0:\"\";s:9:\"maxlength\";s:0:\"\";}', 'Business Phone number', 'number_phone_body', 'publish', 'closed', 'closed', '', 'field_62b1c6299a063', '', '', '2022-06-23 13:48:56', '2022-06-23 13:48:56', '', 6, 'http://localhost/booking/?post_type=acf-field&#038;p=19', 8, 'acf-field', '', 0),
(20, 1, '2022-06-21 13:25:21', '2022-06-21 13:25:21', 'a:7:{s:4:\"type\";s:5:\"group\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:6:\"layout\";s:5:\"block\";s:10:\"sub_fields\";a:0:{}}', 'Social Media', 'social_network', 'publish', 'closed', 'closed', '', 'field_62b1c67b0a871', '', '', '2022-06-23 13:48:56', '2022-06-23 13:48:56', '', 6, 'http://localhost/booking/?post_type=acf-field&#038;p=20', 9, 'acf-field', '', 0),
(21, 1, '2022-06-21 13:25:21', '2022-06-21 13:25:21', 'a:10:{s:4:\"type\";s:4:\"text\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:7:\"prepend\";s:0:\"\";s:6:\"append\";s:0:\"\";s:9:\"maxlength\";s:0:\"\";}', 'Facebook link', 'link_facebook', 'publish', 'closed', 'closed', '', 'field_62b1c69d0a872', '', '', '2022-06-23 07:56:46', '2022-06-23 07:56:46', '', 20, 'http://localhost/booking/?post_type=acf-field&#038;p=21', 0, 'acf-field', '', 0),
(23, 1, '2022-06-21 13:35:59', '2022-06-21 13:35:59', '', 'icon_facebook', '', 'inherit', 'open', 'closed', '', 'icon_facebook', '', '', '2022-06-21 13:35:59', '2022-06-21 13:35:59', '', 0, 'http://localhost/booking/wp-content/uploads/2022/06/icon_facebook.png', 0, 'attachment', 'image/png', 0),
(24, 1, '2022-06-21 13:36:18', '2022-06-21 13:36:18', '', 'icon_youtube', '', 'inherit', 'open', 'closed', '', 'icon_youtube', '', '', '2022-06-21 13:36:18', '2022-06-21 13:36:18', '', 0, 'http://localhost/booking/wp-content/uploads/2022/06/icon_youtube.png', 0, 'attachment', 'image/png', 0),
(26, 1, '2022-06-21 13:37:26', '2022-06-21 13:37:26', 'a:10:{s:4:\"type\";s:4:\"text\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:7:\"prepend\";s:0:\"\";s:6:\"append\";s:0:\"\";s:9:\"maxlength\";s:0:\"\";}', 'Get Directions (google maps link)', 'get_direction_body', 'publish', 'closed', 'closed', '', 'field_62b1c98c0ae92', '', '', '2022-06-23 13:48:56', '2022-06-23 13:48:56', '', 6, 'http://localhost/booking/?post_type=acf-field&#038;p=26', 10, 'acf-field', '', 0),
(28, 1, '2022-06-21 14:00:46', '2022-06-21 14:00:46', 'a:15:{s:4:\"type\";s:5:\"image\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"return_format\";s:3:\"url\";s:12:\"preview_size\";s:4:\"full\";s:7:\"library\";s:3:\"all\";s:9:\"min_width\";s:0:\"\";s:10:\"min_height\";s:0:\"\";s:8:\"min_size\";s:0:\"\";s:9:\"max_width\";s:0:\"\";s:10:\"max_height\";s:0:\"\";s:8:\"max_size\";s:0:\"\";s:10:\"mime_types\";s:0:\"\";}', 'Body picture (512x453)', 'heart_big_body', 'publish', 'closed', 'closed', '', 'field_62b1ce8cdf67d', '', '', '2022-06-23 13:48:56', '2022-06-23 13:48:56', '', 6, 'http://localhost/booking/?post_type=acf-field&#038;p=28', 11, 'acf-field', '', 0),
(29, 1, '2022-06-21 14:01:38', '2022-06-21 14:01:38', 'a:10:{s:4:\"type\";s:8:\"textarea\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:9:\"maxlength\";s:0:\"\";s:4:\"rows\";s:0:\"\";s:9:\"new_lines\";s:0:\"\";}', 'Your welcome words & Notification', 'content_frame_body', 'publish', 'closed', 'closed', '', 'field_62b1cf220bb31', '', '', '2022-06-23 13:48:56', '2022-06-23 13:48:56', '', 6, 'http://localhost/booking/?post_type=acf-field&#038;p=29', 12, 'acf-field', '', 0),
(30, 1, '2022-06-21 14:03:25', '2022-06-21 14:03:25', 'a:10:{s:4:\"type\";s:8:\"textarea\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:9:\"maxlength\";s:0:\"\";s:4:\"rows\";s:0:\"\";s:9:\"new_lines\";s:0:\"\";}', 'Customers\' Review', 'text_up_review', 'publish', 'closed', 'closed', '', 'field_62b1cf5ab5069', '', '', '2022-06-23 13:48:56', '2022-06-23 13:48:56', '', 6, 'http://localhost/booking/?post_type=acf-field&#038;p=30', 13, 'acf-field', '', 0),
(31, 1, '2022-06-21 14:04:05', '2022-06-21 14:04:05', 'a:15:{s:4:\"type\";s:5:\"image\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"return_format\";s:3:\"url\";s:12:\"preview_size\";s:4:\"full\";s:7:\"library\";s:3:\"all\";s:9:\"min_width\";s:0:\"\";s:10:\"min_height\";s:0:\"\";s:8:\"min_size\";s:0:\"\";s:9:\"max_width\";s:0:\"\";s:10:\"max_height\";s:0:\"\";s:8:\"max_size\";s:0:\"\";s:10:\"mime_types\";s:0:\"\";}', 'Icon', 'star_body', 'publish', 'closed', 'closed', '', 'field_62b1cfb21bf31', '', '', '2022-06-23 13:48:56', '2022-06-23 13:48:56', '', 6, 'http://localhost/booking/?post_type=acf-field&#038;p=31', 14, 'acf-field', '', 0),
(32, 1, '2022-06-21 14:10:48', '2022-06-21 14:10:48', 'a:10:{s:4:\"type\";s:8:\"textarea\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:9:\"maxlength\";s:0:\"\";s:4:\"rows\";s:0:\"\";s:9:\"new_lines\";s:0:\"\";}', 'Youtube (youtube --> share --> embed --> copy link)', 'video_body', 'publish', 'closed', 'closed', '', 'field_62b1d13f2fa9e', '', '', '2022-06-23 13:48:56', '2022-06-23 13:48:56', '', 6, 'http://localhost/booking/?post_type=acf-field&#038;p=32', 15, 'acf-field', '', 0),
(34, 1, '2022-06-21 14:29:46', '2022-06-21 14:29:46', '', 'heart', '', 'inherit', 'open', 'closed', '', 'heart', '', '', '2022-06-21 14:29:46', '2022-06-21 14:29:46', '', 0, 'http://localhost/booking/wp-content/uploads/2022/06/heart.png', 0, 'attachment', 'image/png', 0),
(35, 1, '2022-06-21 14:31:03', '2022-06-21 14:31:03', '', 'stars', '', 'inherit', 'open', 'closed', '', 'stars', '', '', '2022-06-21 14:31:03', '2022-06-21 14:31:03', '', 0, 'http://localhost/booking/wp-content/uploads/2022/06/stars.png', 0, 'attachment', 'image/png', 0),
(37, 1, '2022-06-21 15:14:51', '2022-06-21 15:14:51', '', 'nail_heart', '', 'inherit', 'open', 'closed', '', 'nail_heart', '', '', '2022-06-21 15:14:51', '2022-06-21 15:14:51', '', 0, 'http://localhost/booking/wp-content/uploads/2022/06/nail_heart.png', 0, 'attachment', 'image/png', 0),
(38, 1, '2022-06-22 08:50:05', '2022-06-22 08:50:05', 'a:15:{s:4:\"type\";s:5:\"image\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"return_format\";s:3:\"url\";s:12:\"preview_size\";s:4:\"full\";s:7:\"library\";s:3:\"all\";s:9:\"min_width\";s:0:\"\";s:10:\"min_height\";s:0:\"\";s:8:\"min_size\";s:0:\"\";s:9:\"max_width\";s:0:\"\";s:10:\"max_height\";s:0:\"\";s:8:\"max_size\";s:0:\"\";s:10:\"mime_types\";s:0:\"\";}', 'Picture 1 (size 1920x770)', 'image1', 'publish', 'closed', 'closed', '', 'field_62b2d6fe9de42', '', '', '2022-06-23 07:54:57', '2022-06-23 07:54:57', '', 14, 'http://localhost/booking/?post_type=acf-field&#038;p=38', 0, 'acf-field', '', 0),
(39, 1, '2022-06-22 08:50:05', '2022-06-22 08:50:05', 'a:15:{s:4:\"type\";s:5:\"image\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"return_format\";s:3:\"url\";s:12:\"preview_size\";s:4:\"full\";s:7:\"library\";s:3:\"all\";s:9:\"min_width\";s:0:\"\";s:10:\"min_height\";s:0:\"\";s:8:\"min_size\";s:0:\"\";s:9:\"max_width\";s:0:\"\";s:10:\"max_height\";s:0:\"\";s:8:\"max_size\";s:0:\"\";s:10:\"mime_types\";s:0:\"\";}', 'Picture 2 (size 1920x770)', 'image2', 'publish', 'closed', 'closed', '', 'field_62b2d74f9de43', '', '', '2022-06-23 07:54:57', '2022-06-23 07:54:57', '', 14, 'http://localhost/booking/?post_type=acf-field&#038;p=39', 1, 'acf-field', '', 0),
(40, 1, '2022-06-22 08:50:05', '2022-06-22 08:50:05', 'a:15:{s:4:\"type\";s:5:\"image\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"return_format\";s:3:\"url\";s:12:\"preview_size\";s:4:\"full\";s:7:\"library\";s:3:\"all\";s:9:\"min_width\";s:0:\"\";s:10:\"min_height\";s:0:\"\";s:8:\"min_size\";s:0:\"\";s:9:\"max_width\";s:0:\"\";s:10:\"max_height\";s:0:\"\";s:8:\"max_size\";s:0:\"\";s:10:\"mime_types\";s:0:\"\";}', 'Picture 3 (size 1920x770)', 'image3', 'publish', 'closed', 'closed', '', 'field_62b2d79b9de44', '', '', '2022-06-23 07:54:57', '2022-06-23 07:54:57', '', 14, 'http://localhost/booking/?post_type=acf-field&#038;p=40', 2, 'acf-field', '', 0),
(42, 1, '2022-06-22 13:03:37', '2022-06-22 13:03:37', 'a:10:{s:4:\"type\";s:4:\"text\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:7:\"prepend\";s:0:\"\";s:6:\"append\";s:0:\"\";s:9:\"maxlength\";s:0:\"\";}', 'Youtube link', 'link_youtube', 'publish', 'closed', 'closed', '', 'field_62b312f25ce7e', '', '', '2022-06-23 07:56:46', '2022-06-23 07:56:46', '', 20, 'http://localhost/booking/?post_type=acf-field&#038;p=42', 1, 'acf-field', '', 0),
(43, 1, '2022-06-22 13:03:37', '2022-06-22 13:03:37', 'a:10:{s:4:\"type\";s:4:\"text\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:7:\"prepend\";s:0:\"\";s:6:\"append\";s:0:\"\";s:9:\"maxlength\";s:0:\"\";}', 'Instagram link', 'link_instagram', 'publish', 'closed', 'closed', '', 'field_62b313075ce7f', '', '', '2022-06-23 07:56:46', '2022-06-23 07:56:46', '', 20, 'http://localhost/booking/?post_type=acf-field&#038;p=43', 2, 'acf-field', '', 0),
(44, 1, '2022-06-22 14:23:46', '2022-06-22 14:23:46', 'a:10:{s:4:\"type\";s:8:\"repeater\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:9:\"collapsed\";s:0:\"\";s:3:\"min\";s:0:\"\";s:3:\"max\";s:0:\"\";s:6:\"layout\";s:5:\"table\";s:12:\"button_label\";s:0:\"\";}', 'Your opening hours', 'open_time_body', 'publish', 'closed', 'closed', '', 'field_62b324c31ea8b', '', '', '2022-06-23 16:29:44', '2022-06-23 16:29:44', '', 6, 'http://localhost/booking/?post_type=acf-field&#038;p=44', 17, 'acf-field', '', 0),
(46, 1, '2022-06-22 14:23:46', '2022-06-22 14:23:46', 'a:10:{s:4:\"type\";s:4:\"text\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:7:\"prepend\";s:0:\"\";s:6:\"append\";s:0:\"\";s:9:\"maxlength\";s:0:\"\";}', 'Thời gian', 'time-body', 'publish', 'closed', 'closed', '', 'field_62b325cb1ea8d', '', '', '2022-06-23 07:51:58', '2022-06-23 07:51:58', '', 44, 'http://localhost/booking/?post_type=acf-field&#038;p=46', 0, 'acf-field', '', 0),
(49, 1, '2022-06-22 14:52:14', '2022-06-22 14:52:14', 'a:7:{s:4:\"type\";s:5:\"group\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:6:\"layout\";s:5:\"block\";s:10:\"sub_fields\";a:0:{}}', 'Footer', 'footer', 'publish', 'closed', 'closed', '', 'field_62b32bee51a61', '', '', '2022-06-23 16:29:44', '2022-06-23 16:29:44', '', 6, 'http://localhost/booking/?post_type=acf-field&#038;p=49', 21, 'acf-field', '', 0),
(50, 1, '2022-06-22 14:52:14', '2022-06-22 14:52:14', 'a:10:{s:4:\"type\";s:4:\"text\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:7:\"prepend\";s:0:\"\";s:6:\"append\";s:0:\"\";s:9:\"maxlength\";s:0:\"\";}', 'Text term of service', 'text_term_of_service', 'publish', 'closed', 'closed', '', 'field_62b32c1551a62', '', '', '2022-06-22 14:55:28', '2022-06-22 14:55:28', '', 49, 'http://localhost/booking/?post_type=acf-field&#038;p=50', 0, 'acf-field', '', 0),
(52, 1, '2022-06-22 14:52:14', '2022-06-22 14:52:14', 'a:10:{s:4:\"type\";s:4:\"text\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:7:\"prepend\";s:0:\"\";s:6:\"append\";s:0:\"\";s:9:\"maxlength\";s:0:\"\";}', 'Text privacy policy', 'text_privacy_policy', 'publish', 'closed', 'closed', '', 'field_62b32c4651a64', '', '', '2022-06-23 15:08:06', '2022-06-23 15:08:06', '', 49, 'http://localhost/booking/?post_type=acf-field&#038;p=52', 1, 'acf-field', '', 0),
(54, 1, '2022-06-23 07:12:27', '2022-06-23 07:12:27', 'a:7:{s:4:\"type\";s:3:\"tab\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:9:\"placement\";s:3:\"top\";s:8:\"endpoint\";i:0;}', 'Menu', 'menu', 'publish', 'closed', 'closed', '', 'field_62b4124acc9ef', '', '', '2022-06-23 16:29:44', '2022-06-23 16:29:44', '', 6, 'http://localhost/booking/?post_type=acf-field&#038;p=54', 22, 'acf-field', '', 0),
(55, 1, '2022-06-23 09:14:57', '2022-06-23 09:14:57', 'a:10:{s:4:\"type\";s:8:\"repeater\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:9:\"collapsed\";s:0:\"\";s:3:\"min\";s:0:\"\";s:3:\"max\";s:0:\"\";s:6:\"layout\";s:5:\"table\";s:12:\"button_label\";s:0:\"\";}', 'Level 1', 'menu', 'publish', 'closed', 'closed', '', 'field_62b42e0bb71db', '', '', '2022-06-24 04:30:54', '2022-06-24 04:30:54', '', 6, 'http://localhost/booking/?post_type=acf-field&#038;p=55', 23, 'acf-field', '', 0),
(56, 1, '2022-06-23 09:14:57', '2022-06-23 09:14:57', 'a:10:{s:4:\"type\";s:8:\"textarea\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:2:\"15\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:9:\"maxlength\";s:0:\"\";s:4:\"rows\";s:0:\"\";s:9:\"new_lines\";s:0:\"\";}', 'Service', 'title_parent', 'publish', 'closed', 'closed', '', 'field_62b42e4eb71dc', '', '', '2022-06-24 04:30:54', '2022-06-24 04:30:54', '', 55, 'http://localhost/booking/?post_type=acf-field&#038;p=56', 0, 'acf-field', '', 0),
(57, 1, '2022-06-23 09:14:57', '2022-06-23 09:14:57', 'a:10:{s:4:\"type\";s:8:\"repeater\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:9:\"collapsed\";s:0:\"\";s:3:\"min\";s:0:\"\";s:3:\"max\";s:0:\"\";s:6:\"layout\";s:5:\"table\";s:12:\"button_label\";s:0:\"\";}', 'Level 2', 'menu_child', 'publish', 'closed', 'closed', '', 'field_62b42e6ab71dd', '', '', '2022-06-24 04:30:54', '2022-06-24 04:30:54', '', 55, 'http://localhost/booking/?post_type=acf-field&#038;p=57', 3, 'acf-field', '', 0),
(58, 1, '2022-06-23 09:14:57', '2022-06-23 09:14:57', 'a:10:{s:4:\"type\";s:8:\"textarea\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:9:\"maxlength\";s:0:\"\";s:4:\"rows\";s:0:\"\";s:9:\"new_lines\";s:0:\"\";}', 'Service', 'title', 'publish', 'closed', 'closed', '', 'field_62b42e9db71de', '', '', '2022-06-24 04:30:54', '2022-06-24 04:30:54', '', 57, 'http://localhost/booking/?post_type=acf-field&#038;p=58', 0, 'acf-field', '', 0),
(59, 1, '2022-06-23 09:14:57', '2022-06-23 09:14:57', 'a:10:{s:4:\"type\";s:8:\"textarea\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:9:\"maxlength\";s:0:\"\";s:4:\"rows\";s:0:\"\";s:9:\"new_lines\";s:0:\"\";}', 'Service description', 'description', 'publish', 'closed', 'closed', '', 'field_62b42edfb71df', '', '', '2022-06-24 04:30:54', '2022-06-24 04:30:54', '', 57, 'http://localhost/booking/?post_type=acf-field&#038;p=59', 1, 'acf-field', '', 0),
(60, 1, '2022-06-23 09:14:57', '2022-06-23 09:14:57', 'a:10:{s:4:\"type\";s:8:\"textarea\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:9:\"maxlength\";s:0:\"\";s:4:\"rows\";s:0:\"\";s:9:\"new_lines\";s:0:\"\";}', 'Price', 'price', 'publish', 'closed', 'closed', '', 'field_62b42eebb71e0', '', '', '2022-06-23 09:20:37', '2022-06-23 09:20:37', '', 57, 'http://localhost/booking/?post_type=acf-field&#038;p=60', 2, 'acf-field', '', 0),
(61, 1, '2022-06-23 09:20:37', '2022-06-23 09:20:37', 'a:10:{s:4:\"type\";s:8:\"textarea\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:2:\"15\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:9:\"maxlength\";s:0:\"\";s:4:\"rows\";s:0:\"\";s:9:\"new_lines\";s:0:\"\";}', 'Price', 'price_parent', 'publish', 'closed', 'closed', '', 'field_62b430356d75b', '', '', '2022-06-23 10:31:15', '2022-06-23 10:31:15', '', 55, 'http://localhost/booking/?post_type=acf-field&#038;p=61', 2, 'acf-field', '', 0),
(63, 1, '2022-06-23 10:27:56', '2022-06-23 10:27:56', 'a:10:{s:4:\"type\";s:8:\"textarea\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:2:\"15\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:9:\"maxlength\";s:0:\"\";s:4:\"rows\";s:0:\"\";s:9:\"new_lines\";s:0:\"\";}', 'Service description', 'description_parent', 'publish', 'closed', 'closed', '', 'field_62b4400ab37e5', '', '', '2022-06-24 04:30:54', '2022-06-24 04:30:54', '', 55, 'http://localhost/booking/?post_type=acf-field&#038;p=63', 1, 'acf-field', '', 0),
(64, 1, '2022-06-23 13:48:07', '2022-06-23 13:48:07', 'a:7:{s:4:\"type\";s:5:\"group\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:6:\"layout\";s:5:\"block\";s:10:\"sub_fields\";a:0:{}}', 'Header Menu', 'menu_header', 'publish', 'closed', 'closed', '', 'field_62b46ef176ab7', '', '', '2022-06-23 13:48:56', '2022-06-23 13:48:56', '', 6, 'http://localhost/booking/?post_type=acf-field&#038;p=64', 2, 'acf-field', '', 0),
(65, 1, '2022-06-23 13:48:07', '2022-06-23 13:48:07', 'a:10:{s:4:\"type\";s:4:\"text\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:7:\"prepend\";s:0:\"\";s:6:\"append\";s:0:\"\";s:9:\"maxlength\";s:0:\"\";}', 'Link', 'link', 'publish', 'closed', 'closed', '', 'field_62b46f0476ab8', '', '', '2022-06-23 13:48:07', '2022-06-23 13:48:07', '', 64, 'http://localhost/booking/?post_type=acf-field&p=65', 0, 'acf-field', '', 0),
(66, 1, '2022-06-23 13:48:07', '2022-06-23 13:48:07', 'a:10:{s:4:\"type\";s:4:\"text\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:7:\"prepend\";s:0:\"\";s:6:\"append\";s:0:\"\";s:9:\"maxlength\";s:0:\"\";}', 'Additional menu', 'text', 'publish', 'closed', 'closed', '', 'field_62b46f0d76ab9', '', '', '2022-06-24 04:20:49', '2022-06-24 04:20:49', '', 64, 'http://localhost/booking/?post_type=acf-field&#038;p=66', 1, 'acf-field', '', 0),
(67, 1, '2022-06-23 13:50:55', '2022-06-23 13:50:55', 'a:10:{s:4:\"type\";s:4:\"text\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:7:\"prepend\";s:0:\"\";s:6:\"append\";s:0:\"\";s:9:\"maxlength\";s:0:\"\";}', 'Popup link', 'popup_body', 'publish', 'closed', 'closed', '', 'field_62b46fa32d94a', '', '', '2022-06-23 16:29:44', '2022-06-23 16:29:44', '', 6, 'http://localhost/booking/?post_type=acf-field&#038;p=67', 18, 'acf-field', '', 0),
(68, 1, '2022-06-23 13:52:58', '2022-06-23 13:52:58', 'a:6:{s:4:\"type\";s:12:\"color_picker\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:7:\"#fce4de\";}', 'Background color contact', 'background_color_contact', 'publish', 'closed', 'closed', '', 'field_62b46feb29f9a', '', '', '2022-06-23 16:29:44', '2022-06-23 16:29:44', '', 6, 'http://localhost/booking/?post_type=acf-field&#038;p=68', 19, 'acf-field', '', 0),
(69, 1, '2022-06-23 14:45:11', '2022-06-23 14:45:11', '{\"version\": 2, \"isGlobalStylesUserThemeJSON\": true }', 'Custom Styles', '', 'publish', 'closed', 'closed', '', 'wp-global-styles-book', '', '', '2022-06-23 14:45:11', '2022-06-23 14:45:11', '', 0, 'http://localhost/booking/index.php/2022/06/23/wp-global-styles-book/', 0, 'wp_global_styles', '', 0),
(72, 1, '2022-06-23 14:47:37', '2022-06-23 14:47:37', '<p>haitho</p>', 'Terms', '', 'publish', 'closed', 'closed', '', 'terms', '', '', '2022-08-06 04:27:34', '2022-08-06 04:27:34', '', 0, 'http://localhost/booking/?page_id=72', 0, 'page', '', 0);
INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(73, 1, '2022-06-23 14:47:37', '2022-06-23 14:47:37', '<!-- wp:paragraph -->\n<p>WEBSITE TERMS AND CONDITIONS Last updated October 29, 2020 AGREEMENT TO TERMS These Terms and Conditions constitute a legally binding agreement made between you, whether personally or on behalf of an entity (“you”) and Grepper Technologies LLC (“we,” “us” or “our”), concerning your access to and use of the www.codegrepper.com website as well as any other media form, media channel, mobile website or mobile application related, linked, or otherwise connected thereto (collectively, the “Site”). You agree that by accessing the Site, you have read, understood, and agree to be bound by all of these Terms and Conditions. If you do not agree with all of these Terms and Conditions, then you are expressly prohibited from using the Site and you must discontinue use immediately. Supplemental terms and conditions or documents that may be posted on the Site from time to time are hereby expressly incorporated herein by reference. We reserve the right, in our sole discretion, to make changes or modifications to these Terms and Conditions at any time and for any reason. We will alert you about any changes by updating the “Last updated” date of these Terms and Conditions, and you waive any right to receive specific notice of each such change. It is your responsibility to periodically review these Terms and Conditions to stay informed of updates. You will be subject to, and will be deemed to have been made aware of and to have accepted, the changes in any revised Terms and Conditions by your continued use of the Site after the date such revised Terms and Conditions are posted. The information provided on the Site is not intended for distribution to or use by any person or entity in any jurisdiction or country where such distribution or use would be contrary to law or regulation or which would subject us to any registration requirement within such jurisdiction or country. Accordingly, those persons who choose to access the Site from other locations do so on their own initiative and are solely responsible for compliance with local laws, if and to the extent local laws are applicable.&nbsp; These terms and conditions were created using Termly. All users who are minors in the jurisdiction in which they reside (generally under the age of 18) must have the permission of, and be directly supervised by, their parent or guardian to use the Site. If you are a minor, you must have your parent or guardian read and agree to these Terms and Conditions prior to you using the Site. INTELLECTUAL PROPERTY RIGHTS Unless otherwise indicated, the Site is our proprietary property and all source code, databases, functionality, software, website designs, audio, video, text, photographs, and graphics on the Site (collectively, the “Content”) and the trademarks, service marks, and logos contained therein (the “Marks”) are owned or controlled by us or licensed to us, and are protected by copyright and trademark laws and various other intellectual property rights and unfair competition laws of the United States, foreign jurisdictions, and international conventions. The Content and the Marks are provided on the Site “AS IS” for your information and personal use only. Except as expressly provided in these Terms and Conditions, no part of the Site and no Content or Marks may be copied, reproduced, aggregated, republished, uploaded, posted, publicly displayed, encoded, translated, transmitted, distributed, sold, licensed, or otherwise exploited for any commercial purpose whatsoever, without our express prior written permission. Provided that you are eligible to use the Site, you are granted a limited license to access and use the Site and to download or print a copy of any portion of the Content to which you have properly gained access solely for your personal, non-commercial use. We reserve all rights not expressly granted to you in and to the Site, the Content and the Marks. USER REPRESENTATIONS By using the Site, you represent and warrant that: (1) all registration information you submit will be true, accurate, current, and complete; (2) you will maintain the accuracy of such information and promptly update such registration information as necessary; (2) you have the legal capacity and you agree to comply with these Terms and Conditions; (3) you will not access the Site through automated or non-human means, whether through a bot, script, or otherwise; (4) you will not use the Site for any illegal or unauthorized purpose; (5) your use of the Site will not violate any applicable law or regulation. If you provide any information that is untrue, inaccurate, not current, or incomplete, we have the right to suspend or terminate your account and refuse any and all current or future use of the Site (or any portion thereof). USER REGISTRATION You may be required to register with the Site. You agree to keep your password confidential and will be responsible for all use of your account and password. We reserve the right to remove, reclaim, or change a username you select if we determine, in our sole discretion, that such username is inappropriate, obscene, or otherwise objectionable. &nbsp; PROHIBITED ACTIVITIES You may not access or use the Site for any purpose other than that for which we make the Site available. The Site may not be used in connection with any commercial endeavors except those that are specifically endorsed or approved by us. As a user of the Site, you agree not to: • systematically retrieve data or other content from the Site to create or compile, directly or indirectly, a collection, compilation, database, or directory without written permission from us. • make any unauthorized use of the Site, including collecting usernames and/or email addresses of users by electronic or other means for the purpose of sending unsolicited email, or creating user accounts by automated means or under false pretenses. • use a buying agent or purchasing agent to make purchases on the Site. • use the Site to advertise or offer to sell goods and services. • circumvent, disable, or otherwise interfere with security-related features of the Site, including features that prevent or restrict the use or copying of any Content or enforce limitations on the use of the Site and/or the Content contained therein. • engage in unauthorized framing of or linking to the Site. • trick, defraud, or mislead us and other users, especially in any attempt to learn sensitive account information such as user passwords; • make improper use of our support services or submit false reports of abuse or misconduct. • engage in any automated use of the system, such as using scripts to send comments or messages, or using any data mining, robots, or similar data gathering and extraction tools. • interfere with, disrupt, or create an undue burden on the Site or the networks or services connected to the Site. • attempt to impersonate another user or person or use the username of another user. • sell or otherwise transfer your profile. • use any information obtained from the Site in order to harass, abuse, or harm another person. • use the Site as part of any effort to compete with us or otherwise use the Site and/or the Content for any revenue-generating endeavor or commercial enterprise. • decipher, decompile, disassemble, or reverse engineer any of the software comprising or in any way making up a part of the Site. • attempt to bypass any measures of the Site designed to prevent or restrict access to the Site, or any portion of the Site. • harass, annoy, intimidate, or threaten any of our employees or agents engaged in providing any portion of the Site to you. • delete the copyright or other proprietary rights notice from any Content. • copy or adapt the Site’s software, including but not limited to Flash, PHP, HTML, JavaScript, or other code. • upload or transmit (or attempt to upload or to transmit) viruses, Trojan horses, or other material, including excessive use of capital letters and spamming (continuous posting of repetitive text), that interferes with any party’s uninterrupted use and enjoyment of the Site or modifies, impairs, disrupts, alters, or interferes with the use, features, functions, operation, or maintenance of the Site. • upload or transmit (or attempt to upload or to transmit) any material that acts as a passive or active information collection or transmission mechanism, including without limitation, clear graphics interchange formats (“gifs”), 1×1 pixels, web bugs, cookies, or other similar devices (sometimes referred to as “spyware” or “passive collection mechanisms” or “pcms”). • except as may be the result of standard search engine or Internet browser usage, use, launch, develop, or distribute any automated system, including without limitation, any spider, robot, cheat utility, scraper, or offline reader that accesses the Site, or using or launching any unauthorized script or other software. • disparage, tarnish, or otherwise harm, in our opinion, us and/or the Site. • use the Site in a manner inconsistent with any applicable laws or regulations. USER GENERATED CONTRIBUTIONS The Site may invite you to chat, contribute to, or participate in blogs, message boards, online forums, and other functionality, and may provide you with the opportunity to create, submit, post, display, transmit, perform, publish, distribute, or broadcast content and materials to us or on the Site, including but not limited to text, writings, video, audio, photographs, graphics, comments, suggestions, or personal information or other material (collectively, \"Contributions\"). Contributions may be viewable by other users of the Site and through third-party websites. As such, any Contributions you transmit may be treated as non-confidential and non-proprietary. When you create or make available any Contributions, you thereby represent and warrant that: • the creation, distribution, transmission, public display, or performance, and the accessing, downloading, or copying of your Contributions do not and will not infringe the proprietary rights, including but not limited to the copyright, patent, trademark, trade secret, or moral rights of any third party. • your Contributions are not false, inaccurate, or misleading. • your Contributions are not unsolicited or unauthorized advertising, promotional materials, pyramid schemes, chain letters, spam, mass mailings, or other forms of solicitation. • your Contributions are not obscene, lewd, lascivious, filthy, violent, harassing, libelous, slanderous, or otherwise objectionable (as determined by us). • your Contributions do not ridicule, mock, disparage, intimidate, or abuse anyone. • your Contributions do not advocate the violent overthrow of any government or incite, encourage, or threaten physical harm against another. • your Contributions do not violate any applicable law, regulation, or rule. • your Contributions do not violate the privacy or publicity rights of any third party. • your Contributions do not contain any material that solicits personal information from anyone under the age of 18 or exploits people under the age of 18 in a sexual or violent manner. • your Contributions do not violate any federal or state law concerning child pornography, or otherwise intended to protect the health or well-being of minors; • your Contributions do not include any offensive comments that are connected to race, national origin, gender, sexual preference, or physical handicap. • your Contributions do not otherwise violate, or link to material that violates, any provision of these Terms and Conditions, or any applicable law or regulation. Any use of the Site in violation of the foregoing violates these Terms and Conditions and may result in, among other things, termination or suspension of your rights to use the Site. CONTRIBUTION LICENSE By posting your Contributions to any part of the Site ,or making Contributions accessible to the Site by linking your account from the Site to any of your social networking accounts, you automatically grant, and you represent and warrant that you have the right to grant, to us an unrestricted, unlimited, irrevocable, perpetual, non-exclusive, transferable, royalty-free, fully-paid, worldwide right, and license to host, use, copy, reproduce, disclose, sell, resell, publish, broadcast, retitle, archive, store, cache, publicly perform, publicly display, reformat, translate, transmit, excerpt (in whole or in part), and distribute such Contributions (including, without limitation, your image and voice) for any purpose, commercial, advertising, or otherwise, and to prepare derivative works of, or incorporate into other works, such Contributions, and grant and authorize sublicenses of the foregoing. The use and distribution may occur in any media formats and through any media channels. This license will apply to any form, media, or technology now known or hereafter developed, and includes our use of your name, company name, and franchise name, as applicable, and any of the trademarks, service marks, trade names, logos, and personal and commercial images you provide. You waive all moral rights in your Contributions, and you warrant that moral rights have not otherwise been asserted in your Contributions. We do not assert any ownership over your Contributions. You retain full ownership of all of your Contributions and any intellectual property rights or other proprietary rights associated with your Contributions. We are not liable for any statements or representations in your Contributions provided by you in any area on the Site. You are solely responsible for your Contributions to the Site and you expressly agree to exonerate us from any and all responsibility and to refrain from any legal action against us regarding your Contributions. We have the right, in our sole and absolute discretion, (1) to edit, redact, or otherwise change any Contributions; (2) to re-categorize any Contributions to place them in more appropriate locations on the Site; and (3) to pre-screen or delete any Contributions at any time and for any reason, without notice. We have no obligation to monitor your Contributions. &nbsp; GUIDELINES FOR REVIEWS We may provide you areas on the Site to leave reviews or ratings. When posting a review, you must comply with the following criteria: (1) you should have firsthand experience with the person/entity being reviewed; (2) your reviews should not contain offensive profanity, or abusive, racist, offensive, or hate language; (3) your reviews should not contain discriminatory references based on religion, race, gender, national origin, age, marital status, sexual orientation, or disability; (4) your reviews should not contain references to illegal activity; (5) you should not be affiliated with competitors if posting negative reviews; (6) you should not make any conclusions as to the legality of conduct; (7) you may not post any false or misleading statements; (8) you may not organize a campaign encouraging others to post reviews, whether positive or negative. We may accept, reject, or remove reviews in our sole discretion. We have absolutely no obligation to screen reviews or to delete reviews, even if anyone considers reviews objectionable or inaccurate. Reviews are not endorsed by us, and do not necessarily represent our opinions or the views of any of our affiliates or partners. We do not assume liability for any review or for any claims, liabilities, or losses resulting from any review. By posting a review, you hereby grant to us a perpetual, non-exclusive, worldwide, royalty-free, fully-paid, assignable, and sublicensable right and license to reproduce, modify, translate, transmit by any means, display, perform, and/or distribute all content relating to reviews. &nbsp; MOBILE APPLICATION LICENSE Use License If you access the Site via a mobile application, then we grant you a revocable, non-exclusive, non-transferable, limited right to install and use the mobile application on wireless electronic devices owned or controlled by you, and to access and use the mobile application on such devices strictly in accordance with the terms and conditions of this mobile application license contained in these Terms and Conditions. You shall not: (1) decompile, reverse engineer, disassemble, attempt to derive the source code of, or decrypt the application; (2) make any modification, adaptation, improvement, enhancement, translation, or derivative work from the application; (3) violate any applicable laws, rules, or regulations in connection with your access or use of the application; (4) remove, alter, or obscure any proprietary notice (including any notice of copyright or trademark) posted by us or the licensors of the application; (5) use the application for any revenue generating endeavor, commercial enterprise, or other purpose for which it is not designed or intended; (6) make the application available over a network or other environment permitting access or use by multiple devices or users at the same time; (7) use the application for creating a product, service, or software that is, directly or indirectly, competitive with or in any way a substitute for the application; (8) use the application to send automated queries to any website or to send any unsolicited commercial e-mail; (9) use any proprietary information or any of our interfaces or our other intellectual property in the design, development, manufacture, licensing, or distribution of any applications, accessories, or devices for use with the application. Apple and Android Devices The following terms apply when you use a mobile application obtained from either the Apple Store or Google Play (each an “App Distributor”) to access the Site: (1) the license granted to you for our mobile application is limited to a non-transferable license to use the application on a device that utilizes the Apple iOS or Android operating systems, as applicable, and in accordance with the usage rules set forth in the applicable App Distributor’s terms of service; (2) we are responsible for providing any maintenance and support services with respect to the mobile application as specified in the terms and conditions of this mobile application license contained in these Terms and Conditions or as otherwise required under applicable law, and you acknowledge that each App Distributor has no obligation whatsoever to furnish any maintenance and support services with respect to the mobile application; (3) in the event of any failure of the mobile application to conform to any applicable warranty, you may notify the applicable App Distributor, and the App Distributor, in accordance with its terms and policies, may refund the purchase price, if any, paid for the mobile application, and to the maximum extent permitted by applicable law, the App Distributor will have no other warranty obligation whatsoever with respect to the mobile application; (4) you represent and warrant that (i) you are not located in a country that is subject to a U.S. government embargo, or that has been designated by the U.S. government as a “terrorist supporting” country and (ii) you are not listed on any U.S. government list of prohibited or restricted parties; (5) you must comply with applicable third-party terms of agreement when using the mobile application, e.g., if you have a VoIP application, then you must not be in violation of their wireless data service agreement when using the mobile application; 6) you acknowledge and agree that the App Distributors are third-party beneficiaries of the terms and conditions in this mobile application license contained in these Terms and Conditions, and that each App Distributor will have the right (and will be deemed to have accepted the right) to enforce the terms and conditions in this mobile application license contained in these Terms and Conditions against you as a third-party beneficiary thereof. SOCIAL MEDIA As part of the functionality of the Site, you may link your account with online accounts you have with third-party service providers (each such account, a “Third-Party Account”) by either: (1) providing your Third-Party Account login information through the Site; or (2) allowing us to access your Third-Party Account, as is permitted under the applicable terms and conditions that govern your use of each Third-Party Account. You represent and warrant that you are entitled to disclose your Third-Party Account login information to us and/or grant us access to your Third-Party Account, without breach by you of any of the terms and conditions that govern your use of the applicable Third-Party Account, and without obligating us to pay any fees or making us subject to any usage limitations imposed by the third-party service provider of the Third-Party Account. By granting us access to any Third-Party Accounts, you understand that (1) we may access, make available, and store (if applicable) any content that you have provided to and stored in your Third-Party Account (the “Social Network Content”) so that it is available on and through the Site via your account, including without limitation any friend lists and (2) we may submit to and receive from your Third-Party Account additional information to the extent you are notified when you link your account with the Third-Party Account. Depending on the Third-Party Accounts you choose and subject to the privacy settings that you have set in such Third-Party Accounts, personally identifiable information that you post to your Third-Party Accounts may be available on and through your account on the Site. Please note that if a Third-Party Account or associated service becomes unavailable or our access to such Third-Party Account is terminated by the third-party service provider, then Social Network Content may no longer be available on and through the Site. You will have the ability to disable the connection between your account on the Site and your Third-Party Accounts at any time. PLEASE NOTE THAT YOUR RELATIONSHIP WITH THE THIRD-PARTY SERVICE PROVIDERS ASSOCIATED WITH YOUR THIRD-PARTY ACCOUNTS IS GOVERNED SOLELY BY YOUR AGREEMENT(S) WITH SUCH THIRD-PARTY SERVICE PROVIDERS. We make no effort to review any Social Network Content for any purpose, including but not limited to, for accuracy, legality, or non-infringement, and we are not responsible for any Social Network Content. You acknowledge and agree that we may access your email address book associated with a Third-Party Account and your contacts list stored on your mobile device or tablet computer solely for purposes of identifying and informing you of those contacts who have also registered to use the Site. You can deactivate the connection between the Site and your Third-Party Account by contacting us using the contact information below or through your account settings (if applicable). We will attempt to delete any information stored on our servers that was obtained through such Third-Party Account, except the username and profile picture that become associated with your account. SUBMISSIONS You acknowledge and agree that any questions, comments, suggestions, ideas, feedback, or other information regarding the Site (\"Submissions\") provided by you to us are non-confidential and shall become our sole property. We shall own exclusive rights, including all intellectual property rights, and shall be entitled to the unrestricted use and dissemination of these Submissions for any lawful purpose, commercial or otherwise, without acknowledgment or compensation to you. You hereby waive all moral rights to any such Submissions, and you hereby warrant that any such Submissions are original with you or that you have the right to submit such Submissions. You agree there shall be no recourse against us for any alleged or actual infringement or misappropriation of any proprietary right in your Submissions. THIRD-PARTY WEBSITES AND CONTENT The Site may contain (or you may be sent via the Site) links to other websites (\"Third-Party Websites\") as well as articles, photographs, text, graphics, pictures, designs, music, sound, video, information, applications, software, and other content or items belonging to or originating from third parties (\"Third-Party Content\"). Such Third-Party Websites and Third-Party Content are not investigated, monitored, or checked for accuracy, appropriateness, or completeness by us, and we are not responsible for any Third-Party Websites accessed through the Site or any Third-Party Content posted on, available through, or installed from the Site, including the content, accuracy, offensiveness, opinions, reliability, privacy practices, or other policies of or contained in the Third-Party Websites or the Third-Party Content. Inclusion of, linking to, or permitting the use or installation of any Third-Party Websites or any Third-Party Content does not imply approval or endorsement thereof by us. If you decide to leave the Site and access the Third-Party Websites or to use or install any Third-Party Content, you do so at your own risk, and you should be aware these Terms and Conditions no longer govern. You should review the applicable terms and policies, including privacy and data gathering practices, of any website to which you navigate from the Site or relating to any applications you use or install from the Site. Any purchases you make through Third-Party Websites will be through other websites and from other companies, and we take no responsibility whatsoever in relation to such purchases which are exclusively between you and the applicable third party. You agree and acknowledge that we do not endorse the products or services offered on Third-Party Websites and you shall hold us harmless from any harm caused by your purchase of such products or services. Additionally, you shall hold us harmless from any losses sustained by you or harm caused to you relating to or resulting in any way from any Third-Party Content or any contact with Third-Party Websites. ADVERTISERS We allow advertisers to display their advertisements and other information in certain areas of the Site, such as sidebar advertisements or banner advertisements. If you are an advertiser, you shall take full responsibility for any advertisements you place on the Site and any services provided on the Site or products sold through those advertisements. Further, as an advertiser, you warrant and represent that you possess all rights and authority to place advertisements on the Site, including, but not limited to, intellectual property rights, publicity rights, and contractual rights. As an advertiser, you agree that such advertisements are subject to our Digital Millennium Copyright Act (“DMCA”) Notice and Policy provisions as described below, and you understand and agree there will be no refund or other compensation for DMCA takedown-related issues. We simply provide the space to place such advertisements, and we have no other relationship with advertisers. &nbsp; SITE MANAGEMENT We reserve the right, but not the obligation, to:&nbsp; (1) monitor the Site for violations of these Terms and Conditions; (2) take appropriate legal action against anyone who, in our sole discretion, violates the law or these Terms and Conditions, including without limitation, reporting such user to law enforcement authorities; (3) in our sole discretion and without limitation, refuse, restrict access to, limit the availability of, or disable (to the extent technologically feasible) any of your Contributions or any portion thereof; (4) in&nbsp;our sole discretion and without limitation, notice, or liability, to remove from the Site or otherwise disable all files and content that are excessive in size or are in any way burdensome to our systems; (5) otherwise manage the Site in a manner designed to protect our rights and property and to facilitate the proper functioning of the Site. PRIVACY POLICY We care about data privacy and security. Please review our Privacy Policy on the Site. By using the Site, you agree to be bound by our Privacy Policy, which is incorporated into these Terms and Conditions. Please be advised the Site is hosted in the United States. If you access the Site from the European Union, Asia, or any other region of the world with laws or other requirements governing personal data collection, use, or disclosure that differ from applicable laws in the United States, then through your continued use of the Site, you are transferring your data to the United States, and you expressly consent to have your data transferred to and processed in the United States. [Further, we do not knowingly accept, request, or solicit information from children or knowingly market to children. Therefore, in accordance with the U.S. Children’s Online Privacy Protection Act, if we receive actual knowledge that anyone under the age of 13 has provided personal information to us without the requisite and verifiable parental consent, we will delete that information from the Site as quickly as is reasonably practical.] DIGITAL MILLENNIUM COPYRIGHT ACT (DMCA) NOTICE AND POLICY Notifications We respect the intellectual property rights of others. If you believe that any material available on or through the Site infringes upon any copyright you own or control, please immediately notify our Designated Copyright Agent using the contact information provided below (a “Notification”). A copy of your Notification will be sent to the person who posted or stored the material addressed in the Notification. Please be advised that pursuant to federal law you may be held liable for damages if you make material misrepresentations in a Notification. Thus, if you are not sure that material located on or linked to by the Site infringes your copyright, you should consider first contacting an attorney. All Notifications should meet the requirements of DMCA 17 U.S.C. § 512(c)(3) and include the following information: (1) A physical or electronic signature of a person authorized to act on behalf of the owner of an exclusive right that is allegedly infringed; (2) identification of the copyrighted work claimed to have been infringed, or, if multiple copyrighted works on the Site are covered by the Notification, a representative list of such works on the Site; (3) identification of the material that is claimed to be infringing or to be the subject of infringing activity and that is to be removed or access to which is to be disabled, and information reasonably sufficient to permit us to locate the material; (4) information reasonably sufficient to permit us to contact the complaining party, such as an address, telephone number, and, if available, an email address at which the complaining party may be contacted; (5) a statement that the complaining party has a good faith belief that use of the material in the manner complained of is not authorized by the copyright owner, its agent, or the law; (6) a statement that the information in the notification is accurate, and under penalty of perjury, that the complaining party is authorized to act on behalf of the owner of an exclusive right that is allegedly infringed upon. Counter Notification If you believe your own copyrighted material has been removed from the Site as a result of a mistake or misidentification, you may submit a written counter notification to [us/our Designated Copyright Agent] using the contact information provided below (a “Counter Notification”). To be an effective Counter Notification under the DMCA, your Counter Notification must include substantially the following: (1) identification of the material that has been removed or disabled and the location at which the material appeared before it was removed or disabled; (2) a statement that you consent to the jurisdiction of the Federal District Court in which your address is located, or if your address is outside the United States, for any judicial district in which we are located; (3) a statement that you will accept service of process from the party that filed the Notification or the party\'s agent; (4) your name, address, and telephone number; (5) a statement under penalty of perjury that you have a good faith belief that the material in question was removed or disabled as a result of a mistake or misidentification of the material to be removed or disabled; (6) your physical or electronic signature. If you send us a valid, written Counter Notification meeting the requirements described above, we will restore your removed or disabled material, unless we first receive notice from the party filing the Notification informing us that such party has filed a court action to restrain you from engaging in infringing activity related to the material in question. Please note that if you materially misrepresent that the disabled or removed content was removed by mistake or misidentification, you may be liable for damages, including costs and attorney\'s fees. Filing a false Counter Notification constitutes perjury. Designated Copyright Agent Taylor Hawkes Copyright Agent 3550 Frontier Avenue, Suite A2, Boulder CO, 80301 support@codegrepper.com COPYRIGHT INFRINGEMENTS We respect the intellectual property rights of others. If you believe that any material available on or through the Site infringes upon any copyright you own or control, please immediately notify us using the contact information provided below (a “Notification”). A copy of your Notification will be sent to the person who posted or stored the material addressed in the Notification. Please be advised that pursuant to federal law you may be held liable for damages if you make material misrepresentations in a Notification. Thus, if you are not sure that material located on or linked to by the Site infringes your copyright, you should consider first contacting an attorney.] TERM AND TERMINATION These Terms and Conditions shall remain in full force and effect while you use the Site. WITHOUT LIMITING ANY OTHER PROVISION OF THESE TERMS AND CONDITIONS, WE RESERVE THE RIGHT TO, IN OUR SOLE DISCRETION AND WITHOUT NOTICE OR LIABILITY, DENY ACCESS TO AND USE OF THE SITE (INCLUDING BLOCKING CERTAIN IP ADDRESSES), TO ANY PERSON FOR ANY REASON OR FOR NO REASON, INCLUDING WITHOUT LIMITATION FOR BREACH OF ANY REPRESENTATION, WARRANTY, OR COVENANT CONTAINED IN THESE TERMS AND CONDITIONS OR OF ANY APPLICABLE LAW OR REGULATION. WE MAY TERMINATE YOUR USE OR PARTICIPATION IN THE SITE OR DELETE [YOUR ACCOUNT AND] ANY CONTENT OR INFORMATION THAT YOU POSTED AT ANY TIME, WITHOUT WARNING, IN OUR SOLE DISCRETION. If we terminate or suspend your account for any reason, you are prohibited from registering and creating a new account under your name, a fake or borrowed name, or the name of any third party, even if you may be acting on behalf of the third party. In addition to terminating or suspending your account, we reserve the right to take appropriate legal action, including without limitation pursuing civil, criminal, and injunctive redress. MODIFICATIONS AND INTERRUPTIONS We reserve the right to change, modify, or remove the contents of the Site at any time or for any reason at our sole discretion without notice. However, we have no obligation to update any information on our Site. We also reserve the right to modify or discontinue all or part of the Site without notice at any time. We will not be liable to you or any third party for any modification, price change, suspension, or discontinuance of the Site. We cannot guarantee the Site will be available at all times. We may experience hardware, software, or other problems or need to perform maintenance related to the Site, resulting in interruptions, delays, or errors. We reserve the right to change, revise, update, suspend, discontinue, or otherwise modify the Site at any time or for any reason without notice to you. You agree that we have no liability whatsoever for any loss, damage, or inconvenience caused by your inability to access or use the Site during any downtime or discontinuance of the Site. Nothing in these Terms and Conditions will be construed to obligate us to maintain and support the Site or to supply any corrections, updates, or releases in connection therewith. GOVERNING LAW These Terms and Conditions and your use of the Site are governed by and construed in accordance with the laws of the State of [name of state] applicable to agreements made and to be entirely performed within the State/Commonwealth of [name of state], without regard to its conflict of law principles. DISPUTE RESOLUTION Option 1: Any legal action of whatever nature brought by either you or us (collectively, the “Parties” and individually, a “Party”) shall be commenced or prosecuted in the state and federal courts located in [name of county] County, [name of state], and the Parties hereby consent to, and waive all defenses of lack of personal jurisdiction and forum non conveniens with respect to venue and jurisdiction in such state and federal courts. Application of the United Nations Convention on Contracts for the International Sale of Goods and the Uniform Computer Information Transaction Act (UCITA) are excluded from these Terms and Conditions. In no event shall any claim, action, or proceeding brought by either Party related in any way to the Site be commenced more than 2 years after the cause of action arose. Option 2: Informal Negotiations To expedite resolution and control the cost of any dispute, controversy, or claim related to these Terms and Conditions (each a \"Dispute\" and collectively, the “Disputes”) brought by either you or us (individually, a “Party” and collectively, the “Parties”), the Parties agree to first attempt to negotiate any Dispute (except those Disputes expressly provided below) informally for at least 2 days before initiating arbitration. Such informal negotiations commence upon written notice from one Party to the other Party. Binding Arbitration If the Parties are unable to resolve a Dispute through informal negotiations, the Dispute (except those Disputes expressly excluded below) will be finally and exclusively resolved by binding arbitration. YOU UNDERSTAND THAT WITHOUT THIS PROVISION, YOU WOULD HAVE THE RIGHT TO SUE IN COURT AND HAVE A JURY TRIAL. The arbitration shall be commenced and conducted under the Commercial Arbitration Rules of the American Arbitration Association (\"AAA\") and, where appropriate, the AAA’s Supplementary Procedures for Consumer Related Disputes (\"AAA Consumer Rules\"), both of which are available at the AAA website www.adr.org. Your arbitration fees and your share of arbitrator compensation shall be governed by the AAA Consumer Rules and, where appropriate, limited by the AAA Consumer Rules. [If such costs are determined to by the arbitrator to be excessive, we will pay all arbitration fees and expenses.] The arbitration may be conducted in person, through the submission of documents, by phone, or online. The arbitrator will make a decision in writing, but need not provide a statement of reasons unless requested by either Party. The arbitrator must follow applicable law, and any award may be challenged if the arbitrator fails to do so. Except where otherwise required by the applicable AAA rules or applicable law, the arbitration will take place in [name of county] County, [name of state]. Except as otherwise provided herein, the Parties may litigate in court to compel arbitration, stay proceedings pending arbitration, or to confirm, modify, vacate, or enter judgment on the award entered by the arbitrator. If for any reason, a Dispute proceeds in court rather than arbitration, the Dispute shall be commenced or prosecuted in the state and federal courts located in [name of county] County, [name of state], and the Parties hereby consent to, and waive all defenses of lack of personal jurisdiction, and forum non conveniens with respect to venue and jurisdiction in such state and federal courts.&nbsp; Application of the United Nations Convention on Contracts for the International Sale of Goods and the the Uniform Computer Information Transaction Act (UCITA) are excluded from these Terms and Conditions. In no event shall any Dispute brought by either Party related in any way to the Site be commenced more than 2 years after the cause of action arose. If this provision is found to be illegal or unenforceable, then neither Party will elect to arbitrate any Dispute falling within that portion of this provision found to be illegal or unenforceable and such Dispute shall be decided by a court of competent jurisdiction within the courts listed for jurisdiction above, and the Parties agree to submit to the personal jurisdiction of that court. Option 3: Binding Arbitration To expedite resolution and control the cost of any dispute, controversy or claim related to these Terms and Conditions (each a \"Dispute\" and collectively, “Disputes”), any Dispute brought by either you or us (individually, a “Party” and collectively, the “Parties”) shall be finally and exclusively resolved by binding arbitration. YOU UNDERSTAND THAT WITHOUT THIS PROVISION, YOU WOULD HAVE THE RIGHT TO SUE IN COURT AND HAVE A JURY TRIAL. The arbitration shall be commenced and conducted under the Commercial Arbitration Rules of the American Arbitration Association (\"AAA\") and, where appropriate, the AAA’s Supplementary Procedures for Consumer Related Disputes (\"AAA Consumer Rules\"), both of which are available at the AAA website www.adr.org. Your arbitration fees and your share of arbitrator compensation shall be governed by the AAA Consumer Rules and, where appropriate, limited by the AAA Consumer Rules. [If such costs are determined to by the arbitrator to be excessive, we will pay all arbitration fees and expenses.] The arbitration may be conducted in person, through the submission of documents, by phone, or online. The arbitrator will make a decision in writing, but need not provide a statement of reasons unless requested by either Party. The arbitrator must follow applicable law, and any award may be challenged if the arbitrator fails to do so. Except where otherwise required by the applicable AAA rules or applicable law, the arbitration will take place in [name of county] County, [name of state]. Except as otherwise provided herein, the Parties may litigate in court to compel arbitration, stay proceedings pending arbitration, or to confirm, modify, vacate, or enter judgment on the award entered by the arbitrator. If for any reason, a Dispute proceeds in court rather than arbitration, the Dispute shall be commenced or prosecuted in the state and federal courts located in [name of county] County, [name of state], and the Parties hereby consent to, and waive all defenses of lack of, personal jurisdiction, and forum non conveniens with respect to venue and jurisdiction in such state and federal courts.&nbsp; Application of the United Nations Convention on Contracts for the International Sale of Goods and the Uniform Computer Information Transaction Act (UCITA) are excluded from these Terms and Conditions. In no event shall any Dispute brought by either Party related in any way to the Site or Services be commenced more than 2 years after the cause of action arose. If this provision is found to be illegal or unenforceable, then neither Party will elect to arbitrate any Dispute falling within that portion of this provision found to be illegal or unenforceable and such Dispute shall be decided by a court of competent jurisdiction within the courts listed for jurisdiction above, and the Parties agree to submit to the personal jurisdiction of that court. Option 2/Option 3: Restrictions The Parties agree that any arbitration shall be limited to the Dispute between the Parties individually. To the full extent permitted by law, (a) no arbitration shall be joined with any other proceeding; (b) there is no right or authority for any Dispute to be arbitrated on a class-action basis or to utilize class action procedures; and (c) there is no right or authority for any Dispute to be brought in a purported representative capacity on behalf of the general public or any other persons. Option 2/Option 3: Exceptions to [Informal Negotiations and] Arbitration The Parties agree that the following Disputes are not subject to the above provisions concerning [informal negotiations and] binding arbitration: (a) any Disputes seeking to enforce or protect, or concerning the validity of, any of the intellectual property rights of a Party; (b) any Dispute related to, or arising from, allegations of theft, piracy, invasion of privacy, or unauthorized use; and (c) any claim for injunctive relief. If this provision is found to be illegal or unenforceable, then neither Party will elect to arbitrate any Dispute falling within that portion of this provision found to be illegal or unenforceable and such Dispute shall be decided by a court of competent jurisdiction within the courts listed for jurisdiction above, and the Parties agree to submit to the personal jurisdiction of that court. &nbsp; CORRECTIONS There may be information on the Site that contains typographical errors, inaccuracies, or omissions that may relate to the Site, including descriptions, pricing, availability, and various other information. We reserve the right to correct any errors, inaccuracies, or omissions and to change or update the information on the Site at any time, without prior notice. DISCLAIMER THE SITE IS PROVIDED ON AN AS-IS AND AS-AVAILABLE BASIS. YOU AGREE THAT YOUR USE OF THE SITE AND OUR SERVICES WILL BE AT YOUR SOLE RISK. TO THE FULLEST EXTENT PERMITTED BY LAW, WE DISCLAIM ALL WARRANTIES, EXPRESS OR IMPLIED, IN CONNECTION WITH THE SITE AND YOUR USE THEREOF, INCLUDING, WITHOUT LIMITATION, THE IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, AND NON-INFRINGEMENT. WE MAKE NO WARRANTIES OR REPRESENTATIONS ABOUT THE ACCURACY OR COMPLETENESS OF THE SITE’S CONTENT OR THE CONTENT OF ANY WEBSITES LINKED TO THE SITE AND WE WILL ASSUME NO LIABILITY OR RESPONSIBILITY FOR ANY (1) ERRORS, MISTAKES, OR INACCURACIES OF CONTENT AND MATERIALS, (2) PERSONAL INJURY OR PROPERTY DAMAGE, OF ANY NATURE WHATSOEVER, RESULTING FROM YOUR ACCESS TO AND USE OF THE SITE, (3) ANY UNAUTHORIZED ACCESS TO OR USE OF OUR SECURE SERVERS AND/OR ANY AND ALL PERSONAL INFORMATION AND/OR FINANCIAL INFORMATION STORED THEREIN, (4) ANY INTERRUPTION OR CESSATION OF TRANSMISSION TO OR FROM THE SITE, (5) ANY BUGS, VIRUSES, TROJAN HORSES, OR THE LIKE WHICH MAY BE TRANSMITTED TO OR THROUGH THE SITE BY ANY THIRD PARTY, AND/OR (6) ANY ERRORS OR OMISSIONS IN ANY CONTENT AND MATERIALS OR FOR ANY LOSS OR DAMAGE OF ANY KIND INCURRED AS A RESULT OF THE USE OF ANY CONTENT POSTED, TRANSMITTED, OR OTHERWISE MADE AVAILABLE VIA THE SITE. WE DO NOT WARRANT, ENDORSE, GUARANTEE, OR ASSUME RESPONSIBILITY FOR ANY PRODUCT OR SERVICE ADVERTISED OR OFFERED BY A THIRD PARTY THROUGH THE SITE, ANY HYPERLINKED WEBSITE, OR ANY WEBSITE OR MOBILE APPLICATION FEATURED IN ANY BANNER OR OTHER ADVERTISING, AND WE WILL NOT BE A PARTY TO OR IN ANY WAY BE RESPONSIBLE FOR MONITORING ANY TRANSACTION BETWEEN YOU AND ANY THIRD-PARTY PROVIDERS OF PRODUCTS OR SERVICES. AS WITH THE PURCHASE OF A PRODUCT OR SERVICE THROUGH ANY MEDIUM OR IN ANY ENVIRONMENT, YOU SHOULD USE YOUR BEST JUDGMENT AND EXERCISE CAUTION WHERE APPROPRIATE. &nbsp; LIMITATIONS OF LIABILITY IN NO EVENT WILL WE OR OUR DIRECTORS, EMPLOYEES, OR AGENTS BE LIABLE TO YOU OR ANY THIRD PARTY FOR ANY DIRECT, INDIRECT, CONSEQUENTIAL, EXEMPLARY, INCIDENTAL, SPECIAL, OR PUNITIVE DAMAGES, INCLUDING LOST PROFIT, LOST REVENUE, LOSS OF DATA, OR OTHER DAMAGES ARISING FROM YOUR USE OF THE SITE, EVEN IF WE HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. INDEMNIFICATION You agree to defend, indemnify, and hold us harmless, including our subsidiaries, affiliates, and all of our respective officers, agents, partners, and employees, from and against any loss, damage, liability, claim, or demand, including reasonable attorneys’ fees and expenses, made by any third party due to or arising out of: (1) your Contributions; (2) use of the Site; (3) breach of these Terms and Conditions; (4) any breach of your representations and warranties set forth in these Terms and Conditions; (5) your violation of the rights of a third party, including but not limited to intellectual property rights; or (6) any overt harmful act toward any other user of the Site with whom you connected via the Site. Notwithstanding the foregoing, we reserve the right, at your expense, to assume the exclusive defense and control of any matter for which you are required to indemnify us, and you agree to cooperate, at your expense, with our defense of such claims. We will use reasonable efforts to notify you of any such claim, action, or proceeding which is subject to this indemnification upon becoming aware of it.&nbsp; USER DATA We will maintain certain data that you transmit to the Site for the purpose of managing the Site, as well as data relating to your use of the Site. Although we perform regular routine backups of data, you are solely responsible for all data that you transmit or that relates to any activity you have undertaken using the Site. You agree that we shall have no liability to you for any loss or corruption of any such data, and you hereby waive any right of action against us arising from any such loss or corruption of such data. ELECTRONIC COMMUNICATIONS, TRANSACTIONS, AND SIGNATURES Visiting the Site, sending us emails, and completing online forms constitute electronic communications. You consent to receive electronic communications, and you agree that all agreements, notices, disclosures, and other communications we provide to you electronically, via email and on the Site, satisfy any legal requirement that such communication be in writing. YOU HEREBY AGREE TO THE USE OF ELECTRONIC SIGNATURES, CONTRACTS, ORDERS, AND OTHER RECORDS, AND TO ELECTRONIC DELIVERY OF NOTICES, POLICIES, AND RECORDS OF TRANSACTIONS INITIATED OR COMPLETED BY US OR VIA THE SITE. You hereby waive any rights or requirements under any statutes, regulations, rules, ordinances, or other laws in any jurisdiction which require an original signature or delivery or retention of non-electronic records, or to payments or the granting of credits by any means other than electronic means. CALIFORNIA USERS AND RESIDENTS If any complaint with us is not satisfactorily resolved, you can contact the Complaint Assistance Unit of the Division of Consumer Services of the California Department of Consumer Affairs in writing at 1625 North Market Blvd., Suite N 112, Sacramento, California 95834 or by telephone at (800) 952-5210 or (916) 445-1254. MISCELLANEOUS These Terms and Conditions and any policies or operating rules posted by us on the Site constitute the entire agreement and understanding between you and us. Our failure to exercise or enforce any right or provision of these Terms and Conditions shall not operate as a waiver of such right or provision. These Terms and Conditions operate to the fullest extent permissible by law. We may assign any or all of our rights and obligations to others at any time. We shall not be responsible or liable for any loss, damage, delay, or failure to act caused by any cause beyond our reasonable control. If any provision or part of a provision of these Terms and Conditions is determined to be unlawful, void, or unenforceable, that provision or part of the provision is deemed severable from these Terms and Conditions and does not affect the validity and enforceability of any remaining provisions. There is no joint venture, partnership, employment or agency relationship created between you and us as a result of these Terms and Conditions or use of the Site. You agree that these Terms and Conditions will not be construed against us by virtue of having drafted them. You hereby waive any and all defenses you may have based on the electronic form of these Terms and Conditions and the lack of signing by the parties hereto to execute these Terms and Conditions. CONTACT US&nbsp; In order to resolve a complaint regarding the Site or to receive further information regarding use of the Site, please contact us at: Grepper Technologies LLC 3550 Frontier Avenue, Suite A2, Boulder CO, 80301 support@codegrepper.com</p>\n<!-- /wp:paragraph -->', 'Terms', '', 'inherit', 'closed', 'closed', '', '72-revision-v1', '', '', '2022-06-23 14:47:37', '2022-06-23 14:47:37', '', 72, 'http://localhost/booking/?p=73', 0, 'revision', '', 0);
INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(74, 1, '2022-06-23 15:03:32', '2022-06-23 15:03:32', '<!-- wp:paragraph -->\n<p>WEBSITE TERMS AND CONDITIONS&nbsp;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Last updated October 29, 2020</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>AGREEMENT TO TERMS</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>These Terms and Conditions constitute a legally binding agreement made between you, whether personally or on behalf of an entity (“you”) and Grepper Technologies LLC (“we,” “us” or “our”), concerning your access to and use of the www.codegrepper.com website as well as any other media form, media channel, mobile website or mobile application related, linked, or otherwise connected thereto (collectively, the “Site”).</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>You agree that by accessing the Site, you have read, understood, and agree to be bound by all of these Terms and Conditions. If you do not agree with all of these Terms and Conditions, then you are expressly prohibited from using the Site and you must discontinue use immediately.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Supplemental terms and conditions or documents that may be posted on the Site from time to time are hereby expressly incorporated herein by reference. We reserve the right, in our sole discretion, to make changes or modifications to these Terms and Conditions at any time and for any reason.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>We will alert you about any changes by updating the “Last updated” date of these Terms and Conditions, and you waive any right to receive specific notice of each such change.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>It is your responsibility to periodically review these Terms and Conditions to stay informed of updates. You will be subject to, and will be deemed to have been made aware of and to have accepted, the changes in any revised Terms and Conditions by your continued use of the Site after the date such revised Terms and Conditions are posted.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>The information provided on the Site is not intended for distribution to or use by any person or entity in any jurisdiction or country where such distribution or use would be contrary to law or regulation or which would subject us to any registration requirement within such jurisdiction or country.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Accordingly, those persons who choose to access the Site from other locations do so on their own initiative and are solely responsible for compliance with local laws, if and to the extent local laws are applicable.&nbsp;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>These terms and conditions were created using Termly.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>All users who are minors in the jurisdiction in which they reside (generally under the age of 18) must have the permission of, and be directly supervised by, their parent or guardian to use the Site. If you are a minor, you must have your parent or guardian read and agree to these Terms and Conditions prior to you using the Site.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>INTELLECTUAL PROPERTY RIGHTS</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Unless otherwise indicated, the Site is our proprietary property and all source code, databases, functionality, software, website designs, audio, video, text, photographs, and graphics on the Site (collectively, the “Content”) and the trademarks, service marks, and logos contained therein (the “Marks”) are owned or controlled by us or licensed to us, and are protected by copyright and trademark laws and various other intellectual property rights and unfair competition laws of the United States, foreign jurisdictions, and international conventions.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>The Content and the Marks are provided on the Site “AS IS” for your information and personal use only. Except as expressly provided in these Terms and Conditions, no part of the Site and no Content or Marks may be copied, reproduced, aggregated, republished, uploaded, posted, publicly displayed, encoded, translated, transmitted, distributed, sold, licensed, or otherwise exploited for any commercial purpose whatsoever, without our express prior written permission.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Provided that you are eligible to use the Site, you are granted a limited license to access and use the Site and to download or print a copy of any portion of the Content to which you have properly gained access solely for your personal, non-commercial use. We reserve all rights not expressly granted to you in and to the Site, the Content and the Marks.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>USER REPRESENTATIONS</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>By using the Site, you represent and warrant that:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(1) all registration information you submit will be true, accurate, current, and complete; (2) you will maintain the accuracy of such information and promptly update such registration information as necessary;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(2) you have the legal capacity and you agree to comply with these Terms and Conditions;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(3) you will not access the Site through automated or non-human means, whether through a bot, script, or otherwise;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(4) you will not use the Site for any illegal or unauthorized purpose;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(5) your use of the Site will not violate any applicable law or regulation.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>If you provide any information that is untrue, inaccurate, not current, or incomplete, we have the right to suspend or terminate your account and refuse any and all current or future use of the Site (or any portion thereof).</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>USER REGISTRATION</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>You may be required to register with the Site. You agree to keep your password confidential and will be responsible for all use of your account and password. We reserve the right to remove, reclaim, or change a username you select if we determine, in our sole discretion, that such username is inappropriate, obscene, or otherwise objectionable.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>PROHIBITED ACTIVITIES</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>You may not access or use the Site for any purpose other than that for which we make the Site available. The Site may not be used in connection with any commercial endeavors except those that are specifically endorsed or approved by us.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>As a user of the Site, you agree not to:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>• systematically retrieve data or other content from the Site to create or compile, directly or indirectly, a collection, compilation, database, or directory without written permission from us.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>• make any unauthorized use of the Site, including collecting usernames and/or email addresses of users by electronic or other means for the purpose of sending unsolicited email, or creating user accounts by automated means or under false pretenses.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>• use a buying agent or purchasing agent to make purchases on the Site.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>• use the Site to advertise or offer to sell goods and services.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>• circumvent, disable, or otherwise interfere with security-related features of the Site, including features that prevent or restrict the use or copying of any Content or enforce limitations on the use of the Site and/or the Content contained therein.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>• engage in unauthorized framing of or linking to the Site.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>• trick, defraud, or mislead us and other users, especially in any attempt to learn sensitive account information such as user passwords;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>• make improper use of our support services or submit false reports of abuse or misconduct.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>• engage in any automated use of the system, such as using scripts to send comments or messages, or using any data mining, robots, or similar data gathering and extraction tools.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>• interfere with, disrupt, or create an undue burden on the Site or the networks or services connected to the Site.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>• attempt to impersonate another user or person or use the username of another user.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>• sell or otherwise transfer your profile.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>• use any information obtained from the Site in order to harass, abuse, or harm another person.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>• use the Site as part of any effort to compete with us or otherwise use the Site and/or the Content for any revenue-generating endeavor or commercial enterprise.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>• decipher, decompile, disassemble, or reverse engineer any of the software comprising or in any way making up a part of the Site.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>• attempt to bypass any measures of the Site designed to prevent or restrict access to the Site, or any portion of the Site.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>• harass, annoy, intimidate, or threaten any of our employees or agents engaged in providing any portion of the Site to you.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>• delete the copyright or other proprietary rights notice from any Content.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>• copy or adapt the Site’s software, including but not limited to Flash, PHP, HTML, JavaScript, or other code.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>• upload or transmit (or attempt to upload or to transmit) viruses, Trojan horses, or other material, including excessive use of capital letters and spamming (continuous posting of repetitive text), that interferes with any party’s uninterrupted use and enjoyment of the Site or modifies, impairs, disrupts, alters, or interferes with the use, features, functions, operation, or maintenance of the Site.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>• upload or transmit (or attempt to upload or to transmit) any material that acts as a passive or active information collection or transmission mechanism, including without limitation, clear graphics interchange formats (“gifs”), 1×1 pixels, web bugs, cookies, or other similar devices (sometimes referred to as “spyware” or “passive collection mechanisms” or “pcms”).</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>• except as may be the result of standard search engine or Internet browser usage, use, launch, develop, or distribute any automated system, including without limitation, any spider, robot, cheat utility, scraper, or offline reader that accesses the Site, or using or launching any unauthorized script or other software.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>• disparage, tarnish, or otherwise harm, in our opinion, us and/or the Site.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>• use the Site in a manner inconsistent with any applicable laws or regulations.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>USER GENERATED CONTRIBUTIONS</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>The Site may invite you to chat, contribute to, or participate in blogs, message boards, online forums, and other functionality, and may provide you with the opportunity to create, submit, post, display, transmit, perform, publish, distribute, or broadcast content and materials to us or on the Site, including but not limited to text, writings, video, audio, photographs, graphics, comments, suggestions, or personal information or other material (collectively, \"Contributions\").</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Contributions may be viewable by other users of the Site and through third-party websites. As such, any Contributions you transmit may be treated as non-confidential and non-proprietary. When you create or make available any Contributions, you thereby represent and warrant that:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>• the creation, distribution, transmission, public display, or performance, and the accessing, downloading, or copying of your Contributions do not and will not infringe the proprietary rights, including but not limited to the copyright, patent, trademark, trade secret, or moral rights of any third party.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>• your Contributions are not false, inaccurate, or misleading.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>• your Contributions are not unsolicited or unauthorized advertising, promotional materials, pyramid schemes, chain letters, spam, mass mailings, or other forms of solicitation.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>• your Contributions are not obscene, lewd, lascivious, filthy, violent, harassing, libelous, slanderous, or otherwise objectionable (as determined by us).</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>• your Contributions do not ridicule, mock, disparage, intimidate, or abuse anyone.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>• your Contributions do not advocate the violent overthrow of any government or incite, encourage, or threaten physical harm against another.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>• your Contributions do not violate any applicable law, regulation, or rule.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>• your Contributions do not violate the privacy or publicity rights of any third party.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>• your Contributions do not contain any material that solicits personal information from anyone under the age of 18 or exploits people under the age of 18 in a sexual or violent manner.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>• your Contributions do not violate any federal or state law concerning child pornography, or otherwise intended to protect the health or well-being of minors;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>• your Contributions do not include any offensive comments that are connected to race, national origin, gender, sexual preference, or physical handicap.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>• your Contributions do not otherwise violate, or link to material that violates, any provision of these Terms and Conditions, or any applicable law or regulation.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Any use of the Site in violation of the foregoing violates these Terms and Conditions and may result in, among other things, termination or suspension of your rights to use the Site.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>CONTRIBUTION LICENSE</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>By posting your Contributions to any part of the Site ,or making Contributions accessible to the Site by linking your account from the Site to any of your social networking accounts, you automatically grant, and you represent and warrant that you have the right to grant, to us an unrestricted, unlimited, irrevocable, perpetual, non-exclusive, transferable, royalty-free, fully-paid, worldwide right, and license to host, use, copy, reproduce, disclose, sell, resell, publish, broadcast, retitle, archive, store, cache, publicly perform, publicly display, reformat, translate, transmit, excerpt (in whole or in part), and distribute such Contributions (including, without limitation, your image and voice) for any purpose, commercial, advertising, or otherwise, and to prepare derivative works of, or incorporate into other works, such Contributions, and grant and authorize sublicenses of the foregoing. The use and distribution may occur in any media formats and through any media channels.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>This license will apply to any form, media, or technology now known or hereafter developed, and includes our use of your name, company name, and franchise name, as applicable, and any of the trademarks, service marks, trade names, logos, and personal and commercial images you provide. You waive all moral rights in your Contributions, and you warrant that moral rights have not otherwise been asserted in your Contributions.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>We do not assert any ownership over your Contributions. You retain full ownership of all of your Contributions and any intellectual property rights or other proprietary rights associated with your Contributions. We are not liable for any statements or representations in your Contributions provided by you in any area on the Site.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>You are solely responsible for your Contributions to the Site and you expressly agree to exonerate us from any and all responsibility and to refrain from any legal action against us regarding your Contributions.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>We have the right, in our sole and absolute discretion, (1) to edit, redact, or otherwise change any Contributions; (2) to re-categorize any Contributions to place them in more appropriate locations on the Site; and (3) to pre-screen or delete any Contributions at any time and for any reason, without notice. We have no obligation to monitor your Contributions.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>GUIDELINES FOR REVIEWS</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>We may provide you areas on the Site to leave reviews or ratings. When posting a review, you must comply with the following criteria:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(1) you should have firsthand experience with the person/entity being reviewed;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(2) your reviews should not contain offensive profanity, or abusive, racist, offensive, or hate language;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(3) your reviews should not contain discriminatory references based on religion, race, gender, national origin, age, marital status, sexual orientation, or disability;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(4) your reviews should not contain references to illegal activity;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(5) you should not be affiliated with competitors if posting negative reviews;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(6) you should not make any conclusions as to the legality of conduct;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(7) you may not post any false or misleading statements;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(8) you may not organize a campaign encouraging others to post reviews, whether positive or negative.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>We may accept, reject, or remove reviews in our sole discretion. We have absolutely no obligation to screen reviews or to delete reviews, even if anyone considers reviews objectionable or inaccurate. Reviews are not endorsed by us, and do not necessarily represent our opinions or the views of any of our affiliates or partners.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>We do not assume liability for any review or for any claims, liabilities, or losses resulting from any review. By posting a review, you hereby grant to us a perpetual, non-exclusive, worldwide, royalty-free, fully-paid, assignable, and sublicensable right and license to reproduce, modify, translate, transmit by any means, display, perform, and/or distribute all content relating to reviews.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>MOBILE APPLICATION LICENSE</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Use License</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>If you access the Site via a mobile application, then we grant you a revocable, non-exclusive, non-transferable, limited right to install and use the mobile application on wireless electronic devices owned or controlled by you, and to access and use the mobile application on such devices strictly in accordance with the terms and conditions of this mobile application license contained in these Terms and Conditions.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>You shall not:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(1) decompile, reverse engineer, disassemble, attempt to derive the source code of, or decrypt the application;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(2) make any modification, adaptation, improvement, enhancement, translation, or derivative work from the application;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(3) violate any applicable laws, rules, or regulations in connection with your access or use of the application;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(4) remove, alter, or obscure any proprietary notice (including any notice of copyright or trademark) posted by us or the licensors of the application;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(5) use the application for any revenue generating endeavor, commercial enterprise, or other purpose for which it is not designed or intended;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(6) make the application available over a network or other environment permitting access or use by multiple devices or users at the same time;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(7) use the application for creating a product, service, or software that is, directly or indirectly, competitive with or in any way a substitute for the application;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(8) use the application to send automated queries to any website or to send any unsolicited commercial e-mail;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(9) use any proprietary information or any of our interfaces or our other intellectual property in the design, development, manufacture, licensing, or distribution of any applications, accessories, or devices for use with the application.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Apple and Android Devices</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>The following terms apply when you use a mobile application obtained from either the Apple Store or Google Play (each an “App Distributor”) to access the Site:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(1) the license granted to you for our mobile application is limited to a non-transferable license to use the application on a device that utilizes the Apple iOS or Android operating systems, as applicable, and in accordance with the usage rules set forth in the applicable App Distributor’s terms of service;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(2) we are responsible for providing any maintenance and support services with respect to the mobile application as specified in the terms and conditions of this mobile application license contained in these Terms and Conditions or as otherwise required under applicable law, and you acknowledge that each App Distributor has no obligation whatsoever to furnish any maintenance and support services with respect to the mobile application;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(3) in the event of any failure of the mobile application to conform to any applicable warranty, you may notify the applicable App Distributor, and the App Distributor, in accordance with its terms and policies, may refund the purchase price, if any, paid for the mobile application, and to the maximum extent permitted by applicable law, the App Distributor will have no other warranty obligation whatsoever with respect to the mobile application;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(4) you represent and warrant that (i) you are not located in a country that is subject to a U.S. government embargo, or that has been designated by the U.S. government as a “terrorist supporting” country and (ii) you are not listed on any U.S. government list of prohibited or restricted parties;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(5) you must comply with applicable third-party terms of agreement when using the mobile application, e.g., if you have a VoIP application, then you must not be in violation of their wireless data service agreement when using the mobile application;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>6) you acknowledge and agree that the App Distributors are third-party beneficiaries of the terms and conditions in this mobile application license contained in these Terms and Conditions, and that each App Distributor will have the right (and will be deemed to have accepted the right) to enforce the terms and conditions in this mobile application license contained in these Terms and Conditions against you as a third-party beneficiary thereof.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>SOCIAL MEDIA</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>As part of the functionality of the Site, you may link your account with online accounts you have with third-party service providers (each such account, a “Third-Party Account”) by either: (1) providing your Third-Party Account login information through the Site; or (2) allowing us to access your Third-Party Account, as is permitted under the applicable terms and conditions that govern your use of each Third-Party Account.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>You represent and warrant that you are entitled to disclose your Third-Party Account login information to us and/or grant us access to your Third-Party Account, without breach by you of any of the terms and conditions that govern your use of the applicable Third-Party Account, and without obligating us to pay any fees or making us subject to any usage limitations imposed by the third-party service provider of the Third-Party Account.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>By granting us access to any Third-Party Accounts, you understand that (1) we may access, make available, and store (if applicable) any content that you have provided to and stored in your Third-Party Account (the “Social Network Content”) so that it is available on and through the Site via your account, including without limitation any friend lists and (2) we may submit to and receive from your Third-Party Account additional information to the extent you are notified when you link your account with the Third-Party Account.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Depending on the Third-Party Accounts you choose and subject to the privacy settings that you have set in such Third-Party Accounts, personally identifiable information that you post to your Third-Party Accounts may be available on and through your account on the Site.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Please note that if a Third-Party Account or associated service becomes unavailable or our access to such Third-Party Account is terminated by the third-party service provider, then Social Network Content may no longer be available on and through the Site. You will have the ability to disable the connection between your account on the Site and your Third-Party Accounts at any time.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>PLEASE NOTE THAT YOUR RELATIONSHIP WITH THE THIRD-PARTY SERVICE PROVIDERS ASSOCIATED WITH YOUR THIRD-PARTY ACCOUNTS IS GOVERNED SOLELY BY YOUR AGREEMENT(S) WITH SUCH THIRD-PARTY SERVICE PROVIDERS.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>We make no effort to review any Social Network Content for any purpose, including but not limited to, for accuracy, legality, or non-infringement, and we are not responsible for any Social Network Content.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>You acknowledge and agree that we may access your email address book associated with a Third-Party Account and your contacts list stored on your mobile device or tablet computer solely for purposes of identifying and informing you of those contacts who have also registered to use the Site.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>You can deactivate the connection between the Site and your Third-Party Account by contacting us using the contact information below or through your account settings (if applicable). We will attempt to delete any information stored on our servers that was obtained through such Third-Party Account, except the username and profile picture that become associated with your account.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>SUBMISSIONS</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>You acknowledge and agree that any questions, comments, suggestions, ideas, feedback, or other information regarding the Site (\"Submissions\") provided by you to us are non-confidential and shall become our sole property. We shall own exclusive rights, including all intellectual property rights, and shall be entitled to the unrestricted use and dissemination of these Submissions for any lawful purpose, commercial or otherwise, without acknowledgment or compensation to you.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>You hereby waive all moral rights to any such Submissions, and you hereby warrant that any such Submissions are original with you or that you have the right to submit such Submissions. You agree there shall be no recourse against us for any alleged or actual infringement or misappropriation of any proprietary right in your Submissions.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>THIRD-PARTY WEBSITES AND CONTENT</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>The Site may contain (or you may be sent via the Site) links to other websites (\"Third-Party Websites\") as well as articles, photographs, text, graphics, pictures, designs, music, sound, video, information, applications, software, and other content or items belonging to or originating from third parties (\"Third-Party Content\").</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Such Third-Party Websites and Third-Party Content are not investigated, monitored, or checked for accuracy, appropriateness, or completeness by us, and we are not responsible for any Third-Party Websites accessed through the Site or any Third-Party Content posted on, available through, or installed from the Site, including the content, accuracy, offensiveness, opinions, reliability, privacy practices, or other policies of or contained in the Third-Party Websites or the Third-Party Content.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Inclusion of, linking to, or permitting the use or installation of any Third-Party Websites or any Third-Party Content does not imply approval or endorsement thereof by us. If you decide to leave the Site and access the Third-Party Websites or to use or install any Third-Party Content, you do so at your own risk, and you should be aware these Terms and Conditions no longer govern.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>You should review the applicable terms and policies, including privacy and data gathering practices, of any website to which you navigate from the Site or relating to any applications you use or install from the Site. Any purchases you make through Third-Party Websites will be through other websites and from other companies, and we take no responsibility whatsoever in relation to such purchases which are exclusively between you and the applicable third party.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>You agree and acknowledge that we do not endorse the products or services offered on Third-Party Websites and you shall hold us harmless from any harm caused by your purchase of such products or services. Additionally, you shall hold us harmless from any losses sustained by you or harm caused to you relating to or resulting in any way from any Third-Party Content or any contact with Third-Party Websites.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>ADVERTISERS</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>We allow advertisers to display their advertisements and other information in certain areas of the Site, such as sidebar advertisements or banner advertisements. If you are an advertiser, you shall take full responsibility for any advertisements you place on the Site and any services provided on the Site or products sold through those advertisements.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Further, as an advertiser, you warrant and represent that you possess all rights and authority to place advertisements on the Site, including, but not limited to, intellectual property rights, publicity rights, and contractual rights.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>As an advertiser, you agree that such advertisements are subject to our Digital Millennium Copyright Act (“DMCA”) Notice and Policy provisions as described below, and you understand and agree there will be no refund or other compensation for DMCA takedown-related issues. We simply provide the space to place such advertisements, and we have no other relationship with advertisers.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>SITE MANAGEMENT</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>We reserve the right, but not the obligation, to:&nbsp;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(1) monitor the Site for violations of these Terms and Conditions;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(2) take appropriate legal action against anyone who, in our sole discretion, violates the law or these Terms and Conditions, including without limitation, reporting such user to law enforcement authorities;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(3) in our sole discretion and without limitation, refuse, restrict access to, limit the availability of, or disable (to the extent technologically feasible) any of your Contributions or any portion thereof;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(4) in&nbsp;our sole discretion and without limitation, notice, or liability, to remove from the Site or otherwise disable all files and content that are excessive in size or are in any way burdensome to our systems;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(5) otherwise manage the Site in a manner designed to protect our rights and property and to facilitate the proper functioning of the Site.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>PRIVACY POLICY</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>We care about data privacy and security. Please review our Privacy Policy on the Site. By using the Site, you agree to be bound by our Privacy Policy, which is incorporated into these Terms and Conditions. Please be advised the Site is hosted in the United States.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>If you access the Site from the European Union, Asia, or any other region of the world with laws or other requirements governing personal data collection, use, or disclosure that differ from applicable laws in the United States, then through your continued use of the Site, you are transferring your data to the United States, and you expressly consent to have your data transferred to and processed in the United States.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>[Further, we do not knowingly accept, request, or solicit information from children or knowingly market to children. Therefore, in accordance with the U.S. Children’s Online Privacy Protection Act, if we receive actual knowledge that anyone under the age of 13 has provided personal information to us without the requisite and verifiable parental consent, we will delete that information from the Site as quickly as is reasonably practical.]</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>DIGITAL MILLENNIUM COPYRIGHT ACT (DMCA) NOTICE AND POLICY</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Notifications</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>We respect the intellectual property rights of others. If you believe that any material available on or through the Site infringes upon any copyright you own or control, please immediately notify our Designated Copyright Agent using the contact information provided below (a “Notification”).</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>A copy of your Notification will be sent to the person who posted or stored the material addressed in the Notification. Please be advised that pursuant to federal law you may be held liable for damages if you make material misrepresentations in a Notification. Thus, if you are not sure that material located on or linked to by the Site infringes your copyright, you should consider first contacting an attorney.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>All Notifications should meet the requirements of DMCA 17 U.S.C. § 512(c)(3) and include the following information:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(1) A physical or electronic signature of a person authorized to act on behalf of the owner of an exclusive right that is allegedly infringed;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(2) identification of the copyrighted work claimed to have been infringed, or, if multiple copyrighted works on the Site are covered by the Notification, a representative list of such works on the Site;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(3) identification of the material that is claimed to be infringing or to be the subject of infringing activity and that is to be removed or access to which is to be disabled, and information reasonably sufficient to permit us to locate the material;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(4) information reasonably sufficient to permit us to contact the complaining party, such as an address, telephone number, and, if available, an email address at which the complaining party may be contacted;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(5) a statement that the complaining party has a good faith belief that use of the material in the manner complained of is not authorized by the copyright owner, its agent, or the law;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(6) a statement that the information in the notification is accurate, and under penalty of perjury, that the complaining party is authorized to act on behalf of the owner of an exclusive right that is allegedly infringed upon.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Counter Notification</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>If you believe your own copyrighted material has been removed from the Site as a result of a mistake or misidentification, you may submit a written counter notification to [us/our Designated Copyright Agent] using the contact information provided below (a “Counter Notification”).</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>To be an effective Counter Notification under the DMCA, your Counter Notification must include substantially the following:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(1) identification of the material that has been removed or disabled and the location at which the material appeared before it was removed or disabled;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(2) a statement that you consent to the jurisdiction of the Federal District Court in which your address is located, or if your address is outside the United States, for any judicial district in which we are located;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(3) a statement that you will accept service of process from the party that filed the Notification or the party\'s agent;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(4) your name, address, and telephone number;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(5) a statement under penalty of perjury that you have a good faith belief that the material in question was removed or disabled as a result of a mistake or misidentification of the material to be removed or disabled;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>(6) your physical or electronic signature.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>If you send us a valid, written Counter Notification meeting the requirements described above, we will restore your removed or disabled material, unless we first receive notice from the party filing the Notification informing us that such party has filed a court action to restrain you from engaging in infringing activity related to the material in question.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Please note that if you materially misrepresent that the disabled or removed content was removed by mistake or misidentification, you may be liable for damages, including costs and attorney\'s fees. Filing a false Counter Notification constitutes perjury.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Designated Copyright Agent</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Taylor Hawkes</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Copyright Agent</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>3550 Frontier Avenue,&nbsp; Suite A2,&nbsp;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Boulder CO, 80301</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>support@codegrepper.com</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>COPYRIGHT INFRINGEMENTS</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>We respect the intellectual property rights of others. If you believe that any material available on or through the Site infringes upon any copyright you own or control, please immediately notify us using the contact information provided below (a “Notification”). A copy of your Notification will be sent to the person who posted or stored the material addressed in the Notification.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Please be advised that pursuant to federal law you may be held liable for damages if you make material misrepresentations in a Notification. Thus, if you are not sure that material located on or linked to by the Site infringes your copyright, you should consider first contacting an attorney.]</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>TERM AND TERMINATION</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>These Terms and Conditions shall remain in full force and effect while you use the Site. WITHOUT LIMITING ANY OTHER PROVISION OF THESE TERMS AND CONDITIONS, WE RESERVE THE RIGHT TO, IN OUR SOLE DISCRETION AND WITHOUT NOTICE OR LIABILITY, DENY ACCESS TO AND USE OF THE SITE (INCLUDING BLOCKING CERTAIN IP ADDRESSES), TO ANY PERSON FOR ANY REASON OR FOR NO REASON, INCLUDING WITHOUT LIMITATION FOR BREACH OF ANY REPRESENTATION, WARRANTY, OR COVENANT CONTAINED IN THESE TERMS AND CONDITIONS OR OF ANY APPLICABLE LAW OR REGULATION. WE MAY TERMINATE YOUR USE OR PARTICIPATION IN THE SITE OR DELETE [YOUR ACCOUNT AND] ANY CONTENT OR INFORMATION THAT YOU POSTED AT ANY TIME, WITHOUT WARNING, IN OUR SOLE DISCRETION.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>If we terminate or suspend your account for any reason, you are prohibited from registering and creating a new account under your name, a fake or borrowed name, or the name of any third party, even if you may be acting on behalf of the third party.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In addition to terminating or suspending your account, we reserve the right to take appropriate legal action, including without limitation pursuing civil, criminal, and injunctive redress.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>MODIFICATIONS AND INTERRUPTIONS</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>We reserve the right to change, modify, or remove the contents of the Site at any time or for any reason at our sole discretion without notice. However, we have no obligation to update any information on our Site. We also reserve the right to modify or discontinue all or part of the Site without notice at any time.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>We will not be liable to you or any third party for any modification, price change, suspension, or discontinuance of the Site.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>We cannot guarantee the Site will be available at all times. We may experience hardware, software, or other problems or need to perform maintenance related to the Site, resulting in interruptions, delays, or errors.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>We reserve the right to change, revise, update, suspend, discontinue, or otherwise modify the Site at any time or for any reason without notice to you. You agree that we have no liability whatsoever for any loss, damage, or inconvenience caused by your inability to access or use the Site during any downtime or discontinuance of the Site.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Nothing in these Terms and Conditions will be construed to obligate us to maintain and support the Site or to supply any corrections, updates, or releases in connection therewith.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>GOVERNING LAW</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>These Terms and Conditions and your use of the Site are governed by and construed in accordance with the laws of the State of [name of state] applicable to agreements made and to be entirely performed within the State/Commonwealth of [name of state], without regard to its conflict of law principles.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>DISPUTE RESOLUTION</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Option 1: Any legal action of whatever nature brought by either you or us (collectively, the “Parties” and individually, a “Party”) shall be commenced or prosecuted in the state and federal courts located in [name of county] County, [name of state], and the Parties hereby consent to, and waive all defenses of lack of personal jurisdiction and forum non conveniens with respect to venue and jurisdiction in such state and federal courts.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Application of the United Nations Convention on Contracts for the International Sale of Goods and the Uniform Computer Information Transaction Act (UCITA) are excluded from these Terms and Conditions. In no event shall any claim, action, or proceeding brought by either Party related in any way to the Site be commenced more than 2 years after the cause of action arose.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Option 2: Informal Negotiations</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>To expedite resolution and control the cost of any dispute, controversy, or claim related to these Terms and Conditions (each a \"Dispute\" and collectively, the “Disputes”) brought by either you or us (individually, a “Party” and collectively, the “Parties”), the Parties agree to first attempt to negotiate any Dispute (except those Disputes expressly provided below) informally for at least 2 days before initiating arbitration. Such informal negotiations commence upon written notice from one Party to the other Party.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Binding Arbitration</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>If the Parties are unable to resolve a Dispute through informal negotiations, the Dispute (except those Disputes expressly excluded below) will be finally and exclusively resolved by binding arbitration. YOU UNDERSTAND THAT WITHOUT THIS PROVISION, YOU WOULD HAVE THE RIGHT TO SUE IN COURT AND HAVE A JURY TRIAL.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>The arbitration shall be commenced and conducted under the Commercial Arbitration Rules of the American Arbitration Association (\"AAA\") and, where appropriate, the AAA’s Supplementary Procedures for Consumer Related Disputes (\"AAA Consumer Rules\"), both of which are available at the AAA website www.adr.org.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Your arbitration fees and your share of arbitrator compensation shall be governed by the AAA Consumer Rules and, where appropriate, limited by the AAA Consumer Rules. [If such costs are determined to by the arbitrator to be excessive, we will pay all arbitration fees and expenses.]</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>The arbitration may be conducted in person, through the submission of documents, by phone, or online. The arbitrator will make a decision in writing, but need not provide a statement of reasons unless requested by either Party.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>The arbitrator must follow applicable law, and any award may be challenged if the arbitrator fails to do so. Except where otherwise required by the applicable AAA rules or applicable law, the arbitration will take place in [name of county] County, [name of state].</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Except as otherwise provided herein, the Parties may litigate in court to compel arbitration, stay proceedings pending arbitration, or to confirm, modify, vacate, or enter judgment on the award entered by the arbitrator.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>If for any reason, a Dispute proceeds in court rather than arbitration, the Dispute shall be commenced or prosecuted in the state and federal courts located in [name of county] County, [name of state], and the Parties hereby consent to, and waive all defenses of lack of personal jurisdiction, and forum non conveniens with respect to venue and jurisdiction in such state and federal courts.&nbsp;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Application of the United Nations Convention on Contracts for the International Sale of Goods and the the Uniform Computer Information Transaction Act (UCITA) are excluded from these Terms and Conditions.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In no event shall any Dispute brought by either Party related in any way to the Site be commenced more than 2 years after the cause of action arose. If this provision is found to be illegal or unenforceable, then neither Party will elect to arbitrate any Dispute falling within that portion of this provision found to be illegal or unenforceable and such Dispute shall be decided by a court of competent jurisdiction within the courts listed for jurisdiction above, and the Parties agree to submit to the personal jurisdiction of that court.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Option 3: Binding Arbitration</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>To expedite resolution and control the cost of any dispute, controversy or claim related to these Terms and Conditions (each a \"Dispute\" and collectively, “Disputes”), any Dispute brought by either you or us (individually, a “Party” and collectively, the “Parties”) shall be finally and exclusively resolved by binding arbitration.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>YOU UNDERSTAND THAT WITHOUT THIS PROVISION, YOU WOULD HAVE THE RIGHT TO SUE IN COURT AND HAVE A JURY TRIAL. The arbitration shall be commenced and conducted under the Commercial Arbitration Rules of the American Arbitration Association (\"AAA\") and, where appropriate, the AAA’s Supplementary Procedures for Consumer Related Disputes (\"AAA Consumer Rules\"), both of which are available at the AAA website www.adr.org.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Your arbitration fees and your share of arbitrator compensation shall be governed by the AAA Consumer Rules and, where appropriate, limited by the AAA Consumer Rules. [If such costs are determined to by the arbitrator to be excessive, we will pay all arbitration fees and expenses.]</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>The arbitration may be conducted in person, through the submission of documents, by phone, or online. The arbitrator will make a decision in writing, but need not provide a statement of reasons unless requested by either Party. The arbitrator must follow applicable law, and any award may be challenged if the arbitrator fails to do so.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Except where otherwise required by the applicable AAA rules or applicable law, the arbitration will take place in [name of county] County, [name of state]. Except as otherwise provided herein, the Parties may litigate in court to compel arbitration, stay proceedings pending arbitration, or to confirm, modify, vacate, or enter judgment on the award entered by the arbitrator.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>If for any reason, a Dispute proceeds in court rather than arbitration, the Dispute shall be commenced or prosecuted in the state and federal courts located in [name of county] County, [name of state], and the Parties hereby consent to, and waive all defenses of lack of, personal jurisdiction, and forum non conveniens with respect to venue and jurisdiction in such state and federal courts.&nbsp;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Application of the United Nations Convention on Contracts for the International Sale of Goods and the Uniform Computer Information Transaction Act (UCITA) are excluded from these Terms and Conditions. In no event shall any Dispute brought by either Party related in any way to the Site or Services be commenced more than 2 years after the cause of action arose.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>If this provision is found to be illegal or unenforceable, then neither Party will elect to arbitrate any Dispute falling within that portion of this provision found to be illegal or unenforceable and such Dispute shall be decided by a court of competent jurisdiction within the courts listed for jurisdiction above, and the Parties agree to submit to the personal jurisdiction of that court.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Option 2/Option 3: Restrictions</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>The Parties agree that any arbitration shall be limited to the Dispute between the Parties individually. To the full extent permitted by law, (a) no arbitration shall be joined with any other proceeding; (b) there is no right or authority for any Dispute to be arbitrated on a class-action basis or to utilize class action procedures; and (c) there is no right or authority for any Dispute to be brought in a purported representative capacity on behalf of the general public or any other persons.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Option 2/Option 3: Exceptions to [Informal Negotiations and] Arbitration</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>The Parties agree that the following Disputes are not subject to the above provisions concerning [informal negotiations and] binding arbitration: (a) any Disputes seeking to enforce or protect, or concerning the validity of, any of the intellectual property rights of a Party; (b) any Dispute related to, or arising from, allegations of theft, piracy, invasion of privacy, or unauthorized use; and (c) any claim for injunctive relief.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>If this provision is found to be illegal or unenforceable, then neither Party will elect to arbitrate any Dispute falling within that portion of this provision found to be illegal or unenforceable and such Dispute shall be decided by a court of competent jurisdiction within the courts listed for jurisdiction above, and the Parties agree to submit to the personal jurisdiction of that court.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>CORRECTIONS</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>There may be information on the Site that contains typographical errors, inaccuracies, or omissions that may relate to the Site, including descriptions, pricing, availability, and various other information. We reserve the right to correct any errors, inaccuracies, or omissions and to change or update the information on the Site at any time, without prior notice.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>DISCLAIMER</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>THE SITE IS PROVIDED ON AN AS-IS AND AS-AVAILABLE BASIS. YOU AGREE THAT YOUR USE OF THE SITE AND OUR SERVICES WILL BE AT YOUR SOLE RISK. TO THE FULLEST EXTENT PERMITTED BY LAW, WE DISCLAIM ALL WARRANTIES, EXPRESS OR IMPLIED, IN CONNECTION WITH THE SITE AND YOUR USE THEREOF, INCLUDING, WITHOUT LIMITATION, THE IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, AND NON-INFRINGEMENT. WE MAKE NO WARRANTIES OR REPRESENTATIONS ABOUT THE ACCURACY OR COMPLETENESS OF THE SITE’S CONTENT OR THE CONTENT OF ANY WEBSITES LINKED TO THE SITE AND WE WILL ASSUME NO LIABILITY OR RESPONSIBILITY FOR ANY (1) ERRORS, MISTAKES, OR INACCURACIES OF CONTENT AND MATERIALS, (2) PERSONAL INJURY OR PROPERTY DAMAGE, OF ANY NATURE WHATSOEVER, RESULTING FROM YOUR ACCESS TO AND USE OF THE SITE, (3) ANY UNAUTHORIZED ACCESS TO OR USE OF OUR SECURE SERVERS AND/OR ANY AND ALL PERSONAL INFORMATION AND/OR FINANCIAL INFORMATION STORED THEREIN, (4) ANY INTERRUPTION OR CESSATION OF TRANSMISSION TO OR FROM THE SITE, (5) ANY BUGS, VIRUSES, TROJAN HORSES, OR THE LIKE WHICH MAY BE TRANSMITTED TO OR THROUGH THE SITE BY ANY THIRD PARTY, AND/OR (6) ANY ERRORS OR OMISSIONS IN ANY CONTENT AND MATERIALS OR FOR ANY LOSS OR DAMAGE OF ANY KIND INCURRED AS A RESULT OF THE USE OF ANY CONTENT POSTED, TRANSMITTED, OR OTHERWISE MADE AVAILABLE VIA THE SITE. WE DO NOT WARRANT, ENDORSE, GUARANTEE, OR ASSUME RESPONSIBILITY FOR ANY PRODUCT OR SERVICE ADVERTISED OR OFFERED BY A THIRD PARTY THROUGH THE SITE, ANY HYPERLINKED WEBSITE, OR ANY WEBSITE OR MOBILE APPLICATION FEATURED IN ANY BANNER OR OTHER ADVERTISING, AND WE WILL NOT BE A PARTY TO OR IN ANY WAY BE RESPONSIBLE FOR MONITORING ANY TRANSACTION BETWEEN YOU AND ANY THIRD-PARTY PROVIDERS OF PRODUCTS OR SERVICES.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>AS WITH THE PURCHASE OF A PRODUCT OR SERVICE THROUGH ANY MEDIUM OR IN ANY ENVIRONMENT, YOU SHOULD USE YOUR BEST JUDGMENT AND EXERCISE CAUTION WHERE APPROPRIATE.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>LIMITATIONS OF LIABILITY</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>IN NO EVENT WILL WE OR OUR DIRECTORS, EMPLOYEES, OR AGENTS BE LIABLE TO YOU OR ANY THIRD PARTY FOR ANY DIRECT, INDIRECT, CONSEQUENTIAL, EXEMPLARY, INCIDENTAL, SPECIAL, OR PUNITIVE DAMAGES, INCLUDING LOST PROFIT, LOST REVENUE, LOSS OF DATA, OR OTHER DAMAGES ARISING FROM YOUR USE OF THE SITE, EVEN IF WE HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>INDEMNIFICATION</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>You agree to defend, indemnify, and hold us harmless, including our subsidiaries, affiliates, and all of our respective officers, agents, partners, and employees, from and against any loss, damage, liability, claim, or demand, including reasonable attorneys’ fees and expenses, made by any third party due to or arising out of: (1) your Contributions; (2) use of the Site; (3) breach of these Terms and Conditions; (4) any breach of your representations and warranties set forth in these Terms and Conditions; (5) your violation of the rights of a third party, including but not limited to intellectual property rights; or (6) any overt harmful act toward any other user of the Site with whom you connected via the Site.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Notwithstanding the foregoing, we reserve the right, at your expense, to assume the exclusive defense and control of any matter for which you are required to indemnify us, and you agree to cooperate, at your expense, with our defense of such claims. We will use reasonable efforts to notify you of any such claim, action, or proceeding which is subject to this indemnification upon becoming aware of it.&nbsp;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>USER DATA</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>We will maintain certain data that you transmit to the Site for the purpose of managing the Site, as well as data relating to your use of the Site. Although we perform regular routine backups of data, you are solely responsible for all data that you transmit or that relates to any activity you have undertaken using the Site.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>You agree that we shall have no liability to you for any loss or corruption of any such data, and you hereby waive any right of action against us arising from any such loss or corruption of such data.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>ELECTRONIC COMMUNICATIONS, TRANSACTIONS, AND SIGNATURES</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Visiting the Site, sending us emails, and completing online forms constitute electronic communications. You consent to receive electronic communications, and you agree that all agreements, notices, disclosures, and other communications we provide to you electronically, via email and on the Site, satisfy any legal requirement that such communication be in writing.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>YOU HEREBY AGREE TO THE USE OF ELECTRONIC SIGNATURES, CONTRACTS, ORDERS, AND OTHER RECORDS, AND TO ELECTRONIC DELIVERY OF NOTICES, POLICIES, AND RECORDS OF TRANSACTIONS INITIATED OR COMPLETED BY US OR VIA THE SITE.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>You hereby waive any rights or requirements under any statutes, regulations, rules, ordinances, or other laws in any jurisdiction which require an original signature or delivery or retention of non-electronic records, or to payments or the granting of credits by any means other than electronic means.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>CALIFORNIA USERS AND RESIDENTS</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>If any complaint with us is not satisfactorily resolved, you can contact the Complaint Assistance Unit of the Division of Consumer Services of the California Department of Consumer Affairs in writing at 1625 North Market Blvd., Suite N 112, Sacramento, California 95834 or by telephone at (800) 952-5210 or (916) 445-1254.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>MISCELLANEOUS</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>These Terms and Conditions and any policies or operating rules posted by us on the Site constitute the entire agreement and understanding between you and us. Our failure to exercise or enforce any right or provision of these Terms and Conditions shall not operate as a waiver of such right or provision.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>These Terms and Conditions operate to the fullest extent permissible by law. We may assign any or all of our rights and obligations to others at any time. We shall not be responsible or liable for any loss, damage, delay, or failure to act caused by any cause beyond our reasonable control.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>If any provision or part of a provision of these Terms and Conditions is determined to be unlawful, void, or unenforceable, that provision or part of the provision is deemed severable from these Terms and Conditions and does not affect the validity and enforceability of any remaining provisions.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>There is no joint venture, partnership, employment or agency relationship created between you and us as a result of these Terms and Conditions or use of the Site. You agree that these Terms and Conditions will not be construed against us by virtue of having drafted them.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>You hereby waive any and all defenses you may have based on the electronic form of these Terms and Conditions and the lack of signing by the parties hereto to execute these Terms and Conditions.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>CONTACT US&nbsp;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In order to resolve a complaint regarding the Site or to receive further information regarding use of the Site, please contact us at:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Grepper Technologies LLC</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>3550 Frontier Avenue,&nbsp; Suite A2, Boulder CO, 80301</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>support@codegrepper.com</p>\n<!-- /wp:paragraph -->', 'Terms', '', 'inherit', 'closed', 'closed', '', '72-revision-v1', '', '', '2022-06-23 15:03:32', '2022-06-23 15:03:32', '', 72, 'http://localhost/booking/?p=74', 0, 'revision', '', 0);
INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(76, 1, '2022-06-23 16:29:35', '2022-06-23 16:29:35', 'a:10:{s:4:\"type\";s:8:\"repeater\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:9:\"collapsed\";s:0:\"\";s:3:\"min\";s:0:\"\";s:3:\"max\";s:0:\"\";s:6:\"layout\";s:5:\"table\";s:12:\"button_label\";s:0:\"\";}', 'Time available for appointments', 'pick_time_body', 'publish', 'closed', 'closed', '', 'field_62b494bab9ffa', '', '', '2022-06-25 01:35:59', '2022-06-25 01:35:59', '', 6, 'https://booking-page.mysoftkeymarketing.com/?post_type=acf-field&#038;p=76', 16, 'acf-field', '', 0),
(77, 1, '2022-06-23 16:29:35', '2022-06-23 16:29:35', 'a:10:{s:4:\"type\";s:4:\"text\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:7:\"prepend\";s:0:\"\";s:6:\"append\";s:0:\"\";s:9:\"maxlength\";s:0:\"\";}', 'Time', 'time', 'publish', 'closed', 'closed', '', 'field_62b494d2b9ffb', '', '', '2022-06-23 16:29:35', '2022-06-23 16:29:35', '', 76, 'https://booking-page.mysoftkeymarketing.com/?post_type=acf-field&p=77', 0, 'acf-field', '', 0),
(78, 1, '2022-06-27 12:16:23', '2022-06-27 12:16:23', 'a:12:{s:4:\"type\";s:6:\"number\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";i:1;s:11:\"placeholder\";s:0:\"\";s:7:\"prepend\";s:0:\"\";s:6:\"append\";s:0:\"\";s:3:\"min\";s:0:\"\";s:3:\"max\";s:0:\"\";s:4:\"step\";s:0:\"\";}', 'Slot', 'slot', 'publish', 'closed', 'closed', '', 'field_62b99f85112cc', '', '', '2022-06-27 12:16:23', '2022-06-27 12:16:23', '', 76, 'http://localhost/booking/?post_type=acf-field&p=78', 1, 'acf-field', '', 0),
(80, 1, '2022-07-01 10:01:13', '2022-07-01 10:01:13', '', 'banner', '', 'inherit', 'open', 'closed', '', 'banner-2', '', '', '2022-07-01 10:01:13', '2022-07-01 10:01:13', '', 0, 'http://localhost/booking/wp-content/uploads/2022/07/banner.jpg', 0, 'attachment', 'image/jpeg', 0),
(130, 1, '2022-07-10 06:19:46', '2022-07-10 06:19:46', 'sdafdfsafd', 'lelamhai', 'sdfadsfa', 'publish', 'open', 'open', '', 'lelamhai', '', '', '2022-07-10 06:20:15', '2022-07-10 06:20:15', '', 0, 'http://localhost/booking/?post_type=sanpham&#038;p=130', 0, 'sanpham', '', 0),
(131, 1, '2022-07-10 06:19:46', '2022-07-10 06:19:46', 'sdafdfsafd', 'lelamhai', 'sdfadsfa', 'inherit', 'closed', 'closed', '', '130-revision-v1', '', '', '2022-07-10 06:19:46', '2022-07-10 06:19:46', '', 130, 'http://localhost/booking/?p=131', 0, 'revision', '', 0),
(173, 1, '2022-07-10 12:02:37', '2022-07-10 12:02:37', '', 'test 1', 'test 1', 'trash', 'open', 'open', '', 'test-1__trashed', '', '', '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 0, 'http://localhost/booking/books/test-1', 0, 'books', '', 0),
(174, 1, '2022-07-10 12:04:56', '2022-07-10 12:04:56', '', 'test 2', 'sdfafsa', 'trash', 'open', 'open', '', 'test-2__trashed', '', '', '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 0, 'http://localhost/booking/books/test-2', 0, 'books', '', 0),
(175, 0, '2022-07-11 11:10:02', '2022-07-11 11:10:02', '', 'lelamhai', 'sdafsadf', 'trash', 'open', 'open', '', 'lelamhai__trashed', '', '', '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 0, 'http://localhost/booking/books/lelamhai', 0, 'books', '', 0),
(176, 1, '2022-07-11 13:36:05', '2022-07-11 13:36:05', '', 'Edit Web', '', 'publish', 'closed', 'closed', '', 'edit-web', '', '', '2022-07-11 13:36:05', '2022-07-11 13:36:05', '', 0, 'http://localhost/booking/?page_id=176', 0, 'page', '', 0),
(177, 1, '2022-07-11 13:36:05', '2022-07-11 13:36:05', '', 'Edit Web', '', 'inherit', 'closed', 'closed', '', '176-revision-v1', '', '', '2022-07-11 13:36:05', '2022-07-11 13:36:05', '', 176, 'http://localhost/booking/?p=177', 0, 'revision', '', 0),
(178, 1, '2022-07-12 14:23:54', '2022-07-12 14:23:54', '', 'le huyen thao', 'message', 'trash', 'open', 'open', '', 'le-huyen-thao__trashed', '', '', '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 0, 'http://localhost/booking/books/le-huyen-thao', 0, 'books', '', 0),
(179, 1, '2022-07-12 14:25:37', '2022-07-12 14:25:37', '', 'le thanh tinh', 'rrr', 'trash', 'open', 'open', '', 'le-thanh-tinh__trashed', '', '', '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 0, 'http://localhost/booking/books/le-thanh-tinh', 0, 'books', '', 0),
(180, 1, '2022-07-12 15:31:59', '2022-07-12 15:31:59', '', 'Trinh Thi Na', 'sdfdsa', 'trash', 'open', 'open', '', 'trinh-thi-na__trashed', '', '', '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 0, 'http://localhost/booking/books/trinh-thi-na', 0, 'books', '', 0),
(181, 0, '2022-07-13 15:37:21', '2022-07-13 15:37:21', '', 'lelamhaitest', 'test', 'trash', 'open', 'open', '', 'lelamhaitest__trashed', '', '', '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 0, 'http://localhost/booking/books/lelamhaitest', 0, 'books', '', 0),
(184, 1, '2022-07-29 08:02:32', '2022-07-29 08:02:32', '<p><!-- wp:heading --></p><h2>Who we are Le Lam Hai aaaa</h2><p><!-- /wp:heading --></p><p><!-- wp:paragraph --></p><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Our website address is: http://localhost/booking.</p><p><!-- /wp:paragraph --></p><p><!-- wp:heading --></p><h2>Comments</h2><p><!-- /wp:heading --></p><p><!-- wp:paragraph --></p><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor’s IP address and browser user agent string to help spam detection.</p><p><!-- /wp:paragraph --></p><p><!-- wp:paragraph --></p><p>An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.</p><p><!-- /wp:paragraph --></p><p><!-- wp:heading --></p><h2>Media</h2><p><!-- /wp:heading --></p><p><!-- wp:paragraph --></p><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p><p><!-- /wp:paragraph --></p><p><!-- wp:heading --></p><h2>Cookies</h2><p><!-- /wp:heading --></p><p><!-- wp:paragraph --></p><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p><p><!-- /wp:paragraph --></p><p><!-- wp:paragraph --></p><p>If you visit our login page, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p><p><!-- /wp:paragraph --></p><p><!-- wp:paragraph --></p><p>When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select \"Remember Me\", your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p><p><!-- /wp:paragraph --></p><p><!-- wp:paragraph --></p><p>If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p><p><!-- /wp:paragraph --></p><p><!-- wp:heading --></p><h2>Embedded content from other websites</h2><p><!-- /wp:heading --></p><p><!-- wp:paragraph --></p><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p><p><!-- /wp:paragraph --></p><p><!-- wp:paragraph --></p><p>These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p><p><!-- /wp:paragraph --></p><p><!-- wp:heading --></p><h2>Who we share your data with</h2><p><!-- /wp:heading --></p><p><!-- wp:paragraph --></p><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you request a password reset, your IP address will be included in the reset email.</p><p><!-- /wp:paragraph --></p><p><!-- wp:heading --></p><h2>How long we retain your data</h2><p><!-- /wp:heading --></p><p><!-- wp:paragraph --></p><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p><p><!-- /wp:paragraph --></p><p><!-- wp:paragraph --></p><p>For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.</p><p><!-- /wp:paragraph --></p><p><!-- wp:heading --></p><h2>What rights you have over your data</h2><p><!-- /wp:heading --></p><p><!-- wp:paragraph --></p><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.</p><p><!-- /wp:paragraph --></p><p><!-- wp:heading --></p><h2>Where your data is sent</h2><p><!-- /wp:heading --></p><p><!-- wp:paragraph --></p><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Visitor comments may be checked through an automated spam detection service.</p><p><!-- /wp:paragraph --></p>', 'Privacy Policy', '', 'publish', 'closed', 'closed', '', 'privacy-policy-2', '', '', '2022-08-06 04:27:34', '2022-08-06 04:27:34', '', 0, 'http://localhost/booking/?page_id=184', 0, 'page', '', 0),
(185, 1, '2022-07-29 08:02:32', '2022-07-29 08:02:32', '<!-- wp:heading -->\n<h2>Who we are</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Our website address is: http://localhost/booking.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>Comments</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor’s IP address and browser user agent string to help spam detection.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>Media</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>Cookies</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>If you visit our login page, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select \"Remember Me\", your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>Embedded content from other websites</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>Who we share your data with</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you request a password reset, your IP address will be included in the reset email.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>How long we retain your data</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>What rights you have over your data</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>Where your data is sent</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Visitor comments may be checked through an automated spam detection service.</p>\n<!-- /wp:paragraph -->', 'Privacy Policy', '', 'inherit', 'closed', 'closed', '', '184-revision-v1', '', '', '2022-07-29 08:02:32', '2022-07-29 08:02:32', '', 184, 'http://localhost/booking/?p=185', 0, 'revision', '', 0),
(188, 1, '2022-07-31 02:56:37', '2022-07-31 02:56:37', '', 'Terms', '', 'inherit', 'closed', 'closed', '', '72-revision-v1', '', '', '2022-07-31 02:56:37', '2022-07-31 02:56:37', '', 72, 'http://localhost/booking/?p=188', 0, 'revision', '', 0),
(189, 1, '2022-07-31 02:56:56', '2022-07-31 02:56:56', '<!-- wp:paragraph {\"align\":\"center\"} -->\n<p class=\"has-text-align-center\"><strong><em>lelamhai</em></strong></p>\n<!-- /wp:paragraph -->', 'Terms', '', 'inherit', 'closed', 'closed', '', '72-revision-v1', '', '', '2022-07-31 02:56:56', '2022-07-31 02:56:56', '', 72, 'http://localhost/booking/?p=189', 0, 'revision', '', 0),
(190, 0, '2022-07-31 03:18:44', '2022-07-31 03:18:44', '<p><strong><em>Tri Thi Na</em></strong></p>', 'Terms', '', 'inherit', 'closed', 'closed', '', '72-revision-v1', '', '', '2022-07-31 03:18:44', '2022-07-31 03:18:44', '', 72, 'http://localhost/booking/?p=190', 0, 'revision', '', 0),
(191, 0, '2022-07-31 03:18:44', '2022-07-31 03:18:44', '<p><!-- wp:heading --></p><h2>Who we are Le Lam Hai</h2><p><!-- /wp:heading --></p><p><!-- wp:paragraph --></p><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Our website address is: http://localhost/booking.</p><p><!-- /wp:paragraph --></p><p><!-- wp:heading --></p><h2>Comments</h2><p><!-- /wp:heading --></p><p><!-- wp:paragraph --></p><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor’s IP address and browser user agent string to help spam detection.</p><p><!-- /wp:paragraph --></p><p><!-- wp:paragraph --></p><p>An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.</p><p><!-- /wp:paragraph --></p><p><!-- wp:heading --></p><h2>Media</h2><p><!-- /wp:heading --></p><p><!-- wp:paragraph --></p><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p><p><!-- /wp:paragraph --></p><p><!-- wp:heading --></p><h2>Cookies</h2><p><!-- /wp:heading --></p><p><!-- wp:paragraph --></p><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p><p><!-- /wp:paragraph --></p><p><!-- wp:paragraph --></p><p>If you visit our login page, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p><p><!-- /wp:paragraph --></p><p><!-- wp:paragraph --></p><p>When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select \"Remember Me\", your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p><p><!-- /wp:paragraph --></p><p><!-- wp:paragraph --></p><p>If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p><p><!-- /wp:paragraph --></p><p><!-- wp:heading --></p><h2>Embedded content from other websites</h2><p><!-- /wp:heading --></p><p><!-- wp:paragraph --></p><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p><p><!-- /wp:paragraph --></p><p><!-- wp:paragraph --></p><p>These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p><p><!-- /wp:paragraph --></p><p><!-- wp:heading --></p><h2>Who we share your data with</h2><p><!-- /wp:heading --></p><p><!-- wp:paragraph --></p><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you request a password reset, your IP address will be included in the reset email.</p><p><!-- /wp:paragraph --></p><p><!-- wp:heading --></p><h2>How long we retain your data</h2><p><!-- /wp:heading --></p><p><!-- wp:paragraph --></p><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p><p><!-- /wp:paragraph --></p><p><!-- wp:paragraph --></p><p>For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.</p><p><!-- /wp:paragraph --></p><p><!-- wp:heading --></p><h2>What rights you have over your data</h2><p><!-- /wp:heading --></p><p><!-- wp:paragraph --></p><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.</p><p><!-- /wp:paragraph --></p><p><!-- wp:heading --></p><h2>Where your data is sent</h2><p><!-- /wp:heading --></p><p><!-- wp:paragraph --></p><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Visitor comments may be checked through an automated spam detection service.</p><p><!-- /wp:paragraph --></p>', 'Privacy Policy', '', 'inherit', 'closed', 'closed', '', '184-revision-v1', '', '', '2022-07-31 03:18:44', '2022-07-31 03:18:44', '', 184, 'http://localhost/booking/?p=191', 0, 'revision', '', 0),
(192, 0, '2022-07-31 03:31:47', '2022-07-31 03:31:47', '<p><strong><em>Tri Thi Na lala</em></strong></p>', 'Terms', '', 'inherit', 'closed', 'closed', '', '72-revision-v1', '', '', '2022-07-31 03:31:47', '2022-07-31 03:31:47', '', 72, 'http://localhost/booking/?p=192', 0, 'revision', '', 0),
(193, 0, '2022-07-31 06:40:19', '2022-07-31 06:40:19', '<p>lalmahai</p>', 'Terms', '', 'inherit', 'closed', 'closed', '', '72-revision-v1', '', '', '2022-07-31 06:40:19', '2022-07-31 06:40:19', '', 72, 'http://localhost/booking/?p=193', 0, 'revision', '', 0),
(194, 0, '2022-07-31 12:36:09', '2022-07-31 12:36:09', '<p>lalmahaiaaaaaaaa</p>', 'Terms', '', 'inherit', 'closed', 'closed', '', '72-revision-v1', '', '', '2022-07-31 12:36:09', '2022-07-31 12:36:09', '', 72, 'http://localhost/booking/?p=194', 0, 'revision', '', 0),
(195, 0, '2022-07-31 12:36:09', '2022-07-31 12:36:09', '<p><!-- wp:heading --></p><h2>Who we are Le Lam Hai bbbbbb</h2><p><!-- /wp:heading --></p><p><!-- wp:paragraph --></p><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Our website address is: http://localhost/booking.</p><p><!-- /wp:paragraph --></p><p><!-- wp:heading --></p><h2>Comments</h2><p><!-- /wp:heading --></p><p><!-- wp:paragraph --></p><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor’s IP address and browser user agent string to help spam detection.</p><p><!-- /wp:paragraph --></p><p><!-- wp:paragraph --></p><p>An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.</p><p><!-- /wp:paragraph --></p><p><!-- wp:heading --></p><h2>Media</h2><p><!-- /wp:heading --></p><p><!-- wp:paragraph --></p><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p><p><!-- /wp:paragraph --></p><p><!-- wp:heading --></p><h2>Cookies</h2><p><!-- /wp:heading --></p><p><!-- wp:paragraph --></p><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p><p><!-- /wp:paragraph --></p><p><!-- wp:paragraph --></p><p>If you visit our login page, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p><p><!-- /wp:paragraph --></p><p><!-- wp:paragraph --></p><p>When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select \"Remember Me\", your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p><p><!-- /wp:paragraph --></p><p><!-- wp:paragraph --></p><p>If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p><p><!-- /wp:paragraph --></p><p><!-- wp:heading --></p><h2>Embedded content from other websites</h2><p><!-- /wp:heading --></p><p><!-- wp:paragraph --></p><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p><p><!-- /wp:paragraph --></p><p><!-- wp:paragraph --></p><p>These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p><p><!-- /wp:paragraph --></p><p><!-- wp:heading --></p><h2>Who we share your data with</h2><p><!-- /wp:heading --></p><p><!-- wp:paragraph --></p><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you request a password reset, your IP address will be included in the reset email.</p><p><!-- /wp:paragraph --></p><p><!-- wp:heading --></p><h2>How long we retain your data</h2><p><!-- /wp:heading --></p><p><!-- wp:paragraph --></p><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p><p><!-- /wp:paragraph --></p><p><!-- wp:paragraph --></p><p>For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.</p><p><!-- /wp:paragraph --></p><p><!-- wp:heading --></p><h2>What rights you have over your data</h2><p><!-- /wp:heading --></p><p><!-- wp:paragraph --></p><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.</p><p><!-- /wp:paragraph --></p><p><!-- wp:heading --></p><h2>Where your data is sent</h2><p><!-- /wp:heading --></p><p><!-- wp:paragraph --></p><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Visitor comments may be checked through an automated spam detection service.</p><p><!-- /wp:paragraph --></p>', 'Privacy Policy', '', 'inherit', 'closed', 'closed', '', '184-revision-v1', '', '', '2022-07-31 12:36:09', '2022-07-31 12:36:09', '', 184, 'http://localhost/booking/?p=195', 0, 'revision', '', 0),
(197, 1, '2022-08-05 11:48:26', '2022-08-05 11:48:26', '', 'kaka', 'mes', 'trash', 'open', 'open', '', 'kaka__trashed', '', '', '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 0, 'http://localhost/booking/books/kaka', 0, 'books', '', 0),
(201, 1, '2022-08-05 12:06:13', '2022-08-05 12:06:13', '', 'le huyen thao', 'note', 'trash', 'open', 'open', '', 'le-huyen-thao-2__trashed', '', '', '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 0, 'http://localhost/booking/books/le-huyen-thao-2', 0, 'books', '', 0),
(202, 1, '2022-08-05 12:08:09', '2022-08-05 12:08:09', '', 'Trinh Thi Na', '', 'trash', 'open', 'open', '', 'trinh-thi-na-2__trashed', '', '', '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 0, 'http://localhost/booking/books/trinh-thi-na-2', 0, 'books', '', 0),
(203, 1, '2022-08-05 13:55:44', '2022-08-05 13:55:44', '', 'lelamhaikaka', 'fdsafsda', 'trash', 'open', 'open', '', 'lelamhaikaka__trashed', '', '', '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 0, 'http://localhost/booking/books/lelamhaikaka', 0, 'books', '', 0),
(204, 1, '2022-08-06 04:27:34', '2022-08-06 04:27:34', '<p>haitho</p>', 'Terms', '', 'inherit', 'closed', 'closed', '', '72-revision-v1', '', '', '2022-08-06 04:27:34', '2022-08-06 04:27:34', '', 72, 'http://localhost/booking/?p=204', 0, 'revision', '', 0),
(205, 1, '2022-08-06 04:27:34', '2022-08-06 04:27:34', '<p><!-- wp:heading --></p><h2>Who we are Le Lam Hai aaaa</h2><p><!-- /wp:heading --></p><p><!-- wp:paragraph --></p><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Our website address is: http://localhost/booking.</p><p><!-- /wp:paragraph --></p><p><!-- wp:heading --></p><h2>Comments</h2><p><!-- /wp:heading --></p><p><!-- wp:paragraph --></p><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor’s IP address and browser user agent string to help spam detection.</p><p><!-- /wp:paragraph --></p><p><!-- wp:paragraph --></p><p>An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.</p><p><!-- /wp:paragraph --></p><p><!-- wp:heading --></p><h2>Media</h2><p><!-- /wp:heading --></p><p><!-- wp:paragraph --></p><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p><p><!-- /wp:paragraph --></p><p><!-- wp:heading --></p><h2>Cookies</h2><p><!-- /wp:heading --></p><p><!-- wp:paragraph --></p><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p><p><!-- /wp:paragraph --></p><p><!-- wp:paragraph --></p><p>If you visit our login page, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p><p><!-- /wp:paragraph --></p><p><!-- wp:paragraph --></p><p>When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select \"Remember Me\", your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p><p><!-- /wp:paragraph --></p><p><!-- wp:paragraph --></p><p>If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p><p><!-- /wp:paragraph --></p><p><!-- wp:heading --></p><h2>Embedded content from other websites</h2><p><!-- /wp:heading --></p><p><!-- wp:paragraph --></p><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p><p><!-- /wp:paragraph --></p><p><!-- wp:paragraph --></p><p>These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p><p><!-- /wp:paragraph --></p><p><!-- wp:heading --></p><h2>Who we share your data with</h2><p><!-- /wp:heading --></p><p><!-- wp:paragraph --></p><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you request a password reset, your IP address will be included in the reset email.</p><p><!-- /wp:paragraph --></p><p><!-- wp:heading --></p><h2>How long we retain your data</h2><p><!-- /wp:heading --></p><p><!-- wp:paragraph --></p><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p><p><!-- /wp:paragraph --></p><p><!-- wp:paragraph --></p><p>For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.</p><p><!-- /wp:paragraph --></p><p><!-- wp:heading --></p><h2>What rights you have over your data</h2><p><!-- /wp:heading --></p><p><!-- wp:paragraph --></p><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.</p><p><!-- /wp:paragraph --></p><p><!-- wp:heading --></p><h2>Where your data is sent</h2><p><!-- /wp:heading --></p><p><!-- wp:paragraph --></p><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Visitor comments may be checked through an automated spam detection service.</p><p><!-- /wp:paragraph --></p>', 'Privacy Policy', '', 'inherit', 'closed', 'closed', '', '184-revision-v1', '', '', '2022-08-06 04:27:34', '2022-08-06 04:27:34', '', 184, 'http://localhost/booking/?p=205', 0, 'revision', '', 0),
(245, 1, '2022-08-08 14:22:46', '2022-08-08 14:22:46', '', '11.jpg', '', 'inherit', 'open', 'closed', '', '11-jpg', '', '', '2022-08-08 14:22:46', '2022-08-08 14:22:46', '', 0, 'http://localhost/booking/wp-content/uploads/2022/08/11.jpg', 0, 'attachment', 'image/jpeg', 0),
(246, 1, '2022-08-08 14:23:12', '2022-08-08 14:23:12', '', '79331767_2512275302352114_7951899590813286400_n.jpeg', '', 'inherit', 'open', 'closed', '', '79331767_2512275302352114_7951899590813286400_n-jpeg', '', '', '2022-08-08 14:23:12', '2022-08-08 14:23:12', '', 0, 'http://localhost/booking/wp-content/uploads/2022/08/79331767_2512275302352114_7951899590813286400_n.jpeg', 0, 'attachment', 'image/jpeg', 0),
(247, 1, '2022-08-08 14:23:54', '2022-08-08 14:23:54', '', 'buying.png', '', 'inherit', 'open', 'closed', '', 'buying-png', '', '', '2022-08-08 14:23:54', '2022-08-08 14:23:54', '', 0, 'http://localhost/booking/wp-content/uploads/2022/08/buying.png', 0, 'attachment', 'image/png', 0),
(248, 1, '2022-08-08 14:24:45', '2022-08-08 14:24:45', '', 'plance-1.832b6b7860d99d326540.png', '', 'inherit', 'open', 'closed', '', 'plance-1-832b6b7860d99d326540-png', '', '', '2022-08-08 14:24:45', '2022-08-08 14:24:45', '', 0, 'http://localhost/booking/wp-content/uploads/2022/08/plance-1.832b6b7860d99d326540.png', 0, 'attachment', 'image/png', 0),
(249, 1, '2022-08-09 07:54:03', '2022-08-09 07:54:03', '<label> Your name\n    [text* your-name] </label>\n\n<label> Your email\n    [email* your-email] </label>\n\n<label> Subject\n    [text* your-subject] </label>\n\n<label> Your message (optional)\n    [textarea your-message] </label>\n\n[submit \"Submit\"]\n[_site_title] \"[your-subject]\"\n[_site_title] <leelamhair@gmail.com>\nFrom: [your-name] <[your-email]>\nSubject: [your-subject]\n\nMessage Body:\n[your-message]\n\n-- \nThis e-mail was sent from a contact form on [_site_title] ([_site_url])\n[_site_admin_email]\nReply-To: [your-email]\n\n0\n0\n\n[_site_title] \"[your-subject]\"\n[_site_title] <leelamhair@gmail.com>\nMessage Body:\n[your-message]\n\n-- \nThis e-mail was sent from a contact form on [_site_title] ([_site_url])\n[your-email]\nReply-To: [_site_admin_email]\n\n0\n0\nThank you for your message. It has been sent.\nThere was an error trying to send your message. Please try again later.\nOne or more fields have an error. Please check and try again.\nThere was an error trying to send your message. Please try again later.\nYou must accept the terms and conditions before sending your message.\nPlease fill out this field.\nThis field has a too long input.\nThis field has a too short input.\nThere was an unknown error uploading the file.\nYou are not allowed to upload files of this type.\nThe uploaded file is too large.\nThere was an error uploading the file.', 'Contact form 1', '', 'publish', 'closed', 'closed', '', 'contact-form-1', '', '', '2022-08-09 07:54:03', '2022-08-09 07:54:03', '', 0, 'http://localhost/booking/?post_type=wpcf7_contact_form&p=249', 0, 'wpcf7_contact_form', '', 0),
(250, 1, '2022-08-09 08:01:04', '2022-08-09 08:01:04', '<label> Your email </label>\r\n<div class=\"box-content\">\r\n  [email* your-email]\r\n</div>\r\n<label> Your message</label>\r\n<div class=\"box-content\">\r\n  [textarea your-message]\r\n</div>\r\n<div class=\"box-submit\">[submit \"Submit\"]</div>\n1\n[_site_title]\n[_site_title] <leelamhair@gmail.com>\nleelamhair@gmail.com\nFrom: <[your-email]>\r\n\r\n[your-message]\r\n\r\n-- \r\nThis e-mail was sent from a contact form on [_site_title] ([_site_url])\nReply-To: [your-email]\n\n\n\n\n[_site_title] \"[your-subject]\"\n[_site_title] <leelamhair@gmail.com>\n[your-email]\nMessage Body:\r\n[your-message]\r\n\r\n-- \r\nThis e-mail was sent from a contact form on [_site_title] ([_site_url])\nReply-To: [_site_admin_email]\n\n\n\nThank you for your message. It has been sent.\nThere was an error trying to send your message. Please try again later.\nOne or more fields have an error. Please check and try again.\nThere was an error trying to send your message. Please try again later.\nYou must accept the terms and conditions before sending your message.\nPlease fill out this field.\nThis field has a too long input.\nThis field has a too short input.\nThere was an unknown error uploading the file.\nYou are not allowed to upload files of this type.\nThe uploaded file is too large.\nThere was an error uploading the file.\nPlease enter a date in YYYY-MM-DD format.\nThis field has a too early date.\nThis field has a too late date.\nPlease enter a number.\nThis field has a too small number.\nThis field has a too large number.\nThe answer to the quiz is incorrect.\nPlease enter an email address.\nPlease enter a URL.\nPlease enter a telephone number.', 'Feedback', '', 'publish', 'closed', 'closed', '', 'feedback', '', '', '2022-08-09 12:20:41', '2022-08-09 12:20:41', '', 0, 'http://localhost/booking/?post_type=wpcf7_contact_form&#038;p=250', 0, 'wpcf7_contact_form', '', 0),
(252, 1, '2022-08-11 08:42:04', '2022-08-11 08:42:04', '', 'lelamhaikaka', 'fdsafsda', 'inherit', 'closed', 'closed', '', '203-revision-v1', '', '', '2022-08-11 08:42:04', '2022-08-11 08:42:04', '', 203, 'http://localhost/booking/?p=252', 0, 'revision', '', 0),
(253, 1, '2022-08-11 10:06:17', '2022-08-11 10:06:17', '', '278032474_5017391924975289_8141950049696755457_n.jpeg', '', 'inherit', 'open', 'closed', '', '278032474_5017391924975289_8141950049696755457_n-jpeg', '', '', '2022-08-11 10:06:17', '2022-08-11 10:06:17', '', 0, 'http://localhost/booking/wp-content/uploads/2022/08/278032474_5017391924975289_8141950049696755457_n.jpeg', 0, 'attachment', 'image/jpeg', 0),
(254, 1, '2022-08-11 10:06:18', '2022-08-11 10:06:18', '', '288060299_1785661178437404_3929594054157294826_n.jpg', '', 'inherit', 'open', 'closed', '', '288060299_1785661178437404_3929594054157294826_n-jpg', '', '', '2022-08-11 10:06:18', '2022-08-11 10:06:18', '', 0, 'http://localhost/booking/wp-content/uploads/2022/08/288060299_1785661178437404_3929594054157294826_n.jpg', 0, 'attachment', 'image/jpeg', 0),
(255, 1, '2022-08-11 10:06:18', '2022-08-11 10:06:18', '', 'astronaut copy.png', '', 'inherit', 'open', 'closed', '', 'astronaut-copy-png', '', '', '2022-08-11 10:06:18', '2022-08-11 10:06:18', '', 0, 'http://localhost/booking/wp-content/uploads/2022/08/astronaut%20copy.png', 0, 'attachment', 'image/png', 0),
(256, 1, '2022-08-12 07:43:39', '2022-08-12 07:43:39', '', 'Trinh Thi Na', '', 'inherit', 'closed', 'closed', '', '202-revision-v1', '', '', '2022-08-12 07:43:39', '2022-08-12 07:43:39', '', 202, 'http://localhost/booking/?p=256', 0, 'revision', '', 0),
(257, 1, '2022-08-12 15:53:21', '2022-08-12 15:53:21', '', 'test 1', '', 'trash', 'open', 'open', '', 'test-1-2__trashed', '', '', '2022-08-16 14:59:13', '2022-08-16 14:59:13', '', 0, 'http://localhost/booking/books/test-1-2', 0, 'books', '', 0),
(258, 1, '2022-08-12 15:55:52', '2022-08-12 15:55:52', '', 'test 2', '', 'trash', 'open', 'open', '', 'test-2-2__trashed', '', '', '2022-08-16 14:59:12', '2022-08-16 14:59:12', '', 0, 'http://localhost/booking/books/test-2-2', 0, 'books', '', 0),
(259, 0, '2022-08-14 04:38:10', '2022-08-14 04:38:10', '', 'NVA', 'message', 'trash', 'open', 'open', '', 'nva__trashed', '', '', '2022-08-16 14:59:12', '2022-08-16 14:59:12', '', 0, 'http://localhost/booking/books/nva', 0, 'books', '', 0),
(260, 1, '2022-08-14 06:45:41', '2022-08-14 06:45:41', '', 'Le Thanh Tinh', '', 'trash', 'open', 'open', '', 'le-thanh-tinh-2__trashed', '', '', '2022-08-16 14:59:12', '2022-08-16 14:59:12', '', 0, 'http://localhost/booking/books/le-thanh-tinh-2', 0, 'books', '', 0),
(261, 1, '2022-08-14 06:47:02', '2022-08-14 06:47:02', '', 'Le Thanh Tinh', '', 'inherit', 'closed', 'closed', '', '260-revision-v1', '', '', '2022-08-14 06:47:02', '2022-08-14 06:47:02', '', 260, 'http://localhost/booking/?p=261', 0, 'revision', '', 0),
(262, 0, '2022-08-14 09:14:41', '2022-08-14 09:14:41', '', 'test', '', 'trash', 'open', 'open', '', 'test__trashed', '', '', '2022-08-14 09:14:53', '2022-08-14 09:14:53', '', 0, 'http://localhost/booking/books/test', 0, 'books', '', 0),
(263, 1, '2022-08-14 09:14:42', '2022-08-14 09:14:42', '', 'test', '', 'trash', 'open', 'open', '', 'test-3__trashed', '', '', '2022-08-16 14:59:12', '2022-08-16 14:59:12', '', 0, 'http://localhost/booking/books/test-3', 0, 'books', '', 0),
(264, 1, '2022-08-14 09:14:53', '2022-08-14 09:14:53', '', 'test', '', 'inherit', 'closed', 'closed', '', '262-revision-v1', '', '', '2022-08-14 09:14:53', '2022-08-14 09:14:53', '', 262, 'http://localhost/booking/?p=264', 0, 'revision', '', 0),
(265, 1, '2022-08-14 09:18:41', '2022-08-14 09:18:41', '', 'test', '', 'inherit', 'closed', 'closed', '', '263-revision-v1', '', '', '2022-08-14 09:18:41', '2022-08-14 09:18:41', '', 263, 'http://localhost/booking/?p=265', 0, 'revision', '', 0),
(266, 0, '2022-08-14 13:58:59', '2022-08-14 13:58:59', '', 'aaaaaaa', '', 'trash', 'open', 'open', '', 'aaaaaaa__trashed', '', '', '2022-08-16 14:59:12', '2022-08-16 14:59:12', '', 0, 'http://localhost/booking/books/aaaaaaa', 0, 'books', '', 0),
(267, 0, '2022-08-14 13:59:00', '2022-08-14 13:59:00', '', 'aaaaaaa', '', 'trash', 'open', 'open', '', 'aaaaaaa-2__trashed', '', '', '2022-08-14 13:59:10', '2022-08-14 13:59:10', '', 0, 'http://localhost/booking/books/aaaaaaa-2', 0, 'books', '', 0),
(268, 1, '2022-08-14 13:59:10', '2022-08-14 13:59:10', '', 'aaaaaaa', '', 'inherit', 'closed', 'closed', '', '267-revision-v1', '', '', '2022-08-14 13:59:10', '2022-08-14 13:59:10', '', 267, 'http://localhost/booking/?p=268', 0, 'revision', '', 0),
(269, 0, '2022-08-14 14:15:22', '2022-08-14 14:15:22', '', 'kakaka', '', 'trash', 'open', 'open', '', 'kakaka__trashed', '', '', '2022-08-16 14:59:12', '2022-08-16 14:59:12', '', 0, 'http://localhost/booking/books/kakaka', 0, 'books', '', 0),
(270, 0, '2022-08-14 14:21:49', '2022-08-14 14:21:49', '', 'hai', '', 'trash', 'open', 'open', '', 'hai__trashed', '', '', '2022-08-16 14:59:12', '2022-08-16 14:59:12', '', 0, 'http://localhost/booking/books/hai', 0, 'books', '', 0),
(271, 0, '2022-08-14 15:53:04', '2022-08-14 15:53:04', '', '1234567890', '', 'trash', 'open', 'open', '', '1234567890__trashed', '', '', '2022-08-16 08:19:16', '2022-08-16 08:19:16', '', 0, 'http://localhost/booking/books/1234567890', 0, 'books', '', 0),
(272, 0, '2022-08-14 16:33:34', '2022-08-14 16:33:34', '', '1234567890', '', 'trash', 'open', 'open', '', '1234567890-2__trashed', '', '', '2022-08-16 08:19:15', '2022-08-16 08:19:15', '', 0, 'http://localhost/booking/books/1234567890-2', 0, 'books', '', 0),
(273, 0, '2022-08-14 16:35:11', '2022-08-14 16:35:11', '', '1234567890', '', 'trash', 'open', 'open', '', '1234567890-3__trashed', '', '', '2022-08-16 08:19:13', '2022-08-16 08:19:13', '', 0, 'http://localhost/booking/books/1234567890-3', 0, 'books', '', 0),
(274, 0, '2022-08-14 16:36:09', '2022-08-14 16:36:09', '', '1234567890', '', 'trash', 'open', 'open', '', '1234567890-4__trashed', '', '', '2022-08-16 08:19:11', '2022-08-16 08:19:11', '', 0, 'http://localhost/booking/books/1234567890-4', 0, 'books', '', 0),
(275, 1, '2022-08-16 08:19:11', '2022-08-16 08:19:11', '', '1234567890', '', 'inherit', 'closed', 'closed', '', '274-revision-v1', '', '', '2022-08-16 08:19:11', '2022-08-16 08:19:11', '', 274, 'http://localhost/booking/?p=275', 0, 'revision', '', 0),
(276, 1, '2022-08-16 08:19:13', '2022-08-16 08:19:13', '', '1234567890', '', 'inherit', 'closed', 'closed', '', '273-revision-v1', '', '', '2022-08-16 08:19:13', '2022-08-16 08:19:13', '', 273, 'http://localhost/booking/?p=276', 0, 'revision', '', 0),
(277, 1, '2022-08-16 08:19:15', '2022-08-16 08:19:15', '', '1234567890', '', 'inherit', 'closed', 'closed', '', '272-revision-v1', '', '', '2022-08-16 08:19:15', '2022-08-16 08:19:15', '', 272, 'http://localhost/booking/?p=277', 0, 'revision', '', 0),
(278, 1, '2022-08-16 08:19:16', '2022-08-16 08:19:16', '', '1234567890', '', 'inherit', 'closed', 'closed', '', '271-revision-v1', '', '', '2022-08-16 08:19:16', '2022-08-16 08:19:16', '', 271, 'http://localhost/booking/?p=278', 0, 'revision', '', 0),
(279, 1, '2022-08-16 14:59:12', '2022-08-16 14:59:12', '', 'hai', '', 'inherit', 'closed', 'closed', '', '270-revision-v1', '', '', '2022-08-16 14:59:12', '2022-08-16 14:59:12', '', 270, 'http://localhost/booking/?p=279', 0, 'revision', '', 0);
INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(280, 1, '2022-08-16 14:59:12', '2022-08-16 14:59:12', '', 'kakaka', '', 'inherit', 'closed', 'closed', '', '269-revision-v1', '', '', '2022-08-16 14:59:12', '2022-08-16 14:59:12', '', 269, 'http://localhost/booking/?p=280', 0, 'revision', '', 0),
(281, 1, '2022-08-16 14:59:12', '2022-08-16 14:59:12', '', 'aaaaaaa', '', 'inherit', 'closed', 'closed', '', '266-revision-v1', '', '', '2022-08-16 14:59:12', '2022-08-16 14:59:12', '', 266, 'http://localhost/booking/?p=281', 0, 'revision', '', 0),
(282, 1, '2022-08-16 14:59:12', '2022-08-16 14:59:12', '', 'NVA', 'message', 'inherit', 'closed', 'closed', '', '259-revision-v1', '', '', '2022-08-16 14:59:12', '2022-08-16 14:59:12', '', 259, 'http://localhost/booking/?p=282', 0, 'revision', '', 0),
(283, 1, '2022-08-16 14:59:12', '2022-08-16 14:59:12', '', 'test 2', '', 'inherit', 'closed', 'closed', '', '258-revision-v1', '', '', '2022-08-16 14:59:12', '2022-08-16 14:59:12', '', 258, 'http://localhost/booking/?p=283', 0, 'revision', '', 0),
(284, 1, '2022-08-16 14:59:13', '2022-08-16 14:59:13', '', 'test 1', '', 'inherit', 'closed', 'closed', '', '257-revision-v1', '', '', '2022-08-16 14:59:13', '2022-08-16 14:59:13', '', 257, 'http://localhost/booking/?p=284', 0, 'revision', '', 0),
(285, 1, '2022-08-16 14:59:55', '2022-08-16 14:59:55', '', '1234567890', '', 'trash', 'open', 'open', '', '1234567890__trashed-2', '', '', '2022-08-16 15:30:14', '2022-08-16 15:30:14', '', 0, 'http://localhost/booking/books/1234567890', 0, 'books', '', 0),
(286, 1, '2022-08-16 15:30:14', '2022-08-16 15:30:14', '', '1234567890', '', 'inherit', 'closed', 'closed', '', '285-revision-v1', '', '', '2022-08-16 15:30:14', '2022-08-16 15:30:14', '', 285, 'http://localhost/booking/?p=286', 0, 'revision', '', 0),
(287, 1, '2022-08-16 15:32:16', '2022-08-16 15:32:16', '', '1234567890', 'meesss', 'trash', 'open', 'open', '', '1234567890__trashed-3', '', '', '2022-08-16 15:34:39', '2022-08-16 15:34:39', '', 0, 'http://localhost/booking/books/1234567890', 0, 'books', '', 0),
(288, 1, '2022-08-16 15:34:39', '2022-08-16 15:34:39', '', '1234567890', 'meesss', 'inherit', 'closed', 'closed', '', '287-revision-v1', '', '', '2022-08-16 15:34:39', '2022-08-16 15:34:39', '', 287, 'http://localhost/booking/?p=288', 0, 'revision', '', 0),
(289, 1, '2022-08-16 15:35:53', '2022-08-16 15:35:53', '', '1234567890', '', 'trash', 'open', 'open', '', '1234567890__trashed-4', '', '', '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 0, 'http://localhost/booking/books/1234567890', 0, 'books', '', 0),
(290, 1, '2022-08-17 02:34:15', '2022-08-17 02:34:15', '', '0982115380', '', 'trash', 'open', 'open', '', '0982115380__trashed', '', '', '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 0, 'http://localhost/booking/books/0982115380', 0, 'books', '', 0),
(291, 1, '2022-08-17 02:37:11', '2022-08-17 02:37:11', '', '0982115380', '', 'inherit', 'closed', 'closed', '', '290-revision-v1', '', '', '2022-08-17 02:37:11', '2022-08-17 02:37:11', '', 290, 'http://localhost/booking/?p=291', 0, 'revision', '', 0),
(292, 1, '2022-08-17 08:54:22', '2022-08-17 08:54:22', '', 'Edit Web', '', 'inherit', 'closed', 'closed', '', '176-autosave-v1', '', '', '2022-08-17 08:54:22', '2022-08-17 08:54:22', '', 176, 'http://localhost/booking/?p=292', 0, 'revision', '', 0),
(293, 1, '2022-08-17 12:42:08', '2022-08-17 12:42:08', '', '1234567890', '', 'inherit', 'closed', 'closed', '', '289-revision-v1', '', '', '2022-08-17 12:42:08', '2022-08-17 12:42:08', '', 289, 'http://localhost/booking/?p=293', 0, 'revision', '', 0),
(294, 1, '2022-08-18 10:36:46', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'open', 'open', '', '', '', '', '2022-08-18 10:36:46', '0000-00-00 00:00:00', '', 0, 'http://localhost/booking/?p=294', 0, 'post', '', 0),
(295, 2, '2022-08-18 10:38:41', '2022-08-18 10:38:41', '', '79331767_2512275302352114_7951899590813286400_n.jpeg', '', 'inherit', 'open', 'closed', '', '79331767_2512275302352114_7951899590813286400_n-jpeg-2', '', '', '2022-08-18 10:38:41', '2022-08-18 10:38:41', '', 0, 'http://localhost/booking/wp-content/uploads/2022/08/79331767_2512275302352114_7951899590813286400_n.jpeg', 0, 'attachment', 'image/jpeg', 0),
(296, 1, '2022-08-19 10:08:07', '2022-08-19 10:08:07', '{\n    \"blogname\": {\n        \"value\": \"lelamhai\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2022-08-19 10:08:07\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', 'c209e86a-8da1-4c4a-91a9-88eb3d1bf51d', '', '', '2022-08-19 10:08:07', '2022-08-19 10:08:07', '', 0, 'http://localhost/booking/uncategorized/c209e86a-8da1-4c4a-91a9-88eb3d1bf51d.html', 0, 'customize_changeset', '', 0),
(297, 1, '2022-08-19 12:28:26', '2022-08-19 12:28:26', 'http://localhost/booking/wp-content/uploads/2022/08/cropped-plance-1.832b6b7860d99d326540.png', 'cropped-plance-1.832b6b7860d99d326540.png', '', 'inherit', 'open', 'closed', '', 'cropped-plance-1-832b6b7860d99d326540-png', '', '', '2022-08-19 12:28:26', '2022-08-19 12:28:26', '', 0, 'http://localhost/booking/wp-content/uploads/2022/08/cropped-plance-1.832b6b7860d99d326540.png', 0, 'attachment', 'image/png', 0),
(298, 1, '2022-08-19 12:28:55', '0000-00-00 00:00:00', '{\n    \"site_icon\": {\n        \"value\": 297,\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2022-08-19 12:28:55\"\n    }\n}', '', '', 'auto-draft', 'closed', 'closed', '', 'f123223a-8661-42be-be41-276fb1327e10', '', '', '2022-08-19 12:28:55', '0000-00-00 00:00:00', '', 0, 'http://localhost/booking/?p=298', 0, 'customize_changeset', '', 0),
(299, 1, '2022-08-20 07:51:51', '2022-08-20 07:51:51', '', 'thanh tuyen', 'dsadsad', 'trash', 'open', 'open', '', 'thanh-tuyen__trashed', '', '', '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 0, 'http://localhost/booking/books/thanh-tuyen', 0, 'books', '', 0),
(300, 1, '2022-08-20 09:43:51', '2022-08-20 09:43:51', '', 'aaaa', '', 'trash', 'open', 'open', '', 'aaaa__trashed', '', '', '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 0, 'http://localhost/booking/books/aaaa', 0, 'books', '', 0),
(301, 1, '2022-08-20 09:45:21', '2022-08-20 09:45:21', '', 'bbb', '', 'trash', 'open', 'open', '', 'bbb__trashed', '', '', '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 0, 'http://localhost/booking/books/bbb', 0, 'books', '', 0),
(302, 1, '2022-08-20 09:46:30', '2022-08-20 09:46:30', '', 'bbbb', '', 'trash', 'open', 'open', '', 'bbbb__trashed', '', '', '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 0, 'http://localhost/booking/books/bbbb', 0, 'books', '', 0),
(303, 1, '2022-08-20 10:05:59', '2022-08-20 10:05:59', '', 'wwwww', '', 'trash', 'open', 'open', '', 'wwwww__trashed', '', '', '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 0, 'http://localhost/booking/books/wwwww', 0, 'books', '', 0),
(304, 1, '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 'wwwww', '', 'inherit', 'closed', 'closed', '', '303-revision-v1', '', '', '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 303, 'http://localhost/booking/?p=304', 0, 'revision', '', 0),
(305, 1, '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 'bbbb', '', 'inherit', 'closed', 'closed', '', '302-revision-v1', '', '', '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 302, 'http://localhost/booking/?p=305', 0, 'revision', '', 0),
(306, 1, '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 'bbb', '', 'inherit', 'closed', 'closed', '', '301-revision-v1', '', '', '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 301, 'http://localhost/booking/?p=306', 0, 'revision', '', 0),
(307, 1, '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 'aaaa', '', 'inherit', 'closed', 'closed', '', '300-revision-v1', '', '', '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 300, 'http://localhost/booking/?p=307', 0, 'revision', '', 0),
(308, 1, '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 'thanh tuyen', 'dsadsad', 'inherit', 'closed', 'closed', '', '299-revision-v1', '', '', '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 299, 'http://localhost/booking/?p=308', 0, 'revision', '', 0),
(309, 1, '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 'le huyen thao', 'note', 'inherit', 'closed', 'closed', '', '201-revision-v1', '', '', '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 201, 'http://localhost/booking/?p=309', 0, 'revision', '', 0),
(310, 1, '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 'kaka', 'mes', 'inherit', 'closed', 'closed', '', '197-revision-v1', '', '', '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 197, 'http://localhost/booking/?p=310', 0, 'revision', '', 0),
(311, 1, '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 'lelamhaitest', 'test', 'inherit', 'closed', 'closed', '', '181-revision-v1', '', '', '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 181, 'http://localhost/booking/?p=311', 0, 'revision', '', 0),
(312, 1, '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 'Trinh Thi Na', 'sdfdsa', 'inherit', 'closed', 'closed', '', '180-revision-v1', '', '', '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 180, 'http://localhost/booking/?p=312', 0, 'revision', '', 0),
(313, 1, '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 'le thanh tinh', 'rrr', 'inherit', 'closed', 'closed', '', '179-revision-v1', '', '', '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 179, 'http://localhost/booking/?p=313', 0, 'revision', '', 0),
(314, 1, '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 'le huyen thao', 'message', 'inherit', 'closed', 'closed', '', '178-revision-v1', '', '', '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 178, 'http://localhost/booking/?p=314', 0, 'revision', '', 0),
(315, 1, '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 'lelamhai', 'sdafsadf', 'inherit', 'closed', 'closed', '', '175-revision-v1', '', '', '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 175, 'http://localhost/booking/?p=315', 0, 'revision', '', 0),
(316, 1, '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 'test 2', 'sdfafsa', 'inherit', 'closed', 'closed', '', '174-revision-v1', '', '', '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 174, 'http://localhost/booking/?p=316', 0, 'revision', '', 0),
(317, 1, '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 'test 1', 'test 1', 'inherit', 'closed', 'closed', '', '173-revision-v1', '', '', '2022-08-20 12:46:03', '2022-08-20 12:46:03', '', 173, 'http://localhost/booking/?p=317', 0, 'revision', '', 0),
(318, 1, '2022-08-20 12:48:55', '2022-08-20 12:48:55', '', 'lelamhai', '', 'trash', 'open', 'open', '', 'lelamhai__trashed-2', '', '', '2022-08-20 12:51:21', '2022-08-20 12:51:21', '', 0, 'http://localhost/booking/books/lelamhai', 0, 'books', '', 0),
(319, 1, '2022-08-20 12:51:21', '2022-08-20 12:51:21', '', 'lelamhai', '', 'inherit', 'closed', 'closed', '', '318-revision-v1', '', '', '2022-08-20 12:51:21', '2022-08-20 12:51:21', '', 318, 'http://localhost/booking/?p=319', 0, 'revision', '', 0),
(320, 1, '2022-08-20 12:51:46', '2022-08-20 12:51:46', '', 'lelamhai', '', 'trash', 'open', 'open', '', 'lelamhai__trashed-3', '', '', '2022-08-20 14:44:17', '2022-08-20 14:44:17', '', 0, 'http://localhost/booking/books/lelamhai', 0, 'books', '', 0),
(321, 1, '2022-08-20 13:13:00', '2022-08-20 13:13:00', '', 'lelamhai', '', 'inherit', 'closed', 'closed', '', '320-revision-v1', '', '', '2022-08-20 13:13:00', '2022-08-20 13:13:00', '', 320, 'http://localhost/booking/?p=321', 0, 'revision', '', 0),
(322, 1, '2022-08-20 14:57:32', '2022-08-20 14:57:32', '', 'lelamhai', '', 'trash', 'open', 'open', '', 'lelamhai__trashed-4', '', '', '2022-08-20 15:06:36', '2022-08-20 15:06:36', '', 0, 'http://localhost/booking/books/lelamhai', 0, 'books', '', 0),
(323, 1, '2022-08-20 15:06:36', '2022-08-20 15:06:36', '', 'lelamhai', '', 'inherit', 'closed', 'closed', '', '322-revision-v1', '', '', '2022-08-20 15:06:36', '2022-08-20 15:06:36', '', 322, 'http://localhost/booking/?p=323', 0, 'revision', '', 0),
(324, 1, '2022-08-20 15:06:54', '2022-08-20 15:06:54', '', 'lelamhai', '', 'trash', 'open', 'open', '', 'lelamhai__trashed-5', '', '', '2022-08-20 15:08:51', '2022-08-20 15:08:51', '', 0, 'http://localhost/booking/books/lelamhai', 0, 'books', '', 0),
(325, 1, '2022-08-20 15:08:51', '2022-08-20 15:08:51', '', 'lelamhai', '', 'inherit', 'closed', 'closed', '', '324-revision-v1', '', '', '2022-08-20 15:08:51', '2022-08-20 15:08:51', '', 324, 'http://localhost/booking/?p=325', 0, 'revision', '', 0),
(326, 1, '2022-08-20 15:09:23', '2022-08-20 15:09:23', '', 'lelamhai', '', 'trash', 'open', 'open', '', 'lelamhai__trashed-6', '', '', '2022-08-20 15:13:22', '2022-08-20 15:13:22', '', 0, 'http://localhost/booking/books/lelamhai', 0, 'books', '', 0),
(327, 1, '2022-08-20 15:13:22', '2022-08-20 15:13:22', '', 'lelamhai', '', 'inherit', 'closed', 'closed', '', '326-revision-v1', '', '', '2022-08-20 15:13:22', '2022-08-20 15:13:22', '', 326, 'http://localhost/booking/?p=327', 0, 'revision', '', 0),
(328, 1, '2022-08-20 15:13:58', '2022-08-20 15:13:58', '', 'lelamhai', '', 'trash', 'open', 'open', '', 'lelamhai__trashed-7', '', '', '2022-08-20 15:15:58', '2022-08-20 15:15:58', '', 0, 'http://localhost/booking/books/lelamhai', 0, 'books', '', 0),
(329, 1, '2022-08-20 15:15:58', '2022-08-20 15:15:58', '', 'lelamhai', '', 'inherit', 'closed', 'closed', '', '328-revision-v1', '', '', '2022-08-20 15:15:58', '2022-08-20 15:15:58', '', 328, 'http://localhost/booking/?p=329', 0, 'revision', '', 0),
(330, 1, '2022-08-20 15:16:21', '2022-08-20 15:16:21', '', 'lelamhai', '', 'publish', 'open', 'open', '', 'lelamhai', '', '', '2022-08-21 04:34:09', '2022-08-21 04:34:09', '', 0, 'http://localhost/booking/books/lelamhai', 0, 'books', '', 0),
(332, 1, '2022-08-20 15:33:43', '2022-08-20 15:33:43', '', 'lehuyenthao', '', 'publish', 'open', 'open', '', 'lehuyenthao', '', '', '2022-08-21 04:34:19', '2022-08-21 04:34:19', '', 0, 'http://localhost/booking/books/lehuyenthao', 0, 'books', '', 0),
(333, 1, '2022-08-21 04:34:09', '2022-08-21 04:34:09', '', 'lelamhai', '', 'inherit', 'closed', 'closed', '', '330-revision-v1', '', '', '2022-08-21 04:34:09', '2022-08-21 04:34:09', '', 330, 'http://localhost/booking/?p=333', 0, 'revision', '', 0),
(334, 1, '2022-08-21 04:34:19', '2022-08-21 04:34:19', '', 'lehuyenthao', '', 'inherit', 'closed', 'closed', '', '332-revision-v1', '', '', '2022-08-21 04:34:19', '2022-08-21 04:34:19', '', 332, 'http://localhost/booking/?p=334', 0, 'revision', '', 0),
(335, 1, '2022-08-22 07:26:49', '2022-08-22 07:26:49', '', 'Manage', '', 'publish', 'closed', 'closed', '', 'manage', '', '', '2022-08-22 07:26:49', '2022-08-22 07:26:49', '', 0, 'http://localhost/booking/?page_id=335', 0, 'page', '', 0),
(336, 1, '2022-08-22 07:26:49', '2022-08-22 07:26:49', '', 'Manage', '', 'inherit', 'closed', 'closed', '', '335-revision-v1', '', '', '2022-08-22 07:26:49', '2022-08-22 07:26:49', '', 335, 'http://localhost/booking/?p=336', 0, 'revision', '', 0),
(337, 1, '2022-08-22 07:31:44', '2022-08-22 07:31:44', '', 'Manage', '', 'inherit', 'closed', 'closed', '', '335-autosave-v1', '', '', '2022-08-22 07:31:44', '2022-08-22 07:31:44', '', 335, 'http://localhost/booking/?p=337', 0, 'revision', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_service`
--

CREATE TABLE `wp_service` (
  `service_id` int(11) NOT NULL,
  `service_parentid` int(11) DEFAULT 0,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_service`
--

INSERT INTO `wp_service` (`service_id`, `service_parentid`, `service_name`, `service_price`, `service_description`) VALUES
(1, 0, 'Nails', NULL, NULL),
(2, 0, 'Nail designs', NULL, NULL),
(3, 9, 'Title', NULL, NULL),
(4, 1, 'Fullset acrylic with tips', '$50', 'Perfect service for 60 mins'),
(5, 1, 'Acrylic overlay', '$5', '60 mins service'),
(6, 1, 'Acrylic infill', '$52', '45 mins service'),
(7, 2, 'French design', '$20', 'Beautiful design'),
(8, 2, 'Nail ombre', '$40', 'Wonderful'),
(9, 0, 'Manicure', '$70', 'description');

-- --------------------------------------------------------

--
-- Table structure for table `wp_termmeta`
--

CREATE TABLE `wp_termmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_termmeta`
--

INSERT INTO `wp_termmeta` (`meta_id`, `term_id`, `meta_key`, `meta_value`) VALUES
(265, 154, 'times-slots', '10'),
(266, 154, 'times-index', '1'),
(291, 167, 'services-price', '50'),
(292, 167, 'services-index', '1'),
(293, 168, 'services-price', ''),
(294, 168, 'services-index', '2'),
(295, 169, 'services-price', '50'),
(296, 169, 'services-index', '1'),
(297, 170, 'services-price', ''),
(298, 170, 'services-index', '3'),
(299, 171, 'services-price', '150'),
(300, 172, 'services-price', '100'),
(301, 171, 'services-index', '2'),
(302, 172, 'services-index', '1'),
(303, 173, 'services-price', '999'),
(304, 173, 'services-index', '4'),
(329, 186, 'times-slots', '444'),
(330, 186, 'times-index', '2'),
(331, 187, 'times-slots', '4'),
(332, 187, 'times-index', '3'),
(333, 188, 'times-slots', '9'),
(334, 188, 'times-index', '4');

-- --------------------------------------------------------

--
-- Table structure for table `wp_terms`
--

CREATE TABLE `wp_terms` (
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_terms`
--

INSERT INTO `wp_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'Uncategorized', 'uncategorized', 0),
(2, 'book', 'book', 0),
(154, '8:20 AM', '800-am', 0),
(167, 'title', 'title', 0),
(168, 'title 1', 'title-1', 0),
(169, 'title 1.2', 'title-1-2', 0),
(170, 'title 2', 'title-2', 0),
(171, 'title 2.1', 'title-2-1', 0),
(172, 'title 2.2', 'title-2-2', 0),
(173, 'Title 3', 'title-3', 0),
(186, '9:00 PM', '900-pm', 0),
(187, '10:00 AM', '1000-am', 0),
(188, '11:00 PM', '1100-pm', 0),
(189, 'aa', 'aa', 0),
(190, 'bb', 'bb', 0),
(191, 'cc', 'cc', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_term_relationships`
--

CREATE TABLE `wp_term_relationships` (
  `object_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `term_order` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_term_relationships`
--

INSERT INTO `wp_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(1, 1, 0),
(69, 2, 0),
(197, 154, 0),
(201, 154, 0),
(202, 154, 0),
(203, 154, 0),
(257, 154, 0),
(259, 154, 0),
(262, 154, 0),
(263, 154, 0),
(266, 154, 0),
(267, 154, 0),
(269, 154, 0),
(270, 154, 0),
(270, 167, 0),
(270, 168, 0),
(270, 170, 0),
(270, 173, 0),
(272, 154, 0),
(273, 154, 0),
(274, 154, 0),
(285, 154, 0),
(287, 154, 0),
(289, 154, 0),
(290, 154, 0),
(299, 154, 0),
(300, 154, 0),
(301, 154, 0),
(302, 154, 0),
(303, 154, 0),
(318, 154, 0),
(320, 154, 0),
(322, 154, 0),
(324, 154, 0),
(326, 154, 0),
(328, 154, 0),
(330, 154, 0),
(332, 154, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_term_taxonomy`
--

CREATE TABLE `wp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `count` bigint(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_term_taxonomy`
--

INSERT INTO `wp_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 1),
(2, 2, 'wp_theme', '', 0, 1),
(154, 154, 'times', '', 0, 32),
(167, 167, 'services', 'description', 0, 1),
(168, 168, 'services', '', 0, 1),
(169, 169, 'services', 'des 1.2', 168, 0),
(170, 170, 'services', '', 0, 1),
(171, 172, 'services', 'des 2.2', 170, 0),
(172, 171, 'services', 'des 2.1', 170, 0),
(173, 173, 'services', 'des 3', 0, 1),
(186, 186, 'times', '', 0, 0),
(187, 187, 'times', '', 0, 0),
(188, 188, 'times', '', 0, 0),
(189, 189, 'post_tag', '', 0, 0),
(190, 190, 'post_tag', '', 0, 0),
(191, 191, 'post_tag', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_time`
--

CREATE TABLE `wp_time` (
  `time_id` int(11) NOT NULL,
  `time_hour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_slots` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_time`
--

INSERT INTO `wp_time` (`time_id`, `time_hour`, `time_slots`) VALUES
(1, '9:00', 30),
(2, '9:30', 10),
(3, '10:00', 0),
(4, '10:30', 5),
(5, '11:00', 15),
(6, '1:00', 50),
(7, '2:00', 20),
(8, '4:00', 30),
(9, '5:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wp_usermeta`
--

CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_usermeta`
--

INSERT INTO `wp_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'nickname', 'admin'),
(2, 1, 'first_name', ''),
(3, 1, 'last_name', ''),
(4, 1, 'description', ''),
(5, 1, 'rich_editing', 'true'),
(6, 1, 'syntax_highlighting', 'true'),
(7, 1, 'comment_shortcuts', 'true'),
(8, 1, 'admin_color', 'fresh'),
(9, 1, 'use_ssl', '0'),
(10, 1, 'show_admin_bar_front', 'true'),
(11, 1, 'locale', ''),
(12, 1, 'wp_capabilities', 'a:1:{s:13:\"administrator\";b:1;}'),
(13, 1, 'wp_user_level', '10'),
(14, 1, 'dismissed_wp_pointers', 'theme_editor_notice'),
(15, 1, 'show_welcome_panel', '0'),
(17, 1, 'wp_dashboard_quick_press_last_post_id', '294'),
(18, 1, 'wp_user-settings', 'libraryContent=browse&ampampampeditor=tinymce&mfold=o&unfold=1'),
(19, 1, 'wp_user-settings-time', '1661179124'),
(20, 1, 'community-events-location', 'a:1:{s:2:\"ip\";s:9:\"127.0.0.0\";}'),
(21, 1, 'meta-box-order_booking', 'a:4:{s:15:\"acf_after_title\";s:0:\"\";s:4:\"side\";s:30:\"submitdiv,servicesdiv,timesdiv\";s:6:\"normal\";s:23:\"slugdiv,booking_metabox\";s:8:\"advanced\";s:0:\"\";}'),
(22, 1, 'screen_layout_booking', '2'),
(23, 1, 'closedpostboxes_booking', 'a:0:{}'),
(24, 1, 'metaboxhidden_booking', 'a:2:{i:0;s:11:\"servicesdiv\";i:1;s:7:\"slugdiv\";}'),
(25, 1, 'closedpostboxes_books', 'a:0:{}'),
(26, 1, 'metaboxhidden_books', 'a:6:{i:0;s:13:\"trackbacksdiv\";i:1;s:10:\"postcustom\";i:2;s:16:\"commentstatusdiv\";i:3;s:11:\"commentsdiv\";i:4;s:7:\"slugdiv\";i:5;s:9:\"authordiv\";}'),
(31, 2, 'nickname', 'test'),
(32, 2, 'first_name', 'test'),
(33, 2, 'last_name', 'test'),
(34, 2, 'description', ''),
(35, 2, 'rich_editing', 'true'),
(36, 2, 'syntax_highlighting', 'true'),
(37, 2, 'comment_shortcuts', 'false'),
(38, 2, 'admin_color', 'fresh'),
(39, 2, 'use_ssl', '0'),
(40, 2, 'show_admin_bar_front', 'true'),
(41, 2, 'locale', ''),
(42, 2, 'wp_capabilities', 'a:1:{s:10:\"subscriber\";b:1;}'),
(43, 2, 'wp_user_level', '0'),
(44, 2, 'dismissed_wp_pointers', ''),
(46, 1, 'manageedit-pagecolumnshidden', 'a:0:{}'),
(48, 2, 'community-events-location', 'a:1:{s:2:\"ip\";s:9:\"127.0.0.0\";}'),
(57, 1, 'session_tokens', 'a:1:{s:64:\"00b0efe4fdd6c3fed685077ec1afc1d6dd4a3beeaba739769d6b9ac7dc770ebc\";a:4:{s:10:\"expiration\";i:1661419529;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:117:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36\";s:5:\"login\";i:1661246729;}}');

-- --------------------------------------------------------

--
-- Table structure for table `wp_users`
--

CREATE TABLE `wp_users` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT 0,
  `display_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_users`
--

INSERT INTO `wp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'admin', '$P$BwJzul.8zpfeXgpyUNuGTCcJss1Ypg1', 'admin', 'leelamhair@gmail.com', 'http://localhost/booking', '2022-06-21 08:44:19', '', 0, 'admin'),
(2, 'test', '$P$BWI.2aTjqZMGH1ruzpJHox23JtkTr50', 'test', 'test@gmail.com', '', '2022-08-17 08:44:30', '1660725870:$P$B1Q091yuxBR3jTqCWNaS8VDADSwJ7s1', 0, 'test test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wp_booking`
--
ALTER TABLE `wp_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `comment_id` (`comment_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_comments`
--
ALTER TABLE `wp_comments`
  ADD PRIMARY KEY (`comment_ID`),
  ADD KEY `comment_post_ID` (`comment_post_ID`),
  ADD KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  ADD KEY `comment_date_gmt` (`comment_date_gmt`),
  ADD KEY `comment_parent` (`comment_parent`),
  ADD KEY `comment_author_email` (`comment_author_email`(10));

--
-- Indexes for table `wp_links`
--
ALTER TABLE `wp_links`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `link_visible` (`link_visible`);

--
-- Indexes for table `wp_options`
--
ALTER TABLE `wp_options`
  ADD PRIMARY KEY (`option_id`),
  ADD UNIQUE KEY `option_name` (`option_name`),
  ADD KEY `autoload` (`autoload`);

--
-- Indexes for table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_posts`
--
ALTER TABLE `wp_posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post_name` (`post_name`(191)),
  ADD KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  ADD KEY `post_parent` (`post_parent`),
  ADD KEY `post_author` (`post_author`);

--
-- Indexes for table `wp_service`
--
ALTER TABLE `wp_service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_terms`
--
ALTER TABLE `wp_terms`
  ADD PRIMARY KEY (`term_id`),
  ADD KEY `slug` (`slug`(191)),
  ADD KEY `name` (`name`(191));

--
-- Indexes for table `wp_term_relationships`
--
ALTER TABLE `wp_term_relationships`
  ADD PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  ADD KEY `term_taxonomy_id` (`term_taxonomy_id`);

--
-- Indexes for table `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  ADD PRIMARY KEY (`term_taxonomy_id`),
  ADD UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  ADD KEY `taxonomy` (`taxonomy`);

--
-- Indexes for table `wp_time`
--
ALTER TABLE `wp_time`
  ADD PRIMARY KEY (`time_id`);

--
-- Indexes for table `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  ADD PRIMARY KEY (`umeta_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_users`
--
ALTER TABLE `wp_users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_login_key` (`user_login`),
  ADD KEY `user_nicename` (`user_nicename`),
  ADD KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wp_booking`
--
ALTER TABLE `wp_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_comments`
--
ALTER TABLE `wp_comments`
  MODIFY `comment_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wp_links`
--
ALTER TABLE `wp_links`
  MODIFY `link_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_options`
--
ALTER TABLE `wp_options`
  MODIFY `option_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8711;

--
-- AUTO_INCREMENT for table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=722;

--
-- AUTO_INCREMENT for table `wp_posts`
--
ALTER TABLE `wp_posts`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=338;

--
-- AUTO_INCREMENT for table `wp_service`
--
ALTER TABLE `wp_service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=335;

--
-- AUTO_INCREMENT for table `wp_terms`
--
ALTER TABLE `wp_terms`
  MODIFY `term_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT for table `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  MODIFY `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT for table `wp_time`
--
ALTER TABLE `wp_time`
  MODIFY `time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  MODIFY `umeta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `wp_users`
--
ALTER TABLE `wp_users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
