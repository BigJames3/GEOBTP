<?php
// Vérifie si l'utilisateur est connecté
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // Affichage du menu supplémentaire pour un utilisateur connecté
    echo '<a href="profil.php">Profil</a>'; // Exemple de lien vers le profil utilisateur
    echo '<a href="deconnexion.php">Déconnexion</a>'; // Lien pour se déconnecter
} else {
    // Affichage d'un menu pour les utilisateurs non connectés
    echo '<a href="connexion.php">Connexion</a>'; // Lien vers la page de connexion
    echo '<a href="inscription.php">Inscription</a>'; // Lien vers la page d'inscription
}
?>