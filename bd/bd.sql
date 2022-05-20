-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.22-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para medlar
CREATE DATABASE IF NOT EXISTS `medlar` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `medlar`;

-- Copiando estrutura para tabela medlar.checagem
CREATE TABLE IF NOT EXISTS `checagem` (
  `id_check` int(11) NOT NULL AUTO_INCREMENT,
  `idutiliza` int(11) NOT NULL,
  `data_hora` datetime NOT NULL,
  PRIMARY KEY (`id_check`),
  KEY `id_remed` (`idutiliza`) USING BTREE,
  CONSTRAINT `FK_checagem_utiliza` FOREIGN KEY (`idutiliza`) REFERENCES `utiliza` (`idutiliza`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela medlar.checagem: ~9 rows (aproximadamente)
REPLACE INTO `checagem` (`id_check`, `idutiliza`, `data_hora`) VALUES
	(15, 18, '2022-05-17 09:25:28'),
	(16, 18, '2022-05-17 09:26:55'),
	(17, 18, '2022-05-17 09:28:07'),
	(18, 18, '2022-05-17 09:29:43'),
	(19, 18, '2022-05-17 09:31:14'),
	(20, 18, '2022-05-17 09:31:26'),
	(21, 18, '2022-05-17 09:34:13'),
	(22, 18, '2022-05-17 09:36:41'),
	(26, 18, '2022-05-17 10:19:09');

-- Copiando estrutura para tabela medlar.idosos
CREATE TABLE IF NOT EXISTS `idosos` (
  `ididoso` int(11) NOT NULL AUTO_INCREMENT,
  `nome_idoso` varchar(50) NOT NULL,
  `nascimento` date NOT NULL,
  `genero` varchar(1) NOT NULL DEFAULT '',
  `enfermeira` varchar(50) NOT NULL,
  `alergia` varchar(50) NOT NULL,
  `comorbidade` varchar(50) NOT NULL,
  `obs` varchar(50) NOT NULL,
  `numero_sus` int(11) NOT NULL DEFAULT 0,
  `cpf` int(11) NOT NULL DEFAULT 0,
  `plano_saude` varchar(3) NOT NULL DEFAULT '',
  `nome_resp` varchar(50) NOT NULL,
  `telefone_resp` int(11) NOT NULL DEFAULT 0,
  `parentesco` varchar(50) NOT NULL,
  `endereco_resp` varchar(50) NOT NULL,
  PRIMARY KEY (`ididoso`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela medlar.idosos: ~5 rows (aproximadamente)
REPLACE INTO `idosos` (`ididoso`, `nome_idoso`, `nascimento`, `genero`, `enfermeira`, `alergia`, `comorbidade`, `obs`, `numero_sus`, `cpf`, `plano_saude`, `nome_resp`, `telefone_resp`, `parentesco`, `endereco_resp`) VALUES
	(1, 'jurema', '2021-12-14', 'F', 'claudia', 'pao', 'asma', 'sla', 92838, 8323284, 'sim', 'rogerio', 123245, 'vo', 'av inacio pinto'),
	(2, 'jeremias', '2021-12-08', 'M', 'karen', 'leite', 'auzaimer', 'sla', 34364757, 346547, 'nao', 'caio', 239356, 'sobrinho', 'sao paulo'),
	(8, 'jonas', '2022-02-10', 'M', 'karen', 'leite', 'auzaimer', 'sla', 34364757, 346547, 'nao', 'caiod', 23935637, 'sobrinho', 'sao paulo'),
	(11, 'jeremias jose da silva', '2022-03-01', 'M', 'karen', 'leite', 'auzaimer', 'sla', 34364757, 346547, 'nao', 'caio', 23935637, 'sobrinho', 'sao paulo'),
	(13, 'rodiscleyson', '2022-03-28', 'M', 'carla', 'trigo', 'asma', 'sla', 23242356, 2147483647, 'sim', 'carlos', 2147483647, 'tio', 'ifdsiogfgdgfg');

-- Copiando estrutura para tabela medlar.medicamentos
CREATE TABLE IF NOT EXISTS `medicamentos` (
  `idremedio` int(11) NOT NULL AUTO_INCREMENT,
  `nome_remed` varchar(50) NOT NULL DEFAULT '',
  `descricao` varchar(50) NOT NULL DEFAULT '',
  `categoria` varchar(50) NOT NULL DEFAULT '',
  `possivel_reacao` varchar(50) NOT NULL DEFAULT '',
  `refrigeracao` varchar(50) NOT NULL DEFAULT '0',
  `obs` varchar(50) NOT NULL,
  PRIMARY KEY (`idremedio`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela medlar.medicamentos: ~4 rows (aproximadamente)
REPLACE INTO `medicamentos` (`idremedio`, `nome_remed`, `descricao`, `categoria`, `possivel_reacao`, `refrigeracao`, `obs`) VALUES
	(1, 'paracetamol', 'dores', 'dsfs', 'sla', 'sim', 'sla'),
	(2, 'clonazepam', 'fsgfsfdgs', 'oasdjs', 'fghgfh', 'sim', 'sla'),
	(3, 'doril', 'dores', 'dsfs', 'gffgfhgh', 'nao', 'sla'),
	(31, 'doril', 'dores', 'dsfs', 'gffgfhgh', 'nao', 'sla');

-- Copiando estrutura para tabela medlar.utiliza
CREATE TABLE IF NOT EXISTS `utiliza` (
  `idutiliza` int(11) NOT NULL AUTO_INCREMENT,
  `ididoso` int(11) NOT NULL DEFAULT 0,
  `idremedio` int(11) NOT NULL,
  `data_inicio` datetime NOT NULL,
  `data_fim` datetime NOT NULL,
  `dosagem` varchar(50) NOT NULL,
  `horario` varchar(50) NOT NULL DEFAULT '',
  `obs` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idutiliza`),
  KEY `FK_utiliza_idosos` (`ididoso`),
  KEY `idremedio` (`idremedio`),
  CONSTRAINT `FK_utiliza_idosos` FOREIGN KEY (`ididoso`) REFERENCES `idosos` (`ididoso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_utiliza_medicamentos` FOREIGN KEY (`idremedio`) REFERENCES `medicamentos` (`idremedio`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela medlar.utiliza: ~4 rows (aproximadamente)
REPLACE INTO `utiliza` (`idutiliza`, `ididoso`, `idremedio`, `data_inicio`, `data_fim`, `dosagem`, `horario`, `obs`) VALUES
	(18, 1, 1, '2022-05-04 00:00:00', '2022-05-04 00:00:00', 'foghdfug', '14 16', 'sla'),
	(19, 1, 2, '2022-05-03 00:00:00', '2022-05-18 00:00:00', 'foghdfug', '14 16', 'sla'),
	(20, 1, 3, '2022-05-03 00:00:00', '2022-05-18 00:00:00', 'foghdfug', '14 16', 'sla'),
	(33, 2, 1, '2022-05-05 00:00:00', '2022-05-20 00:00:00', 'foghdfug', '14 16', 'sla');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
