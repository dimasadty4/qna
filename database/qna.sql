/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : qna

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2021-10-15 16:31:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(45) NOT NULL,
  `password` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of admin
-- ----------------------------

-- ----------------------------
-- Table structure for qnaa
-- ----------------------------
DROP TABLE IF EXISTS `qnaa`;
CREATE TABLE `qnaa` (
  `id_qna` int(11) NOT NULL AUTO_INCREMENT,
  `pertanyaan` text NOT NULL,
  `jawaban` text NOT NULL,
  PRIMARY KEY (`id_qna`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of qnaa
-- ----------------------------
INSERT INTO `qnaa` VALUES ('8', 'Cara Cek Sertifikat Vaksinasi Di PeduliLindungi?', 'Sudah divaksinasi? Sekarang ada cara mudah untuk mengecek sertifikat vaksin.\r\nCara cek sertifikat vaksin dengan NIK sangat mudah dan cepat lho. Status sertifikat vaksinmu dapat langsung diketahui. Berikut langkah-langkahnya:\r\n-Buka situs https://pedulilindungi.id/\r\n-Isilah nama lengkap dan nomor induk kependudukan (NIK) yang diminta\r\n-Centang kolom captcha \"I\'m not a robot\"\r\n-Klik \"Periksa\" dan status vaksin COVID-19 akan muncul.\r\nJika kamu telah divaksin, secara otomatis sertifikat vaksin sudah akan termuat dalam sistem. Namun jika belum, kamu bisa menunggu 7-10 hari setelah vaksin.\r\nBila sertifikat tidak tersedia, hubungi CALL CENTER 119 dengan extension 9 untuk mendapatkan bantuan.\r\nIngat, jangan mengumbar data ataupun sertifikat vaksinasi sembarangan atau ke publik karena ada banyak data pribadi berharga di situ yang dapat disalahgunakan pihak tidak bertanggung jawab.');
INSERT INTO `qnaa` VALUES ('9', 'Apa itu Vaksinasi?', 'Vaksinasi adalah pemberian Vaksin dalam rangka menimbulkan atau meningkatkan kekebalan seseorang secara aktif terhadap suatu penyakit, sehingga apabila suatu saat terpajan dengan penyakit tersebut tidak akan sakit atau hanya mengalami sakit ringan dan tidak menjadi sumber penularan.');
INSERT INTO `qnaa` VALUES ('10', 'Apakah orang yang sudah pernah terkonfirmasi COVID-19 boleh diberikan vaksin?', 'Penyintas COVID-19 dapat divaksinasi 3 bulan setelah sembuh. Apabila setelah dosis pertama sasaran terinfeksi COVID-19 maka dosis pertama vaksinasi tidak perlu diulang tetap diberikan dosis kedua dengan interval yang sama yaitu 3 bulan sejak dinyatakan sembuh.');
INSERT INTO `qnaa` VALUES ('11', 'Apakah setelah divaksin kita pasti kebal terhadap COVID-19?', 'Seperti yang telah dijelaskan sebelumnya, vaksin tidak 100% membuat kita kebal terhadap COVID-19. Namun, akan mengurangi dampak yang ditimbulkan jika kita tertular COVID-19. Untuk itu, meskipun sudah divaksinasi, masyarakat harus tetap menerapkan protokol Kesehatan 5M.');
INSERT INTO `qnaa` VALUES ('12', 'bagaimana melakukan registrasi rumah sakit ?', 'registrasi dilakukan secara online melalui registrasifasyankes.go.id .....');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) NOT NULL,
  `password` varchar(35) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of user
-- ----------------------------
