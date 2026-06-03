DROP DATABASE dbLoja;
CREATE DATABASE dbLoja;
USE dbLoja;

CREATE TABLE tbUsuarios(
codUsu int NOT NULL AUTO_INCREMENT,
nomeUsu VARCHAR(50) NOT NULL,
senhaUsu VARCHAR(15) NOT NULL,
PRIMARY KEY(codUsu)
);

INSERT INTO tbUsuarios(nomeUsu, senhaUsu) VALUES('etecia', 'etecia');

SELECT * FROM tbUsuarios;