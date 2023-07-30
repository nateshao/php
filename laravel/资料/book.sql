/*
 Navicat Premium Data Transfer

 Source Server         : 本机
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : 127.0.0.1:3306
 Source Schema         : book2

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 29/01/2023 10:18:44
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `admin` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pwd` char(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `loginip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT '上次登录的ip地址',
  `logintime` int(10) NULL DEFAULT NULL COMMENT '上次登录的时间',
  `times` int(10) NOT NULL COMMENT '登录次数',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES (1, 'ding', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', '::1', 1600768428, 17);
INSERT INTO `admin` VALUES (2, 'wang', '20eabe5d64b0e216796e834f52d61fd0b70332fc', '::1', 1608088525, 14);
INSERT INTO `admin` VALUES (3, 'li', '7c4a8d09ca3762af61e59520943dc26494f8941b', '192.168.0.159', 1666921555, 6);
INSERT INTO `admin` VALUES (4, 'bai', '7c4a8d09ca3762af61e59520943dc26494f8941b', '::1', 1666929432, 16);

-- ----------------------------
-- Table structure for book
-- ----------------------------
DROP TABLE IF EXISTS `book`;
CREATE TABLE `book`  (
  `bookid` int(10) NOT NULL AUTO_INCREMENT,
  `bookname` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `price` decimal(6, 2) NOT NULL,
  `author` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `publisher` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `tid` int(10) NULL DEFAULT NULL,
  `status` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '否',
  `del` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`bookid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of book
-- ----------------------------
INSERT INTO `book` VALUES (1, '1+x初级证书参考书', 39.90, '工信部', '新华出版社', 5, '是', NULL);
INSERT INTO `book` VALUES (2, '1+x中级参考书', 55.00, '李天一', '新华出版社', 1, '否', NULL);
INSERT INTO `book` VALUES (4, '1+x高级', 36.00, '工信部', '卓象', 1, '否', NULL);
INSERT INTO `book` VALUES (5, 'PHP精通', 65.00, '卓象', '卓象出版社', 1, '是', NULL);
INSERT INTO `book` VALUES (6, '天剑绝刀', 98.00, '刘老根', '武侠出版社', 3, '是', NULL);
INSERT INTO `book` VALUES (7, '霸道总裁爱上我', 15.99, '番茄炒柿子', '乌拉拉', 2, '是', NULL);
INSERT INTO `book` VALUES (8, '赘婿', 38.80, '郭麒麟', '德云社', 2, '否', NULL);

-- ----------------------------
-- Table structure for type
-- ----------------------------
DROP TABLE IF EXISTS `type`;
CREATE TABLE `type`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tname` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of type
-- ----------------------------
INSERT INTO `type` VALUES (1, '教材');
INSERT INTO `type` VALUES (2, '言情');
INSERT INTO `type` VALUES (3, '武侠');
INSERT INTO `type` VALUES (5, '测试');

SET FOREIGN_KEY_CHECKS = 1;
