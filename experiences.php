<?php require 'sessionStart.php';?>
<?php
if (isset($_GET['langue'])) {
    $langue = htmlspecialchars($_GET['langue']); // Sécurisation de la donnée
}
$titlePage = 'A propos de moi';
require 'head.php';
?>
<body class="body-projets">
<?php require 'header.php'?>
    <section class="section-main-experiences">
            <div class="container-experiences">
        <?php if (!isset($_SESSION['user_email'])): ?>
                <div class="succesInscription">
                    <div class="msg-echecConnexion">
                    <p>Se connecter pour pouvoir accéder à ces informations</p>
                    </div>
                    <a href="login.php" class="btnRedirection">Se connecter</a>
                </div>
        <?php endif; ?>
        <?php if(isset($_SESSION['user_group']) && ($_SESSION['user_group']) === "admin"): ?>
            <div class="presentation-entreprise">
                <h3>minstère des Armées / <span>D</span>irection des <span>R</span>essources <span>H</span>umaine de l'<span>A</span>rmée de <span>T</span>erre</h3>
            </div>
                <div class="experience experience-siteRH-terre">
                    <div class="ancien-site"></div>
                    <div class="nouveau-site"></div>
                    <div class="contenu-experience">
                        <span class="ancienne-version"><i class="fa-regular fa-arrow-left"></i> Version<br>Ancienne</span>
                        <div class="content-experience-description">
                            <p>Conception du futur site Rh-terre qui devra respecter le système de design de l'État (DSFR) afin qu'il soit conforme aux normes des sites de l'Etat. Ce projet m'a permis d'apprendre à utilisé un CMS (système de gestion de contenu), mettre en place un environnement de virtualisation avec des VM (machines virtuels) afin de pouvoir modifier le site sans perturber le site de Pré PRODuction (PPROD).</p>
                            <div class="icones-experience">
                                <div class="icone-experience icone-competence-experience_1"></div>
                                <div class="icone-experience icone-competence-experience_2"></div>
                                <div class="icone-experience icone-competence-experience_3"></div>
                                <div class="icone-experience icone-competence-experience_4"></div>
                                <div class="icone-experience icone-competence-experience_5"></div>
                            </div>
                        </div>
                        <span class="nouvelle-version"> Version<br>Futur<i class="fa-regular fa-arrow-right"></i></span>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </section>
<?php require 'footer.php';?>