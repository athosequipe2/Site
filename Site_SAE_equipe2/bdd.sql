DROP TABLE Entreprise;
DROP TABLE Tuteur;
DROP TABLE Formation;
DROP TABLE Personnel;
DROP TABLE Etudiant;
DROP TABLE Stage;
DROP TABLE Document;
DROP TABLE BOS;
DROP TABLE Commentaire;
DROP TABLE login;


CREATE TABLE Entrerpise(
   Entreprise_ID INT,
   Nom VARCHAR(50),
   Description VARCHAR(500),
   Adresse VARCHAR(300),
   Telephone INT,
   Lieux VARCHAR(150),
   PRIMARY KEY(Entreprise_ID)
);

CREATE TABLE Tuteur(
   Tuteur_ID INT,
   Nom VARCHAR(50),
   Prenom VARCHAR(50),
   Contact VARCHAR(50),
   Entreprise_ID INT NOT NULL,
   PRIMARY KEY(Tuteur_ID),
   FOREIGN KEY(Entreprise_ID) REFERENCES Entrerpise(Entreprise_ID)
);


CREATE TABLE Formation(
   Formation_ID INT,
   Departement VARCHAR(50),
   Composante VARCHAR(50),
   PRIMARY KEY(Formation_ID)
);

CREATE TABLE Personnel(
   Personnel_ID INT,
   Nom VARCHAR(50),
   Prenom VARCHAR(50),
   Mail VARCHAR(100),
   Visibility_flag boolean,
   Role VARCHAR(50),
   Formation_ID INT,
   PRIMARY KEY(Personnel_ID),
   FOREIGN KEY(Formation_ID) REFERENCES Formation(Formation_ID)
);

CREATE TABLE Etudiant(
   Student_ID INT,
   Nom VARCHAR(50),
   Prenom VARCHAR(50),
   Mail VARCHAR(100),
   Stage_detention boolean,
   Visibility_flag boolean,
   Groupe VARCHAR(50),
   Personnel_ID INT NOT NULL,
   Entreprise_ID INT NOT NULL,
   Formation_ID INT NOT NULL,
   PRIMARY KEY(Student_ID),
   FOREIGN KEY(Personnel_ID) REFERENCES Personnel(Personnel_ID),
   FOREIGN KEY(Entreprise_ID) REFERENCES Entrerpise(Entreprise_ID),
   FOREIGN KEY(Formation_ID) REFERENCES Formation(Formation_ID)
);

CREATE TABLE Stage(
   Stage_ID INT,
   Mission VARCHAR(500),
   Année INT,
   Duree INT,
   Gratification boolean,
   Teletravail INT,
   Personnel_ID INT NOT NULL,
   Student_ID INT NOT NULL,
   Tuteur_ID INT NOT NULL,
   PRIMARY KEY(Stage_ID),
   FOREIGN KEY(Personnel_ID) REFERENCES Personnel(Personnel_ID),
   FOREIGN KEY(Student_ID) REFERENCES Etudiant(Student_ID),
   FOREIGN KEY(Tuteur_ID) REFERENCES Tuteur(Tuteur_ID)
);

CREATE TABLE Document(
   Document_ID INT,
   Type VARCHAR(50),
   Date_heure DATETIME,
   URL VARCHAR(150),
   Version INT,
   Student_ID INT NOT NULL,
   PRIMARY KEY(Document_ID),
   FOREIGN KEY(Student_ID) REFERENCES Etudiant(Student_ID)
);

CREATE TABLE BOS(
   BOS_ID INT,
   Status VARCHAR(50),
   BOS_Flag boolean,
   Document_ID INT NOT NULL,
   PRIMARY KEY(BOS_ID),
   UNIQUE(Document_ID),
   FOREIGN KEY(Document_ID) REFERENCES Document(Document_ID)
);

CREATE TABLE Commentaire(
   Commentaire_ID INT,
   Visibilite_flag INT,
   Vue_flag boolean,
   Commentaire VARCHAR(500),
   Personnel_ID INT NOT NULL,
   Document_ID INT NOT NULL,
   PRIMARY KEY(Commentaire_ID),
   FOREIGN KEY(Personnel_ID) REFERENCES Personnel(Personnel_ID),
   FOREIGN KEY(Document_ID) REFERENCES Document(Document_ID)
);

CREATE TABLE login(
   User_ID INT,
   Password VARCHAR(50),
   Username VARCHAR(50),
   Role boolean,
   PRIMARY KEY(User_ID)
);

INSERT INTO login (User_ID, Password, Username,Role)
 VALUES (1, 'azerty', 'admin','true');
INSERT INTO login (User_ID, Password, Username,Role)
 VALUES (2, 'qwerty', 'prof','true');
INSERT INTO login (User_ID, Password, Username,Role)
 VALUES (3, 'passw', 'secrétariat','true');
INSERT INTO login (User_ID, Password, Username,Role)
 VALUES (4, 'mdp', 'étudiant','false');

INSERT INTO Commentaire (Commentaire_ID, Visibilite_flag, Vue_flag,Commentaire,Personnel_ID,Document_ID)
 VALUES (1, 0, 'true','mauvais',1,1);
INSERT INTO Commentaire (Commentaire_ID, Visibilite_flag, Vue_flag,Commentaire,Personnel_ID,Document_ID)
 VALUES (2, 0, 'true','Trés bon',1,0);
INSERT INTO Commentaire (Commentaire_ID, Visibilite_flag, Vue_flag,Commentaire,Personnel_ID,Document_ID)
 VALUES (3, 1, 'true','A changer',0,2);
INSERT INTO Commentaire (Commentaire_ID, Visibilite_flag, Vue_flag,Commentaire,Personnel_ID,Document_ID)
 VALUES (4, 1, 'true','A refaire',2,3);

 INSERT INTO Tuteur (Tuteur_ID, Nom, Prenom ,Contact , Entreprise_ID)
 VALUES (1, 'Chami', 'Charle','Chami.Charle@gmail.com');
INSERT INTO Tuteur (Tuteur_ID, Nom, Prenom ,Contact , Entreprise_ID)
 VALUES (2, 'Dupont', 'Martin','Dupont.Martin@gmail.com');
INSERT INTO Tuteur (Tuteur_ID, Nom, Prenom ,Contact , Entreprise_ID)
 VALUES (3, 'Mouton', 'robert','Mouton.robert@gmail.com');
INSERT INTO Tuteur (Tuteur_ID, Nom, Prenom ,Contact , Entreprise_ID)
 VALUES (4, 'Pierre', 'Fred','Pierre.Fred@gmail.com');

INSERT INTO Entreprise(Entreprise_ID, Nom, Description, Adresse, Telephone, Lieux)
    VALUES(1,'Microsoft','Developper Web','rue des chaussettes',911,'Paris');
INSERT INTO Entreprise(Entreprise_ID, Nom, Description, Adresse, Telephone, Lieux)
    VALUES(2,'SNCF','Gestion de BDD','rue des chaussettes',444,'Paris');
INSERT INTO Entreprise(Entreprise_ID, Nom, Description, Adresse, Telephone, Lieux)
    VALUES(3,'Free','Administrateur Réseaux','rue des chaussettes',777,'Paris');
INSERT INTO Entreprise(Entreprise_ID, Nom, Description, Adresse, Telephone, Lieux)
    VALUES(4,'DICE company','Developper Web','rue des pouetpouettes',667,'Montréal');
INSERT INTO Entreprise(Entreprise_ID, Nom, Description, Adresse, Telephone, Lieux)
    VALUES(5,'Google','Developper Web','rue des pouetpouettes',999,'New york');
INSERT INTO Entreprise(Entreprise_ID, Nom, Description, Adresse, Telephone, Lieux)
    VALUES(6,'Twitter','Gestion de BDD','rue des pouetpouettes',789,'Tokyo');
INSERT INTO Entreprise(Entreprise_ID, Nom, Description, Adresse, Telephone, Lieux)
    VALUES(7,'Soundcloud','Administrateur Réseaux','rue des pouetpouettes',555,'Tokyo');
INSERT INTO Entreprise(Entreprise_ID, Nom, Description, Adresse, Telephone, Lieux)
    VALUES(8,'Twitch','Administrateur Réseaux','rue des pouetpouettes',445,'Paris');
