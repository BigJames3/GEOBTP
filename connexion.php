
<?php
    // Fichier de connexion (connexion.php)
    $dsn = 'mysql:host=localhost;dbname=databasegeobtp';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
        die(); // Arrêter l'exécution en cas d'erreur de connexion
    }
?>