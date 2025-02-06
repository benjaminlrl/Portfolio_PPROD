<?php
require 'sessionStart.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $name = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
    $message = htmlspecialchars($_POST["message"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Adresse email invalide !");
    }

    // Destinataire
    $to = "contact@benjaminlorieul.fr"; // Remplace par ton email
    $subject = "Message de $name via le formulaire de contact";
    
    // Corps de l'email
    $body = "Nom : $name\nEmail : $email\nMessage : $message";

    // En-têtes de l'email
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
               "CC: $email"; 

    // Envoi de l'email
    if (mail($to, $subject, $body, $headers)) {
        header("Location: succesEmail.php");
        exit;
    } else {
        header("Location: echecEmail.php");
        exit;
    }
}
?>


