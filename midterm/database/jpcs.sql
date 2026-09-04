/*
 Navicat Premium Dump SQL

 Source Server         : localdata
 Source Server Type    : MariaDB
 Source Server Version : 100432 (10.4.32-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : jpcs

 Target Server Type    : MariaDB
 Target Server Version : 100432 (10.4.32-MariaDB)
 File Encoding         : 65001

 Date: 04/09/2026 19:43:57
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for school
-- ----------------------------
DROP TABLE IF EXISTS `school`;
CREATE TABLE `school`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of school
-- ----------------------------
INSERT INTO `school` VALUES (1, 'ACI', 'Aldersgate College Inc.', 'Burgos St.,Brgy Quirino, Solano, Nueva Vizcaya');
INSERT INTO `school` VALUES (2, 'NVSU', 'Nueva Vizcaya State University', 'Bayombong, Nueva Vizcaya');
INSERT INTO `school` VALUES (3, 'SHS', 'Solano High School', 'Brgy Quirino, Solano, Nueva Vizcaya');
INSERT INTO `school` VALUES (4, 'SLU', 'Saint Luis University', 'Baguio City, Philippines');
INSERT INTO `school` VALUES (6, 'UB', 'University of Baguio', 'Baguio City, Philippines 2600');
INSERT INTO `school` VALUES (7, 'UB', 'University of Baguio', 'Baguio City, Philippines 2600');
INSERT INTO `school` VALUES (8, 'CSU', 'Cagayan State University', 'Cagayan, Philippines');
INSERT INTO `school` VALUES (9, 'UP', 'University of the Philippines', 'Manila');

SET FOREIGN_KEY_CHECKS = 1;
