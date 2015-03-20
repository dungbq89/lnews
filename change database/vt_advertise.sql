/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : news_portal

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2015-03-20 01:06:13
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `vt_advertise`
-- ----------------------------
DROP TABLE IF EXISTS `vt_advertise`;
CREATE TABLE `vt_advertise` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `location_ids` int(11) DEFAULT NULL,
  `location_type` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of vt_advertise
-- ----------------------------
INSERT INTO `vt_advertise` VALUES ('1', 'Quảng cáo top', '/themes/ipress/images/ads.jpg', null, 'top', 'http://google.com.vn', '1', '1');
INSERT INTO `vt_advertise` VALUES ('2', 'Quảng cáo phải', '/themes/ipress/images/ads2.jpg', null, 'right', 'http://google.com.vn', '2', '1');
INSERT INTO `vt_advertise` VALUES ('3', 'Quảng cáo nhỏ 1', '/themes/ipress/images/ads2.jpg', null, 'small', 'http://google.com.vn', '1', '1');
INSERT INTO `vt_advertise` VALUES ('4', 'Quảng cáo nhỏ 2', '/themes/ipress/images/ads2.jpg', null, 'small', 'http://google.com.vn', '2', '1');
INSERT INTO `vt_advertise` VALUES ('5', 'Quảng cáo nhỏ 3', '/themes/ipress/images/ads2.jpg', null, 'small', 'http://google.com.vn', '3', '1');
