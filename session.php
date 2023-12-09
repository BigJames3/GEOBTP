<?php
// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: account.php"); // Redirection vers la page de connexion si l'utilisateur n'est pas connecté
    exit;
}
// Le reste du contenu de la page formulaire.php ici
?>