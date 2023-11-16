create database Roda_Presa

use Roda_Presa;

create table Clientes(
    Id_Cliente int not null auto_increment primary key,
    Nome_Cliente varchar(50) not null,
    Email varchar(80) not null,
    Senha_Cliente varchar(50) not null,
    Modelo_Carro varchar(50) not null,
    Data_Nascimento date not null
    );

create table Adm(
    Id_Adm int not null auto_increment primary key, 
    Nome_Adm varchar(50) not null,
    CPF char(11) not null,
    Senha_Adm varchar(50) not null
    );

insert into Clientes(Nome_Clientes, Email, Senha_Cliente, Modelo_Carro, Data_Nascimento) 
values
("Vinícius Alves", "Viniciusalvesdesantana05@gmail.com" , "RodaPresa", "Ford Focus 2011" "2005-09-08");

insert into Adm(Nome_Adm,CPF,Senha_Adm) values
("Maria Eduarda","21659440823", "4002");