//ENVOIE DU FORMULAIRE DE LA PAGE DE INDEX
<?php
if (isset($_POST['submit-form'])) {
    $to = "infos@geobtp.net";
    $subject = "Demande depuis le formulaire de contact";
    //echo "Début de l'exécution du script...<br>";
    $division = isset($_POST['division']) ? $_POST['division'] : '';
    $description = isset($_POST['description']) ? $_POST['description'] : '';
    $telephone = isset($_POST['telephone']) ? $_POST['telephone'] : '';
    $mail = isset($_POST['mail']) ? $_POST['mail'] : '';

    echo "Début de l'exécution du script...<br>";
    $message = "Division: $division\n\nDescription: $description\n\nTéléphone: $telephone\n\nEmail: $mail";

    $headers = "From: $mail\r\n";
    $headers .= "Reply-To: $mail\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Envoyer l'e-mail
    $success = mail($to, $subject, $message, $headers);

    if ($success) {
        // Redirection après envoi réussi
        header('Location: index.php?message=Success');
        exit();
    } else {
        // Redirection en cas d'échec de l'envoi
        header('Location: contact.php?message=Failed');
        exit();
    }
}
?>

<?php
/*
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "infos@geobtp.net"; // Adresse e-mail de destination
    $subject = "Nouveau formulaire de contact";

    // Récupération des données du formulaire
    $division = $_POST['division'];
    $description = $_POST['description'];
    $telephone = $_POST['telephone'];
    $mail = $_POST['mail'];

    // Corps du message
    $message = "Division: $division\n\nDescription: $description\n\nTéléphone: $telephone\n\nEmail: $mail";

    // En-têtes de l'e-mail
    $headers = "From: $mail\r\n";
    $headers .= "Reply-To: $mail\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Envoi de l'e-mail
    $success = mail($to, $subject, $message, $headers);

    if ($success) {
        // Redirection après envoi réussi
        header('Location: confirmation.php');
        exit();
    } else {
        // Redirection en cas d'échec de l'envoi
        header('Location: erreur_envoi.php');
        exit();
    }
}*/
?>