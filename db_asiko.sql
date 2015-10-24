/*
Navicat MySQL Data Transfer

Source Server         : XAMPP c
Source Server Version : 50625
Source Host           : localhost:3306
Source Database       : db_asiko

Target Server Type    : MYSQL
Target Server Version : 50625
File Encoding         : 65001

Date: 2015-10-24 14:25:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `groups`
-- ----------------------------
DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of groups
-- ----------------------------
INSERT INTO `groups` VALUES ('1', 'admin', 'Administrator');
INSERT INTO `groups` VALUES ('2', 'members', 'General User');

-- ----------------------------
-- Table structure for `login_attempts`
-- ----------------------------
DROP TABLE IF EXISTS `login_attempts`;
CREATE TABLE `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of login_attempts
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_suratmasuk`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_suratmasuk`;
CREATE TABLE `tbl_suratmasuk` (
  `id_suratmasuk` int(11) NOT NULL AUTO_INCREMENT,
  `no_urut` varchar(10) DEFAULT NULL,
  `no_agenda` varchar(25) DEFAULT NULL,
  `no_surat` varchar(25) DEFAULT NULL,
  `pengirim` varchar(100) DEFAULT NULL,
  `tgl_surat` date DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `perihal` varchar(100) DEFAULT NULL,
  `subperihal` varchar(100) DEFAULT NULL,
  `disposisi_a` varchar(100) DEFAULT NULL,
  `tgl_a` date DEFAULT NULL,
  `isi_disposisi_a` text,
  `disposisi_b` varchar(100) DEFAULT NULL,
  `tgl_b` date DEFAULT NULL,
  `isi_disposisi_b` text,
  `disposisi_c` varchar(100) DEFAULT NULL,
  `tgl_c` date DEFAULT NULL,
  `isi_disposisi_c` text,
  `isi_surat` text,
  `uraian_singkat` text,
  `nominal` varchar(100) DEFAULT NULL,
  `upload` varchar(255) DEFAULT NULL,
  `pelaksana` varchar(100) DEFAULT NULL,
  `tgl_pelaksana` date DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`id_suratmasuk`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_suratmasuk
-- ----------------------------
INSERT INTO `tbl_suratmasuk` VALUES ('1', '1', '1', '1', 'Malang', '0000-00-00', '0000-00-00', 'nominal', 'Bantuan Keuangan Desa', 'Bupati', '0000-00-00', 'Isi', 'Bupati', '0000-00-00', 'Oke', 'Bupati', '0000-00-00', 'Oke', 'Isi surat', 'Uraian singkat', '0', 'strategy-business-concept-icons-orange-version-vector_186662399.jpg', 'pelaksana', '0000-00-00', '0000-00-00');
INSERT INTO `tbl_suratmasuk` VALUES ('2', '2', '2', '2', 'Surabaya', '2015-10-22', '2015-10-23', 'PPKD & Surat Penyediaan Dana', 'Bantuan Keuangan Desa', 'Bupati', '2015-10-22', 'oke', 'Bupati', '2015-10-22', 'oke', 'Bupati', '2015-10-22', 'oke', 'isi surat', 'uraian singkat', 'nominal', '11224717_1052502674769504_8258180866144178269_n.jpg', 'pelaksana', '2015-10-22', 'keterangan');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', null, null, null, '1268889823', '1445668627', '1', 'Admin', 'istrator', 'ADMIN', '0');
INSERT INTO `users` VALUES ('2', '::1', '', '$2y$08$/uW8s72pUAqDPCV9hkiFYe8w7vMOEl8vRcmiodRwt.G30LX3fhG3G', null, 'januarfonti@yahoo.co.id', null, null, null, null, '1445342716', '1445342783', '1', 'Januar', 'Fonti', 'LIMO', '+6282221006673');

-- ----------------------------
-- Table structure for `users_groups`
-- ----------------------------
DROP TABLE IF EXISTS `users_groups`;
CREATE TABLE `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`),
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users_groups
-- ----------------------------
INSERT INTO `users_groups` VALUES ('1', '1', '1');
INSERT INTO `users_groups` VALUES ('2', '1', '2');
INSERT INTO `users_groups` VALUES ('6', '2', '2');
