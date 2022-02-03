show databases;
create database cursos;
use cursos;
create table cursospremium (id_cpremium int(3) primary key auto_increment, nome 
varchar (100), criador varchar(100), datausada varchar(100)); 
insert into cursospremium ( nome, criador, datausada) values ("Algoritmos", "Curso em Video", "09/06/2020");
insert into cursospremium ( nome, criador, datausada) values ("HTML5", "Curso em Video", "09/06/2020");
insert into cursospremium ( nome, criador, datausada) values ("CSS3", "Curso em Video", "09/06/2020");
insert into cursospremium ( nome, criador, datausada) values ("Java", "Curso em Video", "09/06/2020");
insert into cursospremium ( nome, criador, datausada) values ("MySQL", "Curso em Video", "09/06/2020");

select * from cursospremium;


create table cursosfullmium (id_cfullmium int(3) primary key auto_increment, nome 
varchar (100), criador varchar(100), datausada varchar(100));

insert into cursosfullmium ( nome, criador, datausada) values ("Algoritmos", "Curso em Video", "09/06/2020");
insert into cursosfullmium ( nome, criador, datausada) values ("HTML5", "Curso em Video", "09/06/2020");
insert into cursosfullmium ( nome, criador, datausada) values ("CSS3", "Curso em Video", "09/06/2020");
insert into cursosfullmium ( nome, criador, datausada) values ("Java", "Curso em Video", "09/06/2020");
insert into cursosfullmium ( nome, criador, datausada) values ("MySQL", "Curso em Video", "09/06/2020");
insert into cursosfullmium ( nome, criador, datausada) values ("PHP", "Curso em Video", "09/06/2020");
insert into cursosfullmium ( nome, criador, datausada) values ("C", "Curso em Video", "09/06/2020");
insert into cursosfullmium ( nome, criador, datausada) values ("C++", "Curso em Video", "09/06/2020");
insert into cursosfullmium ( nome, criador, datausada) values ("Phython", "Curso em Video", "09/06/2020");
insert into cursosfullmium ( nome, criador, datausada) values ("Javascript", "Curso em Video", "09/06/2020");
insert into cursosfullmium ( nome, criador, datausada) values ("Photoshop", "Curso em Video", "09/06/2020");
insert into cursosfullmium ( nome, criador, datausada) values ("Wordpress", "Curso em Video", "09/06/2020");
insert into cursosfullmium ( nome, criador, datausada) values ("Rede de Computadores", "Curso em Video", "09/06/2020");


select * from cursosfullmium;
show tables from cursos;
truncate table cursospremium;