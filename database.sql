CREATE DATABASE covoiturage;
USE covoiturage;

CREATE TABLE agences (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL
);

CREATE TABLE utilisateurs (
    id INT PRIMARY KEY,
    nom VARCHAR(100),
    prenom VARCHAR(100),
    email VARCHAR(150),
    telephone VARCHAR(20),
    password VARCHAR(255),
    role ENUM('USER','ADMIN') DEFAULT 'USER'
);

CREATE TABLE trajets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    agence_depart_id INT,
    agence_arrivee_id INT,
    date_depart DATETIME,
    date_arrivee DATETIME,
    places_total INT,
    places_disponibles INT,
    utilisateur_id INT,

    FOREIGN KEY (agence_depart_id) REFERENCES agences(id),
    FOREIGN KEY (agence_arrivee_id) REFERENCES agences(id),
    FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs(id)
);