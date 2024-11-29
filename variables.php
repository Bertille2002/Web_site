<?php

$EntreprisesStatement = $mysqlClient->prepare('SELECT * FROM Entreprises');
$EntreprisesStatement->execute();
$Entreprises = $EntreprisesStatement->fetchAll();

$SkillsStatement = $mysqlClient->prepare('SELECT * FROM Skills');
$SkillsStatement->execute();
$Skills = $SkillsStatement->fetchAll();

$TechnologiesStatement = $mysqlClient->prepare('SELECT * FROM Technologies');
$TechnologiesStatement->execute();
$Technologies = $TechnologiesStatement->fetchAll();

$infoStatement = $mysqlClient->prepare('SELECT * FROM info');
$infoStatement->execute();
$info = $infoStatement->fetchAll();