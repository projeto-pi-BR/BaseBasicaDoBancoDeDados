create database yougWork;
use yougWork;

create table login (
	email varchar(65) not null primary key,
    senha char(30) not null
);

create table cadastro (
	nomeCompleto varchar(100) not null,
    email varchar(65) not null primary key,
    senha char(30) not null
);

desc login;

desc cadastro;