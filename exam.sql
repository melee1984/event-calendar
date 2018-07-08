/*
 Navicat Premium Data Transfer

 Source Server         : localhost 8889
 Source Server Type    : MySQL
 Source Server Version : 50628
 Source Host           : localhost
 Source Database       : exam

 Target Server Type    : MySQL
 Target Server Version : 50628
 File Encoding         : utf-8

 Date: 07/08/2018 23:06:50 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `tbl_calendar_event`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_calendar_event`;
CREATE TABLE `tbl_calendar_event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `date_from` datetime NOT NULL,
  `date_to` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `tbl_calendar_event`
-- ----------------------------
BEGIN;
INSERT INTO `tbl_calendar_event` VALUES ('1', 'Submission of Exam', '2018-07-06 00:00:00', '2018-07-10 00:00:00'), ('2', 'Test Result', '2018-07-10 00:00:00', '2018-07-10 00:00:00');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
