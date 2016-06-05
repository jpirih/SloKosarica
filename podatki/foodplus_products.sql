-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: foodplus
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.9-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(155) NOT NULL,
  `description` varchar(500) NOT NULL,
  `production_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `price` float NOT NULL,
  `currency` char(3) NOT NULL,
  `ean_code` varchar(255) DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `weight_unit` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Jogurt MU 3,2','                                                             Navadni jogurt MU Ljubljanske mlekarne 3,2 odstotka maš?obe najboljši za izdelavo doma?ega jogurta \r\n                \r\n                \r\n                \r\n                ','2016-05-25','2016-06-25',0.4018,'EUR','383880003921',180,'gram'),(2,'Pašteta Kekec, 30g','Kekec pašteta \" TA PRAVA \"  malo pakiranje 30 gramov  že prpiravljena to?no za eno osebo       \r\n                \r\n                ','2016-03-22','2017-03-22',0.22,'EUR','383000860400',300,'gram'),(3,'Kremni namaz Nutella, 750g','Kremni namaz Nutella \r\nSestavine: sladkor, palmino olje, LESNIKI (13%), manj masten kakav v prahu (7,4%), posneto MLEKO v prahu (6,6%), SIROTKA v prahu, emulgator: lecitini (SOJA); vanilin.               \r\n         ','2016-05-03','2016-11-03',4.621,'EUR','80176800',750,'gram'),(4,'Ledeni ?aj Fructal, vipavska breskva, 1,5l','                    Ledeni ?aj proizvajalca Fructal D.D. Upam da res vsebuje vipavske breskeve :) Embalaža plastenka 1,5 l                     \r\n                \r\n                ','2015-07-10','2016-07-10',0.95,'EUR','383894502936',1.5,'liter'),(5,'Pija?a Fructal, breskev, 1l','Meni najljbuši sadni sok :) \r\nSestavine: voda, breskova kaša, sladkor, glukozni-fruktozni sirup, kislina (citronska kislina), antioksidant (askorbinska kislina), aroma breskve\r\n            ','2016-04-01','2016-08-18',0.88,'EUR','383894542922',1,'liter'),(7,'Keksi Doma?ica, original, 300g','Ena mojih najljubših sladkarij.  Najboljši za zraven kave. \r\nSestavine: Fini pekovski izdelek. ?ajno pecivo s ?okoladnim oblivom (23%). Sestavine: pšeni?na moka, ?okoladni obliv (sladkor, kakavova masa, kakavovo maslo, mle?na maš?oba, emulgatorja: sojin lecitin, E 476; aroma), sladkor, rastlinska maš?oba (palma, shea), dekstroza, sredstvo za vzhajanje E 503, med, jedilna sol, aroma. Kakavovi deli najmanj 48% v ?okoladnem oblivu.\r\n                ','0216-05-05','2016-05-05',1.82,'EUR','385010231412',300,'gram');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-29 15:19:28
