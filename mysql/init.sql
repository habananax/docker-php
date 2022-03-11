CREATE TABLE productos (
	codigo INT AUTO_INCREMENT PRIMARY KEY,
	descripcion VARCHAR(200),
	rebaja INT,
	estarebajas ENUM('Si','No'),
	precio DECIMAL (6,2)
	);

CREATE TABLE clientes (
	dni VARCHAR(9) PRIMARY KEY,
	nombre VARCHAR(100),
	apellidos VARCHAR(200),
	fecha_nac DATE,
	telefono INT
	);

CREATE TABLE proveedores (
	dni VARCHAR(9) PRIMARY KEY,
	nombre VARCHAR(100),
	direccion VARCHAR(300),
	email VARCHAR(100),
	telefono INT
	);
