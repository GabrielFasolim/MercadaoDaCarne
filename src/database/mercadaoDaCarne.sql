CREATE TABLE Tipo (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    descricao VARCHAR(1000) NOT NULL
);

CREATE TABLE Carnes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    descricao VARCHAR(1000) NOT NULL,
    tipo_id INT NOT NULL,
    preco DECIMAL(10, 2) NOT NULL,
    foto BLOB,
    FOREIGN KEY (tipo_id) REFERENCES Tipo(id) ON DELETE CASCADE
);

CREATE TABLE Usuario (
    id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL
);

-- user: felipe@admin.com
-- pass: nuM&bI*410&5C1Fi3%s0u7E