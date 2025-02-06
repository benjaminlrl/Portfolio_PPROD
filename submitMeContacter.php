<?php
require 'session_start()';

ini_set( 'display_errors', 1);
error_reporting( E_ALL );
$from = "contact@benjaminlorieul.fr";
$to ="contact@benjaminlorieul.fr";
$subject = "Vérification PHP Mail";
$message = "PHP mail marche";
$headers = "From:" . $from;
mail($to,$subject,$message, $headers);
echo "L'email a été envoyé.";
?>


