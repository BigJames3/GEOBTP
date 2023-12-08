<?php
// Votre code de connexion à la base de données PDO ici
require_once 'connexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Récupération des données pour l'ID spécifié depuis la base de données
    $stmt = $pdo->prepare("SELECT * FROM rapport2023 WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $donnees = $stmt->fetch(PDO::FETCH_ASSOC);

    // Affichage des données spécifiques à l'ID
    if ($donnees) {
            $id = $donnees['id'];
            $nom = $donnees['entreprise'];
            $email = $donnees['adresse_mail'];
       // echo "<p>ID : " . $donnees['id'] . "</p>"; // Affichage de l'ID pour vérification
        //echo "<p>Nom : " . $donnees['entreprise'] . "</p>";
        //echo "<p>Email : " . $donnees['adresse_mail'] . "</p>";
        // Afficher d'autres champs...
        // Afficher d'autres champs...
    } else {
        echo "Aucune donnée trouvée pour cet ID.";
    }
} else {
    echo "ID non spécifié.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Affichage des données dans une vue HTML</title>
    <!-- Ajoutez ici vos balises meta, CSS ou scripts -->
</head>
<body>
    <h2>Données récupérées depuis la base de données</h2>
    <div>
        <p>ID : <?php echo $id; ?></p>
        <p>Nom de l'entreprise : <?php echo $nom; ?></p>
        <p>Adresse email : <?php echo $email; ?></p>
        <!-- Affichez d'autres champs de la même manière -->
    </div>
</body>
</html>