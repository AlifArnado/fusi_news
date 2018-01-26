/*
SQLyog Enterprise v12.09 (64 bit)
MySQL - 5.7.14 : Database - berita
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`berita` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `berita`;

/*Table structure for table `tbl_ads` */

DROP TABLE IF EXISTS `tbl_ads`;

CREATE TABLE `tbl_ads` (
  `kode_ads` varchar(255) NOT NULL,
  `kode_user` varchar(255) DEFAULT NULL,
  `name_ads` varchar(255) DEFAULT NULL,
  `klik_url` varchar(255) DEFAULT NULL,
  `status_ads` enum('Show','Hide','Faild') DEFAULT NULL,
  `start_ads` date DEFAULT NULL,
  `end_ads` date DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_last` datetime DEFAULT NULL,
  PRIMARY KEY (`kode_ads`),
  KEY `kode_user` (`kode_user`),
  CONSTRAINT `tbl_ads_ibfk_1` FOREIGN KEY (`kode_user`) REFERENCES `tbl_user` (`kode_user`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_ads` */

/*Table structure for table `tbl_kategori` */

DROP TABLE IF EXISTS `tbl_kategori`;

CREATE TABLE `tbl_kategori` (
  `kode_kategori` varchar(11) NOT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`kode_kategori`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `tbl_kategori` */

insert  into `tbl_kategori`(`kode_kategori`,`nama_kategori`,`create_at`) values ('CAT00001','Investigasi','2018-01-22 21:14:57'),('CAT00002','Travel','2018-01-22 21:15:01'),('CAT00003','Politik','2018-01-22 21:15:03'),('CAT00004','Hiburan','2018-01-22 21:15:06'),('CAT00005','Olahraga','2018-01-22 21:15:08'),('CAT00006','Opini','2018-01-22 21:15:10');

/*Table structure for table `tbl_news` */

DROP TABLE IF EXISTS `tbl_news`;

CREATE TABLE `tbl_news` (
  `kode_artikel` varchar(50) NOT NULL,
  `kode_user` varchar(255) DEFAULT NULL,
  `apikey_artikel` varchar(255) DEFAULT NULL,
  `judul_artikel` varchar(255) DEFAULT NULL,
  `slug_url` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `isi_artikel` text,
  `img_name_cover` text,
  `kata_kunci` varchar(255) DEFAULT NULL,
  `status_artikel` enum('Show','Hide','Faild') DEFAULT NULL,
  `featured` enum('Yes','No') DEFAULT NULL,
  `headline` enum('Yes','No') DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_last` datetime DEFAULT NULL,
  PRIMARY KEY (`kode_artikel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_news` */

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `kode_user` varchar(255) NOT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `confirm_password` varchar(20) DEFAULT NULL,
  `dex_password` varchar(20) DEFAULT NULL,
  `email_address` varchar(20) DEFAULT NULL,
  `nomor_telepon` varchar(20) DEFAULT NULL,
  `status_user` varchar(20) DEFAULT NULL,
  `login_on` varchar(20) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`kode_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
