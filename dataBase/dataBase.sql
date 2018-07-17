-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2018-04-17 14:24:32.075

-- tables

-- Table: Produtos
CREATE TABLE Produtos (
    produtoId int NOT NULL AUTO_INCREMENT,
    nome varchar(128) NOT NULL,
    preco float NOT NULL,
    descricaoSimples varchar(512) NOT NULL,
    descricaoCompleta varchar(4096) NOT NULL,
    categoria varchar(128) NOT NULL,
    subcategoria varchar(128) NOT NULL,
    imagem1 varchar(128) NOT NULL,
    imagem2 varchar(128) NOT NULL,
    imagem3 varchar(128) NOT NULL,
    imagem4 varchar(128) NOT NULL,

    PRIMARY KEY (produtoId)
);

-- Table: Usuario
CREATE TABLE Usuarios (
    usuarioId int NOT NULL AUTO_INCREMENT,
    primeiroNome varchar(64) NOT NULL,
    sobreNome varchar(64) NOT NULL,
    cpf char(11) NOT NULL,
    estado varchar(32) NOT NULL,
    cidade varchar(64) NOT NULL,
    endereco varchar(1000) NOT NULL,
    bairro varchar(64) NOT NULL,
    email varchar(50) NOT NULL,
    senha varchar(50) NOT NULL,

    PRIMARY KEY (usuarioId)
);

-- Table: Pedidos
CREATE TABLE Pedidos (
    pedidoId int NOT NULL AUTO_INCREMENT,
    numero_produtos int NOT NULL,
    preco_total int NOT NULL,
    endereco_entrega varchar(1024) NOT NULL,
    status_ varchar(64) NOT NULL,
    hora_compra timestamp NOT NULL,
    usuarioId int NOT NULL,

    PRIMARY KEY (pedidoId),
    FOREIGN KEY (usuarioId) REFERENCES Usuario (usuarioId)
);

--Table: PedidosProdutos
CREATE TABLE PedidosProdutos (
    pedidoId int NOT NULL,
    produtoId int NOT NULL,
    quantidade int NOT NULL,
    
    FOREIGN KEY (pedidoId) REFERENCES Pedidos (pedidoId),
    FOREIGN KEY (produtoId) REFERENCES Produtos (produtoId),
);

-- Table: Fornecedores
CREATE TABLE Fornecedores (
    fornecedorId int NOT NULL AUTO_INCREMENT,
    nome varchar(512) NOT NULL,
    endereco varchar(512) NOT NULL,
    telefone varchar(64) NOT NULL,
    cnpj varchar(128) NOT NULL,
    email varchar(64) NOT NULL,

    PRIMARY KEY (fornecedorId)
);

-- Table: UsuariosADM
CREATE TABLE UsuariosADM (
    usuarioadmId int NOT NULL AUTO_INCREMENT,
    nome varchar(64) NOT NULL,
    cpf varchar(11) NOT NULL,
    estado varchar(32) NOT NULL,
    cidade varchar(64) NOT NULL,
    endereco varchar(1000) NOT NULL,
    bairro varchar(64) NOT NULL,
    email varchar(50) NOT NULL,
    senha varchar(50) NOT NULL,
    
    PRIMARY KEY (usuarioadmId)
);



