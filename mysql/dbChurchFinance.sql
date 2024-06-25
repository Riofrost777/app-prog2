drop database if exists dbChurchFinance;
-- create database dbChurchEvent;
create database if not exists dbChurchFinance;
use dbChurchFinance;

-- drop table if exists event;

create table if not exists admin
(
  id_admin int unsigned auto_increment primary key,
  email varchar(50),
  mobile varchar(15),
  password varchar(255),
  name varchar(100),
  roleID int
);

create table if not exists congregation
(
  id_congregation int unsigned auto_increment primary key,
  email varchar(50),
  mobile varchar(15),
  password varchar(255),
  name varchar(100),
  address text,
  roleID int
);

create table if not exists financeDetails
(
  token_id int unsigned auto_increment primary key,
  category enum('Pemasukan','Pengeluaran'),
  name varchar(50),
  amount float,
  inputTime timestamp default current_timestamp,
  status int
);


create table if not exists logEvent
(
  logID int unsigned auto_increment primary key,
  con_id int unsigned,
  logTime timestamp default current_timestamp,
  name varchar(50),
  status int,
  description int,
  foreign key(con_id) references congregation(id_congregation)
);

create table if not exists logEventAdmin
(
  logID int unsigned auto_increment primary key,
  adm_id int unsigned,
  logTime timestamp default current_timestamp,
  name varchar(50),
  foreign key(adm_id) references admin(id_admin)
);
