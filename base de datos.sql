DROP DATABASE IF EXISTS novashoes;
CREATE DATABASE IF NOT EXISTS novashoes ;
USE novashoes;

 

create table if not exists 6_zapatillas(
    id int auto_increment primary key,
    nombre varchar(50),
    codigo varchar (20),
    marca varchar (40),
    perfil varchar (10),
    precio decimal(4,2)
);

 

create table if not exists 6_usuarios(
    id int auto_increment primary key,
    nombre varchar (20),
    email varchar (40),
    password varchar (70),
    rol_id int
);

 

create table if not exists 6_proveedor(
    id int auto_increment primary key,
    nombre varchar (20),
    nif varchar (40),
    direccion varchar (70),
    telefono  varchar (12)
);

 


CREATE TABLE IF NOT EXISTS 6_proveedor_has_zapatillas (
   id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  id_proveedor INT NOT NULL,
  id_zapatillas INT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

 

 

CREATE TABLE IF NOT EXISTS 6_clientes_has_zapatillas (
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  id_clientes INT NOT NULL,
  id_zapatillas INT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

 

CREATE TABLE 6_cesta(
idProducto int PRIMARY KEY AUTO_INCREMENT,
nombreProducto varchar(50),
precioProducto decimal(10,0)
);

 

INSERT INTO 6_usuarios (nombre, email, password, rol_id) VALUES("Alvaro", "alvarobtbz@gmail.com", "1234", 1);
INSERT INTO 6_usuarios (nombre, email, password, rol_id) VALUES ("Jorge", "jorgesan@gmail.com", "1234", 1);
INSERT INTO 6_usuarios (nombre, email, password, rol_id) VALUES ("Sergio", "sfontan@profesores.imf.com", "7890", 2);

 


INSERT INTO 6_zapatillas (nombre, codigo, marca, perfil, precio) VALUES ('Lebron XX Trinity', '123451234523', 'nike', 'Bajo', 98.75);
INSERT INTO 6_zapatillas (nombre, codigo, marca, perfil, precio) VALUES ('Giannis Immortality 2 Grey Crimson', '123451334523', 'nike', 'Medio', 87.30);
INSERT INTO 6_zapatillas (nombre, codigo, marca, perfil, precio) VALUES ('Retro Sour Patch Kids', '123456789123', 'under armour', 'Medio', 63.90);
INSERT INTO 6_zapatillas (nombre, codigo, marca, perfil, precio) VALUES ('Harden Vol.6 Taxi', '987554321987', 'adidas', 'Medio', 116.45);
INSERT INTO 6_zapatillas (nombre, codigo, marca, perfil, precio) VALUES ('Harden Vol.6 The Bahamas', '987658321987', 'adidas', 'Medio', 92.80);
INSERT INTO 6_zapatillas (nombre, codigo, marca, perfil, precio) VALUES ('Luka Reverse Orca', '987123765456', 'jordan', 'Bajo', 76.05);
INSERT INTO 6_zapatillas (nombre, codigo, marca, perfil, precio) VALUES ('Zion 2 Pelicans', '98754325456', 'jordan', 'Bajo', 58.20);
INSERT INTO 6_zapatillas (nombre, codigo, marca, perfil, precio) VALUES ('TWO WXY V3 Cerebral', '123459876545', 'new balance', 'Medio', 108.95);
INSERT INTO 6_zapatillas (nombre, codigo, marca, perfil, precio) VALUES ('MB.02 Supernova', '164978142395', 'puma', 'Bajo', 77.40);
INSERT INTO 6_zapatillas (nombre, codigo, marca, perfil, precio) VALUES ('Stewie 1 Quiet Fire', '164978152397', 'puma', 'Bajo', 103.25);

 

SELECT * FROM 6_zapatillas;

 

INSERT INTO 6_proveedor (nombre, nif, direccion, telefono) VALUES("JHayber", "B03038957", "CARRETERA DOLORES", "965457912");
INSERT INTO 6_proveedor (nombre, nif, direccion, telefono) VALUES ("COAS SPORT TRADE", "A80955362", "CALLE ARROYO DEL CULEBRO, 12", "916926730");