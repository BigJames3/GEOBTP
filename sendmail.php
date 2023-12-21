<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Adresse e-mail de destination
    $to = "infos@geobtp.net";

    // Sujet de l'e-mail
    $email_subject = "Nouveau message de formulaire de contact : $subject";

    // Corps de l'e-mail
    $email_body = "Nom: $username\n";
    $email_body .= "E-mail: $email\n";
    $email_body .= "Téléphone: $phone\n";
    $email_body .= "Société: $subject\n";
    $email_body .= "Message:\n$message";

    // En-têtes de l'e-mail
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Envoi de l'e-mail
    $success = mail($to, $email_subject, $email_body, $headers);

    if ($success) {
        // Redirection après envoi réussi
        header('Location: confirmation.php');
        exit();
    } else {
        // Redirection en cas d'échec de l'envoi
        header('Location: erreur_envoi.php');
        exit();
    }
}
?>