<?php require 'sessionStart.php';?>
<?php
if (isset($_GET['langue'])) {
    $langue = htmlspecialchars($_GET['langue']); // Sécurisation de la donnée
}
?>
<?php 
$titlePage = 'A propos de moi';
require 'head.php';
?>
<body class="body-projets">
<?php require 'header.php'?>
    <section class="section-main-portefeuilledecompetences">
            <div class="container-portefeuilledecompetences">
            </div>
    </section>
<?php require 'footer.php';?>