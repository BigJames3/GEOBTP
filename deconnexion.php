<?php
session_start();
session_unset();
session_destroy();
header("location: account.php"); // Redirection vers la page de connexion après déconnexion
?>