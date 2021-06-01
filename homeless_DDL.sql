CREATE DATABASE Homeless;

use Homeless;

CREATE TABLE Personas(
	doc_oficial varchar(15) NOT NULL PRIMARY KEY,
	nombre varchar(15) NOT NULL,
	apellido1 varchar(15) NOT NULL,
	apellido2 varchar(15) NOT NULL,
	sexo varchar(15) NOT NULL,
	nacionalidad varchar(25) NOT NULL,
	empadronamiento varchar(30) NULL,
	equipo_calle varchar(10) NULL,
	fecha_nacimiento date NOT NULL
);

CREATE TABLE Centros(
	codigo_centro int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nombre varchar(100) NOT NULL,
	direccion varchar(30) NOT NULL,
	telf varchar(15) NULL,
	tipo varchar(20) NOT NULL
);

CREATE TABLE DentistasSociales(
	codigo_centro int NOT NULL,
	adaptado varchar(5) NOT NULL,
	FOREIGN KEY (codigo_centro) REFERENCES Centros(codigo_centro) ON UPDATE CASCADE ON DELETE CASCADE
);
CREATE TABLE CentrosDia(
	codigo_centro int NOT NULL,
	adaptado varchar(5) NOT NULL,
	plazas_hombre int NOT NULL,
	plazas_mujer int NOT NULL,
	FOREIGN KEY (codigo_centro) REFERENCES Centros(codigo_centro) ON UPDATE CASCADE ON DELETE CASCADE
);
CREATE TABLE Albergues(
	codigo_centro int NOT NULL,
	adaptado varchar(5) NOT NULL,
	plazas_hombre int NOT NULL,
	plazas_mujer int NOT NULL,
	FOREIGN KEY (codigo_centro) REFERENCES Centros(codigo_centro) ON UPDATE CASCADE ON DELETE CASCADE
);
CREATE TABLE ComedoresSociales(
	codigo_centro int NOT NULL,
	adaptado varchar(5) NOT NULL,
	plazas int NOT NULL,
	FOREIGN KEY (codigo_centro) REFERENCES Centros(codigo_centro) ON UPDATE CASCADE ON DELETE CASCADE
);
CREATE TABLE Roperos(
	codigo_centro int NOT NULL,
	adaptado varchar(5) NOT NULL,
	FOREIGN KEY (codigo_centro) REFERENCES Centros(codigo_centro) ON UPDATE CASCADE ON DELETE CASCADE
);
CREATE TABLE BañosPublicos(
	codigo_centro int NOT NULL,
	adaptado varchar(5) NOT NULL,
	precio float NOT NULL,
	FOREIGN KEY (codigo_centro) REFERENCES Centros(codigo_centro) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE Acuden(
	persona varchar(15) NOT NULL,
	codigo_centro int NOT NULL,
	FOREIGN KEY (persona) REFERENCES Personas(doc_oficial) ON UPDATE CASCADE ON DELETE CASCADE,
	FOREIGN KEY (codigo_centro) REFERENCES Centros(codigo_centro) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE Trabajadores(
	codigo_empleado int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	email varchar(50) NOT NULL,
	password varchar(255) NOT NULL,
	doc_oficial varchar(15) NOT NULL,
	nombre varchar(15) NOT NULL,
	apellido1 varchar(15) NOT NULL,
	apellido2 varchar(15) NOT NULL,
	sexo varchar(15) NOT NULL,
	fecha_nacimiento date NOT NULL,
	puesto varchar(50) NOT NULL
	
);

CREATE TABLE Trabajan(
	codigo_centro int NOT NULL,
	doc_oficial VARCHAR(100) NOT NULL,
	FOREIGN KEY (codigo_centro) REFERENCES Centros(codigo_centro) ON UPDATE CASCADE ON DELETE CASCADE,
	FOREIGN KEY (doc_oficial) REFERENCES Trabajadores(doc_oficial) ON UPDATE CASCADE ON DELETE CASCADE
	
);

CREATE TABLE DatosOcupacion(
	codigo_centro int NOT NULL,
	fecha date NOT NULL,
	num_total int NOT NULL,
	FOREIGN KEY (codigo_centro) REFERENCES Centros(codigo_centro) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE Voluntarios(
	doc_oficial varchar(15) NOT NULL PRIMARY KEY,
	codigo_centro int NOT NULL,
	nombre varchar(15) NOT NULL,
	apellido1 varchar(15) NOT NULL,
	apellido2 varchar(15) NOT NULL,
	telf varchar(15) NULL,
	email varchar(30) NULL,
	FOREIGN KEY (codigo_centro) REFERENCES Centros(codigo_centro) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE Peticiones(
	nombre varchar(15) NOT NULL,
	apellido1 varchar(15) NOT NULL,
	apellido2 varchar(15) NOT NULL,
	doc_oficial varchar(15) NOT NULL PRIMARY KEY,
	ayudar varchar(30) NOT NULL,
	preferencias varchar(100) NULL,
	email varchar(30) NULL,
	telf varchar(20) NULL
);

CREATE TABLE Contratos(
    doc_oficial VARCHAR (100) NOT NULL,
	email VARCHAR(100)NOT NULL,
	fecha_inicio date NOT NULL,
	fecha_fin date NULL,
	convenio varchar(40) NOT NULL,
	salario float NOT NULL,
	jornada float NOT NULL,
	FOREIGN KEY (doc_oficial) REFERENCES Trabajadores(doc_oficial) ON UPDATE CASCADE ON DELETE CASCADE,
	FOREIGN KEY (doc_oficial) REFERENCES Trabajadores(doc_oficial) ON UPDATE CASCADE ON DELETE CASCADE
	);






