<?php

$site_webStatement = $mysqlClient->prepare('SELECT * FROM site_web');
$site_webStatement->execute();
$site_web = $site_webStatement->fetchAll();

