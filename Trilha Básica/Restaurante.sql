/* Criar Banco de Dados chamado Restaurante */
CREATE DATABASE restaurante
DEFAULT CHARACTER SET utf8mb4
DEFAULT COLLATE utf8mb4_general_ci;

USE restaurante;

/* Criar as tabelas Cozinha, Ingrediente e Funcionario */
CREATE TABLE cozinha(
	id INT NOT NULL AUTO_INCREMENT,	
	numeroPratos INT,
	tipo VARCHAR(30) NOT NULL,
	numeroCozinheiros INT,
	tempoPreparo INT,
	horaAbertura DATETIME,
	horaFechamento DATETIME,
	pratoPrincipal VARCHAR(30),
	PRIMARY KEY (id)
) DEFAULT CHARSET = utf8mb4

CREATE TABLE funcionario(
id INT NOT NULL AUTO_INCREMENT,
nome VARCHAR(30) NOT NULL,
atividade VARCHAR(30) NOT NULL,
PRIMARY KEY (id)
) DEFAULT CHARSET = utf8mb4


CREATE TABLE ingrediente(
id INT NOT NULL AUTO_INCREMENT,
nome VARCHAR(30) NOT NULL,
dataValidade DATETIME,
PRIMARY KEY (id)
) DEFAULT CHARSET = utf8mb4

/* Incluir 5 itens na tabela de cozinha */
INSERT INTO cozinha (numeroPratos, tipo, numeroCozinheiros, tempoPreparo,
horaAbertura, horaFechamento, pratoPrincipal) 
VALUES
(10,'Mineira',2,35, '2021-03-31 07:00:00','2021-03-31 18:00:00', 'Feijoada'),
(5,'Chinesa',2,30, '2021-03-31 07:30:00','2021-03-31 18:30:00', 'Yakissoba'),
(7,'Italiana',2,40, '2021-03-31 08:00:00','2021-03-31 22:00:00', 'Pizza'),
(9,'Árabe',2,20, '2021-03-31 08:30:00','2021-03-31 22:00:00', 'Quibe'),
(8,'Japonesa',2,15, '2021-03-31 09:00:00','2021-03-31 21:00:00', 'Sushi');

SELECT * FROM cozinha;

/* Incluir 8 itens na tabela ingredientes */
INSERT INTO ingrediente (nome, dataValidade)
VALUES
('Feijão', '2020-12-25 00:00:00'),
('Farinha', '2022-04-02 00:00:00'),
('Champignon', '2021-03-31 00:00:00'),
('Brócolis', '2021-03-31 00:00:00'),
('Molho', '2021-06-05 00:00:00'),
('Macarrão', '2021-06-30 00:00:00'),
('Carne', '2020-01-01 00:00:00'),
('Arroz', '2020-05-29 00:00:00');

SELECT * FROM ingrediente;

/* Incluir 10 itens na tabela funcionário */
INSERT INTO funcionario (nome, atividade)
VALUES
('Marcos','Chefe'),
('Maria','Ajudante'),
('João','Chefe'),
('José','Ajudante'),
('Gabriela','Chefe'),
('Larissa','Ajudante'),
('Roberta','Chefe'),
('Eduardo','Ajudante'),
('Manuela','Chefe'),
('Lucas','Ajudante');

SELECT * FROM funcionario;

/* Criar uma consulta que retorne a quantidade de cozinhas 
 * cadastradas no banco de dados */
SELECT COUNT(*) AS `Quantidade de Cozinhas` FROM funcionario;

/* Criar uma consulta que possua um filtro, buscando as cozinhas que 
 * possuam o horário de fechamento as 22 horas. */
SELECT * FROM cozinha WHERE 
(SELECT TIME (horaFechamento) ) = '22:00:00';

/* SELECT TIME() -> função que retorna somente a parte hora de um 
 * DateTime 
 */

/* Criar uma consulta que liste quais ingredientes estão vencidos. */
SELECT * FROM ingrediente WHERE dataValidade < (SELECT NOW())

/* Criar relacionamentos entre as tabelas:
   Uma cozinha pode ter mais de um ingrediente.
   Uma cozinha também pode ter mais de um funcionário.
   Alterar o banco para possibilitar estes relacionamentos.*/
ALTER TABLE funcionario ADD COLUMN idFuncCozinha INT;

ALTER TABLE funcionario ADD FOREIGN KEY (idFuncCozinha)
REFERENCES cozinha (id);

ALTER TABLE ingrediente ADD COLUMN idIngCozinha INT;

ALTER TABLE ingrediente ADD FOREIGN KEY (idIngCozinha)
REFERENCES cozinha (id);

/* Criar uma consulta que realize a junção das tabelas Cozinha,
 * Ingrediente e Funcionario e informe as cozinhas não possuam 
 * ingredientes. */
SELECT coz.tipo, ing.nome AS `Nome do Ingrediente`,
fun.nome, fun.atividade 
FROM cozinha AS coz 
LEFT JOIN ingrediente AS ing
ON coz.id = ing.idIngCozinha 
JOIN funcionario AS fun
ON coz.id = fun.idFuncCozinha 
WHERE ing.id IS NULL;


/* Criar uma consulta que realize a junção das tabelas Cozinha,
 * Ingrediente e Funcionario e informe as cozinhas que possuam 
 * número de funcionários maior que 4 */
SELECT coz.tipo, fun.nome, fun.atividade,
COUNT(fun.idFuncCozinha) as `Quantidade de funcionários`
FROM cozinha AS coz 
JOIN funcionario AS fun
ON coz.id = fun.idFuncCozinha 
GROUP BY fun.idFuncCozinha
HAVING `Quantidade de funcionários` > 4;
