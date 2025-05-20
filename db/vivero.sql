
-- Crear base de datos y seleccionarla
DROP DATABASE IF EXISTS vivero;
CREATE DATABASE vivero;
USE vivero;

-- Tabla productos
CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    categoria ENUM('planta', 'flor', 'herramienta') DEFAULT 'planta',
    stock INT NOT NULL,
    stock_minimo INT NOT NULL,
    precio DECIMAL(10,2)
);

-- Tabla movimientos
CREATE TABLE movimientos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    producto_id INT NOT NULL,
    tipo_movimiento ENUM('entrada', 'salida') NOT NULL,
    cantidad INT NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (producto_id) REFERENCES productos(id)
);
