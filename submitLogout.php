<?php require 'sessionStart.php' ?>
<?php
session_unset();
session_destroy();
header("Location: succesDeconnexion.php"); 
exit();
?>