CREATE TABLE PRODUTO(
	IdProduto INT PRIMARY KEY AUTO_INCREMENT,
	nomeProduto VARCHAR(50) NOT NULL,
    precoProduto float not null
);

INSERT into produto (nomeProduto, precoProduto) values ("Pizza de frango", 55);
INSERT into produto (nomeProduto, precoProduto) values ("Coxinha de frango", 7);
INSERT into produto (nomeProduto, precoProduto) values ("Contrafilé",49);