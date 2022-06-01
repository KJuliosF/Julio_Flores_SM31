
select nombre from producto;
select nombre, precio from producto;
select * from producto;
select nombre, (precio/22.09), (precio/19.54) from producto;
select nombre nombredeProducto, (precio*1.06) AS Euros, precio AS Dolar from producto;
select upper (nombre), precio from producto;
select lower (nombre), precio from producto;
select nombre, UPPER (substring(nombre,1,2)) AS iniciales from fabricante;
select upper (nombre) AS iniciales from producto;
select codigo, nombre AS iniciales from producto;
select producto.codigo, producto.nombre, producto.precio, fabricante.nombre AS fabricante
FROM producto INNER JOIN fabricante ON producto.codigo_fabricante = fabricante.codigo;

INSERT INTO fabricante (nombre) VALUE ('Apple');

USE Tienda;

create table usuarios (
Nombre varchar (20),
Apellido_Paterno varchar (20),
Apellido_Materno varchar (20),
Telefono varchar (20),
Correo varchar (20),
Usuario varchar (20),
Clave varchar (20)
);


INSERT INTO Usuario (Nombre,Apellido_Paterno,Apellido_Materno,Telefono,Correo,Usuario,Clave) 
values ('Julio Jose','Flores','Alamilla','9982891792','julio@utcancun.edu.mx','Julio Flores','Ut123')


