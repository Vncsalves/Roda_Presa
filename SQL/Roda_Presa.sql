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

insert into Clientes(Nome_Cliente, Email, Senha_Cliente, Modelo_Carro, Data_Nascimento) 
values
("Vinícius Alves", "Viniciusalvesdesantana05@gmail.com" , "RodaPresa", "Ford Focus 2011", "2005-09-08");

insert into Adm(Nome_Adm,CPF,Senha_Adm) values
("Maria Eduarda","21659440823", "4002"),
("João Pedro", "21659440572", "8922"),
("Thiago Gabriel","12349440572","4022");

create table Servicos(
    Id_Servico int not null auto_increment primary key,
    Data_Servico date not null,
    Horario_Servico time not null,
    Tipo_Servico varchar(50) not null,
    Relatorio_Servico varchar(200),
    Id_Cliente int,
    Nome_Cliente varchar(100),
    Nome_Adm varchar(50),
    Modelo_Carro varchar(50) not null,
    Preco_Final varchar(25)
); 
insert into Servicos(Data_Servico,Horario_Servico,Tipo_Servico,Relatorio_Servico,Id_Cliente,Nome_Cliente,Nome_Adm,Modelo_Carro,Preco_Final)
values
("2023-11-18","12:30:00","Alinhamento","Alinhamento realizado com sucesso","6","Vinicius Alves","Maria Eduarda","Ford Focus 2011","R$2000"),
("2023-12-23","13:30:00","Vistoria","Necessario trocar pneus","6","Vinicius Alves","Maria Eduarda","Ford Focus 2011","R$1500"),
("2024-03-09","12:00:00","Troca De Pneu","Troca de Pneus realizado com sucesso","6","Vinicius Alves","Thiago Gabriel","Ford Focus 2011","R$1000");