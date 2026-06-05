CREATE DATABASE concours
DEFAULT CHARACTER SET utf8mb4 
COLLATE utf8mb4_unicode_ci ;

CREATE TABLE question (
    id INT AUTO_INCREMENT PRIMARY KEY,
    texte VARCHAR(255) NOT NULL,
    reponse BOOLEAN NOT NULL,
    points INT NOT NULL
);

INSERT INTO question (texte, reponse, points) VALUES
('Paris est la capitale de la France.', 1, 10),
('Une semaine contient 7 jours.', 1, 20),
('Les araignees sont des insectes.', 0, 30),
('L''eau bout a 100°C au niveau de la mer.', 1, 40),
('La Terre possede deux lunes naturelles.', 0, 50),
('Le langage PHP s''execute principalement cote serveur.', 1, 60),
('Le nombre PI est un nombre rationnel.', 0, 70),
('Un octet est compose de 8 bits.', 1, 80),
('La vitesse de la lumiere dans le vide est superieure a 300000 km/s.', 0, 90),
('En SQL, une cle etrangere garantit l''integrite referentielle entre deux tables.', 1, 100);

CREATE USER 'nika'@'localhost'
IDENTIFIED BY 'gomu';

GRANT ALL PRIVILEGES
ON concours.*
TO 'nika'@'localhost';

SHOW GRANTS FOR 'nika'@'localhost';