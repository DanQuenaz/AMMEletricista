
-- Table: Produtos
CREATE TABLE produtos (
    produtoId int NOT NULL AUTO_INCREMENT,
    nome varchar(128) NOT NULL,
    preco float NOT NULL,
    descricaoSimples varchar(512) NOT NULL,
    descricaoCompleta varchar(4096) NOT NULL,
    categoria varchar(128) NOT NULL,
    subcategoria varchar(128) NOT NULL,
    peso float NOT NULL,
    altura float NOT NULL,
    largura float NOT NULL,
    comprimento float NOT NULL,
    imagem1 varchar(128) NOT NULL,
    imagem2 varchar(128) NOT NULL,
    imagem3 varchar(128) NOT NULL,
    imagem4 varchar(128) NOT NULL,

    PRIMARY KEY (produtoId)
);

-- Table: Usuario
CREATE TABLE usuarios (
    usuarioId int NOT NULL AUTO_INCREMENT,
    primeiroNome varchar(64) NOT NULL,
    sobreNome varchar(64) NOT NULL,
    nomeCompleto varchar(128) NOT NULL,
    cpf char(11) NOT NULL,
    email varchar(50) NOT NULL,
    senha varchar(50) NOT NULL,
    telefone varchar(32) NOT NULL,
    endereco varchar(1000) NOT NULL,
    numero int NOT NULL,
    bairro varchar(64) NOT NULL,
    cidade varchar(64) NOT NULL,
    estado varchar(32) NOT NULL,
    cep varchar(16) NOT NULL,

    PRIMARY KEY (usuarioId)
);

-- Table: Endereços
CREATE TABLE enderecos(
    enderecoId int NOT NULL AUTO_INCREMENT,
    usuarioId int NOT NULL,
    endereco varchar(1000) NOT NULL,
    bairro varchar(64) NOT NULL,
    cidade varchar(64) NOT NULL,
    estado varchar(32) NOT NULL,
    cep varchar(16),

    PRIMARY KEY (enderecoId),
    FOREIGN KEY (usuarioId) REFERENCES Usuarios (usuarioId)
);

-- Table: Pedidos
CREATE TABLE pedidos (
    pedidoId int NOT NULL AUTO_INCREMENT,
    numero_produtos int NOT NULL,
    preco_total float NOT NULL,
    endereco_entrega varchar(1024) NOT NULL,
    status_ varchar(64) NOT NULL,
    hora_compra timestamp NOT NULL,
    usuarioId int NOT NULL,
    codigoPs varchar(128) NOT NULL,
    status_entrega varchar(128) NOT NULL,

    PRIMARY KEY (pedidoId),
    FOREIGN KEY (usuarioId) REFERENCES Usuarios (usuarioId)
);

-- Table: PedidosProdutos
CREATE TABLE pedidosprodutos (
    pedidoId int NOT NULL,
    produtoId int NOT NULL,
    quantidade int NOT NULL,
    
    FOREIGN KEY (pedidoId) REFERENCES Pedidos (pedidoId),
    FOREIGN KEY (produtoId) REFERENCES Produtos (produtoId)
);

-- Table: Fornecedores
CREATE TABLE fornecedores (
    fornecedorId int NOT NULL AUTO_INCREMENT,
    nome varchar(512) NOT NULL,
    endereco varchar(512) NOT NULL,
    telefone varchar(64) NOT NULL,
    cnpj varchar(128) NOT NULL,
    email varchar(64) NOT NULL,

    PRIMARY KEY (fornecedorId)
);

-- Table: UsuariosADM
CREATE TABLE usuariosadm (
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



