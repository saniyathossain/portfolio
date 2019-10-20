/*
 Navicat Premium Data Transfer

 Source Server         : Docker MySQL
 Source Server Type    : MySQL
 Source Server Version : 80017
 Source Host           : 192.168.99.105:3006
 Source Schema         : _p

 Target Server Type    : MySQL
 Target Server Version : 80017
 File Encoding         : 65001

 Date: 19/10/2019 13:58:49
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cache
-- ----------------------------
DROP TABLE IF EXISTS `cache`;
CREATE TABLE `cache`  (
  `key` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL,
  UNIQUE INDEX `cache_key_unique`(`key`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2018_08_08_100000_create_telescope_entries_table', 1);
INSERT INTO `migrations` VALUES (2, '2019_09_21_094452_create_cache_table', 1);

-- ----------------------------
-- Table structure for p_companies
-- ----------------------------
DROP TABLE IF EXISTS `p_companies`;
CREATE TABLE `p_companies`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `company_location` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `company_link` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `status` smallint(1) NULL DEFAULT NULL,
  `created_by` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `updated_by` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of p_companies
-- ----------------------------
INSERT INTO `p_companies` VALUES (1, 'Runner Cyberlink Limited (RCL)', 'Mohammadpur, Dhaka', 'http://runnercyberlink.com/index', 1, '1', NULL, '2018-12-18 11:36:29', NULL);
INSERT INTO `p_companies` VALUES (2, 'Optimum Solutions and Services (OSS)', 'Gulshan - 1, Dhaka', 'http://oss.com.bd', 1, '1', NULL, '2018-12-18 11:36:29', NULL);
INSERT INTO `p_companies` VALUES (3, 'icddr,b ', 'Mohakhali, Dhaka', 'http://icddrb.org', 1, '1', NULL, '2018-12-18 11:36:29', NULL);
INSERT INTO `p_companies` VALUES (4, 'Grameenphone', 'GP House, Bashundhara, Dhaka, Bangladesh', 'http://grameenphone.com', 1, '1', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for p_education
-- ----------------------------
DROP TABLE IF EXISTS `p_education`;
CREATE TABLE `p_education`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NULL DEFAULT NULL,
  `institute_id` int(11) NULL DEFAULT NULL,
  `education_level` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `education_department` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `start_date` datetime(0) NULL DEFAULT NULL,
  `end_date` datetime(0) NULL DEFAULT NULL,
  `continuing` bit(1) NULL DEFAULT b'0',
  `cgpa` decimal(10, 2) NULL DEFAULT NULL,
  `cgpa_out_of` decimal(10, 2) NULL DEFAULT NULL,
  `current_status` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `status` smallint(1) NULL DEFAULT NULL,
  `created_by` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `updated_by` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of p_education
-- ----------------------------
INSERT INTO `p_education` VALUES (1, 1, 1, 'SSC', 'Science', '2003-01-01 00:00:00', '2005-01-01 00:00:00', b'0', 4.75, 5.00, 'Certificate Awarded', 1, '1', NULL, '2018-12-18 13:56:59', NULL);
INSERT INTO `p_education` VALUES (2, 1, 2, 'HSC', 'Science', '2005-01-01 00:00:00', '2007-01-01 00:00:00', b'0', 4.50, 5.00, 'Certificate Awarded', 1, '1', NULL, '2018-12-18 13:56:59', NULL);
INSERT INTO `p_education` VALUES (3, 1, 3, 'BSc', 'Electronics & Telecommunication Engineering (ETE) ', '2007-01-01 00:00:00', '2011-01-01 00:00:00', b'0', 2.91, 4.00, 'Certificate Awarded', 1, '1', NULL, '2018-12-18 13:56:59', NULL);
INSERT INTO `p_education` VALUES (4, 1, 4, 'MSc', 'Computer Science', '2012-01-01 00:00:00', NULL, b'1', 3.00, 4.00, 'Studying (Last Semester)', 0, '1', NULL, '2018-12-18 13:56:59', NULL);

-- ----------------------------
-- Table structure for p_institutes
-- ----------------------------
DROP TABLE IF EXISTS `p_institutes`;
CREATE TABLE `p_institutes`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `institute_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `institute_location` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `institute_link` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `status` smallint(1) NULL DEFAULT NULL,
  `created_by` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `updated_by` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of p_institutes
-- ----------------------------
INSERT INTO `p_institutes` VALUES (1, 'Motijheel Govt. Boys’ High School', 'Dhaka, Bangladesh', NULL, 1, '1', NULL, '2018-12-18 11:41:54', NULL);
INSERT INTO `p_institutes` VALUES (2, 'St. Joseph Higher Secondary School', 'Dhaka, Bangladesh', NULL, 1, '1', NULL, '2018-12-18 11:41:54', NULL);
INSERT INTO `p_institutes` VALUES (3, 'East West University', 'Dhaka, Bangladesh', NULL, 1, '1', NULL, '2018-12-18 11:41:54', NULL);
INSERT INTO `p_institutes` VALUES (4, 'American International University-Bangladesh', 'Dhaka, Bangladesh', NULL, 0, '1', NULL, '2018-12-18 11:41:54', NULL);

-- ----------------------------
-- Table structure for p_professional_experience
-- ----------------------------
DROP TABLE IF EXISTS `p_professional_experience`;
CREATE TABLE `p_professional_experience`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NULL DEFAULT NULL,
  `company_id` int(11) NULL DEFAULT NULL,
  `post_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `experience` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `start_date` datetime(0) NULL DEFAULT NULL,
  `end_date` datetime(0) NULL DEFAULT NULL,
  `continuing` bit(1) NULL DEFAULT b'0',
  `icon` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `status` smallint(1) NULL DEFAULT NULL,
  `created_by` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `updated_by` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of p_professional_experience
-- ----------------------------
INSERT INTO `p_professional_experience` VALUES (1, 1, 1, 'PHP Programmer', '<ol><li>Experience of designing and developing responsive websites using HTML5, CSS3, PHP, jQuery, MySQL, CodeIgniter, Joomla.</li><li>Experience of working in social networking web application using elgg PHP framework.</li><li>Experience of developing responsive garments portal, company websites, e-commerce websites developed using CodeIgniter in back-end and bootstrap, ui-kit, jQuery, font-awesome, select2, chosen dropdown, ckeditor editor etc. in front-end.</li><li>Experience of developing Joomla websites, including version upgrade, website redesign using new template, plugin update etc.</li></ol>', '2012-09-01 11:28:42', '2014-02-27 11:28:58', b'0', '<i class=\"icon-pen2\"></i>', 1, '1', NULL, '2018-12-18 11:29:25', NULL);
INSERT INTO `p_professional_experience` VALUES (2, 1, 2, 'Associate System Engineer', '<ol><li>Experience of developing a responsive news portal on WordPress integrated with CodeIgniter based administrative panel.</li><li>Experience of developing responsive SPAs, company websites, e-commerce websites, photography websites, job portal, news portals.</li><li>Experience of developing online study, exam, result management web application using Laravel in back-end, MySQL Database and Twitter Bootstrap, jQuery, Datatables, Telerik Kendo UI, Handlebars, Highcharts, Typeahead JS Text Autocomplete, select2 dropdown, date-time picker, time countdown, WYSIWYG text editor etc. in front-end.</li><li>Experience of developing domain registration automation web application with form wizard with validation, Google reCaptcha, dynamic access control, multiple database connections, dynamic charts, report generation, log management, SMS payment gateway integration, DNS server integration with using cronjobs on Laravel.</li><li>Experience of developing multi-tenant application using Laravel in back-end and MySQL Database.</li><li>Experience of working with MySQL database migration, events, query optimizing, using views, events, triggers.</li><li>Experience of website speed optimization for desktop and mobile views including avoiding render blocking, leverage browser caching, GZIP compression, asset files minification, Google page speed module etc.</li><li>Experience of developing cross platform mobile hybrid app using Angular, Cordova, PhoneGap in back-end and Ionic framework as front-end; web application using Laravel in back-end integrated with Angular in front-end with MySQL Database, Node JS based desktop application using electron, October CMS, Python Django Framework for learning purpose.</li></ol>', '2014-03-01 11:28:42', '2016-08-31 11:28:58', b'0', '<i class=\"icon-pen2\"></i>', 1, '1', NULL, '2018-12-18 11:29:25', NULL);
INSERT INTO `p_professional_experience` VALUES (3, 1, 3, 'Consultant (Project based with Daffodil Computers Ltd.)', '<ol><li>Experience of working on Human Resource Information System (HRIS) on multiple modules: Performance Management Development System (PMDS), Training Development Information System (TDIS), E-recruitment, Scientific Ranking System, Certificate Management System including Role Based Access Control as a team leader; using Laravel in back-end and MSSQL Database.</li><li>Experience of working on E-recruitment web application using Laravel in back-end and MySQL Database.</li><li>Experience of working on Laravel based web application using Module Based Design Pattern implemented with Laravel Service Container, Abstraction, Encapsulation, Inheritance, Polymorphism, Traits etc. for enhancing code reusability, reducing code complexities; integrated with Vue, Typescript and Parcel Builder in front-end with MSSQL Database; also have experience of working on Laravel Mix, Webpack with Vue.</li><li>Experience of working with MSSQL Database; complex queries, stored procedures with dynamic queries, functions, views, triggers.</li><li>Experience of working on Docker for learning purpose.</li></ol>', '2016-09-01 11:28:42', '2019-01-10 11:28:42', b'0', '<i class=\"icon-pen2\"></i>', 1, '1', NULL, '2018-12-18 11:29:25', NULL);
INSERT INTO `p_professional_experience` VALUES (4, 1, 4, 'Software Engineer', '<ol><li>Experience of working on Warehouse, Logistics management system along with dynamic billing management system, user defined workflow journey etc. in CakePHP, RESTful API in back-end, jQuery, Vue, Maps (Openstreet Maps), Telerik Kendo UI in front-end.</li></ol>', '2019-01-13 11:28:42', NULL, b'1', '<i class=\"icon-pen2\"></i>', 1, '1', NULL, '2019-02-08 21:10:04', NULL);

-- ----------------------------
-- Table structure for p_technical_skills
-- ----------------------------
DROP TABLE IF EXISTS `p_technical_skills`;
CREATE TABLE `p_technical_skills`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NULL DEFAULT NULL,
  `name` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `icon` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `percentage` int(4) NULL DEFAULT NULL,
  `status` tinyint(1) NULL DEFAULT NULL,
  `created_by` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `updated_by` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of p_technical_skills
-- ----------------------------
INSERT INTO `p_technical_skills` VALUES (1, 1, 'PHP', '<i class=\"fab fa-php\"></i>', 80, 1, NULL, NULL, NULL, NULL);
INSERT INTO `p_technical_skills` VALUES (2, 1, 'Laravel', '<i class=\"fab fa-laravel\"></i>', 90, 1, NULL, NULL, NULL, NULL);
INSERT INTO `p_technical_skills` VALUES (3, 1, 'CakePHP', '<i class=\"fab fa-php\"></i>', 80, 1, NULL, NULL, NULL, NULL);
INSERT INTO `p_technical_skills` VALUES (4, 1, 'MySQL', '<i class=\"fas fa-database\"></i>', 75, 1, NULL, NULL, NULL, NULL);
INSERT INTO `p_technical_skills` VALUES (5, 1, 'JavaScript', '<i class=\"fab fa-js\"></i>', 70, 1, NULL, NULL, NULL, NULL);
INSERT INTO `p_technical_skills` VALUES (6, 1, 'Vue JS', '<i class=\"fab fa-vuejs\"></i>', 70, 1, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for p_users
-- ----------------------------
DROP TABLE IF EXISTS `p_users`;
CREATE TABLE `p_users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `shortname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `designation` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `phone` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `about` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `gender` int(11) NULL DEFAULT NULL,
  `skills` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `status` smallint(1) NULL DEFAULT NULL,
  `github_link` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `linkedin_link` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_by` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `updated_by` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of p_users
-- ----------------------------
INSERT INTO `p_users` VALUES (1, 'Saniyat Hossain', 'Saniyat', 'Web Developer', 'saniyathossain', 'saniyat1000@gmail.com', NULL, '+880-1676-098-013', 'I am a solutions-focused Web Developer with experience in designing, developing rich web applications, websites and databases. Consistent and reliable with strong technical knowledge and enthusiasm for learning and adapting new technology to expand my expertise and work with creativity, honesty, sincerity and to understand my true potential.', NULL, '\r\n<ol>\r\n	<li><strong>OS</strong>: Microsoft Windows, Linux (Ubuntu, CentOS), Virtual OS (VMware, VirtualBox).</li>\r\n	<li><strong>Programming Languages</strong>: PHP, JavaScript.</li>\r\n	<li><strong>SDLC</strong>: Agile, Scrum.</li>\r\n	<li><strong>Back-end</strong>: OOP, PSR, MVC (Laravel, CakePHP, CodeIgniter), Database ORM (Eloquent, CakePHP ORM), CMS (WordPress, Joomla), Micro-framework (Lumen), Log (MonoLog), RESTful API, SMS payment gateway Integration, Cache, Cronjob, Composer.</li>\r\n	<li><strong>Front-end</strong>: Library (jQuery), Framework (Vue), HTML5, CSS3, Twitter Bootstrap, Responsive Design, DataTables, Telerik Kendo UI, HighCharts, Handsontable etc.</li>\r\n	<li><strong>Security & Optimization</strong>: Application Security, HTTP Header Security, Avoid render blocking, leverage browser caching, GZIP Compression, HTTP/2 Server Push.</li>\r\n	<li><strong>Database</strong>: Databases (MySQL, MSSQL), Database Design, Query Optimizations, Indexing, Views, Stored Procedures, Functions, Triggers, Events.</li>\r\n	<li><strong>Template Engine</strong>: Blade, Twig.</li>\r\n	<li><strong>Version Control</strong>: SVN, GIT.</li>\r\n	<li><strong>Repositories</strong>: GitHub, GitLab, BitBucket.</li>\r\n	<li><strong>DevOps</strong>: Docker.</li>\r\n	<li>\r\n		<strong>Software</strong>:\r\n		<ol>\r\n			<li><strong>Coding</strong>: Visual Studio Code, Sublime Text, Jetbrains PhpStorm. </li>\r\n			<li><strong>Database</strong>: Premiumsoft Navicat, Jetbrains DataGrip, Adminer, Microsoft SQL Server Management Studio, Apex SQL.</li>\r\n			<li><strong>API</strong>: Postman, Insomnia, Swagger.</li>\r\n			<li><strong>Version Control</strong>: TortoiseSVN, Sublime Merge, Sourcetree, TortoiseGIT.</li>\r\n			<li><strong>Server</strong>: PuTTY, WinSCP, FileZilla.</li>\r\n		</ol>\r\n	</li>\r\n	<li><strong>Development & Learning</strong>: Unit Testing, Docker, Kubernetes, CI-CD, Jenkins, Sonarqube, Redis, Elasticsearch, Vue, Typescript, Python.</li>\r\n	<li><strong>Experiences and Responsibilities</strong>: PHP Web Developer, Team Leader.</li>\r\n</ol>', 1, 'github.com/saniyathossain', 'linkedin.com/in/saniyathossain', NULL, NULL, NULL, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
