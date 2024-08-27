# Projeto-Laravel-LPWEBII
Projeto feito em Laravel para a matéria de Linguagem de Programação Web II - ITE


Banco de Dados: 

Create database GamesSwapDB

use GamesSwapDB

CREATE TABLE usuarios (
  id INT PRIMARY KEY IDENTITY,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(100) UNIQUE NOT NULL,
  senha VARCHAR(255) NOT NULL,
  endereco TEXT,
  data_cadastro date
);

CREATE TABLE itens (
  id INT PRIMARY KEY IDENTITY,
  nome VARCHAR(100) NOT NULL,
  descricao TEXT,
  preco DECIMAL(10,2) NOT NULL,
  categoria VARCHAR(100),
  imagem VARCHAR(255),
  quantidade_estoque INT,
  vendedor_id INT,
  FOREIGN KEY (vendedor_id) REFERENCES usuarios(id)
);

CREATE TABLE pedidos (
  id INT PRIMARY KEY IDENTITY,
  data_pedido date,
  status VARCHAR(100),
  comprador_id INT,
  FOREIGN KEY (comprador_id) REFERENCES usuarios(id)
);

CREATE TABLE itens_pedidos (
  id INT PRIMARY KEY IDENTITY,
  pedido_id INT,
  item_id INT,
  quantidade INT,
  FOREIGN KEY (pedido_id) REFERENCES pedidos(id),
  FOREIGN KEY (item_id) REFERENCES itens(id)
);

CREATE TABLE carrinhos (
  id INT PRIMARY KEY Identity,
  usuario_id INT,
  item_id INT,
  quantidade INT,
  FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
  FOREIGN KEY (item_id) REFERENCES itens(id)
);