DROP DATABASE IF EXISTS cheik_ppe;

CREATE DATABASE cheik_ppe CHARACTER SET utf8 COLLATE utf8_general_ci;

USE cheik_ppe;

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
	jeune_mot_de_passe_hash 	CHAR(64) NOT NULL,
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
	offre_creation		DATETIME NOT NULL,
	PRIMARY KEY(offre_id),
	CONSTRAINT FK_offre_partenaire_id FOREIGN KEY (partenaire_id) REFERENCES partenaire(partenaire_id),
	CONSTRAINT FK_offre_formation_id FOREIGN KEY (formation_id) REFERENCES formation(formation_id),
	UNIQUE(offre_id)
)ENGINE=InnoDB;

INSERT INTO administrateur(administrateur_super, administrateur_nom, administrateur_prenom, administrateur_mot_de_passe_hash, 
							administrateur_telephone, administrateur_email, administrateur_adresse, administrateur_ville,
							administrateur_code_postal, administrateur_derniere_connexion, administrateur_creation)
		VALUES(1, 'Guerfi', 'Souhila', '$2y$10$IVsT3/JW8P26zUzf9iAf4uoDQBAVzRTHB9opbl3vo4DS357r3/SW2', '0605557801', 
				'sguerfi12@yahoo.fr', '128 Allée des Champs Elysées', 'Evry', '91000', NOW(), NOW());

INSERT INTO administrateur(administrateur_super, administrateur_nom, administrateur_prenom, administrateur_mot_de_passe_hash, 
							administrateur_telephone, administrateur_email, administrateur_adresse, administrateur_ville,
							administrateur_code_postal, administrateur_derniere_connexion, administrateur_creation)
		VALUES(0, 'Keita', 'Cheik', '$2y$10$T2Ip0oXl6MKVNgwsJp.7DOLTHSruJe/6RcB.Hiavy50yMfae/r28m' , '0605557802', 
				'cheiksiramakankeita@gmail.com', '57 Boulevard de l\'Yerres', 'Evry', '91000', NOW(), NOW());

INSERT INTO partenaire(partenaire_siret, partenaire_nom, partenaire_mot_de_passe_hash, partenaire_telephone, partenaire_email, 
						partenaire_adresse, partenaire_ville, partenaire_code_postal, partenaire_derniere_connexion, partenaire_creation)
		VALUES('123456781', 'Immo', '$2y$10$4/eztlkOaxPR/c79Huad6OKScm6RzvyLBY0YQwfwsKevWxTr9hK3S', '0605557803',
				'infamousimmo@gmail.com', '9 Rue du Caire', 'Paris', '75002', NOW(), NOW());

INSERT INTO partenaire(partenaire_siret, partenaire_nom, partenaire_mot_de_passe_hash, partenaire_telephone, partenaire_email, 
						partenaire_adresse, partenaire_ville, partenaire_code_postal, partenaire_derniere_connexion, partenaire_creation)
		VALUES('123456782', 'Prop', '$2y$10$h88XCYfSvdy15JHTIC2LnuCnvJuJl2XQtHhYCp44CKzO/resijYaK', '0605557804',
				'prop@gmail.com', '11 Rue Jarry', 'Paris', '75010', NOW(), NOW());

INSERT INTO jeune(jeune_nom, jeune_prenom, jeune_mot_de_passe_hash, jeune_telephone, jeune_email, jeune_adresse, jeune_ville, 
					jeune_code_postal, jeune_derniere_connexion, jeune_creation)
		VALUES('Benoit', 'Florian', '$2y$10$EDVmYoKt7APzwKd2OXrUX./ehaiHm29n1LAyhfAV0hZ5FEhTeCxWG', '0605557805',
				'floben@gmail.com', '51 Rue des Vinaigriers', 'Paris', '75010', NOW(), NOW());

INSERT INTO jeune(jeune_nom, jeune_prenom, jeune_mot_de_passe_hash, jeune_telephone, jeune_email, jeune_adresse, jeune_ville, 
					jeune_code_postal, jeune_derniere_connexion, jeune_creation)
		VALUES('Badri', 'Brahim', '$2y$10$HHdlYiDs/CRV72WEOUqX0./6cScE/CcTIkwl.06/IbPxiHF6IP1au', '0605557806',
				'badbra@gmail.com', '51 Rue des Vinaigriers', 'Paris', '75010', NOW(), NOW());

INSERT INTO formation(formation_nom, formation_creation) VALUES('Dépannage informatique', NOW());
INSERT INTO formation(formation_nom, formation_creation) VALUES('Développement', NOW());
INSERT INTO formation(formation_nom, formation_creation) VALUES('Réseau', NOW());

INSERT INTO offre(partenaire_id, formation_id, offre_nom, offre_description, offre_debut, offre_fin, offre_creation)
		VALUES(1, 1, 'Formation d\'Été', 'bla bla bla bla bla bla bla bla bla bla', '2018-07-01', '2018-08-01', NOW());

INSERT INTO offre(partenaire_id, formation_id, offre_nom, offre_description, offre_debut, offre_fin, offre_creation)
		VALUES(1, 2, 'Formation d\'Automne', 'bla bla bla bla bla bla bla bla bla bla', '2018-10-01', '2018-11-01', NOW());

INSERT INTO offre(partenaire_id, formation_id, offre_nom, offre_description, offre_debut, offre_fin, offre_creation)
		VALUES(2, 3, 'Formation d\'Hiver', 'bla bla bla bla bla bla bla bla bla bla', '2019-01-01', '2019-02-01', NOW());