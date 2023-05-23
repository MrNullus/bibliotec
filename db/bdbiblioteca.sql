CREATE DATABASE BDBIBLIOTECA;
USE BDBIBLIOTECA;
CREATE TABLE ALUNO(
	RM INT NOT NULL,
    NOME VARCHAR(60) NOT NULL,
    TELEFONE VARCHAR(14) NOT NULL, -- (11)94444-7777
    DATA_NASC DATE NOT NULL,
    EMAIL VARCHAR(100) NOT NULL,
    SENHA VARCHAR(32) NOT NULL,
    CURSO VARCHAR(40) NOT NULL,
    SERIE CHAR(1) NOT NULL, 
    ANO_INGRESSO year NOT NULL,
    PERIODO CHAR(5) NOT NULL,
    PRIMARY KEY (RM)
);
CREATE TABLE LIVRO(
	ID_LIVRO INT auto_increment primary key,
	ISBN CHAR(17) NOT NULL, -- 978-3-16-148410-0
    TITULO VARCHAR(80) NOT NULL,
    AUTOR VARCHAR(100) NOT NULL, 
    EDITORA VARCHAR(80) NOT NULL,
    GENERO VARCHAR(40),
    ANO YEAR NOT NULL,
    EXEMPLAR INT NOT NULL,
    SITUACAO VARCHAR(30) NOT NULL
);
CREATE TABLE EMPRESTIMO(
	ID_EMP INT auto_increment primary key,
	ID_LIVRO INT NOT NULL,
    RM INT NOT NULL,
    DATA_RETIRADA DATE NOT NULL,
    DATA_DEVOLUCAO DATE,
    SITUACAO VARCHAR(30) NOT NULL,
    MULTA DECIMAL(10,2),
    CONSTRAINT FK_EMPRESTIMO_LIVRO FOREIGN KEY(ID_LIVRO) REFERENCES LIVRO(ID_LIVRO),
    CONSTRAINT FK_EMPRESTIMO_ALUNO FOREIGN KEY(RM) REFERENCES ALUNO(RM)
);

INSERT INTO aluno (RM, NOME, TELEFONE, DATA_NASC, EMAIL, SENHA, CURSO, SERIE, ANO_INGRESSO, PERIODO) VALUES 
('21005', 'Maria Eduarda da Silva', '(11)4488-1234', '2005-02-21', 'mariaduda@email.com', '123456789', 'MTEC Informática para Internet', '3', 2021, 'Tarde'),
('21258', 'João de Souza Santos', '(11)4444-8965', '2005-04-02', 'joaozinho@hmail.com', '987654321', 'MTEC Administração', '3', 2021, 'Manhã'),
('22853', 'Ana Carolina de Oliveira', '(11)98855-9632', '2006-08-12', 'aninha@email.com', '7532159', 'MTEC Infomática para Internet', '2', 2022, 'Tarde'),
('22145', 'José Lopes', '(11)98768-0900', '2006-08-22', 'zezino@outlook.com', '123321123', 'MTEC Administração', '2', 2022, 'Tarde'),
('23256', 'Joana Santos Silva', '', '2000-06-04', 'joana@gmail.com', '987456321', 'Técnico em Administração', '1', 2023, 'Noite'),
('20023', 'Ygor Santana', '(11)98765-1234', '2004-06-06', 'yguinho@outlook.com', '741258963', 'MTEC Informática para Internet', '3', 2020, 'Manhã');

INSERT INTO livro (ID_LIVRO, ISBN, TITULO, AUTOR, EDITORA, GENERO, ANO, EXEMPLAR, SITUACAO) VALUES
(1, '978-8589384780', 'Governança de TI - Tecnologia da Informação', 'Peter Weill e Jeanne W. Ross', 'M.Books; 1ª edição', 'TI', 2005, 2, 'Disponível'),
(2, '978-6555520767', 'Senhora', 'José de Alencar', 'Principis; 2ª edição', 'Romance', 2020, 1, 'Disponível'),
(3, '978-8594318831', 'O cortiço', 'Aluísio de Azevedo', 'Principis; 3ª edição', 'Romance', 2019, 3, 'Disponível'),
(4, '978-655044018', 'Técnicas de Invasão: Aprenda as técnicas usadas por hackers em invasões reais', 'Bruno Fraga', 'Editora Labrador; 1ª edição', 'TI', 2019, 1, 'Indisponível');

INSERT INTO emprestimo (ID_LIVRO, RM, DATA_RETIRADA, DATA_DEVOLUCAO, SITUACAO, multa) VALUES
('1', '22145', '2023-02-20', '2023-03-05', 'Concluído', null),
('2', '21258', '2023-03-04', '2023-03-20', 'Renovado', null),
('1', '21005', '2023-03-04', '2023-03-10', 'Concluído', null),
('4', '22145', '2023-03-06', '2023-03-12', 'Vencido', '1.00');

select * from emprestimo;


SELECT LIVRO.TITULO,
 ALUNO.RM,
 ALUNO.NOME, 
 EMPRESTIMO.DATA_RETIRADA, 
 EMPRESTIMO.DATA_DEVOLUCAO, 
 EMPRESTIMO.SITUACAO, 
 EMPRESTIMO.MULTA 
 
 FROM 
 LIVRO, ALUNO, EMPRESTIMO
 
 WHERE
 (EMPRESTIMO.ID_LIVRO = LIVRO.ID_LIVRO) 
 AND(EMPRESTIMO.RM=ALUNO.RM)

