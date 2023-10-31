


drop database if exists orange;
create database orange;

use orange;

create table client (
    idclient int(3) not null auto_increment,
    nom varchar(50),
    prenom varchar(50),
    adresse varchar(50),
    email varchar(50),
    primary key (idclient)

);

create table produit (
    idproduit int(3) not null auto_increment,
    designation varchar(50),
    prixachat varchar(50),
    etat varchar(50),
    dateachat date,
    idclient int(3) not null,
    primary key (idproduit),
    foreign key (idclient) references client(idclient)

);


create table technicien (
    idtech int(3) not null auto_increment,
    nom varchar(50),
    prenom varchar(50),
    email varchar(50),
    qualification varchar(50),
    primary key (idtech)

);


create table intervention (
    idinter  int(3) not null auto_increment,
    dateinter date,
    prixinter varchar(50),
    rapport text,
    idproduit int(3) not null ,
    idtech int(3) not null ,
    primary key (idinter),
    foreign key (idproduit) references produit(idproduit),
    foreign key (idtech) references technicien(idtech)



);


create table user (
    iduser int(3) not null auto_increment,
    nom varchar(50),
    prenom varchar(50),
    email varchar(50),
    mdp varchar(250),
    role enum("user", "admin"),
    primary key (iduser)
);
