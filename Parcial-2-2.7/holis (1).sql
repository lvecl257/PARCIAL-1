CREATE DATABASE sistema;
USE sistema;
CREATE TABLE usuarios
(
	idUsuario          int primary key,
    login              varchar(20),
    password           varchar(50),
    nombre             varchar(50)
);
INSERT INTO usuarios VALUES(1, 'Ana', SHA1('123'), 'Ana Lopez');
INSERT INTO usuarios VALUES(2, 'Chencho', SHA1('pass'), 'Jesus Perez');
INSERT INTO usuarios VALUES(3, 'Tony', SHA1('tony123'), 'Toño Juarez');
INSERT INTO usuarios VALUES(4, 'Vero', SHA1('ungatoloco123'), 'Veronica Estrada');