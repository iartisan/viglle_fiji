-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2014 at 11:24 AM
-- Server version: 5.6.15
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `viglle_fiji`
--

-- --------------------------------------------------------

--
-- Table structure for table `assigned_roles`
--

CREATE TABLE IF NOT EXISTS `assigned_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `assigned_roles_user_id_index` (`user_id`),
  KEY `assigned_roles_role_id_index` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `assigned_roles`
--

INSERT INTO `assigned_roles` (`id`, `user_id`, `role_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 4, 2),
(4, 5, 2),
(5, 6, 2),
(6, 7, 2),
(7, 8, 2),
(8, 9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE IF NOT EXISTS `hotels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) unsigned NOT NULL,
  `pic1_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pic2_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pic3_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pic4_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `name`, `content`, `price`, `pic1_url`, `pic2_url`, `pic3_url`, `pic4_url`, `created_at`, `updated_at`) VALUES
(2, 'hotel1', '斐济位于西南太平洋中心,地理位置重要,是南太平洋地区的重要交通枢纽。陆地总面积1.8万多平方公里,海洋水域面积129平方公里,由332个岛屿组成，多为珊瑚礁环绕的火山岛，其中106个岛有人居住。年平均气温为22c~30c。', 1231, 'site/hotels/hotel11392366462/0', 'site/hotels/hotel11392366462/1', 'site/hotels/hotel11392366462/2', 'site/hotels/hotel11392366462/3', '2014-02-14 00:27:43', '2014-02-14 00:27:43'),
(3, 'faefawefa', 'Wakaya一直以来都是传说中斐济最顶级的海岛，它一直是美国名流的度假首选，比尔盖茨在这里度的蜜月，好莱坞影星米歇尔.菲佛、罗素.克罗、尼克.基德曼都曾慕名而来......', 1111, 'site/hotels/faefawefa1392366502/0', 'site/hotels/faefawefa1392366502/1', 'site/hotels/faefawefa1392366502/2', 'site/hotels/faefawefa1392366502/3', '2014-02-14 00:28:23', '2014-02-14 00:28:23'),
(4, 'fawefawe', 'fajoeiwjfaoiwjef', 12345, 'site/hotels/fawefawe1392366543/0', 'site/hotels/fawefawe1392366543/1', 'site/hotels/fawefawe1392366543/2', 'site/hotels/fawefawe1392366543/3', '2014-02-14 00:29:04', '2014-02-14 00:29:04'),
(5, '1feaqfqf', 'jfaoiwejfioajwefioa', 5555, 'site/hotels/1feaqfqf1392366590/0', 'site/hotels/1feaqfqf1392366590/1', 'site/hotels/1feaqfqf1392366590/2', 'site/hotels/1feaqfqf1392366590/3', '2014-02-14 00:29:51', '2014-02-14 00:29:51'),
(6, 'hotel5', 'fajwioefjoiawef', 123, 'site/hotels/hotel51392366625/0', 'site/hotels/hotel51392366625/1', 'site/hotels/hotel51392366625/2', 'site/hotels/hotel51392366625/3', '2014-02-14 00:30:26', '2014-02-14 00:30:26');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_pics`
--

CREATE TABLE IF NOT EXISTS `hotel_pics` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `hotel_id` int(10) unsigned NOT NULL,
  `pic_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `travel_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2013_02_05_024934_confide_setup_users_table', 1),
('2013_02_05_043505_create_posts_table', 1),
('2013_02_05_044505_create_comments_table', 1),
('2013_02_08_031702_entrust_setup_tables', 1),
('2013_05_21_024934_entrust_permissions', 1),
('2014_01_10_014002_create_hotel_pics_table', 1),
('2014_01_13_031331_create_tickets_table', 1),
('2014_01_16_154242_create_hotels_table', 1),
('2014_01_18_162306_add_city_telephone_intro_avatar_to_users', 1),
('2014_01_18_202010_create_user_pic_table', 1),
('2014_01_21_142742_create_travel_table', 1),
('2014_01_23_152411_add_filename_filesize_to_Userpic_table', 1),
('2014_02_16_053911_create_city_avatar_to_users_table', 2),
('2014_02_17_031213_create_usercomments_table', 3),
('2014_02_18_054255_create_mark_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reminders`
--

CREATE TABLE IF NOT EXISTS `password_reminders` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`),
  UNIQUE KEY `permissions_display_name_unique` (`display_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`) VALUES
(1, 'manage_blogs', 'manage blogs'),
(2, 'manage_posts', 'manage posts'),
(3, 'manage_comments', 'manage comments'),
(4, 'manage_users', 'manage users'),
(5, 'manage_roles', 'manage roles'),
(6, 'post_comment', 'post comment'),
(7, 'user_comment', 'user comment');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE IF NOT EXISTS `permission_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permission_role_permission_id_role_id_unique` (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 6, 2),
(8, 7, 1),
(9, 7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2014-02-13 12:42:54', '2014-02-13 12:42:54'),
(2, 'comment', '2014-02-13 12:42:54', '2014-02-13 12:42:54');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE IF NOT EXISTS `tickets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `departure` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `departure_time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `destination_time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `departure_airport` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `destination_airport` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `flight_num` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `discount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `discount_price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `economy_price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `travels`
--

CREATE TABLE IF NOT EXISTS `travels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `mark` int(11) NOT NULL DEFAULT '0',
  `has_pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'http://placehold.it/300x200',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `travels`
--

INSERT INTO `travels` (`id`, `user_id`, `title`, `content`, `mark`, `has_pic`, `created_at`, `updated_at`) VALUES
(1, 1, 'jijio', 'klkmlkmkl', 17, 'http://placehold.it/300x200"', '2014-02-15 01:30:33', '2014-02-20 23:24:53'),
(2, 3, '测试攻略', 'iojfiawoejofiajweoijfa<img src="/site/users/3/1392599478_origin.jpeg" alt="" />', 0, 'http://placehold.it/300x200', '2014-02-16 17:11:21', '2014-02-16 17:11:21'),
(3, 1, 'fawefawe', 'fawefawef', 0, 'http://placehold.it/300x200', '2014-02-17 07:15:20', '2014-02-17 07:15:20'),
(4, 1, 'fawefawef', 'fawefawef', 1, 'http://placehold.it/300x200', '2014-02-17 07:15:42', '2014-02-20 23:24:51'),
(5, 1, '测试一些功能', '<p>\r\n	测试文字，\r\n</p>\r\n<p>\r\n	测试图片<img src="/site/users/1/1392704073_origin.jpeg" alt="" />\r\n</p>', 1, 'http://placehold.it/300x200', '2014-02-17 22:14:40', '2014-02-20 23:24:50'),
(6, 1, '再次测试', '发沉<img src="/site/users/1/1392452562_origin.jpeg" alt="" />', 2, '/site/users/1/1392452562_origin.jpeg', '2014-02-17 22:36:21', '2014-02-20 23:24:49'),
(7, 1, '赞啊赞啊。。。快点开始动笔吧', '<p>\r\n	发出w发完e风w着<img src="/site/users/1/1392444259_origin.jpeg" alt="" />\r\n</p>\r\n<p>\r\n	发完晨i啊<img src="/site/users/1/1392704073_origin.jpeg" alt="" />\r\n</p>', 0, '/site/users/1/1392444259_origin.jpeg', '2014-02-17 22:38:50', '2014-02-17 22:38:50'),
(8, 1, '就f直接e放i啊我e', 'i家fi卓我e风<img src="/site/users/1/1392704073_origin.jpeg" alt="" />', 6, '/site/users/1/1392704073_origin.jpeg', '2014-02-17 22:39:18', '2014-02-18 19:15:40'),
(9, 1, 'test', '哈哈<img src="/site/users/1/1392713172_origin.jpeg" alt="" />', 19, '/site/users/1/1392713172_origin.jpeg', '2014-02-18 00:46:15', '2014-03-20 12:09:35');

-- --------------------------------------------------------

--
-- Table structure for table `usercomments`
--

CREATE TABLE IF NOT EXISTS `usercomments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `owner_id` int(10) unsigned NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `usercomments`
--

INSERT INTO `usercomments` (`id`, `user_id`, `owner_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'faefawef', '2014-02-17 05:18:50', '2014-02-17 05:18:50'),
(2, 1, 2, 'fawefaewf', '2014-02-17 05:19:35', '2014-02-17 05:19:35'),
(3, 1, 3, 'faewf', '2014-02-17 05:45:17', '2014-02-17 05:45:17'),
(4, 1, 3, 'faefaewf', '2014-02-17 05:47:22', '2014-02-17 05:47:22'),
(5, 3, 1, 'fawefawef', '2014-02-17 05:53:50', '2014-02-17 05:53:50'),
(6, 3, 1, 'gwergwerg', '2014-02-17 05:55:14', '2014-02-17 05:55:14'),
(7, 2, 1, 'faefewaf', '2014-02-17 05:56:30', '2014-02-17 05:56:30'),
(8, 1, 1, 'j;joopkopk', '2014-02-17 06:02:43', '2014-02-17 06:02:43'),
(9, 1, 1, 'faewfae', '2014-02-17 07:37:00', '2014-02-17 07:37:00'),
(10, 1, 1, 'hfhf', '2014-02-20 22:18:29', '2014-02-20 22:18:29'),
(11, 1, 1, 'hehe', '2014-02-20 22:18:39', '2014-02-20 22:18:39'),
(12, 1, 1, '0.0', '2014-03-05 08:02:46', '2014-03-05 08:02:46');

-- --------------------------------------------------------

--
-- Table structure for table `userpics`
--

CREATE TABLE IF NOT EXISTS `userpics` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `pic_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `filesize` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `filetype` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `userpics`
--

INSERT INTO `userpics` (`id`, `user_id`, `created_at`, `updated_at`, `pic_url`, `filename`, `filesize`, `filetype`) VALUES
(1, 1, '2014-02-14 22:04:00', '2014-02-14 22:04:00', 'site/users/1', '1392444240_origin.jpeg', '130024', 'jpeg'),
(2, 1, '2014-02-14 22:04:19', '2014-02-14 22:04:19', 'site/users/1', '1392444259_origin.jpeg', '130024', 'jpeg'),
(3, 1, '2014-02-15 00:22:21', '2014-02-15 00:22:21', 'site/users/1', '1392452540_origin.jpeg', '130024', 'jpeg'),
(4, 1, '2014-02-15 00:22:42', '2014-02-15 00:22:42', 'site/users/1', '1392452562_origin.jpeg', '130024', 'jpeg'),
(5, 1, '2014-02-15 00:27:56', '2014-02-15 00:27:56', 'site/users/1', '1392452875_origin.jpeg', '130024', 'jpeg'),
(6, 1, '2014-02-15 00:28:25', '2014-02-15 00:28:25', 'site/users/1', '1392452905_origin.jpeg', '130024', 'jpeg'),
(7, 1, '2014-02-15 00:29:02', '2014-02-15 00:29:02', 'site/users/1', '1392452942_origin.jpeg', '130024', 'jpeg'),
(8, 1, '2014-02-15 00:32:20', '2014-02-15 00:32:20', 'site/users/1', '1392453140_origin.jpeg', '130024', 'jpeg'),
(9, 1, '2014-02-15 00:33:33', '2014-02-15 00:33:33', 'site/users/1', '1392453213_origin.jpeg', '130024', 'jpeg'),
(10, 3, '2014-02-16 17:11:18', '2014-02-16 17:11:18', 'site/users/3', '1392599478_origin.jpeg', '130024', 'jpeg'),
(11, 1, '2014-02-17 22:14:34', '2014-02-17 22:14:34', 'site/users/1', '1392704073_origin.jpeg', '186480', 'jpeg'),
(12, 1, '2014-02-18 00:46:12', '2014-02-18 00:46:12', 'site/users/1', '1392713172_origin.jpeg', '224053', 'jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `confirmation_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '深圳',
  `telephone` varchar(11) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `intro` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '没有填写个人简介',
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'http://placehold.it/230x230',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `confirmation_code`, `confirmed`, `created_at`, `updated_at`, `city`, `telephone`, `intro`, `avatar`) VALUES
(1, 'admin', 'admin@example.org', '$2y$10$r1JqwfPfRtbVdXm0sPrJjuyCMfU1hEpAY1E8fBE9DQLiC/fT9VyDi', 'e65285dbcec09d508e9eed89e6a3405a', 1, '2014-02-13 12:42:54', '2014-02-17 18:08:31', '深圳', '18576405571', '好困啊', 'http://demo.fiji/site/users/1/1392453213_origin.jpeg'),
(2, 'user', 'user@example.org', '$2y$10$COVOUrcxRol74MRoRgVUnOzagqsDR5IZOr0jF3hTkMp2JRzNgxTiu', 'b7fef63f23231ed1c0b036c4d6ee21ba', 1, '2014-02-13 12:42:54', '2014-02-13 12:42:54', '深圳', '0', '没有填写个人简介', 'http://placehold.it/230x230'),
(3, 'sevendoors', '754047126@qq.com', '$2y$10$eD7ml3J8aItczAeu6AnOUOsUsFnYCKriCbx5dfaBHSmAmvb9dlrJe', 'ccfe6c16498c4e2f58fd8802e850c433', 1, '2014-02-16 17:00:39', '2014-02-16 17:00:39', 'faiejf', '75404712', 'fjoiejf', 'http://placehold.it/230x230'),
(4, '漫天小星星', 'mtxxx@viglle.com', '$2y$10$3.sPgQUokDAbt/umHO8qXeSYVxGr1beN8o2XUl5aRx4GRYiVyzKpO', 'd09ac370322a47a9103aff4a9163bece', 1, '2014-03-20 05:23:16', '2014-03-20 05:23:16', '深圳', '0', '没有填写个人简介', 'http://placehold.it/230x230'),
(5, 'Sexy猫女', 'smn@viglle.com', '$2y$10$.HNdU9mS2ZZHhalsK.zpcusCAN3.oTkIWTwUGU91gVOM3ZKgDPCAK', '9ca19b03353b6313621da61f6762ca73', 1, '2014-03-20 05:24:00', '2014-03-20 05:24:00', '深圳', '0', '没有填写个人简介', 'http://placehold.it/230x230'),
(6, '花汁染指', 'hzrz@viglle.com', '$2y$10$2W0H1uuu0QrolrK1N0vLy.lQ45q5cPCse4uG1DM9fEVqSK72HDnBa', '9d513c3d57b602cb7298037cb4cbca7c', 1, '2014-03-20 05:24:35', '2014-03-20 05:24:35', '深圳', '0', '没有填写个人简介', 'http://placehold.it/230x230'),
(7, '漫天大星星', 'mtdxx@viglle.com', '$2y$10$9ktrcLIu8FYnPr65McFRxufFJUIohkPd1wdqy9DC5EzTRMBhytpx6', '7bdee1740fe1c20232d34b11006a9a97', 1, '2014-03-20 05:25:07', '2014-03-20 05:25:07', '深圳', '0', '没有填写个人简介', 'http://placehold.it/230x230'),
(8, 'Sexy猫男', 'sml@viglle.com', '$2y$10$uhAWKrz80tcJN4.xBi3Rk.R9cGEDhndFU7LllabiC9UInc4DCwdKK', '1beb9d3b69dfcfec0b12347fec7bd971', 1, '2014-03-20 05:25:49', '2014-03-20 05:25:49', '深圳', '0', '没有填写个人简介', 'http://placehold.it/230x230'),
(9, '花汁折指', 'hzzz@viglle.com', '$2y$10$0VGi1UC81Sq8eh1zS67dw..QZ7AjNs/1ijNA.r0yP0sdR2ry4J1.O', '3b64e8df42b9e003911859d2d42f373f', 1, '2014-03-20 05:26:27', '2014-03-20 05:26:27', '深圳', '0', '没有填写个人简介', 'http://placehold.it/230x230');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assigned_roles`
--
ALTER TABLE `assigned_roles`
  ADD CONSTRAINT `assigned_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `assigned_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`),
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
