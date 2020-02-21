#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: comments
#------------------------------------------------------------

CREATE TABLE comments(
        id      Int  Auto_increment  NOT NULL ,
        allias  Varchar (50) NOT NULL ,
        message Varchar (150) NOT NULL
	,CONSTRAINT comments_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: users
#------------------------------------------------------------

CREATE TABLE users(
        id        Int  Auto_increment  NOT NULL ,
        lastname  Varchar (50) NOT NULL ,
        firstname Varchar (50) NOT NULL ,
        address   Varchar (50) NOT NULL ,
        zipCode   Int NOT NULL ,
        city      Varchar (50) NOT NULL ,
        mail      Varchar (50) NOT NULL ,
        phone     Int NOT NULL ,
        password  Varchar (50) NOT NULL
	,CONSTRAINT users_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: views
#------------------------------------------------------------

CREATE TABLE views(
        id       Int  Auto_increment  NOT NULL ,
        positive Varchar (50) NOT NULL ,
        negative Varchar (50) NOT NULL
	,CONSTRAINT views_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: appointments
#------------------------------------------------------------

CREATE TABLE appointments(
        id       Int  Auto_increment  NOT NULL ,
        subject  Varchar (50) NOT NULL ,
        dateHour Datetime NOT NULL ,
        id_users Int NOT NULL
	,CONSTRAINT appointments_AK UNIQUE (dateHour)
	,CONSTRAINT appointments_PK PRIMARY KEY (id)

	,CONSTRAINT appointments_users_FK FOREIGN KEY (id_users) REFERENCES users(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: serviceType
#------------------------------------------------------------

CREATE TABLE serviceType(
        id   Int  Auto_increment  NOT NULL ,
        name Varchar (50) NOT NULL
	,CONSTRAINT serviceType_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: contact
#------------------------------------------------------------

CREATE TABLE contact(
        id             Int  Auto_increment  NOT NULL ,
        lastname       Varchar (50) NOT NULL ,
        firstname      Varchar (50) NOT NULL ,
        phone          Int NOT NULL ,
        mail           Varchar (50) NOT NULL ,
        city           Varchar (50) NOT NULL ,
        zipCode        Int NOT NULL ,
        id_serviceType Int NOT NULL
	,CONSTRAINT contact_PK PRIMARY KEY (id)

	,CONSTRAINT contact_serviceType_FK FOREIGN KEY (id_serviceType) REFERENCES serviceType(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: products
#------------------------------------------------------------

CREATE TABLE products(
        id                 Int  Auto_increment  NOT NULL ,
        nameProduct        Varchar (50) NOT NULL ,
        descriptionProduct Varchar (150) NOT NULL ,
        id_serviceType     Int NOT NULL
	,CONSTRAINT products_PK PRIMARY KEY (id)

	,CONSTRAINT products_serviceType_FK FOREIGN KEY (id_serviceType) REFERENCES serviceType(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: bills
#------------------------------------------------------------

CREATE TABLE bills(
        id          Int  Auto_increment  NOT NULL ,
        designation Varchar (200) NOT NULL ,
        amount      Decimal (6,2) NOT NULL ,
        id_users    Int NOT NULL
	,CONSTRAINT bills_PK PRIMARY KEY (id)

	,CONSTRAINT bills_users_FK FOREIGN KEY (id_users) REFERENCES users(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: effectuer
#------------------------------------------------------------

CREATE TABLE effectuer(
        id          Int NOT NULL ,
        id_comments Int NOT NULL
	,CONSTRAINT effectuer_PK PRIMARY KEY (id,id_comments)

	,CONSTRAINT effectuer_views_FK FOREIGN KEY (id) REFERENCES views(id)
	,CONSTRAINT effectuer_comments0_FK FOREIGN KEY (id_comments) REFERENCES comments(id)
)ENGINE=InnoDB;
