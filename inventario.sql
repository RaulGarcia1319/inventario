create database inventario;

use inventario;
drop table producto;
create table producto
(
	idProducto int primary key auto_increment,
    nombre varchar(100) not null,
    tipo varchar(100) not null,
    marca varchar(50) not null,
    precio float(6,2),
    descripcion varchar(200) not null
);

insert into producto (nombre, tipo, marca, precio, descripcion) values ('Logitech G305', 'Periferico', 'Logitech', 39.95, 'Mouse inalambrico con tecnología LightSpeed');

select * from producto;
