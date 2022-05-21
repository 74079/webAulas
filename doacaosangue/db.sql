/*

CREATE DATABASE doacaosangue;
use doacaosangue;
CREATE TABLE doadores(
    id int(4) primary key not null auto_increment,
    primeiroNome varchar(15) not null,
    segundoNome varchar(15) not null,
    email varchar(15) not null,
    telefone char(11) not null,
    cidade varchar(20) not null,
    bairro varchar(20) not null,
    rua varchar(20) not null 
);
*/

CREATE TABLE Doador(
	IdDoador INT PRIMARY KEY AUTO_INCREMENT,
    primeiroNome varchar(15) not null,
    SegundoNome varchar(15) not null,
    email varchar(15) not null,
    telefone char(11) not null,
    cidade varchar(20) not null,
    bairro varchar(20) not null,
    rua varchar(20) not null 
);

INSERT into produto (primeiroNome, SegundoNome, email, cidade, bairro, rua) values ("lucas", "henrique", "henriquefagundes@gmail.com","hortolandia","pq do horto", "Crisantemo");
INSERT into produto (primeiroNome, SegundoNome, email, cidade, bairro, rua) values ("lucas", "henrique", "henriquefagundes@gmail.com","hortolandia","pq do horto", "Crisantemo");
INSERT into produto (primeiroNome, SegundoNome, email, cidade, bairro, rua) values ("lucas", "henrique", "henriquefagundes@gmail.com","hortolandia","pq do horto", "Crisantemo");
INSERT into produto (primeiroNome, SegundoNome, email, cidade, bairro, rua) values ("lucas", "henrique", "henriquefagundes@gmail.com","hortolandia","pq do horto", "Crisantemo");
