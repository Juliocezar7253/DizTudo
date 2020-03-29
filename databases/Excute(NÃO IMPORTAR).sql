create database Excute;

	use excute;

	create table cadastro(
	id int primary key not null auto_increment,
	nome varchar(50) not null,
	telefone varchar(14) not null,
	data_nasc date not null,
	email varchar(50) not null,
	senha varchar(20) not null,
	foto varchar(100) not null);

	create table Ranking(
	codigo int primary key not null auto_increment,
	quantidade_acertos int not null
	);
