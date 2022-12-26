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

insert 