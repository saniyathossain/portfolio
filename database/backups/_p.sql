/*
 Navicat Premium Data Transfer

 Source Server         : MySQL
 Source Server Type    : MySQL
 Source Server Version : 100113
 Source Host           : 127.0.0.1:3306
 Source Schema         : _p

 Target Server Type    : MySQL
 Target Server Version : 100113
 File Encoding         : 65001

 Date: 18/12/2018 16:37:28
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for p_companies
-- ----------------------------
DROP TABLE IF EXISTS `p_companies`;
CREATE TABLE `p_companies`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `company_location` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `company_link` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_by` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `updated_by` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of p_companies
-- ----------------------------
INSERT INTO `p_companies` VALUES (1, 'Runner Cyberlink Limited (RCL)', 'Mohammadpur, Dhaka', 'http://runnercyberlink.com/index', '1', NULL, '2018-12-18 11:36:29', NULL);
INSERT INTO `p_companies` VALUES (2, 'Optimum Solutions and Services (OSS)', 'Gulshan - 1, Dhaka', 'http://oss.com.bd', '1', NULL, '2018-12-18 11:36:29', NULL);
INSERT INTO `p_companies` VALUES (3, 'icddr,b ', 'Mohakhali, Dhaka', 'http://icddrb.org', '1', NULL, '2018-12-18 11:36:29', NULL);

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
  `created_by` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `updated_by` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of p_education
-- ----------------------------
INSERT INTO `p_education` VALUES (1, 1, 1, 'SSC', 'Science', '2003-01-01 00:00:00', '2005-01-01 00:00:00', b'0', 4.75, 5.00, 'Certificate Awarded', '1', NULL, '2018-12-18 13:56:59', NULL);
INSERT INTO `p_education` VALUES (2, 1, 2, 'HSC', 'Science', '2005-01-01 00:00:00', '2007-01-01 00:00:00', b'0', 4.50, 5.00, 'Certificate Awarded', '1', NULL, '2018-12-18 13:56:59', NULL);
INSERT INTO `p_education` VALUES (3, 1, 3, 'BSc', 'Electronics & Telecommunication Engineering (ETE) ', '2007-01-01 00:00:00', '2011-01-01 00:00:00', b'0', 2.91, 4.00, 'Certificate Awarded', '1', NULL, '2018-12-18 13:56:59', NULL);
INSERT INTO `p_education` VALUES (4, 1, 4, 'MSc', 'Computer Science', '2012-01-01 00:00:00', NULL, b'1', 3.00, 4.00, 'Studying (Last Semester)', '1', NULL, '2018-12-18 13:56:59', NULL);

-- ----------------------------
-- Table structure for p_institutes
-- ----------------------------
DROP TABLE IF EXISTS `p_institutes`;
CREATE TABLE `p_institutes`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `institute_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `institute_location` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `institute_link` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_by` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `updated_by` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of p_institutes
-- ----------------------------
INSERT INTO `p_institutes` VALUES (1, 'Motijheel Govt. Boys’ High School', 'Dhaka, Bangladesh', NULL, '1', NULL, '2018-12-18 11:41:54', NULL);
INSERT INTO `p_institutes` VALUES (2, 'St. Joseph Higher Secondary School', 'Dhaka, Bangladesh', NULL, '1', NULL, '2018-12-18 11:41:54', NULL);
INSERT INTO `p_institutes` VALUES (3, 'East West University', 'Dhaka, Bangladesh', NULL, '1', NULL, '2018-12-18 11:41:54', NULL);
INSERT INTO `p_institutes` VALUES (4, 'American International University-Bangladesh', 'Dhaka, Bangladesh', NULL, '1', NULL, '2018-12-18 11:41:54', NULL);

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
  `created_by` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `updated_by` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of p_professional_experience
-- ----------------------------
INSERT INTO `p_professional_experience` VALUES (1, 1, 1, 'PHP Programmer', '<ol><li>Experience of designing and developing responsive websites using HTML5, CSS3, PHP, jQuery, MySQL, CodeIgniter, Joomla.</li><li>Experience of working in social networking web application using elgg PHP framework.</li><li>Experience of developing responsive garments portal, company websites, e-commerce websites developed using CodeIgniter in back-end and bootstrap, ui-kit, jQuery, font-awesome, select2, chosen dropdown, ckeditor editor etc. in front-end.</li><li>Experience of developing Joomla websites, including version upgrade, website redesign using new template, plugin update etc.</li></ol>', '2012-09-01 11:28:42', '2014-02-27 11:28:58', b'0', '<i class=\"icon-pen2\"></i>', '1', NULL, '2018-12-18 11:29:25', NULL);
INSERT INTO `p_professional_experience` VALUES (2, 1, 2, 'Associate System Engineer', '<ol><li>Experience of developing a responsive news portal on WordPress integrated with CodeIgniter based administrative panel.</li><li>Experience of developing responsive SPAs, company websites, e-commerce websites, photography websites, job portal, news portals.</li><li>Experience of developing online study, exam, result management web application using Laravel in back-end, MySQL Database and Twitter Bootstrap, jQuery, Datatables, Telerik Kendo UI, Handlebars, Highcharts, Typeahead JS Text Autocomplete, select2 dropdown, date-time picker, time countdown, WYSIWYG text editor etc. in front-end.</li><li>Experience of developing domain registration automation web application with form wizard with validation, Google reCaptcha, dynamic access control, multiple database connections, dynamic charts, report generation, log management, SMS payment gateway integration, DNS server integration with using cronjobs on Laravel.</li><li>Experience of developing multi-tenant application using Laravel in back-end and MySQL Database.</li><li>Experience of working with MySQL database migration, events, query optimizing, using views, events, triggers.</li><li>Experience of website speed optimization for desktop and mobile views including avoiding render blocking, leverage browser caching, GZIP compression, asset files minification, Google page speed module etc.</li><li>Experience of developing cross platform mobile hybrid app using Angular, Cordova, PhoneGap in back-end and Ionic framework as front-end; web application using Laravel in back-end integrated with Angular in front-end with MySQL Database, Node JS based desktop application using electron, October CMS, Python Django Framework for learning purpose.</li></ol>', '2014-03-01 11:28:42', '2016-08-31 11:28:58', b'0', '<i class=\"icon-pen2\"></i>', '1', NULL, '2018-12-18 11:29:25', NULL);
INSERT INTO `p_professional_experience` VALUES (3, 1, 3, 'Consultant (Project based with Daffodil Computers Ltd.)', '<ol><li>Experience of working on Human Resource Information System (HRIS) on multiple modules: Performance Management Development System (PMDS), Training Development Information System (TDIS), E-recruitment, Scientific Ranking System, Certificate Management System including Role Based Access Control as a team leader; using Laravel in back-end and MSSQL Database.</li><li>Experience of working on E-recruitment web application using Laravel in back-end and MySQL Database.</li><li>Experience of working on Laravel based web application using Module Based Design Pattern implemented with Laravel Service Container, Abstraction, Encapsulation, Inheritance, Polymorphism, Traits etc. for enhancing code reusability, reducing code complexities; integrated with Vue, Typescript and Parcel Builder in front-end with MSSQL Database; also have experience of working on Laravel Mix, Webpack with Vue.</li><li>Experience of working with MSSQL Database; complex queries, stored procedures with dynamic queries, functions, views, triggers.</li><li>Experience of working on Docker for learning purpose.</li></ol>', '2016-09-01 11:28:42', NULL, b'1', '<i class=\"icon-pen2\"></i>', '1', NULL, '2018-12-18 11:29:25', NULL);

-- ----------------------------
-- Table structure for p_users
-- ----------------------------
DROP TABLE IF EXISTS `p_users`;
CREATE TABLE `p_users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `gender` int(11) NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_by` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `updated_by` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
