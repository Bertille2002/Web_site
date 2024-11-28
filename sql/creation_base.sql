CREATE TABLE Entreprises(
    ID int AUTO_INCREMENT PRIMARY KEY,
    Entreprise varchar(255),
    Projet varchar(255)
);

INSERT INTO Entreprises (ID, Entreprise, Projet) 
VALUES 
    (1, 'Royal Caribbean Int', 'Restaurant Flottant Autonome'),
    (2, 'Ecoventura', 'Hôtel Flottant Écologique'),
    (3, 'The Walt Disney Company', 'Bibliothèque du Futur'),
    (4, 'Tesla', 'Eco-Village Intelligent'),
    (5, 'SpaceX', 'Centre Spatial Intéractif');

CREATE TABLE Skills(
    ID int AUTO_INCREMENT PRIMARY KEY,
    Skills varchar(255)
);

INSERT INTO Skills (Skills) 
VALUES 
    ('Full Stack Developer'),
    ('Machine Learning'),
    ('Cloud Computing'),
    ('C/C++ Developer'),
    ('API Design et Développement');

CREATE TABLE info(
    ID int AUTO_INCREMENT PRIMARY KEY,
    First_name varchar(255),
    Last_name varchar(255),
    Age int,
    Diploma varchar(255)
);

INSERT INTO info (First_name, Last_name, Age, Diploma) 
VALUES ('Natasha', 'Garcia', 28, 'Master expert en ingénierie et développement d\'applications au MIT');