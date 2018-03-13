CREATE DATABASE  IF NOT EXISTS `hidrocaribe` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `hidrocaribe`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: hidrocaribe
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.26-MariaDB

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
-- Table structure for table `t_cargo`
--

DROP TABLE IF EXISTS `t_cargo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_cargo` (
  `id_cargo` int(11) NOT NULL AUTO_INCREMENT,
  `tx_nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id_cargo`),
  UNIQUE KEY `id_cargo_UNIQUE` (`id_cargo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_cargo`
--

LOCK TABLES `t_cargo` WRITE;
/*!40000 ALTER TABLE `t_cargo` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_cargo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_estatus_planta`
--

DROP TABLE IF EXISTS `t_estatus_planta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_estatus_planta` (
  `id_estatus_planta` int(11) NOT NULL AUTO_INCREMENT,
  `tx_presion_entrada` varchar(15) NOT NULL,
  `tx_presion_salida` varchar(15) NOT NULL,
  `tx_caudal_entrada` varchar(15) NOT NULL,
  `tx_caudal_salida` varchar(15) NOT NULL,
  `tx_captacion` varchar(45) NOT NULL,
  `tx_metros_tanque` varchar(45) NOT NULL,
  `tx_equipo` varchar(45) NOT NULL,
  `tx_cloracion` varchar(45) NOT NULL,
  `hr_reporte` time NOT NULL,
  `fe_reporte` date NOT NULL,
  `fk_jornada` int(11) NOT NULL,
  PRIMARY KEY (`id_estatus_planta`,`fk_jornada`),
  UNIQUE KEY `id_estatus_planta_UNIQUE` (`id_estatus_planta`),
  KEY `fk_t_estatus_planta_t_jornada1_idx` (`fk_jornada`),
  CONSTRAINT `fk_t_estatus_planta_t_jornada1` FOREIGN KEY (`fk_jornada`) REFERENCES `t_jornada` (`id_jornada`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_estatus_planta`
--

LOCK TABLES `t_estatus_planta` WRITE;
/*!40000 ALTER TABLE `t_estatus_planta` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_estatus_planta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_incidencia`
--

DROP TABLE IF EXISTS `t_incidencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_incidencia` (
  `id_incidencia` int(11) NOT NULL AUTO_INCREMENT,
  `tx_descripcion` text NOT NULL,
  `tx_razon` text NOT NULL,
  `fe_incidencia` date NOT NULL,
  `hr_incidencia` time NOT NULL,
  `nu_cantidad` int(11) NOT NULL,
  `tx_dano` varchar(100) NOT NULL,
  `nu_diametro_tuberia` varchar(20) NOT NULL,
  `en_notificado` enum('S','N') NOT NULL,
  `fk_jornada` int(11) NOT NULL,
  `fk_tipo_incidencia` int(11) NOT NULL,
  PRIMARY KEY (`id_incidencia`,`fk_jornada`,`fk_tipo_incidencia`),
  UNIQUE KEY `id_incidencia_UNIQUE` (`id_incidencia`),
  KEY `fk_t_incidencia_t_jornada1_idx` (`fk_jornada`),
  KEY `fk_t_incidencia_t_tipo_incidencia1_idx` (`fk_tipo_incidencia`),
  CONSTRAINT `fk_t_incidencia_t_jornada1` FOREIGN KEY (`fk_jornada`) REFERENCES `t_jornada` (`id_jornada`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_t_incidencia_t_tipo_incidencia1` FOREIGN KEY (`fk_tipo_incidencia`) REFERENCES `t_tipo_incidencia` (`id_tipo_incidencia`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_incidencia`
--

LOCK TABLES `t_incidencia` WRITE;
/*!40000 ALTER TABLE `t_incidencia` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_incidencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_jornada`
--

DROP TABLE IF EXISTS `t_jornada`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_jornada` (
  `id_jornada` int(11) NOT NULL AUTO_INCREMENT,
  `hr_entrada` time NOT NULL,
  `hr_salida` time NOT NULL,
  `fk_operador` int(11) NOT NULL,
  `fk_planta` int(11) NOT NULL,
  PRIMARY KEY (`id_jornada`,`fk_operador`,`fk_planta`),
  UNIQUE KEY `id_jornada_UNIQUE` (`id_jornada`),
  KEY `fk_t_jornada_t_operador1_idx` (`fk_operador`),
  KEY `fk_t_jornada_t_planta1_idx` (`fk_planta`),
  CONSTRAINT `fk_t_jornada_t_operador1` FOREIGN KEY (`fk_operador`) REFERENCES `t_operador` (`id_operador`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_t_jornada_t_planta1` FOREIGN KEY (`fk_planta`) REFERENCES `t_planta` (`id_planta`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_jornada`
--

LOCK TABLES `t_jornada` WRITE;
/*!40000 ALTER TABLE `t_jornada` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_jornada` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_operador`
--

DROP TABLE IF EXISTS `t_operador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_operador` (
  `id_operador` int(11) NOT NULL AUTO_INCREMENT,
  `tx_nombres` varchar(60) NOT NULL,
  `tx_apellidos` varchar(60) NOT NULL,
  `tx_telefonos` varchar(200) NOT NULL,
  `tx_emails` varchar(200) NOT NULL,
  `en_turno` enum('D','N','M') NOT NULL,
  `fk_cargo` int(11) NOT NULL,
  PRIMARY KEY (`id_operador`,`fk_cargo`),
  UNIQUE KEY `id_operador_UNIQUE` (`id_operador`),
  KEY `fk_t_operador_t_cargo1_idx` (`fk_cargo`),
  CONSTRAINT `fk_t_operador_t_cargo1` FOREIGN KEY (`fk_cargo`) REFERENCES `t_cargo` (`id_cargo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_operador`
--

LOCK TABLES `t_operador` WRITE;
/*!40000 ALTER TABLE `t_operador` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_operador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_planta`
--

DROP TABLE IF EXISTS `t_planta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_planta` (
  `id_planta` int(11) NOT NULL AUTO_INCREMENT,
  `tx_nombre` varchar(45) NOT NULL,
  `tx_direccion` varchar(150) NOT NULL,
  `en_tipo_parada` enum('OP','NOP') NOT NULL,
  `fk_tipo_planta` int(11) NOT NULL,
  PRIMARY KEY (`id_planta`,`fk_tipo_planta`),
  UNIQUE KEY `id_planta_UNIQUE` (`id_planta`),
  KEY `fk_t_planta_t_tipo_planta1_idx` (`fk_tipo_planta`),
  CONSTRAINT `fk_t_planta_t_tipo_planta1` FOREIGN KEY (`fk_tipo_planta`) REFERENCES `t_tipo_planta` (`id_tipo_planta`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_planta`
--

LOCK TABLES `t_planta` WRITE;
/*!40000 ALTER TABLE `t_planta` DISABLE KEYS */;
INSERT INTO `t_planta` VALUES (1,'Planta de caratar','en el caratar','OP',15);
/*!40000 ALTER TABLE `t_planta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_tipo_incidencia`
--

DROP TABLE IF EXISTS `t_tipo_incidencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_tipo_incidencia` (
  `id_tipo_incidencia` int(11) NOT NULL AUTO_INCREMENT,
  `tx_nombre` varchar(100) NOT NULL,
  `en_email` enum('S','N') NOT NULL,
  PRIMARY KEY (`id_tipo_incidencia`),
  UNIQUE KEY `id_tipo_incidencia_UNIQUE` (`id_tipo_incidencia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_tipo_incidencia`
--

LOCK TABLES `t_tipo_incidencia` WRITE;
/*!40000 ALTER TABLE `t_tipo_incidencia` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_tipo_incidencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_tipo_planta`
--

DROP TABLE IF EXISTS `t_tipo_planta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_tipo_planta` (
  `id_tipo_planta` int(11) NOT NULL AUTO_INCREMENT,
  `tx_descripcion` varchar(150) NOT NULL,
  `en_tipo` enum('PT','PP','EBAS','EBAP') NOT NULL,
  PRIMARY KEY (`id_tipo_planta`),
  UNIQUE KEY `id_tipo_planta_UNIQUE` (`id_tipo_planta`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_tipo_planta`
--

LOCK TABLES `t_tipo_planta` WRITE;
/*!40000 ALTER TABLE `t_tipo_planta` DISABLE KEYS */;
INSERT INTO `t_tipo_planta` VALUES (15,'PT el Maguey','PT'),(19,'PT Maurica','PT'),(20,'PT Guanta','PT'),(21,'PP el Rincon','PP'),(22,'PP Jose Antonio Anzoategui','PP'),(23,'PP Ezequiel Zamora','PP');
/*!40000 ALTER TABLE `t_tipo_planta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_usuario`
--

DROP TABLE IF EXISTS `t_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_usuario` (
  `id_usuario` varchar(100) NOT NULL,
  `tx_nombre` varchar(100) NOT NULL,
  `tx_apellido` varchar(100) NOT NULL,
  `tx_email` varchar(100) NOT NULL,
  `tx_password` varchar(100) NOT NULL,
  `en_nivel` enum('A','B','C','D') NOT NULL,
  `en_estatus` enum('A','I') NOT NULL,
  `tx_menu_pri` longtext NOT NULL,
  `tx_foto` varchar(100) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `id_usuario_UNIQUE` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_usuario`
--

LOCK TABLES `t_usuario` WRITE;
/*!40000 ALTER TABLE `t_usuario` DISABLE KEYS */;
INSERT INTO `t_usuario` VALUES ('admin','Administrador','','admin@hidrocaribe.com.ve','21232f297a57a5a743894a0e4a801fc3','A','A','[{\"txt\":\"Registro de Planta\",\"url\":\"addplanta\",\"ico\":\"fa fa-industry\"},{\"txt\":\"Tipos de plantas\",\"url\":\"tpplanta\",\"ico\":\"fa fa-exclamation-triangle\"},{\"txt\":\"Tipos de incidencia\",\"url\":\"tpincidencia\",\"ico\":\"fa fa-info\"},{\"txt\":\"Operadores\",\"url\":\"operador\",\"ico\":\"fa fa-archive\"},{\"txt\":\"Cargos\",\"url\":\"cargo\",\"ico\":\"fa fa-money\"},{\"txt\":\"Usuarios\",\"url\":\"user\",\"ico\":\"fa fa-cogs\"},{\"txt\":\"Configuración de menu\",\"url\":\"menu\",\"ico\":\"fa fa-bars\"},{\"txt\":\"Cerrar la Sesión\",\"url\":\"close\",\"ico\":\"fa fa-sign-out\"}]','http://localhost/app/hidrocaribe/img/user.png');
/*!40000 ALTER TABLE `t_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `vw_grid_planta`
--

DROP TABLE IF EXISTS `vw_grid_planta`;
/*!50001 DROP VIEW IF EXISTS `vw_grid_planta`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `vw_grid_planta` AS SELECT 
 1 AS `id_planta`,
 1 AS `tx_nombre`,
 1 AS `tx_direccion`,
 1 AS `en_tipo_parada`,
 1 AS `en_tipo_parada_txt`,
 1 AS `tx_tipo_planta`,
 1 AS `fk_tipo_planta`*/;
SET character_set_client = @saved_cs_client;

--
-- Dumping events for database 'hidrocaribe'
--

--
-- Dumping routines for database 'hidrocaribe'
--

--
-- Final view structure for view `vw_grid_planta`
--

/*!50001 DROP VIEW IF EXISTS `vw_grid_planta`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vw_grid_planta` AS select `pl`.`id_planta` AS `id_planta`,`pl`.`tx_nombre` AS `tx_nombre`,`pl`.`tx_direccion` AS `tx_direccion`,`pl`.`en_tipo_parada` AS `en_tipo_parada`,(case when (`pl`.`en_tipo_parada` = 'OP') then 'OPERATIVA' when (`pl`.`en_tipo_parada` = 'NOP') then 'NO OPERATIVA' end) AS `en_tipo_parada_txt`,`tp`.`tx_descripcion` AS `tx_tipo_planta`,`pl`.`fk_tipo_planta` AS `fk_tipo_planta` from (`t_planta` `pl` join `t_tipo_planta` `tp` on((`pl`.`fk_tipo_planta` = `tp`.`id_tipo_planta`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-03 13:25:17
