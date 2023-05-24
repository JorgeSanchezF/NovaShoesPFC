DROP DATABASE IF EXISTS novashoes;
CREATE DATABASE IF NOT EXISTS novashoes ;
USE novashoes;

create table if not exists zapatillas(
	id int auto_increment primary key,
    nombre varchar(50),
    codigo varchar (20),
    marca varchar (40),
    perfil varchar (10)
);

create table if not exists usuarios(
	id int auto_increment primary key,
    nombre varchar (20),
    email varchar (40),
    password varchar (70),
    rol_id int
);

create table if not exists proveedor(
	id int auto_increment primary key,
    nombre varchar (20),
    nif varchar (40),
    direccion varchar (70),
    telefono  varchar (12)
);


CREATE TABLE IF NOT EXISTS proveedor_has_zapatillas (
   id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  id_proveedor INT NOT NULL,
  id_zapatillas INT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE IF NOT EXISTS clientes_has_zapatillas (
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  id_clientes INT NOT NULL,
  id_zapatillas INT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO usuarios (nombre, email, password, rol_id) VALUES("Alvaro", "alvarobtbz@gmail.com", "1234", 1);
INSERT INTO usuarios (nombre, email, password, rol_id) VALUES ("Jorge", "jorgesan@gmail.com", "1234", 1);
INSERT INTO usuarios (nombre, email, password, rol_id) VALUES ("Sergio", "sfontan@profesores.imf.com", "7890", 2);


INSERT INTO zapatillas (nombre, codigo, marca, perfil) VALUES ("Lebron XX Trinity", "123451234523", "nike", "Bajo");
INSERT INTO zapatillas (nombre, codigo, marca, perfil) VALUES  ("Giannis Immortality 2,Grey Crimson", "123451334523", "nike", "Medio");
INSERT INTO zapatillas (nombre, codigo, marca, perfil) VALUES  ("Retro, Sour Patch Kids", "123456789123", "under armour", "Medio");
INSERT INTO zapatillas (nombre, codigo, marca, perfil) VALUES ("Harden Vol.6, Taxi", "987554321987", "adidas", "Medio");
INSERT INTO zapatillas (nombre, codigo, marca, perfil) VALUES ("Harden Vol.6, The Bahamas", "987658321987", "adidas", "Medio");
INSERT INTO zapatillas (nombre, codigo, marca, perfil) VALUES ("Luka, Reverse Orca", "987123765456", "jordan", "Bajo");
INSERT INTO zapatillas (nombre, codigo, marca, perfil) VALUES ("Zion 2, Pelicans", "98754325456", "jordan", "Bajo");
INSERT INTO zapatillas (nombre, codigo, marca, perfil) VALUES ("TWO WXY V3, Cerebral", "123459876545", "new balance", "Medio");
INSERT INTO zapatillas (nombre, codigo, marca, perfil) VALUES ("MB.02, Supernova", "164978142395", "puma", "Bajo");
INSERT INTO zapatillas (nombre, codigo, marca, perfil) VALUES ("Stewie 1 Quiet Fire", "164978152397", "puma", "Bajo");

-- SELECT * FROM zapatillas;

INSERT INTO proveedor (nombre, nif, direccion, telefono) VALUES("JHayber", "B03038957", "CARRETERA DOLORES", "965457912");
INSERT INTO proveedor (nombre, nif, direccion, telefono) VALUES ("COAS SPORT TRADE", "A80955362", "CALLE ARROYO DEL CULEBRO, 12", "916926730");

SELECT id FROM usuarios WHERE email = 'alvarobtbz@gmail.com' AND password = '1234';

SELECT * from zapatillas;