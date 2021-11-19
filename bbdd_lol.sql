create database if not exists lol;
use lol;
create table productos(
codigoproducto int AUTO_INCREMENT primary key,
nombre varchar(40) not null,
descripcion varchar(60) not null,
precio int not null,
tipos enum('Dolor', 'Tanque', 'Iniciar', 'Magia') not null,
nombreimagen varchar(40) not null
);

insert into productos (nombre, descripcion, precio, tipos, nombreimagen) values ('Filo infinito', 'El mejor objeto de este tipo, no te decepcionará', 3400, 'Dolor', './img/Filo.png');
insert into productos (nombre, descripcion, precio, tipos, nombreimagen) values ('Capa de fuego solar', 'Aguantarás vivo hasta el proximo amanecer', 2750, 'Tanque', './img/Capa.png');
insert into productos (nombre, descripcion, precio, tipos, nombreimagen) values ('Cortasendas', 'Un objeto que corta el movimiento del rival', 3300, 'Iniciar', './img/Corta.png');
insert into productos (nombre, descripcion, precio, tipos, nombreimagen) values ('Eco de Luden', 'Esta varita tiene más poder mágico que toda tu familia', 3200, 'Magia', './img/Eco.png');

create table pedidos (
idpedido int AUTO_INCREMENT primary key,
totalpedido int not null
);

create table detallepedidos (
    idpedido int,
    producto varchar(40),
    precio int not null,
    cantidad int not null,
    CONSTRAINT FK_IdPedido FOREIGN KEY (idpedido) REFERENCES pedidos(idpedido)
);