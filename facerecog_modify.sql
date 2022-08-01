/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 80029
 Source Host           : 104.225.140.128:3306
 Source Schema         : facerecog_modify

 Target Server Type    : MySQL
 Target Server Version : 80029
 File Encoding         : 65001

 Date: 22/05/2022 19:35:16
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for body
-- ----------------------------
DROP TABLE IF EXISTS `body`;
CREATE TABLE `body`  (
  `ID` int(0) NOT NULL AUTO_INCREMENT,
  `Customer_ID` int(0) NULL DEFAULT NULL,
  `Client_ID` int(0) NULL DEFAULT NULL,
  `camera` int(0) NULL DEFAULT NULL,
  `location` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `timestamp` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of body
-- ----------------------------
INSERT INTO `body` VALUES (1, 1, 1, 4, 'E:\\FaceRec\\1880 Town\\Jerry.A.Durginlow_resolution.mp4', '2022-05-19 07:07:06');
INSERT INTO `body` VALUES (2, 2, 2, 6, 'E:\\FaceRec\\1880 Town\\Jerry.B.Durginlow_resolution.mp4', '2022-05-19 07:07:06');

-- ----------------------------
-- Table structure for client
-- ----------------------------
DROP TABLE IF EXISTS `client`;
CREATE TABLE `client`  (
  `No` int(0) NOT NULL AUTO_INCREMENT,
  `Client_Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Client_Avatar` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Mood_File` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Timestamp` datetime(0) NOT NULL,
  PRIMARY KEY (`No`) USING BTREE,
  UNIQUE INDEX `No_UNIQUE`(`No`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of client
-- ----------------------------
INSERT INTO `client` VALUES (1, 'Jerry.A.Durgin', 'asddfg', 'E:\\FaceRec\\1880 Town\\Pictures\\Jerry.A.Durgin\\20220516102523.jpg', '-1', '2022-05-22 18:59:05');
INSERT INTO `client` VALUES (2, 'Jerry.B.Durgin', '11', 'E:\\FaceRec\\1880 Town\\Pictures\\Jerry.A.Durgin\\20220516102523.jpg', '-1', '2022-05-22 18:59:27');
INSERT INTO `client` VALUES (3, 'Jerry.C.Durgin', '123456', 'E:\\FaceRec\\1880 Town\\Pictures\\Jerry.A.Durgin\\20220516102523.jpg', '-1', '2022-05-22 18:59:45');
INSERT INTO `client` VALUES (4, 'For J Milind', '', 'E:\\FaceRec\\1880 Town\\Pictures\\Jerry.A.Durgin\\20220516102523.jpg', '-1', '2022-05-22 19:00:03');

-- ----------------------------
-- Table structure for custom
-- ----------------------------
DROP TABLE IF EXISTS `custom`;
CREATE TABLE `custom`  (
  `ID` int(0) NOT NULL AUTO_INCREMENT,
  `Customer_Name` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Customer_Short_Name` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Contract_Person` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Email_Address` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Phone_Number` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Customer_Avatar` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `City_Stae_Zip` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Sound` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Background_Music` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `VoiceOver` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Camera1` int(0) NOT NULL,
  `Camera2` int(0) NOT NULL,
  `Camera3` int(0) NOT NULL,
  `Camera4` int(0) NOT NULL,
  `Camera5` int(0) NOT NULL,
  `Camera6` int(0) NOT NULL,
  `Camera7` int(0) NOT NULL,
  `Camera8` int(0) NOT NULL,
  `Camera9` int(0) NOT NULL,
  `Camera10` int(0) NOT NULL,
  `Timestamp` datetime(0) NOT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of custom
-- ----------------------------
INSERT INTO `custom` VALUES (1, '1880 Town', '1880 Town', 'Jerry.A.Durgin', 'Jerry.A.Durgin@gmail.com', '+1-202-555-0174', 'E:\\FaceRec\\1880 Town\\Pictures\\Jerry.A.Durgin\\20220516102523.jpg', '57005', 'Y', 'Y', 'Y', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-05-19 23:49:18');
INSERT INTO `custom` VALUES (2, '1890 Town', '1890 Town', 'Jerr.D.Darry', 'Jerr.A.Darry', '+1-202-555-0181', 'E:\\FaceRec\\1880 Town\\Pictures\\Jerry.A.Durgin\\20220516102523.jpg', '57007', 'Y', 'Y', 'Y', 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, '2022-05-19 23:49:22');

-- ----------------------------
-- Table structure for final
-- ----------------------------
DROP TABLE IF EXISTS `final`;
CREATE TABLE `final`  (
  `ID` int(0) NOT NULL AUTO_INCREMENT,
  `Customer_ID` int(0) NOT NULL,
  `Client_ID` int(0) NOT NULL,
  `Location` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Timestamp` datetime(0) NOT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for footer
-- ----------------------------
DROP TABLE IF EXISTS `footer`;
CREATE TABLE `footer`  (
  `ID` int(0) NOT NULL AUTO_INCREMENT,
  `Customer_ID` int(0) NOT NULL,
  `Location` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Timestamp` datetime(0) NOT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of footer
-- ----------------------------
INSERT INTO `footer` VALUES (1, 1, 'E:/FaceRec/1880 Town/Footers/1.mp4', '2022-05-21 00:40:28');
INSERT INTO `footer` VALUES (2, 1, 'E:/FaceRec/1880 Town/Footers/2.mp4', '2022-05-21 02:36:20');
INSERT INTO `footer` VALUES (3, 2, 'E:/FaceRec/1880 Town/Footers/3.avi', '2022-05-21 03:15:05');

-- ----------------------------
-- Table structure for header
-- ----------------------------
DROP TABLE IF EXISTS `header`;
CREATE TABLE `header`  (
  `id` int(0) NOT NULL AUTO_INCREMENT,
  `Customer_ID` int(0) NOT NULL,
  `Location` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Timestamp` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of header
-- ----------------------------
INSERT INTO `header` VALUES (1, 1, 'E:\\FaceRec\\1880 Town\\Headers\\1.mp4', '2022-05-19 23:49:20');
INSERT INTO `header` VALUES (2, 2, 'E:\\FaceRec\\1880 Town\\Headers\\2.mp4', '2022-05-19 23:49:22');

-- ----------------------------
-- Table structure for picture
-- ----------------------------
DROP TABLE IF EXISTS `picture`;
CREATE TABLE `picture`  (
  `ID` int(0) NOT NULL AUTO_INCREMENT,
  `Client_ID` int(0) NOT NULL,
  `Customer_ID` int(0) NOT NULL,
  `Picture_Location` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Timestamp` datetime(0) NOT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of picture
-- ----------------------------
INSERT INTO `picture` VALUES (1, 1, 1, 'E:\\FaceRec\\1880 Town\\Pictures\\Jerry.A.Durgin\\20220516102523.jpg', '2022-05-17 04:35:44');
INSERT INTO `picture` VALUES (2, 1, 2, 'E:\\FaceRec\\1880 Town\\Pictures\\Jerry.A.Durgin\\20220516102652.jpg', '2022-05-17 04:35:44');

-- ----------------------------
-- Table structure for voiceover
-- ----------------------------
DROP TABLE IF EXISTS `voiceover`;
CREATE TABLE `voiceover`  (
  `ID` int(0) NOT NULL AUTO_INCREMENT,
  `Customer_ID` int(0) NOT NULL,
  `Camera` int(0) NOT NULL,
  `Location` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Timestamp` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of voiceover
-- ----------------------------
INSERT INTO `voiceover` VALUES (1, 1, 1, 'E:/FaceRec/1880 Town/VoiceOvers/1880Town5-3Marks.mp3', '2022-05-21 03:11:56');
INSERT INTO `voiceover` VALUES (2, 1, 2, 'E:/FaceRec/1880 Town/VoiceOvers/1880Town5-18Eric.mp3', '2022-05-21 03:12:23');
INSERT INTO `voiceover` VALUES (3, 1, 3, 'E:/FaceRec/1880 Town/VoiceOvers/1880Town5-18Eric.mp3', '2022-05-21 03:13:31');

SET FOREIGN_KEY_CHECKS = 1;
