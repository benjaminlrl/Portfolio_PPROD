<?php require 'sessionStart.php';
if (isset($_GET['langue'])) {
    $langue = htmlspecialchars($_GET['langue']); // Sécurisation de la donnée
}
$titlePage = 'A propos de moi';
require 'head.php';
?>
<body class="body-projets">
<?php require 'header.php'?>
    <section class="section-main-presentationNdlr">
        <div class="container-projet">
                <div class="img-presentation formulaireCBetIBAN"></div>
                <div class="content-projet">
                    <div class="title-projet">
                        <i class="fa-regular fa-gamepad"></i>
                        <h3>Chiffoumi</h3>
                    </div>
                    <?php if($langue === "fr"): ?>
                    <p>Dans le cadre d'un projet scolaire, j'ai d'abord créé un jeu de chiffoumi en mode console pour aborder la logique de la programmation structurée. Le joueur affronte une machine qui choisit aléatoirement entre "Pierre", "Feuille" et "Ciseaux". Ensuite, j'ai ajouté une interface visuelle pour rendre le jeu plus interactif, avec des images représentant chaque choix et un affichage graphique des résultats</p>
                    <?php endif ?>
                    <?php if($langue === "en"): ?>
                    <p>As part of a school project, I first created a rock-paper-scissors game in console mode to explore the logic of structured programming. The player faces a machine that randomly selects between "Rock," "Paper," and "Scissors." Later, I added a visual interface to make the game more interactive, with images representing each choice and a graphical display of the results</p>
                    <?php endif ?>
                    <a href="https://github.com/benjaminlrl/2024_memory_tp">En savoir plus <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
    </section>
<?php require 'footer.php' ?>