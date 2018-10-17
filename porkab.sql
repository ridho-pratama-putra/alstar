/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : porkab

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-10-18 01:34:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for master
-- ----------------------------
DROP TABLE IF EXISTS `master`;
CREATE TABLE `master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cabor` varchar(255) DEFAULT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `kelas` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=262 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master
-- ----------------------------
INSERT INTO `master` VALUES ('1', 'Anggar', null, 'Degen', null);
INSERT INTO `master` VALUES ('2', 'Anggar', null, 'Sabel', null);
INSERT INTO `master` VALUES ('3', 'Anggar', null, 'Floret', null);
INSERT INTO `master` VALUES ('4', 'Atletik', null, 'Lari 100 m', null);
INSERT INTO `master` VALUES ('5', 'Atletik', null, 'Lari 400 m', null);
INSERT INTO `master` VALUES ('6', 'Atletik', null, 'Lari 800 m', null);
INSERT INTO `master` VALUES ('7', 'Atletik', null, 'Lari 5000 m', null);
INSERT INTO `master` VALUES ('8', 'Atletik', null, 'Jalan Cepat 3000 m', null);
INSERT INTO `master` VALUES ('9', 'Atletik', null, 'Lompat Jauh', null);
INSERT INTO `master` VALUES ('10', 'Atletik', null, 'Lompat Tinggi', null);
INSERT INTO `master` VALUES ('11', 'Atletik', null, 'Lempar Lembing', null);
INSERT INTO `master` VALUES ('12', 'Atletik', null, 'Tolak Peluru', null);
INSERT INTO `master` VALUES ('13', 'Balap Sepeda', null, 'Road Criterium', null);
INSERT INTO `master` VALUES ('14', 'Balap Sepeda', null, 'MTB Criterium', null);
INSERT INTO `master` VALUES ('15', 'Balap Sepeda', null, 'BMx Criterium', null);
INSERT INTO `master` VALUES ('16', 'Bola Basket', null, null, null);
INSERT INTO `master` VALUES ('17', 'Bridge', null, null, null);
INSERT INTO `master` VALUES ('18', 'Bola Voli Indoor', null, null, null);
INSERT INTO `master` VALUES ('19', 'Bola Voli Pasir', null, null, null);
INSERT INTO `master` VALUES ('20', 'Hockey', null, 'Kelas A(SD 35 kg)', null);
INSERT INTO `master` VALUES ('21', 'Hockey', null, 'Kelas B(SD 40 kg)', null);
INSERT INTO `master` VALUES ('22', 'Hockey', null, 'Kelas C(SD 45 kg)', null);
INSERT INTO `master` VALUES ('23', 'Hockey', null, 'Kelas D(SD 50 kg)', null);
INSERT INTO `master` VALUES ('24', 'Hockey', null, 'Kelas E(SD 55 kg)', null);
INSERT INTO `master` VALUES ('25', 'Kick Boxing', '(Full Contact)', 'Kelas A(16-20 tahun)', '41-45 kg');
INSERT INTO `master` VALUES ('26', 'Kick Boxing', '(Full Contact)', 'Kelas A(16-20 tahun)', '46-50 kg');
INSERT INTO `master` VALUES ('27', 'Kick Boxing', '(Full Contact)', 'Kelas A(16-20 tahun)', '51-55 kg');
INSERT INTO `master` VALUES ('28', 'Kick Boxing', '(Full Contact)', 'Kelas A(16-20 tahun)', '56-60 kg');
INSERT INTO `master` VALUES ('29', 'Kick Boxing', '(Full Contact)', 'Kelas B(< 16 tahun)', '41-45 kg');
INSERT INTO `master` VALUES ('30', 'Kick Boxing', '(Full Contact)', 'Kelas B(< 16 tahun)', '46-50 kg');
INSERT INTO `master` VALUES ('31', 'Kick Boxing', '(Full Contact)', 'Kelas B(< 16 tahun)', '51-55 kg');
INSERT INTO `master` VALUES ('32', 'Kick Boxing', '(Full Contact)', 'Kelas B(< 16 tahun)', '56-60 kg');
INSERT INTO `master` VALUES ('33', 'Kick Boxing', '(Point Fighting)', 'Kelas A(16-20 tahun)', '41-45 kg');
INSERT INTO `master` VALUES ('34', 'Kick Boxing', '(Point Fighting)', 'Kelas A(16-20 tahun)', '46-50 kg');
INSERT INTO `master` VALUES ('35', 'Kick Boxing', '(Point Fighting)', 'Kelas A(16-20 tahun)', '51-55 kg');
INSERT INTO `master` VALUES ('36', 'Kick Boxing', '(Point Fighting)', 'Kelas A(16-20 tahun)', '56-60 kg');
INSERT INTO `master` VALUES ('37', 'Kick Boxing', '(Point Fighting)', 'Kelas B(< 16 tahun)', '41-45 kg');
INSERT INTO `master` VALUES ('38', 'Kick Boxing', '(Point Fighting)', 'Kelas B(< 16 tahun)', '46-50 kg');
INSERT INTO `master` VALUES ('39', 'Kick Boxing', '(Point Fighting)', 'Kelas B(< 16 tahun)', '51-55 kg');
INSERT INTO `master` VALUES ('40', 'Kick Boxing', '(Point Fighting)', 'Kelas B(< 16 tahun)', '56-60 kg');
INSERT INTO `master` VALUES ('41', 'Kick Boxing', '(Musical Form)', 'Kelas A(14-20 tahun)', 'Tangan Kosong');
INSERT INTO `master` VALUES ('42', 'Kick Boxing', '(Musical Form)', 'Kelas A(14-20 tahun)', 'Senjata Pendek');
INSERT INTO `master` VALUES ('43', 'Kick Boxing', '(Musical Form)', 'Kelas A(14-20 tahun)', 'Senjata Panjang');
INSERT INTO `master` VALUES ('44', 'Kick Boxing', '(Musical Form)', 'Kelas B(< 14 tahun)', 'Tangan Kosong');
INSERT INTO `master` VALUES ('45', 'Kick Boxing', '(Musical Form)', 'Kelas B(< 14 tahun)', 'Senjata Pendek');
INSERT INTO `master` VALUES ('46', 'Kick Boxing', '(Musical Form)', 'Kelas B(< 14 tahun)', 'Senjata Panjang');
INSERT INTO `master` VALUES ('47', 'Muaythai', '(Putra)', 'Kelas A (s/d 43 kg)', null);
INSERT INTO `master` VALUES ('48', 'Muaythai', '(Putra)', 'Kelas B (s/d 45 kg)', null);
INSERT INTO `master` VALUES ('49', 'Muaythai', '(Putra)', 'Kelas C (s/d 48 kg)', null);
INSERT INTO `master` VALUES ('50', 'Muaythai', '(Putra)', 'Kelas D (s/d 51 kg)', null);
INSERT INTO `master` VALUES ('51', 'Muaythai', '(Putra)', 'Kelas E (s/d 54 kg)', null);
INSERT INTO `master` VALUES ('52', 'Muaythai', '(Putra)', 'Kelas F (s/d 57 kg)', null);
INSERT INTO `master` VALUES ('53', 'Muaythai', '(Putra)', 'Kelas G (s/d 60 kg)', null);
INSERT INTO `master` VALUES ('54', 'Muaythai', '(Putra)', 'Kelas H (s/d 63 kg)', null);
INSERT INTO `master` VALUES ('55', 'Muaythai', '(Putra)', 'Kelas I (s/d 67 kg)', null);
INSERT INTO `master` VALUES ('56', 'Muaythai', '(Putra)', 'Kelas J (s/d 71 kg)', null);
INSERT INTO `master` VALUES ('57', 'Muaythai', '(Putra)', 'Kelas K (s/d 75 kg)', null);
INSERT INTO `master` VALUES ('58', 'Muaythai', '(Putri)', 'Kelas A (s/d 43 kg)', null);
INSERT INTO `master` VALUES ('59', 'Muaythai', '(Putri)', 'Kelas B (s/d 45 kg)', null);
INSERT INTO `master` VALUES ('60', 'Muaythai', '(Putri)', 'Kelas C (s/d 48 kg)', null);
INSERT INTO `master` VALUES ('61', 'Muaythai', '(Putri)', 'Kelas D (s/d 51 kg)', null);
INSERT INTO `master` VALUES ('62', 'Muaythai', '(Putri)', 'Kelas E (s/d 54 kg)', null);
INSERT INTO `master` VALUES ('63', 'Muaythai', '(Putri)', 'Kelas F (s/d 57 kg)', null);
INSERT INTO `master` VALUES ('64', 'Muaythai', '(Putri)', 'Kelas G (s/d 60 kg)', null);
INSERT INTO `master` VALUES ('65', 'Panahan', null, 'Kelas Pemula (Paralon)', null);
INSERT INTO `master` VALUES ('66', 'Panahan', null, 'Kelas Standart Bown (Jarak 15 m U-9 tahun)', null);
INSERT INTO `master` VALUES ('67', 'Panahan', null, 'Kelas Standart Bown (Jarak 20 m U-9 tahun)', null);
INSERT INTO `master` VALUES ('68', 'Panahan', null, 'Kelas Standart Bown (Jarak 30,40,dan 50 m)', null);
INSERT INTO `master` VALUES ('69', 'Panahan', null, 'Kelas Recurve (Jarak 70 m)', null);
INSERT INTO `master` VALUES ('70', 'Panahan', null, 'Kelas Compound (Jarak 50 m)', null);
INSERT INTO `master` VALUES ('71', 'Panjat Tebing', null, 'Putra', 'Lead Putra');
INSERT INTO `master` VALUES ('72', 'Panjat Tebing', null, 'Putra', 'Speed Classic Putra');
INSERT INTO `master` VALUES ('73', 'Panjat Tebing', null, 'Putri', 'Lead Putri');
INSERT INTO `master` VALUES ('74', 'Panjat Tebing', null, 'Putri', 'Speed Classic Putri');
INSERT INTO `master` VALUES ('75', 'Pentaque', null, 'Putra', 'Nomor Shooting');
INSERT INTO `master` VALUES ('76', 'Pentaque', null, 'Putra', 'Nomor Single');
INSERT INTO `master` VALUES ('77', 'Pentaque', null, 'Putra', 'Nomor Doble');
INSERT INTO `master` VALUES ('78', 'Pentaque', null, 'Putri', 'Nomor Shooting');
INSERT INTO `master` VALUES ('79', 'Pentaque', null, 'Putri', 'Nomor Single');
INSERT INTO `master` VALUES ('80', 'Pentaque', null, 'Putri', 'Nomor Doble');
INSERT INTO `master` VALUES ('81', 'Tarung Derajat', null, 'Bebas Putra (Kelas 54.1-58 kg)', null);
INSERT INTO `master` VALUES ('82', 'Tarung Derajat', null, 'Bebas Putri (Kelas 45.1-48 kg)', null);
INSERT INTO `master` VALUES ('83', 'Tinju', null, 'Putra', 'Amatir (49 kg)');
INSERT INTO `master` VALUES ('84', 'Tinju', null, 'Putra', 'Amatir (52 kg)');
INSERT INTO `master` VALUES ('85', 'Tinju', null, 'Putra', 'Amatir (60 kg)');
INSERT INTO `master` VALUES ('86', 'Tinju', null, 'Putri', 'Amatir (48 kg)');
INSERT INTO `master` VALUES ('87', 'Bola Voli Indoor', null, null, null);
INSERT INTO `master` VALUES ('88', 'Bola Voli Pasir', null, null, null);
INSERT INTO `master` VALUES ('89', 'Wushu', null, 'Kelas 45 kg', null);
INSERT INTO `master` VALUES ('90', 'Wushu', null, 'Kelas 48 kg', null);
INSERT INTO `master` VALUES ('91', 'Wushu', null, 'Kelas 52 kg', null);
INSERT INTO `master` VALUES ('92', 'Wushu', null, 'Kelas 56 kg', null);
INSERT INTO `master` VALUES ('93', 'Wushu', null, 'Kelas 60 kg', null);
INSERT INTO `master` VALUES ('94', 'Wushu', null, 'Kelas 65 kg', null);
INSERT INTO `master` VALUES ('95', 'Wushu', null, 'Kelas 70 kg', null);
INSERT INTO `master` VALUES ('96', 'Wushu', null, 'Kelas 75 kg', null);
INSERT INTO `master` VALUES ('97', 'Pencak Silat', '(Tanding)', 'Putra', 'Kelas A(39 kg s/d 43 kg)');
INSERT INTO `master` VALUES ('98', 'Pencak Silat', '(Tanding)', 'Putra', 'Kelas B(>43 kg s/d 47 kg)');
INSERT INTO `master` VALUES ('99', 'Pencak Silat', '(Tanding)', 'Putra', 'Kelas C(>47 kg s/d 51 kg)');
INSERT INTO `master` VALUES ('100', 'Pencak Silat', '(Tanding)', 'Putra', 'Kelas D(>51 kg s/d 55 kg)');
INSERT INTO `master` VALUES ('101', 'Pencak Silat', '(Tanding)', 'Putra', 'Kelas E(>55 kg s/d 59 kg)');
INSERT INTO `master` VALUES ('102', 'Pencak Silat', '(Tanding)', 'Putra', 'Kelas F(>59 kg s/d 63 kg)');
INSERT INTO `master` VALUES ('103', 'Pencak Silat', '(Tanding)', 'Putra', 'Kelas G(>63 kg s/d 67 kg)');
INSERT INTO `master` VALUES ('104', 'Pencak Silat', '(Tanding)', 'Putra', 'Kelas H(>67 kg s/d 71 kg)');
INSERT INTO `master` VALUES ('105', 'Pencak Silat', '(Tanding)', 'Putra', 'Kelas I(>71 kg s/d 75 kg)');
INSERT INTO `master` VALUES ('106', 'Pencak Silat', '(Tanding)', 'Putra', 'Kelas J(>75 kg s/d 79 kg)');
INSERT INTO `master` VALUES ('107', 'Pencak Silat', '(Tanding)', 'Putra', 'Kelas J(>75 kg s/d 79 kg)');
INSERT INTO `master` VALUES ('108', 'Pencak Silat', '(Tanding)', 'Putri', 'Kelas A(39 kg s/d 43 kg)');
INSERT INTO `master` VALUES ('109', 'Pencak Silat', '(Tanding)', 'Putri', 'Kelas B(>43 kg s/d 47 kg)');
INSERT INTO `master` VALUES ('110', 'Pencak Silat', '(Tanding)', 'Putri', 'Kelas C(>47 kg s/d 51 kg)');
INSERT INTO `master` VALUES ('111', 'Pencak Silat', '(Tanding)', 'Putri', 'Kelas D(>51 kg s/d 55 kg)');
INSERT INTO `master` VALUES ('112', 'Pencak Silat', '(Tanding)', 'Putri', 'Kelas E(>55 kg s/d 59 kg)');
INSERT INTO `master` VALUES ('113', 'Pencak Silat', '(Tanding)', 'Putri', 'Kelas F(>59 kg s/d 63 kg)');
INSERT INTO `master` VALUES ('114', 'Pencak Silat', '(Tanding)', 'Putri', 'Kelas G(>63 kg s/d 67 kg)');
INSERT INTO `master` VALUES ('115', 'Pencak Silat', '(Seni)', 'Putra', 'Tunggal');
INSERT INTO `master` VALUES ('116', 'Pencak Silat', '(Seni)', 'Putra', 'Ganda');
INSERT INTO `master` VALUES ('117', 'Pencak Silat', '(Seni)', 'Putra', 'Beregu');
INSERT INTO `master` VALUES ('118', 'Pencak Silat', '(Seni)', 'Putri', 'Tunggal');
INSERT INTO `master` VALUES ('119', 'Pencak Silat', '(Seni)', 'Putri', 'Ganda');
INSERT INTO `master` VALUES ('120', 'Pencak Silat', '(Seni)', 'Putri', 'Beregu');
INSERT INTO `master` VALUES ('121', 'Shorinji Kempo', null, 'Putra', 'Embu Berpasangan Tingkat Kyu III');
INSERT INTO `master` VALUES ('122', 'Shorinji Kempo', null, 'Putra', 'Embu Berpasangan Tingkat Kyu Kenshi');
INSERT INTO `master` VALUES ('123', 'Shorinji Kempo', null, 'Putra', 'Embu Beregu Putra');
INSERT INTO `master` VALUES ('124', 'Shorinji Kempo', null, 'Putra', 'Randori Putra 50 kg(>45 s/d 50 kg)');
INSERT INTO `master` VALUES ('125', 'Shorinji Kempo', null, 'Putra', 'Randori Putra 55 kg(>50 s/d 55 kg)');
INSERT INTO `master` VALUES ('126', 'Shorinji Kempo', null, 'Putra', 'Randori Putra 60 kg(>55 s/d 60 kg)');
INSERT INTO `master` VALUES ('127', 'Shorinji Kempo', null, 'Putra', 'Randori Putra 65 kg(>60 s/d 65 kg)');
INSERT INTO `master` VALUES ('128', 'Shorinji Kempo', null, 'Putra', 'Randori Putra 65 kg(>60 s/d 65 kg)');
INSERT INTO `master` VALUES ('129', 'Shorinji Kempo', null, 'Putri', 'Embu Berpasangan Tingkat Kyu III');
INSERT INTO `master` VALUES ('130', 'Shorinji Kempo', null, 'Putri', 'Embu Berpasangan Tingkat Kyu Kenshi');
INSERT INTO `master` VALUES ('131', 'Shorinji Kempo', null, 'Putri', 'Embu Beregu Putri');
INSERT INTO `master` VALUES ('132', 'Shorinji Kempo', null, 'Putri', 'Randori Putri 45 kg(>40 s/d 45 kg)');
INSERT INTO `master` VALUES ('133', 'Shorinji Kempo', null, 'Putri', 'Randori Putri 48 kg(>45 s/d 48 kg)');
INSERT INTO `master` VALUES ('134', 'Shorinji Kempo', null, 'Putri', 'Randori Putri 50 kg(>48 s/d 50 kg)');
INSERT INTO `master` VALUES ('135', 'Shorinji Kempo', null, 'Putri', 'Randori Putri 55 kg(>50 s/d 55 kg)');
INSERT INTO `master` VALUES ('136', 'Shorinji Kempo', null, 'Putri', 'Randori Putri 60 kg(>55 s/d 60 kg)');
INSERT INTO `master` VALUES ('137', 'Shorinji Kempo', null, 'Campuran', 'Embu Berpasangan Tingkat Kyu III');
INSERT INTO `master` VALUES ('138', 'Shorinji Kempo', null, 'Campuran', 'Embu Berpasangan Tingkat Kyu Kenshi');
INSERT INTO `master` VALUES ('139', 'Shorinji Kempo', null, 'Campuran', 'Embu Beregu');
INSERT INTO `master` VALUES ('140', 'Shorinji Kempo', null, 'Campuran', 'Embu Berpasangan Tingkat Kyu III');
INSERT INTO `master` VALUES ('141', 'Shorinji Kempo', null, 'Campuran', 'Embu Berpasangan Tingkat Kyu Kenshi');
INSERT INTO `master` VALUES ('142', 'Shorinji Kempo', null, 'Campuran', 'Embu Beregu');
INSERT INTO `master` VALUES ('143', 'Gulat', null, 'Grego Putra', 'Kelas 48 kg');
INSERT INTO `master` VALUES ('144', 'Gulat', null, 'Grego Putra', 'Kelas 52 kg');
INSERT INTO `master` VALUES ('145', 'Gulat', null, 'Grego Putra', 'Kelas 57 kg');
INSERT INTO `master` VALUES ('146', 'Gulat', null, 'Grego Putra', 'Kelas 61 kg');
INSERT INTO `master` VALUES ('147', 'Gulat', null, 'Grego Putra', 'Kelas 65 kg');
INSERT INTO `master` VALUES ('148', 'Gulat', null, 'Grego Putra', 'Kelas 70 kg');
INSERT INTO `master` VALUES ('149', 'Gulat', null, 'Grego Putra', 'Kelas 74 kg');
INSERT INTO `master` VALUES ('150', 'Gulat', null, 'Grego Putra', 'Kelas 79 kg');
INSERT INTO `master` VALUES ('151', 'Gulat', null, 'Grego Putra', 'Kelas 86 kg');
INSERT INTO `master` VALUES ('152', 'Gulat', null, 'Bebas Putra', 'Kelas 50 kg');
INSERT INTO `master` VALUES ('153', 'Gulat', null, 'Bebas Putra', 'Kelas 55 kg');
INSERT INTO `master` VALUES ('154', 'Gulat', null, 'Bebas Putra', 'Kelas 60 kg');
INSERT INTO `master` VALUES ('155', 'Gulat', null, 'Bebas Putra', 'Kelas 63 kg');
INSERT INTO `master` VALUES ('156', 'Gulat', null, 'Bebas Putra', 'Kelas 67 kg');
INSERT INTO `master` VALUES ('157', 'Gulat', null, 'Bebas Putra', 'Kelas 72 kg');
INSERT INTO `master` VALUES ('158', 'Gulat', null, 'Bebas Putra', 'Kelas 77 kg');
INSERT INTO `master` VALUES ('159', 'Gulat', null, 'Bebas Putra', 'Kelas 82 kg');
INSERT INTO `master` VALUES ('160', 'Gulat', null, 'Bebas Putra', 'Kelas 87 kg');
INSERT INTO `master` VALUES ('161', 'Gulat', null, 'Bebas Putri', 'Kelas 46 kg');
INSERT INTO `master` VALUES ('162', 'Gulat', null, 'Bebas Putri', 'Kelas 50 kg');
INSERT INTO `master` VALUES ('163', 'Gulat', null, 'Bebas Putri', 'Kelas 53 kg');
INSERT INTO `master` VALUES ('164', 'Gulat', null, 'Bebas Putri', 'Kelas 55 kg');
INSERT INTO `master` VALUES ('165', 'Gulat', null, 'Bebas Putri', 'Kelas 57 kg');
INSERT INTO `master` VALUES ('166', 'Gulat', null, 'Bebas Putri', 'Kelas 59 kg');
INSERT INTO `master` VALUES ('167', 'Gulat', null, 'Bebas Putri', 'Kelas 62 kg');
INSERT INTO `master` VALUES ('168', 'Gulat', null, 'Bebas Putri', 'Kelas 65 kg');
INSERT INTO `master` VALUES ('169', 'Gulat', null, 'Bebas Putri', 'Kelas 68 kg');
INSERT INTO `master` VALUES ('170', 'Gulat', null, 'Bebas Putri', 'Kelas 72 kg');
INSERT INTO `master` VALUES ('171', 'Selam', null, 'KU A Terbuka', 'Surface 50 m');
INSERT INTO `master` VALUES ('172', 'Selam', null, 'KU A Terbuka', 'Surface 100 m');
INSERT INTO `master` VALUES ('173', 'Selam', null, 'KU A Terbuka', 'Surface 200 m');
INSERT INTO `master` VALUES ('174', 'Selam', null, 'KU A Terbuka', 'Surface 400 m');
INSERT INTO `master` VALUES ('175', 'Selam', null, 'KU A Terbuka', 'Surface 800 m');
INSERT INTO `master` VALUES ('176', 'Selam', null, 'KU A Terbuka', 'Apnea 50 m');
INSERT INTO `master` VALUES ('177', 'Selam', null, 'KU A Terbuka', 'Bifin 50 m');
INSERT INTO `master` VALUES ('178', 'Selam', null, 'KU A Terbuka', 'Bifin 100 m');
INSERT INTO `master` VALUES ('179', 'Selam', null, 'KU A Terbuka', 'Bifin 200 m');
INSERT INTO `master` VALUES ('180', 'Selam', null, 'KU A Terbuka', 'Bifin 400 m');
INSERT INTO `master` VALUES ('181', 'Selam', null, 'KU B', 'Surface 50 m');
INSERT INTO `master` VALUES ('182', 'Selam', null, 'KU B', 'Surface 100 m');
INSERT INTO `master` VALUES ('183', 'Selam', null, 'KU B', 'Surface 200 m');
INSERT INTO `master` VALUES ('184', 'Selam', null, 'KU B', 'Surface 400 m');
INSERT INTO `master` VALUES ('185', 'Selam', null, 'KU B', 'Surface 800 m');
INSERT INTO `master` VALUES ('186', 'Selam', null, 'KU B', 'Apnea 50 m');
INSERT INTO `master` VALUES ('187', 'Selam', null, 'KU B', 'Bifin 50 m');
INSERT INTO `master` VALUES ('188', 'Selam', null, 'KU B', 'Bifin 100 m');
INSERT INTO `master` VALUES ('189', 'Selam', null, 'KU B', 'Bifin 200 m');
INSERT INTO `master` VALUES ('190', 'Selam', null, 'KU B', 'Bifin 400 m');
INSERT INTO `master` VALUES ('191', 'Selam', null, 'KU C', 'Surface 50 m');
INSERT INTO `master` VALUES ('192', 'Selam', null, 'KU C', 'Surface 100 m');
INSERT INTO `master` VALUES ('193', 'Selam', null, 'KU C', 'Surface 200 m');
INSERT INTO `master` VALUES ('194', 'Selam', null, 'KU C', 'Bifin 50 m');
INSERT INTO `master` VALUES ('195', 'Selam', null, 'KU C', 'Bifin 100 m');
INSERT INTO `master` VALUES ('196', 'Selam', null, 'KU C', 'Bifin 200 m');
INSERT INTO `master` VALUES ('197', 'Futsal', null, null, null);
INSERT INTO `master` VALUES ('198', 'Sepak Bola', null, null, null);
INSERT INTO `master` VALUES ('199', 'Karate', null, 'Putra', 'Kata Perorangan');
INSERT INTO `master` VALUES ('200', 'Karate', null, 'Putra', 'Kata Beregu');
INSERT INTO `master` VALUES ('201', 'Karate', null, 'Putra', 'Kumite Perorangan 55 kg');
INSERT INTO `master` VALUES ('202', 'Karate', null, 'Putra', 'Kumite Perorangan 60 kg');
INSERT INTO `master` VALUES ('203', 'Karate', null, 'Putra', 'Kumite Perorangan 67 kg');
INSERT INTO `master` VALUES ('204', 'Karate', null, 'Putra', 'Kumite Perorangan 75 kg');
INSERT INTO `master` VALUES ('205', 'Karate', null, 'Putra', 'Kumite Perorangan 84 kg');
INSERT INTO `master` VALUES ('206', 'Karate', null, 'Putra', 'Kumite Perorangan >84 kg');
INSERT INTO `master` VALUES ('207', 'Karate', null, 'Putri', 'Kata Perorangan');
INSERT INTO `master` VALUES ('208', 'Karate', null, 'Putri', 'Kata Beregu');
INSERT INTO `master` VALUES ('209', 'Karate', null, 'Putri', 'Kumite Perorangan 50 kg');
INSERT INTO `master` VALUES ('210', 'Karate', null, 'Putri', 'Kumite Perorangan 55 kg');
INSERT INTO `master` VALUES ('211', 'Karate', null, 'Putri', 'Kumite Perorangan 61 kg');
INSERT INTO `master` VALUES ('212', 'Karate', null, 'Putri', 'Kumite Perorangan 68 kg');
INSERT INTO `master` VALUES ('213', 'Karate', null, 'Putri', 'Kumite Perorangan >68 kg');
INSERT INTO `master` VALUES ('214', 'Tenis Lapangan', null, 'Putra', 'Tunggal Putra');
INSERT INTO `master` VALUES ('215', 'Tenis Lapangan', null, 'Putra', 'Ganda Putra');
INSERT INTO `master` VALUES ('216', 'Tenis Lapangan', null, 'Putra', 'Ganda Campuran');
INSERT INTO `master` VALUES ('217', 'Tenis Lapangan', null, 'Putri', 'Tunggal Putri');
INSERT INTO `master` VALUES ('218', 'Tenis Lapangan', null, 'Putri', 'Ganda Campuran');
INSERT INTO `master` VALUES ('219', 'Taekwondo', null, 'Gyeorugi Prestasi(Yunior Putra)', '< 45 kg (max. 45 kg)');
INSERT INTO `master` VALUES ('220', 'Taekwondo', null, 'Gyeorugi Prestasi(Yunior Putra)', '< 48 kg (45.1 - 48 kg)');
INSERT INTO `master` VALUES ('221', 'Taekwondo', null, 'Gyeorugi Prestasi(Yunior Putra)', '< 51 kg (48.1 - 51 kg)');
INSERT INTO `master` VALUES ('222', 'Taekwondo', null, 'Gyeorugi Prestasi(Yunior Putra)', '< 55 kg (51.1 - 55 kg)');
INSERT INTO `master` VALUES ('223', 'Taekwondo', null, 'Gyeorugi Prestasi(Yunior Putra)', '< 59 kg (55.1 - 59 kg)');
INSERT INTO `master` VALUES ('224', 'Taekwondo', null, 'Gyeorugi Prestasi(Yunior Putra)', '< 63 kg (59.1 - 63 kg)');
INSERT INTO `master` VALUES ('225', 'Taekwondo', null, 'Gyeorugi Prestasi(Yunior Putra)', '< 68 kg (63.1 - 68 kg)');
INSERT INTO `master` VALUES ('226', 'Taekwondo', null, 'Gyeorugi Prestasi(Yunior Putra)', '< 73 kg (68.1 - 73 kg)');
INSERT INTO `master` VALUES ('227', 'Taekwondo', null, 'Gyeorugi Prestasi(Yunior Putra)', '< 78 kg (73.1 - 78 kg)');
INSERT INTO `master` VALUES ('228', 'Taekwondo', null, 'Gyeorugi Prestasi(Yunior Putra)', '> 78 kg');
INSERT INTO `master` VALUES ('229', 'Taekwondo', null, 'Gyeorugi Prestasi(Yunior Putri)', '< 42 kg (max. 42 kg)');
INSERT INTO `master` VALUES ('230', 'Taekwondo', null, 'Gyeorugi Prestasi(Yunior Putri)', '< 44 kg (42.1 - 44 kg)');
INSERT INTO `master` VALUES ('231', 'Taekwondo', null, 'Gyeorugi Prestasi(Yunior Putri)', '< 46 kg (44.1 - 46 kg)');
INSERT INTO `master` VALUES ('232', 'Taekwondo', null, 'Gyeorugi Prestasi(Yunior Putri)', '< 49 kg (46.1 - 49 kg)');
INSERT INTO `master` VALUES ('233', 'Taekwondo', null, 'Gyeorugi Prestasi(Yunior Putri)', '< 52 kg (49.1 - 52 kg)');
INSERT INTO `master` VALUES ('234', 'Taekwondo', null, 'Gyeorugi Prestasi(Yunior Putri)', '< 55 kg (52.1 - 55 kg)');
INSERT INTO `master` VALUES ('235', 'Taekwondo', null, 'Gyeorugi Prestasi(Yunior Putri)', '< 59 kg (55.1 - 59 kg)');
INSERT INTO `master` VALUES ('236', 'Taekwondo', null, 'Gyeorugi Prestasi(Yunior Putri)', '< 63 kg (59.1 - 63 kg)');
INSERT INTO `master` VALUES ('237', 'Taekwondo', null, 'Gyeorugi Prestasi(Yunior Putri)', '< 68 kg (63.1 - 68 kg)');
INSERT INTO `master` VALUES ('238', 'Taekwondo', null, 'Gyeorugi Prestasi(Yunior Putri)', '> 68 kg');
INSERT INTO `master` VALUES ('239', 'Taekwondo', null, 'Gyeorugi Prestasi(Senior Putra)', '< 54 kg');
INSERT INTO `master` VALUES ('240', 'Taekwondo', null, 'Gyeorugi Prestasi(Senior Putra)', '< 58 kg (54.1 - 58 kg)');
INSERT INTO `master` VALUES ('241', 'Taekwondo', null, 'Gyeorugi Prestasi(Senior Putra)', '< 63 kg (58.1 - 63 kg)');
INSERT INTO `master` VALUES ('242', 'Taekwondo', null, 'Gyeorugi Prestasi(Senior Putra)', '< 68 kg (63.1 - 68 kg)');
INSERT INTO `master` VALUES ('243', 'Taekwondo', null, 'Gyeorugi Prestasi(Senior Putra)', '< 74 kg (68.1 - 74 kg)');
INSERT INTO `master` VALUES ('244', 'Taekwondo', null, 'Gyeorugi Prestasi(Senior Putra)', '< 80 kg (74.1 - 80 kg)');
INSERT INTO `master` VALUES ('245', 'Taekwondo', null, 'Gyeorugi Prestasi(Senior Putra)', '< 87 kg (80.1 - 87 kg)');
INSERT INTO `master` VALUES ('246', 'Taekwondo', null, 'Gyeorugi Prestasi(Senior Putra)', '> 87 kg');
INSERT INTO `master` VALUES ('247', 'Taekwondo', null, 'Gyeorugi Prestasi(Senior Putri)', '< 46 kg ');
INSERT INTO `master` VALUES ('248', 'Taekwondo', null, 'Gyeorugi Prestasi(Senior Putri)', '< 49 kg (46.1 - 49 kg)');
INSERT INTO `master` VALUES ('249', 'Taekwondo', null, 'Gyeorugi Prestasi(Senior Putri)', '< 53 kg (49.1 - 53 kg)');
INSERT INTO `master` VALUES ('250', 'Taekwondo', null, 'Gyeorugi Prestasi(Senior Putri)', '< 57 kg (53.1 - 57 kg)');
INSERT INTO `master` VALUES ('251', 'Taekwondo', null, 'Gyeorugi Prestasi(Senior Putri)', '< 62 kg (57.1 - 62 kg)');
INSERT INTO `master` VALUES ('252', 'Taekwondo', null, 'Gyeorugi Prestasi(Senior Putri)', '< 67 kg (62.1 - 67 kg)');
INSERT INTO `master` VALUES ('253', 'Taekwondo', null, 'Gyeorugi Prestasi(Senior Putri)', '< 73 kg (67.1 - 73 kg)');
INSERT INTO `master` VALUES ('254', 'Taekwondo', null, 'Gyeorugi Prestasi(Senior Putri)', '> 73 kg');
INSERT INTO `master` VALUES ('255', 'Taekwondo', null, 'Poomsae', null);
INSERT INTO `master` VALUES ('256', 'Cricket', null, 'Cricket Super Six (Cricket 6\'s)', null);
INSERT INTO `master` VALUES ('257', 'Cricket', null, 'Cricket 6\'s Man', null);
INSERT INTO `master` VALUES ('258', 'Bilyar', null, 'Bola 9 (Nine Ball)', null);
INSERT INTO `master` VALUES ('259', 'Bilyar', null, 'Bola 10 (Ten Ball)', null);
INSERT INTO `master` VALUES ('260', 'Bilyar', null, 'Bola 15/8 Ball', null);
INSERT INTO `master` VALUES ('261', 'Catur', null, null, null);

-- ----------------------------
-- Table structure for participants
-- ----------------------------
DROP TABLE IF EXISTS `participants`;
CREATE TABLE `participants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_tlp` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `cabor_induk` varchar(255) DEFAULT NULL,
  `cabor_jenis` varchar(255) DEFAULT NULL,
  `cabor_kelas` varchar(255) DEFAULT NULL,
  `cabor_keterangan` varchar(255) DEFAULT NULL,
  `cabor2_jenis` varchar(255) DEFAULT NULL,
  `cabor2_kelas` varchar(255) DEFAULT NULL,
  `cabor2_keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `no_tlp_unik` (`no_tlp`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of participants
-- ----------------------------
INSERT INTO `participants` VALUES ('1', 'Rahman', 'Jalan Mondoroko', 'Malang', '1997-02-19', 'swa@mahasiswa.com', '085852945712', 'Ampelgading', 'Kick Boxing', '(Full Contact)', 'Kelas A(16-20 tahun)', '41-45 kg', '(Musical Form)', 'Kelas B(< 14 tahun)', 'Tangan Kosong');
INSERT INTO `participants` VALUES ('2', 'Rahman', 'Ngalamkipa', 'Malangx', '1998-11-30', 'maswa@mahasiswa.com', '123871236751726', 'Ampelgading', 'Kick Boxing', '(Full Contact)', 'Kelas A(16-20 tahun)', '41-45 kg', '(Point Fighting)', 'Kelas A(16-20 tahun)', '51-55 kg');
INSERT INTO `participants` VALUES ('4', 'Rahmano', 'Malangkasda', 'Malangx', '1997-02-19', 'guru@guru.com', '1245465431', 'Ampelgading', 'Bola Voli Indoor', null, null, null, null, null, null);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('atlit', '1e8ea2bd2a956d17c9be48792c76aa73');
