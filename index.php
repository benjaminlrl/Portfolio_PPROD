<?php require 'sessionStart.php';?>
<?php
if (isset($_GET['langue'])) {
    $langue = htmlspecialchars($_GET['langue']); // Sécurisation de la donnée
}
?>
<?php
$titlePage = 'Benjamin Lorieul - portfolio BTS SIO SLAM';
require 'head.php';
?>
<body class="body-login">
<section class="section-accueil" id="section-accueil">">
<?php require 'header.php';?>
<?php require 'accueil.php';?>
</section>
<?php require 'presentation.php';?>
<?php require 'parcours.php';?>
<?php require 'competences.php';?>
<?php require 'langues.php';?>
<?php require 'certifications.php';?>
<?php require 'footer.php';?>
