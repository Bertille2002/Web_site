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
    Skills varchar(255),
    IMG_src varchar(500)
);

INSERT INTO Skills (ID,Skills,IMG_src) 
VALUES 
    (1,'Full Stack Development','https://www.fullstack.co.za/img/fullstack-logo.png'),
    (2,'Machine Learning','https://upload.wikimedia.org/wikipedia/commons/d/d5/Hey_Machine_Learning_Logo.png'),
    (3,'Cloud Computing','https://img.favpng.com/8/14/19/cloud-computing-computer-icons-cloud-storage-png-favpng-L6Msg7y7MaH4gzB6Y7FXtq71t.jpg'),
    (4,'C/C++ Developer','https://upload.wikimedia.org/wikipedia/commons/thumb/1/18/ISO_C%2B%2B_Logo.svg/1822px-ISO_C%2B%2B_Logo.svg.png'),
    (5,'API Design et Développement','https://media.licdn.com/dms/image/C5112AQF49DOfOhCFSA/article-cover_image-shrink_720_1280/0/1579816811751?e=2147483647&v=beta&t=e47GGJDzoqsm4dl3qV2EjVWrxyMzIwsPmEE9Gywo83w');

CREATE TABLE Technologies (
    ID int AUTO_INCREMENT PRIMARY KEY,
    skill_id INT,
    technology_name VARCHAR(255),
    FOREIGN KEY (skill_id) REFERENCES Skills(ID)
);

INSERT INTO Technologies (skill_id, technology_name) 
VALUES
    (1, 'HTML, CSS, JavaScript'),
    (1, 'Frameworks et bibliothèques JavaScript'),
    (1, 'Languages de codes Backend'),
    (1, 'Bases de données (SQL et NoSQL)'),
    (2, 'Python, R'),
    (2, 'Conception et entraînement de modèles'),
    (2, 'Maths et Stats appliquées'),
    (3, 'AWS, Google Cloud'),
    (3, 'Virtualisation et conteneurisation'),
    (3, 'Conception architecture cloud'),
    (3, 'Sécurisation de cloud'),
    (4, 'C, C++'),
    (4, 'Low-level development bibliothèques'),
    (4, 'Systèmes intégrés'),
    (4, 'Prototypes Arduino et Raspberry Pi'),
    (5, 'REST APIs'),
    (5, 'Maîtrise protocoles/ standards API'),
    (5, 'Conception et documentation API'),
    (5, 'Sécurisation APIs'),
    (5, 'Windows API');

CREATE TABLE info(
    ID int AUTO_INCREMENT PRIMARY KEY,
    First_name varchar(255),
    Last_name varchar(255),
    Age int,
    Diploma varchar(255)
);

INSERT INTO info (First_name, Last_name, Age, Diploma) 
VALUES ('Natasha', 'Garcia', 28, "Master expert en ingénierie et développement d'applications au MIT");