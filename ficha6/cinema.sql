-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 06-Jan-2020 às 18:53
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `exibicao`
--

DROP TABLE IF EXISTS `exibicao`;
CREATE TABLE IF NOT EXISTS `exibicao` (
  `id_filme` int(11) NOT NULL,
  `id_sala` int(11) NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id_filme`,`id_sala`),
  KEY `fk_id_sala_sala` (`id_sala`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `exibicao`
--

INSERT INTO `exibicao` (`id_filme`, `id_sala`, `data`) VALUES
(1, 1, '2019-11-27'),
(2, 2, '2019-11-28'),
(3, 3, '2019-11-29'),
(4, 3, '2019-12-28'),
(5, 2, '2019-12-28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `filme`
--

DROP TABLE IF EXISTS `filme`;
CREATE TABLE IF NOT EXISTS `filme` (
  `id_filme` int(11) NOT NULL AUTO_INCREMENT,
  `nome_pt` varchar(150) CHARACTER SET utf8 NOT NULL,
  `nome_original` varchar(150) CHARACTER SET utf8 NOT NULL,
  `ano_lancamento` date NOT NULL,
  `id_realizador` int(11) NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `link` varchar(100) CHARACTER SET utf8 NOT NULL,
  `sinopse` varchar(250) CHARACTER SET utf8 NOT NULL,
  `genero` varchar(25) CHARACTER SET utf8 NOT NULL,
  `elenco` varchar(100) CHARACTER SET utf8 NOT NULL,
  `imgdir` varchar(100) NOT NULL,
  `url_image` varchar(255) NOT NULL,
  PRIMARY KEY (`id_filme`),
  KEY `fk_id_realizador_realizador` (`id_realizador`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `filme`
--

INSERT INTO `filme` (`id_filme`, `nome_pt`, `nome_original`, `ano_lancamento`, `id_realizador`, `data`, `link`, `sinopse`, `genero`, `elenco`, `imgdir`, `url_image`) VALUES
(1, 'O Gebo e a Sombra', 'O Gebo e a Sombra', '2012-03-14', 1, '2019-12-16 14:55:13', 'https://www.youtube.com/embed/dvh0ued45Qo\r\n', 'Gebo é um veterano cobrador que esconde da mulher os furtos praticados pelo filho. Com isso, acaba na cadeia, onde descobre que ética e honestidade são valores relativos nos dias de hoje.', 'Drama', 'Claudia Cardinale, Michael Lonsdale, Jeanne Moreau, Leonor Silveira', 'gebo_cartaz.jpg', 'https://m.media-amazon.com/images/M/MV5BY2NkZjEzMDgtN2RjYy00YzM1LWI4ZmQtMjIwYjFjNmI3ZGEwXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_UX182_CR0,0,182,268_AL_.jpg'),
(2, 'Os Oito Odiados', 'The Hateful Eight', '2015-08-12', 2, '2019-12-16 14:56:49', 'https://www.youtube.com/embed/nIOmotayDMY', 'Em busca de abrigo para se proteger de uma nevasca, dois caçadores de recompensas, um prisioneiro e um homem que alega ser xerife conhecem quatro estranhos.', 'Drama / Mistério', 'Samuel L. Jackson, Kurt Russell, Jennifer Jason Leigh, Tim Roth', 'thehatefuleight.jpg', 'https://m.media-amazon.com/images/M/MV5BNzVlY2MwMjktM2E4OS00Y2Y3LWE3ZjctYzhkZGM3YzA1ZWM2XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_UX182_CR0,0,182,268_AL_.jpg'),
(3, 'O Cavaleiro das Trevas', 'The Dark Knight', '2008-07-14', 3, '2019-12-16 14:57:38', 'https://www.youtube.com/embed/EXeTwQWrcwY', 'Com a ajuda de Jim Gordon e Harvey Dent, Batman tem mantido a ordem na cidade de Gotham. Mas um jovem e anárquico criminoso conhecido como Coringa ganha força e decide instaurar um verdadeiro caos na cidade. ', 'Drama / Suspense', 'Christian Bale, Michael Caine, Heath Ledger, Gary Oldman. Aaron Eckhart', 'dark_knight.jpg', 'https://www.imdb.com/title/tt3460252/mediaviewer/rm2736055040?ref_=tt_ov_i'),
(4, 'O Herói de Hacksaw Ridge', 'Hacksaw Ridge', '2016-05-03', 4, '2019-12-02 16:43:11', 'https://www.youtube.com/embed/s2-1hz1juBI', 'Acompanhe a história de Desmond T. Doss, um médico do exército americano que, durante a Segunda Guerra Mundial, se recusa a pegar em armas. Durante a Batalha de Okinawa ele trabalha na ala médica e salva cerca de 75 homens.', 'Drama / Ficção Histórica', 'Andrew Garfield, Teresa Palmer, Vince Vaughn', 'hacksawridge.jpg', ''),
(5, 'Avatar', 'Avatar', '2009-02-18', 5, '2019-12-02 16:43:11', 'https://www.youtube.com/embed/6ziBFh3V1aM', 'No exuberante mundo alienígena de Pandora vivem os Na\'vi, seres que parecem ser primitivos, mas são altamente evoluídos. Como o ambiente do planeta é tóxico, foram criados os avatares, corpos biológicos controlados pela mente humana', 'Fantasia', 'Zoe Saldana, Sam Worthingo, Sthephen Lang', 'avatar.jpg', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `realizador`
--

DROP TABLE IF EXISTS `realizador`;
CREATE TABLE IF NOT EXISTS `realizador` (
  `id_realizador` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_realizador`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `realizador`
--

INSERT INTO `realizador` (`id_realizador`, `nome`, `data`) VALUES
(1, 'Manoel de Oliveira', '2019-11-27 14:38:56'),
(2, 'Quentin Tarantino', '2019-11-27 14:12:43'),
(3, 'Christopher Nolan', '2019-11-27 14:12:43'),
(4, 'Mel Gibson', '2019-11-30 19:01:04'),
(5, 'James Cameron', '2019-11-30 19:20:41'),
(6, 'Todd Phillips', '2019-12-01 00:34:00'),
(8, 'Rafael', '2019-12-02 14:52:22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sala`
--

DROP TABLE IF EXISTS `sala`;
CREATE TABLE IF NOT EXISTS `sala` (
  `id_sala` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `capacidade` int(160) NOT NULL,
  PRIMARY KEY (`id_sala`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `sala`
--

INSERT INTO `sala` (`id_sala`, `nome`, `capacidade`) VALUES
(1, 'Sala 1', 160),
(2, 'Sala 2', 140),
(3, 'Sala 3', 150);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `exibicao`
--
ALTER TABLE `exibicao`
  ADD CONSTRAINT `fk_id_filme_filme` FOREIGN KEY (`id_filme`) REFERENCES `filme` (`id_filme`),
  ADD CONSTRAINT `fk_id_sala_sala` FOREIGN KEY (`id_sala`) REFERENCES `sala` (`id_sala`);

--
-- Limitadores para a tabela `filme`
--
ALTER TABLE `filme`
  ADD CONSTRAINT `fk_id_realizador_realizador` FOREIGN KEY (`id_realizador`) REFERENCES `realizador` (`id_realizador`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
