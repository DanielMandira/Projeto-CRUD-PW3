SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `escola` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `escola`;

CREATE TABLE `alunos` (
  `codigos` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL DEFAULT '0',
  `cidade` varchar(250) NOT NULL DEFAULT '0',
  `sexo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `alunos` (`codigos`, `nome`, `cidade`, `sexo`) VALUES
(11, 'Mauricio', 'Cajati', 'Masculino'),
(14, 'Fred', 'Registro', 'Masculino'),
(15, 'Aline', 'Cajati', 'Feminino'),
(16, 'Joana', 'Registro', 'Feminino'),
(21, 'Andre', 'Cajati', 'Masculino'),
(22, 'Bruno', 'Cajati', 'Masculino');


ALTER TABLE `alunos`
  ADD PRIMARY KEY (`codigos`);


ALTER TABLE `alunos`
  MODIFY `codigos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
