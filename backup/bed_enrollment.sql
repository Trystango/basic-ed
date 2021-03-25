/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100417
 Source Host           : localhost:3306
 Source Schema         : bed_enrollment

 Target Server Type    : MySQL
 Target Server Version : 100417
 File Encoding         : 65001

 Date: 26/03/2021 01:52:32
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_acadyears
-- ----------------------------
DROP TABLE IF EXISTS `tbl_acadyears`;
CREATE TABLE `tbl_acadyears`  (
  `ay_id` int(100) NOT NULL AUTO_INCREMENT,
  `academic_year` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`ay_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_acadyears
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_accountings
-- ----------------------------
DROP TABLE IF EXISTS `tbl_accountings`;
CREATE TABLE `tbl_accountings`  (
  `accounting_id` int(100) NOT NULL,
  `accounting_fname` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `accounting_mname` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `accounting_lname` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `img` mediumblob NOT NULL,
  `username` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `activation_code` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`accounting_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_accountings
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_active_acadyears
-- ----------------------------
DROP TABLE IF EXISTS `tbl_active_acadyears`;
CREATE TABLE `tbl_active_acadyears`  (
  `active_acad_id` int(100) NOT NULL AUTO_INCREMENT,
  `ay_id` int(100) NOT NULL,
  PRIMARY KEY (`active_acad_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_active_acadyears
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_active_quarters
-- ----------------------------
DROP TABLE IF EXISTS `tbl_active_quarters`;
CREATE TABLE `tbl_active_quarters`  (
  `active_quarter_id` int(100) NOT NULL AUTO_INCREMENT,
  `quarter_id` int(100) NOT NULL,
  PRIMARY KEY (`active_quarter_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_active_quarters
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_active_semesters
-- ----------------------------
DROP TABLE IF EXISTS `tbl_active_semesters`;
CREATE TABLE `tbl_active_semesters`  (
  `active_semester_id` int(100) NOT NULL AUTO_INCREMENT,
  `semester_id` int(100) NOT NULL,
  PRIMARY KEY (`active_semester_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_active_semesters
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_admissions
-- ----------------------------
DROP TABLE IF EXISTS `tbl_admissions`;
CREATE TABLE `tbl_admissions`  (
  `admission_id` int(100) NOT NULL AUTO_INCREMENT,
  `admission_fname` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `admission_mname` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `admission_lname` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`admission_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_admissions
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_advisers
-- ----------------------------
DROP TABLE IF EXISTS `tbl_advisers`;
CREATE TABLE `tbl_advisers`  (
  `adviser_id` int(100) NOT NULL AUTO_INCREMENT,
  `adviser_fname` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `adviser_mname` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `adviser_lname` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`adviser_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_advisers
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_departments
-- ----------------------------
DROP TABLE IF EXISTS `tbl_departments`;
CREATE TABLE `tbl_departments`  (
  `deparment_id` int(100) NOT NULL AUTO_INCREMENT,
  `deparment_name` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`deparment_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_departments
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_genders
-- ----------------------------
DROP TABLE IF EXISTS `tbl_genders`;
CREATE TABLE `tbl_genders`  (
  `gender_id` int(100) NOT NULL AUTO_INCREMENT,
  `gender_name` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`gender_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_genders
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_grade_levels
-- ----------------------------
DROP TABLE IF EXISTS `tbl_grade_levels`;
CREATE TABLE `tbl_grade_levels`  (
  `grade_level_id` int(100) NOT NULL AUTO_INCREMENT,
  `grade_level` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`grade_level_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_grade_levels
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_master_key
-- ----------------------------
DROP TABLE IF EXISTS `tbl_master_key`;
CREATE TABLE `tbl_master_key`  (
  `mk_id` int(100) NOT NULL AUTO_INCREMENT,
  `img` mediumblob NOT NULL,
  `name` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `activation_code` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `username` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`mk_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_master_key
-- ----------------------------
INSERT INTO `tbl_master_key` VALUES (1, '', 'master_key', '', 'masterkey@gmail.com', 'master_key', '$2y$10$hXn2VwFqPk.aSNONz9wUQeTVBKPJjAe0XVKp1xIVLMhCd2qOCrxYi');

-- ----------------------------
-- Table structure for tbl_principals
-- ----------------------------
DROP TABLE IF EXISTS `tbl_principals`;
CREATE TABLE `tbl_principals`  (
  `principal_id` int(100) NOT NULL AUTO_INCREMENT,
  `principal_fname` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `principal_mname` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `principal_lname` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`principal_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_principals
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_quarters
-- ----------------------------
DROP TABLE IF EXISTS `tbl_quarters`;
CREATE TABLE `tbl_quarters`  (
  `quarter_id` int(100) NOT NULL AUTO_INCREMENT,
  `quarter` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`quarter_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_quarters
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_registrars
-- ----------------------------
DROP TABLE IF EXISTS `tbl_registrars`;
CREATE TABLE `tbl_registrars`  (
  `tbl_registrar` int(100) NOT NULL,
  `registrar_fname` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `registrar_mname` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `registrar_lname` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`tbl_registrar`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_registrars
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_schedules
-- ----------------------------
DROP TABLE IF EXISTS `tbl_schedules`;
CREATE TABLE `tbl_schedules`  (
  `schedule_id` int(100) NOT NULL,
  `date` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `time` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`schedule_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_schedules
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_semesters
-- ----------------------------
DROP TABLE IF EXISTS `tbl_semesters`;
CREATE TABLE `tbl_semesters`  (
  `semester_id` int(100) NOT NULL AUTO_INCREMENT,
  `semester` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`semester_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_semesters
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_strands
-- ----------------------------
DROP TABLE IF EXISTS `tbl_strands`;
CREATE TABLE `tbl_strands`  (
  `strand_id` int(100) NOT NULL AUTO_INCREMENT,
  `strand_name` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`strand_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_strands
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_students
-- ----------------------------
DROP TABLE IF EXISTS `tbl_students`;
CREATE TABLE `tbl_students`  (
  `student_id` int(100) NOT NULL AUTO_INCREMENT,
  `student_lname` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `student_fname` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `student_mname` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `gender_id` int(100) NOT NULL,
  PRIMARY KEY (`student_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_students
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_subjects
-- ----------------------------
DROP TABLE IF EXISTS `tbl_subjects`;
CREATE TABLE `tbl_subjects`  (
  `subject_id` int(100) NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`subject_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_subjects
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_teachers
-- ----------------------------
DROP TABLE IF EXISTS `tbl_teachers`;
CREATE TABLE `tbl_teachers`  (
  `teacher_id` int(100) NOT NULL AUTO_INCREMENT,
  `teacher_fname` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `teacher_mname` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `teacher_lname` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`teacher_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_teachers
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
