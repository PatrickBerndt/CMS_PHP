<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=CMS', 'CMS', '4mvX5waGgC1ZOG!E', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    return $pdo;
}
catch(PDOException $e) {
    echo 'Probleme mit der Datenbankverbindung...';
    die();
}
