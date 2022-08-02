CREATE DATABASE Cliente;

USE Cliente;

CREATE TABLE Pessoa(

IDCliente int not null auto_increment primary key,
NomeCliente varchar(40) not null,
SobrenomeCliente varchar(40) not null,
EmailCliente varchar(30) not null,
CPFCliente varchar(14) not null,
GenCliente char(1) not null,
UserCliente varchar(10) not null,
SenhaCliente char(8) not null
);
