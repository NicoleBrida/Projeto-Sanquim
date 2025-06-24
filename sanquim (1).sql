-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24/06/2025 às 19:06
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sanquim`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `alunos`
--

CREATE TABLE `alunos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `ra` varchar(100) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `rg` varchar(15) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `fone` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `data_nascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `alunos`
--

INSERT INTO `alunos` (`id`, `nome`, `ra`, `cpf`, `rg`, `endereco`, `bairro`, `cidade`, `fone`, `email`, `status`, `data_nascimento`) VALUES
(1, 'Amanda Ribeiro Costa', '20230001', '412.537.968-30', '41.567.890-2', 'Rua das Rosas, 123', 'Centro', 'Mogi Guaçu', '(19) 98456-1234', 'amanda@gmail.com', 1, '2007-04-15'),
(2, 'Bruno Henrique Almeida', '20230002', '315.948.621-09', '33.789.654-1', 'Av. Brasil, 456', 'Jardim Itamaraty', 'Mogi Mirim', '(19) 99784-5678', 'bruno@gmail.com', 1, '2008-11-30'),
(3, 'Camila Santos Oliveira', '20230003', '608.234.197-04', '22.345.678-9', 'Rua das Palmeiras, 789', 'Vila Bertioga', 'Mogi Guaçu', '(19) 99654-1122', 'camila@gmail.com', 1, '2009-02-20'),
(4, 'Daniel Ferreira Lima', '20230004', '109.384.620-75', '19.876.543-0', 'Rua São João, 321', 'Jardim Planalto', 'Mogi Mirim', '(19) 99543-9988', 'daniel@gmail.com', 1, '2009-07-05'),
(5, 'Érica Vanessa Martins', '20230005', '723.861.950-81', '28.456.123-5', 'Av. Prefeito Adib Chaib, 90', 'Parque Real', 'Mogi Guaçu', '(19) 99123-4567', 'erica@gmail.com', 1, '2006-09-10'),
(6, 'Felipe Augusto Nogueira', '20230006', '509.137.284-12', '15.234.678-3', 'Rua Santa Rita, 77', 'Vila São Jorge', 'Mogi Mirim', '(19) 99876-4321', 'felipe@gmail.com', 1, '2008-12-24'),
(7, 'Giovana Lopes Mendes', '20230007', '397.245.619-87', '26.789.342-0', 'Rua das Acácias, 888', 'Nova Mogi', 'Mogi Guaçu', '(19) 98432-5678', 'giovana@gmail.com', 1, '2005-06-18'),
(8, 'Henrique Souza Barros', '20230008', '218.496.370-58', '35.567.890-7', 'Av. Mogi Mirim, 650', 'Jardim Elite', 'Mogi Mirim', '(19) 99765-9087', 'henrique@gmail.com', 1, '2007-01-12'),
(9, 'Isabela Cristina Rocha', '20230009', '839.172.640-60', '17.234.556-6', 'Rua das Violetas, 300', 'Jardim América', 'Mogi Guaçu', '(19) 99321-3322', 'isabela@gmail.com', 1, '2009-10-08'),
(10, 'João Pedro Cardoso Silveira', '20230010', '604.982.315-43', '21.876.654-4', 'Rua Francisco Franco, 1245', 'Centro', 'Mogi Mirim', '(19) 99987-6654', 'joaopedro@gmail.com', 1, '2007-03-29');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `nome_curso` varchar(100) NOT NULL,
  `período` varchar(100) NOT NULL,
  `carga_horaria` varchar(100) NOT NULL,
  `modalidade` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cursos`
--

INSERT INTO `cursos` (`id`, `nome_curso`, `período`, `carga_horaria`, `modalidade`, `status`) VALUES
(1, 'Ensino Médio', 'Matutino', '1500h', 'Presencial', 1),
(2, 'Curso Pré-Vestibular', 'Vespertino', '20 horas/semana', 'Presencial', 1),
(3, 'Curso Pré-Vestibulinho', 'Vespertino', '20 horas/semana', 'Presencial', 1),
(4, 'Empreendedorismo', 'Noturno', '15 horas/semana', 'Presencial', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `disciplinas`
--

CREATE TABLE `disciplinas` (
  `id` int(11) NOT NULL,
  `nome_disciplina` varchar(100) NOT NULL,
  `carga_horaria` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `disciplinas`
--

INSERT INTO `disciplinas` (`id`, `nome_disciplina`, `carga_horaria`, `status`) VALUES
(1, 'Atualidades', '20 horas/semana', 1),
(2, 'Biologia', '20 horas/semana', 1),
(3, 'Filosofia', '20 horas/semana', 1),
(4, 'Física', '20 horas/semana', 1),
(5, 'Geografia', '20 horas/semana', 1),
(6, 'Geometria', '30 horas/semana', 1),
(7, 'História', '20 horas/semana', 1),
(8, 'Matemática', '40 horas/semana', 1),
(9, 'Química', '20 horas/semana', 1),
(10, 'Sociologia', '20 horas/semana', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `materiais`
--

CREATE TABLE `materiais` (
  `id` int(11) NOT NULL,
  `titulo_material` varchar(300) NOT NULL,
  `curso` varchar(100) NOT NULL,
  `turma` varchar(100) NOT NULL,
  `disciplina` varchar(100) NOT NULL,
  `formato` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `materiais`
--

INSERT INTO `materiais` (`id`, `titulo_material`, `curso`, `turma`, `disciplina`, `formato`, `status`) VALUES
(1, 'Apostila de Exercícios - questões e gabarito', 'Pré-Vestibular', 'TurmaVA01', 'Matemática', '.pdf', 1),
(2, 'Slide sobre Leis de Newton', 'Pré-Vestibulinho', 'TurmaVO01', 'Física', '.pptx', 1),
(3, 'Lista de Exercícios sobre Revolução Francesa', 'Ensino Médio', 'TurmaEM01', 'História', '.docx', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `professores`
--

CREATE TABLE `professores` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(200) NOT NULL,
  `fone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `professores`
--

INSERT INTO `professores` (`id`, `nome`, `cpf`, `rg`, `endereco`, `bairro`, `cidade`, `fone`, `email`, `status`) VALUES
(1, 'Cláudia Regina Martins', '392.815.227-04', '31.05.789-7', 'Rua das Acácias, 134', 'Taquaral', 'Campinas', '(19) 99784-2031', 'prof.claudia@outlook.com', 1),
(2, 'Eduardo Henrique Lima', '109.382.744-82', '29.678.431-9', 'Av. Júlio de Mesquita, 2090, apto 302', 'Cambuí', 'Campinas', '(19) 98122-4450', 'prof.eduardo@outlook.com', 1),
(3, 'Renata Souza de Oliveira', '445.293.166-91', '25.390.288-4', 'Rua Dom Vilares, 78', 'Jardim Proença', 'Campinas', '(19) 99603-8897', 'prof.renata@outlook.com', 1),
(4, 'João Paulo Ferreira da Silva', '507.631.910-27', '32.415.987-2', 'Rua Antônio Gonçalves Franco, 410', 'Jardim Centenário', 'Mogi Guaçu', '(19) 98876-1324', 'prof.joao.paulo@outlook.com', 1),
(5, 'Ana Carolina Figueiredo', '310.752.988-63', '28.443.002-1', 'Rua Padre Roque, 225', 'Centro', 'Mogi Mirim', '(19) 99218-7635', 'prof.ana.carolina@outlook.com', 1),
(6, 'Marcelo Tavares Mendes', '278.003.590-90', '34.087.119-0', 'Av. da Saudade, 980', 'Santa Cruz', 'Mogi Mirim', '(19) 98452-9013', 'prof.marcelo@outlook.com', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `turmas`
--

CREATE TABLE `turmas` (
  `id` int(11) NOT NULL,
  `nome_turma` varchar(100) NOT NULL,
  `curso` varchar(100) NOT NULL,
  `local` varchar(100) NOT NULL,
  `periodo` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `turmas`
--

INSERT INTO `turmas` (`id`, `nome_turma`, `curso`, `local`, `periodo`, `status`) VALUES
(1, 'TurmaEM1', 'Ensino Médio', 'Sanquim - presencial', 'Matutino', 1),
(2, 'TurmaVO01', 'Pré-Vestibulinho', 'Sanquim - presencial', 'Vespertino', 1),
(3, 'TurmaVA01', 'Pré-Vestibular', 'Sanquim - presencial', 'Vespertino', 1),
(4, 'TurmaEP01', 'Empreendedorismo', 'Sanquim - presencial', 'Noturno', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `nivel` varchar(15) NOT NULL,
  `status` int(11) NOT NULL,
  `email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `senha`, `nivel`, `status`, `email`) VALUES
(1, 'aluno1', '123456', 'usuario', 1, 'aluno1@gmail.com'),
(2, 'professor1', '123456', 'operador', 1, 'prof1@gmail.com'),
(3, 'admin1', '123456', 'administrador', 1, 'adm1@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
