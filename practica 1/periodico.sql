-- MySQL dump 10.13  Distrib 5.5.31, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: periodico
-- ------------------------------------------------------
-- Server version	5.5.31-0ubuntu0.12.04.1

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
-- Table structure for table `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comentarios` (
  `pagina` varchar(50) DEFAULT NULL,
  `usuario` varchar(15) DEFAULT NULL,
  `texto` varchar(150) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentarios`
--

LOCK TABLES `comentarios` WRITE;
/*!40000 ALTER TABLE `comentarios` DISABLE KEYS */;
INSERT INTO `comentarios` VALUES ('oliver_coronan_helen_mirren_20130428.php','admin','Prueba de comentario en base de datos','2013-06-14'),('oliver_coronan_helen_mirren_20130428.php','admin',' Prueba desde la web','0000-00-00'),('oliver_coronan_helen_mirren_20130428.php','admin',' Prueba 4','2013-06-15'),('oliver_coronan_helen_mirren_20130428.php','admin','Prueba 5','2013-06-16'),('oliver_coronan_helen_mirren_20130428.php','admin',' Prueba 6','2013-06-16'),('oliver_coronan_helen_mirren_20130428.php','admin',' Prueba 7','2013-06-16'),('oliver_coronan_helen_mirren_20130428.php','admin',' Prueba 8','2013-06-16'),('oliver_coronan_helen_mirren_20130428.php','admin',' Prueba 9','2013-06-23'),('oliver_coronan_helen_mirren_20130428.php','admin',' Prueba 9','2013-06-23'),('oliver_coronan_helen_mirren_20130428.php','admin',' Prueba de envio si estÃ¡ identificado','2013-06-23'),('oliver_coronan_helen_mirren_20130428.php','admin',' Prueba\r\n','2013-06-23'),('juan_gelman_instalado_sistema_20130429.php','admin',' prueba','2013-06-23'),('juan_gelman_instalado_sistema_20130429.php','admin',' prueba','2013-06-23'),('juan_gelman_instalado_sistema_20130429.php','admin',' prueba usuario no identificado','2013-06-23'),('juan_gelman_instalado_sistema_20130429.php','admin',' prueba usuario identificado','2013-06-23'),('juan_gelman_instalado_sistema_20130429.php','admin',' usuario identificado','2013-06-23'),('juan_gelman_instalado_sistema_20130429.php','admin',' usuario identificado 2','2013-06-23'),('caperucita_doctora_en_manhattan_20130429.php','admin',' prueba usuario conectado','2013-06-23'),('teoria_del_pobre_perpetuo_20130502.php','admin','prueba','2013-06-23'),('pau_gasol_siempre_fiel_20130430.php','admin',' QuÃ© bueno Gasol!','2013-06-23'),('anatomia_de_decreto_limitado_20130428.php','admin',' pruebaaaa','2013-06-23'),('estudiante_que_salvo_mundo_20130428.php','admin',' PrUeBa','2013-06-23'),('pau_gasol_siempre_fiel_20130430.php','admin',' Prueba usuario','2013-06-23'),('pau_gasol_siempre_fiel_20130430.php','roberto',' Prueba usuario 2','2013-06-23');
/*!40000 ALTER TABLE `comentarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nuevasNoticias`
--

DROP TABLE IF EXISTS `nuevasNoticias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nuevasNoticias` (
  `usuario` varchar(15) DEFAULT 'admin',
  `texto` varchar(150) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nuevasNoticias`
--

LOCK TABLES `nuevasNoticias` WRITE;
/*!40000 ALTER TABLE `nuevasNoticias` DISABLE KEYS */;
INSERT INTO `nuevasNoticias` VALUES ('admin','Acercamiento entre Rusia y Japón. El presidente ruso, Vladimir Putin, y el primer ministro japonés, Shinzo Abe, han expresado su intención de acabar c','2013-06-16 10:10:29'),('admin','Afganistán recibió fondos de la CIA. Así lo ha reconocido el presidente afgano, Hamid Karzai. \"Afganistán ha recibido dinero de la CIA durante los últ','2013-06-16 10:10:29'),('admin','El recién nombrado primer ministro italiano, Enrico Letta, ha manifestado la urgencia de implantar medidas de crecimiento para revertir la política de','2013-06-16 10:10:29'),('admin','Prueba 1 ','2013-06-16 20:13:12'),('Alfonso','Prueba 2','2013-06-16 20:15:09'),('xPsdW sdf','Prueba 3 ','2013-06-16 20:17:00'),('SDFsdf','Prueba 4 Prueba 4 Prueba 4 Prueba 4 Prueba 4 Prueba 4 Prueba 4 Prueba 4 Prueba 4 Prueba 4 Prueba 4 Prueba 4 Prueba 4 Prueba 4 Prueba 4 Prueba 4 Prueba','2013-06-16 20:17:24'),('asfasdfg','Prueba 5 ','2013-06-16 20:28:02'),('prueba 6','prueba 6 ','2013-06-16 20:29:48'),('prueba 7','prueba 7 ','2013-06-16 20:30:04'),('8','prueba 8 ','2013-06-16 20:30:17'),('Administrador',' Prueba 9','2013-06-16 22:20:27'),('Administrador','Prueba 10 ','2013-06-17 09:01:43'),('admin','Noticia 1/150','2013-06-22 17:58:58'),('admin','Noticia 2/150','2013-06-22 17:58:59'),('admin','Noticia 3/150','2013-06-22 17:59:00'),('admin','Noticia 4/150','2013-06-22 17:59:01'),('admin','Noticia 5/150','2013-06-22 17:59:02'),('admin','Noticia 6/150','2013-06-22 17:59:03'),('admin','Noticia 7/150','2013-06-22 17:59:04'),('admin','Noticia 8/150','2013-06-22 17:59:05'),('admin','Noticia 9/150','2013-06-22 17:59:06'),('admin','Noticia 10/150','2013-06-22 17:59:07'),('admin','Noticia 11/150','2013-06-22 17:59:08'),('admin','Noticia 12/150','2013-06-22 17:59:09'),('admin','Noticia 13/150','2013-06-22 17:59:10'),('admin','Noticia 14/150','2013-06-22 17:59:11'),('admin','Noticia 15/150','2013-06-22 17:59:12'),('admin','Noticia 16/150','2013-06-22 17:59:13'),('admin','Noticia 17/150','2013-06-22 17:59:14'),('admin','Noticia 18/150','2013-06-22 17:59:15'),('admin','Noticia 19/150','2013-06-22 17:59:16'),('admin','Noticia 20/150','2013-06-22 17:59:17'),('admin','Noticia 21/150','2013-06-22 17:59:18'),('admin','Noticia 22/150','2013-06-22 17:59:19'),('admin','Noticia 23/150','2013-06-22 17:59:20'),('admin','Noticia 24/150','2013-06-22 17:59:21'),('admin','Noticia 25/150','2013-06-22 17:59:22'),('admin','Noticia 26/150','2013-06-22 17:59:23'),('admin','Noticia 27/150','2013-06-22 17:59:24'),('admin','Noticia 28/150','2013-06-22 17:59:25'),('admin','Noticia 29/150','2013-06-22 17:59:26'),('admin','Noticia 30/150','2013-06-22 17:59:27'),('admin','Noticia 31/150','2013-06-22 17:59:28'),('admin','Noticia 32/150','2013-06-22 17:59:29'),('admin','Noticia 33/150','2013-06-22 17:59:30'),('admin','Noticia 34/150','2013-06-22 17:59:31'),('admin','Noticia 35/150','2013-06-22 17:59:32'),('admin','Noticia 36/150','2013-06-22 17:59:33'),('admin','Noticia 37/150','2013-06-22 17:59:34'),('admin','Noticia 38/150','2013-06-22 17:59:35'),('admin','Noticia 39/150','2013-06-22 17:59:36'),('admin','Noticia 40/150','2013-06-22 17:59:37'),('admin','Noticia 41/150','2013-06-22 17:59:38'),('admin','Noticia 42/150','2013-06-22 17:59:39'),('admin','Noticia 43/150','2013-06-22 17:59:40'),('admin','Noticia 44/150','2013-06-22 17:59:41'),('admin','Noticia 45/150','2013-06-22 17:59:42'),('admin','Noticia 46/150','2013-06-22 17:59:43'),('admin','Noticia 47/150','2013-06-22 17:59:44'),('admin','Noticia 48/150','2013-06-22 17:59:45'),('admin','Noticia 49/150','2013-06-22 17:59:46'),('admin','Noticia 50/150','2013-06-22 17:59:47'),('admin','Noticia 51/150','2013-06-22 17:59:48'),('admin','Noticia 52/150','2013-06-22 17:59:49'),('admin','Noticia 53/150','2013-06-22 17:59:50'),('admin','Noticia 54/150','2013-06-22 17:59:51'),('admin','Noticia 55/150','2013-06-22 17:59:52'),('admin','Noticia 56/150','2013-06-22 17:59:53'),('admin','Noticia 57/150','2013-06-22 17:59:54'),('admin','Noticia 58/150','2013-06-22 17:59:55'),('admin','Noticia 59/150','2013-06-22 17:59:56'),('admin','Noticia 60/150','2013-06-22 17:59:57'),('admin','Noticia 61/150','2013-06-22 17:59:58'),('admin','Noticia 62/150','2013-06-22 17:59:59'),('admin','Noticia 63/150','2013-06-22 18:00:00'),('admin','Noticia 64/150','2013-06-22 18:00:01'),('admin','Noticia 65/150','2013-06-22 18:00:02'),('admin','Noticia 66/150','2013-06-22 18:00:03'),('admin','Noticia 67/150','2013-06-22 18:00:04'),('admin','Noticia 68/150','2013-06-22 18:00:05'),('admin','Noticia 69/150','2013-06-22 18:00:06'),('admin','Noticia 70/150','2013-06-22 18:00:07'),('admin','Noticia 71/150','2013-06-22 18:00:08'),('admin','Noticia 72/150','2013-06-22 18:00:09'),('admin','Noticia 73/150','2013-06-22 18:00:10'),('admin','Noticia 74/150','2013-06-22 18:00:11'),('admin','Noticia 75/150','2013-06-22 18:00:12'),('admin','Noticia 76/150','2013-06-22 18:00:13'),('admin','Noticia 77/150','2013-06-22 18:00:14'),('admin','Noticia 78/150','2013-06-22 18:00:15'),('admin','Noticia 79/150','2013-06-22 18:00:16'),('admin','Noticia 80/150','2013-06-22 18:00:17'),('admin','Noticia 81/150','2013-06-22 18:00:18'),('admin','Noticia 82/150','2013-06-22 18:00:19'),('admin','Noticia 83/150','2013-06-22 18:00:20'),('admin','Noticia 84/150','2013-06-22 18:00:21'),('admin','Noticia 85/150','2013-06-22 18:00:22'),('admin','Noticia 86/150','2013-06-22 18:00:23'),('admin','Noticia 87/150','2013-06-22 18:00:24'),('admin','Noticia 88/150','2013-06-22 18:00:25'),('admin','Noticia 89/150','2013-06-22 18:00:26'),('admin','Noticia 90/150','2013-06-22 18:00:27'),('admin','Noticia 91/150','2013-06-22 18:00:28'),('admin','Noticia 92/150','2013-06-22 18:00:29'),('admin','Noticia 93/150','2013-06-22 18:00:30'),('admin','Noticia 94/150','2013-06-22 18:00:31'),('admin','Noticia 95/150','2013-06-22 18:00:32'),('admin','Noticia 96/150','2013-06-22 18:00:33'),('admin','Noticia 97/150','2013-06-22 18:00:34'),('admin','Noticia 98/150','2013-06-22 18:00:35'),('admin','Noticia 99/150','2013-06-22 18:00:36'),('admin','Noticia 100/150','2013-06-22 18:00:37'),('admin','Noticia 101/150','2013-06-22 18:00:38'),('admin','Noticia 102/150','2013-06-22 18:00:39'),('admin','Noticia 103/150','2013-06-22 18:00:40'),('admin','Noticia 104/150','2013-06-22 18:00:41'),('admin','Noticia 105/150','2013-06-22 18:00:42'),('admin','Noticia 106/150','2013-06-22 18:00:43'),('admin','Noticia 107/150','2013-06-22 18:00:44'),('admin','Noticia 108/150','2013-06-22 18:00:45'),('admin','Noticia 109/150','2013-06-22 18:00:46'),('admin','Noticia 110/150','2013-06-22 18:00:47'),('admin','Noticia 111/150','2013-06-22 18:00:48'),('admin','Noticia 112/150','2013-06-22 18:00:49'),('admin','Noticia 113/150','2013-06-22 18:00:50'),('admin','Noticia 114/150','2013-06-22 18:00:51'),('admin','Noticia 115/150','2013-06-22 18:00:52'),('admin','Noticia 116/150','2013-06-22 18:00:53'),('admin','Noticia 117/150','2013-06-22 18:00:54'),('admin','Noticia 118/150','2013-06-22 18:00:55'),('admin','Noticia 119/150','2013-06-22 18:00:56'),('admin','Noticia 120/150','2013-06-22 18:00:57'),('admin','Noticia 121/150','2013-06-22 18:00:58'),('admin','Noticia 122/150','2013-06-22 18:00:59'),('admin','Noticia 123/150','2013-06-22 18:01:00'),('admin','Noticia 124/150','2013-06-22 18:01:01'),('admin','Noticia 125/150','2013-06-22 18:01:02'),('admin','Noticia 126/150','2013-06-22 18:01:03'),('admin','Noticia 127/150','2013-06-22 18:01:04'),('admin','Noticia 128/150','2013-06-22 18:01:05'),('admin','Noticia 129/150','2013-06-22 18:01:06'),('admin','Noticia 130/150','2013-06-22 18:01:07'),('admin','Noticia 131/150','2013-06-22 18:01:08'),('admin','Noticia 132/150','2013-06-22 18:01:09'),('admin','Noticia 133/150','2013-06-22 18:01:10'),('admin','Noticia 134/150','2013-06-22 18:01:11'),('admin','Noticia 135/150','2013-06-22 18:01:12'),('admin','Noticia 136/150','2013-06-22 18:01:13'),('admin','Noticia 137/150','2013-06-22 18:01:14'),('admin','Noticia 138/150','2013-06-22 18:01:15'),('admin','Noticia 139/150','2013-06-22 18:01:16'),('admin','Noticia 140/150','2013-06-22 18:01:17'),('admin','Noticia 141/150','2013-06-22 18:01:18'),('admin','Noticia 142/150','2013-06-22 18:01:19'),('admin','Noticia 143/150','2013-06-22 18:01:20'),('admin','Noticia 144/150','2013-06-22 18:01:21'),('admin','Noticia 145/150','2013-06-22 18:01:22'),('admin','Noticia 146/150','2013-06-22 18:01:23'),('admin','Noticia 147/150','2013-06-22 18:01:24'),('admin','Noticia 148/150','2013-06-22 18:01:25'),('admin','Noticia 149/150','2013-06-22 18:01:26'),('admin','Noticia 150/150','2013-06-22 18:01:27'),('prueba 151','151 ','2013-06-22 23:31:21');
/*!40000 ALTER TABLE `nuevasNoticias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prueba`
--

DROP TABLE IF EXISTS `prueba`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prueba` (
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prueba`
--

LOCK TABLES `prueba` WRITE;
/*!40000 ALTER TABLE `prueba` DISABLE KEYS */;
INSERT INTO `prueba` VALUES ('2013-06-16 08:46:54','admin'),('2013-06-16 08:51:40','juan'),('2013-06-16 08:51:44','pedro'),('2013-06-16 08:51:48','maria');
/*!40000 ALTER TABLE `prueba` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `nombre` varchar(15) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `telefono` int(11) DEFAULT NULL,
  `correo` varchar(40) NOT NULL,
  `web` varchar(40) DEFAULT NULL,
  `usuario` varchar(15) NOT NULL,
  `contrasenia` varchar(12) NOT NULL,
  PRIMARY KEY (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES ('admin','admin',NULL,'jagaro@correo.ugr.es',NULL,'admin','admin'),('roberto','roberto',NULL,'roberto@csf.com',NULL,'roberto','roberto');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-06-23  6:24:59
