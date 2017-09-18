/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : enroll

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2017-05-02 16:55:23
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `en_student`
-- ----------------------------
DROP TABLE IF EXISTS `en_student`;
CREATE TABLE `en_student` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `grade` varchar(32) DEFAULT NULL,
  `education` varchar(32) DEFAULT NULL,
  `school` varchar(32) DEFAULT NULL,
  `institute` varchar(32) DEFAULT NULL,
  `major` varchar(32) DEFAULT NULL,
  `bus` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of en_student
-- ----------------------------
INSERT INTO `en_student` VALUES ('1', '郝锦', '男', '研一', '硕士', '东北师范大学', '软件学院', '软件工程', '否');
