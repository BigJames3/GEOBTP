<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $fullname = $_POST['fullname'];
    $company = $_POST['company'];
    $phone = $_POST['phone'];
    $division = $_POST['division'];
    $message = $_POST['message'];

    // Envoi des données par e-mail
    $to = "infos@geobtp.net";
    $subject = "Nouveau message de formulaire de contact";

    $email_content = "Nom & Prénom: $fullname\n";
    $email_content .= "Société: $company\n";
    $email_content .= "Téléphone: $phone\n";
    $email_content .= "Division: $division\n";
    $email_content .= "Message:\n$message";

    $headers = "From: $to";

    mail($to, $subject, $email_content, $headers);

    // Redirection après l'envoi
    header('Location: confirmation.php');
    exit();
}
?>