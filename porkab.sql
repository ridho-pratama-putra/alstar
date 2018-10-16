/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : porkab

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-10-16 19:11:15
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for participants
-- ----------------------------
DROP TABLE IF EXISTS `participants`;
CREATE TABLE `participants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `tempat_tanggal_lahir` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_tlp` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `cabor_induk` varchar(255) DEFAULT NULL,
  `cabor_kelas` varchar(255) DEFAULT NULL,
  `cabor_keterangan` varchar(255) DEFAULT NULL,
  `cabor2_kelas` varchar(255) DEFAULT NULL,
  `cabor2_keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `not_tlp_unik` (`no_tlp`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of participants
-- ----------------------------
INSERT INTO `participants` VALUES ('1', 'Rahman', 'Jalan Mondoroko Kidul', 'Malang, 1997-02-19', 'mahasiswa@mahasiswa.com', '09810923819278', 'Singosari', 'Taekwondo', 'Gyeorugi Prestasi(Yunior Putra)', '< 51 kg (48.1 - 51 kg)', 'Gyeorugi Prestasi(Yunior Putra)', '< 73 kg (68.1 - 73 kg)');
