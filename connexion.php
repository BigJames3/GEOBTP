<?php
    // Connexion à la base de données avec PDO
    $host = "localhost"; // Adresse du serveur MySQL
    $dbname = "databasegeobtp";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
    }
    ?>