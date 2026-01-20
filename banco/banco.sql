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


-- Copiando estrutura do banco de dados para cplms_pesquisa
CREATE DATABASE IF NOT EXISTS `cplms_pesquisa` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `cplms_pesquisa`;

-- Copiando estrutura para tabela cplms_pesquisa.formulario
CREATE TABLE IF NOT EXISTS `formulario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `secretaria` varchar(120) DEFAULT NULL,
  `departamento` varchar(160) DEFAULT NULL,
  `responsavel` varchar(160) DEFAULT NULL,
  `cargo` varchar(160) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `fone_ramal` varchar(50) DEFAULT NULL,
  `data` varchar(50) DEFAULT NULL,
  `desenvolvimento_sistema` char(3) DEFAULT NULL,
  `aquisicao_software` char(3) DEFAULT NULL,
  `aquisicao_equipamento` char(3) DEFAULT NULL,
  `infra_rede` char(3) DEFAULT NULL,
  `seguranca_informacao` char(3) DEFAULT NULL,
  `suporte_manutencao` char(3) DEFAULT NULL,
  `integracao_sistemas` char(3) DEFAULT NULL,
  `treinamento` char(3) DEFAULT NULL,
  `outro` char(3) DEFAULT NULL,
  `outro_descricao` blob,
  `descricao_necessidade` blob,
  `justificativa` blob,
  `objetivos_esperados` blob,
  `usuarios_impactados` int DEFAULT NULL,
  `perfil_usuario` varchar(160) DEFAULT NULL,
  `prioridade` char(5) DEFAULT NULL,
  `justificativa_prioridade` blob,
  `data_ideal` date DEFAULT NULL,
  `prazo_normativo` char(3) DEFAULT NULL,
  `especificacao_prazo` blob,
  `software_especifico` varchar(160) DEFAULT NULL,
  `hardware` varchar(160) DEFAULT NULL,
  `recursos_humanos` varchar(160) DEFAULT NULL,
  `outros_recursos` varchar(160) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela cplms_pesquisa.formulario: ~0 rows (aproximadamente)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
