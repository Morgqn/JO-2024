#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Evenement
#------------------------------------------------------------

CREATE TABLE Evenement(
        id_Evenement int (11) Auto_increment  NOT NULL ,
        id_Lieu      Int ,
        PRIMARY KEY (id_Evenement )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Lieu
#------------------------------------------------------------

CREATE TABLE Lieu(
        id_Lieu int (11) Auto_increment  NOT NULL ,
        PRIMARY KEY (id_Lieu )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Pays
#------------------------------------------------------------

CREATE TABLE Pays(
        id_Pays int (11) Auto_increment  NOT NULL ,
        PRIMARY KEY (id_Pays )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Sport
#------------------------------------------------------------

CREATE TABLE Sport(
        id_Sport int (11) Auto_increment  NOT NULL ,
        PRIMARY KEY (id_Sport )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Equipe
#------------------------------------------------------------

CREATE TABLE Equipe(
        id_Equipe int (11) Auto_increment  NOT NULL ,
        id_Pays   Int ,
        PRIMARY KEY (id_Equipe )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Media
#------------------------------------------------------------

CREATE TABLE Media(
        id_Media     int (11) Auto_increment  NOT NULL ,
        id_Evenement Int ,
        PRIMARY KEY (id_Media )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Classement
#------------------------------------------------------------

CREATE TABLE Classement(
        id_Classement int (11) Auto_increment  NOT NULL ,
        PRIMARY KEY (id_Classement )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Medaille
#------------------------------------------------------------

CREATE TABLE Medaille(
        id_Medaille int (11) Auto_increment  NOT NULL ,
        PRIMARY KEY (id_Medaille )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: User
#------------------------------------------------------------

CREATE TABLE User(
        id_Personne Int NOT NULL ,
        PRIMARY KEY (id_Personne )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Personne
#------------------------------------------------------------

CREATE TABLE Personne(
        id_Personne int (11) Auto_increment  NOT NULL ,
        PRIMARY KEY (id_Personne )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Sportif
#------------------------------------------------------------

CREATE TABLE Sportif(
        id_Personne Int NOT NULL ,
        id_Pays     Int ,
        PRIMARY KEY (id_Personne )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Pratiquer
#------------------------------------------------------------

CREATE TABLE Pratiquer(
        id_Sport    Int NOT NULL ,
        id_Personne Int NOT NULL ,
        PRIMARY KEY (id_Sport ,id_Personne )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Appartenir
#------------------------------------------------------------

CREATE TABLE Appartenir(
        id_Equipe   Int NOT NULL ,
        id_Personne Int NOT NULL ,
        PRIMARY KEY (id_Equipe ,id_Personne )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Classer
#------------------------------------------------------------

CREATE TABLE Classer(
        id_Pays       Int NOT NULL ,
        id_Classement Int NOT NULL ,
        PRIMARY KEY (id_Pays ,id_Classement )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Recompenser
#------------------------------------------------------------

CREATE TABLE Recompenser(
        id_Personne Int NOT NULL ,
        id_Medaille Int NOT NULL ,
        PRIMARY KEY (id_Personne ,id_Medaille )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Participer2
#------------------------------------------------------------

CREATE TABLE Participer2(
        id_Evenement Int NOT NULL ,
        id_Personne  Int NOT NULL ,
        PRIMARY KEY (id_Evenement ,id_Personne )
)ENGINE=InnoDB;

ALTER TABLE Evenement ADD CONSTRAINT FK_Evenement_id_Lieu FOREIGN KEY (id_Lieu) REFERENCES Lieu(id_Lieu);
ALTER TABLE Equipe ADD CONSTRAINT FK_Equipe_id_Pays FOREIGN KEY (id_Pays) REFERENCES Pays(id_Pays);
ALTER TABLE Media ADD CONSTRAINT FK_Media_id_Evenement FOREIGN KEY (id_Evenement) REFERENCES Evenement(id_Evenement);
ALTER TABLE User ADD CONSTRAINT FK_User_id_Personne FOREIGN KEY (id_Personne) REFERENCES Personne(id_Personne);
ALTER TABLE Sportif ADD CONSTRAINT FK_Sportif_id_Personne FOREIGN KEY (id_Personne) REFERENCES Personne(id_Personne);
ALTER TABLE Sportif ADD CONSTRAINT FK_Sportif_id_Pays FOREIGN KEY (id_Pays) REFERENCES Pays(id_Pays);
ALTER TABLE Pratiquer ADD CONSTRAINT FK_Pratiquer_id_Sport FOREIGN KEY (id_Sport) REFERENCES Sport(id_Sport);
ALTER TABLE Pratiquer ADD CONSTRAINT FK_Pratiquer_id_Personne FOREIGN KEY (id_Personne) REFERENCES Personne(id_Personne);
ALTER TABLE Appartenir ADD CONSTRAINT FK_Appartenir_id_Equipe FOREIGN KEY (id_Equipe) REFERENCES Equipe(id_Equipe);
ALTER TABLE Appartenir ADD CONSTRAINT FK_Appartenir_id_Personne FOREIGN KEY (id_Personne) REFERENCES Personne(id_Personne);
ALTER TABLE Classer ADD CONSTRAINT FK_Classer_id_Pays FOREIGN KEY (id_Pays) REFERENCES Pays(id_Pays);
ALTER TABLE Classer ADD CONSTRAINT FK_Classer_id_Classement FOREIGN KEY (id_Classement) REFERENCES Classement(id_Classement);
ALTER TABLE Recompenser ADD CONSTRAINT FK_Recompenser_id_Personne FOREIGN KEY (id_Personne) REFERENCES Personne(id_Personne);
ALTER TABLE Recompenser ADD CONSTRAINT FK_Recompenser_id_Medaille FOREIGN KEY (id_Medaille) REFERENCES Medaille(id_Medaille);
ALTER TABLE Participer2 ADD CONSTRAINT FK_Participer2_id_Evenement FOREIGN KEY (id_Evenement) REFERENCES Evenement(id_Evenement);
ALTER TABLE Participer2 ADD CONSTRAINT FK_Participer2_id_Personne FOREIGN KEY (id_Personne) REFERENCES Personne(id_Personne);
