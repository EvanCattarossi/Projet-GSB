-- Créer la base de données
CREATE DATABASE gsb_login;

-- Sélectionner la base de données
USE gsb_login;

-- Créer la table des utilisateurs
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    name VARCHAR(100) NOT NULL,
    surname VARCHAR(100) NOT NULL,
    role ENUM('Admin', 'User') NOT NULL
);

-- Insérer des utilisateurs exemples
INSERT INTO users (email, password, name, surname, role) VALUES
('user1@example.com', 'password123', 'Jean', 'Dupont', 'Admin'),
('user2@example.com', 'password456', 'Marie', 'Durand', 'User');