/*
Navicat MySQL Data Transfer

Source Server         : 本机
Source Server Version : 50726
Source Host           : localhost:3306
Source Database       : xsb

Target Server Type    : MYSQL
Target Server Version : 50726
File Encoding         : 65001

Date: 2022-06-19 14:15:39
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for course
-- ----------------------------
DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
  `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '课程号',
  `cname` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '课程名',
  `term` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '学期',
  `credit` int(10) NOT NULL COMMENT '学分',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of course
-- ----------------------------
INSERT INTO `course` VALUES ('c01', 'HTML', '1', '3');
INSERT INTO `course` VALUES ('c02', 'CSS', '1', '3');
INSERT INTO `course` VALUES ('c03', 'javascript', '1', '5');
INSERT INTO `course` VALUES ('c04', 'php', '2', '4');
INSERT INTO `course` VALUES ('c05', 'mysql', '2', '3');
INSERT INTO `course` VALUES ('c06', 'thinkphp', '3', '6');
INSERT INTO `course` VALUES ('c07', 'vue', '4', '3');

-- ----------------------------
-- Table structure for major
-- ----------------------------
DROP TABLE IF EXISTS `major`;
CREATE TABLE `major` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '专业id',
  `major` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '专业名',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of major
-- ----------------------------
INSERT INTO `major` VALUES ('1', '计算机');
INSERT INTO `major` VALUES ('2', '土木工程');
INSERT INTO `major` VALUES ('3', '生物技术');
INSERT INTO `major` VALUES ('4', '法律');
INSERT INTO `major` VALUES ('5', '数学');
INSERT INTO `major` VALUES ('6', '二人转');
INSERT INTO `major` VALUES ('7', '音乐');

-- ----------------------------
-- Table structure for sc
-- ----------------------------
DROP TABLE IF EXISTS `sc`;
CREATE TABLE `sc` (
  `sid` int(11) NOT NULL COMMENT '学生id',
  `cid` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '课程id',
  `score` int(11) DEFAULT NULL COMMENT '分数',
  PRIMARY KEY (`sid`,`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of sc
-- ----------------------------
INSERT INTO `sc` VALUES ('2022062001', 'c01', '88');
INSERT INTO `sc` VALUES ('2022062002', 'c01', '76');
INSERT INTO `sc` VALUES ('2022062003', 'c01', '90');
INSERT INTO `sc` VALUES ('2022062004', 'c01', '42');
INSERT INTO `sc` VALUES ('2022062005', 'c01', '71');
INSERT INTO `sc` VALUES ('2022062006', 'c01', '55');
INSERT INTO `sc` VALUES ('2022062007', 'c01', '38');
INSERT INTO `sc` VALUES ('2022062008', 'c01', '99');
INSERT INTO `sc` VALUES ('2022062009', 'c01', '80');
INSERT INTO `sc` VALUES ('2022062001', 'c02', '100');
INSERT INTO `sc` VALUES ('2022062002', 'c02', '33');
INSERT INTO `sc` VALUES ('2022062003', 'c02', '81');
INSERT INTO `sc` VALUES ('2022062004', 'c02', '73');
INSERT INTO `sc` VALUES ('2022062005', 'c02', '49');
INSERT INTO `sc` VALUES ('2022062006', 'c02', '88');
INSERT INTO `sc` VALUES ('2022062007', 'c02', '99');
INSERT INTO `sc` VALUES ('2022062008', 'c02', '60');
INSERT INTO `sc` VALUES ('2022062009', 'c02', '59');
INSERT INTO `sc` VALUES ('2022062001', 'c03', '40');
INSERT INTO `sc` VALUES ('2022062002', 'c03', '55');
INSERT INTO `sc` VALUES ('2022062003', 'c03', '78');
INSERT INTO `sc` VALUES ('2022062004', 'c03', '87');
INSERT INTO `sc` VALUES ('2022062005', 'c03', '90');
INSERT INTO `sc` VALUES ('2022062006', 'c03', '92');
INSERT INTO `sc` VALUES ('2022062007', 'c03', '97');
INSERT INTO `sc` VALUES ('2022062011', 'c02', '80');
INSERT INTO `sc` VALUES ('2022062009', 'c03', '49');
INSERT INTO `sc` VALUES ('2022062001', 'c04', '70');
INSERT INTO `sc` VALUES ('2022062002', 'c04', '62');
INSERT INTO `sc` VALUES ('2022062003', 'c04', '59');
INSERT INTO `sc` VALUES ('2022062004', 'c04', '88');
INSERT INTO `sc` VALUES ('2022062005', 'c04', '35');
INSERT INTO `sc` VALUES ('2022062006', 'c04', '67');
INSERT INTO `sc` VALUES ('2022062007', 'c04', '70');
INSERT INTO `sc` VALUES ('2022062008', 'c04', '82');
INSERT INTO `sc` VALUES ('2022062011', 'c07', '100');

-- ----------------------------
-- Table structure for student
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '学号',
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '姓名',
  `headimg` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sex` char(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '性别',
  `age` int(11) DEFAULT NULL COMMENT '年龄',
  `m_id` int(11) DEFAULT NULL COMMENT '所在专业id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2022062018 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO `student` VALUES ('2022062001', '张三', null, '男', '20', '1');
INSERT INTO `student` VALUES ('2022062002', '李四', null, '男', '22', '2');
INSERT INTO `student` VALUES ('2022062003', '王五', null, '女', '21', '1');
INSERT INTO `student` VALUES ('2022062004', '李勇', null, '男', '30', '1');
INSERT INTO `student` VALUES ('2022062005', '刘晨', null, '男', '20', '1');
INSERT INTO `student` VALUES ('2022062006', '王敏', null, '女', '20', '1');
INSERT INTO `student` VALUES ('2022062007', '刘小庄', null, '男', '18', '2');
INSERT INTO `student` VALUES ('2022062008', '赵大', null, '女', '14', '1');
INSERT INTO `student` VALUES ('2022062009', '李大鹏', null, '女', '20', '3');
INSERT INTO `student` VALUES ('2022062010', '刘晓丽', null, '女', '18', '1');
INSERT INTO `student` VALUES ('2022062011', '刘洋', null, '女', '22', '6');
INSERT INTO `student` VALUES ('2022062012', '金钟旭', null, '男', '25', '5');
INSERT INTO `student` VALUES ('2022062013', '王玉昌', null, '男', '43', '4');
INSERT INTO `student` VALUES ('2022062014', '王赵新', null, '男', '25', '1');
INSERT INTO `student` VALUES ('2022062015', '赵浩洋', null, '男', '23', '3');
INSERT INTO `student` VALUES ('2022062016', '张天赐', null, '男', '50', '1');
INSERT INTO `student` VALUES ('2022062017', '郎忠博', null, '男', '39', '1');
