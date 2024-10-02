-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para os_meus_clientes
CREATE DATABASE IF NOT EXISTS `os_meus_clientes` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `os_meus_clientes`;

-- Copiando estrutura para tabela os_meus_clientes.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela os_meus_clientes.clientes: ~10 rows (aproximadamente)
INSERT INTO `clientes` (`id`, `nome`, `email`, `created_at`) VALUES
	(1, 'joao', 'joao@gmail.com', '2024-10-01 12:30:18'),
	(3, 'ana', 'ana@gmail.com', '2024-10-01 12:30:49'),
	(4, 'pedro', 'pedro@gmail.com', '2024-10-01 12:31:58'),
	(5, 'ruy', 'ruy@gmail.com', '2024-10-01 12:32:03'),
	(6, 'antonio', 'antonio@gmail.com', '2024-10-01 12:32:10'),
	(7, 'ameko', 'ameko@gmail.com', '2024-10-02 09:21:00'),
	(8, 'chris', 'chris@gmail.com', '2024-10-02 09:47:35'),
	(9, 'maicao', 'maicao@gmail.com', '2024-10-02 09:47:45'),
	(10, 'juicefruit', 'juicefruit@gmail.com', '2024-10-02 09:48:00'),
	(11, 'pikachu', 'pikachu@gmail.com', '2024-10-02 10:25:15');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
