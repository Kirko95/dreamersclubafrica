/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MariaDB
 Source Server Version : 100139
 Source Host           : localhost:3306
 Source Schema         : dreamersclubafrica

 Target Server Type    : MariaDB
 Target Server Version : 100139
 File Encoding         : 65001

 Date: 30/12/2019 16:20:22
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for notification_emails
-- ----------------------------
DROP TABLE IF EXISTS `notification_emails`;
CREATE TABLE `notification_emails`  (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(170) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` datetime(6) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
