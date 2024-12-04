CREATE TABLE Users(
    ID int AUTO_INCREMENT PRIMARY KEY,
    first_name varchar(255),
    last_name varchar(255),
    username varchar(255),
    password varchar(255)
);

INSERT INTO Users (ID, first_name, last_name, username, password) 
VALUES
    (1,'skouik','lepetit','lilSkouik','azerty123'),
    (2,'BROTHERS','monster','Monster_BROTHERS','password123'),
    (3,'tk78','JAWAD','PEGI16','qwerty000'),
    (4,'Natasha','Guarcia','GOAT_Natacha','Sjg_d8GIl85DS'),
    (5,'Titouan','Lefevre','xX_titouGAMING_Xx','titouan123'),
    (6,'Moha','Chafik','zipette_ak47','pa2ralentir'),
    (7,'Valerie','Bakoni','Prosperite_for_Ever92','Envoutement!'),
    (8,'H4ck3r','01010','4861636B657572','m0t2passDifichille'),
    (9,'Norman','Thavault','PEGI16','Mineur_mine-16'),
    (10,'Khla','roubz','khla_killer','ne3ne3'),
    (11,'Flavien','leroux','Depressif78','ceci_est_un_appel_a_laide');
