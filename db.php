CREATE TABLE alunos (
  id_alunos INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(100)
);

CREATE TABLE disciplinas (
  id_disciplinas INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(100)
);

CREATE TABLE avaliacoes (
  id_avaliacoes INT PRIMARY KEY AUTO_INCREMENT,
  nota DECIMAL(5,2),
  id_alunos INT,
  id_disciplinas INT,
  FOREIGN KEY (id_alunos) REFERENCES alunos(id_alunos),
  FOREIGN KEY (id_disciplinas) REFERENCES disciplinas(id_disciplinas)
);

INSERT INTO alunos (nome) VALUES ('Maria Silva');
INSERT INTO alunos (nome) VALUES ('João Souza');
INSERT INTO alunos (nome) VALUES ('Ana Oliveira');

INSERT INTO disciplinas (nome) VALUES ('Matemática');
INSERT INTO disciplinas (nome) VALUES ('Português');
INSERT INTO disciplinas (nome) VALUES ('História');

INSERT INTO avaliacoes (id_alunos, id_disciplinas, nota) VALUES (1, 1, 8.50);
INSERT INTO avaliacoes (id_alunos, id_disciplinas, nota) VALUES (2, 2, 7.00);
INSERT INTO avaliacoes (id_alunos, id_disciplinas, nota) VALUES (3, 3, 9.20);