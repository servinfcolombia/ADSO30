-- Crear la base de datos si no existe
CREATE DATABASE IF NOT EXISTS usuario_php;
USE usuario_php;

-- Crear tabla login_user
CREATE TABLE IF NOT EXISTS login_user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
