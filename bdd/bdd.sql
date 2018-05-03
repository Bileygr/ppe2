DROP DATABASE IF EXISTS ppe;

CREATE DATABASE ppe CHARACTER SET utf8 COLLATE utf8_general_ci;

USE ppe;

DROP TABLE IF EXISTS administrateur, formation, jeune, offre, partenaire;

CREATE TABLE administrateur(
	administrateur_id					INT(11) NOT NULL AUTO_INCREMENT,
	administrateur_super				SMALLINT(1) NOT NULL,			
	administrateur_nom					VARCHAR(50) NOT NULL,
	administrateur_prenom				VARCHAR(50) NOT NULL,
	administrateur_mot_de_passe_hash 	CHAR(64) NOT NULL,
	administrateur_telephone			VARCHAR(50) NOT NULL,
	administrateur_email				VARCHAR(50) NOT NULL,
	administrateur_adresse 				VARCHAR(38) NOT NULL,
	administrateur_ville 				VARCHAR(32) NOT NULL,
	administrateur_code_postal			VARCHAR(5) NOT NULL,
	administrateur_derniere_connexion 	DATETIME NOT NULL,
	administrateur_creation 			DATETIME NOT NULL,
	PRIMARY KEY (administrateur_id),
	UNIQUE (administrateur_id, administrateur_mot_de_passe_hash, administrateur_email, administrateur_telephone)
)ENGINE=InnoDB;

CREATE TABLE partenaire(
	partenaire_id 					INT(11) NOT NULL AUTO_INCREMENT,
	partenaire_siret				VARCHAR(9) NOT NULL,
	partenaire_nom 					VARCHAR(50) NOT NULL,
	partenaire_mot_de_passe_hash 	CHAR(64) NOT NULL,
	partenaire_telephone 			VARCHAR(10) NOT NULL,
	partenaire_email				VARCHAR(50) NOT NULL,
	partenaire_adresse				VARCHAR(38) NOT NULL,
	partenaire_ville				VARCHAR(32) NOT NULL,
	partenaire_code_postal			VARCHAR(5) NOT NULL,
	partenaire_derniere_connexion 	DATETIME NOT NULL,
	partenaire_creation				DATETIME NOT NULL,
	PRIMARY KEY (partenaire_id, partenaire_siret),
	UNIQUE (partenaire_id, partenaire_siret, partenaire_mot_de_passe_hash, partenaire_telephone, partenaire_email)
)ENGINE=InnoDB;

CREATE TABLE jeune(
	jeune_id					INT(11) NOT NULL AUTO_INCREMENT,
	jeune_nom					VARCHAR(50) NOT NULL,
	jeune_prenom				VARCHAR(50) NOT NULL,
	jeune_mot_De_passe_hash 	CHAR(50) NOT NULL,
	jeune_telephone 			VARCHAR(10) NOT NULL,
	jeune_email 				VARCHAR(50) NOT NULL,
	jeune_adresse 				VARCHAR(38) NOT NULL,
	jeune_ville 				VARCHAR(32) NOT NULL,
	jeune_code_postal 			VARCHAR(50) NOT NULL,
	jeune_derniere_connexion 	DATETIME NOT NULL,
	jeune_creation 				DATETIME NOT NULL,
	PRIMARY KEY (jeune_id),
	UNIQUE (jeune_id, jeune_mot_De_passe_hash, jeune_telephone, jeune_email)
)ENGINE=InnoDB;

CREATE TABLE formation(
	formation_id 			INT(11) NOT NULL AUTO_INCREMENT,
	formation_nom			VARCHAR(50) NOT NULL,
	formation_creation		DATETIME NOT NULL,
	PRIMARY KEY (formation_id),
	UNIQUE (formation_id, formation_nom)
)ENGINE=InnoDB;

CREATE TABLE offre(
	offre_id			INT(11) NOT NULL AUTO_INCREMENT,
	partenaire_id		INT(11) NOT NULL,
	formation_id		INT(11) NOT NULL,
	offre_nom			VARCHAR(50) NOT NULL,
	offre_description 	TEXT NOT NULL,
	offre_adresse 		VARCHAR(38) NOT NULL,
	offre_ville			VARCHAR(32) NOT NULL,
	offre_code_postal	VARCHAR(5) NOT NULL,
	offre_debut			DATE NOT NULL,
	offre_fin			DATE NOT NULL,
	offre_ceration		DATETIME NOT NULL,
	PRIMARY KEY(offre_id),
	CONSTRAINT FK_offre_partenaire_id FOREIGN KEY (partenaire_id) REFERENCES partenaire(partenaire_id),
	CONSTRAINT FK_offre_formation_id FOREIGN KEY (formation_id) REFERENCES formation(formation_id),
	UNIQUE(offre_id)
)ENGINE=InnoDB;


INSERT INTO administrateur(administrateur_nom, administrateur_prenom, administrateur_mot_de_passe_hash, 
							administrateur_telephone, administrateur_email, administrateur_adresse, administrateur_ville,
							administrateur_code_postal, administrateur_derniere_connexion, administrateur_creation)
		VALUES('Keita', 'Cheik', '$2y$10$FP4dnjrnhbedPYOAiHF7AOPlAsiyrXXXYKHV/27.e2pnDnudtLc/q', '0605557802', 
				'cheiksiramakankeita@gmail.com', '57 Boulevard de l\'Yerres', 'Evry', '91000', NOW(), NOW())