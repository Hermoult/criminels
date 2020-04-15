<?php

/*     // Variables Database */
    $DB_NAME = "criminel";
    $DB_DSN = "mysql:host=localhost;dbname=".$DB_NAME;
    $DB_USER = "adrien";
    $DB_PASSWORD = "adrien";

    // Connexion Database
    try {
        $db = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (\Throwable $th) {
        die('error sql connection');
    } 
    
    ?>