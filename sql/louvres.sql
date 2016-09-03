CREATE DATABASE IF NOT EXISTS Louvres;

CREATE TABLE IF NOT EXISTS Profil(
    id_profil INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR (100),
    prenom VARCHAR (100),
    anniversaire DATE,
    tel VARCHAR (20),
    email VARCHAR (255),
    pays VARCHAR (50)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS Reservation(
    id_reservation INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    code VARCHAR (100),
    datetime DATE,
    id_profil INT NOT NULL,
    FOREIGN KEY (id_profil) REFERENCES Profil(id_profil)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS Tarif (
    id_tarif INT NOT NULL PRIMARY KEY,
    designation VARCHAR (100),
    montant TINYINT
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS Billet (
    id_billet INT NOT NULL PRIMARY KEY,
    id_reservation INT NOT NULL,
    id_tarif INT NOT NULL,
    FOREIGN KEY (id_reservation) REFERENCES Reservation(id_reservation),
    FOREIGN KEY (id_tarif) REFERENCES Tarif(id_tarif)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
