create database FichaTecnica;
use FichaTecnica;

create table usuarios(
	idUsuario int not null auto_increment,
    nombre char(20),
    apellido char(20),
    edad int,
    sexo char(10),
    correo char(30),
    telefono int,
    sitemaSalud char(30),
    alergia char(30),
    sangre char(20),
    observacion text,
	primary key (idUsuario)
);


insert into usuarios(idUsuario, nombre, apellido, edad, sexo, correo, telefono, sitemaSalud, alergia, sangre, observacion)
values();