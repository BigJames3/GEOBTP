<?php
// Connexion à la base de données avec PDO
// Remplacez ces informations par vos propres informations de connexion
$dsn = 'mysql:host=localhost;dbname=databasegeobtp';
$username = 'root';
$password = '';
$serveur = '';
try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer les données du formulaire
    $entreprise = $_POST['entreprise'];
    $adresse_mail = $_POST['adresse_mail'];
    $titre_rapport = $_POST['titre_rapport'];
    $lieux_des_traveaux = $_POST['lieux_des_traveaux'];
    $date_enregistrement = $_POST['date_enregistrement'];
    $correspondents_name = $_POST['correspondents_name'];
    $numero_correspondant = $_POST['numero_correspondant'];
    $abreviation = $_POST['abreviation'];

    // Insérer les données dans la base de données
    $stmt = $pdo->prepare("INSERT INTO rapport2023 (entreprise, adresse_mail, titre_rapport, lieux_des_traveaux, date_enregistrement, correspondents_name, numero_correspondant, abreviation) VALUES (:entreprise, :adresse_mail, :titre_rapport, :lieux_des_traveaux, :date_enregistrement, :correspondents_name, :numero_correspondant, :abreviation )");
    $stmt->bindParam(':entreprise', $entreprise);
    $stmt->bindParam(':adresse_mail', $adresse_mail);
    $stmt->bindParam(':titre_rapport', $titre_rapport);
    $stmt->bindParam(':lieux_des_traveaux', $lieux_des_traveaux);
    $stmt->bindParam(':date_enregistrement', $date_enregistrement);
    $stmt->bindParam(':correspondents_name', $correspondents_name);
    $stmt->bindParam(':numero_correspondant', $numero_correspondant);
    $stmt->bindParam(':abreviation', $abreviation);
    $stmt->execute();

    // Récupérer l'ID de la dernière insertion
    $lastId = $pdo->lastInsertId();

    // Générer les codes
    $code1 = $abreviation . '/' . $lastId . '/' . $entreprise . '/' . date('Y');
    $code2 = uniqid() . '/' . date('Ymd');

    // Mettre à jour la ligne avec les codes générés
    $updateStmt = $pdo->prepare("UPDATE rapport2023 SET code1 = :code1, code2 = :code2 WHERE id = :lastId");
    $updateStmt->bindParam(':code1', $code1);
    $updateStmt->bindParam(':code2', $code2);
    $updateStmt->bindParam(':lastId', $lastId);
    $updateStmt->execute();

    //echo "Données enregistrées avec succès.";
    // Redirection vers la page d'affichage
    header("Location: rapport_afficher_donnees.php?id=$lastId");
    exit(); // Assurez-vous de terminer le script après la redirection

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>