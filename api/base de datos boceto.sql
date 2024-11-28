CREATE DATABASE cronos;
USE cronos;

CREATE TABLE Metodo_Pago(
	Clave_Metodo_Pago INT AUTO_INCREMENT,
    Metodo_Pago VARCHAR(25) NOT NULL,
    PRIMARY KEY(Clave_Metodo_Pago)
)
INSERT INTO Metodo_Pago (Metodo_Pago)
VALUES
    ('tarjeta_credito'),
    ('tarjeta_debito'),
    ('paypal');
    
CREATE TABLE Usuario(
    Clave_Usuario INT AUTO_INCREMENT,
    Nombre_Usuario VARCHAR(50) NOT NULL,
    Correo_Electronico VARCHAR(60) NOT NULL UNIQUE,
    Contraseña VARCHAR(255) NOT NULL, -- Utilizar hashing seguro como bcrypt o Argon2
    Direccion VARCHAR(100) NOT NULL,
    Telefono VARCHAR(20) NOT NULL, -- Soporta números internacionales
    Fecha_Nacimiento DATE,
    Genero VARCHAR(30),
    Fecha_Creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    Clave_Metodo_Pago INT NULL,
    PRIMARY KEY (Clave_Usuario),
    FOREIGN KEY (Clave_Metodo_Pago) REFERENCES Metodo_Pago(Clave_Metodo_Pago)
);


CREATE TABLE Producto(
	Clave_Producto INT AUTO_INCREMENT,
    Nombre_Producto VARCHAR(50) NOT NULL,
    Descripcion VARCHAR(255) NOT NULL,
    Stock INT NOT NULL,
    Precio DECIMAL(10,2) NOT NULL,
    PRIMARY KEY(Clave_Producto)
)
INSERT INTO Producto (Nombre_Producto, Descripcion, Stock, Precio)
VALUES 
    ('Rolex Submariner', 'El icónico reloj de buceo con un diseño robusto y elegante', 50, 10700.00),
    ('Rolex Lady-Datejust', 'Un clásico atemporal con un diseño elegante, perfecto para cualquier ocasion', 50, 7500.00),
    ('Seiko Prospex Diver', 'Reloj de buceo robusto y accesible para aventureros', 50, 9800.00),
    ('Omega Constellation', 'Reloj elegante con detalles en oro rosa y un diseño sofisticado', 50, 4200.00),
    ('Omega Speedmaster Moonwacth', 'El legendario reloj utilizado en buenos momentos', 50, 8100.00),
    ('Cartier Ballon Bleu', 'Elegancia y lujo en un diseño redondeado con el icónico cabujón rosa', 50, 14900.00),
    ('Cartier Santos', 'Elegancia atemporal y versatilidad con correas intercambiable', 50, 12500.00),
    ('Michael Kors Parker', 'Reloj moderno y brillante con detalles de cristales que lo hacen destacar', 50, 13300.00),
    ('Tissot Le Locle', 'Elegante reloj clásico con detalles fino y precisión suiza', 50, 16200.00),
    ('Seiko Prospex Second Edition', 'Reloj de buceo robusto y accesible para aventureros y mas', 50, 15300.00),
    ('Tag Hever Carrera', 'Combina elegancia y precisión con un diseño sofisticado y clásico', 50, 11800.00),
    ('Tag Hever Aquaracer Lady', 'Reloj elegante para mujeres activas que buscan estilo y funcionalidad', 50, 9800.00),
    ('Seiko Presage Cocktail Time', 'Inspirado en cócteles, ofrece un diseño clásico con detalles elegantes', 50, 10700.00),
    ('Lapso', 'Reloj moderno y audaz con un diseño innovador y materiales avanzados', 50, 11800.00),
    ('Breitling Navitimer', 'Un reloj icónico para los pilotos, con funciones avanzadas y un diseño clásico', 50, 7600.00),
    ('Anillo de Compromiso Tiffany Setting', 'Este icónico anillo de Tiffany & Co. presenta un diamante redondo, diseñado para maximizar el brillo y la luz', 50, 2100.00),
    ('Pulsera Cartier Love', 'Un diseño clásico, hecha de oro y perlas decorativas', 50, 1500.00),
    ('Collar Van Cleef & Arpels Alhambra', 'Un diseño icónico con motivos de trébol, está elaborado en oro amaril,lo con nácar', 50, 1250.00),
    ('Anillo Bulgari Serpenti', 'Inspirado en la serpiente, símbolo de seducción y elegancia', 50, 2900.00),
    ('Pulsera Pandora Moments', 'Personalizable y elegante, hecha de oro', 50, 2000.00),
    ('Collar Swarovski Attract', 'Elegante y moderno, con un brillante colgante de oroo que añade un toque de sofisticación a cualquier atuendo', 50, 1800.00);

CREATE TABLE Favoritos(
	Clave_Favoritos INT AUTO_INCREMENT,
    Clave_Usuario INT,
    Clave_Producto INT,
    PRIMARY KEY(Clave_Favoritos),
    FOREIGN KEY(Clave_Usuario) REFERENCES Usuario(Clave_Usuario),
    FOREIGN KEY(Clave_Producto) REFERENCES Producto(Clave_Producto)
)

CREATE TABLE Compra(
	Clave_Compra INT AUTO_INCREMENT,
    Clave_Usuario INT,
    CLave_Metodo_Pago INT,
    Fecha_Compra DATE,
    Total DECIMAL(10, 2) NOT NULL
    PRIMARY KEY(Clave_Compra),
    FOREIGN KEY(Clave_Usuario) REFERENCES Usuario(Clave_Usuario),
    FOREIGN KEY(Clave_Metodo_Pago) REFERENCES Metodo_Pago(Clave_Metodo_Pago)
)

CREATE TABLE Compra_Detalles(
	Clave_Detalle INT AUTO_INCREMENT,
    Clave_Compra INT,
    Clave_Producto INT,
    Stock_Compra INT NOT NULL,
    Precio_Unitario DECIMAL(10, 2) NOT NULL,
    PRIMARY KEY(Clave_Detalle),
    FOREIGN KEY(Clave_Compra) REFERENCES Compra(Clave_Compra),
    FOREIGN KEY(Clave_Producto) REFERENCES Producto(Clave_Producto)
)

CREATE TABLE Carrito(
	Clave_Carrito INT AUTO_INCREMENT,
    Clave_Usuario INT,
    Clave_Producto INT,
    Stock_Carrito INT NOT NULL,
    PRIMARY KEY(Clave_Carrito),
    FOREIGN KEY(Clave_Usuario) REFERENCES Usuario(Clave_Usuario),
    FOREIGN KEY(Clave_Producto) REFERENCES Producto(Clave_Producto)
)