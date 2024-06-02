-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: php_dao_little_project
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `car` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `model` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cars`
--

LOCK TABLES `cars` WRITE;
/*!40000 ALTER TABLE `cars` DISABLE KEYS */;
INSERT INTO `cars` VALUES (45,'Toyota Camry',24000.00,'2020'),(46,'Honda Accord',26000.00,'2021'),(47,'Ford Mustang',35000.00,'2019'),(48,'Chevrolet Malibu',23000.00,'2018'),(49,'Nissan Altima',25000.00,'2020'),(50,'BMW 3 Series',41000.00,'2022'),(51,'Audi A4',42000.00,'2021'),(52,'Mercedes-Benz C-Class',43000.00,'2022'),(53,'Volkswagen Passat',27000.00,'2019'),(54,'Subaru Impreza',22000.00,'2020'),(55,'Kia Optima',24000.00,'2019'),(56,'Hyundai Sonata',23000.00,'2018'),(57,'Mazda 6',25000.00,'2021'),(58,'Tesla Model 3',48000.00,'2022'),(59,'Jaguar XE',46000.00,'2021'),(60,'Lexus ES',40000.00,'2020'),(61,'Infiniti Q50',42000.00,'2019'),(62,'Acura TLX',38000.00,'2021'),(63,'Cadillac CT5',45000.00,'2022'),(64,'Genesis G70',42000.00,'2021'),(65,'Ford Explorer',32000.00,'2020'),(66,'Chevrolet Tahoe',50000.00,'2021'),(67,'Honda Pilot',34000.00,'2019'),(68,'Toyota Highlander',35000.00,'2020'),(69,'Jeep Grand Cherokee',37000.00,'2021'),(70,'Nissan Rogue',28000.00,'2022'),(71,'BMW X5',60000.00,'2020'),(72,'Audi Q7',65000.00,'2021'),(73,'Mercedes-Benz GLE',70000.00,'2022'),(74,'Subaru Outback',29000.00,'2021');
/*!40000 ALTER TABLE `cars` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-02 20:48:03
