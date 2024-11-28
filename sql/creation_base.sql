CREATE DATABASE site_web;

CREATE TABLE 'Entreprises'(
    ID int,
    Entreprise varchar,
    Projet varchar
)

INSERT INTO 'Entreprises'(
    VALUES(
        ("1","Royal Caribbean Int","Restaurant Flottant Autonome"),
        ("2","Ecoventura","Hôtel Flottant Écologique"),
        ("3","The Walt Disney Company","Bibliothèque du Futur"),
        ("4","Tesla","Eco-Village Intelligent"),
        ("5","SpaceX","Centre Spatial Intéractif")
    )
)

CREATE TABLE 'Skills'(
    ID int,
    Skills varchar
)

INSERT INTO 'Skills'(
    VALUES(
        ("1","Full Stack developper"),
        ("2","Machine Learning"),
        ("3","Cloud Computing"),
        ("4","C/C++ Developer"),
        ("5","API Design et Developpement"),
    )
)

CREATE TABLE 'info'(
    ID int,
    First_name varchar,
    Last_name varchar,
    Age int,
    Diploma varchar
)

INSERT INTO 'info'(
    VALUES(
        ("1","Natasha","Garcia","28","Master expert en ingénierie et développement d'applications au MIT")
    )
)