CREATE TABLE Utilisateur{
	idUser  	INT PRIMARY KEY AUTOINCREMENT NOT NULL,
	libelle 	VARCHAR(100) NOT NULL,
	description	VARCHAR(100),
	siteWeb 	VARCHAR(100),
	tel			VARCHAR(100),
	mail 		VARCHAR(100)
	-- zoneGeo
};
	
CREATE TABLE Contact{
	idUser1		INT,
	idUser2		INT,
	PRIMARY KEY (idUser1, idUser2),
	FOREIGN KEY (idUser1) REFERENCES Utilisateur(idUser),
	FOREIGN KEY (idUser2) REFERENCES Utilisateur(idUser)
}
	
CREATE TABLE Booker{
	idBooker	INT PRIMARY KEY NOT NULL,
	pourceCom	INT,
	tailleGrp	VARCHAR(100),
	stylePref	VARCHAR(100),
	FOREIGN KEY (idBooker) REFERENCES Utilisateur(idUser)
};
	
CREATE TABLE Groupe{
	idGroupe	INT PRIMARY KEY NOT NULL,
	style 		VARCHAR(100),
	taille 		VARCHAR(100),
	matDispo	VARCHAR(100),
	FOREIGN KEY (idGroupe) REFERENCES Utilisateur(idUser)
};

CREATE TABLE BooGroupe{
	idGroupe	INT,
	idBooker	INT,
	PRIMARY KEY (idGroupe, idBooker),
	FOREIGN KEY (idGroupe) REFERENCES Groupe(idGroupe),
	FOREIGN KEY (idBooker) REFERENCES Booker(idBooker)
}



CREATE TABLE Organisateur{
	idOrga 		INT PRIMARY KEY NOT NULL,
	nom			VARCHAR(100),
	prenom		VARCHAR(100),
	FOREIGN KEY (idOrga) REFERENCES Utilisateur(idUser)
};


CREATE TABLE Evenement{
	idEvenement	INT PRIMARY KEY AUTOINCREMENT NOT NULL,
	idOrga		INT NOT NULL,
	nom			VARCHAR(100),
	dateDeb		DATE,
	dateFin		DATE,
	periodeProg VARCHAR(100),
	hebergement	VARCHAR(100),
	catering	VARCHAR(100),
	remunerer 	BOOLEAN,
	matosDipo	VARCHAR(100)
	FOREIGN KEY (idOrga) REFERENCES Organisateur(idOrga)
};

CREATE TABLE Lieu{
	idLieu 		INT,
	adresse		VARCHAR(100)
}

CREATE TABLE Salle{
	idLieu		INT,
	idProprio	INT,
	carte 		VARCHAR(100),
	description	VARCHAR(100),
	bar			BOOLEAN,
	FOREIGN KEY (idProprio) REFERENCES Organisateur(idOrga),

}

CREATE TABLE Scene{
	idScene 	INT PRIMARY KEY AUTOINCREMENT NOT NULL,
	idProprio	INT,
	idLieu		INT,
	nomScene	VARCHAR(100),
	largeur		INT,
	hauteur		INT,
	longueur 	INT,
	avantScene	BOOLEAN,
	plan		VARCHAR(100),
	capaPub		INT,
	FOREIGN KEY (idProprio) REFERENCES Organisateur(idOrga),
	FOREIGN KEY (idLieu) REFERENCES Lieu(idLieu)
};

CREATE TABLE Passage{
	idGroupe	INT,
	idEvenement	INT,
	idScene		INT,
	datePass	DATE,
	PRIMARY KEY(idGroupe, idEvenement, idScene),
	FOREIGN KEY (idGroupe) REFERENCES Groupe(idGroupe),
	FOREIGN KEY (idEvenement) REFERENCES Evenement(idEvenement),
	FOREIGN KEY (idScene) REFERENCES Scene(idScene)

};
