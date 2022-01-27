/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 10.4.11-MariaDB : Database - db_mia
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_mia` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_mia`;

/*Table structure for table `tbl_content` */

DROP TABLE IF EXISTS `tbl_content`;

CREATE TABLE `tbl_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `handle_id` int(11) DEFAULT NULL,
  `short_content` varchar(255) DEFAULT NULL,
  `long_content` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `status` varchar(5) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_content` */

insert  into `tbl_content`(`id`,`handle_id`,`short_content`,`long_content`,`gambar`,`status`,`created`,`updated`) values (29,1,'PT Mutiara Indah Anugrah is Indonesia based company.','<center style=\"margin: 0px; padding: 0px; color: rgb(77, 77, 77); font-family: Calibri; font-size: 18px;\"><h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">PT Mutiara Indah Anugrah is Indonesia based company.</strong></h2></center><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(77, 77, 77); font-family: Calibri; font-size: 18px; text-align: justify;\">&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(77, 77, 77); font-family: Calibri; font-size: 18px; text-align: justify;\">We are a company engaged in general contractor, which provide all needs in construction project, such as labor supply, construction work, civil work, transportation and material construction supply, in any kind of projects Construction.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(77, 77, 77); font-family: Calibri; font-size: 18px; text-align: justify;\">&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(77, 77, 77); font-family: Calibri; font-size: 18px; text-align: justify;\">Our company was founded in 2011, in a short period of time, we have successfully cooperated with several foreign construction companies, and working on several projects in the area of ​​Indonesia, NEPC (North East Power Plant Company), CHI (China Harbor Indonesia ), Shanxi, Shanghai Electric and Indonesia Sinoma Engineering.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(77, 77, 77); font-family: Calibri; font-size: 18px; text-align: justify;\">&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(77, 77, 77); font-family: Calibri; font-size: 18px; text-align: justify;\">Although the company is still very young, but we are supported by the Board of Directors and professional staff with highly experienced in their respective fields thus resulting in a very good cooperation with all of our clients.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(77, 77, 77); font-family: Calibri; font-size: 18px; text-align: justify;\">&nbsp;</p><center style=\"margin: 0px; padding: 0px; color: rgb(77, 77, 77); font-family: Calibri; font-size: 18px;\"><h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">Our Excellence:</strong></h2><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\">&nbsp;</p></center><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(77, 77, 77); font-family: Calibri; font-size: 18px; text-align: justify;\">Directors and top-level management has committed to HSE, this is because companies realize that every labor is a corporate asset, and we are always evaluating and correcting any programs HSE.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(77, 77, 77); font-family: Calibri; font-size: 18px; text-align: justify;\">&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(77, 77, 77); font-family: Calibri; font-size: 18px; text-align: justify;\">The reason why we do this because we believe the company will grow rapidly and have a good resale value from the point of HSE.</p>','logo pt mia.png','on','2021-02-14 10:52:21',NULL),(30,10,'carousel','','slide1.jpg','on','2021-02-15 06:36:35',NULL),(36,2,'Company Profile PT. Mia','<h6><span style=\"color: rgb(77, 77, 77); font-family: Calibri; text-align: justify;\">PT. Mutiara Indah Anugrah is a local based construction company, established in 2011.<br></span><span style=\"color: rgb(77, 77, 77); font-family: Calibri; text-align: justify;\">In our business development, other than cooperating with other local companies, our company also collaborates with many international companies and also<br></span><span style=\"color: rgb(77, 77, 77); font-family: Calibri; text-align: justify;\">has many international customers. Along the way, competency and quality of our company have been proven by the increase of demand from customers.<br></span><span style=\"color: rgb(77, 77, 77); font-family: Calibri; text-align: justify;\">Therefore, other than construction projects (buildings, warehouse, ports, factories, power plants, etc.), our company has also expanded its business sector<br></span><span style=\"color: rgb(77, 77, 77); font-family: Calibri; text-align: justify;\">such as Labor Supply, Transportation Service, Equipment &amp; Material Supply, etc.</span></h6><h6><br></h6>','company.png','on','2021-02-15 07:13:50',NULL);

/*Table structure for table `tbl_handle` */

DROP TABLE IF EXISTS `tbl_handle`;

CREATE TABLE `tbl_handle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_handle` */

insert  into `tbl_handle`(`id`,`page`) values (1,'home'),(2,'company profile'),(3,'working experience'),(4,'gallery mia'),(5,'labor supply'),(6,'civil and construction work'),(7,'equipment and material suppply'),(8,'business and work visa'),(9,'export and import services'),(10,'carousel');

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `level_user` varchar(1) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `status` varchar(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kd_approve` varchar(1) NOT NULL,
  `w_login` datetime NOT NULL,
  `CreateDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`id_user`,`username`,`pass`,`level_user`,`f_name`,`status`,`email`,`kd_approve`,`w_login`,`CreateDate`) values (1,'mia','5102ecd3d47f6561de70979017b87a80','1','mia','1','mia@gmail.com','1','2021-02-15 06:22:20',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
