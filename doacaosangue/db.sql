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