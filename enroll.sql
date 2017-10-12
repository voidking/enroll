/*
Navicat MySQL Data Transfer

Source Server         : laragon
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : enroll

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-10-12 13:11:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `en_student`
-- ----------------------------
DROP TABLE IF EXISTS `en_student`;
CREATE TABLE `en_student` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL COMMENT '姓名',
  `gender` varchar(2) NOT NULL COMMENT '性别',
  `grade` varchar(32) DEFAULT NULL COMMENT '年级',
  `education` varchar(32) DEFAULT NULL COMMENT '学历',
  `school` varchar(32) DEFAULT NULL COMMENT '学校',
  `institute` varchar(32) DEFAULT NULL COMMENT '学院',
  `major` varchar(32) DEFAULT NULL COMMENT '专业',
  `bus` varchar(2) DEFAULT NULL COMMENT '是否需要校车',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of en_student
-- ----------------------------
INSERT INTO `en_student` VALUES ('1', '郝锦', '男', '研一', '硕士', '东北师范大学', '软件学院', '软件工程', '否');
