CREATE DATABASE empreldb;

create table if not exists complaint (
id int unsigned auto_increment primary key,
tipo varchar(45) not null,
descrição text(255) default null,
data date default null
autor varchar(45) not null,
);
