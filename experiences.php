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
    <section class="section-main-experiences">  
            <div class="container-experiences">
            <div class="presentation-entreprise">
                <h3>minstère des Armées / DRHAT</h3>
            </div>
                <div class="experience experience-siteRH-terre">
                    <div class="ancien-site"></div>
                    <div class="nouveau-site"></div>
                    <div class="contenu-experience">
                        <span class="ancienne-version"><i class="fa-regular fa-arrow-left"></i>Ancienne version</span>
                        <p>Conception du futur site Rh-terre qui devra respecter la charte graphique dsfr afin qu'il soit conforme au normes des sites de l'Etat. Ce projet m'a permis d'apprendre à utilisé un CMS (système de gestion de contenu), mettre en place des VM (machines virtuels) afin de pouvoir modifier le site sans perturber le site de PPROD</p>
                        <span class="nouvelle-version">Futur version<i class="fa-regular fa-arrow-right"></i></span>
                    </div>
                </div>
            </div>           
    </section>
<?php require 'footer.php';?>