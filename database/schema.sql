CREATE DATABASE db_controle;
USE db_controle;
CREATE TABLE entrada(
  id                INT           NOT NULL AUTO_INCREMENT,
  data_entrada      DATE          NOT NULL,
  quantidade        DECIMAL(10,2) NOT NULL,
  valor             DECIMAL(10,2) NOT NULL,
  total             DECIMAL(10,2) NOT NULL,
  fornecedor        VARCHAR(100)  NOT NULL,
  descricao_produto VARCHAR(200)  NOT NULL,
  tipo_unitario     VARCHAR(10)   NOT NULL,
  PRIMARY KEY(id)
  );

CREATE TABLE saida(
  id                INT           NOT NULL AUTO_INCREMENT,
  data_saida        DATE          NOT NULL,
  quantidade        DECIMAL(10,2) NOT NULL,
  valor             DECIMAL(10,2) NOT NULL,
  total             DECIMAL(10,2) NOT NULL,
  fornecedor        VARCHAR(100)  NOT NULL,
  descricao_produto VARCHAR(200)  NOT NULL,
  tipo_unitario     VARCHAR(10)   NOT NULL,
  PRIMARY KEY(id)
  );

CREATE TABLE estoque(
  id                  INT   NOT NULL AUTO_INCREMENT,
  descricao_produto   VARCHAR(200)    NOT NULL,
  tipo_unitario       VARCHAR(10)     NOT NULL,
  fornecedor          VARCHAR(100)    NOT NULL,
  quantidade          DECIMAL(10,2)   NOT NULL,
  PRIMARY KEY(id)
  );

CREATE TABLE usuarios(
  id            INT             NOT NULL AUTO_INCREMENT,
  email         VARCHAR(200)    NOT NULL,
  senha         VARCHAR(50)     NOT NULL,
  PRIMARY KEY (id)
)
INSERT INTO usuarios(email, senha) VALUES ('admin@gmail.com', 'admin');